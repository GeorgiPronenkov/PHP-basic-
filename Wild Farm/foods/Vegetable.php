<?php

class Vegetable extends Food
{
    private $className = "Vegetable";
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
    }

    public function getClassName(): string
    {
        $func = new \ReflectionClass($this);
        $className = $func->getName();

        return $className;
    }

}