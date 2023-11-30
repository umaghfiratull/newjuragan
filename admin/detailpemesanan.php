<?php
session_start();
// Skrip Koneksi
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/pemesanans.css">
    
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
                    <a href="detailpemesanan.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Detail Pemesanan</span>
                    </a>
                </li>

                <!-- <li>
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
                </li> -->
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
                <h2>Detail Pemesanan</h2>
                <div class="cardBox">
                    <div class="searchpesanan">
                        <label>
                            <input type="text" placeholder="Cari Pemesanan">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>

                    <!-- <div class="btntambah">
                        <a href="tambahpemesanan.php">Tambah Pesanan</a>
                    </div> -->

                    <div class="btnedit">
                        <ion-icon name="pencil-outline"></ion-icon>
                        <a href="pemesanan.php">Kembali</a>
                    </div>
<!-- 
                    <div class="btnhapus">
                        <ion-icon name="trash-outline"></ion-icon>
                        <a href="#">hapus</a>
                    </div>
 -->
                </div>
                <!-- <div class="cardBox">
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
                                <div class="cardName">Laki-Laki</div>
                                <div class="numbers">46</div>
                            </div>
                        </div>
                        <div class="cardjamaah">
                            <div>
                                <div class="cardName">Perempuan</div>
                                <div class="numbers">48</div>
                            </div>
                        </div><div class="cardjamaah">
                            <div>
                                <div class="cardName">Total</div>
                                <div class="numbers">94</div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- ================ Tabel Jamaah ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="col-xs-8 col-xs-offset-2 well">
                    <table class="table table-scroll table-striped">
                    <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Jamaah</td>
                                    <td>Paket</td>
                                    <td>Jenis Pembayaran</td>
                                    <td>Tanggal</td>
                                    <td>status</td>
                                    <td>Dp</td>
                                    <td>Sisa</td>
                                    <td>aksi</td>
                                </tr>
                            </thead>
                        <tbody>
                        <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT
                                                                pemesanan.id_pemesanan,
                                                                jamaah.nama_jamaah,
                                                                master_paket.nama_paket,
                                                                pemesanan.jenis_pembayaran,
                                                                pemesanan.tgl_pemesanan,
                                                                detail_pemesanan.status_pemesanan,
                                                                pemesanan.Dp_pembayaran,
                                                                pemesanan.sisa_pembayaran
                                                                
                                                            FROM
                                                                pemesanan
                                                            LEFT JOIN
                                                                jamaah ON pemesanan.NIK = jamaah.NIK
                                                            LEFT JOIN
                                                                detail_pemesanan ON pemesanan.id_pemesanan = detail_pemesanan.id_pemesanan
                                                            LEFT JOIN
                                                                master_paket ON pemesanan.id_paket = master_paket.id_paket"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td>
                                        <?php echo $nomor; ?>
                                    </td>
                                    <td>
                                        <?php echo $pecah['nama_jamaah']; ?>
                                    </td>
                                    <td>
                                        <?php echo $pecah['nama_paket']; ?>
                                    </td>
                                    <td>
                                        <?php echo $pecah['jenis_pembayaran']; ?>
                                    </td>
                                    <td> 
                                        <?php echo $pecah['tgl_pemesanan']; ?>
                                    </td>
                                    <td><?php echo $pecah['status_pemesanan']; ?></td>
                                    <td>
                                        Rp. <?php echo number_format($pecah['Dp_pembayaran']); ?>
                                    </td>
                                    <td>
                                        Rp. <?php echo number_format($pecah['sisa_pembayaran']); ?>
                                    </td>
                                    <td>
                                        <a href="deleteaksi.php?id=$d[id_pemesanan]\" onclik="return confirm ('Apakahh anda yakin ingin menghapus data $d[nama_lengkap]?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
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