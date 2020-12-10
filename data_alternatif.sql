-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 06:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moorasekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `id_alternatif` int(50) NOT NULL,
  `alamat` text NOT NULL,
  `kriteria1` varchar(255) NOT NULL,
  `kriteria2` varchar(255) NOT NULL,
  `kriteria3` varchar(255) NOT NULL,
  `kriteria4` varchar(255) NOT NULL,
  `kriteria5` int(255) NOT NULL,
  `kriteria6` varchar(255) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `b1` double NOT NULL,
  `b2` double NOT NULL,
  `b3` double NOT NULL,
  `b4` double NOT NULL,
  `b5` double NOT NULL,
  `b6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_alternatif`
--

INSERT INTO `data_alternatif` (`id_alternatif`, `alamat`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`, `kriteria6`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`) VALUES
(1, 'SD Muhammadiyah 1', 'A', 'Baik', 'Cukup', 'Sangat Kompeten', 4, 'Ada dan Kurang Aktif', 3, 2, 2, 3, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(2, 'SD Fajar Mulia', 'C', 'Baik', 'Kurang', 'Cukup Kompeten', 2, 'Ada dan Aktif', 1, 2, 1, 1, 4, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(3, 'SD Islam Ananda', 'B', 'Cukup', 'Cukup', 'Kompeten', 7, 'Ada dan Kurang Aktif', 2, 1, 2, 2, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(4, 'SD Emaus Pagu', 'B', 'Cukup', 'Cukup', 'Sangat Kompeten', 11, 'Ada dan Aktif', 2, 1, 2, 3, 1, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(5, 'SD Aisyiyah', 'C', 'Baik', 'Lengkap', 'Sangat Kompeten', 16, 'Ada dan Kurang Aktif', 1, 2, 3, 3, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(6, 'SD Kristen Baptis', 'A', 'Sangat Baik', 'Lengkap', 'Sangat Kompeten', 30, 'Ada dan Aktif', 3, 3, 3, 3, 0, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(8, 'SDK 1 Frateran', 'B', 'Baik', 'Lengkap', 'Sangat Kompeten', 13, 'Ada dan Kurang Aktif', 2, 2, 3, 3, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(9, 'SD Islam Bandar Kidul', 'C', 'Cukup', 'Cukup', 'Sangat Kompeten', 5, 'Ada dan Aktif', 1, 1, 2, 3, 2, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(11, 'SD YBPK 1', 'B', 'Sangat Baik', 'Cukup', 'Kompeten', 18, 'Ada dan Kurang Aktif', 2, 3, 2, 2, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(13, 'SDK Tunas Harapan', 'A', 'Sangat Baik', 'Lengkap', 'Sangat Kompeten', 1, 'Ada dan Aktif', 3, 3, 3, 3, 1, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(14, 'SDK Santa Maria Pare', 'A', 'Sangat Baik', 'Lengkap', 'Sangat Kompeten', 11, 'Ada dan Aktif', 3, 3, 3, 3, 1, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(15, 'SD Kristen Petra', 'A', 'Sangat Baik', 'Lengkap', 'Sangat Kompeten', 8, 'Ada dan Aktif', 3, 3, 3, 3, 3, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(23, 'SDK Baptis', 'A', 'Sangat Baik', 'Lengkap', 'Sangat Kompeten', 30, 'Ada dan Aktif', 3, 3, 3, 3, 0, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  MODIFY `id_alternatif` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
