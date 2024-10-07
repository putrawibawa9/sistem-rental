-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2024 at 03:34 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datakendaraanrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int NOT NULL,
  `nama_kendaraan` varchar(100) NOT NULL,
  `tahun_kendaraan` int NOT NULL,
  `jenis` int NOT NULL,
  `foto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `kode_sepatu` int NOT NULL,
  `merk_sepatu` varchar(100) NOT NULL,
  `warna_sepatu` varchar(100) NOT NULL,
  `jenis_sepatu` varchar(100) NOT NULL,
  `bahan_sepatu` varchar(100) NOT NULL,
  `deskripsi_sepatu` varchar(100) NOT NULL,
  `tanggal_launching_sepatu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`kode_sepatu`, `merk_sepatu`, `warna_sepatu`, `jenis_sepatu`, `bahan_sepatu`, `deskripsi_sepatu`, `tanggal_launching_sepatu`) VALUES
(1, 'Nike', 'Hitam', 'Sepatu Pria', 'Kain', 'Sepatu sneakers hitam dengan desain klasik.', '2023-05-15'),
(2, 'Adidas', 'Putih', 'Sepatu Anak', 'Mesh', 'Sepatu lari putih dengan teknologi penyangga kaki.', '2023-07-20'),
(3, 'New Balance', 'Biru', 'Sepatu Wanita', 'Kulit', 'Sepatu kasual biru dengan aksen merah.', '2023-09-10'),
(4, 'Puma', 'Merah', 'Sepatu Anak', 'Sintetis', 'Sepatu futsal merah dengan sol anti-slip.', '2023-11-25'),
(5, 'Vans', 'Kuning', 'Sepatu Pria', 'Kanvas', 'Sepatu slip-on kuning dengan motif kotak-kotak.', '2024-02-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`kode_sepatu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `kode_sepatu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
