<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 25.10.17
 * Time: 12:55
 */

class myData implements IteratorAggregate {
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";

    public function __construct() {
        $this->property4 = "last property";
    }

    public function getIterator() {
        return new ArrayIterator($this);
    }
}

$obj = new myData;

/**
 * string(9) "property1"
 * string(19) "Public property one"
 *
 * string(9) "property2"
 * string(19) "Public property two"
 *
 * string(9) "property3"
 * string(21) "Public property three"
 *
 * string(9) "property4"
 * string(13) "last property"
 */
foreach($obj as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}