-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 11:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_cbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL,
  `kode_departemen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`, `kode_departemen`) VALUES
(1, 'obat', 'O'),
(2, 'Spray besi', 'S'),
(3, 'grinda besi', 'G'),
(4, 'las besi', 'LB'),
(5, 'kaca', 'K'),
(6, 'Service mentah', 'SM'),
(7, 'amplas mentah', 'AM'),
(8, 'Plamur', 'P'),
(9, 'spray kayu', 'SK'),
(10, 'filter ', 'F'),
(11, 'Cat', 'C'),
(12, 'alami', 'A'),
(13, 'wax', 'W'),
(14, 'Accesories', 'AS'),
(15, 'final cek', 'FC'),
(16, 'jok ', 'J'),
(17, 'packing', 'P'),
(18, 'veneer', 'V'),
(19, 'Cleaning', 'CL'),
(20, 'Khusus', 'KH'),
(21, 'Besi', 'B'),
(22, 'Tidak Tahu', 'TT'),
(26, 'coba ubah 2', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `dep_karyawan` int(11) NOT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `kota`, `dep_karyawan`, `tgl_masuk`) VALUES
(1, 'ANITA MAYA', 'Jepara', 1, '0000-00-00'),
(2, 'RIZKY NURUL ICHSAN', 'Semarang', 1, '0000-00-00'),
(3, 'SUMINAH ', NULL, 1, '0000-00-00'),
(4, 'ALIF ALFIANTO', NULL, 1, '0000-00-00'),
(5, 'SETYO PRIYANI', NULL, 1, '0000-00-00'),
(6, 'ARI SETIAWAN', NULL, 21, '0000-00-00'),
(7, 'AMIN SUDARMANTO', NULL, 21, '0000-00-00'),
(8, 'N. REZAH ABDUL', NULL, 21, '0000-00-00'),
(9, 'ANDIK PRASETYO', NULL, 21, '0000-00-00'),
(10, 'RAIM', NULL, 21, '0000-00-00'),
(11, 'MASYHUDIN', NULL, 21, '0000-00-00'),
(12, 'JOKO MURIYAN', NULL, 21, '0000-00-00'),
(13, 'HERU', NULL, 21, '0000-00-00'),
(14, 'SUNANDAR', NULL, 21, '0000-00-00'),
(15, 'M. LUXIS HARIYANTO', NULL, 21, '0000-00-00'),
(16, 'SIGIT NUR CAHYO', NULL, 21, '0000-00-00'),
(17, 'ANDY ', NULL, 21, '0000-00-00'),
(18, 'SUHARTADI', NULL, 21, '0000-00-00'),
(19, 'GUNAWAN', NULL, 21, '0000-00-00'),
(20, 'EKO SETIAWAN', NULL, 12, '0000-00-00'),
(21, 'AHMAT NASIKIN', NULL, 12, '0000-00-00'),
(22, 'JOKO MUGIONO', NULL, 12, '0000-00-00'),
(23, 'SUGITO', NULL, 12, '0000-00-00'),
(24, 'DIDIK PUJI ASMOKO', NULL, 12, '0000-00-00'),
(25, 'NAVI MAULA', NULL, 12, '2019-03-05'),
(26, 'AJI OKTO (ALAMI)', NULL, 12, '0000-00-00'),
(27, 'MASROKAH', NULL, 12, '0000-00-00'),
(28, 'LUTFIAH', NULL, 12, '0000-00-00'),
(29, 'LUSIANA DEWI', NULL, 12, '0000-00-00'),
(30, 'AGUS SETIAWAN', NULL, 12, '0000-00-00'),
(31, 'SUTINI', NULL, 12, '0000-00-00'),
(32, 'MASNI', NULL, 12, '0000-00-00'),
(33, 'SULIMAH', NULL, 12, '0000-00-00'),
(34, 'SUTIKAH', NULL, 12, '0000-00-00'),
(35, 'M. YUSUF ', NULL, 12, '0000-00-00'),
(36, 'NURUL ISHLAH', NULL, 12, '0000-00-00'),
(37, 'NABAH ', NULL, 12, '0000-00-00'),
(38, 'M. SYARIFUDIN', NULL, 12, '0000-00-00'),
(39, 'M. NUR FATONI', NULL, 12, '0000-00-00'),
(40, 'EDI MULYONO', NULL, 12, '0000-00-00'),
(41, 'M FAHRUROZI', NULL, 12, '0000-00-00'),
(42, 'KHOIRUDIN BILAL', NULL, 12, '0000-00-00'),
(43, 'AHMAD SOLICHIN', NULL, 12, '0000-00-00'),
(44, 'NGADIKIN ', NULL, 12, '0000-00-00'),
(45, 'M. MASROKHAN', NULL, 12, '0000-00-00'),
(46, 'ISROAH', NULL, 7, '0000-00-00'),
(47, 'KAMIRAH', NULL, 7, '0000-00-00'),
(48, 'DWI WIDYASARI', NULL, 7, '0000-00-00'),
(49, 'NOR KHOLIS (2)', NULL, 7, '0000-00-00'),
(50, 'IRMAWATI', NULL, 7, '0000-00-00'),
(51, 'KHOLIFAH', NULL, 7, '0000-00-00'),
(52, 'MOH SAFI\'I', NULL, 7, '0000-00-00'),
(53, 'SUTIMAN', NULL, 7, '0000-00-00'),
(54, 'ISTIROKHAH', NULL, 7, '0000-00-00'),
(55, 'SUPRIYONO', NULL, 7, '0000-00-00'),
(56, 'SOLEMAN', NULL, 7, '0000-00-00'),
(57, 'SAPTA YUNUS BUDI RIYADI', NULL, 7, '0000-00-00'),
(58, 'ROJIKAH', NULL, 7, '0000-00-00'),
(59, 'NURUL HUDA', NULL, 7, '0000-00-00'),
(60, 'M ABDUL WAKHID', NULL, 7, '0000-00-00'),
(61, 'MUZAROH', NULL, 7, '0000-00-00'),
(62, 'MOH ABIDIN', NULL, 7, '0000-00-00'),
(63, 'ROFIAH', NULL, 7, '0000-00-00'),
(64, 'ZAENATUN', NULL, 7, '0000-00-00'),
(65, 'SUKAYIYAH', NULL, 7, '0000-00-00'),
(66, 'PEGGY M', NULL, 7, '0000-00-00'),
(67, 'SETIYA. W', NULL, 7, '0000-00-00'),
(68, 'LIS SUSILOWATI', NULL, 7, '0000-00-00'),
(69, 'NUR ANIS', NULL, 7, '0000-00-00'),
(70, 'ASMAWI', NULL, 7, '0000-00-00'),
(71, 'AJI RAHMADANI', NULL, 7, '0000-00-00'),
(72, 'NANIK INDRIANINGRUM', NULL, 11, '0000-00-00'),
(73, 'SITI NUR WAQIDAH', NULL, 11, '0000-00-00'),
(74, 'SITI BAROKAH', NULL, 11, '0000-00-00'),
(75, 'SRI LESTARI (2)', NULL, 11, '0000-00-00'),
(76, 'ISMU YEKTI SUSANTIKA', NULL, 11, '0000-00-00'),
(77, 'SITI UMI YUNIARNI', NULL, 11, '0000-00-00'),
(78, 'NURUL HUDAFIAH', NULL, 11, '0000-00-00'),
(79, 'INDAHYATI', NULL, 11, '0000-00-00'),
(80, 'RUFITDAH', NULL, 11, '0000-00-00'),
(81, 'KHALIKUL BASIT', NULL, 11, '0000-00-00'),
(82, 'DIKI B', NULL, 11, '0000-00-00'),
(83, 'IMRON MASHADI', NULL, 11, '0000-00-00'),
(84, 'FITRI NURAINI', NULL, 11, '0000-00-00'),
(85, 'SITI FADILAH', NULL, 11, '0000-00-00'),
(86, 'SOPIATUN (1)', NULL, 11, '0000-00-00'),
(87, 'ASEP KURNIAWAN', NULL, 11, '0000-00-00'),
(88, 'NUR KHASANAH', NULL, 11, '0000-00-00'),
(89, 'DIAH MUSRIFATUN', NULL, 11, '0000-00-00'),
(90, 'ISTIYANI', NULL, 11, '0000-00-00'),
(91, 'SITI NUR AFIFAH', NULL, 11, '0000-00-00'),
(92, 'SUSILOWATI', NULL, 11, '0000-00-00'),
(93, 'AYUK YULIAN', NULL, 11, '0000-00-00'),
(94, 'ANGEL (DEPT CLEANING)', NULL, 19, '0000-00-00'),
(95, 'FATKHUR ROHMAN', NULL, 16, '0000-00-00'),
(96, 'BUDI DWI A', NULL, 16, '0000-00-00'),
(97, 'SRI WAHYUNI', NULL, 16, '0000-00-00'),
(98, 'DWI LESTARI', NULL, 16, '0000-00-00'),
(99, 'RAHAYU WIDAYANTI', NULL, 16, '0000-00-00'),
(100, 'SAIFUR ROZAK ', NULL, 16, '0000-00-00'),
(101, 'SITI NUR ANIFAH ', NULL, 16, '0000-00-00'),
(102, 'NUR KHAYATI', NULL, 16, '0000-00-00'),
(103, 'DODY ARI SUSANTO', NULL, 16, '0000-00-00'),
(104, 'ULIL AZMI', NULL, 16, '0000-00-00'),
(105, 'ABDA WAFI NI\'AM', NULL, 16, '0000-00-00'),
(106, 'DEDI IRAWAN (DEPT KHUSUS)', NULL, 20, '0000-00-00'),
(107, 'SITI SULASIH (JEPARA)', 'Jepara', 17, '0000-00-00'),
(108, 'SITI CHOLIFAH', NULL, 17, '0000-00-00'),
(109, 'ISTIAROH (JEPARA)', NULL, 17, '0000-00-00'),
(110, 'SUSI SUSANTI', NULL, 17, '0000-00-00'),
(111, 'NUR SAIDAH', NULL, 17, '0000-00-00'),
(112, 'MUNAWAROTUL', NULL, 17, '0000-00-00'),
(113, 'NOVI INDAHYATI', NULL, 17, '0000-00-00'),
(114, 'ENY KURNIATI ', NULL, 17, '0000-00-00'),
(115, 'ASIATUN', NULL, 17, '0000-00-00'),
(116, 'DWINURIYANA', NULL, 17, '0000-00-00'),
(117, 'KHOIRUNMAN SYAH', NULL, 17, '0000-00-00'),
(118, 'AGUNG TIO', NULL, 17, '0000-00-00'),
(119, 'NGATMAN', NULL, 8, '0000-00-00'),
(120, 'KARWAN', NULL, 8, '0000-00-00'),
(121, 'NUR MAFTUKHAH', NULL, 8, '0000-00-00'),
(122, 'SITI NUR KHASANAH', NULL, 8, '0000-00-00'),
(123, 'ISMI YULIANI', NULL, 8, '0000-00-00'),
(124, 'NUR KHOLIS (1)', NULL, 8, '0000-00-00'),
(125, 'MUKHODAH', NULL, 8, '0000-00-00'),
(126, 'MUNA MUZDALIFAH', NULL, 8, '0000-00-00'),
(127, 'NGATIMAH', NULL, 8, '0000-00-00'),
(128, 'OKY RISKI', NULL, 8, '0000-00-00'),
(129, 'MARFUAH', NULL, 8, '0000-00-00'),
(130, 'SUWARTI', NULL, 8, '0000-00-00'),
(131, 'KASMINI', NULL, 8, '0000-00-00'),
(132, 'RIZAL P', NULL, 8, '0000-00-00'),
(133, 'NUR SOLEHAH', NULL, 8, '0000-00-00'),
(134, 'NUR HIDAYAH ULFA', NULL, 8, '0000-00-00'),
(135, 'PONIAH', NULL, 8, '0000-00-00'),
(136, 'LESTARI', NULL, 8, '0000-00-00'),
(137, 'NIA ROKHAYATI', NULL, 8, '0000-00-00'),
(138, 'ARIFIN', NULL, 8, '0000-00-00'),
(139, 'ZULFAH', NULL, 8, '0000-00-00'),
(140, 'PARSITI', NULL, 8, '0000-00-00'),
(141, 'ULFATU FAIZAH', NULL, 8, '0000-00-00'),
(142, 'EGUH MAULANA', NULL, 8, '0000-00-00'),
(143, 'DEWI YULIANA (ASST FILTER)', NULL, 8, '0000-00-00'),
(144, 'WAHYU PUTRI', NULL, 8, '0000-00-00'),
(145, 'ABDUL MALIK FAJAR', NULL, 8, '0000-00-00'),
(146, 'FATHUL WAHAB', NULL, 8, '0000-00-00'),
(147, 'DAVID ZAIDUN A', NULL, 8, '0000-00-00'),
(148, 'ALEIX SALIM', NULL, 8, '0000-00-00'),
(149, 'SITI SUMIYATI', NULL, 8, '0000-00-00'),
(150, 'ROCHMAD CHAERONI', NULL, 6, '0000-00-00'),
(151, 'HARTONO', NULL, 6, '0000-00-00'),
(152, 'AZIZ NUR HADI* !!', NULL, 6, '0000-00-00'),
(153, 'ABU HARJO !!!', NULL, 6, '0000-00-00'),
(154, 'PUTU FAHMI', NULL, 6, '0000-00-00'),
(155, 'NUR ROFIQ', NULL, 6, '0000-00-00'),
(156, 'ABDUL ROCHIM ', NULL, 6, '0000-00-00'),
(157, 'TAUFIK DWI', NULL, 6, '0000-00-00'),
(158, 'JAMALUDIN', NULL, 9, '0000-00-00'),
(159, 'YULI SETIAWAN', NULL, 9, '0000-00-00'),
(160, 'REZA ARFIAN', NULL, 9, '0000-00-00'),
(161, 'DONI BAYU', NULL, 9, '0000-00-00'),
(162, 'ANDI SUNARTO', NULL, 9, '0000-00-00'),
(163, 'TULUS SLAMET', NULL, 9, '0000-00-00'),
(164, 'M. ARDANI', NULL, 9, '0000-00-00'),
(165, 'MUKLIFATUL', NULL, 18, '0000-00-00'),
(166, 'NURUL', NULL, 13, '0000-00-00'),
(167, 'NUNUNG SETYONINGSIH', NULL, 13, '0000-00-00'),
(168, 'TITIK FEBRIYANI', NULL, 13, '0000-00-00'),
(169, 'INDAH NUR', NULL, 13, '0000-00-00'),
(170, 'NIA RAHAYU', NULL, 13, '0000-00-00'),
(171, 'NOVI ROHMAYANI', NULL, 13, '0000-00-00'),
(172, 'BADRIAH', NULL, 13, '0000-00-00'),
(173, 'SUTRIYAH', NULL, 13, '0000-00-00'),
(174, 'VIVID NUR', NULL, 13, '0000-00-00'),
(175, 'UMI JAZIROH', NULL, 13, '0000-00-00'),
(176, 'SITI ZULAEKHAH', NULL, 13, '0000-00-00'),
(177, 'AKA DIANTI', NULL, 13, '0000-00-00'),
(178, 'FATKUR', NULL, 13, '0000-00-00'),
(179, 'MUNIROH', NULL, 13, '0000-00-00'),
(180, 'SITI ROYANAH', NULL, 13, '0000-00-00'),
(181, 'JOKO YUDIANTO ', NULL, 13, '0000-00-00'),
(182, 'KHUSNUL ', NULL, 13, '0000-00-00'),
(183, 'A. KHAFIDHIN', NULL, 13, '0000-00-00'),
(184, 'M ABDUL ROZAK', NULL, 13, '0000-00-00'),
(185, 'SITI NUR AZIZAH', NULL, 13, '0000-00-00'),
(186, 'HENI ISMAWATI', NULL, 13, '0000-00-00'),
(187, 'S HERIYANTO', NULL, 13, '0000-00-00'),
(188, 'A RIZAL ALIFI', NULL, 13, '0000-00-00'),
(189, 'AGUS ARIZAL', NULL, 13, '0000-00-00'),
(190, 'ASIYAH', NULL, 22, '0000-00-00'),
(191, 'DWI SULISTYOWATI (CLEANING)', NULL, 22, '0000-00-00'),
(192, 'SLAMET', NULL, 22, '0000-00-00'),
(193, 'SRI WAHYUNI', NULL, 22, '0000-00-00'),
(201, 'alfan  ganteng', 'Semarang', 2, '2018-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Alfan Juniyanto', 'alfanjuni@gmail.com', 'images.png', '$2y$10$l0BmBJhesQWJ0X9a0ELQcu9J0vwTNXSWM4WshLMA0m/0gLQ5ZjsJ6', 1, 1, 1552761786),
(4, 'deni cagur', 'deni@deni.com', 'kodingsquad.jpg', '$2y$10$o/S2zDacqlyTP0UU/87UdOvTOy4ahOFpMYgm.0g.zvxCtRlNMM8li', 2, 1, 1552762507),
(5, 'Dini Purwanti, SH', 'hrd.dcofrance@gmail.com', 'admin.jpg', '$2y$10$idv7LthzlqH61VnhsJrq5efzBNhMmYrecougUXzmc/V3hEhAn4yrS', 1, 1, 1553611492);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 6),
(8, 2, 7),
(9, 2, 6),
(10, 1, 8),
(12, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `menu_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `menu_order`) VALUES
(1, 'Admin', 1),
(2, 'User', 5),
(3, 'Menu', 4),
(6, 'Departemen', 2),
(7, 'Karyawan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(6, 1, 'Coba Table', 'table', 'fas fa-fw fa-table', 0),
(7, 3, 'Menu Management', 'menu', 'far fa-fw fa-folder', 1),
(8, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 2, 'coba', 'coba/coba', 'fab fa-fw fa-youtube', 0),
(10, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(11, 6, 'Daftar Departemen', 'departemen', 'fas fa-fw fa-tags', 1),
(12, 7, 'Daftar Karyawan', 'karyawan', 'fas fa-fw fa-users', 1),
(13, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(14, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(15, 2, 'Coba', 'coba/coba', 'fab fa-fw fa-youtube', 1),
(16, 7, 'SPBU', 'spbu', 'far fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `dep_karyawan` (`dep_karyawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`dep_karyawan`) REFERENCES `departemen` (`id_departemen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
