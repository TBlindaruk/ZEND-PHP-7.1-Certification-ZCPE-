##### Comparison Operators 
<table class="doctable table">
 <thead>
  <tr>
   <th>Example</th>
   <th>Name</th>
   <th>Result</th>
  </tr>

 </thead>

 <tbody class="tbody">
  <tr>
   <td>$a == $b</td>
   <td>Equal</td>
   <td><strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is equal to <var class="varname"><var class="varname">$b</var></var> after type juggling.</td>
  </tr>

  <tr>
   <td>$a === $b</td>
   <td>Identical</td>
   <td>
    <strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is equal to <var class="varname"><var class="varname">$b</var></var>, and they are of the same
    type.
   </td>
  </tr>

  <tr>
   <td>$a != $b</td>
   <td>Not equal</td>
   <td><strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is not equal to <var class="varname"><var class="varname">$b</var></var> after type juggling.</td>
  </tr>

  <tr>
   <td>$a &lt;&gt; $b</td>
   <td>Not equal</td>
   <td><strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is not equal to <var class="varname"><var class="varname">$b</var></var> after type juggling.</td>
  </tr>

  <tr>
   <td>$a !== $b</td>
   <td>Not identical</td>
   <td>
    <strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is not equal to <var class="varname"><var class="varname">$b</var></var>, or they are not of the same
    type.
   </td>
  </tr>

  <tr>
   <td>$a &lt; $b</td>
   <td>Less than</td>
   <td><strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is strictly less than <var class="varname"><var class="varname">$b</var></var>.</td>
  </tr>

  <tr>
   <td>$a &gt; $b</td>
   <td>Greater than</td>
   <td><strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is strictly greater than <var class="varname"><var class="varname">$b</var></var>.</td>
  </tr>

  <tr>
   <td>$a &lt;= $b</td>
   <td>Less than or equal to </td>
   <td><strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is less than or equal to <var class="varname"><var class="varname">$b</var></var>.</td>
  </tr>

  <tr>
   <td>$a &gt;= $b</td>
   <td>Greater than or equal to </td>
   <td><strong><code>TRUE</code></strong> if <var class="varname"><var class="varname">$a</var></var> is greater than or equal to <var class="varname"><var class="varname">$b</var></var>.</td>
  </tr>

  <tr>
   <td>$a &lt;=&gt; $b</td>
   <td>Spaceship</td>
   <td>
    An <span class="type">integer</span> less than, equal to, or greater than zero when
    <var class="varname"><var class="varname">$a</var></var> is respectively less than, equal to, or greater
    than <var class="varname"><var class="varname">$b</var></var>. Available as of PHP 7.
   </td>
  </tr>

 </tbody>

</table>


```PHP
<?php  
// Integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

echo (false <=> 0); //0
```


###### Links
 - http://php.net/manual/en/language.operators.comparison.php