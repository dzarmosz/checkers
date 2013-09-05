<?php

namespace Erunner\Checkers\Tests\Product;

use Erunner\Checkers\Product\Car;

class CarTest extends \PHPUnit_Framework_TestCase
{
    protected $car;

    public function testSetColor()
    {
        $audi = new Car("audi 6", 2500, "PriceForVips");
        $audi->setColor("black");

        $this->car =new Car("audi 6", 2500, "PriceForVips");
        $this->car->setColor("black");

        $this->assertSame($audi->getColor(), $this->car->getColor());
    }

    public function testSetEngine()
    {
        $audi = new Car("audi 6", 2500, "PriceForVips");
        $audi->setEngine(2.5);

        $this->car = new Car("audi 6", 2500, "PriceForVips");
        $this->car->setEngine(2.5);

        $this->assertEquals($audi->getEngine(), $this->car->getEngine());
    }
}