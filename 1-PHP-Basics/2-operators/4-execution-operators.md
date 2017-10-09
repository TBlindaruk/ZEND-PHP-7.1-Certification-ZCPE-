#### Execution Operators 
<p>PHP supports one execution operator: backticks (``). Note that these are not single-quotes! PHP will attempt to execute the contents of the backticks as a shell command; the output will be returned (i.e., it won't simply be dumped to output; it can be assigned to a variable). Use of the backtick operator is identical to shell_exec().</p>

<strong>`ls -al` == shell_exec('ls -al')</strong>

```PHP
<?php
$output = `ls -al`;
echo "<pre>$output</pre>";
```

###### Links
 - http://php.net/manual/en/language.operators.execution.php