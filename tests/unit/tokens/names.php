<?php

return [

'var begins with lowercase letter and has number.' => function(){
	return tokens( 'a0', [] ) === [[
		'type' => 'name',
		'value' => 'a0',
		'from' => 0,
		'to' => 2,
	]];
},

'var begins with uppercase letter and has number.' => function(){
	return tokens( 'Z9', [] ) === [[
		'type' => 'name',
		'value' => 'Z9',
		'from' => 0,
		'to' => 2,
	]];
},

'var begins with lowercase letter and has underscore.' => function(){
	return tokens( 'a_', [] ) === [[
		'type' => 'name',
		'value' => 'a_',
		'from' => 0,
		'to' => 2,
	]];
},

'var begins with uppercase letter and has underscore.' => function(){
	return tokens( 'Z_', [] ) === [[
		'type' => 'name',
		'value' => 'Z_',
		'from' => 0,
		'to' => 2,
	]];
},

];
