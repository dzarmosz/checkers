<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Weapon;
use Erunner\Checkers\Product\numberOfSpike;

class Mace extends Weapon implements numberOfSpike
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