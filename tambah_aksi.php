<?php 
// koneksi database
include 'database/koneksi.php';
 
// menangkap data yang di kirim dari form

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tpt_lahir = $_POST['tpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jeniskelamin = $_POST['jenis_kelamin'];
$kota_asal = $_POST['kota_asal'];
$penghasilan_ortu = $_POST['penghasilan_ortu'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('','$nim','$nama','$tpt_lahir','$tgl_lahir','$jeniskelamin','$kota_asal','$penghasilan_ortu')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>