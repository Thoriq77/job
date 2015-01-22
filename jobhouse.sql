-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2015 at 09:39 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobhouse`
--
CREATE DATABASE IF NOT EXISTS `jobhouse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jobhouse`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_ses` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(13) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_career`
--

CREATE TABLE IF NOT EXISTS `user_career` (
  `id_career` int(11) NOT NULL AUTO_INCREMENT,
  `nm_depan_career` varchar(20) NOT NULL,
  `nm_belakang_career` varchar(30) NOT NULL,
  `jenis_kelamin_career` varchar(10) NOT NULL,
  `email_career` varchar(30) NOT NULL,
  `pass_career` varchar(20) NOT NULL,
  `status_career` varchar(13) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_career`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
