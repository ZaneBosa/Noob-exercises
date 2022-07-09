<?php

/**
 * Examples:
 *               > Enter the number:
 *               > 5
 *               5 4 3 2 1 1 2 3 4 5
 *
 *               5 4 3 2     2 3 4 5
 *
 *               5 4 3         3 4 5
 *
 *               5 4             4 5
 *
 *               5                 5
 */

$number = (int) readline("> Enter the number: ");

for ($i = $number; $i > 0; $i--) {
    for ($j = $number; $j > $number - $i; $j--) {
        echo "{$j}";
    }
    for ($k = 1; $k <= ($number - $i); $k++) {
        echo "  ";
    }
    for ($j = ($number - $i + 1); $j <= $number; $j++) {
        echo "{$j}";
    }
    echo PHP_EOL;
}