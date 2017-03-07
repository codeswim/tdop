<?php

return [

'Scope::pop()' => function(){
	$child = scope( 'child' );
	$parent = scope( 'parent' );
	$child->parent = $parent;
	$parse = parse();
	$child->pop( $parse );
	return $parse->scope === $parent;
},

];
