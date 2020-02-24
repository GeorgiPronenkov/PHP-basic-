<?php
/*Last Digit Name
Write a class Number that will hold an integer number.
Write a method in the class that returns the English name of the last digit of the given number.
Write a program that reads an integer and prints the returned value from this method.
*/

class Number {

    private $number;

    public function __construct(int $number){
        $this->number = $number;
    }

    public function getNameLastDigit($number)
    {
        switch ($this->number % 10){ //%10 - взима последна цифра
            case "1":
                echo "one";
                break;
            case "2":
                echo "two";
                break;
            case "3":
                echo "three";
                break;
            case "4":
                echo "four";
                break;
            case "5":
                echo "five";
                break;
            case "6":
                echo "six";
                break;
            case "7":
                echo "seven";
                break;
            case "8":
                echo "eight";
                break;
            case "9":
                echo "nine";
                break;
            case "0":
                echo "zero";
                break;
            default:
                break;
        }
    }
}

$num = intval(readline());
$number = new Number($num);
echo $number->getNameLastDigit($number);