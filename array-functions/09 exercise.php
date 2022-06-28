<?php

/**
 * Complete the square sum function so that it squares each number
 * passed into it and then sums the results together.
 *
 * Example:
 * [1, 2, 2]; // => 1^2 + 2^2 + 2^2 = 9.
 */

function squared(int $number): int {
    return pow($number,2);
}

$arrNum = [1, 2, 2];
exercise . phpprint_r(array_sum(array_map("squared", $arrNum)));