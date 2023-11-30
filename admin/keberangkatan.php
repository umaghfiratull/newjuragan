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
    <title>Informasi Keberangkatan</title>
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
                <h2>Informasi Keberangkatan</h2>
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
                    <div class="btntambah">
                        <a href="tambahkeberangkatan.php">Tambah Pesanan</a>
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
                                    <td>Nama Paket</td>
                                    <td>Tanggal Berangkat</td>
                                    <td>Status Perjalanan</td>
                                    <td>harga</td>
                                    <td>aksi</td>
                                </tr>
                            </thead>


                            <tbody>
                                <?php $ambil = $koneksi->query("SELECT 
                                                                keberangkatan.id_keberangkatan AS id_keberangkatan,
                                                                master_paket.nama_paket,
                                                                keberangkatan.tgl_keberangkatan AS tgl_keberangkatan,
                                                                keberangkatan.status,
                                                                master_paket.harga
                                                            FROM
                                                                keberangkatan
                                                            JOIN pemesanan ON keberangkatan.id_pemesanan = pemesanan.id_pemesanan
                                                            JOIN master_paket ON keberangkatan.id_paket = master_paket.id_paket"); 
                                ?>
                                            <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
                                
                                            <td>
                                                    <p><?php echo $perproduk['nama_paket']; ?></p>
                                            </td>
                                            <td>
                                                    <p><?php echo $perproduk['tgl_keberangkatan']; ?></p>
                                            </td>
                                            <td>
                                                    <p><?php echo $perproduk['status']; ?></p>
                                            </td>
                                            <td>
                                                    <p><?php echo $perproduk['harga']; ?></p>
                                            </td>
                                            
                                            <td>
                                                <a href="ubahkeberangkatan.php?id=<?php echo $perproduk['id_keberangkatan']; ?>" class="btn" style="background-color: #FF6E1E; color: #fff;"> <i class="fas fa-shopping-cart"></i> Edit</a>
                                           
                                                <a href="hapuskeberangkatan.php?id=<?php echo $perproduk['id_keberangkatan']; ?>" class="btn btn-success"><i class="fas fa-info-circle"></i> Hapus</a>
                                            </td>
                                    

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