<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <title>Home :: Currency Exchanger</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/money.png" type="image/x-icon"/>
        <script type="text/javascript" src="javascript/main.js"></script>
        <script type="text/javascript" src="javascript/jquery-1.9.1.js"></script>
        <script type="text/javascript">

            //Function to Get and Print Currency abbreviation From the Country Name
            function getCurrencyAbbrev(value){

                //get country and currency values from the fields
                if(value==1){
                    var country=$("#firstCountry").val();

                }else if(value==2){
                    var country=$("#secondCountry").val();

                }

                //send ajax query with "rateByCountry" as the arguement value
                $.get("controllers/Currencyrates_Controller.php?action=currencyAbbrev", {country: country},
                    function(ajaxValue){
                        //get the value from the ajax request and print it in the currency rate text fields
                        if(value==1){
                            $("#firstCurrAbbrev").val(ajaxValue);
                        }else if(value==2){
                            $("#secondCurrAbbrev").val(ajaxValue);
                        }
                    });

            }

            //Function to Calculate Total Amount
            function calculateTotal(){

                //get 1st & 2nd currency abbreviations from the fields
                var firstCurr=$("#firstCurrAbbrev").val();
                var secondCurr=$("#secondCurrAbbrev").val();

                //send ajax query with "get2currRate" as the arguement value
                $.get("controllers/Currencyrates_Controller.php?action=get2CurrRate", {firstCurr: firstCurr,
                                                                                            secondCurr:secondCurr},
                    function(value){
                        //get the value from the ajax request and print the total in the #total text field
                        var amt= $("#amount").val();

                        $("#total").val(parseFloat(value*amt).toFixed(2));
                    });
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
    			<div class="centerform" style="margin-left:30%;margin-right:30%">
                    <div class="form_header"><center>Enter Information to Calculate Amount</center></div>
                  		<form name="excalculate" action="#" method="get">
                          <label>Amount :</label><input type="text" class="initval" id="amount" name="amount" onclick="removeAtt(1)"
                                                        style="margin-left:13%;" value="0" />
                           		<br/><br/>
                          <label>From Currency :</label>
                   		  		<input type="text" class="initval" id="firstCountry" name="firstcur" onclick="removeAtt(2)"
                                       onkeypress="getCurrencyAbbrev(1)" style="margin-left:5.1%;" value="Source Currency" />
                            	<input type="text" class="initval" id="firstCurrAbbrev" name="abbrfirstcur" onclick="removeAtt(3)"
                                       style="margin-left:5%; width:40px;" value="Abbr"/><br/><br/>
                          <label>To Currency : </label>
                   		  		<input type="text" class="initval" id="secondCountry" name="secondcur" onclick="removeAtt(4)"
                                       onkeypress="getCurrencyAbbrev(2)" style="margin-left:4%;" value="Target Currency"/>
                            	<input type="text" class="initval" id="secondCurrAbbrev" name="abbrsecondcur" onclick="removeAtt(5)"
                                       style="margin-left:5%; width:40px;" value="Abbr"/><br/><br/>
                          <label>Total: </label>
                   		  		<input type="text" id="total" class="initval"  style="margin-left:17%;width:50%;" value="$0.66"/><br/><br/>
                          <input class="button" type="reset"  value="Reset"/>
                          <input class="submitbutton" style="margin-left:52%" type="button" onclick="calculateTotal()" value="Calculate" />
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