<?php
	$data = json_decode($_POST['jObject'], true);
	$final = array();
    foreach ($data as $key => $value) {
    	$final[$key]['artista'] = $value;
    	$final[$key]['url'] = "images/boxes-2/" . $value . ".png";
    	switch ($value) {
            /* Main */
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
    			$final[$key]['y'] = 172;
    			break;
            case 'david':
                $final[$key]['x'] = 62;
                $final[$key]['y'] = 254;
                break;
    		case 'infected':
                $final[$key]['x'] = 62;
                $final[$key]['y'] = 334;
                break;
            /* Club Room */
            case 'pia':
                $final[$key]['x'] = 155;
                $final[$key]['y'] = 38;
                break;
            case 'butano':
                $final[$key]['x'] = 155;
                $final[$key]['y'] = 70;
                break;
            case 'mathias':
                $final[$key]['x'] = 155;
                $final[$key]['y'] = 105;
                break;
            case 'solomun':
                $final[$key]['x'] = 155;
                $final[$key]['y'] = 169;
                break;
            case 'art':
                $final[$key]['x'] = 155;
                $final[$key]['y'] = 235;
                break;
            case 'jaime':
                $final[$key]['x'] = 155;
                $final[$key]['y'] = 300;
                break;
            /* Alternative */
            case 'rodrigo':
                $final[$key]['x'] = 246;
                $final[$key]['y'] = 38;
                break;
            case 'marcos':
                $final[$key]['x'] = 246;
                $final[$key]['y'] = 70;
                break;
            case 'michael':
                $final[$key]['x'] = 246;
                $final[$key]['y'] = 105;
                break;
            case 'nervo':
                $final[$key]['x'] = 246;
                $final[$key]['y'] = 169;
                break;
            case 'alesso':
                $final[$key]['x'] = 246;
                $final[$key]['y'] = 235;
                break;
            case 'fedde':
                $final[$key]['x'] = 246;
                $final[$key]['y'] = 300;
                break;
            /* Cream */
            case 'felipe':
                $final[$key]['x'] = 338;
                $final[$key]['y'] = 38;
                break;
            case 'tweeter':
                $final[$key]['x'] = 338;
                $final[$key]['y'] = 70;
                break;
            case 'guti':
                $final[$key]['x'] = 338;
                $final[$key]['y'] = 105;
                break;
            case 'reboot':
                $final[$key]['x'] = 338;
                $final[$key]['y'] = 169;
                break;
            case 'james':
                $final[$key]['x'] = 338;
                $final[$key]['y'] = 235;
                break;
            case 'steve':
                $final[$key]['x'] = 338;
                $final[$key]['y'] = 300;
                break;
            /* Radio Zero */
            case 'javiersuka':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 37;
                break;
            case 'nicocrespo':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 71;
                break;
            case 'fernandomujica':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 104;
                break;
            case 'rodrigoguendelman':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 136;
                break;
            case 'fernandaarrau':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 169;
                break;
            case 'vives':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 201;
                break;
            case 'franciscoparra':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 234;
                break;
            case 'gustavo':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 267;
                break;
            case 'ignacio':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 300;
                break;
            case 'phillipe':
                $final[$key]['x'] = 430;
                $final[$key]['y'] = 332;
                break;

    		default:
    			$final[$key]['x'] = 0;
    			$final[$key]['y'] = 0;
    			break;
    	}
    }
    session_start();
    $_SESSION['seleccion'] = $final;
    echo "OK"
?>