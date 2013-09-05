<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\PriceForRegularClient;
use Erunner\Checkers\Product\PriceForNewClient;
use Erunner\Checkers\Product\PriceForVips;

abstract class Product
{
    protected  $name;
    protected  $price;
    protected  $strategyPrice;

    public function __construct($name, $price, $strategy)
    {
        $this->name = $name;
        $this->price = $price;
        $this->setStrategy($strategy);
    }

    public function __toString()
    {
        return $this->name.' '.$this->price." strategy price: ".$this->strategyPrice->count($this->price);
    }

    public function getPrice()
    {
        return $this->strategyPrice->count($this->price);
    }

    public function setStrategy($strategy)
    {
        switch ($strategy)
        {
            case 'PriceForRegularClient':
                $this->strategyPrice = new PriceForRegularClient();
                break;
            case 'PriceForNewClient':
                $this->strategyPrice = new PriceForNewClient();
                break;
            case 'PriceForVips':
                $this->strategyPrice = new PriceForVips();
                break;
        }
    }

    abstract function __clone();
}
