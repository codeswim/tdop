<?php

return [

'empty anonymous function' => function(){
	return tokens( 'function(){}', [] ) === [[
		'type' => 'name',
		'value' => 'function',
		'from' => 0,
		'to' => 8,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8,
		'to' => 9,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9,
		'to' => 10,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 10,
		'to' => 11,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 11,
		'to' => 12,
	]];
},

];
