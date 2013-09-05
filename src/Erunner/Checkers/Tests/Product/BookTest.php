<?php

namespace Erunner\Checkers\Tests\Product;

use Erunner\Checkers\Product\Book;

class BookTest extends \PHPUnit_Framework_TestCase
{
    protected $book;

    public function testSetAuthor()
    {
        $godfather = new Book("The Godfather", 39, "PriceForVips");
        $godfather->setAuthor("Mario Puzo");

        $this->book = new Book("The Godfather", 39, "PriceForVips");
        $this->book->setAuthor("Mario Puzo");

        $this->assertSame($godfather->getAuthor(), $this->book->getAuthor());
    }
}