<?php 
// koneksi database
include 'database/koneksi.php';
 
// menangkap data yang di kirim dari form
$id  = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tpt_lahir = $_POST['tpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jeniskelamin = $_POST['jenis_kelamin'];
$kota_asal = $_POST['kota_asal'];
$penghasilan_ortu = $_POST['penghasilan_ortu'];

// update data ke database
// mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id='$id'");


// mysqli_query($koneksi," UPDATE mahasiswa SET nama='$nama' WHERE id='$id'");
 
// mysqli_query($koneksi, " UPDATE mahasiswa SET nama ='$nama' WHERE id = '$id' ");

mysqli_query($koneksi, " UPDATE mahasiswa SET  nim='$nim',nama='$nama',tpt_lahir='$tpt_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jeniskelamin',kota_asal='$kota_asal',penghasilan_ortu='$penghasilan_ortu' WHERE id= $id");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>