<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 25.10.17
 * Time: 10:01
 */

$o1 = new StdClass;
$o2 = new StdClass;
$o3 = new StdClass;

$storage = new SplObjectStorage();

$storage[$o1] = "hello";
$storage->attach($o2);
var_dump($storage->contains($o1));// bool(true)
var_dump($storage->contains($o2));// bool(false)
var_dump($storage->contains($o3));// bool(false)