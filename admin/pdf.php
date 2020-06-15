<?php
include "php/koneksi.php";

$query = "SELECT id_reservasi, seri_kendaraan, nopol, tanggal FROM data_reservasi";
$sql = mysqli_query ($con, $query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	array_push($data, $row);
}

#setting judul laporan dan header tabel
$judul = "DATA RESERVASI BE-MON";
$header = array(
		array("label"=>"Id Reservasi", "length"=>30, "align"=>"C"),
		array("label"=>"Seri Kendaraan", "length"=>50, "align"=>"C"),
		array("label"=>"Nopol", "length"=>50, "align"=>"C"),
		array("label"=>"Tanggal", "length"=>50, "align"=>"C")
	);

#sertakan library FPDF dan bentuk objek
require_once ("pdf/fpdf.php");
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

#tampilkan judul laporan
$pdf->SetFont('times','B','12');
$pdf->Cell(0,20, $judul, '0', 1, 'C');

#buat header tabel
$pdf->SetFont('times','','10');
$pdf->SetFillColor(0,0,255);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
$pdf->Cell(50,10, '', '0', 0, 'C');
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 4, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();

#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
	$i = 0;
	$pdf->Cell(50,10, '', '0', 0, 'C');
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 4, $cell, 1, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}

#output file PDF
$pdf->Output();
?>
