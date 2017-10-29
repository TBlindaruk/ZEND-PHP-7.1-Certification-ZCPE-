### Class/Object Information

http://php.net/manual/en/book.classobj.php

--------------------

#### __autoload — Attempt to load undefined class

http://php.net/manual/en/function.autoload.php

<div id="function.autoload-refsynopsisdiv">
    <div class="warning">
        <strong class="warning">Warning</strong>
        <p class="simpara">
            This feature has been
            <em class="emphasis">DEPRECATED</em> 
            as of PHP 7.2.0. Relying on this feature is highly discouraged.
        </p>
    </div>
</div>

--------------------------------------

#### call_user_method_array — Call a user method given with an array of parameters

http://php.net/manual/en/function.call-user-method-array.php

<strong>Removed in 7.0</strong>

------------------

#### call_user_method — Call a user method on an specific object

http://php.net/manual/en/function.call-user-method.php

<strong>Removed in 7.0</strong>

--------------------

#### class_alias — Creates an alias for a class
http://php.net/manual/en/function.class-alias.php

```PHP
<?php
/**
 * Creates an alias for a class
 * @link http://php.net/manual/en/function.class-alias.php
 * @param string $original The original class.
 * @param string $alias The alias name for the class.
 * @param bool $autoload [optional] Whether to autoload if the original class is not found.
 * @return bool true on success or false on failure.
 * @since 5.3.0
 */
function class_alias ($original, $alias, $autoload = TRUE) {}
```

```PHP
<?php

class foo { }

class_alias('foo', 'bar');

$a = new foo;
$b = new bar;

// the objects are the same
var_dump($a == $b, $a === $b); // bool(true) bool(false)
var_dump($a instanceof $b); // bool(true)

// the classes are the same
var_dump($a instanceof foo); // bool(true)
var_dump($a instanceof bar); // bool(true)

var_dump($b instanceof foo); // bool(true)
var_dump($b instanceof bar); // bool(true)
```
----------------

#### get_parent_class — Retrieves the parent class name for object or class

http://php.net/manual/en/function.get-parent-class.php

--------------------------

#### get_class — Returns the name of the class of an object
http://php.net/manual/en/function.get-class.php

```PHP
<?php
/**
 * Returns the name of the class of an object
 * @link http://php.net/manual/en/function.get-class.php
 * @param object $object [optional] <p>
 * The tested object. This parameter may be omitted when inside a class.
 * </p>
 * @return string the name of the class of which <i>object</i> is an
 * instance. Returns false if <i>object</i> is not an
 * object.
 * </p>
 * <p>
 * If <i>object</i> is omitted when inside a class, the
 * name of that class is returned.
 * @since 4.0
 * @since 5.0
 */
function get_class ($object = null) {}
```

```PHP
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
```
-----------

#### get_called_class — the "Late Static Binding" class name
http://php.net/manual/en/function.get-called-class.php

```PHP
<?php
/**
 * the "Late Static Binding" class name
 * @link http://php.net/manual/en/function.get-called-class.php
 * @return string the class name. Returns false if called from outside a class.
 * @since 5.3.0
 */
function get_called_class () {}
```

```PHP
<?php

class foo {
    static public function test() {
        var_dump(get_called_class());
    }
}

class bar extends foo {
}

foo::test(); //string(3) "foo"
bar::test(); //string(3) "bar"
```
------------------------

#### is_subclass_of — Checks if the object has this class as one of its parents or implements it.

http://php.net/manual/en/function.is-subclass-of.php


```PHP
<?php
/**
 * Checks if the object has this class as one of its parents
 * @link http://php.net/manual/en/function.is-subclass-of.php
 * @param mixed $object <p>
 * A class name or an object instance
 * </p>
 * @param string $class_name <p>
 * The class name
 * </p>
 * @param bool $allow_string [optional] <p>
 * If this parameter set to false, string class name as object is not allowed.
 * This also prevents from calling autoloader if the class doesn't exist. 
 * </p>
 * @return bool This function returns true if the object <i>object</i>,
 * belongs to a class which is a subclass of 
 * <i>class_name</i>, false otherwise.
 * @since 4.0
 * @since 5.0
 */
function is_subclass_of ($object, $class_name, $allow_string = TRUE) {}
```

<strong>Also alowed a interface check.</strong>

-------------------

#### is_a — Checks if the object is of this class or has this class as one of its parents
http://php.net/manual/en/function.is-a.php

----------------------------

#### class_exists — Checks if the class has been defined
http://php.net/manual/en/function.class-exists.php

<strong>5.0.2: No longer returns TRUE for defined interfaces. Use interface_exists().</strong>

```PHP
<?php
/**
 * Checks if the class has been defined
 * @link http://php.net/manual/en/function.class-exists.php
 * @param string $class_name <p>
 * The class name. The name is matched in a case-insensitive manner.
 * </p>
 * @param bool $autoload [optional] <p>
 * Whether or not to call &link.autoload; by default.
 * </p>
 * @return bool true if <i>class_name</i> is a defined class,
 * false otherwise.
 * @since 4.0
 * @since 5.0
 */
function class_exists ($class_name, $autoload = true) {}
```

```PHP
<?php
// Check that the class exists before trying to use it
if (class_exists('MyClass')) {
    $myclass = new MyClass();
}
```
-------------------

#### interface_exists — Checks if the interface has been defined
http://php.net/manual/en/function.interface-exists.php

```PHP
<?php
/**
 * Checks if the interface has been defined
 * @link http://php.net/manual/en/function.interface-exists.php
 * @param string $interface_name <p>
 * The interface name
 * </p>
 * @param bool $autoload [optional] <p>
 * Whether to call &link.autoload; or not by default.
 * </p>
 * @return bool true if the interface given by 
 * <i>interface_name</i> has been defined, false otherwise.
 * @since 5.0.2
 */
function interface_exists ($interface_name, $autoload = true) {}
```

```PHP
<?php
// Check the interface exists before trying to use it
if (interface_exists('MyInterface')) {
    class MyClass implements MyInterface
    {
        // Methods
    }
}
```
-------------------

#### get_declared_interfaces — Returns an array of all declared interfaces
http://php.net/manual/en/function.get-declared-interfaces.php

```PHP
<?php
/**
 * Returns an array of all declared interfaces
 * @link http://php.net/manual/en/function.get-declared-interfaces.php
 * @return array an array of the names of the declared interfaces in the current
 * script.
 * @since 5.0
 */
function get_declared_interfaces () {}
```

```PHP
<?php
/**
 * Array
 * (
 * [0] => Traversable
 * [1] => IteratorAggregate
 * [2] => Iterator
 * [3] => ArrayAccess
 * [4] => Serializable
 * [5] => Throwable
 * [6] => DateTimeInterface
 * [7] => Reflector
 * [8] => RecursiveIterator
 * [9] => OuterIterator
 * [10] => Countable
 * [11] => SeekableIterator
 * [12] => SplObserver
 * [13] => SplSubject
 * [14] => SessionHandlerInterface
 * [15] => SessionIdInterface
 * [16] => SessionUpdateTimestampHandlerInterface
 * [17] => JsonSerializable
 * )
 */
print_r(get_declared_interfaces());
```
-------------

#### get_declared_classes — Returns an array with the name of the defined classes
http://php.net/manual/en/function.get-declared-classes.php

```PHP
<?php
/**
 * Returns an array with the name of the defined classes
 * @link http://php.net/manual/en/function.get-declared-classes.php
 * @return array an array of the names of the declared classes in the current
 * script.
 * </p>
 * <p>
 * Note that depending on what extensions you have compiled or
 * loaded into PHP, additional classes could be present. This means that
 * you will not be able to define your own classes using these
 * names. There is a list of predefined classes in the Predefined Classes section of
 * the appendices.
 * @since 4.0
 * @since 5.0
 */
function get_declared_classes () {}
```
```PHP
<?php
/**
 * Array
 * (
 * [0] => stdClass
 * [1] => Exception
 * [2] => ErrorException
 * [3] => Error
 * ....
 */
print_r(get_declared_classes());
```
-------------------

#### get_declared_traits — Returns an array of all declared traits

http://php.net/manual/en/function.get-declared-traits.php

```PHP
<?php
/**
 * Returns an array of all declared traits
 * @return array with names of all declared traits in values. Returns NULL in case of a failure.
 * @link http://www.php.net/manual/en/function.get-declared-traits.php
 * @see class_uses()
 * @since 5.4.0
 */
function get_declared_traits() {}
```

```PHP
<?php
trait A{

}

/**
 * Array
 * (
 * [0] => A
 * )
 */
print_r(get_declared_traits());
```
------

#### trait_exists — Checks if the trait exists
http://php.net/manual/en/function.trait-exists.php

---------------------

#### get_class_methods — Gets the class methods' names
http://php.net/manual/en/function.get-class-methods.php

```PHP
<?php
/**
 * Gets the class methods' names
 * @link http://php.net/manual/en/function.get-class-methods.php
 * @param mixed $class_name <p>
 * The class name or an object instance
 * </p>
 * @return array an array of method names defined for the class specified by
 * <i>class_name</i>. In case of an error, it returns null.
 * @since 4.0
 * @since 5.0
 */
function get_class_methods ($class_name) {}
```
---------

#### get_class_vars — Get the default properties of the class
http://php.net/manual/en/function.get-class-vars.php

```PHP
<?php
/**
 * Get the default properties of the class
 * @link http://php.net/manual/en/function.get-class-vars.php
 * @param string $class_name <p>
 * The class name
 * </p>
 * @return array an associative array of declared properties visible from the
 * current scope, with their default value.
 * The resulting array elements are in the form of 
 * varname => value.
 * @since 4.0
 * @since 5.0
 */
function get_class_vars ($class_name) {}
```
-----------

#### get_object_vars — Gets the properties of the given object

http://php.net/manual/en/function.get-object-vars.php

```PHP
<?php
/**
 * Gets the properties of the given object
 * @link http://php.net/manual/en/function.get-object-vars.php
 * @param object $object <p>
 * An object instance.
 * </p>
 * @return array an associative array of defined object accessible non-static properties 
 * for the specified <i>object</i> in scope. If a property have
 * not been assigned a value, it will be returned with a null value.
 * @since 4.0
 * @since 5.0
 */
function get_object_vars ($object) {}
```

```PHP
<?php

class foo {
    private $a;
    public $b = 1;
    public $c;
    private $d;
    static $e;
   
    public function test() {
        var_dump(get_object_vars($this));
    }
}

$test = new foo;
/**
 * array(2) {
 *   ["b"]=>
 *   int(1)
 *   ["c"]=>
 *   NULL
 * }
 */
var_dump(get_object_vars($test));

/**
 * array(4) {
 *   ["a"]=>
 *   NULL
 *   ["b"]=>
 *   int(1)
 *   ["c"]=>
 *   NULL
 *   ["d"]=>
 *   NULL
 * }
 */
$test->test();
```
---------------

#### method_exists — Checks if the class method exists
http://php.net/manual/en/function.method-exists.php
```PHP
<?php
/**
 * Checks if the class method exists
 * @link http://php.net/manual/en/function.method-exists.php
 * @param mixed $object <p>
 * An object instance or a class name
 * </p>
 * @param string $method_name <p>
 * The method name
 * </p>
 * @return bool true if the method given by <i>method_name</i>
 * has been defined for the given <i>object</i>, false
 * otherwise.
 * @since 4.0
 * @since 5.0
 */
function method_exists ($object, $method_name) {}
```

```PHP
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
```

----------------

#### property_exists — Checks if the object or class has a property

http://php.net/manual/en/function.property-exists.php