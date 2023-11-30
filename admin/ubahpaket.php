<h2>Ubah Produk</h2>
<?php
include 'koneksi.php';
$ambil=$koneksi->query("SELECT * FROM master_paket WHERE id_paket='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		  <label>Nama Paket</label>
		  <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_paket'];?>">
	</div>

	<div class="form-group">
		  <label>Pilihan Paket</label>
		  <input type="text" name="paket" class="form-control" value="<?php echo $pecah['pilihan_paket'];?>">
	</div>

	<div class="form-group">
		  <label>Harga (Rp)</label>
		  <input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_paket'];?>">
	</div>

	<div class="form-group">
		  <label>Lama Keberangkatan</label>
		  <input type="number" class="form-control" name="lama" value="<?php echo $pecah['lama_waktu'];?>">
	</div>

	<div class="form-group">
		  <label>seat</label>
		  <input type="number" class="form-control" name="sit" value="<?php echo $pecah['seat'];?>">
	</div>

	<div class="form-group">
		<img src="assets/foto/<?php echo $pecah['foto_paket']?>" width="200">
	</div>

	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_paket']; ?></textarea>
	</div>
	<button class="btn btn-primary" name="ubah"><i class="bi bi-floppy"></i> Simpan</button>
	<button ><a href="paket.php" class="btn_cancel">cancel</a></button>
</form>

<?php
		if (isset($_POST['ubah']))
		
		{
			$namafoto=$_FILES ['foto']['name'];
			$lokasifoto=$_FILES ['foto'] ['tmp_name'];
			//Jika foto dirubah

			if (!empty($lokasifoto))
			{
				move_uploaded_file($lokasifoto, "assets/foto/$namafoto");

				$koneksi->query("UPDATE master_paket 
									SET nama_paket='$_POST[nama]',
										pilihan_paket='$_POST[paket]',
										harga_paket='$_POST[harga]',
										lama_waktu='$_POST[lama]',
										seat='$_POST[sit]',
										foto_paket='$namafoto',
										deskripsi_paket='$_POST[deskripsi]' 
									WHERE id_paket='$_GET[id]'");	
			}

			else
			{
			    $koneksi->query("UPDATE master_paket 
									SET nama_paket='$_POST[nama]',
										pilihan_paket='$_POST[paket]',
										harga_paket='$_POST[harga]',
										lama_waktu='$_POST[lama]',
										seat='$_POST[sit]',
										foto_paket='$namafoto',
										deskripsi_paket='$_POST[deskripsi]' 
									WHERE id_paket='$_GET[id]'");	
			}
				echo "<script>alert('Data produk telah diubah');</script>";
				echo "<script>location='paket.php';</script>";

		}?>