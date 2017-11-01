-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 01 Nov 2017 pada 06.27
-- Versi Server: 5.6.37
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birumuda_desainablesi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `id_service_category` int(11) NOT NULL,
  `portfolio_name` text NOT NULL,
  `portfolio_slug` text NOT NULL,
  `file_portfolio` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `id_service_category`, `portfolio_name`, `portfolio_slug`, `file_portfolio`, `date_created`) VALUES
(2, 3, 'CV mahasiswa', 'cv-mahasiswa', '9dc4b53845128b6ea8e6c26fea66fbb4.png', '2017-10-16 03:39:40'),
(3, 1, 'Poster penelitian Skripsi Mahasiswa ', 'poster-penelitian-skripsi-mahasiswa-', 'c67d923abd8910510cfeefff3c3cb63e.png', '2017-10-16 03:40:15'),
(4, 5, 'Poster peserta expo tugas akhir mahasiswa', 'poster-peserta-expo-tugas-akhir-mahasiswa', '5e1f00eb9cf03975f9a3ff037abb8314.png', '2017-10-16 03:41:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_category`
--

CREATE TABLE `service_category` (
  `id_service_category` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service_category`
--

INSERT INTO `service_category` (`id_service_category`, `category_name`, `photo`, `description`) VALUES
(1, 'poster ilmiah', '', ''),
(2, 'x banner', '', ''),
(3, 'cv (curriculum vitae)', '', ''),
(4, 'slide presentasi', '', ''),
(5, 'poster produk', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id_service_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id_service_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
