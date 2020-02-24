<?php
/**
 Order by Age
You will receive an unknown number of lines. On each line, you will receive array with 3 elements.
 * The first element will be а string and represents the name of the person.
 * The second element will be a string and will represent the ID of the person.
 * The last element will be an integer and represents the age of the person.
When you receive the command "End", stop receiving input and print all the people, ordered by age.
 */

class Person {
    private $name;
    private $id;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $id
     * @param $age
     */
    public function __construct($name, $id, $age)//ф-я , приемаща 3 параметъра и записва 3 ст-ти
    {
        $this->name = $name; //this-за тек.човек,
        $this->id = $id;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }
}

$input = readline();
$people = [];

while ($input !== 'End') {
    $args = explode(' ', $input);
    $name = $args[0];
    $id = $args[1];
    $age = intval($args[2]);
    $person = new Person($name, $id, $age);
    $people [] = $person; //записва person

    $input = readline();
}

//sorting
usort($people, function (Person $p1, Person $p2) { //сравнява всеки един човек с всеки друг(от масива)
    $age1 = $p1->getAge();
    $age2 = $p2->getAge();
    return $age2 <=> $age1; //сравнява в обратен ред
});

foreach ($people as $person) {
    $name = $person->getName();
    $id = $person->getId();
    $age = $person->getAge();
    echo "$name with ID: $id: is $age years old.".PHP_EOL;
}
