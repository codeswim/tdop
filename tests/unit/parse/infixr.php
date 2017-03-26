<?php

return [

'parse() -> infixr()' => function(){
	$p = parse();
	$i = $p->infixr( '=', 10 );
	return $p->symbol_table === ['=' => $i];
},

];
