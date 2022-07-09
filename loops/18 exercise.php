<?php

/**
 * Examples:
 *               > Enter the number:
 *               > 8
 *               1
 *               2    1
 *               4    2    1
 *               8    4    2    1
 *               16    8    4    2    1
 *               32   16    8    4    2    1
 *               64   32   16    8    4    2    1
 *               128   64   32   16    8    4    2    1
 */

$number = (int) readline("> Enter the number: ");

for ($i = pow($number, 2); $i > 1; $i /= 2) {
    for ($j = pow($number, 2) / $i; $j >= 1; $j /= 2) {

    }
        echo PHP_EOL;
}