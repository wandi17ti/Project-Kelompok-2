<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm',array(450,220));
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'Dota 2 Tournament - MOVING ON',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->Image('td2.jpg',63,25,90);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(190,7,'Dota 2 Tournament - MOVING ON begins August 17, 2018',0,1,'C');
$pdf->Cell(190,7,'Registration will close on August 16, 2018',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(90,7,'Dota 2 Tournament - MOVING ON',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(90,7,'- Detail Turnamen :',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,7,'Match Day :',0,1,'L');
$pdf->Cell(90,7,'1. 17 Agustus 2018, Jam 15:00 - 23:00 WIB',0,1,'L');
$pdf->Cell(90,7,'2. 18 Agustus 2018, Jam 15:00 - 23:00 WIB',0,1,'L');
$pdf->Cell(90,7,'3. 19 Agustus 2018, Jam 10:00 WIB - Selesai',0,1,'L');
$pdf->Cell(90,7,'Pendaftaran akan ditutup tanggal 16 Agustus 2018, Jam 23:00 WIB',0,1,'L');
$pdf->Cell(90,7,'TM tanggal 16 Agustus 2018, Jam 20:00 WIB di Grup Line',0,1,'L');
$pdf->Cell(90,7,'Biaya pendaftaran IDR 50.000,- / Slot',0,1,'L');
$pdf->Cell(90,7,'Link pendaftaran : https://goo.gl/forms/AbujHQWaaLvNGZwJ2',0,1,'L');
$pdf->Cell(90,7,'Venue : Online',0,1,'L');
$pdf->Cell(90,7,'Min 85 Slot | Max 128 Slot',0,1,'L');
$pdf->Cell(90,7,'Multi Slot Allowed (Max 2)',0,1,'L');
$pdf->Cell(90,7,'Double Winners Allowed',0,1,'L');
$pdf->Cell(90,7,'Max Medal Ancient Bintang 5 | TBD di harapakan buka dulu',0,1,'L');
$pdf->Cell(90,7,'BAN SEMUA YANG PERNAH JUARA DI TOURNAMENT MOVING ON',0,1,'L');
$pdf->Cell(90,7,'Tim yang sudah terdaftar : https://m.facebook.com/story.php?story_fbid=1894227517294724&id=296970603687098',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(90,7,'- Hadiah :',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,7,'Juara 1 : Rp. 2.500.000,-',0,1,'L');
$pdf->Cell(90,7,'Juara 2 : Rp. 1.000.000,-',0,1,'L'); 
$pdf->Cell(90,7,'Juara 3 : Rp. 500.000,-',0,1,'L');
$pdf->Cell(90,7,'*Hadiah bisa berubah sesuai dengan jumlah peserta',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(90,7,'- Pendaftaran :',0,1,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,7,'BCA - 6900142551 a/n Mochamad Iqbal Alsyamsi',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(90,7,'- Contact Person :',0,1,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,7,'WA : 081213866722',0,1,'L');
$pdf->Cell(90,7,'Line : liem.us / 3rigaming',0,1,'L');
$pdf->Image('td2b.jpg',63,330,90);
$pdf->Output();
?>