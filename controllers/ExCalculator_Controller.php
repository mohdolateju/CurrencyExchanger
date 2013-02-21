<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <title>Currency Exchanger::Home</title>
    </head>
    <body>
        <div id="wrapper">
    		<div id="header">
    			<div id="title"><span class="title">Currency Exchanger</span></div>
    			<div id="menus">
                    <ul id="menubar">
                    <li class="currentpage"><a href="#">Home</a></li>
                    <li><a href="#">Currencies</a></li>
                    <li><a href="#">Countries</a></li>
                    <li><a href="#">Currencyrates</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                    </ul>
                </div>
    		</div>
    		<div id="content">
            	<center>
                	<p id="content_header">Welcome to Currency Exchanger</p>
                </center>
    			<div class="centerform" style="">
                    <div class="form_header"><center>Enter Information to Calculate Amount</center></div>
                  		<form name="excalculate" action="#" method="post">
                            <label>Amount :</label><input type="text" style="margin-left:11%;"/><br/><br/>
                            <label>1st Currency :</label><input type="text" style="margin-left:5%;"/>
                            	<input type="text" style="margin-left:5%; width:40px;"/><br/><br/>
                            <label>2nd Currency : </label><input type="text" style="margin-left:3%;"/>
                            	<input type="text" style="margin-left:5%; width:40px;"/><br/><br/>
                            <label>Total: </label><input type="text" style="margin-left:14.5%;width:58%;"/><br/><br/>
                            <input class="button" type="reset"  value="Reset"/>
                            <input class="submitbutton" style="margin-left:52%" type="submit" value="Calculate"/>
                        </form>
    			</div>
    		</div>
        	<div id="footer">
            	<center>Currency Exchanger Copyright Reserved</center>
            </div>
        </div>
    </body>
</html>