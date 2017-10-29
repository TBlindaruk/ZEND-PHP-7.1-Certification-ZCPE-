<?php

abstract class bar {
    public function __construct()
    {
        var_dump(get_class($this));
        var_dump(get_class());
    }
}

class foo extends bar {
}

new foo;

/**
 * Output
 * string(3) "foo"
 * string(3) "bar"
 */
