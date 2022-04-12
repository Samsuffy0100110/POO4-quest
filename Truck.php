<?php

require_once 'Vehicle.php';

class Truck extends Vehicle

{

    protected int $loadingCapacity;

    private int $loading;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadingCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);

        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->loadingCapacity = $loadingCapacity;
    }

    public function getFullLoading(): int
    {
        return $this->loading;
    }

    public function setFullLoading(int $loading): void
    {

        $this->loading = $loading;
    }
    
    public function capacity(): string
    {

        if ($this->loading <= $this->loadingCapacity) {

            return "in filling";
        } else {
            return "Full";
        }
    }
}
