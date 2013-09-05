<?php

use Erunner\Checkers\Product\Book;

class BookTest extends \PHPUnit_Framework_TestCase
{
    protected $book;

    public function testSetAuthor()
    {
        $godfatger = new Book("The Godfather", 39, "PriceForVips");
        $godfatger->setAuthor("Mario Puzo");

        $this->book = new Book("The Godfather", 39, "PriceForVips");
        $this->book->setAuthor("Mario Puzo");

        $this->assertSame($godfatger->getAuthor(),$this->book->getAuthor());
    }
}