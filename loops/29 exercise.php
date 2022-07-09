<?php

/**
 * Examples:
 *                   > Enter the size:
 *                   > 6
 *                   > Select the type: (a/b/c/d)
 *                   > a
 *                             #
 *                           # # #
 *                         # # # # #
 *                       # # # # # # #
 *                     # # # # # # # # #
 *                   # # # # # # # # # # #
 *
 *                   > Enter the size:
 *                   > 6
 *                   > Select the type: (a/b/c/d)
 *                   > b
 *
 *                   # # # # # # # # # # #
 *                     # # # # # # # # #
 *                       # # # # # # #
 *                         # # # # #
 *                           # # #
 *                             #
 *
 *                   > Enter the size:
 *                   > 6
 *                   > Select the type: (a/b/c/d)
 *                   > c
 *
 *                             #
 *                           # # #
 *                         # # # # #
 *                       # # # # # # #
 *                     # # # # # # # # #
 *                   # # # # # # # # # # #
 *                     # # # # # # # # #
 *                       # # # # # # #
 *                         # # # # #
 *                           # # #
 *                             #
 *
 *                   > Enter the size:
 *                   > 6
 *                   > Select the type: (a/b/c/d)
 *                   > d
 *                   # # # # # # # # # # #
 *                   # # # # #   # # # # #
 *                   # # # #       # # # #
 *                   # # #           # # #
 *                   # #               # #
 *                   #                   #
 *                   # #               # #
 *                   # # #           # # #
 *                   # # # #       # # # #
 *                   # # # # #   # # # # #
 *                   # # # # # # # # # # #
 */

$number = (int) readline("> Enter the number: ");
$type = readline("> Select the type: (a/b/c/d) ");

if ($type === "a") {
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $number * 2 - $i * 2; $j++) {
            echo " ";
        }
            for ($j = 0; $j < $i * 2; $j++) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }

            for ($j = $number * 2 - $i * 2; $j < $number * 2 - 2; $j++) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }
            echo PHP_EOL;
        }
    }

if ($type === "b") {
    for ($i = $number; $i >= 1; $i--) {
        for ($j = $number * 2 - $i * 2; $j >= 1; $j--) {
            echo " ";
        }

            for ($j = $i * 2; $j > 0; $j--) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }

            for ($j = $i * 2; $j > 2; $j--) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }
        echo PHP_EOL;
        }
    }

if ($type === "c") {
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $number * 2 - $i * 2; $j++) {
            echo " ";
        }
            for ($j = 0; $j < $i * 2; $j++) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }

            for ($j = $number * 2 - $i * 2; $j < $number * 2 - 2; $j++) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }

        echo PHP_EOL;
        }

        for ($i = $number - 1; $i >= 1; $i--) {
        for ($j = $number * 2 - $i * 2; $j >= 1; $j--) {
            echo " ";
        }

            for ($j = $i * 2; $j > 0; $j--) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }

            for ($j = $i * 2; $j > 2; $j--) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }
            echo PHP_EOL;
        };
    }

if ($type === "d") {
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $number * 2 - $i * 2 + 2; $j++) {
            if ($j % 2 !== 0) {
                echo "#";
            } else {
                echo " ";
            }
        }
            for ($j = 2; $j < $i * 2; $j++) {
                echo " ";
        }

            for ($j = $number * 2 - $i * 2; $j < $number * 2 - 4; $j++) {
                echo " ";
        }

            if ($i === 1) {
                for ($j = 3; $j <= $number * 2 - $i * 2 + 2; $j++) {
                    if ($j % 2 !== 0) {
                        echo "#";
                    } else {
                        echo " ";
                    }
                }
            } else {
                for ($j = 1; $j <= $number * 2 - $i * 2 + 2; $j++) {
                    if ($j % 2 !== 0) {
                        echo "#";
                    } else {
                        echo " ";
                    }
                }
            }

        echo PHP_EOL;
        }

        for ($i = $number - 1; $i >= 1; $i--) {
        for ($j = $number * 2 - $i * 2 + 2; $j >= 1; $j--) {
            if ($j % 2 === 0) {
                echo "#";
            } else {
                echo " ";
            }
        }

            for ($j = $i * 2; $j > 2; $j--) {
                echo " ";
        }

            for ($j = $i * 2; $j > 4; $j--) {
                echo " ";
        }

            if ($i === 1) {
                for ($j = $number * 2; $j > $i * 2; $j--) {
                    if ($j % 2 === 0) {
                        echo "#";
                    } else {
                        echo " ";
                    }
                }
            } else {
                for ($j = $number * 2 + 2; $j > $i * 2; $j--) {
                    if ($j % 2 === 0) {
                        echo "#";
                    } else {
                        echo " ";
                    }
                }
            }
            echo PHP_EOL;
        }
    }