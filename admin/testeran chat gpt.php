<?php
session_start();
// Skrip Koneksi
include '../admin/koneksi.php';

if (!isset($_SESSION["admin"])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<h2 style= "color:#022457"><b> Data Produk </b></h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID Pesanan</th>
			<th>Tanggal Pemesanan</th>
			<th>NIK</th>
			<th>ID Paket</th>
			<!-- <th>harga</th>
			<th>berat</th>
			<th>foto</th>
			<th>aksi</th> -->
		</tr>
	</thead>
	<tbody>

		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pemesanan"); ?>
		<?php while($pecah = $ambil -> fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['id_pemesanan']; ?></td>
			<td><?php echo $pecah['tgl_pemesanan']; ?></td>
			<td><?php echo $pecah['NIK']; ?></td>
			<td><?php echo $pecah['id_paket']; ?></td>
			<!-- <td><?php echo $pecah['berat_produk']; ?></td> -->
			<!-- <td>
				<img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
			</td> -->
			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-danger btn"><i class="bi bi-trash"></i> </a>
				<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>


<a href="index.php?halaman=tambahproduk" class = "btn btn-primary"><i class="bi bi-person-plus-fill"></i> Tambah Data</a>
<script src="assets/js/jquery-1.10.2.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>

    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>

    <script src="assets/js/custom.js"></script>