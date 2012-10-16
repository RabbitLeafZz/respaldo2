<?php 
require("class.phpmailer.php");
require 'conectar.php';
if (isset($_POST['id']) && $_POST['destino'] != '') {

	$query = mysql_query("SELECT * FROM datos WHERE id = '{$_POST['id']}';");

	$datos = mysql_fetch_assoc($query);

	$varname = "micreamfields.png";
	$vartemp = "../".substr($datos['link_img'], 30);

	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->SMTPAuth      = true;                  // enable SMTP authentication
	$mail->SMTPSecure 	 = "ssl";
	$mail->Host          = "smtp.gmail.com"; // sets the SMTP server
	$mail->Port          = 465;                    // set the SMTP port for the GMAIL server
	$mail->Username      = "contacto@reframe.cl"; // SMTP account username
	$mail->Password      = "RF123/()";        // SMTP account password

	$mail->From = "micreamfields@creamfields.com";
	$mail->FromName = "Mi Creamfields";
	$mail->Subject = "Mi Creamfields";
	$mail->AddAddress($_POST['destino']);
	if ($varname != "") {
		$mail->AddAttachment($vartemp, $varname);
	}
	$body = "<strong>Mi Creamfields</strong><br><br>";
	$mail->Body = $body;
	$mail->IsHTML(true);
	$mail->Send();
	echo "Enviado OK";
} else {
	echo "Ingresa un email valido";
}

?>