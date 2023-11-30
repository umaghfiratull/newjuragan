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
    <title>TAMBAH DATA MUTAWWIF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<!-- Bagian HTML lainnya -->

<h2>TAMBAH DATA MUTAWWIF</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Mutawwif</label>
        <input type="text" class="form-control" name="nama">
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" class="form-control" name="ket">
    </div>

    <div class="form-group">
        <label>Foto Mutawwif</label>
        <input type="file" class="form-control" name="foto">
    </div>

    <button class="btn btn-primary" name="save">Simpan</button>
    <button ><a href="mutawwif.php" class="btn_cancel">cancel</a></button>
</form>

<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "assets/mutawwif/" . $nama);

    // Prepare the SQL statement
    $stmt = $koneksi->prepare("INSERT INTO mutawwif (nama_mutawwif, keterangan_mutawwif, foto_mutawwif) VALUES (?, ?, ?)");

    // Check if the prepare statement was successful
    if (!$stmt) {
        die("Error in prepare statement: " . $koneksi->error);
    }

    // Bind the parameters
    $success = $stmt->bind_param("sss", $_POST['nama'], $_POST['ket'], $nama);

    // Check if binding parameters was successful
    if (!$success) {
        die("Error binding parameters: " . $stmt->error);
    }

    // Execute the statement
    $success = $stmt->execute();

    // Check if execution was successful
    if ($success) {
        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<script>location='mutawwif.php';</script>";
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
}
?>
</body>