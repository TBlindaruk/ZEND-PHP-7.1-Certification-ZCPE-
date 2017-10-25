<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 25.10.17
 * Time: 17:17
 */

class ArrayValue implements JsonSerializable
{

    protected $array = [];

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function jsonSerialize()
    {
        return $this->array;
    }
}

$array = [1, 2, 3];
$encodedString = json_encode(new ArrayValue($array), JSON_PRETTY_PRINT);
var_dump($encodedString);


var_dump(json_decode($encodedString));


##########################################################

class ArrayValueWithout
{

    public $array = [];

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function getData(){
        return [1];
    }
}


$array = [1, 2, 3];
$encodedString = json_encode(new ArrayValueWithout($array));
var_dump($encodedString);


var_dump(json_decode($encodedString));