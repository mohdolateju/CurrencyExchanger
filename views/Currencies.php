<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Currencies :: Currency Exchanger</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../images/money.png" type="image/x-icon"/>
        <script type="text/javascript">			
			function removeAtt(no){				
				var tags=document.getElementsByTagName('input');				
					if(no==1){
						tags[0].removeAttribute('class');
						tags[0].value='';
					}												
					if(no==2){
						tags[1].removeAttribute('class');
						tags[1].value='';
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
                          <input type="text" class="initval" name="country" onclick="removeAtt(1)" 
                          							style="margin-left:11%;" value="Search By Country"/>
                          <input type="text" class="initval" name="currency" onclick="removeAtt(2)" 
                          							style="margin-left:5%;" value="Search Currency"/>
                          <input type="text" disabled="disabled" name="rate" style="margin-left:5%; width:45px;" value="USD"/>		
                      <br/>
                    </form>
                    <table width="100%" border="0" cellspacing="2" cellpadding="5">
                        <tr>
                            <td><strong>COUNTRY</strong></td>
                            <td><strong>CURRENCY</strong></td>
                            <td><strong>ABREV.</strong></td>
                        </tr>
                        <tr>
                        	<td>United Arab Emirates</td>
                            <td>Arab Emirate Dirhams</td>
                            <td>AED</td>
                        </tr>
                        <tr>
                        	<td>United Kingdom</td>
                            <td>Pound</td>
                            <td>BP</td>
                        </tr>
                        <tr>
                        	<td>United States of America</td>
                            <td>Dollar</td>
                            <td>USD</td>
                        </tr>
                        <tr>
                        	<td>Germany</td>
                            <td>Euro</td>
                            <td>EUR</td>
                        </tr>
                        <tr>
                        	<td>France</td>
                            <td>Euro</td>
                            <td>EUR</td>
                        </tr>
                        <tr>
                        	<td>Kingdom of Saudia Arabia</td>
                            <td>Arabian Riyal</td>
                            <td>RYL</td>
                        </tr>
                        <tr>
                        	<td>Japan</td>
                            <td>Janapese Yen</td>
                            <td>YEN</td>
                        </tr>
                        <tr>
                        	<td>China</td>
                            <td>Yuan</td>
                            <td>YEN</td>
                        </tr>
                        <tr>
                        	<td>Russia</td>
                            <td>Ruble</td>
                            <td>RBL</td>
                        </tr>
                        <tr>
                        	<td>Pakistan</td>
                            <td>Rupee</td>
                            <td>RUP</td>
                        </tr>
                        <tr>
                        	<td>Nigeria</td>
                            <td>Naira</td>
                            <td>NGN</td>
                        </tr>
                        <tr>
                        	<td>India</td>
                            <td>Rupee</td>
                            <td>RUP</td>
                        </tr>                                        
                    </table>
                    <p>
    			</div>
    		</div>
        	<div id="footer">
            	<center><a href="Overview.php">Overview</a></center>
            	<center>Currency Exchanger Copyright Reserved</center>
            </div>
        </div>
    </body>
</html>