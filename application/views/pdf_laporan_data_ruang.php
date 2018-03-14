<?php
$image1 = "./assets/icons/logo.png";
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("P","cm","A4");
$this->fpdf->SetMargins(1,1,1);
$this->fpdf->AddPage();
$this->fpdf->Image($image1, 1, 1, -300);
$this->fpdf->SetFont('Arial','',11);
$this->fpdf->Cell(2,0.5,'',0,0,'L');
$this->fpdf->Cell(19,0.5,'Laporan Data Ruang',0,0,'L');
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
$this->fpdf->Line(1,3.5,20,3.5);
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->SetFont('Arial','B',10);
$this->fpdf->Cell(1 , 1, 'No.', 1, 'LR', 'C');
$this->fpdf->Cell(4 , 1, 'ID Ruang', 1, 'LR', 'C');
$this->fpdf->Cell(14 , 1, 'Nama Ruang', 1, 'LR', 'C');
$No=0;
foreach($tb_ruang->result() as $data)
{
    $this->fpdf->Ln();
    $this->fpdf->SetFont('Arial','',10);
    $No=$No+1;
	$this->fpdf->Cell(1 , 0.7, $No, 1, 'LR', 'C');
	$this->fpdf->Cell(4 , 0.7, $data->id_ruang, 1, 'LR', 'C');
    $this->fpdf->Cell(14 , 0.7, $data->nama_ruang, 1, 'LR', 'L');
}
$this->fpdf->Output();
?>