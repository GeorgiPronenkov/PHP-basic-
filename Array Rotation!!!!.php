<?php
/**
	Array Rotation
Write a program that receives an array and number of rotations you have to perform (first element goes at the end)
 * Print the resulting array.
 */

$array = explode(' ', readline());
$rotations = intval(readline());

//with shift()
for ($i = 0; $i < $rotations; $i++) {
    $first = array_shift($array);
    $array [] = $first;
}
echo implode(' ', $array);

/**
2 5 6 7
2
6 7 2 5
 */