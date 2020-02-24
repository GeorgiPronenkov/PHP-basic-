<?php

/**
Print and Sum
display numbers from given start to given end and their sum.
 */

$startNum = intval(readline());
$endNum = intval(readline());
$sum = 0;

for ($i = $startNum; $i <= $endNum; $i++) {
    echo "$i ";
    $sum += $i;
}
echo PHP_EOL."Sum: $sum";

/*
5
8

5 6 7 8
Sum: 26
 */