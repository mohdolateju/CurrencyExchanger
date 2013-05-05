<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Countries :: Currency Exchanger</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../images/money.png" type="image/x-icon"/>
        <script type="text/javascript" src="../javascript/main.js"></script>
        <script type="text/javascript" src="../javascript/jquery-1.9.1.js"></script>
        <script type="text/javascript">

            //Function to Get and Print Country abbreviation From the Country Name
            function getCountryAbbrev(){
                    //get country and currency values from the fields
                    var country=$("#country").val();

                //send ajax query with "getcountryAbbrev" as the arguement value
                $.get("../controllers/Currencyrates_Controller.php?action=getCountryAbbrev", {country: country},
                    function(ajaxValue){
                        //get the value from the ajax request and print it in the country abbreviation text field

                            //set abbreviation to the country abbrev text field
                            $("#countryAbbr").val(ajaxValue);

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
                    <li><a href="Currencies.php">Currencies</a></li>
                    <li class="currentpage"><a href="Countries.php">Countries</a></li>
                    <li><a href="Currencyrates.php">Currencyrates</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Login.php">Login</a></li>
                    </ul>
                </div>
    		</div>
    		<div id="content">
            	<center>
                	<p id="content_header">List of Supported Countries</p>
                </center>
   			  <div class="centerform" style="margin-left: 25%; margin-right: 25%;">
                <div class="form_header">
                   	  <center>Search for Country</center>
           	    </div>                  
   		  	    <form name="getCurrencies" action="../controllers/Currencyrates_Controller.php" method="get">
                    <input type="text" class="initval" name="country" id="country" onclick="removeAtt(1)"
                           onkeyup="getCountryAbbrev()"
                          							style="margin-left:25%;" value="Search By Country"/>                          
                    <input type="text" id="countryAbbr" name="countryAbbr" style="margin-left:5%; width:45px;" value="ABBR"/>
                      <br/>
                </form>
      			<center>
                    <?php
                    //get Currency rate Controller file
                    include("../controllers/Currencyrates_Controller.php");

                    //get Currency rate Controller class
                    $instance=new Currencyrates_Controller();

                    // Getting the List Of Some Country Abbreviations to be Displayed from a web service
                    $aed=$instance->searchCountryByName("United Arab Emirates")->getAbbrev();
                    $gbp=$instance->searchCountryByName("United Kingdom")->getAbbrev();
                    $ger=$instance->searchCountryByName("Germany")->getAbbrev();
                    $fra=$instance->searchCountryByName("France")->getAbbrev();
                    $jap=$instance->searchCountryByName("Japan")->getAbbrev();
                    $chn=$instance->searchCountryByName("China")->getAbbrev();
                    $rss=$instance->searchCountryByName("Russia")->getAbbrev();
                    $pkn=$instance->searchCountryByName("Pakistan")->getAbbrev();
                    $ngn=$instance->searchCountryByName("Nigeria")->getAbbrev();
                    $ind=$instance->searchCountryByName("India")->getAbbrev();
                    ?>
                      <table width="70%" border="0" cellspacing="2" cellpadding="5">
                        <tr>
                          <td width="74%"><strong>Country</strong></td>
                          <td width="26%"><strong>Abbrev.</strong></td>
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
  				</center>
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