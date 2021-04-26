<?php

class Truck extends Vehicle 
{ 

    protected int $capacity; 

    protected int $loading = 0;

    public function __construct(int $capacity, string $color, int $nbSeats, string $energy, int $loading)
    {
      $this->capacity = $capacity;  
      parent ::__construct($color, $nbSeats);
      $this->energy = $energy;
      $this->loading = $loading;
    }

    public function getCapacity() : int
    {
        return $this->capacity; 
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    
    public function isFull(): string
    {
        if ($this->loading >= $this->capacity)
        {
            $sentence = 'full';
        } else {
            $sentence = 'in filling';
        }
        return $sentence;
    }
    
}