<?php
/**
Write a class DecimalNumber that has a method that prints all its digits in reversed order
 */

class DecimalNumber
{
    /**
     *@var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function printReversed(): void
    {
        for ($i = strlen($this->value) - 1; $i >= 0; $i--) {  // echo strrev($this->value) . PHP_EOL;
            echo $this->value[$i];
        }
        echo PHP_EOL;
    }
}
$num = new DecimalNumber(readline());
$num->printReversed();

/**
1234
4321
 */