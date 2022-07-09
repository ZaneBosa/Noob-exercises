<?php

/**
 * As in Exercise #1 print a rectangle, but this time draw stars separated by a space.
 * Example:
 *                > Enter the number:
 *                > 3
 *                * * *
 *                * * *
 *                * * *
 */

$number = (int) readline("> Enter the number: ");

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}