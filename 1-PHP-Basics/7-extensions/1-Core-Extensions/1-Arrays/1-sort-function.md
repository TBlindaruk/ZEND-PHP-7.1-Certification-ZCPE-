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

http://php.net/manual/en/function.ksort.php

<p> Sort an array by key</p>

```PHP
<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/**
 * a = orange
 * b = banana
 * c = apple
 * d = lemon
 */
```

-----------------------------

##### natcasesort

http://php.net/manual/en/function.natcasesort.php

<p>Sort an array using a case insensitive "natural order" algorithm</p>

```PHP
<?php
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting\n";
/**
 * Array
 * (
 *     [0] => IMG0.png
 *     [1] => IMG3.png
 *     [2] => img1.png
 *     [3] => img10.png
 *     [4] => img12.png
 *     [5] => img2.png
 * )
 */
print_r($array1);

natcasesort($array2);
echo "\nNatural order sorting (case-insensitive)\n";
/**
 * Array
 * (
 *     [0] => IMG0.png
 *     [4] => img1.png
 *     [3] => img2.png
 *     [5] => IMG3.png
 *     [2] => img10.png
 *     [1] => img12.png
 * )
 */
print_r($array2);
```

----------------------------------

##### natsort

http://php.net/manual/en/function.natsort.php

<p>Sort an array using a "natural order" algorithm</p>

```PHP
<?php
$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

asort($array1);
echo "Standard sorting\n";
/**
 * Array
 * (
 *     [3] => img1.png
 *     [1] => img10.png
 *     [0] => img12.png
 *     [2] => img2.png
 * )
 */
print_r($array1);

natsort($array2);
echo "\nNatural order sorting\n";

/**
 * Array
 * (
 *     [3] => img1.png
 *     [2] => img2.png
 *     [1] => img10.png
 *     [0] => img12.png
 * )
 */
print_r($array2);
```
--------------------

##### rsort

http://php.net/manual/en/function.rsort.php

<p> Sort an array in reverse order</p>

```PHP
<?php
$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
/**
 * 0 = orange
 * 1 = lemon
 * 2 = banana
 * 3 = apple
 */
```
---------------

##### shuffle

http://php.net/manual/en/function.shuffle.php

<p>Shuffle an array</p>

<blockquote class="note">
    <p>
        <strong class="note">Note</strong>
        : 
        <span class="simpara">
            This function assigns new keys to the elements in 
            <code class="parameter">array</code>.
            It will remove any existing keys that may have been assigned, rather than just reordering the keys.
        </span>
    </p>
</blockquote>

```PHP
<?php
/**
 * Shuffle an array
 * @link http://php.net/manual/en/function.shuffle.php
 * @param array $array <p>
 * The array.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function shuffle (array &$array) {}
```

```PHP
<?php

$array = ['a'=>1,10,123,1000];
shuffle($array);

/**
 * array(4) {
 * [0]=>
 * int(1)
 * [1]=>
 * int(1000)
 * [2]=>
 * int(10)
 * [3]=>
 * int(123)
 * }
 */
var_dump($array);
```

-----------------


##### sort

http://php.net/manual/en/function.sort.php

<p>Sort an array</p>

<strong>sort_flags</strong>
 - SORT_REGULAR - compare items normally (don't change types)
 - SORT_NUMERIC - compare items numerically
 - SORT_STRING - compare items as strings
 - SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()
 - SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
 - SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively

```PHP
<?php
/**
 * Sort an array
 * @link http://php.net/manual/en/function.sort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $sort_flags [optional] <p>
 * The optional second parameter sort_flags
 * may be used to modify the sorting behavior using these values:
 * </p>
 * <p>
 * Sorting type flags:
 * SORT_REGULAR - compare items normally
 * (don't change types)
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function sort (array &$array, $sort_flags = null) {}
```
```PHP
<?php

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
/**
 * fruits[0] = apple
 * fruits[1] = banana
 * fruits[2] = lemon
 * fruits[3] = orange
 */
```

------------------------

##### uasort

http://php.net/manual/en/function.uasort.php

<p>Sort an array with a user-defined comparison function and maintain index association</p>

```PHP
<?php
/**
 * Sort an array with a user-defined comparison function and maintain index association
 * @link http://php.net/manual/en/function.uasort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param callback $cmp_function <p>
 * See usort and uksort for
 * examples of user-defined comparison functions.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function uasort (array &$array, $cmp_function) {}
```

```PHP
<?php

$array = [10,1230,12,32,43,54,1,2,54];

function cmp($a, $b){
    return $a <=> $b;
}
uasort($array,'cmp');

/**
 * array(9) {
 * [6]=>
 * int(1)
 * [7]=>
 * int(2)
 * [0]=>
 * int(10)
 * [2]=>
 * int(12)
 * [3]=>
 * int(32)
 * [4]=>
 * int(43)
 * [5]=>
 * int(54)
 * [8]=>
 * int(54)
 * [1]=>
 * int(1230)
 * }
 */
var_dump($array);
```
-----------------

##### uksort

http://php.net/manual/en/function.uksort.php

<p>Sort an array by keys using a user-defined comparison function</p>

`bool uksort ( array &$array , callable $key_compare_func )`

---------------------------------

##### usort

http://php.net/manual/en/function.usort.php

<p>Sort an array by values using a user-defined comparison function</p>

```PHP
<?php

/**
 * Sort an array by values using a user-defined comparison function
 * @link http://php.net/manual/en/function.usort.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param callback $cmp_function <p>
 * The comparison function must return an integer less than, equal to, or
 * greater than zero if the first argument is considered to be
 * respectively less than, equal to, or greater than the second.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function usort (array &$array, $cmp_function) {}
```

```PHP
<?php

$array = [0.9,0.8,100,100.8,100.7,100.3,100.4];

function cmp($a,$b){
    return $a<=>$b;
}

usort($array,'cmp');

/**
 * array(7) {
 * [0]=>
 * float(0.8)
 * [1]=>
 * float(0.9)
 * [2]=>
 * int(100)
 * [3]=>
 * float(100.3)
 * [4]=>
 * float(100.4)
 * [5]=>
 * float(100.7)
 * [6]=>
 * float(100.8)
 * }
 */
var_dump($array);
```