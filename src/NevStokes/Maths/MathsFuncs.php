<?php

/**
 * PHP mathematics library
 *
 * @author Nev Stokes <mail@nevstokes.com>
 */

namespace NevStokes\Maths;

/**
 * Square, cube and reciprocal functions
 *
 * Uses the bcmath extension where avaialable and appropriate.
 *
 * @see http://php.net/bcmath
 */
class MathsFuncs
{
	/**
	 * Squaring function
	 *
	 * @param  mixed $x Variable
	 * @return mixed    Variable squared
	 */
	public static function square($number)
	{
		if (is_int($number) || !extension_loaded('bcmath')) {
			return $number * $number;
		}

		$str = strval($number);
		return floatval(bcmul($str, $str));
	}

	/**
	 * Cubing function
	 *
	 * @param  mixed $x Variable
	 * @return mixed    Variable squared
	 */
	public static function cube($number)
	{
		if (is_int($number) || !extension_loaded('bcmath')) {
			return $number * $number * $number;
		}

		$str = strval($number);
		return floatval(bcmul($str, bcmul($str, $str)));
	}

	/**
	 * Multiplicative inverse function
	 *
	 * @param  mixed $x Variable
	 * @return mixed    1 / variable
	 */
	public static function reciprocal($number)
	{
		if (is_int($number) || !extension_loaded('bcmath')) {
			return 1 / $number;
		}

		$str = strval($number);
		return floatval(bcdiv('1.0', $str));
	}
}
