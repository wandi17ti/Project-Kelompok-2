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
$pdf->Cell(190,7,'Turnamen Dota 2 - Kompatibel Online Dota 2',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->Image('td1.jpg',63,25,90);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(190,7,'Dota 2 Tournament - Kompatible Online Dota 2 starts on September 14 2018',0,1,'C');
$pdf->Cell(190,7,'Registration will be closed on 12 September 2018',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(90,7,'Dota 2 Tournament - Kompatible Online Dota 2',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(90,7,'- Detail Turnamen :',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,7,'Match Day: 14-16 September 2018',0,1,'L');
$pdf->Cell(90,7,'Registration will be closed on 12 September 2018',0,1,'L');
$pdf->Cell(90,7,'TM on September 13, 2018, at 20:00 WIB via Line group',0,1,'L');
$pdf->Cell(90,7,'IDR 50,000 registration fee / slot',0,1,'L');
$pdf->Cell(90,7,'Registration link: https://goo.gl/forms/QlLnrADqvtZlyS2q1',0,1,'L');
$pdf->Cell(90,7,'Venue: Online',0,1,'L');
$pdf->Cell(90,7,'Open 128 Slot',0,1,'L');
$pdf->Cell(90,7,'Multi Slot On',0,1,'L');
$pdf->Cell(90,7,'Double Winner Allowed',0,1,'L');
$pdf->Cell(90,7,'No Max Medal',0,1,'L');
$pdf->Cell(90,7,'Tier 1-2 Indonesian team banned',0,1,'L');
$pdf->Cell(90,7,'Single Elimination Mode',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(90,7,'- Hadiah :',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,7,'Juara 1 : Rp. 3.000.000,- + 5 Kaos KOD2',0,1,'L');
$pdf->Cell(90,7,'Juara 2 : Rp. 2.000.000,- + 5 Kaos KOD2',0,1,'L'); 
$pdf->Cell(90,7,'Juara 3 : Rp. 1.000.000,- + 5 Kaos KOD2',0,1,'L');
$pdf->Cell(90,7,'*Hadiah bisa berubah sesuai dengan jumlah peserta',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(90,7,'- Pendaftaran :',0,1,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,7,'Transfer ke rekening BRI 0403-01-023760-50-8 a/n Sri Maulidani',0,1,'L');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(90,7,'- Contact Person :',0,1,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,7,'WA : 087758497402',0,1,'L');
$pdf->Image('td1b.jpg',63,315,90);
$pdf->Output();
?>