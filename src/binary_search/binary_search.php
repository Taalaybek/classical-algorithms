<?php
/*
 * This file is part of alexbowey/classical-algorithms.
 *
 * (c) Alex Bowey <alex.bowey@yahoo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 namespace algorithms\binary_search;

if (! function_exists('binary_search')) {

    function binary_search(array $list, int $item): ?int
    {
        $low = 0; $middle = 0; $high = count($list) - 1;

        while ($low <= $high) {
            $middle = round(($high + $low) / 2);
            $guess = $list[$middle];
            if ($guess == $item) {
                return $middle;
            } elseif ($guess > $item) {
                $high = $middle - 1;
            } else {
                $low = $middle + 1;
            }
        }
        return Null;
    }

}
