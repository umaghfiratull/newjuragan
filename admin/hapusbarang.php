<?php
include '../admin/koneksi.php';
	$ambil = $koneksi->query("SELECT * FROM master_paket WHERE id_paket='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	$fotoproduk = $pecah['foto_produk'];
		if (file_exists("assets/foto_/$fotoproduk"))
		{
			unlink("assets/foto/$fotoproduk");
		}

		$koneksi->query("DELETE FROM master_paket WHERE id_paket='$_GET[id]'");
		echo "<script>alert('Paket terhapus');</script>";
		echo "<script>location='paket.php';</script>";
?>