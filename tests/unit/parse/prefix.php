<?php

return [

'parse() -> prefix()' => function(){
	$p = parse();
	$x = $p->prefix( '!' );
	return $p->symbol_table === ['!' => $x];	
},

];
