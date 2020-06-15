<?php
include "php/koneksi.php";

$query = "SELECT data_customer.id_account,data_customer.nama,data_customer.telepon FROM data_customer INNER JOIN account ON data_customer.id_account = account.id_account where level = '3' ";
$sql = mysqli_query ($con, $query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	array_push($data, $row);
}

#setting judul laporan dan header tabel
$judul = "DATA SUSPEND CUSTOMER BE-MON";
$header = array(
		array("label"=>"Id Akun", "length"=>30, "align"=>"C"),
		array("label"=>"Nama Customer", "length"=>50, "align"=>"C"),
		array("label"=>"Telepon", "length"=>60, "align"=>"C")
	);

#sertakan library FPDF dan bentuk objek
require_once ("pdf/fpdf.php");
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'C');

#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(0,0,250);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
$pdf->Cell(65,10, '', '0', 0, 'C');
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
	$pdf->Cell(65,10, '', '0', 0, 'C');
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
