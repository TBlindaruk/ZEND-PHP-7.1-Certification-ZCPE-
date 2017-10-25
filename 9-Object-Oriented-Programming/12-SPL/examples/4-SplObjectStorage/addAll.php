<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 25.10.17
 * Time: 9:40
 */

$o = new StdClass;
$a = new SplObjectStorage();
$a[$o] = "STD CLASS";

$class = new SplQueue();
$a[$class] = 'I`m SPL Queue';

/**
 *class SplObjectStorage#2 (1) {
 * private $storage =>
 * array(2) {
 * '000000000d1f4318000000005afc5ad9' =>
 * array(2) {
 * 'obj' =>
 * class stdClass#1 (0) {
 * ...
 * }
 * 'inf' =>
 * string(5) "hello"
 * }
 * '000000000d1f431a000000005afc5ad9' =>
 * array(2) {
 * 'obj' =>
 * class SplQueue#3 (2) {
 * ...
 * }
 * 'inf' =>
 * string(13) "I`m SPL Queue"
 * }
 * }
 * }
 *
 */
var_dump($a);


$classForSecondStorage = new SplTempFileObject();
$b = new SplObjectStorage();
$b[$classForSecondStorage] = 'I`m present only on the second storage';
$b->addAll($a);

/**
 * class SplObjectStorage#5 (1) {
 * private $storage =>
 * array(3) {
 * '0000000031afac7500000000774fb44e' =>
 * array(2) {
 * 'obj' =>
 * class SplTempFileObject#4 (5) {
 * ...
 * }
 * 'inf' =>
 * string(38) "I`m present only on the second storage"
 * }
 * '0000000031afac7000000000774fb44e' =>
 * array(2) {
 * 'obj' =>
 * class stdClass#1 (0) {
 * ...
 * }
 * 'inf' =>
 * string(9) "STD CLASS"
 *}
 * '0000000031afac7200000000774fb44e' =>
 * array(2) {
 * 'obj' =>
 * class SplQueue#3 (2) {
 * ...
 * }
 * 'inf' =>
 * string(13) "I`m SPL Queue"
 * }
 * }
 * }
 */
var_dump($b);


//var_dump($b);