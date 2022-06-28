<?php
/** Input: Array of elements
 * ["h", "o", "l", "a"];
 * Output: String with comma delimited elements of the array in the same order.
 * "h,o,l,a";
 */

$textArray = ["h", "o", "l", "a"];
$textString = implode(', ', $textArray);

echo $textString . PHP_EOL;