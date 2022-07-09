<?php

/** Examples:
 *                   > Enter the number:
 *                   > 5
 *                   > Select direction: (right/left)
 *                   > right
 *                   > Is it empty? (Y/n)
 *                   > n
 *                        *****
 *                       *****
 *                      *****
 *                     *****
 *                    *****
 *
 *                   > Enter the number:
 *                   > 5
 *                   > Select direction: (right/left)
 *                   > left
 *                   > Is it empty? (Y/n)
 *                   > n
 *                    *****
 *                     *****
 *                      *****
 *                       *****
 *                        *****
 *
 *                   > Enter the number:
 *                   > 5
 *                   > Select direction: (right/left)
 *                   > right
 *                   > Is it empty? (Y/n)
 *                   > Y
 *                        *****
 *                       *   *
 *                      *   *
 *                     *   *
 *                    *****
 *
 *                   > Enter the number:
 *                   > 5
 *                   > Select direction: (right/left)
 *                   > left
 *                   > Is it empty? (Y/n)
 *                   > Y
 *                    *****
 *                     *   *
 *                      *   *
 *                       *   *
 *                        *****
 */

$number = (int) readline("> Enter the number: ");
$direction = readline("> Select direction: (right/left) ");
$isEmpty = readline("> Is it empty? (y/n) ");

if ($direction === "right" && $isEmpty === "y") {
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $number - $i; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= $number; $k++) {
            if ($i === 1 || $i === $number || $k === 1 || $k === $number) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }
}

if ($direction === "left" && $isEmpty === "y") {
    for ($i = $number; $i >= 1; $i--) {
        for ($j = $number - $i; $j >= 1; $j--) {
            echo " ";
        }
        for ($k = $number; $k >= 1; $k--) {
            if ($i === 1 || $i === $number || $k === 1 || $k === $number) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }
}

if ($direction === "right" && $isEmpty === "n") {
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $number - $i; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= $number; $k++) {
                echo "*";
        }
        echo PHP_EOL;
    }
}

if ($direction === "left" && $isEmpty === "n") {
    for ($i = $number; $i >= 1; $i--) {
        for ($j = $number - $i; $j >= 1; $j--) {
            echo " ";
        }
        for ($k = $number; $k >= 1; $k--) {
                echo "*";
        }
        echo PHP_EOL;
    }
}

