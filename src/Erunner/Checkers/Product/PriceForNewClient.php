<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Price;

class PriceForNewClient implements Price
{
    public function count($value)
    {
        return 1.20 * $value;
    }
}
