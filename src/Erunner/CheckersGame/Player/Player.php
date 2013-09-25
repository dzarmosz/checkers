<?php

namespace Erunner\CheckersGame\Player;

use Erunner\CheckersGame\Board\Board;

class Player extends Board
{
    protected  $name;
    protected  $score;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScore()
    {
        return $this->score;
    }


}
