<?php

return [

'new_scope()' => function(){
	$p = parse();
	$s = $p->new_scope();
	return $p->scope === $s;
},

'new_scope() return new scope' => function(){
	$p = parse();
	$s = $p->new_scope();
	return $p->scope->parent === null;
},

'new_scope() call twice parent should match first call.' => function(){
	$p = parse();
	$s1 = $p->new_scope();
	$s2 = $p->new_scope();
	return $p->scope->parent === $s1;
},

];
