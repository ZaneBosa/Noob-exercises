<?php

/**
 * Examples:
 *               > Enter the number:
 *               > 3
 *               .###.
 *               .#.#.
 *               ##.##
 *               .#.#.
 *               ..#..
 *
 *               > Enter the number:
 *               > 5
 *               ..#####..
 *               ..#...#..
 *               ..#...#..
 *               ..#...#..
 *               ###...###
 *               .#.....#.
 *               ..#...#..
 *               ...#.#...
 *               ....#....
 *
 *               > Enter the number:
 *               > 9
 *               ....#########....
 *               ....#.......#....
 *               ....#.......#....
 *               ....#.......#....
 *               ....#.......#....
 *               ....#.......#....
 *               ....#.......#....
 *               ....#.......#....
 *               #####.......#####
 *               .#.............#.
 *                ..#...........#..
 *               ...#.........#...
 *               ....#.......#....
 *               .....#.....#.....
 *               ......#...#......
 *               .......#.#.......
 *               ........#........
 */

$number = (int) readline("> Enter the number: ");

for ($i = 1; $i <= $number; $i++) {
    for ($j = 1; $j <= $number / 2; $j++) {
        if ($i === $number) {
            echo "#";
        } else {
            echo ".";
        }
    }
        for ($j = 1; $j <= $number; $j++) {
        if ($j === 1 || $j === $number || $i === 1) {
            echo "#";
        } else {
            echo ".";
        }
    }
        for ($j = 1; $j <= $number / 2; $j++) {
        if ($i === $number) {
            echo "#";
        } else {
            echo ".";
        }
    }
        echo PHP_EOL;
    }

    for ($i = 1; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
        if ($j === $i) {
            echo "#";
        } else {
            echo ".";
        }
    }
        for ($j = 0; $j < ($number % 2 === 0 ? $number : $number - 1); $j++) {
        if ($number % 2 !== 0) {
            if ($j === $number - 2 - $i) {
                echo "#";
            } else {
                echo ".";
            }
        } else {
            if ($j === $number - 1 - $i) {
                echo "#";
            } else {
                echo ".";
            }
        }
    }
        echo PHP_EOL;
}
