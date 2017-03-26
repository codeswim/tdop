<?php

return [

'parse() -> constant()' => function(){
	$p = parse();
	$c = $p->constant( 'true', true );
	return $p->symbol_table === ['true' => $c];
},

];
