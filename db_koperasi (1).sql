-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 07:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_anggota`
--

CREATE TABLE `db_anggota` (
  `anggota_id` int(11) NOT NULL,
  `anggota_nama` varchar(100) NOT NULL,
  `anggota_jk` enum('L','P') NOT NULL,
  `anggota_tempat_lahir` varchar(50) NOT NULL,
  `anggota_tanggal_lahir` date NOT NULL,
  `anggota_nik` varchar(25) NOT NULL,
  `anggota_agama` enum('Islam','Kristen','Katolik','Buddha','Hindu','Konghuchu') NOT NULL,
  `anggota_nama_ibu` varchar(100) NOT NULL,
  `anggota_alamat` text NOT NULL,
  `anggota_departemen` enum('Produksi','Logistic','RMC','RND','HR/GA','GA','Accounting','CSD') NOT NULL,
  `anggota_pendidikan` varchar(50) NOT NULL,
  `anggota_status_kawin` enum('lajang','menikah','janda','duda') NOT NULL,
  `anggota_nomor_hp` varchar(20) NOT NULL,
  `anggota_email` varchar(50) NOT NULL,
  `anggota_jabatan` varchar(100) NOT NULL,
  `anggota_dokumen` text DEFAULT NULL,
  `anggota_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `jumlah_simpanan` int(20) NOT NULL,
  `jumlah_pinjaman` int(20) NOT NULL,
  `jumlah_cicilan` int(3) NOT NULL,
  `pengguna_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_anggota`
--

INSERT INTO `db_anggota` (`anggota_id`, `anggota_nama`, `anggota_jk`, `anggota_tempat_lahir`, `anggota_tanggal_lahir`, `anggota_nik`, `anggota_agama`, `anggota_nama_ibu`, `anggota_alamat`, `anggota_departemen`, `anggota_pendidikan`, `anggota_status_kawin`, `anggota_nomor_hp`, `anggota_email`, `anggota_jabatan`, `anggota_dokumen`, `anggota_date_created`, `jumlah_simpanan`, `jumlah_pinjaman`, `jumlah_cicilan`, `pengguna_id`) VALUES
(4, 'Taufik Bahtiar', 'L', 'Tasik Malaya', '1998-08-18', '3217081808980001', 'Islam', 'Rina Erpianti', 'perum laksana mekar', 'Produksi', 'SMA', 'lajang', '088216166718', 'taufikb98@gmail.com', 'drumming', '{\"ktp\":\"Screenshot_(14)1.png\",\"kk\":\"Screenshot_(13)1.png\",\"listrik\":\"Screenshot_(15)1.png\",\"jaminan\":\"Screenshot_(16)2.png\",\"kerja\":\"Screenshot_(16)3.png\",\"gaji\":\"Screenshot_(49)1.png\",\"rekening\":\"Screenshot_(47)1.png\"}', '2021-09-28 18:57:26', 0, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `db_angsuran`
--

CREATE TABLE `db_angsuran` (
  `angsuran_id` int(11) NOT NULL,
  `angsuran_pinjaman_id` int(11) NOT NULL,
  `angsuran_jumlah` double NOT NULL,
  `angsuran_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `anggota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_angsuran`
--

INSERT INTO `db_angsuran` (`angsuran_id`, `angsuran_pinjaman_id`, `angsuran_jumlah`, `angsuran_date_created`, `anggota_id`) VALUES
(21, 10, 454167, '2021-12-21 23:59:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_detail_simpan`
--

CREATE TABLE `db_detail_simpan` (
  `simpan_id` int(11) NOT NULL,
  `jnssimpan` varchar(20) NOT NULL,
  `jmlsimpan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `db_pengguna`
--

CREATE TABLE `db_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_username` varchar(100) NOT NULL,
  `pengguna_password` varchar(100) NOT NULL,
  `pengguna_hak_akses` enum('pengurus','ketua','atasan','anggota') NOT NULL,
  `pengguna_nama` varchar(100) NOT NULL,
  `pengguna_foto` varchar(150) DEFAULT NULL,
  `pengguna_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `anggota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_pengguna`
--

INSERT INTO `db_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_hak_akses`, `pengguna_nama`, `pengguna_foto`, `pengguna_date_created`, `anggota_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ketua', 'admin', 'AP2.jpg', '2021-03-09 17:23:57', 0),
(2, 'operator', '4b583376b2767b923c3e1da60d10de59', 'pengurus', 'ada', '', '2021-09-24 20:59:25', 0),
(3, 'taufik', 'd4305d7ed2ec97107cd6eb8dd4b6f6b7', 'atasan', 'taufik', '', '2021-10-10 23:33:19', 0),
(4, 'bahtiar', 'a8502a569133b674d28d002d1a276abc', 'anggota', 'bahtiar', '', '2021-10-10 23:33:19', 4);

-- --------------------------------------------------------

--
-- Table structure for table `db_pinjaman`
--

CREATE TABLE `db_pinjaman` (
  `pinjaman_id` int(11) NOT NULL,
  `pinjaman_anggota_id` int(11) NOT NULL,
  `pinjaman_jenis` enum('cash','noncash') NOT NULL,
  `pinjaman_total` double NOT NULL,
  `pinjaman_diterima` int(12) NOT NULL,
  `pinjaman_pembayaran` int(12) NOT NULL,
  `pinjaman_angsuran` int(11) NOT NULL,
  `pinjaman_tenggat` int(11) NOT NULL,
  `pinjaman_keterangan` text NOT NULL,
  `pinjaman_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `pinjaman_status` enum('tunggu','tolak','setuju','proses') NOT NULL,
  `anggota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_pinjaman`
--

INSERT INTO `db_pinjaman` (`pinjaman_id`, `pinjaman_anggota_id`, `pinjaman_jenis`, `pinjaman_total`, `pinjaman_diterima`, `pinjaman_pembayaran`, `pinjaman_angsuran`, `pinjaman_tenggat`, `pinjaman_keterangan`, `pinjaman_date_created`, `pinjaman_status`, `anggota_id`) VALUES
(10, 4, 'cash', 5450000, 4950000, 4995833, 454167, 12, 'PINJAMAN CASH / TUNAI : Pinjaman ini diberikan dalam bentuk uang tunai baik dengan transfer maupun secara langsung.', '2021-12-21 13:48:14', 'setuju', 4);

-- --------------------------------------------------------

--
-- Table structure for table `db_saldo`
--

CREATE TABLE `db_saldo` (
  `id_saldo` int(11) NOT NULL,
  `saldo` int(15) NOT NULL,
  `anggota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_saldo`
--

INSERT INTO `db_saldo` (`id_saldo`, `saldo`, `anggota_id`) VALUES
(1, 1000000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `db_simpanan`
--

CREATE TABLE `db_simpanan` (
  `simpanan_id` int(11) NOT NULL,
  `simpanan_anggota_id` int(11) NOT NULL,
  `simpanan_jenis` enum('modal','investasi','tabungan') NOT NULL,
  `simpanan_total` double NOT NULL,
  `simpanan_keterangan` text NOT NULL,
  `simpanan_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `anggota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_simpanan`
--

INSERT INTO `db_simpanan` (`simpanan_id`, `simpanan_anggota_id`, `simpanan_jenis`, `simpanan_total`, `simpanan_keterangan`, `simpanan_date_created`, `anggota_id`) VALUES
(1, 2, 'investasi', 30000, 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.', '2021-09-28 18:58:57', 2),
(2, 2, 'investasi', 100000, 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.', '2021-09-29 18:09:09', 2),
(3, 2, 'investasi', 50000, 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.', '2021-09-29 18:19:10', 2),
(4, 4, 'tabungan', 100000, 'SIMPANAN pokok : Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.', '2021-10-31 21:57:20', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_anggota`
--
ALTER TABLE `db_anggota`
  ADD PRIMARY KEY (`anggota_id`),
  ADD KEY `jumlah_simpanan` (`jumlah_simpanan`,`jumlah_pinjaman`,`jumlah_cicilan`),
  ADD KEY `pengguna_id` (`pengguna_id`);

--
-- Indexes for table `db_angsuran`
--
ALTER TABLE `db_angsuran`
  ADD PRIMARY KEY (`angsuran_id`);

--
-- Indexes for table `db_pengguna`
--
ALTER TABLE `db_pengguna`
  ADD PRIMARY KEY (`pengguna_id`),
  ADD KEY `anggota_id` (`anggota_id`);

--
-- Indexes for table `db_pinjaman`
--
ALTER TABLE `db_pinjaman`
  ADD PRIMARY KEY (`pinjaman_id`),
  ADD KEY `anggota_id` (`anggota_id`),
  ADD KEY `pinjaman_total` (`pinjaman_total`);

--
-- Indexes for table `db_saldo`
--
ALTER TABLE `db_saldo`
  ADD KEY `anggota_id` (`anggota_id`);

--
-- Indexes for table `db_simpanan`
--
ALTER TABLE `db_simpanan`
  ADD PRIMARY KEY (`simpanan_id`),
  ADD KEY `anggota_id` (`anggota_id`),
  ADD KEY `simpanan_total` (`simpanan_total`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_anggota`
--
ALTER TABLE `db_anggota`
  MODIFY `anggota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_angsuran`
--
ALTER TABLE `db_angsuran`
  MODIFY `angsuran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `db_pengguna`
--
ALTER TABLE `db_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_pinjaman`
--
ALTER TABLE `db_pinjaman`
  MODIFY `pinjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `db_simpanan`
--
ALTER TABLE `db_simpanan`
  MODIFY `simpanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
