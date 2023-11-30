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
    <title>TAMBAH DATA KEBERANGKATAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<!-- Bagian HTML lainnya -->

<h2>Tambah Data Keberangkatan</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Paket</label>
        <?php
            echo "<select name=paket>
                    <option selected> Pilih Paket Keberangkatan </option>";
                    $sql="SELECT * FROM master_paket";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
                    while ($d=$result->fetch_assoc()) {
                        echo "<option value=$d[id_paket] > $d[nama_paket]</option>";
                    }
            echo "</select>"
        ?>
    </div>

    <div class="form-group">
        <label>Tanggal Keberangkatan</label>
        <?php
            echo "<select name=tgl>
                    <option selected> Pilih Paket Keberangkatan </option>";
                    $sql="SELECT * FROM master_paket";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
                    while ($d=$result->fetch_assoc()) {
                        echo "<option value=$d[id_paket] > $d[tgl_pkt]</option>";
                    }
            echo "</select>"
        ?>
    </div>

    <div class="form-group">
        <label>Status Keberangkatan</label>
        <?php
            echo "<select name=stts>
                        <option selected>Pilih Status Keberangkatan</option>
                        <option value='1'>Belum Berangkat</option>
                        <option value='2'>Sedang Berangkat</option>
                        <option value='3'>Selesai Berangkat</option>
                    </select>";
        ?>
    </div>

    <div class="form-group">
        <label>Harga (Rp)</label>
        <?php
            echo "<select name=hrga>
                    <option selected> Pilih Paket Keberangkatan </option>";
                    $sql="SELECT * FROM master_paket";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
                    while ($d=$result->fetch_assoc()) {
                        echo "<option value=$d[id_paket] > $d[nama_paket] - $d[harga]</option>";
                    }
            echo "</select>"
        ?>
    </div>

    <div class="form-group">
        <label>Pemesanan</label>
        <?php
            echo "<select name=pemesanan>
                    <option selected> Pilih pemesan </option>";
                    $sql="SELECT
                                pemesanan.id_pemesanan,
                                jamaah.nama_lengkap,
                                master_paket.nama_paket,
                                pemesanan.jenis_pembayaran,
                                pemesanan.tgl_pemesanan,
                                detail_pemesanan.status_pemesanan,
                                pemesanan.Dp,
                                pemesanan.sisa
                            FROM
                                pemesanan
                            JOIN
                                jamaah ON pemesanan.NIK = jamaah.NIK
                            JOIN
                                detail_pemesanan ON pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan
                            JOIN
                                master_paket ON pemesanan.id_paket = master_paket.id_paket;";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
                    while ($d=$result->fetch_assoc()) {
                        echo "<option value=$d[id_pemesanan] > $d[NIK] - $d[nama_lengkap]</option>";
                    }
            echo "</select>"
        ?>
    </div>

    <button class="btn btn-primary" name="save">Simpan</button>
    <button ><a href="paket.php" class="btn_cancel">cancel</a></button>
</form>

<?php
if (isset($_POST['save'])) {
    // Prepare the SQL statement
$stmt = $koneksi->prepare("INSERT INTO keberangkatan (id_paket, tgl_keberangkatan, status, harga, id_pemesanan)
                            VALUES (?, ?, ?, ?, ?)");


// Check if the prepare statement was successful
if (!$stmt) {
    die("Error in prepare statement: " . $koneksi->error);
}

// Bind the parameters
$success = $stmt->bind_param("sssis", $_POST['paket'], $_POST['tgl'], $_POST['stts'], $_POST['hrga'], $_POST['pemesanan']);

// Check if binding parameters was successful
if (!$success) {
    die("Error binding parameters: " . $stmt->error);
}

// Execute the statement
$success = $stmt->execute();

// Check if execution was successful
if ($success) {
    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<script>location='keberangkatan.php';</script>";
} else {
    die("Error executing statement: " . $stmt->error);
}

// Close the statement
$stmt->close();
}
?>
</body>