-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2023 at 02:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungin`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan_11`
--

CREATE TABLE `laporan_11` (
  `Transaksi_id` int NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `nominal` int NOT NULL,
  `Tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `laporan_11`
--

INSERT INTO `laporan_11` (`Transaksi_id`, `nama_transaksi`, `kategori`, `nominal`, `Tanggal`) VALUES
(5, 'MiChat', '1', 300000, '2023-06-09 00:00:00'),
(6, 'asdasdasd', '1', 300000, '2023-06-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-06-13-124247', 'App\\Database\\Migrations\\TableUser', 'default', 'App', 1686660392, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'cakjas', '$2y$10$s2I.0UUfnrPS0zjJdu94F.4XTS8oNw38J03q/HTOchStk32gt35JK', 'Cakrawala Jasmani Maryadi S.E.'),
(2, 'karmana', '$2y$10$4Vyish2QaWvCDBjatZORTO0zH88Nva/xoLubvIHKgYeT5fz0A2DL2', 'Karma Najmudin'),
(3, 'opbanget', '$2y$10$NLGsaND1wlHDDmaEm5zVb.StVFFBEfKwYqw7q/pRurrZ4Njtd9cn6', 'Ophelia Ana Zulaika S.Kom'),
(4, 'gabbyva', '$2y$10$qD9/D/.Uobd8zld5a4WIm.lQJnWCeEA.nfeC6htJxFhAv.fGYXoSy', 'Gabriella Vanesa Melani M.M.'),
(5, 'samhab', '$2y$10$MneebU9241UN..YObFXA5eKZ5Rdfw.VPnvZ3XraGeM4nxA89vVDX6', 'Samsul Habibi'),
(6, 'betindah', '$2y$10$zduVeREo2hJhNdl.Lfuw6OyPI832btDczbxbGbmTxgRigzMwfHXwS', 'Betania Indah Rahimah S.E.'),
(7, 'indragun', '$2y$10$G.TyTAMWK2UfN4PNBtIoSeJDyjCmHGNLoN/Jx/C2ggJ/SOPRBg1WW', 'Indra Gunarto S.Farm'),
(8, 'ratnashak', '$2y$10$NpLpe6e/aOpiuEwHhekFLuycElgG2iIMiA3ITfY6JesKRsmXz6zr6', 'Ratna Shakila Utami S.Farm'),
(9, 'gadangsuw', '$2y$10$bm7iWoMI308O9G7UpeS/.elNxRmCKWd8xdBPcoTYnwPdC8bB5s9Ta', 'Gadang Suwarno'),
(10, 'olihas', '$2y$10$DxPy.aBtS0LfClfyFj2XA.tlWroCU9hjY2pA1Zvqtims2jy7Zc4FC', 'Oliva Hasna Suartini S.E.I'),
(11, 'jotaro', '$2y$10$/mOzDy0InIQRfxFR9NXr4uzm9SQcbfgtSbKUhazItNubw4APW5NXK', 'jotarokujo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_11`
--
ALTER TABLE `laporan_11`
  ADD PRIMARY KEY (`Transaksi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan_11`
--
ALTER TABLE `laporan_11`
  MODIFY `Transaksi_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
