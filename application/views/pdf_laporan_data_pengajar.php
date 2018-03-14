<?php
$image1 = "./assets/icons/logo.png";
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("L","cm","A4");
$this->fpdf->SetMargins(1,1,1);
$this->fpdf->AddPage();
$this->fpdf->Image($image1, 1, 1, -300);
$this->fpdf->SetFont('Arial','',11);
$this->fpdf->Cell(2,0.5,'',0,0,'L');
$this->fpdf->Cell(19,0.5,'Laporan Data Pengajar',0,0,'L');
$this->fpdf->Ln();
$this->fpdf->SetFont('Arial','B',16);
$this->fpdf->Cell(2,0.7,'',0,0,'L');
$this->fpdf->Cell(19,0.7,'Lembaga Kursus Free Open Source [ F O S S ]',0,0,'L');
$this->fpdf->Ln();
$this->fpdf->SetFont('Arial','',10);
$this->fpdf->Cell(2,0.5,'',0,0,'L');
$this->fpdf->Cell(19,0.5,'Jl. RT. 001 RW. 001 Lingkungan Telaga Baru Taliwang',0,0,'L');
$this->fpdf->Ln();
$this->fpdf->SetFont('Arial','',10);
$this->fpdf->Cell(2,0.5,'',0,0,'L');
$this->fpdf->Cell(19,0.5,'Kabupaten Sumbawa Barat. Kodepos : 84355',0,0,'L'); 
$this->fpdf->Line(1,3.5,27,3.5);
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->SetFont('Arial','B',10);
$this->fpdf->Cell(1 , 1, 'No.', 1, 'LR', 'C');
$this->fpdf->Cell(2.5 , 1, 'ID Pengajar', 1, 'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Nama Pengajar', 1, 'LR', 'C');
$this->fpdf->Cell(1.5 , 1, 'P/W', 1, 'LR', 'C');
$this->fpdf->Cell(8 , 1, 'Alamat', 1, 'LR', 'C');
$this->fpdf->Cell(3 , 1, 'Kota', 1, 'LR', 'C');
$this->fpdf->Cell(5 , 1, 'No. Handphone', 1, 'LR', 'C');
$No=0;



foreach($tb_pengajar->result() as $data)
{
    $this->fpdf->Ln();
    $this->fpdf->SetFont('Arial','',10);
    $No=$No+1;
	$this->fpdf->Cell(1 , 0.7, $No, 1, 'LR', 'C');
	$this->fpdf->Cell(2.5 , 0.7, $data->id_pengajar, 1, 'LR', 'C');
    $this->fpdf->Cell(5 , 0.7, $data->nama_pengajar, 1, 'LR', 'L');
	$this->fpdf->Cell(1.5 , 0.7, $data->kelamin, 1, 'LR', 'C');
	$this->fpdf->Cell(8 , 0.7, $data->alamat, 1, 'LR', 'L');
	$this->fpdf->Cell(3 , 0.7, $data->kota, 1, 'LR', 'C');
	$this->fpdf->Cell(5 , 0.7, $data->no_hp, 1, 'LR', 'C');
}
$this->fpdf->Output();
?>