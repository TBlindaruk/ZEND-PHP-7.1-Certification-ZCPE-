<?php

$string = 'Hello World';

echo strrchr($string, 'o') . PHP_EOL; // orld
echo strrchr($string, 'l') . PHP_EOL; // ld
echo strrchr($string, 'lo') . PHP_EOL; // ld