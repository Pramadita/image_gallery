-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 08:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id_artist` int(11) NOT NULL,
  `artist_name` varchar(50) DEFAULT NULL,
  `Sosmed` varchar(30) DEFAULT NULL,
  `CP` varchar(250) DEFAULT NULL,
  `art1` varchar(100) DEFAULT NULL,
  `art2` varchar(100) DEFAULT NULL,
  `art3` varchar(100) DEFAULT NULL,
  `Story1` varchar(250) DEFAULT NULL,
  `Story2` varchar(250) DEFAULT NULL,
  `Story3` varchar(250) DEFAULT NULL,
  `size1` varchar(20) DEFAULT NULL,
  `size2` varchar(20) DEFAULT NULL,
  `size3` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id_artist`, `artist_name`, `Sosmed`, `CP`, `art1`, `art2`, `art3`, `Story1`, `Story2`, `Story3`, `size1`, `size2`, `size3`) VALUES
(3, 'Abdi Setiawan', 'Ig : @studio_211', 'abdi setiawan\r\nhttps://www.youtube.com/c/abdisetiawan211\r\nwww.sica.asia', 'Abdi_Setiawan-Ultraman-226128152Gun-and-Milk226128153-1.jpeg', 'Abdi_Setiawan-The-Shooter-1.jpeg', 'Abdi-Setiawan-Target-2.jpeg', 'Ultraman', 'Penembak', 'Target', NULL, NULL, NULL),
(4, 'Matej Jan', 'Ig: @retronator', 'www.patreon.com/retro', 'Matej_Jan_-_Guy.jpeg', 'Matej_Jan_-_Girl.jpeg', '', 'Guy', 'Girl', '', NULL, NULL, NULL),
(11, 'yuytu', 'ykf', 'kyu', 'Screenshot_(7).png', NULL, NULL, 'kyku', NULL, NULL, NULL, NULL, NULL),
(12, 'gdgdfg', 'sdad', 'fsfd', 'Screenshot (4).png', 'Screenshot (10).png', 'Screenshot (11).png', 'fsdfsdg', 'gsdgs', 'gdgdf', '228270', '128246', '127481');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `Img1` int(11) NOT NULL,
  `Img2` int(11) DEFAULT NULL,
  `Img3` int(11) DEFAULT NULL,
  `Story1` varchar(250) NOT NULL,
  `Story2` varchar(250) DEFAULT NULL,
  `Story3` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id_artist`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
