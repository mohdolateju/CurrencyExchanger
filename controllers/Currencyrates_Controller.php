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
        $results=fgets($connection);
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
}

    //Run Validator
    $instance =new Currencyrates_Controller();
    $instance->getRate();

?>
