<?php

// We can search for the character, ignoring anything before the offset
$newstring = 'abcdef Abcdef';
echo stripos($newstring, 'a') . PHP_EOL; // 0
echo stripos($newstring, 'A', 1) . PHP_EOL; // $pos = 7, not 0
echo stripos($newstring, 'f', -8) . PHP_EOL; // 7