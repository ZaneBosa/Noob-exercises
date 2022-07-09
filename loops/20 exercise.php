<?php

/**
 * Examples:
 *           > Enter the number:
 *           > 4
 *           1 * 2 * 3 * 4
 *
 *           1 * 2 * 3
 *
 *           1 * 2
 *
 *           1
 */

$number = (int) readline("> Enter the number: ");

for ($i = $number; $i >= 1; $i--) {
    for ($j = 1; $j <=$i; $j++) {
        for ($k = $j; $k <= $j; $k++) {
            echo $j;
        }
        for ($m = $j; $m <= ($j === $i ? $j - 1 : $j); $m++) {
            echo "*";
        }
    }
    echo PHP_EOL;
}