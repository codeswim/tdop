<?php

return [

'parse() -> assignment()' => function(){
	$p = parse();
	$a = $p->assignment( '=' );	
	return $p->symbol_table === ['=' => $a];
},

];
