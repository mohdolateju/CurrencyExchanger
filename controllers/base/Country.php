<?php

class Country{

    private $name;
    private $abbrev;

    public function __construct($name, $abbrev){
        $this->name=$name;
        $this->abbrev=$abbrev;
    }

    public function getName(){

        return $this->name;
    }

    public function setName($name){

        $this->name=$name;
    }

    public function getAbbrev(){

        return $this->abbrev;
    }

    public function setAbbrev($abbrev){

        $this->abbrev=$abbrev;
    }
}
?>