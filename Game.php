<?php

require 'vendor/autoload.php';

use Erunner\CheckersGame\Player\Player;
use Erunner\CheckersGame\Board\Board;

$board = new Board();
$board->setSize(3,3);
$board->setPoint(1,1, '+');
$board->setPoint(1,2, 'o');
$board->setPoint(1,3, '+');
$board->setPoint(2,1, 'o');
$board->setPoint(2,2, '+');
$board->setPoint(2,3, 'o');
$board->setPoint(3,1, '+');
$board->setPoint(3,2, 'o');
$board->setPoint(3,3, '+');
//var_dump($board);exit;
echo $board->printBoard();