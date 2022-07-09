<?php

/**
 * Example:
 *               > Enter the number:
 *               > 4
 *               + - - +
 *               | - - |
 *               | - - |
 *               + - - +
 */

$number = (int) readline("> Enter the number: ");

for ($i = 1; $i <= 1; $i++) {
    for ($j = 1; $j <= 1; $j++) {
        echo "+";
    }

    for($j = 0; $j < $number - 2; $j++) {
        echo "-";
    }

    for ($j = 1; $j <= 1; $j++) {
        echo "+";
    }
    echo PHP_EOL;
}

for ($i = 1; $i < $number - 1; $i++) {
    for ($j = 1; $j <= 1; $j++) {
        echo "|";
    }

    for ($j = 0; $j < $number - 2; $j++) {
        echo "-";
    }

    for ($j = 1; $j <= 1; $j++) {
        echo "|";
    }
    echo PHP_EOL;
}

for ($i = 1; $i <= 1; $i++) {
    for ($j = 1; $j <= 1; $j++) {
        echo "+";
    }

    for($j = 0; $j < $number - 2; $j++) {
        echo "-";
    }

    for ($j = 1; $j <= 1; $j++) {
        echo "+";
    }
    echo PHP_EOL;
}