-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 06:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `N_User` varchar(100) NOT NULL,
  `N_makanan` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`N_User`, `N_makanan`, `quantity`) VALUES
('hatsune', 'Yaki Udon', 0),
('hatsune', 'Yaki Udon', 0),
('hatsune', 'Yaki Udon', 1),
('hatsune', 'Yaki Udon', 5),
('hatsune', 'Yaki Udon', 10),
('hatsune', 'Yaki Udon', 10),
('hatsune', 'Yaki Udon', 10),
('hatsune', 'Yaki Udon', 10),
('hatsune', 'Yaki Udon', 10),
('hatsune', 'Yaki Udon', 10),
('hatsune', 'Yaki Udon', 8),
('hatsune', 'Yaki Udon', 7),
('hatsune', 'Yaki Udon', 7),
('hatsune', 'Yaki Udon', 2),
('hatsune', 'Yaki Udon', 2),
('hatsune', 'Kanesu Futo Udon', 2),
('hatsune', 'Kanesu Futo Udon', 2),
('hatsune', 'Kanesu Futo Udon', 1),
('hatsune', 'Yaki Udon', 1),
('hatsune', 'Kanesu Futo Udon', 1),
('hatsune', 'Kanesu Futo Udon', 1),
('hatsune', 'Reito Udon', 5),
('hatsune', 'Reito Udon', 5),
('hatsune', 'Green Tea Souffle', 5),
('hatsune', 'Green Tea Souffle', 5),
('hatsune', 'Green Tea Souffle', 5);

-- --------------------------------------------------------

--
-- Table structure for table `gizi`
--

CREATE TABLE IF NOT EXISTS `gizi` (
`ID_Gizi` int(11) NOT NULL,
  `ID_Makanan` int(11) NOT NULL,
  `Lemak` int(11) NOT NULL,
  `Protein` int(11) NOT NULL,
  `Karbohidrat` int(11) NOT NULL,
  `Natrium` int(11) NOT NULL,
  `Gula` int(11) NOT NULL,
  `Energi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`ID_Kategori` int(11) NOT NULL,
  `Nama` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_Kategori`, `Nama`) VALUES
(1, 'udon'),
(2, 'katsu'),
(3, 'sashimi'),
(4, 'sushi'),
(5, 'bento'),
(6, 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
`ID_Makanan` int(11) NOT NULL,
  `ID_Kategori` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Rating` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`ID_Makanan`, `ID_Kategori`, `Nama`, `Harga`, `Stock`, `Rating`) VALUES
(1, 1, 'Yaki Udon', 32500, 39, 0),
(2, 1, 'Kanesu Futo Udon', 35000, 35, 0),
(3, 1, 'Reito Udon', 38000, 31, 0),
(4, 1, 'Sanuki Udon', 34500, 37, 0),
(5, 2, 'Chicken Katsu Don', 38000, 42, 0),
(6, 2, 'Chicken Katsu', 35500, 33, 0),
(7, 2, 'Menchi Katsu', 34000, 41, 0),
(8, 2, 'Saboten', 45000, 37, 0),
(9, 3, 'Albacore Sashimi', 38000, 34, 0),
(10, 3, 'Tuna Sashimi', 41000, 30, 0),
(11, 3, 'Salmon Sashimi', 45000, 36, 0),
(12, 3, 'Horse Sashimi', 54500, 23, 0),
(13, 4, 'Temaki Sushi', 35500, 43, 0),
(14, 4, 'Dragon Roll', 38500, 47, 0),
(15, 4, 'Spicy Tuna Roll', 46000, 45, 0),
(16, 4, 'California Roll', 42000, 44, 0),
(17, 5, 'Karaage Bento', 55000, 48, 0),
(18, 5, 'Tonkatsu Bento', 50000, 43, 0),
(19, 5, 'Ebi Fry Bento', 53500, 41, 0),
(20, 5, 'Gyudon Bento', 56500, 52, 0),
(21, 6, 'Taro Tapioca Pearl', 24500, 40, 0),
(22, 6, 'Ujikintoki', 28000, 43, 0),
(23, 6, 'Nougat Caramel', 26500, 39, 0),
(24, 6, 'Green Tea Souffle', 24500, 35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
`ID_Nota` int(11) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TotalJumlah` int(11) NOT NULL,
  `TotalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`ID_Transaksi` int(11) NOT NULL,
  `ID_Nota` int(11) NOT NULL,
  `Nama` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FNama` varchar(20) NOT NULL,
  `LNama` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Bonus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Password`, `FNama`, `LNama`, `Email`, `Bonus`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0),
('hatsunemiku', '81dc9bdb52d04dc20036dbd8313ed055', 'hatsune', 'miku', 'h', 0),
('stfkj', '202cb962ac59075b964b07152d234b70', 'stefanus', 'kevin', 'demon.speed.viper@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gizi`
--
ALTER TABLE `gizi`
 ADD PRIMARY KEY (`ID_Gizi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`ID_Kategori`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
 ADD PRIMARY KEY (`ID_Makanan`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
 ADD PRIMARY KEY (`ID_Nota`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`ID_Transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gizi`
--
ALTER TABLE `gizi`
MODIFY `ID_Gizi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `ID_Kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
MODIFY `ID_Makanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
MODIFY `ID_Nota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `ID_Transaksi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
