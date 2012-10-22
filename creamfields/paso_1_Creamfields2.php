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
        <script src="js/jquery.nicescroll.js"></script>
        <script>
            $(document).ready(function() {
                

                $("body").queryLoader2({ 
                    backgroundColor: '#FFF', 
                    barColor: '#000',
                    percentage: true,
                    onComplete: function() {
                        $('.bios').hide();
                    }
                });
            })
        </script>
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
        artistas['fedde']['match'] = new Array('infected', 'jaime', 'steve', 'ignacio', 'phillipe');
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
        artistas['steve']['match'] = new Array('infected', 'jaime', 'fedde', 'ignacio', 'phillipe');
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
        artistas['ignacio']['match'] = new Array('infected', 'jaime', 'fedde', 'steve');
        artistas['ignacio']['img'] = 'images/match/otros.png';
        artistas['ignacio']['nombre'] = 'Ignacio Aguirre';
        artistas['ignacio']['width'] = 86;
        artistas['phillipe'] = new Array();
        artistas['phillipe']['match'] = new Array('infected', 'jaime', 'fedde', 'steve');
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
      		  $('#'+whichLayer+' div.scroll').niceScroll({
                    cursorcolor:"#ef8c19",
                    cursorborder: "none",
                    background: "background-color: #FFF;"
                });
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
                    window.location = "paso_2_Creamfields.php";
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

      <div class="horario">
		<div id="main" class="escenario" >
  			<div id="alex" ><a href="javascript:toggleLayer('BIO-alex');" ><img class="bottom" src="images/boxes/alex.png" /><img class="top" src="images/boxes-2/alex.png" /></a></div>
			<div id="matanza"><a href="javascript:toggleLayer('BIO-matanza');" ><img class="bottom" src="images/boxes/matanza.png" /><img class="top" src="images/boxes-2/matanza.png" /></a></div>
			<div id="marciano"><a href="javascript:toggleLayer('BIO-marciano');" ><img class="bottom" src="images/boxes/marciano.png" /><img class="top" src="images/boxes-2/marciano.png" /></a></div>
			<div id="calvin"><a href="javascript:toggleLayer('BIO-calvin');" ><img class="bottom" src="images/boxes/calvin.png" /><img class="top" src="images/boxes-2/calvin.png" /></a></div>
			<div id="david"><a href="javascript:toggleLayer('BIO-david');" ><img class="bottom" src="images/boxes/david.png" /><img class="top" src="images/boxes-2/david.png" /></a></div>
			<div id="infected"><a href="javascript:toggleLayer('BIO-infected');" ><img class="bottom" src="images/boxes/infected.png" /><img class="top" src="images/boxes-2/infected.png" /></a></div>
 		</div>

		<div id="clubroom" class="escenario" >
  		<div id="pia"><a href="javascript:toggleLayer('BIO-pia');" ><img class="bottom" src="images/boxes/pia.png" /><img class="top" src="images/boxes-2/pia.png" /></a></div>
			<div id="butano"><a href="javascript:toggleLayer('BIO-butano');"> <img class="bottom" src="images/boxes/butano.png" /><img class="top" src="images/boxes-2/butano.png" /></a></div>
			<div id="mathias"><a href="javascript:toggleLayer('BIO-mathias');" ><img class="bottom" src="images/boxes/mathias.png" /><img class="top" src="images/boxes-2/mathias.png" /></a></div>
			<div id="solomun"><a href="javascript:toggleLayer('BIO-solomun');" ><img class="bottom" src="images/boxes/solomun.png" /><img class="top" src="images/boxes-2/solomun.png" /></a></div>
			<div id="art"><a href="javascript:toggleLayer('BIO-art');" ><img class="bottom" src="images/boxes/art.png" /><img class="top" src="images/boxes-2/art.png" /></a></div>
			<div id="jaime"><a href="javascript:toggleLayer('BIO-jaime');" ><img class="bottom" src="images/boxes/jaime.png" /><img class="top" src="images/boxes-2/jaime.png" /></a></div>
 		</div>

		<div id="alternative" class="escenario" >
  			<div id="rodrigo"><a href="javascript:toggleLayer('BIO-rodrigo');" ><img class="bottom" src="images/boxes/rodrigo.png" /><img class="top" src="images/boxes-2/rodrigo.png" /></a></div>
			<div id="marcos"><a href="javascript:toggleLayer('BIO-marcos');" ><img class="bottom" src="images/boxes/marcos.png" /><img class="top" src="images/boxes-2/marcos.png" /></a></div>
			<div id="michael"><a href="javascript:toggleLayer('BIO-michael');" ><img class="bottom" src="images/boxes/michael.png" /><img class="top" src="images/boxes-2/michael.png" /></a></div>
			<div id="nervo"><a href="javascript:toggleLayer('BIO-nervo');" ><img class="bottom" src="images/boxes/nervo.png" /><img class="top" src="images/boxes-2/nervo.png" /></a></div>
			<div id="alesso"><a href="javascript:toggleLayer('BIO-alesso');" ><img class="bottom" src="images/boxes/alesso.png" /><img class="top" src="images/boxes-2/alesso.png" /></a></div>
			<div id="fedde"><a href="javascript:toggleLayer('BIO-fedde');" ><img class="bottom" src="images/boxes/fedde.png" /><img class="top" src="images/boxes-2/fedde.png" /></a></div>
 		</div>

		<div id="cream" class="escenario" >
      <div id="felipe"><a href="javascript:toggleLayer('BIO-felipe');" ><img class="bottom" src="images/boxes/felipevenegas.png" /><img class="top" src="images/boxes-2/felipe.png" /></a></div>
			<div id="tweeter"><a href="javascript:toggleLayer('BIO-tweeter');" ><img class="bottom" src="images/boxes/tweeter.png" /><img class="top" src="images/boxes-2/tweeter.png" /></a></div>
			<div id="guti"><a href="javascript:toggleLayer('BIO-guti');" ><img class="bottom" src="images/boxes/guti.png" /><img class="top" src="images/boxes-2/guti.png" /></a></div>
			<div id="reboot"><a href="javascript:toggleLayer('BIO-reboot');" ><img class="bottom" src="images/boxes/reboot.png" /><img class="top" src="images/boxes-2/reboot.png" /></a></div>
			<div id="james"><a href="javascript:toggleLayer('BIO-james');" ><img class="bottom" src="images/boxes/james.png" /><img class="top" src="images/boxes-2/james.png" /></a></div>
      <div id="steve"><a href="javascript:toggleLayer('BIO-steve');" ><img class="bottom" src="images/boxes/steve.png" /><img class="top" src="images/boxes-2/steve.png" /></a></div>
 		</div>
			
		<div id="zero" class="escenario" >
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
    </div>
			
			<div id="BIO-alex" class="bios">
				<div id="nombre-dj">Alex adwanter</div>
				<div id="foto-dj"><img src="images/nacionales/alexadwandter.png" /></div>
  				<div class="scroll">El fundador y líder de Teleradio Donoso, Álex Anwandter participará en el main stage de Creamfields Chile 2012.
Su debut como solista fue bajo el pseudónimo de Odisea a mediados del año 2010. Compuesto, producido e interpretado íntegramente por él, su nuevo trabajo vino a confirmar su interés por el soul y la música dance  electrónica. En 2011 retomó el nombre de Álex Anwandter para presentar un segundo disco titulado Rebeldes.
</div>
  				<div id="boton-alex"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-matanza" class="bios">
				<div id="nombre-dj">Matanza</div>
				<div id="foto-dj"><img src="images/nacionales/matanza.png" /></div>
  				<div class="scroll">El trío electrónico Matanza  es sin duda una de las grandes revelaciones musicales de este año, tras dos meses de gira por Europa son favoritos en Creamfields Chile.
Su música apuesta a integrar sonidos folklóricos y tribales que son integrados a la música electrónica de muy buena forma, además de demostrar un interesante manejo de beats y efectos.
Su primer trabajo "Dubamerica" instaló a Matanza dentro de las propuestas más interesantes del último tiempo. 
</div>
  				<div id="boton-matanza"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-marciano" class="bios">
				<div id="nombre-dj">Marciano</div>
				<div id="foto-dj"><img src="images/nacionales/marciano.png" /></div>
  				<div class="scroll">El dúo chileno de música electrónica Marciano está integrado por Rodrigo Castro y Sergio Lagos. Pioneros en la escena electrónica local debutaron el año 1996 bajo el nombre Musikalibre.  Su primer disco de estudio, "Come Astronautas" se editó el año 1998, desde ahí su exitosa carrera ha dado que hablar en todo el país. Tras un receso importante el dúo vuelve a los escenarios y lo hace en Creamfields Chile 2012. </div>
  				<div id="boton-marciano"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-felipe" class="bios">
				<div id="nombre-dj">Felipe Venegas</div>
				<div id="foto-dj"><img src="images/nacionales/felipevenegas.png" /></div>
  				<div class="scroll">Felipe Venegas es uno de los más talentosos DJs y productores locales con los que contará Creamfields Chile en su noveno año. 
Con un sonido  contemporáneo y moderno, ha participado en importantes momentos de la escena local.
Felipe estudió música clásica antes de incursionar en los  sonidos electrónicos lo que hace que obtenga una sensación rítmica de percusión que gusta en todos los escenarios.
Una de sus últimas presentaciones internacionales fue en mayo en Ibiza para Vagabundos.
</div>
  				<div id="boton-felipe"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-butano" class="bios">
				<div id="nombre-dj">Andres Butano</div>
				<div id="foto-dj"><img src="images/nacionales/andresbutano.png" /></div>
  				<div class="scroll">Su interés por el mundo de la música electrónica nace del sonido de bandas y artistas de la talla de Depeche Mode, New Order, Plastikman, Orbital entre otros. 
Considerado uno de los más  talentoso dj locales,  y un pilar fundamental de la escena local, su música se ha caracterizado por la interesante mezcla de estilos house groove y tech house. 
Su apuesta ultra bailable posee una energía explosiva que incursiona en percusiones que exploran incluso  sonidos de jazz orgánicos. 
</div>
  				<div id="boton-butano"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-rodrigo" class="bios">
				<div id="nombre-dj">Rodrigo Valdes</div>
				<div id="foto-dj"><img src="images/nacionales/rodrigovaldes.png" /></div>
  				<div class="scroll">También conocido como Valdeke, Rodrigo sabe muy bien cómo hacer bailar. Semana a semana se mueve en las mejores fiestas de la noche de Santiago donde los sonidos Electro Pop  retumban en toda la pista. Su particular carisma y estilo de mezclar lo transforman en un dj que no puede faltar en una fiesta que se quiera tener a uno de los mejores de la escena nocturna local. </div>
  				<div id="boton-rodrigo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
			
			<div id="BIO-marcos" class="bios">
				<div id="nombre-dj">Marcos Latrach</div>
				<div id="foto-dj"><img src="images/nacionales/marcoslatrach.png" /></div>
  				<div class="scroll">En Creamfields Chile disfrutaremos de la música de Marcos Latrach, talento nacional que viene llegando de una increíble gira por Europa coronada por una presentación en Ushuaia, Ibiza, para Cadenza Vagabundos.
Este productor y músico electrónico expondrá lo mejor de su Experimental/House/Techno extraídos de sus tres discos y dos EP´s lanzados entre el 2009 y el 2011, más todo lo último de sus presentaciones. 
</div>
  				<div id="boton-marcos"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-michael" class="bios">
				<div id="nombre-dj">Michael Woods</div>
				<div id="foto-dj"><img src="images/nacionales/michaelwoods.png" /></div>
  				<div class="scroll">Michael Anthony Woods es un DJ y productor discográfico británico que abarca varios géneros como el Trance, House y Progressive House. 
De padres de origen argentino y guyanés, nació y se crio en Hackney, Londres. Desde pequeño tuvo un acercamiento a una serie de instrumentos que perfectamente lo podrían catalogar como el hombre orquesta, toca guitarra, batería y trompeta.
Su talento ya es reconocido y es así como muchos artistas han recurrido a Woods, entre ellos destacan participaciones en remixes como Feels Like A Prayer en Toolroom Records, Deadmau5’s Strobe on mau5trap, y artistas como Adele, Nate James, Xenomania,  The Temper Trap, Way Out West  y más recientemente Estelle.
</div>
  				<div id="boton-michael"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-pia" class="bios">
				<div id="nombre-dj">Pia Sotomayor</div>
				<div id="foto-dj"><img src="images/nacionales/piasotomayor.png" /></div>
  				<div class="scroll">Su nombre es María Pía Sotomayor Stagno y su carrera comenzó el 2002. Su comienzo fue bastante informal en un cumpleaños donde puso la música. Su talento se dejó ver y fue cosa de un par de datos para que demostrara su talento en otra fiesta, esta vez en Santos Dumont. 
Al tiempo Pia ya estaba pinchando discos en lugares como Mambo o el Cine Arte Alameda. Durante aquel tiempo Fernanda Arrau compartió con ella sus conocimientos en el arte de mezclar y al poco tiempo ya tenían un proyecto juntas que se presentó en muchos lugares de moda en Santiago bajo el pseudónimo de DJs Amigas.
</div>
  				<div id="boton-pia"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-tweeter" class="bios">
				<div id="nombre-dj">Tweeter</div>
				<div id="foto-dj"><img src="images/nacionales/tweeter.png" /></div>
  				<div class="scroll">Con muchos años detrás de las mezclas, Tweeter el Dj y Productor chileno,  ha tocado en una infinidad de fiestas haciendo bailar en este trayecto a muchas personas tanto en Chile como en el extranjero.
Es uno de los productores locales con mayor trayectoria,  se ha presentado en casi la totalidad de los festivales del país y es considerado uno de los pilares fundamentales de la escena local. 
En Creamfields 2012 se presentará en el stage Cream
</div>
  				<div id="boton-tweeter"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-javiersuka" class="bios">
				<div id="nombre-dj">Javier Ramos</div>
				<div id="foto-dj"><img src="images/nacionales/javierramos.png" /></div>
  				<div class="scroll">Una de las nuevas promesas chilenas en la música electrónica, ha compartido escenarios con artistas de la talla de Todd Terry, Sebastien Leger, Roger Sánchez entre otros. Es  su papel de residente del club Suka, Javier ha hecho bailar a cientos de personas semana a semana  con su característico sonido house y su gran carisma.  </div>
  				<div id="boton-javiersuka"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-nicocrespo" class="bios">
				<div id="nombre-dj">Nico Crespo</div>
				<div id="foto-dj"><img src="images/nacionales/nicocrespo.png" /></div>
  				<div class="scroll">Su familiarización con la escena electrónica nació en el año 2000 cuando comenzó a recopilar música de diferentes exponentes de todo el mundo. Dos años más tarde decide comprar sus primeras torna mesas comenzando a pinchar en pequeñas fiestas.  
Su evolución musical comenzó a hacerse latente y a moverse entre gustos como el tribal house, minimal y tech house.  
Este Dj de la V Región se presentará en un escenario especial sólo de Dj nacionales. 
</div>
  				<div id="boton-nicocrespo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-fernandomujica" class="bios">
				<div id="nombre-dj">Fernando Mujica</div>
				<div id="foto-dj"><img src="images/nacionales/fernandomujica.png" /></div>
  				<div class="scroll">Un experimentado músico nacional, que no deja de sorprender desde la vitrina que se le mire, ya sea en sus trabajos como dj,   productor  o desde los estudios de radio Zero. 
Ha plasmado lo mejor de su talento en diversas plataformas, es el creador de la revista Extravaganza, uno de los primeros medios gratuitos en nuestro país dedicados sólo a la música y a las tendencias.  Es sabido que Mujica es un melómano de tomo y lomo y la música es hoy el eje central de su vida.
</div>
  				<div id="boton-fernandomujica"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-rodrigoguendelman" class="bios">
				<div id="nombre-dj">Rodrigo Guendelman</div>
				<div id="foto-dj"><img src="images/nacionales/rodrigoguendelman.png" /></div>
  				<div class="scroll">Creamfields Chile 2012 contará con una increíble selección de sonidos  a cargo del destacado periodista especializado en música, tendencias y entretención.
Rodrigo participa en  diversos medios como Radio Zero, CNN, El Dínamo, Diario La Tercera, entre otros. Con su carisma y su buen gusto musical de seguro será una de las grandes sorpresas en el escenario de Dj nacionales. 
</div>
  				<div id="boton-rodrigoguendelman"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-fernandaarrau" class="bios">
				<div id="nombre-dj">Fernanda Arrau</div>
				<div id="foto-dj"><img src="images/nacionales/fernandaarrau.png" /></div>
  				<div class="scroll">La joven dj y productora Fernanda Arrau es una reconocida en la noche santiaguina. Comenzó en el mundo de las torna mesas en el año 1997. 
Su carrera lleva años desarrollándose de forma exitosa, por lo que ha sido requerida constantemente en fiestas y clubes santiaguinos. 
Ha tenido la fortuna de compartir escenario con figuras de la talla de Yelle, Cut Copy, Dragonette, Cat Power, Of Montreal y muchos más.
Fernanda quien  además productora, se caracteriza por cautivar en la pista de baile con su particular estilo, mezcla de sonidos indie y Groove. 
</div>
  				<div id="boton-fernandaarrau"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-vives" class="bios">
				<div id="nombre-dj">Vives & forero </div>
				<div id="foto-dj"><img src="images/nacionales/vivesforero.png" /></div>
  				<div class="scroll">El año pasado Fernando Vives ya nos sorprendió con su participación en Creamfields Chile desatando la fiesta. Este año en conjunto a Alex Forero,  la fiesta está aún más garantizada. Este dúo ha comenzado a revolucionar las noches de la capital en diversas fiestas  nocturnas, donde su energía y juventud los ha hecho ganar la confianza de la gente cuando de bailar se trata.  Electro, progressive house y hasta sonidos del dubstep puedes llegar a escuchar con este gran dúo.</div>
  				<div id="boton-vives"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-franciscoparra" class="bios">
				<div id="nombre-dj">Francisco Parra</div>
				<div id="foto-dj"><img src="images/nacionales/franciscoparra.png" /></div>
  				<div class="scroll">Este joven originario de Concepción ha hecho por varios años bailar a la Octava Región de nuestro país. Residente del club SAB en Coronel, desde los 13 años ha estado vinculado a la música y las mezclas. Su estilo matiza el electro el house y el progressive en una fusión no menos llamativa que genera muchas ganas de bailar.</div>
  				<div id="boton-franciscoparra"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-gustavo" class="bios">
				<div id="nombre-dj">Gustavo Allendes</div>
				<div id="foto-dj"><img src="images/nacionales/gustavoallendes.png" /></div>
  				<div class="scroll">Gustavo lleva varios años ligado a la música. Sus inicios comenzaron al ritmo del  hip-hop a fines de los 90’-
A principios del 2001 conoce a Francisco Allendes  quien no sólo se convertiría en un gran amigo,  sino que en su principal impulsor al acercamiento que tuvo con la música electrónica. Pero no fue hasta el año 2005 que inicia su carrera como Dj comenzando a participar de importantes festivales en el país. 
Actualmente es considerado uno de los iconos de la electrónica underground chilena.
</div>
  				<div id="boton-gustavo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-ignacio" class="bios">
				<div id="nombre-dj">Ignacio Aguirre</div>
				<div id="foto-dj"><img src="images/nacionales/ignacioaguirre.png" /></div>
  				<div class="scroll">Ignacio Aguirre es un dj y productor musical chileno que lleva 16 años trabajando en la escena electrónica.
Creador de importantes  fiestas en Santiago, actualmente trabaja en diversos clubes locales.
Es uno de los precursores de la escena electrónica house y deep  del país  y ha tocado en diversos clubes tanto chilenos como sudamericanos.
</div>
  				<div id="boton-ignacio"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>
  			
  			<div id="BIO-phillipe" class="bios">
				<div id="nombre-dj">Phillipe Truan</div>
				<div id="foto-dj"><img src="images/nacionales/phillipetruan.png" /></div>
  				<div class="scroll">Comienza a incursionar en la escena local siendo parte de DJ School.  Al poco  tiempo es parte del  colectivo de música electrónica “Euphoria”. 
Durante una extensa temporada en el  extranejo, pudo conocer y participar de instancias trascendentes en su carrera como Dj. 
Phillipe se caracteriza por mezclar los sonidos de la vieja, con los de la nueva escuela.  Un Tech-House elegante con gotas de Techno que logran envolver e hipnotizar al mismo tiempo.
</div>
  				<div id="boton-phillipe"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
  			</div>


			
			
			<div id="BIO-alesso" class="bios">
				<div id="nombre-dj">Alesso</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/alesso.png" /></div>
  				<div class="scroll">DJ y productor nacido en Estocolmo, Suecia, de origen italiano. 
				Con sólo 21 años de edad, ya es considerado una de las grandes revelaciones de la música House en Suecia. 
				Fue descubierto en su ciudad natal por Sebastian Ingrosso, miembro de Swedish House Mafia. 
				En Marzo de este año tuvo el privilegio de ser invitado por la BBC Radio 1, para mezclar en el prestigioso espacio radial denominado Essential 					Mix
			</div>
  				<div id="boton-alesso"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-art" class="bios">
				<div id="nombre-dj">Art Department</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/art-departament.png" /></div>
  				<div class="scroll">Este proyecto musical nace del encuentro de Kenny Glasgow veterano de la escena electrónica mundial y el joven Jonny 					White. Uno desde la vereda de la experiencia y el otro desde la esquina de la frescura y la juventud, se juntan para plantear música dentro de la 				escena del House desde un punto de vista menos comercial.</div>
  			<div id="boton-art"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-calvin" class="bios">
				<div id="nombre-dj">Calvin Harris</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/calvin-harris.png" /></div>
  				<div class="scroll">Este músico, productor  cantante y  letrista escocés lleva más de 12 años haciendo música, pero ha sido durante este 					último tiempo que se ha transformado  en una figura imperdible de cualquier show en el que se presente alrededor del mundo. 
				Su álbum debut  “I Created Disco” fue lanzado en 2007  y dos de los singles que incluía “Acceptable in the 80's” y “The Girls”  ingresaron al Top 1				0 del Reino Unido.
				</div>
  				<div id="boton-calvin"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-david" class="bios">
				<div id="nombre-dj">David Guetta</div>
				<div id="foto-dj"><img id="foto-david" src="images/fotosdjs-bio/david-guetta.png" /></div>
  				<div class="scroll">Con más de 10 años de carrera, Guetta siempre ha sido un pionero. Se ha mantenido al frente del desarrollo de la música 				electrónica en todo momento, manteniendo una colaboración constante con artistas de la envergadura de Michael Jackson, Fergie, Rihanna, 50 Cent, 				Kylie Minogue, Madonna, Nervo, Usher, además de bandas como The Black Eyed Peas y LMFAO.</div>
  				<div id="boton-david"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-fedde" class="bios">
				<div id="nombre-dj">Fedde le Grand</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/fedde-le-grand.png" /></div>
  				<div class="scroll">Es fundador del sello Flamingo Recordings, uno de los más importantes del Dance mundial, especialmente en música para Big 				Room. Big Room es la música que esta pensada especialmente para festivales masivos. Un sonido explosivo que levanta masas y genera euforia en las 				pistas de baile. 

				El 2011 otro hit de Fedde dio la vuelta al mundo al realizar el remix de la canción Paradise de Coldplay con la cual ya ha ganado varios 						reconocimientos.
				</div>
  				<div id="boton-fedde"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-guti" class="bios">
				<div id="nombre-dj">Guti</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/guti.png" /></div>
  				<div class="scroll">El argentino Guti destaca  sin duda por la diversidad y ritmos de sus set, la crítica lo cataloga como talentoso y fuera 				de lo común, y esto viene por la  facilidad que tiene para tocar el piano o las percusiones sincronizándose con sus mezclas de jazz-house, sin 					importarle introducir ritmos como el merengue y la salsa.</div>
  				<div id="boton-guti"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-infected" class="bios">
				<div id="nombre-dj">Infected Mushroom</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/infect-mushroom.png" /></div>
  				<div class="scroll">De origen israelí, este dúo integrado por Erez Aizen y Amit Duvdevani, es conocido alrededor del mundo por su música 					psytrance y electrónica-experimental. Con 13 años en la escena electrónica mundial, no paran de ganar popularidad en el mundo entero.
 				Su primer disco The Gathering  fue lanzado en 1999, pero fue tanta la energía de este dúo que prácticamente editaron un álbum por año. Fue así como 				llegaron Classical Mushroom  el 2000 y  BP Empire el 2001. 
				</div>
  				<div id="boton-infected"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-james" class="bios">
				<div id="nombre-dj">James Zabiella</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/jamie-zabiela.png" /></div>
  				<div class="scroll">DJ y productor musical británico de Acid House.
				James fue presentado a varios promotores mientras tocaba en clubes locales incluido Menage a Trois y fue llevado por Paul Oakenfold en tres 					ocasiones al cavernoso Club Ikon en Southampton. 

				El gran salto lo consiguió cuando participó de la prestigiosa competición Bedroom Bedlam de Muzik Magazines en 2001 y ganó.
				</div>
  				<div id="boton-james"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-jaime" class="bios">
				<div id="nombre-dj">Jamie jones</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/jamie-jones.png" /></div>
  				<div class="scroll">Conocido como “Golden Boy”,  Jamie Jones no deja nunca de sorprender y estar a la vanguardia a nivel musical y 						promocional, siendo uno de los artistas del último tiempo más  reconocido a nivel mundial por su  estilo y sonido únicos, tanto a la hora de 					remezclar, como al producir sus temas, combinando  el mejor Thech, con funk, disco y voces sacadas del house, logrando una música con mucho Groove 				que invita a moverse y bailar. </div>
  				<div id="boton-jaime"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-mathias" class="bios">
				<div id="nombre-dj">Mathias Kaden</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/mathias-kaden.png" /></div>
  				<div class="scroll">Este  Dj se caracteriza por lo diferente de su música,  enfocado al House, después de los 90’ se dedicó a crear nuevas 				estructuras de sonido. 
				En sus estilos incluye ritmos como el Funky, Freaky, Dashing, Dub, Slamming, que son enriquecidos por percusiones africanas y sudamericanas.
				</div>
  				<div id="boton-mathias"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			</div>
			
			<div id="BIO-nervo" class="bios">
				<div id="nombre-dj">Nervo</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/nervo.png" /></div>
  				<div class="scroll">Estas gemelas  australianas han sido la gran revelación de este 2012. Tras exitosas presentaciones en festivales de la 				envergadura de Tomorrowland y  Creamfields Brasil, donde tocaron junto a Fat Boy Slim se han consolidado en la escena Dance y ante figuras como 				Kylie Minogue , Ke$ha  con quienes ha hecho remixes y David Guetta.
				Con este último las hermanas Mim y Liv Nervo escribieron la canción ganadora de un Grammy “When Love Takes Over” .
				</div>
  				<div id="boton-nervo"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-reboot" class="bios">
				<div id="nombre-dj">Reboot</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/rebbot.png" /></div>
  				<div class="scroll">El Alemán Frank Heinrich A.K.A REBOOT pertenece al sello Cadenza de Luciano. Su faceta de re mezclador explotó tras las 				publicando de revisiones suyas en sellos como Get Physical, Connaisseur, Klang o Moon Harbour.
				El alemán es es co-responsable del mix Disco Invaders: Cocoon Ibiza Summer Mix junto a Chris Tietjen y Johnny D.
				</div>
  				<div id="boton-reboot"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			<div id="BIO-solomun" class="bios">
				<div id="nombre-dj">Solomun</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/solomun.png" /></div>
  				<div class="scroll">Nacido en Bosnia. 
				El croata con sede en Hamburgo  ha jugado un papel importante en la redefinición de la música House europea en los últimos años a través de 					producciones, remixes y DJ’s de su sello Diynamyc.
				</div>
  				<div id="boton-solomun"><a href="#" id="flipToRecover" class="flipLink"><img  src="images/botones/seleccionar_artista.png" /></a></div>
	
  			</div>
			
			<div id="BIO-steve" class="bios">
				<div id="nombre-dj">Steve Lawler</div>
				<div id="foto-dj"><img src="images/fotosdjs-bio/steve-lawler.png" /></div>
  				<div class="scroll">DJ y Productor Británico de Música House.  Se ha desempeñado en   discotecas y locales de baile populares como Space , The 				End y Twilo . 
				Debido a sus exitosas presentaciones en Space en Ibiza ha recibido el apodo de "Rey del Espacio". 
				Lawler ha lanzado varios álbumes y es especialmente conocido por sus Lights Out .
				Actualmente dirige el sello discográfico Música Viva.  
				</div>
  				<div id="boton-steve"><a href="#" id="flipToRecover" class="flipLink"><img src="images/botones/seleccionar_artista.png" /></a></div>
			</div>
			
			
                <div id="start-paso1"><a href="#"><img id="continuar" src="images/botones/continuar.png" /></a></div>
				<div id="instrucciones-1"><img id="continuar" src="images/01.png" /></div>
				<div id="instrucciones-2"><img id="continuar" src="images/02-1.png" /></div>

         <!-- JavaScript includes -->
		<script src="js/script.js"></script>
    </body>
</html>