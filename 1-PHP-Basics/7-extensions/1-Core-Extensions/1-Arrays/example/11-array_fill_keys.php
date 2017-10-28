<?php
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
/**
 * Array
 * (
 * [foo] => banana
 * [5] => banana
 * [10] => banana
 * [bar] => banana
 * )
 */
print_r($a);


$b = array_fill_keys($keys,[1,2]);
/**
 * Array
 * (
 * [foo] => Array
 * (
 * [0] => 1
 * [1] => 2
 * )
 *
 * [5] => Array
 * (
 * [0] => 1
 * [1] => 2
 * )
 *
 * [10] => Array
 * (
 * [0] => 1
 * [1] => 2
 * )
 *
 * [bar] => Array
 * (
 * [0] => 1
 * [1] => 2
 * )
 * )
 */
print_r($b);