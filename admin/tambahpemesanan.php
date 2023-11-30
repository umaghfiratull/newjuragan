<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION["admin"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAMBAH DATA PEMESANAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<!-- Bagian HTML lainnya -->

<h2>TAMBAH DATA PEMESANAN</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>ID Kependudukan</label>
        <?php
            echo "<select name=nik>
                    <option selected> Pilih Nama jamaah </option>";
                    $sql="SELECT * FROM jamaah";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
                    while ($d=$result->fetch_assoc()) {
                        echo "<option value=$d[NIK] > $d[NIK] - $d[nama_jamaah]</option>";
                    }
            echo "</select>"
        ?>
    </div>

    <div class="form-group">
        <label>ID Paket</label>
        <?php
            echo "<select name=paket>
                    <option selected> Pilih Nama paket</option>";
                    $sql="SELECT * FROM master_paket";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
                    while ($d=$result->fetch_assoc()) {
                        echo "<option value=$d[id_paket] > $d[id_paket] - $d[nama_paket]</option>";
                    }
            echo "</select>"
        ?>
    </div>
	
	<div class="form-group">
        <label>Tanggal Pemesaanan</label>
        <input type="date" class="form-control" name="tglpem">
    </div>

    <div class="form-group">
        <label>Ukuran Baju</label>
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
        <label>Dp</label>
        <input type="number" class="form-control" name="dp">
    </div>

    <div class="form-group">
        <label>Sisa</label>
        <input type="number" class="form-control" name="sisa">
    </div>
	
	<div class="form-group">
        <label>Agen Keberangkatan</label>
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

    <button class="btn btn-primary" name="save">Simpan</button>
    <button ><a href="pemesanan.php" class="btn_cancel">cancel</a></button>
</form>

<?php
if (isset($_POST['save'])) {
    // Prepare the SQL statement
    $stmt = $koneksi->prepare("INSERT INTO pemesanan (NIK, tgl_pemesanan, ukuran_baju, jenis_pembayaran, Dp_pembayaran, sisa_pembayaran) VALUES (?, ?, ?, ?, ?, ?)");

    // Check if the prepare statement was successful
    if (!$stmt) {
        die("Error in prepare statement: " . $koneksi->error);
    }

    // Bind the parameters
    $success = $stmt->bind_param("ssiiii", $_POST['nik'], $_POST['tglpem'], $_POST['baju'], $_POST['jnspem'], $_POST['dp'], $_POST['sisa']);

    // Check if binding parameters was successful
    if (!$success) {
        die("Error binding parameters: " . $stmt->error);
    }

    // Execute the statement
    $success = $stmt->execute();

    // Check if execution was successful
    if ($success) {
        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<script>location='pemesanan.php';</script>";
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
}
?>
</body>