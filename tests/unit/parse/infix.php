<?php

return [

'parse() -> infix()' => function(){
	$p = parse();
	$i = $p->infix( '=', 10 );
	return $p->symbol_table === ['=' => $i];
},

];
