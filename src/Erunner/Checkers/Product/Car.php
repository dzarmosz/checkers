<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Product;
use Erunner\Checkers\Product\Color;
use Erunner\Checkers\Product\Engine;

class Car extends Product implements Color, Engine
{
    public function setColor($color)
    {
        $this->color=$color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setEngine($engine)
    {
        $this->engine=$engine;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    function __clone(){
    }
}