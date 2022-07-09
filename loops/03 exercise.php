<?php
/**
 * Example:
 *               > Enter the number:
 *               > 5
 *                *****
 *                *   *
 *                *   *
 *                *   *
 *                *****
 */

$number = (int) readline("> Enter the number: ");

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
        if ($i ===0 || $i === $number - 1) {
            echo "*";
        } else {
            if($j === 0 || $j === $number - 1) {
                echo "*";
            } else {
                echo " ";
            }
        }

    }
    echo PHP_EOL;
}