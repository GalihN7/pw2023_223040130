-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 02:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `generasi` varchar(50) NOT NULL,
  `tahun` char(15) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `generasi`, `tahun`, `materi`, `gambar`) VALUES
(1, 'Komputer Generasi Pertama', '1940-1956', 'Perangkat Komputer yang pertama ternyata dikembangkan untuk desain pesawat dan peluru kendali. Kompu', 'komputer.jpg'),
(2, 'Komputer Generasi KeduaKomputer Generasi Kedua', '1956-1963', 'Diciptakannya transistor pada masa ini mengubah wajah komputer generasi pertama. Transistor menggant', 'komputergen2.jpg'),
(3, 'Komputer Generasi Ketiga', '1964-1971', 'Pengembangan integrated circuit menjadi penanda komputer generasi ketiga. Dalam pemakaian komputer g', 'gen3.png'),
(4, 'Komputer Generasi Keempat', '1971-sekarang', 'Mikroprosesor menjadi terobosan dalam mendatangkan komputer generasi keempat dengan menyatukan ribua', 'gen4.png'),
(5, 'Komputer Generasi Kelima', 'Sekarang-', 'komputer generasi kelima ini adalah komputer yang kita gunakan. Ditandai dengan munculnya LSI atau l', 'laptop.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'abdul', 'halim@gmail.com', '$2y$10$hV5ZtILqThtbfnlOxYeb9.kHzt9Zclsq7j6IwTaCbzVBB6rJQZeWq'),
(3, 'galih', 'Galih.223040130@mail.unpas.ac.id', '$2y$10$IpXfptG2N3GQI8RuasxhUu6DTe6o1Djj4kW2NmgjLTKq7mF2O8o0.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
