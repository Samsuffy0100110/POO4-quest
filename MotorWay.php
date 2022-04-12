<?php

require_once 'HighWay.php';
require_once 'Car.php';
require_once 'Truck.php';

final class MotorWay extends Highway
{
    protected int $nbLane = 4;

    protected int $maxSpeed = 130;

    final public function addVehicle(vehicle $vehicle)
    {
        if ($vehicle instanceof Car && $vehicle instanceof Truck) {
            $this->currentVehicles[] = $vehicle;
            return $this->currentVehicles;
    }
}



}