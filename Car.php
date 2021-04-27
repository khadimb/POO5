<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
  public const ALLOWED_ENERGIES = [
      'fuel',
      'electric',
  ]; 

  private bool $hasParkBrake = true;

  private string $energy;

  private int $energyLevel;

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    parent ::__construct($color, $nbSeats);
    $this->energy = $energy;
  }
  
  public function switchOn(): bool
  {
    return true;
  }

  public function switchOff(): bool
  {
    return false;
  }

  public function start() 
  {
    try { if( $this->hasParkBrake === true){
      throw new Exception ('Oublie du frein main');
    }
      
  } catch (Exception $e) {
      $this->hasParkBrake = false;
      echo $e . ' Frein à main levé';

  } finally {
      echo '<br> Ma voiture roule comme un donut <br>' ;
  }
  }

  public function getHasParkBrake() 
  {
    return $this->hasParkBrake; 
  }

  public function setHasParkBrake(bool $hasParkBrake)
  {
    $this->hasParkBrake = $hasParkBrake;
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

}
    
