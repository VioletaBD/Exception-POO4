<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): bool
    {
      if(in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
      }   
      return $this;
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

    public function setHasParkBrake(): bool {
        if($this->hasParkBrake == true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
        return $this->hasParkBrake;
    }
}