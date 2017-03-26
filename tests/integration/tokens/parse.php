<?php

return [

'http://javascript.crockford.com/tdop/parse.js parse' => function(){
	$src = file_get_contents( 'http://javascript.crockford.com/tdop/parse.js' );
	if ( ! $src ){
		echo 'No source for parse.js, skipping'.PHP_EOL;
		return true;
	}
	$t = tokens( $src, ['type', 'value', 'from', 'to'] );
	$count = count( $t );
	$bs = 0;
	$bl = 1375;
	$as = 1376;
	$al = $count - 1376;
	$expected = [[
		'type' => 'name',
		'value' => 'var',
		'from' => 205,
		'to' => 208,
	],[
		'type' => 'name',
		'value' => 'make_parse',
		'from' => 209,
		'to' => 219,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 220,
		'to' => 221,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 222,
		'to' => 230,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 231,
		'to' => 232,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 232,
		'to' => 233,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 234,
		'to' => 235,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 240,
		'to' => 243,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 244,
		'to' => 249,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 249,
		'to' => 250,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 255,
		'to' => 258,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 259,
		'to' => 271,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 272,
		'to' => 273,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 274,
		'to' => 275,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 275,
		'to' => 276,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 276,
		'to' => 277,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 282,
		'to' => 285,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 286,
		'to' => 291,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 291,
		'to' => 292,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 297,
		'to' => 300,
	],[
		'type' => 'name',
		'value' => 'tokens',
		'from' => 301,
		'to' => 307,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 307,
		'to' => 308,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 313,
		'to' => 316,
	],[
		'type' => 'name',
		'value' => 'token_nr',
		'from' => 317,
		'to' => 325,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 325,
		'to' => 326,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 332,
		'to' => 335,
	],[
		'type' => 'name',
		'value' => 'itself',
		'from' => 336,
		'to' => 342,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 343,
		'to' => 344,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 345,
		'to' => 353,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 354,
		'to' => 355,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 355,
		'to' => 356,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 357,
		'to' => 358,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 367,
		'to' => 373,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 374,
		'to' => 378,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 378,
		'to' => 379,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 384,
		'to' => 385,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 385,
		'to' => 386,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 392,
		'to' => 395,
	],[
		'type' => 'name',
		'value' => 'original_scope',
		'from' => 396,
		'to' => 410,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 411,
		'to' => 412,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 413,
		'to' => 414,
	],[
		'type' => 'name',
		'value' => 'define',
		'from' => 423,
		'to' => 429,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 429,
		'to' => 430,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 431,
		'to' => 439,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 440,
		'to' => 441,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 441,
		'to' => 442,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 442,
		'to' => 443,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 444,
		'to' => 445,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 458,
		'to' => 461,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 462,
		'to' => 463,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 464,
		'to' => 465,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 466,
		'to' => 470,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 470,
		'to' => 471,
	],[
		'type' => 'name',
		'value' => 'def',
		'from' => 471,
		'to' => 474,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 474,
		'to' => 475,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 475,
		'to' => 476,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 476,
		'to' => 477,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 477,
		'to' => 482,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 482,
		'to' => 483,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 483,
		'to' => 484,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 497,
		'to' => 499,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 500,
		'to' => 501,
	],[
		'type' => 'name',
		'value' => 'typeof',
		'from' => 501,
		'to' => 507,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 508,
		'to' => 509,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 510,
		'to' => 513,
	],[
		'type' => 'string',
		'value' => 'object',
		'from' => 514,
		'to' => 522,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 522,
		'to' => 523,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 524,
		'to' => 525,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 542,
		'to' => 543,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 543,
		'to' => 544,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 544,
		'to' => 549,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 549,
		'to' => 550,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 550,
		'to' => 551,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 551,
		'to' => 552,
	],[
		'type' => 'name',
		'value' => 'reserved',
		'from' => 552,
		'to' => 560,
	],[
		'type' => 'operator',
		'value' => '?',
		'from' => 561,
		'to' => 562,
	],[
		'type' => 'string',
		'value' => 'Already reserved.',
		'from' => 563,
		'to' => 582,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 583,
		'to' => 584,
	],[
		'type' => 'string',
		'value' => 'Already defined.',
		'from' => 585,
		'to' => 603,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 603,
		'to' => 604,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 604,
		'to' => 605,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 618,
		'to' => 619,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 632,
		'to' => 636,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 636,
		'to' => 637,
	],[
		'type' => 'name',
		'value' => 'def',
		'from' => 637,
		'to' => 640,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 640,
		'to' => 641,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 641,
		'to' => 642,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 642,
		'to' => 643,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 643,
		'to' => 648,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 648,
		'to' => 649,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 650,
		'to' => 651,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 652,
		'to' => 653,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 653,
		'to' => 654,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 667,
		'to' => 668,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 668,
		'to' => 669,
	],[
		'type' => 'name',
		'value' => 'reserved',
		'from' => 669,
		'to' => 677,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 678,
		'to' => 679,
	],[
		'type' => 'name',
		'value' => 'false',
		'from' => 680,
		'to' => 685,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 685,
		'to' => 686,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 699,
		'to' => 700,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 700,
		'to' => 701,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 701,
		'to' => 704,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 710,
		'to' => 711,
	],[
		'type' => 'name',
		'value' => 'itself',
		'from' => 712,
		'to' => 718,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 718,
		'to' => 719,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 732,
		'to' => 733,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 733,
		'to' => 734,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 734,
		'to' => 737,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 743,
		'to' => 744,
	],[
		'type' => 'name',
		'value' => 'null',
		'from' => 745,
		'to' => 749,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 749,
		'to' => 750,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 763,
		'to' => 764,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 764,
		'to' => 765,
	],[
		'type' => 'name',
		'value' => 'std',
		'from' => 765,
		'to' => 768,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 774,
		'to' => 775,
	],[
		'type' => 'name',
		'value' => 'null',
		'from' => 776,
		'to' => 780,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 780,
		'to' => 781,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 794,
		'to' => 795,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 795,
		'to' => 796,
	],[
		'type' => 'name',
		'value' => 'lbp',
		'from' => 796,
		'to' => 799,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 805,
		'to' => 806,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 807,
		'to' => 808,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 808,
		'to' => 809,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 822,
		'to' => 823,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 823,
		'to' => 824,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 824,
		'to' => 829,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 833,
		'to' => 834,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 835,
		'to' => 840,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 840,
		'to' => 841,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 854,
		'to' => 860,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 861,
		'to' => 862,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 862,
		'to' => 863,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 872,
		'to' => 873,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 873,
		'to' => 874,
	],[
		'type' => 'name',
		'value' => 'find',
		'from' => 883,
		'to' => 887,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 887,
		'to' => 888,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 889,
		'to' => 897,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 898,
		'to' => 899,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 899,
		'to' => 900,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 900,
		'to' => 901,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 902,
		'to' => 903,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 916,
		'to' => 919,
	],[
		'type' => 'name',
		'value' => 'e',
		'from' => 920,
		'to' => 921,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 922,
		'to' => 923,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 924,
		'to' => 928,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 928,
		'to' => 929,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 930,
		'to' => 931,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 931,
		'to' => 932,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 945,
		'to' => 950,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 951,
		'to' => 952,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 952,
		'to' => 956,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 956,
		'to' => 957,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 958,
		'to' => 959,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 976,
		'to' => 977,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 978,
		'to' => 979,
	],[
		'type' => 'name',
		'value' => 'e',
		'from' => 980,
		'to' => 981,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 981,
		'to' => 982,
	],[
		'type' => 'name',
		'value' => 'def',
		'from' => 982,
		'to' => 985,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 985,
		'to' => 986,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 986,
		'to' => 987,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 987,
		'to' => 988,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 988,
		'to' => 989,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1006,
		'to' => 1008,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1009,
		'to' => 1010,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 1010,
		'to' => 1011,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 1012,
		'to' => 1014,
	],[
		'type' => 'name',
		'value' => 'typeof',
		'from' => 1015,
		'to' => 1021,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 1022,
		'to' => 1023,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 1024,
		'to' => 1027,
	],[
		'type' => 'string',
		'value' => 'function',
		'from' => 1028,
		'to' => 1038,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1038,
		'to' => 1039,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1040,
		'to' => 1041,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 1062,
		'to' => 1068,
	],[
		'type' => 'name',
		'value' => 'e',
		'from' => 1069,
		'to' => 1070,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1070,
		'to' => 1071,
	],[
		'type' => 'name',
		'value' => 'def',
		'from' => 1071,
		'to' => 1074,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 1074,
		'to' => 1075,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1075,
		'to' => 1076,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 1076,
		'to' => 1077,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1077,
		'to' => 1078,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1095,
		'to' => 1096,
	],[
		'type' => 'name',
		'value' => 'e',
		'from' => 1113,
		'to' => 1114,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1115,
		'to' => 1116,
	],[
		'type' => 'name',
		'value' => 'e',
		'from' => 1117,
		'to' => 1118,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1118,
		'to' => 1119,
	],[
		'type' => 'name',
		'value' => 'parent',
		'from' => 1119,
		'to' => 1125,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1125,
		'to' => 1126,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1143,
		'to' => 1145,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1146,
		'to' => 1147,
	],[
		'type' => 'operator',
		'value' => '!',
		'from' => 1147,
		'to' => 1148,
	],[
		'type' => 'name',
		'value' => 'e',
		'from' => 1148,
		'to' => 1149,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1149,
		'to' => 1150,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1151,
		'to' => 1152,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 1173,
		'to' => 1174,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1175,
		'to' => 1176,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 1177,
		'to' => 1189,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 1189,
		'to' => 1190,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1190,
		'to' => 1191,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 1191,
		'to' => 1192,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1192,
		'to' => 1193,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 1214,
		'to' => 1220,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 1221,
		'to' => 1222,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 1223,
		'to' => 1225,
	],[
		'type' => 'name',
		'value' => 'typeof',
		'from' => 1226,
		'to' => 1232,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 1233,
		'to' => 1234,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 1235,
		'to' => 1238,
	],[
		'type' => 'string',
		'value' => 'function',
		'from' => 1239,
		'to' => 1249,
	],[
		'type' => 'operator',
		'value' => '?',
		'from' => 1250,
		'to' => 1251,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 1252,
		'to' => 1253,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 1254,
		'to' => 1255,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 1256,
		'to' => 1268,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 1268,
		'to' => 1269,
	],[
		'type' => 'string',
		'value' => '(name)',
		'from' => 1269,
		'to' => 1277,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 1277,
		'to' => 1278,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1278,
		'to' => 1279,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1296,
		'to' => 1297,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1310,
		'to' => 1311,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1320,
		'to' => 1321,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 1321,
		'to' => 1322,
	],[
		'type' => 'name',
		'value' => 'pop',
		'from' => 1331,
		'to' => 1334,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 1334,
		'to' => 1335,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 1336,
		'to' => 1344,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1345,
		'to' => 1346,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1346,
		'to' => 1347,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1348,
		'to' => 1349,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 1362,
		'to' => 1367,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1368,
		'to' => 1369,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 1370,
		'to' => 1374,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1374,
		'to' => 1375,
	],[
		'type' => 'name',
		'value' => 'parent',
		'from' => 1375,
		'to' => 1381,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1381,
		'to' => 1382,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1391,
		'to' => 1392,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 1392,
		'to' => 1393,
	],[
		'type' => 'name',
		'value' => 'reserve',
		'from' => 1402,
		'to' => 1409,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 1409,
		'to' => 1410,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 1411,
		'to' => 1419,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1420,
		'to' => 1421,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1421,
		'to' => 1422,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1422,
		'to' => 1423,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1424,
		'to' => 1425,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1438,
		'to' => 1440,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1441,
		'to' => 1442,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1442,
		'to' => 1443,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1443,
		'to' => 1444,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 1444,
		'to' => 1449,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 1450,
		'to' => 1453,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 1454,
		'to' => 1460,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 1461,
		'to' => 1463,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1464,
		'to' => 1465,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1465,
		'to' => 1466,
	],[
		'type' => 'name',
		'value' => 'reserved',
		'from' => 1466,
		'to' => 1474,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1474,
		'to' => 1475,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1476,
		'to' => 1477,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 1494,
		'to' => 1500,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1500,
		'to' => 1501,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1514,
		'to' => 1515,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 1528,
		'to' => 1531,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 1532,
		'to' => 1533,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1534,
		'to' => 1535,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 1536,
		'to' => 1540,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1540,
		'to' => 1541,
	],[
		'type' => 'name',
		'value' => 'def',
		'from' => 1541,
		'to' => 1544,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 1544,
		'to' => 1545,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1545,
		'to' => 1546,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1546,
		'to' => 1547,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 1547,
		'to' => 1552,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 1552,
		'to' => 1553,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1553,
		'to' => 1554,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1567,
		'to' => 1569,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1570,
		'to' => 1571,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 1571,
		'to' => 1572,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1572,
		'to' => 1573,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1574,
		'to' => 1575,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1592,
		'to' => 1594,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1595,
		'to' => 1596,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 1596,
		'to' => 1597,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1597,
		'to' => 1598,
	],[
		'type' => 'name',
		'value' => 'reserved',
		'from' => 1598,
		'to' => 1606,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1606,
		'to' => 1607,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1608,
		'to' => 1609,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 1630,
		'to' => 1636,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1636,
		'to' => 1637,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1654,
		'to' => 1655,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1672,
		'to' => 1674,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1675,
		'to' => 1676,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 1676,
		'to' => 1677,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1677,
		'to' => 1678,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 1678,
		'to' => 1683,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 1684,
		'to' => 1687,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 1688,
		'to' => 1694,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1694,
		'to' => 1695,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1696,
		'to' => 1697,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1718,
		'to' => 1719,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1719,
		'to' => 1720,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 1720,
		'to' => 1725,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1725,
		'to' => 1726,
	],[
		'type' => 'string',
		'value' => 'Already defined.',
		'from' => 1726,
		'to' => 1744,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1744,
		'to' => 1745,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1745,
		'to' => 1746,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1763,
		'to' => 1764,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1777,
		'to' => 1778,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 1791,
		'to' => 1795,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1795,
		'to' => 1796,
	],[
		'type' => 'name',
		'value' => 'def',
		'from' => 1796,
		'to' => 1799,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 1799,
		'to' => 1800,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1800,
		'to' => 1801,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1801,
		'to' => 1802,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 1802,
		'to' => 1807,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 1807,
		'to' => 1808,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1809,
		'to' => 1810,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1811,
		'to' => 1812,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1812,
		'to' => 1813,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 1826,
		'to' => 1827,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1827,
		'to' => 1828,
	],[
		'type' => 'name',
		'value' => 'reserved',
		'from' => 1828,
		'to' => 1836,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1837,
		'to' => 1838,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 1839,
		'to' => 1843,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1843,
		'to' => 1844,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1853,
		'to' => 1854,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1859,
		'to' => 1860,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1860,
		'to' => 1861,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 1867,
		'to' => 1870,
	],[
		'type' => 'name',
		'value' => 'new_scope',
		'from' => 1871,
		'to' => 1880,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1881,
		'to' => 1882,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 1883,
		'to' => 1891,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1892,
		'to' => 1893,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1893,
		'to' => 1894,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1895,
		'to' => 1896,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 1905,
		'to' => 1908,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 1909,
		'to' => 1910,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1911,
		'to' => 1912,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 1913,
		'to' => 1918,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1918,
		'to' => 1919,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 1928,
		'to' => 1933,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1934,
		'to' => 1935,
	],[
		'type' => 'name',
		'value' => 'Object',
		'from' => 1936,
		'to' => 1942,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1942,
		'to' => 1943,
	],[
		'type' => 'name',
		'value' => 'create',
		'from' => 1943,
		'to' => 1949,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1949,
		'to' => 1950,
	],[
		'type' => 'name',
		'value' => 'original_scope',
		'from' => 1950,
		'to' => 1964,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1964,
		'to' => 1965,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1965,
		'to' => 1966,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 1975,
		'to' => 1980,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1980,
		'to' => 1981,
	],[
		'type' => 'name',
		'value' => 'def',
		'from' => 1981,
		'to' => 1984,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1985,
		'to' => 1986,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1987,
		'to' => 1988,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1988,
		'to' => 1989,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1989,
		'to' => 1990,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 1999,
		'to' => 2004,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2004,
		'to' => 2005,
	],[
		'type' => 'name',
		'value' => 'parent',
		'from' => 2005,
		'to' => 2011,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2012,
		'to' => 2013,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 2014,
		'to' => 2015,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2015,
		'to' => 2016,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 2025,
		'to' => 2031,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 2032,
		'to' => 2037,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2037,
		'to' => 2038,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2043,
		'to' => 2044,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2044,
		'to' => 2045,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 2051,
		'to' => 2054,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 2055,
		'to' => 2062,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2063,
		'to' => 2064,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 2065,
		'to' => 2073,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2074,
		'to' => 2075,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 2075,
		'to' => 2077,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2077,
		'to' => 2078,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2079,
		'to' => 2080,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 2089,
		'to' => 2092,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 2093,
		'to' => 2094,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 2094,
		'to' => 2095,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 2096,
		'to' => 2097,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 2097,
		'to' => 2098,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 2099,
		'to' => 2100,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 2100,
		'to' => 2101,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 2102,
		'to' => 2103,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2103,
		'to' => 2104,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2113,
		'to' => 2115,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2116,
		'to' => 2117,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 2117,
		'to' => 2119,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 2120,
		'to' => 2122,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2123,
		'to' => 2128,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2128,
		'to' => 2129,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 2129,
		'to' => 2131,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 2132,
		'to' => 2135,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 2136,
		'to' => 2138,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2138,
		'to' => 2139,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2140,
		'to' => 2141,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2154,
		'to' => 2159,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2159,
		'to' => 2160,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 2160,
		'to' => 2165,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2165,
		'to' => 2166,
	],[
		'type' => 'string',
		'value' => "Expected '",
		'from' => 2166,
		'to' => 2178,
	],[
		'type' => 'operator',
		'value' => '+',
		'from' => 2179,
		'to' => 2180,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 2181,
		'to' => 2183,
	],[
		'type' => 'operator',
		'value' => '+',
		'from' => 2184,
		'to' => 2185,
	],[
		'type' => 'string',
		'value' => "'.",
		'from' => 2186,
		'to' => 2190,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2190,
		'to' => 2191,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2191,
		'to' => 2192,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2201,
		'to' => 2202,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2211,
		'to' => 2213,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2214,
		'to' => 2215,
	],[
		'type' => 'name',
		'value' => 'token_nr',
		'from' => 2215,
		'to' => 2223,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 2224,
		'to' => 2226,
	],[
		'type' => 'name',
		'value' => 'tokens',
		'from' => 2227,
		'to' => 2233,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2233,
		'to' => 2234,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 2234,
		'to' => 2240,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2240,
		'to' => 2241,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2242,
		'to' => 2243,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2256,
		'to' => 2261,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2262,
		'to' => 2263,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 2264,
		'to' => 2276,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 2276,
		'to' => 2277,
	],[
		'type' => 'string',
		'value' => '(end)',
		'from' => 2277,
		'to' => 2284,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 2284,
		'to' => 2285,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2285,
		'to' => 2286,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 2299,
		'to' => 2305,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2305,
		'to' => 2306,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2315,
		'to' => 2316,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 2325,
		'to' => 2326,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2327,
		'to' => 2328,
	],[
		'type' => 'name',
		'value' => 'tokens',
		'from' => 2329,
		'to' => 2335,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 2335,
		'to' => 2336,
	],[
		'type' => 'name',
		'value' => 'token_nr',
		'from' => 2336,
		'to' => 2344,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 2344,
		'to' => 2345,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2345,
		'to' => 2346,
	],[
		'type' => 'name',
		'value' => 'token_nr',
		'from' => 2355,
		'to' => 2363,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2364,
		'to' => 2366,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 2367,
		'to' => 2368,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2368,
		'to' => 2369,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 2378,
		'to' => 2379,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2380,
		'to' => 2381,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 2382,
		'to' => 2383,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2383,
		'to' => 2384,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 2384,
		'to' => 2389,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2389,
		'to' => 2390,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 2399,
		'to' => 2400,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2401,
		'to' => 2402,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 2403,
		'to' => 2404,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2404,
		'to' => 2405,
	],[
		'type' => 'name',
		'value' => 'type',
		'from' => 2405,
		'to' => 2409,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2409,
		'to' => 2410,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2419,
		'to' => 2421,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2422,
		'to' => 2423,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 2423,
		'to' => 2424,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 2425,
		'to' => 2428,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 2429,
		'to' => 2435,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2435,
		'to' => 2436,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2437,
		'to' => 2438,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 2451,
		'to' => 2452,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2453,
		'to' => 2454,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 2455,
		'to' => 2460,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2460,
		'to' => 2461,
	],[
		'type' => 'name',
		'value' => 'find',
		'from' => 2461,
		'to' => 2465,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2465,
		'to' => 2466,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 2466,
		'to' => 2467,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2467,
		'to' => 2468,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2468,
		'to' => 2469,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2478,
		'to' => 2479,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 2480,
		'to' => 2484,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2485,
		'to' => 2487,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2488,
		'to' => 2489,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 2489,
		'to' => 2490,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 2491,
		'to' => 2494,
	],[
		'type' => 'string',
		'value' => 'operator',
		'from' => 2495,
		'to' => 2505,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2505,
		'to' => 2506,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2507,
		'to' => 2508,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 2521,
		'to' => 2522,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2523,
		'to' => 2524,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 2525,
		'to' => 2537,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 2537,
		'to' => 2538,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 2538,
		'to' => 2539,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 2539,
		'to' => 2540,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2540,
		'to' => 2541,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2554,
		'to' => 2556,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2557,
		'to' => 2558,
	],[
		'type' => 'operator',
		'value' => '!',
		'from' => 2558,
		'to' => 2559,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 2559,
		'to' => 2560,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2560,
		'to' => 2561,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2562,
		'to' => 2563,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 2580,
		'to' => 2581,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2581,
		'to' => 2582,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 2582,
		'to' => 2587,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2587,
		'to' => 2588,
	],[
		'type' => 'string',
		'value' => 'Unknown operator.',
		'from' => 2588,
		'to' => 2607,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2607,
		'to' => 2608,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2608,
		'to' => 2609,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2622,
		'to' => 2623,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2632,
		'to' => 2633,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 2634,
		'to' => 2638,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2639,
		'to' => 2641,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2642,
		'to' => 2643,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 2643,
		'to' => 2644,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 2645,
		'to' => 2648,
	],[
		'type' => 'string',
		'value' => 'string',
		'from' => 2649,
		'to' => 2657,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 2658,
		'to' => 2660,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 2661,
		'to' => 2662,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 2663,
		'to' => 2666,
	],[
		'type' => 'string',
		'value' => 'number',
		'from' => 2668,
		'to' => 2676,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2676,
		'to' => 2677,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2678,
		'to' => 2679,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 2692,
		'to' => 2693,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2694,
		'to' => 2695,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 2696,
		'to' => 2708,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 2708,
		'to' => 2709,
	],[
		'type' => 'string',
		'value' => '(literal)',
		'from' => 2709,
		'to' => 2720,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 2720,
		'to' => 2721,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2721,
		'to' => 2722,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 2735,
		'to' => 2736,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2737,
		'to' => 2738,
	],[
		'type' => 'string',
		'value' => 'literal',
		'from' => 2739,
		'to' => 2748,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2748,
		'to' => 2749,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2758,
		'to' => 2759,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 2760,
		'to' => 2764,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2765,
		'to' => 2766,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 2779,
		'to' => 2780,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2780,
		'to' => 2781,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 2781,
		'to' => 2786,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2786,
		'to' => 2787,
	],[
		'type' => 'string',
		'value' => 'Unexpected token.',
		'from' => 2787,
		'to' => 2806,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2806,
		'to' => 2807,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2807,
		'to' => 2808,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2817,
		'to' => 2818,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2827,
		'to' => 2832,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2833,
		'to' => 2834,
	],[
		'type' => 'name',
		'value' => 'Object',
		'from' => 2835,
		'to' => 2841,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2841,
		'to' => 2842,
	],[
		'type' => 'name',
		'value' => 'create',
		'from' => 2842,
		'to' => 2848,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2848,
		'to' => 2849,
	],[
		'type' => 'name',
		'value' => 'o',
		'from' => 2849,
		'to' => 2850,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2850,
		'to' => 2851,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2851,
		'to' => 2852,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2861,
		'to' => 2866,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2866,
		'to' => 2867,
	],[
		'type' => 'name',
		'value' => 'from',
		'from' => 2867,
		'to' => 2871,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2873,
		'to' => 2874,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 2875,
		'to' => 2876,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2876,
		'to' => 2877,
	],[
		'type' => 'name',
		'value' => 'from',
		'from' => 2877,
		'to' => 2881,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2881,
		'to' => 2882,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2891,
		'to' => 2896,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2896,
		'to' => 2897,
	],[
		'type' => 'name',
		'value' => 'to',
		'from' => 2897,
		'to' => 2899,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2903,
		'to' => 2904,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 2905,
		'to' => 2906,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2906,
		'to' => 2907,
	],[
		'type' => 'name',
		'value' => 'to',
		'from' => 2907,
		'to' => 2909,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2909,
		'to' => 2910,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2919,
		'to' => 2924,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2924,
		'to' => 2925,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 2925,
		'to' => 2930,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2931,
		'to' => 2932,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 2933,
		'to' => 2934,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2934,
		'to' => 2935,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2944,
		'to' => 2949,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2949,
		'to' => 2950,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 2950,
		'to' => 2955,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2956,
		'to' => 2957,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 2958,
		'to' => 2959,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2959,
		'to' => 2960,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 2969,
		'to' => 2975,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 2976,
		'to' => 2981,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2981,
		'to' => 2982,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2987,
		'to' => 2988,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2988,
		'to' => 2989,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 2995,
		'to' => 2998,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 2999,
		'to' => 3009,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3010,
		'to' => 3011,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 3012,
		'to' => 3020,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3021,
		'to' => 3022,
	],[
		'type' => 'name',
		'value' => 'rbp',
		'from' => 3022,
		'to' => 3025,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3025,
		'to' => 3026,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3027,
		'to' => 3028,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 3037,
		'to' => 3040,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 3041,
		'to' => 3045,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3045,
		'to' => 3046,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 3055,
		'to' => 3058,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 3059,
		'to' => 3060,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3061,
		'to' => 3062,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 3063,
		'to' => 3068,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3068,
		'to' => 3069,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 3078,
		'to' => 3085,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3085,
		'to' => 3086,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3086,
		'to' => 3087,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3087,
		'to' => 3088,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 3097,
		'to' => 3101,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3102,
		'to' => 3103,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 3104,
		'to' => 3105,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3105,
		'to' => 3106,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 3106,
		'to' => 3109,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3109,
		'to' => 3110,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3110,
		'to' => 3111,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3111,
		'to' => 3112,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 3121,
		'to' => 3126,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3127,
		'to' => 3128,
	],[
		'type' => 'name',
		'value' => 'rbp',
		'from' => 3128,
		'to' => 3131,
	],[
		'type' => 'operator',
		'value' => '<',
		'from' => 3132,
		'to' => 3133,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 3134,
		'to' => 3139,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3139,
		'to' => 3140,
	],[
		'type' => 'name',
		'value' => 'lbp',
		'from' => 3140,
		'to' => 3143,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3143,
		'to' => 3144,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3145,
		'to' => 3146,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 3159,
		'to' => 3160,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3161,
		'to' => 3162,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 3163,
		'to' => 3168,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3168,
		'to' => 3169,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 3182,
		'to' => 3189,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3189,
		'to' => 3190,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3190,
		'to' => 3191,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3191,
		'to' => 3192,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 3205,
		'to' => 3209,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3210,
		'to' => 3211,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 3212,
		'to' => 3213,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3213,
		'to' => 3214,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 3214,
		'to' => 3217,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3217,
		'to' => 3218,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 3218,
		'to' => 3222,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3222,
		'to' => 3223,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3223,
		'to' => 3224,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3233,
		'to' => 3234,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 3243,
		'to' => 3249,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 3250,
		'to' => 3254,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3254,
		'to' => 3255,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3260,
		'to' => 3261,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3261,
		'to' => 3262,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 3268,
		'to' => 3271,
	],[
		'type' => 'name',
		'value' => 'statement',
		'from' => 3272,
		'to' => 3281,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3282,
		'to' => 3283,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 3284,
		'to' => 3292,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3293,
		'to' => 3294,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3294,
		'to' => 3295,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3296,
		'to' => 3297,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 3306,
		'to' => 3309,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 3310,
		'to' => 3311,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3312,
		'to' => 3313,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 3314,
		'to' => 3319,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 3319,
		'to' => 3320,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 3321,
		'to' => 3322,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3322,
		'to' => 3323,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3333,
		'to' => 3335,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3336,
		'to' => 3337,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 3337,
		'to' => 3338,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3338,
		'to' => 3339,
	],[
		'type' => 'name',
		'value' => 'std',
		'from' => 3339,
		'to' => 3342,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3342,
		'to' => 3343,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3344,
		'to' => 3345,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 3358,
		'to' => 3365,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3365,
		'to' => 3366,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3366,
		'to' => 3367,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3367,
		'to' => 3368,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 3381,
		'to' => 3386,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3386,
		'to' => 3387,
	],[
		'type' => 'name',
		'value' => 'reserve',
		'from' => 3387,
		'to' => 3394,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3394,
		'to' => 3395,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 3395,
		'to' => 3396,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3396,
		'to' => 3397,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3397,
		'to' => 3398,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 3411,
		'to' => 3417,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 3418,
		'to' => 3419,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3419,
		'to' => 3420,
	],[
		'type' => 'name',
		'value' => 'std',
		'from' => 3420,
		'to' => 3423,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3423,
		'to' => 3424,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3424,
		'to' => 3425,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3425,
		'to' => 3426,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3435,
		'to' => 3436,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 3445,
		'to' => 3446,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3447,
		'to' => 3448,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 3449,
		'to' => 3459,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3459,
		'to' => 3460,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 3460,
		'to' => 3461,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3461,
		'to' => 3462,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3462,
		'to' => 3463,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3472,
		'to' => 3474,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3475,
		'to' => 3476,
	],[
		'type' => 'operator',
		'value' => '!',
		'from' => 3476,
		'to' => 3477,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 3477,
		'to' => 3478,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3478,
		'to' => 3479,
	],[
		'type' => 'name',
		'value' => 'assignment',
		'from' => 3479,
		'to' => 3489,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 3490,
		'to' => 3492,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 3493,
		'to' => 3494,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3494,
		'to' => 3495,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 3495,
		'to' => 3497,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 3498,
		'to' => 3501,
	],[
		'type' => 'string',
		'value' => '(',
		'from' => 3502,
		'to' => 3505,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3505,
		'to' => 3506,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3507,
		'to' => 3508,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 3521,
		'to' => 3522,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3522,
		'to' => 3523,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 3523,
		'to' => 3528,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3528,
		'to' => 3529,
	],[
		'type' => 'string',
		'value' => 'Bad expression statement.',
		'from' => 3529,
		'to' => 3556,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3556,
		'to' => 3557,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3557,
		'to' => 3558,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3567,
		'to' => 3568,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 3577,
		'to' => 3584,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3584,
		'to' => 3585,
	],[
		'type' => 'string',
		'value' => ';',
		'from' => 3585,
		'to' => 3588,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3588,
		'to' => 3589,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3589,
		'to' => 3590,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 3599,
		'to' => 3605,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 3606,
		'to' => 3607,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3607,
		'to' => 3608,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3613,
		'to' => 3614,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3614,
		'to' => 3615,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 3621,
		'to' => 3624,
	],[
		'type' => 'name',
		'value' => 'statements',
		'from' => 3625,
		'to' => 3635,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3636,
		'to' => 3637,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 3638,
		'to' => 3646,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3647,
		'to' => 3648,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3648,
		'to' => 3649,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3650,
		'to' => 3651,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 3660,
		'to' => 3663,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 3664,
		'to' => 3665,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3666,
		'to' => 3667,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 3668,
		'to' => 3669,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 3669,
		'to' => 3670,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 3670,
		'to' => 3671,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 3672,
		'to' => 3673,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3673,
		'to' => 3674,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 3683,
		'to' => 3688,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3689,
		'to' => 3690,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 3690,
		'to' => 3694,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3694,
		'to' => 3695,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3696,
		'to' => 3697,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3710,
		'to' => 3712,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3713,
		'to' => 3714,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 3714,
		'to' => 3719,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3719,
		'to' => 3720,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 3720,
		'to' => 3722,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 3723,
		'to' => 3726,
	],[
		'type' => 'string',
		'value' => '}',
		'from' => 3727,
		'to' => 3730,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 3731,
		'to' => 3733,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 3734,
		'to' => 3739,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3739,
		'to' => 3740,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 3740,
		'to' => 3742,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 3743,
		'to' => 3746,
	],[
		'type' => 'string',
		'value' => '(end)',
		'from' => 3747,
		'to' => 3754,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3754,
		'to' => 3755,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3756,
		'to' => 3757,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 3774,
		'to' => 3779,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3779,
		'to' => 3780,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3793,
		'to' => 3794,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 3807,
		'to' => 3808,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3809,
		'to' => 3810,
	],[
		'type' => 'name',
		'value' => 'statement',
		'from' => 3811,
		'to' => 3820,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3820,
		'to' => 3821,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3821,
		'to' => 3822,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3822,
		'to' => 3823,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3836,
		'to' => 3838,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3839,
		'to' => 3840,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 3840,
		'to' => 3841,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3841,
		'to' => 3842,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3843,
		'to' => 3844,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 3861,
		'to' => 3862,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3862,
		'to' => 3863,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 3863,
		'to' => 3867,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3867,
		'to' => 3868,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 3868,
		'to' => 3869,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3869,
		'to' => 3870,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3870,
		'to' => 3871,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3884,
		'to' => 3885,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3894,
		'to' => 3895,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 3904,
		'to' => 3910,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 3911,
		'to' => 3912,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3912,
		'to' => 3913,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 3913,
		'to' => 3919,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 3920,
		'to' => 3923,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 3924,
		'to' => 3925,
	],[
		'type' => 'operator',
		'value' => '?',
		'from' => 3926,
		'to' => 3927,
	],[
		'type' => 'name',
		'value' => 'null',
		'from' => 3928,
		'to' => 3932,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 3933,
		'to' => 3934,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 3935,
		'to' => 3936,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3936,
		'to' => 3937,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 3937,
		'to' => 3943,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 3944,
		'to' => 3947,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 3948,
		'to' => 3949,
	],[
		'type' => 'operator',
		'value' => '?',
		'from' => 3950,
		'to' => 3951,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 3952,
		'to' => 3953,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 3953,
		'to' => 3954,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 3954,
		'to' => 3955,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 3955,
		'to' => 3956,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 3957,
		'to' => 3958,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 3959,
		'to' => 3960,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3960,
		'to' => 3961,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3966,
		'to' => 3967,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3967,
		'to' => 3968,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 3974,
		'to' => 3977,
	],[
		'type' => 'name',
		'value' => 'block',
		'from' => 3978,
		'to' => 3983,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3984,
		'to' => 3985,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 3986,
		'to' => 3994,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3995,
		'to' => 3996,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3996,
		'to' => 3997,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3998,
		'to' => 3999,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 4008,
		'to' => 4011,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 4012,
		'to' => 4013,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4014,
		'to' => 4015,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 4016,
		'to' => 4021,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4021,
		'to' => 4022,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 4031,
		'to' => 4038,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4038,
		'to' => 4039,
	],[
		'type' => 'string',
		'value' => '{',
		'from' => 4039,
		'to' => 4042,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4042,
		'to' => 4043,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4043,
		'to' => 4044,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 4053,
		'to' => 4059,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 4060,
		'to' => 4061,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4061,
		'to' => 4062,
	],[
		'type' => 'name',
		'value' => 'std',
		'from' => 4062,
		'to' => 4065,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4065,
		'to' => 4066,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4066,
		'to' => 4067,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4067,
		'to' => 4068,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4073,
		'to' => 4074,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4074,
		'to' => 4075,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 4081,
		'to' => 4084,
	],[
		'type' => 'name',
		'value' => 'original_symbol',
		'from' => 4085,
		'to' => 4100,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4101,
		'to' => 4102,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4103,
		'to' => 4104,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 4113,
		'to' => 4116,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 4116,
		'to' => 4117,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 4118,
		'to' => 4126,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4127,
		'to' => 4128,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4128,
		'to' => 4129,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4130,
		'to' => 4131,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 4144,
		'to' => 4148,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4148,
		'to' => 4149,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 4149,
		'to' => 4154,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4154,
		'to' => 4155,
	],[
		'type' => 'string',
		'value' => 'Undefined.',
		'from' => 4155,
		'to' => 4167,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4167,
		'to' => 4168,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4168,
		'to' => 4169,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4178,
		'to' => 4179,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4179,
		'to' => 4180,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 4189,
		'to' => 4192,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 4192,
		'to' => 4193,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 4194,
		'to' => 4202,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4203,
		'to' => 4204,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 4204,
		'to' => 4208,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4208,
		'to' => 4209,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4210,
		'to' => 4211,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 4224,
		'to' => 4228,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4228,
		'to' => 4229,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 4229,
		'to' => 4234,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4234,
		'to' => 4235,
	],[
		'type' => 'string',
		'value' => 'Missing operator.',
		'from' => 4235,
		'to' => 4254,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4254,
		'to' => 4255,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4255,
		'to' => 4256,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4265,
		'to' => 4266,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4271,
		'to' => 4272,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4272,
		'to' => 4273,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 4279,
		'to' => 4282,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 4283,
		'to' => 4289,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4290,
		'to' => 4291,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 4292,
		'to' => 4300,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4301,
		'to' => 4302,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 4302,
		'to' => 4304,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4304,
		'to' => 4305,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 4306,
		'to' => 4308,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4308,
		'to' => 4309,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4310,
		'to' => 4311,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 4320,
		'to' => 4323,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4324,
		'to' => 4325,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4326,
		'to' => 4327,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 4328,
		'to' => 4340,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 4340,
		'to' => 4341,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 4341,
		'to' => 4343,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 4343,
		'to' => 4344,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4344,
		'to' => 4345,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 4354,
		'to' => 4356,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4357,
		'to' => 4358,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 4359,
		'to' => 4361,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 4362,
		'to' => 4364,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 4365,
		'to' => 4366,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4366,
		'to' => 4367,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 4376,
		'to' => 4378,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4379,
		'to' => 4380,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4380,
		'to' => 4381,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4381,
		'to' => 4382,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4383,
		'to' => 4384,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 4397,
		'to' => 4399,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4400,
		'to' => 4401,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 4401,
		'to' => 4403,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 4404,
		'to' => 4406,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4407,
		'to' => 4408,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4408,
		'to' => 4409,
	],[
		'type' => 'name',
		'value' => 'lbp',
		'from' => 4409,
		'to' => 4412,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4412,
		'to' => 4413,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4414,
		'to' => 4415,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4432,
		'to' => 4433,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4433,
		'to' => 4434,
	],[
		'type' => 'name',
		'value' => 'lbp',
		'from' => 4434,
		'to' => 4437,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4438,
		'to' => 4439,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 4440,
		'to' => 4442,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4442,
		'to' => 4443,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4456,
		'to' => 4457,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4466,
		'to' => 4467,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 4468,
		'to' => 4472,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4473,
		'to' => 4474,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4487,
		'to' => 4488,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4489,
		'to' => 4490,
	],[
		'type' => 'name',
		'value' => 'Object',
		'from' => 4491,
		'to' => 4497,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4497,
		'to' => 4498,
	],[
		'type' => 'name',
		'value' => 'create',
		'from' => 4498,
		'to' => 4504,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4504,
		'to' => 4505,
	],[
		'type' => 'name',
		'value' => 'original_symbol',
		'from' => 4505,
		'to' => 4520,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4520,
		'to' => 4521,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4521,
		'to' => 4522,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4535,
		'to' => 4536,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4536,
		'to' => 4537,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 4537,
		'to' => 4539,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4540,
		'to' => 4541,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4542,
		'to' => 4543,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4543,
		'to' => 4544,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 4544,
		'to' => 4549,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4550,
		'to' => 4551,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 4552,
		'to' => 4554,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4554,
		'to' => 4555,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4568,
		'to' => 4569,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4569,
		'to' => 4570,
	],[
		'type' => 'name',
		'value' => 'lbp',
		'from' => 4570,
		'to' => 4573,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4574,
		'to' => 4575,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 4576,
		'to' => 4578,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4578,
		'to' => 4579,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 4592,
		'to' => 4604,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 4604,
		'to' => 4605,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 4605,
		'to' => 4607,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 4607,
		'to' => 4608,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4609,
		'to' => 4610,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4611,
		'to' => 4612,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4612,
		'to' => 4613,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4622,
		'to' => 4623,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 4632,
		'to' => 4638,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4639,
		'to' => 4640,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4640,
		'to' => 4641,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4646,
		'to' => 4647,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4647,
		'to' => 4648,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 4654,
		'to' => 4657,
	],[
		'type' => 'name',
		'value' => 'constant',
		'from' => 4658,
		'to' => 4666,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4667,
		'to' => 4668,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 4669,
		'to' => 4677,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4678,
		'to' => 4679,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4679,
		'to' => 4680,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4680,
		'to' => 4681,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 4682,
		'to' => 4683,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4683,
		'to' => 4684,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4685,
		'to' => 4686,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 4695,
		'to' => 4698,
	],[
		'type' => 'name',
		'value' => 'x',
		'from' => 4699,
		'to' => 4700,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4701,
		'to' => 4702,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 4703,
		'to' => 4709,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4709,
		'to' => 4710,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 4710,
		'to' => 4711,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4711,
		'to' => 4712,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4712,
		'to' => 4713,
	],[
		'type' => 'name',
		'value' => 'x',
		'from' => 4722,
		'to' => 4723,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4723,
		'to' => 4724,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 4724,
		'to' => 4727,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4728,
		'to' => 4729,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 4730,
		'to' => 4738,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4739,
		'to' => 4740,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4740,
		'to' => 4741,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4742,
		'to' => 4743,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 4756,
		'to' => 4761,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4761,
		'to' => 4762,
	],[
		'type' => 'name',
		'value' => 'reserve',
		'from' => 4762,
		'to' => 4769,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4769,
		'to' => 4770,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 4770,
		'to' => 4774,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4774,
		'to' => 4775,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4775,
		'to' => 4776,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 4789,
		'to' => 4793,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4793,
		'to' => 4794,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 4794,
		'to' => 4799,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4800,
		'to' => 4801,
	],[
		'type' => 'name',
		'value' => 'symbol_table',
		'from' => 4802,
		'to' => 4814,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 4814,
		'to' => 4815,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 4815,
		'to' => 4819,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4819,
		'to' => 4820,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 4820,
		'to' => 4822,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 4822,
		'to' => 4823,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4823,
		'to' => 4824,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 4824,
		'to' => 4829,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4829,
		'to' => 4830,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 4843,
		'to' => 4847,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4847,
		'to' => 4848,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 4848,
		'to' => 4853,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4854,
		'to' => 4855,
	],[
		'type' => 'string',
		'value' => 'literal',
		'from' => 4856,
		'to' => 4865,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4865,
		'to' => 4866,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 4879,
		'to' => 4885,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 4886,
		'to' => 4890,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4890,
		'to' => 4891,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4900,
		'to' => 4901,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4901,
		'to' => 4902,
	],[
		'type' => 'name',
		'value' => 'x',
		'from' => 4911,
		'to' => 4912,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4912,
		'to' => 4913,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 4913,
		'to' => 4918,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4919,
		'to' => 4920,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 4921,
		'to' => 4922,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4922,
		'to' => 4923,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 4932,
		'to' => 4938,
	],[
		'type' => 'name',
		'value' => 'x',
		'from' => 4939,
		'to' => 4940,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4940,
		'to' => 4941,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4946,
		'to' => 4947,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4947,
		'to' => 4948,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 4954,
		'to' => 4957,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 4958,
		'to' => 4963,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4964,
		'to' => 4965,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 4966,
		'to' => 4974,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4975,
		'to' => 4976,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 4976,
		'to' => 4978,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4978,
		'to' => 4979,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 4980,
		'to' => 4982,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4982,
		'to' => 4983,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 4984,
		'to' => 4987,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4987,
		'to' => 4988,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4989,
		'to' => 4990,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 4999,
		'to' => 5002,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 5003,
		'to' => 5004,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5005,
		'to' => 5006,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 5007,
		'to' => 5013,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5013,
		'to' => 5014,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5014,
		'to' => 5016,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5016,
		'to' => 5017,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 5018,
		'to' => 5020,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5020,
		'to' => 5021,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5021,
		'to' => 5022,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 5031,
		'to' => 5032,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5032,
		'to' => 5033,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 5033,
		'to' => 5036,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5037,
		'to' => 5038,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 5039,
		'to' => 5042,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 5043,
		'to' => 5045,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 5046,
		'to' => 5054,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5055,
		'to' => 5056,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5056,
		'to' => 5060,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5060,
		'to' => 5061,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5062,
		'to' => 5063,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5076,
		'to' => 5080,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5080,
		'to' => 5081,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 5081,
		'to' => 5086,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5087,
		'to' => 5088,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5089,
		'to' => 5093,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5093,
		'to' => 5094,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5107,
		'to' => 5111,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5111,
		'to' => 5112,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 5112,
		'to' => 5118,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5119,
		'to' => 5120,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 5121,
		'to' => 5131,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5131,
		'to' => 5132,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 5132,
		'to' => 5134,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5134,
		'to' => 5135,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5135,
		'to' => 5136,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5149,
		'to' => 5153,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5153,
		'to' => 5154,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 5154,
		'to' => 5159,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5160,
		'to' => 5161,
	],[
		'type' => 'string',
		'value' => 'binary',
		'from' => 5162,
		'to' => 5170,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5170,
		'to' => 5171,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 5184,
		'to' => 5190,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5191,
		'to' => 5195,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5195,
		'to' => 5196,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5205,
		'to' => 5206,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5206,
		'to' => 5207,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 5216,
		'to' => 5222,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 5223,
		'to' => 5224,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5224,
		'to' => 5225,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5230,
		'to' => 5231,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5231,
		'to' => 5232,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 5238,
		'to' => 5241,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 5242,
		'to' => 5248,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5249,
		'to' => 5250,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 5251,
		'to' => 5259,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5260,
		'to' => 5261,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5261,
		'to' => 5263,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5263,
		'to' => 5264,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 5265,
		'to' => 5267,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5267,
		'to' => 5268,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 5269,
		'to' => 5272,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5272,
		'to' => 5273,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5274,
		'to' => 5275,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 5284,
		'to' => 5287,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 5288,
		'to' => 5289,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5290,
		'to' => 5291,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 5292,
		'to' => 5298,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5298,
		'to' => 5299,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5299,
		'to' => 5301,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5301,
		'to' => 5302,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 5303,
		'to' => 5305,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5305,
		'to' => 5306,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5306,
		'to' => 5307,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 5316,
		'to' => 5317,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5317,
		'to' => 5318,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 5318,
		'to' => 5321,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5322,
		'to' => 5323,
	],[
		'type' => 'name',
		'value' => 'led',
		'from' => 5324,
		'to' => 5327,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 5328,
		'to' => 5330,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 5331,
		'to' => 5339,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5340,
		'to' => 5341,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5341,
		'to' => 5345,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5345,
		'to' => 5346,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5347,
		'to' => 5348,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5361,
		'to' => 5365,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5365,
		'to' => 5366,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 5366,
		'to' => 5371,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5372,
		'to' => 5373,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5374,
		'to' => 5378,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5378,
		'to' => 5379,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5392,
		'to' => 5396,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5396,
		'to' => 5397,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 5397,
		'to' => 5403,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5404,
		'to' => 5405,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 5406,
		'to' => 5416,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5416,
		'to' => 5417,
	],[
		'type' => 'name',
		'value' => 'bp',
		'from' => 5417,
		'to' => 5419,
	],[
		'type' => 'operator',
		'value' => '-',
		'from' => 5420,
		'to' => 5421,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 5422,
		'to' => 5423,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5423,
		'to' => 5424,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5424,
		'to' => 5425,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5438,
		'to' => 5442,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5442,
		'to' => 5443,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 5443,
		'to' => 5448,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5449,
		'to' => 5450,
	],[
		'type' => 'string',
		'value' => 'binary',
		'from' => 5451,
		'to' => 5459,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5459,
		'to' => 5460,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 5473,
		'to' => 5479,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5480,
		'to' => 5484,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5484,
		'to' => 5485,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5494,
		'to' => 5495,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5495,
		'to' => 5496,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 5505,
		'to' => 5511,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 5512,
		'to' => 5513,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5513,
		'to' => 5514,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5519,
		'to' => 5520,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5520,
		'to' => 5521,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 5527,
		'to' => 5530,
	],[
		'type' => 'name',
		'value' => 'assignment',
		'from' => 5531,
		'to' => 5541,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5542,
		'to' => 5543,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 5544,
		'to' => 5552,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5553,
		'to' => 5554,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5554,
		'to' => 5556,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5556,
		'to' => 5557,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5558,
		'to' => 5559,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 5568,
		'to' => 5574,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 5575,
		'to' => 5581,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5581,
		'to' => 5582,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5582,
		'to' => 5584,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5584,
		'to' => 5585,
	],[
		'type' => 'number',
		'value' => 10,
		'from' => 5586,
		'to' => 5588,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5588,
		'to' => 5589,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 5590,
		'to' => 5598,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5599,
		'to' => 5600,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5600,
		'to' => 5604,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5604,
		'to' => 5605,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5606,
		'to' => 5607,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 5620,
		'to' => 5622,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5623,
		'to' => 5624,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5624,
		'to' => 5628,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5628,
		'to' => 5629,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5629,
		'to' => 5631,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 5632,
		'to' => 5635,
	],[
		'type' => 'string',
		'value' => '.',
		'from' => 5636,
		'to' => 5639,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 5640,
		'to' => 5642,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5643,
		'to' => 5647,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5647,
		'to' => 5648,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5648,
		'to' => 5650,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 5651,
		'to' => 5654,
	],[
		'type' => 'string',
		'value' => '[',
		'from' => 5655,
		'to' => 5658,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 5659,
		'to' => 5661,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5662,
		'to' => 5666,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5666,
		'to' => 5667,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 5667,
		'to' => 5672,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 5673,
		'to' => 5676,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 5677,
		'to' => 5683,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5683,
		'to' => 5684,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5685,
		'to' => 5686,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5703,
		'to' => 5707,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5707,
		'to' => 5708,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 5708,
		'to' => 5713,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5713,
		'to' => 5714,
	],[
		'type' => 'string',
		'value' => 'Bad lvalue.',
		'from' => 5714,
		'to' => 5727,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5727,
		'to' => 5728,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5728,
		'to' => 5729,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5742,
		'to' => 5743,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5756,
		'to' => 5760,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5760,
		'to' => 5761,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 5761,
		'to' => 5766,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5767,
		'to' => 5768,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 5769,
		'to' => 5773,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5773,
		'to' => 5774,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5787,
		'to' => 5791,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5791,
		'to' => 5792,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 5792,
		'to' => 5798,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5799,
		'to' => 5800,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 5801,
		'to' => 5811,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5811,
		'to' => 5812,
	],[
		'type' => 'number',
		'value' => 9,
		'from' => 5812,
		'to' => 5813,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5813,
		'to' => 5814,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5814,
		'to' => 5815,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5828,
		'to' => 5832,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5832,
		'to' => 5833,
	],[
		'type' => 'name',
		'value' => 'assignment',
		'from' => 5833,
		'to' => 5843,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5844,
		'to' => 5845,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 5846,
		'to' => 5850,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5850,
		'to' => 5851,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5864,
		'to' => 5868,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5868,
		'to' => 5869,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 5869,
		'to' => 5874,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5875,
		'to' => 5876,
	],[
		'type' => 'string',
		'value' => 'binary',
		'from' => 5877,
		'to' => 5885,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5885,
		'to' => 5886,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 5899,
		'to' => 5905,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5906,
		'to' => 5910,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5910,
		'to' => 5911,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5920,
		'to' => 5921,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5921,
		'to' => 5922,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5922,
		'to' => 5923,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5928,
		'to' => 5929,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5929,
		'to' => 5930,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 5936,
		'to' => 5939,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 5940,
		'to' => 5946,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5947,
		'to' => 5948,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 5949,
		'to' => 5957,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5958,
		'to' => 5959,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5959,
		'to' => 5961,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5961,
		'to' => 5962,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 5963,
		'to' => 5966,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5966,
		'to' => 5967,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5968,
		'to' => 5969,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 5978,
		'to' => 5981,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 5982,
		'to' => 5983,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5984,
		'to' => 5985,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 5986,
		'to' => 5992,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5992,
		'to' => 5993,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 5993,
		'to' => 5995,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5995,
		'to' => 5996,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5996,
		'to' => 5997,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 6006,
		'to' => 6007,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6007,
		'to' => 6008,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 6008,
		'to' => 6011,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6012,
		'to' => 6013,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 6014,
		'to' => 6017,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 6018,
		'to' => 6020,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 6021,
		'to' => 6029,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6030,
		'to' => 6031,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6031,
		'to' => 6032,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6033,
		'to' => 6034,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 6047,
		'to' => 6052,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6052,
		'to' => 6053,
	],[
		'type' => 'name',
		'value' => 'reserve',
		'from' => 6053,
		'to' => 6060,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6060,
		'to' => 6061,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6061,
		'to' => 6065,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6065,
		'to' => 6066,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6066,
		'to' => 6067,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6080,
		'to' => 6084,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6084,
		'to' => 6085,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 6085,
		'to' => 6090,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6091,
		'to' => 6092,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 6093,
		'to' => 6103,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6103,
		'to' => 6104,
	],[
		'type' => 'number',
		'value' => 70,
		'from' => 6104,
		'to' => 6106,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6106,
		'to' => 6107,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6107,
		'to' => 6108,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6121,
		'to' => 6125,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6125,
		'to' => 6126,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 6126,
		'to' => 6131,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6132,
		'to' => 6133,
	],[
		'type' => 'string',
		'value' => 'unary',
		'from' => 6134,
		'to' => 6141,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6141,
		'to' => 6142,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 6155,
		'to' => 6161,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6162,
		'to' => 6166,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6166,
		'to' => 6167,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6176,
		'to' => 6177,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6177,
		'to' => 6178,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 6187,
		'to' => 6193,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 6194,
		'to' => 6195,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6195,
		'to' => 6196,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6201,
		'to' => 6202,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6202,
		'to' => 6203,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 6209,
		'to' => 6212,
	],[
		'type' => 'name',
		'value' => 'stmt',
		'from' => 6213,
		'to' => 6217,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6218,
		'to' => 6219,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 6220,
		'to' => 6228,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6229,
		'to' => 6230,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 6230,
		'to' => 6231,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6231,
		'to' => 6232,
	],[
		'type' => 'name',
		'value' => 'f',
		'from' => 6233,
		'to' => 6234,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6234,
		'to' => 6235,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6236,
		'to' => 6237,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 6246,
		'to' => 6249,
	],[
		'type' => 'name',
		'value' => 'x',
		'from' => 6250,
		'to' => 6251,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6252,
		'to' => 6253,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6254,
		'to' => 6260,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6260,
		'to' => 6261,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 6261,
		'to' => 6262,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6262,
		'to' => 6263,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6263,
		'to' => 6264,
	],[
		'type' => 'name',
		'value' => 'x',
		'from' => 6273,
		'to' => 6274,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6274,
		'to' => 6275,
	],[
		'type' => 'name',
		'value' => 'std',
		'from' => 6275,
		'to' => 6278,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6279,
		'to' => 6280,
	],[
		'type' => 'name',
		'value' => 'f',
		'from' => 6281,
		'to' => 6282,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6282,
		'to' => 6283,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 6292,
		'to' => 6298,
	],[
		'type' => 'name',
		'value' => 'x',
		'from' => 6299,
		'to' => 6300,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6300,
		'to' => 6301,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6306,
		'to' => 6307,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6307,
		'to' => 6308,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6314,
		'to' => 6320,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6320,
		'to' => 6321,
	],[
		'type' => 'string',
		'value' => '(end)',
		'from' => 6321,
		'to' => 6328,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6328,
		'to' => 6329,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6329,
		'to' => 6330,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6335,
		'to' => 6341,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6341,
		'to' => 6342,
	],[
		'type' => 'string',
		'value' => '(name)',
		'from' => 6342,
		'to' => 6350,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6350,
		'to' => 6351,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6351,
		'to' => 6352,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6357,
		'to' => 6363,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6363,
		'to' => 6364,
	],[
		'type' => 'string',
		'value' => ':',
		'from' => 6364,
		'to' => 6367,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6367,
		'to' => 6368,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6368,
		'to' => 6369,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6374,
		'to' => 6380,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6380,
		'to' => 6381,
	],[
		'type' => 'string',
		'value' => ';',
		'from' => 6381,
		'to' => 6384,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6384,
		'to' => 6385,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6385,
		'to' => 6386,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6391,
		'to' => 6397,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6397,
		'to' => 6398,
	],[
		'type' => 'string',
		'value' => ')',
		'from' => 6398,
		'to' => 6401,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6401,
		'to' => 6402,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6402,
		'to' => 6403,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6408,
		'to' => 6414,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6414,
		'to' => 6415,
	],[
		'type' => 'string',
		'value' => ']',
		'from' => 6415,
		'to' => 6418,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6418,
		'to' => 6419,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6419,
		'to' => 6420,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6425,
		'to' => 6431,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6431,
		'to' => 6432,
	],[
		'type' => 'string',
		'value' => '}',
		'from' => 6432,
		'to' => 6435,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6435,
		'to' => 6436,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6436,
		'to' => 6437,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6442,
		'to' => 6448,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6448,
		'to' => 6449,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 6449,
		'to' => 6452,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6452,
		'to' => 6453,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6453,
		'to' => 6454,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6459,
		'to' => 6465,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6465,
		'to' => 6466,
	],[
		'type' => 'string',
		'value' => 'else',
		'from' => 6466,
		'to' => 6472,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6472,
		'to' => 6473,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6473,
		'to' => 6474,
	],[
		'type' => 'name',
		'value' => 'constant',
		'from' => 6480,
		'to' => 6488,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6488,
		'to' => 6489,
	],[
		'type' => 'string',
		'value' => 'true',
		'from' => 6489,
		'to' => 6495,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6495,
		'to' => 6496,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 6497,
		'to' => 6501,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6501,
		'to' => 6502,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6502,
		'to' => 6503,
	],[
		'type' => 'name',
		'value' => 'constant',
		'from' => 6508,
		'to' => 6516,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6516,
		'to' => 6517,
	],[
		'type' => 'string',
		'value' => 'false',
		'from' => 6517,
		'to' => 6524,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6524,
		'to' => 6525,
	],[
		'type' => 'name',
		'value' => 'false',
		'from' => 6526,
		'to' => 6531,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6531,
		'to' => 6532,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6532,
		'to' => 6533,
	],[
		'type' => 'name',
		'value' => 'constant',
		'from' => 6538,
		'to' => 6546,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6546,
		'to' => 6547,
	],[
		'type' => 'string',
		'value' => 'null',
		'from' => 6547,
		'to' => 6553,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6553,
		'to' => 6554,
	],[
		'type' => 'name',
		'value' => 'null',
		'from' => 6555,
		'to' => 6559,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6559,
		'to' => 6560,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6560,
		'to' => 6561,
	],[
		'type' => 'name',
		'value' => 'constant',
		'from' => 6566,
		'to' => 6574,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6574,
		'to' => 6575,
	],[
		'type' => 'string',
		'value' => 'pi',
		'from' => 6575,
		'to' => 6579,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6579,
		'to' => 6580,
	],[
		'type' => 'number',
		'value' => 3.1415926535898,
		'from' => 6581,
		'to' => 6598,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6598,
		'to' => 6599,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6599,
		'to' => 6600,
	],[
		'type' => 'name',
		'value' => 'constant',
		'from' => 6605,
		'to' => 6613,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6613,
		'to' => 6614,
	],[
		'type' => 'string',
		'value' => 'Object',
		'from' => 6614,
		'to' => 6622,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6622,
		'to' => 6623,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6624,
		'to' => 6625,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6625,
		'to' => 6626,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6626,
		'to' => 6627,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6627,
		'to' => 6628,
	],[
		'type' => 'name',
		'value' => 'constant',
		'from' => 6633,
		'to' => 6641,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6641,
		'to' => 6642,
	],[
		'type' => 'string',
		'value' => 'Array',
		'from' => 6642,
		'to' => 6649,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6649,
		'to' => 6650,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 6651,
		'to' => 6652,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 6652,
		'to' => 6653,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6653,
		'to' => 6654,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6654,
		'to' => 6655,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6661,
		'to' => 6667,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6667,
		'to' => 6668,
	],[
		'type' => 'string',
		'value' => '(literal)',
		'from' => 6668,
		'to' => 6679,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6679,
		'to' => 6680,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6680,
		'to' => 6681,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 6681,
		'to' => 6684,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6685,
		'to' => 6686,
	],[
		'type' => 'name',
		'value' => 'itself',
		'from' => 6687,
		'to' => 6693,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6693,
		'to' => 6694,
	],[
		'type' => 'name',
		'value' => 'symbol',
		'from' => 6700,
		'to' => 6706,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6706,
		'to' => 6707,
	],[
		'type' => 'string',
		'value' => 'this',
		'from' => 6707,
		'to' => 6713,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6713,
		'to' => 6714,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6714,
		'to' => 6715,
	],[
		'type' => 'name',
		'value' => 'nud',
		'from' => 6715,
		'to' => 6718,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6719,
		'to' => 6720,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 6721,
		'to' => 6729,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6730,
		'to' => 6731,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6731,
		'to' => 6732,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6733,
		'to' => 6734,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 6743,
		'to' => 6748,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6748,
		'to' => 6749,
	],[
		'type' => 'name',
		'value' => 'reserve',
		'from' => 6749,
		'to' => 6756,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6756,
		'to' => 6757,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6757,
		'to' => 6761,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6761,
		'to' => 6762,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6762,
		'to' => 6763,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6772,
		'to' => 6776,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6776,
		'to' => 6777,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 6777,
		'to' => 6782,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6783,
		'to' => 6784,
	],[
		'type' => 'string',
		'value' => 'this',
		'from' => 6785,
		'to' => 6791,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6791,
		'to' => 6792,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 6801,
		'to' => 6807,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6808,
		'to' => 6812,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6812,
		'to' => 6813,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6818,
		'to' => 6819,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6819,
		'to' => 6820,
	],[
		'type' => 'name',
		'value' => 'assignment',
		'from' => 6826,
		'to' => 6836,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6836,
		'to' => 6837,
	],[
		'type' => 'string',
		'value' => '=',
		'from' => 6837,
		'to' => 6840,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6840,
		'to' => 6841,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6841,
		'to' => 6842,
	],[
		'type' => 'name',
		'value' => 'assignment',
		'from' => 6847,
		'to' => 6857,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6857,
		'to' => 6858,
	],[
		'type' => 'string',
		'value' => '+=',
		'from' => 6858,
		'to' => 6862,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6862,
		'to' => 6863,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6863,
		'to' => 6864,
	],[
		'type' => 'name',
		'value' => 'assignment',
		'from' => 6869,
		'to' => 6879,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6879,
		'to' => 6880,
	],[
		'type' => 'string',
		'value' => '-=',
		'from' => 6880,
		'to' => 6884,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6884,
		'to' => 6885,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6885,
		'to' => 6886,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 6892,
		'to' => 6897,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6897,
		'to' => 6898,
	],[
		'type' => 'string',
		'value' => '?',
		'from' => 6898,
		'to' => 6901,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6901,
		'to' => 6902,
	],[
		'type' => 'number',
		'value' => 20,
		'from' => 6903,
		'to' => 6905,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6905,
		'to' => 6906,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 6907,
		'to' => 6915,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6916,
		'to' => 6917,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 6917,
		'to' => 6921,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6921,
		'to' => 6922,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6923,
		'to' => 6924,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6933,
		'to' => 6937,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6937,
		'to' => 6938,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 6938,
		'to' => 6943,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6944,
		'to' => 6945,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 6946,
		'to' => 6950,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6950,
		'to' => 6951,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6960,
		'to' => 6964,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6964,
		'to' => 6965,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 6965,
		'to' => 6971,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6972,
		'to' => 6973,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 6974,
		'to' => 6984,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6984,
		'to' => 6985,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 6985,
		'to' => 6986,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6986,
		'to' => 6987,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6987,
		'to' => 6988,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 6997,
		'to' => 7004,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7004,
		'to' => 7005,
	],[
		'type' => 'string',
		'value' => ':',
		'from' => 7005,
		'to' => 7008,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7008,
		'to' => 7009,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7009,
		'to' => 7010,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7019,
		'to' => 7023,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7023,
		'to' => 7024,
	],[
		'type' => 'name',
		'value' => 'third',
		'from' => 7024,
		'to' => 7029,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7030,
		'to' => 7031,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 7032,
		'to' => 7042,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7042,
		'to' => 7043,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 7043,
		'to' => 7044,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7044,
		'to' => 7045,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7045,
		'to' => 7046,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7055,
		'to' => 7059,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7059,
		'to' => 7060,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 7060,
		'to' => 7065,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7066,
		'to' => 7067,
	],[
		'type' => 'string',
		'value' => 'ternary',
		'from' => 7068,
		'to' => 7077,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7077,
		'to' => 7078,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 7087,
		'to' => 7093,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7094,
		'to' => 7098,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7098,
		'to' => 7099,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7104,
		'to' => 7105,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7105,
		'to' => 7106,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7106,
		'to' => 7107,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 7113,
		'to' => 7119,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7119,
		'to' => 7120,
	],[
		'type' => 'string',
		'value' => '&&',
		'from' => 7120,
		'to' => 7124,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7124,
		'to' => 7125,
	],[
		'type' => 'number',
		'value' => 30,
		'from' => 7126,
		'to' => 7128,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7128,
		'to' => 7129,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7129,
		'to' => 7130,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 7135,
		'to' => 7141,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7141,
		'to' => 7142,
	],[
		'type' => 'string',
		'value' => '||',
		'from' => 7142,
		'to' => 7146,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7146,
		'to' => 7147,
	],[
		'type' => 'number',
		'value' => 30,
		'from' => 7148,
		'to' => 7150,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7150,
		'to' => 7151,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7151,
		'to' => 7152,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 7158,
		'to' => 7164,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7164,
		'to' => 7165,
	],[
		'type' => 'string',
		'value' => '===',
		'from' => 7165,
		'to' => 7170,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7170,
		'to' => 7171,
	],[
		'type' => 'number',
		'value' => 40,
		'from' => 7172,
		'to' => 7174,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7174,
		'to' => 7175,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7175,
		'to' => 7176,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 7181,
		'to' => 7187,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7187,
		'to' => 7188,
	],[
		'type' => 'string',
		'value' => '!==',
		'from' => 7188,
		'to' => 7193,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7193,
		'to' => 7194,
	],[
		'type' => 'number',
		'value' => 40,
		'from' => 7195,
		'to' => 7197,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7197,
		'to' => 7198,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7198,
		'to' => 7199,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 7204,
		'to' => 7210,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7210,
		'to' => 7211,
	],[
		'type' => 'string',
		'value' => '<',
		'from' => 7211,
		'to' => 7214,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7214,
		'to' => 7215,
	],[
		'type' => 'number',
		'value' => 40,
		'from' => 7216,
		'to' => 7218,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7218,
		'to' => 7219,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7219,
		'to' => 7220,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 7225,
		'to' => 7231,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7231,
		'to' => 7232,
	],[
		'type' => 'string',
		'value' => '<=',
		'from' => 7232,
		'to' => 7236,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7236,
		'to' => 7237,
	],[
		'type' => 'number',
		'value' => 40,
		'from' => 7238,
		'to' => 7240,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7240,
		'to' => 7241,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7241,
		'to' => 7242,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 7247,
		'to' => 7253,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7253,
		'to' => 7254,
	],[
		'type' => 'string',
		'value' => '>',
		'from' => 7254,
		'to' => 7257,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7257,
		'to' => 7258,
	],[
		'type' => 'number',
		'value' => 40,
		'from' => 7259,
		'to' => 7261,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7261,
		'to' => 7262,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7262,
		'to' => 7263,
	],[
		'type' => 'name',
		'value' => 'infixr',
		'from' => 7268,
		'to' => 7274,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7274,
		'to' => 7275,
	],[
		'type' => 'string',
		'value' => '>=',
		'from' => 7275,
		'to' => 7279,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7279,
		'to' => 7280,
	],[
		'type' => 'number',
		'value' => 40,
		'from' => 7281,
		'to' => 7283,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7283,
		'to' => 7284,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7284,
		'to' => 7285,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 7291,
		'to' => 7296,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7296,
		'to' => 7297,
	],[
		'type' => 'string',
		'value' => '+',
		'from' => 7297,
		'to' => 7300,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7300,
		'to' => 7301,
	],[
		'type' => 'number',
		'value' => 50,
		'from' => 7302,
		'to' => 7304,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7304,
		'to' => 7305,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7305,
		'to' => 7306,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 7311,
		'to' => 7316,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7316,
		'to' => 7317,
	],[
		'type' => 'string',
		'value' => '-',
		'from' => 7317,
		'to' => 7320,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7320,
		'to' => 7321,
	],[
		'type' => 'number',
		'value' => 50,
		'from' => 7322,
		'to' => 7324,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7324,
		'to' => 7325,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7325,
		'to' => 7326,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 7332,
		'to' => 7337,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7337,
		'to' => 7338,
	],[
		'type' => 'string',
		'value' => '*',
		'from' => 7338,
		'to' => 7341,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7341,
		'to' => 7342,
	],[
		'type' => 'number',
		'value' => 60,
		'from' => 7343,
		'to' => 7345,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7345,
		'to' => 7346,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7346,
		'to' => 7347,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 7352,
		'to' => 7357,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7357,
		'to' => 7358,
	],[
		'type' => 'string',
		'value' => '/',
		'from' => 7358,
		'to' => 7361,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7361,
		'to' => 7362,
	],[
		'type' => 'number',
		'value' => 60,
		'from' => 7363,
		'to' => 7365,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7365,
		'to' => 7366,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7366,
		'to' => 7367,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 7373,
		'to' => 7378,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7378,
		'to' => 7379,
	],[
		'type' => 'string',
		'value' => '.',
		'from' => 7379,
		'to' => 7382,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7382,
		'to' => 7383,
	],[
		'type' => 'number',
		'value' => 80,
		'from' => 7384,
		'to' => 7386,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7386,
		'to' => 7387,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 7388,
		'to' => 7396,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7397,
		'to' => 7398,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 7398,
		'to' => 7402,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7402,
		'to' => 7403,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 7404,
		'to' => 7405,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7414,
		'to' => 7418,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7418,
		'to' => 7419,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 7419,
		'to' => 7424,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7425,
		'to' => 7426,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 7427,
		'to' => 7431,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7431,
		'to' => 7432,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 7441,
		'to' => 7443,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7444,
		'to' => 7445,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 7445,
		'to' => 7450,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7450,
		'to' => 7451,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 7451,
		'to' => 7456,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 7457,
		'to' => 7460,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 7461,
		'to' => 7467,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7467,
		'to' => 7468,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 7469,
		'to' => 7470,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 7483,
		'to' => 7488,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7488,
		'to' => 7489,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 7489,
		'to' => 7494,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7494,
		'to' => 7495,
	],[
		'type' => 'string',
		'value' => 'Expected a property name.',
		'from' => 7495,
		'to' => 7522,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7522,
		'to' => 7523,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7523,
		'to' => 7524,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7533,
		'to' => 7534,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 7543,
		'to' => 7548,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7548,
		'to' => 7549,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 7549,
		'to' => 7554,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7555,
		'to' => 7556,
	],[
		'type' => 'string',
		'value' => 'literal',
		'from' => 7557,
		'to' => 7566,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7566,
		'to' => 7567,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7576,
		'to' => 7580,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7580,
		'to' => 7581,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 7581,
		'to' => 7587,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7588,
		'to' => 7589,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 7590,
		'to' => 7595,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7595,
		'to' => 7596,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7605,
		'to' => 7609,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7609,
		'to' => 7610,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 7610,
		'to' => 7615,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7616,
		'to' => 7617,
	],[
		'type' => 'string',
		'value' => 'binary',
		'from' => 7618,
		'to' => 7626,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7626,
		'to' => 7627,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 7636,
		'to' => 7643,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7643,
		'to' => 7644,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7644,
		'to' => 7645,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7645,
		'to' => 7646,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 7655,
		'to' => 7661,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7662,
		'to' => 7666,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7666,
		'to' => 7667,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7672,
		'to' => 7673,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7673,
		'to' => 7674,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7674,
		'to' => 7675,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 7681,
		'to' => 7686,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7686,
		'to' => 7687,
	],[
		'type' => 'string',
		'value' => '[',
		'from' => 7687,
		'to' => 7690,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7690,
		'to' => 7691,
	],[
		'type' => 'number',
		'value' => 80,
		'from' => 7692,
		'to' => 7694,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7694,
		'to' => 7695,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 7696,
		'to' => 7704,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7705,
		'to' => 7706,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 7706,
		'to' => 7710,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7710,
		'to' => 7711,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 7712,
		'to' => 7713,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7722,
		'to' => 7726,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7726,
		'to' => 7727,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 7727,
		'to' => 7732,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7733,
		'to' => 7734,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 7735,
		'to' => 7739,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7739,
		'to' => 7740,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7749,
		'to' => 7753,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7753,
		'to' => 7754,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 7754,
		'to' => 7760,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7761,
		'to' => 7762,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 7763,
		'to' => 7773,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7773,
		'to' => 7774,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 7774,
		'to' => 7775,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7775,
		'to' => 7776,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7776,
		'to' => 7777,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7786,
		'to' => 7790,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7790,
		'to' => 7791,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 7791,
		'to' => 7796,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7797,
		'to' => 7798,
	],[
		'type' => 'string',
		'value' => 'binary',
		'from' => 7799,
		'to' => 7807,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7807,
		'to' => 7808,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 7817,
		'to' => 7824,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7824,
		'to' => 7825,
	],[
		'type' => 'string',
		'value' => ']',
		'from' => 7825,
		'to' => 7828,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7828,
		'to' => 7829,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7829,
		'to' => 7830,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 7839,
		'to' => 7845,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7846,
		'to' => 7850,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7850,
		'to' => 7851,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7856,
		'to' => 7857,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7857,
		'to' => 7858,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7858,
		'to' => 7859,
	],[
		'type' => 'name',
		'value' => 'infix',
		'from' => 7865,
		'to' => 7870,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7870,
		'to' => 7871,
	],[
		'type' => 'string',
		'value' => '(',
		'from' => 7871,
		'to' => 7874,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7874,
		'to' => 7875,
	],[
		'type' => 'number',
		'value' => 80,
		'from' => 7876,
		'to' => 7878,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7878,
		'to' => 7879,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 7880,
		'to' => 7888,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7889,
		'to' => 7890,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 7890,
		'to' => 7894,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7894,
		'to' => 7895,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 7896,
		'to' => 7897,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 7906,
		'to' => 7909,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 7910,
		'to' => 7911,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7912,
		'to' => 7913,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 7914,
		'to' => 7915,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 7915,
		'to' => 7916,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7916,
		'to' => 7917,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 7926,
		'to' => 7928,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7929,
		'to' => 7930,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 7930,
		'to' => 7934,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7934,
		'to' => 7935,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 7935,
		'to' => 7937,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 7938,
		'to' => 7941,
	],[
		'type' => 'string',
		'value' => '.',
		'from' => 7942,
		'to' => 7945,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 7946,
		'to' => 7948,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 7949,
		'to' => 7953,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7953,
		'to' => 7954,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 7954,
		'to' => 7956,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 7957,
		'to' => 7960,
	],[
		'type' => 'string',
		'value' => '[',
		'from' => 7961,
		'to' => 7964,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7964,
		'to' => 7965,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 7966,
		'to' => 7967,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7980,
		'to' => 7984,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7984,
		'to' => 7985,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 7985,
		'to' => 7990,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7991,
		'to' => 7992,
	],[
		'type' => 'string',
		'value' => 'ternary',
		'from' => 7993,
		'to' => 8002,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8002,
		'to' => 8003,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 8016,
		'to' => 8020,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8020,
		'to' => 8021,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 8021,
		'to' => 8026,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 8027,
		'to' => 8028,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8029,
		'to' => 8033,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8033,
		'to' => 8034,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 8034,
		'to' => 8039,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8039,
		'to' => 8040,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 8053,
		'to' => 8057,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8057,
		'to' => 8058,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 8058,
		'to' => 8064,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 8065,
		'to' => 8066,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8067,
		'to' => 8071,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8071,
		'to' => 8072,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 8072,
		'to' => 8078,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8078,
		'to' => 8079,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 8092,
		'to' => 8096,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8096,
		'to' => 8097,
	],[
		'type' => 'name',
		'value' => 'third',
		'from' => 8097,
		'to' => 8102,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 8103,
		'to' => 8104,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 8105,
		'to' => 8106,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8106,
		'to' => 8107,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 8116,
		'to' => 8117,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 8118,
		'to' => 8122,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 8123,
		'to' => 8124,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 8137,
		'to' => 8141,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8141,
		'to' => 8142,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 8142,
		'to' => 8147,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 8148,
		'to' => 8149,
	],[
		'type' => 'string',
		'value' => 'binary',
		'from' => 8150,
		'to' => 8158,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8158,
		'to' => 8159,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 8172,
		'to' => 8176,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8176,
		'to' => 8177,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 8177,
		'to' => 8182,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 8183,
		'to' => 8184,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8185,
		'to' => 8189,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8189,
		'to' => 8190,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 8203,
		'to' => 8207,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8207,
		'to' => 8208,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 8208,
		'to' => 8214,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 8215,
		'to' => 8216,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 8217,
		'to' => 8218,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8218,
		'to' => 8219,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 8232,
		'to' => 8234,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8235,
		'to' => 8236,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8236,
		'to' => 8237,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8237,
		'to' => 8241,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8241,
		'to' => 8242,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 8242,
		'to' => 8247,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8248,
		'to' => 8251,
	],[
		'type' => 'string',
		'value' => 'unary',
		'from' => 8252,
		'to' => 8259,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 8260,
		'to' => 8262,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8263,
		'to' => 8267,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8267,
		'to' => 8268,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 8268,
		'to' => 8270,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8271,
		'to' => 8274,
	],[
		'type' => 'string',
		'value' => 'function',
		'from' => 8275,
		'to' => 8285,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8285,
		'to' => 8286,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 8287,
		'to' => 8289,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8310,
		'to' => 8314,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8314,
		'to' => 8315,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 8315,
		'to' => 8320,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8321,
		'to' => 8324,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 8325,
		'to' => 8331,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 8332,
		'to' => 8334,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8335,
		'to' => 8339,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8339,
		'to' => 8340,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 8340,
		'to' => 8342,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8343,
		'to' => 8346,
	],[
		'type' => 'string',
		'value' => '(',
		'from' => 8347,
		'to' => 8350,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 8351,
		'to' => 8353,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8374,
		'to' => 8378,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8378,
		'to' => 8379,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 8379,
		'to' => 8381,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8382,
		'to' => 8385,
	],[
		'type' => 'string',
		'value' => '&&',
		'from' => 8386,
		'to' => 8390,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 8391,
		'to' => 8393,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8394,
		'to' => 8398,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8398,
		'to' => 8399,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 8399,
		'to' => 8401,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8402,
		'to' => 8405,
	],[
		'type' => 'string',
		'value' => '||',
		'from' => 8406,
		'to' => 8410,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 8411,
		'to' => 8413,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8414,
		'to' => 8418,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8418,
		'to' => 8419,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 8419,
		'to' => 8421,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8422,
		'to' => 8425,
	],[
		'type' => 'string',
		'value' => '?',
		'from' => 8426,
		'to' => 8429,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8429,
		'to' => 8430,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 8431,
		'to' => 8432,
	],[
		'type' => 'name',
		'value' => 'left',
		'from' => 8449,
		'to' => 8453,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8453,
		'to' => 8454,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 8454,
		'to' => 8459,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8459,
		'to' => 8460,
	],[
		'type' => 'string',
		'value' => 'Expected a variable name.',
		'from' => 8460,
		'to' => 8487,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8487,
		'to' => 8488,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8488,
		'to' => 8489,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 8502,
		'to' => 8503,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 8512,
		'to' => 8513,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 8522,
		'to' => 8524,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8525,
		'to' => 8526,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 8526,
		'to' => 8531,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8531,
		'to' => 8532,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 8532,
		'to' => 8534,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8535,
		'to' => 8538,
	],[
		'type' => 'string',
		'value' => ')',
		'from' => 8539,
		'to' => 8542,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8542,
		'to' => 8543,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 8544,
		'to' => 8545,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 8558,
		'to' => 8563,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8564,
		'to' => 8565,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 8565,
		'to' => 8569,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8569,
		'to' => 8570,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 8571,
		'to' => 8572,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 8589,
		'to' => 8590,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8590,
		'to' => 8591,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 8591,
		'to' => 8595,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8595,
		'to' => 8596,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 8596,
		'to' => 8606,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8606,
		'to' => 8607,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 8607,
		'to' => 8608,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8608,
		'to' => 8609,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8609,
		'to' => 8610,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8610,
		'to' => 8611,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 8628,
		'to' => 8630,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8631,
		'to' => 8632,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 8632,
		'to' => 8637,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 8637,
		'to' => 8638,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 8638,
		'to' => 8640,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 8641,
		'to' => 8644,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 8645,
		'to' => 8648,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8648,
		'to' => 8649,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 8650,
		'to' => 8651,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 8672,
		'to' => 8677,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8677,
		'to' => 8678,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 8695,
		'to' => 8696,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 8713,
		'to' => 8720,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8720,
		'to' => 8721,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 8721,
		'to' => 8724,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8724,
		'to' => 8725,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8725,
		'to' => 8726,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 8739,
		'to' => 8740,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 8749,
		'to' => 8750,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 8759,
		'to' => 8766,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8766,
		'to' => 8767,
	],[
		'type' => 'string',
		'value' => ')',
		'from' => 8767,
		'to' => 8770,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8770,
		'to' => 8771,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8771,
		'to' => 8772,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 8781,
		'to' => 8787,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 8788,
		'to' => 8792,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8792,
		'to' => 8793,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 8798,
		'to' => 8799,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8799,
		'to' => 8800,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8800,
		'to' => 8801,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 8808,
		'to' => 8814,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8814,
		'to' => 8815,
	],[
		'type' => 'string',
		'value' => '!',
		'from' => 8815,
		'to' => 8818,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8818,
		'to' => 8819,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8819,
		'to' => 8820,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 8825,
		'to' => 8831,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8831,
		'to' => 8832,
	],[
		'type' => 'string',
		'value' => '-',
		'from' => 8832,
		'to' => 8835,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8835,
		'to' => 8836,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8836,
		'to' => 8837,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 8842,
		'to' => 8848,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8848,
		'to' => 8849,
	],[
		'type' => 'string',
		'value' => 'typeof',
		'from' => 8849,
		'to' => 8857,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8857,
		'to' => 8858,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8858,
		'to' => 8859,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 8865,
		'to' => 8871,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8871,
		'to' => 8872,
	],[
		'type' => 'string',
		'value' => '(',
		'from' => 8872,
		'to' => 8875,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 8875,
		'to' => 8876,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 8877,
		'to' => 8885,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8886,
		'to' => 8887,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8887,
		'to' => 8888,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 8889,
		'to' => 8890,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 8899,
		'to' => 8902,
	],[
		'type' => 'name',
		'value' => 'e',
		'from' => 8903,
		'to' => 8904,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 8905,
		'to' => 8906,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 8907,
		'to' => 8917,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8917,
		'to' => 8918,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 8918,
		'to' => 8919,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8919,
		'to' => 8920,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8920,
		'to' => 8921,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 8930,
		'to' => 8937,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8937,
		'to' => 8938,
	],[
		'type' => 'string',
		'value' => ')',
		'from' => 8938,
		'to' => 8941,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8941,
		'to' => 8942,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8942,
		'to' => 8943,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 8952,
		'to' => 8958,
	],[
		'type' => 'name',
		'value' => 'e',
		'from' => 8959,
		'to' => 8960,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8960,
		'to' => 8961,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 8966,
		'to' => 8967,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 8967,
		'to' => 8968,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 8968,
		'to' => 8969,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 8975,
		'to' => 8981,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 8981,
		'to' => 8982,
	],[
		'type' => 'string',
		'value' => 'function',
		'from' => 8982,
		'to' => 8992,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 8992,
		'to' => 8993,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 8994,
		'to' => 9002,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9003,
		'to' => 9004,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9004,
		'to' => 9005,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9006,
		'to' => 9007,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 9016,
		'to' => 9019,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 9020,
		'to' => 9021,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 9022,
		'to' => 9023,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 9024,
		'to' => 9025,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 9025,
		'to' => 9026,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9026,
		'to' => 9027,
	],[
		'type' => 'name',
		'value' => 'new_scope',
		'from' => 9036,
		'to' => 9045,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9045,
		'to' => 9046,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9046,
		'to' => 9047,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9047,
		'to' => 9048,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 9057,
		'to' => 9059,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9060,
		'to' => 9061,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9061,
		'to' => 9066,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9066,
		'to' => 9067,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 9067,
		'to' => 9072,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 9073,
		'to' => 9076,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 9077,
		'to' => 9083,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9083,
		'to' => 9084,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9085,
		'to' => 9086,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 9099,
		'to' => 9104,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9104,
		'to' => 9105,
	],[
		'type' => 'name',
		'value' => 'define',
		'from' => 9105,
		'to' => 9111,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9111,
		'to' => 9112,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9112,
		'to' => 9117,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9117,
		'to' => 9118,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9118,
		'to' => 9119,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 9132,
		'to' => 9136,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9136,
		'to' => 9137,
	],[
		'type' => 'name',
		'value' => 'name',
		'from' => 9137,
		'to' => 9141,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 9142,
		'to' => 9143,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9144,
		'to' => 9149,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9149,
		'to' => 9150,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 9150,
		'to' => 9155,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9155,
		'to' => 9156,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 9169,
		'to' => 9176,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9176,
		'to' => 9177,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9177,
		'to' => 9178,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9178,
		'to' => 9179,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 9188,
		'to' => 9189,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 9198,
		'to' => 9205,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9205,
		'to' => 9206,
	],[
		'type' => 'string',
		'value' => '(',
		'from' => 9206,
		'to' => 9209,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9209,
		'to' => 9210,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9210,
		'to' => 9211,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 9220,
		'to' => 9222,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9223,
		'to' => 9224,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9224,
		'to' => 9229,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9229,
		'to' => 9230,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 9230,
		'to' => 9232,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 9233,
		'to' => 9236,
	],[
		'type' => 'string',
		'value' => ')',
		'from' => 9237,
		'to' => 9240,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9240,
		'to' => 9241,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9242,
		'to' => 9243,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 9256,
		'to' => 9261,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9262,
		'to' => 9263,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 9263,
		'to' => 9267,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9267,
		'to' => 9268,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9269,
		'to' => 9270,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 9287,
		'to' => 9289,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9290,
		'to' => 9291,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9291,
		'to' => 9296,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9296,
		'to' => 9297,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 9297,
		'to' => 9302,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 9303,
		'to' => 9306,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 9307,
		'to' => 9313,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9313,
		'to' => 9314,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9315,
		'to' => 9316,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9337,
		'to' => 9342,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9342,
		'to' => 9343,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 9343,
		'to' => 9348,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9348,
		'to' => 9349,
	],[
		'type' => 'string',
		'value' => 'Expected a parameter name.',
		'from' => 9349,
		'to' => 9377,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9377,
		'to' => 9378,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9378,
		'to' => 9379,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 9396,
		'to' => 9397,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 9414,
		'to' => 9419,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9419,
		'to' => 9420,
	],[
		'type' => 'name',
		'value' => 'define',
		'from' => 9420,
		'to' => 9426,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9426,
		'to' => 9427,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9427,
		'to' => 9432,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9432,
		'to' => 9433,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9433,
		'to' => 9434,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 9451,
		'to' => 9452,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9452,
		'to' => 9453,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 9453,
		'to' => 9457,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9457,
		'to' => 9458,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9458,
		'to' => 9463,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9463,
		'to' => 9464,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9464,
		'to' => 9465,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 9482,
		'to' => 9489,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9489,
		'to' => 9490,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9490,
		'to' => 9491,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9491,
		'to' => 9492,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 9509,
		'to' => 9511,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9512,
		'to' => 9513,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9513,
		'to' => 9518,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9518,
		'to' => 9519,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 9519,
		'to' => 9521,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 9522,
		'to' => 9525,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 9526,
		'to' => 9529,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9529,
		'to' => 9530,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9531,
		'to' => 9532,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 9553,
		'to' => 9558,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9558,
		'to' => 9559,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 9576,
		'to' => 9577,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 9594,
		'to' => 9601,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9601,
		'to' => 9602,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 9602,
		'to' => 9605,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9605,
		'to' => 9606,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9606,
		'to' => 9607,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 9620,
		'to' => 9621,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 9630,
		'to' => 9631,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 9640,
		'to' => 9644,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9644,
		'to' => 9645,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 9645,
		'to' => 9650,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 9651,
		'to' => 9652,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 9653,
		'to' => 9654,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9654,
		'to' => 9655,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 9664,
		'to' => 9671,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9671,
		'to' => 9672,
	],[
		'type' => 'string',
		'value' => ')',
		'from' => 9672,
		'to' => 9675,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9675,
		'to' => 9676,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9676,
		'to' => 9677,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 9686,
		'to' => 9693,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9693,
		'to' => 9694,
	],[
		'type' => 'string',
		'value' => '{',
		'from' => 9694,
		'to' => 9697,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9697,
		'to' => 9698,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9698,
		'to' => 9699,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 9708,
		'to' => 9712,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9712,
		'to' => 9713,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 9713,
		'to' => 9719,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 9720,
		'to' => 9721,
	],[
		'type' => 'name',
		'value' => 'statements',
		'from' => 9722,
		'to' => 9732,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9732,
		'to' => 9733,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9733,
		'to' => 9734,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9734,
		'to' => 9735,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 9744,
		'to' => 9751,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9751,
		'to' => 9752,
	],[
		'type' => 'string',
		'value' => '}',
		'from' => 9752,
		'to' => 9755,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9755,
		'to' => 9756,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9756,
		'to' => 9757,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 9766,
		'to' => 9770,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9770,
		'to' => 9771,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 9771,
		'to' => 9776,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 9777,
		'to' => 9778,
	],[
		'type' => 'string',
		'value' => 'function',
		'from' => 9779,
		'to' => 9789,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9789,
		'to' => 9790,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 9799,
		'to' => 9804,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9804,
		'to' => 9805,
	],[
		'type' => 'name',
		'value' => 'pop',
		'from' => 9805,
		'to' => 9808,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9808,
		'to' => 9809,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9809,
		'to' => 9810,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9810,
		'to' => 9811,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 9820,
		'to' => 9826,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 9827,
		'to' => 9831,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9831,
		'to' => 9832,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 9837,
		'to' => 9838,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9838,
		'to' => 9839,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9839,
		'to' => 9840,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 9846,
		'to' => 9852,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9852,
		'to' => 9853,
	],[
		'type' => 'string',
		'value' => '[',
		'from' => 9853,
		'to' => 9856,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 9856,
		'to' => 9857,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 9858,
		'to' => 9866,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9867,
		'to' => 9868,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9868,
		'to' => 9869,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9870,
		'to' => 9871,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 9880,
		'to' => 9883,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 9884,
		'to' => 9885,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 9886,
		'to' => 9887,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 9888,
		'to' => 9889,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 9889,
		'to' => 9890,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9890,
		'to' => 9891,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 9900,
		'to' => 9902,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9903,
		'to' => 9904,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 9904,
		'to' => 9909,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9909,
		'to' => 9910,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 9910,
		'to' => 9912,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 9913,
		'to' => 9916,
	],[
		'type' => 'string',
		'value' => ']',
		'from' => 9917,
		'to' => 9920,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9920,
		'to' => 9921,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9922,
		'to' => 9923,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 9936,
		'to' => 9941,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9942,
		'to' => 9943,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 9943,
		'to' => 9947,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9947,
		'to' => 9948,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 9949,
		'to' => 9950,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 9967,
		'to' => 9968,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 9968,
		'to' => 9969,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 9969,
		'to' => 9973,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9973,
		'to' => 9974,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 9974,
		'to' => 9984,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 9984,
		'to' => 9985,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 9985,
		'to' => 9986,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9986,
		'to' => 9987,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 9987,
		'to' => 9988,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 9988,
		'to' => 9989,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 10006,
		'to' => 10008,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10009,
		'to' => 10010,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 10010,
		'to' => 10015,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10015,
		'to' => 10016,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 10016,
		'to' => 10018,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 10019,
		'to' => 10022,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 10023,
		'to' => 10026,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10026,
		'to' => 10027,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 10028,
		'to' => 10029,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 10050,
		'to' => 10055,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10055,
		'to' => 10056,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10073,
		'to' => 10074,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 10091,
		'to' => 10098,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10098,
		'to' => 10099,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 10099,
		'to' => 10102,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10102,
		'to' => 10103,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10103,
		'to' => 10104,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10117,
		'to' => 10118,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10127,
		'to' => 10128,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 10137,
		'to' => 10144,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10144,
		'to' => 10145,
	],[
		'type' => 'string',
		'value' => ']',
		'from' => 10145,
		'to' => 10148,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10148,
		'to' => 10149,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10149,
		'to' => 10150,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 10159,
		'to' => 10163,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10163,
		'to' => 10164,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 10164,
		'to' => 10169,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10170,
		'to' => 10171,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 10172,
		'to' => 10173,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10173,
		'to' => 10174,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 10183,
		'to' => 10187,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10187,
		'to' => 10188,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 10188,
		'to' => 10193,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10194,
		'to' => 10195,
	],[
		'type' => 'string',
		'value' => 'unary',
		'from' => 10196,
		'to' => 10203,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10203,
		'to' => 10204,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 10213,
		'to' => 10219,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 10220,
		'to' => 10224,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10224,
		'to' => 10225,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10230,
		'to' => 10231,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10231,
		'to' => 10232,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10232,
		'to' => 10233,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 10239,
		'to' => 10245,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10245,
		'to' => 10246,
	],[
		'type' => 'string',
		'value' => '{',
		'from' => 10246,
		'to' => 10249,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 10249,
		'to' => 10250,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 10251,
		'to' => 10259,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10260,
		'to' => 10261,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10261,
		'to' => 10262,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 10263,
		'to' => 10264,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 10273,
		'to' => 10276,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 10277,
		'to' => 10278,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10279,
		'to' => 10280,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 10281,
		'to' => 10282,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 10282,
		'to' => 10283,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 10283,
		'to' => 10284,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 10285,
		'to' => 10286,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 10286,
		'to' => 10287,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 10288,
		'to' => 10289,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10289,
		'to' => 10290,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 10299,
		'to' => 10301,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10302,
		'to' => 10303,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 10303,
		'to' => 10308,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10308,
		'to' => 10309,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 10309,
		'to' => 10311,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 10312,
		'to' => 10315,
	],[
		'type' => 'string',
		'value' => '}',
		'from' => 10316,
		'to' => 10319,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10319,
		'to' => 10320,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 10321,
		'to' => 10322,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 10335,
		'to' => 10340,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10341,
		'to' => 10342,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 10342,
		'to' => 10346,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10346,
		'to' => 10347,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 10348,
		'to' => 10349,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 10366,
		'to' => 10367,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10368,
		'to' => 10369,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 10370,
		'to' => 10375,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10375,
		'to' => 10376,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 10393,
		'to' => 10395,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10396,
		'to' => 10397,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 10397,
		'to' => 10398,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10398,
		'to' => 10399,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 10399,
		'to' => 10404,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 10405,
		'to' => 10408,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 10409,
		'to' => 10415,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 10416,
		'to' => 10418,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 10419,
		'to' => 10420,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10420,
		'to' => 10421,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 10421,
		'to' => 10426,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 10427,
		'to' => 10430,
	],[
		'type' => 'string',
		'value' => 'literal',
		'from' => 10431,
		'to' => 10440,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10440,
		'to' => 10441,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 10442,
		'to' => 10443,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 10464,
		'to' => 10469,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10469,
		'to' => 10470,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 10470,
		'to' => 10475,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10475,
		'to' => 10476,
	],[
		'type' => 'string',
		'value' => 'Bad property name.',
		'from' => 10476,
		'to' => 10496,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10496,
		'to' => 10497,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10497,
		'to' => 10498,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10515,
		'to' => 10516,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 10533,
		'to' => 10540,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10540,
		'to' => 10541,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10541,
		'to' => 10542,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10542,
		'to' => 10543,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 10560,
		'to' => 10567,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10567,
		'to' => 10568,
	],[
		'type' => 'string',
		'value' => ':',
		'from' => 10568,
		'to' => 10571,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10571,
		'to' => 10572,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10572,
		'to' => 10573,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 10590,
		'to' => 10591,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10592,
		'to' => 10593,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 10594,
		'to' => 10604,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10604,
		'to' => 10605,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 10605,
		'to' => 10606,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10606,
		'to' => 10607,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10607,
		'to' => 10608,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 10625,
		'to' => 10626,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10626,
		'to' => 10627,
	],[
		'type' => 'name',
		'value' => 'key',
		'from' => 10627,
		'to' => 10630,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10631,
		'to' => 10632,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 10633,
		'to' => 10634,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10634,
		'to' => 10635,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 10635,
		'to' => 10640,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10640,
		'to' => 10641,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 10658,
		'to' => 10659,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10659,
		'to' => 10660,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 10660,
		'to' => 10664,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10664,
		'to' => 10665,
	],[
		'type' => 'name',
		'value' => 'v',
		'from' => 10665,
		'to' => 10666,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10666,
		'to' => 10667,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10667,
		'to' => 10668,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 10685,
		'to' => 10687,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10688,
		'to' => 10689,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 10689,
		'to' => 10694,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10694,
		'to' => 10695,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 10695,
		'to' => 10697,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 10698,
		'to' => 10701,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 10702,
		'to' => 10705,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10705,
		'to' => 10706,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 10707,
		'to' => 10708,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 10729,
		'to' => 10734,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10734,
		'to' => 10735,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10752,
		'to' => 10753,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 10770,
		'to' => 10777,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10777,
		'to' => 10778,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 10778,
		'to' => 10781,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10781,
		'to' => 10782,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10782,
		'to' => 10783,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10796,
		'to' => 10797,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10806,
		'to' => 10807,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 10816,
		'to' => 10823,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10823,
		'to' => 10824,
	],[
		'type' => 'string',
		'value' => '}',
		'from' => 10824,
		'to' => 10827,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10827,
		'to' => 10828,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10828,
		'to' => 10829,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 10838,
		'to' => 10842,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10842,
		'to' => 10843,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 10843,
		'to' => 10848,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10849,
		'to' => 10850,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 10851,
		'to' => 10852,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10852,
		'to' => 10853,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 10862,
		'to' => 10866,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 10866,
		'to' => 10867,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 10867,
		'to' => 10872,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10873,
		'to' => 10874,
	],[
		'type' => 'string',
		'value' => 'unary',
		'from' => 10875,
		'to' => 10882,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10882,
		'to' => 10883,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 10892,
		'to' => 10898,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 10899,
		'to' => 10903,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10903,
		'to' => 10904,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 10909,
		'to' => 10910,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10910,
		'to' => 10911,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10911,
		'to' => 10912,
	],[
		'type' => 'name',
		'value' => 'stmt',
		'from' => 10919,
		'to' => 10923,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10923,
		'to' => 10924,
	],[
		'type' => 'string',
		'value' => '{',
		'from' => 10924,
		'to' => 10927,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 10927,
		'to' => 10928,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 10929,
		'to' => 10937,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10938,
		'to' => 10939,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10939,
		'to' => 10940,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 10941,
		'to' => 10942,
	],[
		'type' => 'name',
		'value' => 'new_scope',
		'from' => 10951,
		'to' => 10960,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10960,
		'to' => 10961,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10961,
		'to' => 10962,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10962,
		'to' => 10963,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 10972,
		'to' => 10975,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 10976,
		'to' => 10977,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 10978,
		'to' => 10979,
	],[
		'type' => 'name',
		'value' => 'statements',
		'from' => 10980,
		'to' => 10990,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 10990,
		'to' => 10991,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 10991,
		'to' => 10992,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 10992,
		'to' => 10993,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 11002,
		'to' => 11009,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11009,
		'to' => 11010,
	],[
		'type' => 'string',
		'value' => '}',
		'from' => 11010,
		'to' => 11013,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11013,
		'to' => 11014,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11014,
		'to' => 11015,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 11024,
		'to' => 11029,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11029,
		'to' => 11030,
	],[
		'type' => 'name',
		'value' => 'pop',
		'from' => 11030,
		'to' => 11033,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11033,
		'to' => 11034,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11034,
		'to' => 11035,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11035,
		'to' => 11036,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 11045,
		'to' => 11051,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 11052,
		'to' => 11053,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11053,
		'to' => 11054,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 11059,
		'to' => 11060,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11060,
		'to' => 11061,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11061,
		'to' => 11062,
	],[
		'type' => 'name',
		'value' => 'stmt',
		'from' => 11068,
		'to' => 11072,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11072,
		'to' => 11073,
	],[
		'type' => 'string',
		'value' => 'var',
		'from' => 11073,
		'to' => 11078,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 11078,
		'to' => 11079,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 11080,
		'to' => 11088,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11089,
		'to' => 11090,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11090,
		'to' => 11091,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 11092,
		'to' => 11093,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 11102,
		'to' => 11105,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 11106,
		'to' => 11107,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 11108,
		'to' => 11109,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 11110,
		'to' => 11111,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 11111,
		'to' => 11112,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 11112,
		'to' => 11113,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 11114,
		'to' => 11115,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 11115,
		'to' => 11116,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 11117,
		'to' => 11118,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11118,
		'to' => 11119,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 11128,
		'to' => 11133,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11134,
		'to' => 11135,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 11135,
		'to' => 11139,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11139,
		'to' => 11140,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 11141,
		'to' => 11142,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 11155,
		'to' => 11156,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 11157,
		'to' => 11158,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 11159,
		'to' => 11164,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11164,
		'to' => 11165,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 11178,
		'to' => 11180,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11181,
		'to' => 11182,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 11182,
		'to' => 11183,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11183,
		'to' => 11184,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 11184,
		'to' => 11189,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 11190,
		'to' => 11193,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 11194,
		'to' => 11200,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11200,
		'to' => 11201,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 11202,
		'to' => 11203,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 11220,
		'to' => 11221,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11221,
		'to' => 11222,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 11222,
		'to' => 11227,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11227,
		'to' => 11228,
	],[
		'type' => 'string',
		'value' => 'Expected a new variable name.',
		'from' => 11228,
		'to' => 11259,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11259,
		'to' => 11260,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11260,
		'to' => 11261,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 11274,
		'to' => 11275,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 11288,
		'to' => 11293,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11293,
		'to' => 11294,
	],[
		'type' => 'name',
		'value' => 'define',
		'from' => 11294,
		'to' => 11300,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11300,
		'to' => 11301,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 11301,
		'to' => 11302,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11302,
		'to' => 11303,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11303,
		'to' => 11304,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 11317,
		'to' => 11324,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11324,
		'to' => 11325,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11325,
		'to' => 11326,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11326,
		'to' => 11327,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 11340,
		'to' => 11342,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11343,
		'to' => 11344,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 11344,
		'to' => 11349,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11349,
		'to' => 11350,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 11350,
		'to' => 11352,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 11353,
		'to' => 11356,
	],[
		'type' => 'string',
		'value' => '=',
		'from' => 11357,
		'to' => 11360,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11360,
		'to' => 11361,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 11362,
		'to' => 11363,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 11380,
		'to' => 11381,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 11382,
		'to' => 11383,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 11384,
		'to' => 11389,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11389,
		'to' => 11390,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 11407,
		'to' => 11414,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11414,
		'to' => 11415,
	],[
		'type' => 'string',
		'value' => '=',
		'from' => 11415,
		'to' => 11418,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11418,
		'to' => 11419,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11419,
		'to' => 11420,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 11437,
		'to' => 11438,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11438,
		'to' => 11439,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 11439,
		'to' => 11444,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 11445,
		'to' => 11446,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 11447,
		'to' => 11448,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11448,
		'to' => 11449,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 11466,
		'to' => 11467,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11467,
		'to' => 11468,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 11468,
		'to' => 11474,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 11475,
		'to' => 11476,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 11477,
		'to' => 11487,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11487,
		'to' => 11488,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 11488,
		'to' => 11489,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11489,
		'to' => 11490,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11490,
		'to' => 11491,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 11508,
		'to' => 11509,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11509,
		'to' => 11510,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 11510,
		'to' => 11515,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 11516,
		'to' => 11517,
	],[
		'type' => 'string',
		'value' => 'binary',
		'from' => 11518,
		'to' => 11526,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11526,
		'to' => 11527,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 11544,
		'to' => 11545,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11545,
		'to' => 11546,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 11546,
		'to' => 11550,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11550,
		'to' => 11551,
	],[
		'type' => 'name',
		'value' => 't',
		'from' => 11551,
		'to' => 11552,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11552,
		'to' => 11553,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11553,
		'to' => 11554,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 11567,
		'to' => 11568,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 11581,
		'to' => 11583,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11584,
		'to' => 11585,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 11585,
		'to' => 11590,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11590,
		'to' => 11591,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 11591,
		'to' => 11593,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 11594,
		'to' => 11597,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 11598,
		'to' => 11601,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11601,
		'to' => 11602,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 11603,
		'to' => 11604,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 11621,
		'to' => 11626,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11626,
		'to' => 11627,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 11640,
		'to' => 11641,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 11654,
		'to' => 11661,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11661,
		'to' => 11662,
	],[
		'type' => 'string',
		'value' => ',',
		'from' => 11662,
		'to' => 11665,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11665,
		'to' => 11666,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11666,
		'to' => 11667,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 11676,
		'to' => 11677,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 11686,
		'to' => 11693,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11693,
		'to' => 11694,
	],[
		'type' => 'string',
		'value' => ';',
		'from' => 11694,
		'to' => 11697,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11697,
		'to' => 11698,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11698,
		'to' => 11699,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 11708,
		'to' => 11714,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 11715,
		'to' => 11716,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11716,
		'to' => 11717,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 11717,
		'to' => 11723,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 11724,
		'to' => 11727,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 11728,
		'to' => 11729,
	],[
		'type' => 'operator',
		'value' => '?',
		'from' => 11730,
		'to' => 11731,
	],[
		'type' => 'name',
		'value' => 'null',
		'from' => 11732,
		'to' => 11736,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 11737,
		'to' => 11738,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 11739,
		'to' => 11740,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11740,
		'to' => 11741,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 11741,
		'to' => 11747,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 11748,
		'to' => 11751,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 11752,
		'to' => 11753,
	],[
		'type' => 'operator',
		'value' => '?',
		'from' => 11754,
		'to' => 11755,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 11756,
		'to' => 11757,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 11757,
		'to' => 11758,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 11758,
		'to' => 11759,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 11759,
		'to' => 11760,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 11761,
		'to' => 11762,
	],[
		'type' => 'name',
		'value' => 'a',
		'from' => 11763,
		'to' => 11764,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11764,
		'to' => 11765,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 11770,
		'to' => 11771,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11771,
		'to' => 11772,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11772,
		'to' => 11773,
	],[
		'type' => 'name',
		'value' => 'stmt',
		'from' => 11779,
		'to' => 11783,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11783,
		'to' => 11784,
	],[
		'type' => 'string',
		'value' => 'if',
		'from' => 11784,
		'to' => 11788,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 11788,
		'to' => 11789,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 11790,
		'to' => 11798,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11799,
		'to' => 11800,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11800,
		'to' => 11801,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 11802,
		'to' => 11803,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 11812,
		'to' => 11819,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11819,
		'to' => 11820,
	],[
		'type' => 'string',
		'value' => '(',
		'from' => 11820,
		'to' => 11823,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11823,
		'to' => 11824,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11824,
		'to' => 11825,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 11834,
		'to' => 11838,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11838,
		'to' => 11839,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 11839,
		'to' => 11844,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 11845,
		'to' => 11846,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 11847,
		'to' => 11857,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11857,
		'to' => 11858,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 11858,
		'to' => 11859,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11859,
		'to' => 11860,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11860,
		'to' => 11861,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 11870,
		'to' => 11877,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11877,
		'to' => 11878,
	],[
		'type' => 'string',
		'value' => ')',
		'from' => 11878,
		'to' => 11881,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11881,
		'to' => 11882,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11882,
		'to' => 11883,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 11892,
		'to' => 11896,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11896,
		'to' => 11897,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 11897,
		'to' => 11903,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 11904,
		'to' => 11905,
	],[
		'type' => 'name',
		'value' => 'block',
		'from' => 11906,
		'to' => 11911,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11911,
		'to' => 11912,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11912,
		'to' => 11913,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11913,
		'to' => 11914,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 11923,
		'to' => 11925,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11926,
		'to' => 11927,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 11927,
		'to' => 11932,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11932,
		'to' => 11933,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 11933,
		'to' => 11935,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 11936,
		'to' => 11939,
	],[
		'type' => 'string',
		'value' => 'else',
		'from' => 11940,
		'to' => 11946,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11946,
		'to' => 11947,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 11948,
		'to' => 11949,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 11962,
		'to' => 11967,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 11967,
		'to' => 11968,
	],[
		'type' => 'name',
		'value' => 'reserve',
		'from' => 11968,
		'to' => 11975,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 11975,
		'to' => 11976,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 11976,
		'to' => 11981,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 11981,
		'to' => 11982,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 11982,
		'to' => 11983,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 11996,
		'to' => 12003,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12003,
		'to' => 12004,
	],[
		'type' => 'string',
		'value' => 'else',
		'from' => 12004,
		'to' => 12010,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12010,
		'to' => 12011,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12011,
		'to' => 12012,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12025,
		'to' => 12029,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12029,
		'to' => 12030,
	],[
		'type' => 'name',
		'value' => 'third',
		'from' => 12030,
		'to' => 12035,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12036,
		'to' => 12037,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 12038,
		'to' => 12043,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12043,
		'to' => 12044,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 12044,
		'to' => 12046,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 12047,
		'to' => 12050,
	],[
		'type' => 'string',
		'value' => 'if',
		'from' => 12051,
		'to' => 12055,
	],[
		'type' => 'operator',
		'value' => '?',
		'from' => 12056,
		'to' => 12057,
	],[
		'type' => 'name',
		'value' => 'statement',
		'from' => 12058,
		'to' => 12067,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12067,
		'to' => 12068,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12068,
		'to' => 12069,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 12070,
		'to' => 12071,
	],[
		'type' => 'name',
		'value' => 'block',
		'from' => 12072,
		'to' => 12077,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12077,
		'to' => 12078,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12078,
		'to' => 12079,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12079,
		'to' => 12080,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12089,
		'to' => 12090,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 12091,
		'to' => 12095,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 12096,
		'to' => 12097,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12110,
		'to' => 12114,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12114,
		'to' => 12115,
	],[
		'type' => 'name',
		'value' => 'third',
		'from' => 12115,
		'to' => 12120,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12121,
		'to' => 12122,
	],[
		'type' => 'name',
		'value' => 'null',
		'from' => 12123,
		'to' => 12127,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12127,
		'to' => 12128,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12137,
		'to' => 12138,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12147,
		'to' => 12151,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12151,
		'to' => 12152,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 12152,
		'to' => 12157,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12158,
		'to' => 12159,
	],[
		'type' => 'string',
		'value' => 'statement',
		'from' => 12160,
		'to' => 12171,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12171,
		'to' => 12172,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 12181,
		'to' => 12187,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12188,
		'to' => 12192,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12192,
		'to' => 12193,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12198,
		'to' => 12199,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12199,
		'to' => 12200,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12200,
		'to' => 12201,
	],[
		'type' => 'name',
		'value' => 'stmt',
		'from' => 12207,
		'to' => 12211,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12211,
		'to' => 12212,
	],[
		'type' => 'string',
		'value' => 'return',
		'from' => 12212,
		'to' => 12220,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 12220,
		'to' => 12221,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 12222,
		'to' => 12230,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12231,
		'to' => 12232,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12232,
		'to' => 12233,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 12234,
		'to' => 12235,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 12244,
		'to' => 12246,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12247,
		'to' => 12248,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 12248,
		'to' => 12253,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12253,
		'to' => 12254,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 12254,
		'to' => 12256,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 12257,
		'to' => 12260,
	],[
		'type' => 'string',
		'value' => ';',
		'from' => 12261,
		'to' => 12264,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12264,
		'to' => 12265,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 12266,
		'to' => 12267,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12280,
		'to' => 12284,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12284,
		'to' => 12285,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 12285,
		'to' => 12290,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12291,
		'to' => 12292,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 12293,
		'to' => 12303,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12303,
		'to' => 12304,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 12304,
		'to' => 12305,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12305,
		'to' => 12306,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12306,
		'to' => 12307,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12316,
		'to' => 12317,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 12326,
		'to' => 12333,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12333,
		'to' => 12334,
	],[
		'type' => 'string',
		'value' => ';',
		'from' => 12334,
		'to' => 12337,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12337,
		'to' => 12338,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12338,
		'to' => 12339,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 12348,
		'to' => 12350,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12351,
		'to' => 12352,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 12352,
		'to' => 12357,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12357,
		'to' => 12358,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 12358,
		'to' => 12360,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 12361,
		'to' => 12364,
	],[
		'type' => 'string',
		'value' => '}',
		'from' => 12365,
		'to' => 12368,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12368,
		'to' => 12369,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 12370,
		'to' => 12371,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 12384,
		'to' => 12389,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12389,
		'to' => 12390,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 12390,
		'to' => 12395,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12395,
		'to' => 12396,
	],[
		'type' => 'string',
		'value' => 'Unreachable statement.',
		'from' => 12396,
		'to' => 12420,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12420,
		'to' => 12421,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12421,
		'to' => 12422,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12431,
		'to' => 12432,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12441,
		'to' => 12445,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12445,
		'to' => 12446,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 12446,
		'to' => 12451,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12452,
		'to' => 12453,
	],[
		'type' => 'string',
		'value' => 'statement',
		'from' => 12454,
		'to' => 12465,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12465,
		'to' => 12466,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 12475,
		'to' => 12481,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12482,
		'to' => 12486,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12486,
		'to' => 12487,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12492,
		'to' => 12493,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12493,
		'to' => 12494,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12494,
		'to' => 12495,
	],[
		'type' => 'name',
		'value' => 'stmt',
		'from' => 12501,
		'to' => 12505,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12505,
		'to' => 12506,
	],[
		'type' => 'string',
		'value' => 'break',
		'from' => 12506,
		'to' => 12513,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 12513,
		'to' => 12514,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 12515,
		'to' => 12523,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12524,
		'to' => 12525,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12525,
		'to' => 12526,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 12527,
		'to' => 12528,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 12537,
		'to' => 12544,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12544,
		'to' => 12545,
	],[
		'type' => 'string',
		'value' => ';',
		'from' => 12545,
		'to' => 12548,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12548,
		'to' => 12549,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12549,
		'to' => 12550,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 12559,
		'to' => 12561,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12562,
		'to' => 12563,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 12563,
		'to' => 12568,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12568,
		'to' => 12569,
	],[
		'type' => 'name',
		'value' => 'id',
		'from' => 12569,
		'to' => 12571,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 12572,
		'to' => 12575,
	],[
		'type' => 'string',
		'value' => '}',
		'from' => 12576,
		'to' => 12579,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12579,
		'to' => 12580,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 12581,
		'to' => 12582,
	],[
		'type' => 'name',
		'value' => 'token',
		'from' => 12595,
		'to' => 12600,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12600,
		'to' => 12601,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 12601,
		'to' => 12606,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12606,
		'to' => 12607,
	],[
		'type' => 'string',
		'value' => 'Unreachable statement.',
		'from' => 12607,
		'to' => 12631,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12631,
		'to' => 12632,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12632,
		'to' => 12633,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12642,
		'to' => 12643,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12652,
		'to' => 12656,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12656,
		'to' => 12657,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 12657,
		'to' => 12662,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12663,
		'to' => 12664,
	],[
		'type' => 'string',
		'value' => 'statement',
		'from' => 12665,
		'to' => 12676,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12676,
		'to' => 12677,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 12686,
		'to' => 12692,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12693,
		'to' => 12697,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12697,
		'to' => 12698,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12703,
		'to' => 12704,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12704,
		'to' => 12705,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12705,
		'to' => 12706,
	],[
		'type' => 'name',
		'value' => 'stmt',
		'from' => 12712,
		'to' => 12716,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12716,
		'to' => 12717,
	],[
		'type' => 'string',
		'value' => 'while',
		'from' => 12717,
		'to' => 12724,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 12724,
		'to' => 12725,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 12726,
		'to' => 12734,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12735,
		'to' => 12736,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12736,
		'to' => 12737,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 12738,
		'to' => 12739,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 12748,
		'to' => 12755,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12755,
		'to' => 12756,
	],[
		'type' => 'string',
		'value' => '(',
		'from' => 12756,
		'to' => 12759,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12759,
		'to' => 12760,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12760,
		'to' => 12761,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12770,
		'to' => 12774,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12774,
		'to' => 12775,
	],[
		'type' => 'name',
		'value' => 'first',
		'from' => 12775,
		'to' => 12780,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12781,
		'to' => 12782,
	],[
		'type' => 'name',
		'value' => 'expression',
		'from' => 12783,
		'to' => 12793,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12793,
		'to' => 12794,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 12794,
		'to' => 12795,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12795,
		'to' => 12796,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12796,
		'to' => 12797,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 12806,
		'to' => 12813,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12813,
		'to' => 12814,
	],[
		'type' => 'string',
		'value' => ')',
		'from' => 12814,
		'to' => 12817,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12817,
		'to' => 12818,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12818,
		'to' => 12819,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12828,
		'to' => 12832,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12832,
		'to' => 12833,
	],[
		'type' => 'name',
		'value' => 'second',
		'from' => 12833,
		'to' => 12839,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12840,
		'to' => 12841,
	],[
		'type' => 'name',
		'value' => 'block',
		'from' => 12842,
		'to' => 12847,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12847,
		'to' => 12848,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12848,
		'to' => 12849,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12849,
		'to' => 12850,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12859,
		'to' => 12863,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12863,
		'to' => 12864,
	],[
		'type' => 'name',
		'value' => 'arity',
		'from' => 12864,
		'to' => 12869,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12870,
		'to' => 12871,
	],[
		'type' => 'string',
		'value' => 'statement',
		'from' => 12872,
		'to' => 12883,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12883,
		'to' => 12884,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 12893,
		'to' => 12899,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 12900,
		'to' => 12904,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12904,
		'to' => 12905,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 12910,
		'to' => 12911,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12911,
		'to' => 12912,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 12912,
		'to' => 12913,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 12919,
		'to' => 12925,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 12926,
		'to' => 12934,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12935,
		'to' => 12936,
	],[
		'type' => 'name',
		'value' => 'source',
		'from' => 12936,
		'to' => 12942,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 12942,
		'to' => 12943,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 12944,
		'to' => 12945,
	],[
		'type' => 'name',
		'value' => 'tokens',
		'from' => 12954,
		'to' => 12960,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 12961,
		'to' => 12962,
	],[
		'type' => 'name',
		'value' => 'source',
		'from' => 12963,
		'to' => 12969,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 12969,
		'to' => 12970,
	],[
		'type' => 'name',
		'value' => 'tokens',
		'from' => 12970,
		'to' => 12976,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 12976,
		'to' => 12977,
	],[
		'type' => 'string',
		'value' => '=<>!+-*&|/%^',
		'from' => 12977,
		'to' => 12991,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 12991,
		'to' => 12992,
	],[
		'type' => 'string',
		'value' => '=<>&|',
		'from' => 12993,
		'to' => 13000,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 13000,
		'to' => 13001,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13001,
		'to' => 13002,
	],[
		'type' => 'name',
		'value' => 'token_nr',
		'from' => 13011,
		'to' => 13019,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 13020,
		'to' => 13021,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 13022,
		'to' => 13023,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13023,
		'to' => 13024,
	],[
		'type' => 'name',
		'value' => 'new_scope',
		'from' => 13033,
		'to' => 13042,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 13042,
		'to' => 13043,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 13043,
		'to' => 13044,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13044,
		'to' => 13045,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 13054,
		'to' => 13061,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 13061,
		'to' => 13062,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 13062,
		'to' => 13063,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13063,
		'to' => 13064,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 13073,
		'to' => 13076,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 13077,
		'to' => 13078,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 13079,
		'to' => 13080,
	],[
		'type' => 'name',
		'value' => 'statements',
		'from' => 13081,
		'to' => 13091,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 13091,
		'to' => 13092,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 13092,
		'to' => 13093,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13093,
		'to' => 13094,
	],[
		'type' => 'name',
		'value' => 'advance',
		'from' => 13103,
		'to' => 13110,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 13110,
		'to' => 13111,
	],[
		'type' => 'string',
		'value' => '(end)',
		'from' => 13111,
		'to' => 13118,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 13118,
		'to' => 13119,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13119,
		'to' => 13120,
	],[
		'type' => 'name',
		'value' => 'scope',
		'from' => 13129,
		'to' => 13134,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 13134,
		'to' => 13135,
	],[
		'type' => 'name',
		'value' => 'pop',
		'from' => 13135,
		'to' => 13138,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 13138,
		'to' => 13139,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 13139,
		'to' => 13140,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13140,
		'to' => 13141,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 13150,
		'to' => 13156,
	],[
		'type' => 'name',
		'value' => 's',
		'from' => 13157,
		'to' => 13158,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13158,
		'to' => 13159,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 13164,
		'to' => 13165,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13165,
		'to' => 13166,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 13167,
		'to' => 13168,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 13168,
		'to' => 13169,
	]];
	$t_before_pi = array_slice( $t, $bs, $bl );
	$t_after_pi = array_slice( $t, $as, $al );
	$expected_before_pi = array_slice( $expected, $bs, $bl );
	$expected_after_pi = array_slice( $expected, $as, $al );
	return (($t_before_pi === $expected_before_pi) and ($t_after_pi === $expected_after_pi));
},

];
