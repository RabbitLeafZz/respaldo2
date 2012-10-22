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

session_start();
$_SESSION['perfil']['fb_id'] = $perfil['id'];
$_SESSION['perfil']['fb_nombre'] = $perfil['name'];
$_SESSION['perfil']['fb_link_usr'] = $perfil['link'];
$_SESSION['index'] = 0;


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
        <script src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/js-ynnova.js"></script>
        <script type="text/javascript">
            BrowserDetect.init();
        </script>
        <script src="//connect.facebook.net/es_LA/all.js"></script>
        <script>
            var FB;
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
            var opts = {
                offset: '100%'
            };

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
                    if (BrowserDetect.version > 4) {
                        navegador = true;
                    }
                }

                if (!navegador) {
                    $('#start-index a').remove();
                    $('#start-index').html('Tu Navegador no es compatible<br/>Actualiza a la última versión o cambia por uno mas moderno');
                    $('#start-index').attr('style', 'margin-bottom: 30px; font-weight: bold; font-size: 15pt;');
                }

                $('#fin').waypoint(function(event, direction) {
                        var fin = $(this);
                        fin.waypoint('remove');
                        if (direction == 'down') {
                            fin.css({'visibility' : 'visible'}); // mostramos "cargando..."
                            traer_datos();
                        } 
                    }, opts);
                
            });

            function traer_datos() {
                $.get('listado.php',{}, function(data) {
                    var resultado = $.parseJSON(data);
                    var texto;
                    for(i=0; i<resultado.length; i++) {
                        texto = '<div class="por">';
                        texto += '<img class="profile_picture" src="http://graph.facebook.com/'+resultado[i].fb_id+'/picture">';
                        texto += '<div style="margin-left: 55px;">';
                        texto += '<a href="'+resultado[i].fb_link_usr+'" target="_blank">'+resultado[i].fb_nombre+'</a>';
                        texto += '</div>';
                        texto += '<div style="margin-left: 55px;">Compartido vía Mi Creamfields</div>';
                        texto += '</div>';
                        texto += '<a href="http://apps.facebook.com/micreamfields/?id='+resultado[i].id+'" target="_blank" ><img src="'+resultado[i].link_img+'" /></a>';
                        texto += '<div class="comment">';
                        texto += '<fb:like href="http://apps.facebook.com/micreamfields/?id='+resultado[i].id+'" send="true" width="500" show-faces="false"></fb:like>';
                        texto += '<fb:comments href="http://apps.facebook.com/micreamfields/?id='+resultado[i].id+'" num-posts="2" width="500"></fb:comments>';
                        texto += '</div>';
                        texto += '<hr />';

                        $('.contenido').append(texto);
                    }

                    FB.XFBML.parse();
                    
                    $('#fin').css({'visibility' : 'hidden'});
                });
            }
        </script>
      
    </head>
    <body>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <div class="contenido_index">
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
                </div>
            </div>
        </div>
        <div id="fin" style="absolute: absolute; font-size: 30pt; visibility: hidden; width: 100%; height: 50px; text-align: center;"><img src="images/loading.gif" /></div>
    </body>
</html>
