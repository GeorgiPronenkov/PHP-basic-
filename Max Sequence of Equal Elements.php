<?php
/* longest sequence of equal elements in an array of integers.
If several longest sequences exist, print the leftmost one.
Examples
Input	Output
2 1 1 2 3 3 2 2 2 1	2 2 2
1 1 1 2 3 1 3 3	1 1 1
4 4 4 4	4 4 4 4
0 1 1 5 2 2 6 3 3	1 1
Hints
•	Start with the sequence that consists of the first element: start=0, len=1.
•	Scan the elements from left to right, starting at the second element: pos=1…n-1.
o	At each step compare the current element with the element on the left.
	Same value  you have found a sequence longer by one  len++.
	Different value  start a new sequence from the current element: start=pos, len=1.
o	After each step remember the sequence it is found to be longest at the moment: bestStart=start, bestLen=len.
    •	Finally, print the longest sequence by using bestStart and bestLen.
 */

$input = array_map("intval", explode(" ", readline()));

$maxCount = 0;
$index = 0;

for ($row = 0; $row < count($input); $row++) {
    $currentCount = 0;
    for ($col = $row; $col < count($input); $col++) { //do dulj.na kolonata
        if ($input[$row] == $input[$col]){            //ako reda suvpada s kolonata
            $currentCount++;
            if ($currentCount >= $maxCount){
                $maxCount = $currentCount;
                $index = $row;
            }
        }else {
            break;
        }
    }
}
for ($x = 0; $x < $maxCount; $x++) {
    echo $input[$x + $index] . " ";
}
//0 1 1 5 2 2 6 3 3 ->>> 3 3
