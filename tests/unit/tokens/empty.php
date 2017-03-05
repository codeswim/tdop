<?php

return [

'An empty string returns null.' => function(){
	return tokens() === null;
},

'All whitespace returns an empty array.' => function(){
	return tokens( "  \n\r   \t \t\t  \n \r" ) === [];
},

];
