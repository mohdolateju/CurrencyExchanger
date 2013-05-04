<?php
/**
    A Class to Represent a list of countries
 */
require_once("Currency.php");
require_once("Country.php");

class CurrencyList
{
    //CurrencyList and CountryList Arrays
    private $currencyList;
    private $countryList;

    //Variable for the Currency List Instance
    private static $instance;


    //Singleton Constructor to load all country and currency info into the Arrays
    private function __construct(){

        $this->currencyList=array();
        $this->countryList=array();

        define("LAST_ARRAY_INDEX",2771);
        define("ENTRY_START",14);
        define("ENTRY_RANGE",11);

        define("COUNTRY_ABRV_INDEX",14);
        define("COUNTRY_NAME_INDEX",15);
        define("CURRENCY_ABRV_INDEX",21);

        $countriesInfo=$this->getAllCountriesInfo();

        array_push($this->currencyList,new Currency($countriesInfo[COUNTRY_NAME_INDEX],$countriesInfo[COUNTRY_ABRV_INDEX]));
        array_push($this->countryList,new Currency($countriesInfo[COUNTRY_NAME_INDEX],$countriesInfo[CURRENCY_ABRV_INDEX]));

        //Iterate through all info and assign the Currency and Country Values to the arrays
        for($i=ENTRY_RANGE; $i<LAST_ARRAY_INDEX; $i+=ENTRY_RANGE){
            array_push($this->currencyList,new Currency($countriesInfo[COUNTRY_NAME_INDEX+$i],$countriesInfo[CURRENCY_ABRV_INDEX+$i]));
            array_push($this->countryList,new Country($countriesInfo[COUNTRY_NAME_INDEX+$i],$countriesInfo[COUNTRY_ABRV_INDEX+$i]));
        }

    }

    //Singleton Instance
    public static function getInstance()
    {
        if(empty(self::$instance)){
            self::$instance=new CurrencyList();
        }

        return self::$instance;
    }


    public function setCurrencyList($currencyList)
    {
        $this->currencyList = $currencyList;
    }

    public function getCurrencyList()
    {
        return $this->currencyList;
    }

    public function setCountryList($countryList)
    {
        $this->countryList = $countryList;
    }

    public function getCountryList()
    {
        return $this->countryList;
    }

    public function getAllCurrencies()
    {
        return $this->currencyList;
    }

    public function getAllCountries()
    {
        return $this->countryList;
    }

    //Socket Connection to get all information from Country Information Using Rest
    // Returns all the information as an array
    public static function getAllCountriesInfo(){
            $host="api.geonames.org";

            $connection=fsockopen($host,80);
            fputs($connection,"GET /countryInfoCSV?username=netapps HTTP/1.1\r\n");
            fputs($connection,"Host: $host\r\n");
            fputs($connection,"Content-type: " ."application/x-www-form-urlencoded\r\n");
            fputs($connection,"Connection: close\r\n\r\n");
            $results="";


            while(!feof($connection)){
                $results.=fgets($connection);
            }

            fclose($connection);
            $result_array=explode("	",$results);

            return $result_array;
    }
}
