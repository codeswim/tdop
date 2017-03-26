<?php

return [

'parse() -> stmt()' => function(){
	$p = parse();
	$s = $p->stmt( '{', function(){} );
	return $p->symbol_table === ['{' => $s];
},

];
