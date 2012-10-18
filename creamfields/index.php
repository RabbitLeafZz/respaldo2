<?php

if (isset($_GET['id'])) {
    header('Location: compartido.php?id='.$_GET['id']);
}

require 'facebook/src/facebook.php';
require 'conectar.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
'appId'  => '531707813512666',
'secret' => '8007fa623a8b5d8e014a45b13de21da9',
));

// Get User ID
$user = $facebook->getUser();

// Login or logout url will be needed depending on current user state.
if ($user) {
  $perfil = $facebook->api('/me','GET');
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// Trae los creamfields creados
$datos = mysql_query("SELECT * FROM datos ORDER BY id DESC;");

session_start();
$_SESSION['perfil']['fb_id'] = $perfil['id'];
$_SESSION['perfil']['fb_nombre'] = $perfil['name'];
$_SESSION['perfil']['fb_link_usr'] = $perfil['link'];


?>

<!--[if lte IE 6]>
<script type="text/javascript" src="ie6/ie6-warning.js"></script>
<script type="text/javascript">
	window.onload=function(){
		e("js/ie6/");
	}
</script>
<![endif]-->



<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/MyFontsWebfontsKit.css" rel="stylesheet" type="text/css" />
        
        <style>
            body {
                background: url(micreamfields01.png) no-repeat center top;
            }
        </style>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.queryloader2.js"></script>
        <script type="text/javascript" src="js/js-ynnova.js"></script>
        <script type="text/javascript">
            BrowserDetect.init();
        </script>
        <script src="//connect.facebook.net/en_US/all.js"></script>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '531707813512666', // App ID
                    status     : true, // check login status
                    xfbml      : true  // parse XFBML
                });

                // Additional initialization code here
            };
        </script>
        <script>
            $(document).ready(function() {
                $("body").queryLoader2({ 
                    backgroundColor: '#FFF', 
                    barColor: '#000',
                    percentage: true
                });

                var navegador = false;

                if (BrowserDetect.browser == "Chrome") {
                    if (BrowserDetect.version > 20) {
                        navegador = true;
                    }
                }

                if (BrowserDetect.browser == "Firefox") {
                    if (BrowserDetect.version > 13) {
                        navegador = true;
                    }
                }

                if (BrowserDetect.browser == "Opera") {
                    if (BrowserDetect.version > 11) {
                        navegador = true;
                    }
                }

                if (BrowserDetect.browser == "Explorer") {
                    if (BrowserDetect.version > 8) {
                        navegador = true;
                    }
                }

                if (BrowserDetect.browser == "Safari") {
                    navegador = false;
                }

                if (!navegador) {
                    $('#start-index a').remove();
                    $('#start-index').html('Tu Navegador no es compatible<br/>Actualiza a la última versión o cambia por uno mas moderno');
                    $('#start-index').attr('style', 'margin-bottom: 30px; font-weight: bold; font-size: 15pt;');
                }
                
            });
        </script>
      
    </head>
    <body>	
            <?php if ($user): ?>
                <div id="start-index"><a href="paso_1_Creamfields2.php"><img src="images/botones/comenzar.png" /></a></div>
            <?php else: ?>
                <div id="like">
                    Ingresa a Facebook para utilizar la aplicación
                </div>
            <?php endif ?>
        <div class="creamfields_creados">
            <h1>Creamfields creados por otros</h1>
            <h3>Pincha en un creamfields para votar por el</h3>
            <div class="contenido">
                <?php while ($row = mysql_fetch_assoc($datos)) { ?>
                    <div class="por">
                        <img class="profile_picture" src="http://graph.facebook.com/<?php echo $row['fb_id']; ?>/picture">
                        <div style="margin-left: 55px;">
                            <a href="<?php echo $row['fb_link_usr']; ?>" target="_blank"><?php echo $row['fb_nombre']; ?></a>
                        </div>
                        <div style="margin-left: 55px;">Compartido vía Mi Creamfields</div>
                    </div>
                    <a href="http://apps.facebook.com/micreamfields/?id=<?php echo $row['id']; ?>" target="_blank" ><img src="<?php echo $row['link_img']; ?>" /></a>
                    <div class="comment">
                        <fb:like href="http://apps.facebook.com/micreamfields/?id=<?php echo $row['id']; ?>" send="true" width="500" show-faces="false"></fb:like>
                        <fb:comments href="http://apps.facebook.com/micreamfields/?id=<?php echo $row['id']; ?>" num-posts="2" width="500"></fb:comments>
                    </div>
                    <hr />
                <?php } ?>
            </div>
        </div>
    </body>
</html>
