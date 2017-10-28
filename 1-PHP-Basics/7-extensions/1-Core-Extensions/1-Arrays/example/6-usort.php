<?php

$array = [0.9,0.8,100,100.8,100.7,100.3,100.4];

function cmp($a,$b){
    return $a<=>$b;
}

usort($array,'cmp');

/**
 * array(7) {
 * [0]=>
 * float(0.8)
 * [1]=>
 * float(0.9)
 * [2]=>
 * int(100)
 * [3]=>
 * float(100.3)
 * [4]=>
 * float(100.4)
 * [5]=>
 * float(100.7)
 * [6]=>
 * float(100.8)
 * }
 */
var_dump($array);