<?php

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

/**
 * Array
 * (
 * [0] => H
 * [1] => e
 * [2] => l
 * [3] => l
 * [4] => o
 * [5] =>
 * [6] => F
 * [7] => r
 * [8] => i
 * [9] => e
 * [10] => n
 * [11] => d
 * )
 */
print_r($arr1);
/**
 * Array
 * (
 * [0] => Hel
 * [1] => lo
 * [2] => Fri
 * [3] => end
 * )
 */
print_r($arr2);