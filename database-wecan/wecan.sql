-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2021 pada 09.27
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `role_id`) VALUES
(1, 'admin', '$2y$10$eqb2DwcS2k14bHzfasV3f.lPUTc/7KhNV2JRIe7znjmyMzmRAffLK', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `coment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coment`
--

INSERT INTO `coment` (`id`, `name`, `coment`) VALUES
(1, 'Dinda Sutraa', 'Hallo dok..saya mau nanya apasih yang terjadi di otak jika seseorang merasakan jatuh cinta?trimakasih?'),
(2, 'Pevita Pearce Kinan', 'Hallo dok.Saya mau tanya, beberapa hari ini tenggorokan saya serasa berlendir dan gak enak, awalnya cuma tenggorokan saja, tapi sekarang sudah mulai merasa sesak Nafas Ringan..Selain itu, dada saya kadang terasa sakit, kadang berkeringat dimalam hari, saya punya riwayat TBC.Pertanyaannya, apakah itu gejala corona atau penyakit lainnya? Saya khawatir soalnya, terimakasih.'),
(4, 'Niki Minaj', ' Slmt sore dok maaf mau tanya tadi malam sy mimisan tadi pagi sy mimisan lagi tapi tdk sampai menetes dan sy tdk merasakan sakit sama sekali tapi cuaca di tempat sy sangat panas kira\" menurut doktet sy sakit apa ya dok terimakasih'),
(5, 'Sarah Snyder', ' Hi dok, saya ingin bertanya. Apa benar jika sudah tertular corona maka pasien yang sembuh bisa terkena kanker paru-paru? Ada juga yang bilang kalau sudah pernah kena, nanti fungsi parunya jadi berkurang. Apa benar, dok? Mohon infonya ya dok.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `namaDonasi` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nomor_ponsel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `username`, `nomor_ponsel`, `email`, `password`, `role_id`) VALUES
(1, 'cek', '1234', 'cekk123@gmail.com', '$2y$10$eqb2DwcS2k14bHzfasV3f.lPUTc/7KhNV2JRIe7znjmyMzmRAffLK', 2),
(2, 'coba lagi', '123456', 'maizaradhiya@365.telkomuniversity.ac.id', '$2y$10$E3FHGMKtmqIB5HIuNbsuhupvlP3v8BBWdceb8hrXh.yXCH1yoRq3G', 2),
(3, 'cekk', '123123', 'maizaradhiya@365.telkomuniversity.ac.id', '$2y$10$bR/xYKEcji6TcixU98T/AeV4jgJWtMIxLAEtDtj80qyzNhq11uv6i', 2),
(4, 'wekwok', '081122334455', 'azehcd@gmail.com', '$2y$10$6vpv0Xw6SD8v8cMj5x53wOIwYsl.ksGXsc3Mheb8gnWENhQcPaSl.', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `id_pd` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `namaEvent` varchar(255) NOT NULL,
  `durasiEvent` varchar(255) NOT NULL,
  `targetDonasi` varchar(255) NOT NULL,
  `deskripsiEvent` varchar(255) NOT NULL,
  `buktiEvent` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `id_pd`, `nama_lengkap`, `foto_ktp`, `namaEvent`, `durasiEvent`, `targetDonasi`, `deskripsiEvent`, `buktiEvent`, `status`) VALUES
(14, '12', 'maiza radhiya', 'pd_maiza.jpg', 'Donasi Melindungi Tenaga Medis dari COVID-19!', '8', '2000000', 'Penyebaran virus corona di Indonesia terus meluas. Dampak  virus ini sangat mengkhawatirkan: Ribuan orang positif dan dalam pengawasan, sementara ratusan lainnya meninggal dunia.', 'covid195.jpg', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggalang_dana`
--

CREATE TABLE `penggalang_dana` (
  `id_pd` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nomor_ponsel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_ktp` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penggalang_dana`
--

INSERT INTO `penggalang_dana` (`id_pd`, `username`, `nama_lengkap`, `nomor_ponsel`, `email`, `nomor_ktp`, `foto_ktp`, `password`, `role_id`, `is_active`) VALUES
(11, 'pd', 'penggalang dana satu', '082212345678', 'pdsatu@gmail.com', '30208400060182', '2.jpg', '$2y$10$k36Qh3PHV1WteMIt7D2WIuyszX9bnra4/1ZF4tLvBJ3YVm6eGRRhu', 3, '0'),
(12, 'mzrdh', 'maiza radhiya', '087786319035', 'maizaradhiya@gmail.com', '32001120301203123', 'pd_maiza.jpg', '$2y$10$kBZBrUkBglTm89mXmHyn0ugtLOV2MVIwizzjFeBHyBkv3EU1BtFFC', 3, '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `penggalang_dana`
--
ALTER TABLE `penggalang_dana`
  ADD PRIMARY KEY (`id_pd`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `penggalang_dana`
--
ALTER TABLE `penggalang_dana`
  MODIFY `id_pd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
