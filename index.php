<?php

require 'vendor/autoload.php';

use Erunner\Checkers\Product\Product;
use Erunner\Checkers\Product\Book;
use Erunner\Checkers\Product\Car;
use Erunner\Checkers\Product\Cloth;
use Erunner\Checkers\Client\Client;
use Erunner\Checkers\Cart\Cart;

$bible = new Book("Bible", "100");
$bible->setAuthor("Apostoles");
echo $bible . " " . $bible->getAuthor() . "\n";
$godfather = clone $bible;
$godfather->setAuthor("Mario Puzo");
echo $godfather . " " . $godfather->getAuthor() . "\n";


$audi = new Car("Audi", "200k");
$audi->setColor("black");
$audi->setEngine("2.5");
echo $audi . " " . $audi->getColor() . " " . $audi->getEngine() . "\n";

$blouse = new Cloth("Blouse" , "59");
$blouse->setColor("blue");
$blouse->setSize("M");
echo $blouse . ' ' . $blouse->getColor() . " " . $blouse->getSize() . "\n";


//$chuck = new Client("Chuck", "Norris", "111111111", "Chicago 10");
//$rocky = new Client("Rocky", "Balboa", "222222222", "Las Vegas 20");
//$audi = new Product("audi", "100000");
//$audi->getPrice();
//$mercedes = new Product("Mercedes", "200000");
//$audi->getPrice();
//$water = new Product("Water", "2");
//$audi->getPrice();
//$milk = new Product("Milk", "3");
//$audi->getPrice();
//$keyboard = new Product("Keyboard", "120");
//$audi->getPrice();
//
//echo "------------REPORT---------------\n";
//$cart = new Cart();
//$cart->addProduct($audi);
//$cart->setClient($chuck);
//echo $cart->getClient();
//echo "\nCARD 1\n";
//$cart->show();
//echo "TOTAL: " . $cart->totalPrice() . "\n";
//
//$cart2 = new Cart();
//$cart2->addProduct($mercedes);
//$cart2->addProduct($audi);
//$cart2->setClient($rocky);
//echo $cart2->getClient();
//echo "\nCARD 1\n";
//$cart2->show();
//echo "TOTAL: " . $cart2->totalPrice() . "\n";
//
//echo "\nCARD 2\n";
//$cart3 = new Cart();
//$cart3->addProduct($keyboard);
//$cart3->addProduct($milk);
//$cart3->addProduct($water);
//$cart3->show();
//echo "TOTAL: " . $cart3->totalPrice() . "\n";
//
//echo "\nCARD 3\n";
//$cart4 = new Cart();
//$cart4->addProduct($audi);
//$cart4->addProduct($mercedes);
//$cart4->show();
//echo "TOTAL: " . $cart4->totalPrice() . "\n";