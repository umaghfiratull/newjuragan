<?php 
include 'koneksi.php';
		$sql = $koneksi->query("UPDATE master_paket 
									SET nama_paket='$_POST[nama]',
										pilihan_paket='$_POST[paket]',
										harga='$_POST[harga]',
										lama_waktu='$_POST[lama]',
										seat='$_POST[sit]',
										foto_produk='$_POST[foto]',
										deskripsi_produk='$_POST[desk]' 
									WHERE id_paket='$_POST[id_awal]'
								");

		if ($sql)
			header("location:paket.php");
		else
			echo "ada masalah, edit data tidak bisa disimpan";
	 ?>