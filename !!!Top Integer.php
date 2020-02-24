<?php
/**
find all the top integers in an array.
 A top integer is an integer which is bigger than all the elements to its right.
 */

$array = explode(' ', readline());
$count = count($array);
$topInteger = [];

for ($i = 0; $i < $array; $i++) {
    $top = true;
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] <= $array[$j]) {
           $top = false;
           break;
        }
    }
    if ($top === true) {
        $topInteger[] = $array[$j];
    }
}
echo implode(' ', $topInteger);