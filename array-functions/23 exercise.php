<?php
/**
 * Write a function shiftLetters that takes a string and uses .map
 * to return an encoded string with each letter shifted down the alphabet by one.
 *
 * Hint: Use Look up the JS functions String.fromCharCode()
 * and String.CharCodeAt() and see if you can use Ascii code to acomplish this.
 *
 *      const shiftLetters = function (string) {
 *      // code!
 *      };
 *
 *      shiftLetters("hello"); // => 'ifmmp'
 *      shiftLetters("abcxyz"); // => "bcdyz{"
 */


function shiftLetters(string $text): string
{
    $shift = 1;
    $shiftedText = "";

    for ($i = 0; $i < strlen($text); $i++) {
        $conversion = ord($text[$i]);
        $shiftedLetter = chr($conversion + $shift);

        $shiftedText .= $shiftedLetter;
    }
    return $shiftedText;
}

print_r(shiftLetters("hello") . PHP_EOL);
print_r(shiftLetters("abcxyz"). PHP_EOL) ;