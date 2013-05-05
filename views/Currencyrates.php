<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Currency Rates :: Currency Exchanger</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../images/money.png" type="image/x-icon"/>
        <script type="text/javascript" src="../javascript/main.js"></script>
        <script type="text/javascript" src="../javascript/jquery-1.9.1.js"></script>
        <script type="text/javascript">

            //Function to Get and Print Currency rate From the Country Name or Currency abbreviation
            function getRateByCountry(){

                //get country and currency values from the fields
                var country=$("#country").val();
                var currency=$("#currency").val();

                //get rate by currency Abbreviation
                getRateCurrencyByAbbrev();

                //send ajax query with "rateByCountry" as the arguement value
                $.get("../controllers/Currencyrates_Controller.php?action=rateByCountry", {country: country,currency: currency},
                        function(value){
                        //get the value from the ajax request and print it in the currency rate text field
                        $("#rate").val(value);
                    });

                //if the country text field is empty, set the currency text field as empty
                if(country==""){
                    $("#currency").val("");
                }

            }

            //Function to Get and Print Currency abbreviation From the Country Name
            function getRateCurrencyByAbbrev(){

                //get country and currency values from the fields
                var country=$("#country").val();
                var currency=$("#currency").val();

                //send ajax query with "currencyAbbrev" as the arguement value
                    $.get("../controllers/Currencyrates_Controller.php?action=currencyAbbrev", {country: country},
                        function(value){
                            //get the value from the ajax request and print it in the currency abbrev text field
                            $("#currency").val(value);
                        });
            }

            //Function to Get and Print country with a  currency abbreviation
            function getCountryByAbbrev(){
                //get country and currency values from the fields
                var country=$("#country").val();
                var currency=$("#currency").val();

                //send ajax query with "searchCountry" as the arguement value
                    $.get("../controllers/Currencyrates_Controller.php?action=searchCountry", {currency: currency},
                        function(value){
                            //get the value from the ajax request and print it in the country name text field
                            $("#country").val(value);
                        });

            }

            /**Get and Print Currency rate by either country name or currency abbreviation*/
            function getRateByCurrency(){
                //get country and currency values from the fields
                var country=$("#country").val();
                var currency=$("#currency").val();

                //send ajax query with "getRate" as the arguement value
                $.get("../controllers/Currencyrates_Controller.php?action=getRate", {country: country,currency: currency},
                    function(value){
                        //get the value from the ajax request and print it in the currency rate text field
                        $("#rate").val(value);
                    });
            }

            /**Get and Print Currency rate by either country name or currency abbreviation*/
            function getRate(){
                //get country and currency values from the fields
                var country=$("#country").val();
                var currency=$("#currency").val();

                //get and print country name from currency abbreviation
                getCountryByAbbrev();

                //send ajax query with "getRate" as the arguement value
                $.get("../controllers/Currencyrates_Controller.php?action=getRate", {country: country,                                                                      currency: currency},
                    function(value){
                        //get the value from the ajax request and print it in the currency rate text field
                        $("#rate").val(value);
                    });

                //if the country text field is empty, set the currency text field as empty
                if(country==""){
                    $("#country").val("");
                }

            }

        </script>
    </head>
    <body>
        <div id="wrapper">
    		<div id="header">
    			<div id="title">
               	  <span class="title">Currency Exchanger</span>
              </div>
    			<div id="menus">
                    <ul id="menubar">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="Currencies.php">Currencies</a></li>
                    <li><a href="Countries.php">Countries</a></li>
                    <li class="currentpage"><a href="Currencyrates.php">Currencyrates</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Login.php">Login</a></li>
                    </ul>
                </div>
    		</div>
    		<div id="content">
            	<center>
                	<p id="content_header">Currency Exchange Rates</p>
                </center>
    			<div class="centerform" style="margin-left:20%; margin-right:20%">
                    <div class="form_header">
                   	  <center>Currency Rates</center>
                  	</div>                  
           		  	<form name="excalculate" action="../controllers/Currencyrates_Controller.php" method="get">
                          <input type="text" id="country" class="initval" name="country" onclick="removeAtt(1)"
                                 onkeyup="getRateByCountry()"
                          							style="margin-left:11%;" value="Search By Country"/>
                          <input type="text" id="currency" class="initval" name="currency" onclick="removeAtt(2)"
                                 onkeyup="getRate()"
                          							style="margin-left:5%;" value="Search By Currency"/>
                          <input type="text" id="rate"  name="rate" style="margin-left:5%; width:45px;
                                    background-color: white;"/>
                      <br/>
                    </form>

                    <?php
                           //get Currency rate Controller file
                           include("../controllers/Currencyrates_Controller.php");

                           //get Currency rate Controller class
                           $instance=new Currencyrates_Controller();

                           // Getting the List Of Some Currencies to be Displayed from a web service
                           $usd=$instance->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/usd/","usd");
                           $aed=$instance->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/usd/","aed");
                           $gbp=$instance->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/usd/","gbp");
                           $yen=$instance->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/usd/","jpy");
                           $cny=$instance->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/usd/","cny");
                           $sar=$instance->loadRate("currencies.apps.grandtrunk.net","GET","/getlatest/usd/","sar");
                    ?>

                  	<table width="100%" border="0" cellspacing="2" cellpadding="5">
                      <caption>
                        <strong>RATES</strong>                     
                      </caption>
                      <tr>
                        <td width="40%"><strong>Currency</strong></td>
                        <td width="51%"><strong>Country</strong></td>
                        <td width="9%"><strong>Rate</strong></td>
                      </tr>
                      <tr>
                        <td>United States Dollar (USD)</td>
                        <td>United States of America</td>
                        <td id="us"><?php echo $usd ?></td>
                      </tr>
                      <tr>
                        <td>Arab Emirates Dirhams (AED)</td>
                        <td>United Arab Emirates</td>
                        <td id="ae"><?php echo $aed ?></td>
                      </tr>
                      <tr>
                        <td>British Pound Sterling (GBP)</td>
                        <td>United Kingdom</td>
                        <td id="bp"><?php echo $gbp ?></td>
                      </tr>
                      <tr>
                        <td>Japanese Yen (JPY)</td>
                        <td>Japan</td>
                        <td id="jp"><?php echo $yen ?></td>
                      </tr>
                      <tr>
                        <td>Chinese Nuan Renminbi (CNY)</td>
                        <td>Republic of China</td>
                        <td><?php echo $cny ?></td>
                      </tr>
                      <tr>
                        <td>South African Rand (SAR)</td>
                        <td>Republic of South Africa</td>
                        <td id="us"><?php echo $sar ?></td>
                      </tr>
                    </table>
    			</div>
    		</div>
        	<div id="footer">
            	<center><a href="Overview.php">Overview</a></center>
            	<center>Currency Exchanger Copyright Reserved</center>
            </div>
        </div>
    </body>
</html>