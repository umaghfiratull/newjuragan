<?php
session_start();
//koneksi ke database
include'admin/koneksi.php';
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

.mutawwif{
    text-align: center;
}

.mutawwif .isi{
    max-width: 70rem;
    margin: 0 auto;

}

.mutawwif .isi h3{
    font-size: 3.5rem;
    text-transform: uppercase;
    color: var(--black);
}

.mutawwif .isi p{
    font-size: 1.5rem;
    color: var(--light-black);
    line-height: 2;
    padding: 1rem 0;
}


        /* bagian untuk mengatur slide show */

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 10px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 10%;
  border-radius: 3px 0 0 3px;
}
.prev {
  left: 10%;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #63040A;

font-family: 'Open Sans', sans-serif;
font-size: 40px;
font-style: normal;
font-weight: 800;
line-height: normal;
}

.text2 {
  color: #000;

font-family: 'Open Sans', sans-serif;
font-size: 35px;
font-style: normal;
font-weight: 500;
line-height: normal;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
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
            <a href="admin/login.php">login</a>
       </nav>

       <div id="menu-btn" class="fas fa-bars">
        
       </div>

    </section>
    <!-- header section ends -->

    <!-- home saction start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/bgatas.png) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/bgatas.png) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/bgatas.png) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>    

    <!-- home saction ends -->

    <!-- services section start -->

    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/Ellipse 4.jpg" alt="">
                <h3>Paket Terjangkau</h3>
            </div>

            <div class="box">
                <img src="images/Ellipse 5.jpg" alt="">
                <h3>Kenyamanan Utama</h3>
            </div>

            <div class="box">
                <img src="images/Ellipse 6.jpg" alt="">
                <h3>Layanan Pelanggan Ramah</h3>
            </div>
        

            <div class="box">
                <img src="images/Ellipse 7.jpg" alt="">
                <h3>Tim Profesional dan Berpengalaman</h3>
            </div>
        </div>
    </section>

    <!-- services section ands -->

    <!-- mutawwif section start -->

    <section class="konten">
        <div class="container">
            <h1 class="text-center">Daftar Mutawwif</h1>
            <br>

            <div class="row">

                <?php $ambil = $koneksi->query("SELECT * FROM mutawwif"); ?>
                <?php while ($perproduk = $ambil->fetch_assoc()) { ?>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admin/assets/mutawwif/<?php echo $perproduk['foto_mutawwif']; ?>" alt="" class="img-fluid" style="max-width: 250px; max-height: 250px;">
                            <div class="caption">
                                <h3><?php echo $perproduk['nama_mutawwif']; ?></h3>
                                <h3><?php echo $perproduk['keterangan_mutawwif']; ?></h3>
                                
                                
                            </div>
                        </div>


                    </div>
                <?php } ?>

            </div>

        </div>

    </section>

    <!-- mutawwif section ends -->

    

    <!-- home package section start -->

        <section class="konten">
        <div class="container">
            <h1 class="text-center">List Produk</h1>
            <br>

            <div class="row">

                <?php $ambil = $koneksi->query("SELECT * FROM master_paket"); ?>
                <?php while ($perproduk = $ambil->fetch_assoc()) { ?>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="admin/assets/foto/<?php echo $perproduk['foto_paket']; ?>" alt="" class="img-fluid" style="max-width: 250px; max-height: 250px;">
                            <div class="caption">
                                <h3><?php echo $perproduk['nama_paket']; ?></h3>
                                <h5 style="color:grey;">stok: <?php echo $perproduk['lama_waktu']; ?></h5>
                                <h5>Rp. <?php echo number_format($perproduk['harga_paket']); ?></h5>
                                <h3>Deskripsi Produk : <?php echo $perproduk['deskripsi_paket']; ?></h3>
                                <!-- <a href="beli.php?id=<?php echo $perproduk['id_paket']; ?>" class="btn" style="background-color: #FF6E1E; color: #fff;"> <i class="fas fa-shopping-cart"></i> Beli</a> -->
                                <a href="detail.php?id=<?php echo $perproduk['id_paket']; ?>" class="btn btn-success"><i class="fas fa-info-circle"></i> Detail</a>
                            </div>
                        </div>


                    </div>
                <?php } ?>

            </div>

        </div>

    </section>

    <!-- home package section ends -->

    

    <!-- home offer section start -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sit quam, ullam nulla eum aspernatur vitae fuga quo inventore ut.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>

    <!-- home offer section ends -->

    <!-- home about section start -->

        <secion class="home-about">
            <div class="image">
                <img src="images/bgatas.png" alt="">
            </div>

            <div class="content">
                <h3>about us</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestias, blanditiis officia. 
                    Quod voluptatem quos tempora, nulla quis perferendis, odio, 
                    culpa neque facere sunt eos optio fuga libero accusantium. Est, quam?</p>
                    <a href="about.php" class="btn">read more</a>
            </div>
        </secion>

    <!-- home about section ends -->





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

    <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
</body>
</html>