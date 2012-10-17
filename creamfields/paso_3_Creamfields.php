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
  //header('Location: index.php');
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
                background: url(images/micreamfields04.png) no-repeat center top;
            }
        </style>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.queryloader2.js"></script>
        <script src="js/jquery.bpopup-0.7.0.min.js"></script>
        <script src="http://connect.facebook.net/en_US/all.js"></script>
        <script>
            FB.init({ 
                appId:'531707813512666', cookie:true, 
                status:true, xfbml:true 
            });

        </script>
        <script>
            $(document).ready(function() {
                $("body").queryLoader2({ 
                    backgroundColor: '#FFF', 
                    barColor: '#000',
                    percentage: true
                });

                $('#pdf').hide();
                $('#formemail').hide();

                $('#invitar').click(function() {
                    FB.ui({ method: 'apprequests', message: 'Invita a tus amigos a participar...'});
                })
                $('#imprimir').click(function() {
                    $('#pdf').bPopup();
                });
                $('#mail').click(function() {
                    $('#formemail').bPopup();
                });

                $("#enviarmail").submit(function(){
                    $.ajax({
                        type: "POST",
                        url: "mail/enviar.php",
                        async: false,
                        //Serializamos los datos del Form. Los parámetros son los NAME del formulario, no los id
                        data: $(this).serialize(),
                        success: function(data){
                            alert(data);
                        }
                    }); //$.ajax
                    return false;
                }); //submit
            });
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-32023083-3']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </head>
    <body>
        <div class="botones">
            <div id="invitar"></div>
            <div id="imprimir"></div>
            <div id="mail"></div>
        </div>
        <iframe id="pdf" src="http://www.reframe.cl/creamfields/pdfimg.php?id=<?php echo $_GET['id']; ?>" frameborder="0" width="600" height="850">Si ves este mensaje, significa que tu navegador no tiene soporte para marcos o el mismo está deshabilitado</iframe>

        <div id="formemail">
            <form id="enviarmail" action="mail/enviar.php" method="post">
                <input type="text" name="destino" placeholder="Ingresa tu email" />
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <input type="submit" value="Enviar" />
            </form>
        </div>
    </body>
</html>