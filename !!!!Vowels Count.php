<?php

$word = readline();

function countVowels(string $words): int {
    $count = 0;
    for ($i = 0; $i < strlen($words); $i++) {
        $currentSymbol = strtolower($words[$i]);
        if ($currentSymbol == 'a' ||
            $currentSymbol == 'u' ||
            $currentSymbol == 'e' ||
            $currentSymbol == 'o' ||
            $currentSymbol == 'i') {
            $count++;
        }
    }
    return $count;
}

echo countVowels($word);