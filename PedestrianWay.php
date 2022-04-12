<?php

require_once 'HighWay.php';


final class PedestrianWay extends Highway

{
    protected int $nbLane = 1;

    protected int $maxSpeed = 10;

    final public function addVehicle(vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
            return $this->currentVehicles;
    }
}

}

