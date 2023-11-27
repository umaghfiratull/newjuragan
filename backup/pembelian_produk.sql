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
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 2, 3, '', 0, 0, 0, 0),
(2, 1, 2, 2, '', 0, 0, 0, 0),
(3, 0, 4, 2, '', 0, 0, 0, 0),
(4, 7, 4, 2, '', 0, 0, 0, 0),
(5, 8, 4, 2, '', 0, 0, 0, 0),
(6, 9, 4, 2, '', 0, 0, 0, 0),
(7, 10, 5, 1, '', 0, 0, 0, 0),
(8, 10, 4, 1, '', 0, 0, 0, 0),
(9, 13, 5, 1, '', 0, 0, 0, 0),
(10, 13, 6, 1, '', 0, 0, 0, 0),
(11, 14, 4, 1, '', 0, 0, 0, 0),
(12, 14, 5, 1, '', 0, 0, 0, 0),
(13, 17, 4, 1, '', 0, 0, 0, 0),
(14, 51, 13, 1, 'Nisekoi Roku', 1200000, 100, 100, 1200000),
(15, 52, 14, 1, 'Nisekoi BlackTiger', 120000, 100, 100, 120000),
(16, 53, 15, 1, 'Hotpants Pria - Hitam', 20000, 250, 250, 20000),
(17, 53, 17, 1, 'No Pippen Tippin Tree', 300000, 200, 200, 300000),
(18, 54, 15, 1, 'Hotpants Pria - Hitam', 20000, 250, 250, 20000),
(19, 54, 16, 1, 'Boxing Gloves Hook Fight Gear - Merah', 620000, 300, 300, 620000),
(20, 54, 18, 1, 'Common Goods Short Sleeve Oversize T-Shirts - Black (Hitam)', 99000, 200, 200, 99000),
(21, 55, 15, 1, 'Hotpants Pria - Hitam', 20000, 250, 250, 20000),
(22, 56, 15, 1, 'Hotpants Pria - Hitam', 20000, 250, 250, 20000),
(23, 57, 16, 2, 'Boxing Gloves Hook Fight Gear - Merah', 620000, 300, 600, 1240000),
(24, 57, 15, 1, 'Hotpants Pria - Hitam', 20000, 250, 250, 20000),
(25, 58, 20, 1, 'Bergo Sport SIZE M | Bergo pet tebal | Bergo pet lebar', 20000, 150, 150, 20000),
(26, 58, 15, 1, 'Hotpants Pria - Hitam', 20000, 250, 250, 20000),
(27, 59, 16, 1, 'Boxing Gloves Hook Fight Gear - Merah', 620000, 300, 300, 620000),
(28, 60, 15, 1, 'Hotpants Pria - Hitam', 20000, 250, 250, 20000),
(29, 61, 15, 1, 'Hotpants Pria - Hitam', 20000, 250, 250, 20000),
(30, 62, 16, 1, 'Boxing Gloves Hook Fight Gear - Merah', 620000, 300, 300, 620000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
