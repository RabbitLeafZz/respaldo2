<?php
require 'conectar.php';

$query = mysql_query("SELECT * FROM datos WHERE id = '{$_GET['id']}';");

$datos = mysql_fetch_assoc($query);

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Mi Creamfields');
$pdf->Image($datos['link_img'],10,30);
$pdf->Output();
?>

