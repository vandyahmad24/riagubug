-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Jul 2020 pada 03.20
-- Versi server: 5.7.24
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riagubug`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `deskripsi`) VALUES
(1, 'WEDDING ', 'Abadikan moment pernikahanmu'),
(2, 'PREWEDDING ', 'Paket Prwediing untuk bla bla'),
(3, 'KELUARGA', 'untuk foto bersama keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(50) NOT NULL,
  `kategori_id` int(50) NOT NULL,
  `foto` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `kategori_id`, `foto`) VALUES
(1, 3, '5f086f23711d5.png'),
(2, 2, '5f081dab95f82.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(100) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `fitur` varchar(255) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `kategori_id` int(100) NOT NULL,
  `harga` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `fitur`, `deskripsi_produk`, `kategori_id`, `harga`) VALUES
(4, 'harga yah', 'produksi,ini itu, apa hayo', 'Untuk apa hayo', 3, 240000),
(5, 'Apa hayoooooo', 'hayi,apa,haypooooiioi', 'dsmadnamdnwwe', 2, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `produk_id` int(50) NOT NULL,
  `alamat` varchar(250) NOT NULL DEFAULT '',
  `tanggal_foto` date NOT NULL,
  `no_wa` varchar(50) NOT NULL DEFAULT '',
  `tanggal_order` date NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `user_id`, `produk_id`, `alamat`, `tanggal_foto`, `no_wa`, `tanggal_order`, `status`) VALUES
(10, 10, 5, 'dsnadband', '2020-07-10', '0838381381', '2020-07-11', 'selesai'),
(11, 10, 5, 'dsnadband', '2020-07-10', '0838381381', '2020-07-11', 'selesai'),
(12, 9, 4, 'entah', '2020-07-11', '0828282', '2020-07-11', 'pending'),
(13, 9, 4, 'dsad', '2020-09-11', '321313', '2020-09-11', 'selesai'),
(14, 9, 4, 'dsad', '2020-09-12', '321313', '2020-09-12', 'selesai'),
(15, 9, 4, 'dsad', '2020-09-12', '321313', '2020-09-12', 'selesai'),
(16, 9, 4, 'dsad', '2020-10-12', '321313', '2020-10-12', 'selesai'),
(17, 9, 4, 'dsad', '2020-10-12', '321313', '2020-10-12', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL DEFAULT '0',
  `perkerjaan` varchar(100) NOT NULL,
  `testimoni` text NOT NULL,
  `file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `user_id`, `perkerjaan`, `testimoni`, `file`) VALUES
(3, 9, 'apa hayo', 'entahlah nak', '5f07e942291e8.jpg'),
(5, 9, 'Apa hayooooo', 'hayo apa', '5f0815c86fdc0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nama`, `password`, `no_hp`, `level`) VALUES
(9, 'admin', 'admin@gmail.com', 'admin pertama', '$2y$10$E9jsCdZSHC7eQaauhCrk0ujqn6FUSmO8pHMS5vmPDpMibfUHRD6K6', '088232218327', 'admin'),
(10, 'member', 'member@member.com', 'ini member', '$2y$10$wLalcXV0F4mzgWZd436gKu6yoWMfmSneTS8D3xty5cFzgCkp3Btgu', '088232218327', 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD KEY `Index 1` (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__kategori` (`kategori_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_produk_kategori` (`kategori_id`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__users` (`user_id`),
  ADD KEY `FK__produk` (`produk_id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_testimoni_users` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `FK__kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_produk_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `FK__produk` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `FK_testimoni_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
