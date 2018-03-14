<?php

//$qkursus = mysql_query("select tb_kursus.nama_kursus, tb_kursus.hari, tb_kursus.jam, tb_ruang.nama_ruang, tb_pengajar.nama_pengajar from tb_kursus
//					   left join tb_ruang on tb_kursus.id_ruang=tb_ruang.id_ruang
//					   left join tb_pengajar on tb_kursus.id_pengajar=tb_pengajar.id_pengajar");

$image1 = "./assets/icons/logo.png";
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("P","cm","A4");
$this->fpdf->SetMargins(1,1,1);
$this->fpdf->AddPage();
$this->fpdf->Image($image1, 1, 1, -300);
$this->fpdf->SetFont('Arial','',11);
$this->fpdf->Cell(2,0.5,'',0,0,'L');
$this->fpdf->Cell(19,0.5,'Laporan Jadwal Kursus',0,0,'L');
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
$this->fpdf->Line(1,3.5,19,3.5);
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->SetFont('Arial','B',10);
$this->fpdf->Cell(1 , 1, 'No.', 1, 'LR', 'C');
$this->fpdf->Cell(3 , 1, 'Nama Kursus', 1, 'LR', 'C');
$this->fpdf->Cell(2 , 1, 'Hari', 1, 'LR', 'C');
$this->fpdf->Cell(2 , 1, 'Jam', 1, 'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Ruang', 1, 'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Pengajar', 1, 'LR', 'C');
$No=0;

foreach($tb_kursus->result() as $data)
{
    $this->fpdf->Ln();
    $this->fpdf->SetFont('Arial','',9);
    $No=$No+1;
	$this->fpdf->Cell(1 , 0.7, $No, 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 0.7, $data->nama_kursus, 1, 'LR', 'C');
	$this->fpdf->Cell(2 , 0.7, $data->hari, 1, 'LR', 'C');
    $this->fpdf->Cell(2 , 0.7, $data->jam, 1, 'LR', 'C');
	$this->fpdf->Cell(5 , 0.7, $data->nama_ruang, 1, 'LR', 'L');
	$this->fpdf->Cell(5 , 0.7, $data->nama_pengajar, 1, 'LR', 'L');
}
$this->fpdf->Output();
?>
