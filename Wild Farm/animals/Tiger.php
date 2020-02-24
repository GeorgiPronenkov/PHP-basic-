<?php

class Tiger extends Felime
{
    public function makeSound(): void
    {
        echo "Rooarrr" .PHP_EOL;

    }

    public function eat(Food $food): void
    {
        $function = new \ReflectionClass($food);

        $getClassName = new \ReflectionClass($this);
        $className = $getClassName->getName();

        if ("Meat" == $function->getName()) {
            $this->setFoodEaten($food->getQuantity());
        } else {
            throw new Exception($className .'s are not eat that type pf food');
        }

    }

    public function __toString()
    {
        return sprintf("%s [%s, %.0f, %s, %.0f]\n",
            $this->getAnimalName(),
            $this->getAnimaltype(),
            $this->getAnimalWeight(),
            $this->getLivingRegion(),
            $this->getFoodEaten());
    }
}