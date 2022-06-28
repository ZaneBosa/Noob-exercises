<?php

/**
 * Given an array of numbers, return a new array that has only the numbers
 * that are 5 or greater.
 *          function fiveAndGreaterOnly(arr) {
 *          // your code here
 *          }
 *          // test
 *          console.log(fiveAndGreaterOnly([3, 6, 8, 2])); /// [6, 8]
 */

function fiveAndGreaterOnly(int $number): ?int
{
    if ($number >= 5) {
        return $number;
    } else {
        return null;
    }
}

$numArray = [3, 6, 8, 2];
print_r(array_map("fiveAndGreaterOnly", $numArray));
