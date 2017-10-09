##### Bitwise Operators

###### `<<`, `>>` - operators
```PHP
<?php
var_dump(5*(2**3)); //int(40)
var_dump((5 << 3)); //int(40)

var_dump(100>>3); //int(12)
var_dump((int)(100 / (2**3))); //int(12)
```


###### `&`,`|`,`^`,`~` - operator
```PHP
    <?php
    /**
    * Bits that are set in both $a and $b are set. 
    * 0 0 0 0 1 0 1 0 
    * 0 0 1 0 1 0 0 0 
    * --------------- 
    * 0 0 0 0 1 0 0 0
    */
    echo (40&10); //8
    
    /**
    * Bits that are set in either $a or $b are set.
    * 0 0 0 0 1 0 1 0 
    * 0 0 1 0 1 0 0 0 
    * --------------- 
    * 0 0 1 0 1 0 1 0
    */
    echo (40|10); //42
    
    /**
    * Bits that are set in $a or $b but not both are set.
    * 0 0 0 0 1 0 1 0 
    * 0 0 1 0 1 0 0 0 
    * --------------- 
    * 0 0 1 0 0 0 1 0
    */
    echo (40^10); //34
    
    /**
    * Bits that are set in $a are not set, and vice versa.
    */
    echo (~40); //-41
```