<?php

namespace Erunner\Checkers\Tests\Cart;

use Erunner\Checkers\Cart\Cart;
use Erunner\Checkers\Product\Car;
use Erunner\Checkers\Client\Client;
use Erunner\Checkers\Product;

class CartTest extends \PHPUnit_Framework_TestCase
{
    /** @var Cart $cart */
    protected $cart;

    public function setUp()
    {
        $this->cart = new Cart();
    }

    public function testAddProduct()
    {
        $this->cart->addProduct(new Car('car', 50, 'PriceForRegularClient'));

        $this->assertCount(1, $this->cart->getProducts());
    }

    public function testSetClient()
    {
        $chuck = new Client("Chuck", "Norris", "123456789", "New York");
        $this->cart->setClient($chuck);

        $this->assertSame($chuck, $this->cart->getClient());
        $this->assertInstanceOf('Erunner\Checkers\Client\Client', $this->cart->getClient());
    }

    public function testTotalPrice()
    {
       $audiA6 = new Car('audi a6', 100, 'PriceForRegularClient');
       $audiA5 = new Car('audi a5', 110, 'PriceForRegularClient');
       $audiA4 = new Car('audi a4', 120, 'PriceForRegularClient');

       $cart1 = new Cart();
       $cart1->addProduct($audiA4);
       $cart1->addProduct($audiA5);
       $cart1->addProduct($audiA6);

       $this->cart->addProduct($audiA4);
       $this->cart->addProduct($audiA5);
       $this->cart->addProduct($audiA6);

       $this->assertEquals($cart1->totalPrice(),$this->cart->totalPrice() );
    }

    public function testShow()
    {
        $audiA6 = new Car('audi a6', 100, 'PriceForRegularClient');
        $audiA5 = new Car('audi a5', 110, 'PriceForRegularClient');
        $audiA4 = new Car('audi a4', 120, 'PriceForRegularClient');

        $cart1 = new Cart();
        $cart1->addProduct($audiA4);
        $cart1->addProduct($audiA5);
        $cart1->addProduct($audiA6);

        $this->cart->addProduct($audiA4);
        $this->cart->addProduct($audiA5);
        $this->cart->addProduct($audiA6);

        $this->assertSame($cart1->show(), $this->cart->show());
    }
}
