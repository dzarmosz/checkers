<?php

use Erunner\Checkers\Product\Weapon;
class  WeaponTest extends \PHPUnit_Framework_TestCase
{
    protected $weapon;

    public function testSetMaterial()
    {
        $dragonSlayer = new \Erunner\Checkers\Product\Sword("Dragon Slayer", 100, "PriceForRegularClient");
        $dragonSlayer->setMaterial("Iron");

        $this->weapon = new \Erunner\Checkers\Product\Sword("Dragon Slayer", 100, "PriceForRegularClient");
        $this->weapon->setMaterial("Iron");

        $this->assertSame($dragonSlayer->getMaterial(), $this->weapon->getMaterial());
    }

    public function testSetWeight()
    {
        $dragonSlayer = new \Erunner\Checkers\Product\Sword("Dragon Slayer", 100, "PriceForVips");
        $dragonSlayer->setWeight(1100);

        $this->weapon = new Weapon("Dragon Slayer", 100, "PriceForVips");
        $this->weapon->setWeight(1100);

        $this->assertEquals($dragonSlayer->getWeight(), $this->weapon->getWeight());
    }
}
