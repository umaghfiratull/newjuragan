<?php
	session_start();

	include("../koneksi.php");

		if(!empty($mail) && !empty($passwd) && !is_numeric($mail)){

			$sql = $db->query ("insert into admin (ndepan, nbelakang, jkel, almt, ntlp, email, password)
						values ('$_POST[nmdpn]','$_POST[nmblkng]','$_POST[jk]','$_POST[alamat]','$_POST[ntlp]','$_POST[email]','$_POST[pass])");
			
					if($sql)
						header("location:signup.php");
					else
						echo "ada masalah, data gagal disimpan";
			
		}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Form Login dan Register</title>
</head>
<body>
	<div class="signup">
		<h1>Sign Up</h1>
		<h4>It's free adn only take a minute</h4>
		<form method="post">
			<label>nama depan</label>
			<input type="text" name="nmdpn" required>
			<label>nama belakang</label>
			<input type="text" name="nmblkng" required>
			<label>jenis kelamin</label>
			<input type="text" name="jk" required>
			<label>alamat</label>
			<input type="text" name="alamat" required>
			<label>No. Telp</label>
			<input type="number" name="ntlp" required>
			<label>email</label>
			<input type="email" name="email" required>
			<label>password</label>
			<input type="password" name="pass" required>
			<input type="submit" name="" value="submit">
		</form>
		<p>By cliking the Sign Up button, you agree to our<br>
			<a href="">Term and Condition</a> and <a href="#">Policy Privacy</a>
		</p>
		<p>Already have an account ? <a href="login.php">Login Here</a></p>
	</div>
</body>
</html>