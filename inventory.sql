-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2021 pada 04.59
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL,
  `contents` text NOT NULL,
  `admin` varchar(20) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'aktif'
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notes`
--

INSERT INTO `notes` (`id`, `contents`, `admin`, `status`) VALUES
(24, 'cek', 'Muhammad Hadi', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sbrg_keluar`
--

CREATE TABLE IF NOT EXISTS `sbrg_keluar` (
  `id` int(11) NOT NULL,
  `idx` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penerima` varchar(35) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sbrg_keluar`
--

INSERT INTO `sbrg_keluar` (`id`, `idx`, `tgl`, `jumlah`, `penerima`, `keterangan`) VALUES
(15, 244, '2020-08-29', 1000, 'Kasmina', 'Laku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sbrg_masuk`
--

CREATE TABLE IF NOT EXISTS `sbrg_masuk` (
  `id` int(11) NOT NULL,
  `idx` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sbrg_masuk`
--

INSERT INTO `sbrg_masuk` (`id`, `idx`, `tgl`, `jumlah`, `keterangan`) VALUES
(9, 244, '2020-08-07', 600, 'kk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slogin`
--

CREATE TABLE IF NOT EXISTS `slogin` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `kodeKamar` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slogin`
--

INSERT INTO `slogin` (`id`, `username`, `password`, `nickname`, `role`, `kodeKamar`) VALUES
(1, '1817101379', '747091e9c17042fab1568879bd01d5c2', 'Alya Aiman Salsabila Arif', 'Taruna', 'I212'),
(2, '1817101458', 'c17b673843b90d46a56a6b82b9f483ae', 'Salsa Alma''ariz', 'Taruna', 'A308'),
(3, '1817101436', '2d55556279a608ab3fbdb8d9c0f499c6', 'Muhammad Hadi', 'Taruna', 'A204');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sstock_brg`
--

CREATE TABLE IF NOT EXISTS `sstock_brg` (
  `noLaporan` int(3) NOT NULL,
  `tanggalLapor` date NOT NULL,
  `kodeKamar` varchar(5) NOT NULL,
  `kerusakan` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sstock_brg`
--

INSERT INTO `sstock_brg` (`noLaporan`, `tanggalLapor`, `kodeKamar`, `kerusakan`, `status`) VALUES
(1, '2021-02-14', '212', 'Pendingin ruangan tidak dapat menyala', 'Diusulkan'),
(2, '0000-00-00', '', 'c', 'c'),
(3, '0000-00-00', '', 'a', 'a'),
(4, '0000-00-00', '', 'b', 'b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `taruna`
--

CREATE TABLE IF NOT EXISTS `taruna` (
  `id` int(3) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `password` varchar(225) NOT NULL,
  `kodekamar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `taruna`
--

INSERT INTO `taruna` (`id`, `npm`, `password`, `kodekamar`) VALUES
(1, '1817101379', '747091e9c17042fab1568879bd01d5c2', 'I212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbrg_keluar`
--
ALTER TABLE `sbrg_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbrg_masuk`
--
ALTER TABLE `sbrg_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sstock_brg`
--
ALTER TABLE `sstock_brg`
  ADD PRIMARY KEY (`noLaporan`);

--
-- Indexes for table `taruna`
--
ALTER TABLE `taruna`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `sbrg_keluar`
--
ALTER TABLE `sbrg_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sbrg_masuk`
--
ALTER TABLE `sbrg_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sstock_brg`
--
ALTER TABLE `sstock_brg`
  MODIFY `noLaporan` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
