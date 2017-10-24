### Incrementing/Decrementing Operators 

<table class="doctable table">
<caption><strong>Increment/decrement Operators</strong></caption>

 <thead>
  <tr>
   <th>Example</th>
   <th>Name</th>
   <th>Effect</th>
  </tr>

 </thead>

 <tbody class="tbody">
  <tr>
   <td>++$a</td>
   <td>Pre-increment</td>
   <td>Increments <var class="varname"><var class="varname">$a</var></var> by one, then returns <var class="varname"><var class="varname">$a</var></var>.</td>
  </tr>

  <tr>
   <td>$a++</td>
   <td>Post-increment</td>
   <td>Returns <var class="varname"><var class="varname">$a</var></var>, then increments <var class="varname"><var class="varname">$a</var></var> by one.</td>
  </tr>

  <tr>
   <td>--$a</td>
   <td>Pre-decrement</td>
   <td>Decrements <var class="varname"><var class="varname">$a</var></var> by one, then returns <var class="varname"><var class="varname">$a</var></var>.</td>
  </tr>

  <tr>
   <td>$a--</td>
   <td>Post-decrement</td>
   <td>Returns <var class="varname"><var class="varname">$a</var></var>, then decrements <var class="varname"><var class="varname">$a</var></var> by one.</td>
  </tr>

 </tbody>

</table>

###### Example

```PHP
<?php
echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br />\n"; 
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";
?>
```

###### More Example
```PHP
<?php
echo '== Alphabets ==' . PHP_EOL;
$s = 'W';
for ($n=0; $n<6; $n++) {
    echo ++$s . PHP_EOL;
}
// Digit characters behave differently
echo '== Digits ==' . PHP_EOL;
$d = 'A8';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}
$d = 'A08';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}
/**
*== Characters ==
*X
*Y
*Z
*AA
*AB
*AC
*== Digits ==
*A9
*B0
*B1
*B2
*B3
*B4
*A09
*A10
*A11
*A12
*A13
*A14
*/
?>

```

###### Links
 - http://php.net/manual/en/language.operators.increment.php
