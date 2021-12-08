-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2021 pada 17.27
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scope`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(19) NOT NULL,
  `user__id` bigint(19) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `url__address` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `user__id`, `email`, `fullname`, `username`, `password`, `url__address`, `date`) VALUES
(9, 345629754017, 'anggie.t17210@gmail.com', 'Anggie Tamara', 'achieto', 'achi1234', 'achieto.achieto', '2021-12-07 01:12:58'),
(10, 9910675577783416, 'anggie.t17210@gmail.com', 'Anggie Tamara', 'achieto', 'achi1234', 'achieto.achieto', '2021-12-07 08:53:05'),
(11, 45584992970, 'hibiki.17210@gmail.com', 'Hibiki', 'admin', 'admin', 'admin.admin', '2021-12-07 09:31:19'),
(12, 839364540601, 'apriladwi68@gmail.com', 'Aprila Dwi Utami', 'apriladwiutami', 'aprilajamet', 'apriladwiutami.apriladwiutami', '2021-12-08 16:24:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user__id` (`user__id`),
  ADD KEY `email` (`email`),
  ADD KEY `fullname` (`fullname`),
  ADD KEY `username` (`username`),
  ADD KEY `url__adress` (`url__address`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
