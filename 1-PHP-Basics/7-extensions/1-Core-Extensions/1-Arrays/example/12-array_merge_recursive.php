<?php

$array1 = [1,2,3,4,5];
$array2 = [6,7,8,9,10];

$result = array_merge_recursive($array1,$array2);

/**
 * array(10) {
 * [0]=>
 * int(1)
 * [1]=>
 * int(2)
 * [2]=>
 * int(3)
 * [3]=>
 * int(4)
 * [4]=>
 * int(5)
 * [5]=>
 * int(6)
 * [6]=>
 * int(7)
 * [7]=>
 * int(8)
 * [8]=>
 * int(9)
 * [9]=>
 * int(10)
 * }
 */
var_dump($result);

######################################

$array1 = ['color'=>1,2];
$array2 = [1,'color'=>2];
$result = array_merge_recursive($array1,$array2);
/**
 * array(3) {
 * ["color"]=>
 * array(2) {
 * [0]=>
 * int(1)
 * [1]=>
 * int(2)
 * }
 * [0]=>
 * int(2)
 * [1]=>
 * int(1)
 * }
 */
var_dump($result);

##############################

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
/**
 * Array
 * (
 * [color] => Array
 * (
 * [favorite] => Array
 * (
 * [0] => red
 * [1] => green
 * )
 *
 * [0] => blue
 * )
 *
 * [0] => 5
 * [1] => 10
 * )
 */
print_r($result);