### String Functions 
http://php.net/manual/en/ref.strings.php

---------------------------
#### addcslashes — Quote string with slashes in a C style
http://php.net/manual/en/function.addcslashes.php

```PHP
<?php
/**
 * Quote string with slashes in a C style
 * @link http://php.net/manual/en/function.addcslashes.php
 * @param string $str <p>
 * The string to be escaped.
 * </p>
 * @param string $charlist <p>
 * A list of characters to be escaped. If
 * charlist contains characters
 * \n, \r etc., they are
 * converted in C-like style, while other non-alphanumeric characters
 * with ASCII codes lower than 32 and higher than 126 converted to
 * octal representation.
 * </p>
 * <p>
 * When you define a sequence of characters in the charlist argument
 * make sure that you know what characters come between the
 * characters that you set as the start and end of the range.
 * ]]>
 * Also, if the first character in a range has a higher ASCII value
 * than the second character in the range, no range will be
 * constructed. Only the start, end and period characters will be
 * escaped. Use the ord function to find the
 * ASCII value for a character.
 * ]]>
 * </p>
 * <p>
 * Be careful if you choose to escape characters 0, a, b, f, n, r,
 * t and v. They will be converted to \0, \a, \b, \f, \n, \r, \t
 * and \v.
 * In PHP \0 (NULL), \r (carriage return), \n (newline), \f (form feed),
 * \v (vertical tab) and \t (tab) are predefined escape sequences, 
 * while in C all of these are predefined escape sequences.
 * </p>
 * @return string the escaped string.
 * @since 4.0
 * @since 5.0
 */
function addcslashes ($str, $charlist) {}
```

```PHP
<?php

echo addcslashes('foo[ ]', 'A..z');
// output:  \f\o\o\[ \]
// All upper and lower-case letters will be escaped
// ... but so will the [\]^_`
```

```PHP
<?php
echo addcslashes("zoo['.']", 'z..A');
// output:  \zoo['\.'] ; PHP Warning:  addcslashes(): Invalid '..'-range, '..'-range needs to be incrementing in
```

```PHP
<?php
echo addcslashes("I`m",'I') . PHP_EOL;
// output:  \I\`\m ; PHP Warning
```

---------------------
#### stripcslashes — Un-quote string quoted with addcslashes
http://php.net/manual/en/function.stripcslashes.php

--------------------
#### addslashes — Quote string with slashes
http://php.net/manual/en/function.addslashes.php

<p>Quote string with slashes</p>

```PHP
<?php
/**
 * Quote string with slashes
 * @link http://php.net/manual/en/function.addslashes.php
 * @param string $str <p>
 * The string to be escaped.
 * </p>
 * @return string the escaped string.
 * @since 4.0
 * @since 5.0
 */
function addslashes ($str) {}
```

```PHP
<?php
$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);
```

---------------------
#### stripslashes — Un-quotes a quoted string
http://php.net/manual/en/function.stripslashes.php

```PHP
<?php
/**
 * Un-quotes a quoted string
 * @link http://php.net/manual/en/function.stripslashes.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string a string with backslashes stripped off.
 * (\' becomes ' and so on.)
 * Double backslashes (\\) are made into a single
 * backslash (\).
 * @since 4.0
 * @since 5.0
 */
function stripslashes ($str) {}
```

```PHP
<?php
$str = "Is your name O\'re\illy?";

// Outputs: Is your name O'reilly?
echo stripslashes($str) . PHP_EOL;
```

----------------
#### bin2hex — Convert binary data into hexadecimal representation
http://php.net/manual/en/function.bin2hex.php

<p>Convert binary data into hexadecimal representation</p>
<strong>This function is for converting binary data into a hexadecimal string representation.  This function is not for converting strings representing binary digits into hexadecimal</strong>

```PHP
<?php
/**
 * Convert binary data into hexadecimal representation
 * @link http://php.net/manual/en/function.bin2hex.php
 * @param string $str <p>
 * A character.
 * </p>
 * @return string the hexadecimal representation of the given string.
 * @since 4.0
 * @since 5.0
 */
function bin2hex ($str) {}
```

```PHP
<?php
echo bin2hex('0');//30
```

-------------------------
#### hex2bin — Decodes a hexadecimally encoded binary string
http://php.net/manual/en/function.hex2bin.php

<strong>Caution. This function does NOT convert a hexadecimal number to a binary number. This can be done using the base_convert() function.</strong>

```PHP
<?php

$hex = hex2bin("6578616d706c65206865782064617461");
var_dump($hex); //string(16) "example hex data"
```

------------------
#### chop — Alias of rtrim
http://php.net/manual/en/function.chop.php

```PHP
<?php
/**
 * &Alias; <function>rtrim</function>
 * @see rtrim()
 * @link http://php.net/manual/en/function.chop.php
 * @param string $str The input string.
 * @param string $character_mask [optional]
 * @return string the modified string.
 * @since 4.0
 * @since 5.0
 */
function chop ($str, $character_mask) {}
```

------------------------
#### rtrim — Strip whitespace (or other characters) from the end of a string
http://php.net/manual/en/function.rtrim.php

```PHP
<?php
/**
 * Strip whitespace (or other characters) from the end of a string.
 * Without the second parameter, rtrim() will strip these characters:
 * <ul>
 * <li>" " (ASCII 32 (0x20)), an ordinary space.
 * <li>"\t" (ASCII 9 (0x09)), a tab.
 * <li>"\n" (ASCII 10 (0x0A)), a new line (line feed).
 * <li>"\r" (ASCII 13 (0x0D)), a carriage return.
 * <li>"\0" (ASCII 0 (0x00)), the NUL-byte.
 * <li>"\x0B" (ASCII 11 (0x0B)), a vertical tab.
 * </ul>
 * @link http://php.net/manual/en/function.rtrim.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $charlist [optional] <p>
 * You can also specify the characters you want to strip, by means
 * of the charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string the modified string.
 * @since 4.0
 * @since 5.0
 */
function rtrim ($str, $charlist = " \t\n\r\0\x0B") {}
```

```PHP
<?php

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";

var_dump(rtrim($text)); //string(30) "            These are a few words :) ..."

var_dump(rtrim($text, " \t.")); //string(26) "            These are a few words :)"

var_dump(rtrim($hello, "Hdler")); //string(8) "Hello Wo"

// trim the ASCII control characters at the end of $binary
// (from 0 to 31 inclusive)
var_dump(rtrim($binary, "\x00..\x1F")); // string(15) "    Example string"
```
-----------
#### trim — Strip whitespace (or other characters) from the beginning and end of a string
http://php.net/manual/en/function.trim.php

```PHP
<?php
/**
 * Strip whitespace (or other characters) from the beginning and end of a string
 * @link http://php.net/manual/en/function.trim.php
 * @param string $str <p>
 * The string that will be trimmed.
 * </p>
 * @param string $charlist [optional] <p>
 * Optionally, the stripped characters can also be specified using
 * the charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string The trimmed string.
 * @since 4.0
 * @since 5.0
 */
function trim ($str, $charlist = " \t\n\r\0\x0B") {}
```

------------------
#### ltrim — Strip whitespace (or other characters) from the beginning of a string
http://php.net/manual/en/function.ltrim.php

```PHP
<?php
/**
 * Strip whitespace (or other characters) from the beginning of a string
 * @link http://php.net/manual/en/function.ltrim.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $charlist [optional] <p>
 * You can also specify the characters you want to strip, by means of the
 * charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string This function returns a string with whitespace stripped from the
 * beginning of str.
 * Without the second parameter,
 * ltrim will strip these characters:
 * " " (ASCII 32
 * (0x20)), an ordinary space.
 * "\t" (ASCII 9
 * (0x09)), a tab.
 * "\n" (ASCII 10
 * (0x0A)), a new line (line feed).
 * "\r" (ASCII 13
 * (0x0D)), a carriage return.
 * "\0" (ASCII 0
 * (0x00)), the NUL-byte.
 * "\x0B" (ASCII 11
 * (0x0B)), a vertical tab.
 * @since 4.0
 * @since 5.0
 */
function ltrim ($str, $charlist = " \t\n\r\0\x0B") {}
```

---------------
#### chr — Return a specific character
http://php.net/manual/en/function.chr.php

<p>Return a specific character</p>

```PHP
<?php
/**
 * Return a specific character
 * @link http://php.net/manual/en/function.chr.php
 * @param int $ascii <p>
 * The ascii code.
 * </p>
 * @return string the specified character.
 * @since 4.0
 * @since 5.0
 */
function chr ($ascii) {}
```

```PHP
<?php
$str = "The string ends in escape: ";
$str .= chr(100); /* add an `d` character at the end of $str */
echo $str;

/* Often this is more useful */
$str = sprintf("The string ends in escape: %c", 100); /* add an `d` character at the end of $str */
echo $str;
```

-------------------
#### ord — Return ASCII value of character
http://php.net/manual/en/function.ord.php

```PHP
<?php
/**
 * Return ASCII value of character
 * @link http://php.net/manual/en/function.ord.php
 * @param string $string <p>
 * A character.
 * </p>
 * @return int the ASCII value as an integer.
 * @since 4.0
 * @since 5.0
 */
function ord ($string) {}
```

```PHP
<?php
$str = "\n";
if (ord($str) == 10) {
    echo "The first character of \$str is a line feed.\n";
}

echo ord('a'); //97
```
-------------
#### chunk_split — Split a string into smaller chunks
http://php.net/manual/en/function.chunk-split.php

```PHP
<?php
/**
 * Split a string into smaller chunks
 * @link http://php.net/manual/en/function.chunk-split.php
 * @param string $body <p>
 * The string to be chunked.
 * </p>
 * @param int $chunklen [optional] <p>
 * The chunk length.
 * </p>
 * @param string $end [optional] <p>
 * The line ending sequence.
 * </p>
 * @return string the chunked string.
 * @since 4.0
 * @since 5.0
 */
function chunk_split ($body, $chunklen = null, $end = null) {}
```

```PHP
<?php
$lorem = <<<TEXT
Lorem ipsum dolor sit amet, consectetur adipiscing e
TEXT;

/**
 * string(64) "Lorem ipsu
 * m dolor si
 * t amet, co
 * nsectetur 
 * adipiscing
 *  e
 * "
 */
var_dump(chunk_split($lorem,10));
```

-------------------
#### str_split — Convert a string to an array
http://php.net/manual/en/function.str-split.php

```PHP
<?php
/**
 * Convert a string to an array
 * @link http://php.net/manual/en/function.str-split.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $split_length [optional] <p>
 * Maximum length of the chunk.
 * </p>
 * @return array If the optional split_length parameter is
 * specified, the returned array will be broken down into chunks with each
 * being split_length in length, otherwise each chunk
 * will be one character in length.
 * </p>
 * <p>
 * false is returned if split_length is less than 1.
 * If the split_length length exceeds the length of
 * string, the entire string is returned as the first
 * (and only) array element.
 * @since 5.0
 */
function str_split ($string, $split_length = 1) {}
```

```PHP
<?php

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

/**
 * Array
 * (
 * [0] => H
 * [1] => e
 * [2] => l
 * [3] => l
 * [4] => o
 * [5] =>
 * [6] => F
 * [7] => r
 * [8] => i
 * [9] => e
 * [10] => n
 * [11] => d
 * )
 */
print_r($arr1);
/**
 * Array
 * (
 * [0] => Hel
 * [1] => lo 
 * [2] => Fri
 * [3] => end
 * )
 */
print_r($arr2);
```

----------
#### explode — Split a string by string
http://php.net/manual/en/function.explode.php

```PHP
<?php
/**
 * Split a string by string
 * @link http://php.net/manual/en/function.explode.php
 * @param string $delimiter <p>
 * The boundary string.
 * </p>
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $limit [optional] <p>
 * If limit is set and positive, the returned array will contain
 * a maximum of limit elements with the last
 * element containing the rest of string.
 * </p>
 * <p>
 * If the limit parameter is negative, all components
 * except the last -limit are returned.
 * </p>
 * <p>
 * If the limit parameter is zero, then this is treated as 1.
 * </p>
 * @return array If delimiter is an empty string (""),
 * explode will return false.
 * If delimiter contains a value that is not
 * contained in string and a negative
 * limit is used, then an empty array will be
 * returned. For any other limit, an array containing
 * string will be returned.
 * @since 4.0
 * @since 5.0
 */
function explode ($delimiter, $string, $limit = null) {}
```

------------
#### implode — Join array elements with a string
http://php.net/manual/en/function.implode.php

```PHP
<?php
/**
 * Join array elements with a string
 * @link http://php.net/manual/en/function.implode.php
 * @param string $glue [optional]<p>
 * Defaults to an empty string. This is not the preferred usage of
 * implode as glue would be
 * the second parameter and thus, the bad prototype would be used.
 * </p>
 * @param array $pieces <p>
 * The array of strings to implode.
 * </p>
 * @return string a string containing a string representation of all the array
 * elements in the same order, with the glue string between each element.
 * @since 4.0
 * @since 5.0
 */
function implode ($glue = "", array $pieces) {}
```

---------------
#### convert_cyr_string — Convert from one Cyrillic character set to another
http://php.net/manual/en/function.convert-cyr-string.php

<strong>I do not know how it is work ;) </strong>

```PHP
<?php

/**
 * Convert from one Cyrillic character set to another
 * @link http://php.net/manual/en/function.convert-cyr-string.php
 * @param string $str <p>
 * The string to be converted.
 * </p>
 * @param string $from <p>
 * The source Cyrillic character set, as a single character.
 * </p>
 * @param string $to <p>
 * The target Cyrillic character set, as a single character.
 * </p>
 * @return string the converted string.
 * @since 4.0
 * @since 5.0
 */
function convert_cyr_string ($str, $from, $to) {}
```

----------------------
#### convert_uudecode — Decode a uuencoded string
http://php.net/manual/en/function.convert-uudecode.php

```PHP
<?php
/**
 * Decode a uuencoded string
 * @link http://php.net/manual/en/function.convert-uudecode.php
 * @param string $data <p>
 * The uuencoded data.
 * </p>
 * @return string the decoded data as a string.
 * @since 5.0
 */
function convert_uudecode ($data) {}
```

```PHP
<?php
/* Can you imagine what this will print? :) */
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`"); // I love PHP!
```

------------------------
#### convert_uuencode — Uuencode a string
http://php.net/manual/en/function.convert-uuencode.php

```PHP
<?php
/**
 * Uuencode a string
 * @link http://php.net/manual/en/function.convert-uuencode.php
 * @param string $data <p>
 * The data to be encoded.
 * </p>
 * @return string the uuencoded data.
 * @since 5.0
 */
function convert_uuencode ($data) {}
```

```PHP
<?php

$data = 'I Love PHP';

$encodeData = convert_uuencode($data);
$decodeData = convert_uudecode($encodeData);

echo "CLEAR: $data" . PHP_EOL; // CLEAR: I Love PHP
echo "ENCODE: $encodeData" . PHP_EOL; // ENCODE: *22!,;W9E(%!(4```
echo "DECODE: $decodeData" . PHP_EOL; //DECODE: I Love PHP
```

--------------
#### count_chars — Return information about characters used in a string
http://php.net/manual/en/function.count-chars.php

```PHP
<?php
/**
 * Return information about characters used in a string
 * @link http://php.net/manual/en/function.count-chars.php
 * @param string $string <p>
 * The examined string.
 * </p>
 * @param int $mode [optional] <p>
 * See return values.
 * </p>
 * @return mixed Depending on mode
 * count_chars returns one of the following:
 * 0 - an array with the byte-value as key and the frequency of
 * every byte as value.
 * 1 - same as 0 but only byte-values with a frequency greater
 * than zero are listed.
 * 2 - same as 0 but only byte-values with a frequency equal to
 * zero are listed.
 * 3 - a string containing all unique characters is returned.
 * 4 - a string containing all not used characters is returned.
 * @since 4.0
 * @since 5.0
 */
function count_chars ($string, $mode = null) {}
```

```PHP
<?php

$string = 'It is a lorem ipsum;';

$returnData = count_chars($string);
/**
 *array(256) {
 * [0] =>
 * int(0)
 * [1] =>
 * int(0)
 * [2] =>
 * int(0)
 * [3] =>
 * int(0)
 * [4] =>
 * int(0)
 * [5] =>
 * int(0)
 * [6] =>
 * int(0)
 * [7] =>
 * int(0)
 * (more elements)...
 * }
 */
var_dump($returnData);

/**
 * mode: same as 0 but only byte-values with a frequency greater than zero are listed.
 */
$returnData = count_chars($string,1);
/**
 * array(14) {
 * [32] =>
 * int(4)
 * [59] =>
 * int(1)
 * [73] =>
 * int(1)
 * [97] =>
 * int(1)
 * [101] =>
 * int(1)
 * [105] =>
 * int(2)
 * [108] =>
 * int(1)
 * [109] =>
 * int(2)
 * [111] =>
 * int(1)
 * [112] =>
 * int(1)
 * [114] =>
 * int(1)
 * [115] =>
 * int(2)
 * [116] =>
 * int(1)
 * [117] =>
 * int(1)
 * }
 */
var_dump($returnData);

/**
 * mode: a string containing all unique characters is returned.
 */
$returnData = count_chars($string,3);
var_dump($returnData); // string(14) " ;Iaeilmoprstu"

/**
 * mode: a string containing all not used characters is returned.
 */
$returnData = count_chars($string,4);
var_dump($returnData); // string(242) "\000 !"#$%&'()*+,-./0123456789:<=>?.....

```

--------------
#### strpos — Find the position of the first occurrence of a substring in a string
http://php.net/manual/en/function.strpos.php

<strong>7.1.0	Support for negative offsets has been added.</strong>

```PHP
<?php
/**
 * Find the position of the first occurrence of a substring in a string
 * @link http://php.net/manual/en/function.strpos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If <b>needle</b> is not a string, it is converted
 * to an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * If specified, search will start this number of characters counted from
 * the beginning of the string. Unlike {@see strrpos()} and {@see strripos()}, the offset cannot be negative.
 * </p>
 * @return int|boolean <p>
 * Returns the position where the needle exists relative to the beginnning of
 * the <b>haystack</b> string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * </p>
 * <p>
 * Returns <b>FALSE</b> if the needle was not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function strpos ($haystack, $needle, $offset = 0) {}
```

```PHP
<?php
// We can search for the character, ignoring anything before the offset
$newstring = 'abcdef abcdef';
echo strpos($newstring, 'a') . PHP_EOL; // 0
echo strpos($newstring, 'a', 1) . PHP_EOL; // $pos = 7, not 0
echo strpos($newstring, 'f', -8) . PHP_EOL; // 7
```
----------------
#### stripos — Find the position of the first occurrence of a case-insensitive substring in a string
http://php.net/manual/en/function.stripos.php

```PHP
<?php
/**
 * Find the position of the first occurrence of a substring in a string
 * @link http://php.net/manual/en/function.strpos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If <b>needle</b> is not a string, it is converted
 * to an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * If specified, search will start this number of characters counted from
 * the beginning of the string. Unlike {@see strrpos()} and {@see strripos()}, the offset cannot be negative.
 * </p>
 * @return int|boolean <p>
 * Returns the position where the needle exists relative to the beginnning of
 * the <b>haystack</b> string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * </p>
 * <p>
 * Returns <b>FALSE</b> if the needle was not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function strpos ($haystack, $needle, $offset = 0) {}
```

```PHP
<?php

// We can search for the character, ignoring anything before the offset
$newstring = 'abcdef Abcdef';
echo strpos($newstring, 'a') . PHP_EOL; // 0
echo strpos($newstring, 'A', 1) . PHP_EOL; // $pos = 7, not 0
echo strpos($newstring, 'f', -8) . PHP_EOL; // 7
```
---------------------
#### strrpos — Find the position of the last occurrence of a substring in a string
http://php.net/manual/en/function.strrpos.php

```PHP
<?php
/**
 * Find the position of the last occurrence of a substring in a string
 * @link http://php.net/manual/en/function.strrpos.php
 * @param string $haystack <p>
 * The string to search in.
 * </p>
 * @param string $needle <p>
 * If <b>needle</b> is not a string, it is converted to an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * If specified, search will start this number of characters counted from the beginning of the string. If the value is negative, search will instead start from that many characters from the end of the string, searching backwards.
 * </p>
 * @return int|boolean <p>
 * Returns the position where the needle exists relative to the beginning of
 * the <b>haystack</b> string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * </p>
 * <p>
 * Returns <b>FALSE</b> if the needle was not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function strrpos ($haystack, $needle, $offset = 0) {}
```

```PHP
<?php

$string = "0123456789a123456789b123456789c";

var_dump(strrpos($string,'1')); //int(21)
var_dump(strrpos($string,'1',-11)); //int(11)
var_dump(strrpos($string,'1',1)); //int(21)
```

----------
#### strripos — Find the position of the last occurrence of a case-insensitive substring in a string
http://php.net/manual/en/function.strripos.php

```PHP
<?php
/**
 * Find position of last occurrence of a case-insensitive string in a string
 * @link http://php.net/manual/en/function.strripos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param string $needle <p>
 * Note that the needle may be a string of one or
 * more characters.
 * </p>
 * @param int $offset [optional] <p>
 * The offset parameter may be specified to begin
 * searching an arbitrary number of characters into the string.
 * </p>
 * <p>
 * Negative offset values will start the search at
 * offset characters from the
 * start of the string.
 * </p>
 * @return int the numerical position of the last occurrence of
 * needle. Also note that string positions start at 0,
 * and not 1.
 * </p>
 * <p>
 * If needle is not found, false is returned.
 * @since 5.0
 */
function strripos ($haystack, $needle, $offset = null) {}
```

#### strrchr — Find the last occurrence of a character in a string
http://php.net/manual/en/function.strrchr.php

```PHP
<?php
/**
 * Find the last occurrence of a character in a string
 * @link http://php.net/manual/en/function.strrchr.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If <b>needle</b> contains more than one character,
 * only the first is used. This behavior is different from that of {@see strstr()}.
 * </p>
 * <p>
 * If <b>needle</b> is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @return string <p>
 * This function returns the portion of string, or <b>FALSE</b> if
 * <b>needle</b> is not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function strrchr ($haystack, $needle) {}
```

```PHP
<?php

$string = 'Hello World';

echo strrchr($string, 'o') . PHP_EOL; // orld
echo strrchr($string, 'l') . PHP_EOL; // ld
echo strrchr($string, 'lo') . PHP_EOL; // ld
```

---------------
#### strstr — Find the first occurrence of a string
http://php.net/manual/en/function.strstr.php

```PHP
<?php
/**
 * Find first occurrence of a string
 * @link http://php.net/manual/en/function.strstr.php
 * @param string $haystack <p>
 * The input string.
 * </p>
 * @param mixed $needle <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If true, strstr returns
 * the part of the haystack before the first
 * occurrence of the needle.
 * </p>
 * @return string the portion of string, or false if needle
 * is not found.
 * @since 4.0
 * @since 5.0
 */
function strstr ($haystack, $needle, $before_needle = null) {}
```

```PHP
<?php
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain . PHP_EOL; //  @example.com

$user = strstr($email, '@', true); // As of PHP 5.3.0
echo $user . PHP_EOL; // name
```

-----------------------
#### stristr — Case-insensitive strstr
http://php.net/manual/en/function.stristr.php

```PHP
<?php
/**
 * Case-insensitive <function>strstr</function>
 * @link http://php.net/manual/en/function.stristr.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If true, stristr
 * returns the part of the haystack before the
 * first occurrence of the needle.
 * </p>
 * @return string the matched substring. If needle is not
 * found, returns false.
 * @since 4.0
 * @since 5.0
 */
function stristr ($haystack, $needle, $before_needle = null) {}
```

```PHP
<?php
  $email = 'USER@EXAMPLE.com';
  echo stristr($email, 'e'); // outputs ER@EXAMPLE.com
  echo stristr($email, 'e', true); // As of PHP 5.3.0, outputs US
```

------------------
#### strpbrk — Search a string for any of a set of characters
http://php.net/manual/en/function.strpbrk.php

```PHP
<?php
/**
 * Search a string for any of a set of characters
 * @link http://php.net/manual/en/function.strpbrk.php
 * @param string $haystack <p>
 * The string where char_list is looked for.
 * </p>
 * @param string $char_list <p>
 * This parameter is case sensitive.
 * </p>
 * @return string a string starting from the character found, or false if it is
 * not found.
 * @since 5.0
 */
function strpbrk ($haystack, $char_list) {}
```

```PHP
<?php

$text = 'This is a Simple text.';

// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, 'mi'); 

// this echoes "Simple text." because chars are case sensitive
echo strpbrk($text, 'S');
```

-------------
#### crc32 — Calculates the crc32 polynomial of a string
http://php.net/manual/en/function.crc32.php

```PHP
<?php
/**
 * Calculates the crc32 polynomial of a string
 * @link http://php.net/manual/en/function.crc32.php
 * @param string $str <p>
 * The data.
 * </p>
 * @return int the crc32 checksum of str as an integer.
 * @since 4.0.1
 * @since 5.0
 */
function crc32 ($str) {}
```

```PHP
<?php
$checksum = crc32("The quick brown fox jumped over the lazy dog.");
echo $checksum; // 2191738434
```

-------------
#### md5 — Calculate the md5 hash of a string
http://php.net/manual/en/function.md5.php

```PHP
<?php
/**
 * Calculate the md5 hash of a string
 * @link http://php.net/manual/en/function.md5.php
 * @param string $str <p>
 * The string.
 * </p>
 * @param bool $raw_output [optional] <p>
 * If the optional raw_output is set to true,
 * then the md5 digest is instead returned in raw binary format with a
 * length of 16.
 * </p>
 * @return string the hash as a 32-character hexadecimal number.
 * @since 4.0
 * @since 5.0
 */
function md5 ($str, $raw_output = null) {}
```

```PHP
<?php
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}
```

--------------
#### md5_file — Calculates the md5 hash of a given file
http://php.net/manual/en/function.md5-file.php

------------------------
####  crypt — One-way string hashing
http://php.net/manual/en/function.crypt.php

```PHP
<?php
/**
 * One-way string encryption (hashing)
 * @link http://php.net/manual/en/function.crypt.php
 * @param string $str <p>
 * The string to be encrypted.
 * </p>
 * @param string $salt [optional] <p>
 * An optional salt string to base the encryption on. If not provided,
 * one will be randomly generated by PHP each time you call this function.
 * PHP 5.6 or later raise E_NOTICE error if this parameter is omitted
 * </p>
 * <p>
 * If you are using the supplied salt, you should be aware that the salt
 * is generated once. If you are calling this function repeatedly, this
 * may impact both appearance and security.
 * </p>
 * @return string the encrypted string.
 * @since 4.0
 * @since 5.0
 */
function crypt ($str, $salt = null) {}
```

```PHP
<?php
$user_input = 'mypassword';
$hashed_password = crypt('mypassword','salt'); // let the salt be automatically generated

/* You should pass the entire results of crypt() as the salt for comparing a
   password, to avoid problems when different hashing algorithms are used. (As
   it says above, standard DES-based password hashing uses a 2-character salt,
   but MD5-based hashing uses 12.) */
if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
    echo "Password verified!" . PHP_EOL;
}
```

------------
#### echo — Output one or more strings
http://php.net/manual/en/function.echo.php

------------------------
#### print — Output a string
http://php.net/manual/en/function.print.php

<strong>print is not actually a real function (it is a language construct) so you are not required to use parentheses with its argument list.</strong>
<strong>The major differences to echo are that print only accepts a single argument and always returns 1. </strong>

----------------------
#### printf — Output a formatted string
http://php.net/manual/en/function.printf.php

```PHP
<?php

printf('string' . PHP_EOL); // string
```

```PHP
<?php
/**
 * Output a formatted string
 * @link http://php.net/manual/en/function.printf.php
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param mixed $args [optional] <p>
 * </p>
 * @param mixed $_ [optional] 
 * @return int the length of the outputted string.
 * @since 4.0
 * @since 5.0
 */
function printf ($format, $args = null, $_ = null) {}
```
--------------
#### sprintf — Return a formatted string
http://php.net/manual/en/function.sprintf.php

```PHP
<?php
/**
 * Return a formatted string
 * @link http://php.net/manual/en/function.sprintf.php
 * @param string $format <p>
 * The format string is composed of zero or more directives:
 * ordinary characters (excluding %) that are
 * copied directly to the result, and conversion
 * specifications, each of which results in fetching its
 * own parameter. This applies to both sprintf
 * and printf.
 * </p>
 * <p>
 * Each conversion specification consists of a percent sign
 * (%), followed by one or more of these
 * elements, in order:
 * An optional sign specifier that forces a sign
 * (- or +) to be used on a number. By default, only the - sign is used
 * on a number if it's negative. This specifier forces positive numbers
 * to have the + sign attached as well, and was added in PHP 4.3.0.
 * @param mixed $args [optional] <p>
 * </p>
 * @param mixed $_ [optional] 
 * @return string a string produced according to the formatting string
 * format.
 * @since 4.0
 * @since 5.0
 */
function sprintf ($format, $args = null, $_ = null) {}
```

```PHP
<?php
$num = 5;
$location = 'tree';

$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location); // There are 5 monkeys in the tree
```

-------------------
#### sscanf — Parses input from a string according to a format
http://php.net/manual/en/function.sscanf.php

```PHP
<?php
/**
 * Parses input from a string according to a format
 * @link http://php.net/manual/en/function.sscanf.php
 * @param string $str <p>
 * The input string being parsed.
 * </p>
 * @param string $format <p>
 * The interpreted format for str, which is
 * described in the documentation for sprintf with
 * following differences:
 * Function is not locale-aware.
 * F, g, G and
 * b are not supported.
 * D stands for decimal number.
 * i stands for integer with base detection.
 * n stands for number of characters processed so far.
 * </p>
 * @param mixed $_ [optional] 
 * @return mixed If only
 * two parameters were passed to this function, the values parsed
 * will be returned as an array. Otherwise, if optional parameters are passed,
 * the function will return the number of assigned values. The optional
 * parameters must be passed by reference.
 * @since 4.0.1
 * @since 5.0
 */
function sscanf ($str, $format, &$_ = null) {}
```

---------------------
#### fprintf — Write a formatted string to a stream
http://php.net/manual/en/function.sscanf.php

```PHP
<?php
/**
 * Write a formatted string to a stream
 * @link http://php.net/manual/en/function.fprintf.php
 * @param resource $handle &fs.file.pointer;
 * @param string $format <p>
 * See sprintf for a description of 
 * format.
 * </p>
 * @param mixed $args [optional] <p>
 * </p>
 * @param mixed $_ [optional] 
 * @return int the length of the string written.
 * @since 5.0
 */
function fprintf ($handle, $format, $args = null, $_ = null) {}
```

```PHP
<?php
$year = 2017;
$month = 1;
$day = 1;
if (!($fp = fopen('date.txt', 'w'))) {
    return;
}

fprintf($fp, "%04d-%02d-%02d", $year, $month, $day); // 2017-01-01 to `date.txt`
// will write the formatted ISO date to date.txt
```

------------------
#### vsprintf — Return a formatted string
http://php.net/manual/en/function.vsprintf.php

<strong>Operates as sprintf() but accepts an array of arguments, rather than a variable number of arguments.</strong>

```PHP
<?php
/**
 * Return a formatted string
 * @link http://php.net/manual/en/function.vsprintf.php
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param array $args <p>
 * </p>
 * @return string Return array values as a formatted string according to
 * format (which is described in the documentation
 * for sprintf).
 * @since 4.1.0
 * @since 5.0
 */
function vsprintf ($format, array $args) {}
```

```PHP
<?php
print vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01
```

--------------------
#### vprintf — Output a formatted string
http://php.net/manual/en/function.vprintf.php

```PHP
<?php
/**
 * Output a formatted string
 * @link http://php.net/manual/en/function.vprintf.php
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param array $args <p>
 * </p>
 * @return int the length of the outputted string.
 * @since 4.1.0
 * @since 5.0
 */
function vprintf ($format, array $args) {}
```

```PHP
<?php
vprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01
```

------------------------
#### vfprintf — Write a formatted string to a stream
http://php.net/manual/en/function.vfprintf.php

<strong>Operates as fprintf() but accepts an array of arguments, rather than a variable number of arguments.</strong>

```PHP
<?php
/**
 * Write a formatted string to a stream
 * @link http://php.net/manual/en/function.vfprintf.php
 * @param resource $handle <p>
 * </p>
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param array $args <p>
 * </p>
 * @return int the length of the outputted string.
 * @since 5.0
 */
function vfprintf ($handle, $format, array $args) {}
```

```PHP
<?php
$year = 2017;
$month = 1;
$day = 1;
if (!($fp = fopen('date.txt', 'w')))
    return;

vfprintf($fp, "%04d-%02d-%02d", array($year, $month, $day));
// will write the formatted ISO date to date.txt
```

------------
#### number_format — Format a number with grouped thousands
http://php.net/manual/en/function.number-format.php

<strong>This function accepts either one, two, or four parameters (not three):</strong>
 - <strong>If only one parameter is given, number will be formatted without decimals, but with a comma (",") between every group of thousands.</strong>
 - <strong>If two parameters are given, number will be formatted with decimals decimals with a dot (".") in front, and a comma (",") between every group of thousands.</strong>
 - <strong>If all four parameters are given, number will be formatted with decimals decimals, dec_point instead of a dot (".") before the decimals and thousands_sep instead of a comma (",") between every group of thousands.</strong>

```PHP
<?php
/**
 * Format a number with grouped thousands
 * @link http://php.net/manual/en/function.number-format.php
 * @param float $number <p>
 * The number being formatted.
 * </p>
 * @param int $decimals [optional] <p>
 * Sets the number of decimal points.
 * </p>
 * @param string $dec_point [optional]
 * @param string $thousands_sep [optional]
 * @return string A formatted version of number.
 * @since 4.0
 * @since 5.0
 */
function number_format ($number , $decimals = 0 , $dec_point = '.' , $thousands_sep = ',' ) {}
```

```PHP
<?php

$number = 1234.56;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

// French notation
$nombre_format_francais = number_format($number, 2, ',', ' ');
// 1 234,56

$number = 1234.5678;

// english notation without thousands separator
$english_format_number = number_format($number, 2, '.', '');
// 1234.57

```

----------------
#### money_format — Formats a number as a currency string
http://php.net/manual/en/function.money-format.php

------------------
#### setlocale — Set locale information
http://php.net/manual/en/function.setlocale.php

-------------
#### get_html_translation_table — Returns the translation table used by htmlspecialchars and htmlentities
http://php.net/manual/en/function.get-html-translation-table.php

```PHP
<?php
/**
 * Returns the translation table used by <function>htmlspecialchars</function> and <function>htmlentities</function>
 * @link http://php.net/manual/en/function.get-html-translation-table.php
 * @param int $table [optional] <p>
 * There are two new constants (HTML_ENTITIES,
 * HTML_SPECIALCHARS) that allow you to specify the
 * table you want.
 * </p>
 * @param int $quote_style [optional] <p>
 * Like the htmlspecialchars and
 * htmlentities functions you can optionally specify
 * the quote_style you are working with.
 * See the description
 * of these modes in htmlspecialchars.
 * </p>
 * @return array the translation table as an array.
 * @since 4.0
 * @since 5.0
 */
function get_html_translation_table ($table = null, $quote_style = null) {}
```

```PHP
<?php
/**
 *  array(1510) {
 *    ["
 *  "]=>
 *    string(9) "&NewLine;"
 *    ["!"]=>
 *    string(6) "&excl;"
 *    ["""]=>
 *    string(6) "&quot;"
 *    ["#"]=>
 *    string(5) "&num;"
 *    ["$"]=>
 *    string(8) "&dollar;"
 *    ["%"]=>
 *    string(8) "&percnt;"
 *    ["&"]=>
 *    string(5) "&amp;"
 *    ["'"]=>
 *    string(6) "&apos;"
 *    // ...
 *  }
 */
var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));
```

----------------
#### htmlspecialchars — Convert special characters to HTML entities
http://php.net/manual/en/function.htmlspecialchars.php

```PHP
<?php
/**
 * Convert special characters to HTML entities
 * @link http://php.net/manual/en/function.htmlspecialchars.php
 * @param string $string <p>
 * The {@link http://www.php.net/manual/en/language.types.string.php string} being converted.
 * </p>
 * @param int $flags [optional] <p>
 * A bitmask of one or more of the following flags, which specify how to handle quotes,
 * invalid code unit sequences and the used document type. The default is
 * <em><b>ENT_COMPAT | ENT_HTML401</b></em>.
 * </p><table>
 * <caption><b>Available <em>flags</em> constants</b></caption>
 * @since 4.0
 * @since 5.0
 *
 * <thead>
 * <tr>
 * <th>Constant Name</th>
 * <th>Description</th>
 * </tr>
 *
 * </thead>
 *
 * <tbody>
 * <tr>
 * <td><b>ENT_COMPAT</b></td>
 * <td>Will convert double-quotes and leave single-quotes alone.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_QUOTES</b></td>
 * <td>Will convert both double and single quotes.</td>
 *</tr>
 *
 * <tr>
 * <td><b>ENT_NOQUOTES</b></td>
 * <td>Will leave both double and single quotes unconverted.</td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_IGNORE</b></td>
 * <td>
 * Silently discard invalid code unit sequences instead of returning
 * an empty string. Using this flag is discouraged as it
 * {@link http://unicode.org/reports/tr36/#Deletion_of_Noncharacters »&nbsp;may have security implications}.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_SUBSTITUTE</b></td>
 * <td>
 * Replace invalid code unit sequences with a Unicode Replacement Character
 * U+FFFD (UTF-8) or &amp;#FFFD; (otherwise) instead of returning an empty string.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_DISALLOWED</b></td>
 * <td>
 * Replace invalid code points for the given document type with a
 * Unicode Replacement Character U+FFFD (UTF-8) or &amp;#FFFD;
 * (otherwise) instead of leaving them as is. This may be useful, for
 * instance, to ensure the well-formedness of XML documents with
 * embedded external content.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * Handle code as HTML 4.01.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XML1</b></td>
 * <td>
 * Handle code as XML 1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * Handle code as XHTML.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * Handle code as HTML 5.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 * @param string $encoding [optional] <p>
 * Defines encoding used in conversion.
 * If omitted, the default value for this argument is ISO-8859-1 in
 * versions of PHP prior to 5.4.0, and UTF-8 from PHP 5.4.0 onwards.
 * </p>
 * <p>
 * For the purposes of this function, the encodings
 * <em>ISO-8859-1</em>, <em>ISO-8859-15</em>,
 * <em>UTF-8</em>, <em>cp866</em>,
 * <em>cp1251</em>, <em>cp1252</em>, and
 * <em>KOI8-R</em> are effectively equivalent, provided the
 * <em><b>string</b></em> itself is valid for the encoding, as
 * the characters affected by  <b>htmlspecialchars()</b> occupy
 * the same positions in all of these encodings.
 * </p>
 * @param bool $double_encode [optional] <p>
 * When <em><b>double_encode</b></em> is turned off PHP will not
 * encode existing html entities, the default is to convert everything.
 * </p>
 * @return string The converted string.
 */
function htmlspecialchars ($string, $flags = ENT_COMPAT, $encoding = 'UTF-8', $double_encode = true) {}
```

```PHP
<?php

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
```

----------------------------------
#### htmlspecialchars_decode — Convert special HTML entities back to characters
http://php.net/manual/en/function.htmlspecialchars-decode.php

hebrev — Convert logical Hebrew text to visual text
hebrevc — Convert logical Hebrew text to visual text with newline conversion
html_entity_decode — Convert all HTML entities to their applicable characters
htmlentities — Convert all applicable characters to HTML entities
join — Alias of implode
lcfirst — Make a string's first character lowercase
levenshtein — Calculate Levenshtein distance between two strings
localeconv — Get numeric formatting information
metaphone — Calculate the metaphone key of a string
nl_langinfo — Query language and locale information
nl2br — Inserts HTML line breaks before all newlines in a string
parse_str — Parses the string into variables
quoted_printable_decode — Convert a quoted-printable string to an 8 bit string
quoted_printable_encode — Convert a 8 bit string to a quoted-printable string
quotemeta — Quote meta characters
sha1_file — Calculate the sha1 hash of a file
sha1 — Calculate the sha1 hash of a string
similar_text — Calculate the similarity between two strings
soundex — Calculate the soundex key of a string
str_getcsv — Parse a CSV string into an array
str_ireplace — Case-insensitive version of str_replace.
str_pad — Pad a string to a certain length with another string
str_repeat — Repeat a string
str_replace — Replace all occurrences of the search string with the replacement string
str_rot13 — Perform the rot13 transform on a string
str_shuffle — Randomly shuffles a string
str_word_count — Return information about words used in a string
strcasecmp — Binary safe case-insensitive string comparison
strchr — Alias of strstr
strcmp — Binary safe string comparison
strcoll — Locale based string comparison
strcspn — Find length of initial segment not matching mask
strip_tags — Strip HTML and PHP tags from a string
strlen — Get string length
strnatcasecmp — Case insensitive string comparisons using a "natural order" algorithm
strnatcmp — String comparisons using a "natural order" algorithm
strncasecmp — Binary safe case-insensitive string comparison of the first n characters
strncmp — Binary safe string comparison of the first n characters
strrev — Reverse a string
strspn — Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask.
strtok — Tokenize string
strtolower — Make a string lowercase
strtoupper — Make a string uppercase
strtr — Translate characters or replace substrings
substr_compare — Binary safe comparison of two strings from an offset, up to length characters
substr_count — Count the number of substring occurrences
substr_replace — Replace text within a portion of a string
substr — Return part of a string
ucfirst — Make a string's first character uppercase
ucwords — Uppercase the first character of each word in a string
wordwrap — Wraps a string to a given number of characters