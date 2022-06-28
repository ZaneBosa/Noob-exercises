<?php
/**
 * Write a function that takes a string and a target, and returns true or false
 * if the target is present in the string.
 * const isPresent = function (string, target) {
 * // GO GO GADGET CODE!
 * };
 *
 * isPresent("abcd", "b"); // => true
 * isPresent("efghi", "a"); // => false
 */

function isPresent(string $text, string $character): string {
    if (strpos($text, $character) !== false) {
    return "true";
    }
    return "false";
}


echo isPresent("abcd", "b") . PHP_EOL;
echo isPresent("efghi", "a") . PHP_EOL;