<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- costume css file link -->
    <link rel="stylesheet" href="assets/css/tambah.css">
    <title>Tambah Keberangkatan</title>
</head>
<body>
    <div class="booking">

            <h1 class="heading-title">tambah keberangkatan</h1>

            <form action="#" method="post" class="book-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>Tanggal :</span>
                        <input type="date" placeholder="pilih tanggal" name="tgl">
                    </div>

                    <div class="inputBox">
                        <span>menu :</span>
                        <input type="text" placeholder="masukkan menu" name="mnu">
                    </div>

                    <div class="inputBox">
                        <span>paket :</span>
                        <input type="number" placeholder="Pilih Paket" name="pkt">
                    </div>

                </div>

                <div class="book-display">
                    <div class="inputBox">
                        <p>Nama : 
                            <input type="text" placeholder="Maukkan nama lengkap" name="nm">
                        </p>
                    </div>
                    <div class="inputBox">
                        <p>keberangkatan :
                            <input type="text" placeholder="Maukkan nama keberangkatan" name="keberangkatan">
                        </p>
                    </div>
                    <div class="inputBox">
                        <p>Harga :
                            <input type="text" placeholder="Maukkan total harga" name="harga">
                        </p>
                    </div>
                    <div class="inputBox">
                        <p>Minimal DP Pembayaran :
                            <input type="text" placeholder="Maukkan nama DP Pembayaran" name="dp">
                        </p>
                    </div>
                    <div class="inputBox">
                        <p>discon :
                            <input type="text" placeholder="Maukkan discon" name="diskon">
                        </p>
                    </div>
                    <div class="inputBox">
                        <p>deskripsi :
                            <input type="text" placeholder="Maukkan deskripsi lengkap" name="deskripsi">
                        </p>
                    </div>
                </div>
                
                <div class="btn_utama">
                    <input type="submit" value="submit" class="btn_submit" name="send">
                    <a href="keberangkatan.php" class="btn_cancel">cancel</a>
                </div>
            </form>


        </div>
</body>
</html>