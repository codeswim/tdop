<?php

return [

'Scope::to_array()' => function(){
	$s = scope();
	$n1 = token();
	$n1->value = '+';
	$s->define( $n1 );	
	$n2 = token();
	$n2->value = 'a';
	$s->define( $n2 );
	// We only care about the keys, token->to_array() and define are tested elsewhere. 
	return array_keys( $s->to_array() ) === ['+', 'a'];
},

];
