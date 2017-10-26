<?php

$str = "The string ends in escape: ";
$str .= chr(100); /* add an `d` character at the end of $str */
echo $str;

/* Often this is more useful */
$str = sprintf("The string ends in escape: %c", 100);

echo $str;