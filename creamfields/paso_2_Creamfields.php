<?php

session_start();
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
  
} else {
  //header('Location: index.php');
}

$now = getdate();

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
                background: url(images/micreamfields03.png) no-repeat center top;
            }
        </style>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery.queryloader2.js"></script>
        <script type="text/javascript" src="js/jquery.blockUI.js" ></script>
        <script>
            var img = new Image();
            $(document).ready(function() {
                $("body").queryLoader2({ 
                    backgroundColor: '#FFF', 
                    barColor: '#000',
                    percentage: true
                });

                canvas = document.getElementById("horario");
                ctx = canvas.getContext("2d");

                img.onload = function() {
                    ctx.drawImage(img, 0, 0);
                }

                img.src = "images/final/fondo.png";

                <?php
                    foreach ($_SESSION['seleccion'] as $key => $value) {
                        echo "var imagen".$key." = new Image();\n";
                        echo "imagen".$key.".src = '" . $value['url'] . "';\n";
                        echo "imagen".$key.".onload = function() { ctx.drawImage(imagen".$key.", ".$value['x'].", ".$value['y']."); }\n";
                    } 
                ?>

                $('#continuar').click(function() {
                    $.blockUI({
                      message: 'Guardando tu creamfields...', 
                      css: { 
                        border: 'none', 
                        padding: '15px', 
                        backgroundColor: '#000', 
                        '-webkit-border-radius': '10px', 
                        '-moz-border-radius': '10px', 
                        opacity: .5, 
                        color: '#fff' 
                      } 
                    });
                    $.post('guardar_imagen.php',{img : canvas.toDataURL(), nombre: "<?php echo $_SESSION['perfil']['fb_id'] . '_' . $now[0] . '.png'; ?>"}, function() {
                        $.post('guardar_bd.php',{fb_id: "<?php echo $_SESSION['perfil']['fb_id']; ?>", fb_nombre: "<?php echo $_SESSION['perfil']['fb_nombre']; ?>", fb_link_usr: "<?php echo $_SESSION['perfil']['fb_link_usr']; ?>", link_img: "http://reframe.cl/creamfields/upload/<?php echo $_SESSION['perfil']['fb_id'] . '_' . $now[0] . '.png'; ?>", }, function(data) {
                            window.location = "paso_3_Creamfields.php?id="+data;
                        });
                    });
                });
                
                <?php
                    if ($_SESSION['reload'] == 1) {
                ?>
                        $.blockUI({
                          message: 'Espera un momento...', 
                          css: { 
                            border: 'none', 
                            padding: '15px', 
                            backgroundColor: '#000', 
                            '-webkit-border-radius': '10px', 
                            '-moz-border-radius': '10px', 
                            opacity: .5, 
                            color: '#fff' 
                          } 
                        }); 
                <?php
                        echo "setTimeout ('window.location.reload();', 2000);";
                        $_SESSION['reload'] = 0;
                    }
                ?>
            });
        </script>
    
    </head>
    <body>

        <div id="contenido-imagen">
            <canvas id="horario" height="370" width="530">
            </canvas>
        </div>
                <div class="botones2">
                    <div id="modificar"><a href="paso_1_Creamfields2.php"><img src="images/botones/modificar.png" /></a></div>
                    <div id="continuar"><a href="#"><img src="images/botones/continuar.png" /></a></div>
                </div>
    </body>
</html>
