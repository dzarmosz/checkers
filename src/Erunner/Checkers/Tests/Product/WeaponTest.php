<?php

namespace Erunner\Checkers\Tests\Product;

use Erunner\Checkers\Product\Weapon;
use Erunner\Checkers\Product\Sword;
use \Erunner\Checkers\Product\Mace;

class  WeaponTest extends \PHPUnit_Framework_TestCase
{
    protected $weapon;
//---------------------TEST SWORD--------------------
    public function testSetMaterial()
    {
        $dragonSlayer = new Sword("Dragon Slayer", 100, "PriceForRegularClient");
        $dragonSlayer->setMaterial("Iron");

        $this->weapon = new Sword("Dragon Slayer", 100, "PriceForRegularClient");
        $this->weapon->setMaterial("Iron");

        $this->assertSame($dragonSlayer->getMaterial(), $this->weapon->getMaterial());
    }

    public function testSetWeight()
    {
        $dragonSlayer = new Sword("Dragon Slayer", 100, "PriceForVips");
        $dragonSlayer->setWeight(1100);

        $this->weapon = new Weapon("Dragon Slayer", 100, "PriceForVips");
        $this->weapon->setWeight(1100);

        $this->assertEquals($dragonSlayer->getWeight(), $this->weapon->getWeight());
    }

    public function testSetWidthBlade()
    {
        $dragonSlayer = new Sword("Dragon Slayer", 1000, "PriceForNormalClient");
        $dragonSlayer->setWidthBlade(135);

        $this->weapon = new Sword("Dragon Slayer", 1000, "PriceForNormalClient");
        $this->weapon->setWidthBlade(135);

        $this->assertEquals($dragonSlayer->getWidthBlade(), $this->weapon->getWidthBlade());
    }
//-------------------TEST MACE--------------------

    public function testSetNumberOfSpike()
    {
        $arcanaMace = new Mace("Arcana Mace", 400, "PriceForRegularClient");
        $arcanaMace->setNumberOfSpike(5);

        $this->weapon = new Mace("Arcana Mace", 400, "PriceForRegularClient");
        $this->weapon->setNumberOfSpike(5);

        $this->assertEquals($arcanaMace->getNumberOfSpike(), $this->weapon->getNumberOfSpike());
    }
}
