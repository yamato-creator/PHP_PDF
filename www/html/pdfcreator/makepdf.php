<?php

require('tfpdf/tfpdf.php');
$pdf = new tFPDF;
$pdf->AddPage();

$pdf->AddFont('ShipporiMincho','','ShipporiMincho-Regular.ttf',true);
$pdf->SetFont('ShipporiMincho','',14);
$pdf->Cell(40,10,'Hello World!');

$pdf->Output();