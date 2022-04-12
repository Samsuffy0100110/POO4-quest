<?php

require_once 'HighWay.php';


final class ResidentialWay extends Highway

{

    protected int $nbLane = 2;

    protected int $maxSpeed = 50;

    final public function addVehicle(vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle ) {
            $this->currentVehicles[] = $vehicle;
            return $this->currentVehicles;
        }
    }
    
}