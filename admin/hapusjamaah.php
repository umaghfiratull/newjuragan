<?php
include '../admin/koneksi.php';
	$ambil = $koneksi->query("SELECT * FROM jamaah WHERE nik='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
		$koneksi->query("DELETE FROM jamaah WHERE nik='$_GET[id]'");
		echo "<script>alert('Paket terhapus');</script>";
		echo "<script>location='datajamaah.php';</script>";
?>