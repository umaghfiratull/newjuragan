<h2>Ubah Produk</h2>
<?php
include 'koneksi.php';
$ambil=$koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
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
		  <label>Tanggal Pemesanan</label>
		  <input type="date" name="tglpem" class="form-control" value="<?php echo $pecah['tgl_pemesanan'];?>">
	</div>

	<div class="form-group">
		  <label>Ukuran baju</label>
		  <?php
            echo "<select name=baju>
                        <option selected>Pilih Ukuran Baju</option>
                        <option value='1'>Dewasa-XXXL</option>
                        <option value='2'>Dewasa-XXL</option>
                        <option value='3'>Dewasa-XL</option>
                        <option value='4'>Dewasa-L</option>
                        <option value='5'>Dewasa-M</option>
                        <option value='6'>Dewasa-S</option>
                        <option value='7'>Dewasa-XS</option>
                        <option value='8'>Anak-XXXL</option>
                        <option value='9'>Anak-XXL</option>
                        <option value='10'>Anak-XL</option>
                        <option value='11'>Anak-L</option>
                        <option value='12'>Anak-M</option>
                        <option value='13'>Anak-S</option>
                        <option value='14'>Anak-XS</option>
                        </select>";
        ?>
	</div>

	<div class="form-group">
		<label>Jenis Pembayaran</label>
		<?php
            echo "<select name=jnspem>
                        <option selected>Pilih Jenis Pembayaran</option>
                        <option value='1'>Cash</option>
                        <option value='2'>Transfer Bank</option>
                    </select>";
        ?>
	</div>

	<div class="form-group">
		  <label>DP</label>
		  <input type="number" name="dp" class="form-control" value="<?php echo $pecah['Dp'];?>">
	</div>
	
	<div class="form-group">
		  <label>Sisa</label>
		  <input type="text" name="sisa" class="form-control" value="<?php echo $pecah['sisa_pembayaran'];?>">
	</div>
		
	<button class="btn btn-primary" name="ubah"><i class="bi bi-floppy"></i> Simpan</button>
	<button ><a href="mutawwif.php" class="btn_cancel">cancel</a></button>
</form>

<?php
		if (isset($_POST['ubah']))
		
		{
			if (!empty($lokasifoto))
			{
				move_uploaded_file($lokasifoto, "assets/mutawwif/$namafoto");

				$koneksi->query("UPDATE pemesanan 
								SET id_pemesanan='$_POST[id]',
									tgl_pemesanan='$_POST[tglpem]',
									ukuran_baju='$_POST[baju]',
									jenis_pembayaran='$_POST[jnspem]',
									Dp='$_POST[dp]',
									sisa_pembayaran='$_POST[sisa]'
								WHERE id_pemesanan='$_GET[id]'");	
			}

			else
			{
			    $koneksi->query("UPDATE pemesanan 
								SET id_pemesanan='$_POST[id]',
									tgl_pemesanan='$_POST[tglpem]',
									ukuran_baju='$_POST[baju]',
									jenis_pembayaran='$_POST[jnspem]',
									Dp='$_POST[dp]',
									sisa_pembayaran='$_POST[sisa]'
								WHERE id_pemesanan='$_GET[id]'");
			}
				echo "<script>alert('Data produk telah diubah');</script>";
				echo "<script>location='pemesanan.php';</script>";

		}?>