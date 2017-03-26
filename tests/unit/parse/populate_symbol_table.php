<?php

return [

'parse() -> populate_symbol_table()' => function(){
	$p = parse();
	$p->populate_symbol_table();
	return array_keys( $p->symbol_table ) === [
		'(end)', '(name)', ':', ';', ')', ']', '}', ',', 'else', // symbols
		'true', 'false', 'null', 'pi', 'Object', 'Array', // constants
		'(literal)', 'this', // symbol
		'=', '+=', '-=', // assignment
		'?', // infix
		'&&', '||', '===', '!==', '<', '<=', '>', '>=', // infixr
		'+', '-', '*', '/', '.', '[', '(', // infix
		'!', 'typeof', 'function', '{', // prefix 
		'var', 'if', 'return', 'break', 'while', // stmt 
	];
},

];
