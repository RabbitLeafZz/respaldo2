<?php
require 'conectar.php';
require 'facebook/src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
	'appId'  => '531707813512666',
	'secret' => '8007fa623a8b5d8e014a45b13de21da9',
));

// Get User ID
$user = $facebook->getUser();


$query = "INSERT INTO datos (fb_id, fb_nombre, fb_link_usr, link_img) VALUE('".$_POST['fb_id']."', '".$_POST['fb_nombre']."', '".$_POST['fb_link_usr']."', '".$_POST['link_img']."');";

mysql_query($query);
$id_bd = mysql_insert_id();


$mensaje = "HEY! Estoy participando por un pase vip para Creamfields 2012!!, ayudame a ganar dando ME GUSTA a mi creamfields en el siguiente link: http://apps.facebook.com/micreamfields/?id=" . $id_bd;
$link = "http://apps.facebook.com/micreamfields/?id=" . $id_bd;

//echo $user . "\n";
if ($user) {
	try {
        
        $ret_obj = $facebook->api('/me/feed', 'POST', array(
                                                        'message' => $mensaje, 
                                                        'link' => $link
															)
        						);
        
    } catch(FacebookApiException $e) {
        //echo $e->getMessage() . "\n";
    }
}


//echo $query . "\n";

//echo mysql_error($con);

echo $id_bd;

?>