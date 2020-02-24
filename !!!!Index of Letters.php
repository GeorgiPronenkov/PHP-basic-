<?php
/*
array containing all letters from the alphabet (a-z).
Read a lowercase word from the console and print the index of each of its letters from the letters array
*/

$input = strtolower(readline());
$alphabet = "abcdefghijklmnopqrstuvwxyz";
for ($x = 0; $x < strlen($input); $x++) {
    echo $input[$x] . " -> " .strpos($alphabet, $input[$x]) . PHP_EOL; //input[$x]-дава символа
}

/**
jorro
j -> 9
o -> 14
r -> 17
r -> 17
o -> 14
 */
