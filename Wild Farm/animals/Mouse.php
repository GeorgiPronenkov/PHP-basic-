<?php

class Mouse extends Mammal
{

    public function makeSound(): void
    {
        echo "Sqweeek" .PHP_EOL;

    }

    /**
     * @param Food $food
     * @throws ReflectionException
     */
    public function eat(Food $food): void
    {
        $func = new \ReflectionClass($this);
        $className = $func->getName();

        if ("Vegetable" == $food->getClassName()) {
            $this->setFoodEaten($food->getQuantity());
        } else {
            throw new Exception($className . "are not eating that type of food\n");
        }
    }
}