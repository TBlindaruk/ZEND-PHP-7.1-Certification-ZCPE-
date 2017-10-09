##### Bitwise Operators

###### `<<`, `>>` - operators
```PHP
<?php
var_dump(5*(2**3)); //int(40)
var_dump((5 << 3)); //int(40)

var_dump(100>>3); //int(12)
var_dump((int)(100 / (2**3))); //int(12)
```


###### `&` - operator
```PHP
    <?php
    echo (40&10); //8
```

0 0 0 0 1 0 1 0 <br/>
0 0 1 0 1 0 0 0 <br/>
`------------` <br/>
0 0 0 0 1 0 0 0


##### Links
- http://php.net/manual/en/language.operators.php

##### Example
```PHP
    <?php
    
    $a = 1;
    echo $a + $a++;  //output print 3 

```

```PHP
<?php

    $i = 1;
    $array[$i] = $i++; // may set either index 1 or 2

    var_dump($array);
    
    /**
    * array(1) {
    *   [2]=>
    *   int(1)
    *   }
    */
```
