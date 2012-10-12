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
		  $('.bios').hide();
		  $('#'+whichLayer).show();
		  		  
		}
        </script>
      
      <script>
      var seleccionados = new Array();
        $(document).on('ready', function() {
         $("div[id*='boton-']").on('click', function() {
                  var artista = $(this).attr('id');
                  artista = artista.substring(6);
                  $("#"+artista+" img.bottom").toggleClass("transparent");
                  var noexiste = true;
                  for (i=0; i<seleccionados.length; i++) {
                    if (seleccionados[i] == artista) {
                      noexiste = false;
                      seleccionados.splice(i, 1);
                    }
                  }
                  if (noexiste) {
                    seleccionados.push(artista);
                  }
                });
        });
      </script> 
       
		
    </head>
    <body>
    
		<div id="main">
  			<div id="alex" ><a href="javascript:toggleLayer('BIO-alex');" ><img class="bottom" src="images/boxes/alex.png" /><img class="top" src="images/boxes-2/			alex.png" /></a></div>
			<div id="matanza"><a href="javascript:toggleLayer('BIO-matanza');" ><img class="bottom" src="images/boxes/matanza.png" /><img class="top" src="images/			boxes-2/MATANZA.png" /></a></div>
			<div id="marciano"><a href="javascript:toggleLayer('BIO-marciano');" ><img class="bottom" src="images/boxes/marciano.png" /><img class="top" src="images/boxes-2/MARCIANO.png" /></a></div>
			<div id="calvin"><a href="javascript:toggleLayer('BIO-calvin');" ><img class="bottom" src="images/boxes/calvin.png" /><img class="top" src="images/				boxes-2/CALVIN.png" /></a></div>
			<div id="david"><a href="javascript:toggleLayer('BIO-david');" ><img class="bottom" src="images/boxes/david.png" /><img class="top" src="images/				boxes-2/DAVID.png" /></a></div>
			<div id="infected"><a href="javascript:toggleLayer('BIO-infected');" ><img class="bottom" src="images/boxes/infected.png" /><img class="top" src="images/				boxes-2/INFECTED.png" /></a></div>
 		</div>

		<div id="clubroom">
  			<div id="felipe"><a href="javascript:toggleLayer('BIO-felipe');" ><img class="bottom" src="images/boxes/felipevenegas.png" /><img class="top" src="images/boxes-2/FELIPE.png" /></a></div>
			<div id="butano"><a href="javascript:toggleLayer('BIO-butano');"> <img class="bottom" src="images/boxes/butano.png" /><img class="top" src="images/boxes-2/BUTANO.png" /></a></div>
			<div id="mathias"><a href="javascript:toggleLayer('BIO-mathias');" ><img class="bottom" src="images/boxes/mathias.png" /><img class="top" src="images/boxes-2/MATHIAS.png" /></a></div>
			<div id="solomun"><a href="javascript:toggleLayer('BIO-solomun');" ><img class="bottom" src="images/boxes/solomun.png" /><img class="top" src="images/boxes-2/SOLOMUN.png" /></a></div>
			<div id="art"><a href="javascript:toggleLayer('BIO-art');" ><img class="bottom" src="images/boxes/art.png" /><img class="top" src="images/boxes-2/ART.png" /></a></div>
			<div id="jaime"><a href="javascript:toggleLayer('BIO-jaime');" ><img class="bottom" src="images/boxes/jaime.png" /><img class="top" src="images/boxes-2/JAIME.png" /></a></div>
 		</div>

		<div id="alternative">
  			<div id="rodrigo"><a href="javascript:toggleLayer('BIO-rodrigo');" ><img class="bottom" src="images/boxes/rodrigo.png" /><img class="top" src="images/boxes-2/RODRIGO.png" /></a></div>
			<div id="marcos"><a href="javascript:toggleLayer('BIO-marcos');" ><img class="bottom" src="images/boxes/marcos.png" /><img class="top" src="images/boxes-2/MARCOS.png" /></a></div>
			<div id="michael"><a href="javascript:toggleLayer('BIO-michael');" ><img class="bottom" src="images/boxes/michael.png" /><img class="top" src="images/boxes-2/MICHAEL.png" /></a></div>
			<div id="nervo"><a href="javascript:toggleLayer('BIO-nervo');" ><img class="bottom" src="images/boxes/nervo.png" /><img class="top" src="images/boxes-2/NERVO.png" /></a></div>
			<div id="alesso"><a href="javascript:toggleLayer('BIO-alesso');" ><img class="bottom" src="images/boxes/alesso.png" /><img class="top" src="images/boxes-2/ALESSO.png" /></a></div>
			<div id="fedde"><a href="javascript:toggleLayer('BIO-fedde');" ><img class="bottom" src="images/boxes/fedde.png" /><img class="top" src="images/boxes-2/FEDDE.png" /></a></div>
 		</div>

		<div id="cream">
  			<div id="pia"><a href="javascript:toggleLayer('BIO-pia');" ><img class="bottom" src="images/boxes/pia.png" /><img class="top" src="images/boxes-2/PIA.png" /></a></div>
			<div id="tweeter"><a href="javascript:toggleLayer('BIO-tweeter');" ><img class="bottom" src="images/boxes/tweeter.png" /><img class="top" src="images/boxes-2/TWEETER.png" /></a></div>
			<div id="guti"><a href="javascript:toggleLayer('BIO-guti');" ><img class="bottom" src="images/boxes/guti.png" /><img class="top" src="images/boxes-2/GUTI.png" /></a></div>
			<div id="reboot"><a href="javascript:toggleLayer('BIO-reboot');" ><img class="bottom" src="images/boxes/reboot.png" /><img class="top" src="images/boxes-2/REBOOT.png" /></a></div>
			<div id="steve"><a href="javascript:toggleLayer('BIO-steve');" ><img class="bottom" src="images/boxes/steve.png" /><img class="top" src="images/boxes-2/STEVE.png" /></a></div>
			<div id="james"><a href="javascript:toggleLayer('BIO-james');" ><img class="bottom" src="images/boxes/james.png" /><img class="top" src="images/boxes-2/JAMES.png" /></a></div>
 		</div>
			
		<div id="zero">
  			<div id="javiersuka"><a href="javascript:toggleLayer('BIO-javiersuka');" ><img class="bottom" src="images/boxes/javiersuka.png" /><img class="top" src="images/boxes-2/JAVIERSUKA.png" /></a></div>
			<div id="nicocrespo"><a href="javascript:toggleLayer('BIO-nicocrespo');" ><img class="bottom" src="images/boxes/nicocrespo.png" /><img class="top" src="images/boxes-2/NICOCRESPO.png" /></a></div>
			<div id="fernandomujica"><a href="javascript:toggleLayer('BIO-fernandomujica');" ><img class="bottom" src="images/boxes/fernandomujica.png" /><img class="top" src="images/boxes-2/FERNANDOMUJICA.png" /></a></div>
			<div id="rodrigoguendelman"><a href="javascript:toggleLayer('BIO-rodrigoguendelman');" ><img class="bottom" src="images/boxes/rodrigoguendelman.png" /><img class="top" src="images/boxes-2/RODRIGOGUENDELMAN.png" /></a></div>
			<div id="fernandaarrau"><a href="javascript:toggleLayer('BIO-fernandaarrau');" ><img class="bottom" src="images/boxes/fernandaarrau.png" /><img class="top" src="images/boxes-2/FERNANDAARRAU.png" /></a></div>
			<div id="vives"><a href="javascript:toggleLayer('BIO-vives');" ><img class="bottom" src="images/boxes/vives.png" /><img class="top" src="images/boxes-2/VIVES.png" /></a></div>
			<div id="franciscoparra"><a href="javascript:toggleLayer('BIO-franciscoparra');" ><img class="bottom" src="images/boxes/franciscoparra.png" /><img class="top" src="images/boxes-2/FRANCISCOPARRA.png" /></a></div>
			<div id="gustavo"><a href="javascript:toggleLayer('BIO-gustavo');" ><img class="bottom" src="images/boxes/gustavoallendes.png" /><img class="top" src="images/boxes-2/GUSTAVO.png" /></a></div>
			<div id="ignacio"><a href="javascript:toggleLayer('BIO-ignacio');" ><img class="bottom" src="images/boxes/ignacioaguirre.png" /><img class="top" src="images/boxes-2/IGNACIO.png" /></a></div>
			<div id="phillipe"><a href="javascript:toggleLayer('BIO-phillipe');" ><img class="bottom" src="images/boxes/phillipetruan.png" /><img class="top" src="images/boxes-2/PHILLIPE.png" /></a></div>
 		</div>
			
			<div id="BIO-alex" class="bios">
				<div id="nombre-dj">Alex adwanter</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-alex"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-matanza" class="bios">
				<div id="nombre-dj">Matanza</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-matanza"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-marciano" class="bios">
				<div id="nombre-dj">Marciano</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-marciano"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-felipe" class="bios">
				<div id="nombre-dj">Felipe Venegas</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-felipe"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-butano" class="bios">
				<div id="nombre-dj">Butano</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-butano"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-rodrigo" class="bios">
				<div id="nombre-dj">Rodrigo Valdes</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-rodrigo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
			
			<div id="BIO-marcos" class="bios">
				<div id="nombre-dj">Marcos Latrach</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-marcos"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-michael" class="bios">
				<div id="nombre-dj">Michael Woods</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-michael"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-pia" class="bios">
				<div id="nombre-dj">Pia Sotomayor</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-pia"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-tweeter" class="bios">
				<div id="nombre-dj">Tweeter</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-tweeter"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-javiersuka" class="bios">
				<div id="nombre-dj">Javier Suka</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-javiersuka"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-nicocrespo" class="bios">
				<div id="nombre-dj">Nico Crespo</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-nicocrespo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-fernandomujica" class="bios">
				<div id="nombre-dj">Fernando Mujica</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-fernandomujica"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-rodrigoguendelman" class="bios">
				<div id="nombre-dj">Rodrigo Guendelman</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-rodrigoguendelman"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-fernandaarrau" class="bios">
				<div id="nombre-dj">Fernanda Arrau</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-fernandaarrau"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-vives" class="bios">
				<div id="nombre-dj">Vives & forero </div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-vives"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-franciscoparra" class="bios">
				<div id="nombre-dj">Francisco Parra</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-franciscoparra"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-gustavo" class="bios">
				<div id="nombre-dj">Gustavo Allendes</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-gustavo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-ignacio" class="bios">
				<div id="nombre-dj">Ignacio Aguirre</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-ignacio"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-phillipe" class="bios">
				<div id="nombre-dj">Phillipe Truan</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj"></div>
  				<div id="boton-phillipe"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>


			
			
			<div id="BIO-alesso" class="bios">
				<div id="nombre-dj">Alesso</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/alesso.png" /></div>
  				<div id="descripcion-dj">DJ y productor nacido en Estocolmo, Suecia, de origen italiano. 
				Con sólo 21 años de edad, ya es considerado una de las grandes revelaciones de la música House en Suecia. 
				Fue descubierto en su ciudad natal por Sebastian Ingrosso, miembro de Swedish House Mafia. 
				En Marzo de este año tuvo el privilegio de ser invitado por la BBC Radio 1, para mezclar en el prestigioso espacio radial denominado Essential 					Mix
			</div>
  				<div id="boton-alesso"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F56979084&show_artwork=true"></iframe>
			</div>
			
			<div id="BIO-art" class="bios">
				<div id="nombre-dj">Art Department</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/art-departament.png" /></div>
  				<div id="descripcion-dj">Este proyecto musical nace del encuentro de Kenny Glasgow veterano de la escena electrónica mundial y el joven Jonny 					White. Uno desde la vereda de la experiencia y el otro desde la esquina de la frescura y la juventud, se juntan para plantear música dentro de la 				escena del House desde un punto de vista menos comercial.</div>
  			<div id="boton-art"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F26128152&show_artwork=true"></iframe>
			</div>
			
			<div id="BIO-calvin" class="bios">
				<div id="nombre-dj">Calvin Harris</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/calvin-harris.png" /></div>
  				<div id="descripcion-dj">Este músico, productor  cantante y  letrista escocés lleva más de 12 años haciendo música, pero ha sido durante este 					último tiempo que se ha transformado  en una figura imperdible de cualquier show en el que se presente alrededor del mundo. 
				Su álbum debut  “I Created Disco” fue lanzado en 2007  y dos de los singles que incluía “Acceptable in the 80's” y “The Girls”  ingresaron al Top 1				0 del Reino Unido.
				</div>
  				<div id="boton-calvin"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
  				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F1072339&show_artwork=true"></iframe>
			</div>
			
			<div id="BIO-david" class="bios">
				<div id="nombre-dj">David Guetta</div>
				<div id="foto-dj"><img id="foto-david" src="images/fotosdjs-bio/david-guetta.png" /></div>
  				<div id="descripcion-dj">Con más de 10 años de carrera, Guetta siempre ha sido un pionero. Se ha mantenido al frente del desarrollo de la música 				electrónica en todo momento, manteniendo una colaboración constante con artistas de la envergadura de Michael Jackson, Fergie, Rihanna, 50 Cent, 				Kylie Minogue, Madonna, Nervo, Usher, además de bandas como The Black Eyed Peas y LMFAO.</div>
  				<div id="boton-david"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F								%2Fapi.soundcloud.com%2Ftracks%2F7816989&show_artwork=true"></iframe>
			</div>
			
			<div id="BIO-fedde" class="bios">
				<div id="nombre-dj">Fedde le Grand</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/fedde-le-grand.png" /></div>
  				<div id="descripcion-dj">Es fundador del sello Flamingo Recordings, uno de los más importantes del Dance mundial, especialmente en música para Big 				Room. Big Room es la música que esta pensada especialmente para festivales masivos. Un sonido explosivo que levanta masas y genera euforia en las 				pistas de baile. 

				El 2011 otro hit de Fedde dio la vuelta al mundo al realizar el remix de la canción Paradise de Coldplay con la cual ya ha ganado varios 						reconocimientos.
				</div>
  				<div id="boton-fedde"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F62913354&show_artwork=true"></iframe>
			</div>
			
			<div id="BIO-guti" class="bios">
				<div id="nombre-dj">Guti</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/guti.png" /></div>
  				<div id="descripcion-dj">El argentino Guti destaca  sin duda por la diversidad y ritmos de sus set, la crítica lo cataloga como talentoso y fuera 				de lo común, y esto viene por la  facilidad que tiene para tocar el piano o las percusiones sincronizándose con sus mezclas de jazz-house, sin 					importarle introducir ritmos como el merengue y la salsa.</div>
  				<div id="boton-guti"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-infected" class="bios">
				<div id="nombre-dj">Infected Mushroom</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/infect-mushroom.png" /></div>
  				<div id="descripcion-dj">De origen israelí, este dúo integrado por Erez Aizen y Amit Duvdevani, es conocido alrededor del mundo por su música 					psytrance y electrónica-experimental. Con 13 años en la escena electrónica mundial, no paran de ganar popularidad en el mundo entero.
 				Su primer disco The Gathering  fue lanzado en 1999, pero fue tanta la energía de este dúo que prácticamente editaron un álbum por año. Fue así como 				llegaron Classical Mushroom  el 2000 y  BP Empire el 2001. 
				</div>
  				<div id="boton-infected"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F45979565&show_artwork=true"></iframe>
			</div>
			
			<div id="BIO-james" class="bios">
				<div id="nombre-dj">James Zabiella</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/jamie-zabiela.png" /></div>
  				<div id="descripcion-dj">DJ y productor musical británico de Acid House.
				James fue presentado a varios promotores mientras tocaba en clubes locales incluido Menage a Trois y fue llevado por Paul Oakenfold en tres 					ocasiones al cavernoso Club Ikon en Southampton. 

				El gran salto lo consiguió cuando participó de la prestigiosa competición Bedroom Bedlam de Muzik Magazines en 2001 y ganó.
				</div>
  				<div id="boton-james"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-jaime" class="bios">
				<div id="nombre-dj">Jamie jones</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/jamie-jones.png" /></div>
  				<div id="descripcion-dj">Conocido como “Golden Boy”,  Jamie Jones no deja nunca de sorprender y estar a la vanguardia a nivel musical y 						promocional, siendo uno de los artistas del último tiempo más  reconocido a nivel mundial por su  estilo y sonido únicos, tanto a la hora de 					remezclar, como al producir sus temas, combinando  el mejor Thech, con funk, disco y voces sacadas del house, logrando una música con mucho Groove 				que invita a moverse y bailar. </div>
  				<div id="boton-jaime"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F43482613&show_artwork=true"></iframe>
			</div>
			
			<div id="BIO-mathias" class="bios">
				<div id="nombre-dj">Mathias Kaden</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/mathias-kaden.png" /></div>
  				<div id="descripcion-dj">Este  Dj se caracteriza por lo diferente de su música,  enfocado al House, después de los 90’ se dedicó a crear nuevas 				estructuras de sonido. 
				En sus estilos incluye ritmos como el Funky, Freaky, Dashing, Dub, Slamming, que son enriquecidos por percusiones africanas y sudamericanas.
				</div>
  				<div id="boton-mathias"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
  				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F62460349&show_artwork=true"></iframe>
			</div>
			</div>
			
			<div id="BIO-nervo" class="bios">
				<div id="nombre-dj">Nervo</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/nervo.png" /></div>
  				<div id="descripcion-dj">Estas gemelas  australianas han sido la gran revelación de este 2012. Tras exitosas presentaciones en festivales de la 				envergadura de Tomorrowland y  Creamfields Brasil, donde tocaron junto a Fat Boy Slim se han consolidado en la escena Dance y ante figuras como 				Kylie Minogue , Ke$ha  con quienes ha hecho remixes y David Guetta.
				Con este último las hermanas Mim y Liv Nervo escribieron la canción ganadora de un Grammy “When Love Takes Over” .
				</div>
  				<div id="boton-nervo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F19480670&show_artwork=true"></iframe>
			</div>
			
			<div id="BIO-reboot" class="bios">
				<div id="nombre-dj">Reboot</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/rebbot.png" /></div>
  				<div id="descripcion-dj">El Alemán Frank Heinrich A.K.A REBOOT pertenece al sello Cadenza de Luciano. Su faceta de re mezclador explotó tras las 				publicando de revisiones suyas en sellos como Get Physical, Connaisseur, Klang o Moon Harbour.
				El alemán es es co-responsable del mix Disco Invaders: Cocoon Ibiza Summer Mix junto a Chris Tietjen y Johnny D.
				</div>
  				<div id="boton-reboot"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-solomun" class="bios">
				<div id="nombre-dj">Solomun</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/solomun.png" /></div>
  				<div id="descripcion-dj">Nacido en Bosnia. 
				El croata con sede en Hamburgo  ha jugado un papel importante en la redefinición de la música House europea en los últimos años a través de 					producciones, remixes y DJ’s de su sello Diynamyc.
				</div>
  				<div id="boton-solomun"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
  			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F61967038&show_artwork=true"></iframe>
	
  			</div>
			
			<div id="BIO-steve" class="bios">
				<div id="nombre-dj">Steve Lawler</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/steve-lawler.png" /></div>
  				<div id="descripcion-dj">DJ y Productor Británico de Música House.  Se ha desempeñado en   discotecas y locales de baile populares como Space , The 				End y Twilo . 
				Debido a sus exitosas presentaciones en Space en Ibiza ha recibido el apodo de "Rey del Espacio". 
				Lawler ha lanzado varios álbumes y es especialmente conocido por sus Lights Out .
				Actualmente dirige el sello discográfico Música Viva.  
				</div>
  				<div id="boton-steve"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
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