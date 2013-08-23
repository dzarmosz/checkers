<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Product;

class Cloth extends Product implements Color, Size
{
    public function setColor($color)
    {
        $this->color=$color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setSize($size)
    {
        $this->size=$size;
    }

    public function getSize()
    {
        return $this->size;
    }
}