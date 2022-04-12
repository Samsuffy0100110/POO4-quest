<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private bool $hasParkBrake;

    protected string $energy;

    protected int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {   
        parent::__construct($color, $nbSeats);
        
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

   
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }

    public function start()
    {
        try{
            return $this->hasParkBrake;

         } catch(Exception){
            if ($this->hasParkBrake === false) {
                return 'What\'s the h....';
            }
            
        } finally{
            return 'Ma voiture roule comme un donut';
        }
    }
    
    
    public function setParkBrake()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception ("On my way");
        }else{
            return "What's the h...";
        }
        
    }
   
   

}