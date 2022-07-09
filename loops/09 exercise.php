<?php

/**
 * Examples:
 *               > Enter the number:
 *               > 1
 *                  |
 *                * | *
 *
 *               > Enter the number:
 *               > 4
 *                     |
 *                   * | *
 *                  ** | **
 *                 *** | ***
 *                **** | ****
 */

$number = (int) readline("> Enter the number: ");

for ($i = 0; $i <= $number; $i++) {
    for ($j = 0; $j < $number - $i; $j++) {
        echo " ";
    }

    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "|";

    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}