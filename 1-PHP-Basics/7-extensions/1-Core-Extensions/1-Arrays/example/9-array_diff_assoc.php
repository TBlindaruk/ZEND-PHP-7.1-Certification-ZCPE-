<?php

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
/**
 * Array
 * (
 * [b] => brown
 * [c] => blue
 * [0] => red
 * )
 */
print_r($result);


$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2);
/**
 * Array
 * (
 * [0] => 0
 * [1] => 1
 * )
 */
print_r($result);

$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2,array(0));
/**
 * Array
 * (
 * [1] => 1
 * )
 */
print_r($result);
