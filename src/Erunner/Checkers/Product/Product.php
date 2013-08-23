<?php

namespace Erunner\Checkers\Product;

interface Author{
    function setAuthor($author);
    function getAuthor();
}

interface Color{
    function setColor($color);
    function getColor();
}

interface Engine{
    function setEngine($engine);
    function getEngine();
}

interface Size{
    function setSize($size);
    function getSize();
}

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

    function __clone(){
    }
}

