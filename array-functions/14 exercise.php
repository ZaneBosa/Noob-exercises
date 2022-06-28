<?php

/**
 * Turn an array of numbers into a long string of all those numbers.
 *          function stringConcat(arr) {
 *          // your code here
 *          }
 *        console.log(stringConcat([1, 2, 3])); // "123"
 */

function stringConcat(array $numArray): string {
    return implode("", $numArray);
}

$numArray = [1, 2, 3];
var_dump(stringConcat($numArray));