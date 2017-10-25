### Type Operators

```PHP
<?php
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass); //bool(true)
var_dump($a instanceof NotMyClass); //bool(false)
?>
```

###### Links
 - http://php.net/manual/en/language.operators.type.php