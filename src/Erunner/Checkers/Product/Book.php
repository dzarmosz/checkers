<?php

namespace Erunner\Checkers\Product;

use Erunner\Checkers\Product\Product;
use Erunner\Checkers\Product\Author;

class Book extends Product implements Author
{
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    function __clone()
    {
    }
}

