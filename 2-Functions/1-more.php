<?php
/**
 * Created by PhpStorm.
 * User: t.blindaruk
 * Date: 26.10.17
 * Time: 15:48
 */

function more(string $first, string ...$more){
    echo  $first . PHP_EOL;
    foreach ($more as $value){
        echo  'MORE: ' . $value . PHP_EOL;
    }
}

more('first string','second','3','4','5');