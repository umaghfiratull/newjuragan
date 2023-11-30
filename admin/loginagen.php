<?php
session_start();
// Skrip Koneksi
include '../admin/koneksi.php';
?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login Register Juragan </title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/loginstyle.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/js/config.js"></script>
                        
    </head>
    <body>
        <section class="container forms">
            <img src="assets/imgs/bgkabah.png" alt="Background Kabah" class="bgkabah">
            <div class="form login">
                <div class="logojuragan">
                    <img src="assets/imgs/Juragan.png" alt="Juragan Logo" class="logojuragan">
                </div>
                <div class="form-content">
                <div class="headerlogin">
                    <header>Masuk Sebagai Agen</header>
                    </div>
                    <form method="POST">
                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="email">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="pass" placeholder="Password" class="pass">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <!-- <div class="form-link">
                            <a href="#" class="forgot-pass">Lupa Password?</a>
                        </div> -->

                        <div class="field button-field">
                            <button type="submit" name="login">Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Bukan Agen? <a href="login.php">Login Admin</a></span>
                    </div>

                    <div class="form-link">
                        <span>Ingin mendaftar menjadi Agen? <a href="registeragen.php">Daftar Sekarang</a></span>
                    </div>
                </div>

                <!-- <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div> -->

            </div>
        </section>

        <?php
            if (isset($_POST['login'])) {
              $ambil = $koneksi->query("SELECT * FROM agen WHERE email='$_POST[email]' AND pass_agen ='$_POST[pass]'");
              $yangcocok = $ambil->num_rows;
              if ($yangcocok == 1) {
                $_SESSION['admin'] = $ambil->fetch_assoc();
                echo "<div class='alert alert-info'>Login Sukses</div>";
                echo "<script>alert('Login Sukses');</script>";
                echo "<meta http-equiv='refresh' content='1;url=dbagen.php'>";
              } else {
                echo "<div class='alert alert-danger'>Login Gagal</div>";
                echo "<script>alert('Login Gagal, cek kembali email dan password. Pastikan semua terisi');</script>";
                echo "<meta http-equiv='refresh' content='1;url=login.php'>";
              }
            }
            ?>


        <!-- JavaScript -->
        <script src="assets/js/loginscript.js"></script>
        <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/js/main.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>