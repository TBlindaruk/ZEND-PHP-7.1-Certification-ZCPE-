### Namespaces
1. Namespaces and dynamic language features 
    - http://php.net/manual/en/language.namespaces.dynamic.php
2. Using namespaces: Aliasing/Importing 

```PHP
<?php

// Pre PHP 7 code
use some\namespace\ClassA;
use some\namespace\ClassB;
use some\namespace\ClassC as C;

use function some\namespace\fn_a;
use function some\namespace\fn_b;
use function some\namespace\fn_c;

use const some\namespace\ConstA;
use const some\namespace\ConstB;
use const some\namespace\ConstC;

// PHP 7+ code
use some\namespace\{ClassA, ClassB, ClassC as C};
use function some\namespace\{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC};
```
    - http://php.net/manual/en/language.namespaces.importing.php
    
3. Name resolution rules
    - http://php.net/manual/en/language.namespaces.rules.php

#### Links 
 - http://php.net/manual/en/language.namespaces.php