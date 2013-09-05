<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Price;

class PriceForVips implements Price
{
    public function count($value)
    {
        return 0.8 * $value;
    }
}
