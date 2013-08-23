<?php

namespace Erunner\Checkers\Product;

abstract class Product
{
    protected  $name;
    protected  $price;

    public function __construct($name, $price)
    {
        $this->name=$name;
        $this->price=$price;
    }

    public function __toString()
    {
        return $this->name.' '.$this->price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    abstract function __clone();
}

