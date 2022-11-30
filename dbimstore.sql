-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 10:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbimstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `ttransaksi`
--

CREATE TABLE `ttransaksi` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `jumlah_buku` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ttransaksi`
--

INSERT INTO `ttransaksi` (`id_buku`, `nama_buku`, `jumlah_buku`, `nama`, `alamat`) VALUES
(57, 'Real Face', 9, 'Ajie Ikrus Kusumadhany', 'kudus Jawa Tengah'),
(61, 'Hyouka', 17, 'Akihiko Kayaba', 'Semarang'),
(63, 'Another', 1, 'noer', 's'),
(65, 'The Dead Return', 3, 'Im Ajie', 'Kudus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ttransaksi`
--
ALTER TABLE `ttransaksi`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ttransaksi`
--
ALTER TABLE `ttransaksi`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
