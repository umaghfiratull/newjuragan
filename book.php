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
            <a href="admin/login.php"></i>login</a>
       </nav>

       <div id="menu-btn" class="fas fa-bars">
        
       </div>

    </section>
    <!-- header section ends -->

    <div class="heading" style="background:url(images/bgatas.png) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- booking section start -->

        <div class="booking">

            <h1 class="heading-title">book your trip!</h1>

            <form action="book_form.php" method="post" class="book-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>nama :</span>
                        <input type="text" placeholder="enter your name" name="name">
                    </div>

                    <div class="inputBox">
                        <span>email :</span>
                        <input type="text" placeholder="enter your email" name="mail">
                    </div>

                    <div class="inputBox">
                        <span>Telp / wa :</span>
                        <input type="number" placeholder="enter your number" name="telp">
                    </div>

                    <div class="inputBox">
                        <span>alamat :</span>
                        <input type="text" placeholder="enter your alamat" name="alamat">
                    </div>

                    <div class="inputBox">
                        <span>Tujuan :</span>
                        <input type="text" placeholder="enter your tujuuan" name="tujuan">
                    </div>

                    <div class="inputBox">
                        <span>jumlah pengunjuung:</span>
                        <input type="number" placeholder="total pengunjung" name="pengunjung">
                    </div>

                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date" name="datang">
                    </div>

                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date" name="pulang">
                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="send">


            </form>
        </div>

    <!-- booking section end -->












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
                <a href="#"> <i class="fas fa fa-angel-righht"></i></i>Ajukan Pertanyaan</a>
                <a href="#"> <i class="fas fa fa-angel-righht"></i></i>Tentang Kami</a>
                <a href="#"> <i class="fas fa fa-angel-righht"></i></i>Privacy Policy</a>
                <a href="#"> <i class="fas fa fa-angel-righht"></i></i>Terms Of Use</a>
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