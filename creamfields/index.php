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
            <?php if ($user): ?>
                <div id="start-index"><a href="paso_1_Creamfields2.php"><img src="images/botones/comenzar.png" /></a></div>
            <?php else: ?>
                <div id="like">
                    Ingresa a Facebook
                    <a href="<?php echo $loginUrl; ?>">Login</a>
                </div>
            <?php endif ?>
        <div class="creamfields_creados">
            <h1>Creamfields creados por otros</h1>
            <h3>Pincha en un creamfields para votar por el</h3>
            <div class="contenido">
                <?php while ($row = mysql_fetch_assoc($datos)) { ?>
                    <h2>Creado por <a href="<?php echo $row['fb_link_usr']; ?>"><?php echo $row['fb_nombre']; ?></a></h2>
                    <a href="http://apps.facebook.com/micreamfields/?id=<?php echo $row['id']; ?>" target="_blank" ><img src="<?php echo $row['link_img']; ?>" /></a>
                    <hr />
                <?php } ?>
            </div>
        </div>
    </body>
</html>
