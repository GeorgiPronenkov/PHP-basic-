<?php

$numbers = explode(' ', readline());
$count = intval(readline());

$result = array_fill(0, count($numbers), 0);
for ($i = 0; $i < $count; $i++) {
    $lastElement = array_pop($numbers); //get last element
    array_unshift($numbers,$lastElement); //add at the beginning

    for ($j = 0; $j < count($numbers); $j++) {
        $result[$j] += $numbers[$j];
    }
}

print_r($result);

/**
3 2 4 -1
2

                 rotated1[] = -1 3 2 4
                 rotated2[] =  4 -1 3 2
sum[rotated 1               +
    rotated 2]              =  3 2 5 6

*/
