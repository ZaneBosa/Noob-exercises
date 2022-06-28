<?php
/**
 * Write a function that takes a string and returns an object representing the character count for each letter.
 *
 *              const countLetters = function (string) {
 *              // your code here
 *              };
 *
 *              countLetters("abbcccddddeeeee"); // => {a:1, b:2, c:3, d:4, e:5}
 */

function countLetters(string $text): array {
    $textArr = str_split($text, 1);
    $lettersCounted = array_count_values($textArr);
    return $lettersCounted;
}

print_r(countLetters("abbcccddddeeeee"));