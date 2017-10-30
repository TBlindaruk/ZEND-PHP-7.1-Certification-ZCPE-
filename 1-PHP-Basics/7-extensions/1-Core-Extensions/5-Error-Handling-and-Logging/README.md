### Error Handling and Logging
http://php.net/manual/en/book.errorfunc.php

#### debug_backtrace — Generates a backtrace
http://php.net/manual/en/function.debug-backtrace.php

```PHP
<?php
/**
 * Generates a backtrace
 * @link http://php.net/manual/en/function.debug-backtrace.php
 * @param int $options [optional] <p>
 * As of 5.3.6, this parameter is a bitmask for the following options:
 * <table>
 * <b>debug_backtrace</b> options
 * <tr valign="top">
 * <td>DEBUG_BACKTRACE_PROVIDE_OBJECT</td>
 * <td>
 * Whether or not to populate the "object" index.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>DEBUG_BACKTRACE_IGNORE_ARGS</td>
 * <td>
 * Whether or not to omit the "args" index, and thus all the function/method arguments,
 * to save memory.
 * </td>
 * </tr>
 * </table>
 * Before 5.3.6, the only values recognized are true or false, which are the same as
 * setting or not setting the <b>DEBUG_BACKTRACE_PROVIDE_OBJECT</b> option respectively.
 * </p>
 * @param int $limit [optional] <p>
 * As of 5.4.0, this parameter can be used to limit the number of stack frames returned.
 * By default (<i>limit</i>=0) it returns all stack frames.
 * </p>
 * @return array an array of associative arrays. The possible returned elements
 * are as follows:
 * </p>
 * <p>
 * <table>
 * Possible returned elements from <b>debug_backtrace</b>
 * <tr valign="top">
 * <td>&Name;</td>
 * <td>&Type;</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>function</td>
 * <td>string</td>
 * <td>
 * The current function name. See also
 * __FUNCTION__.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>line</td>
 * <td>integer</td>
 * <td>
 * The current line number. See also
 * __LINE__.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>file</td>
 * <td>string</td>
 * <td>
 * The current file name. See also
 * __FILE__.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>class</td>
 * <td>string</td>
 * <td>
 * The current class name. See also
 * __CLASS__
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>object</td>
 * <td>object</td>
 * <td>
 * The current object.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>type</td>
 * <td>string</td>
 * <td>
 * The current call type. If a method call, "->" is returned. If a static
 * method call, "::" is returned. If a function call, nothing is returned.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>args</td>
 * <td>array</td>
 * <td>
 * If inside a function, this lists the functions arguments. If
 * inside an included file, this lists the included file name(s).
 * </td>
 * </tr>
 * </table>
 * @since 4.3.0
 * @since 5.0
 */
function debug_backtrace ($options = DEBUG_BACKTRACE_PROVIDE_OBJECT, $limit = 0) {}
```

-----------------------
#### debug_print_backtrace — Prints a backtrace
http://php.net/manual/en/function.debug-print-backtrace.php

```PHP
<?php
/**
 * Prints a backtrace
 * @link http://php.net/manual/en/function.debug-print-backtrace.php
 * @param int $options [optional] <p>
 * As of 5.3.6, this parameter is a bitmask for the following options:
 * <table>
 * <b>debug_print_backtrace</b> options
 * <tr valign="top">
 * <td>DEBUG_BACKTRACE_IGNORE_ARGS</td>
 * <td>
 * Whether or not to omit the "args" index, and thus all the function/method arguments,
 * to save memory.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param int $limit [optional] <p>
 * As of 5.4.0, this parameter can be used to limit the number of stack frames printed.
 * By default (<i>limit</i>=0) it prints all stack frames.
 * </p>
 * @return void
 * @since 5.0
 */
function debug_print_backtrace ($options = 0, $limit = 0) {}
```

```PHP
<?php
// include.php file

function a() {
    b();
}

function b() {
    c();
}

function c(){
    debug_print_backtrace();
}

a();
```

------------------
#### error_clear_last — Clear the most recent error
http://php.net/manual/en/function.error-clear-last.php

[example](./error_clear_last.php)

```PHP
<?php
/**
 * Get the last occurred error
 * @link http://php.net/manual/en/function.error-get-last.php
 * @return array an associative array describing the last error with keys "type",
 * "message", "file" and "line". Returns &null; if there hasn't been an error
 * yet.
 * @since 5.2.0
 */
function error_get_last () {}
```
-----------------

#### error_get_last — Get the last occurred error
http://php.net/manual/en/function.error-get-last.php

----------------------------

#### error_log — Send an error message to the defined error handling routines
#### error_reporting — Sets which PHP errors are reported
#### restore_error_handler — Restores the previous error handler function
#### restore_exception_handler — Restores the previously defined exception handler function
#### set_error_handler — Sets a user-defined error handler function
#### set_exception_handler — Sets a user-defined exception handler function
#### trigger_error — Generates a user-level error/warning/notice message
#### user_error — Alias of trigger_error