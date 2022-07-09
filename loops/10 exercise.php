<?php

/**
 * Example:
 *           > Enter the number:
 *           > 5
 *                      1
 *                    1   1
 *                  1   2   1
 *                1   3   3   1
 *              1   4   6   4   1
 */

$number = (int) readline("> Enter the number: ");
$digits = 0;

for ($i = 0; $i < $number; $i++) {
    for ($j = 1; $j < $number - $i; $j++) {
        echo str_repeat(" ", 2);
    }
    for ($j = 1; $j <= 1; $j++) {
        echo $j . str_repeat(" ", 3);
    }
    for ($k = 0; $k <= $i; $k++) {
        if ($k === 0 || $i === 0) {
            $digits = 1;
        } else {
            $digits = $digits * ($i - $k + 1) / $k;
            if ($digits < 10) {
                echo $digits . str_repeat(" ", 3);
            } elseif ($digits < 100) {
                echo $digits . str_repeat(" ", 2);
            }
            echo str_repeat(" ", 1);
        }
    }
    echo PHP_EOL;
}