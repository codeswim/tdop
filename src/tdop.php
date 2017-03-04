<?php
/**
 Top Down Operator Precedence
 @author Damon Zwolinski <damonz@codeswim.com>
 @copyright Copyright ©2017 Damon Zwolinski, All rights reserved.
 @license MIT
 */

/**
 Create a token object with optional prototype.  Prefer this to calling new Token.
 */
function token( & $prototype = null ){
	$t = new Token;
	if( $prototype instanceof Token )
		foreach( get_object_vars( $prototype ) as $key => $value )
			$t->{$key} = $value;

	return $t;
}

/**
 JavaScript-like object that allows properties and methods to be added on a whim.
 Use the token() object to create Token objects, don't call new Token directly.
 */
class Token {

	public function __call( $method, $args ){
		if( isset( $this->{$method} )){
			$closure = Closure::bind( $this->{$method}, $this, 'Token' );
			return call_user_func_array( $closure, $args );
		}

		throw new LogicException( $method." doesn't exist." );
	}

	public function to_array( $keys = [] ){
		$arr = [];
		foreach( get_object_vars( $this ) as $key => $value ){
			if( ! empty( $keys ) and ! in_array( $key, $keys )) continue;

			if( $value instanceof Token ){
				$arr[$key] = $value->to_array( $keys );
			}elseif( ! is_object( $value ) and ! is_callable( $value )){
				$arr[$key] = $value;
			}
		}
		return $arr;
	}
}
