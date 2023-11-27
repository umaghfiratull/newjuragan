<?php
session_start();
//koneksi ke database
include'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- costume css file link -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .konten {
            padding: 20px;
            text-align: center;
        }

        .konten h1{
            font-size: 5rem;
        }

        .thumbnail {
            border: 1px solid #ddd;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            height: 100%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-md-3 {
            flex: 0 0 25%;
            padding: 15px;
        }
    </style>
</head>
<body>
    <!-- header section start -->
    <section class="header">
       <a href="index.php" class="logo"><img src="images/logojuragan.png"></a> 

       <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="admin/login.php"> <i class="fas fa-lock"></i>login</a>
       </nav>

       <div id="menu-btn" class="fas fa-bars">
        
       </div>

    </section>
    <!-- header section ends -->

    <div class="heading" style="background:url(images/bgatas.png) no-repeat">
        <h1>Package</h1>
    </div>

    <!-- packages section start -->

    <section class="packages">
        <h1 class="heading-title">
            top paket pilihan
        </h1>
        <div class="row">

                <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
                <?php while ($perproduk = $ambil->fetch_assoc()) { ?>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="" class="img-fluid" style="max-width: 250px; max-height: 250px;">
                            <div class="caption">
                                <h3><?php echo $perproduk['nama_produk']; ?></h3>
                                <!-- <h5 style="color:grey;">stok: <?php echo $perproduk['stok_produk']; ?></h5>
                                <h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
                                <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn" style="background-color: #FF6E1E; color: #fff;"> <i class="fas fa-shopping-cart"></i> Beli</a> -->
                                <a href="hemm/detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-success"><i class="fas fa-info-circle"></i> Detail</a>
                            </div>
                        </div>


                    </div>
                <?php } ?>

            </div>

        <div class="load-more"><span class="btn">load more</span></div>
    </section>


    <!-- packages section ends -->












    <!-- footer section start -->
    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>quick link</h3>
                <a href="home.php"> <i class="fas fa fa-angel-righht"></i></i>home</a>
                <a href="about.php"> <i class="fas fa fa-angel-righht"></i> about</a>
                <a href="package.php"> <i class="fas fa fa-angel-righht"></i> package</a>
                <a href="book.php"> <i class="fas fa fa-angel-righht"></i> book</a>
            </div>

            <div class="box">
                <h3>ekstra link</h3>
                <a href="#"> <i class="fas fa fa-angel-righht"></i></i>ask questions</a>
                <a href="#"> <i class="fas fa fa-angel-righht"></i></i>about us</a>
                <a href="#"> <i class="fas fa fa-angel-righht"></i></i>privacy policy</a>
                <a href="#"> <i class="fas fa fa-angel-righht"></i></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i></i>0812-1111-1111</a>
                <a href="#"> <i class="fas fa-phone"></i></i>0856-2222-2222</a>
                <a href="#"> <i class="fas fa-envelope"></i></i>jurangan@travel.com</a>
                <a href="#"> <i class="fas fa-map"></i></i>Jember, Jawa Timur - 0000</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"><i class="fab fa-twitter"></i> twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> create by <span>Jurangan Travel</span> | all rights reserved!</div>

    </section>
    <!-- footer section ends -->


    <!-- swipper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- costume js file link -->
    <script src="js/script.js"></script>
</body>
</html>