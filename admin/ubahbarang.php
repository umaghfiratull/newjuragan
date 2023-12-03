<h2>Ubah Barang</h2>
<?php
include 'koneksi.php';
$ambil=$koneksi->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
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
		  <label>Nama Barang</label>
		  <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_barang'];?>">
	</div>

	<div class="form-group">
		  <label>Stok Barang</label>
		  <input type="number" name="paket" class="form-control" value="<?php echo $pecah['stok_barang'];?>">
	</div>

	<div class="form-group">
		  <label>Harga (Rp)</label>
		  <input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_barang'];?>">
	<div class="form-group">
		<img src="assets/barang/<?php echo $pecah['foto_barang']?>" width="200">
	</div>

	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<button class="btn btn-primary" name="ubah"><i class="bi bi-floppy"></i> Simpan</button>
	<button ><a href="daftarbarang.php" class="btn_cancel">cancel</a></button>
</form>

<?php
		if (isset($_POST['ubah']))
		
		{
			$namafoto=$_FILES ['foto']['name'];
			$lokasifoto=$_FILES ['foto'] ['tmp_name'];
			//Jika foto dirubah

			if (!empty($lokasifoto))
			{
				move_uploaded_file($lokasifoto, "assets/barang/$namafoto");

				$koneksi->query("UPDATE barang 
									SET nama_barang='$_POST[nama]',
										stok_barang='$_POST[paket]',
										harga_barang='$_POST[harga]',
										foto_barang='$namafoto'
									WHERE id_barang='$_GET[id]'");	
			}

			else
			{
			    $koneksi->query("UPDATE barang 
									SET nama_barang='$_POST[nama]',
										stok_barang='$_POST[paket]',
										harga_barang='$_POST[harga]',
										foto_barang='$namafoto'
									WHERE id_barang='$_GET[id]'");	
			}
				echo "<script>alert('Data barang telah diubah');</script>";
				echo "<script>location='daftarbarang.php';</script>";

		}?>