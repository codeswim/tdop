<?php

return [

'string using double quotes' => function(){
	return tokens( '"Hello world!"', [] ) === [[
		'type' => 'string',
		'value' => 'Hello world!',
		'from' => 0,
		'to' => 14,
	]];
},

'string using single quotes' => function(){
	return tokens( "'Hello world!'", [] ) === [[
		'type' => 'string',
		'value' => 'Hello world!',
		'from' => 0,
		'to' => 14,
	]];
},

'b string escapement' => function(){
	return tokens( '"\\b"', [] ) === [[
		'type' => 'string',
		'value' => '\\b',
		'from' => 0,
		'to' => 4,
	]];
},

'f string escapement' => function(){
	return tokens( '"\\f"', [] ) === [[
		'type' => 'string',
		'value' => '', // In vim, while holding CTRL: Press V then L
		'from' => 0,
		'to' => 4,
	]];
},

'n string escapement' => function(){
	return tokens( '"\\n"', [] ) === [[
		'type' => 'string',
		'value' => "\n",
		'from' => 0,
		'to' => 4,
	]];
},

'r string escapement' => function(){
	return tokens( '"\\r"', [] ) === [[
		'type' => 'string',
		'value' => "\r",
		'from' => 0,
		'to' => 4,
	]];
},

't string escapement' => function(){
	return tokens( '"\\t"', [] ) === [[
		'type' => 'string',
		'value' => "\t",
		'from' => 0,
		'to' => 4,
	]];
},

// @todo, passes but I don't think this is right
'u string escapement' => function(){
	return tokens( '"\\u2342"', [] ) === [[
		'type' => 'string',
		'value' => 'B',
		'from' => 0,
		'to' => 8,
	]];
},

];
