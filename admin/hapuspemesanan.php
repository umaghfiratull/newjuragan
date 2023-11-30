<?php
include 'koneksi.php';
	$ambil = $koneksi->query("SELECT * FROM keberangkatan WHERE id_keberangkatan='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
		$koneksi->query("DELETE FROM keberangkatan WHERE id_keberangkatan='$_GET[id]'");
		echo "<script>alert('Data keberangkatan terhapus');</script>";
		echo "<script>location='keberangkatan.php';</script>";
?>