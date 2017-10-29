<?php

class foo { }

class_alias('foo', 'bar');

$a = new foo;
$b = new bar;

// the objects are the same
var_dump($a == $b, $a === $b); // bool(true) bool(false)
var_dump($a instanceof $b); // bool(true)

// the classes are the same
var_dump($a instanceof foo); // bool(true)
var_dump($a instanceof bar); // bool(true)

var_dump($b instanceof foo); // bool(true)
var_dump($b instanceof bar); // bool(true)