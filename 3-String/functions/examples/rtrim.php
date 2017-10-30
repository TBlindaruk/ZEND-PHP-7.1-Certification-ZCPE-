<?php

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";

var_dump(rtrim($text)); //string(30) "            These are a few words :) ..."

var_dump(rtrim($text, " \t.")); //string(26) "            These are a few words :)"

var_dump(rtrim($hello, "Hdler")); //string(8) "Hello Wo"

// trim the ASCII control characters at the end of $binary
// (from 0 to 31 inclusive)
var_dump(rtrim($binary, "\x00..\x1F")); // string(15) "    Example string"
