<?php

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'Vehicle.php';



$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$skateBoard = new Skateboard('Black', 1);
var_dump($skateBoard);


$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('Red', 3, 'gazoil', 100);
$truck->setFullLoading(0);
var_dump($truck);

$motorWay = new MotorWay;
$motorWay->addVehicle($car);
$motorWay->addVehicle($truck);
var_dump($motorWay);

$pedestrianWay = new PedestrianWay;
$pedestrianWay->addVehicle($bicycle);
$pedestrianWay->addVehicle($skateBoard);
var_dump($pedestrianWay);

$residentialWay = new ResidentialWay;
$residentialWay->addVehicle($bicycle);
$residentialWay->addVehicle($skateBoard);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($truck);
var_dump($residentialWay);

echo $car->start();











