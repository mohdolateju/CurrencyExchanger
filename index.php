<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Home :: Currency Exchanger</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/money.png" type="image/x-icon"/>
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
					if(no==3){
						tags[2].removeAttribute('class');
						tags[2].value='';
					}	
					if(no==4){
						tags[3].removeAttribute('class');
						tags[3].value='';
					}
					if(no==5){
						tags[4].removeAttribute('class');
						tags[4].value='';
					}										
			}						
        </script>
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
    			<div class="centerform" style="margin-left:25%;margin-right:25%">
                    <div class="form_header"><center>Enter Information to Calculate Amount</center></div>
                  		<form name="excalculate" action="#" method="post">
                          <label>Amount :</label><input type="text" class="initval" name="amount" onclick="removeAtt(1)" style="margin-left:13%;" value="0" />
                           		<br/><br/>
                          <label>1st Currency :</label>
                   		  		<input type="text" class="initval" name="firstcur" onclick="removeAtt(2)" style="margin-left:4.1%;" value="Arab Emirate Dirhams" />
                            	<input type="text" class="initval" name="abbrfirstcur" onclick="removeAtt(3)" style="margin-left:5%; width:40px;" value="AED"/><br/><br/>
                          <label>2nd Currency : </label>
                   		  		<input type="text" class="initval" name="secondcur" onclick="removeAtt(4)"  style="margin-left:3%;" value="U.S Dollars"/>
                            	<input type="text" class="initval" name="abbrsecondcur" onclick="removeAtt(5)" style="margin-left:5%; width:40px;" value="USD"/><br/><br/>
                          <label>Total: </label>
                   		  		<input type="text" class="initval" style="margin-left:17%;width:50%;" value="$0.66"/><br/><br/>
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