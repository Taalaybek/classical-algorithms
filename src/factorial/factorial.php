<?php
/*
 * This file is part of alexbowey/classical-algorithms.
 *
 * (c) Alex Bowey <alex.bowey@yahoo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace algorithms\factorial;

if (!function_exists('factorial')) {
    function factorial(int $number): ?int
    {
        if ($number <= 0) {
            return null;
        }
        return ($number == 1) ? 1 : $number * factorial($number - 1);
    }
}
