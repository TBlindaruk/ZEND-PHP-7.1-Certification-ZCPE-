##### Examples
```PHP
<?php

$a = 1;
echo $a + $a++;  //output print 3 

```

```PHP
<?php

$i = 1;
$array[$i] = $i++; // may set either index 1 or 2
/**
* array(1) {
*   [2]=>
*   int(1)
*   }
*/
var_dump($array);


```