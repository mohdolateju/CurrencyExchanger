<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mohammed
 * Date: 28/02/13
 * Time: 21:38
 * To change this template use File | Settings | File Templates.
 */
class Currency
{
    private $name;
    private $abbrev;
    private $country;

    public function __construct($name,$abbrev,Country $country){
        $this->name=$name;
        $this->abbrev=$abbrev;
        $this->country=$country;
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

    public function getCountry(){
        return $this->country;
    }

    public function setCountry(Country $country){
        $this->country=$country;
    }
}
