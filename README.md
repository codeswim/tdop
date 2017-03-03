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

### tokens( $source )
	$source JavaScript source code.
Turn source code into an array of Token objects.

## Tests

    php tests/run.php
	tacos 29/29 (100.00)% 

## Contributors

Use GitHub.

## License

[MIT] (LICENSE.md)