<?php
session_start();
//koneksi ke database
include '../admin/koneksi.php';

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jamaah</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/datajamaah.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <img src="assets/imgs/logojuragan.png">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="dbadmin.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="datajamaah.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Jamaah</span>
                    </a>
                </li>

                <li>
                    <a href="paket.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Pilihan Paket</span>
                    </a>
                </li>

                <li>
                    <a href="mutawwif.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">mutawwif</span>
                    </a>
                </li>

                <li>
                    <a href="keberangkatan.php">
                        <span class="icon">
                            <ion-icon name="airplane-outline"></ion-icon>
                        </span>
                        <span class="title">Keberangkatan</span>
                    </a>
                </li>

                <li>
                    <a href="daftarbarang.php">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                        <span class="title">Daftar Barang</span>
                    </a>
                </li>

                <li>
                    <a href="pemesanan.php">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Pemesanan</span>
                    </a>
                </li>

                <li>
                    <a href="dataagen.php">
                        <span class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">Data Agen</span>
                    </a>
                </li>

                <li>
                    <a href="pengeluaran.php">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Pengeluaran</span>
                    </a>
                </li>

                <li>
                    <a href="laporan.php">
                        <span class="icon">
                            <ion-icon name="document-outline"></ion-icon>
                        </span>
                        <span class="title">Laporan</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Cari Fitur">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="notif">
                    <ion-icon name="notifications-outline"></ion-icon>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="kontainer">
                <h2>Informasi Seluruh Jamaah</h2>
                <div class="cardBox">
                    <div class="searchjamaah">
                        <label>
                            <input type="text" placeholder="Cari Jamaah">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
                    <div class="btntanggal">
                        <ion-icon name="calendar-number-outline"></ion-icon>
                        <a href="#">Cari Berdasarkan Tanggal
                        </a>
                    </div>

                    <div class="cardtampung">
                        <div class="cardjamaah">
                            <div>
                                <?php $ambil = $koneksi->query("SELECT COUNT(*) AS jumlah_pria
                                 FROM jamaah WHERE jenis_kelamin_jamaah = 'laki-laki'"); ?>

                                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                     <div class="cardName">Laki-Laki</div>
                                    <div class="numbers"><?php echo number_format($pecah['jumlah_pria']); ?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="cardjamaah">
                            <div>
                                <?php $ambil = $koneksi->query("SELECT COUNT(*) AS jumlah_pria
                                 FROM jamaah WHERE jenis_kelamin_jamaah = 'perempuan'"); ?>
                                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                     <div class="cardName">Perempuan</div>
                                    <div class="numbers"><?php echo number_format($pecah['jumlah_pria']); ?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="cardjamaah">
                        <div>
                                <?php $ambil = $koneksi->query("SELECT COUNT(*) AS total_jamaah FROM jamaah"); ?>
                                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                     <div class="cardName">Total</div>
                                    <div class="numbers"><?php echo number_format($pecah['total_jamaah']); ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="btntambah">
                        <a href="tambahjamaah.php">Tambah Pesanan</a>
                    </div>
                </div>
            </div>
            <!-- ================ Tabel Jamaah ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="col-xs-8 col-xs-offset-2 well">
                    <table class="table table-scroll table-striped" border="1">
                    <thead>
                                <tr>
                                    <td>NIK</td>
                                    <td>Nama Lengkap</td>
                                    <td>Alamat</td>
                                    <td>Nomor Telpon</td>
                                    <td>Tanggal Lahir</td>
                                    <td>Jenis Kelamin</td>
                                    <td>Nama Orang Tua</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                        <tbody><tr>
                        <?php $ambil = $koneksi->query("SELECT * FROM jamaah"); ?>
                        <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
                                                               
                                       <td> 
                                            <h4><?php echo $perproduk['NIK']; ?></h4>
                                        </td>
                                        <td>
                                            <h4><?php echo $perproduk['nama_jamaah']; ?></h4>
                                        </td>
                                        <td>
                                            <h4><?php echo $perproduk['alamat_jamaah']; ?></h4>
                                        </td>
                                        <td>
                                            <h4><?php echo $perproduk['no_hp_jamaah']; ?></h4>
                                            </td>
                                        <td>
                                                <p><?php echo $perproduk['tgl_lahir_jamaah']; ?></p>
                                        </td>
                                        <td>
                                                <p><?php echo $perproduk['jenis_kelamin_jamaah']; ?></p>
                                        </td>
                                        <td>
                                                <p><?php echo $perproduk['nama_bapak_jamaah']; ?></p>
                                        </td>
                                        <td>
                                            <a href="ubahjamaah.php?id=<?php echo $perproduk['NIK']; ?>" class="btn" style="background-color: #FF6E1E; color: #fff;"> <i class="fas fa-shopping-cart"></i> Edit</a>
                                       
                                            <a href="hapusjamaah.php?id=<?php echo $perproduk['NIK']; ?>" class="btn btn-success"><i class="fas fa-info-circle"></i> Hapus</a>
                                        </td>
                            </div>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>