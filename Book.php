<?php
//PROTOTYPE

abstract class Book
{
    protected $title;
    protected $topic;
    abstract function __clone();
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        return $this->title = $title;
    }
    public function getTopic(){
        return $this->topic;
    }
}

class PHPBook extends Book
{
    public function __construct()
    {
        $this->topic = 'PHP';
    }
    function __clone(){
    }
}

class JavaBook extends Book
{
    public function __construct()
    {
        $this->topic = "JAVA";
    }
    function __clone(){
    }
}


$phpbook1 = new PHPBook();
$phpbook1->setTitle("Book1");
$phpbook2 = clone $phpbook1;
$phpbook2->setTitle("Book2");

$javabook1 = new JavaBook();
$javabook1->setTitle("Book1");
$javabook2 = clone $javabook1;
$javabook2->setTitle("Book2");

echo "Katergoria: " .$phpbook1->getTopic() . " Tytul: " . $phpbook1->getTitle() . "\n";
echo "Kategoria: " .$phpbook2->getTopic() . " Tytul: " .$phpbook2->getTitle() . "\n";
echo "Kategoria; " . $javabook1->getTopic() . " Tytul: " . $javabook1->getTitle() . "\n";
echo "Kategoria: " . $javabook2->getTopic() . " Tytul: " . $javabook2->getTitle() . "\n";
