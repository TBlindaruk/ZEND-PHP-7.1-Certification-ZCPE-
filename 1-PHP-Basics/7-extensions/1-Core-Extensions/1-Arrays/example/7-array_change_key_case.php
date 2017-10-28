<?php

$input_array = array("FirSt" => 1, "SecOnd" => 4);
/**
 * Array
 * (
 * [FIRST] => 1
 * [SECOND] => 4
 * )
 */
print_r(array_change_key_case($input_array, CASE_UPPER));
