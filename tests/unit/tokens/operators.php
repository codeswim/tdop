<?php

return [

'addition' => function(){
	return tokens( '+', [] ) === [[
		'type' => 'operator',
		'value' => '+',
		'from' => 0,
		'to' => 1,
	]];
},

'subtraction' => function(){
	return tokens( '-', [] ) === [[
		'type' => 'operator',
		'value' => '-',
		'from' => 0,
		'to' => 1,
	]];
},

'multiplication' => function(){
	return tokens( '*', [] ) === [[
		'type' => 'operator',
		'value' => '*',
		'from' => 0,
		'to' => 1,
	]];
},

'division' => function(){
	return tokens( '/', [] ) === [[
		'type' => 'operator',
		'value' => '/',
		'from' => 0,
		'to' => 1,
	]];
},

'modulo' => function(){
	return tokens( '%', [] ) === [[
		'type' => 'operator',
		'value' => '%',
		'from' => 0,
		'to' => 1,
	]];
},

'not' => function(){
	return tokens( '!', [] ) === [[
		'type' => 'operator',
		'value' => '!',
		'from' => 0,
		'to' => 1,
	]];
},

'bitwise AND' => function(){
	return tokens( '&', [] ) === [[
		'type' => 'operator',
		'value' => '&',
		'from' => 0,
		'to' => 1,
	]];
},

'bitwise OR' => function(){
	return tokens( '|', [] ) === [[
		'type' => 'operator',
		'value' => '|',
		'from' => 0,
		'to' => 1,
	]];
},

'bitwise exclusive OR (XOR)' => function(){
	return tokens( '^', [] ) === [[
		'type' => 'operator',
		'value' => '^',
		'from' => 0,
		'to' => 1,
	]];
},

'bitwise NOT' => function(){
	return tokens( '~', [] ) === [[
		'type' => 'operator',
		'value' => '~',
		'from' => 0,
		'to' => 1,
	]];
},

'less than' => function(){
	return tokens( '<', [] ) === [[
		'type' => 'operator',
		'value' => '<',
		'from' => 0,
		'to' => 1,
	]];
},

'greater than' => function(){
	return tokens( '>', [] ) === [[
		'type' => 'operator',
		'value' => '>',
		'from' => 0,
		'to' => 1,
	]];
},

'truthy equality' => function(){
	return tokens( '==', [] ) === [[
		'type' => 'operator',
		'value' => '==',
		'from' => 0,
		'to' => 2,
	]];
},

'boolean intersection' => function(){
	return tokens( '&&', [] ) === [[
		'type' => 'operator',
		'value' => '&&',
		'from' => 0,
		'to' => 2,
	]];
},

'boolean union' => function(){
	return tokens( '||', [] ) === [[
		'type' => 'operator',
		'value' => '||',
		'from' => 0,
		'to' => 2,
	]];
},

'left shift' => function(){
	return tokens( '<<', [] ) === [[
		'type' => 'operator',
		'value' => '<<',
		'from' => 0,
		'to' => 2,
	]];
},

'sign-propogating right shift' => function(){
	return tokens( '>>', [] ) === [[
		'type' => 'operator',
		'value' => '>>',
		'from' => 0,
		'to' => 2,
	]];
},

'zero-fill right shift' => function(){
	return tokens( '>>>', [] ) === [[
		'type' => 'operator',
		'value' => '>>>',
		'from' => 0,
		'to' => 3,
	]];
},

'value equality' => function(){
	return tokens( '===', [] ) === [[
		'type' => 'operator',
		'value' => '===',
		'from' => 0,
		'to' => 3,
	]];
}, 

];
