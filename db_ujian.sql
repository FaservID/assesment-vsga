-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2023 pada 12.21
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) NOT NULL,
  `NIM` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `ipk` varchar(50) NOT NULL,
  `beasiswa` varchar(50) NOT NULL,
  `berkas` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT 'belum diverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `NIM`, `name`, `phone_number`, `semester`, `ipk`, `beasiswa`, `berkas`, `email`, `status`) VALUES
(10, '061830801159', 'Inggih Rembang Setyo', '082178526861', '5', '4', 'akademik', '30e61c3e89523bbdd49bf6ac279061b3.pdf', 'kontrapro3@gmail.com', 'Belum di Verifikasi'),
(11, '1116', 'Iman Kurniawan', '082178516861', '3', '3.7', 'akademik', '59684b30eac4ff6dc03d5844f217aca8.pdf', 'imank3664@gmail.com', 'Belum di Verifikasi'),
(12, '832938', 'Inggih Rembang Setyo', '2038208', '6', '3.4', 'akademik', '022b8511d92a3497f984db6702ea3de4.pdf', 'ksodako@oe', 'Belum di Verifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
