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
        <link rel="stylesheet" href="assets/css/registerstyle.css">
                
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
                    <header>Masuk Sebagai Admin</header>
                    </div>
                    <form method="POST">
                        <div class="field input-field">
                            <input type="text" name="nama" placeholder="Nama Lengkap" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="email" name="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="text" name="no_telepon" placeholder="Nomor Telepon /  WA" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field input-field">
                            <input type="password" name="kpassword" placeholder="Konfirmasi password" class="password">
                        </div>

                        <div class="field button-field">
                        <button type="submit" name="daftar">Daftar</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Sudah Punya Akun? <a href="login.php">Login</a></span>
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
            </div>

<?php
if (isset($_POST["daftar"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $kpassword = $_POST["kpassword"];
    // $alamat = $_POST["alamat"];
    $telepon = $_POST["no_telepon"];

    // Validasi data input
    if (empty($nama) || empty($email) || empty($password) || empty($kpassword) || empty($telepon)) {
        echo "<script>alert('Semua field harus diisi');</script>";
    } else {
        // Check if passwords match
        if ($password !== $kpassword) {
            echo "<script>alert('Konfirmasi password tidak sesuai');</script>";
        } else {
            // Cek apakah email sudah digunakan
            $stmt = $koneksi->prepare("SELECT * FROM admin WHERE email=?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            if ($result->num_rows > 0) {
                echo "<script>alert('Pendaftaran gagal, email sudah digunakan');</script>";
            } else {
                // Insert data pelanggan
                $stmt = $koneksi->prepare("INSERT INTO admin(email, password, nama, no_telepon) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $email, $password, $nama, $telepon);
                $stmt->execute();
                $stmt->close();

                echo "<script>alert('Pendaftaran sukses, silahkan login');</script>";
                echo "<script>location = 'login.php';</script>";
            }
        }
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