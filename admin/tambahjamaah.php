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
    <title>TAMBAH DATA JAMAAH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<!-- Bagian HTML lainnya -->

<h2>TAMBAH DATA JAMAAH</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Id Kependudukan</label>
        <input type="number" class="form-control" name="nik">
    </div>

    <div class="form-group">
        <label>Nama Jamaah</label>
        <input type="text" class="form-control" name="nama">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="almt">
    </div>

    <div class="form-group">
        <label>Nomor Telepon / WA</label>
        <input type="number" class="form-control" name="tlp">
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgllhr">
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <?php
            echo "<select name=jnskel>
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value='1'>Laki - Laki</option>
                        <option value='2'>Perempuan</option>
                    </select>";
        ?>
    </div>

    <div class="form-group">
        <label>Nama Ayah</label>
        <input type="text" class="form-control" name="ortu">
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

    <button class="btn btn-primary" name="save">Simpan</button>
    <button ><a href="datajamaah.php" class="btn_cancel">cancel</a></button>
</form>

<?php
if (isset($_POST['save'])) {
    // Prepare the SQL statement
$stmt = $koneksi->prepare("INSERT INTO jamaah (NIK, nama_lengkap, alamat, no_telepon, tgl_lahir, jenis_kelamin, id_agen, nama_bapak)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");


// Check if the prepare statement was successful
if (!$stmt) {
    die("Error in prepare statement: " . $koneksi->error);
}

// Bind the parameters
$success = $stmt->bind_param("sssissss", $_POST['nik'], $_POST['nama'], $_POST['almt'], $_POST['tlp'], $_POST['tgllhr'], $_POST['jnskel'], $_POST['agen'], $_POST['ortu']);

// Check if binding parameters was successful
if (!$success) {
    die("Error binding parameters: " . $stmt->error);
}

// Execute the statement
$success = $stmt->execute();

// Check if execution was successful
if ($success) {
    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<script>location='datajamaah.php';</script>";
} else {
    die("Error executing statement: " . $stmt->error);
}

// Close the statement
$stmt->close();
}
?>
</body>