-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2023 pada 07.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirusakdeh_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caradaftar`
--

CREATE TABLE `caradaftar` (
  `id_cara` int(11) NOT NULL,
  `step1` varchar(1000) NOT NULL,
  `step2` varchar(1000) NOT NULL,
  `step3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `caradaftar`
--

INSERT INTO `caradaftar` (`id_cara`, `step1`, `step2`, `step3`) VALUES
(1, 'Untuk melakukan pendaftaran pasien rawat jalan secara online harap melakukan login terlebih dahulu, bagi yang belum mempunyai aku di website ini harap registrasi terlebih dahulu. seletah melakukan registrasi pasien atau wali pasien bisa masuk ke halaman panedaftaran online.', 'Setelah masuk ke halaman pendaftaran online pasien atau wali pasien memilih berdasarkan pasien baru atau pasien lama yang sebelumnya pernah memeriksakan kesehatannya di rumah sakit Budiasih. Setelah itu masuk ke halaman form pendaftaran, isi data secara lengkap. setelah selesai klik tombol daftar.', 'Pasien atau wali pasien mendapat kode pendaftaran dan data yang telah diinput ke dalam file pdf. file bisa di download untuk diberikan kepada petugas pendaftaran sebagai bukti pendaftaran. bagi yang menggunakan bpjs atau asuransi diharap membawa berkas-berkas yang sudah tertera pada file tersebut.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(3) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `id_poli` int(3) NOT NULL,
  `status` int(11) NOT NULL,
  `level` enum('spesialis','umum') NOT NULL DEFAULT 'umum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `id_poli`, `status`, `level`) VALUES
(1, 'dr. Suryono Hanung, Sp.A', 2, 1, 'umum'),
(2, 'dr. Dion Wiyoko, Sp.A', 2, 1, 'umum'),
(3, 'dr. Adi Hapsah', 1, 1, 'umum'),
(4, 'dr. Intan Rahmawati', 1, 1, 'umum'),
(5, 'drg. Gunawan Prasetya', 3, 1, 'umum'),
(6, 'drg. Lintang Mulan', 3, 1, 'umum'),
(33, 'drg. Andi Irianto', 4, 1, 'spesialis'),
(34, 'drg. Indah Permata', 4, 1, 'umum'),
(35, 'drg. Lokika santa', 5, 1, 'spesialis'),
(36, 'drg. Nikita sirn', 5, 1, 'umum'),
(37, 'drg. Chika Legista', 6, 1, 'spesialis'),
(38, 'drg. Rizky born', 6, 1, 'umum'),
(39, 'drg. Asep Gunawam', 7, 1, 'spesialis'),
(40, 'drg. Lily udaan', 7, 1, 'umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `anak` varchar(1000) NOT NULL,
  `gigi` varchar(1000) NOT NULL,
  `umum` varchar(1000) NOT NULL,
  `kandungan` varchar(100) DEFAULT NULL,
  `mata` varchar(255) DEFAULT NULL,
  `tht` varchar(255) DEFAULT NULL,
  `kulit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `anak`, `gigi`, `umum`, `kandungan`, `mata`, `tht`, `kulit`) VALUES
(1, 'Pendaftaran dibuka Poli Anak', 'Pendaftaran sudah dibuka Poli Gigi', 'Pendaftaran dibuka Poli Umum', 'Pendaftaran dibuka Poli Kandungan', 'Pendaftaran dibuka Poli Mata', 'Pendaftaran dibuka Poli THT', 'Pendaftaran dibuka Poli Kulit dan Kelamin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `poli` varchar(50) NOT NULL,
  `senin` varchar(50) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(50) NOT NULL,
  `kamis` varchar(50) NOT NULL,
  `jumat` varchar(50) NOT NULL,
  `sabtu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `dokter`, `poli`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`) VALUES
(2, 'dr. Suryono Hanung, Sp.A', 'Anak', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00'),
(3, 'dr. Adi Hapsah', 'Umum', '10:00 - 14:00', '10:00 - 14:00', '10:00 - 14:00', '10:00 - 14:00', '10:00 - 14:00', '10:00 - 14:00'),
(4, 'dr. Intan Rahmawati', 'Umum', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00'),
(5, 'dr. Dion Wiyoko, Sp.A', 'Anak', '10.00 - 14.00', '10.00 - 14.00', '10.00 - 14.00', '10.00 - 14.00', '10.00 - 14.00', '10.00 - 14.00'),
(6, 'drg. Gunawan Prasetya', 'Gigi', '10:00 - 14:00', '10:00 - 14:00', '10:00 - 14:00', '10:00 - 14:00', '10.00 - 14.00', '10.00 - 14.00'),
(7, 'drg. Lintang Mulan', 'Gigi', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00', '14:00 - 17:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(5) NOT NULL,
  `jam` varchar(25) NOT NULL,
  `id_poli` int(3) NOT NULL,
  `id_dokter` int(5) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`, `id_poli`, `id_dokter`, `status`) VALUES
(1, '10:00 - 14:00', 1, 3, 1),
(2, '15:00 - 17:00', 1, 4, 1),
(3, '11:00 - 14:00', 2, 2, 1),
(4, '14:00 - 17:00', 2, 1, 1),
(5, '10:00 - 14:00', 3, 5, 1),
(6, '14:00 - 17:00', 3, 6, 1),
(7, '10:00 - 14:00', 2, 5, 1),
(14, '14:00 - 15:00', 4, 33, 1),
(15, '11:00 - 17:00', 4, 34, 1),
(16, '10:00 - 12:00', 5, 35, 1),
(17, '14:00 - 17:00', 5, 36, 1),
(18, '10:00 - 13:00', 6, 37, 1),
(19, '14:00 - 17:00', 6, 38, 1),
(20, '10:00 - 12:00', 7, 39, 1),
(21, '14:00 - 17:00', 7, 40, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `kode_pendaftaran` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `id_poli` int(5) NOT NULL,
  `id_dokter` int(3) NOT NULL,
  `id_jam` int(5) NOT NULL,
  `jenis_pembayaran` varchar(30) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tlahir` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `ttl` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `wnama` varchar(50) NOT NULL,
  `wjk` varchar(10) NOT NULL,
  `walamat` varchar(500) NOT NULL,
  `wnohp` varchar(15) NOT NULL,
  `status` varchar(40) NOT NULL,
  `diagnosa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`kode_pendaftaran`, `username`, `tgl_daftar`, `id_poli`, `id_dokter`, `id_jam`, `jenis_pembayaran`, `no_rm`, `nama`, `jk`, `tlahir`, `nohp`, `ttl`, `pekerjaan`, `alamat`, `wnama`, `wjk`, `walamat`, `wnohp`, `status`, `diagnosa`) VALUES
(107, 'tester', '2023-07-21', 1, 3, 1, 'Bpjs', '', 'Adiiiii', 'pria', 'Depok', '123456789', '2008-06-27', 'Buruh', 'Jalan Beji', 'irna', 'wanita', 'Jalan beji', '123456789', 'Terdaftar', 'Perlu Istirahat lebih banyak'),
(108, 'angga', '2023-07-13', 2, 2, 3, 'Bpjs', '123', 'ada', 'wanita', 'dwada', '123455678923', '2023-07-03', 'plii', 'dwadawd', 'dwa', 'wanita', 'dwadacsa', '123455678923', 'Proses', 'Perlu Perawatan Lebih lanjut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `jenis_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jenis_pembayaran`) VALUES
(1, 'Umum'),
(2, 'Bpjs'),
(3, 'Asuransi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_poli` int(3) NOT NULL,
  `nama_poli` varchar(30) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`id_poli`, `nama_poli`, `status`) VALUES
(1, 'Umum', 1),
(2, 'Anak', 1),
(3, 'Gigi', 1),
(4, 'Kandungan', 1),
(5, 'Mata', 1),
(6, 'THT', 1),
(7, 'Kulit dan Kelamin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(19, 'admin', '$2y$10$KdSdNo.0Cmkq8d2D/lqxPetWPq4Eu..8iRW/cwO00gT66ifC2CA5O', 'admin pendaftaran', 'admin'),
(39, 'tester', '$2y$10$L3fZda.5S03jVsuH.0.t1eykYz7EmdgpvWSRPdl6UaIKGFa/03Ugq', 'tester', 'pasien'),
(40, 'ada', '$2y$10$pjfiSORy/ifZNWSQHPnXLeC6cB.8hwk5O1y.ZZeEt2IMveUnAM/y6', 'ada', 'admin'),
(41, 'angga', '$2y$10$NRyGK2Rq0NvG9oYQ8iaF3OSKHLDu0SsqdDnHVOjmOgrHeLLu6HXJe', 'angga', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caradaftar`
--
ALTER TABLE `caradaftar`
  ADD PRIMARY KEY (`id_cara`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `dokter_ibfk_1` (`id_poli`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`),
  ADD KEY `jam_ibfk_2` (`id_dokter`),
  ADD KEY `jam_ibfk_3` (`id_poli`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kode_pendaftaran`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_jam` (`id_jam`),
  ADD KEY `id_user` (`username`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caradaftar`
--
ALTER TABLE `caradaftar`
  MODIFY `id_cara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `kode_pendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_poli` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `poliklinik` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD CONSTRAINT `jam_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jam_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `poliklinik` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `pasien_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `poliklinik` (`id_poli`),
  ADD CONSTRAINT `pasien_ibfk_4` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
