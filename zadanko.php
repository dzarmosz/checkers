<?php

interface car{
    function drive();
    function turn();
    function brake();
}

class Audi implements car
{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    function drive(){

    }

    function turn(){

    }

    function brake(){

    }
}

class Volkswagen implements car
{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    function drive(){

    }

    function turn(){

    }

    function brake(){

    }
}


class A6 extends Audi{
    public function __construct($name){
        parent::__construct($name);
    }
}

class Golf extends Volkswagen{
    public function __construct($name){
        parent::__construct($name);
    }
}