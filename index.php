<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Home :: Currency Exchanger</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/money.png" type="image/x-icon"/>
        <script type="text/javascript" src="javascript/main.js"></script>
    </head>
    <body>
        <div id="wrapper">
    		<div id="header">
    			<div id="title"><span class="title" >Currency Exchanger</span></div>
    			<div id="menus">
                    <ul id="menubar">
                    <li class="currentpage"><a href="index.php">Home</a></li>
                    <li><a href="views/Currencies.php">Currencies</a></li>
                    <li><a href="views/Countries.php">Countries</a></li>
                    <li><a href="views/Currencyrates.php">Currencyrates</a></li>
                    <li><a href="views/Register.php">Register</a></li>
                    <li><a href="views/Login.php">Login</a></li>
                    </ul>
                </div>
    		</div>
    		<div id="content">
            	<center>
                	<p id="content_header">Welcome to Currency Exchanger</p>
                </center>
    			<div class="centerform" style="margin-left:30%;margin-right:30%">
                    <div class="form_header"><center>Enter Information to Calculate Amount</center></div>
                  		<form name="excalculate" action="#" method="post">
                          <label>Amount :</label><input type="text" class="initval" name="amount" onclick="removeAtt(1)" style="margin-left:13%;" value="0" />
                           		<br/><br/>
                          <label>1st Currency :</label>
                   		  		<input type="text" class="initval" name="firstcur" onclick="removeAtt(2)" style="margin-left:5.1%;" value="Source Currency" />
                            	<input type="text" class="initval" name="abbrfirstcur" onclick="removeAtt(3)" style="margin-left:5%; width:40px;" value="S Abbr"/><br/><br/>
                          <label>2nd Currency : </label>
                   		  		<input type="text" class="initval" name="secondcur" onclick="removeAtt(4)"  style="margin-left:4%;" value="Target Currency"/>
                            	<input type="text" class="initval" name="abbrsecondcur" onclick="removeAtt(5)" style="margin-left:5%; width:40px;" value="T Abbr"/><br/><br/>
                          <label>Total: </label>
                   		  		<input type="text" class="initval" disabled="disabled" style="margin-left:17%;width:50%;" value="$0.66"/><br/><br/>
                          <input class="button" type="reset"  value="Reset"/>
                          <input class="submitbutton" style="margin-left:52%" type="submit" value="Calculate"/>
                        </form>
    			</div>
    		</div>
        	<div id="footer">
            	<center><a href="views/Overview.php">Overview</a></center>
            	<center>Currency Exchanger Copyright Reserved</center>
            </div>
        </div>
    </body>
</html>