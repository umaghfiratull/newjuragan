<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- costume css file link -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- header section start -->
    <section class="header">
       <a href="index.php" class="logo">Travel.</a> 

       <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
       </nav>

       <div id="menu-btn" class="fas fa-bars">
        
       </div>

    </section>
    <!-- header section ends -->

    <div class="heading" style="background:url(../images/bgatas.png) no-repeat">
        <h1>LOGIN</h1>
    </div>

    <!-- booking section start -->

        <div class="booking">

            <h1 class="heading-title">silahkan login disini</h1>

            <form action="loginok.php" method="post" class="book-form">

                <div class="flex">
                   
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="text" placeholder="enter your email" name="mail">
                    </div>

                    <div class="inputBox">
                        <span>password :</span>
                        <input type="number" placeholder="enter your number" name="pass">
                    </div>

                    
                </div>

                <input type="submit" value="Login" class="btn" name="send">


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