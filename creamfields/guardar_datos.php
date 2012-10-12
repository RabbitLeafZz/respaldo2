<?php
	$data = json_decode($_POST['jObject'], true);
	$final = array();
    foreach ($data as $key => $value) {
    	$final[$key]['artista'] = $value;
    	$final[$key]['url'] = "images/boxes-2/" . $value . ".png";
    	switch ($value) {
    		case 'alex':
    			$final[$key]['x'] = 62;
    			$final[$key]['y'] = 38;
    			break;
    		case 'matanza':
    			$final[$key]['x'] = 62;
    			$final[$key]['y'] = 89;
    			break;
    		case 'marciano':
    			$final[$key]['x'] = 62;
    			$final[$key]['y'] = 137;
    			break;
    		case 'calvin':
    			$final[$key]['x'] = 62;
    			$final[$key]['y'] = 137;
    			break;
    		
    		default:
    			$final[$key]['x'] = 0;
    			$final[$key]['y'] = 0;
    			break;
    	}
    }
    session_start();
    $_SESSION['seleccion'] = $final;
    print_r($_SESSION['seleccion']);
?>