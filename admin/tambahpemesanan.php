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
        <label>Nama Jamaah</label>
        <?php
            echo "<select name=nama>
                    <option selected> Pilih Paket Keberangkatan </option>";
                    $sql="SELECT * FROM jamaah";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
                    while ($d=$result->fetch_assoc()) {
                        echo "<option value=$d[NIK] > $d[NIK] - $d[nama_lengkap]</option>";
                    }
            echo "</select>"
        ?>
    </div>

    <div class="form-group">
        <label>Pilih Paket</label>
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
        <label>tanggal keberangkatan</label>
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
        <label>Status</label>
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
        <label>Dp</label>
        <input type="number" class="form-control" name="sit">
    </div>

    <div class="form-group">
        <label>Sisa</label>
        <input type="number" class="form-control" name="sit">
    </div>

    <!-- <div>
        <?php
                    $sql="SELECT harga FROM master_paket WHERE id_paket=''";
                    if (!$result = $koneksi->query($sql)) {
                        die('There was an error running the query [' .$koneksi->error. ']');
                    }
            echo "</select>"
        ?>
    </div>

    <script>
        function performSubtraction() {
            // Get the values from the input fields
            var value1 = parseFloat(document.getElementById('sit').value) || 0;
            var value2 = parseFloat(document.getElementById('input2').value) || 0;

            // Perform the subtraction
            var result = value1 - value2;

            // Display the result in the 'result' input field
            document.getElementById('result').value = result;
        }
    </script> -->

    <button class="btn btn-primary" name="save">Simpan</button>
    <button ><a href="paket.php" class="btn_cancel">cancel</a></button>
</form>

<?php
if (isset($_POST['save'])) {
    // Prepare the SQL statement
    $stmt = $koneksi->prepare("INSERT INTO pemesanan (nama_paket, pilihan_paket, harga, lama_waktu, seat, foto_produk, deskripsi_produk) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Check if the prepare statement was successful
    if (!$stmt) {
        die("Error in prepare statement: " . $koneksi->error);
    }

    // Bind the parameters
    $success = $stmt->bind_param("ssiiiss", $_POST['nama'], $_POST['paket'], $_POST['harga'], $_POST['lama'], $_POST['sit'], $nama, $_POST['deskripsi']);

    // Check if binding parameters was successful
    if (!$success) {
        die("Error binding parameters: " . $stmt->error);
    }

    // Execute the statement
    $success = $stmt->execute();

    // Check if execution was successful
    if ($success) {
        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<script>location='paket.php';</script>";
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
}
?>
</body>