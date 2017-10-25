<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 25.10.17
 * Time: 16:26
 */

class obj implements Serializable {
    private $data;
    public function __construct() {
        $this->data = "My private data";
    }
    public function serialize() {
        return serialize($this->data);
    }
    public function unserialize($data) {
        $this->data = unserialize($data);
    }
    public function getData() {
        return $this->data;
    }
}

$obj = new obj;

$ser = serialize($obj);
/**
 * string(38) "C:3:"obj":23:{s:15:"My private data";}"
 */
var_dump($ser);


$newobj = unserialize($ser);
/**
 * string(15) "My private data"
 */
var_dump($newobj->getData());