<?php

$array = [10,1230,12,32,43,54,1,2,54];

function cmp($a, $b){
    return $a <=> $b;
}
uasort($array,'cmp');

/**
 * array(9) {
 * [6]=>
 * int(1)
 * [7]=>
 * int(2)
 * [0]=>
 * int(10)
 * [2]=>
 * int(12)
 * [3]=>
 * int(32)
 * [4]=>
 * int(43)
 * [5]=>
 * int(54)
 * [8]=>
 * int(54)
 * [1]=>
 * int(1230)
 * }
 */
var_dump($array);

