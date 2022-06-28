<?php

/**
 * Turn an array of numbers into a total of all the numbers.
 * function total(arr) {
 * // your code here
 * }
 * console.log(total([1, 2, 3])); // 6
 */

function total(array $numArray): int {
    return array_sum($numArray);
}

$numArray = [1, 2, 3];
print_r(total($numArray));