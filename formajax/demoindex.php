<form action="#" method="post" name="agentLogin">
	<div style="color:#FFFFFF;position:relative;background-image:url(../../../img/login-background.gif); width:365px; height:227px; background-repeat:no-repeat;" id="login-table">
	<table style=" position:relative; left:-10px;margin-top:80px;">
		<tr>
			<td align="right">Username: </td>
			<td><input tabindex="1" type="text" id="agentUsername" name="agentUsername" /></td>
		</tr>
		<tr>
			<td align="right">Password: </td>
			<td><input tabindex="2" type="password" id="agentPassword" name="agentPassword" /></td>
		</tr>
		<tr>
			<td align="right"><span style="font-size:90%; color:#ddd">Remember Me:</span></td>
			<td align="left"><input onclick="javascript:login()" tabindex="4" style="float:right; font-weight:bold;" type="submit" value="LOGIN" name="agentLogin" /><input tabindex="3" style="float:left;" name="rememberMe" id="rememberMe" type="checkbox" value="y" /></td>
		</tr>
		<tr>
			<td style="padding-top:10px;" colspan="2" align="center"><a tabindex="5" class="login-link" href="#" onclick="showForgotPassword()">Forgot Password |</a> <a tabindex="6" class="login-link"  href="new-user.php">I'm A New Agent</a></td>
		</tr>
	</table>
	</div>
  </form>


<?php
function login($u,$p,$remember) { 
    if($u == "" or $p == "") { 
        echo "Please enter a username and a password"; 
    } 
    else { 
        dbConnect(); 
         
        // Queries the database 
        $sql = " 
            SELECT email,password 
            FROM user 
            WHERE email = '$u' 
            AND password = '$p' 
        "; 
        $res = mysql_query($sql) or die(mysql_error()); 
        $num = mysql_num_rows($res); 
         
        //  
        if($num == 1) { 
            echo "Success!";  
        } 
        else { 
            echo "Incorrect login information, please try again"; 
        } 
    } 
}  
?>

<script type="text/javascript">

  function login() {
	var user = document.getElementById('agentUsername').value;
	var pass = document.getElementById('agentPassword').value;
	var remember;
	
	if(document.agentLogin.rememberMe.checked) {
		remember = "y";
	}
	else {
		remember = "n";
	}
	
	new Ajax.Updater('errors', 'demoindex.php?login=true&auser='+user+'&apass='+pass+'&remember='+remember);
	new Effect.Highlight('errors', {startcolor:'#ff000',endcolor:'#ff99ff', restorecolor:'#ff99ff'});
}

function checkLogin(response)
{
 if (response == "Success!") {
   window.location='home.php';
 } else {
  alert("You have something wrong in your form.");
 }
}

var ajax = new Ajax.Updater(
         'datestr',        // DIV id (XXX: doesnt work?)
         'date.cgi',        // URL
         {                // options
         method:'get',
             onComplete: checkLogin
             });

</script>