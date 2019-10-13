<?php

namespace Airline\Entities;

class Cargo extends CargoBase
{
    private $alive;

    public function __construct(float $price, float $weight, string $description, bool $alive)
    {
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
        $this->alive = $alive;
    }

    public function isAlive()
    {
        return $this->alive;
    }
}
