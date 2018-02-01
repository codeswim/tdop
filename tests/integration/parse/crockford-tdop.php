<?php

return [

'http://crockford.com/javascript/tdop/parse.js parse()' => function(){
	$src = file_get_contents( 'http://crockford.com/javascript/tdop/parse.js' );
	if ( ! $src ){
		echo 'No source for parse.js, skipping'.PHP_EOL;
		return true;
	}
	$p = parse( $src );
	$t = $p->parse(); 
	return $t->to_array( ['arity', 'first', 'key', 'second', 'third', 'value'] ) === [
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
			'second' => [[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'symbol_table',
					'arity' => 'name',
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
					'value' => 'itself',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [],
					'second' => [
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 'this',
							'arity' => 'this',
						],
					],
				],
			],[
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
						'second' => [[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [
								'value' => '[',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'this',
										'arity' => 'this',
									],
									'second' => [
										'value' => 'def',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'n',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'value',
										'arity' => 'literal',
									],
								],
							]],[
								'value' => 'if',
								'arity' => 'statement',
								'first' => [
									'value' => '===',
									'arity' => 'binary',
									'first' => [
										'value' => 'typeof',
										'arity' => 'unary',
										'first' => [
											'value' => 't',
											'arity' => 'name',
										],
									],
									'second' => [
										'value' => 'object',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '(',
									'arity' => 'ternary',
									'first' => [
										'value' => 'n',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'error',
										'arity' => 'literal',
									],
									'third' => [],
								],
								'third' => null,
							],[
								'value' => '=',
								'arity' => 'binary',
								'first' => [
									'value' => '[',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'def',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'n',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'value',
											'arity' => 'literal',
										],
									],
								],
								'second' => [
									'value' => 'n',
									'arity' => 'name',
								],
							],[
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
										'value' => 'reserved',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => false,
									'arity' => 'literal',
								],
							],[
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
										'value' => 'nud',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => 'itself',
									'arity' => 'name',
								],
							],[
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
										'value' => 'led',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => null,
									'arity' => 'literal',
								],
							],[
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
										'value' => 'std',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => null,
									'arity' => 'literal',
								],
							],[
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
										'value' => 'lbp',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => 0,
									'arity' => 'literal',
								],
							],[
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
									'value' => 'scope',
									'arity' => 'name',
								],
							],[
								'value' => 'return',
								'arity' => 'statement',
								'first' => [
									'value' => 'n',
									'arity' => 'name',
								],
						]],
						'key' => 'define',
					],[
						'value' => 'function',
						'arity' => 'function',
						'first' => [[
							'value' => 'n',
							'arity' => 'name',
						]],
						'second' => [[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 'e',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'this',
								'arity' => 'this',
							],
						],[
							'value' => 'while',
							'arity' => 'statement',
							'first' => [
								'value' => true,
								'arity' => 'literal',
							],
							'second' => [[
								'value' => '=',
								'arity' => 'binary',
								'first' => [
									'value' => 'o',
									'arity' => 'name',
								],
								'second' => [
									'value' => '[',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'e',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'def',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 'n',
										'arity' => 'name',
									],
								],
							],[
								'value' => 'if',
								'arity' => 'statement',
								'first' => [
									'value' => '&&',
									'arity' => 'binary',
									'first' => [
										'value' => 'o',
										'arity' => 'name',
									],
									'second' => [
										'value' => '!==',
										'arity' => 'binary',
										'first' => [
											'value' => 'typeof',
											'arity' => 'unary',
											'first' => [
												'value' => 'o',
												'arity' => 'name',
											],
										],
										'second' => [
											'value' => 'function',
											'arity' => 'literal',
										],
									],
								],
								'second' => [
									'value' => 'return',
									'arity' => 'statement',
									'first' => [
										'value' => '[',
										'arity' => 'binary',
										'first' => [
											'value' => '.',
											'arity' => 'binary',
											'first' => [
												'value' => 'e',
												'arity' => 'name',
											],
											'second' => [
												'value' => 'def',
												'arity' => 'literal',
											],
										],
										'second' => [
											'value' => 'n',
											'arity' => 'name',
										],
									],
								],
								'third' => null,
							],[
								'value' => '=',
								'arity' => 'binary',
								'first' => [
									'value' => 'e',
									'arity' => 'name',
								],
								'second' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'e',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'parent',
										'arity' => 'literal',
									],
								],
							],[
								'value' => 'if',
								'arity' => 'statement',
								'first' => [
									'value' => '!',
									'arity' => 'unary',
									'first' => [
										'value' => 'e',
										'arity' => 'name',
									],
								],
								'second' => [[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => 'o',
										'arity' => 'name',
									],
									'second' => [
										'value' => '[',
										'arity' => 'binary',
										'first' => [
											'value' => 'symbol_table',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'n',
											'arity' => 'name',
										],
									],
								],[
									'value' => 'return',
									'arity' => 'statement',
									'first' => [
										'value' => '?',
										'arity' => 'ternary',
										'first' => [
											'value' => '&&',
											'arity' => 'binary',
											'first' => [
												'value' => 'o',
												'arity' => 'name',
											],
											'second' => [
												'value' => '!==',
												'arity' => 'binary',
												'first' => [
													'value' => 'typeof',
													'arity' => 'unary',
													'first' => [
														'value' => 'o',
														'arity' => 'name',
													],
												],
												'second' => [
													'value' => 'function',
													'arity' => 'literal',
												],
											],
										],
										'second' => [
											'value' => 'o',
											'arity' => 'name',
										],
										'third' => [
											'value' => '[',
											'arity' => 'binary',
											'first' => [
												'value' => 'symbol_table',
												'arity' => 'name',
											],
											'second' => [
												'value' => '(name)',
												'arity' => 'literal',
											],
										],
									],
								]],
								'third' => null,
							]],
						]],
						'key' => 'find',
					],[
						'value' => 'function',
						'arity' => 'function',
						'first' => [],
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
									'value' => 'this',
									'arity' => 'this',
								],
								'second' => [
									'value' => 'parent',
									'arity' => 'literal',
								],
							],
						],
						'key' => 'pop',
					],[
						'value' => 'function',
						'arity' => 'function',
						'first' => [[
							'value' => 'n',
							'arity' => 'name',
						]],
						'second' => [[
							'value' => 'if',
							'arity' => 'statement',
							'first' => [
								'value' => '||',
								'arity' => 'binary',
								'first' => [
									'value' => '!==',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'n',
											'arity' => 'name',
														],
										'second' => [
											'value' => 'arity',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 'name',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'n',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'reserved',
										'arity' => 'literal',
									],
								],
							],
							'second' => [
								'value' => 'return',
								'arity' => 'statement',
							],
							'third' => null,
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [
								'value' => '[',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'this',
										'arity' => 'this',
									],
									'second' => [
										'value' => 'def',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'n',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'value',
										'arity' => 'literal',
									],
								],
							],
						],[
							'value' => 'if',
							'arity' => 'statement',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [[
								'value' => 'if',
								'arity' => 'statement',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 't',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'reserved',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => 'return',
									'arity' => 'statement',
								],
								'third' => null,
							],[
								'value' => 'if',
								'arity' => 'statement',
								'first' => [
									'value' => '===',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 't',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'arity',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 'name',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '(',
									'arity' => 'ternary',
									'first' => [
										'value' => 'n',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'error',
										'arity' => 'literal',
									],
									'third' => [],
								],
								'third' => null,
							]],
							'third' => null,
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => '[',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'this',
										'arity' => 'this',
									],
									'second' => [
										'value' => 'def',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'n',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'value',
										'arity' => 'literal',
									],
								],
							],
							'second' => [
								'value' => 'n',
								'arity' => 'name',
							],
						],[
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
									'value' => 'reserved',
									'arity' => 'literal',
								],
							],
							'second' => [
								'value' => true,
								'arity' => 'literal',
							],
						]],
						'key' => 'reserve',
					],
				]],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'new_scope',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
						'second' => [
							'value' => 'scope',
							'arity' => 'name',
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'scope',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => [],
								'arity' => 'literal',
							],
							'second' => [
								'value' => 'create',
								'arity' => 'literal',
							],
							'third' => [],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'scope',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'def',
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
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'scope',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'parent',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => 's',
							'arity' => 'name',
						],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 'scope',
							'arity' => 'name',
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'advance',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 'id',
						'arity' => 'name',
					]],
					'second' => [[
						'value' => 'if',
						'arity' => 'statement',
						'first' => [
							'value' => '&&',
							'arity' => 'binary',
							'first' => [
								'value' => 'id',
								'arity' => 'name',
							],
							'second' => [
								'value' => '!==',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'token',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'id',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => 'id',
									'arity' => 'name',
								]
							],
						],
						'second' => [
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 'token',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'error',
								'arity' => 'literal',
							],
							'third' => [],
						],
						'third' => null,
					],[
						'value' => 'if',
						'arity' => 'statement',
						'first' => [
							'value' => '>=',
							'arity' => 'binary',
							'first' => [
								'value' => 'token_nr',
								'arity' => 'name',
							],
							'second' => [
								'value' => '.',
								'arity' => 'binary',
								'first' => [
									'value' => 'tokens',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'length',
									'arity' => 'literal',
								],
							],
						],
						'second' => [[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 'token',
								'arity' => 'name',
										],
							'second' => [
								'value' => '[',
								'arity' => 'binary',
								'first' => [
									'value' => 'symbol_table',
									'arity' => 'name',
								],
								'second' => [
									'value' => '(end)',
									'arity' => 'literal',
								],
							],
						],[
							'value' => 'return',
							'arity' => 'statement',
						]],
						'third' => null,
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 't',
							'arity' => 'name',
						],
						'second' => [
							'value' => '[',
							'arity' => 'binary',
							'first' => [
								'value' => 'tokens',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'token_nr',
								'arity' => 'name',
							],
						],
					],[
						'value' => '+=',
						'arity' => 'binary',
						'first' => [
							'value' => 'token_nr',
							'arity' => 'name',
						],
						'second' => [
							'value' => 1,
							'arity' => 'literal',
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'v',
							'arity' => 'name',
						],
						'second' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'value',
								'arity' => 'literal',
							],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'a',
							'arity' => 'name',
						],
						'second' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
									  ],
							'second' => [
								'value' => 'type',
								'arity' => 'literal',
									  ],
							],
					],[
						'value' => 'if',
						'arity' => 'statement',
						'first' => [
							'value' => '===',
							'arity' => 'binary',
							'first' => [
								'value' => 'a',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'name',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 'o',
								'arity' => 'name',
							],
							'second' => [
								'value' => '(',
								'arity' => 'ternary',
								'first' => [
									'value' => 'scope',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'find',
									'arity' => 'literal',
								],
								'third' => [],
							],
						],
						'third' => [
							'value' => 'if',
							'arity' => 'statement',
							'first' => [
								'value' => '===',
								'arity' => 'binary',
								'first' => [
									'value' => 'a',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'operator',
									'arity' => 'literal',
								],
							],
							'second' => [[
								'value' => '=',
								'arity' => 'binary',
								'first' => [
									'value' => 'o',
									'arity' => 'name',
								],
								'second' => [
									'value' => '[',
									'arity' => 'binary',
									'first' => [
										'value' => 'symbol_table',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'v',
										'arity' => 'name',
									],
								],
							],[
								'value' => 'if',
								'arity' => 'statement',
								'first' => [
									'value' => '!',
									'arity' => 'unary',
									'first' => [
										'value' => 'o',
										'arity' => 'name',
									],
								],
								'second' => [
									'value' => '(',
									'arity' => 'ternary',
									'first' => [
										'value' => 't',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'error',
										'arity' => 'literal',
									],
									'third' => [],
								],
								'third' => null,
							]],
							'third' => [
								'value' => 'if',
								'arity' => 'statement',
								'first' => [
									'value' => '||',
									'arity' => 'binary',
									'first' => [
										'value' => '===',
										'arity' => 'binary',
										'first' => [
											'value' => 'a',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'string',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => '===',
										'arity' => 'binary',
										'first' => [
											'value' => 'a',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'number',
											'arity' => 'literal',
										],
									],
								],
								'second' => [[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => 'o',
										'arity' => 'name',
									],
									'second' => [
										'value' => '[',
										'arity' => 'binary',
										'first' => [
											'value' => 'symbol_table',
											'arity' => 'name',
										],
										'second' => [
											'value' => '(literal)',
											'arity' => 'literal',
										],
									]
								],[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => 'a',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'literal',
										'arity' => 'literal',
									],
								]],
								'third' => [
									'value' => '(',
									'arity' => 'ternary',
									'first' => [
										'value' => 't',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'error',
										'arity' => 'literal',
									],
									'third' => [],
								],
							],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'token',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => [],
								'arity' => 'literal',
							],
							'second' => [
								'value' => 'create',
								'arity' => 'literal',
							],
							'third' => [],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'token',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'from',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'from',
								'arity' => 'literal',
							],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'token',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'to',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'to',
								'arity' => 'literal',
							],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'token',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'value',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => 'v',
							'arity' => 'name',
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'token',
								'arity' => 'name',
									  ],
							'second' => [
								'value' => 'arity',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => 'a',
							'arity' => 'name',
						],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 'token',
							'arity' => 'name',
						],
					],
				]],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'expression',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 'rbp',
						'arity' => 'name',
					]],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 't',
							'arity' => 'name',
						],
						'second' => [
							'value' => 'token',
							'arity' => 'name',
						],
					],[
						'value' => '(',
						'arity' => 'binary',
						'first' => [
							'value' => 'advance',
							'arity' => 'name',
						],
						'second' => [],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'left',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'nud',
								'arity' => 'literal',
							],
							'third' => [],
						],
					],[
						'value' => 'while',
						'arity' => 'statement',
						'first' => [
							'value' => '<',
							'arity' => 'binary',
							'first' => [
								'value' => 'rbp',
								'arity' => 'name',
							],
							'second' => [
								'value' => '.',
								'arity' => 'binary',
								'first' => [
									'value' => 'token',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'lbp',
									'arity' => 'literal',
								],
							],
						],
						'second' => [[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'token',
								'arity' => 'name',
							],
						],[
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'advance',
								'arity' => 'name',
							],
							'second' => [],
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 'left',
								'arity' => 'name',
							],
							'second' => [
								'value' => '(',
								'arity' => 'ternary',
								'first' => [
									'value' => 't',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'led',
									'arity' => 'literal',
								],
								'third' => [],
							],
						]],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 'left',
							'arity' => 'name',
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'statement',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'n',
							'arity' => 'name',
						],
						'second' => [
							'value' => 'token',
							'arity' => 'name',
						],
					],[
						'value' => 'if',
						'arity' => 'statement',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'n',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'std',
								'arity' => 'literal',
							],
						],
						'second' => [[
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'advance',
								'arity' => 'name',
							],
							'second' => [],
						],[
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 'scope',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'reserve',
								'arity' => 'literal',
							],
							'third' => [],
						],[
							'value' => 'return',
							'arity' => 'statement',
							'first' => [
								'value' => '(',
								'arity' => 'ternary',
								'first' => [
									'value' => 'n',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'std',
									'arity' => 'literal',
								],
								'third' => [],
							],
						]],
						'third' => (null)
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'v',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'expression',
								'arity' => 'name',
							],
							'second' => [],
						],
					],[
						'value' => 'if',
						'arity' => 'statement',
						'first' => [
							'value' => '&&',
							'arity' => 'binary',
							'first' => [
								'value' => '!',
								'arity' => 'unary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'v',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'assignment',
										'arity' => 'literal',
									],
								],
							],
							'second' => [
								'value' => '!==',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'v',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'id',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '(',
									'arity' => 'literal',
								],
							],
						],
						'second' => [
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 'v',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'error',
								'arity' => 'literal',
							],
							'third' => [],
						],
						'third' => (null)
					],[
						'value' => '(',
						'arity' => 'binary',
						'first' => [
							'value' => 'advance',
							'arity' => 'name',
						],
						'second' => [],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 'v',
							'arity' => 'name',
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'statements',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'a',
							'arity' => 'name',
						],
						'second' => [
							'value' => '[',
							'arity' => 'unary',
							'first' => [],
						],
					],[
						'value' => 'while',
						'arity' => 'statement',
						'first' => [
							'value' => true,
							'arity' => 'literal',
						],
						'second' => [[
							'value' => 'if',
							'arity' => 'statement',
							'first' => [
								'value' => '||',
								'arity' => 'binary',
								'first' => [
									'value' => '===',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'token',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'id',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => '}',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '===',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'token',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'id',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => '(end)',
										'arity' => 'literal',
									],
								],
							],
							'second' => [
								'value' => 'break',
								'arity' => 'statement',
							],
							'third' => null,
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 's',
								'arity' => 'name',
							],
							'second' => [
								'value' => '(',
								'arity' => 'binary',
								'first' => [
									'value' => 'statement',
									'arity' => 'name',
								],
								'second' => [],
							],
						],[
							'value' => 'if',
							'arity' => 'statement',
							'first' => [
								'value' => 's',
								'arity' => 'name',
							],
							'second' => [
								'value' => '(',
								'arity' => 'ternary',
								'first' => [
									'value' => 'a',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'push',
									'arity' => 'literal',
								],
								'third' => [],
							],
							'third' => null,
						]],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => '?',
							'arity' => 'ternary',
							'first' => [
								'value' => '===',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'a',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'length',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => 0,
									'arity' => 'literal',
								],
							],
							'second' => [
								'value' => null,
								'arity' => 'literal',
							],
							'third' => [
								'value' => '?',
								'arity' => 'ternary',
								'first' => [
									'value' => '===',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'a',
											'arity' => 'name',
										],
										'second' => [
											'value' => 'length',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 1,
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '[',
									'arity' => 'binary',
									'first' => [
										'value' => 'a',
										'arity' => 'name',
									],
									'second' => [
										'value' => 0,
										'arity' => 'literal',
									],
								],
								'third' => [
									'value' => 'a',
									'arity' => 'name',
								],
							],
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'block',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 't',
							'arity' => 'name',
						],
						'second' => [
							'value' => 'token',
							'arity' => 'name',
						],
					],[
						'value' => '(',
						'arity' => 'binary',
						'first' => [
							'value' => 'advance',
							'arity' => 'name',
						],
						'second' => [],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 't',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'std',
								'arity' => 'literal',
							],
							'third' => [],
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'original_symbol',
					'arity' => 'name',
				],
				'second' => [
					'value' => '{',
					'arity' => 'unary',
					'first' => [[
						'value' => 'function',
						'arity' => 'function',
						'first' => [],
						'second' => [
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 'this',
								'arity' => 'this',
							],
							'second' => [
								'value' => 'error',
								'arity' => 'literal',
							],
							'third' => [],
						],
						'key' => 'nud',
					],[
						'value' => 'function',
						'arity' => 'function',
						'first' => [[
							'value' => 'left',
							'arity' => 'name',
						]],
						'second' => [
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 'this',
								'arity' => 'this',
							],
							'second' => [
								'value' => 'error',
								'arity' => 'literal',
							],
							'third' => [],
						],
						'key' => 'led',
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'symbol',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 'id',
						'arity' => 'name',
					],[
						'value' => 'bp',
						'arity' => 'name',
					]],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
						'second' => [
							'value' => '[',
							'arity' => 'binary',
							'first' => [
								'value' => 'symbol_table',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'id',
								'arity' => 'name',
							],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'bp',
							'arity' => 'name',
						],
						'second' => [
							'value' => '||',
							'arity' => 'binary',
							'first' => [
								'value' => 'bp',
								'arity' => 'name',
							],
							'second' => [
								'value' => 0,
								'arity' => 'literal',
							],
						],
					],[
						'value' => 'if',
						'arity' => 'statement',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
						'second' => [
							'value' => 'if',
							'arity' => 'statement',
							'first' => [
								'value' => '>=',
								'arity' => 'binary',
								'first' => [
									'value' => 'bp',
									'arity' => 'name',
								],
								'second' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 's',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'lbp',
										'arity' => 'literal',
									],
								],
							],
							'second' => [
								'value' => '=',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 's',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'lbp',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => 'bp',
									'arity' => 'name',
								],
							],
							'third' => null,
						],
						'third' => [[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 's',
								'arity' => 'name',
							],
							'second' => [
								'value' => '(',
								'arity' => 'ternary',
								'first' => [
									'value' => [],
									'arity' => 'literal',
								],
								'second' => [
									'value' => 'create',
									'arity' => 'literal',
								],
								'third' => [],
							],
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => '.',
								'arity' => 'binary',
								'first' => [
									'value' => 's',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'id',
									'arity' => 'literal',
								],
							],
							'second' => [
								'value' => '=',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 's',
										'arity' => 'name',
									],
									'second' => [
										'value' => 'value',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => 'id',
									'arity' => 'name',
								],
							],
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => '.',
								'arity' => 'binary',
								'first' => [
									'value' => 's',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'lbp',
									'arity' => 'literal',
								],
							],
							'second' => [
								'value' => 'bp',
								'arity' => 'name',
							],
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => '[',
								'arity' => 'binary',
								'first' => [
									'value' => 'symbol_table',
									'arity' => 'name',
								],
								'second' => [
									'value' => 'id',
									'arity' => 'name',
								],
							],
							'second' => [
								'value' => 's',
								'arity' => 'name',
							],
						]],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'constant',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 's',
						'arity' => 'name',
					],[
						'value' => 'v',
						'arity' => 'name',
					]],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'x',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'symbol',
								'arity' => 'name',
							],
							'second' => [],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'x',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'nud',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => 'function',
							'arity' => 'function',
							'first' => [],
							'second' => [[
								'value' => '(',
								'arity' => 'ternary',
								'first' => [
									'value' => 'scope',
									'arity' => 'name',
								 ],
								'second' => [
									'value' => 'reserve',
									'arity' => 'literal',
								 ],
								'third' => [],
							],[
								'value' => '=',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'this',
										'arity' => 'this',
									],
									'second' => [
										'value' => 'value',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => '[',
										'arity' => 'binary',
										'first' => [
											'value' => 'symbol_table',
											'arity' => 'name',
										],
										'second' => [
											'value' => '.',
											'arity' => 'binary',
											'first' => [
												'value' => 'this',
												'arity' => 'this',
											],
											'second' => [
												'value' => 'id',
												'arity' => 'literal',
											],
										],
									],
									'second' => [
										'value' => 'value',
										'arity' => 'literal',
									],
								],
							],[
								'value' => '=',
								'arity' => 'binary',
								'first' => [
									'value' => '.',
									'arity' => 'binary',
									'first' => [
										'value' => 'this',
										'arity' => 'this',
									],
									'second' => [
										'value' => 'arity',
										'arity' => 'literal',
									],
								],
								'second' => [
									'value' => 'literal',
									'arity' => 'literal',
								],
							],[
								'value' => 'return',
								'arity' => 'statement',
								'first' => [
									'value' => 'this',
									'arity' => 'this',
								],
							]],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'x',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'value',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => 'v',
							'arity' => 'name',
						],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 'x',
							'arity' => 'name',
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'infix',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 'id',
						'arity' => 'name',
					],[
						'value' => 'bp',
						'arity' => 'name',
					],[
						'value' => 'led',
						'arity' => 'name',
					]],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'symbol',
								'arity' => 'name',
							],
							'second' => [],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 's',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'led',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => '||',
							'arity' => 'binary',
							'first' => [
								'value' => 'led',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'function',
								'arity' => 'function',
								'first' => [[
									'value' => 'left',
									'arity' => 'name',
								]],
								'second' => [[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'first',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 'left',
										'arity' => 'name',
									],
								],[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'second',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => '(',
										'arity' => 'binary',
										'first' => [
											'value' => 'expression',
											'arity' => 'name',
										],
										'second' => [],
									],
								],[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'arity',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 'binary',
										'arity' => 'literal',
									],
								],[
									'value' => 'return',
									'arity' => 'statement',
									'first' => [
										'value' => 'this',
										'arity' => 'this',
									],
								]],
							],
						],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'infixr',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 'id',
						'arity' => 'name',
					],[
						'value' => 'bp',
						'arity' => 'name',
					],[
						'value' => 'led',
						'arity' => 'name',
					]],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'symbol',
								'arity' => 'name',
							],
							'second' => [],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 's',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'led',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => '||',
							'arity' => 'binary',
							'first' => [
								'value' => 'led',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'function',
								'arity' => 'function',
								'first' => [[
									'value' => 'left',
									'arity' => 'name',
								]],
								'second' => [[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'first',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 'left',
										'arity' => 'name',
									],
								],[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'second',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => '(',
										'arity' => 'binary',
										'first' => [
											'value' => 'expression',
											'arity' => 'name',
										],
										'second' => [],
									],
								],[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'arity',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 'binary',
										'arity' => 'literal',
									],
								],[
									'value' => 'return',
									'arity' => 'statement',
									'first' => [
										'value' => 'this',
										'arity' => 'this',
									],
								]],
							],
						],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'assignment',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 'id',
						'arity' => 'name',
					]],
					'second' => [
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'infixr',
								'arity' => 'name',
							],
							'second' => [],
						],
					],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'prefix',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 'id',
						'arity' => 'name',
					],[
						'value' => 'nud',
						'arity' => 'name',
					]],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'symbol',
								'arity' => 'name',
							],
							'second' => [],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 's',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'nud',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => '||',
							'arity' => 'binary',
							'first' => [
								'value' => 'nud',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'function',
								'arity' => 'function',
								'first' => [],
								'second' => [[
									'value' => '(',
									'arity' => 'ternary',
									'first' => [
										'value' => 'scope',
										'arity' => 'name',
												  ],
									'second' => [
										'value' => 'reserve',
										'arity' => 'literal',
												  ],
									'third' => [],
								],[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'first',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => '(',
										'arity' => 'binary',
										'first' => [
											'value' => 'expression',
											'arity' => 'name',
										],
										'second' => [],
									],
								],[
									'value' => '=',
									'arity' => 'binary',
									'first' => [
										'value' => '.',
										'arity' => 'binary',
										'first' => [
											'value' => 'this',
											'arity' => 'this',
										],
										'second' => [
											'value' => 'arity',
											'arity' => 'literal',
										],
									],
									'second' => [
										'value' => 'unary',
										'arity' => 'literal',
									],
								],[
									'value' => 'return',
									'arity' => 'statement',
									'first' => [
										'value' => 'this',
										'arity' => 'this',
									],
								]],
							],
						],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 's',
							'arity' => 'name',
						],
					]],
				],
			],[
				'value' => '=',
				'arity' => 'binary',
				'first' => [
					'value' => 'stmt',
					'arity' => 'name',
				],
				'second' => [
					'value' => 'function',
					'arity' => 'function',
					'first' => [[
						'value' => 's',
						'arity' => 'name',
					],[
						'value' => 'f',
						'arity' => 'name',
					]],
					'second' => [[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => 'x',
							'arity' => 'name',
						],
						'second' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'symbol',
								'arity' => 'name',
							],
							'second' => [],
						],
					],[
						'value' => '=',
						'arity' => 'binary',
						'first' => [
							'value' => '.',
							'arity' => 'binary',
							'first' => [
								'value' => 'x',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'std',
								'arity' => 'literal',
							],
						],
						'second' => [
							'value' => 'f',
							'arity' => 'name',
						],
					],[
						'value' => 'return',
						'arity' => 'statement',
						'first' => [
							'value' => 'x',
							'arity' => 'name',
						],
					]],
				]],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'symbol',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'constant',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'constant',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'constant',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'constant',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'constant',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'constant',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '=',
					'arity' => 'binary',
					'first' => [
						'value' => '.',
						'arity' => 'binary',
						'first' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'symbol',
								'arity' => 'name',
							],
							'second' => [],
						],
						'second' => [
							'value' => 'nud',
							'arity' => 'literal',
						],
					],
					'second' => [
						'value' => 'itself',
						'arity' => 'name',
					],
				],[
					'value' => '=',
					'arity' => 'binary',
					'first' => [
						'value' => '.',
						'arity' => 'binary',
						'first' => [
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'symbol',
								'arity' => 'name',
							],
							'second' => [],
						],
						'second' => [
							'value' => 'nud',
							'arity' => 'literal',
						],
					],
					'second' => [
						'value' => 'function',
						'arity' => 'function',
						'first' => [],
						'second' => [[
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 'scope',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'reserve',
								'arity' => 'literal',
							],
							'third' => [],
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => '.',
								'arity' => 'binary',
								'first' => [
									'value' => 'this',
									'arity' => 'this',
								],
								'second' => [
									'value' => 'arity',
									'arity' => 'literal',
								],
							],
							'second' => [
								'value' => 'this',
								'arity' => 'literal',
							],
						],[
							'value' => 'return',
							'arity' => 'statement',
							'first' => [
								'value' => 'this',
								'arity' => 'this',
							],
						]],
					],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'assignment',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'assignment',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'assignment',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infixr',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infixr',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infixr',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infixr',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infixr',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infixr',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infixr',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infixr',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'infix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'prefix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'prefix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'prefix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'prefix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'prefix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'prefix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'prefix',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'stmt',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'stmt',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'stmt',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'stmt',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'stmt',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => '(',
					'arity' => 'binary',
					'first' => [
						'value' => 'stmt',
						'arity' => 'name',
					],
					'second' => [],
				],[
					'value' => 'return',
					'arity' => 'statement',
					'first' => [
						'value' => 'function',
						'arity' => 'function',
						'first' => [[
							'value' => 'source',
							'arity' => 'name',
						]],
						'second' => [[
								'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 'tokens',
								'arity' => 'name',
									 ],
							'second' => [
								'value' => '(',
								'arity' => 'ternary',
								'first' => [
									'value' => 'source',
									'arity' => 'name',
										  ],
								'second' => [
									'value' => 'tokens',
									'arity' => 'literal',
										  ],
								'third' => [],
							]
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 'token_nr',
								'arity' => 'name',
							],
							'second' => [
								'value' => 0,
								'arity' => 'literal',
							],
						],[
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'new_scope',
								'arity' => 'name',
							],
							'second' => [],
						],[
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'advance',
								'arity' => 'name',
							],
							'second' => [],
						],[
							'value' => '=',
							'arity' => 'binary',
							'first' => [
								'value' => 's',
								'arity' => 'name',
							],
							'second' => [
								'value' => '(',
								'arity' => 'binary',
								'first' => [
									'value' => 'statements',
									'arity' => 'name',
								],
								'second' => [],
							],
						],[
							'value' => '(',
							'arity' => 'binary',
							'first' => [
								'value' => 'advance',
								'arity' => 'name',
							],
							'second' => [],
						],[
							'value' => '(',
							'arity' => 'ternary',
							'first' => [
								'value' => 'scope',
								'arity' => 'name',
							],
							'second' => [
								'value' => 'pop',
								'arity' => 'literal',
							],
							'third' => [],
						],[
							'value' => 'return',
							'arity' => 'statement',
							'first' => [
								'value' => 's',
								'arity' => 'name',
							],
						],
					]],
				],
			],
		],
	];
},

];
