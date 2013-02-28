<?php
/**
    A Class to Represent a list of countries
 */
class CountryList
{
    private $countryList;

    public function __construct(){
        $this->countryList=array();
    }

    public function getAllCountries()
    {
        return $this->countryList;

      }

    public function addCountry(Country $country){

        $this->countryList["$country->getName()"]=$country;
    }

    public function removeCountry(Country $country){

       if(isset($this->countryList["$country->getName()"])){
            unset($this->countryList["$country->getName()"]);

            return true;
       }else{
           return false;
       }
    }


    public function searchByName($name){

        if(isset($this->countryList[$name])){
            $country=$this->countryList[$name];
            return $country;
        }else{
            return null;
        }
    }

    public function searchByAbbrev($abbrev){

        foreach($this->countryList as $country){


            if($country->getAbbrev()==$abbrev){
                return $country;
            }else{
                return null;
            }
        }

    }

}
