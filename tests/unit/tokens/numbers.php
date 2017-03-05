<?php

return [

'zero' => function(){
	return tokens( '0', [] ) === [[
		'type' => 'number',
		'value' => 0,
		'from' => 0,
		'to' => 1,
	]];
},

'whole number' => function(){
	return tokens( '12345', [] ) === [[
		'type' => 'number',
		'value' => 12345,
		'from' => 0,
		'to' => 5,
	]];
},

'negative integer' => function(){
	return tokens( '-8345', [] ) === [[
		'type' => 'operator',
		'value' => '-',
		'from' => 0,
		'to' => 1,
	],[
		'type' => 'number',
		'value' => 8345,
		'from' => 1,
		'to' => 5,
	]];
},

'positive real number' => function(){
	return tokens( '926.943', [] ) === [[
		'type' => 'number',
		'value' => 926.943,
		'from' => 0,
		'to' => 7,
	]];
},

'negative real number' => function(){
	return tokens( '-4.2', [] ) === [[
		'type' => 'operator',
		'value' => '-',
		'from' => 0,
		'to' => 1,
	],[
		'type' => 'number',
		'value' => 4.2,
		'from' => 1,
		'to' => 4,
	]];
},

'lowercase e base 10 exponent' => function(){
	return tokens( '10e4', [] ) === [[
		'type' => 'number',
		'value' => (float) 100000,
		'from' => 0,
		'to' => 4,
	]];
},

'uppercase E base 10 exponent' => function(){
	return tokens( '2E2', [] ) === [[
		'type' => 'number',
		'value' => (float) 200,
		'from' => 0,
		'to' => 3,
	]];
},

'decimal lowercase base 10 exponent' => function(){
	return tokens( '7.2639e2', [] ) === [[
		'type' => 'number',
		'value' => 726.39,
		'from' => 0,
		'to' => 8,
	]];
},

'decimal uppercase base 10 exponent' => function(){
	return tokens( '7.2639E2', [] ) === [[
		'type' => 'number',
		'value' => 726.39,
		'from' => 0,
		'to' => 8,
	]];
},

'lowercase base 10 negative exponent' => function(){
	return tokens( '3.2e-4', [] ) === [[
		'type' => 'number',
		'value' => 0.00032,
		'from' => 0,
		'to' => 6,
	]];
},

'upperscase base 10 negative exponent' => function(){
	return tokens( '3.2E-4', [] ) === [[
		'type' => 'number',
		'value' => 0.00032,
		'from' => 0,
		'to' => 6,
	]];
},

];
