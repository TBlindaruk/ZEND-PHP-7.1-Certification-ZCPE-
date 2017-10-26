### Sort Functions
 
http://php.net/manual/en/array.sorting.php

---------------------------------------

<table class="doctable table">
<caption><strong>Sorting function attributes</strong></caption>

<thead>
 <tr>
  <th>Function name</th>
  <th>Sorts by</th>
  <th>Maintains key association</th>
  <th>Order of sort</th>
  <th>Related functions</th>
 </tr>

</thead>

<tbody class="tbody">
 <tr>
  <td><span class="function"><span class="function">array_multisort()</span></span></td>
  <td>value</td>
  <td>associative yes, numeric no</td>
  <td>first array or sort options</td>
  <td><span class="function"><span class="function">array_walk()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">asort()</span></span></td>
  <td>value</td>
  <td>yes</td>
  <td>low to high</td>
  <td><span class="function"><span class="function">arsort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">arsort()</span></span></td>
  <td>value</td>
  <td>yes</td>
  <td>high to low</td>
  <td><span class="function"><span class="function">asort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">krsort()</span></span></td>
  <td>key</td>
  <td>yes</td>
  <td>high to low</td>
  <td><span class="function"><span class="function">ksort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">ksort()</span></span></td>
  <td>key</td>
  <td>yes</td>
  <td>low to high</td>
  <td><span class="function"><span class="function">asort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">natcasesort()</span></span></td>
  <td>value</td>
  <td>yes</td>
  <td>natural, case insensitive</td>
  <td><span class="function"><span class="function">natsort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">natsort()</span></span></td>
  <td>value</td>
  <td>yes</td>
  <td>natural</td>
  <td><span class="function"><span class="function">natcasesort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">rsort()</span></span></td>
  <td>value</td>
  <td>no</td>
  <td>high to low</td>
  <td><span class="function"><span class="function">sort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">shuffle()</span></span></td>
  <td>value</td>
  <td>no</td>
  <td>random</td>
  <td><span class="function"><span class="function">array_rand()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">sort()</span></span></td>
  <td>value</td>
  <td>no</td>
  <td>low to high</td>
  <td><span class="function"><span class="function">rsort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">uasort()</span></span></td>
  <td>value</td>
  <td>yes</td>
  <td>user defined</td>
  <td><span class="function"><span class="function">uksort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">uksort()</span></span></td>
  <td>key</td>
  <td>yes</td>
  <td>user defined</td>
  <td><span class="function"><span class="function">uasort()</span></span></td>
 </tr>

 <tr>
  <td><span class="function"><span class="function">usort()</span></span></td>
  <td>value</td>
  <td>no</td>
  <td>user defined</td>
  <td><span class="function"><span class="function">uasort()</span></span></td>
 </tr>

</tbody>

</table>

------------------------------------

##### array_multisort

http://php.net/manual/en/function.array-multisort.php

[examples](./example/1-array_multisort.php)

```PHP
<?php
/**
 * Sort multiple or multi-dimensional arrays
 * @link http://php.net/manual/en/function.array-multisort.php
 * @param array $arr <p>
 * An array being sorted.
 * </p>
 * @param mixed $arg [optional] <p>
 * Optionally another array, or sort options for the
 * previous array argument: 
 * SORT_ASC, 
 * SORT_DESC, 
 * SORT_REGULAR,
 * SORT_NUMERIC,
 * SORT_STRING.
 * </p>
 * @param mixed $arg [optional] 
 * @param mixed $_ [optional] 
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_multisort (array &$arr, $arg = null, $arg = null, $_ = null) {}
```
`bool array_multisort ( array &$array1 [, mixed $array1_sort_order = SORT_ASC [, mixed $array1_sort_flags = SORT_REGULAR [, mixed $... ]]] )`

----------------------------

##### asort

http://php.net/manual/en/function.asort.php

Sort an array and maintain index association

-------------------------------------

##### arsort

http://php.net/manual/en/function.arsort.php

<p> Sort an array in reverse order and maintain index association</p>

```PHP
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/**
 * a = orange
 * d = lemon
 * b = banana
 * c = apple
 */

```
-----------------------

##### krsort

http://php.net/manual/en/function.krsort.php

<p>krsort — Sort an array by key in reverse order</p>

```PHP
<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/**
 * d = lemon
 * c = apple
 * b = banana
 * a = orange
 */
```
-----------------------------

##### ksort

##### natcasesort

##### natsort

##### rsort

##### shuffle

##### sort

##### uasort

##### uksort

##### usort