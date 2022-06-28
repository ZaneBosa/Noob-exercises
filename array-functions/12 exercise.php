<?php

/**
 * Given a random non-negative number, you have to return the digits of this number
 * within an array in reverse order.
 *
 * 348597; // => [7,9,5,8,4,3]
 */

$randomNumber = str_split(rand(), 1);
print_r($randomNumber);
print_r(array_reverse($randomNumber));