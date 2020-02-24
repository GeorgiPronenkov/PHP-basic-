<?php
/*
finds the most frequent number in a given sequence of numbers.
In case of multiple numbers with the same maximal frequency, print the leftmost of them.
*/

$input = array_map("intval", explode(" ", readline())); //intval - Към число
$maxCount = 0;
$element = "";

for ($row = 0; $row < count($input); $row++) {
    $currentCount = 0;
    for ($col = $row; $col < count($input); $col++) {
        if ($input[$row] == $input[$col]){
            $currentCount++;
        if ($currentCount > $maxCount){
             $maxCount = $currentCount;
             $element = $input[$row];
           }
        }
    }
}

echo $element;
//5 5 6 9 7 8 4 5 1 5 4 5 5
//5
