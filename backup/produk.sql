-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2023 pada 11.55
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok_produk` int(11) DEFAULT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(15, 'Hotpants Pria - Hitam', NULL, 20000, 250, 'hotpants pria hitam.jpg', 'Bahan halus dan lembut, karet melar sempurna'),
(16, 'Boxing Gloves Hook Fight Gear - Merah', NULL, 620000, 300, 'boxing gloves.jpg', 'Material lebih kuat dari kulit sapi, gratis sarung tinju.	  '),
(17, 'No Pippen Tippin Tree', NULL, 300000, 200, 'no tippen pippen tree.webp', 'Keeping you fresh with this Oversized T-Shirt. The front and back featured with printed graphics that have a retro feel to give you that vintage look .'),
(18, 'Common Goods Short Sleeve Oversize T-Shirts - Black (Hitam)', NULL, 99000, 200, 'common goods black.jpg', 'Pewarnaan dari Cotton Common Goods sendiri sudah melewati proses washing dan memiliki sifat Reaktif, yang membuat pigmen warna pekat dan tidak mudah pudar. Terjamin tidak akan melunturkan bahan lainnya.'),
(19, 'Coco Trend Soul Jeans --Highwaist Cargo Celana Jeans Panjang Wanita', NULL, 160000, 300, 'coco trend.jpg', 'Material: cotton + polyester'),
(20, 'Bergo Sport SIZE M | Bergo pet tebal | Bergo pet lebar', NULL, 20000, 150, 'bergo.jpg', 'Material : Spandek Sutra Premium\r\nTidak menerawang, Bahan  lembut,halus, tidak membentuk lekuk tubuh, tidak licin, tidak budek di telinga, nyaman dan adem.  '),
(21, 'Helm Cakil Helm Retro M30 Bandit Mini moto Custom full face Hah Helmet', NULL, 250000, 500, 'helm cakil hitam.jpg', 'Helm Cakil Salah satu helm costum produk kami dengan menggunakan bahan dasar Fiber cat Metalic dengan kombinasi busa yang tebal dan dilapisi Kulit Sintetis \r\n'),
(22, 'KAOS/BAJU - KING NASSAR • bootleg concept tees', NULL, 175000, 200, 'kaos king nassar.jpg', 'Hasil sablonan di kasih garansi kalo ada masalah, hubungin adminnya aja.\r\nKaosnya adem kagak bikin gerah, soalnya pas bikin di bacain mantra.  ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
