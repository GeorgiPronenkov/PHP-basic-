<?php
/**
 Value of a String
Write a program which finds the sum of the ASCII codes of the letters in a given string.
 * Your tasks will be a bit harder, because you will have to find the sum of either the lowercase or
the uppercase letters.
On the first line, you will receive the string.
On the second line, you will receive one of two possible inputs:
• If you receive “UPPERCASE”  find the sum of all uppercase English letters in the previously received string
•  If you receive “LOWERCASE”  find the sum of all lowercase English letters in the previously received string
You should not sum the ASCII codes of any characters, which is not letters.
At the end print the sum in the following format:
• The total sum is: {sum}
 */

$word = readline();
$caseType = readline();
$sumLower = 0;
$sumUpper = 0;

for ($i = 0; $i < strlen($word); $i++) {
    $currentLetter = $word[$i];
        if (ctype_lower($currentLetter)) { //взема тек.буква и ако е малка я добавя към сумата
            $sumLower += ord($currentLetter);   //ord = ASCII code
        } else if (ctype_upper($currentLetter)){
        $sumUpper += ord($currentLetter);
        }
}
if ($caseType === 'LOWERCASE') {
    echo "Total sum : $sumLower";
}else {
    echo  "Total sum : $sumUpper";
}
