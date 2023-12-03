<?php
include '../admin/koneksi.php';
	$ambil = $koneksi->query("SELECT * FROM mutawwif WHERE id_mutawwif='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	$fotoorang = $pecah['foto_produk'];
		if (file_exists("assets/mutawwif/$fotoproduk"))
		{
			unlink("assets/mutawwif/$fotoproduk");
		}

		$koneksi->query("DELETE FROM mutawwif WHERE id_mutawwif='$_GET[id]'");
		echo "<script>alert('Data Mutawwif terhapus');</script>";
		echo "<script>location='mutawwif.php';</script>";
?>