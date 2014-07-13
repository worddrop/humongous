<?php

/*
 * Copyright (c) Jeroen Visser <jeroenvisser101@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Humongous;

/**
 * Humongous
 *
 * Humongous generates nice-to-read numbers out of very large figures.
 *
 * @author Jeroen Visser <jeroenvisser101@gmail.com>
 */
class Humongous
{
    /**
     * The suffixes used in the wordify function.
     *
     * @var array
     */
    private static $suffixes = array(
        1 => 'k',
        2 => 'm',
        3 => 'b',
        4 => 't'
    );

    /**
     * Converts a large number to a small number with abbreviation.
     *
     * @param int|float $number           The integer to use
     * @param int       $precision        The amounts of
     * @param string    $decimalSeparator The separator for the decimals
     *
     * @return string
     */
    public static function parse($number, $precision = 1, $decimalSeparator = '.')
    {
        // If we cannot abbreviate it, don't!
        if ($number < 1000 && $number > -1000) {
            return $number;
        }

        // Calculate in which order it is
        $magnitude = (int) floor(log(abs($number), 1000));

        // Check if it doesn't override the maximum magnitude we have a letter for
        $maxMaginude = max(array_keys(self::$suffixes));
        if ($magnitude > $maxMaginude) {
            $magnitude = $maxMaginude;
        }

        // Run the number through number format
        $newNumber = number_format($number / pow(1000, $magnitude), $precision, $decimalSeparator, '');

        // Remove .0 if it exists
        $newNumber = rtrim(rtrim($newNumber, '0'), $decimalSeparator);

        return $newNumber . self::$suffixes[$magnitude];
    }
}
