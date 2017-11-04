<?php

preg_match('/(?:\D+|<\d+>)*[!?]/', 'foobar foobar foobar',$result);

if (preg_last_error() == PREG_BACKTRACK_LIMIT_ERROR) {
    print 'Backtrack limit was exhausted!' . PHP_EOL;
}