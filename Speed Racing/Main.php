<?php

require_once "Car.php";

$n = intval(readline());
$cars = [];

while ($n-- > 0) {
    $data = explode(' ', readline());

    $model = $data[0];
    $fuelAmount = $data[1];
    $fuelCostPerKm = floatval($data[1]);

    $car = new Car($model, $fuelAmount, $fuelCostPerKm);

    $cars[$model] = $car;
}

while (true) {
    $input = explode(' ', readline());

    if ($input[0] === 'End') {
        break;
    }
    $model = $input[1];
    $amountOfKm = floatval($input[2]);

    $cars[$model]->drive($amountOfKm);
}
foreach ($cars as $car) {
    echo $car;
}