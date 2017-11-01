<?php

$number = 1234.56;

// english notation (default)
$english_format_number = number_format($number);
echo $english_format_number . PHP_EOL; // 1,235

// French notation
$nombre_format_francais = number_format($number, 2, ',', ' ');
echo $nombre_format_francais . PHP_EOL; // 1 234,56


$number = 1234.5678;
// english notation without thousands separator
$english_format_number = number_format($number, 2, '.', '');
echo $english_format_number . PHP_EOL; // 1234.57