<?php
/**
	Sum Digits
You will be given a single integer. Your task is to find the sum of its digits.
 */

$number = intval(readline());
$sum = 0;

while ($number > 0) {
    $sum += $number % 10;
    $number = intval($number / 10);
}
echo $sum;

//Second solution:
$number = intval(readline());
$sum = 0;

$length = strlen($number); //взема дължината на стринга
for ($i = 0; $i < $length; $i++) {
    $sum += $number[$i];
}
echo $sum;