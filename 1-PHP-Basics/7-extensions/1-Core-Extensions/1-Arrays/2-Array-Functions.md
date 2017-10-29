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

#### array_merge_recursive — Merge two or more arrays recursively

http://ua2.php.net/manual/en/function.array-merge-recursive.php

<p>If the input arrays have the same string keys, then the values for these keys are merged together into an array, and this is done recursively, so that if one of the values is an array itself, the function will merge it with a corresponding entry in another array too. If, however, the arrays have the same numeric key, the later value will not overwrite the original value, but will be appended.</p>


```PHP
<?php
/**
 * Merge two or more arrays recursively
 * @link http://php.net/manual/en/function.array-merge-recursive.php
 * @param array $array1 <p>
 * Initial array to merge.
 * </p>
 * @param array $_ [optional]
 * @return array An array of values resulted from merging the arguments together.
 * @since 4.0.1
 * @since 5.0
 */
function array_merge_recursive(array $array1, array $_ = null) { }
```

```PHP
<?php

$array1 = [1,2,3,4,5];
$array2 = [6,7,8,9,10];

$result = array_merge_recursive($array1,$array2);

/**
 * array(10) {
 * [0]=>
 * int(1)
 * [1]=>
 * int(2)
 * [2]=>
 * int(3)
 * [3]=>
 * int(4)
 * [4]=>
 * int(5)
 * [5]=>
 * int(6)
 * [6]=>
 * int(7)
 * [7]=>
 * int(8)
 * [8]=>
 * int(9)
 * [9]=>
 * int(10)
 * }
 */
var_dump($result);

######################################

$array1 = ['color'=>1,2];
$array2 = [1,'color'=>2];
$result = array_merge_recursive($array1,$array2);
/**
 * array(3) {
 * ["color"]=>
 * array(2) {
 * [0]=>
 * int(1)
 * [1]=>
 * int(2)
 * }
 * [0]=>
 * int(2)
 * [1]=>
 * int(1)
 * }
 */
var_dump($result);

##############################

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
/**
 * Array
 * (
 * [color] => Array
 * (
 * [favorite] => Array
 * (
 * [0] => red
 * [1] => green
 * ) 
 * 
 * [0] => blue
 * )
 * 
 * [0] => 5
 * [1] => 10
 * )
 */
print_r($result);
```

---------------------------------------

#### array_merge — Merge one or more arrays

http://ua2.php.net/manual/en/function.array-merge.php

```PHP
<?php
/**
 * Merge one or more arrays
 * @link http://php.net/manual/en/function.array-merge.php
 * @param array $array1 <p>
 * Initial array to merge.
 * </p>
 * @param array $array2 [optional] 
 * @param array $_ [optional] 
 * @return array the resulting array.
 * @since 4.0
 * @since 5.0
 */
function array_merge (array $array1, array $array2 = null, array $_ = null) {}
```

```PHP
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
/**
 * Array
 * (
 *     [color] => green
 *     [0] => 2
 *     [1] => 4
 *     [2] => a
 *     [3] => b
 *     [shape] => trapezoid
 *     [4] => 4
 * )
 */
print_r($result);
```

<p>If you want to append array elements from the second array to the first array while not overwriting the elements from the first array and not re-indexing, use the + array union operator:</p>

```PHP
<?php
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
/**
 * array(5) {
 *   [0]=>
 *   string(6) "zero_a"
 *   [2]=>
 *   string(5) "two_a"
 *   [3]=>
 *   string(7) "three_a"
 *   [1]=>
 *   string(5) "one_b"
 *   [4]=>
 *   string(6) "four_b"
 * }
 */
var_dump($result);
```

--------------------------

#### array_replace — Replaces elements from passed arrays into the first array

http://ua2.php.net/manual/en/function.array-replace.php

```PHP
<?php
/**
 * array_replace() replaces the values of the first array with the same values from all the following arrays.
 * If a key from the first array exists in the second array, its value will be replaced by the value from the second array.
 * If the key exists in the second array, and not the first, it will be created in the first array.
 * If a key only exists in the first array, it will be left as is. If several arrays are passed for replacement,
 * they will be processed in order, the later arrays overwriting the previous values.
 * array_replace() is not recursive : it will replace values in the first array by whatever type is in the second array.
 * @link http://php.net/manual/en/function.array-replace.php
 * @param array $array <p>
 * The array in which elements are replaced.
 * </p>
 * @param array $array1 <p>
 * The array from which elements will be extracted.
 * </p>
 * @param array $array2 [optional]
 * @param array $_ [optional]
 * @return array or null if an error occurs.
 * @since 5.3.0
 */
function array_replace(array $array, array $array1, array $array2 = null, array $_ = null) { }
```

```PHP
<?php
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");
$basket = array_replace($base, $replacements, $replacements2);
/**
 * Array
 * (
 *     [0] => grape
 *     [1] => banana
 *     [2] => apple
 *     [3] => raspberry
 *     [4] => cherry
 * )
 */
print_r($basket);
```

--------------------------------------

#### array_replace_recursive — Replaces elements from passed arrays into the first array recursively

http://ua2.php.net/manual/en/function.array-replace-recursive.php

```PHP
<?php
/**
 * array_replace() replaces the values of the first array with the same values from all the following arrays.
 * If a key from the first array exists in the second array, its value will be replaced by the value from the second array.
 * If the key exists in the second array, and not the first, it will be created in the first array.
 * If a key only exists in the first array, it will be left as is. If several arrays are passed for replacement,
 * they will be processed in order, the later arrays overwriting the previous values.
 * array_replace() is not recursive : it will replace values in the first array by whatever type is in the second array.
 * @link http://php.net/manual/en/function.array-replace.php
 * @param array $array <p>
 * The array in which elements are replaced.
 * </p>
 * @param array $array1 <p>
 * The array from which elements will be extracted.
 * </p>
 * @param array $array2 [optional]
 * @param array $_ [optional]
 * @return array or null if an error occurs.
 * @since 5.3.0
 */
function array_replace(array $array, array $array1, array $array2 = null, array $_ = null) { }
```

```PHP
<?php
$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
/**
 * Array
 * (
 *     [citrus] => Array
 *         (
 *             [0] => pineapple
 *         )
 * 
 *     [berries] => Array
 *         (
 *             [0] => blueberry
 *             [1] => raspberry
 *         )
 * 
 * )
 */
print_r($basket);

$basket = array_replace($base, $replacements);
/**
 * Array
 * (
 *     [citrus] => Array
 *         (
 *             [0] => pineapple
 *         )
 * 
 *    [berries] => Array
 *         (
 *             [0] => blueberry
 *         )
 * 
 * )
 */
print_r($basket);
```

-----------------------------------
#### array_pad — Pad array to the specified length with a value

http://ua2.php.net/manual/en/function.array-pad.php

```PHP
<?php
/**
 * Pad array to the specified length with a value
 * @link http://php.net/manual/en/function.array-pad.php
 * @param array $input <p>
 * Initial array of values to pad.
 * </p>
 * @param int $pad_size <p>
 * New size of the array.
 * </p>
 * @param mixed $pad_value <p>
 * Value to pad if input is less than
 * pad_size.
 * </p>
 * @return array a copy of the input padded to size specified
 * by pad_size with value
 * pad_value. If pad_size is
 * positive then the array is padded on the right, if it's negative then
 * on the left. If the absolute value of pad_size is less than or equal to
 * the length of the input then no padding takes place.
 * @since 4.0
 * @since 5.0
 */
function array_pad(array $input, $pad_size, $pad_value) { }
```

```PHP
<?php
$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
var_dump($result); // result is array(12, 10, 9, 0, 0)

$result = array_pad($input, -7, -1);
var_dump($result); // result is array(-1, -1, -1, -1, 12, 10, 9)

$result = array_pad($input, 2, "noop");
var_dump($result); // result is array(12, 10, 9)
```
--------------------------------

#### array_pop — Pop the element off the end of array

http://ua2.php.net/manual/en/function.array-pop.php

```PHP
<?php
/**
 * Pop the element off the end of array
 * @link http://php.net/manual/en/function.array-pop.php
 * @param array $array <p>
 * The array to get the value from.
 * </p>
 * @return mixed the last value of array.
 * If array is empty (or is not an array),
 * &null; will be returned.
 * @since 4.0
 * @since 5.0
 */
function array_pop (array &$array) {}
```

```PHP
<?php
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
/**
 * Array
 * (
 *     [0] => orange
 *     [1] => banana
 *     [2] => apple
 * )
 */
print_r($stack);
```

-------------------------------
#### array_push — Push one or more elements onto the end of array

http://ua2.php.net/manual/en/function.array-push.php

<strong>Has the same effect as:</strong>
```PHP
<?php
$array[] = $var;
?>
```

```PHP
<?php
/**
 * Push one or more elements onto the end of array
 * @link http://php.net/manual/en/function.array-push.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param mixed $var <p>
 * The pushed value.
 * </p>
 * @param mixed $_ [optional] 
 * @return int the new number of elements in the array.
 * @since 4.0
 * @since 5.0
 */
function array_push (array &$array, $var, $_ = null) {}
```

```PHP
<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
/**
 * Array
 *  (
 *      [0] => orange
 *      [1] => banana
 *      [2] => apple
 *      [3] => raspberry
 *  )
 */
print_r($stack);
```
-------------------------------------

#### array_shift — Shift an element off the beginning of array
http://ua2.php.net/manual/en/function.array-shift.php

```PHP
<?php
/**
 * Shift an element off the beginning of array
 * @link http://php.net/manual/en/function.array-shift.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @return mixed the shifted value, or &null; if array is
 * empty or is not an array.
 * @since 4.0
 * @since 5.0
 */
function array_shift (array &$array) {}
```

```PHP
<?php
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
/**
 * Array
 * (
 *     [0] => banana
 *     [1] => apple
 *     [2] => raspberry
 * )
 */
print_r($stack);
```

------------------------

#### array_unshift — Prepend one or more elements to the beginning of an array

http://ua2.php.net/manual/en/function.array-unshift.php

```PHP

<?php
/**
 * Prepend one or more elements to the beginning of an array
 * @link http://php.net/manual/en/function.array-unshift.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param mixed $var <p>
 * The prepended variable.
 * </p>
 * @param mixed $_ [optional] 
 * @return int the new number of elements in the array.
 * @since 4.0
 * @since 5.0
 */
function array_unshift (array &$array, $var, $_ = null) {}
```

```PHP
<?php
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
/**
 * Array
 * (
 *     [0] => apple
 *     [1] => raspberry
 *     [2] => orange
 *     [3] => banana
 * )
 */
print_r($queue);
```

---------------------------------------

#### array_product — Calculate the product of values in an array

http://ua2.php.net/manual/en/function.array-product.php

```PHP
<?php
/**
 * Calculate the product of values in an array
 * @link http://php.net/manual/en/function.array-product.php
 * @param array $array <p>
 * The array.
 * </p>
 * @return int|float the product as an integer or float.
 * @since 5.1.0
 */
function array_product(array $array) { }
```

```PHP

<?php
var_dump(array_product(['a','b'])); // int (0)

var_dump(array_product(['a',2])); // int (0)

var_dump(array_product([1,2])); // int (2)

var_dump(array_product([])); // int (1)

```
-------------------

#### array_rand — Pick one or more random entries out of an array

http://ua2.php.net/manual/en/function.array-rand.php


```PHP
<?php
/**
 * Pick one or more random entries out of an array
 * @link http://php.net/manual/en/function.array-rand.php
 * @param array $input <p>
 * The input array.
 * </p>
 * @param int $num_req [optional] <p>
 * Specifies how many entries you want to pick.
 * </p>
 * @return mixed If you are picking only one entry, array_rand
 * returns the key for a random entry. Otherwise, it returns an array
 * of keys for the random entries. This is done so that you can pick
 * random keys as well as values out of the array.
 * @since 4.0
 * @since 5.0
 */
function array_rand(array $input, $num_req = null) { }
```
<strong>array_rand(): Second argument has to be between 1 and the number of elements in the array </strong>

```PHP
<?php

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n"; // Trinity - random
echo $input[$rand_keys[1]] . "\n"; // Tank - random

```

-----------------------

#### array_reverse — Return an array with elements in reverse order

http://ua2.php.net/manual/en/function.array-reverse.php

```PHP
<?php
/**
 * Return an array with elements in reverse order
 * @link http://php.net/manual/en/function.array-reverse.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * If set to true keys are preserved.
 * </p>
 * @return array the reversed array.
 * @since 4.0
 * @since 5.0
 */
function array_reverse(array $array, $preserve_keys = null) { }
```

<div class="refsect1 parameters" id="refsect1-function.array-reverse-parameters">
<h3 class="title">Parameters</h3>
<p class="para">
</p><dl>
 <dt>
<code class="parameter">array</code></dt>
 <dd>
  <p class="para">
   The input array.
  </p>
 </dd>
 <dt>
<code class="parameter">preserve_keys</code></dt>
 <dd>
  <p class="para">
   If set to <strong><code>TRUE</code></strong> numeric keys are preserved. 
   Non-numeric keys are not affected by this setting and will always be preserved.
  </p>
 </dd>
</dl>
<p></p>
</div>

```PHP
<?php
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);
/**
 * Array
 * (
 *     [0] => php
 *     [1] => 4
 *     [2] => Array
 *         (
 *             [0] => green
 *             [1] => red
 *         )
 * 
 * )
 */
print_r($input);
/**
 * Array
 * (
 *     [0] => Array
 *         (
 *             [0] => green
 *             [1] => red
 *         )
 * 
 *     [1] => 4
 *     [2] => php
 * )
 */
print_r($reversed);
/**
 * Array
 * (
 *     [2] => Array
 *         (
 *             [0] => green
 *             [1] => red
 *         )
 * 
 *     [1] => 4
 *     [0] => php
 * )
 */
print_r($preserved);
```

-----------------------------

#### array_slice — Extract a slice of the array
http://ua2.php.net/manual/en/function.array-slice.php


```PHP
<?php
/**
 * Extract a slice of the array
 * @link http://php.net/manual/en/function.array-slice.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $offset <p>
 * If offset is non-negative, the sequence will
 * start at that offset in the array. If
 * offset is negative, the sequence will
 * start that far from the end of the array.
 * </p>
 * @param int $length [optional] <p>
 * If length is given and is positive, then
 * the sequence will have that many elements in it. If
 * length is given and is negative then the
 * sequence will stop that many elements from the end of the
 * array. If it is omitted, then the sequence will have everything
 * from offset up until the end of the
 * array.
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * Note that array_slice will reorder and reset the
 * array indices by default. You can change this behaviour by setting
 * preserve_keys to true.
 * </p>
 * @return array the slice.
 * @since 4.0
 * @since 5.0
 */
function array_slice (array $array, $offset, $length = null, $preserve_keys = false) {}
```

```PHP
<?php
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

// note the differences in the array keys
/**
 * Array
 * (
 *     [0] => c
 *     [1] => d
 * )
 */
print_r(array_slice($input, 2, -1));
/**
 * Array
 * (
 *     [2] => c
 *     [3] => d
 * )
 */
print_r(array_slice($input, 2, -1, true));
```
--------------------------

#### array_splice — Remove a portion of the array and replace it with something else
http://ua2.php.net/manual/en/function.array-splice.php

```PHP
<?php
/**
 * Remove a portion of the array and replace it with something else
 * @link http://php.net/manual/en/function.array-splice.php
 * @param array $input <p>
 * The input array.
 * </p>
 * @param int $offset <p>
 * If offset is positive then the start of removed
 * portion is at that offset from the beginning of the
 * input array. If offset
 * is negative then it starts that far from the end of the
 * input array.
 * </p>
 * @param int $length [optional] <p>
 * If length is omitted, removes everything
 * from offset to the end of the array. If
 * length is specified and is positive, then
 * that many elements will be removed. If
 * length is specified and is negative then
 * the end of the removed portion will be that many elements from
 * the end of the array. Tip: to remove everything from
 * offset to the end of the array when
 * replacement is also specified, use
 * count($input) for
 * length.
 * </p>
 * @param mixed $replacement [optional] <p>
 * If replacement array is specified, then the
 * removed elements are replaced with elements from this array.
 * </p>
 * <p>
 * If offset and length
 * are such that nothing is removed, then the elements from the
 * replacement array are inserted in the place
 * specified by the offset. Note that keys in
 * replacement array are not preserved.
 * </p>
 * <p>
 * If replacement is just one element it is
 * not necessary to put array()
 * around it, unless the element is an array itself.
 * </p>
 * @return array the array consisting of the extracted elements.
 * @since 4.0
 * @since 5.0
 */
function array_splice (array &$input, $offset, $length = null, $replacement = null) {}
```


-------------------------------------

#### array_sum — Calculate the sum of values in an array
http://ua2.php.net/manual/en/function.array-sum.php

```PHP
<?php
/**
 * Calculate the sum of values in an array
 * @link http://php.net/manual/en/function.array-sum.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @return int|float the sum of values as an integer or float.
 * @since 4.0.4
 * @since 5.0
 */
function array_sum(array $array) { }
```

```PHP
<?php

var_dump(array_sum(['a',10])); // int(10)

var_dump(array_sum(['a',10,10.2])); // float(20.2)
```

-----------------------------

#### array_walk_recursive — Apply a user function recursively to every member of an array
http://ua2.php.net/manual/en/function.array-walk-recursive.php

```PHP
<?php
/**
 * Apply a user function recursively to every member of an array
 * @link http://php.net/manual/en/function.array-walk-recursive.php
 * @param array|ArrayObject $input <p>
 * The input array.
 * </p>
 * @param callback $funcname <p>
 * Typically, funcname takes on two parameters.
 * The input parameter's value being the first, and
 * the key/index second.
 * </p>
 * <p>
 * If funcname needs to be working with the
 * actual values of the array, specify the first parameter of
 * funcname as a
 * reference. Then,
 * any changes made to those elements will be made in the
 * original array itself.
 * </p>
 * @param mixed $userdata [optional] <p>
 * If the optional userdata parameter is supplied,
 * it will be passed as the third parameter to the callback
 * funcname.
 * </p>
 * @return bool true on success or false on failure.
 * @since 5.0
 */
function array_walk_recursive (array &$input, $funcname, $userdata = null) {}
```

```PHP
<?php
$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}
/**
 * a holds apple
 * b holds banana
 * sour holds lemon
 */
array_walk_recursive($fruits, 'test_print');
```
---------------------------

#### array_walk — Apply a user supplied function to every member of an array
http://ua2.php.net/manual/en/function.array-walk.php

```PHP
<?php
/**
 * Apply a user function to every member of an array
 * @link http://php.net/manual/en/function.array-walk.php
 * @param array|ArrayObject $array <p>
 * The input array.
 * </p>
 * @param callback $funcname <p>
 * Typically, funcname takes on two parameters.
 * The array parameter's value being the first, and
 * the key/index second.
 * </p>
 * <p>
 * If funcname needs to be working with the
 * actual values of the array, specify the first parameter of
 * funcname as a
 * reference. Then,
 * any changes made to those elements will be made in the
 * original array itself.
 * </p>
 * <p>
 * Users may not change the array itself from the
 * callback function. e.g. Add/delete elements, unset elements, etc. If
 * the array that array_walk is applied to is
 * changed, the behavior of this function is undefined, and unpredictable.
 * </p>
 * @param mixed $userdata [optional] <p>
 * If the optional userdata parameter is supplied,
 * it will be passed as the third parameter to the callback
 * funcname.
 * </p>
 * @return bool true on success or false on failure.
 * @since 4.0
 * @since 5.0
 */
function array_walk (array &$array, $funcname, $userdata = null) {}
```

------------------

#### list — Assign variables as if they were an array

http://ua2.php.net/manual/en/function.list.php

```PHP
<?php
    /**
     * Assigns a list of variables in one operation.
     * @link http://php.net/manual/en/function.list.php
     * @param mixed $var1 <p>A variable.</p>
     * @param mixed $_ [optional] <p>Another variable ...</p>
     * @return array the assigned array.
     */
    function PS_UNRESERVE_PREFIX_list($var1, ...$_){};
```

#### each — Return the current key and value pair from an array and advance the array cursor
http://ua2.php.net/manual/en/function.each.php

------------------------------

#### key — Fetch a key from an array
http://ua2.php.net/manual/en/function.key.php


```PHP
<?php
/**
 * Fetch a key from an array
 * @link http://php.net/manual/en/function.key.php
 * @param array|ArrayObject $array <p>
 * The array.
 * </p>
 * @return int|string|null The key function simply returns the
 * key of the array element that's currently being pointed to by the
 * internal pointer. It does not move the pointer in any way. If the
 * internal pointer points beyond the end of the elements list or the array is 
 * empty, key returns &null;.
 * @since 4.0
 * @since 5.0
 */
function key (array &$array) {}
```

```PHP
<?php
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// this cycle echoes all associative array
// key where value equals "apple"
/**
 * fruit1<br />
 * fruit4<br />
 * fruit5<br />
 * /
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}
```

---------------------------------------------------
#### current — Return the current element in an array
http://ua2.php.net/manual/en/function.current.php

```PHP
<?php
$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';
$mode = current($transport); // $mode = 'bike';
$mode = prev($transport);    // $mode = 'foot';
$mode = end($transport);     // $mode = 'plane';
$mode = current($transport); // $mode = 'plane';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }
```
-------------------------------------

#### end — Set the internal pointer of an array to its last element

http://ua2.php.net/manual/en/function.end.php

------------------------------------------------------

#### prev — Rewind the internal array pointer

http://ua2.php.net/manual/en/function.prev.php

--------------------------

#### next — Advance the internal pointer of an array
http://ua2.php.net/manual/en/function.next.php

----------------------------------

#### reset — Set the internal pointer of an array to its first element
http://ua2.php.net/manual/en/function.reset.php

--------------------------------

#### pos — Alias of current
http://ua2.php.net/manual/en/function.pos.php

------------

#### array — Create an array
http://ua2.php.net/manual/en/function.array.php

-------------------

#### compact — Create array containing variables and their values
http://ua2.php.net/manual/en/function.compact.php


```PHP
<?php
/**
 * Create array containing variables and their values
 * @link http://php.net/manual/en/function.compact.php
 * @param mixed $varname <p>
 * compact takes a variable number of parameters.
 * Each parameter can be either a string containing the name of the
 * variable, or an array of variable names. The array can contain other
 * arrays of variable names inside it; compact
 * handles it recursively.
 * </p>
 * @param mixed $_ [optional] 
 * @return array the output array with all the variables added to it.
 * @since 4.0
 * @since 5.0
 */
function compact ($varname, $_ = null) {}
```

```PHP
<?php
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
/**
 * Array
 * (
 *   [event] => SIGGRAPH
 *   [city] => San Francisco
 *   [state] => CA
 * )
 */
print_r($result);
```

---------------

#### extract — Import variables into the current symbol table from an array

http://ua2.php.net/manual/en/function.extract.php



```PHP
<?php
/**
 * Import variables into the current symbol table from an array
 * @link http://php.net/manual/en/function.extract.php
 * @param array $var_array<p>
 * Note that prefix is only required if
 * extract_type is EXTR_PREFIX_SAME,
 * EXTR_PREFIX_ALL, EXTR_PREFIX_INVALID
 * or EXTR_PREFIX_IF_EXISTS. If
 * the prefixed result is not a valid variable name, it is not
 * imported into the symbol table. Prefixes are automatically separated from
 * the array key by an underscore character.
 * </p>
 * @param int $extract_type [optional] <p>
 * The way invalid/numeric keys and collisions are treated is determined
 * by the extract_type. It can be one of the
 * following values:
 * EXTR_OVERWRITE
 * If there is a collision, overwrite the existing variable.
 * @param string $prefix [optional] Only overwrite the variable if it already exists in the
 * current symbol table, otherwise do nothing. This is useful
 * for defining a list of valid variables and then extracting
 * only those variables you have defined out of
 * $_REQUEST, for example.
 * @return int the number of variables successfully imported into the symbol
 * table.
 * @since 4.0
 * @since 5.0
 */
function extract (array $var_array, $extract_type = null, $prefix = null) {}
```

```PHP
<?php

/* Suppose that $var_array is an array returned from
   wddx_deserialize */

$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size\n"; // blue, large, sphere, medium
```

--------------------------------------------------------------

#### key_exists — Alias of array_key_exists
http://ua2.php.net/manual/en/function.key-exists.php

----------------

#### count — Count all elements in an array, or something in an object
http://ua2.php.net/manual/en/function.count.php

--------------

#### sizeof — Alias of count
http://ua2.php.net/manual/en/function.sizeof.php

------------------


