<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Weapon;
use Erunner\Checkers\Product\widthBlade;

class Sword extends Weapon implements widthBlade
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
