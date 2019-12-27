-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 09:09 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(250) NOT NULL DEFAULT '',
  `pengarang` varchar(250) NOT NULL DEFAULT '',
  `th_terbit` int(4) NOT NULL,
  `image` varchar(200) NOT NULL,
  `id_kategori` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `th_terbit`, `image`, `id_kategori`) VALUES
(1, 'Algoritma data minig', 'Kusrini, Emha Taufiq	', 2009, '', 1),
(2, 'Algoritma HSABC', 'Affandi AYE', 2015, '', 3),
(3, 'Perancangan dan Analisa Algoritma', 'Eko Budi Purwanto', 2008, '', 3),
(4, 'PHP dan PostgreSQL', 'Andhie Lala ', 2014, '', 1),
(5, 'Teknik Kecerdasan Buatan', 'Chin-Liang Chan', 1990, '', 4),
(13, 'sdfs', 'Affandi', 2019, 'images/img_20191206084457.jpg', 2),
(14, 'Data Mining', 'Kusrini', 2019, 'images/img_20191206085046.jpg', 1),
(15, 'Algoritma HSABC', 'Affandi AYE', 2015, '', 1),
(16, 'dsfsdf', 'dsffs', 2019, '', NULL),
(17, 'dsfsdf', 'dsffs', 2019, '', NULL),
(18, 'dsfsdfsadadsd', 'dsffs', 2019, '', NULL),
(19, 'dsfsdfsadadsd', 'dsffs', 2019, '', NULL),
(20, 'dsfsdfsadadsd', 'dsffs', 2019, '', NULL),
(21, 'dsfsdfsadadsd', 'dsffs', 2019, '', NULL),
(22, 'dfdf', 'djghj', 2019, 'POP_OUT2.jpg', NULL),
(23, '1001 malam', 'sandi', 2019, 'POP_OUT3.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `nama_kategori` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Data Mining'),
(2, 'Pemrograman'),
(3, 'Algoritma'),
(4, 'Kecerdasan Buatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
