<?php

return  [

'var a = 1;' => function(){
	$src = 'var a = 1;';
	$p = parse( $src );
	$token = $p->parse();
	return $token->to_array( ['id', 'value', 'from', 'to', 'first', 'second'] ) === [
		'id' => '=',
		'value' => '=',
		'from' => 6,
		'to' => 7,
		'first' => [
			'id' => '(name)',
			'value' => 'a',
			'from' => 4,
			'to' => 5,
		],
		'second' => [
			'id' => '(literal)',
			'value' => 1,
			'from' => 8,
			'to' => 9,
		],
	];
},

'var a = function (){ return "Hello" + "World!"; }' => function(){
	$src = 'var a = function (){ return "Hello" + "World!"; };';
	$p = parse( $src );
	$token = $p->parse();
	return $token->to_array( ['id', 'value', 'from', 'to', 'first', 'second'] ) === [
		'id' => '=',
		'value' => '=',
		'from' => 6,
		'to' => 7,
		'first' => [
			'id' => '(name)',
			'value' => 'a',
			'from' => 4,
			'to' => 5,
		],
		'second' => [
			'id' => 'function',
			'value' => 'function',
			'from' => 8,
			'to' => 16,
			'first' => [],
			'second' => [
				'id' => 'return',
				'value' => 'return',
				'from' => 21,
				'to' => 27,
				'first' => [
					'id' => '+',
					'value' => '+',
					'from' => 36,
					'to' => 37,
					'first' => [
						'id' => '(literal)',
						'value' => 'Hello',
						'from' => 28,
						'to' => 35,
					],
					'second' => [
						'id' => '(literal)',
						'value' => 'World!',
						'from' => 38,
						'to' => 46,
					],
				],
			],
		],
	];
},

'Multiple statements; assign objects to variables.' => function(){
	$src = 'var a = { a: "apple", b: "banana" }; var c = { c: "carrot" };';
	$p = parse( $src );
	$tokens = $p->parse();
	return to_array( $tokens, ['arity', 'first', 'fourth', 'key', 'message', 'name', 'second', 'third', 'value'] ) === [[
		'value' => '=',
		'arity' => 'binary',
		'first' => [
			'value' => 'a',
			'arity' => 'name',
		],
		'second' => [
			'value' => '{',
			'arity' => 'unary',
			'first' => [[
				'value' => 'apple',
				'arity' => 'literal',
				'key' => 'a',
			],[
				'value' => 'banana',
				'arity' => 'literal',
				'key' => 'b',
			]],
		],
	],[
		'value' => '=',
		'arity' => 'binary',
		'first' => [
			'value' => 'c',
			'arity' => 'name',
		],
		'second' => [
			'value' => '{',
			'arity' => 'unary',
			'first' => [[
				'value' => 'carrot',
				'arity' => 'literal',
				'key' => 'c',
			]],
		],
	]];
},

'assign to map via key' => function(){
	$src = 'var o = {}; o["tomorrow"] = "yesterday";';
	$p = parse( $src );
	$t = $p->parse();
	return to_array( $t, ['id', 'value', 'from', 'to', 'first', 'second'] ) === [[
		'id' => '=',	
		'value' => '=',	
		'from' => 6,	
		'to' => 7,	
		'first' => [
			'id' => '(name)',
			'value' => 'o',
			'from' => 4,
			'to' => 5,
		],	
		'second' => [
			'id' => '{',
			'value' => '{',
			'from' => 8,
			'to' => 9,
			'first' => [],
		],
	],[
		'id' => '=',	
		'value' => '=',	
		'from' => 26,	
		'to' => 27,
		'first' => [
			'id' => '[',	
			'value' => '[',	
			'from' => 13,	
			'to' => 14,
			'first' => [
				'id' => '(name)',	
				'value' => 'o',	
				'from' => 12,	
				'to' => 13,
			],
			'second' => [	
				'id' => '(literal)',	
				'value' => 'tomorrow',	
				'from' => 14,
				'to' => 24,
			],
		],
		'second' => [
			'id' => '(literal)',	
			'value' => 'yesterday',
			'from' => 28,
			'to' => 39,
		],	
	]];
},

'var a = function(){ var a = 1; };' => function(){
	$src = 'var a = function(){ var a = 1; };';
	$p = parse( $src );
	$t = $p->parse();
	return $t->to_array( ['arity', 'first', 'second', 'value'] ) === [
		'value'=> '=',
		'arity'=> 'binary',
		'first'=> [
			'value'=> 'a',
			'arity'=> 'name',
		],
		'second'=> [
			'value'=> 'function',
			'arity'=> 'function',
			'first'=> [],
			'second'=> [
				'value'=> '=',
				'arity'=> 'binary',
				'first'=> [
					'value'=> 'a',
					'arity'=> 'name',
				],
				'second'=> [
					'value'=> 1,
					'arity'=> 'literal',
				],
			 ],
		 ],
	];
},

'var a = function(){ var f = function(){ var a = 1; }; };' => function(){
	$src = 'var a = function(){ var a = 1; };';
	$p = parse( $src );
	$t = $p->parse();
	return $t->to_array( ['arity', 'first', 'second', 'value'] ) === [
		'value' => '=',
		'arity' => 'binary',
		'first' => [
			'value' => 'a',
			'arity' => 'name',
		],
		'second' => [
			'value' => 'function',
			'arity' => 'function',
			'first' => [],
			'second' => [
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'a',
					'arity' => 'name',
				],
				'second' => [
					'value' => 1,
					'arity' => 'literal',
				],
			],
		],
	];
},

];
