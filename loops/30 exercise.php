<?php

/**
 * Examples:
 *                       > Enter the size:
 *                       > 8
 *                       > Select the type: (a/b/c/d)
 *                       > a
 *                       1
 *                       1 2
 *                       1 2 3
 *                       1 2 3 4
 *                       1 2 3 4 5
 *                       1 2 3 4 5 6
 *                       1 2 3 4 5 6 7
 *                       1 2 3 4 5 6 7 8
 *
 *                       > Enter the size:
 *                       > 8
 *                       > Select the type: (a/b/c/d)
 *                       > b
 *                       1 2 3 4 5 6 7 8
 *                         1 2 3 4 5 6 7
 *                           1 2 3 4 5 6
 *                             1 2 3 4 5
 *                               1 2 3 4
 *                                 1 2 3
 *                                   1 2
 *                                     1
 *
 *                       > Enter the size:
 *                       > 8
 *                       > Select the type: (a/b/c/d)
 *                       > c
 *                                     1
 *                                   1 2
 *                                 1 2 3
 *                               1 2 3 4
 *                             1 2 3 4 5
 *                           1 2 3 4 5 6
 *                         1 2 3 4 5 6 7
 *                       1 2 3 4 5 6 7 8
 *
 *                       > Enter the size:
 *                       > 8
 *                       > Select the type: (a/b/c/d)
 *                       > d
 *                       8 7 6 5 4 3 2 1
 *                       7 6 5 4 3 2 1
 *                       6 5 4 3 2 1
 *                       5 4 3 2 1
 *                       4 3 2 1
 *                       3 2 1
 *                       2 1
 *                       1
 */

$number = (int) readline("> Enter the number: ");
$type = readline("> Select the type: (a/b/c/d) ");

if ($type === "a") {
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
            echo PHP_EOL;
        }
    }

if ($type === "b") {
    for ($i = $number; $i >= 1; $i--) {
        for ($j = $i; $j < $number; $j++) {
            echo "  ";
        }
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
        }
        echo PHP_EOL;
        }
    }

if ($type === "c") {
    for ($i = $number; $i >= 1; $i--) {
        for ($j = $number - $i; $j < $number - 1; $j++) {
            echo "  ";
        }
            for ($j = 1; $j <= $number - $i + 1; $j++) {
                echo $j . " ";
        }
        echo PHP_EOL;
        }
    }

if ($type === "d") {
    for ($i = $number; $i >= 1; $i--) {
        for ($j = $i; $j >= 1; $j--) {
            echo $j . " ";
        }
        echo PHP_EOL;
        }
    }