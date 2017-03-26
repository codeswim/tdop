<?php

return [

'original_symbol() ->error()' => function(){
	$p = parse();
	$t = $p->original_symbol();
	try{
		$t->error( 'You got me' );
	}catch( LogicException $e ){
		return $e->getMessage() === 'You got me';
	}
},

'original_symbol() ->nud()' => function(){
	$p = parse();
	$t = $p->original_symbol();
	try{
		$t->nud();
	}catch( LogicException $e ){
		return $e->getMessage() === 'Undefined.';
	}
},

'original_symbol() ->led()' => function(){
	$p = parse();
	$t = $p->original_symbol();
	try{
		$t->led();
	}catch( LogicException $e ){
		return $e->getMessage() === 'Missing operator.';
	}
},

];
