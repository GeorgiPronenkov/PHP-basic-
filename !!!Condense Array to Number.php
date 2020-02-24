<?php
/**
Write a program to read an array of integers and condense them by summing adjacent couples of
 * elements until a single integer is obtained.
 * For example, if we have 3 elements {2, 10, 3},
 * we sum the first two and the second two elements and obtain {2+10, 10+3} = {12, 13},
 * then we sum again all adjacent elements and obtain {12+13} = {25}. */

$arr = array_map('intval', explode(' ', readline()));


while (count($arr) > 1) {
    $arrNew = [];
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $arrNew[$i] = $arr[$i] + $arr[$i + 1];
    }
    $arr = $arrNew;
}
echo $arr[0];


// 5, 8, 4 ==> (5+8) + (8+4) = 25