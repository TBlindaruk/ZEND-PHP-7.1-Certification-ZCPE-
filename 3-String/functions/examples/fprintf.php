<?php
$year = 2017;
$month = 1;
$day = 1;
if (!($fp = fopen('date.txt', 'w'))) {
    return;
}

fprintf($fp, "%04d-%02d-%02d", $year, $month, $day); // 2017-01-01 to `date.txt`
// will write the formatted ISO date to date.txt