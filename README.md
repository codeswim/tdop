## Synopsis

This project is a port of Douglas Crockford's Top Down Operator Precedence (TDOP) on [GitHub] (https://github.com/douglascrockford/TDOP).  It is also described in his video, [Syntaxation] (https://www.youtube.com/watch?v=9e_oEE72d3U).  It is based on Vaughn Pratt's 1973 paper, [Top Down Operator Precedence] (http://dl.acm.org/citation.cfm?id=512931).

## Code Example

	n/a

## Motivation

I would like to port JSLint to PHP.  But if I can't port TDOP, which is simpler, there is no need to try and tackle JSLint.

## Installation

    git clone https://github.com/codeswim/tdop

Developed on Mac OS X (Darwin Kernel Version 15.5.0) using PHP5.5.34 

## API Reference

### tokens( $source, $keys = null )
	$source JavaScript source code.
	$keys null: return array of Token objects
          []: return array of arrays (apply ->to_array() on all Token objects)
          ['name', 'type']: return array of arrays but only return keys name and type
Turn source code into an array of Token objects.

## Tests

	# Use either:
    ./tests/run
	# or:
	php tests/run
	
	tacos 105/105 (100.00)% in 0s 

## Contributors

Use GitHub.

## License

[MIT] (LICENSE.md)
