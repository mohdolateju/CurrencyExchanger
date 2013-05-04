<?php
/**
 *
 */
class Currencyrates_Controller
{

   /**The Function loads the rate
    *@param Domain, HTTP Method, REST path, currency
    *@return Currency
    */
   function loadRate($host,$method,$path,$currency){
        $connection=fsockopen($host,80);
        fputs($connection,"$method $path$currency HTTP/1.1\r\n");
        fputs($connection,"Host: $host\r\n");
        fputs($connection,"Content-type: " ."application/x-www-form-urlencoded\r\n");
        fputs($connection,"Connection: close\r\n\r\n");
        $results="";


      while(!feof($connection)){
        $results=fgetss($connection);
      }

       fclose($connection);

       return $results;
   }


   /**Gets The Currency Rate from Form*/
   function getRate(){
       //Validate Form Data
       if( (!empty($_GET["country"]) && is_string($_GET["country"]) && (strlen($_GET["country"])<=3) )
               && ( !empty($_GET["currency"]) && (is_string($_GET["currency"])) && (strlen($_GET["currency"])<=3)) ){

           $country=$_GET["country"];
           $currency=$_GET["currency"];

           trim($currency);

           //Get the rate
           $rate=$this->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/usd/",$currency);

           //Invalid Don't print
           if(strstr($rate,'Invalid')==false){
               print($rate);
           }


       //} else{
        //   header("Location: ../views/Currencyrates.php");
       //}
   }

   }

        //Searches for Currency By Country Name
        public function searchCurrencyByName($name){

            $instance=CurrencyList::getInstance();
            foreach($instance->getCurrencyList() as $currency){


                if($currency->getName()==$name){

                    return $currency;

                }

            }

       }

        //search for currency by its abbreviation
        public function searchCurrencybyAbbrev($abbrev){

            $instance=CurrencyList::getInstance();
            foreach($this->$instance->getCurrencyList() as $currency){


                if($currency->getAbbrev()==$abbrev){

                    return $currency;

                }

            }

        }

}

    //Runs and Prints a value that will be gotten by the Currency Rate File Using Ajax

      $classInstance =new Currencyrates_Controller();
      //    $instance->getRate();
      require_once("base/CurrencyList.php");

      //$instance=CurrencyList::getInstance();
      //$countries=$instance->getAllCountriesInfo();

      //$result=explode("	",$countries);
      //print_r($instance->getCurrencyList());

      //Search for Armenian Currency and Print the abbreviation
      $value=$classInstance->searchCurrencyByName("Armenia");
      print_r($value->getAbbrev());
?>
