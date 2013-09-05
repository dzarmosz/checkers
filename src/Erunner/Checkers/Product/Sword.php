<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Weapon;
use Erunner\Checkers\Product\WidthBlade;

class Sword extends Weapon implements WidthBlade
{
    public function setWidthBlade($widthBlade)
    {
        $this->widthBlade = $widthBlade;
    }

    public function getWidthBlade()
    {
        return $this->widthBlade;
    }
}
