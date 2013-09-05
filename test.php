<?php

interface Pizza
{
    public function getName();
}

class HawalianPizzda implements Pizza
{
    public function getName()
    {
        return "Hawalian Pizza";
    }
}

class DeluxePizza implements Pizza
{
    public function getName()
    {
        return "Deluxe Pizza";
    }
}

interface Creator
{
    public function create($type);
}

class ConcreteCreator implements Creator
{
    public function create($type)
    {
        switch($type)
        {
            case 'Hawalian':
                return new HawalianPizzda();
                break;
            case 'Deluxe':
                return new DeluxePizza();
                break;
        }
    }
}

$creator = new ConcreteCreator();
$prod1 = $creator->create('Hawalian');
$prod2 = $creator->create('Deluxe');
echo $prod1->getName();
echo $prod2->getName();