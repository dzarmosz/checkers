<?php

namespace Erunner\CheckersGame\Board;


class Board
{
    protected  $board;
    protected  $size = array();

    public function __construct()
    {
        $this->board = array(array(),array(),array());
    }

    public function setPoint($x, $y, $sign)
    {
        $this->board[$x-1][$y-1] = $sign;
    }

    public function setSize($n, $m)
    {
        $this->size = [$n,$m];
    }

    public function getSize()
    {
        return $this->size;
    }

    public function printBoard()
    {
        for($i=0; $i<$this->size[0]; $i++){
            for ($j=0; $j<$this->size[1]; $j++){
                while($j < $this->size[1]){
                echo ($this->board[$x=$i][$y=$j]) . "|" ;
                    $j++;
                }
                echo "\n";
                echo "------";
                echo "\n";
            }
        }
    }
}
//        return $this->board[$x=0][$y=0] ." | " . $this->board[$x=0][$y=1] ." | " . $this->board[$x=0][$y=2] . "\n" .
//            "-----------" . "\n" .
//         $this->board[$x=1][$y=0] ." | " . $this->board[$x=1][$y=1] ." | " . $this->board[$x=1][$y=2] . "\n" .
//            "-----------" . "\n" .
//        $this->board[$x=2][$y=0] ." | " . $this->board[$x=2][$y=1] ." | " . $this->board[$x=2][$y=2];

