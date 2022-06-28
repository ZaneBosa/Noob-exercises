<?php
/** Take an array of numbers and make them strings.
 *          function stringItUp(arr) {
 *          // your code here
 *          }
 *      console.log(stringItUp([2, 5, 100])); // ["2", "5", "100"]
 */

$arrNum = [2, 5, 100];
function stringItUp($arrNum): array {
    return array_map(function($number) {
    return json_encode($number, JSON_NUMERIC_CHECK);
}, $arrNum);
}
var_dump(stringItUp($arrNum));