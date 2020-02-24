<?php

class Cat extends Felime
{
    /**
     *@var string
     */
    private $breed;
    
    public function __construct(string $animalName,
                                   string $animaltype, 
                                   float $animalWeight, 
                                   string $livingRegion,
                                   string $breed)
    {
        parent::__construct($animalName, $animaltype, $animalWeight, $livingRegion);
        $this->setBreed($breed);
        
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    private function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }

    
    public function makeSound(): void
    {
        echo "Meooow" .PHP_EOL;
    }

    public function eat(Food $food): void
    {
        $this->setFoodEaten($food->getQuantity());
    }

    public function __toString()
    {
        return sprintf("%s [%s, ,%s, %.0f, %s, %.0f]\n",
            $this->getAnimalName(),
            $this->getAnimaltype(),
            $this->getBreed(),
            $this->getAnimalWeight(),
            $this->getLivingRegion(),
            $this->getFoodEaten());
    }
}