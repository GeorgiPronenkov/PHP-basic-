<?php

require_once "Box.php";

//read the input
$length = floatval(readline());
$width = floatval(readline());
$height = floatval(readline());

try {
    //create instance
    $box = new Box($length, $width, $height);
} catch (Exception $exception) {
    echo $exception->getMessage();
}
