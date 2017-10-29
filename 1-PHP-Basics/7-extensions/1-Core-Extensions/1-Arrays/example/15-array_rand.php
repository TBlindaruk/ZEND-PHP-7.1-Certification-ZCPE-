<?php

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n"; // Trinity - random
echo $input[$rand_keys[1]] . "\n"; // Tank - random