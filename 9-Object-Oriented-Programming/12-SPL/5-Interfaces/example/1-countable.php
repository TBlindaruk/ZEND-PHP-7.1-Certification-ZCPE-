<?php
//Example One, BAD :(

class CountMe1
{

    protected $_myCount = 3;

    public function count()
    {
        return $this->_myCount;
    }

}

$countable = new CountMe1();
echo count($countable); //result is "1", not as expected

//Example Two, GOOD :)

class CountMe implements Countable
{

    protected $_myCount = 3;

    public function count()
    {
        return $this->_myCount;
    }

}

$countable = new CountMe();
echo count($countable); //result is "3" as expected