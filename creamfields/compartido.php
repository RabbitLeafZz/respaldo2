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
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
            });
        </script>
    
    </head>
    <body>

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
    </body>
</html>
