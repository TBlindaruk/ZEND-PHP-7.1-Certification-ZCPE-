### Interfaces

#### Function 

```PHP 
bool interface_exists ( string $interface_name [, bool $autoload = true ] )
```
http://php.net/manual/en/function.interface-exists.php

---------------------------

```PHP
array get_declared_interfaces ( void )

<?php
/**
*Array
* (
*     [0] => Traversable
*     [1] => IteratorAggregate
*     [2] => Iterator
*     [3] => ArrayAccess
*     [4] => reflector
*     [5] => RecursiveIterator
*     [6] => SeekableIterator
* )
*/
print_r(get_declared_interfaces());
?>
```
http://php.net/manual/en/function.get-declared-interfaces.php

------------------------------------

```PHP
array class_implements ( mixed $class [, bool $autoload = true ] )
```
http://php.net/manual/en/function.class-implements.php

------------------------------------
