<?php
echo addcslashes('foo[ ]', 'A..z') . PHP_EOL;
// output:  \f\o\o\[ \]
// All upper and lower-case letters will be escaped
// ... but so will the [\]^_`

###############

echo addcslashes("zoo['.']", 'z..A');
// output:  \zoo['\.'] ; PHP Warning:  addcslashes(): Invalid '..'-range, '..'-range needs to be incrementing in

###############

echo addcslashes("I`m",'I') . PHP_EOL;
// output:  \I\`\m ; PHP Warning