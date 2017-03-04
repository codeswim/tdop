<?php

return [

'Empty token has no properties.' => function(){
	$t = token();
	return get_object_vars( $t ) === [];
},

'Simple Token to_array().' => function(){
	$t = token();
	$t->id = 'a';
	$t->nud = null;
	return $t->to_array() === [
		'id' => 'a',
		'nud' => null,
	];
},

'Can add/call methods to/on Token.' => function(){
	$t = token();
	$t->id = '@';
	$t->nud = function(){
		return $this->id;
	};
	return $t->nud() === '@';
},

'Use Token as prototype for Token.' => function(){
	$o = token();
	$o->id = '=';
	$t = token( $o );
	$t->from = 5;
	$t->to = 6;
	return $t->to_array() === [
		'id' => '=',
		'from' => 5,
		'to' => 6,
	];
},

'Token to_array() when Token property is Token.' => function(){
	$a = token();
	$a->id = 'a';
	$equals = token();
	$equals->id = '=';
	$equals->left = $a;
	return $equals->to_array() === [
		'id' => '=',
		'left' => [
			'id' => 'a',
		]
	];
}

];
