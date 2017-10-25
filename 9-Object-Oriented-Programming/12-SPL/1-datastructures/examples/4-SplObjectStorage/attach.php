<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 25.10.17
 * Time: 10:00
 */


$o1 = new StdClass;
$o2 = new StdClass;
$s = new SplObjectStorage();
$s->attach($o1); // то же, что и $s[$o1] = NULL;
$s->attach($o2, "hello"); // то же, что и $s[$o2] = "hello";

var_dump($s[$o1]);
var_dump($s[$o2]);