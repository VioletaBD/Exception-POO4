<?php

require '../src/Car.php';

$car = new Car('green', '4', 'electric', '10');

try {
    echo $car->start() ."<br>";
} catch(Exeption $i) {
    echo "Exeption received: " . $i->getMessage() . "<br>";
} finally {
    echo "Ma voiture roule comme un donut";
}

$car->setParkBrake(false);
try {
    echo ($car->start());
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Ma voiture roule comme un donut";
}
?>