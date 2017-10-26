<?php

$data = 'I Love PHP';

$encodeData = convert_uuencode($data);
$decodeData = convert_uudecode($encodeData);

echo "CLEAR: $data" . PHP_EOL; // CLEAR: I Love PHP
echo "ENCODE: $encodeData" . PHP_EOL; // ENCODE: *22!,;W9E(%!(4```
echo "DECODE: $decodeData" . PHP_EOL; //DECODE: I Love PHP
