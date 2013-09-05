<?php

class Player
{
    private $player;

    public function setPlayer($player)
    {
        $this->player = $player;
    }

    public function render()
    {
        return $this->player;
    }
}

interface Builder
{
    public function buildPlayer();
    public function getPlayer();
}

class FlashBuilder implements Builder
{
    private $player;

    public function __construct()
    {
        $this->player = new Player();
    }

    public function buildPlayer()
    {
        $this->player->setPlayer("Player w Flash");
    }

    public function getPlayer()
    {
        return $this->player;
    }
}

class HTMLBuilder implements Builder
{
    private $player;

    public function __construct()
    {
        $this->player = new Player();
    }

    public function  buildPlayer()
    {
        $this->player->setPlayer("Player w HTML");
    }

    public function getPlayer()
    {
        return $this->player;
    }
}

class Director
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function construct()
    {
        $this->builder->buildPlayer();
    }

    public function getResult()
    {
        return $this->builder->getPlayer();
    }
}

$html = new HTMLBuilder();
$flash = new FlashBuilder();
$director = new Director($flash);
$director->construct();
$player = $director->getResult();
echo $player->render();

$director2 = new Director($html);
$director2->construct();
$player2 = $director->getResult();
echo $player2->render();
