<?php
/**
5.	Login
You will be given a string representing a username. The password will be that username reversed.
 * Until you receive the correct password print on the console "Incorrect password. Try again.".
 * When you receive the correct password print "User {username} logged in."
 * However on the fourth try if the password is still not correct print "User {username} blocked!" and end the program
 */

$userName = readline();
$userLength = strlen($userName); //взема дълж.на user-a
$pass = "";

for ($i = $userLength - 1; $i >= 0; $i--) {    //userLenght-1 ->>>> 0 1 2 3 --->4 positions
   $pass .= $userName[$i];   //към празния стринг долепя текущата буква
}

$attemptsToLogin = 0;
while ($attemptsToLogin++ < 5) {
    //attempts++ ---->докато са по-малко от 5 ги увеличаваме с 1
    $input = readline();            // прочита тек.парола
    if ($input === $pass) {
        echo "User $userName logged in.".PHP_EOL;
        break;
    }
    if ($attemptsToLogin === 4) {
        echo "User $userName blocked!".PHP_EOL;
        break;
    }else {
        echo "Incorrect password.Try again!".PHP_EOL;
    }
}


