<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Currency Rates :: Currency Exchanger</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../images/money.png" type="image/x-icon"/>
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
    			<div class="centerform" style="margin-left:10%; margin-right:10%">
                    <div class="form_header">
                   	  <center>Currency Rates</center>
                  	</div>                  
           		  	<form name="excalculate" action="#" method="post">
                          <input type="text" class="initval" name="country" style="margin-left:11%;" value="Search By Country"/>
                          <input type="text" class="initval" name="currency" style="margin-left:5%;" value="Search By Currency"/>
                          <input type="text" disabled="disabled" name="rate" style="margin-left:5%; width:45px;" value="0.000"/>		
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
                    </table>
    			</div>
    		</div>
        	<div id="footer">
            	<center>Currency Exchanger Copyright Reserved</center>
            </div>
        </div>
    </body>
</html>