<?php

class Test{
    private function testing(){

    }

    public function testingOne(){
        return method_exists($this,'testing');
    }
}

$object = new Test();

var_dump(method_exists($object,'testing')); //bool true

var_dump($object->testingOne()); // true