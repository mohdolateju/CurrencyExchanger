<?php

    //include CurrencyList Model
    require_once("base/CurrencyList.php");


                                    ////Start of Class Declaration///


    /**
     * Currency Rate Controller Class to Handle Requests from View/Currency Rates
     */
    class Currencyrates_Controller
    {

           /**The Function loads the rate
            *@param Domain, HTTP Method, REST path, currency
            *@return Currency
            */
           function loadRate($host,$method,$path,$currency){
               //open socket connection and send request
                $connection=fsockopen($host,80);
                fputs($connection,"$method $path$currency HTTP/1.1\r\n");
                fputs($connection,"Host: $host\r\n");
                fputs($connection,"Content-type: " ."application/x-www-form-urlencoded\r\n");
                fputs($connection,"Connection: close\r\n\r\n");
                $results="";

              //Get the Only the Last Line of the Connection which is the Currency Rate
              while(!feof($connection)){
                $results=fgets($connection);
              }

              //Close Connection
               fclose($connection);

               //Return Rate
               return $results;
           }


            /**Method to Populate Currency Field */
            public function popCurrency(){
                $classInstance=new Currencyrates_Controller();

                //If the Ajax Get Request from the View/Currency Rates page contains a country arguement.............
                if(empty($_GET["currency"])){
                    //get arguement
                    $country=$_GET["country"];
                    //search for the currency object with the country value
                    $currency=$classInstance->searchCurrencyByName($country);
                    //Print if it exists
                    if(!empty($currency)){
                        print $currency->getAbbrev();
                    }
                }
            }

            /**Search and Print a Country Name using currency*/
            public function countrySearch(){
                //If the Ajax Get Request from the View/Currency Rates page contains a currency arguement.............
                    $currency=$_GET["currency"];

                //Use the currency arguement to get the country object
                    $country=$this->searchCurrencyByName($currency);

                //If the country Object isn't null Print it
                        if(!empty($country)){
                            print $country->getName();
                        }

            }



           /**Gets The Currency Rate from the Form and prints it*/
           public function getRate(){

               //Get the Country and Currency values from the Ajax get request
               $country=$_GET["country"];
               $currency=$_GET["currency"];

               //If the Country data is valid.............
               if( (!empty($country) && is_string($country) && (strlen($country)<=3) )
                   ){
                   //Search fro the Currency using the country and trim it
                   $currency=$this->searchCurrencyByName($country);
                   trim($currency);
               }

               //If the Country data is valid.............
               if( (!empty($currency) && is_string($currency) )
               ){
                   //Get the rate using the Currency
                   $rate=$this->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/usd/",$currency);

                   //Print Exchange Rate but if the rate is not Found Print the Not Found Message
                   if(strstr($rate,'False')!=false){
                       print "Not Found";
                   }else{
                       print ($rate);
                   }
              }

           }

        /**Gets The Currency Rate from the Form and prints it*/
        public function convertRate(){

            //Get the Country and Currency values from the Ajax get request
            $firstCurr=$_GET["firstCurr"];
            $secondCurr=$_GET["secondCurr"];


                //Get the rate using the Currency
                $rate=$this->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/$firstCurr/",$secondCurr);

                //Print Exchange Rate but if the rate is not Found Print the Not Found Message
                if(strstr($rate,'False')!=false){
                    print "Not Found";
                }else{
                    print ($rate);
                }


        }

            /**Searches for Currency By Country Name*/
            public function searchCurrencyByName($name){

                //get the instance of currency list
                $instance=CurrencyList::getInstance();

                //search through the list of currencies....
                foreach($instance->getCurrencyList() as $currency){

                    // if the name of the currency matches the name give, return the currency object
                    if($currency->getName()==$name){

                        return $currency;

                    }

                }

           }

            /**search for currency by its abbreviation*/
            public function searchCurrencybyCountryAbbrev($abbrev){

                //get the instance of currency list
                $instance=CurrencyList::getInstance();

                //search through the list of countries....
                foreach($this->$instance->getCountryList() as $country){

                    // if the abbreviation of the country matches the abbreviation given, return the country object
                    if($country->getAbbrev()==$abbrev){

                        return $country;

                    }

                }

            }

            /**Searches for Currency By Country Name*/
            public function searchCountryByName($name){

                //get the instance of currency list
                $instance=CurrencyList::getInstance();

                //search through the list of currencies....
                foreach($instance->getCountryList() as $currency){

                    // if the name of the currency matches the name give, return the currency object
                    if($currency->getName()==$name){

                        return $currency;

                    }

                }

            }

            public function getCuntAbbrev(){
                    $currency=trim($_GET["country"]);

                            $currencyObj=$this->searchCountryByName($currency);
                        if(!empty($currencyObj)){
                            print $currencyObj->getAbbrev();
                        }
            }
    }


                                    ////End of Class Declaration///


                        ////Start of Script to Run When an Ajax Request is Sent////

       //Get the Class Instance of the Currency Rates Controller
       $classInstance=new Currencyrates_Controller();

       //If the Action variable in the AJax get request is set......................
       if(isset($_REQUEST['action'])){

            //If the action variable has a value of "getrate"..........
            if($_REQUEST['action']=='getRate'){
               //run the get rate method from the Currency rates Controller instance
               $classInstance->getRate();
            }

            //If the action variable has a value of "currencyAbbrev"..........
            else if($_REQUEST['action']=='currencyAbbrev'){
                //run the popCurrency method from the Currency rates Controller instance
                $classInstance->popCurrency();
            }

            //If the action variable has a value of "rateByCountry"..........
            else if($_REQUEST['action']=='rateByCountry'){
                //run the get rate method from the Currency rates Controller instance
                $classInstance->getRate();
            }

            //If the action variable has a value of "searchCountry"..........
            else if($_REQUEST['action']=='searchCountry'){
                //run the countrySearch method from the Currency rates Controller instance
                $classInstance->countrySearch();
            }

            //If the action variable has a value of "searchCountry"..........
            else if($_REQUEST['action']=='get2CurrRate'){
                //run the countrySearch method from the Currency rates Controller instance
                $classInstance->convertRate();
            }

            //If the action variable has a value of "searchCountry"..........
            else if($_REQUEST['action']=='getCountryAbbrev'){
                //run the countrySearch method from the Currency rates Controller instance
                $classInstance->getCuntAbbrev();
            }
       }
?>
