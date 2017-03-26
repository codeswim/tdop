<?php

return [

'Create variable w/o assigning anything to it.' => function(){
	$src = 'var scope;';
	$p = parse( $src );
	$t = $p->parse();
	return $t === null;
},

'Dumbest k/y that can work.' => function(){
   $src = '
var scope;
var n;
n.scope = {};
scope = n.scope;
';
	$p = parse( $src );
	$t = $p->parse();
	return to_array( $t, ['arity', 'first', 'key', 'second', 'value'] ) === [[
		'value' => '=',
		'arity' => 'binary',
		'first' => [
			'value' => '.',
			'arity' => 'binary',
			'first' => [
				'value' => 'n',
				'arity' => 'name',
			],
			'second' => [
				'value' => 'scope',
				'arity' => 'literal',
			],
		],
		'second' => [
			'value' => '{',
			'arity' => 'unary',
			'first' => [],
		],
	],[
		'value' => '=',
		'arity' => 'binary',
		'first' => [
			'value' => 'scope',
			'arity' => 'name',
		],
		'second' => [
			'value' => '.',
			'arity' => 'binary',
			'first' => [
				'value' => 'n',
				'arity' => 'name',
			],
			'second' => [
				'value' => 'scope',
				'arity' => 'literal',
			],
		],
	]];
},

'Reference variable external to function.' => function(){
	$src = '
var make_parse = function(){
	var scope;

	var original_scope = {
		define: function( n ){
			scope = n.scope;
		}
	};
};
';
	$p = parse( $src );
	$t = $p->parse();
	return $t->to_array( ['arity', 'first', 'key', 'second', 'value'] ) === [
		'value' => '=',
		'arity' => 'binary',
		'first' => [
			'value' => 'make_parse',
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
					'value' => 'original_scope',
					'arity' => 'name',
				],
				'second' => [
					'value' => '{',
					'arity' => 'unary',
					'first' => [[
						'value' => 'function',
						'arity' => 'function',
						'first' => [[
							'value' => 'n',
							'arity' => 'name',
						]],
						'second' => [
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 'scope',
								'arity' => 'name',
								],
							'second' => [
								'value' => '.',
								'arity' => 'binary',
								'first' => [
									'value' => 'n',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'scope',
									'arity' => 'literal',
									],
								],
						],
						'key' => 'define',
					]],
				],
			],
		],
	];
},

];
