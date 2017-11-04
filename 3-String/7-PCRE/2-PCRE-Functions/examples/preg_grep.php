<?php
$array = ['0.123','23123','.01','sadasd.a',"0."];

// return all array elements
// containing floating point numbers
$fl_array = preg_grep("/^(\d+)?\.\d+$/", $array);

var_dump($fl_array); // "0.123","0.01"