<?php
	include '../koneksi.php';

	if (isset($_POST[mail]) && isset($_POST[pass])) {
		
		$email = $_POST[mail];
		$password = $_POST[pass];

		if (empty($email)) {
			header("location: login.php?error=Email is required");
		}elseif (empty($password)) {
			header("location: login.php?error=password is required");
		}else{
			echo "location: dbadmin.html";
		}
	}

?>