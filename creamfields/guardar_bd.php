<?php
require 'conectar.php';


$query = "INSERT INTO datos (fb_id, fb_nombre, fb_link_usr, link_img) VALUE('".$_POST['fb_id']."', '".$_POST['fb_nombre']."', '".$_POST['fb_link_usr']."', '".$_POST['link_img']."');";

mysql_query($query);

echo $query . "\n";

echo mysql_error($con);

?>