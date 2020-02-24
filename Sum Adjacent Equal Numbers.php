<?php
/**
sum all adjacent equal numbers in a array of integer numbers, starting from left to right
 */

$arr = array_map('intval', explode(' ', readline()));
$currCountArr = count($arr);

for ($i = 0; $i < $currCountArr - 1; $i++) {  //завърта от 1-ят до посл.елемент на масива
    if ($arr[$i] == $arr[$i + 1]) {
        $newElement = $arr[$i] * 2;
        array_splice($arr, $i, 2, $newElement);
        $currCountArr = count($arr);
        $i -= 1;
    }
}
echo implode(' ', $arr);