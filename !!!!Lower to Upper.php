<?php
/**
Lower or Upper
Write a program that prints whether a given character is upper-case or lower case.
 */

$char = readline();
$ascii = ord($char); // взема ascii кодът на char

if ($ascii >= 65 && $ascii <= 90) {
    echo "upper-case";
}else if ($ascii >= 97 && $ascii <= 122) {
    echo "lower-case";
}else {
    echo "not an alphabetical char";
}


//second solution
$char = readline();

if (ctype_upper($char)) {
    echo "upper-case";
}else if (ctype_lower($char)) {
    echo "lower-case";
}else {
    echo "Not consistent chars!";
}