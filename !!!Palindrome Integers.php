<?php
/**
A palindrome is a number which reads the same backward as forward, such as 323 or 1001.
 * Write a program which reads a positive integer numbers until you receive "End",
 * for each number print whether the number is palindrome or not.
 */

$input = readline();

while ($input !== 'END') {
    if ($input === strrev($input)) {
        echo "true" . PHP_EOL;
    }else {
        echo "false";
    }
    $input = readline();
}
//525 - true