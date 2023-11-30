<?php
include '../admin/koneksi.php';
	$ambil = $koneksi->query("SELECT * FROM agen WHERE nama='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
		$koneksi->query("DELETE FROM agen WHERE nama='$_GET[id]'");
		echo "<script>alert('Paket terhapus');</script>";
		echo "<script>location='dataagen.php';</script>";
?>