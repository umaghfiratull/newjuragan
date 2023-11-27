﻿<?php
session_start();
// Skrip Koneksi
include '../koneksi.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SCHOOLER</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <br /><br />
        <img src="../Image\logoSchooler.png" class="user-image img-responsive" />
        <h5>(Login yourself to get access)</h5>
        <br />
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="text-center fw-bold" style="color:#000;">Login Admin</h2>
          </div>
          <div class="panel-body">
            <form role="form" method="post">
              <br />
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="user" placeholder="Your Username" required />
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Your Password" required />
              </div>
              <button  style="background-color: #022457;" class="btn btn-primary btn-block" name="login">Login</button>
            </form>

            <?php
            if (isset($_POST['login'])) {
              $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password ='$_POST[pass]'");
              $yangcocok = $ambil->num_rows;
              if ($yangcocok == 1) {
                $_SESSION['admin'] = $ambil->fetch_assoc();
                echo "<div class='alert alert-info'>Login Sukses</div>";
                echo "<meta http-equiv='refresh' content='1;url=index.php'>";
              } else {
                echo "<div class='alert alert-danger'>Login Gagal</div>";
                echo "<meta http-equiv='refresh' content='1;url=login.php'>";
              }
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -AT THE BOTTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>
</body>

</html>
