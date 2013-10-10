<?php

/**
 * PHP mathematics library
 *
 * @author Nev Stokes <mail@nevstokes.com>
 */

namespace NevStokes\Maths;

/**
 * Square and reciprocal functions
 *
 * Uses the bcmath extension where appropriate
 *
 * @see http://php.net/bcmath
 */
class Utility
{
	/**
	 * Squaring function
	 *
	 * @param  mixed $x Variable
	 * @return mixed    Variable squared
	 */
	public static function square($number)
	{
		if (is_int($number)) {
			return $number * $number;
		}

		$str = strval($number);
		return floatval(bcmul($str, $str));
	}

	/**
	 * Multiplicative inverse function
	 *
	 * @param  mixed $x Variable
	 * @return mixed    1 / variable
	 */
	public static function reciprocal($number)
	{
		if (is_int($number)) {
			return 1 / $number;
		}

		$str = strval($number);
		return floatval(bcdiv('1', $str));
	}
}
