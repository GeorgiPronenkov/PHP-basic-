<?php
/*	Cooking by Numbers
Write a program that receives a number and a list of five operations.
Perform the operations in sequence by starting with the input number and
using the result of every operation as starting point for the next.
Print the result of every operation in order. The operations can be one of the following:
•	chop – divide the number by two
•	dice – square root of number
•	spice – add 1 to number
•	bake – multiply number by 3
•	fillet – subtract 20% from number
The input comes in 2 lines. On the first line you will receive your
starting point and must be parsed to a number. On the second line you
will receive 5 commands separated by “, “ each one will be the name of the operation to be performed.
*/

$number = intval(readline());

$commands = explode(", ", readline());

$calculate = function($command, $number) {  //
    switch ($command) {
        case "chop":
            $number /= 2;
            break;
        case "dice":
            $number = sqrt($number);
            break;
        case "spice":
            $number++;
            break;
        case "bake":
            $number *= 3;
            break;
        case "fillet":
            $number *= 0.8;
            break;
    }
    return $number;
};
foreach ($commands as $index => $command) {
    $number = $calculate($command, $number);
    echo $number . PHP_EOL;
}

/* 9
3
4
2
6
4.8
