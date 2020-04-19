<?php

class People
{
    public $person1 = 'Mike';
    public $person2 = 'Mike2';
    public $person3 = 'Mike3';

    protected $person4 = 'Mike4';
    private $person5 = 'Mike5   ';

    function iterate() {
        foreach ($this as $key=>$value) {
            print "$key => $value\n";
        }
    }
}

$people = new People;
$people->iterate();
