<?php
/*
a b c d e	e d c b a
-1 hi ho w	w ho hi -1
Hints
•	Read the array of strings.
•	Exchange the first element (at index 0) with the last element (at index n-1).
•	Exchange the second element (at index 1) with the element before the last (at index n-2).
•	Continue the same way until the middle of the array is reached.
•	Another, shorter approach, is to use the array_reverse() extension method from PHP Build-in methods.  */

echo implode(" ",array_reverse(explode(" ", readline())));
//проч.елем.от инпута и ги сплитваме с празно място и получения масив го ревърсваме, и след това конкат. в стринг

//or
$numbers = explode(" ", readline()); //split by empty space
for ($x = 0; $x < count($numbers); $x++) {
    echo $numbers[count($numbers)-$x-1] . " "; //4-0-1
}

//or
for ($x = count($numbers)-1; $x >=0; $x--) {  //count($numbers)-1 => последния елемент
    echo $numbers[$x] . " ";
}



