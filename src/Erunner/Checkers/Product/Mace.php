<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Weapon;
use Erunner\Checkers\Product\NumberOfSpike;

class Mace extends Weapon implements NumberOfSpike
{
    public function setNumberOfSpike($numberOfSpike)
    {
        $this->numberOfSpike = $numberOfSpike;
    }

    public function getNumberOfSpike()
    {
        return $this->numberOfSpike;
    }
}