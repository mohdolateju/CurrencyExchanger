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
            function getRate(){
                var country=$("#country").val();
                var currency=$("#currency").val();
                $.get("../controllers/Currencyrates_Controller.php", {country: country,                                                                      currency: currency},
                        function(value){
                        $("#rate").val(value);
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
                          							style="margin-left:11%;" value="Search By Country"/>
                          <input type="text" id="currency" class="initval" name="currency" onclick="removeAtt(2)"
                                 onkeydown="getRate()"
                          							style="margin-left:5%;" value="Search By Currency"/>
                          <input type="text" id="rate" disabled="disabled" name="rate" style="margin-left:5%; width:45px;
                                    background-color: white;"/>
                      <br/>
                    </form>
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
                        <td>4.19</td>
                      </tr>
                      <tr>
                        <td>Arab Emirates Dirhams (AED)</td>
                        <td>United Arab Emirates</td>
                        <td>1.110</td>
                      </tr>
                      <tr>
                        <td>British Pound Sterling (GBP)</td>
                        <td>United Kingdom</td>
                        <td>1.110</td>
                      </tr>
                      <tr>
                        <td>Japanese Yen (Yen)</td>
                        <td>Japan</td>
                        <td>1.110</td>
                      </tr>
                      <tr>
                        <td>Chinese Nuan Renminbi (CNY)</td>
                        <td>Republic of China</td>
                        <td>1.110</td>
                      </tr>
                      <tr>
                        <td>South African Rand (SAR)</td>
                        <td>Republic of South Africa</td>
                        <td>1.110</td>
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