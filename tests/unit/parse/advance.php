<?php

return [

'advance()' => function(){
	$s = 'var a = 1;';
	$p = parse( $s );
	$p->tokens = tokens( $s );
	$p->populate_symbol_table();
	$p->new_scope();
	$t = $p->advance();
	return $t->to_array() === [
		'id' => 'var',
		'value' => 'var',
		'lbp' => 0,
		'from' => 0,
		'to' => 3,
		'arity' => 'name',
	];
},

'advance() $id mismatch error' => function(){
	$s = 'var a = 1;';
	$p = parse( $s );
	$p->tokens = tokens( $s );
	$p->new_scope();
	$p->populate_symbol_table();
	$t = token();
	$t->id = ';';
	$t->error = function( $msg ){ throw new LogicException( $msg ); };
	$p->token = $t;
	try{
		$result = $p->advance( 'a' );
	}catch( LogicException $e ){
		return ($e->getMessage() === 'Expected "a".');
	}
},

'advance() token_nr > count( $this->tokens ) returns null' => function(){
	$s = 'var a = 1';
	$p = parse();
	$p->tokens = tokens( $s ); 
	$p->new_scope();
	$p->populate_symbol_table();
	$p->token_nr = 25;
	$t = $p->advance();
	return $t === null;
},

'advance() token_nr > count( $this->tokens ) set ->token to (end)' => function(){
	$s = 'var a = 1';
	$p = parse();
	$p->tokens = tokens( $s ); 
	$p->new_scope();
	$p->populate_symbol_table();
	$p->token_nr = 25;
	$p->advance();
	return ($p->token === $p->symbol_table['(end)']);
},

'advance() $a === \'name\'' => function(){
	$s = 'var a = 1';
	$p = parse();
	$p->tokens = tokens( $s );
	$p->new_scope();
	$p->populate_symbol_table();
	$t = $p->advance();
	return $t->to_array() === [
		'id' => 'var',
		'value' => 'var',
		'lbp' => 0,
		'from' => 0,
		'to' => 3,
		'arity' => 'name',
	];
},

'advance() $a === \'operator\'' => function(){
	$s = 'var a = 1';
	$p = parse();
	$p->tokens = tokens( $s );
	$p->new_scope();
	$p->populate_symbol_table();
	$p->advance(); // var
	$p->advance(); // a
	$t = $p->advance(); // =
	return $t->to_array() === [
		'id' => '=',
		'value' => '=',
		'lbp' => 10,
		'from' => 6,
		'to' => 7,
		'arity' => 'operator',
	];
},

'advance() $a === \'operator\' Unknown operator' => function(){
	$s = 'var a @ 1';
	$p = parse();
	$p->tokens = tokens( $s );
	$p->new_scope();
	$p->populate_symbol_table();
	$p->advance(); // var
	$p->advance(); // a
	try{
		$t = $p->advance(); // @
	}catch( Exception $e ){
		return $e->getMessage() === 'Unknown operator.';
	}
},

'advance() $a === \'number\'' => function(){
	$s = 'var a = 1';
	$p = parse();
	$p->tokens = tokens( $s );
	$p->new_scope();
	$p->populate_symbol_table();
	$p->advance(); // var
	$p->advance(); // a
	$p->advance(); // =
	$t = $p->advance(); // 1
	return $t->to_array() === [
		'id' => '(literal)',
		'value' => 1,
		'lbp' => 0,
		'from' => 8,
		'to' => 9,
		'arity' => 'literal',
	];
},

'advance() $a === \'string\'' => function(){
	$s = 'var a = "Apples"';
	$p = parse();
	$p->tokens = tokens( $s );
	$p->new_scope();
	$p->populate_symbol_table();
	$p->advance(); // var
	$p->advance(); // a
	$p->advance(); // =
	$t = $p->advance(); // Apples
	return $t->to_array() === [
		'id' => '(literal)',
		'value' => 'Apples',
		'lbp' => 0,
		'from' => 8,
		'to' => 16,
		'arity' => 'literal',
	];
},

'advance() Unexpected token' => function(){
	$p = parse();
	$t = token();
	$t->value = '@';
	$t->type = 'Not name, operator, string, or number.';
	$t->error = function( $msg ){ throw new LogicException( $msg ); };
	$p->tokens = [$t];
	try{
		$p->advance();
	}catch( LogicException $e ){
		return $e->getMessage() === 'Unexpected token.';
	}
},

];
