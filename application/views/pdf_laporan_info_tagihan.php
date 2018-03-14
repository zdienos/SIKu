<?php
$image1 = "./assets/icons/logo.png";
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("P","cm","A4");
$this->fpdf->SetMargins(1,1,1);
$this->fpdf->AddPage();
$this->fpdf->Image($image1, 1, 1, -300);
$this->fpdf->SetFont('Arial','',11);
$this->fpdf->Cell(2,0.5,'',0,0,'L');
$this->fpdf->Cell(19,0.5,'Info Tagihan Pembayaran',0,0,'L');
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

//$id_peserta = $_POST['id_peserta'];
//$qnama = mysqli_query("select nama_peserta from tb_peserta where id_peserta='" . $id_peserta . "'");

$this->fpdf->SetFont('Arial','',10);
$this->fpdf->Cell(2,0.5,'Kepada', 0,0, 'L');
$this->fpdf->Ln();
$this->fpdf->Cell(2,0.5,'Yth. Sdr/i', 0,0, 'L');

//while($data = mysql_fetch_object($qnama))
//{
$this->fpdf->Cell(2,0.5, $peserta->nama_peserta, 0,0, 'L');
$this->fpdf->Ln();
//}


$this->fpdf->Cell(2,0.5,'di', 0,0, 'L');
$this->fpdf->Ln();
$this->fpdf->Cell(2,0.5,'Tempat.', 0,0, 'L');
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Cell(2,0.7,'Dengan hormat,', 0,0, 'L');
$this->fpdf->Ln();
//$qnamakursus = mysql_query("select tb_peserta.id_peserta, tb_kursus.nama_kursus from tb_peserta
//					        left join tb_kursus on tb_kursus.id_kursus=tb_peserta.id_kursus
//					        where tb_peserta.id_peserta='".$id_peserta."'");
//while($data1 = mysql_fetch_object($qnamakursus))
//{

$this->fpdf->Cell(20,0.5,'Bersama ini kami sampaikan info tagihan pembayaran iuran kursus '. $kursus->nama_kursus.' yang saudara/i ikuti.', 0,0, 'L');
$this->fpdf->Ln();
//}
$this->fpdf->Cell(20,0.5,'Menurut catatan keuangan kami, saudara/i telah melakukan pembayaran dengan rincian sebagai berikut :', 0,0, 'L');
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Cell(1,0.5,'No.',1,0, 'C');
$this->fpdf->Cell(5,0.5,'No.Bukti',1,0, 'C');
$this->fpdf->Cell(5,0.5,'Tanggal Transaksi',1,0, 'C');
$this->fpdf->Cell(8,0.5,'Jumlah [Rp.]',1,0, 'C');
$this->fpdf->Ln();

//$qrincianpembayaran = mysql_query("select * from tb_pembayaran where id_peserta='".$id_peserta."'");
$No=0;
$totalbayar=0;

//while($data2 = mysql_fetch_object($qrincianpembayaran))
foreach($pembayaran as $d)
{
$No=$No+1;
$totalbayar = $totalbayar + $d->jumlah;
$this->fpdf->Cell(1,0.5,$No,1,0, 'C');
$this->fpdf->Cell(5,0.5,$d->no_bukti,1,0, 'C');
$this->fpdf->Cell(5,0.5,$d->tgl_bayar,1,0, 'C');
$this->fpdf->Cell(8,0.5,number_format($d->jumlah,2,",","."),1,0, 'R');
$this->fpdf->Ln();
}
$this->fpdf->Cell(11,0.7,'Total Pembayaran [Rp.]',1,0, 'L');

//$qtotalbayar = mysql_query("select sum(jumlah) as total from tb_pembayaran where id_peserta='".$id_peserta."'");
//while($data3 = mysql_fetch_object($qtotalbayar))
//{
$this->fpdf->Cell(8,0.7,number_format($totalbayar,2,",","."),1,0, 'R');
$this->fpdf->Ln();
$this->fpdf->Ln();
//}


//$qtagihan = mysql_query("select tb_peserta.id_peserta, tb_kursus.biaya_kursus from tb_peserta
//					     left join tb_kursus on tb_kursus.id_kursus=tb_peserta.id_kursus
//					     where tb_peserta.id_peserta='".$id_peserta."'");
//while($data4 = mysql_fetch_object($qtagihan))
//{
$this->fpdf->Cell(20,0.5,'Sementara jumlah biaya yang harus saudara/i bayar adalah sebesar Rp. '.number_format($tagihan->biaya_kursus,2,",","."), 0,0, 'L');
$this->fpdf->Ln();
//}

//fungsi pengurangan total tagihan dikurangi total pembayaran
//$Totalbayar = mysql_query("select sum(jumlah) as total from tb_pembayaran where id_peserta='".$id_peserta."'");
//$row= mysql_fetch_array($Totalbayar);
//$sumtotalbayar= $row['total'];
//$Totaltagihan = mysql_query("select tb_peserta.id_peserta, tb_kursus.biaya_kursus from tb_peserta
//					         left join tb_kursus on tb_kursus.id_kursus=tb_peserta.id_kursus
//					         where tb_peserta.id_peserta='".$id_peserta."'");
//$row= mysql_fetch_array($Totaltagihan);
//$sumtotaltagihan= $row['biaya_kursus'];
$totaltagihan = $tagihan->biaya_kursus;
$sisa=$totaltagihan-$totalbayar;

$this->fpdf->Cell(20,0.5,'Sehingga sisa tagihan yang harus saudara/i bayar adalah sebesar Rp. '.number_format($sisa,2,",","."), 0,0, 'L');
$this->fpdf->Ln();
$this->fpdf->Cell(20,0.5,'Untuk itu kami mohon kepada saudara/i untuk dapat segera melunasi sisa tagihan sebagaimana dimaksud.', 0,0, 'L');
$this->fpdf->Ln();
$this->fpdf->Cell(20,0.5,'Demikian pemberitahuan ini kami sampaikan. Atas perhatiannya kami sampaikan terima kasih.', 0,0, 'L');
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Cell(20,0.5,'Pimpinan', 0,0, 'L');
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Ln();
$this->fpdf->Cell(20,0.5,'[Khadafi Zubaidi, S.Kom]', 0,0, 'L');






$this->fpdf->Output();
?>
