-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2023 pada 12.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juragan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telepon` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`, `no_telepon`) VALUES
(1, 'Rizal', 'Rizal@gmail.com', '12345', '081267346572'),
(2, 'Maghviratul', 'V@gmail.com', 'V123', '0853627364512'),
(3, 'Maghfiratul', 'umaghfiratull@gmail.com', '123', '089636071906');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agen`
--

CREATE TABLE `agen` (
  `id_agen` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reward` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agen`
--

INSERT INTO `agen` (`id_agen`, `nama`, `email`, `password`, `reward`) VALUES
(1, 'Anggi Nur', 'Anggi@gmail.com', 'anggi12345', 20000000),
(2, 'Mutiara Ayu', 'Mutiara@gmail.com', 'Muti321', 15000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `stok`, `harga`, `foto`) VALUES
(1, 'koper', 70, 150000, ''),
(2, 'Kain Ihram', 110, 200000, ''),
(3, 'Baju Dewasa XXXL', 100, 150000, ''),
(4, 'Baju Dewasa XXL', 50, 120000, ''),
(5, 'Baju Dewasa XL', 50, 100000, ''),
(6, 'Baju Dewasa L', 49, 95000, ''),
(7, 'Baju Dewasa M', 50, 90000, ''),
(8, 'Baju Dewasa S', 50, 85000, ''),
(9, 'Baju Dewasa XS', 50, 80000, ''),
(10, 'Baju Anak XXXL', 50, 100000, ''),
(11, 'Baju Anak XXL', 50, 95000, ''),
(12, 'Baju Anak XL', 50, 90000, ''),
(13, 'Baju Anak L', 50, 85000, ''),
(14, 'Baju Anak M', 50, 80000, ''),
(15, 'Baju Anak S', 50, 75000, ''),
(16, 'Baju Anak XS', 50, 70000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `tanggal`, `jumlah`, `id_barang`) VALUES
(1, '2023-11-25', 10, 2),
(2, '2023-11-24', 20, 1);

--
-- Trigger `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `tambah stok` AFTER INSERT ON `barang_masuk` FOR EACH ROW BEGIN 
    UPDATE barang SET stok = 
    stok + new.jumlah
    WHERE id = new.id_barang;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id` int(10) NOT NULL,
  `id_pemesanan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `status_pemesanan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengeluaran`
--

CREATE TABLE `detail_pengeluaran` (
  `id` int(10) NOT NULL,
  `id_pengeluaran` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_pengeluaran`
--

INSERT INTO `detail_pengeluaran` (`id`, `id_pengeluaran`, `id_barang`, `jumlah`, `harga`) VALUES
(1, 1, 6, 1, 95000);

--
-- Trigger `detail_pengeluaran`
--
DELIMITER $$
CREATE TRIGGER `stok_kurang` BEFORE INSERT ON `detail_pengeluaran` FOR EACH ROW BEGIN 
    UPDATE barang SET stok = 
    stok - new.jumlah
    WHERE id = new.id_barang;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `NIK` int(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_telepon` char(13) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `nama_bapak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`NIK`, `nama_lengkap`, `alamat`, `no_telepon`, `tgl_lahir`, `jenis_kelamin`, `nama_bapak`) VALUES
(2, 'Muhammad Noor, S.Pd', 'eerfgedrgegewrgewgrergweegewtwewrwefweggegerw', '8794655', '2008-02-06', 'laki-laki', 'gus'),
(3, 'Junior Lim', 'Denpasar', '081427366548', '2003-06-15', 'laki-laki', 'Dindin'),
(5, 'Taufiqur Rahman, S.Pd', 'Jl. AAAAAAAAAAAAAAAAaaaaaaaaaa', '8521554486574', '2015-02-03', 'laki-laki', 'Nama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keberangkatan`
--

CREATE TABLE `keberangkatan` (
  `id` int(10) NOT NULL,
  `id_pemesanan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('Belum Berangkat','Sedang Berangkat','Selesai berangkat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keberangkatan`
--

INSERT INTO `keberangkatan` (`id`, `id_pemesanan`, `tanggal`, `status`) VALUES
(1, 1, '2023-11-30', 'Belum Berangkat'),
(2, 2, '2023-12-06', 'Belum Berangkat'),
(3, 3, '2023-12-13', 'Belum Berangkat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_paket`
--

CREATE TABLE `master_paket` (
  `id_paket` int(10) NOT NULL,
  `nama_paket` varchar(150) NOT NULL,
  `pilihan_paket` varchar(150) NOT NULL,
  `harga` int(10) NOT NULL,
  `lama_waktu` int(13) NOT NULL,
  `seat` int(10) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_paket`
--

INSERT INTO `master_paket` (`id_paket`, `nama_paket`, `pilihan_paket`, `harga`, `lama_waktu`, `seat`, `foto_produk`, `deskripsi_produk`) VALUES
(1, 'haji mabrur', 'haji', 150000000, 48, 39, '', ''),
(2, 'Umroh Hemat', 'Umroh', 23000000, 12, 49, '', ''),
(3, 'Umroh Hemat2', 'Umroh', 250000, 14, 29, '', ''),
(4, 'Paket 1', 'Paket Haji', 15000000, 25, 20, 'paket1.png', 'Paket Khusus yang menyediakan paket keberangkatan haji selama 25 hari dan dibimbing oleh mutawwif profesional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutawwif`
--

CREATE TABLE `mutawwif` (
  `id_mutawwif` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mutawwif`
--

INSERT INTO `mutawwif` (`id_mutawwif`, `nama`, `keterangan`, `foto`) VALUES
(3, 'Ustad Syam', 'Mutawwif Indonesia', 'Rectangle 314.png'),
(4, 'Ustad Hilmi', 'Mutawwif Indonesia', 'ustadhilmi.png'),
(5, 'Ustad Teacher', 'Mutawwif Indonesia', 'Rectangle 319.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `NIK` char(17) NOT NULL,
  `id_paket` int(10) NOT NULL,
  `jumlah_penumpang` int(10) NOT NULL,
  `ukuran_baju` enum('Dewasa-XXXL','Dewasa-XXL','Dewasa-XL','Dewasa-L','Dewasa-M','Dewasa-S','Dewasa-XS','Anak-XXXL','Anak-XXL','Anak-XL','Anak-L','Anak-M','Anak-S','Anak-XS') NOT NULL,
  `jenis_pembayaran` enum('Cash','Transfer Bank') NOT NULL,
  `Dp` int(10) NOT NULL,
  `sisa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tgl_pemesanan`, `NIK`, `id_paket`, `jumlah_penumpang`, `ukuran_baju`, `jenis_pembayaran`, `Dp`, `sisa`) VALUES
(1, '2023-11-25', '5171034108030002', 1, 1, 'Dewasa-L', 'Transfer Bank', 50000000, 100000000),
(2, '2023-11-23', '9807871298730008', 2, 1, 'Dewasa-XL', 'Cash', 10000000, 13000000),
(3, '2023-11-24', '8291234108030001', 3, 1, 'Dewasa-XL', 'Cash', 10000000, 15000000);

--
-- Trigger `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `kurangi stok seat` AFTER INSERT ON `pemesanan` FOR EACH ROW BEGIN
    UPDATE master_paket
    SET seat = seat - NEW.jumlah_penumpang
    WHERE id_paket = NEW.id_paket;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_keberangkatan` int(10) NOT NULL,
  `total_pengeluaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tanggal`, `id_keberangkatan`, `total_pengeluaran`) VALUES
(1, '2023-11-25', 1, 445000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_operasional`
--

CREATE TABLE `pengeluaran_operasional` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengeluaran_operasional`
--

INSERT INTO `pengeluaran_operasional` (`id`, `tanggal`, `keterangan`, `jumlah`) VALUES
(1, '2023-11-25', 'bayar listrik nulan november', 300000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_agen`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `detail_pengeluaran`
--
ALTER TABLE `detail_pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengeluaran` (`id_pengeluaran`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pamesanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `master_paket`
--
ALTER TABLE `master_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `mutawwif`
--
ALTER TABLE `mutawwif`
  ADD PRIMARY KEY (`id_mutawwif`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `NIK` (`NIK`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_keberangkatan` (`id_keberangkatan`);

--
-- Indeks untuk tabel `pengeluaran_operasional`
--
ALTER TABLE `pengeluaran_operasional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `agen`
--
ALTER TABLE `agen`
  MODIFY `id_agen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pengeluaran`
--
ALTER TABLE `detail_pengeluaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `NIK` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_paket`
--
ALTER TABLE `master_paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mutawwif`
--
ALTER TABLE `mutawwif`
  MODIFY `id_mutawwif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran_operasional`
--
ALTER TABLE `pengeluaran_operasional`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masukfk1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesananfk1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `detail_pengeluaran`
--
ALTER TABLE `detail_pengeluaran`
  ADD CONSTRAINT `detail_pengeluaranfk1` FOREIGN KEY (`id_pengeluaran`) REFERENCES `pengeluaran` (`id`),
  ADD CONSTRAINT `detail_pengeluaranfk2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD CONSTRAINT `keberangkatanfk1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaranfk1` FOREIGN KEY (`id_keberangkatan`) REFERENCES `keberangkatan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
