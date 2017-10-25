<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 24.10.17
 * Time: 18:32
 */

$maxHead = new SplMaxHeap();

$maxHead->insert(10);
$maxHead->insert(120);
$maxHead->insert(123123);
$maxHead->insert(90);
$maxHead->insert(1);
$maxHead->insert(2);
$maxHead->insert(3);

var_dump($maxHead);

/**
 * 6 123123
 * 5 120
 * 4 90
 * 3 10
 * 2 3
 * 1 2
 * 0 1
 */
foreach ($maxHead as $key => $item){
    echo $key . ' ' .  $item . PHP_EOL;
}
