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

  session_start();
  $now = getdate();
  $_SESSION['reload'] = 1;

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
        <script type="text/javascript" src="js/jquery.queryloader2.js"></script>
        <script type="text/javascript" src="js/jquery.blockUI.js" ></script>
        <script src="js/jquery.bpopup-0.7.0.min.js"></script>

        <script type="text/javascript">
        // Definición array de artistas para match
        var artistas = new Array();
        // Main
        artistas['alex'] = new Array();
        artistas['alex']['match'] = new Array('pia', 'rodrigo', 'felipe', 'javiersuka');
        artistas['alex']['img'] = 'images/match/otros.png';
        artistas['alex']['nombre'] = 'Alex Adwanter';
        artistas['alex']['width'] = 82;
        artistas['matanza'] = new Array();
        artistas['matanza']['match'] = new Array('butano', 'marcos', 'tweeter', 'nicocrespo', 'mathias', 'michael', 'guti', 'fernandomujica');
        artistas['matanza']['img'] = 'images/match/otros.png';
        artistas['matanza']['nombre'] = 'Matanza';
        artistas['matanza']['width'] = 49;
        artistas['marciano'] = new Array();
        artistas['marciano']['match'] = new Array('mathias', 'michael', 'guti', 'fernandomujica', 'rodrigoguendelman');
        artistas['marciano']['img'] = 'images/match/otros.png';
        artistas['marciano']['nombre'] = 'Marciano';
        artistas['marciano']['width'] = 55;
        artistas['calvin'] = new Array();
        artistas['calvin']['match'] = new Array('solomun', 'nervo', 'reboot', 'fernandaarrau', 'vives');
        artistas['calvin']['img'] = 'images/match/calvin.png';
        artistas['calvin']['nombre'] = 'Calvin Harris';
        artistas['calvin']['width'] = 76;
        artistas['david'] = new Array();
        artistas['david']['match'] = new Array('art', 'alesso', 'james', 'franciscoparra', 'gustavo');
        artistas['david']['img'] = 'images/match/david.png';
        artistas['david']['nombre'] = 'David Guetta';
        artistas['david']['width'] = 72;
        artistas['infected'] = new Array();
        artistas['infected']['match'] = new Array('jaime', 'fedde', 'steve', 'ignacio', 'phillipe');
        artistas['infected']['img'] = 'images/match/infected.png';
        artistas['infected']['nombre'] = 'Infected Mushroom';
        artistas['infected']['width'] = 108;
        // Club Room
        artistas['pia'] = new Array();
        artistas['pia']['match'] = new Array('alex', 'rodrigo', 'felipe', 'javiersuka');
        artistas['pia']['img'] = 'images/match/otros.png';
        artistas['pia']['nombre'] = 'Pia Sotomayor';
        artistas['pia']['width'] = 82;
        artistas['butano'] = new Array();
        artistas['butano']['match'] = new Array('alex', 'matanza', 'marcos', 'tweeter', 'nicocrespo');
        artistas['butano']['img'] = 'images/match/otros.png';
        artistas['butano']['nombre'] = 'Butano';
        artistas['butano']['width'] = 44;
        artistas['mathias'] = new Array();
        artistas['mathias']['match'] = new Array('matanza', 'marciano', 'michael', 'guti', 'fernandomujica', 'rodrigoguendelman');
        artistas['mathias']['img'] = 'images/match/mathias.png';
        artistas['mathias']['nombre'] = 'Mathias Kaden';
        artistas['mathias']['width'] = 81;
        artistas['solomun'] = new Array();
        artistas['solomun']['match'] = new Array('calvin', 'nervo', 'reboot', 'fernandaarrau', 'vives');
        artistas['solomun']['img'] = 'images/match/solomun.png';
        artistas['solomun']['nombre'] = 'Solomun';
        artistas['solomun']['width'] = 53;
        artistas['art'] = new Array();
        artistas['art']['match'] = new Array('david', 'alesso', 'james', 'franciscoparra', 'gustavo');
        artistas['art']['img'] = 'images/match/art.png';
        artistas['art']['nombre'] = 'Art Department';
        artistas['art']['width'] = 86;
        artistas['jaime'] = new Array();
        artistas['jaime']['match'] = new Array('infected', 'fedde', 'steve', 'ignacio', 'phillipe');
        artistas['jaime']['img'] = 'images/match/jamie.png';
        artistas['jaime']['nombre'] = 'Jamie Jones';
        artistas['jaime']['width'] = 64;
        // Alternative
        artistas['rodrigo'] = new Array();
        artistas['rodrigo']['match'] = new Array('alex', 'pia', 'felipe', 'javiersuka');
        artistas['rodrigo']['img'] = 'images/match/otros.png';
        artistas['rodrigo']['nombre'] = 'Rodrigo Valdes';
        artistas['rodrigo']['width'] = 86;
        artistas['marcos'] = new Array();
        artistas['marcos']['match'] = new Array('alex', 'matanza', 'butano', 'tweeter', 'nicocrespo');
        artistas['marcos']['img'] = 'images/match/otros.png';
        artistas['marcos']['nombre'] = 'Marcos Latrach';
        artistas['marcos']['width'] = 89;
        artistas['michael'] = new Array();
        artistas['michael']['match'] = new Array('matanza', 'marciano', 'mathias', 'guti', 'fernandomujica', 'rodrigoguendelman');
        artistas['michael']['img'] = 'images/match/michael.png';
        artistas['michael']['nombre'] = 'Michael Woods';
        artistas['michael']['width'] = 85;
        artistas['nervo'] = new Array();
        artistas['nervo']['match'] = new Array('calvin', 'solomun', 'reboot', 'fernandaarrau', 'vives');
        artistas['nervo']['img'] = 'images/match/nervo.png';
        artistas['nervo']['nombre'] = 'Nervo';
        artistas['nervo']['width'] = 37;
        artistas['alesso'] = new Array();
        artistas['alesso']['match'] = new Array('david', 'art', 'james', 'frenciscoparra', 'gustavo');
        artistas['alesso']['img'] = 'images/match/alesso.png';
        artistas['alesso']['nombre'] = 'Alesso';
        artistas['alesso']['width'] = 41;
        artistas['fedde'] = new Array();
        artistas['fedde']['match'] = new Array('infected', 'jamie', 'steve', 'ignacio', 'phillipe');
        artistas['fedde']['img'] = 'images/match/fedde.png';
        artistas['fedde']['nombre'] = 'Fedde Le Grand';
        artistas['fedde']['width'] = 83;
        // Cream
        artistas['felipe'] = new Array();
        artistas['felipe']['match'] = new Array('alex', 'pia', 'rodrigo', 'javiersuka');
        artistas['felipe']['img'] = 'images/match/otros.png';
        artistas['felipe']['nombre'] = 'Felipe Venegas';
        artistas['felipe']['width'] = 79;
        artistas['tweeter'] = new Array();
        artistas['tweeter']['match'] = new Array('alex', 'matanza', 'butano', 'marcos', 'nicocrespo');
        artistas['tweeter']['img'] = 'images/match/otros.png';
        artistas['tweeter']['nombre'] = 'Tweeter';
        artistas['tweeter']['width'] = 46;
        artistas['guti'] = new Array();
        artistas['guti']['match'] = new Array('matanza', 'marciano', 'mathias', 'michael', 'fernandomujica', 'rodrigoguendelman');
        artistas['guti']['img'] = 'images/match/guti.png';
        artistas['guti']['nombre'] = 'Guti';
        artistas['guti']['width'] = 27;
        artistas['reboot'] = new Array();
        artistas['reboot']['match'] = new Array('calvin', 'solomun', 'nervo', 'fernandaarrau', 'vives');
        artistas['reboot']['img'] = 'images/match/reboot.png';
        artistas['reboot']['nombre'] = 'Reboot';
        artistas['reboot']['width'] = 42;
        artistas['james'] = new Array();
        artistas['james']['match'] = new Array('david', 'art', 'alesso', 'frenciscoparra', 'gustavo');
        artistas['james']['img'] = 'images/match/james.png';
        artistas['james']['nombre'] = 'James Zabiella';
        artistas['james']['width'] = 79;
        artistas['steve'] = new Array();
        artistas['steve']['match'] = new Array('infected', 'jamie', 'fedde', 'ignacio', 'phillipe');
        artistas['steve']['img'] = 'images/match/steve.png';
        artistas['steve']['nombre'] = 'Steve Lawler';
        artistas['steve']['width'] = 72;
        // Radio Zero
        artistas['javiersuka'] = new Array();
        artistas['javiersuka']['match'] = new Array('alex', 'pia', 'rodrigo', 'felipe');
        artistas['javiersuka']['img'] = 'images/match/otros.png';
        artistas['javiersuka']['nombre'] = 'Javier Ramos';
        artistas['javiersuka']['width'] = 72;
        artistas['nicocrespo'] = new Array();
        artistas['nicocrespo']['match'] = new Array('alex', 'matanza', 'butano', 'marcos', 'tweeter');
        artistas['nicocrespo']['img'] = 'images/match/otros.png';
        artistas['nicocrespo']['nombre'] = 'Nico Crespo';
        artistas['nicocrespo']['width'] = 68;
        artistas['fernandomujica'] = new Array();
        artistas['fernandomujica']['match'] = new Array('matanza', 'marciano', 'mathias', 'michael', 'guti');
        artistas['fernandomujica']['img'] = 'images/match/otros.png';
        artistas['fernandomujica']['nombre'] = 'Fernando Mujica';
        artistas['fernandomujica']['width'] = 93;
        artistas['rodrigoguendelman'] = new Array();
        artistas['rodrigoguendelman']['match'] = new Array('marciano', 'mathias', 'michael', 'guti');
        artistas['rodrigoguendelman']['img'] = 'images/match/otros.png';
        artistas['rodrigoguendelman']['nombre'] = 'Rodrigo Guendelman';
        artistas['rodrigoguendelman']['width'] = 114;
        artistas['fernandaarrau'] = new Array();
        artistas['fernandaarrau']['match'] = new Array('calvin', 'solomun', 'nervo', 'reboot');
        artistas['fernandaarrau']['img'] = 'images/match/otros.png';
        artistas['fernandaarrau']['nombre'] = 'Fernanda Arrau';
        artistas['fernandaarrau']['width'] = 89;
        artistas['vives'] = new Array();
        artistas['vives']['match'] = new Array('calvin', 'solomun', 'nervo', 'reboot');
        artistas['vives']['img'] = 'images/match/otros.png';
        artistas['vives']['nombre'] = 'Vives G Forero';
        artistas['vives']['width'] = 80;
        artistas['franciscoparra'] = new Array();
        artistas['franciscoparra']['match'] = new Array('david', 'art', 'alesso', 'james');
        artistas['franciscoparra']['img'] = 'images/match/otros.png';
        artistas['franciscoparra']['nombre'] = 'Francisco Parra';
        artistas['franciscoparra']['width'] = 80;
        artistas['gustavo'] = new Array();
        artistas['gustavo']['match'] = new Array('david', 'art', 'alesso', 'james');
        artistas['gustavo']['img'] = 'images/match/otros.png';
        artistas['gustavo']['nombre'] = 'Gustavo Allendes';
        artistas['gustavo']['width'] = 98;
        artistas['ignacio'] = new Array();
        artistas['ignacio']['match'] = new Array('infected', 'jamie', 'fedde', 'steve');
        artistas['ignacio']['img'] = 'images/match/otros.png';
        artistas['ignacio']['nombre'] = 'Ignacio Aguirre';
        artistas['ignacio']['width'] = 86;
        artistas['phillipe'] = new Array();
        artistas['phillipe']['match'] = new Array('infected', 'jamie', 'fedde', 'steve');
        artistas['phillipe']['img'] = 'images/match/otros.png';
        artistas['phillipe']['nombre'] = 'Phillipe Truan';
        artistas['phillipe']['width'] = 80;

        // Función descrubre match
        function revisar_match(buscar) {
          var retorno = null;
          for (i in seleccionados) {
            for (j in artistas[seleccionados[i]]) {
              for (x in artistas[seleccionados[i]][j]) {
                if (artistas[seleccionados[i]][j][x] == buscar) {
                  retorno = seleccionados[i];
                }
              }
            }
          }
          return retorno;
        }

        </script>

        <script>
          function toggleLayer( whichLayer )
      		{
      		  $('.bios').hide();
      		  $('#'+whichLayer).show();
      		  		  
      		}

          // ajusta texto
          function ajusta_texto(div, artista, ancho, lado) {
            ancho_texto = artistas[artista]['width'];
            nuevo_ancho = ancho - (ancho_texto/2);
            $(div).attr('style', 'margin-'+lado+': '+nuevo_ancho+'px;');
          }

        </script>
      
      <script>
      var seleccionados = new Array();
      var cambiar;
        $(document).on('ready', function() {

          $("body").queryLoader2({ 
                    backgroundColor: '#FFF', 
                    barColor: '#000',
                    percentage: true
                });

          <?php if (isset($_SESSION['seleccion'])) {
              foreach ($_SESSION['seleccion'] as $key => $value) {
                  echo "$('#".$value['artista']." img.bottom').toggleClass('transparent');\n";
                  echo "seleccionados.push('".$value['artista']."');\n";
              }
          } ?>

         $("div[id*='boton-']").on('click', function() {
                  var artista = $(this).attr('id');
                  artista = artista.substring(6);
                  var noexiste = true;
                    for (i=0; i<seleccionados.length; i++) {
                      if (seleccionados[i] == artista) {
                        noexiste = false;
                        seleccionados.splice(i, 1);
                        $("#"+artista+" img.bottom").toggleClass("transparent");
                      }
                    }
                    if (noexiste) {
                      var match = revisar_match(artista);
                      if (match == null) {
                        $("#"+artista+" img.bottom").toggleClass("transparent");
                        seleccionados.push(artista);
                      } else {
                        $('.individuales_img #art1').attr('src', artistas[match]['img']);
                        $('.individuales_img #art1').attr('alt', match);
                        $('.individuales_text #art1').html(artistas[match]['nombre'].toUpperCase());
                        ajusta_texto('.individuales_text #art1', match, 70, 'left');
                        $('.individuales_img #art2').attr('src', artistas[artista]['img']);
                        $('.individuales_img #art2').attr('alt', artista);
                        $('.individuales_text #art2').html(artistas[artista]['nombre'].toUpperCase());
                        ajusta_texto('.individuales_text #art2', artista, 65, 'right');
                        $('.juntos #art1').attr('src', artistas[match]['img']);
                        $('.juntos #art2').attr('src', artistas[artista]['img']);
                        $('.juntos').attr('title', artista);
                        cambiar=match;
                        $('#match').bPopup({
                            closeClass: 'cerrar'
                          });
                      }
                    } 
                });

          $('.individuales_img #art2').click(function() {
            var artista = $(this).attr('alt');
            $("#"+artista+" img.bottom").toggleClass("transparent");
            seleccionados.push(artista);
            seleccionados.splice(seleccionados.indexOf(cambiar), 1);
            $("#"+cambiar+" img.bottom").toggleClass("transparent");
          });

          $('.juntos').click(function() {
            var artista = $(this).attr('title');
            $("#"+artista+" img.bottom").toggleClass("transparent");
            seleccionados.push(artista);
          });

          $('#continuar').click(function() {
            $.blockUI({
              message: 'Espera mientras se genera tu creamfields...', 
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
            var jObject={};
              for(i in seleccionados)
              {
                jObject[i] = seleccionados[i];
              }

              jObject= JSON.stringify(jObject);
              $.ajax({
                type:'post',
                cache:false,
                url:"guardar_datos.php",
                data:{jObject:  jObject},
                success: function(data) {
                  if (data == "OK") {
                    setTimeout ('window.location = "paso_2_Creamfields.php";', 3000); 
                  }
                }
              });
          });
        });
      </script> 
       
		
    </head>
    <body>
      <div id="match">
        <div class="individuales_img">
          <img id="art1" class="cerrar" src="images/match/otros.png" />
          <img id="art2" class="cerrar" src="images/match/otros.png" />
        </div>
        <div class="individuales_text">
          <div id="art1">Artista 1</div>
          <div id="art2">Artista 2</div>
        </div>
        <div class="juntos cerrar">
          <img id="art1" src="images/match/otros.png" />
          <img id="art2" src="images/match/otros.png" />
        </div>
      </div>
		<div id="main">
  			<div id="alex" ><a href="javascript:toggleLayer('BIO-alex');" ><img class="bottom" src="images/boxes/alex.png" /><img class="top" src="images/boxes-2/alex.png" /></a></div>
			<div id="matanza"><a href="javascript:toggleLayer('BIO-matanza');" ><img class="bottom" src="images/boxes/matanza.png" /><img class="top" src="images/boxes-2/matanza.png" /></a></div>
			<div id="marciano"><a href="javascript:toggleLayer('BIO-marciano');" ><img class="bottom" src="images/boxes/marciano.png" /><img class="top" src="images/boxes-2/marciano.png" /></a></div>
			<div id="calvin"><a href="javascript:toggleLayer('BIO-calvin');" ><img class="bottom" src="images/boxes/calvin.png" /><img class="top" src="images/boxes-2/calvin.png" /></a></div>
			<div id="david"><a href="javascript:toggleLayer('BIO-david');" ><img class="bottom" src="images/boxes/david.png" /><img class="top" src="images/boxes-2/david.png" /></a></div>
			<div id="infected"><a href="javascript:toggleLayer('BIO-infected');" ><img class="bottom" src="images/boxes/infected.png" /><img class="top" src="images/boxes-2/infected.png" /></a></div>
 		</div>

		<div id="clubroom">
  		<div id="pia"><a href="javascript:toggleLayer('BIO-pia');" ><img class="bottom" src="images/boxes/pia.png" /><img class="top" src="images/boxes-2/pia.png" /></a></div>
			<div id="butano"><a href="javascript:toggleLayer('BIO-butano');"> <img class="bottom" src="images/boxes/butano.png" /><img class="top" src="images/boxes-2/butano.png" /></a></div>
			<div id="mathias"><a href="javascript:toggleLayer('BIO-mathias');" ><img class="bottom" src="images/boxes/mathias.png" /><img class="top" src="images/boxes-2/mathias.png" /></a></div>
			<div id="solomun"><a href="javascript:toggleLayer('BIO-solomun');" ><img class="bottom" src="images/boxes/solomun.png" /><img class="top" src="images/boxes-2/solomun.png" /></a></div>
			<div id="art"><a href="javascript:toggleLayer('BIO-art');" ><img class="bottom" src="images/boxes/art.png" /><img class="top" src="images/boxes-2/art.png" /></a></div>
			<div id="jaime"><a href="javascript:toggleLayer('BIO-jaime');" ><img class="bottom" src="images/boxes/jaime.png" /><img class="top" src="images/boxes-2/jaime.png" /></a></div>
 		</div>

		<div id="alternative">
  			<div id="rodrigo"><a href="javascript:toggleLayer('BIO-rodrigo');" ><img class="bottom" src="images/boxes/rodrigo.png" /><img class="top" src="images/boxes-2/rodrigo.png" /></a></div>
			<div id="marcos"><a href="javascript:toggleLayer('BIO-marcos');" ><img class="bottom" src="images/boxes/marcos.png" /><img class="top" src="images/boxes-2/marcos.png" /></a></div>
			<div id="michael"><a href="javascript:toggleLayer('BIO-michael');" ><img class="bottom" src="images/boxes/michael.png" /><img class="top" src="images/boxes-2/michael.png" /></a></div>
			<div id="nervo"><a href="javascript:toggleLayer('BIO-nervo');" ><img class="bottom" src="images/boxes/nervo.png" /><img class="top" src="images/boxes-2/nervo.png" /></a></div>
			<div id="alesso"><a href="javascript:toggleLayer('BIO-alesso');" ><img class="bottom" src="images/boxes/alesso.png" /><img class="top" src="images/boxes-2/alesso.png" /></a></div>
			<div id="fedde"><a href="javascript:toggleLayer('BIO-fedde');" ><img class="bottom" src="images/boxes/fedde.png" /><img class="top" src="images/boxes-2/fedde.png" /></a></div>
 		</div>

		<div id="cream">
      <div id="felipe"><a href="javascript:toggleLayer('BIO-felipe');" ><img class="bottom" src="images/boxes/felipevenegas.png" /><img class="top" src="images/boxes-2/felipe.png" /></a></div>
			<div id="tweeter"><a href="javascript:toggleLayer('BIO-tweeter');" ><img class="bottom" src="images/boxes/tweeter.png" /><img class="top" src="images/boxes-2/tweeter.png" /></a></div>
			<div id="guti"><a href="javascript:toggleLayer('BIO-guti');" ><img class="bottom" src="images/boxes/guti.png" /><img class="top" src="images/boxes-2/guti.png" /></a></div>
			<div id="reboot"><a href="javascript:toggleLayer('BIO-reboot');" ><img class="bottom" src="images/boxes/reboot.png" /><img class="top" src="images/boxes-2/reboot.png" /></a></div>
			<div id="james"><a href="javascript:toggleLayer('BIO-james');" ><img class="bottom" src="images/boxes/james.png" /><img class="top" src="images/boxes-2/james.png" /></a></div>
      <div id="steve"><a href="javascript:toggleLayer('BIO-steve');" ><img class="bottom" src="images/boxes/steve.png" /><img class="top" src="images/boxes-2/steve.png" /></a></div>
 		</div>
			
		<div id="zero">
  			<div id="javiersuka"><a href="javascript:toggleLayer('BIO-javiersuka');" ><img class="bottom" src="images/boxes/javierramos.png" /><img class="top" src="images/boxes-2/javiersuka.png" /></a></div>
			<div id="nicocrespo"><a href="javascript:toggleLayer('BIO-nicocrespo');" ><img class="bottom" src="images/boxes/nicocrespo.png" /><img class="top" src="images/boxes-2/nicocrespo.png" /></a></div>
			<div id="fernandomujica"><a href="javascript:toggleLayer('BIO-fernandomujica');" ><img class="bottom" src="images/boxes/fernandomujica.png" /><img class="top" src="images/boxes-2/fernandomujica.png" /></a></div>
			<div id="rodrigoguendelman"><a href="javascript:toggleLayer('BIO-rodrigoguendelman');" ><img class="bottom" src="images/boxes/rodrigoguendelman.png" /><img class="top" src="images/boxes-2/rodrigoguendelman.png" /></a></div>
			<div id="fernandaarrau"><a href="javascript:toggleLayer('BIO-fernandaarrau');" ><img class="bottom" src="images/boxes/fernandaarrau.png" /><img class="top" src="images/boxes-2/fernandaarrau.png" /></a></div>
			<div id="vives"><a href="javascript:toggleLayer('BIO-vives');" ><img class="bottom" src="images/boxes/vives.png" /><img class="top" src="images/boxes-2/vives.png" /></a></div>
			<div id="franciscoparra"><a href="javascript:toggleLayer('BIO-franciscoparra');" ><img class="bottom" src="images/boxes/franciscoparra.png" /><img class="top" src="images/boxes-2/franciscoparra.png" /></a></div>
			<div id="gustavo"><a href="javascript:toggleLayer('BIO-gustavo');" ><img class="bottom" src="images/boxes/gustavoallendes.png" /><img class="top" src="images/boxes-2/gustavo.png" /></a></div>
			<div id="ignacio"><a href="javascript:toggleLayer('BIO-ignacio');" ><img class="bottom" src="images/boxes/ignacioaguirre.png" /><img class="top" src="images/boxes-2/ignacio.png" /></a></div>
			<div id="phillipe"><a href="javascript:toggleLayer('BIO-phillipe');" ><img class="bottom" src="images/boxes/phillipetruan.png" /><img class="top" src="images/boxes-2/phillipe.png" /></a></div>
 		</div>
			
			<div id="BIO-alex" class="bios">
				<div id="nombre-dj">Alex adwanter</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-alex"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-matanza" class="bios">
				<div id="nombre-dj">Matanza</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-matanza"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-marciano" class="bios">
				<div id="nombre-dj">Marciano</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-marciano"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-felipe" class="bios">
				<div id="nombre-dj">Felipe Venegas</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-felipe"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-butano" class="bios">
				<div id="nombre-dj">Butano</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-butano"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-rodrigo" class="bios">
				<div id="nombre-dj">Rodrigo Valdes</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-rodrigo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
			
			<div id="BIO-marcos" class="bios">
				<div id="nombre-dj">Marcos Latrach</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-marcos"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-michael" class="bios">
				<div id="nombre-dj">Michael Woods</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-michael"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-pia" class="bios">
				<div id="nombre-dj">Pia Sotomayor</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-pia"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-tweeter" class="bios">
				<div id="nombre-dj">Tweeter</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-tweeter"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-javiersuka" class="bios">
				<div id="nombre-dj">Javier Ramos</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-javiersuka"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-nicocrespo" class="bios">
				<div id="nombre-dj">Nico Crespo</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-nicocrespo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-fernandomujica" class="bios">
				<div id="nombre-dj">Fernando Mujica</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-fernandomujica"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-rodrigoguendelman" class="bios">
				<div id="nombre-dj">Rodrigo Guendelman</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-rodrigoguendelman"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-fernandaarrau" class="bios">
				<div id="nombre-dj">Fernanda Arrau</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-fernandaarrau"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-vives" class="bios">
				<div id="nombre-dj">Vives & forero </div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-vives"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-franciscoparra" class="bios">
				<div id="nombre-dj">Francisco Parra</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-franciscoparra"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-gustavo" class="bios">
				<div id="nombre-dj">Gustavo Allendes</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-gustavo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-ignacio" class="bios">
				<div id="nombre-dj">Ignacio Aguirre</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-ignacio"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-phillipe" class="bios">
				<div id="nombre-dj">Phillipe Truan</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/logo-1.png" /></div>
  				<div id="descripcion-dj" class="scroll"></div>
  				<div id="boton-phillipe"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>


			
			
			<div id="BIO-alesso" class="bios">
				<div id="nombre-dj">Alesso</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/alesso.png" /></div>
  				<div id="descripcion-dj" class="scroll">DJ y productor nacido en Estocolmo, Suecia, de origen italiano. 
				Con sólo 21 años de edad, ya es considerado una de las grandes revelaciones de la música House en Suecia. 
				Fue descubierto en su ciudad natal por Sebastian Ingrosso, miembro de Swedish House Mafia. 
				En Marzo de este año tuvo el privilegio de ser invitado por la BBC Radio 1, para mezclar en el prestigioso espacio radial denominado Essential 					Mix
			</div>
  				<div id="boton-alesso"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-art" class="bios">
				<div id="nombre-dj">Art Department</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/art-departament.png" /></div>
  				<div id="descripcion-dj" class="scroll">Este proyecto musical nace del encuentro de Kenny Glasgow veterano de la escena electrónica mundial y el joven Jonny 					White. Uno desde la vereda de la experiencia y el otro desde la esquina de la frescura y la juventud, se juntan para plantear música dentro de la 				escena del House desde un punto de vista menos comercial.</div>
  			<div id="boton-art"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-calvin" class="bios">
				<div id="nombre-dj">Calvin Harris</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/calvin-harris.png" /></div>
  				<div id="descripcion-dj" class="scroll">Este músico, productor  cantante y  letrista escocés lleva más de 12 años haciendo música, pero ha sido durante este 					último tiempo que se ha transformado  en una figura imperdible de cualquier show en el que se presente alrededor del mundo. 
				Su álbum debut  “I Created Disco” fue lanzado en 2007  y dos de los singles que incluía “Acceptable in the 80's” y “The Girls”  ingresaron al Top 1				0 del Reino Unido.
				</div>
  				<div id="boton-calvin"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-david" class="bios">
				<div id="nombre-dj">David Guetta</div>
				<div id="foto-dj"><img id="foto-david" src="images/fotosdjs-bio/david-guetta.png" /></div>
  				<div id="descripcion-dj" class="scroll">Con más de 10 años de carrera, Guetta siempre ha sido un pionero. Se ha mantenido al frente del desarrollo de la música 				electrónica en todo momento, manteniendo una colaboración constante con artistas de la envergadura de Michael Jackson, Fergie, Rihanna, 50 Cent, 				Kylie Minogue, Madonna, Nervo, Usher, además de bandas como The Black Eyed Peas y LMFAO.</div>
  				<div id="boton-david"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-fedde" class="bios">
				<div id="nombre-dj">Fedde le Grand</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/fedde-le-grand.png" /></div>
  				<div id="descripcion-dj" class="scroll">Es fundador del sello Flamingo Recordings, uno de los más importantes del Dance mundial, especialmente en música para Big 				Room. Big Room es la música que esta pensada especialmente para festivales masivos. Un sonido explosivo que levanta masas y genera euforia en las 				pistas de baile. 

				El 2011 otro hit de Fedde dio la vuelta al mundo al realizar el remix de la canción Paradise de Coldplay con la cual ya ha ganado varios 						reconocimientos.
				</div>
  				<div id="boton-fedde"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-guti" class="bios">
				<div id="nombre-dj">Guti</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/guti.png" /></div>
  				<div id="descripcion-dj" class="scroll">El argentino Guti destaca  sin duda por la diversidad y ritmos de sus set, la crítica lo cataloga como talentoso y fuera 				de lo común, y esto viene por la  facilidad que tiene para tocar el piano o las percusiones sincronizándose con sus mezclas de jazz-house, sin 					importarle introducir ritmos como el merengue y la salsa.</div>
  				<div id="boton-guti"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-infected" class="bios">
				<div id="nombre-dj">Infected Mushroom</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/infect-mushroom.png" /></div>
  				<div id="descripcion-dj" class="scroll">De origen israelí, este dúo integrado por Erez Aizen y Amit Duvdevani, es conocido alrededor del mundo por su música 					psytrance y electrónica-experimental. Con 13 años en la escena electrónica mundial, no paran de ganar popularidad en el mundo entero.
 				Su primer disco The Gathering  fue lanzado en 1999, pero fue tanta la energía de este dúo que prácticamente editaron un álbum por año. Fue así como 				llegaron Classical Mushroom  el 2000 y  BP Empire el 2001. 
				</div>
  				<div id="boton-infected"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-james" class="bios">
				<div id="nombre-dj">James Zabiella</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/jamie-zabiela.png" /></div>
  				<div id="descripcion-dj" class="scroll">DJ y productor musical británico de Acid House.
				James fue presentado a varios promotores mientras tocaba en clubes locales incluido Menage a Trois y fue llevado por Paul Oakenfold en tres 					ocasiones al cavernoso Club Ikon en Southampton. 

				El gran salto lo consiguió cuando participó de la prestigiosa competición Bedroom Bedlam de Muzik Magazines en 2001 y ganó.
				</div>
  				<div id="boton-james"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-jaime" class="bios">
				<div id="nombre-dj">Jamie jones</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/jamie-jones.png" /></div>
  				<div id="descripcion-dj" class="scroll">Conocido como “Golden Boy”,  Jamie Jones no deja nunca de sorprender y estar a la vanguardia a nivel musical y 						promocional, siendo uno de los artistas del último tiempo más  reconocido a nivel mundial por su  estilo y sonido únicos, tanto a la hora de 					remezclar, como al producir sus temas, combinando  el mejor Thech, con funk, disco y voces sacadas del house, logrando una música con mucho Groove 				que invita a moverse y bailar. </div>
  				<div id="boton-jaime"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-mathias" class="bios">
				<div id="nombre-dj">Mathias Kaden</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/mathias-kaden.png" /></div>
  				<div id="descripcion-dj" class="scroll">Este  Dj se caracteriza por lo diferente de su música,  enfocado al House, después de los 90’ se dedicó a crear nuevas 				estructuras de sonido. 
				En sus estilos incluye ritmos como el Funky, Freaky, Dashing, Dub, Slamming, que son enriquecidos por percusiones africanas y sudamericanas.
				</div>
  				<div id="boton-mathias"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			</div>
			
			<div id="BIO-nervo" class="bios">
				<div id="nombre-dj">Nervo</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/nervo.png" /></div>
  				<div id="descripcion-dj" class="scroll">Estas gemelas  australianas han sido la gran revelación de este 2012. Tras exitosas presentaciones en festivales de la 				envergadura de Tomorrowland y  Creamfields Brasil, donde tocaron junto a Fat Boy Slim se han consolidado en la escena Dance y ante figuras como 				Kylie Minogue , Ke$ha  con quienes ha hecho remixes y David Guetta.
				Con este último las hermanas Mim y Liv Nervo escribieron la canción ganadora de un Grammy “When Love Takes Over” .
				</div>
  				<div id="boton-nervo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-reboot" class="bios">
				<div id="nombre-dj">Reboot</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/rebbot.png" /></div>
  				<div id="descripcion-dj" class="scroll">El Alemán Frank Heinrich A.K.A REBOOT pertenece al sello Cadenza de Luciano. Su faceta de re mezclador explotó tras las 				publicando de revisiones suyas en sellos como Get Physical, Connaisseur, Klang o Moon Harbour.
				El alemán es es co-responsable del mix Disco Invaders: Cocoon Ibiza Summer Mix junto a Chris Tietjen y Johnny D.
				</div>
  				<div id="boton-reboot"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-solomun" class="bios">
				<div id="nombre-dj">Solomun</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/solomun.png" /></div>
  				<div id="descripcion-dj" class="scroll">Nacido en Bosnia. 
				El croata con sede en Hamburgo  ha jugado un papel importante en la redefinición de la música House europea en los últimos años a través de 					producciones, remixes y DJ’s de su sello Diynamyc.
				</div>
  				<div id="boton-solomun"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
	
  			</div>
			
			<div id="BIO-steve" class="bios">
				<div id="nombre-dj">Steve Lawler</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/steve-lawler.png" /></div>
  				<div id="descripcion-dj" class="scroll">DJ y Productor Británico de Música House.  Se ha desempeñado en   discotecas y locales de baile populares como Space , The 				End y Twilo . 
				Debido a sus exitosas presentaciones en Space en Ibiza ha recibido el apodo de "Rey del Espacio". 
				Lawler ha lanzado varios álbumes y es especialmente conocido por sus Lights Out .
				Actualmente dirige el sello discográfico Música Viva.  
				</div>
  				<div id="boton-steve"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			
                <div id="start-paso1"><a href="#"><img id="continuar" src="images/botones/continuar.png" /></a></div>


         <!-- JavaScript includes -->
		<script src="js/script.js"></script>
    </body>
</html>