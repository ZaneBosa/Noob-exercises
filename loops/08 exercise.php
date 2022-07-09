<?php

/**
 * Examples:
 *               > Enter the number:
 *               > 1
 *                *
 *
 *               > Enter the number:
 *               > 4
 *                    *
 *                   * *
 *                  * * *
 *                 * * * *
 *                  * * *
 *                   * *
 *                    *
 */

$number = (int) readline("> Enter the number: ");

for ($i = 1; $i <= $number; $i++) {
    for ($j = $number; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k < $i * 2 - 1; $k++) {
        echo "*";
    }
    echo PHP_EOL;
}

for ($i = 1; $i <= $number -1; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo " ";
    }
    for ($k = ($number - $i) * 2 - 1; $k > 0; $k--) {
        echo "*";
    }
    echo PHP_EOL;
}