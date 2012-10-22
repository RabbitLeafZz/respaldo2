<?php

if (isset($_GET['id'])) {
    require 'conectar.php';
    $resultado = mysql_query("SELECT * FROM datos WHERE id = {$_GET['id']}");
    $datos = mysql_fetch_assoc($resultado);

    if (!$datos) {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}


session_start();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"
      xmlns:fb="https://www.facebook.com/2008/fbml">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# micreamfields: http://ogp.me/ns/fb/micreamfields#">
        <title>Mi Creamfields</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="title" content="Mi Creamfields">
        <meta name="description" content="Hey! Estoy participando por un pase vip para Creamfields 2012! Ay&#xfa;dame a ganar dando ME GUSTA a &#x201c;Mi Creamfields&#x201d;">
        <!-- Facebook -->
            <meta property="fb:app_id"      content="531707813512666" /> 
            <meta property="og:type"        content="micreamfields:creamfields" /> 
            <meta property="og:url"         content="http://apps.facebook.com/micreamfields/?id=<?php echo $_GET['id']; ?>" /> 
            <meta property="og:title"       content="Mi Creamfields" /> 
            <meta property="og:image"       content="http://reframe.cl/creamfields/images/creamfields-logo.jpeg" /> 
            <meta property="og:description" content="Hey! Estoy participando por un pase vip para Creamfields 2012! Ay&#xfa;dame a ganar dando ME GUSTA a &#x201c;Mi Creamfields&#x201d;" /> 

        <link href="css/reset.css" rel="stylesheet" type="text/css" />
        <link href="css/MyFontsWebfontsKit.css" rel="stylesheet" type="text/css" />
        
        <style>
            body {
                background: url(images/fondo_compartido.png) no-repeat center top;
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

        <div id="fb-root"></div>
        <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '531707813512666', // App ID
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
        };

        // Load the SDK Asynchronously
        (function(d){
          var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
          js = d.createElement('script'); js.id = id; js.async = true;
          js.src = "//connect.facebook.net/es_LA/all.js";
          d.getElementsByTagName('head')[0].appendChild(js);
        }(document));
        </script>

        <div class="contenido_index">
            <div id="compartido-imagen">
                <h1>CREADO POR <a href="<?php echo $datos['fb_link_usr']; ?>"><?php echo $datos['fb_nombre']; ?></a></h1>
                <img src="<?php echo $datos['link_img']; ?>" /> 
                <div class="like">
                    <fb:like href="http://apps.facebook.com/micreamfields/?id=<?php echo $_GET['id']; ?>" send="true" width="800" show-faces="false"></fb:like>
                </div>
            </div>
            <div class="comment">
                <fb:comments href="http://apps.facebook.com/micreamfields/?id=<?php echo $_GET['id']; ?>" num-posts="2" width="800"></fb:comments>
            </div>
        </div>
    </body>
</html>
