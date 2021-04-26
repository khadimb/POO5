<?php 
require_once 'Vehicle.php'; 

abstract class HighWay
{
    protected array $currentVehicles; 
    protected int $nbLane;
    protected int $maxSpeed; 

    abstract public function addVehicle(Vehicle $vehicle); 

    public function getCurrentVehicles() : array
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicles() : void
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function getNbLane() : int
    {
        return $this->nbLane;
    }

    public function setNbLane() : void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed() : void
    {
        $this->maxSpeed = $maxSpeed;
    }
}