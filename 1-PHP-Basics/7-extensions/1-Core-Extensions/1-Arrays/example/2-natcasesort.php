<?php
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting\n";
/**
 * Array
 * (
 *     [0] => IMG0.png
 *     [1] => IMG3.png
 *     [2] => img1.png
 *     [3] => img10.png
 *     [4] => img12.png
 *     [5] => img2.png
 * )
 */
print_r($array1);

natcasesort($array2);
echo "\nNatural order sorting (case-insensitive)\n";
/**
 * Array
 * (
 *     [0] => IMG0.png
 *     [4] => img1.png
 *     [3] => img2.png
 *     [5] => IMG3.png
 *     [2] => img10.png
 *     [1] => img12.png
 * )
 */
print_r($array2);