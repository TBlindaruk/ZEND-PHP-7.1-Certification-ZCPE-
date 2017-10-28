<?php

$array = ['a'=>1,10,123,1000];
shuffle($array);

/**
 * array(4) {
 * [0]=>
 * int(1)
 * [1]=>
 * int(1000)
 * [2]=>
 * int(10)
 * [3]=>
 * int(123)
 * }
 */
var_dump($array);