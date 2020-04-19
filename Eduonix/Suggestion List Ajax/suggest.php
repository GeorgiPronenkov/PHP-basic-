<?php

//people array from db

$people[] = "john";
$people[] = "jim";
$people[] = "jack";
$people[] = "steve";
$people[] = "max";
$people[] = "smith";
$people[] = "jake";
$people[] = "sean";
$people[] = "ilaiza";
$people[] = "ivan";
$people[] = "dimo";
$people[] = "chris";

//get Query String
$q = $_REQUEST['q'];

$suggestion = '';

//get Suggestions
if ($q !== '') {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person) {
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === '') {
                $suggestion = $person;
            } else {
                $suggestion .= ', $person';
            }
        }
    }
}

echo $suggestion === '' ? 'no suggestion' : $suggestion;