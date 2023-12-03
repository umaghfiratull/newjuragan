-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2023 pada 07.55
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
-- Database: `juragantravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `pass_admin` varchar(100) NOT NULL,
  `no_hp_admin` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `pass_admin`, `no_hp_admin`) VALUES
(1, 'Maghfiratul', 'umaghfiratull@gmail.com', '123', '089636071906');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agen`
--

CREATE TABLE `agen` (
  `id_agen` int(10) NOT NULL,
  `nama_agen` varchar(100) NOT NULL,
  `email_agen` varchar(100) NOT NULL,
  `pass_agen` varchar(50) NOT NULL,
  `reward` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agen`
--

INSERT INTO `agen` (`id_agen`, `nama_agen`, `email_agen`, `pass_agen`, `reward`) VALUES
(1, 'Habibi', 'habibi@gmail.com', '321', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok_barang` int(100) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `foto_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok_barang`, `harga_barang`, `foto_barang`) VALUES
(1, 'Koper Barang', 30, 250000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(10) NOT NULL,
  `tanggal_barang_masuk` date NOT NULL,
  `jumlah_barang_masuk` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_detail` int(10) NOT NULL,
  `id_pemesanan` int(10) NOT NULL,
  `tanggal_detail` date NOT NULL,
  `status_pemesanan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengeluaran`
--

CREATE TABLE `detail_pengeluaran` (
  `id_detail_pengeluaran` int(10) NOT NULL,
  `id_pengeluaran` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jumlah_detail_pengeluaran` int(10) NOT NULL,
  `harga_detail_pengeluaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `NIK` varchar(20) NOT NULL,
  `nama_jamaah` varchar(100) NOT NULL,
  `alamat_jamaah` varchar(50) NOT NULL,
  `no_hp_jamaah` char(13) NOT NULL,
  `tgl_lahir_jamaah` date NOT NULL,
  `jenis_kelamin_jamaah` enum('laki-laki','perempuan') NOT NULL,
  `nama_bapak_jamaah` varchar(100) NOT NULL,
  `id_agen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`NIK`, `nama_jamaah`, `alamat_jamaah`, `no_hp_jamaah`, `tgl_lahir_jamaah`, `jenis_kelamin_jamaah`, `nama_bapak_jamaah`, `id_agen`) VALUES
('3509648690185960', 'Hafidza Syechan', 'Jl. Tebet Barat Dalam', '089636071906', '1995-12-30', 'perempuan', 'Hasan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keberangkatan`
--

CREATE TABLE `keberangkatan` (
  `id_keberangkatan` int(10) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `status_keberangkatan` enum('Belum Berangkat','Sedang Berangkat','Selesai') NOT NULL,
  `harga_paket` int(10) NOT NULL,
  `id_paket` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keberangkatan`
--

INSERT INTO `keberangkatan` (`id_keberangkatan`, `tgl_keberangkatan`, `status_keberangkatan`, `harga_paket`, `id_paket`) VALUES
(1, '2023-12-30', 'Belum Berangkat', 29000000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_paket`
--

CREATE TABLE `master_paket` (
  `id_paket` int(10) NOT NULL,
  `nama_paket` varchar(150) NOT NULL,
  `pilihan_paket` varchar(150) NOT NULL,
  `harga_paket` varchar(10) NOT NULL,
  `lama_waktu` int(13) NOT NULL,
  `tgl_paket` date NOT NULL,
  `seat` int(10) NOT NULL,
  `foto_paket` varchar(100) NOT NULL,
  `deskripsi_paket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_paket`
--

INSERT INTO `master_paket` (`id_paket`, `nama_paket`, `pilihan_paket`, `harga_paket`, `lama_waktu`, `tgl_paket`, `seat`, `foto_paket`, `deskripsi_paket`) VALUES
(1, 'Umrah 16 Hari Super Hemat', 'Umrah', '29000000', 16, '2023-12-30', 50, '', 'Umrah Super Hemat 16 Hari dengan fasilitas lengkap seperti tiket pesawat, visa, hotel, makan 3x sehari, handling & perlengkapan, muthowwif & city tour, air zam-zam 5 liter dan free kurma sukari 1 dus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutawwif`
--

CREATE TABLE `mutawwif` (
  `id_mutawwif` int(10) NOT NULL,
  `nama_mutawwif` varchar(100) NOT NULL,
  `keterangan_mutawwif` text NOT NULL,
  `foto_mutawwif` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mutawwif`
--

INSERT INTO `mutawwif` (`id_mutawwif`, `nama_mutawwif`, `keterangan_mutawwif`, `foto_mutawwif`) VALUES
(1, 'Ustad Jefri', 'Ustad Jefri Adalah Mutawwif Terpercaya Di Indonesia', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `NIK` char(17) NOT NULL,
  `ukuran_baju` enum('Dewasa-XXXL','Dewasa-XXL','Dewasa-XL','Dewasa-L','Dewasa-M','Dewasa-S','Dewasa-XS','Anak-XXXL','Anak-XXL','Anak-XL','Anak-L','Anak-M','Anak-S','Anak-XS') NOT NULL,
  `jenis_pembayaran` enum('Cash','Transfer Bank') NOT NULL,
  `dp_pembayaran` int(10) NOT NULL,
  `sisa_pembayaran` int(10) NOT NULL,
  `id_keberangkatan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tgl_pemesanan`, `NIK`, `ukuran_baju`, `jenis_pembayaran`, `dp_pembayaran`, `sisa_pembayaran`, `id_keberangkatan`) VALUES
(5, '2023-12-23', '3509648690185960', 'Dewasa-L', 'Cash', 10000000, 19000000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `tgl_pengeluaran` date NOT NULL,
  `id_keberangkatan` int(10) NOT NULL,
  `total_pengeluaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tgl_pengeluaran`, `id_keberangkatan`, `total_pengeluaran`) VALUES
(1, '2023-12-30', 1, 29000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_operasional`
--

CREATE TABLE `pengeluaran_operasional` (
  `id_pengeluaran_operasional` int(10) NOT NULL,
  `tgl_pengeluaran_operasional` date NOT NULL,
  `keterangan_pengeluaran_operasional` text NOT NULL,
  `jumlah_pengeluaran_operasional` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengeluaran_operasional`
--

INSERT INTO `pengeluaran_operasional` (`id_pengeluaran_operasional`, `tgl_pengeluaran_operasional`, `keterangan_pengeluaran_operasional`, `jumlah_pengeluaran_operasional`) VALUES
(1, '2023-12-20', 'Beli token listrik', 100000);

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
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `detail_pengeluaran`
--
ALTER TABLE `detail_pengeluaran`
  ADD PRIMARY KEY (`id_detail_pengeluaran`),
  ADD KEY `id_pengeluaran` (`id_pengeluaran`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `id_agen` (`id_agen`);

--
-- Indeks untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD PRIMARY KEY (`id_keberangkatan`),
  ADD KEY `id_paket` (`id_paket`);

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
  ADD KEY `id_keberangkatan` (`id_keberangkatan`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_keberangkatan` (`id_keberangkatan`);

--
-- Indeks untuk tabel `pengeluaran_operasional`
--
ALTER TABLE `pengeluaran_operasional`
  ADD PRIMARY KEY (`id_pengeluaran_operasional`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `agen`
--
ALTER TABLE `agen`
  MODIFY `id_agen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pengeluaran`
--
ALTER TABLE `detail_pengeluaran`
  MODIFY `id_detail_pengeluaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  MODIFY `id_keberangkatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_paket`
--
ALTER TABLE `master_paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mutawwif`
--
ALTER TABLE `mutawwif`
  MODIFY `id_mutawwif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran_operasional`
--
ALTER TABLE `pengeluaran_operasional`
  MODIFY `id_pengeluaran_operasional` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masukfk1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesananfk1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD CONSTRAINT `jamaahfk1` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`);

--
-- Ketidakleluasaan untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD CONSTRAINT `keberangkatanfk2` FOREIGN KEY (`id_paket`) REFERENCES `master_paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesananfk1` FOREIGN KEY (`NIK`) REFERENCES `jamaah` (`NIK`),
  ADD CONSTRAINT `pemesananfk3` FOREIGN KEY (`id_keberangkatan`) REFERENCES `keberangkatan` (`id_keberangkatan`);

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaranfk1` FOREIGN KEY (`id_keberangkatan`) REFERENCES `keberangkatan` (`id_keberangkatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
