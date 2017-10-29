<?php

var_dump(array_product(['a','b'])); // int (0)

var_dump(array_product(['a',2])); // int (0)

var_dump(array_product([1,2])); // int (2)

var_dump(array_product([])); // int (1)