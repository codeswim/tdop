<?php

return [

'Assign whole number to variable.' => function(){
	return tokens( 'var a = 1;', [] ) === [[
		'type' => 'name',
		'value' => 'var',
		'from' => 0,
		'to' => 3,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 4,
		'to' => 5,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6,
		'to' => 7,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 8,
		'to' => 9,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9,
		'to' => 10,
	]];
},

];
