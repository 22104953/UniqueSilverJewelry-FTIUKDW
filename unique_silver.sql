-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2013 at 05:56 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unique_silver`
--

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(5, 'gkgkg', 'efanglend@yahoo.com', 'r', '2013-11-08'),
(6, 'komang', 'de_ndree@yahoo.com', 'jelek', '2013-11-08'),
(7, '1', '2', '3', '2013-11-09'),
(8, '5', '6', '7', '2013-11-09'),
(9, 'rere', 'gi', 'na', '2013-11-09'),
(10, 'r', 'rererrererrerreer', 'r', '2013-11-10'),
(11, 'hahahah', 'hahaha', 'hahaha', '2013-11-10'),
(12, 'aaamang', 'dawa', 'asdds', '2013-12-01'),
(13, 'komang', 'abc@yahoo.com', 'wooow', '2013-12-02'),
(14, 'komang', 'abc@yahoo.com', 'wooow', '2013-12-02'),
(15, 'adi', 'adi@yahoo.com', 'halo!', '2013-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `item_penjualan`
--

CREATE TABLE IF NOT EXISTS `item_penjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `penjualan_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga` decimal(22,2) NOT NULL,
  `kuantitas` decimal(22,2) NOT NULL,
  `jumlah_harga` decimal(22,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `item_penjualan`
--


-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pelanggan`
--


-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `total` decimal(22,2) NOT NULL,
  `biaya pengiriman` decimal(22,2) NOT NULL,
  `jumlah_total` decimal(22,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `penjualan`
--


-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `gambar_detail` varchar(50) NOT NULL,
  `hpp` decimal(22,2) NOT NULL,
  `harga` decimal(22,2) NOT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `kategori`, `kode`, `deskripsi`, `gambar`, `gambar_detail`, `hpp`, `harga`, `waktu_masuk`) VALUES
(5, 'Rectanglular Pave', 'anting', 'AN0001', '925 Sterling Silver', 'AN0001-120x120.jpg', 'AN0001-250x250.jpg', '200000.00', '290000.00', '2013-12-02 16:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(50) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `telepon`, `password`) VALUES
(1, 'admin', 'adminn', 'admin@progweb.com', '08156934040', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
