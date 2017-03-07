<?php

return [

'Scope::find() token in scope.' => function(){
	$s = scope();
	$t = token();
	$t->value= ';';
	$s->define( $t );
	$st = [];
	return $s->find( ';', $st ) === $t;
},

'Scope::find() token in parent scope.' => function(){
	$s = scope( 'child' );
	$p = scope( 'parent' );
	$t = token();
	$t->value= ';';
	$p->define( $t );
	$s->parent = $p;
	$st = [];
	return $s->find( ';', $st ) === $t;
},

'Scope::find() token in grandparent scope.' => function(){
	$s = scope( 'child' );
	$p = scope( 'parent' );
	$g = scope( 'grandparent' );
	$t = token();
	$t->value= ';';
	$g->define( $t );
	$s->parent = $p;
	$p->parent = $g;
	$st = [];
	return $s->find( ';', $st ) === $t;
},

'Scope::find() token in symbol table.' => function(){
	$s = scope();
	$t = token();
	$t->value = ';';
	$st = [';' => $t];
	return $s->find( ';', $st ) === $t;
},

'Scope::find() token not found.' => function(){
	$s = scope();
	$t = token();
	$st = ['(name)' => $t];
	return $s->find( ';', $st ) === $t;
},

];
