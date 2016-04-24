<?php
require_once('./library/Html2Pdf.php');

$content = $_POST['content'];

$pdf = new Html2Pdf();
$parsed = '';
//$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->WriteHtml($content, $parsed);
$pdf->MultiCell(0, 15, $content);
$pdf->Multicell(0,15, $parsed );
$pdf->Output('test.pdf', 'F');
