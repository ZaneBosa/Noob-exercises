<?php

/**
 *  Given an array of numbers, return a new array that only includes the even numbers.
 * function evensOnly(arr) {
 * // your code here
 * }
 * // test
 * console.log(evensOnly([3, 6, 8, 2])); /// [6, 8, 2]
 */
function evensOnly(int $number): ?int {
    if ($number % 2 === 0) {
        return $number;
    } else {
        return null;
    }
}

$numArray = [3, 6, 8, 2];
print_r(array_map("evensOnly", $numArray));
