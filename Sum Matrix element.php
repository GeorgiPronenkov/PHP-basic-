<?php
/**
Write program that read a matrix from console and print:
• Count of rows
• Count of columns
• Sum of all matrix’s elements
On first line you will get matrix sizes in format [rows, columns]-array
 */

$matrixSize = array_map('intval', explode(', ', readline()));
$rowSize = $matrixSize[0];
$col = $matrixSize[1];
$matrix = [];

for ($row = 0; $row < $rowSize; $row++) {
    $matrix[$row] = array_map('intval', explode(', ', readline()));
}

$sum = 0;
for ($row = 0; $row < count($matrix); $row++) {  // count($matrix) - vzema redovete
    for ($col = 0; $col < count($matrix[$row]); $col++) {  //razmer na kolonite
        $sum += $matrix[$row][$col];
    }
}

print_r($sum);