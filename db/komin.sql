-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2023 pada 08.13
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `umur`, `jenis_kelamin`, `kelas`, `file`) VALUES
(6, 'Zagar', 'Bugul Kidul', 17, 'Pria', '13', 'images/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sign_in`
--

CREATE TABLE `sign_in` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `umur` int(5) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sign_in`
--

INSERT INTO `sign_in` (`id`, `nama`, `alamat`, `umur`, `jenis_kelamin`, `email`, `foto`) VALUES
(205, 'Zagar', 'sacd', 17, 'Pria', 'asd@gmail.com', '1174609805_1.PNG'),
(206, 'qwrfas', 'dhsx', 13, 'Pria', 'asd@gmail.com', '774881148_2.PNG'),
(208, 'dsg', 'sdszcx', 17, 'Pria', 'asd@gmail.com', '612748670_2.PNG'),
(209, 'as', 'asdasdasdas', 11, 'Pria', 'asd@gmail.com', '1283524514_1.PNG'),
(210, 'c', 'aDAD', 56, '', 'asd@gmail.com', '2097491306_1.PNG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
