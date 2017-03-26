<?php

return [

'http://javascript.crockford.com/tdop/tokens.js tokens' => function(){
	$src = file_get_contents( 'http://javascript.crockford.com/tdop/tokens.js' );
	if ( ! $src ){
		echo 'No source for tokens.js, skipping'.PHP_EOL;
		return true;
	}
	$t = tokens( $src, ['type', 'value', 'from', 'to'] );
	return $t === [[
		'type' => 'name',
		'value' => 'String',
		'from' => 682,
		'to' => 688,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 688,
		'to' => 689,
	],[
		'type' => 'name',
		'value' => 'prototype',
		'from' => 689,
		'to' => 698,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 698,
		'to' => 699,
	],[
		'type' => 'name',
		'value' => 'tokens',
		'from' => 699,
		'to' => 705,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 706,
		'to' => 707,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 708,
		'to' => 716,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 717,
		'to' => 718,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 718,
		'to' => 724,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 724,
		'to' => 725,
	],[
		'type' => 'name',
		'value' => 'suffix',
		'from' => 726,
		'to' => 732,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 732,
		'to' => 733,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 734,
		'to' => 735,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 740,
		'to' => 743,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 744,
		'to' => 745,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 745,
		'to' => 746,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 798,
		'to' => 801,
	],[
		'type' => 'name',
		'value' => 'from',
		'from' => 802,
		'to' => 806,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 806,
		'to' => 807,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 870,
		'to' => 873,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 874,
		'to' => 875,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 876,
		'to' => 877,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 878,
		'to' => 879,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 879,
		'to' => 880,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 941,
		'to' => 944,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 945,
		'to' => 951,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 952,
		'to' => 953,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 954,
		'to' => 958,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 958,
		'to' => 959,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 959,
		'to' => 965,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 965,
		'to' => 966,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 971,
		'to' => 974,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 975,
		'to' => 976,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 976,
		'to' => 977,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 1024,
		'to' => 1027,
	],[
		'type' => 'name',
		'value' => 'q',
		'from' => 1028,
		'to' => 1029,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1029,
		'to' => 1030,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 1080,
		'to' => 1083,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 1084,
		'to' => 1087,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1087,
		'to' => 1088,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 1134,
		'to' => 1137,
	],[
		'type' => 'name',
		'value' => 'result',
		'from' => 1138,
		'to' => 1144,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1145,
		'to' => 1146,
	],[
		'type' => 'operator',
		'value' => '[',
		'from' => 1147,
		'to' => 1148,
	],[
		'type' => 'operator',
		'value' => ']',
		'from' => 1148,
		'to' => 1149,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1149,
		'to' => 1150,
	],[
		'type' => 'name',
		'value' => 'var',
		'from' => 1200,
		'to' => 1203,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 1204,
		'to' => 1208,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1209,
		'to' => 1210,
	],[
		'type' => 'name',
		'value' => 'function',
		'from' => 1211,
		'to' => 1219,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1220,
		'to' => 1221,
	],[
		'type' => 'name',
		'value' => 'type',
		'from' => 1221,
		'to' => 1225,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 1225,
		'to' => 1226,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 1227,
		'to' => 1232,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1232,
		'to' => 1233,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1234,
		'to' => 1235,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 1270,
		'to' => 1276,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1277,
		'to' => 1278,
	],[
		'type' => 'name',
		'value' => 'type',
		'from' => 1291,
		'to' => 1295,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 1295,
		'to' => 1296,
	],[
		'type' => 'name',
		'value' => 'type',
		'from' => 1297,
		'to' => 1301,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 1301,
		'to' => 1302,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 1315,
		'to' => 1320,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 1320,
		'to' => 1321,
	],[
		'type' => 'name',
		'value' => 'value',
		'from' => 1322,
		'to' => 1327,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 1327,
		'to' => 1328,
	],[
		'type' => 'name',
		'value' => 'from',
		'from' => 1341,
		'to' => 1345,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 1345,
		'to' => 1346,
	],[
		'type' => 'name',
		'value' => 'from',
		'from' => 1347,
		'to' => 1351,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 1351,
		'to' => 1352,
	],[
		'type' => 'name',
		'value' => 'to',
		'from' => 1365,
		'to' => 1367,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 1367,
		'to' => 1368,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 1369,
		'to' => 1370,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1379,
		'to' => 1380,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1380,
		'to' => 1381,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1386,
		'to' => 1387,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1387,
		'to' => 1388,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1465,
		'to' => 1467,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1468,
		'to' => 1469,
	],[
		'type' => 'operator',
		'value' => '!',
		'from' => 1469,
		'to' => 1470,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 1470,
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
		'from' => 1486,
		'to' => 1492,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1492,
		'to' => 1493,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1498,
		'to' => 1499,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1573,
		'to' => 1575,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1576,
		'to' => 1577,
	],[
		'type' => 'name',
		'value' => 'typeof',
		'from' => 1577,
		'to' => 1583,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 1584,
		'to' => 1590,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 1591,
		'to' => 1594,
	],[
		'type' => 'string',
		'value' => 'string',
		'from' => 1595,
		'to' => 1603,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1603,
		'to' => 1604,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1605,
		'to' => 1606,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 1615,
		'to' => 1621,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1622,
		'to' => 1623,
	],[
		'type' => 'string',
		'value' => '<>+-&',
		'from' => 1624,
		'to' => 1631,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1631,
		'to' => 1632,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1637,
		'to' => 1638,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1643,
		'to' => 1645,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1646,
		'to' => 1647,
	],[
		'type' => 'name',
		'value' => 'typeof',
		'from' => 1647,
		'to' => 1653,
	],[
		'type' => 'name',
		'value' => 'suffix',
		'from' => 1654,
		'to' => 1660,
	],[
		'type' => 'operator',
		'value' => '!==',
		'from' => 1661,
		'to' => 1664,
	],[
		'type' => 'string',
		'value' => 'string',
		'from' => 1665,
		'to' => 1673,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1673,
		'to' => 1674,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1675,
		'to' => 1676,
	],[
		'type' => 'name',
		'value' => 'suffix',
		'from' => 1685,
		'to' => 1691,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1692,
		'to' => 1693,
	],[
		'type' => 'string',
		'value' => '=>&:',
		'from' => 1694,
		'to' => 1700,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1700,
		'to' => 1701,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1706,
		'to' => 1707,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 1767,
		'to' => 1768,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1769,
		'to' => 1770,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 1771,
		'to' => 1775,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1775,
		'to' => 1776,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 1776,
		'to' => 1782,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1782,
		'to' => 1783,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 1783,
		'to' => 1784,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1784,
		'to' => 1785,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1785,
		'to' => 1786,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 1791,
		'to' => 1796,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1797,
		'to' => 1798,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 1798,
		'to' => 1799,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1799,
		'to' => 1800,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1801,
		'to' => 1802,
	],[
		'type' => 'name',
		'value' => 'from',
		'from' => 1811,
		'to' => 1815,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1816,
		'to' => 1817,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 1818,
		'to' => 1819,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1819,
		'to' => 1820,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1853,
		'to' => 1855,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1856,
		'to' => 1857,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 1857,
		'to' => 1858,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 1859,
		'to' => 1861,
	],[
		'type' => 'string',
		'value' => ' ',
		'from' => 1862,
		'to' => 1865,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1865,
		'to' => 1866,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 1867,
		'to' => 1868,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 1881,
		'to' => 1882,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 1883,
		'to' => 1885,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 1886,
		'to' => 1887,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1887,
		'to' => 1888,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 1901,
		'to' => 1902,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 1903,
		'to' => 1904,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 1905,
		'to' => 1909,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 1909,
		'to' => 1910,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 1910,
		'to' => 1916,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1916,
		'to' => 1917,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 1917,
		'to' => 1918,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1918,
		'to' => 1919,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 1919,
		'to' => 1920,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 1940,
		'to' => 1941,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 1942,
		'to' => 1946,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 1947,
		'to' => 1949,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1950,
		'to' => 1951,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1951,
		'to' => 1952,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 1952,
		'to' => 1953,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 1954,
		'to' => 1956,
	],[
		'type' => 'string',
		'value' => 'a',
		'from' => 1957,
		'to' => 1960,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 1961,
		'to' => 1963,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 1964,
		'to' => 1965,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 1966,
		'to' => 1968,
	],[
		'type' => 'string',
		'value' => 'z',
		'from' => 1969,
		'to' => 1972,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1972,
		'to' => 1973,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 1974,
		'to' => 1976,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 1977,
		'to' => 1978,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 1978,
		'to' => 1979,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 1980,
		'to' => 1982,
	],[
		'type' => 'string',
		'value' => 'A',
		'from' => 1983,
		'to' => 1986,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 1987,
		'to' => 1989,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 1990,
		'to' => 1991,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 1992,
		'to' => 1994,
	],[
		'type' => 'string',
		'value' => 'Z',
		'from' => 1995,
		'to' => 1998,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1998,
		'to' => 1999,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 1999,
		'to' => 2000,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2001,
		'to' => 2002,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 2015,
		'to' => 2018,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2019,
		'to' => 2020,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2021,
		'to' => 2022,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2022,
		'to' => 2023,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 2036,
		'to' => 2037,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2038,
		'to' => 2040,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 2041,
		'to' => 2042,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2042,
		'to' => 2043,
	],[
		'type' => 'name',
		'value' => 'for',
		'from' => 2056,
		'to' => 2059,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2060,
		'to' => 2061,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2061,
		'to' => 2062,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2062,
		'to' => 2063,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2063,
		'to' => 2064,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2065,
		'to' => 2066,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2083,
		'to' => 2084,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2085,
		'to' => 2086,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 2087,
		'to' => 2091,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2091,
		'to' => 2092,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 2092,
		'to' => 2098,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2098,
		'to' => 2099,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 2099,
		'to' => 2100,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2100,
		'to' => 2101,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2101,
		'to' => 2102,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2119,
		'to' => 2121,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2122,
		'to' => 2123,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2123,
		'to' => 2124,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2124,
		'to' => 2125,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 2126,
		'to' => 2128,
	],[
		'type' => 'string',
		'value' => 'a',
		'from' => 2129,
		'to' => 2132,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 2133,
		'to' => 2135,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2136,
		'to' => 2137,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 2138,
		'to' => 2140,
	],[
		'type' => 'string',
		'value' => 'z',
		'from' => 2141,
		'to' => 2144,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2144,
		'to' => 2145,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 2146,
		'to' => 2148,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2149,
		'to' => 2150,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2150,
		'to' => 2151,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 2152,
		'to' => 2154,
	],[
		'type' => 'string',
		'value' => 'A',
		'from' => 2155,
		'to' => 2158,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 2159,
		'to' => 2161,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2162,
		'to' => 2163,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 2164,
		'to' => 2166,
	],[
		'type' => 'string',
		'value' => 'Z',
		'from' => 2167,
		'to' => 2170,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2170,
		'to' => 2171,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 2172,
		'to' => 2174,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2199,
		'to' => 2200,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2200,
		'to' => 2201,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 2202,
		'to' => 2204,
	],[
		'type' => 'string',
		'value' => '0',
		'from' => 2205,
		'to' => 2208,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 2209,
		'to' => 2211,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2212,
		'to' => 2213,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 2214,
		'to' => 2216,
	],[
		'type' => 'string',
		'value' => '9',
		'from' => 2217,
		'to' => 2220,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2220,
		'to' => 2221,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 2222,
		'to' => 2224,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2225,
		'to' => 2226,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 2227,
		'to' => 2230,
	],[
		'type' => 'string',
		'value' => '_',
		'from' => 2231,
		'to' => 2234,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2234,
		'to' => 2235,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2236,
		'to' => 2237,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 2258,
		'to' => 2261,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2262,
		'to' => 2264,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2265,
		'to' => 2266,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2266,
		'to' => 2267,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 2288,
		'to' => 2289,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2290,
		'to' => 2292,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 2293,
		'to' => 2294,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2294,
		'to' => 2295,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2312,
		'to' => 2313,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 2314,
		'to' => 2318,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2319,
		'to' => 2320,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 2341,
		'to' => 2346,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2346,
		'to' => 2347,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2364,
		'to' => 2365,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2378,
		'to' => 2379,
	],[
		'type' => 'name',
		'value' => 'result',
		'from' => 2392,
		'to' => 2398,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2398,
		'to' => 2399,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 2399,
		'to' => 2403,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2403,
		'to' => 2404,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 2404,
		'to' => 2408,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2408,
		'to' => 2409,
	],[
		'type' => 'string',
		'value' => 'name',
		'from' => 2409,
		'to' => 2415,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 2415,
		'to' => 2416,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 2417,
		'to' => 2420,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2420,
		'to' => 2421,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2421,
		'to' => 2422,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2422,
		'to' => 2423,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2538,
		'to' => 2539,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 2540,
		'to' => 2544,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2545,
		'to' => 2547,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2548,
		'to' => 2549,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2549,
		'to' => 2550,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 2551,
		'to' => 2553,
	],[
		'type' => 'string',
		'value' => '0',
		'from' => 2554,
		'to' => 2557,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 2558,
		'to' => 2560,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2561,
		'to' => 2562,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 2563,
		'to' => 2565,
	],[
		'type' => 'string',
		'value' => '9',
		'from' => 2566,
		'to' => 2569,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2569,
		'to' => 2570,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2571,
		'to' => 2572,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 2585,
		'to' => 2588,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2589,
		'to' => 2590,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2591,
		'to' => 2592,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2592,
		'to' => 2593,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 2606,
		'to' => 2607,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2608,
		'to' => 2610,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 2611,
		'to' => 2612,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2612,
		'to' => 2613,
	],[
		'type' => 'name',
		'value' => 'for',
		'from' => 2653,
		'to' => 2656,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2657,
		'to' => 2658,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2658,
		'to' => 2659,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2659,
		'to' => 2660,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2660,
		'to' => 2661,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2662,
		'to' => 2663,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2680,
		'to' => 2681,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 2682,
		'to' => 2683,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 2684,
		'to' => 2688,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 2688,
		'to' => 2689,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 2689,
		'to' => 2695,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2695,
		'to' => 2696,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 2696,
		'to' => 2697,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2697,
		'to' => 2698,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2698,
		'to' => 2699,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2716,
		'to' => 2718,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2719,
		'to' => 2720,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2720,
		'to' => 2721,
	],[
		'type' => 'operator',
		'value' => '<',
		'from' => 2722,
		'to' => 2723,
	],[
		'type' => 'string',
		'value' => '0',
		'from' => 2724,
		'to' => 2727,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 2728,
		'to' => 2730,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2731,
		'to' => 2732,
	],[
		'type' => 'operator',
		'value' => '>',
		'from' => 2733,
		'to' => 2734,
	],[
		'type' => 'string',
		'value' => '9',
		'from' => 2735,
		'to' => 2738,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2738,
		'to' => 2739,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2740,
		'to' => 2741,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 2762,
		'to' => 2767,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2767,
		'to' => 2768,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2785,
		'to' => 2786,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 2803,
		'to' => 2804,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2805,
		'to' => 2807,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 2808,
		'to' => 2809,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2809,
		'to' => 2810,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 2827,
		'to' => 2830,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2831,
		'to' => 2833,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2834,
		'to' => 2835,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2835,
		'to' => 2836,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 2849,
		'to' => 2850,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 2902,
		'to' => 2904,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2905,
		'to' => 2906,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2906,
		'to' => 2907,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 2908,
		'to' => 2911,
	],[
		'type' => 'string',
		'value' => '.',
		'from' => 2912,
		'to' => 2915,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2915,
		'to' => 2916,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2917,
		'to' => 2918,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 2935,
		'to' => 2936,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2937,
		'to' => 2939,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 2940,
		'to' => 2941,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2941,
		'to' => 2942,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 2959,
		'to' => 2962,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 2963,
		'to' => 2965,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 2966,
		'to' => 2967,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2967,
		'to' => 2968,
	],[
		'type' => 'name',
		'value' => 'for',
		'from' => 2985,
		'to' => 2988,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 2989,
		'to' => 2990,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2990,
		'to' => 2991,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 2991,
		'to' => 2992,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 2992,
		'to' => 2993,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 2994,
		'to' => 2995,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3016,
		'to' => 3017,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3018,
		'to' => 3019,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 3020,
		'to' => 3024,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3024,
		'to' => 3025,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 3025,
		'to' => 3031,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3031,
		'to' => 3032,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3032,
		'to' => 3033,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3033,
		'to' => 3034,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3034,
		'to' => 3035,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3056,
		'to' => 3058,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3059,
		'to' => 3060,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3060,
		'to' => 3061,
	],[
		'type' => 'operator',
		'value' => '<',
		'from' => 3062,
		'to' => 3063,
	],[
		'type' => 'string',
		'value' => '0',
		'from' => 3064,
		'to' => 3067,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 3068,
		'to' => 3070,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3071,
		'to' => 3072,
	],[
		'type' => 'operator',
		'value' => '>',
		'from' => 3073,
		'to' => 3074,
	],[
		'type' => 'string',
		'value' => '9',
		'from' => 3075,
		'to' => 3078,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3078,
		'to' => 3079,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3080,
		'to' => 3081,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 3106,
		'to' => 3111,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3111,
		'to' => 3112,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3133,
		'to' => 3134,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3155,
		'to' => 3156,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3157,
		'to' => 3159,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 3160,
		'to' => 3161,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3161,
		'to' => 3162,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 3183,
		'to' => 3186,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3187,
		'to' => 3189,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3190,
		'to' => 3191,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3191,
		'to' => 3192,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3209,
		'to' => 3210,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3223,
		'to' => 3224,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3269,
		'to' => 3271,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3272,
		'to' => 3273,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3273,
		'to' => 3274,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 3275,
		'to' => 3278,
	],[
		'type' => 'string',
		'value' => 'e',
		'from' => 3279,
		'to' => 3282,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 3283,
		'to' => 3285,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3286,
		'to' => 3287,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 3288,
		'to' => 3291,
	],[
		'type' => 'string',
		'value' => 'E',
		'from' => 3292,
		'to' => 3295,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3295,
		'to' => 3296,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3297,
		'to' => 3298,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3315,
		'to' => 3316,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3317,
		'to' => 3319,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 3320,
		'to' => 3321,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3321,
		'to' => 3322,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 3339,
		'to' => 3342,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3343,
		'to' => 3345,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3346,
		'to' => 3347,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3347,
		'to' => 3348,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3365,
		'to' => 3366,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3367,
		'to' => 3368,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 3369,
		'to' => 3373,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3373,
		'to' => 3374,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 3374,
		'to' => 3380,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3380,
		'to' => 3381,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3381,
		'to' => 3382,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3382,
		'to' => 3383,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3383,
		'to' => 3384,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3401,
		'to' => 3403,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3404,
		'to' => 3405,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3405,
		'to' => 3406,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 3407,
		'to' => 3410,
	],[
		'type' => 'string',
		'value' => '-',
		'from' => 3411,
		'to' => 3414,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 3415,
		'to' => 3417,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3418,
		'to' => 3419,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 3420,
		'to' => 3423,
	],[
		'type' => 'string',
		'value' => '+',
		'from' => 3424,
		'to' => 3427,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3427,
		'to' => 3428,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3429,
		'to' => 3430,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3451,
		'to' => 3452,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3453,
		'to' => 3455,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 3456,
		'to' => 3457,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3457,
		'to' => 3458,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 3479,
		'to' => 3482,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3483,
		'to' => 3485,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3486,
		'to' => 3487,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3487,
		'to' => 3488,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3509,
		'to' => 3510,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3511,
		'to' => 3512,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 3513,
		'to' => 3517,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3517,
		'to' => 3518,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 3518,
		'to' => 3524,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3524,
		'to' => 3525,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3525,
		'to' => 3526,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3526,
		'to' => 3527,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3527,
		'to' => 3528,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3545,
		'to' => 3546,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3563,
		'to' => 3565,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3566,
		'to' => 3567,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3567,
		'to' => 3568,
	],[
		'type' => 'operator',
		'value' => '<',
		'from' => 3569,
		'to' => 3570,
	],[
		'type' => 'string',
		'value' => '0',
		'from' => 3571,
		'to' => 3574,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 3575,
		'to' => 3577,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3578,
		'to' => 3579,
	],[
		'type' => 'operator',
		'value' => '>',
		'from' => 3580,
		'to' => 3581,
	],[
		'type' => 'string',
		'value' => '9',
		'from' => 3582,
		'to' => 3585,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3585,
		'to' => 3586,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3587,
		'to' => 3588,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 3609,
		'to' => 3613,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3613,
		'to' => 3614,
	],[
		'type' => 'string',
		'value' => 'number',
		'from' => 3614,
		'to' => 3622,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 3622,
		'to' => 3623,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 3624,
		'to' => 3627,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3627,
		'to' => 3628,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3628,
		'to' => 3629,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 3629,
		'to' => 3634,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3634,
		'to' => 3635,
	],[
		'type' => 'string',
		'value' => 'Bad exponent',
		'from' => 3635,
		'to' => 3649,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3649,
		'to' => 3650,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3650,
		'to' => 3651,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3668,
		'to' => 3669,
	],[
		'type' => 'name',
		'value' => 'do',
		'from' => 3686,
		'to' => 3688,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3689,
		'to' => 3690,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3711,
		'to' => 3712,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3713,
		'to' => 3715,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 3716,
		'to' => 3717,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3717,
		'to' => 3718,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 3739,
		'to' => 3742,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3743,
		'to' => 3745,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3746,
		'to' => 3747,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3747,
		'to' => 3748,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3769,
		'to' => 3770,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 3771,
		'to' => 3772,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 3773,
		'to' => 3777,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 3777,
		'to' => 3778,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 3778,
		'to' => 3784,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3784,
		'to' => 3785,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3785,
		'to' => 3786,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3786,
		'to' => 3787,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3787,
		'to' => 3788,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3805,
		'to' => 3806,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 3807,
		'to' => 3812,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3813,
		'to' => 3814,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3814,
		'to' => 3815,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 3816,
		'to' => 3818,
	],[
		'type' => 'string',
		'value' => '0',
		'from' => 3819,
		'to' => 3822,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 3823,
		'to' => 3825,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3826,
		'to' => 3827,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 3828,
		'to' => 3830,
	],[
		'type' => 'string',
		'value' => '9',
		'from' => 3831,
		'to' => 3834,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3834,
		'to' => 3835,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3835,
		'to' => 3836,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 3849,
		'to' => 3850,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 3914,
		'to' => 3916,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 3917,
		'to' => 3918,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3918,
		'to' => 3919,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 3920,
		'to' => 3922,
	],[
		'type' => 'string',
		'value' => 'a',
		'from' => 3923,
		'to' => 3926,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 3927,
		'to' => 3929,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3930,
		'to' => 3931,
	],[
		'type' => 'operator',
		'value' => '<=',
		'from' => 3932,
		'to' => 3934,
	],[
		'type' => 'string',
		'value' => 'z',
		'from' => 3935,
		'to' => 3938,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 3938,
		'to' => 3939,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 3940,
		'to' => 3941,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 3958,
		'to' => 3961,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3962,
		'to' => 3964,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 3965,
		'to' => 3966,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3966,
		'to' => 3967,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 3984,
		'to' => 3985,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 3986,
		'to' => 3988,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 3989,
		'to' => 3990,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 3990,
		'to' => 3991,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 4008,
		'to' => 4012,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4012,
		'to' => 4013,
	],[
		'type' => 'string',
		'value' => 'number',
		'from' => 4013,
		'to' => 4021,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4021,
		'to' => 4022,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 4023,
		'to' => 4026,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4026,
		'to' => 4027,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4027,
		'to' => 4028,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 4028,
		'to' => 4033,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4033,
		'to' => 4034,
	],[
		'type' => 'string',
		'value' => 'Bad number',
		'from' => 4034,
		'to' => 4046,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4046,
		'to' => 4047,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4047,
		'to' => 4048,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4061,
		'to' => 4062,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 4163,
		'to' => 4164,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4165,
		'to' => 4166,
	],[
		'type' => 'operator',
		'value' => '+',
		'from' => 4167,
		'to' => 4168,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 4168,
		'to' => 4171,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4171,
		'to' => 4172,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 4185,
		'to' => 4187,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4188,
		'to' => 4189,
	],[
		'type' => 'name',
		'value' => 'isFinite',
		'from' => 4189,
		'to' => 4197,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4197,
		'to' => 4198,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 4198,
		'to' => 4199,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4199,
		'to' => 4200,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4200,
		'to' => 4201,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4202,
		'to' => 4203,
	],[
		'type' => 'name',
		'value' => 'result',
		'from' => 4220,
		'to' => 4226,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4226,
		'to' => 4227,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 4227,
		'to' => 4231,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4231,
		'to' => 4232,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 4232,
		'to' => 4236,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4236,
		'to' => 4237,
	],[
		'type' => 'string',
		'value' => 'number',
		'from' => 4237,
		'to' => 4245,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4245,
		'to' => 4246,
	],[
		'type' => 'name',
		'value' => 'n',
		'from' => 4247,
		'to' => 4248,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4248,
		'to' => 4249,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4249,
		'to' => 4250,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4250,
		'to' => 4251,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4264,
		'to' => 4265,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 4266,
		'to' => 4270,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4271,
		'to' => 4272,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 4289,
		'to' => 4293,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4293,
		'to' => 4294,
	],[
		'type' => 'string',
		'value' => 'number',
		'from' => 4294,
		'to' => 4302,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4302,
		'to' => 4303,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 4304,
		'to' => 4307,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4307,
		'to' => 4308,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4308,
		'to' => 4309,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 4309,
		'to' => 4314,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4314,
		'to' => 4315,
	],[
		'type' => 'string',
		'value' => 'Bad number',
		'from' => 4315,
		'to' => 4327,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4327,
		'to' => 4328,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4328,
		'to' => 4329,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4342,
		'to' => 4343,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4364,
		'to' => 4365,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 4366,
		'to' => 4370,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 4371,
		'to' => 4373,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4374,
		'to' => 4375,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4375,
		'to' => 4376,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 4377,
		'to' => 4380,
	],[
		'type' => 'string',
		'value' => "'",
		'from' => 4381,
		'to' => 4385,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 4386,
		'to' => 4388,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4389,
		'to' => 4390,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 4391,
		'to' => 4394,
	],[
		'type' => 'string',
		'value' => '"',
		'from' => 4395,
		'to' => 4398,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4398,
		'to' => 4399,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4400,
		'to' => 4401,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 4414,
		'to' => 4417,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4418,
		'to' => 4419,
	],[
		'type' => 'string',
		'value' => '',
		'from' => 4420,
		'to' => 4422,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4422,
		'to' => 4423,
	],[
		'type' => 'name',
		'value' => 'q',
		'from' => 4436,
		'to' => 4437,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4438,
		'to' => 4439,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4440,
		'to' => 4441,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4441,
		'to' => 4442,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 4455,
		'to' => 4456,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 4457,
		'to' => 4459,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 4460,
		'to' => 4461,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4461,
		'to' => 4462,
	],[
		'type' => 'name',
		'value' => 'for',
		'from' => 4475,
		'to' => 4478,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4479,
		'to' => 4480,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4480,
		'to' => 4481,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4481,
		'to' => 4482,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4482,
		'to' => 4483,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4484,
		'to' => 4485,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4502,
		'to' => 4503,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 4504,
		'to' => 4505,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 4506,
		'to' => 4510,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4510,
		'to' => 4511,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 4511,
		'to' => 4517,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4517,
		'to' => 4518,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 4518,
		'to' => 4519,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4519,
		'to' => 4520,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4520,
		'to' => 4521,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 4538,
		'to' => 4540,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4541,
		'to' => 4542,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4542,
		'to' => 4543,
	],[
		'type' => 'operator',
		'value' => '<',
		'from' => 4544,
		'to' => 4545,
	],[
		'type' => 'string',
		'value' => ' ',
		'from' => 4546,
		'to' => 4549,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4549,
		'to' => 4550,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4551,
		'to' => 4552,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 4573,
		'to' => 4577,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4577,
		'to' => 4578,
	],[
		'type' => 'string',
		'value' => 'string',
		'from' => 4578,
		'to' => 4586,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4586,
		'to' => 4587,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 4588,
		'to' => 4591,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4591,
		'to' => 4592,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 4592,
		'to' => 4593,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 4593,
		'to' => 4598,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4598,
		'to' => 4599,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4599,
		'to' => 4600,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 4601,
		'to' => 4604,
	],[
		'type' => 'string',
		'value' => '
',
		'from' => 4605,
		'to' => 4609,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 4610,
		'to' => 4612,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4613,
		'to' => 4614,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 4615,
		'to' => 4618,
	],[
		'type' => 'string',
		'value' => '',
		'from' => 4619,
		'to' => 4623,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 4624,
		'to' => 4626,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4627,
		'to' => 4628,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 4629,
		'to' => 4632,
	],[
		'type' => 'string',
		'value' => '',
		'from' => 4633,
		'to' => 4635,
	],[
		'type' => 'operator',
		'value' => '?',
		'from' => 4636,
		'to' => 4637,
	],[
		'type' => 'string',
		'value' => 'Unterminated string.',
		'from' => 4662,
		'to' => 4684,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 4685,
		'to' => 4686,
	],[
		'type' => 'string',
		'value' => 'Control character in string.',
		'from' => 4711,
		'to' => 4741,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4741,
		'to' => 4742,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 4743,
		'to' => 4747,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4747,
		'to' => 4748,
	],[
		'type' => 'string',
		'value' => '',
		'from' => 4748,
		'to' => 4750,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 4750,
		'to' => 4751,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 4752,
		'to' => 4755,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4755,
		'to' => 4756,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4756,
		'to' => 4757,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4757,
		'to' => 4758,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4775,
		'to' => 4776,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 4826,
		'to' => 4828,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4829,
		'to' => 4830,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4830,
		'to' => 4831,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 4832,
		'to' => 4835,
	],[
		'type' => 'name',
		'value' => 'q',
		'from' => 4836,
		'to' => 4837,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4837,
		'to' => 4838,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4839,
		'to' => 4840,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 4861,
		'to' => 4866,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4866,
		'to' => 4867,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 4884,
		'to' => 4885,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 4928,
		'to' => 4930,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4931,
		'to' => 4932,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 4932,
		'to' => 4933,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 4934,
		'to' => 4937,
	],[
		'type' => 'string',
		'value' => "\\",
		'from' => 4938,
		'to' => 4942,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 4942,
		'to' => 4943,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 4944,
		'to' => 4945,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 4966,
		'to' => 4967,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 4968,
		'to' => 4970,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 4971,
		'to' => 4972,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 4972,
		'to' => 4973,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 4994,
		'to' => 4996,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 4997,
		'to' => 4998,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 4998,
		'to' => 4999,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 5000,
		'to' => 5002,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 5003,
		'to' => 5009,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5009,
		'to' => 5010,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5011,
		'to' => 5012,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 5037,
		'to' => 5041,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5041,
		'to' => 5042,
	],[
		'type' => 'string',
		'value' => 'string',
		'from' => 5042,
		'to' => 5050,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5050,
		'to' => 5051,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 5052,
		'to' => 5055,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5055,
		'to' => 5056,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5056,
		'to' => 5057,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 5057,
		'to' => 5062,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5062,
		'to' => 5063,
	],[
		'type' => 'string',
		'value' => 'Unterminated string',
		'from' => 5063,
		'to' => 5084,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5084,
		'to' => 5085,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5085,
		'to' => 5086,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5107,
		'to' => 5108,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5129,
		'to' => 5130,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5131,
		'to' => 5132,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5133,
		'to' => 5137,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5137,
		'to' => 5138,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 5138,
		'to' => 5144,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5144,
		'to' => 5145,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 5145,
		'to' => 5146,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5146,
		'to' => 5147,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5147,
		'to' => 5148,
	],[
		'type' => 'name',
		'value' => 'switch',
		'from' => 5169,
		'to' => 5175,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5176,
		'to' => 5177,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5177,
		'to' => 5178,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5178,
		'to' => 5179,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5180,
		'to' => 5181,
	],[
		'type' => 'name',
		'value' => 'case',
		'from' => 5202,
		'to' => 5206,
	],[
		'type' => 'string',
		'value' => 'b',
		'from' => 5207,
		'to' => 5210,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 5210,
		'to' => 5211,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5236,
		'to' => 5237,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5238,
		'to' => 5239,
	],[
		'type' => 'string',
		'value' => '\b',
		'from' => 5240,
		'to' => 5244,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5244,
		'to' => 5245,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 5270,
		'to' => 5275,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5275,
		'to' => 5276,
	],[
		'type' => 'name',
		'value' => 'case',
		'from' => 5297,
		'to' => 5301,
	],[
		'type' => 'string',
		'value' => 'f',
		'from' => 5302,
		'to' => 5305,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 5305,
		'to' => 5306,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5331,
		'to' => 5332,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5333,
		'to' => 5334,
	],[
		'type' => 'string',
		'value' => '',
		'from' => 5335,
		'to' => 5339,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5339,
		'to' => 5340,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 5365,
		'to' => 5370,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5370,
		'to' => 5371,
	],[
		'type' => 'name',
		'value' => 'case',
		'from' => 5392,
		'to' => 5396,
	],[
		'type' => 'string',
		'value' => 'n',
		'from' => 5397,
		'to' => 5400,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 5400,
		'to' => 5401,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5426,
		'to' => 5427,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5428,
		'to' => 5429,
	],[
		'type' => 'string',
		'value' => '
',
		'from' => 5430,
		'to' => 5434,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5434,
		'to' => 5435,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 5460,
		'to' => 5465,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5465,
		'to' => 5466,
	],[
		'type' => 'name',
		'value' => 'case',
		'from' => 5487,
		'to' => 5491,
	],[
		'type' => 'string',
		'value' => 'r',
		'from' => 5492,
		'to' => 5495,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 5495,
		'to' => 5496,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5521,
		'to' => 5522,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5523,
		'to' => 5524,
	],[
		'type' => 'string',
		'value' => '',
		'from' => 5525,
		'to' => 5529,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5529,
		'to' => 5530,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 5555,
		'to' => 5560,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5560,
		'to' => 5561,
	],[
		'type' => 'name',
		'value' => 'case',
		'from' => 5582,
		'to' => 5586,
	],[
		'type' => 'string',
		'value' => 't',
		'from' => 5587,
		'to' => 5590,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 5590,
		'to' => 5591,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5616,
		'to' => 5617,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5618,
		'to' => 5619,
	],[
		'type' => 'string',
		'value' => '	',
		'from' => 5620,
		'to' => 5624,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5624,
		'to' => 5625,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 5650,
		'to' => 5655,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5655,
		'to' => 5656,
	],[
		'type' => 'name',
		'value' => 'case',
		'from' => 5677,
		'to' => 5681,
	],[
		'type' => 'string',
		'value' => 'u',
		'from' => 5682,
		'to' => 5685,
	],[
		'type' => 'operator',
		'value' => ':',
		'from' => 5685,
		'to' => 5686,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 5711,
		'to' => 5713,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5714,
		'to' => 5715,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 5715,
		'to' => 5716,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 5717,
		'to' => 5719,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 5720,
		'to' => 5726,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5726,
		'to' => 5727,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5728,
		'to' => 5729,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 5758,
		'to' => 5762,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5762,
		'to' => 5763,
	],[
		'type' => 'string',
		'value' => 'string',
		'from' => 5763,
		'to' => 5771,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5771,
		'to' => 5772,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 5773,
		'to' => 5776,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5776,
		'to' => 5777,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5777,
		'to' => 5778,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 5778,
		'to' => 5783,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5783,
		'to' => 5784,
	],[
		'type' => 'string',
		'value' => 'Unterminated string',
		'from' => 5784,
		'to' => 5805,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5805,
		'to' => 5806,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5806,
		'to' => 5807,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 5832,
		'to' => 5833,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5858,
		'to' => 5859,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 5860,
		'to' => 5861,
	],[
		'type' => 'name',
		'value' => 'parseInt',
		'from' => 5862,
		'to' => 5870,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5870,
		'to' => 5871,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 5871,
		'to' => 5875,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5875,
		'to' => 5876,
	],[
		'type' => 'name',
		'value' => 'substr',
		'from' => 5876,
		'to' => 5882,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5882,
		'to' => 5883,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 5883,
		'to' => 5884,
	],[
		'type' => 'operator',
		'value' => '+',
		'from' => 5885,
		'to' => 5886,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 5887,
		'to' => 5888,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5888,
		'to' => 5889,
	],[
		'type' => 'number',
		'value' => 4,
		'from' => 5890,
		'to' => 5891,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5891,
		'to' => 5892,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5892,
		'to' => 5893,
	],[
		'type' => 'number',
		'value' => 16,
		'from' => 5894,
		'to' => 5896,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5896,
		'to' => 5897,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 5897,
		'to' => 5898,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 5923,
		'to' => 5925,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5926,
		'to' => 5927,
	],[
		'type' => 'operator',
		'value' => '!',
		'from' => 5927,
		'to' => 5928,
	],[
		'type' => 'name',
		'value' => 'isFinite',
		'from' => 5928,
		'to' => 5936,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5936,
		'to' => 5937,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5937,
		'to' => 5938,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5938,
		'to' => 5939,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 5940,
		'to' => 5942,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 5943,
		'to' => 5944,
	],[
		'type' => 'operator',
		'value' => '<',
		'from' => 5945,
		'to' => 5946,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 5947,
		'to' => 5948,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5948,
		'to' => 5949,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 5950,
		'to' => 5951,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 5980,
		'to' => 5984,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 5984,
		'to' => 5985,
	],[
		'type' => 'string',
		'value' => 'string',
		'from' => 5985,
		'to' => 5993,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 5993,
		'to' => 5994,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 5995,
		'to' => 5998,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 5998,
		'to' => 5999,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 5999,
		'to' => 6000,
	],[
		'type' => 'name',
		'value' => 'error',
		'from' => 6000,
		'to' => 6005,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6005,
		'to' => 6006,
	],[
		'type' => 'string',
		'value' => 'Unterminated string',
		'from' => 6006,
		'to' => 6027,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6027,
		'to' => 6028,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6028,
		'to' => 6029,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6054,
		'to' => 6055,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6080,
		'to' => 6081,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6082,
		'to' => 6083,
	],[
		'type' => 'name',
		'value' => 'String',
		'from' => 6084,
		'to' => 6090,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6090,
		'to' => 6091,
	],[
		'type' => 'name',
		'value' => 'fromCharCode',
		'from' => 6091,
		'to' => 6103,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6103,
		'to' => 6104,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6104,
		'to' => 6105,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6105,
		'to' => 6106,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6106,
		'to' => 6107,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6132,
		'to' => 6133,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6134,
		'to' => 6136,
	],[
		'type' => 'number',
		'value' => 4,
		'from' => 6137,
		'to' => 6138,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6138,
		'to' => 6139,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 6164,
		'to' => 6169,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6169,
		'to' => 6170,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6191,
		'to' => 6192,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6209,
		'to' => 6210,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 6227,
		'to' => 6230,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6231,
		'to' => 6233,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6234,
		'to' => 6235,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6235,
		'to' => 6236,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6253,
		'to' => 6254,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6255,
		'to' => 6257,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 6258,
		'to' => 6259,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6259,
		'to' => 6260,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6273,
		'to' => 6274,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6287,
		'to' => 6288,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6289,
		'to' => 6291,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 6292,
		'to' => 6293,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6293,
		'to' => 6294,
	],[
		'type' => 'name',
		'value' => 'result',
		'from' => 6307,
		'to' => 6313,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6313,
		'to' => 6314,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 6314,
		'to' => 6318,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6318,
		'to' => 6319,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 6319,
		'to' => 6323,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6323,
		'to' => 6324,
	],[
		'type' => 'string',
		'value' => 'string',
		'from' => 6324,
		'to' => 6332,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 6332,
		'to' => 6333,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 6334,
		'to' => 6337,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6337,
		'to' => 6338,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6338,
		'to' => 6339,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6339,
		'to' => 6340,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6353,
		'to' => 6354,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6355,
		'to' => 6356,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6357,
		'to' => 6361,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6361,
		'to' => 6362,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 6362,
		'to' => 6368,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6368,
		'to' => 6369,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6369,
		'to' => 6370,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6370,
		'to' => 6371,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6371,
		'to' => 6372,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6395,
		'to' => 6396,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 6397,
		'to' => 6401,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 6402,
		'to' => 6404,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6405,
		'to' => 6406,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6406,
		'to' => 6407,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 6408,
		'to' => 6411,
	],[
		'type' => 'string',
		'value' => '/',
		'from' => 6412,
		'to' => 6415,
	],[
		'type' => 'operator',
		'value' => '&&',
		'from' => 6416,
		'to' => 6418,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6419,
		'to' => 6423,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6423,
		'to' => 6424,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 6424,
		'to' => 6430,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6430,
		'to' => 6431,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6431,
		'to' => 6432,
	],[
		'type' => 'operator',
		'value' => '+',
		'from' => 6433,
		'to' => 6434,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 6435,
		'to' => 6436,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6436,
		'to' => 6437,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 6438,
		'to' => 6441,
	],[
		'type' => 'string',
		'value' => '/',
		'from' => 6442,
		'to' => 6445,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6445,
		'to' => 6446,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6447,
		'to' => 6448,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6461,
		'to' => 6462,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6463,
		'to' => 6465,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 6466,
		'to' => 6467,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6467,
		'to' => 6468,
	],[
		'type' => 'name',
		'value' => 'for',
		'from' => 6481,
		'to' => 6484,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6485,
		'to' => 6486,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6486,
		'to' => 6487,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6487,
		'to' => 6488,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6488,
		'to' => 6489,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6490,
		'to' => 6491,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6508,
		'to' => 6509,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6510,
		'to' => 6511,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6512,
		'to' => 6516,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6516,
		'to' => 6517,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 6517,
		'to' => 6523,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6523,
		'to' => 6524,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6524,
		'to' => 6525,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6525,
		'to' => 6526,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6526,
		'to' => 6527,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 6544,
		'to' => 6546,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6547,
		'to' => 6548,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6548,
		'to' => 6549,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 6550,
		'to' => 6553,
	],[
		'type' => 'string',
		'value' => '
',
		'from' => 6554,
		'to' => 6558,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 6559,
		'to' => 6561,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6562,
		'to' => 6563,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 6564,
		'to' => 6567,
	],[
		'type' => 'string',
		'value' => '',
		'from' => 6568,
		'to' => 6572,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 6573,
		'to' => 6575,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6576,
		'to' => 6577,
	],[
		'type' => 'operator',
		'value' => '===',
		'from' => 6578,
		'to' => 6581,
	],[
		'type' => 'string',
		'value' => '',
		'from' => 6582,
		'to' => 6584,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6584,
		'to' => 6585,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6586,
		'to' => 6587,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 6608,
		'to' => 6613,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6613,
		'to' => 6614,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6631,
		'to' => 6632,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6649,
		'to' => 6650,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6651,
		'to' => 6653,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 6654,
		'to' => 6655,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6655,
		'to' => 6656,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6669,
		'to' => 6670,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6694,
		'to' => 6695,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 6696,
		'to' => 6700,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 6701,
		'to' => 6703,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6704,
		'to' => 6705,
	],[
		'type' => 'name',
		'value' => 'prefix',
		'from' => 6705,
		'to' => 6711,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6711,
		'to' => 6712,
	],[
		'type' => 'name',
		'value' => 'indexOf',
		'from' => 6712,
		'to' => 6719,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6719,
		'to' => 6720,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6720,
		'to' => 6721,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6721,
		'to' => 6722,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 6723,
		'to' => 6725,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 6726,
		'to' => 6727,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6727,
		'to' => 6728,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6729,
		'to' => 6730,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 6743,
		'to' => 6746,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6747,
		'to' => 6748,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6749,
		'to' => 6750,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6750,
		'to' => 6751,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6764,
		'to' => 6765,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6766,
		'to' => 6768,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 6769,
		'to' => 6770,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6770,
		'to' => 6771,
	],[
		'type' => 'name',
		'value' => 'while',
		'from' => 6784,
		'to' => 6789,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6790,
		'to' => 6791,
	],[
		'type' => 'name',
		'value' => 'true',
		'from' => 6791,
		'to' => 6795,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6795,
		'to' => 6796,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6797,
		'to' => 6798,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6815,
		'to' => 6816,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 6817,
		'to' => 6818,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 6819,
		'to' => 6823,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6823,
		'to' => 6824,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 6824,
		'to' => 6830,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6830,
		'to' => 6831,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6831,
		'to' => 6832,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6832,
		'to' => 6833,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6833,
		'to' => 6834,
	],[
		'type' => 'name',
		'value' => 'if',
		'from' => 6851,
		'to' => 6853,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6854,
		'to' => 6855,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6855,
		'to' => 6856,
	],[
		'type' => 'operator',
		'value' => '>=',
		'from' => 6857,
		'to' => 6859,
	],[
		'type' => 'name',
		'value' => 'length',
		'from' => 6860,
		'to' => 6866,
	],[
		'type' => 'operator',
		'value' => '||',
		'from' => 6867,
		'to' => 6869,
	],[
		'type' => 'name',
		'value' => 'suffix',
		'from' => 6870,
		'to' => 6876,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 6876,
		'to' => 6877,
	],[
		'type' => 'name',
		'value' => 'indexOf',
		'from' => 6877,
		'to' => 6884,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 6884,
		'to' => 6885,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6885,
		'to' => 6886,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6886,
		'to' => 6887,
	],[
		'type' => 'operator',
		'value' => '<',
		'from' => 6888,
		'to' => 6889,
	],[
		'type' => 'number',
		'value' => 0,
		'from' => 6890,
		'to' => 6891,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 6891,
		'to' => 6892,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 6893,
		'to' => 6894,
	],[
		'type' => 'name',
		'value' => 'break',
		'from' => 6915,
		'to' => 6920,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6920,
		'to' => 6921,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 6938,
		'to' => 6939,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 6956,
		'to' => 6959,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6960,
		'to' => 6962,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 6963,
		'to' => 6964,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6964,
		'to' => 6965,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 6982,
		'to' => 6983,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 6984,
		'to' => 6986,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 6987,
		'to' => 6988,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 6988,
		'to' => 6989,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7002,
		'to' => 7003,
	],[
		'type' => 'name',
		'value' => 'result',
		'from' => 7016,
		'to' => 7022,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7022,
		'to' => 7023,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 7023,
		'to' => 7027,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7027,
		'to' => 7028,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 7028,
		'to' => 7032,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7032,
		'to' => 7033,
	],[
		'type' => 'string',
		'value' => 'operator',
		'from' => 7033,
		'to' => 7043,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7043,
		'to' => 7044,
	],[
		'type' => 'name',
		'value' => 'str',
		'from' => 7045,
		'to' => 7048,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7048,
		'to' => 7049,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7049,
		'to' => 7050,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7050,
		'to' => 7051,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7091,
		'to' => 7092,
	],[
		'type' => 'name',
		'value' => 'else',
		'from' => 7093,
		'to' => 7097,
	],[
		'type' => 'operator',
		'value' => '{',
		'from' => 7098,
		'to' => 7099,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 7112,
		'to' => 7113,
	],[
		'type' => 'operator',
		'value' => '+=',
		'from' => 7114,
		'to' => 7116,
	],[
		'type' => 'number',
		'value' => 1,
		'from' => 7117,
		'to' => 7118,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7118,
		'to' => 7119,
	],[
		'type' => 'name',
		'value' => 'result',
		'from' => 7132,
		'to' => 7138,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7138,
		'to' => 7139,
	],[
		'type' => 'name',
		'value' => 'push',
		'from' => 7139,
		'to' => 7143,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7143,
		'to' => 7144,
	],[
		'type' => 'name',
		'value' => 'make',
		'from' => 7144,
		'to' => 7148,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7148,
		'to' => 7149,
	],[
		'type' => 'string',
		'value' => 'operator',
		'from' => 7149,
		'to' => 7159,
	],[
		'type' => 'operator',
		'value' => ',',
		'from' => 7159,
		'to' => 7160,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 7161,
		'to' => 7162,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7162,
		'to' => 7163,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7163,
		'to' => 7164,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7164,
		'to' => 7165,
	],[
		'type' => 'name',
		'value' => 'c',
		'from' => 7178,
		'to' => 7179,
	],[
		'type' => 'operator',
		'value' => '=',
		'from' => 7180,
		'to' => 7181,
	],[
		'type' => 'name',
		'value' => 'this',
		'from' => 7182,
		'to' => 7186,
	],[
		'type' => 'operator',
		'value' => '.',
		'from' => 7186,
		'to' => 7187,
	],[
		'type' => 'name',
		'value' => 'charAt',
		'from' => 7187,
		'to' => 7193,
	],[
		'type' => 'operator',
		'value' => '(',
		'from' => 7193,
		'to' => 7194,
	],[
		'type' => 'name',
		'value' => 'i',
		'from' => 7194,
		'to' => 7195,
	],[
		'type' => 'operator',
		'value' => ')',
		'from' => 7195,
		'to' => 7196,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7196,
		'to' => 7197,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7206,
		'to' => 7207,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7212,
		'to' => 7213,
	],[
		'type' => 'name',
		'value' => 'return',
		'from' => 7218,
		'to' => 7224,
	],[
		'type' => 'name',
		'value' => 'result',
		'from' => 7225,
		'to' => 7231,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7231,
		'to' => 7232,
	],[
		'type' => 'operator',
		'value' => '}',
		'from' => 7233,
		'to' => 7234,
	],[
		'type' => 'operator',
		'value' => ';',
		'from' => 7234,
		'to' => 7235,
	]];
},

];
