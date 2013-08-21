<?php

namespace Erunner\Checkers;

class Client
{
    private $name;
    private $surname;
    private $phoneNumber;
    private $address;

    public function __construct($name, $surname, $phoneNumber, $address){
        $this->name=$name;
        $this->surname=$surname;
        $this->phoneNumber=$phoneNumber;
        $this->address=$address;
    }

    public function __toString()
    {
        return "\n\n". $this->name ." ". $this->surname ." ". $this->address ." ". $this->phoneNumber ." bought:\n";
    }
}
