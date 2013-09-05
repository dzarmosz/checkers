<?php

interface Document
{
    function generate();
}

class PDF implements Document
{
    public function generate()
    {
        return 'Dokuemnt PDF';
    }

    public function setColor($color)
    {
        echo " //Ustawiam kolor: ".$color;
    }
}

class HTML implements Document
{
    public function generate()
    {
        return 'Dokument HTML';
    }

    public function setColor($color)
    {
        echo " //Ustawiam kolor: ".$color;
    }
}

interface DocumentFactory
{
    function create();
    function setColor($color);
}

class PDFFactory implements DocumentFactory
{
    private $color;

    public function create()
    {
        $doc = new PDF();
        $doc->setColor($this->color);
        return $doc;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}

class HTMLFactory implements DocumentFactory
{
    private $color;

    public function create()
    {
        $doc = new HTML();
        $doc->setColor($this->color);
        return $doc;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}

class Page
{
    private $documentFactory;

    public function __construct(DocumentFactory $factory)
    {
        $this->documentFactory =$factory;
    }

    public function render()
    {
        $document = $this->documentFactory->create();
        echo $document->generate();
    }
}

$pdf = new PDFFactory();
$pdf->setColor("Zielony ");
$html = new HTMLFactory();
$html->setColor("Niebieski ");
$page1 = new Page($pdf);
$page1->render();
$page2 = new Page($html);
$page2->render();