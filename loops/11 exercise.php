<?php

/**
 * Example:
 *               > Enter the number:
 *               > 5
 *               A
 *               B B
 *               C C C
 *               D D D D
 *               E E E E E
 */

$number = (int) readline("> Enter the number: ");
$alphabet = range('A', 'Z');
for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $alphabet[$i];
    }
    echo PHP_EOL;
}