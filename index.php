<?php

require 'vendor/autoload.php';

use Erunner\Checkers\Product;
use Erunner\Checkers\Client;
use Erunner\Checkers\Cart;

$chuck = new Client("Chuck", "Norris", "111111111", "Chicago 10");
$rocky = new Client("Rocky", "Balboa", "222222222", "Las Vegas 20");
$audi = new Product("audi", "100000");
$mercedes = new Product("Mercedes", "200000");

$cart = new Cart();
$cart->addProduct($audi);
$cart->setClient($chuck);
echo $cart->getClient();
$cart->show();

$cart2 = new Cart();
$cart2->addProduct($mercedes);
$cart2->addProduct($audi);
$cart2->setClient($rocky);
echo $cart2->getClient();
$cart2->show();