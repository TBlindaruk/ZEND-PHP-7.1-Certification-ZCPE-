<?php

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
/**
 * fruits[0] = apple
 * fruits[1] = banana
 * fruits[2] = lemon
 * fruits[3] = orange
 */