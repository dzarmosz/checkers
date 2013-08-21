<?php

namespace Erunner\Checkers;

use Erunner\Checkers;

class Cart
{
    private  $product;
    private  $client;
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

    public function setClient($client)
    {
        $this->client=$client;
    }

    public function getClient()
    {
        return $this->client;
    }


}
