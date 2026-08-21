-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2026 at 09:27 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `no_anggota` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `pekerjaan` enum('PNS','Swasta','Wiraswasta','Pedagang','Petani') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`no_anggota`, `nama_anggota`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `tanggal_daftar`, `pekerjaan`, `alamat`) VALUES
('26001', 'Hariyanto Wibowo', 'L', 'Bandar Lampung', '2026-07-01', '2026-08-21', 'Swasta', 'Perumahan Griya Cempaka Permai Sumber Agung Bandar Lampung'),
('26002', 'Bagus', 'L', 'Bandar Lampung', '2026-07-01', '2026-08-20', 'PNS', 'Bandar Lampung'),
('39', 'Atque repudiandae qu', 'L', 'Et est debitis labor', '1972-05-15', '1997-02-12', 'Swasta', 'Facere harum quod si'),
('8', 'Sed sint optio ulla', 'P', 'Non excepturi aut fu', '1995-08-15', '2024-04-24', 'Swasta', 'Et eos sed qui maxi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`no_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
