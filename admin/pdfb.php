<?php
include "php/koneksi.php";

$query = "SELECT id_account,nama_pemilik, nama_bengkel, telepon, kapasitas, status FROM data_bengkel where status = 'confirmed'";
$sql = mysqli_query ($con, $query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	array_push($data, $row);
}

#setting judul laporan dan header tabel
$judul = "DATA BENGKEL BE-MON";
$header = array(
		array("label"=>"Id Akun", "length"=>30, "align"=>"C"),
		array("label"=>"Nama Pemilik", "length"=>45, "align"=>"C"),
		array("label"=>"Nama Bengkel", "length"=>35, "align"=>"C"),
		array("label"=>"Telepon", "length"=>35, "align"=>"C"),
		array("label"=>"Kapasitas", "length"=>30, "align"=>"C"),
		array("label"=>"Status", "length"=>25, "align"=>"C"),
	);

#sertakan library FPDF dan bentuk objek
require_once ("pdf/fpdf.php");
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();

#tampilkan judul laporan
$pdf->SetFont('times','B','12');
$pdf->Cell(280,10, $judul, '0', 1, 'C');

#buat header tabel
$pdf->SetFont('times','','10');
$pdf->SetFillColor(0,0,255);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
$pdf->Cell(40,10, '', '0', 0, 'C');
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 6, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();

#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
	$i = 0;
	$pdf->Cell(40,10, '', '0', 0, 'C');
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 6, $cell, 1, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}

#output file PDF
$pdf->Output();
?>
