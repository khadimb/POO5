<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
/*$bicycle = new Bicycle('blue', 1);
$bicycle->setCurrentSpeed(0); 
$tornado = new Bicycle('black', 1);
$tornado->forward(); 
//var_dump($bicycle);
//echo $tornado->forward();
//$bicycle->dump();
$car = new Car('orange', 4, 'gasoil');*/

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();

$car = new Car('green', 4, 'electric'); 
echo $car->forward(); 

$truck = new Truck(5, 'black', 3, 'fuel', 4);
echo $truck->isFull();

$car->setHasParkBrake(true); 
$car->start();

$bicycle->setcurrentSpeed(15);
echo $bicycle->switchOn();


/*echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();*/


