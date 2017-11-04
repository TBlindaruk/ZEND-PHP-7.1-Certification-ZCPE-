### PCRE Functions

http://php.net/manual/en/ref.pcre.php

------------------
#### preg_filter — Perform a regular expression search and replace
http://php.net/manual/en/function.preg-filter.php

<strong>preg_filter() is identical to preg_replace() except it only returns the (possibly transformed) subjects where there was a match. For details about how this function works, read the preg_replace() documentation.</strong>


----------
#### preg_grep — Return array entries that match the pattern
http://php.net/manual/en/function.preg-grep.php

```PHP
<?php 
/**
 * Return array entries that match the pattern
 * @link http://php.net/manual/en/function.preg-grep.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param array $input <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * If set to <b>PREG_GREP_INVERT</b>, this function returns
 * the elements of the input array that do not match
 * the given <i>pattern</i>.
 * </p>
 * @return array an array indexed using the keys from the
 * <i>input</i> array.
 * @since 4.0
 * @since 5.0
 */
function preg_grep ($pattern, array $input, $flags = 0) {}
```

```PHP
<?php
$array = ['0.123','23123','.01','sadasd.a',"0."];

// return all array elements
// containing floating point numbers
$fl_array = preg_grep("/^(\d+)?\.\d+$/", $array);

var_dump($fl_array); // "0.123","0.01"
```
--------------------
#### preg_quote — Quote regular expression characters
http://php.net/manual/en/function.preg-quote.php

```PHP
<?php
/**
 * Quote regular expression characters
 * @link http://php.net/manual/en/function.preg-quote.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $delimiter [optional] <p>
 * If the optional <i>delimiter</i> is specified, it
 * will also be escaped. This is useful for escaping the delimiter
 * that is required by the PCRE functions. The / is the most commonly
 * used delimiter.
 * </p>
 * @return string the quoted (escaped) string.
 * @since 4.0
 * @since 5.0
 */
function preg_quote ($str, $delimiter = null) {}
```

```PHP
<?php
$keywords = '$40 for ][ ^ a g3/400';
$keywords = preg_quote($keywords, '/');
echo $keywords . PHP_EOL; // \$40 for \]\[ \^ a g3\/400

```

-------------------------
#### preg_last_error — Returns the error code of the last PCRE regex execution
http://php.net/manual/en/function.preg-last-error.php

```PHP
<?php
/**
 * Returns the error code of the last PCRE regex execution
 * @link http://php.net/manual/en/function.preg-last-error.php
 * @return int one of the following constants (explained on their own page):
 * <b>PREG_NO_ERROR</b>
 * <b>PREG_INTERNAL_ERROR</b>
 * <b>PREG_BACKTRACK_LIMIT_ERROR</b> (see also pcre.backtrack_limit)
 * <b>PREG_RECURSION_LIMIT_ERROR</b> (see also pcre.recursion_limit)
 * <b>PREG_BAD_UTF8_ERROR</b>
 * <b>PREG_BAD_UTF8_OFFSET_ERROR</b> (since PHP 5.3.0)
 * @since 5.2.0
 */
function preg_last_error () {}
```

```PHP
<?php

preg_match('/(?:\D+|<\d+>)*[!?]/', 'foobar foobar foobar',$result);

if (preg_last_error() == PREG_BACKTRACK_LIMIT_ERROR) {
    print 'Backtrack limit was exhausted!' . PHP_EOL;
}
```
-------------
#### preg_match_all — Perform a global regular expression match

-------------------------
#### preg_match — Perform a regular expression match
#### preg_replace_callback_array — Perform a regular expression search and replace using callbacks
#### preg_replace_callback — Perform a regular expression search and replace using a callback
#### preg_replace — Perform a regular expression search and replace
#### preg_split — Split string by a regular expression
