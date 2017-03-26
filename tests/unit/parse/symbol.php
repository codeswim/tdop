<?php

return [

'parse() -> symbol()' => function(){
	$p = parse();
	$s = $p->symbol( '+' );
	return $p->symbol_table === ['+' => $s];
},

];
