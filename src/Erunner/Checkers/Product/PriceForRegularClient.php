<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Price;

class PriceForRegularClient implements Price
{
    public function count($value)
    {
        return 1.15 * $value;
    }
}
