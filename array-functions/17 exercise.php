<?php
/** Given an array of strings, return a new array that only includes those that are 5 characters or fewer in length
 *           function fiveCharactersOrFewerOnly(arr) {
 *           // your code here
 *           }
 *           // test
 *           console.log(fiveCharactersOrFewerOnly(["dog", "wolf", "by", "family", "eaten", "camping"]));
 *           // ["by", "dog", "wolf", "eaten"]
 */
function fiveCharactersOrFewerOnly(string $string): ?string {
    if (strlen($string) <= 5) {
        return $string;
    } else {
        return null;
    }
}

$stringArray = ["dog", "wolf", "by", "family", "eaten", "camping"];
print_r(array_map("fiveCharactersOrFewerOnly", $stringArray));