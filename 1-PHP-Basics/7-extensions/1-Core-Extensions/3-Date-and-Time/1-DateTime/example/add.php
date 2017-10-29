<?php
/**
 * Created by PhpStorm.
 * User: tetiana
 * Date: 29.10.17
 * Time: 20:25
 */

$date = new DateTime('2000-01-01');
$res = $date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n"; //2000-01-11