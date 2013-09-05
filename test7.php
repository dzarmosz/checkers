<?php

class User
{
    public function login()
    {
        echo "Logowanie do systemu\n";
    }

    public function register()
    {
        echo "Rejestracja \n";
    }
}

class Cart
{
    public function getItems()
    {
        echo "Zawartosc koszyka\n";
    }
}

class Product
{
    public function getAll()
    {
        echo "Lista produktow\n";
    }

    public function get($id)
    {
        echo "Produkt o ID".$id."\n";
    }
}

class API
{
    private $user;
    private $cart;
    private $product;

    public function __construct()
    {
        $this->user = new User();
        $this->cart = new Cart();
        $this->product = new Product();
    }

    public function login()
    {
        $this->user->login();
    }

    public function register()
    {
        $this->user->register();
    }

    public function getBuyProducts()
    {
        $this->cart->getItems();
    }

    public function getProducts()
    {
        $this->product->getALL();
    }

    public function getProduct($id)
    {
        $this->product->get($id);
    }
}

$client = new API();
$client->register();
$client->login();
$client->getBuyProducts();
$client->getProduct(5);
$client->getBuyProducts();