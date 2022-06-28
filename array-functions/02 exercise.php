<?php
/** Make an array of numbers that are doubles of the first array.
 *        function doubleNumbers(arr) {
 *        // your code here
 *        }
 *        console.log(doubleNumbers([2, 5, 100])); // [4, 10, 200]
 */

$numbers = [2, 5, 100];
$doubleNumbers = array_map(function($number) {
    return $number * 2;
}, $numbers);


print_r($doubleNumbers);
