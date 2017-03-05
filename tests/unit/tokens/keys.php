<?php

return [

'Created tokens have keys: type, value, from, to.' => function(){
	return tokens( 'a', [] ) === [[
		'type' => 'name',
		'value' => 'a',
		'from' => 0,
		'to' => 1,
	]];
},

];
