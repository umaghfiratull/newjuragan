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
                <h2>Informasi Seluruh Keberangkatan</h2>
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
                </div>
            </div>
            <!-- ================ Tabel Jamaah ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="col-xs-8 col-xs-offset-2 well">
                    <table class="table table-scroll table-striped">
                        <thead>
                            <tr>
                                <td>Paket Populer</td>
                                <td>Harga</td>
                                <td>Kategori</td>
                                <td>Detail</td>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>Paket Haji 44 Hari</td>
                                <td>$1200</td>
                                <td>Haji</td>
                                <td>
                                    <span class="btndetail">
                                        <a href="#">Detail</a>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>Paket Umroh 9 Hari</td>
                                <td>$110</td>
                                <td>Umrah</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Paket Haji 30 Hari</td>
                                <td>$1200</td>
                                <td>Haji</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Paket Umroh 12 Hari</td>
                                <td>$620</td>
                                <td>Umrah</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Paket Haji 44 Hari</td>
                                <td>$1200</td>
                                <td>Haji</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Paket Umroh 9 Hari</td>
                                <td>$110</td>
                                <td>Umrah</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Paket Haji 30 Hari</td>
                                <td>$1200</td>
                                <td>Haji</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Paket Umroh 12 Hari</td>
                                <td>$620</td>
                                <td>Umrah</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Paket Haji 44 Hari</td>
                                <td>$1200</td>
                                <td>Haji</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Paket Umroh 9 Hari</td>
                                <td>$110</td>
                                <td>Umrah</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Paket Haji 30 Hari</td>
                                <td>$1200</td>
                                <td>Haji</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Paket Umroh 12 Hari</td>
                                <td>$620</td>
                                <td>Umrah</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Paket Haji 44 Hari</td>
                                <td>$1200</td>
                                <td>Haji</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Paket Umroh 9 Hari</td>
                                <td>$110</td>
                                <td>Umrah</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Paket Haji 30 Hari</td>
                                <td>$1200</td>
                                <td>Haji</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Paket Umroh 12 Hari</td>
                                <td>$620</td>
                                <td>Umrah</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
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