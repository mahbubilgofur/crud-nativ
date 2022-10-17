-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 07:38 AM
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
-- Database: `perpustakaan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(20) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `diskripsi` text DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `diskripsi`, `penulis`, `penerbit`, `tahun_terbit`, `kategori`) VALUES
('01', 'To Kill The Mockingbird', ' pemerkosaan dan diskriminasi ras', 'Harper Lee', 'J. B. Lippincott & Co.', 1960, 'Novel'),
('02', 'Nineteen Eighty-Four', ' peperangan tiada akhir', 'George Orwell', 'Secker & Warburg', 1949, 'novel'),
('03', 'Pride and Prejudice', 'pemuda kaya baru saja pindah ke Netherfield', 'Jane Austen', 'T. Egerton, Whitehall', 1813, 'novel'),
('04', 'Harry Potter', 'prasangka dan korupsi', 'J.K. Rowling', 'Bloomsbury Publishing', 21, 'novel'),
('05', 'Kepulauan Gulag', ' pengalaman Solzhenitsyn sendiri sebagai tahanan gulag', 'Aleksandr Solzhenitsyn', 'Éditions du Seuil', 1973, 'novel'),
('06', 'The Name of the Rose', 'keimanan bisa membawa seseorang berhadapan dengan kematian', 'Umberto Eco', 'Bentang Pustaka', 2017, 'novel'),
('07', ' Fiesta', ' mempertahankan makna perburuan kesenangan, perebutan cinta', 'Ernest Hemingway', 'The Old Man and the Sea', 1899, 'novel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
