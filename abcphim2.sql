-- --------------------------------------------------------
-- Host:                         206.189.39.123
-- Server version:               5.7.22-0ubuntu0.16.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for abcphim
CREATE DATABASE IF NOT EXISTS `abcphim` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `abcphim`;

-- Dumping structure for table abcphim.chi_tiet_giao_dich
CREATE TABLE IF NOT EXISTS `chi_tiet_giao_dich` (
  `codegiaodich` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `maghe` int(11) NOT NULL,
  PRIMARY KEY (`codegiaodich`,`maghe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table abcphim.chi_tiet_giao_dich: ~22 rows (approximately)
/*!40000 ALTER TABLE `chi_tiet_giao_dich` DISABLE KEYS */;
INSERT INTO `chi_tiet_giao_dich` (`codegiaodich`, `created_at`, `updated_at`, `maghe`) VALUES
	('5AE06A5356236', '2018-04-25 11:45:23', '2018-04-25 11:45:23', 269),
	('5AE06A5356236', '2018-04-25 11:45:23', '2018-04-25 11:45:23', 270),
	('5AE06A5356236', '2018-04-25 11:45:23', '2018-04-25 11:45:23', 271),
	('5AE089BFD226C', '2018-04-25 13:59:27', '2018-04-25 13:59:27', 257),
	('5AE089BFD226C', '2018-04-25 13:59:28', '2018-04-25 13:59:28', 258),
	('5AE089BFD226C', '2018-04-25 13:59:28', '2018-04-25 13:59:28', 259),
	('5AE08A3BBEB2B', '2018-04-25 14:01:31', '2018-04-25 14:01:31', 248),
	('5AE08A3BBEB2B', '2018-04-25 14:01:31', '2018-04-25 14:01:31', 249),
	('5AE08A3BBEB2B', '2018-04-25 14:01:32', '2018-04-25 14:01:32', 250),
	('5AE08DDC1E1C6', '2018-04-25 14:17:00', '2018-04-25 14:17:00', 300),
	('5AE08DDC1E1C6', '2018-04-25 14:17:00', '2018-04-25 14:17:00', 301),
	('5AE08DDC1E1C6', '2018-04-25 14:17:00', '2018-04-25 14:17:00', 302),
	('5AE08DDC1E1C6', '2018-04-25 14:17:00', '2018-04-25 14:17:00', 303),
	('5AE3F22BBB9A9', '2018-04-28 04:01:47', '2018-04-28 04:01:47', 270),
	('5AE3F22BBB9A9', '2018-04-28 04:01:47', '2018-04-28 04:01:47', 271),
	('5AE3F22BBB9A9', '2018-04-28 04:01:48', '2018-04-28 04:01:48', 272),
	('5AE43BF39BF5B', '2018-04-28 09:16:35', '2018-04-28 09:16:35', 265),
	('5AE43BF39BF5B', '2018-04-28 09:16:35', '2018-04-28 09:16:35', 266),
	('5AE43BF39BF5B', '2018-04-28 09:16:35', '2018-04-28 09:16:35', 267),
	('5AE43CF920FE9', '2018-04-28 09:20:57', '2018-04-28 09:20:57', 230),
	('5AE43CF920FE9', '2018-04-28 09:20:57', '2018-04-28 09:20:57', 231),
	('5AE43CF920FE9', '2018-04-28 09:20:57', '2018-04-28 09:20:57', 232);
/*!40000 ALTER TABLE `chi_tiet_giao_dich` ENABLE KEYS */;

-- Dumping structure for table abcphim.ghe
CREATE TABLE IF NOT EXISTS `ghe` (
  `maghe` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenghe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maphong` int(10) unsigned NOT NULL,
  `trangthai` int(10) unsigned NOT NULL,
  `hang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soghe` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`maghe`),
  KEY `ghe_MaPhong` (`maphong`) USING BTREE,
  CONSTRAINT `ghe_ibfk_1` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`)
) ENGINE=InnoDB AUTO_INCREMENT=324 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.ghe: ~100 rows (approximately)
/*!40000 ALTER TABLE `ghe` DISABLE KEYS */;
INSERT INTO `ghe` (`maghe`, `tenghe`, `maphong`, `trangthai`, `hang`, `soghe`, `created_at`, `updated_at`) VALUES
	(224, '1_1', 1, 1, '1', 1, NULL, NULL),
	(225, '1_2', 1, 1, '1', 2, NULL, NULL),
	(226, '1_3', 1, 0, '1', 3, NULL, NULL),
	(227, '1_4', 1, 0, '1', 4, NULL, NULL),
	(228, '1_5', 1, 0, '1', 5, NULL, NULL),
	(229, '1_6', 1, 0, '1', 6, NULL, NULL),
	(230, '1_7', 1, 1, '1', 7, NULL, '2018-04-28 09:21:46'),
	(231, '1_8', 1, 1, '1', 8, NULL, '2018-04-28 09:21:46'),
	(232, '1_9', 1, 1, '1', 9, NULL, '2018-04-28 09:21:46'),
	(233, '1_10', 1, 0, '1', 10, NULL, NULL),
	(234, '2_1', 1, 0, '2', 1, NULL, NULL),
	(235, '2_2', 1, 0, '2', 2, NULL, NULL),
	(236, '2_3', 1, 0, '2', 3, NULL, NULL),
	(237, '2_4', 1, 0, '2', 4, NULL, NULL),
	(238, '2_5', 1, 0, '2', 5, NULL, NULL),
	(239, '2_6', 1, 0, '2', 6, NULL, NULL),
	(240, '2_7', 1, 0, '2', 7, NULL, NULL),
	(241, '2_8', 1, 0, '2', 8, NULL, NULL),
	(242, '2_9', 1, 0, '2', 9, NULL, NULL),
	(243, '2_10', 1, 0, '2', 10, NULL, NULL),
	(244, '3_1', 1, 0, '3', 1, NULL, NULL),
	(245, '3_2', 1, 0, '3', 2, NULL, NULL),
	(246, '3_3', 1, 0, '3', 3, NULL, NULL),
	(247, '3_4', 1, 0, '3', 4, NULL, NULL),
	(248, '3_5', 1, 1, '3', 5, NULL, '2018-04-25 14:02:39'),
	(249, '3_6', 1, 1, '3', 6, NULL, '2018-04-25 14:02:39'),
	(250, '3_7', 1, 1, '3', 7, NULL, '2018-04-25 14:02:39'),
	(251, '3_8', 1, 0, '3', 8, NULL, NULL),
	(252, '3_9', 1, 0, '3', 9, NULL, NULL),
	(253, '3_10', 1, 0, '3', 10, NULL, NULL),
	(254, '4_1', 1, 0, '4', 1, NULL, NULL),
	(255, '4_2', 1, 0, '4', 2, NULL, NULL),
	(256, '4_3', 1, 0, '4', 3, NULL, NULL),
	(257, '4_4', 1, 1, '4', 4, NULL, '2018-04-25 14:00:26'),
	(258, '4_5', 1, 1, '4', 5, NULL, '2018-04-25 14:00:26'),
	(259, '4_6', 1, 1, '4', 6, NULL, '2018-04-25 14:00:26'),
	(260, '4_7', 1, 0, '4', 7, NULL, NULL),
	(261, '4_8', 1, 0, '4', 8, NULL, NULL),
	(262, '4_9', 1, 0, '4', 9, NULL, NULL),
	(263, '4_10', 1, 0, '4', 10, NULL, NULL),
	(264, '5_1', 1, 0, '5', 1, NULL, NULL),
	(265, '5_2', 1, 1, '5', 2, NULL, '2018-04-28 09:17:36'),
	(266, '5_3', 1, 1, '5', 3, NULL, '2018-04-28 09:17:36'),
	(267, '5_4', 1, 1, '5', 4, NULL, '2018-04-28 09:17:36'),
	(268, '5_5', 1, 0, '5', 5, NULL, NULL),
	(269, '5_6', 1, 0, '5', 6, NULL, NULL),
	(270, '5_7', 1, 1, '5', 7, NULL, '2018-04-28 04:02:41'),
	(271, '5_8', 1, 1, '5', 8, NULL, '2018-04-28 04:02:41'),
	(272, '5_9', 1, 1, '5', 9, NULL, '2018-04-28 04:02:41'),
	(273, '5_10', 1, 0, '5', 10, NULL, NULL),
	(274, '6_1', 1, 0, '6', 1, NULL, NULL),
	(275, '6_2', 1, 0, '6', 2, NULL, NULL),
	(276, '6_3', 1, 0, '6', 3, NULL, NULL),
	(277, '6_4', 1, 1, '6', 4, NULL, '2018-04-25 11:21:09'),
	(278, '6_5', 1, 1, '6', 5, NULL, '2018-04-25 11:21:09'),
	(279, '6_6', 1, 1, '6', 6, NULL, '2018-04-25 11:21:10'),
	(280, '6_7', 1, 1, '6', 7, NULL, '2018-04-25 11:21:10'),
	(281, '6_8', 1, 1, '6', 8, NULL, '2018-04-25 11:21:11'),
	(282, '6_9', 1, 1, '6', 9, NULL, '2018-04-25 11:21:11'),
	(283, '6_10', 1, 0, '6', 10, NULL, NULL),
	(284, '7_1', 1, 0, '7', 1, NULL, NULL),
	(285, '7_2', 1, 0, '7', 2, NULL, NULL),
	(286, '7_3', 1, 0, '7', 3, NULL, NULL),
	(287, '7_4', 1, 0, '7', 4, NULL, NULL),
	(288, '7_5', 1, 1, '7', 5, NULL, '2018-04-25 11:35:47'),
	(289, '7_6', 1, 1, '7', 6, NULL, '2018-04-25 11:35:47'),
	(290, '7_7', 1, 0, '7', 7, NULL, NULL),
	(291, '7_8', 1, 0, '7', 8, NULL, NULL),
	(292, '7_9', 1, 0, '7', 9, NULL, NULL),
	(293, '7_10', 1, 0, '7', 10, NULL, NULL),
	(294, '8_1', 1, 0, '8', 1, NULL, NULL),
	(295, '8_2', 1, 0, '8', 2, NULL, NULL),
	(296, '8_3', 1, 0, '8', 3, NULL, NULL),
	(297, '8_4', 1, 0, '8', 4, NULL, NULL),
	(298, '8_5', 1, 0, '8', 5, NULL, NULL),
	(299, '8_6', 1, 0, '8', 6, NULL, NULL),
	(300, '8_7', 1, 1, '8', 7, NULL, '2018-04-25 14:17:56'),
	(301, '8_8', 1, 1, '8', 8, NULL, '2018-04-25 14:17:56'),
	(302, '8_9', 1, 1, '8', 9, NULL, '2018-04-25 14:17:56'),
	(303, '8_10', 1, 1, '8', 10, NULL, '2018-04-25 14:17:56'),
	(304, '9_1', 1, 0, '9', 1, NULL, NULL),
	(305, '9_2', 1, 0, '9', 2, NULL, NULL),
	(306, '9_3', 1, 0, '9', 3, NULL, NULL),
	(307, '9_4', 1, 0, '9', 4, NULL, NULL),
	(308, '9_5', 1, 0, '9', 5, NULL, NULL),
	(309, '9_6', 1, 0, '9', 6, NULL, NULL),
	(310, '9_7', 1, 0, '9', 7, NULL, NULL),
	(311, '9_8', 1, 0, '9', 8, NULL, NULL),
	(312, '9_9', 1, 0, '9', 9, NULL, NULL),
	(313, '9_10', 1, 0, '9', 10, NULL, NULL),
	(314, '10_1', 1, 0, '10', 1, NULL, NULL),
	(315, '10_2', 1, 0, '10', 2, NULL, NULL),
	(316, '10_3', 1, 0, '10', 3, NULL, NULL),
	(317, '10_4', 1, 0, '10', 4, NULL, NULL),
	(318, '10_5', 1, 0, '10', 5, NULL, NULL),
	(319, '10_6', 1, 0, '10', 6, NULL, NULL),
	(320, '10_7', 1, 0, '10', 7, NULL, NULL),
	(321, '10_8', 1, 0, '10', 8, NULL, NULL),
	(322, '10_9', 1, 0, '10', 9, NULL, NULL),
	(323, '10_10', 1, 0, '10', 10, NULL, NULL);
/*!40000 ALTER TABLE `ghe` ENABLE KEYS */;

-- Dumping structure for table abcphim.giao_dich
CREATE TABLE IF NOT EXISTS `giao_dich` (
  `magd` int(11) NOT NULL AUTO_INCREMENT,
  `makehoach` int(11) NOT NULL DEFAULT '0',
  `makhachhang` int(11) NOT NULL DEFAULT '0',
  `codegiaodich` varchar(50) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `trangthai` tinyint(4) NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`magd`),
  UNIQUE KEY `CodeGiaoDich` (`codegiaodich`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Dumping data for table abcphim.giao_dich: ~7 rows (approximately)
/*!40000 ALTER TABLE `giao_dich` DISABLE KEYS */;
INSERT INTO `giao_dich` (`magd`, `makehoach`, `makhachhang`, `codegiaodich`, `created_at`, `trangthai`, `updated_at`) VALUES
	(15, 1, 1, '5AE06A5356236', '2018-04-25 11:45:23', 0, '2018-04-25 11:45:23'),
	(16, 1, 1, '5AE089BFD226C', '2018-04-25 13:59:27', 1, '2018-04-25 14:00:25'),
	(17, 1, 1, '5AE08A3BBEB2B', '2018-04-25 14:01:31', 1, '2018-04-25 14:02:38'),
	(18, 1, 1, '5AE08DDC1E1C6', '2018-04-25 14:17:00', 1, '2018-04-25 14:17:56'),
	(19, 1, 1, '5AE3F22BBB9A9', '2018-04-28 04:01:47', 1, '2018-04-28 04:02:40'),
	(20, 1, 1, '5AE43BF39BF5B', '2018-04-28 09:16:35', 1, '2018-04-28 09:17:36'),
	(21, 1, 1, '5AE43CF920FE9', '2018-04-28 09:20:57', 1, '2018-04-28 09:21:45');
/*!40000 ALTER TABLE `giao_dich` ENABLE KEYS */;

-- Dumping structure for table abcphim.hangphim
CREATE TABLE IF NOT EXISTS `hangphim` (
  `mahangphim` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenhangphim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mahangphim`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.hangphim: ~2 rows (approximately)
/*!40000 ALTER TABLE `hangphim` DISABLE KEYS */;
INSERT INTO `hangphim` (`mahangphim`, `tenhangphim`, `updated_at`, `created_at`) VALUES
	(2, 'Việt Nam', NULL, NULL),
	(3, 'Trung Quốc', NULL, NULL);
/*!40000 ALTER TABLE `hangphim` ENABLE KEYS */;

-- Dumping structure for table abcphim.kehoachchieu
CREATE TABLE IF NOT EXISTS `kehoachchieu` (
  `makehoachchieu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maphim` int(10) unsigned NOT NULL,
  `maphong` int(10) unsigned NOT NULL,
  `ngaychieu` date NOT NULL,
  `giobatdau` time NOT NULL,
  `giave` int(255) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`makehoachchieu`),
  KEY `kehoachchieu_MaPhim` (`maphim`) USING BTREE,
  KEY `kehoachchieu_MaPhong` (`maphong`) USING BTREE,
  CONSTRAINT `kehoachchieu_ibfk_1` FOREIGN KEY (`maphim`) REFERENCES `phim` (`maphim`),
  CONSTRAINT `kehoachchieu_ibfk_2` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.kehoachchieu: ~2 rows (approximately)
/*!40000 ALTER TABLE `kehoachchieu` DISABLE KEYS */;
INSERT INTO `kehoachchieu` (`makehoachchieu`, `maphim`, `maphong`, `ngaychieu`, `giobatdau`, `giave`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2018-04-28', '23:57:00', 75000, NULL, NULL),
	(2, 14, 2, '2018-04-29', '23:00:00', 120000, NULL, NULL);
/*!40000 ALTER TABLE `kehoachchieu` ENABLE KEYS */;

-- Dumping structure for table abcphim.loaiphim
CREATE TABLE IF NOT EXISTS `loaiphim` (
  `maloaiphim` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenloaiphim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`maloaiphim`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.loaiphim: ~2 rows (approximately)
/*!40000 ALTER TABLE `loaiphim` DISABLE KEYS */;
INSERT INTO `loaiphim` (`maloaiphim`, `tenloaiphim`, `created_at`, `updated_at`) VALUES
	(2, 'Hài hước', NULL, NULL),
	(3, 'Tâm lý', NULL, NULL);
/*!40000 ALTER TABLE `loaiphim` ENABLE KEYS */;

-- Dumping structure for table abcphim.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table abcphim.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table abcphim.nhanvien
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manhanvien` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marap` int(10) unsigned NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `socmnd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quyennhanvien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`manhanvien`),
  KEY `nhanvien_MaRap` (`marap`) USING BTREE,
  CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`marap`) REFERENCES `rap` (`marap`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.nhanvien: ~1 rows (approximately)
/*!40000 ALTER TABLE `nhanvien` DISABLE KEYS */;
INSERT INTO `nhanvien` (`manhanvien`, `marap`, `hoten`, `diachi`, `sodienthoai`, `socmnd`, `email`, `matkhau`, `quyennhanvien`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Phan Anh Tú', 'Thanh Xuân', '1658827223', '12312312', 'tuphan@gmail.com', '123456', 1, NULL, NULL);
/*!40000 ALTER TABLE `nhanvien` ENABLE KEYS */;

-- Dumping structure for table abcphim.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table abcphim.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table abcphim.phim
CREATE TABLE IF NOT EXISTS `phim` (
  `maphim` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mahangphim` int(10) unsigned NOT NULL,
  `maloaiphim` int(10) unsigned NOT NULL,
  `tenphim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoiluong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motaphim` text COLLATE utf8_unicode_ci NOT NULL,
  `dandienvien` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaykhoichieu` date NOT NULL,
  `anhphim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `daodien` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`maphim`),
  KEY `phim_MaHangphim` (`mahangphim`) USING BTREE,
  KEY `phim_MaLoaiphim` (`maloaiphim`) USING BTREE,
  CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`mahangphim`) REFERENCES `hangphim` (`mahangphim`),
  CONSTRAINT `phim_ibfk_2` FOREIGN KEY (`maloaiphim`) REFERENCES `loaiphim` (`maloaiphim`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.phim: ~5 rows (approximately)
/*!40000 ALTER TABLE `phim` DISABLE KEYS */;
INSERT INTO `phim` (`maphim`, `mahangphim`, `maloaiphim`, `tenphim`, `thoiluong`, `motaphim`, `dandienvien`, `ngaykhoichieu`, `anhphim`, `daodien`, `trailer`, `trangthai`, `created_at`, `updated_at`) VALUES
	(1, 2, 2, 'Tháng Năm Rực Rỡ ', '118 phút', '\r\n\r\nTháng Năm Rực Rỡ mang đến hai câu chuyện song song về những cô nữ sinh trẻ tuổi tràn đầy hoài bão và những người phụ nữ trưởng thành đã nếm trải qua cay ngọt cuộc đời. Phim quy tụ dàn mỹ nhân tài năng của hai thế hệ như Hồng Ánh, Thanh Hằng, Mỹ Duyên, Mỹ Uyên, Minh Tuyền… trong vai nhóm Ngựa Hoang trưởng thành và Hoàng Yến Chibi, Hoàng Oanh, Jun Vũ, Khổng Tú Quỳnh, Minh Thảo, Trịnh Thảo, Thanh Tú… trong vai nhóm Ngựa Hoang thời tuổi trẻ.\r\n\r\n', 'Jun Vũ, Khổng Tú Quỳnh, Hoàng Oanh, Hoàng Yến Chibi, Mỹ Duyên, Thanh Hằng, Hồng Ánh', '2018-04-09', 'http://www.movienewsletters.net/photos/VNM_190665R1.jpg', ' Nguyễn Quang Dũng ', 'https://www.youtube.com/watch?v=qjWoaNWZ2Xo', 2, NULL, NULL),
	(14, 2, 3, 'Girls 2 - Những Cô Gái Và Găng Tơ ', '100 phút', '\r\n\r\nBữa tiệc độc thân của Xiwen (Trần Ý Hàm) được chính Bảo Sơn tổ chức tại một căn biệt thự xa hoa với đầy đủ các thú vui khác nhau. Trải qua cuộc vui “quên trời quên đất”, ba cô gái Xiwen, Kimmy, Jialan giật mình tỉnh dậy và thấy bị còng tay ở bờ biển, người phủ đầy cát và không mảnh vải che thân. Sau khi trốn thoát, ba cô gái tiếp tục lúng túng khi đang đầu bù, tóc rối và phải chạm mặt người đàn ông ngoại quốc, có thân hình vạm vỡ (Mike Tyson).\r\n', 'Mike Tyson, Trần Bảo Sơn', '2018-03-16', 'https://vuviphim.com/wp-content/uploads/2016/08/Girl-2-Nh%E1%BB%AFng-C%C3%B4-G%C3%A1i-V%C3%A0-Gangster-2018-poster.jpg', ' Hoàng Chân Chân ', 'https://www.youtube.com/watch?v=x2WaJBT4p-c', 1, NULL, NULL),
	(15, 2, 2, '10x10 - Tội Ác Sau Phòng Kín', '87 phút', '\r\n\r\nCô gái Cathy bị tên bắt cóc “bất đắc dĩ” Lewis tấn công ngay giữa ban ngày và mang về một căn phòng kín bí ẩn để tra khảo. Tại căn phòng kín này, những màn tra khảo - đấu trí giữa hai bên đã diễn ra. Liệu Lewis có đoạt được điều mà gã muốn? Liệu Cathy có trốn thoát ra khỏi căn phòng? Liệu đâu là sự thật ẩn giấu cuối cùng?\r\n', 'Suzi Ewing, Noel Clarke, Kelly Reilly, Luke Evans', '2018-03-16', 'https://ia.media-imdb.com/images/M/MV5BYjllM2NmN2ItZWQxMi00OWNjLWJmNmEtZGQ3MmE1ZjFlMTFjXkEyXkFqcGdeQXVyNjMwNzM5NDk@._V1_SY1000_CR0,0,663,1000_AL_.jpg', ' Suzi Ewing ', 'https://www.youtube.com/watch?v=PPIHpRUUaro', 1, NULL, NULL),
	(16, 2, 2, 'Deadpool', '180 phut', 'Deadpool xoay quanh anh chàng Wade Wilson, một người bị ung thư vô phương cứu chữa bị thí nghiệm trở thành dị nhân với khả năng phục hồi siêu tốc giống Wolverine nhưng ưu việt hơn, mặc dù để lại sẹo sau cuộc thí nghiệm khiến anh trở nên xấu xí. Mất đi vẻ ngoài, người yêu, hạnh phúc, điều đó khiến anh bằng mọi giá tìm ra kẻ đã phá hoại cuộc đời anh.', 'Ryan Reynolds, Morena Baccarin, Ed Skrein, T. J. Miller, Gina Carano, Leslie Uggams, Brianna Hildebrand', '2018-03-29', 'https://upload.wikimedia.org/wikipedia/vi/thumb/4/46/Deadpool_poster.jpg/280px-Deadpool_poster.jpg', 'Tim Miller', 'https://www.youtube.com/watch?v=gtTfd6tISfw', 1, NULL, NULL),
	(17, 2, 2, 'Pacific Rim: Trỗi Dậy', '180 phut', 'Lấy bối cảnh 10 năm sau những sự kiện đã diễn ra ở phần 1, Jake Pentecost – truyền nhân duy nhất của huyền thoại Stacker Pentecost đã thực hiện lời hứa với cha mình, gia nhập nhóm người điều khiển Jaeger gồm có Lambert (Scott Eastwood) và Amara chỉ mới 15 tuổi (Cailee Spaeny), cùng nhau xây dựng nên một chiến tuyến chống lại Kaiju. Cuộc xung đột toàn cầu kéo dài giữa những quái vật âm mưu phá hủy thế giới và những robot khổng lồ do con người chế tạo ra nhằm đánh bại lũ quái vật hứa hẹn sẽ là một cuộc chiến cam go và kịch tính khi lũ quái vật giờ đây đã tiến hóa vượt bậc cả về thể lực và trí lực.', 'John Boyega, Scott Eastwood, Jing Tian, Cailee Spaeny, Rinko Kikuchi, Burn Gorman, Adria Arjona, Charlie Day', '2018-03-30', 'http://www.movienewsletters.net/photos/VNM_190665R1.jpg', 'Steven S. DeKnight', 'https://www.youtube.com/watch?v=gtTfd6tISfw', 1, NULL, NULL);
/*!40000 ALTER TABLE `phim` ENABLE KEYS */;

-- Dumping structure for table abcphim.phong
CREATE TABLE IF NOT EXISTS `phong` (
  `maphong` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marap` int(10) unsigned NOT NULL,
  `tenphong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluongghe` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`maphong`),
  KEY `phong_MaRap` (`marap`) USING BTREE,
  CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`marap`) REFERENCES `rap` (`marap`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.phong: ~5 rows (approximately)
/*!40000 ALTER TABLE `phong` DISABLE KEYS */;
INSERT INTO `phong` (`maphong`, `marap`, `tenphong`, `soluongghe`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Phòng số 1 Lottecinema Thăng Long', 200, NULL, NULL),
	(2, 1, 'Phòng số 2 Lottecinema Thăng Long', 200, NULL, NULL),
	(3, 1, 'Phòng số 3 Lottecinema Thăng Long', 200, NULL, NULL),
	(4, 5, 'Phòng số 1 Galaxy-Mipec Long Biên', 200, NULL, NULL),
	(5, 5, 'Phòng số 2 Galaxy-Mipec Long Biên', 200, NULL, NULL);
/*!40000 ALTER TABLE `phong` ENABLE KEYS */;

-- Dumping structure for table abcphim.quanhuyen
CREATE TABLE IF NOT EXISTS `quanhuyen` (
  `maquanhuyen` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mathanhpho` int(10) unsigned NOT NULL,
  `tenquanhuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`maquanhuyen`),
  KEY `quanhuyen_MaThanhpho` (`mathanhpho`) USING BTREE,
  CONSTRAINT `quanhuyen_ibfk_1` FOREIGN KEY (`mathanhpho`) REFERENCES `thanhpho` (`mathanhpho`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.quanhuyen: ~13 rows (approximately)
/*!40000 ALTER TABLE `quanhuyen` DISABLE KEYS */;
INSERT INTO `quanhuyen` (`maquanhuyen`, `mathanhpho`, `tenquanhuyen`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Quận Cầu Giấy', NULL, NULL),
	(2, 1, 'Quận Hà Đông', NULL, NULL),
	(3, 1, 'Quận Đống Đa', NULL, NULL),
	(4, 1, 'Quận Long Biên', NULL, NULL),
	(5, 1, 'Quận Mỹ Đình', NULL, NULL),
	(6, 1, 'Quận Nam Từ Liêm', NULL, NULL),
	(7, 1, 'Quận Đan Phượng', NULL, NULL),
	(8, 1, 'Quận Hoàng Mai', NULL, NULL),
	(9, 1, 'Quận Hai Bà Trưng', NULL, NULL),
	(10, 2, 'quận 1', NULL, NULL),
	(11, 2, 'quận 2', NULL, NULL),
	(12, 3, 'quận 1 đà nẵng', NULL, NULL),
	(13, 3, 'quận 2 đà nẵng', NULL, NULL);
/*!40000 ALTER TABLE `quanhuyen` ENABLE KEYS */;

-- Dumping structure for table abcphim.rap
CREATE TABLE IF NOT EXISTS `rap` (
  `marap` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maquanhuyen` int(10) unsigned NOT NULL,
  `tenrap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachirap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`marap`),
  KEY `rap_MaQuanhuyen` (`maquanhuyen`) USING BTREE,
  CONSTRAINT `rap_ibfk_1` FOREIGN KEY (`maquanhuyen`) REFERENCES `quanhuyen` (`maquanhuyen`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.rap: ~9 rows (approximately)
/*!40000 ALTER TABLE `rap` DISABLE KEYS */;
INSERT INTO `rap` (`marap`, `maquanhuyen`, `tenrap`, `diachirap`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Lotte Cinema Thăng Long', ' T3 BigC Thăng Long, 222 Trần Duy Hưng, HN', NULL, NULL),
	(2, 1, ' Lotte Cinema Landmark', ' E6 Phạm Hùng, Cầu Giấy, HN', NULL, NULL),
	(3, 2, ' Lotte Cinema Hà Đông', ' T5-Mê Linh Plaza, Tô Hiệu, Hà Đông, HN', NULL, NULL),
	(4, 3, 'BHD Star Vincom Phạm Ngọc Thạch', ' T8-Vincom, 2 Phạm Ngọc Thạch, Đống Đa, HN', NULL, NULL),
	(5, 4, ' Galaxy - Mipec Long Biên', ' T6-Mipec Riverside, số 2 Long Biên 2, HN', NULL, NULL),
	(6, 6, ' Beta Cineplex Mỹ Đình', ' B1-Golden Palace, Mễ Trì, Nam Từ Liêm, HN', NULL, NULL),
	(7, 5, ' Beta Cineplex Thanh Xuân', ' B1-Golden West, 2 Lê Văn Thiêm, HN', NULL, NULL),
	(8, 7, ' Beta Cineplex Đan Phượng', ' XPHomes, Tân Tây Đô, Tân Lập, Đan Phượng, Hà Nội', NULL, NULL),
	(9, 10, ' Beta Cineplex Đan Phượng TPHCM', ' XPHomes, Tân Tây Đô, Tân Lập, Đan Phượng, TP HCM', NULL, NULL);
/*!40000 ALTER TABLE `rap` ENABLE KEYS */;

-- Dumping structure for table abcphim.thanhpho
CREATE TABLE IF NOT EXISTS `thanhpho` (
  `mathanhpho` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenthanhpho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mathanhpho`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.thanhpho: ~3 rows (approximately)
/*!40000 ALTER TABLE `thanhpho` DISABLE KEYS */;
INSERT INTO `thanhpho` (`mathanhpho`, `tenthanhpho`, `created_at`, `updated_at`) VALUES
	(1, 'Hà Nội', NULL, NULL),
	(2, 'TP Hồ Chí Minh', NULL, NULL),
	(3, 'Đà Nẵng', NULL, NULL);
/*!40000 ALTER TABLE `thanhpho` ENABLE KEYS */;

-- Dumping structure for table abcphim.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socmnd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table abcphim.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `diachi`, `sodienthoai`, `socmnd`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Hoàng Minh Trí', 'hmtmail1@gmail.com', '$2y$10$kpG.sh.8hF03Rsit/uHyQ.Y5A3EvWE/rkefFGkOvx6UW2h2VrqJPm', 'Thanh Hoa', '0969896525', NULL, 'mjXwc4JNfeTdXAT8ehk7oQN50QUTl4YznodEUUmMtCGICgmd70Q6y7cDMHwb', '2018-04-07 14:57:43', '2018-04-28 13:22:40');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table abcphim.ve
CREATE TABLE IF NOT EXISTS `ve` (
  `mave` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `makhachhang` int(10) unsigned NOT NULL,
  `makehoachchieu` int(10) unsigned NOT NULL,
  `ngaymuave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mave`),
  KEY `ve_MaKhachhang` (`makhachhang`) USING BTREE,
  KEY `ve_Makehoachchieu` (`makehoachchieu`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.ve: ~1 rows (approximately)
/*!40000 ALTER TABLE `ve` DISABLE KEYS */;
INSERT INTO `ve` (`mave`, `makhachhang`, `makehoachchieu`, `ngaymuave`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2018-03-19 17:00:00', '2018-04-25 11:19:40', '2018-04-25 11:19:40');
/*!40000 ALTER TABLE `ve` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
