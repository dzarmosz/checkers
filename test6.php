<?php

interface IView
{
    function render();
}

class HtmlView implements IView
{
    function render()
    {
    }
}

class XmlView implements IView
{
    function render()
    {
    }
}

class PdfView implements IView
{
    function render()
    {
    }
}

class View
{
    static function factory($fileName)
    {
        switch (end(explode('.', $fileName)))
        {
            case 'html':
                return new HtmlView();
            case 'xml':
                return new XmlView();
            case 'pdf':
                return new PdfView();
            default:
                throw new Exception('nieznany typ pliku');
        }
    }
}

$html = View::factory("strona.html");
var_dump($html);
$xml = View::factory("strona.xml");
var_dump($xml);
$pdf = View::factory("strona.pdf");
var_dump($pdf);