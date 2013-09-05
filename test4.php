<?php

interface Tax
{
    public function count($net);
}

class TaxPL implements Tax
{
    public function count($net)
    {
        return 0.23*$net;
    }
}

class TaxEN implements Tax
{
    public function count($net)
    {
        return 0.15*$net;
    }
}

class TaxDE implements Tax
{
    public function count($net)
    {
        return 0.3*$net;
    }
}

class Context
{
    private $strategy;

    public function setCountry($country)
    {
        switch ($country)
        {
            case 'PL':
                $this->strategy = new TaxPL();
                break;
            case 'EN':
                $this->strategy = new TaxEN();
                break;
            case 'DE':
                $this->strategy = new TaxDE();
                break;
        }
    }
    public function getTax()
    {
        return $this->strategy;
    }
}


$tax = new Context();
$tax->setCountry("PL");
echo $tax->getTax()->count(100);
$tax->setCountry("EN");
echo $tax->getTax()->count(100);
$tax->setCountry("DE");
echo $tax->getTax()->count(100);