<?php

return [

'double slash comment' => function(){
	return tokens( '// faster, better, more!', [] ) === [];
},

'slash star comment' => function(){
	return tokens( '/* Do it! */', [] ) === [[
		'type' => 'operator',
		'value' => '/',
		'from' => 0,
		'to' => 1,
	],[
		'type' => 'operator',
		'value' => '*',
		'from' => 1,
		'to' => 2,
	],[
		'type' => 'name',
		'value' => 'Do',
		'from' => 3,
		'to' => 5,
	],[
		'type' => 'name',
		'value' => 'it',
		'from' => 6,
		'to' => 8,
	],[
		'type' => 'operator',
		'value' => '!',
		'from' => 8,
		'to' => 9,
	],[
		'type' => 'operator',
		'value' => '*',
		'from' => 10,
		'to' => 11,
	],[
		'type' => 'operator',
		'value' => '/',
		'from' => 11,
		'to' => 12,
	]];
},

];
