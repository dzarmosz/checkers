<?php

require 'vendor/autoload.php';

use Erunner\Checkers\Product\Product;
use Erunner\Checkers\Product\Book;
use Erunner\Checkers\Product\Weapon;
use Erunner\Checkers\Product\Sword;
use Erunner\Checkers\Product\Mace;
use Erunner\Checkers\Product\Car;
use Erunner\Checkers\Product\Cloth;
use Erunner\Checkers\Client\Client;
use Erunner\Checkers\Cart\Cart;


$bible = new Book("Bible", "100", 'PriceForNewClient');
$bible->setAuthor("Apostoles");
echo $bible . " " . $bible->getAuthor() . "\n";
$godfather = clone $bible;
$godfather->setAuthor("Mario Puzo");
echo $godfather . " " . $godfather->getAuthor() . "\n";


$audi = new Car("Audi", "2000000", 'PriceForVips');
$audi->setColor("black");
$audi->setEngine("2.5");
echo $audi . " " . $audi->getColor() . " " . $audi->getEngine() . "\n";

$blouse = new Cloth("Blouse" , "50", 'PriceForRegularClient');
$blouse->setColor("blue");
$blouse->setSize("M");
echo $blouse ." ". $blouse->getColor() . " " . $blouse->getSize() . "\n";
$blouse2 = clone $blouse;
$blouse2->setStrategy('PriceForNewClient');
$blouse2->setColor("black");
$blouse2->setSize("XL");
echo $blouse2 . " " . $blouse2->getColor() . " " . $blouse2->getSize() . "\n";

$chuck = new Client("Chuck", "Norris", "111111111", "Chicago 10");
$rocky = new Client("Rocky", "Balboa", "222222222", "Las Vegas 20");


echo "------------REPORT---------------\n";
$cart = new Cart();
$cart->addProduct($audi);
$cart->addProduct($blouse2);
$cart->setClient($chuck);
echo $cart->getClient();
echo "\nCARD 1\n";
$cart->show();
echo "TOTAL: " . $cart->totalPrice() . "\n";

$cart2 = new Cart();
$cart2->addProduct($bible);
$cart2->addProduct($blouse);
$cart2->addProduct($audi);
$cart2->setClient($rocky);
echo $cart2->getClient();
echo "\nCARD 1\n";
$cart2->show();
echo "TOTAL: " . $cart2->totalPrice() . "\n";

echo "\nCARD 2\n";
$cart3 = new Cart();
$cart3->addProduct($audi);
$cart3->addProduct($bible);
$cart3->show();
echo "TOTAL: " . $cart3->totalPrice() . "\n";

echo "\nCARD 3\n";
$cart4 = new Cart();
$cart4->addProduct($bible);
$cart4->addProduct($blouse2);
$cart4->show();
echo "TOTAL: " . $cart4->totalPrice() . "\n";

$dragonSlayer = new Sword("Dragon Slayer", "250", "PriceForNewClient");
$dragonSlayer->setMaterial("Iron");
$dragonSlayer->setWeight("5kg");
$dragonSlayer->setWidthBlade("1,5m");
echo $dragonSlayer . " " . $dragonSlayer->getMaterial() . " " . $dragonSlayer->getWeight() . " " . $dragonSlayer->getWidthBlade() . "\n";

$arcanaMace = new Mace("Arcana Mace", "280", "PriceForNewClient");
$arcanaMace->setMaterial("Wood");
$arcanaMace->setWeight("2kg");
$arcanaMace->setNumberOfSpike("8");
echo $arcanaMace . " " . $arcanaMace->getMaterial() . " " . $arcanaMace->getWeight() . " " . $arcanaMace->getNumberOfSpike() . "\n";
