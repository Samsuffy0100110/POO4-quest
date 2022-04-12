<?php



abstract class Highway 
{
    protected array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed;

   
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
 
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

   
    public function getNbLane()
    {
        return $this->nbLane;
    }

   
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

   
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

  
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    abstract public function addVehicle(vehicle $vehicle);

}
