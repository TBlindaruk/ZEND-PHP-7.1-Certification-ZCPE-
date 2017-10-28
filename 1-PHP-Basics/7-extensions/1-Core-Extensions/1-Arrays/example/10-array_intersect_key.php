<?php

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
/**
 * array(2) {
 *   ["blue"]=>
 *   int(1)
 *   ["green"]=>
 *   int(3)
 * }
 */
var_dump(array_intersect_key($array1, $array2));

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, '1'=>0);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8,1=>2);
/**
 * array(3) {
 * ["blue"]=>
 * int(1)
 * ["green"]=>
 * int(3)
 * [1]=>
 * int(0)
 * }
 */
var_dump(array_intersect_key($array1, $array2));
