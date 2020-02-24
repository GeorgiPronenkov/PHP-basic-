<?php
/**
Max Sequence of Equal Elements
find the longest sequence of equal elements in an array of integers.
If several longest sequences exist, print the leftmost one.
*/

$array = explode(' ', readline());
$count = count($array);

$bestCount = 0;
$bestElement = 0;

for ($i = 0; $i < $count; $i++) {
    $repeats = 1;
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] === $array[$j]) {
            $repeats++;
        }else {
            break;
        }
    }
    if ($repeats > $bestCount) {
        $bestCount = $repeats;
        $bestElement = $array[$i];
    }
}
for ($i = 0; $i < $bestCount; $i++) {
    echo $bestElement . ' ';
}
//echo str_repeat('$bestElement ', $bestCount);

/////////second solution
$input = array_map("intval", explode(" ", readline()));

$maxCount = 0;
$index = 0;

for ($row = 0; $row < count($input); $row++) {
    $currentCount = 0;
    for ($col = $row; $col < count($input); $col++) { //do dulj.na kolonata
        if ($input[$row] == $input[$col]){            //ako reda suvpada s kolonata
            $currentCount++;
            if ($currentCount >= $maxCount){
                $maxCount = $currentCount;
                $index = $row;
            }
        }else {
            break;
        }
    }
}
for ($x = 0; $x < $maxCount; $x++) {
    echo $input[$x + $index] . " ";
}
//0 1 1 5 2 2 6 3 3 ->>> 3 3
