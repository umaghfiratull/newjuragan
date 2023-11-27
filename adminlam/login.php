<?php
	session_start();

	include("db.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
	
		$mail = $_POST['email'];
		$passwd = $_POST['pass'];

		if(!empty($mail) && !empty($passwd) && !is_numeric($mail)){

			$query = "SELECT * FROM admin WHERE surel = '$mail' limit 1";
			$result = mysqli_query($con, $query);

			if($result){
				if($result && mysqli_num_rows($result) > 0){
					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] == $passwd){
						header("location: madmin/dbadmin.html");
						die;
					}
				}
			}

			echo "<script type='text/javascript'> alert('Mohon masukkan email dan password dengan benar')</script>";

		}else{
			echo "<script type='text/javascript'> alert('Email dan Password salah')</script>";
		}

		
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
	<div class="login">
		<img src="../images/logojuragan.png">
		<h1>Login</h1>
		<h4>It's free adn only take a minute</h4>
		<form method="post">
			<label>email</label>
			<input type="email" name="email" required>
			<label>password</label>
			<input type="password" name="pass" required>
			<input type="submit" name="" value="submit">
		</form>
		<p>Not have an account? <a href="signup.php">SignUp here</a></p>
	</div>
</body>
</html>