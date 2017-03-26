## Synopsis

This project is a port of Douglas Crockford's Top Down Operator Precedence (TDOP) on [GitHub] (https://github.com/douglascrockford/TDOP).  It is also described in his video, [Syntaxation] (https://www.youtube.com/watch?v=9e_oEE72d3U).  It is based on Vaughn Pratt's 1973 paper, [Top Down Operator Precedence] (http://dl.acm.org/citation.cfm?id=512931).

## Code Example

	require 'src/tdop.php';
	$js = file_get_contents( 'http://javascript.crockford.com/tdop/tokens.js' );
	$tree = parse( $js );
	// parse js, passing keys forces the token objects into array values
	// but only the
	echo json_encode( $tree->to_array(['value', 'arity', 'first', 'second']), JSON_PRETTY_PRINT ).PHP_EOL;
	/* [ ... output matches http://javascript.crockford.com/tdop/index.html ... ] */

## Motivation

I would like to port JSLint to PHP.  But if I can't port TDOP, which is simpler, there is no need to try and tackle JSLint.

## Installation

    git clone https://github.com/codeswim/tdop

Developed on Mac OS X (Darwin Kernel Version 15.5.0) using PHP5.5.34 

## API Reference

### parse( $source )
    $source JavaScript source code.
Return Parser object for $source.

### Parser::parse()

Return a parse tree.  Either a token object or an array of token objects.

### tokens( $source, $keys = null )
	$source JavaScript source code.
	$keys null: return array of Token objects
          []: return array of arrays (apply ->to_array() on all Token objects)
          ['name', 'type']: return array of arrays but only return keys name and type
Turn source code into an array of Token objects.

### to_array( array & $tokens, array $keys = [] )
	$tokens array of Tokens
	$keys array of strings to limit key values
Return an array of tokens by calling ->to_token() on each token object.

## Tests

	# Use either:
    ./tests/run
	# or:
	php tests/run
	
	tacos 108/108 (100.00)% in 3s

	Tests are anonymous functions that return true to indicate the test passes.
	'test description' => function(){
		$a = some_fn_to_test();
		return $a === [...];
	},

	Wrap variables with the pv() function (instead of var_dump(), print_r(), etc.) to inspect
    variables.  Test results won't be adversely affected:
	'test description' => function(){
		$a = some_fn_to_test();
		return pv( $a ) === [...];
	},

## Contributors

Use GitHub.

## License

[MIT] (LICENSE.md)
