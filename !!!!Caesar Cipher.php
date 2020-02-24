<?php
/**
 Caesar Cipher
Write a program that returns an encrypted version of the same text.
 * Encrypt the text by shifting each character with three positions forward.
 */

$word = readline();
$output = "";

for ($i = 0; $i < strlen($word); $i++) {
    $currentLetter = ord($word[$i]) + 3; //тек. +3
    $output .= chr($currentLetter);
}
echo $output;