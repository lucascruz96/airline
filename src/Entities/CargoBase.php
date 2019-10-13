<?php

namespace Airline\Entities;

abstract class CargoBase
{
    protected $price;
    protected $weight;
    protected $description;

    public function getPrice()
    {
        return $this->price;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
