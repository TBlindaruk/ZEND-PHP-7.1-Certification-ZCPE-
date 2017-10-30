<?php

$string = "0123456789a123456789b123456789c";

var_dump(strrpos($string,'1')); //int(21)
var_dump(strrpos($string,'1',-11)); //int(11)
var_dump(strrpos($string,'1',1)); //int(21)