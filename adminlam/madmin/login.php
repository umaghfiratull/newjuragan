<?php
	session_start();

	include("../koneksi.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
	
		$mail = $_POST['email'];
		$passwd = $_POST['[pass]'];

		if(!empty($mail) && !empty($passwd) && !is_numeric($mail)){

			$query = "select * from admin where email = '$mail' limit 1";
			$result = mysqli_query($db, $query);

			if($result){
				if($result && mysqli_num_rows($result) > 0){
					$user_data = mysqli_fetch_assoc($result);

					if($user_data['pass'] == $passwd){
						header("locatioan: madmin/dbadmin.html");
					}
				}
			}

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
		<h1>Login</h1>
		<h4>It's free adn only take a minute</h4>
		<form method="post">
			<label>email</label>
			<input type="email" name="" required>
			<label>password</label>
			<input type="password" name="" required>
			<input type="submit" name="" value="submit">
		</form>
		<p>Not have an account? <a href="signup.php">SignUp here</a></p>
	</div>
</body>
</html>