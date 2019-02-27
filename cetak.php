<?php
//koneksi ke database
ob_start();
define('FPDF_FONTPATH','fpdf/font/');
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->Open();
$pdf->AddPage('L','A5');


if(isset($_POST['cetak'])){
//Set margin dan font

//Teks di tengah atas untuk judul header
$pdf->SetFont('Arial','',20);
$pdf->Text(70, 13,'STRUK PEMBELIAN');
$pdf->Text(71, 20,'TIKET KERETA API');
$pdf->SetFont('Arial','',11);
$pdf->Text(40, 26,'PT READY E-TICKETING Jl. Yang Tak Terlihat 3C-4D Jakarta 11810');
$pdf->Text(58, 31,'www.readyticketing.com   Telp. (021) 678 654321');
$pdf->Image('media/about/about1.png',15,52,180,34);
//Garis atas untuk header    
    
$pdf->line(10, 34, 200, 34);

//Garis bawah untuk footer
$pdf->line(10, 64, 200, 64);
$pdf->line(10, 81, 200, 81);
$pdf->line(10, 90, 200, 90);

//Teks kiri bawah

// Baca input tanggal yang dikirimkan user

$pdf->Image('media/about/about2.png',162,8,45,20);
$pdf->Image('media/about/about3.png',3,8,40,20);
//Menampilkan isi dari database
if(session_status()==PHP_SESSION_NONE||session_id()==''){
    session_start();
}
    
    include('cek.php');
$eemail=$_SESSION['email'];
include('koneksi.php');
$esql="select * from penumpang where email='$eemail'";
$ehsl=mysqli_query($koneksi,$esql);
        while($data=mysqli_fetch_assoc($ehsl)){
            $namae=$data['nama'];
            $telpe=$data['telp'];
            $ide=$data['user_id'];
        
        }
$pdf->SetFont('Courier','B',11);
$pdf->Text(15,40,"KODE ID TIKET      : RETKA-$ide");
$pdf->SetFont('Courier','',11);
    
date_default_timezone_set('Asia/Jakarta');
$pdf->Text(118,40,'Tanggal Pemesanan  :' . date( ' d-m-Y'));
$pdf->Text(118,45,'Waktu Pemesanan    :' . date( ' H:i:s'));
//Koneksi ke database dan tampilkan datanya
$dari=mysqli_real_escape_string($koneksi,$_POST['dari']);
$ke=mysqli_real_escape_string($koneksi,$_POST['ke']);
$jmh=mysqli_real_escape_string($koneksi,$_POST['jmh']);
$kls=mysqli_real_escape_string($koneksi,$_POST['kls']);    
list($y,$m,$d)=explode('-',$_POST['tgl']);
//Format Menampilkan data di Pdf
$pdf->Text(15,45,"Tanggal berangkat  : $d-$m-$y");
$pdf->Text(15,50,"Stasiun berangkat  : $dari");
$pdf->Text(15,55,"Stasiun tujuan     : $ke");
$pdf->Text(15,60,"Jenis Kereta       : $kls");
$pdf->Text(118,50,"Nama Pemesan       : $namae");
$pdf->Text(118,55,"No. Telepon        : $telpe");
    
    
$pdf->Text(15,68,"              JUMLAH PENUMPANG              HARGA                    JUMLAH");


$sql="SELECT harga FROM harga WHERE kelas=\"$kls\"";
$hsl=mysqli_query($koneksi,$sql);
        while($data=mysqli_fetch_assoc($hsl)){
            $harga=$data['harga'];
$tot=$jmh*$harga;
$admin=8000;
function format_rupiah($angka){
    $rupiah=number_format($angka,0,',','.');
    return $rupiah;
}
$rpharga=format_rupiah($harga); 
$rptot=format_rupiah($tot);                        
$rpadm=format_rupiah($admin);                        
$pdf->Text(15,74,"Tiket                 $jmh                  Rp $rpharga               Rp $rptot");
$pdf->Text(15,79,"Admin                                     Rp $rpadm                  Rp $rpadm");
$bayar=$admin+$tot;
$rpbayar=format_rupiah($bayar);
            $pdf->SetFont('Courier','B',11);
$pdf->Text(15,85,"Total Bayar                                                       Rp $rpbayar");

            
$pdf->SetFont('Arial','I',9);
$pdf->Text(15,95,"Struk ini tidak berlaku sebagai tiket.");
$pdf->Text(15,99,"Struk ini harus ditukar dengan tiket asli di Stasiun KA-Online dengan memasukan Kode Id Tiket paling lambat 1 jam sebelum");
$pdf->Text(15,103,"keberangkatan.");
$pdf->Text(15,107,"Untuk informasi lebih lanjut hubungi Contact Center PT KAI di 021-121314.");




// Penomoran halaman

        }
}
$pdf->Ln();
$pdf->Output('Tiket KA - READY E-Ticketing.pdf','I');
?>