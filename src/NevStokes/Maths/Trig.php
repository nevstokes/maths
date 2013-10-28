<?php

/**
 * PHP mathematics library
 *
 * @author Nev Stokes <mail@nevstokes.com>
 */

namespace NevStokes\Maths;

/**
 * Trigonometric squaring, secant, cosecant and cotangent functions.
 */
class Trig
{
	/**
	 * Sine-squared function
	 *
	 * @param  float $x Variable
	 * @return float    Result of sin^2
	 */
	public static function sinSquared($x)
	{
		return MathsFuncs::square(sin($x));
	}

	/**
	 * Cosine-squared function
	 *
	 * @param  float $x Variable
	 * @return float    Result of cos^2
	 */
	public static function cosSquared($x)
	{
		return MathsFuncs::square(cos($x));
	}

	/**
	 * Tangent-squared function
	 *
	 * @param  float $x Variable
	 * @return float    Result of tan^2
	 */
	public static function tanSquared($x)
	{
		return MathsFuncs::square(tan($x));
	}

	/**
	 * Secant function
	 *
	 * @param  float $x Variable
	 * @return float    Secant of variable
	 */
	public static function sec($x)
	{
		return MathsFuncs::reciprocal(cos($x));
	}

	/**
	 * Cosecant function
	 *
	 * @param  float $x Variable
	 * @return float    Cosecant of variable
	 */
	public static function cosec($x)
	{
		return MathsFuncs::reciprocal(sin($x));
	}

	/**
	 * Cotangent function
	 *
	 * @param  float $x Variable
	 * @return float    Cotangent of variable
	 */
	public static function cot($x)
	{
		return MathsFuncs::reciprocal(tan($x));
	}
}
