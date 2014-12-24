-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2014 at 05:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihanyii`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_buku`
--

CREATE TABLE IF NOT EXISTS `db_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `db_buku`
--

INSERT INTO `db_buku` (`id`, `judul`, `penulis`, `date`) VALUES
(4, 'judul 1', 'penulis 1', '0000-00-00'),
(5, 'Judul 2', 'Penulis 2', '0000-00-00'),
(6, 'Judul 3', 'Penulis 3', '0000-00-00'),
(7, 'Judul 4', 'Penulis 4', '0000-00-00'),
(8, 'Judul 5', 'Penulis 5', '0000-00-00'),
(9, 'Judul 6', 'Penulis 6', '0000-00-00'),
(10, 'Judul 7', 'Penulis 7', '0000-00-00'),
(11, 'Judul 8', 'Penulis 8', '0000-00-00'),
(12, 'Judul 9', 'Penulis 9', '0000-00-00'),
(13, 'Judul 10', 'Penulis 10', '0000-00-00'),
(14, 'Judul 11', 'penulis 11', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
