<?php
/*
finds the longest increasing subsequence in an array of integers.
 The longest increasing subsequence is a portion of the array (subsequence) that is
strongly increasing and has the longest possible length. If several such subsequences exist, find the left most of them.
Examples
Input	Output
3 2 3 4 2 2 4	2 3 4
4 5 1 2 3 4 5	1 2 3 4 5
3 4 5 6	3 4 5 6
0 1 1 2 2 3 3	0 1
*/

for ($row = 0; $row < count($input); $row++) {
    $currentCount = 0;
    for ($col = $row; $col < count($input) -1; $col++) { //за да не излезе от масива
        if ($input[$col] < $input[$col + 1]){           //дали единият е по-малък от другия елемент
            $currentCount++;
            if ($currentCount > $maxCount){
                $maxCount = $currentCount;
                $index = $row;
            }
        }else {
            break;
        }
    }
}
for ($x = 0; $x <= $maxCount; $x++) {
    echo $input[$x + $index] . " ";
}
