<?php

require("FPDF./fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Alex Eduardo Rodriguez Cardona');
$pdf->Ln();
$pdf->SetFont('Arial','B',18);
$pdf->SetTextColor(0,35,255);

$pdf->Cell(40,10,'GENERAR PDF UTILIZANDO PHP');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(1,1,2);
$pdf->MultiCell(0, 7, utf8_decode('   Los archivos PDF se utilizan ampliamente en documentos y reportes que necesitan mantener el diseño y contenido (imágenes, tipos de letra, colores, etc), por ello vamos a aprender a crear archivos PDF utilizando PHP.'), 0, 1);

$pdf->MultiCell(0, 7, utf8_decode('   FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.'), 0, 1);

$pdf->MultiCell(0, 7, utf8_decode('   Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.'), 0, 1);
$pdf->Ln();
$pdf->Output();



?>







