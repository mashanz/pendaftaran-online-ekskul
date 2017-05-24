-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2013 pada 01.49
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `perpusku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `level` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `namane` text NOT NULL,
  `kelamin` text NOT NULL,
  `tlahir` text NOT NULL,
  `tgllahir` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` text NOT NULL,
  `mail` text NOT NULL,
  `fb` text NOT NULL,
  `twitter` text NOT NULL,
  `hobi` text NOT NULL,
  `alasan` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`level`, `username`, `password`, `namane`, `kelamin`, `tlahir`, `tgllahir`, `alamat`, `telp`, `mail`, `fb`, `twitter`, `hobi`, `alasan`) VALUES
('user', 'garuda45', '12345', 'Paijo Van Java', 'Laki-laki', 'Jakarta', '2013-06-30', 'Pandeglang', '0987654321', 'apa@apa.apa', 'apaya', '@apaAjaBulih', 'ada deh', 'Pengen Masuk aja, ngga boleh? trus masalah buat lu? (/^o^)/ suka-suka gue dong,.. :P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_buku`
--

CREATE TABLE IF NOT EXISTS `d_buku` (
  `kd` int(6) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `th_terbit` int(4) NOT NULL,
  `cetakan` int(10) NOT NULL,
  `jml_tersedia` int(225) NOT NULL,
  `resensator` varchar(100) NOT NULL,
  `resensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_buku`
--

INSERT INTO `d_buku` (`kd`, `penerbit`, `judul`, `pengarang`, `th_terbit`, `cetakan`, `jml_tersedia`, `resensator`, `resensi`) VALUES
(100, 'Penerbit ANDI', 'From Zerro to a Pro membuat Aplikasi Web dengan PHP + Database MySQL', 'Abdul Kadir', 2009, 1, 0, '', ''),
(123, 'asda', 'Asda', 'asda', 1234, 2, 3, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `link` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `menu`, `judul`, `link`, `status`, `isi`) VALUES
(1, 'beranda', 'BERANDA', 'index.php?p=page&id=1', 1, '<center><h1>Selamat Datang</h1></center>'),
(2, 'perkenalan', 'Pernkenalan', 'index.php?p=page&id=2', 1, '<h1>Perkenalan</h1>\r\n<p>perkenalkan nama saya hanjara cahya adhyatma. Saya sekolah di SMAN 1 Pandeglang dan saya tiggal di BPI</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `md5`
--

CREATE TABLE IF NOT EXISTS `md5` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `combination` text NOT NULL,
  `md5` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `md5` (`md5`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `md5`
--

INSERT INTO `md5` (`id`, `combination`, `md5`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'a', '0cc175b9c0f1b6a831c399e269772661'),
(3, 'b', '92eb5ffee6ae2fec3ad71c777531578f'),
(4, 'c', '4a8a08f09d37b73795649038408b5f33'),
(5, 'd', '8277e0910d750195b448797616e091ad'),
(6, 'e', 'e1671797c52e15f763380b45e841ec32'),
(7, 'f', '8fa14cdd754f91cc6554c9e71929cce7'),
(8, 'g', 'b2f5ff47436671b6e533d8dc3614845d'),
(9, 'h', '2510c39011c5be704182423e3a695e91'),
(10, 'i', '865c0c0b4ab0e063e5caa3387c1a8741'),
(11, 'j', '363b122c528f54df4a0446b6bab05515'),
(12, 'k', '8ce4b16b22b58894aa86c421e8759df3'),
(13, 'l', '2db95e8e1a9267b7a1188556b2013b33'),
(14, 'm', '6f8f57715090da2632453988d9a1501b'),
(15, 'n', '7b8b965ad4bca0e41ab51de7b31363a1'),
(16, 'o', 'd95679752134a2d9eb61dbd7b91c4bcc'),
(17, 'p', '83878c91171338902e0fe0fb97a8c47a'),
(18, 'q', '7694f4a66316e53c8cdd9d9954bd611d'),
(19, 'r', '4b43b0aee35624cd95b910189b3dc231'),
(20, 's', '03c7c0ace395d80182db07ae2c30f034'),
(21, 't', 'e358efa489f58062f10dd7316b65649e'),
(22, 'u', '7b774effe4a349c6dd82ad4f4f21d34c'),
(23, 'v', '9e3669d19b675bd57058fd4664205d2a'),
(24, 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68'),
(25, 'x', '9dd4e461268c8034f5c8564e155c67a6'),
(26, 'y', '415290769594460e2e485922904f345d'),
(27, 'z', 'fbade9e36a3f36d3d676c1b808451dd7'),
(28, 'saya', '20c1a26a55039b30866c9d0aa51953ca'),
(29, '0', 'cfcd208495d565ef66e7dff9f98764da'),
(30, '1', 'c4ca4238a0b923820dcc509a6f75849b'),
(31, '10', 'd3d9446802a44259755d38e6d163e820'),
(32, '001', 'dc5c7986daef50c1e02ab09b442ee34f'),
(33, '00', 'b4b147bc522828731f1a016bfa72c073'),
(34, 'A', '7fc56270e7a70fa81a5935b72eacbe29'),
(35, '`', '833344d5e1432da82ef02e1301477ce8'),
(36, '~', '4c761f170e016836ff84498202b99827'),
(37, '[]', 'd751713988987e9331980363e24189ce'),
(38, '[', '815417267f76f6f460a4a61f9db75fdb'),
(39, 'Gile loah', 'e2380061d4e4f234b91cab94b9ce5e69'),
(40, 'harus ada yang bisa mendeskrypt ', '4f6dcf1132c6423e96a67bd45f46be88'),
(41, 'qweqweqweqweqweqweqweqweqweqweqw', '4ef6625c249195a67fa092fa03d21294'),
(42, '11111111111111111111111111111111', '1a80cbf2859e019559365d6be478794e'),
(43, '00000000000000000000000000000000', 'cd9e459ea708a948d5c2f5a6ca8838cf'),
(44, '@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@', '718595480ff3c443bdcaa3f223e440a0'),
(45, '                                ', '5ac0462f239ffbf5b6a539f0345843fe'),
(46, ' ', '7215ee9c7d9dc229d2921a40e899ec5f'),
(47, '  ', '23b58def11b45727d3351702515f86af'),
(48, '   ', '628631f07321b22d8c176c200c855e1b'),
(49, 'op3nk3y', '4dc347a44171ab22657b77533eaae98e'),
(50, 'OP3nky', 'b710c9348b55723a909df47bbed0c33b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `kd_menu` int(11) NOT NULL,
  `nm_menu` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `link` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`kd_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`kd_menu`, `nm_menu`, `judul`, `link`, `status`, `tgl`) VALUES
(2, 'user', 'USER', 'admin.php?p=user', 1, '0000-00-00'),
(3, 'siswa', 'SISWA', 'admin.php?p=siswa', 2, '0000-00-00'),
(9, 'keluar', 'KELUAR', 'admin.php?p=keluar', 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `username`, `password`, `level`) VALUES
('10111052', 'Hanjara Cahya Adhyatma', 'b3AzbmszeQ==', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `kd_user` int(255) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `level` varchar(300) NOT NULL,
  PRIMARY KEY (`kd_user`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kd_user`, `username`, `password`, `level`) VALUES
(1, 'YWRtaW4=', 'YWRtaW4=', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
