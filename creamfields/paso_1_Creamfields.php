<?php

require 'facebook/src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
'appId'  => '531707813512666',
'secret' => '8007fa623a8b5d8e014a45b13de21da9',
));

// Get User ID
$user = $facebook->getUser();

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/MyFontsWebfontsKit.css" rel="stylesheet" type="text/css" />
        
        <style>
            body {
                background: url(micreamfields02.png) no-repeat center top;
            }
        </style>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.queryloader2.js"></script>
        <script>
            $(document).ready(function() {
                $("body").queryLoader2({ 
                    backgroundColor: '#FFF', 
                    barColor: '#000',
                    percentage: true
                });
            });
        </script>
        
    </head>
    <body>
    
  			<div id="formContainer">
			<form id="login-calvin" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink">Recordar Contraseña?</a>
			</form>
			<form id="recover-calvin" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer2">
			<form id="login-david" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink2">Recordar Contraseña?</a>
			</form>
			<form id="recover-david" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink2">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer3">
			<form id="login-infected" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink3">Recordar Contraseña?</a>
			</form>
			<form id="recover-infected" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink3">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer4">
			<form id="login-kaden" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink4">Recordar Contraseña?</a>
			</form>
			<form id="recover-kaden" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink4">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer5">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink5">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink5">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer6">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink6">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink6">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer7">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink7">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink7">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer8">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink8">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink8">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer9">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink9">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink9">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer10">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink10">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink10">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer11">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink11">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink11">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer12">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink12">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink12">Recordar Contraseña?</a>
			</form>
			</div>

			<div id="formContainer13">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink13">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink13">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer14">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink14">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink14">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer15">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink15">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink15">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer16">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink16">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink16">Recordar Contraseña?</a>
			</form>
			</div>

			<div id="formContainer17">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink17">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink17">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer18">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink18">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink18">Recordar Contraseña?</a>
			</form>
			</div>
			
			<div id="formContainer19">
			<form id="login" method="post" action="./">
				<a href="#" id="flipToRecover" class="flipLink19">Recordar Contraseña?</a>
			</form>
			<form id="recover" method="post" action="./">
				<a href="#" id="flipToLogin" class="flipLink19">Recordar Contraseña?</a>
			</form>
			</div>

 
			
			
	  <?php if ($user): ?>
                <div id="start-paso1"><a href="paso_2_Creamfields.php"><img src="images/continuar.png" /></a></div>
              
                <!-- <div id="start-2"><a href="paso_2_Creamfields.php"><img src="images/logo-1.png" /></a></div>  -->
            <?php else: ?>
                <div id="like">
                    Ingresa a Facebook
                    <a href="<?php echo $loginUrl; ?>">Login</a>
                </div>
            <?php endif ?>
        </div>
         <!-- JavaScript includes -->
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="js/script.js"></script>
    </body>
</html>