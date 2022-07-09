<?php

/**
 * Examples:
 *               > Enter the number:
 */ //           > 3
 //                *\ /*
 //                  @
 //                */ \*
 //
 /*               > Enter the number:
 *                > 5
 *               ***\ /***
 *               ---\ /---
 */ //           ***\ /***
 //                  @
 //              ***/ \***
 //              ---/ \---
 //              ***/ \***
 /**
 *               > Enter the number:
 *               > 7
 *               *****\ /*****
 *               -----\ /-----
 *               *****\ /*****
 *               -----\ /-----
 *               *****\ /*****
 */ //                 @
 //              *****/ \*****
 //              -----/ \-----
 //              *****/ \*****
 //              -----/ \-----
 //              *****/ \*****


$number = (int) readline("> Enter the number: ");

for($i = 1; $i <= $number-2; $i++){
    for($j  = 2; $j < $number; $j++){
        if($i % 2 === 0){
            echo "-";
        } else {
            echo "*";
        }
    }
        for($j = 0; $j <= 0; $j++){
        echo "\\";
    }
        for($j = 0; $j <= 0; $j++){
        echo " ";
    }
        for($j = 0; $j <= 0; $j++){
        echo "/";
    }
        for($j  = 2; $j < $number; $j++){
        if($i % 2 === 0){
            echo "-";
        } else {
            echo "*";
        }
    }
        echo PHP_EOL;
// @ zīmītei ielikt string pad
    }

    for($i = 1; $i <= $number-2; $i++){
    for ($j = 2; $j < $number; $j++){
        if ($i % 2 === 0) {
            echo "-";
        } else {
            echo "*";
        }
    }
        for ($j = 0; $j <= 0; $j++){
            echo "/";
    }
        for ($j = 0; $j <= 0; $j++){
            echo " ";
    }
        for ($j = 0; $j <= 0; $j++){
            echo "\\";
    }
        for ($j = 2; $j < $number; $j++){
        if ($i % 2 === 0) {
            echo "-";
        } else {
            echo "*";
        }
    }
        echo PHP_EOL;
}
