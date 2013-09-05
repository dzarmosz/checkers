<?php

interface Price
{
    public function count($value);
}

class PriceForNewClient implements Price
{
    public function count($value)
    {
        return 1.20 * $value;
    }
}

class PriceForRegularClient implements Price
{
    public function count($value)
    {
        return 1.15 * $value;
    }
}

class PriceForWholesaler implements Price
{
    public function count($value)
    {
        return 1.10 * $value;
    }
}

class Product
{
    private $name;
    private $basicPrice;
    private $strategyPrice;

    public function __construct($name, $basicPrice, $strategy)
    {
        $this->name = $name;
        $this->basicPrice = $basicPrice;
        $this->strategyPrice = new $strategy();
    }

    public function getPrice()
    {
        return $this->strategyPrice->count($this->basicPrice);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setStrategy($strategy)
    {
        $this->strategyPrice = new $strategy();
    }
}

$product = new Product("produkt 1", 100, "PriceForNewClient");
echo "Nazwa produktu: ".$product->getName().", cena produktu: ".$product->getPrice()."<br />";
$product->setStrategy("PriceForRegularClient");
echo "Nazwa produktu: ".$product->getName().", cena produktu: ".$product->getPrice()."<br />";
$product->setStrategy("PriceForWholesaler");
echo "Nazwa produktu: ".$product->getName().", cena produktu: ".$product->getPrice()."<br />";