-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2014 at 01:55 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `m-article`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `jumlah_suka` int(11) NOT NULL,
  `status` enum('Draft','Published','Canceled','Pending') NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `tanggal_dirubah` datetime NOT NULL,
  `author` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `artikel_id` int(11) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `tanggal_diubah` datetime NOT NULL,
  `komentator` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `artikel_id` (`artikel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `tipe_pengguna_id` int(11) DEFAULT NULL,
  `tanggal_dibuat` datetime DEFAULT NULL,
  `tanggal_dirubah` datetime DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipe_pengguna_id` (`tipe_pengguna_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `tipe_pengguna_id`, `tanggal_dibuat`, `tanggal_dirubah`, `status`) VALUES
(1, 'close', 'close', 1, NULL, NULL, NULL),
(2, 'admin', 'admin', NULL, NULL, NULL, NULL),
(3, 'asdasd', 'asdasd', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_detail`
--

CREATE TABLE IF NOT EXISTS `pengguna_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_id` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `bio` varchar(160) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `domisili` varchar(25) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `tanggal_dirubah` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pengguna_id` (`pengguna_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(25) NOT NULL,
  `pengguna_id` int(11) NOT NULL COMMENT 'penerima',
  `isi` text NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pengguna_id` (`pengguna_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_pengguna`
--

CREATE TABLE IF NOT EXISTS `tipe_pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipe_pengguna`
--

INSERT INTO `tipe_pengguna` (`id`, `nama`) VALUES
(1, 'super admin'),
(2, 'admin'),
(3, 'moderator'),
(4, 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`tipe_pengguna_id`) REFERENCES `tipe_pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna_detail`
--
ALTER TABLE `pengguna_detail`
  ADD CONSTRAINT `pengguna_detail_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
