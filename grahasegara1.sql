-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2018 pada 01.53
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grahasegara1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_jadwal_perawatan`
--

CREATE TABLE IF NOT EXISTS `det_jadwal_perawatan` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `kd_ruangan` varchar(10) NOT NULL,
  `no_komputer` varchar(30) NOT NULL,
  `pemakai` varchar(30) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data untuk tabel `det_jadwal_perawatan`
--

INSERT INTO `det_jadwal_perawatan` (`id_jadwal`, `kd_ruangan`, `no_komputer`, `pemakai`, `keterangan`) VALUES
(1, '', ' ', '', ''),
(2, 'R001', 'No.011 ', 'DAFI', ''),
(3, 'R001', 'No.012  ', 'Suroto', ''),
(4, 'R001', 'No.019', 'Wadi', ''),
(5, 'R001', 'No.020', 'Arman', ''),
(6, 'R001', 'No.021', 'Daelami', ''),
(7, 'R001', 'No.022', 'Saipul / Sopian', ''),
(8, 'R001', 'No.023', 'Yusuf', ''),
(9, 'R001', 'No.024', 'Dzul', ''),
(10, 'R002', 'No.001 ', 'SERVER CCTV DIREKSI', ''),
(11, 'R002', 'No.002', 'MONITORING TPFT', ''),
(12, 'R002', 'No.003', 'MONITORING JICT', ''),
(13, 'R002', 'No.004', 'SERVER CCTV GEDUNG', ''),
(14, 'R002', 'No.006', 'ACCESS DOOR', ''),
(15, 'R003', 'No.001', '-', ''),
(16, 'R003', 'No.002', '-', ''),
(17, 'R003', 'No.003', '-', ''),
(18, 'R003', 'No.004', '-', ''),
(19, 'R003', 'No.005', '-', ''),
(20, 'R003', 'No.006', '-', ''),
(21, 'R003', 'No.007 ', '-', ''),
(22, 'R003', 'No.008', '-', ''),
(23, 'R003', 'No.009', '-', ''),
(24, 'R003', 'No.010', '-', ''),
(25, 'R003', 'No.011', '-', ''),
(26, 'R003', 'No.012', '-', ''),
(27, 'R004', 'No.001', 'ROSITA', ''),
(28, 'R004', 'No.002', 'MAYA', ''),
(29, 'R005', 'No.001', 'LOKET 1', ''),
(30, 'R005', 'No.002', 'LOKET 2', ''),
(31, 'R005', 'No.003', 'LOKET 3', ''),
(32, 'R005', 'No.003', 'LOKET 4', ''),
(33, 'R005', 'No.005', 'LOKET 5', ''),
(34, 'R005', 'No.006', 'LOKET 6', ''),
(35, 'R005', 'No.007', 'LOKET 7', ''),
(36, 'R005', 'No.007', 'LOKET 8', ''),
(37, 'R005', 'No.009', 'LOKET 9', ''),
(38, 'R005', 'No.010', 'LOKET 10', ''),
(39, 'R005', 'No.011', '-', ''),
(40, 'R005', 'No.012', '-', ''),
(41, 'R005', 'No.013', '-', ''),
(42, 'R005', 'No.014', '-', ''),
(43, 'R005', 'No.015', '-', ''),
(44, 'R005', 'No.016', '-', ''),
(45, 'R005', 'No.017', '-', ''),
(46, 'R005', 'No.018', '-', ''),
(47, 'R005', 'No.019', '-', ''),
(48, 'R005', 'No.020', '-', ''),
(49, 'R005', 'No.021', '-', ''),
(50, 'R005', 'No.022', '-', ''),
(51, 'R005', 'No.023', '-', ''),
(52, 'R005', 'No.025 ', 'OKI', ''),
(53, 'R005', 'No.026', '-', ''),
(54, 'R005', 'No.027', '-', ''),
(55, 'R005', 'No.028', 'AGUS', ''),
(56, 'R006', 'No.001 ', '-', ''),
(57, 'R006', 'No.002', '-', ''),
(58, 'R006', 'No.003', '-', ''),
(59, 'R006', 'No.004', '-', ''),
(60, 'R007', 'No.001', 'RIZKY', '-'),
(61, 'R007', 'No.002', 'HUZNUL', ''),
(62, 'R007', 'No.003', 'RISNA', ''),
(63, 'R007', 'No.004', 'SIFA', ''),
(64, 'R008', 'No.001', 'TRI', ''),
(65, 'R008', 'No.002', 'ANDI', ''),
(66, 'R008', 'No.003', 'BENNY', ''),
(67, 'R008', 'No.004', 'HAFIZ', ''),
(68, 'R008', 'No.005', '-', ''),
(69, 'R009', 'No.001', 'NENENG', ''),
(70, 'R009', 'No.002', 'PURI', ''),
(71, 'R009', 'No.003', 'VENA', ''),
(72, 'R009', 'No.004', 'YAYU', ''),
(73, 'R010', 'No.001', 'IMAM', ''),
(74, 'R010', 'No.002', '-', ''),
(75, 'R010', 'No.003', 'ARNI', ''),
(76, 'R010', 'No.004', 'ARI', ''),
(77, 'R011', 'No.001', 'CCTV SEKURITY', ''),
(78, 'R012', 'No.001', 'GATE IN BAWAH', ''),
(79, 'R012', 'No.002', 'GATE IN BAWAH', ''),
(80, 'R012', 'No.001', 'GATE IN ATAS (YP)', ''),
(81, 'R012', 'No.002', 'GATE IN ATAS (YP)', ''),
(82, 'R012', 'No.003', 'GATE IN ATAS (YP)', ''),
(83, 'R012', 'No.004', 'GATE IN ATAS (YP)', ''),
(84, 'R012', 'No.005', 'GATE IN ATAS (YP)', ''),
(85, 'R012', 'No.006', 'GATE IN ATAS (YP)', ''),
(86, 'R012', 'No.007', 'GATE IN ATAS (YP)', ''),
(87, 'R012', 'No.001 ', 'GATE IN ATAS (BHD)', ''),
(88, 'R012', 'No.002', 'GATE IN ATAS (BHD)', ''),
(89, 'R013', 'No.001', 'GATE OUT KOJA', ''),
(90, 'R013', 'No.002', 'GATE OUT KOJA', ''),
(91, 'R013', 'No.003', 'GATE OUT KOJA', ''),
(92, 'R013', 'No.004', 'GATE OUT KOJA', ''),
(93, 'R013', 'No.005', 'GATE OUT KOJA', ''),
(94, 'R013', 'No.006', 'GATE OUT KOJA', ''),
(95, 'R013', 'No.008', 'GATE OUT JICT', ''),
(96, 'R013', 'No.009', 'GATE OUT JICT', ''),
(97, 'R014', 'No.001', 'Lt.3', ''),
(98, 'R015', 'No.002', 'Lt.3', ''),
(99, 'R016', 'No.003', 'Lt.3', ''),
(100, 'R017', 'No.004', 'Lt.3', ''),
(101, 'R018', 'No.005', 'Lt.3', ''),
(102, 'R019', 'No.006', 'Lt.3', ''),
(103, 'R020', 'No.007', 'Lt.3', ''),
(104, 'R021', 'No.008', 'Lt.3', ''),
(105, 'R022', 'No.024', 'TOYIB', ''),
(106, 'R023', 'No.025', 'LILI', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_perawatan`
--

CREATE TABLE IF NOT EXISTS `jadwal_perawatan` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_perawatan` date NOT NULL,
  `hari_perawatan` varchar(10) NOT NULL,
  `kd_petugas` varchar(15) NOT NULL,
  `status_perawatan` int(1) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data untuk tabel `jadwal_perawatan`
--

INSERT INTO `jadwal_perawatan` (`id_jadwal`, `tgl_perawatan`, `hari_perawatan`, `kd_petugas`, `status_perawatan`) VALUES
(1, '2018-01-20', 'Sabtu', '', 0),
(2, '2018-01-30', 'Selasa', 'P002', 0),
(3, '2018-01-31', 'Rabu', 'P003', 0),
(4, '2018-02-01', 'Kamis', 'P004', 0),
(5, '2018-02-02', 'Jumat', 'P002', 0),
(6, '2018-02-05', 'Senin', 'P001', 0),
(7, '2018-02-06', 'Selasa', 'P004', 0),
(8, '2018-02-07', 'Rabu', 'P003', 0),
(9, '2018-02-08', 'Kamis', 'P001', 1),
(10, '2018-02-12', 'Senin', 'P001', 1),
(11, '2018-02-13', 'Selasa', 'P004', 0),
(12, '2018-02-14', 'Rabu', 'P002', 1),
(13, '2018-02-15', 'Kamis', 'P003', 0),
(14, '2018-02-16', 'Jumat', 'P001', 0),
(15, '2018-02-19', 'Senin', 'P004', 0),
(16, '2018-02-20', 'Senin', 'P003', 0),
(17, '2018-02-21', 'Rabu', 'P001', 0),
(18, '2018-02-22', 'Kamis', 'P004', 0),
(19, '2018-02-23', 'Jumat', 'P002', 0),
(20, '2018-02-26', 'Senin', 'P003', 0),
(21, '2018-02-27', 'Selasa', 'P001', 0),
(22, '2018-02-28', 'Rabu', 'P004', 1),
(23, '2018-03-01', 'Kamis', 'P002', 1),
(24, '2018-03-02', 'Jumat', 'P003', 0),
(25, '2018-03-05', 'Senin', 'P001', 0),
(26, '2018-03-06', 'Selasa', 'P004', 0),
(27, '2018-03-07', 'Rabu', 'P002', 1),
(28, '2018-03-08', 'Kamis', 'P003', 0),
(29, '2018-03-09', 'Jumat', 'P001', 0),
(30, '2018-03-12', 'Senin', 'P004', 0),
(31, '2018-03-13', 'Selasa', 'P002', 0),
(32, '2018-03-14', 'Rabu', 'P003', 0),
(33, '2018-03-15', 'Kamis', 'P001', 0),
(34, '2018-03-16', 'Jumat', 'P004', 0),
(35, '2018-03-19', 'Senin', 'P002', 0),
(36, '2018-03-20', 'Selasa', 'P003', 0),
(37, '2018-03-21', 'Rabu', 'P001', 0),
(38, '2018-03-22', 'Kamis', 'P004', 0),
(39, '2018-03-23', 'Jumat', 'P002', 0),
(40, '2018-03-26', 'Senin', 'P003', 0),
(41, '2018-03-27', 'Selasa', 'P001', 0),
(42, '2018-03-28', 'Rabu', 'P004', 0),
(43, '2018-03-29', 'Kamis', 'P002', 0),
(44, '2018-03-30', 'Jumat', 'P003', 0),
(45, '2018-04-02', 'Senin', 'P001', 0),
(46, '2018-04-03', 'Selasa', 'P004', 0),
(47, '2018-04-04', 'Rabu', 'P002', 0),
(48, '2018-04-05', 'Kamis', 'P003', 0),
(49, '2018-04-06', 'Jumat', 'P001', 0),
(50, '2018-04-09', 'Senin', 'P004', 0),
(51, '2018-04-10', 'Selasa', 'P002', 0),
(52, '2018-04-11', 'Rabu', 'P003', 0),
(53, '2018-04-12', 'Kamis', 'P001', 0),
(54, '2018-04-13', 'Jumat', 'P004', 0),
(55, '2018-04-16', 'Senin', 'P002', 0),
(56, '2018-04-17', 'Selasa', 'P003', 0),
(57, '2018-04-18', 'Rabu', 'P004', 0),
(58, '2018-04-19', 'Kamis', 'P002', 0),
(59, '2018-04-20', 'Jumat', 'P001', 0),
(60, '2018-04-23', 'Senin', 'P004', 0),
(61, '2018-04-24', 'Selasa', 'P002', 0),
(62, '2018-04-25', 'Rabu', 'P003', 0),
(63, '2018-04-26', 'Kamis', 'P001', 0),
(64, '2018-04-27', 'Jumat', 'P004', 0),
(65, '2018-04-30', 'Senin', 'P002', 0),
(66, '2018-05-01', 'Selasa', 'P001', 0),
(67, '2018-05-02', 'Rabu', 'P003', 0),
(68, '2018-05-03', 'Kamis', 'P004', 0),
(69, '2018-05-04', 'Jumat', 'P002', 0),
(70, '2018-05-07', 'Senin', 'P001', 0),
(71, '2018-05-08', 'Selasa', 'P003', 0),
(72, '2018-05-09', 'Rabu', 'P002', 0),
(73, '2018-05-10', 'Kamis', 'P001', 0),
(74, '2018-05-11', 'Jumat', 'P004', 0),
(75, '2018-05-14', 'Senin', 'P003', 0),
(76, '2018-05-15', 'Selasa', 'P002', 0),
(77, '2018-05-16', 'Rabu', 'P004', 0),
(78, '2018-05-17', 'Kamis', 'P003', 0),
(79, '2018-05-19', 'Jumat', 'P001', 0),
(80, '2018-05-21', 'Senin', 'P002', 0),
(81, '2018-05-22', 'Selasa', 'P004', 0),
(82, '2018-05-23', 'Rabu', 'P003', 0),
(83, '2018-05-24', 'Kamis', 'P001', 0),
(84, '2018-05-25', 'Jumat', 'P002', 0),
(85, '2018-05-28', 'Senin', 'P004', 0),
(86, '2018-05-29', 'Selasa', 'P003', 0),
(87, '2018-05-30', 'Rabu', 'P002', 0),
(88, '2018-05-31', 'Kamis', 'P001', 0),
(89, '2018-06-01', 'Jumat', 'P002', 0),
(90, '2018-06-04', 'Senin', 'P001', 0),
(91, '2018-06-05', 'Selasa', 'P003', 0),
(92, '2018-06-06', 'Rabu', 'P004', 0),
(93, '2018-06-07', 'Kamis', 'P002', 0),
(94, '2018-06-08', 'Jumat', 'P001', 0),
(95, '2018-06-11', 'Senin', 'P002', 0),
(96, '2018-06-12', 'Selasa', 'P003', 0),
(97, '2018-06-13', 'Rabu', 'P002', 0),
(98, '2018-06-14', 'Kamis', 'P001', 0),
(99, '2018-06-15', 'Jumat', 'P004', 0),
(100, '2018-06-18', 'Senin', 'P003', 0),
(101, '2018-06-19', 'Selasa', 'P001', 0),
(102, '2018-06-20', 'Rabu', 'P002', 0),
(103, '2018-06-21', 'Kamis', 'P004', 0),
(104, '2018-06-22', 'Jumat', 'P003', 0),
(105, '2018-06-25', 'Senin', 'P002', 0),
(106, '2018-06-26', 'Selasa', 'P001', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `kd_petugas` varchar(10) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `staff` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlpn` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`kd_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`kd_petugas`, `nama_petugas`, `jk`, `tmp_lahir`, `tgl_lahir`, `staff`, `alamat`, `no_tlpn`, `email`, `password`) VALUES
('P001', 'Dzul', 'L', '', '2018-07-05', 'IT HARDWARE', '', '', '', ''),
('P002', 'Sopian', 'L', '', '', 'IT HARDWARE', '', '', '', ''),
('P003', 'Wadi', 'L', '', '', 'IT HARDWARE', '', '', '', ''),
('P004', 'Dwiki', 'L', '', '', 'IT HARDWARE', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `kd_ruangan` varchar(10) NOT NULL,
  `nama_ruangan` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`kd_ruangan`, `nama_ruangan`) VALUES
('R001', 'IT'),
('R002', 'KONTROL ROOM'),
('R003', 'KOORDINATOR'),
('R004', 'PUCHASING'),
('R005', 'BILLING'),
('R006', 'AKUNTANSI'),
('R007', 'PAJAK'),
('R008', 'HRD'),
('R009', 'KASIR UMUM'),
('R010', 'CUSTOMER SERVICE'),
('R011', 'POS SEKURITY'),
('R012', 'GATE IN'),
('R013', 'GATE OUT'),
('R014', 'PAK ANDI'),
('R015', 'PAK AGUS'),
('R016', 'PAK RUDI'),
('R017', 'PAK YANTO'),
('R018', 'PAK YUDI'),
('R019', 'PAK UCOK'),
('R020', 'LIES'),
('R021', 'LIA'),
('R022', 'K3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_pc`
--

CREATE TABLE IF NOT EXISTS `stock_pc` (
  `id_hardware` int(10) NOT NULL AUTO_INCREMENT,
  `nama_hardware` varchar(30) NOT NULL,
  `merek_hardware` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  PRIMARY KEY (`id_hardware`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `stock_pc`
--

INSERT INTO `stock_pc` (`id_hardware`, `nama_hardware`, `merek_hardware`, `status`, `jumlah`) VALUES
(3, 'Monitor', 'LG', 0, '20'),
(4, 'PC', 'Acer', 1, '30'),
(6, 'Mouse', 'LG', 1, '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `kd_user` int(10) NOT NULL AUTO_INCREMENT,
  `kd_petugas` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kd_user`, `kd_petugas`, `nama`, `username`, `password`, `level_user`) VALUES
(2, '', 'aa', 'aa', '21ad0bd836b90d08f4cf640b4c298e7c', 'petugas'),
(3, '', 'febina', 'febina', '7acb6b5e4e6a505dc0302abcdbfbef80', 'user'),
(4, '', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin_utama'),
(5, 'P001', 'Dzul', 'Dzul', 'bddb17c2258ed49dadf8a015a3458ef0', 'petugas'),
(6, 'P002', 'Sopian', 'Sopian', 'bd99eb0d2f4f613a4812b37049b06991', 'petugas'),
(7, 'P003', 'Wadi', 'Wadi', '0118512950ddcbc5459ad52242e0d167', 'petugas'),
(8, 'P004', 'Dwiki', 'Dwiki', '2314b026f8163ccf63c8897999a57517', 'petugas'),
(9, '', 'Erik', 'erik', '6a42dd6e7ca9a813693714b0d9aa1ad8', 'petugas'),
(10, '', 'bb', 'bb', '21ad0bd836b90d08f4cf640b4c298e7c', 'users');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
