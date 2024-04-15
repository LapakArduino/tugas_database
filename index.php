<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Basis Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="tambah.php" class="btn btn-md btn-success mb-3">TAMBAH MAHASISWA</a>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Penghasilan Ortu</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
		include 'database/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi," SELECT * , CONCAT('Rp. ', FORMAT(penghasilan_ortu,0,'id_ID')) AS
        gaji FROM mahasiswa");

		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tpt_lahir']; ?></td>
                <td><?php echo $d['tgl_lahir']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['gaji']; ?></td>
				<td>
           
					<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-info mr-2">EDIT</a>
                    
                    <a href="hapus.php?id=<?php echo $d['id']; ?>"class="btn btn-sm btn-danger" id="id_hapus">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
                              
                               
                            </tbody>
                          </table>  
                          
                    </div>
                    <?php
                include 'footer.php'
                ?>
                </div>


               

            </div>

            
        </div>

    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
       $(document).ready(function() {
   
$('#id_hapus').click(function() {
   // show when the button is clicked
   toastr.info('Data Terhapus');

});

}); //message with toastr
    </script>

</body>
</html>