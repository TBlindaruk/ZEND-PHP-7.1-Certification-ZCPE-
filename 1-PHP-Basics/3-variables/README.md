### Variables

http://php.net/manual/en/language.variables.php

1. Basics
    - http://php.net/manual/en/language.variables.basics.php
2. Predefined Variables
    - http://php.net/manual/en/language.variables.predefined.php
3. Variable scope
    - http://php.net/manual/en/language.variables.scope.php
4. Variable variables
    - http://php.net/manual/en/language.variables.variable.php
5. Variables From External Sources 
    - http://php.net/manual/en/language.variables.external.php
    

```PHP
<?php

define('IA','I Can have a diferance case',true);
define('NOT_CLEAR','I have a strong case');

echo IA . PHP_EOL;
echo Ia . PHP_EOL;
echo NOT_CLEAR . PHP_EOL;
echo Not_clear . PHP_EOL; // EROR
```