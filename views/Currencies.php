<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Currencies :: Currency Exchanger</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../images/money.png" type="image/x-icon"/>
        <script type="text/javascript" src="../javascript/main.js"></script>
        <script type="text/javascript" src="../javascript/jquery-1.9.1.js"></script>
        <script type="text/javascript">
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
                    <li class="currentpage"><a href="Currencies.php">Currencies</a></li>
                    <li><a href="Countries.php">Countries</a></li>
                    <li><a href="Currencyrates.php">Currencyrates</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Login.php">Login</a></li>
                    </ul>
                </div>
    		</div>
    		<div id="content">
            	<center>
                	<p id="content_header">List of Supported Currencies and Their Countries</p>
                </center>
    			<div class="centerform">
                <div class="form_header">
                   	  <center>Search for Currency</center>
                  	</div>                  
           		  	<form name="getCurrencies" action="#" method="post">
                          <input type="text" id="country" class="initval" name="country" onclick="removeAtt(1)"
                                 onkeydown="getRateCurrencyByAbbrev()"
                          							style="margin-left:27%;" value="Search By Country"/>
                          <input type="text" id="currency" disabled="disabled" name="rate" style="margin-left:5%;
                                        width:45px;" value="USD"/>
                      <br/>
                    </form>
                    <?php
                    //get Currency rate Controller file
                    include("../controllers/Currencyrates_Controller.php");

                    //get Currency rate Controller class
                    $instance=new Currencyrates_Controller();

                    // Getting the List Of Some Currencies to be Displayed from a web service
                    $aed=$instance->searchCurrencyByName("United Arab Emirates")->getAbbrev();
                    $gbp=$instance->searchCurrencyByName("United Kingdom")->getAbbrev();
                    $ger=$instance->searchCurrencyByName("Germany")->getAbbrev();
                    $fra=$instance->searchCurrencyByName("France")->getAbbrev();
                    $jap=$instance->searchCurrencyByName("Japan")->getAbbrev();
                    $chn=$instance->searchCurrencyByName("China")->getAbbrev();
                    $rss=$instance->searchCurrencyByName("Russia")->getAbbrev();
                    $pkn=$instance->searchCurrencyByName("Pakistan")->getAbbrev();
                    $ngn=$instance->searchCurrencyByName("Nigeria")->getAbbrev();
                    $ind=$instance->searchCurrencyByName("India")->getAbbrev();
                    ?>
                    <table width="100%" border="0" cellspacing="2" cellpadding="5" style="margin-left: 12%";>
                        <tr>
                            <td><strong>COUNTRY</strong></td>
                            <td><strong>CURRENCY ABREV.</strong></td>
                        </tr>
                        <tr>
                        	<td>United Arab Emirates</td>
                            <td><?php echo $aed ?></td>
                        </tr>
                        <tr>
                        	<td>United Kingdom</td>
                            <td><?php echo $gbp ?></td>
                        </tr>
                        <tr>
                        	<td>Germany</td>
                            <td><?php echo $ger ?></td>
                        </tr>
                        <tr>
                        	<td>France</td>
                            <td><?php echo $fra ?></td>
                        </tr>
                        <tr>
                        	<td>Japan</td>
                            <td><?php echo $jap ?></td>
                        </tr>
                        <tr>
                        	<td>China</td>
                            <td><?php echo $chn ?></td>
                        </tr>
                        <tr>
                        	<td>Russia</td>
                            <td><?php echo $rss ?></td>
                        </tr>
                        <tr>
                        	<td>Pakistan</td>
                            <td><?php echo $pkn ?></td>
                        </tr>
                        <tr>
                        	<td>Nigeria</td>
                            <td><?php echo $ngn ?></td>
                        </tr>
                        <tr>
                        	<td>India</td>
                            <td><?php echo $ind ?></td>
                        </tr>                                        
                    </table>
                    <p></p>
    			</div>
    		</div>
        	<div id="footer">
            	<center><a href="Overview.php">Overview</a></center>
            	<center>Currency Exchanger Copyright Reserved</center>
            </div>
        </div>
    </body>
</html>