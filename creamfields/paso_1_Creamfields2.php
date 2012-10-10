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
                background: url(images/micreamfields02.png) no-repeat center top;
            }
        </style>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.7.2.min.js"></script>
        <script>
        function toggleLayer( whichLayer )
{
  var elem, vis;
  if( document.getElementById ) // this is the way the standards work
    elem = document.getElementById( whichLayer );
  else if( document.all ) // this is the way old msie versions work
      elem = document.all[whichLayer];
  else if( document.layers ) // this is the way nn4 works
    elem = document.layers[whichLayer];
  vis = elem.style;
  // if the style.display value is blank we try to figure it out here
  if(vis.display==''&&elem.offsetWidth!=undefined&&elem.offsetHeight!=undefined)
    vis.display = (elem.offsetWidth!=0&&elem.offsetHeight!=0)?'block':'none';
  vis.display = (vis.display==''||vis.display=='block')?'none':'block';
}
        </script>
        
        <script>
        /*jQuery 1.7*/
		$(document).on('ready', function() {
   			 $("#alex img.top").on('click', function() {
            		$("#alex img.top").toggleClass("transparent");
       					 });
					});
        </script>
        
         <script>
        /*jQuery 1.7*/
		$(document).on('ready', function() {
   			 $("#matanza img.top").on('click', function() {
            		$("#matanza img.top").toggleClass("transparent");
       					 });
					});
        </script>
    </head>
    <body>
    
		<div id="main">
  			<div id="alex"><a href="#" id="flipToRecover" class="flipLink"><img class="top" src="images/boxes/alex.png" /></a></div>
			<div id="matanza"><a href="#" id="flipToRecover" class="flipLink"><img class="top" src="images/boxes/matanza.png" /></div>
			<div id="marciano"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/marciano.png" /></div>
			<div id="calvin"><a href="javascript:toggleLayer('BIO-calvin');" ><img src="images/boxes/calvin.png" /></div>
			<div id="david"><a href="javascript:toggleLayer('BIO-david');" ><img src="images/boxes/david.png" /></div>
			<div id="infected"><a href="javascript:toggleLayer('BIO-infected');" ><img src="images/boxes/infected.png" /></div>
 		</div>

		<div id="clubroom">
  			<div id="felipe"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/felipevenegas.png" /></div>
			<div id="butano"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/butano.png" /></div>
			<div id="mathias"><a href="javascript:toggleLayer('BIO-mathias');" ><img src="images/boxes/mathias.png" /></div>
			<div id="solomun"><a href="javascript:toggleLayer('BIO-solomun');" ><img src="images/boxes/solomun.png" /></div>
			<div id="art"><a href="javascript:toggleLayer('BIO-art');" ><img src="images/boxes/art.png" /></div>
			<div id="jaime"><a href="javascript:toggleLayer('BIO-jaime');" ><img src="images/boxes/jaime.png" /></div>
 		</div>

		<div id="alternative">
  			<div id="rodrigo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/rodrigo.png" /></div>
			<div id="marcos"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/marcos.png" /></div>
			<div id="michael"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/michael.png" /></div>
			<div id="nervo"><a href="javascript:toggleLayer('BIO-nervo');" ><img src="images/boxes/nervo.png" /></div>
			<div id="alesso"><a href="javascript:toggleLayer('BIO-alesso');" ><img src="images/boxes/alesso.png" /></div>
			<div id="fedde"><a href="javascript:toggleLayer('BIO-fedde');" ><img src="images/boxes/fedde.png" /></div>
 		</div>

		<div id="cream">
  			<div id="pia"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/pia.png" /></div>
			<div id="tweeter"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/tweeter.png" /></div>
			<div id="guti"><a href="javascript:toggleLayer('BIO-guti');" ><img src="images/boxes/guti.png" /></div>
			<div id="reboot"><a href="javascript:toggleLayer('BIO-reboot');" ><img src="images/boxes/reboot.png" /></div>
			<div id="steve"><a href="javascript:toggleLayer('BIO-steve');" ><img src="images/boxes/steve.png" /></div>
			<div id="james"><a href="javascript:toggleLayer('BIO-james');" ><img src="images/boxes/james.png" /></div>
 		</div>
			
		<div id="zero">
  			<div id="javiersuka"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/javiersuka.png" /></div>
			<div id="nicocrespo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/nicocrespo.png" /></div>
			<div id="fernandomujica"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/fernandomujica.png" /></div>
			<div id="rodrigoguendelman"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/rodrigoguendelman.png" /></div>
			<div id="fernandaarrau"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/fernandaarrau.png" /></div>
			<div id="vivesgforero"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/vives.png" /></div>
			<div id="franciscoparra"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/franciscoparra.png" /></div>
			<div id="gustavoallendes"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/gustavoallendes.png" /></div>
			<div id="ignacioaguirre"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/ignacioaguirre.png" /></div>
			<div id="phillipetruan"><a href="#" id="flipToRecover" class="flipLink"><img src="images/boxes/phillipetruan.png" /></div>
 		</div>
			
			<div id="BIO-alesso">
			<div id="nombre-dj">Alesso</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/alesso.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-art">
			<div id="nombre-dj">Art Department</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/art-departament.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-calvin">
			<div id="nombre-dj">Calvin Harris</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/calvin-harris.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-david">
			<div id="nombre-dj">David Guetta</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/david-guetta.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-fedde">
			<div id="nombre-dj">Fedde le Grand</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/fedde-le-grand.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-guti">
			<div id="nombre-dj">Guti</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/guti.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-infected">
			<div id="nombre-dj">Infected Mushroom</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/infect-mushroom.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-james">
			<div id="nombre-dj">James Zabiella</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/jamie-zabiela.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-jaime">
			<div id="nombre-dj">Jamie jones</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/jamie-jones.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-mathias">
			<div id="nombre-dj">Mathias Kaden</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/mathias-kaden.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-nervo">
			<div id="nombre-dj">Nervo</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/nervo.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-reboot">
			<div id="nombre-dj">Reboot</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/rebbot.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-solomun">
			<div id="nombre-dj">Solomun</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/solomun.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>			
  			</div>
			
			<div id="BIO-steve">
			<div id="nombre-dj">Steve Lawler</div>
			<div id="foto-dj"><img src="images/fotosdjs-bio/steve-lawler.png" /></div>
  			<div id="descripcion-dj">descripcion del dj</div>
  			<div id="boton-dj"><a href="paso_2_Creamfields.php"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			
			
	  <?php if ($user): ?>
                <div id="start-paso1"><a href="paso_2_Creamfields.php"><img src="images/botones/continuar.png" /></a></div>
            <?php else: ?>
                <div id="like-paso1">
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