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

--------------------------

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

------------------------------

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

-------------------------

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

--------------------

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

----------------------------

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

------------------

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
-----------------------------

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

-----------------------------

#### count_chars — Return information about characters used in a string

-----------------------------

crc32 — Calculates the crc32 polynomial of a string
crypt — One-way string hashing
echo — Output one or more strings
explode — Split a string by string
fprintf — Write a formatted string to a stream
get_html_translation_table — Returns the translation table used by htmlspecialchars and htmlentities
hebrev — Convert logical Hebrew text to visual text
hebrevc — Convert logical Hebrew text to visual text with newline conversion
hex2bin — Decodes a hexadecimally encoded binary string
html_entity_decode — Convert all HTML entities to their applicable characters
htmlentities — Convert all applicable characters to HTML entities
htmlspecialchars_decode — Convert special HTML entities back to characters
htmlspecialchars — Convert special characters to HTML entities
implode — Join array elements with a string
join — Alias of implode
lcfirst — Make a string's first character lowercase
levenshtein — Calculate Levenshtein distance between two strings
localeconv — Get numeric formatting information
ltrim — Strip whitespace (or other characters) from the beginning of a string
md5_file — Calculates the md5 hash of a given file
md5 — Calculate the md5 hash of a string
metaphone — Calculate the metaphone key of a string
money_format — Formats a number as a currency string
nl_langinfo — Query language and locale information
nl2br — Inserts HTML line breaks before all newlines in a string
number_format — Format a number with grouped thousands
ord — Return ASCII value of character
parse_str — Parses the string into variables
print — Output a string
printf — Output a formatted string
quoted_printable_decode — Convert a quoted-printable string to an 8 bit string
quoted_printable_encode — Convert a 8 bit string to a quoted-printable string
quotemeta — Quote meta characters
rtrim — Strip whitespace (or other characters) from the end of a string
setlocale — Set locale information
sha1_file — Calculate the sha1 hash of a file
sha1 — Calculate the sha1 hash of a string
similar_text — Calculate the similarity between two strings
soundex — Calculate the soundex key of a string
sprintf — Return a formatted string
sscanf — Parses input from a string according to a format
str_getcsv — Parse a CSV string into an array
str_ireplace — Case-insensitive version of str_replace.
str_pad — Pad a string to a certain length with another string
str_repeat — Repeat a string
str_replace — Replace all occurrences of the search string with the replacement string
str_rot13 — Perform the rot13 transform on a string
str_shuffle — Randomly shuffles a string
str_split — Convert a string to an array
str_word_count — Return information about words used in a string
strcasecmp — Binary safe case-insensitive string comparison
strchr — Alias of strstr
strcmp — Binary safe string comparison
strcoll — Locale based string comparison
strcspn — Find length of initial segment not matching mask
strip_tags — Strip HTML and PHP tags from a string
stripcslashes — Un-quote string quoted with addcslashes
stripos — Find the position of the first occurrence of a case-insensitive substring in a string
stripslashes — Un-quotes a quoted string
stristr — Case-insensitive strstr
strlen — Get string length
strnatcasecmp — Case insensitive string comparisons using a "natural order" algorithm
strnatcmp — String comparisons using a "natural order" algorithm
strncasecmp — Binary safe case-insensitive string comparison of the first n characters
strncmp — Binary safe string comparison of the first n characters
strpbrk — Search a string for any of a set of characters
strpos — Find the position of the first occurrence of a substring in a string
strrchr — Find the last occurrence of a character in a string
strrev — Reverse a string
strripos — Find the position of the last occurrence of a case-insensitive substring in a string
strrpos — Find the position of the last occurrence of a substring in a string
strspn — Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask.
strstr — Find the first occurrence of a string
strtok — Tokenize string
strtolower — Make a string lowercase
strtoupper — Make a string uppercase
strtr — Translate characters or replace substrings
substr_compare — Binary safe comparison of two strings from an offset, up to length characters
substr_count — Count the number of substring occurrences
substr_replace — Replace text within a portion of a string
substr — Return part of a string
trim — Strip whitespace (or other characters) from the beginning and end of a string
ucfirst — Make a string's first character uppercase
ucwords — Uppercase the first character of each word in a string
vfprintf — Write a formatted string to a stream
vprintf — Output a formatted string
vsprintf — Return a formatted string
wordwrap — Wraps a string to a given number of characters