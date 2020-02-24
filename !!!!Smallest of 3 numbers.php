<?php

$number1 = readline();
$number2 = readline();
$number3 = readline();

//function minNum(int $n1, $n2, $n3): int {
//    if ($n1 < $n2 && $n1 < $n3) {
//        return $n1;
//    }else if ($n2 < $n3 && $n2 < $n1) {
//        return $n2;
//    }
//    return $n3;
//}

$min[] = min($number1,$number1,$number3);
$res = array_shift($min);

echo $res;