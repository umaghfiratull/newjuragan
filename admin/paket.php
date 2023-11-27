<?php
session_start();
// Skrip Koneksi
include '../admin/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Perjalanan</title>
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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="airplane-outline"></ion-icon>
                        </span>
                        <span class="title">Keberangkatan</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                        <span class="title">Daftar Barang</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Pemesanan</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">Data Agen</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Pengeluaran</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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
                <h2>Paket Perjalanan</h2>
                <div class="cardBox">
                    <div class="searchpesanan">
                        <label>
                            <input type="text" placeholder="Cari Pemesanan">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>

                    <div class="btntambah">
                        <a href="tambahpaket.php">Tambah Pesanan</a>
                    </div>

                    <!-- <div class="btnedit">
                        <ion-icon name="pencil-outline"></ion-icon>
                        <a href="#">Edit</a>
                    </div>

                    <div class="btnhapus">
                        <ion-icon name="trash-outline"></ion-icon>
                        <a href="#">hapus</a>
                    </div> -->

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
                    <table class="table table-scroll table-striped" border="1">
                    <thead>
                                <tr>
                                    <td>Gambar Paket</td>
                                    <td>Nama Paket</td>
                                    <td>stock</td>
                                    <td>hharga</td>
                                    <td>deskripsi</td>
                                    <td>aksi</td>
                                </tr>
                            </thead>
                        <tbody><tr>
                        <?php $ambil = $koneksi->query("SELECT * FROM master_paket"); ?>
                        <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
                            
                            
                                    <td><img src="assets/foto/<?php echo $perproduk['foto_produk']; ?>" alt="" class="img-fluid" style="max-width: 250px; max-height: 250px;"></td>
                                   
                                       <td> 
                                            <h3><?php echo $perproduk['nama_paket']; ?></h3>
                                        </td>
                                        <td>
                                            <h5 style="color:grey;">stok: <?php echo $perproduk['lama_waktu']; ?></h5>
                                        </td>
                                        <td>
                                            <h5>Rp. <?php echo number_format($perproduk['harga']); ?></h5>
                                        </td>
                                        <td>
                                            <h3 class="wrap" contenteditable="true"><?php echo $perproduk['deskripsi_produk']; ?></h3>
                                        </td>
                                        <td>
                                        <a href="ubahpaket.php?id=<?php echo $perproduk['id_paket']; ?>" class="btn" style="background-color: #FF6E1E; color: #fff;"> <i class="fas fa-shopping-cart"></i> Edit</a>
                                       
                                            <a href="hapuspaket.php?id=<?php echo $perproduk['id_paket']; ?>" class="btn btn-success"><i class="fas fa-info-circle"></i> Hapus</a>
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