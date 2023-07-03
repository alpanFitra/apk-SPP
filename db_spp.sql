-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2023 pada 00.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(14, '10 BDJP', 'Bisnis Dalam Jaringan dan Pemasaran'),
(15, '10 DKV', 'Desain Komunikasi Visual'),
(16, '10 MM', 'Multimedia'),
(17, '10 OTKP', 'Otomatisasi dan Tata Kelola Perkantoran'),
(18, '10 RPL', 'Rekayasa Perangkat Lunak'),
(19, '10 TBS', 'Tata Busana'),
(20, '11 AKL', 'Akuntansi dan Keuangan Lembaga'),
(21, '11 BDJP', 'Bisnis Dalam Jaringan dan Pemasaran'),
(22, '11 DKV', 'Desain Komunikasi Visual'),
(23, '10 MM', 'Multimedia'),
(24, '11 OTKP', 'Otomatisasi dan Tata Kelola Perkantoran'),
(25, '11 RPL', 'Rekayasa Perangkat Lunak'),
(26, '11 TBS', 'Tata Busana'),
(27, '12 AKL', 'Akuntansi dan Keuangan Lembaga'),
(28, '12 BDJP', 'Bisnis Dalam Jaringan dan Pemasaran'),
(29, '12 DKV', 'Desain Komunikasi Visual'),
(30, '12 MM', 'Multimedia'),
(31, '12 OTKP', 'Otomatisasi dan Tata Kelola Perkantoran'),
(32, '12 RPL', 'Rekayasa Perangkat Lunak'),
(33, '12 TBS', 'Tata Busana'),
(34, '10 AKL', 'Akuntansi dan Keuangan Lembaga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(8) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
(20, 1, '0044809179', '2023-03-13', 'Februari', '2023', 5, 160000),
(21, 1, '0044809179', '2023-03-13', 'Januari', '2023', 5, 160000),
(22, 1, '0044946528', '2023-03-13', 'Januari', '2023', 5, 160000),
(23, 2, '0044946528', '2023-03-13', 'Februari', '2023', 5, 160000),
(24, 1, '0044809179', '2023-03-14', 'Maret', '2023', 5, 160000),
(25, 1, '0046490229', '2023-03-14', 'Januari', '2023', 5, 160000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL DEFAULT 'petugas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'alfan', 'admin'),
(2, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'parhan', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0044809179', '2021101039', 'Alfyan Syalafyn', 32, 'uu', '088', 5),
('0044946528', '2021101053', 'Ika Yuliyanti Putri', 32, 'uu', '0888', 5),
('0045157375', '2021101056', 'Kori Mukit Syamsurizal', 32, 'uu', '0888', 5),
('0045271218', '2021101061', 'Muhammad Yusuf Hadiansyah', 32, 'uu', '0888', 5),
('0045569814', '2021101045', 'Dalfa Ulfaroh', 32, 'Dusun Karang Tengah', '089662022946', 5),
('0045756129', '2021101055', 'Jodi Ardiani', 32, 'uu', '0888', 5),
('0045953861', '2021101048', 'Dita Nurul Hidayah', 32, 'Desa Binangun ', '087872411967', 5),
('0046154970', '2021101054', 'Ikhsan Agustian', 32, 'uu', '0888', 5),
('0046154976', '2021101051', 'Faundra Gunawan', 32, 'uu', '0888', 5),
('0046205272', '2021101057', 'Marlinda Tri Monikasari', 32, 'uu', '0888', 5),
('0046250073', '2021101069', 'Septi Dwi Aprilia', 32, 'Dusun Sukaharja Desa Karyamukti', '085861169282', 5),
('0046394222', '2021101064', 'Rizki Bentar Permadi', 32, 'uu', '0888', 5),
('0046490229', '2021101038', 'Alfan Fitra Parhani', 32, 'Cikabuyutan Timur', '08991360808', 5),
('0046628553', '2021101066', 'Ryan Al Farizi', 32, 'uu', '0888', 5),
('0047030511', '2021101065', 'Rubendi Rubiansyah ', 32, 'uu', '0888', 5),
('0047080267', '2021101050', 'Fatimah Az-Zahra Ramadhani', 32, 'uu', '0888', 5),
('0048082517', '202110104', 'Ali Herdiana ', 32, 'uu', '088', 5),
('0049914658', '2021101049', 'Faiz Ockta Ramdhan', 32, 'uu', '0888', 5),
('0051604085', '2021101042', 'Arya Ardiansyah ', 32, 'uu', '088', 5),
('0052932394', '2021101037', 'Aldi Mardiana', 32, 'uu', '0888', 5),
('0053045275', '2021101067', 'Saeful Ilma', 32, 'uu', '0888', 5),
('0053179827', '2021101047', 'Dian Maulana', 32, 'uu', '0888', 5),
('0053211720', '2021101059', 'Muhammad Ferio Gunawan', 32, 'uu', '0888', 5),
('0053300006', '2021101072', 'Tia Iqrania', 32, 'Dusun Mulyajaya', '0895361068129', 5),
('0053848423', '2021101058', 'Muhammad Daffa Khaisar', 32, 'uu', '0888', 5),
('0055341821', '2021101071', 'Syifa Rahmah Raehana', 32, 'Cikuyutan Timur', '0888', 5),
('0056424619', '2021101041', 'Andika Ramadhan', 32, 'uu', '0888', 5),
('0056637757', '2021101052', 'Hilman Fauzi', 32, 'uu', '0888', 5),
('0057296476', '2021101068', 'Sandi Rizki Nastiar', 32, 'uu', '0888', 5),
('0057315086', '2021101046', 'Dea Febriyanti', 32, 'uu', '0888', 5),
('0058582433', '2021101044', 'Cahyani Adila Putri', 32, 'uu', '0888', 5),
('0059127420', '2021101060', 'Muhammad Fikri Faturrohman', 32, 'uu', '0888', 5),
('0059887582', '2021101043', 'Audina Cahaya Dini', 32, 'uu', '0888', 5),
('3045774374', '2021101063', 'Rizki', 32, 'uu', '0888', 5),
('3055978569', '2021101070', 'Shendy Maulana Ibrahim', 32, 'uu', '0888', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(2, 2020, 100000),
(3, 2021, 120000),
(4, 2022, 140000),
(5, 2023, 160000),
(6, 2024, 180000),
(7, 2025, 200000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
