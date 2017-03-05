<?php
/**
 Top Down Operator Precedence
 @author Damon Zwolinski <damonz@codeswim.com>
 @copyright Copyright ©2017 Damon Zwolinski, All rights reserved.
 @license MIT
 */

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
			if( ! empty( $keys ) and ! in_array( $key, $keys )) continue;

			if( $value instanceof Token ){
				$arr[$key] = $value->to_array( $keys );
			}elseif( ! is_object( $value ) and ! is_callable( $value )){
				$arr[$key] = $value;
			}
		}
		return $arr;
	}
}
