<?php
/**
Sum Reversed Numbers
Write a program that reads sequence of numbers, reverses their digits, and prints their sum.
 */

$input = explode(' ', readline());
$sum = 0;

for ($i = 0; $i < count($input); $i++) {
    $sum += intval(strrev($input[$i]));
}
echo $sum;
