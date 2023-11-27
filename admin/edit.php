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
    <title>perubahan keberangkatan</title>
</head>
<body>
    <div class="booking">

            <h1 class="heading-title">perubahan keberangkatan</h1>

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
                    <p>Nama :</p>
                    <p>keberangkatan :</p>
                    <p>Harga :</p>
                    <p>Minimal DP Pembayaran :</p>
                    <p>discon :</p>
                    <p>deskripsi :</p>
                </div>
                
                <div class="btn_utama">
                    <input type="submit" value="submit" class="btn_submit" name="send">
                    <a href="keberangkatan.php" class="btn_cancel">cancel</a>
                </div>
            </form>


        </div>
</body>
</html>