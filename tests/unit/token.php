<?php

return [[

'desc' => 'Empty token has no properties.', 'test' => function(){
	$t = token();
	return get_object_vars( $t ) === [];
}

],[

'desc' => 'Simple Token to_array().', 'test' => function(){
	$t = token();
	$t->id = 'a';
	$t->nud = null;
	return $t->to_array() === [
		'id' => 'a',
		'nud' => null,
	];
}

],[

'desc' => 'Can add/call methods to/on Token.', 'test' => function(){
	$t = token();
	$t->id = '@';
	$t->nud = function(){
		return $this->id;
	};
	return $t->nud() === '@';
}

],[

'desc' => 'Use Token as prototype for Token.', 'test' => function(){
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
}

],[

'desc' => 'Token to_array() when Token property is Token.', 'test' => function(){
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

]];
