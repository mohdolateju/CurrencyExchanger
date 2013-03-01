<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Overview :: Currency Exchanger</title>
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
                    <li><a href="Currencies.php">Currencies</a></li>
                    <li><a href="Countries.php">Countries</a></li>
                    <li><a href="Currencyrates.php">Currencyrates</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Login.php">Login</a></li>
                    </ul>
                </div>
    		</div>
    		<div id="content">
            	<center>
                	<p id="content_header">Currency Exchange Overview</p>
                </center>
    			<div class="centerform" style="margin-left:10%; margin-right:10%; padding:2%;">
                    <div class="form_header">
                   	  <center>
                   	  What Is The Currency Exchanger About?
                   	  </center>
                  	</div>                  
                    <strong>Description</strong>
                    	<p>The currency exchanger application is a network application that calculates an amount money from one currency to another, its basic technologies are HTML, CSS, Javascript, PHP and MYSQL. The currency exchanger also uses AJAX, XML and Web Services to get Currency Rates, List of Countries, IP Address of the user browsing the system and also the registered users information from the database. It was created by Mohammed, Huma and Umar.</p>
                    <strong>Mohammed.B.Olateju (H00139396)</strong>
                    	<p>Mohammed is responsible for the currency exchange and the user section. The currency exchanger section requires the user of the currency web service to get the currency rates and display them, the user can also search for currency rates. The user section is where users can register to keep a history of the currencies that have been exchanged, the user will be able to view past transaction history on login.</p> 
                    <strong>Huma Qaiser (H00145644 )</strong>
                    	<p>Huma's section is the currency exchange calculator which is the home page of the application. The currency exchange calculator  uses the currency rates gotten from the currency exchange section to calculate an amount from on currency to another. It will also makes use of an IP address web service to get the current location of the user and provide the currency on the form automatically.</p>
                    <strong>Umar Jidda (H00)</strong>
                    <p>Umar's section is the country and currency list pages where a list of countries and currencies are displayed with all the relevant details. These pages will make use of web services that provide all information about currencies and countries.</p>
                    <p><strong>Note: </strong>All sections use AJAX to display information on the front-end.</p>
                    
    			</div>
                <p>&nbsp; </p>
    		</div>
        	<div id="footer">
            	<center><a href="Overview.php">Overview</a></center>
            	<center>Currency Exchanger Copyright Reserved </center>
            </div>
        </div>
    </body>
</html>