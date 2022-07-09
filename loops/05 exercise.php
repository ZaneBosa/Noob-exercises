<?php

/**
 * Example:
 *                   > Enter the number:
 *                   > 5
 *                   *.....*
 *                   .*...*.
 *                   ..*.*..
 *                   ...*...
 *                   ..*.*..
 *                   .*...*.
 *                   *.....*
 */

$number = (int) readline("> Enter the number: ");

for ($i = 0; $i <= $number + 1; $i++) {
    for ($j = 0; $j <= $number + 1; $j++) {
        if ($i === $j || $i + $j === $number + 1) {
            echo "*";
        } else {
            echo ".";
        }
    }
    echo PHP_EOL;
}