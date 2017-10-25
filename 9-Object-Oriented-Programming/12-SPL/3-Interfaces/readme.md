### Interfaces
http://php.net/manual/en/spl.interfaces.php
http://php.net/manual/en/reserved.interfaces.php


#### Countable
http://php.net/manual/en/class.countable.php

```PHP
<?php 

/**
 * Classes implementing <b>Countable</b> can be used with the
 * <b>count</b> function.
 * @link http://php.net/manual/en/class.countable.php
 */
interface Countable {

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count();
}
```


#### Iterator


