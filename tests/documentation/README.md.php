<?php

return [

'Code Example works?' => function(){
	$readme_md = file_get_contents(
		realpath( __DIR__.join( DIRECTORY_SEPARATOR, ['', '..', '..', 'README.md'] ))
	);
	$start_idx = strpos( $readme_md, '## Code Example' ) + strlen( '## Code Example' );
	$stop_idx = strpos( $readme_md, '## Motivation' );
	$code_example = substr( $readme_md, $start_idx, $stop_idx - $start_idx );

	$replacements = [
		"require 'src/tdop.php';" => '',
		'echo ' => 'return ',
		'```php' => '',
		'```' => '',
	];
	$code_example = str_replace( array_keys( $replacements ), array_values( $replacements ), $code_example );
	$json = eval( $code_example );

	$result = strpos( $json, '"value": "expression"' );
	return (($result !== false) and (0 < $result));
},

];
