<?php

return [

'Scope::find() token in scope.' => function(){
	$s = scope();
	$t = token();
	$t->value= 'a';
	$s->define( $t );
	$st = [];
	return $s->find( 'a', $st ) === $t;
},

'Scope::find() token in parent scope.' => function(){
	$s = scope( 'child' );
	$p = scope( 'parent' );
	$t = token();
	$t->value= 'b';
	$p->define( $t );
	$s->parent = $p;
	$st = [];
	return $s->find( 'b', $st ) === $t;
},

'Scope::find() token in grandparent scope.' => function(){
	$s = scope( 'child' );
	$p = scope( 'parent' );
	$g = scope( 'grandparent' );
	$t = token();
	$t->value= 'c';
	$g->define( $t );
	$s->parent = $p;
	$p->parent = $g;
	$st = [];
	return $s->find( 'c', $st ) === $t;
},

'Scope::find() token in symbol table.' => function(){
	$s = scope();
	$t = token();
	$t->value = 'd';
	$st = ['d' => $t];
	return $s->find( 'd', $st ) === $t;
},

'Scope::find() token not found.' => function(){
	$s = scope();
	$t = token();
	$st = ['(name)' => $t];
	return $s->find( ';', $st ) === $t;
},

];
