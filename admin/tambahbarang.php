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
    <title>TAMBAH BARANG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<!-- Bagian HTML lainnya -->

<h2>Tambah Barang</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input type="number" class="form-control" name="sit">
    </div>

    <div class="form-group">
        <label>Foto Barang</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
    <button ><a href="daftarbarang.php" class="btn_cancel">cancel</a></button>
</form>

<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "assets/barang/" . $nama);

    // Prepare the SQL statement
    $stmt = $koneksi->prepare("INSERT INTO barang (nama_barang, stok_barang, harga_barang, foto_barang) VALUES (?, ?, ?, ?)");

    // Check if the prepare statement was successful
    if (!$stmt) {
        die("Error in prepare statement: " . $koneksi->error);
    }

    // Bind the parameters
    $success = $stmt->bind_param("siis", $_POST['nama'], $_POST['sit'], $_POST['harga'], $nama);

    // Check if binding parameters was successful
    if (!$success) {
        die("Error binding parameters: " . $stmt->error);
    }

    // Execute the statement
    $success = $stmt->execute();

    // Check if execution was successful
    if ($success) {
        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<script>location='daftarbarang.php';</script>";
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
}
?>
</body>