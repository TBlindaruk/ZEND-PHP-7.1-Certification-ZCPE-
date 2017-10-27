<?php

$string = 'It is a lorem ipsum;';

$returnData = count_chars($string);
/**
 *array(256) {
 * [0] =>
 * int(0)
 * [1] =>
 * int(0)
 * [2] =>
 * int(0)
 * [3] =>
 * int(0)
 * [4] =>
 * int(0)
 * [5] =>
 * int(0)
 * [6] =>
 * int(0)
 * [7] =>
 * int(0)
 * (more elements)...
 * }
 */
var_dump($returnData);

/**
 * mode: same as 0 but only byte-values with a frequency greater than zero are listed.
 */
$returnData = count_chars($string,1);
/**
 * array(14) {
 * [32] =>
 * int(4)
 * [59] =>
 * int(1)
 * [73] =>
 * int(1)
 * [97] =>
 * int(1)
 * [101] =>
 * int(1)
 * [105] =>
 * int(2)
 * [108] =>
 * int(1)
 * [109] =>
 * int(2)
 * [111] =>
 * int(1)
 * [112] =>
 * int(1)
 * [114] =>
 * int(1)
 * [115] =>
 * int(2)
 * [116] =>
 * int(1)
 * [117] =>
 * int(1)
 * }
 */
var_dump($returnData);

/**
 * mode: a string containing all unique characters is returned.
 */
$returnData = count_chars($string,3);
var_dump($returnData); // string(14) " ;Iaeilmoprstu"

/**
 * mode: a string containing all not used characters is returned.
 */
$returnData = count_chars($string,4);
var_dump($returnData); // string(242) "\000 !"#$%&'()*+,-./0123456789:<=>?.....
