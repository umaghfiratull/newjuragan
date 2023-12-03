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
    <title>Dashboard Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/dbadmins.css">
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
                        <input type="text" placeholder="Search here">
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
            <div class="cardBox">
                <div class="card">
                    <div>
                    <?php $ambil = $koneksi->query("SELECT DATE_FORMAT(tgl_pemesanan, '%Y-%m-%d') AS tanggal, 
                    SUM(Dp_pembayaran) AS total_pemasukan FROM pemesanan WHERE tgl_pemesanan"); ?>

                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <div class="numbers">Rp.<?php echo number_format($pecah['total_pemasukan']); ?></div>
                        <div class="cardName">Pemasukan</div>
                        <?php } ?>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="download-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <?php $ambil = $koneksi->query("SELECT DATE_FORMAT(tgl_pengeluaran, '%Y-%m-%d') AS tanggal,
                    SUM(total_pengeluaran) AS total_pengeluaran FROM pengeluaran WHERE tgl_pengeluaran"); ?>

                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <div class="numbers">Rp.<?php echo number_format($pecah['total_pengeluaran']); ?></div>
                        <div class="cardName">Pengeluaran</div>
                        <?php } ?>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="share-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="col-xs-8 col-xs-offset-2 well">
                    <table class="table table-scroll table-striped">
                    <thead>
                                <tr>
                                    <td>Paket Populer</td>
                                    <td>Harga</td>
                                    <td>Kategori</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                        <tbody>
                            <?php $ambil = $koneksi->query("SELECT master_paket.id_paket,
                            master_paket.nama_paket, master_paket.harga_paket, master_paket.pilihan_paket,
                            COUNT(keberangkatan.id_keberangkatan) AS jumlah_pemesanan FROM master_paket 
                         	JOIN keberangkatan ON master_paket.id_paket = keberangkatan.id_paket 
                            GROUP BY master_paket.id_paket, master_paket.nama_paket, master_paket.harga_paket, master_paket.pilihan_paket
                            ORDER BY master_paket.id_paket DESC LIMIT 10;"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td><h4 class="wrap"><?php echo $pecah['nama_paket']; ?> </h4></td>
                                    <td>Rp. <?php echo number_format($pecah['harga_paket']); ?></td>
                                    <td><?php echo $pecah['pilihan_paket']; ?></td>
                                    <td>
                                        <!-- <a href="#" onclik="return confirm ('Apakahh anda yakin ingin menghapus data $d[nama]?')">Detail</a> -->
                                        <a href="#">Detail</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                

                <!-- ================= KEBERANGKATAN TERDEKAT ================ -->
                <div class="recentCustomers">
                        <div class="iconBx">
                            <ion-icon name="walk-outline"></ion-icon>
                        </div>
                    <div class="cardHeader">
                        <h3>Jadwal Keberangkatan Selanjutnya</h3>
                    </div>

                    <table>
                        <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT 
                                                                mp.nama_paket AS Nama_Paket, 
                                                                k.tgl_keberangkatan AS Tanggal_Keberangkatan, 
                                                                COUNT(k.id_keberangkatan) AS Jumlah_Jamaah
                                                            FROM 
                                                                keberangkatan k
                                                            JOIN 
                                                                master_paket mp ON k.id_paket = mp.id_paket
                                                            WHERE 
                                                                k.tgl_keberangkatan >= CURDATE()
                                                            GROUP BY 
                                                                mp.nama_paket, k.tgl_keberangkatan
                                                            ORDER BY 
                                                                k.tgl_keberangkatan
                                                            LIMIT 3"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <!-- <td><?php echo $pecah['Nama_Paket']; ?></td>
                                    <td><?php echo $pecah['Tanggal_Keberangkatan']; ?></td>
                                    <td><?php echo $pecah['Jumlah_Jamaah']; ?></td> -->
                                    <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Paket <?php echo $pecah['Nama_Paket']; ?><br>
                                <span>Berangkat Tanggal: <?php echo $pecah['Tanggal_Keberangkatan']; ?></span> 
                                <br> <span>Jumlah Jamaah: <?php echo $pecah['Jumlah_Jamaah']; ?></span> </h4>
                            </td>
                                </tr>
                                <?php $nomor++; ?>
                            <?php } ?>
                    </table>
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