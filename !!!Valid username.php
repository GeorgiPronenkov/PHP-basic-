<?php
/**
Write a program that reads user names on a single line (joined by ", ") and prints all valid usernames.
A valid username is:
• Has length between 3 and 16 characters
• Contains only letters, numbers, hyphens and underscores
• Has no redundant symbols before, after or in between
 */

$userNames = explode(', ', readline());

foreach ($userNames as $username) { //минаваме през всички usernames
    $length = strlen($username); //всемаме дължината
    if ($length >= 3 && $length <= 16) {
        $isValid = true;
        for ($i = 0; $i < $length; $i++) { //минава през всяка буква
            $currChar = $username[$i];
            if (!(ctype_alnum($currChar) || $currChar === '_' || $currChar === '-')) { //дали тек.символ е от азбуката и връща true
               $isValid = false;
               break;
            }
        }
        if ($isValid) {
            echo $username . PHP_EOL;
        }
    }
}
