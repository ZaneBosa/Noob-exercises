<?php
/** Capitalize each of an array of names.
 *              function capitalizeNames(arr) {
 *              // your code here
 *              }
 *          console.log(capitalizeNames(["john", "JACOB", "jinGleHeimer","schmidt"]));
 *          // ["John", "Jacob", "Jingleheimer", "Schmidt"]
 */

$names = ["john", "JACOB", "jinGleHeimer","schmidt"];
function capitalizeNames($names) {
    return array_map(function($name) {
        return ucwords(strtolower($name));
    }, $names);
}

print_r(capitalizeNames($names));
// var_dump(capitalizeNames($names));