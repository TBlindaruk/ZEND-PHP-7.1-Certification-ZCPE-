<?php
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain . PHP_EOL; //  @example.com

$user = strstr($email, '@', true); // As of PHP 5.3.0
echo $user . PHP_EOL; // name