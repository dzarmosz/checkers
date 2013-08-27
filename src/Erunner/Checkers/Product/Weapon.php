<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Product;
use Erunner\Checkers\Product\Material;
use Erunner\Checkers\Product\Weight;

class Weapon extends Product implements Material, Weight
{
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    function __clone()
    {
    }
}
