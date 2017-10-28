### Array Functions

-------------------------

#### array_change_key_case — Changes the case of all keys in an array

http://php.net/manual/en/function.array-change-key-case.php

```PHP
<?php

/**
 * Changes all keys in an array
 * @link http://php.net/manual/en/function.array-change-key-case.php
 * @param array $input <p>
 * The array to work on
 * </p>
 * @param int $case [optional] <p>
 * Either CASE_UPPER or
 * CASE_LOWER (default)
 * </p>
 * @return array an array with its keys lower or uppercased, or false if
 * input is not an array.
 * @since 4.2.0
 * @since 5.0
 */
function array_change_key_case(array $input, $case = null) { }
```

```PHP
<?php

$input_array = array("FirSt" => 1, "SecOnd" => 4);
/**
 * Array
 * (
 * [FIRST] => 1
 * [SECOND] => 4
 * )
 */
print_r(array_change_key_case($input_array, CASE_UPPER));
```
---------------------

#### array_chunk — Split an array into chunks

http://php.net/manual/en/function.array-chunk.php

```PHP
<?php
/**
 * Split an array into chunks
 * @link http://php.net/manual/en/function.array-chunk.php
 * @param array $input <p>
 * The array to work on
 * </p>
 * @param int $size <p>
 * The size of each chunk
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * When set to true keys will be preserved.
 * Default is false which will reindex the chunk numerically
 * </p>
 * @return array a multidimensional numerically indexed array, starting with zero,
 * with each dimension containing size elements.
 * @since 4.2.0
 * @since 5.0
 */
function array_chunk(array $input, $size, $preserve_keys = null) { }
```

```PHP
<?php
$input_array = array('a', 'b', 'c', 'd', 'e');
/**
 * Array
 * (
 *     [0] => Array
 *         (
 *             [0] => a
 *             [1] => b
 *         ) 
 *     [1] => Array
 *         (
 *             [0] => c
 *             [1] => d
 *         ) 
 *     [2] => Array
 *         (
 *             [0] => e
 *         ) 
 * )
 */
print_r(array_chunk($input_array, 2));
/**
  * Array
  * (
  *    [0] => Array
  *        (
  *            [0] => a
  *            [1] => b
  *        )
  *    [1] => Array
  *        (
  *            [2] => c
  *            [3] => d
  *        ) 
  *    [2] => Array
  *        (
  *            [4] => e
  *        ) 
  )
 */
print_r(array_chunk($input_array, 2, true));
```
---------------------

#### array_column — Return the values from a single column in the input array

http://php.net/manual/en/function.array-column.php

<table class="doctable informaltable">  
 <thead>
  <tr>
   <th>Version</th>
   <th>Description</th>
  </tr>
 </thead>
 <tbody class="tbody">
  <tr>
   <td>7.0.0</td>
   <td>
    Added the ability for the <code class="parameter">input</code> parameter to be an array of objects.
   </td>
  </tr>
 </tbody>
</table>

```PHP
<?php
/**
 * (PHP 5 &gt;=5.5.0)<br/>
 * Return the values from a single column in the input array
 * @link http://www.php.net/manual/en/function.array-column.php
 * @param array $array <p>A multi-dimensional array (record set) from which to pull a column of values.</p>
 * @param mixed $column <p>The column of values to return. This value may be the integer key of the column you wish to retrieve, or it may be the string key name for an associative array. It may also be NULL to return complete arrays (useful together with index_key to reindex the array).</p>
 * @param mixed $index_key [optional] <p>The column to use as the index/keys for the returned array. This value may be the integer key of the column, or it may be the string key name.</p>
 * @return array Returns an array of values representing a single column from the input array.
 * @since 5.5.0
 */
function array_column(array $array, $column, $index_key = null) { }
```

------------------------------------

#### array_combine — Creates an array by using one array for keys and another for its values

http://php.net/manual/en/function.array-combine.php

```PHP
<?php
/**
 * Creates an array by using one array for keys and another for its values
 * @link http://php.net/manual/en/function.array-combine.php
 * @param array $keys <p>
 * Array of keys to be used. Illegal values for key will be
 * converted to string.
 * </p>
 * @param array $values <p>
 * Array of values to be used
 * </p>
 * @return array the combined array, false if the number of elements
 * for each array isn't equal or if the arrays are empty.
 * @since 5.0
 */
function array_combine(array $keys, array $values) { }
```

```PHP
<?php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
/**
 * Array
 * (
 *     [green]  => avocado
 *     [red]    => apple
 *     [yellow] => banana
 * )
 */
print_r($c);
```

```PHP
<?php
$a = array_combine(array(
    1, 3, 4
), array(
    2, 3, 4, 5
)); // PHP Warning
var_dump($a); //bool false
```

------------------------------

#### array_count_values — Counts all the values of an array

http://php.net/manual/en/function.array-count-values.php


```PHP
<?php
/**
 * Counts all the values of an array
 * @link http://php.net/manual/en/function.array-count-values.php
 * @param array $input <p>
 * The array of values to count
 * </p>
 * @return array an associative array of values from input as
 * keys and their count as value.
 * @since 4.0
 * @since 5.0
 */
function array_count_values(array $input) { }
```

```PHP
<?php
$array = array(1, "hello", 1, "world", "hello");
/**
 * Array
 * (
 *     [1] => 2
 *     [hello] => 2
 *     [world] => 1
 * )
 */
print_r(array_count_values($array));
?>
```
--------------------

#### array_diff_assoc — Computes the difference of arrays with additional index check

http://php.net/manual/en/function.array-diff-assoc.php

```PHP
<?php
/**
 * Computes the difference of arrays with additional index check
 * @link http://php.net/manual/en/function.array-diff-assoc.php
 * @param array $array1 <p>
 * The array to compare from
 * </p>
 * @param array $array2 <p>
 * An array to compare against
 * </p>
 * @param array $_ [optional]
 * @return array an array containing all the values from
 * array1 that are not present in any of the other arrays.
 * @since 4.3.0
 * @since 5.0
 */
function array_diff_assoc(array $array1, array $array2, array $_ = null) { }
```

```PHP
<?php

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
/**
 * Array
 * (
 * [b] => brown
 * [c] => blue
 * [0] => red
 * )
 */
print_r($result);


$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2);
/**
 * Array
 * (
 * [0] => 0
 * [1] => 1
 * )
 */
print_r($result);

$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2,array(0));
/**
 * Array
 * (
 * [1] => 1
 * )
 */
print_r($result);
```
-------------------------

#### array_diff — Computes the difference of arrays

http://php.net/manual/en/function.array-diff.php

<p>Compares array1 against one or more other arrays and returns the values in array1 that are not present in any of the other arrays</p>

```PHP
<?php
/**
 * Computes the difference of arrays
 * @link http://php.net/manual/en/function.array-diff.php
 * @param array $array1 <p>
 * The array to compare from
 * </p>
 * @param array $array2 <p>
 * An array to compare against
 * </p>
 * @param array $_ [optional]
 * @return array an array containing all the entries from
 * array1 that are not present in any of the other arrays.
 * @since 4.0.1
 * @since 5.0
 */
function array_diff(array $array1, array $array2, array $_ = null) { }
```

```PHP
<?php
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

/**
 * Array
 * (
 *     [1] => blue
 * )
 */
print_r($result);

```
--------------

#### array_intersect — Computes the intersection of arrays

http://php.net/manual/en/function.array-intersect.php

```PHP
<?php
/**
 * Computes the intersection of arrays
 * @link http://php.net/manual/en/function.array-intersect.php
 * @param array $array1 <p>
 * The array with master values to check.
 * </p>
 * @param array $array2 <p>
 * An array to compare values against.
 * </p>
 * @param array $_ [optional]
 * @return array an array containing all of the values in
 * array1 whose values exist in all of the parameters.
 * @since 4.0.1
 * @since 5.0
 */
function array_intersect(array $array1, array $array2, array $_ = null) { }
```

```PHP
<?php
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
/**
 * Array
 * (
 *     [a] => green
 *     [0] => red
 * )
 */
print_r($result);
```
---------------------------

#### array_intersect_assoc — Computes the intersection of arrays with additional index check

http://php.net/manual/en/function.array-intersect-assoc.php

```PHP
<?php
/**
 * Computes the intersection of arrays with additional index check
 * @link http://php.net/manual/en/function.array-intersect-assoc.php
 * @param array $array1 <p>
 * The array with master values to check.
 * </p>
 * @param array $array2 <p>
 * An array to compare values against.
 * </p>
 * @param array $_ [optional]
 * @return array an associative array containing all the values in
 * array1 that are present in all of the arguments.
 * @since 4.3.0
 * @since 5.0
 */
function array_intersect_assoc(array $array1, array $array2, array $_ = null) { }
```

```PHP
<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
/**
 * Array
 * (
 *     [a] => green
 * )
 */
print_r($result_array);
```
---------------------------

#### array_uintersect_assoc — Computes the intersection of arrays with additional index check, compares data by a callback function

http://php.net/manual/en/function.array-uintersect-assoc.php

```PHP
<?php
/**
 * Computes the intersection of arrays with additional index check, compares data by a callback function
 * @link http://php.net/manual/en/function.array-uintersect-assoc.php
 * @param array $array1 <p>
 * The first array.
 * </p>
 * @param array $array2 <p>
 * The second array.
 * </p>
 * @param array $_ [optional]
 * @param callback $data_compare_func <p>
 * For comparison is used the user supplied callback function.
 * It must return an integer less than, equal
 * to, or greater than zero if the first argument is considered to
 * be respectively less than, equal to, or greater than the
 * second.
 * </p>
 * @return array an array containing all the values of
 * array1 that are present in all the arguments.
 * @since 5.0
 */
function array_uintersect_assoc(array $array1, array $array2, array $_ = null, $data_compare_func) { }
```

```PHP
<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
/**
 * Array
 * (
 *     [a] => green
 * )
 */
print_r(array_uintersect_assoc($array1, $array2, "strcasecmp"));
```
-----------

#### array_uintersect — Computes the intersection of arrays, compares data by a callback function

http://php.net/manual/en/function.array-uintersect.php

```PHP
<?php
/**
 * Computes the intersection of arrays, compares data by a callback function
 * @link http://php.net/manual/en/function.array-uintersect.php
 * @param array $array1 <p>
 * The first array.
 * </p>
 * @param array $array2 <p>
 * The second array.
 * </p>
 * @param array $_ [optional]
 * @param callback $data_compare_func <p>
 * The callback comparison function.
 * </p>
 * <p>
 * The user supplied callback function is used for comparison.
 * It must return an integer less than, equal to, or greater than zero if
 * the first argument is considered to be respectively less than, equal
 * to, or greater than the second.
 * </p>
 * @return array an array containing all the values of array1
 * that are present in all the arguments.
 * @since 5.0
 */
function array_uintersect(array $array1, array $array2, array $_ = null, $data_compare_func) { }
```

```PHP
<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
/**
 * Array
 * (
 *     [a] => green
 *     [b] => brown
 *     [0] => red
 * )
 */
print_r(array_uintersect($array1, $array2, "strcasecmp"));
```
----------------------------

#### array_uintersect_uassoc — Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions

http://php.net/manual/en/function.array-uintersect-uassoc.php

```PHP
<?php
/**
 * Computes the intersection of arrays with additional index check, compares data and indexes by a callback functions
 * @link http://php.net/manual/en/function.array-uintersect-uassoc.php
 * @param array $array1 <p>
 * The first array.
 * </p>
 * @param array $array2 <p>
 * The second array.
 * </p>
 * @param array $_ [optional]
 * @param callback $data_compare_func <p>
 * For comparison is used the user supplied callback function.
 * It must return an integer less than, equal
 * to, or greater than zero if the first argument is considered to
 * be respectively less than, equal to, or greater than the
 * second.
 * </p>
 * @param callback $key_compare_func <p>
 * Key comparison callback function.
 * </p>
 * @return array an array containing all the values of
 * array1 that are present in all the arguments.
 * @since 5.0
 */
function array_uintersect_uassoc(array $array1, array $array2, array $_ = null, $data_compare_func, $key_compare_func) { }
```

```PHP
<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
/**
 * Array
 * (
 *     [a] => green
 *     [b] => brown
 * )
 */
print_r(array_uintersect_uassoc($array1, $array2, "strcasecmp", "strcasecmp"));
```
----------------------------------

#### array_intersect_uassoc — Computes the intersection of arrays with additional index check, compares indexes by a callback function

http://php.net/manual/en/function.array-intersect-uassoc.php

```PHP
<?php
/**
 * Computes the intersection of arrays with additional index check, compares indexes by a callback function
 * @link http://php.net/manual/en/function.array-intersect-uassoc.php
 * @param array $array1 <p>
 * Initial array for comparison of the arrays.
 * </p>
 * @param array $array2 <p>
 * First array to compare keys against.
 * </p>
 * @param array $_ [optional]
 * @param callback $key_compare_func <p>
 * User supplied callback function to do the comparison.
 * </p>
 * @return array the values of array1 whose values exist
 * in all of the arguments.
 * @since 5.0
 */
function array_intersect_uassoc(array $array1, array $array2, array $_ = null, $key_compare_func) { }
```

```PHP
<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
/**
 * Array
 * (
 *     [b] => brown
 * )
 */
print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
```
--------------------

#### array_intersect_key — Computes the intersection of arrays using keys for comparison

http://php.net/manual/en/function.array-intersect-key.php

```PHP
<?php
/**
 * Computes the intersection of arrays using keys for comparison
 * @link http://php.net/manual/en/function.array-intersect-key.php
 * @param array $array1 <p>
 * The array with master keys to check.
 * </p>
 * @param array $array2 <p>
 * An array to compare keys against.
 * </p>
 * @param array $_ [optional]
 * @return array an associative array containing all the entries of
 * array1 which have keys that are present in all
 * arguments.
 * @since 5.1.0
 */
function array_intersect_key(array $array1, array $array2, array $_ = null) { }
```

```PHP
<?php

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
/**
 * array(2) {
 *   ["blue"]=>
 *   int(1)
 *   ["green"]=>
 *   int(3)
 * }
 */
var_dump(array_intersect_key($array1, $array2));

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, '1'=>0);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8,1=>2);
/**
 * array(3) {
 * ["blue"]=>
 * int(1)
 * ["green"]=>
 * int(3)
 * [1]=>
 * int(0)
 * }
 */
var_dump(array_intersect_key($array1, $array2));
```
----------------------

#### array_udiff — Computes the difference of arrays by using a callback function for data comparison

http://php.net/manual/en/function.array-udiff.php

```PHP
<?php
/**
 * Computes the difference of arrays by using a callback function for data comparison
 * @link http://php.net/manual/en/function.array-udiff.php
 * @param array $array1 <p>
 * The first array.
 * </p>
 * @param array $array2 <p>
 * The second array.
 * </p>
 * @param array $_ [optional]
 * @param callback $data_compare_func <p>
 * The callback comparison function.
 * </p>
 * <p>
 * The user supplied callback function is used for comparison.
 * It must return an integer less than, equal to, or greater than zero if
 * the first argument is considered to be respectively less than, equal
 * to, or greater than the second.
 * </p>
 * @return array an array containing all the values of array1
 * that are not present in any of the other arguments.
 * @since 5.0
 */
function array_udiff(array $array1, array $array2, array $_ = null, $data_compare_func) { }
```

```PHP
<?php
// Arrays to compare
$array1 = array(new stdclass, new stdclass,
                new stdclass, new stdclass,
               );

$array2 = array(
                new stdclass, new stdclass,
               );

// Set some properties for each object
$array1[0]->width = 11; $array1[0]->height = 3;
$array1[1]->width = 7;  $array1[1]->height = 1;
$array1[2]->width = 2;  $array1[2]->height = 9;
$array1[3]->width = 5;  $array1[3]->height = 7;

$array2[0]->width = 7;  $array2[0]->height = 5;
$array2[1]->width = 9;  $array2[1]->height = 2;

function compare_by_area($a, $b) {
    $areaA = $a->width * $a->height;
    $areaB = $b->width * $b->height;
    
    if ($areaA < $areaB) {
        return -1;
    } elseif ($areaA > $areaB) {
        return 1;
    } else {
        return 0;
    }
}
/**
 * Array
 * (
 *     [0] => stdClass Object
 *         (
 *             [width] => 11
 *             [height] => 3
 *         ) 
 *     [1] => stdClass Object
 *         (
 *             [width] => 7
 *             [height] => 1
 *         ) 
 * )
 */
print_r(array_udiff($array1, $array2, 'compare_by_area'));
```
------------------------

#### array_diff_uassoc — Computes the difference of arrays with additional index check which is performed by a user supplied callback function

http://php.net/manual/en/function.array-diff-uassoc.php


```PHP
<?php
/**
 * Computes the difference of arrays with additional index check which is performed by a user supplied callback function
 * @link http://php.net/manual/en/function.array-diff-uassoc.php
 * @param array $array1 <p>
 * The array to compare from
 * </p>
 * @param array $array2 <p>
 * An array to compare against
 * </p>
 * @param array $_ [optional]
 * @param callback $key_compare_func <p>
 * callback function to use.
 * The callback function must return an integer less than, equal
 * to, or greater than zero if the first argument is considered to
 * be respectively less than, equal to, or greater than the second.
 * </p>
 * @return array an array containing all the entries from
 * array1 that are not present in any of the other arrays.
 * @since 5.0
 */
function array_diff_uassoc(array $array1, array $array2, array $_ = null, $key_compare_func) { }
```

----------------

#### array_udiff_assoc — Computes the difference of arrays with additional index check, compares data by a callback function

http://php.net/manual/en/function.array-udiff-assoc.php

```PHP
<?php
/**
 * Computes the difference of arrays with additional index check, compares data by a callback function
 * @link http://php.net/manual/en/function.array-udiff-assoc.php
 * @param array $array1 <p>
 * The first array.
 * </p>
 * @param array $array2 <p>
 * The second array.
 * </p>
 * @param array $_ [optional]
 * @param callback $data_compare_func <p>
 * The callback comparison function.
 * </p>
 * <p>
 * The user supplied callback function is used for comparison.
 * It must return an integer less than, equal to, or greater than zero if
 * the first argument is considered to be respectively less than, equal
 * to, or greater than the second.
 * </p>
 * @return array array_udiff_assoc returns an array
 * containing all the values from array1
 * that are not present in any of the other arguments.
 * Note that the keys are used in the comparison unlike
 * array_diff and array_udiff.
 * The comparison of arrays' data is performed by using an user-supplied
 * callback. In this aspect the behaviour is opposite to the behaviour of
 * array_diff_assoc which uses internal function for
 * comparison.
 * @since 5.0
 */
function array_udiff_assoc(array $array1, array $array2, array $_ = null, $data_compare_func) { }
```

-----------------------------

#### array_udiff_uassoc — Computes the difference of arrays with additional index check, compares data and indexes by a callback function

http://php.net/manual/en/function.array-udiff-uassoc.php

```PHP
<?php
/**
 * Computes the difference of arrays with additional index check, compares data and indexes by a callback function
 * @link http://php.net/manual/en/function.array-udiff-uassoc.php
 * @param array $array1 <p>
 * The first array.
 * </p>
 * @param array $array2 <p>
 * The second array.
 * </p>
 * @param array $_ [optional]
 * @param callback $data_compare_func <p>
 * The callback comparison function.
 * </p>
 * <p>
 * The user supplied callback function is used for comparison.
 * It must return an integer less than, equal to, or greater than zero if
 * the first argument is considered to be respectively less than, equal
 * to, or greater than the second.
 * </p>
 * <p>
 * The comparison of arrays' data is performed by using an user-supplied
 * callback : data_compare_func. In this aspect
 * the behaviour is opposite to the behaviour of
 * array_diff_assoc which uses internal function for
 * comparison.
 * </p>
 * @param callback $key_compare_func <p>
 * The comparison of keys (indices) is done also by the callback function
 * key_compare_func. This behaviour is unlike what
 * array_udiff_assoc does, since the latter compares
 * the indices by using an internal function.
 * </p>
 * @return array an array containing all the values from
 * array1 that are not present in any of the other
 * arguments.
 * @since 5.0
 */
function array_udiff_uassoc(array $array1, array $array2, array $_ = null, $data_compare_func, $key_compare_func) { }
```
---------------------

#### array_diff_key — Computes the difference of arrays using keys for comparison

http://php.net/manual/en/function.array-diff-key.php

```PHP
<?php
/**
 * Computes the difference of arrays using keys for comparison
 * @link http://php.net/manual/en/function.array-diff-key.php
 * @param array $array1 <p>
 * The array to compare from
 * </p>
 * @param array $array2 <p>
 * An array to compare against
 * </p>
 * @param array $_ [optional]
 * @return array an array containing all the entries from
 * array1 whose keys are not present in any of the
 * other arrays.
 * @since 5.1.0
 */
function array_diff_key(array $array1, array $array2, array $_ = null) { }
```

```PHP
<?php
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);
/**
 * array(3) {
 *   ["blue"]=>
 *   int(1)
 *   ["red"]=>
 *   int(2)
 *   ["purple"]=>
 *   int(4)
 * }
 */
var_dump(array_diff_key($array1, $array2));
```
---------------------

#### array_diff_ukey — Computes the difference of arrays using a callback function on the keys for comparison

http://php.net/manual/en/function.array-diff-ukey.php

```PHP
<?php
/**
 * Computes the difference of arrays using a callback function on the keys for comparison
 * @link http://php.net/manual/en/function.array-diff-ukey.php
 * @param array $array1 <p>
 * The array to compare from
 * </p>
 * @param array $array2 <p>
 * An array to compare against
 * </p>
 * @param array $_ [optional]
 * @param callback $key_compare_func <p>
 * callback function to use.
 * The callback function must return an integer less than, equal
 * to, or greater than zero if the first argument is considered to
 * be respectively less than, equal to, or greater than the second.
 * </p>
 * @return array an array containing all the entries from
 * array1 that are not present in any of the other arrays.
 * @since 5.1.0
 */
function array_diff_ukey(array $array1, array $array2, array $_ = null, $key_compare_func) { }
```
-------------------

#### array_intersect_ukey — Computes the intersection of arrays using a callback function on the keys for comparison

http://php.net/manual/en/function.array-intersect-ukey.php

```PHP
<?php
/**
 * Computes the intersection of arrays using a callback function on the keys for comparison
 * @link http://php.net/manual/en/function.array-intersect-ukey.php
 * @param array $array1 <p>
 * Initial array for comparison of the arrays.
 * </p>
 * @param array $array2 <p>
 * First array to compare keys against.
 * </p>
 * @param array $_ [optional]
 * @param callback $key_compare_func <p>
 * User supplied callback function to do the comparison.
 * </p>
 * @return array the values of array1 whose keys exist
 * in all the arguments.
 * @since 5.1.0
 */
function array_intersect_ukey(array $array1, array $array2, array $_ = null, $key_compare_func) { }
```

----------

#### array_fill_keys — Fill an array with values, specifying keys

http://php.net/manual/en/function.array-fill-keys.php

<p>Fills an array with the value of the value parameter, using the values of the keys array as keys.</p>


```PHP
<?php
/**
 * Fill an array with values, specifying keys
 * @link http://php.net/manual/en/function.array-fill-keys.php
 * @param array $keys <p>
 * Array of values that will be used as keys. Illegal values
 * for key will be converted to string.
 * </p>
 * @param mixed $value <p>
 * Value to use for filling
 * </p>
 * @return array the filled array
 * @since 5.2.0
 */
function array_fill_keys (array $keys, $value) {}
```

```PHP
<?php
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
/**
 * Array
 * (
 * [foo] => banana
 * [5] => banana
 * [10] => banana
 * [bar] => banana
 * )
 */
print_r($a);


$b = array_fill_keys($keys,[1,2]);
/**
 * Array
 * (
 * [foo] => Array
 * (
 * [0] => 1
 * [1] => 2
 * )
 *
 * [5] => Array
 * (
 * [0] => 1
 * [1] => 2
 * )
 *
 * [10] => Array
 * (
 * [0] => 1
 * [1] => 2
 * )
 *
 * [bar] => Array
 * (
 * [0] => 1
 * [1] => 2
 * )
 * )
 */
print_r($b);
```
---------------

#### array_fill — Fill an array with values

http://php.net/manual/en/function.array-fill.php

```PHP
<?php
/**
 * Fill an array with values
 * @link http://php.net/manual/en/function.array-fill.php
 * @param int $start_index <p>
 * The first index of the returned array.
 * Supports non-negative indexes only.
 * </p>
 * @param int $num <p>
 * Number of elements to insert
 * </p>
 * @param mixed $value <p>
 * Value to use for filling
 * </p>
 * @return array the filled array
 * @since 4.2.0
 * @since 5.0
 */
function array_fill ($start_index, $num, $value) {}
```

```PHP
<?php
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
/**
 * Array
 * (
 *     [5]  => banana
 *     [6]  => banana
 *     [7]  => banana
 *     [8]  => banana
 *     [9]  => banana
 *     [10] => banana
 * )
 */
print_r($a);
/**
 * Array
 * (
 *     [-2] => pear
 *     [0] => pear
 *     [1] => pear
 *     [2] => pear
 * )
 */
print_r($b);
```

----------------------

#### range — Create an array containing a range of elements

http://php.net/manual/en/function.range.php


```PHP
<?php
/**
 * Create an array containing a range of elements
 * @link http://php.net/manual/en/function.range.php
 * @param mixed $low <p>
 * Low value.
 * </p>
 * @param mixed $high <p>
 * High value.
 * </p>
 * @param number $step [optional] <p>
 * If a step value is given, it will be used as the
 * increment between elements in the sequence. step
 * should be given as a positive number. If not specified,
 * step will default to 1.
 * </p>
 * @return array an array of elements from low to
 * high, inclusive. If low > high, the sequence will
 * be from high to low.
 * @since 4.0
 * @since 5.0
 */
function range ($low, $high, $step = null) {}
```

```PHP
<?php
// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
foreach (range(0, 12) as $number) {
    echo $number;
}

// The step parameter
// array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
foreach (range(0, 100, 10) as $number) {
    echo $number;
}

// Usage of character sequences
// array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
foreach (range('a', 'i') as $letter) {
    echo $letter;
}
// array('c', 'b', 'a');
foreach (range('c', 'a') as $letter) {
    echo $letter;
}
```

-----------------------------

#### array_filter — Filters elements of an array using a callback function

http://php.net/manual/en/function.array-filter.php

```PHP
<?php
/**
 * Iterates over each value in the <b>array</b>
 * passing them to the <b>callback</b> function.
 * If the <b>callback</b> function returns true, the
 * current value from <b>array</b> is returned into
 * the result array. Array keys are preserved.
 * @link http://php.net/manual/en/function.array-filter.php
 * @param array $input <p>
 * The array to iterate over
 * </p>
 * @param callback $callback [optional] <p>
 * The callback function to use
 * </p>
 * <p>
 * If no callback is supplied, all entries of
 * input equal to false (see
 * converting to
 * boolean) will be removed.
 * </p>
 * @param int $flag [optional] <p>
 * Flag determining what arguments are sent to <i>callback</i>:
 * </p><ul>
 * <li>
 * <b>ARRAY_FILTER_USE_KEY</b> - pass key as the only argument
 * to <i>callback</i> instead of the value</span>
 * </li>
 * <li>
 * <b>ARRAY_FILTER_USE_BOTH</b> - pass both value and key as
 * arguments to <i>callback</i> instead of the value</span>
 * </li>
 * </ul>
 * @return array the filtered array.
 * @since 4.0.6
 * @since 5.0
 */
function array_filter(array $input, $callback = null, $flag = 0) { }
```

----------------------
#### array_map — Applies the callback to the elements of the given arrays

http://php.net/manual/en/function.array-map.php

```PHP
<?php
/**
 * Applies the callback to the elements of the given arrays
 * @link http://php.net/manual/en/function.array-map.php
 * @param callback $callback <p>
 * Callback function to run for each element in each array.
 * </p>
 * @param array $arr1 <p>
 * An array to run through the callback function.
 * </p>
 * @param array $_ [optional]
 * @return array an array containing all the elements of arr1
 * after applying the callback function to each one.
 * @since 4.0.6
 * @since 5.0
 */
function array_map($callback, array $arr1, array $_ = null) { }
```

--------------------------

#### array_reduce — Iteratively reduce the array to a single value using a callback function

http://php.net/manual/en/function.array-reduce.php

```PHP
<?php
/**
 * Iteratively reduce the array to a single value using a callback function
 * @link http://php.net/manual/en/function.array-reduce.php
 * @param array $input <p>
 * The input array.
 * </p>
 * @param callback $function <p>
 * The callback function.
 * </p>
 * @param mixed $initial [optional] <p>
 * If the optional initial is available, it will
 * be used at the beginning of the process, or as a final result in case
 * the array is empty.
 * </p>
 * @return mixed the resulting value.
 * </p>
 * <p>
 * If the array is empty and initial is not passed,
 * array_reduce returns &null;.
 * @since 4.0.5
 * @since 5.0
 */
function array_reduce(array $input, $function, $initial = null) { }
```
-----------------------

#### array_unique — Removes duplicate values from an array
http://php.net/manual/en/function.array-unique.php

```PHP
<?php
/**
 * Removes duplicate values from an array
 * @link http://php.net/manual/en/function.array-unique.php
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
 * @return array the filtered array.
 * @since 4.0.1
 * @since 5.0
 */
function array_unique(array $array, $sort_flags = null) { }
```
----------------

#### array_flip — Exchanges all keys with their associated values in an array

http://php.net/manual/en/function.array-flip.php

```PHP
<?php
/**
 * Exchanges all keys with their associated values in an array
 * @link http://php.net/manual/en/function.array-flip.php
 * @param array $trans <p>
 * An array of key/value pairs to be flipped.
 * </p>
 * @return array|bool the flipped array on success and false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_flip(array $trans) { }
```
-------------


#### array_values — Return all the values of an array
http://php.net/manual/en/function.array-values.php


```PHP
<?php
/**
 * Return all the values of an array
 * @link http://php.net/manual/en/function.array-values.php
 * @param array $input <p>
 * The array.
 * </p>
 * @return array an indexed array of values.
 * @since 4.0
 * @since 5.0
 */
function array_values(array $input) { }
```
--------------------

#### array_keys — Return all the keys or a subset of the keys of an array
http://php.net/manual/en/function.array-keys.php

```PHP
<?php
/**
 * Return all the keys of an array
 * @link http://php.net/manual/en/function.array-keys.php
 * @param array $input <p>
 * An array containing keys to return.
 * </p>
 * @param mixed $search_value [optional] <p>
 * If specified, then only keys containing these values are returned.
 * </p>
 * @param bool $strict [optional] <p>
 * Determines if strict comparison (===) should be used during the search.
 * </p>
 * @return array an array of all the keys in input.
 * @since 4.0
 * @since 5.0
 */
function array_keys(array $input, $search_value = null, $strict = null) { }
```

---------------------

#### array_key_exists — Checks if the given key or index exists in the array
http://php.net/manual/en/function.array-key-exists.php

```PHP
<?php
/**
 * Checks if the given key or index exists in the array
 * @link http://php.net/manual/en/function.array-key-exists.php
 * @param mixed $key <p>
 * Value to check.
 * </p>
 * @param array|ArrayObject $search <p>
 * An array with keys to check.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0.7
 * @since 5.0
 */
function array_key_exists($key, array $search) { }
```

---------------------------

#### in_array — Checks if a value exists in an array
http://php.net/manual/en/function.in-array.php

```PHP
<?php
/**
 * Checks if a value exists in an array
 * @link http://php.net/manual/en/function.in-array.php
 * @param mixed $needle <p>
 * The searched value.
 * </p>
 * <p>
 * If needle is a string, the comparison is done
 * in a case-sensitive manner.
 * </p>
 * @param array $haystack <p>
 * The array.
 * </p>
 * @param bool $strict [optional] <p>
 * If the third parameter strict is set to true
 * then the in_array function will also check the
 * types of the
 * needle in the haystack.
 * </p>
 * @return bool true if needle is found in the array,
 * false otherwise.
 * @since 4.0
 * @since 5.0
 */
function in_array ($needle, array $haystack, $strict = false) {}
```
-----------------

#### array_search — Searches the array for a given value and returns the first corresponding key if successful
http://php.net/manual/en/function.array-search.php

```PHP
<?php
/**
 * Searches the array for a given value and returns the corresponding key if successful
 * @link http://php.net/manual/en/function.array-search.php
 * @param mixed $needle <p>
 * The searched value.
 * </p>
 * <p>
 * If needle is a string, the comparison is done
 * in a case-sensitive manner.
 * </p>
 * @param array $haystack <p>
 * The array.
 * </p>
 * @param bool $strict [optional] <p>
 * If the third parameter strict is set to true
 * then the array_search function will also check the
 * types of the
 * needle in the haystack.
 * </p>
 * @return int|string|false the key for needle if it is found in the
 * array, false otherwise.
 * </p>
 * <p>
 * If needle is found in haystack
 * more than once, the first matching key is returned. To return the keys for
 * all matching values, use array_keys with the optional
 * search_value parameter instead.
 * @since 4.0.5
 * @since 5.0
 */
function array_search ($needle, array $haystack, $strict = null) {}
```
-----------------------

array_merge_recursive — Merge two or more arrays recursively
array_merge — Merge one or more arrays
array_multisort — Sort multiple or multi-dimensional arrays
array_pad — Pad array to the specified length with a value
array_pop — Pop the element off the end of array
array_product — Calculate the product of values in an array
array_push — Push one or more elements onto the end of array
array_rand — Pick one or more random entries out of an array
array_replace_recursive — Replaces elements from passed arrays into the first array recursively
array_replace — Replaces elements from passed arrays into the first array
array_reverse — Return an array with elements in reverse order
array_shift — Shift an element off the beginning of array
array_slice — Extract a slice of the array
array_splice — Remove a portion of the array and replace it with something else
array_sum — Calculate the sum of values in an array
array_unshift — Prepend one or more elements to the beginning of an array
array_walk_recursive — Apply a user function recursively to every member of an array
array_walk — Apply a user supplied function to every member of an array
array — Create an array
arsort — Sort an array in reverse order and maintain index association
asort — Sort an array and maintain index association
compact — Create array containing variables and their values
count — Count all elements in an array, or something in an object
current — Return the current element in an array
each — Return the current key and value pair from an array and advance the array cursor
end — Set the internal pointer of an array to its last element
extract — Import variables into the current symbol table from an array
key_exists — Alias of array_key_exists
key — Fetch a key from an array
krsort — Sort an array by key in reverse order
ksort — Sort an array by key
list — Assign variables as if they were an array
natcasesort — Sort an array using a case insensitive "natural order" algorithm
natsort — Sort an array using a "natural order" algorithm
next — Advance the internal pointer of an array
pos — Alias of current
prev — Rewind the internal array pointer
reset — Set the internal pointer of an array to its first element
rsort — Sort an array in reverse order
sizeof — Alias of count
sort — Sort an array
uasort — Sort an array with a user-defined comparison function and maintain index association
uksort — Sort an array by keys using a user-defined comparison function
usort — Sort an array by values using a user-defined comparison function