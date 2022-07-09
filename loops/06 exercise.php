<?php

/**
 * Example:
 *
 *               > Enter the number:
 *               > 5
 *               ******
 *               .*****
 *               ..****
 *               ...***
 *               ....**
 *               .....*
 */

$number = (int) readline("> Enter the number: ");

for ($i = 0; $i <= $number; $i++) {
    for ($j = 1; $j <= $i; $j++) {
            echo ".";
        }

    for ($j = $number - $i; $j >= 0; $j--) {
            echo "*";
        }
    echo PHP_EOL;
}