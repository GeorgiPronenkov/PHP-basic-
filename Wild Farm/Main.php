<?php

spl_autoload_register();

class Main
{
    private const END = 'End';

    public static function readData()
    {
        $input = readline();
        while ($input != self::END) {

            $animalData = explode(' ', $input);
            $animal = Animal_Factory::getAnimal($animalData);

            $foodData = explode(' ', readline()); //!!!
            $food = Food_Factory::getFood($foodData);

            $animal->makeSound();

            try {
                $animal->eat($food);
                echo $animal;
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            $input = readline();
        }
    }
}

Main::readData();