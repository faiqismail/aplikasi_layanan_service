-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2023 pada 09.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminservise`
--

CREATE TABLE `adminservise` (
  `id_admin` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_keluhan` int(11) DEFAULT NULL,
  `tgl_perbaikan` date DEFAULT NULL,
  `id_sparepart` int(11) DEFAULT NULL,
  `biaya_lain` varchar(255) DEFAULT NULL,
  `total_biaya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `adminservise`
--

INSERT INTO `adminservise` (`id_admin`, `id_pelanggan`, `id_keluhan`, `tgl_perbaikan`, `id_sparepart`, `biaya_lain`, `total_biaya`) VALUES
(42, 17, 30, '2023-04-10', 6, 'transport 50k', 'Rp.100.000'),
(43, 18, 31, '2023-04-12', 7, 'trasport 10k', 'Rp.90.000'),
(44, 19, 32, '2023-04-14', 8, 'transport ', 'Rp.100.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `tgl_keluhan` date DEFAULT NULL,
  `nama_perangkat` varchar(200) DEFAULT NULL,
  `merk` varchar(200) DEFAULT NULL,
  `keluhan_kerusakan` varchar(255) DEFAULT NULL,
  `file_kerusakan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `id_pelanggan`, `tgl_keluhan`, `nama_perangkat`, `merk`, `keluhan_kerusakan`, `file_kerusakan`) VALUES
(30, 17, '2023-04-09', 'laptop', 'lenovo', 'lemot sekali', 'rusak.jpg'),
(31, 18, '2023-04-11', 'mesin cuci', 'sharp', 'putaran lemah', 'rusak2.jpeg'),
(32, 19, '2023-04-13', 'mesin cuci', 'elektrolux', 'mati total', 'rusak2.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin1` int(11) NOT NULL,
  `email_admin` varchar(200) DEFAULT NULL,
  `paswords` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_admin1`, `email_admin`, `paswords`) VALUES
(1, 'admin@gmail.com  ', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `email_pegawai` varchar(200) DEFAULT NULL,
  `paswords` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `jabatan`, `email_pegawai`, `paswords`) VALUES
(4, 'santoso setiawan', 'bangkalan', 'Teknisi laptop', 'santoso@gmail.com', 'santoso'),
(5, 'cak do', 'lamongan', 'Teknisi mesin cuci', 'do@gmail.com', 'do');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(200) DEFAULT NULL,
  `alamat_lengkap` varchar(255) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `paswords` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_lengkap`, `no_hp`, `email`, `paswords`) VALUES
(17, 'supriadi karep', 'jl.sidokumpul desa arep gresik', '085155476673', 'supriadi@gmail.com', 'supriadi'),
(18, 'pak asep saudi', 'jl.karang batur rt 1 rw 1 desa gumeno gresik', '085155476671', 'asep@gmail.com', 'asep'),
(19, 'subhan', 'jl.btn. kolor .sumenep', '081865567', 'subhan@gmail.com', 'subhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id_perbaikan` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `id_keluhan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perbaikan`
--

INSERT INTO `perbaikan` (`id_perbaikan`, `id_pelanggan`, `id_admin`, `id_pegawai`, `status`, `id_keluhan`) VALUES
(44, 17, 42, 4, 'otw', 30),
(45, 18, 43, 5, 'selesai', 31),
(46, 19, 44, 5, 'selesai', 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sparepart`
--

CREATE TABLE `sparepart` (
  `id_sparepart` int(11) NOT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL,
  `jumlah_barang` varchar(200) DEFAULT NULL,
  `kondisi_barang` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sparepart`
--

INSERT INTO `sparepart` (`id_sparepart`, `jenis_barang`, `jumlah_barang`, `kondisi_barang`) VALUES
(6, 'ssd 1 tb', '2', 'baru'),
(7, 'kapasitor ', '4', 'baru'),
(8, 'power supply', '2', 'baru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminservise`
--
ALTER TABLE `adminservise`
  ADD PRIMARY KEY (`id_admin`) USING BTREE,
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_keluhan` (`id_keluhan`),
  ADD KEY `id_sparepart` (`id_sparepart`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `FK_4` (`id_pelanggan`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin1`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`),
  ADD KEY `FK_5` (`id_pegawai`),
  ADD KEY `FK_7` (`id_pelanggan`),
  ADD KEY `FK_8` (`id_keluhan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_sparepart`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminservise`
--
ALTER TABLE `adminservise`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id_sparepart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `adminservise`
--
ALTER TABLE `adminservise`
  ADD CONSTRAINT `FK_12` FOREIGN KEY (`id_keluhan`) REFERENCES `keluhan` (`id_keluhan`),
  ADD CONSTRAINT `adminservise_ibfk_2` FOREIGN KEY (`id_sparepart`) REFERENCES `sparepart` (`id_sparepart`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adminservise_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `FK_4` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Ketidakleluasaan untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD CONSTRAINT `FK_5` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `FK_7` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `FK_8` FOREIGN KEY (`id_keluhan`) REFERENCES `keluhan` (`id_keluhan`),
  ADD CONSTRAINT `perbaikan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `adminservise` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
