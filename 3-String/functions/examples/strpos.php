<?php

// We can search for the character, ignoring anything before the offset
$newstring = 'abcdef abcdef';
echo strpos($newstring, 'a') . PHP_EOL; // 0
echo strpos($newstring, 'a', 1) . PHP_EOL; // $pos = 7, not 0
//echo strpos($newstring, 'f', -8) . PHP_EOL; // 7