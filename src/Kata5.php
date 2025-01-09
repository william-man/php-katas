<?php

/**
 * Kata 5: median() find the middle value in a numeric array.
 */
declare(strict_types=1);

namespace Katas;

/**
 * Kata5.
 */
final class Kata5
{
	/**
	 * median() should return the middle value in an array. For example, if the
	 * array contains the following: [1, 2, 3, 4, 5], median() should return the
	 * value 3.
	 *
	 * The array: [0, 1] has median 0. Why? There are an even number of elements
	 * in the array, so the mathematical median should be (0 + 1) / 2 which is
	 * 0.5, and so not an int.
	 *
	 * median() will normally return the median value of the array that is
	 * passed to it.
	 *
	 * HINT: You might want to look at the PHP documentation on mathematical
	 * functions: https://www.php.net/manual/en/ref.math.php
	 *
	 * BIG HINT:You can use your code from the previous Kata to help you!
	 */

	private static function sort(array $array): array
	{
		if (count($array) <= 1) {
			return $array;
		}
		for ($i = 0; $i < count($array); $i++) {
			for ($j = 0; $j < count($array) - 1; $j++) {
				if ($array[$j] > $array[$j+1]) {
					$holder = (int) $array[$j];
					$array[$j] = (int) $array[$j+1];
					$array[$j + 1] = $holder;
				}
			}
		}
		return $array;
	}

	public static function median(array $array): int
	{
		// TODO: Complete this function!
		$sorted = self::sort($array);
		if (count($sorted) % 2 === 0) {
			return (int) $sorted[(int) (count($sorted) / 2)-1];
		} else {
			return  (int) $sorted[(int) floor((count($sorted) / 2))];
		}
	}
}
