<?php

use Erunner\Checkers\Product\Cloth;

class ClothTest extends \PHPUnit_Framework_TestCase
{
    protected $cloth;

    public function testSetSize()
    {
        $blouse = new Cloth("Adidas blouse", 69, "PriceForRegularClient");
        $blouse->setSize("M");

        $this->cloth = new Cloth("Adidas blouse", 69, "PriceForRegularClient");
        $this->cloth->setSize("M");

        $this->assertSame($blouse->getSize(), $this->cloth->getSize());
    }

    public function testSetColor()
    {
        $blouse = new Cloth("Adidas blouse", 69, "PriceForRegularClient");
        $blouse->setColor("White");

        $this->cloth = new Cloth("Adidas blouse", 69, "PriceForRegularClient");
        $this->cloth->setColor("White");

        $this->assertSame($blouse->getColor(), $this->cloth->getColor());
    }
}
