<?php

use Erunner\Checkers\Product\Product;

class PricesTest extends \PHPUnit_Framework_TestCase
{
    protected $product;

    public function testPriceForRegularClient()
    {
        $product1 = new Product("Product 1", 100, "PriceForRegularClient");

        $this->product = new Product("Product 1", 100, "PriceForRegularClient");
        $this->assertEquals($product1->getPrice(), $this->product->getPrice());
    }

    public function testPriceForNewClient()
    {
        $product1 = new Product("Product 1", 100, "PriceForNewClient");

        $this->product = new Product("Product 1", 100, "PriceForNewClient");
        $this->assertEquals($product1->getPrice(), $this->product->getPrice());
    }

    public function testPriceForVips()
    {
        $product1 = new Product("Product 1", 100, "PriceForVips");

        $this->product = new Product("Product 1", 100, "PriceForVips");
        $this->assertEquals($product1->getPrice(), $this->product->getPrice());
    }
}
