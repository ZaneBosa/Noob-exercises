<?php

/**
 * Example:
 *               > Enter the number:
 *               > 7
 *               # # # # # # #
 *                # # # # # # #
 *               # # # # # # #
 *                # # # # # # #
 *               # # # # # # #
 *                # # # # # # #
 *               # # # # # # #
 */

$number = (int) readline("> Enter the number: ");

for ($i = 1; $i <= $number; $i++) {
    if ($i % 2 === 0) {
        for ($j = 1; $j <= 2 * $number; $j++) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }
    } else {
        for ($j = 1; $j <= 2 * $number; $j++) {
            if ($j % 2 === 0) {
                echo " ";
            } else {
                echo "#";
            }
        }
    }
    echo PHP_EOL;
}