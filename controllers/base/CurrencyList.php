<?php
/**
    A Class to Represent a list of countries
 */
class currencyList
{
    private $currencyList;

    public function __construct(){
        $this->currencyList=array();
    }

    public function getAllCurrencies()
    {
        return $this->currencyList;
      }

    public function addCurrency(currency $currency){
        $this->currencyList["$currency->getName()"]=$currency;
    }

    public function removeCurrency(currency $currency){

       if(isset($this->currencyList["$currency->getName()"])){
            unset($this->currencyList["$currency->getName()"]);

            return true;
       }else{
           return false;
       }
    }


    public function searchByName($name){

        if(isset($this->currencyList[$name])){
            $currency=$this->currencyList[$name];
            return $currency;
        }else{
            return null;
        }
    }

    public function searchByAbbrev($abbrev){

        foreach($this->currencyList as $currency){


            if($currency->getAbbrev()==$abbrev){
                return $currency;
            }else{
                return null;
            }
        }

    }

    public function searchByCountry(Country $country){

        foreach($this->currencyList as $currency){


            if($currency->getCountry()==$country){
                return $currency;
            }else{
                return null;
            }
        }

    }
}
