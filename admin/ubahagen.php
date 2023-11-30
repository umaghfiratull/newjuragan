<h2>Ubah Data Agen</h2>
<?php
include 'koneksi.php';
$ambil=$koneksi->query("SELECT * FROM agen WHERE nama='$_GET[id]'");
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
        <label>Nama Agen</label>
        <input type="text" class="form-control" name="nama">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="pass">
    </div>
    <button class="btn btn-primary" name="ubah">Simpan</button>
    <button ><a href="dataagen.php" class="btn_cancel">cancel</a></button>
</form>

<?php
		if (isset($_POST['ubah']))
		
		{
			$namafoto=$_FILES ['foto']['name'];
			$lokasifoto=$_FILES ['foto'] ['tmp_name'];
			//Jika foto dirubah

			if (!empty($lokasifoto))
			{
				move_uploaded_file($lokasifoto, "assets/agen/$namafoto");

				$koneksi->query("UPDATE agen 
								SET nama='$_POST[nama]',
									email='$_POST[email]',
									password='$_POST[pass]',
									WHERE nama='$_GET[id]'");	
			}

			else
			{
			    $koneksi->query("UPDATE agen 
								SET nama='$_POST[nama]',
									email='$_POST[email]',
									password='$_POST[pass]',
									WHERE nama='$_GET[id]'");
			}
				echo "<script>alert('Data Agen telah diubah');</script>";
				echo "<script>location='dataagen.php';</script>";

		}?>