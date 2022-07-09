<?php

/**
 * Examples:
 *               > Enter the number:
 *               > 2
 *               ------**--
 *               ------*-*-
 *                *******-*-
 *               ------***-
 *
 *               > Enter the number:
 *               > 5
 *               ---------------**--------
 *               ---------------*-*-------
 *               ---------------*--*------
 *               ---------------*---*-----
 *               ---------------*----*----
 *                ****************----*----
 *                ****************----*----
 *               ---------------*----*----
 *               --------------********---
 *
 *               > Enter the number:
 *               > 8
 *               ------------------------**--------------
 *               ------------------------*-*-------------
 *               ------------------------*--*------------
 *               ------------------------*---*-----------
 *               ------------------------*----*----------
 *               ------------------------*-----*---------
 *               ------------------------*------*--------
 *               ------------------------*-------*-------
 *                *************************-------*-------
 *                *************************-------*-------
 *                *************************-------*-------
 *                *************************-------*-------
 *               ------------------------*-------*-------
 *               -----------------------*---------*------
 *               ----------------------*-----------*-----
 *               ---------------------***************----
 */

$number = (int) readline("> Enter the number: ");

for ($i = 1; $i <= $number; $i++) {
    for ($j = 1; $j <= 3 * $number; $j++) {
        echo "-";
    }
        for ($j = 0; $j <= $i; $j++) {
        if ($j === 0 || $j === $i) {
            echo "*";
        } else {
            echo "-";
        }
    }
        for ($j = 1; $j < 2 * $number - $i; $j++) {
            echo "-";
    }
        echo PHP_EOL;
    }

    for ($i = 1; $i <= $number / 2; $i++) {
    for ($j = 1; $j <= 3 * $number; $j++) {
        echo "*";
    }
        for ($j = 0; $j < 2 * $number; $j++) {
        if ($j === 0 || $j === $number) {
            echo "*";
        } else {
            echo "-";
        }
    }
        echo PHP_EOL;
    }

    for ($i = 1; $i <= $number / 2; $i++) {
    for ($j = 0; $j <= 2 * $number + round($number / 2); $j++) {
        echo "-";
    }
        for ($j = 0; $j <= $number / 2 - $i; $j++) {
        if ($j === round($number / 2) - $i) {
            echo "*";
        } else {
            echo "-";
        }
    }
        for ($j = 1; $j < $i; $j++) {
        if ($i === round($number / 2)) {
            echo "*";
        } else {
            echo "-";
        }
    }
        for ($j = 1; $j < $number; $j++) {
        if ($i === round($number / 2)) {
            echo "*";
        } else {
            echo "-";
        }
    }
        for ($j = 1; $j <= $i; $j++) {
        if ($j === $i || $i === round($number / 2)) {
            echo "*";
        } else {
            echo "-";
        }
    }
        for ($j = 1; $j <= $number - $i; $j++) {
            echo "-";
    }

        echo PHP_EOL;
    }
