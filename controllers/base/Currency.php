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
