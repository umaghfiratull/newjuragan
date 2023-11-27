<h2>Ubah Produk</h2>
<?php
include 'koneksi.php';
$ambil=$koneksi->query("SELECT * FROM mutawwif WHERE id_mutawwif='$_GET[id]'");
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
		  <label>Nama Mutawwif</label>
		  <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama'];?>">
	</div>

	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="ket" class="form-control" rows="10"><?php echo $pecah['keterangan']; ?></textarea>
	</div>

	<div class="form-group">
		<img src="assets/mutawwif/<?php echo $pecah['foto']?>" width="200">
	</div>

	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<button class="btn btn-primary" name="ubah"><i class="bi bi-floppy"></i> Simpan</button>
	<button ><a href="mutawwif.php" class="btn_cancel">cancel</a></button>
</form>

<?php
		if (isset($_POST['ubah']))
		
		{
			$namafoto=$_FILES ['foto']['name'];
			$lokasifoto=$_FILES ['foto'] ['tmp_name'];
			//Jika foto dirubah

			if (!empty($lokasifoto))
			{
				move_uploaded_file($lokasifoto, "assets/mutawwif/$namafoto");

				$koneksi->query("UPDATE mutawwif 
									SET nama='$_POST[nama]',
										keterangan='$_POST[ket]',
										foto='$namafoto'
									WHERE id_mutawwif='$_GET[id]'");	
			}

			else
			{
			    $koneksi->query("UPDATE mutawwif 
									SET nama='$_POST[nama]',
										keterangan='$_POST[ket]',
										foto='$namafoto'
									WHERE id_mutawwif='$_GET[id]'");
			}
				echo "<script>alert('Data produk telah diubah');</script>";
				echo "<script>location='mutawwif.php';</script>";

		}?>