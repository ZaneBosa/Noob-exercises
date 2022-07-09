<?php

/** Examples:
 *           > Enter the number:
 *           > 5
 *           > Select direction: (R/L)
 *           > R
 *            *****
 *              ****
 *                ***
 *                  **
 *                    *
 *                  **
 *                ***
 *              ****
 *            *****
 *
 *           > Enter the number:
 *           > 5
 *           > Select direction: (R/L)
 *           > L
 *                *****
 *               ****
 *              ***
 *             **
 *            *
 *             **
 *              ***
 *               ****
 *                *****
 */

$number = (int) readline("> Enter the number: ");
$direction = readline("> Select direction: (R/L) ");

if ($direction === "R") {
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j < $i * 2; $j++) {
            echo " ";
        }
        for ($j = $number - $i; $j > 0; $j--) {
            echo "*";
        }
        echo PHP_EOL;
    }

    for ($i = $number - 1; $i > 0; $i--) {
        for ($j = 2; $j < $i * 2; $j++) {
            echo " ";
        }
        for ($j = $i - 1; $j < $number; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }
}

if ($direction === "L") {
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $number - $i; $j++) {
            echo " ";
        }
        for ($j = $number - $i; $j >= 0; $j--) {
            echo "*";
        }
        echo PHP_EOL;
    }

    for ($i = 1; $i < $number; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo " ";
        }
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }
}