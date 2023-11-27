<?php
	include 'koneksi.php';
?>

<html>
	<head>
	
	</head>
	<body>
		<table>
			<tr><th>Udah Data Paket</th></tr>
			<?php 
				$sql="SELECT * FROM master_paket WHERE id_paket='$_GET[id]'";
				if (!$result = $koneksi->query($sql)) {
					die('There was an error running the query [' .$koneksi->error. ']');
				}
				$d = $result->fetch_assoc();
				echo "
				<form method=post action=ubahaksi.php>
					<input type=hidden name=id_awal value='$d[id_paket]'>
					<tr>
						<td>Nama Paket</td>
						<td><input type=text name=nama value='$d[nama_paket]'></td>
					</tr>
					<tr>
						<td>Pilihan Paket</td>
						<td><input type=text name=paket value='$d[pilihan_paket]'></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td><input type=text name=harga value='$d[harga]'></td>
					</tr>
					<tr>
						<td>Lama Keberangkatan</td>
						<td><input type=text name=lama value='$d[lama_waktu]'></td>
					</tr>
					<tr>
						<td>seat</td>
						<td><input type=text name=sit value='$d[seat]'></td>
					</tr>
					<tr>
						<td>Foto Praduk</td>
						<td><input type=file name=foto value='$d[foto_produk]'></td></tr>
					<tr>
						<td>Deskripsi</td>
						<td><input type=text name=desk value='$d[deskripsi_produk]'></td>
					</tr>
					<tr>
						<td></td>
						<td><input type=submit name=save value='Simpan'></td>
					</tr>

				</form>
				";
			

			 ?>
		</table>
	</body>

	
</html>