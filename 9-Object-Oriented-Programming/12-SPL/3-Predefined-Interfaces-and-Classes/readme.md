### Predefined Interfaces and Classes
http://php.net/manual/en/reserved.interfaces.php

------------------------------------

#### Traversable interface
http://php.net/manual/en/class.traversable.php

<p>Interface to detect if a class is traversable using foreach.</p>
<p>Abstract base interface that cannot be implemented alone. Instead it must be implemented by either IteratorAggregate or Iterator.</p>

```PHP
<?php
/**
 * Interface to detect if a class is traversable using &foreach;.
 * @link http://php.net/manual/en/class.traversable.php
 */
interface Traversable extends iterable {
}
```
----------------------------------------

#### Iterator
http://php.net/manual/en/class.iterator.php

<p>Interface for external iterators or objects that can be iterated themselves internally.</p>

P/s: Used in foreach

```PHP
<?php
/**
 * Interface for external iterators or objects that can be iterated
 * themselves internally.
 * @link http://php.net/manual/en/class.iterator.php
 */
interface Iterator extends Traversable {

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current();

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next();

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key();

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid();

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind();
}
```


```PHP
<?php
/**
 * Interface to detect if a class is traversable using &foreach;.
 * @link http://php.net/manual/en/class.traversable.php
 */
interface Traversable extends iterable {
}
```

```PHP
<?php

/**
 * @link https://wiki.php.net/rfc/iterable
 */
interface iterable {}
```

---------------------------------------------

