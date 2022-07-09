<?php
/**
 * Print the rectange with a size of n x n where n is a number provided by user.
 * Example:
 *               > Enter the number:
 *              > 10
 *                **********
 *                **********
 *                **********
 *                **********
 *                **********
 *                **********
 *                **********
 *                **********
 *                **********
 *                **********
 */

$number = (int) readline("> Enter the number: ");

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}