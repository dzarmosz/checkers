<?php

namespace Erunner\Checkers\Cart;

use Erunner\Checkers\Product\Product;
use Erunner\Checkers\Client\Client;

class Cart
{
    private  $product;
    private  $client;
    private $prices;

    private $items = array();

    public function show()
    {
        foreach ($this->items as $item) {
            echo $item."\n";
        }
    }

    public function addProduct(Product $product)
    {
        $this->items[]  = $product;
    }

    public function getProducts()
    {
        return $this->items;
    }

    public function setClient(Client $client)
    {
        $this->client=$client;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function totalPrice()
    {
        $sum =0;
        foreach($this->items as $item){
            $sum += $item->getPrice();
        }
        return $sum;

    }
}
