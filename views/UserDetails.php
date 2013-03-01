<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>User Details :: Currency Exchanger</title>
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
                    <ul id="menubar" style="margin-left: 8%;">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="Currencies.php">Currencies</a></li>
                    <li><a href="Countries.php">Countries</a></li>
                    <li><a href="Currencyrates.php">Currencyrates</a></li>
                    <li class="currentpage"><a href="UserDetails.php">UserDetails</a></li>
                    </ul>
                </div>
    		</div>
    		<div id="content">
            	<center>
                	<p id="content_header">Welcome to Your Exchange History</p>
                </center>
    			<div class="centerform" style="margin-left:35%;margin-right:35%">
                    <div class="form_header"><center>
                    Your Details
                  </center></div>
                  		<form name="excalculate" action="#" method="post">
                  		  <label><strong>Firstname:</strong></label> Mohammed
                  		  <br/>
                  		  <br/>
                          <label><strong>Lastname:</strong></label> Olateju
                          <br/>
                          <br/>
                          <label><strong>Email:</strong></label> 
                          <span style="margin-left: 14%;"> f21na@hw.ac.uk</span>
                          <br/>
                          <br/>
                          <label><strong>Username:</strong></label> F21NA
                  		</form>
    			</div>
                <br />
                <div class="centerform" style="margin-left:10%; margin-right:10%">
                     <div class="form_header">
                         <center>Your History</center>
                     </div>
                  	 <form name="excalculate" action="#" method="post">
                            <table width="100%" border="0" cellspacing="2" cellpadding="5">
                              <tr>
                                <td width="24%"><strong>Time</strong></td>
                                <td width="29%"><strong>1st Currency </strong></td>
                                <td width="26%"><strong>2nd Currency</strong></td>
                                <td width="21%"><strong>Amount</strong></td>
                              </tr>
                              <tr>
                                <td>21/02/2013 15:00</td>
                                <td>United States Dollar (USD)</td>
                                <td>Arab Emirates Dirhams (AED)</td>
                                <td>2000 USD</td>
                              </tr>
                              <tr>
                                <td>21/02/2013 20:00</td>
                                <td> British Pound Sterling (BPS)</td>
                                <td>United States Dollar (USD)</td>
                                <td>500 BPS</td>
                              </tr>
                            </table>
                  	</form>
    			</div>
           	  <br/>
    		</div>
        	<div id="footer">
            	<center><a href="Overview.php">Overview</a></center>
            	<center>Currency Exchanger Copyright Reserved</center>
            </div>
        </div>
    </body>
</html>