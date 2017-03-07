<?php

return [

'Scope::reserve() happy path.' => function(){
	$s = scope();
	$n = token();
	$n->value = 'a';
	$n->arity = 'name';	
	$s->reserve( $n );
	return $n->reserved === true;
},

'Scope::reserve() artiy not equal to name returns null.' => function(){
	$s = scope();
	$n = token();
	$n->value = '=';
	$n->arity = 'operator';	
	return $s->reserve( $n ) === null;
},

'Scope::reserve() artiy not equal to name leaves reserved equal to false.' => function(){
	$s = scope();
	$n = token();
	$n->value = '=';
	$n->arity = 'operator';	
	$n->reserved = false;
	$s->reserve( $n );
	return $n->reserved === false;
},

'Scope::reserve() if token is already reserved, reserve returns null.' => function(){
	$s = scope();
	$n = token();
	$n->value = 'a';
	$n->arity = 'name';	
	$s->reserve( $n );
	return $s->reserve( $n ) === null;
},

'Scope::reserve() if token is already defined, reserve calls token->error().' => function(){
	$s = scope();
	$n = token();
	$n->value = 'a';
	$n->arity = 'name';	
	$n->error = function( $msg ){ throw new LogicException( $msg ); };
	$s->define( $n );
	try{
		$s->reserve( $n );
	}catch( LogicException $e ){
		return $e->getMessage() === 'Already defined.';
	}
},

];
