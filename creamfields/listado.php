<?php

require 'conectar.php';

if (isset($_SESSION['index'])) {
	$inicio = $_SESSION['index'];
	$_SESSION['index'] += 10;
} else {
	$inicio = 0;
	$_SESSION['index'] = 0;
}

$datos = mysql_query("SELECT * FROM datos ORDER BY id DESC LIMIT $inicio,10;");

$index = 0;
while ($row = mysql_fetch_assoc($datos)) {
	$resultado[$index]['id'] = $row['id'];
	$resultado[$index]['fb_id'] = $row['fb_id'];
	$resultado[$index]['fb_nombre'] = $row['fb_nombre'];
	$resultado[$index]['fb_link_usr'] = $row['fb_link_usr'];
	$resultado[$index]['link_img'] = $row['link_img'];
	$index++;
}

echo json_encode($resultado);



?>