<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data-TUGAS BASIS DATA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
 
	
	
	
		<div class="container mt-5 mb-5">
		<a href="index.php" class="btn btn-md btn-success mb-3">Kembali</a>
			<div class="row">
				<div class="col-md-12">
					<div class="card border-0 shadow rounded">
						<div class="card-body">
	<?php
	include 'database/koneksi.php';
	$id = $_GET['id'];

	$data = mysqli_query($koneksi, " SELECT * FROM mahasiswa WHERE id=$id ");
	while($d = mysqli_fetch_array($data)){
		?>
                        <form method="post" action="update.php" id="myForm" >                               
                            <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                <label class="font-weight-bold">NIM</label>
                                <input type="number" class="form-control " name="nim" value="<?php echo $d['nim']; ?>" placeholder="Masukkan NIM">                              
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control " name="nama" value="<?php echo $d['nama']; ?>" placeholder="Masukkan Nama">                              
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tempat Lahir</label>
                                <input type="text" class="form-control " name="tpt_lahir" value="<?php echo $d['tpt_lahir']; ?>" placeholder="Masukkan Tempat Lahir">                              
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control " name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" placeholder="Masukkan Tanggal Lahir">                              
                            </div>
                            <div class="form-group">
                                <div>
                                <label class="font-weight-bold">Jenis Kelamin</label>
                            </div>
                            <div>
                            <select class="form-control" name="jenis_kelamin">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                            </select>
                            </div>
<!-- <input type="text" class="form-control " name="Jenis_kelamin" value="" placeholder="Jenis Kelamin">                               -->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Kota Asal</label>
                                <input type="text" class="form-control " name="kota_asal" value="<?php echo $d['kota_asal']; ?>" placeholder="Masukkan Kota Asal">                              
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Penghasilan Orang Tua</label>
                                <input type="number" class="form-control " name="penghasilan_ortu" value="<?php echo $d['penghasilan_ortu']; ?>" placeholder="Masukkan Penghasilan Orang Tua">                              
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button id="linkButton" type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php
	}
	?>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>