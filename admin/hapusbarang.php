<?php
include '../admin/koneksi.php';
	$ambil = $koneksi->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	$fotoproduk = $pecah['foto_barang'];
		if (file_exists("assets/barang/$fotoproduk"))
		{
			unlink("assets/barang/$fotoproduk");
		}

		$koneksi->query("DELETE FROM barang WHERE id_barang='$_GET[id]'");
		echo "<script>alert('Barang terhapus');</script>";
		echo "<script>location='daftarbarang.php';</script>";
?>