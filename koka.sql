-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Agu 2021 pada 09.59
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_koka`
--

CREATE TABLE `db_koka` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `no_hp` varchar(150) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_koka`
--

INSERT INTO `db_koka` (`id`, `nama`, `email`, `no_hp`, `img`) VALUES
(27, 'Wan Kamarul Zaman Haris Munandar', 'tkuroko608@gmail.com', '082339785339', 'IMG_20210403_194705_929.jpg'),
(28, 'Dipsi', '4drianmaulan4@gmail.com', '082339785339', 'IMG_20210221_181520_942.jpg'),
(29, 'djasjkdkasj', 'h4ris030500@gmail.com', '12121212121212', 'IMG_20210403_194705_929.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_koka`
--
ALTER TABLE `db_koka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_koka`
--
ALTER TABLE `db_koka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
