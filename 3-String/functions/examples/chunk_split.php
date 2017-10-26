<?php

$lorem = <<<TEXT
Lorem ipsum dolor sit amet, consectetur adipiscing e
TEXT;

var_dump(chunk_split($lorem,10));