<?php

return [

'Scope::define() Already reserved.' => function(){
	$s = scope( 'root' );
	$t = token();
	$t->value = 'a';
	$t->error = function( $msg ){ throw new LogicException( $msg ); };
	$s->define( $t );
	try{
		$t->reserved = true;
		$s->define( $t );
	}catch( LogicException $e ){
		return $e->getMessage() === 'Already reserved.';
	}
},

'Scope::define() Already defined' => function(){
	$s = scope( 'root' );
	$t = token();
	$t->value = 'a';
	$t->error = function( $msg ){ throw new LogicException( $msg ); };
	$s->define( $t );
	try{
		$s->define( $t );
	}catch( LogicException $e ){
		return $e->getMessage() === 'Already defined.';
	}
},

'Scope::define() $def value' => function(){
	$s = scope( 'root' );
	$t = token();
	$t->value = '+';
	$s2 = scope( 'child' );
	$s->define( $t, scope( 'child' ));
	return $s->def['+'] === $t;	
},

'Scope::define() $n non object/callable properties' => function(){
	$s = scope( 'root' );
	$t = token();
	$t->value = '+';
	$s2 = scope( 'child' );
	$s->define( $t, scope( 'child' ));
	return $t->to_array() === [
		'value' => '+',
		'reserved' => false,
		'led' => null,
		'std' => null,
		'lbp' => 0,
		'scope' => [
			'def' => [],
			'parent' => null,
		],
	];
},

'Scope::define() $n scope property' => function(){
	$s = scope( 'root' );
	$c = scope( 'child' );
	$t = token();
	$t->value = '+';
	$defined = $s->define( $t, $c );
	return $defined->scope === $c;
},

];
