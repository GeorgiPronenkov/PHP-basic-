<?php
/**
Write a program, which receives a number – n, and prints a triangle from 1 to n as in the examples
 */

$number = intval(readline());
for ($row = 1; $row <= $number; $row++) {
    for ($col = 0; $col < $row; $col++) {
        echo "$row ";
    }
    echo PHP_EOL;
}
