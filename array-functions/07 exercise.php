<?php

/**
 * You get an array of numbers, return the sum of all of the positives ones.
 * Example:
 *     [1, -4, 7, 12]; // => 1 + 7 + 12 = 20
 */

$arrNum = [1, -4, 7, 12];

$total = array_sum(array_filter($arrNum, function ($number){
    return $number > 0;
}));

echo $total . PHP_EOL;