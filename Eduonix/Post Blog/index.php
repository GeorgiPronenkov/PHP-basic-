<?php

require 'classes/Database.php';

$database =  new Database;

$database->query('SELECT * FROM postss');
$rows = $database->resultset();
print_r($rows);