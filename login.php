<!DOCTYPE html>
<html>
<?php include("meta.php"); ?>
<body id="login-page">
<div id="body">
        <div class="loginbox">
            <div class="logo_login"></div>
            <!--logo-->
           <form name="Form2" method="POST" action="http://manage.touchbaseconnect.com/login/local" id="Form2">
                <input name="username" placeholder="Username" type="text" id="username" maxlength="20"> 
                <input name="password" placeholder="Password" type="password" id="password" maxlength="20">
				<input id="button" type="submit" name="Submit" value="Login">
           		<input type="hidden" name="login" value="1">
            </form>	
        </div><!--loginbox-->
</div><!-- end #body -->  			
</body>
</html>