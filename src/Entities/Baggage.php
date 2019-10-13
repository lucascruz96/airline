<?php

namespace Airline\Entities;

class Baggage extends CargoBase
{
    public function __construct(float $price, float $weight, string $description)
    {
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
    }
}
