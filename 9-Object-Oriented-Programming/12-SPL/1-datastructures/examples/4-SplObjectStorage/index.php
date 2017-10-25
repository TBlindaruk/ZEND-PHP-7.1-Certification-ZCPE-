<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 25.10.17
 * Time: 10:05
 */

$storage = new SplObjectStorage();

$storage[new StdClass] = 'One';
$storage[new StdClass] = 'tWo';
$storage[new StdClass] = '3';

/**
 * Not work as you wish
 */
foreach ($storage as $key=>$value){
    var_dump($key); // index (0,1,2)
    var_dump($value); // key (StdClass)
}

$storage->rewind();
while($storage->valid()) {
    $index  = $storage->key();
    $object = $storage->current(); // similar to current($s)
    $data   = $storage->getInfo();

    var_dump($object); // key (StdClass)
    var_dump($data); // value (One, Two)
    $storage->next();
}