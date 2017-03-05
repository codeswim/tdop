<?php

return [

'Created tokens have working error() method.' => function(){
	$a = tokens( 'a' );
	try{ $a[0]->error( 'oops' ); }catch( Exception $e ){ return $e->getMessage() === 'oops'; }
},

];
