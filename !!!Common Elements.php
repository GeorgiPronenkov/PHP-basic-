<?php
/**
Write a program, which prints common elements in two arrays.
 * You have to compare the elements of the second array to the elements of the first.
 */

$arrayOne = explode(' ', readline());
$arrayTwo = explode(' ', readline());

$arrayCommon = [];
$count1 = count($arrayOne);
$count2 = count($arrayTwo);

for ($i = 0; $i < $count1; $i++) {
    for ($j = 0; $j < $count2; $j++) {
        if ($arrayOne[$i] === $arrayTwo[$j]) {
            $arrayCommon[] = $arrayOne[$i];
        }
    }
}
echo implode(' ', $arrayCommon);

/**
1 2 3 4 5 6 7 8 9
2 6 7 9

2 6 7 9
 */