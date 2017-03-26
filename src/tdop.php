<?php
/**
 Top Down Operator Precedence
 @author Damon Zwolinski <damonz@codeswim.com>
 @copyright Copyright ©2017 Damon Zwolinski, All rights reserved.
 @license MIT
 */


function parse( $source = '' ){
	return new Parser( $source );
}


class Parser {
	public $scope = null;
	public $symbol_table = [];
	public $token = null;
	public $token_nr = 0;
	public $tokens = [];

	public function __construct( $source ){
		$this->source = $source;
	}

	public function new_scope(){
		$s = $this->scope; 
		$this->scope = scope();
		$this->scope->parent = $s;
		return $this->scope;
	}

	public function advance( $id = null ){
		if( $id and isset( $this->token->id ) and $this->token->id !== $id ){
			$this->token->error( 'Expected "'. $id .'".' ); 
		}
		if( $this->token_nr >= count( $this->tokens )){
			$this->token = $this->symbol_table['(end)'];
			return;
		}
		$t = $this->tokens[$this->token_nr];
		$this->token_nr += 1;
		$v = $t->value;
		$a = $t->type;
		if( $a === 'name' ){
			$o = $this->scope->find( $v, $this->symbol_table );
		}elseif( $a === 'operator' ){
			$o = isset( $this->symbol_table[$v] ) ? $this->symbol_table[$v] : null;
			if( ! $o ) $t->error( 'Unknown operator.' );
		}elseif( $a === 'string' or $a === 'number' ){
			$o = $this->symbol_table['(literal)'];
			$a = 'literal';
		}else{
			$t->error( 'Unexpected token.' );
		}
		$this->token = token( $o );
		$this->token->from = $t->from;
		$this->token->to = $t->to;
		$this->token->value = $v;
		$this->token->arity = $a;
		return $this->token;
	}

	public function expression( $rbp ){
		$t = $this->token;
		$this->advance();
		$left = $t->nud();
		while( $rbp < $this->token->lbp ){
			$t = $this->token;
			$this->advance();
			$left = $t->led( $left );
		}
		return $left;
	}

	public function statement(){
		$n = $this->token;
		if( isset( $n->std ) and is_callable( $n->std )){
			$this->advance();
			$this->scope->reserve( $n );
			return $n->std();
		}
		$v = $this->expression( 0 );
		if( ! isset( $v->assignment ) and $v->id !== '(' ) $v->error( 'Bad expression statement.' );
		$this->advance( ';' );
		return $v;
	}

	public function statements(){
		$a = [];
		$s = null;
		$i = 0;
		while( true ){
			if( isset($this->token->id) and ($this->token->id === '}' or $this->token->id === '(end)') ){
				break;
			}
			$s = $this->statement();
			if( $s ) $a[] = $s;

			$i += 1;
		}
		return ((count( $a ) === 0)
			? null
			: ((count( $a ) === 1)
				? $a[0]
				: $a));
	}

	public function block(){
		$t = $this->token;
		$this->advance( '{' );
		return $t->std();
	}

	public function original_symbol(){
		$t = token();
		$t->error = function( $msg ){ 
			throw new LogicException( $msg );
		};
		$t->nud = function(){
			$this->error( 'Undefined.' );
		};
		$t->led = function( $left = null ){ $this->error( 'Missing operator.' ); };
		return $t;
	}

	public function symbol( $id, $bp = 0 ){
		$s = array_key_exists( $id, $this->symbol_table ) ? $this->symbol_table[$id] : null; 
		if( $s ){
			if( $bp >= $s->lbp ) $s->lbp = $bp;
		}else{
			$s = $this->original_symbol();
			$s->id = $id;
			$s->value = $id;
			$s->lbp = $bp;
			$this->symbol_table[$id] = $s;
		}
		return $s;
	}

	public function constant( $s, $v ){
		$x = $this->symbol( $s );
		$parse = $this;
		$x->nud = function()use( $parse ){
			$parse->scope->reserve( $this ); 
			$this->value = $parse->symbol_table[$this->id]->value;
			$this->arity = 'literal';
			return $this;
		};
		$x->value = $v;
		return $x;
	}

	public function infix( $id, $bp, $led = null ){
		$s = $this->symbol( $id, $bp );
		$parse = $this;
		$s->led = ($led !== null) ? $led : function( $left )use( $parse, $bp ){
			$this->first = $left;
			$this->second = $parse->expression( $bp );
			$this->arity = 'binary';
			return $this;
		};
		return $s;
	}

	public function infixr( $id, $bp, $led = null ){
		$s = $this->symbol( $id, $bp );
		$parse = $this;
		$s->led = ($led !== null) ? $led : function( $left )use( $parse, $bp ){
			$this->first = $left;
			$this->second =	$parse->expression( $bp - 1 );
			$this->arity = 'binary';
			return $this;
		};
		return $s;
	}

	public function assignment( $id ){
		$parse = $this;
		return $this->infixr( $id, 10, function( $left )use( $parse ){
			if( $left->id !== '.' and $left->id !== '[' and $left->arity !== 'name' ){
				$left->error( 'Bad lvalue.' );
			}
			$this->first = $left;
			$this->second = $parse->expression( 9 );
			$this->assignment = true;
			$this->arity = 'binary';
			return $this;
		});
	}

	public function prefix( $id, $nud = null ){
		$s = $this->symbol( $id );
		$parse = $this;
		$s->nud = (!empty( $nud )) ? $nud : function()use( $parse ){
			$parse->scope->reserve( $this );
			$this->first = $parse->expression( 70 );
			$this->arity = 'unary';	
			return $this;
		};
		return $s;
	}

	public function stmt( $s, $f ){
		$x = $this->symbol( $s );
		$x->std = $f;
		return $x;
	}

	public function populate_symbol_table(){
		$parse = $this;

		$this->symbol( '(end)' );
		$this->symbol( '(name)' );
		$this->symbol( ':' );
		$this->symbol( ';' );
		$this->symbol( ')' );
		$this->symbol( ']' );
		$this->symbol( '}' );
		$this->symbol( ',' );
		$this->symbol( 'else' );

		$this->constant( 'true', true );
		$this->constant( 'false', false );
		$this->constant( 'null', null );
		$this->constant( 'pi', 3.141592653589793 );
		$this->constant( 'Object', (object) [] );
		$this->constant( 'Array', [] );

		$literal = $this->symbol( '(literal)' );
		$literal->nud = function(){ return $this; }; // itself

		$this_symbol = $this->symbol( 'this' );
		$this_symbol->nud = function()use( $parse ){
			$parse->scope->reserve( $this );
			$this->arity = 'this';
			return $this;
		};

		$this->assignment( '=' );
		$this->assignment( '+=' );
		$this->assignment( '-=' );

		$this->infix( '?', 20, function( $left )use( $parse ){
			$this->first = $left;
			$this->second = $parse->expression( 0 );
			$parse->advance( ':' );
			$this->third = $parse->expression( 0 );
			$this->arity = 'ternary';
			return $this;
		});

		$this->infixr( '&&', 30 );
		$this->infixr( '||', 30 );

		$this->infixr( '===', 40 );
		$this->infixr( '!==', 40 );
		$this->infixr( '<', 40 );
		$this->infixr( '<=', 40 );
		$this->infixr( '>', 40 );
		$this->infixr( '>=', 40 );

		$this->infix( '+', 50 );
		$this->infix( '-', 50 );

		$this->infix( '*', 60 );
		$this->infix( '/', 60 );

		$this->infix( '.', 80, function( $left )use( $parse ){
			$this->first = $left;
			if( $parse->token->arity !== 'name' ){
				$parse->token->error( 'Expected a property name.' );
			}
			$parse->token->arity = 'literal';
			$this->second = $parse->token;
			$this->arity = 'binary';
			$parse->advance();
			return $this;
		});

		$this->infix( '[', 80, function( $left )use( $parse ){
			$this->first = $left;
			$this->second = $parse->expression( 0 );
			$this->arity = 'binary';
			$parse->advance( ']' );
			return $this;
		});

		$this->infix( '(', 80, function( $left )use( $parse ){
			$a = [];
			if( $left->id === '.' or $left->id === '[' ){
				$this->arity = 'ternary';
				$this->first = $left->first;
				$this->second = $left->second;
				$this->third = $a;
			}else{
				$this->arity = 'binary';
				$this->first = $left;
				$this->second = $a;
				if( ($left->arity !== 'unary' or $left->id !== 'function' )
				    and ($left->arity !== 'name')
				    and ($left->id !== '(')
				    and ($left->id !== '&&')
				    and ($left->id !== '||')
				    and ($left->id !== '?')
				){
					$left->error( 'Expected a variable name.' );
				}
			}
			if( $parse->token->id !== ')' ){
				while( true ){
					$a[] = $parse->expression( 0 );
					if( $parse->token->id !== ',' ) break;
					$parse->advance( ',' );
				}
			}
			$parse->advance( ')' );
			return $this;
		});

		$this->prefix( '!' );
		$this->prefix( '-' );
		$this->prefix( 'typeof' );

		$this->prefix( '(', function()use( $parse ){
			$e = $parse->expression( 0 );
			$parse->advance( ')' );
			return $e;
		});

		$this->prefix( 'function', function()use( $parse ){
			$a = [];
			$parse->new_scope( 'function' );
			if( $parse->token->arity === 'name' ){
				$parse->scope->define( $parse->token );
				$this->name = $parse->token->value;
				$parse->advance();
			}
			$parse->advance( '(' );
			if( $parse->token->id !== ')' ){
				while( true ){
					if( $parse->token->arity !== 'name' ){
						$parse->token->error( 'Expected a parameter name.' );
					}
					$parse->scope->define( $parse->token );
					$a[] = $parse->token;
					$parse->advance();
					if( $parse->token->id !== ',' ) break;
					$parse->advance( ',' );
				}
			}
			$this->first = $a;
			$parse->advance( ')' );
			$parse->advance( '{' );
			$this->second = $parse->statements();
			$parse->scope->pop( $parse );
			$parse->advance( '}' );
			$this->arity = 'function';
			return $this;
		});

		$this->prefix( '[', function()use( $parse ){
			$a = [];
			if( $parse->token->id !== ']' ){
				while( true ){
					$a[] = $parse->expression( 0 );
					if( $parse->token->id !== ',' ) break;
					$parse->advance( ',' );
				}
			}
			$parse->advance( ']' );
			$this->first = $a;
			$this->arity = 'unary';
			return $this;
		});

		$this->prefix( '{', function()use( $parse ){
			$a = [];
			if( $parse->token->id !== '}' ){
				while( true ){
					$n = $parse->token;
					if( $n->arity !== 'name' and $n->arity !== 'literal' ){
						$parse->token->error( 'Bad property name.' );
					}
					$parse->advance();
					$parse->advance( ':' );
					$v = $parse->expression( 0 );
					$v->key = $n->value;
					$a[] = $v;
					if( $parse->token->id !== ',' ) break;
					$parse->advance( ',' );
				}
			}
			$parse->advance( '}' );
			$this->first = $a;
			$this->arity = 'unary';
			return $this;
		});

		$this->stmt( '{', function()use( $parse ){
			$parse->new_scope( '{' );
			$a = $parse->statements();
			$parse->advance( '}' );
			$parse->scope->pop( $parse );
			return $a;
		});

		$this->stmt( 'var', function()use( $parse ){
			$a = [];
			while( true ){
				$n = $parse->token;
				if( $n->arity !== 'name' ){
					$n->error( 'Expected a new variable name.' );
				}
				$parse->scope->define( $n );
				$parse->advance();
				if( $parse->token->id === '=' ){
					$t = $parse->token;
					$parse->advance( '=' );
					$t->first = $n;
					$t->second = $parse->expression( 0 );
					$t->arity = 'binary';
					$a[] = $t;
				}
				if( $parse->token->id !== ',' ) break;
				$parse->advance(',');
			}
			$parse->advance( ';' );
			return (count( $a ) === 0
				? null
				: (count( $a ) === 1
					? $a[0]
					: $a));
		});

		$this->stmt( 'if', function()use( $parse ){
			$parse->advance( '(' );
			$this->first = $parse->expression( 0 );
			$parse->advance( ')' );
			$this->second = $parse->block();
			if( $parse->token->id === 'else' ){
				$parse->scope->reserve( $parse->token );
				$parse->advance( 'else' );
				$this->third = ($parse->token->id === 'if'
					? $parse->statement()
					: $parse->block());
			}else{
				$this->third = null;
			}
			$this->arity = 'statement';
			return $this;
		});

		$this->stmt( 'return', function()use( $parse ){
			if( $parse->token->id !== ';' ) $this->first = $parse->expression( 0 );
			$parse->advance( ';' );
			if( $parse->token->id !== '}' ){
				$parse->token->error( 'Unreachable statement.' );
			}
			$this->arity = 'statement';
			return $this;
		});

		$this->stmt( 'break', function()use( $parse ){
			$parse->advance( ';' );
			if( $parse->token->id !== '}' ) $parse->token->error( 'Unreachable statement.' );
			$this->arity = 'statement';
			return $this;
		});

		$this->stmt( 'while', function()use( $parse ){
			$parse->advance( '(' );
			$this->first = $parse->expression( 0 );
			$parse->advance( ')' );
			$this->second = $parse->block();
			$this->arity = 'statement';
			return $this;
		});
	}

	public function parse(){
		if( empty( $this->symbol_table )) $this->populate_symbol_table();
		$this->tokens = tokens( $this->source );
		$this->token_nr = 0;
		$this->scope = null;
		$this->new_scope( 'parse' );
		$this->advance();
		$s = $this->statements();
		$this->advance( '(end)' );
		$this->scope->pop( $this );
		return $s;
	}
}


/** Prefer scope() to rather than calling new Scope directly. */
function scope( $hint = '' ){
	$s = new Scope;
	$s->hint = $hint;
	return $s;
}


/** Prefer scope() to calling new Scope directly. */
class Scope {
	public $hint = '';
	public $parent = null;
	public $def = [];

	public function define( Token $n, Scope $scope = null ){
		$t = array_key_exists( $n->value, $this->def ) ? $this->def[$n->value] : null;
		if( $t instanceof Token ){
			$n->error( (isset( $t->reserved ) and $t->reserved) ? 'Already reserved.' : 'Already defined.' ); 
		}
		$this->def[$n->value] = $n;
		$n->reserved = false;
		$n->nud = function(){ return $this; }; // itself
		$n->led = null;
		$n->std = null;
		$n->lbp = 0;
		$n->scope = $scope;
		return $n;
	}

	public function find( $n, array & $symbol_table ){
		$e = $this;
		$o;
		while( true ){
			$o = array_key_exists( $n, $e->def ) ? $e->def[$n] : null;
			if( $o and ! is_callable( $o )) return $e->def[$n];
			$e = $e->parent;
			if( ! $e ){
				$o = array_key_exists( $n, $symbol_table) ? $symbol_table[$n] : null;
				return ($o && ! is_callable( $o ))
				  ? $o
				  : $symbol_table['(name)'];
			}
		}
	}

	public function pop( Parser $parser ){
		$parser->scope = $this->parent;
	}

	public function reserve( $n ){
		if( $n->arity !== 'name' or (isset($n->reserved) and $n->reserved) ) return;
		$t = array_key_exists( $n->value, $this->def ) ? $this->def[$n->value] : null;
		if( $t ){
			if( $t->reserved ) return;
			if( $t->arity === 'name' ) $n->error( 'Already defined.' );
		}
		$this->def[$n->value] = $n;
		$n->reserved = true;
	}

	public function to_array(){
		$arr = [
			'def' => [],
			'parent' => null,
		];
		foreach( $this->def as $key => $value ){
			if( $value instanceof Token ) $arr['def'][$key] = $value->to_array();
			// elseif( $value instanceof Scope ) $arr[$key] = $value->to_array();
			elseif( ! is_object( $value ) and ! is_callable( $value )) $arr['def'][$key] = $value;
		}
		if( $this->parent ) $arr['parent'] = $this->parent->to_array();

		return $arr;
	}
}


/**
 Turn JavaScript source code into tokens.
 @link https://github.com/douglascrockford/TDOP/blob/master/tokens.js
 @link http://javascript.crockford.com/tdop/index.html tests generated
       by pasting token strings (e.g. "-1234".tokens();) into dev console.
 */
function tokens( $source = '', $allowed_keys = null ){
	$prefix = '=<>!+-*&|/%^';
	$suffix = '=<>&|';
	$c;                           // The current character.
	$from;                        // The index of the start of the token.
	$i = 0;                       // The index of the current character.
	$length = strlen( $source );
	$n;                           // The number value.
	$q;                           // The quote character.
	$str;                         // The string value.

	$result = [];                 // An array to hold the results.

	$make = function( $type, $value )use( & $i, & $from ){

// Make a token object.

		$token = token();
		$token->error = function( $error_message ){
			throw new LogicException( $error_message );
		};
		$token->type = $type;
		$token->value = $value;
		$token->from = $from;
		$token->to   = $i;
		return $token;
	};

// Begin tokenization. If the source string is empty, return nothing.

	if( $source === '' ) return;

// Loop through this text, one character at a time.

	$c = substr( $source, $i, 1 );
	while( $i < $length ){
		$from = $i;

// Ignore whitespace.

		if( $c <= ' ' ){
			$i += 1;
			$c = substr( $source, $i, 1 );

// name.

		}elseif( ($c >= 'a' && $c <= 'z') || ($c >= 'A' && $c <= 'Z') ){
			$str = $c;
			$i += 1;
			while( $i < $length ){
				$c = substr( $source, $i, 1 );
				if( ($c >= 'a' && $c <= 'z') || ($c >= 'A' && $c <= 'Z') || ($c >= '0' && $c <= '9') || $c === '_' ){
					$str .= $c;
					$i += 1;
				}else break;
			}
			$result[] = $make( 'name', $str );

// number.

// A number cannot start with a decimal point. It must start with a digit,
// possibly '0'.

		}elseif( $c >= '0' && $c <= '9' ){
			$str = $c;
			$i += 1;

// Look for more digits.

			while( $i < $length ){
				$c = substr( $source, $i, 1 );
				if( $c < '0' || $c > '9' ) break;
				$i += 1;
				$str .= $c;
			}

// Look for a decimal fraction part.

			if( $c === '.' ){
				$i += 1;
				$str .= $c;
				while( $i < $length ){
					$c = substr( $source, $i, 1 );
					if( $c < '0' || $c > '9' ) break;
					$i += 1;
					$str .= $c;
				}
			}

// Look for an exponent part.

			if( $c === 'e' || $c === 'E' ){
				$i += 1;
				$str .= $c;
				$c = substr( $source, $i, 1 );
				if( $c === '-' || $c === '+' ){
					$i += 1;
					$str .= $c;
					$c = substr( $source, $i, 1 );
				}
				if( $c < '0' || $c > '9' ){
					$x = $make( 'number', $str );
					$x->error( 'Bad exponent' );
				}
				do{
					$i += 1;
					$str .= $c;
					$c = substr( $source, $i, 1 );
				}while( $c >= '0' && $c <= '9' && $i < $length );
			}

// Make sure the next character is not a letter.

			if( $c >= 'a' && $c <= 'z' ){
				$str .= $c;
				$i += 1;
				$x = $make( 'number', $str );
				$x->error( 'Bad number' );
			}

// Convert the string value to a number. If it is finite, then it is a good
// token.

			$n = (0 + $str);
			if( is_finite( $n )) $result[] = $make( 'number', $n );
			else{
				$x = $make( 'number', $str );
				$x->error( 'Bad number' );
			}

// string

		}elseif( $c === '\'' || $c === '"' ){
			$str = '';
			$q = $c;
			$i += 1;
			while( $i < $length ){
				$c = substr( $source, $i, 1 );
				if( $c < ' ' ){
					$x = $make( 'string', $str );
					if( $c === "\n" || $c === "\r" || $c === '' ) $x->error( 'Unterminated string.' );
					else $x->error( 'Control character in string.' /*, name( '', $str) */ ); // TODO
				}

// Look for the closing quote.

				if( $c === $q ) break;

// Look for escapement.

				if( $c === '\\' ){
					$i += 1;
					if( $i >= $length ){
						$x = $make( 'string', $str );
						$x->error( 'Unterminated string' );
					}
					$c = substr( $source, $i, 1);
					switch( $c ){
					case 'b': $c = "\b"; break;
					case 'f': $c = "\f"; break;
					case 'n': $c = "\n"; break;
					case 'r': $c = "\r"; break;
					case 't': $c = "\t"; break;
					case 'u':
						if( $i >= $length ){
							$x = $make( 'string', $str );
							$x->error( 'Unterminated string' );
						}
						$c = hexdec( substr( $source, $i, $i + 4 ));
						if( ! is_finite( $c ) || $c < 0 ){
							$x = $make( 'string', $str );
							$x->error( 'Unterminated string' );
						}
						$c = chr( $c );
						$i += 4;
						break;
					}
				}
				$str .= $c;
				$i += 1;
			}

			$i += 1;
			$result[] = $make( 'string', $str );
			$c = substr( $source, $i, 1 );

// comment.

		}elseif( $c === '/' && substr( $source, $i + 1, 1 ) === '/' ){
			$i += 1;
			while( $i < $length ){
				$c = substr( $source, $i, 1 );
				if( $c === "\n" || $c === "\r" || $c === '' ) break;
				$i += 1;
			}

// combining

		}elseif( strpos( $prefix, $c ) !== false ){
			$str = $c;
			$i += 1;
			while( $i < $length ){
				$c = substr( $source, $i, 1 );
				if( $i >= $length || strpos( $suffix, $c ) === false ) break;
				$str .= $c;
				$i += 1;
			}
			$result[] = $make( 'operator', $str );

// single-character operator

		}else{
			$i += 1;
			$result[] = $make( 'operator', $c );
			$c = substr( $source, $i, 1 );
		}
	}

	if( is_array( $result ) and is_array( $allowed_keys )){
		$arr = [];
		$limit_keys = ! empty( $allowed_keys );
		foreach( $result as $token ){
			$arr[] = ($limit_keys) ? $token->to_array( $allowed_keys ) : $token->to_array();
		}
		return $arr;
	}

	return $result;
}


/**
 Create a token object with optional prototype.  Prefer this to calling new Token.
 */
function token( & $prototype = null ){
	$t = new Token;
	if( $prototype instanceof Token )
		foreach( get_object_vars( $prototype ) as $key => $value )
			$t->{$key} = $value;

	return $t;
}


/**
 Convert an array of tokens to k/v pairs.  Optionally pass in $keys to limit keys to. 
 */
function to_array( array & $tokens, array $keys = [] ){
	$arr = [];
	foreach( $tokens as $idx => $t ){
		$arr[$idx] = $t->to_array( $keys );
	}
	return $arr;
}


/**
 JavaScript-like object that allows properties and methods to be added on a whim.
 Use the token() function to create Token objects, don't call new Token directly.
 */
class Token {

	public function __call( $method, $args ){
		if( isset( $this->{$method} )){
			$closure = Closure::bind( $this->{$method}, $this, 'Token' );
			return call_user_func_array( $closure, $args );
		}

		throw new LogicException( $method." doesn't exist." );
	}

	public function to_array( $keys = [] ){
		$arr = [];
		foreach( get_object_vars( $this ) as $key => $value ){
			if( empty( $keys ) or in_array( $key, $keys )){
				if( is_array( $value )){
					$arr[$key] = to_array( $value, $keys );
				}elseif( $value instanceof Token and method_exists( $value, 'to_array' )){
					$arr[$key] = $value->to_array( $keys );
				}elseif( $value instanceof Scope and method_exists( $value, 'to_array' )){
					$arr[$key] = $value->to_array( $keys );
				}elseif( $value instanceof stdclass ){
					$arr[$key] = (array) $value;
				}elseif( is_string( $value )){
					$arr[$key] = $value;
				}elseif( is_numeric( $value )){
					$arr[$key] = $value;
				}elseif( $value === true or $value === false or $value === null ){
					$arr[$key] = $value;
				}elseif( is_callable( $value )){
					// Do nothing on purpose
				}else{
					echo 'Token::to_array() cannot handle: '.$key.' '.get_class( $value ).PHP_EOL;
					exit(1);
				}
			}
		}
		return $arr;
	}
}
