-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2019 at 02:39 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `user_id`, `title`, `image`, `deskripsi`, `tanggal`) VALUES
(1, 1, 'Program Rumah DP Nol Rupiah', '', 'Setelah melalui sejumlah penyesuaian, akhirnya pembangunan tahap awal Rumah DP Nol Rupiah tersebut rampung dan disambut antusias oleh masyarakat Ibu Kota.\r\n\r\nDalam keterangan persnya, Pemerintah Provinsi (Pemprov) DKI Jakarta mengatakan, pada tahap pertama, 28 Juli 2019, 1.790 orang dinyatakan lolos seleksi program DP Nol Rupiah, dari 2.359 pendaftar.\r\n\r\nMelihat antusiasme masyarakat masih tinggi, Pemerintah Provinsi DKI Jakarta membuka pendaftaran gelombang kedua pada 7 Agustus 2019.\r\n\r\nHingga saat ini masih dibuka pendaftaran untuk penduduk dengan KTP DKI Jakarta yang berminat.\r\n\r\nKetika Gubernur DKI Jakarta Anies Baswedan meresmikan rumah DP Nol Rupiah di Nuansa Pondok Kelapa, Jakarta Timur, 780 unit telah selesai dibangun.', '2019-11-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `role`) VALUES
(2, 'sd', 'sd', 'Editor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
