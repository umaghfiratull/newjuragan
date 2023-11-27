<h2>Ubah Produk</h2>
<?php
include 'koneksi.php';
$ambil=$koneksi->query("SELECT * FROM jamaah WHERE NIK='$_GET[id]'");
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
		  <label>ID Kependudukan</label>
		  <input type="number" name="nik" class="form-control" value="<?php echo $pecah['NIK'];?>">
	</div>

	<div class="form-group">
		  <label>Nama Jamaah</label>
		  <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_lengkap'];?>">
	</div>

	<div class="form-group">
		<label>alamat</label>
		<textarea name="almt" class="form-control" rows="10"><?php echo $pecah['alamat']; ?></textarea>
	</div>

	<div class="form-group">
		  <label>No Telepon / WA</label>
		  <input type="number" name="tlp" class="form-control" value="<?php echo $pecah['no_telepon'];?>">
	</div>
	<div class="form-group">
		  <label>Tanggal Lahir</label>
		  <input type="date" name="tgllhr" class="form-control" value="<?php echo $pecah['tgl_lahir'];?>">
	</div>
	<div class="form-group">
		  <label>Jenis Kelamin</label>
		  <input type="text" name="jnskel" class="form-control" value="<?php echo $pecah['jenis_kelamin'];?>">
	</div>
	<div class="form-group">
		  <label>Nama Ayah</label>
		  <input type="text" name="ortu" class="form-control" value="<?php echo $pecah['nama_bapak'];?>">
	</div>
	<div class="form-group">
        <label>Nama Agen</label>
        <?php
            echo "<select name=agen>
                    <option selected> Pilih Nama Agen </option>";
                    $sql="SELECT * FROM agen";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
                    while ($d=$result->fetch_assoc()) {
                        echo "<option value=$d[id_agen] > $d[id_agen] - $d[nama]</option>";
                    }
            echo "</select>"
        ?>
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

				$koneksi->query("UPDATE jamaah 
								SET NIK='$_POST[nik]',
									nama_lengkap='$_POST[nama]',
									alamat='$_POST[almt]',
									no_telepon='$_POST[tlp]',
									tgl_lahir='$_POST[tgllhr]',
									jenis_kelamin='$_POST[jnskel]',
									nama_bapak='$_POST[ortu]',
									id_agen='$_POST[agen]'
								WHERE NIK='$_GET[id]'");	
			}

			else
			{
			    $koneksi->query("UPDATE jamaah 
								SET NIK='$_POST[nik]',
									nama_lengkap='$_POST[nama]',
									alamat='$_POST[almt]',
									no_telepon='$_POST[tlp]',
									tgl_lahir='$_POST[tgllhr]',
									jenis_kelamin='$_POST[jnskel]',
									nama_bapak='$_POST[ortu]',
									id_agen='$_POST[agen]'
								WHERE NIK='$_GET[id]'");
			}
				echo "<script>alert('Data produk telah diubah');</script>";
				echo "<script>location='datajamaah.php';</script>";

		}?>