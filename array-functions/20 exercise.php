<?php
/**
 * Given an array of arrays, flatten them into a single array
 *      function flatten(arr) {
 *      // your code here
 *      }
 *
 *      var arrays = [["1", "2", "3"], [true], [4, 5, 6]];
 *      console.log(flatten(arrays)); // ["1", "2", "3", true, 4, 5, 6];
 */

function flatten(array $multiArray): array {

    return array_merge(...array_values($multiArray));
}

$arrays = [["1", "2", "3"], [true], [4, 5, 6]];
//expected output: ["1", "2", "3", true, 4, 5, 6];
var_dump(flatten($arrays));
