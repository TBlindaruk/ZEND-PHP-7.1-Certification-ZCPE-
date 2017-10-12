<?php namespace fub;
include 'file1.php';
include 'file2.php';
include 'file3.php';

use foo as feline;
use bar as canine;
use animate;

echo feline\Cat::says(), "<br />\n";
echo canine\Dog::says(), "<br />\n";
echo \animate\Animal::breathes(), "<br />\n"; ?>