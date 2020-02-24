<?php
/**
 * Zig-Zag Arrays
Write a program which creates 2 arrays.
 You will be given an integer n.
 * On the next n lines you get 2 integers.
 * Form 2 arrays as shown below.
 */

//3
//10 20
//20 30
//5 6

$n = intval(readline());
$zig = [];
$zag = [];

for ($i = 0; $i < $n; $i++) {
    $args = explode(" ", readline());
    if ($i % 2 == 0) {
        $zig[] = $args[0];
        $zag[] = $args[1];
    }else {
        $zag[] = $args[0];
        $zig[] = $args[1];
    }
}

echo implode(" ", $zig).PHP_EOL;
echo implode(" ", $zag).PHP_EOL;
