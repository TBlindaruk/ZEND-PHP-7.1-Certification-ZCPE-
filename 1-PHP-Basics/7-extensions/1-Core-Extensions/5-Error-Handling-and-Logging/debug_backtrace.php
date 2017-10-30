<?php
// include.php file

function a() {
    return b();
}

function b() {
    return c();
}

function c(){
    return debug_backtrace();
}

var_dump(a());
