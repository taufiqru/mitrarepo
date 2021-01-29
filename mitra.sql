-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2021 pada 11.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `direktur`
--

CREATE TABLE `direktur` (
  `id_direktur` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `jabatan` varchar(120) DEFAULT NULL,
  `kontak` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `direktur`
--

INSERT INTO `direktur` (`id_direktur`, `id_mitra`, `nama`, `jabatan`, `kontak`) VALUES
(5, 5, 'Hotma M. Sibuea', 'Head of Project Management Unit (PMU) Sucofindo Technology', '08118202741'),
(6, 6, 'Masdar Syaman', 'Direktur', '08218788049'),
(12, 12, 'Wifik', 'Direktur', '087700300600');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `filepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `filepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor`
--

CREATE TABLE `kantor` (
  `id_kantor` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` set('Aset Perusahaan','Sewa','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kantor`
--

INSERT INTO `kantor` (`id_kantor`, `id_mitra`, `alamat`, `status`) VALUES
(5, 5, 'Graha Sucofindo, Jl. Raya Pasar Minggu Kav 34, Jakarta Selatan', 'Aset Perusahaan'),
(6, 6, 'Komplek Pinang Griya Permai, Jl. Nuri Blok B No. 152 B, Ciledug, Kota Tangerang, Banten', 'Aset Perusahaan'),
(12, 12, 'Wisma DNA, Jl. Terusan Kuningan No.16, Kuningan Barat, Mampang Prapatan, Jakarta Selatan', 'Sewa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kemampuan_nyata` varchar(100) DEFAULT '0',
  `tenaga_ahli` varchar(10) DEFAULT '0',
  `tahun_berdiri` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama`, `kemampuan_nyata`, `tenaga_ahli`, `tahun_berdiri`, `logo`) VALUES
(5, 'PT. Sucofindo (Persero)', '11,746,088,944,540', '34', 0, ''),
(6, 'PT. Bangsawan Cyberindo', '469,000,000,000', '30', 0, ''),
(12, 'PT. Smarthub Technologies', '8,163,726,446', '20', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `narahubung`
--

CREATE TABLE `narahubung` (
  `id_pic` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `jabatan` varchar(120) DEFAULT NULL,
  `kontak` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `narahubung`
--

INSERT INTO `narahubung` (`id_pic`, `id_mitra`, `nama`, `jabatan`, `kontak`) VALUES
(2, 5, 'Hasan Sabihi', 'PIC', '081219244190'),
(3, 6, 'Jismil', 'PIC', '081280296051'),
(9, 12, 'Wifik', 'Direktur', '087700300600');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `proyek` text NOT NULL,
  `lokasi` varchar(120) NOT NULL,
  `nilai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presentasi`
--

CREATE TABLE `presentasi` (
  `id_presentasi` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `filepath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `workshop`
--

CREATE TABLE `workshop` (
  `id_workshop` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` set('Aset Perusahaan','Sewa','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `direktur`
--
ALTER TABLE `direktur`
  ADD PRIMARY KEY (`id_direktur`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id_kantor`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `narahubung`
--
ALTER TABLE `narahubung`
  ADD PRIMARY KEY (`id_pic`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `presentasi`
--
ALTER TABLE `presentasi`
  ADD PRIMARY KEY (`id_presentasi`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indeks untuk tabel `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id_workshop`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `direktur`
--
ALTER TABLE `direktur`
  MODIFY `id_direktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id_kantor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `narahubung`
--
ALTER TABLE `narahubung`
  MODIFY `id_pic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `presentasi`
--
ALTER TABLE `presentasi`
  MODIFY `id_presentasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id_workshop` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `direktur`
--
ALTER TABLE `direktur`
  ADD CONSTRAINT `milik` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto` FOREIGN KEY (`id_foto`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kantor`
--
ALTER TABLE `kantor`
  ADD CONSTRAINT `alamat_kantor` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `narahubung`
--
ALTER TABLE `narahubung`
  ADD CONSTRAINT `diwakili` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `presentasi`
--
ALTER TABLE `presentasi`
  ADD CONSTRAINT `paparan` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `alamat_workshop` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
