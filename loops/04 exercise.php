<?php

/**
 * Example:
 *               > Enter the number:
 *               > 5
 *               > Select the character:
 *               > $
 *               $
 *               $ $
 *               $ $ $
 *               $ $ $ $
 *               $ $ $ $ $
 */

$number = (int) readline("> Enter the number: ");
$character = readline("> Select the character: ");

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "$character ";
    }
    echo PHP_EOL;
}