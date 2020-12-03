-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 08:01 AM
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
(1, 'Kediri', 'A', 'Baik', 'Cukup', 'Sangat Kompeten', 4, 'Ada dan Kurang Aktif', 3, 2, 2, 3, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(2, 'Surabaya', 'C', 'Baik', 'Kurang', 'Cukup Kompeten', 2, 'Ada dan Aktif', 1, 2, 1, 1, 4, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(3, 'Jakarta Timur', 'B', 'Cukup', 'Cukup', 'Kompeten', 7, 'Ada dan Kurang Aktif', 2, 1, 2, 2, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(4, 'Malang', 'B', 'Cukup', 'Cukup', 'Sangat Kompeten', 11, 'Ada dan Aktif', 2, 1, 2, 3, 1, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(5, 'Badas', 'C', 'Baik', 'Lengkap', 'Sangat Kompeten', 16, 'Ada dan Kurang Aktif', 1, 2, 3, 3, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(6, 'Seoul', 'A', 'Sangat Baik', 'Lengkap', 'Sangat Kompeten', 30, 'Ada dan Aktif', 3, 3, 3, 3, 0, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(8, 'Denpasar', 'B', 'Baik', 'Lengkap', 'Sangat Kompeten', 13, 'Ada dan Kurang Aktif', 2, 2, 3, 3, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(9, 'Pare', 'C', 'Cukup', 'Cukup', 'Sangat Kompeten', 5, 'Ada dan Aktif', 1, 1, 2, 3, 2, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(11, 'conba', 'B', 'Sangat Baik', 'Cukup', 'Kompeten', 18, 'Ada dan Kurang Aktif', 2, 3, 2, 2, 1, 2, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(13, 'Tegowangi', 'A', 'Sangat Baik', 'Lengkap', 'Sangat Kompeten', 1, 'Ada dan Aktif', 3, 3, 3, 3, 1, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1),
(14, 'SDK Santa Maria Pare', 'A', 'Sangat Baik', 'Lengkap', 'Sangat Kompeten', 11, 'Ada dan Aktif', 3, 3, 3, 3, 1, 3, 0.1, 0.15, 0.13, 0.2, 0.17, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `data_hasil`
--

CREATE TABLE `data_hasil` (
  `id_hasil` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `hasil` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_hasil`
--

INSERT INTO `data_hasil` (`id_hasil`, `alamat`, `hasil`, `tanggal`) VALUES
(224, 'Kediri', 0.1586, '2020-11-25 01:29:00'),
(225, 'Surabaya', -0.0344, '2020-11-25 01:29:00'),
(226, 'Jakarta Timur', 0.1087, '2020-11-25 01:29:00'),
(227, 'Malang', 0.1393, '2020-11-25 01:29:00'),
(228, 'Badas', 0.142, '2020-11-25 01:29:00'),
(229, 'Seoul', 0.2401, '2020-11-25 01:29:00'),
(230, 'Denpasar', 0.1596, '2020-11-25 01:29:00'),
(231, 'Pare', 0.0839, '2020-11-25 01:29:00'),
(232, 'conba', 0.1357, '2020-11-25 01:29:00'),
(233, 'Tegowangi', 0.2023, '2020-11-25 01:29:00'),
(234, 'SDK Santa Maria Pare', 0.2023, '2020-11-25 01:29:00'),
(235, 'Kediri', 0.1586, '2020-11-26 05:19:00'),
(236, 'Surabaya', -0.0344, '2020-11-26 05:19:00'),
(237, 'Jakarta Timur', 0.1087, '2020-11-26 05:19:00'),
(238, 'Malang', 0.1393, '2020-11-26 05:19:00'),
(239, 'Badas', 0.142, '2020-11-26 05:19:00'),
(240, 'Seoul', 0.2401, '2020-11-26 05:19:00'),
(241, 'Denpasar', 0.1596, '2020-11-26 05:19:00'),
(242, 'Pare', 0.0839, '2020-11-26 05:19:00'),
(243, 'conba', 0.1357, '2020-11-26 05:19:00'),
(244, 'Tegowangi', 0.2023, '2020-11-26 05:19:00'),
(245, 'SDK Santa Maria Pare', 0.2023, '2020-11-26 05:19:00'),
(246, 'Kediri', 0.1586, '2020-11-26 05:20:00'),
(247, 'Surabaya', -0.0344, '2020-11-26 05:20:00'),
(248, 'Jakarta Timur', 0.1087, '2020-11-26 05:20:00'),
(249, 'Malang', 0.1393, '2020-11-26 05:20:00'),
(250, 'Badas', 0.142, '2020-11-26 05:20:00'),
(251, 'Seoul', 0.2401, '2020-11-26 05:20:00'),
(252, 'Denpasar', 0.1596, '2020-11-26 05:20:00'),
(253, 'Pare', 0.0839, '2020-11-26 05:20:00'),
(254, 'conba', 0.1357, '2020-11-26 05:20:00'),
(255, 'Tegowangi', 0.2023, '2020-11-26 05:20:00'),
(256, 'SDK Santa Maria Pare', 0.2023, '2020-11-26 05:20:00'),
(257, 'Kediri', 0.1586, '2020-12-02 19:12:00'),
(258, 'Surabaya', -0.0344, '2020-12-02 19:12:00'),
(259, 'Jakarta Timur', 0.1087, '2020-12-02 19:12:00'),
(260, 'Malang', 0.1393, '2020-12-02 19:12:00'),
(261, 'Badas', 0.142, '2020-12-02 19:12:00'),
(262, 'Seoul', 0.2401, '2020-12-02 19:12:00'),
(263, 'Denpasar', 0.1596, '2020-12-02 19:12:00'),
(264, 'Pare', 0.0839, '2020-12-02 19:12:00'),
(265, 'conba', 0.1357, '2020-12-02 19:12:00'),
(266, 'Tegowangi', 0.2023, '2020-12-02 19:12:00'),
(267, 'SDK Santa Maria Pare', 0.2023, '2020-12-02 19:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `bobot` varchar(255) NOT NULL,
  `atribut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kriteria`
--

INSERT INTO `data_kriteria` (`id_kriteria`, `nama`, `kode`, `bobot`, `atribut`) VALUES
(1, 'Akreditasi', 'kriteria1', '0.25', 'Benefit'),
(2, 'Prestasi', 'kriteria2', '0.15', 'Benefit'),
(3, 'Fasilitas', 'kriteria3', '0.1', 'Benefit'),
(4, 'Tenaga Pendidik', 'kriteria4', '0.2', 'Benefit'),
(5, 'Jarak Tempuh', 'kriteria5', '0.17', 'Cost'),
(6, 'Ekstrakulikuler', 'kriteria6', '0.1', 'Benefit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `data_hasil`
--
ALTER TABLE `data_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  MODIFY `id_alternatif` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_hasil`
--
ALTER TABLE `data_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `data_kriteria`
--
ALTER TABLE `data_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
