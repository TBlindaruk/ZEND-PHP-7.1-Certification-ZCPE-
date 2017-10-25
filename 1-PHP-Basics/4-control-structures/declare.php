<?php
/**
 * Created by PhpStorm.
 * User: tetiana
 * Date: 25.10.17
 * Time: 21:21
 */

declare(ticks=1);

// Функция, исполняемая при каждом тике
function tick_handler()
{
    echo "tick_handler() выполнено\n";
}

register_tick_function('tick_handler');

$a = 1;

while ($a > 0) {
    $a += 2;
    print($a);
}