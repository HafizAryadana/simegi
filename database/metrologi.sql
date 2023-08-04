-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 12:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metrologi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `jenis_pemilik` text NOT NULL,
  `no_identitas` text NOT NULL,
  `jenis_identitas` text NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `no_hp` text NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` text NOT NULL,
  `provinsi` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kelurahan` text NOT NULL,
  `berkas_pemilik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id`, `user_id`, `jenis_pemilik`, `no_identitas`, `jenis_identitas`, `nama`, `email`, `no_hp`, `alamat`, `rt_rw`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `berkas_pemilik`) VALUES
(1, 2, 'tangan pertama', '34234242323', 'SIUP', 'dhvfhdfvjh', 'hfdjvhbjh', '7264823768', 'jsdbjhb', 'hbfdjhvbj', 'jdhfvbjh', 'dhfbvjh', 'bjsdbvjbqjvb', 'hdfjb', '64ccd3a8cf5e3.jpg'),
(2, 2, 'tangan pertama', '37538538583', 'SIUP', 'hdfhdjkfhvj', 'dhfghdjfdhjh', '82374923749', 'fhgjdhg', 'gfudgu', 'yguygvu', 'eygfudfygu', 'ywgfuyegu', 'ygfuregu', '64ccd65b7cab2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `level` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', '12345', 'admin'),
(2, 'test', 'test@gmail.com', '12345', 'user'),
(3, 'test lagi', 'testlagi@gmail.com', '12345', 'user'),
(4, 'rezatest', 'reza@gmail.com', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `uttp`
--

CREATE TABLE `uttp` (
  `id` int(11) NOT NULL,
  `pemilik_id` int(11) DEFAULT NULL,
  `id_uttp` text NOT NULL,
  `uttp_besaran` text NOT NULL,
  `jenis_uttp` text NOT NULL,
  `range_kapasitas` text NOT NULL,
  `merk` text NOT NULL,
  `tipe` text NOT NULL,
  `no_seri` text NOT NULL,
  `berkas_uttp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uttp`
--

INSERT INTO `uttp` (`id`, `pemilik_id`, `id_uttp`, `uttp_besaran`, `jenis_uttp`, `range_kapasitas`, `merk`, `tipe`, `no_seri`, `berkas_uttp`) VALUES
(6, 1, '3423', 'waktu', 'sdbfskj', 'bfjbj', 'b', 'bwj', '423', '64ccd58f432bd.jpg'),
(7, 1, '12123', 'panjang', 'sfhdkjh', 'dhfigudhfiuh', 'hdfgiuhdifh', 'gieruhiuh', '834759347593', '64ccd5ae39f32.jpg'),
(8, 1, '324', 'volume', 'dfbvjdhfbg', 'hdfbvjhb', 'hdbvjhb', 'vhdbjhb', '93248209', '64ccd5ff93de0.jpg'),
(9, 1, '2323', 'panjang', 'qwerwer', 'werw', 'ewrew', 'ewrfw', '24534', '64ccd63e35738.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uttp`
--
ALTER TABLE `uttp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pemilik` (`pemilik_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uttp`
--
ALTER TABLE `uttp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `uttp`
--
ALTER TABLE `uttp`
  ADD CONSTRAINT `fk_pemilik` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
