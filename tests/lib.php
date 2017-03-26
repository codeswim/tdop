<?php
/**
 Tacos, testing library in one file.
 @author Damon Zwolinski <damonz@codeswim.com>
 @copyright Copyright ©2017 Damon Zwolinski, All rights reserved.
 @license MIT
 */


/**
 Debug helper, print variable for export in another PHP script.
 */
function pe( $var ){
	echo type_export( $var ).PHP_EOL;
	return $var;
}


/**
 Debug helper. print variable type info in a human readable way.
 */
function pv( $var ){
	echo types( $var ).PHP_EOL;
	return $var;
}


/**
 Find and run tests.
 */
function test( array $params ){

	$start = time();

// Find test files

	$files = [];
	$di = new RecursiveDirectoryIterator( __DIR__, RecursiveDirectoryIterator::SKIP_DOTS );
	$it = new RecursiveIteratorIterator( $di );
	$folder_filters = [];
	foreach( $params as $idx => $param ){
		if( in_array( $param, ['code', 'documentation', 'fuzz', 'integration', 'unit'] )){
			$folder_filters[] = $param;
			unset( $params[$idx] );
		}
	}
	$params = array_values( $params );
	foreach( $it as $file ){
		$include = empty( $folder_filters );
		foreach( $folder_filters as $folder ){
			if( strpos( $file, $folder ) !== false ){
				$include = true;
				break;
			}
		}
		if( $include and $file->getExtension() === 'php' and $file->getFilename() !== 'lib.php' )
			$files[] = $file->getPathname(); 
	}

// Load tests

	$tests = [];
	$me = dirname( __FILE__ );
	foreach( $files as $file ){
		$fn = str_replace( $me.'/', '', $file );
		$tests[$fn] = include $file;
	}
	$results = array_fill_keys( ['passed', 'failed', 'count'], 0 ); 

// Run tests 

	foreach( $tests as $fn => $tests_in_file ){
		foreach( $tests_in_file as $desc => $test ){
			if( empty( $params ) or stripos( $desc, $params[0]) !== false ){
				try{
					$passed = $test();
					$results[($passed ? 'passed' : 'failed' )] += 1;
					if( $passed ) $tests[$fn][$desc] = true;
					else $tests[$fn][$desc] = false;
				}catch( Exception $e ){	
					$results['failed'] += 1;
					$tests[$fn][$desc] = $e->getMessage();
				}
			}
		}
	}
	$results['count'] = $results['passed'] + $results['failed'];
	$results['all_tests_passed'] = (($results['count']) and ($results['passed'] === $results['count']));

// Display results

	$stop = time();
	$time = ($stop - $start) ? ($stop - $start) : 0;
	$pass_fail_char = (false !== strpos( `uname -s`, 'Darwin' ))
		? ($results['all_tests_passed'] ? PHP_EOL.' 🌮' : PHP_EOL.' ☹️')
		: ($results['all_tests_passed'] ? 'tacos' : 'nope');
	echo $pass_fail_char.'  ';
	if( $results['count'] > 0){
		echo $results['passed'].'/'.$results['count'].' (';
		echo number_format( ($results['passed'] / $results['count']) * 100, 2).')% ';
		echo 'in '.$time.'s';
	}else echo '0';
	echo PHP_EOL;

// Display test failures expected and actual results

	if( $results['failed'] ) echo 'The following tests failed:'.PHP_EOL;
	foreach( $tests as $fn => $tests_in_file ){
		foreach( $tests_in_file as $desc => $result ){
			if( $result === false ){
				echo 'In '.$fn.', the test "'.$desc.'" failed.'.PHP_EOL;
			}elseif( is_string( $result )){
				echo 'In '.$fn.', unexpected exception for "'.$desc.'": '.$result.PHP_EOL;
			}
		}
	}

	exit( ($results['failed'] or $results['count'] === 0) ? 1 : 0 );
}


/**
 var_export replacement.
 */
function type_export( $arg, $nest = 0 ){
	if( $arg === null ) return 'null';
	if( $arg === true ) return 'true';
	if( $arg === false ) return 'false';
	if( is_string( $arg )) return "'".$arg."'";
	if( is_float( $arg )) return $arg;
	if( is_int( $arg )) return $arg;
	if( is_array( $arg ) and empty( $arg )) return '[]';
	if( is_array( $arg )){
		$type = '['.PHP_EOL;
		foreach( $arg as $key => $value ){
			$type .= str_repeat( "\t", $nest + 1 );
			if( is_int( $key )){
				$type .= type_export( $value, $nest + 1).','
				      .PHP_EOL;
			}else{
				$type .= type_export( $key )
				      .' => '
				      .type_export( $value, $nest + 1 ).','
			          .PHP_EOL;
			}
		}
		$type .= str_repeat( "\t", $nest ).']';
		return $type;
	}
	else return substr( print_r( $arg, true ), 0, 512 ).'...';
}


/**
 print_r replacement.
 */
function types( $arg, $nest = 0 ){
	if( $arg === null ) return '(null)';
	if( $arg === true ) return '(true)';
	if( $arg === false ) return '(false)';
	if( is_string( $arg )) return '"'.$arg.'" (strlen: '.strlen( $arg ).')';
	if( is_float( $arg )) return $arg.' (float)'; 
	if( is_int( $arg )) return $arg.' (int)';
	if( is_array( $arg ) and empty( $arg )) return '[]';
	if( is_array( $arg )){
		$type = '['.PHP_EOL;
		foreach( $arg as $key => $value ){
			$type .= str_repeat( '   ', $nest + 1 )
			      .types( $key )
			      .' => '
			      .types( $value, $nest + 1 )
			      .PHP_EOL;
		}
		$type .= str_repeat( '    ', $nest ).']';
		return $type;
	}
	else return substr( print_r( $arg, true ), 0, 512 ).'...';
}

/* vim:set filetype=php tabstop=4 noexpandtab: */
