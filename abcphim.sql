-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.21 - MySQL Community Server (GPL)
-- Server OS:                    Win64
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

-- Dumping data for table abcphim.chi_tiet_giao_dich: ~2 rows (approximately)
/*!40000 ALTER TABLE `chi_tiet_giao_dich` DISABLE KEYS */;
INSERT INTO `chi_tiet_giao_dich` (`codegiaodich`, `created_at`, `updated_at`, `maghe`) VALUES
	('5AF4365B5B8E4', '2018-05-10 12:08:59', '2018-05-10 12:08:59', 361),
	('5AF4365B5B8E4', '2018-05-10 12:08:59', '2018-05-10 12:08:59', 371);
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
  CONSTRAINT `ghe_ibfk_1` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=440 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.ghe: ~100 rows (approximately)
/*!40000 ALTER TABLE `ghe` DISABLE KEYS */;
INSERT INTO `ghe` (`maghe`, `tenghe`, `maphong`, `trangthai`, `hang`, `soghe`, `created_at`, `updated_at`) VALUES
	(1, '1_1', 4, 0, '1', 1, NULL, NULL),
	(324, '1_2\r\n', 4, 0, '1', 2, NULL, NULL),
	(325, '1_3', 4, 0, '1', 3, NULL, NULL),
	(326, '1_4', 4, 0, '1', 4, NULL, NULL),
	(327, '1_5', 4, 0, '1', 5, NULL, NULL),
	(328, '1_6', 4, 0, '1', 6, NULL, NULL),
	(330, '1_7', 4, 0, '1', 7, NULL, NULL),
	(331, '1_8', 4, 0, '1', 8, NULL, NULL),
	(332, '1_9', 4, 0, '1', 9, NULL, NULL),
	(333, '1_10', 4, 0, '1', 10, NULL, NULL),
	(334, '2_1', 4, 0, '2', 1, NULL, NULL),
	(335, '2_2', 4, 0, '2', 2, NULL, NULL),
	(336, '2_3', 4, 0, '2', 3, NULL, NULL),
	(337, '2_4', 4, 0, '2', 4, NULL, NULL),
	(338, '2_5', 4, 0, '2', 5, NULL, NULL),
	(339, '2_6', 4, 0, '2', 6, NULL, '2018-05-07 16:12:04'),
	(340, '2_8', 4, 0, '2', 8, NULL, NULL),
	(341, '2_9', 4, 0, '2', 9, NULL, '2018-05-07 16:32:22'),
	(342, '2_10', 4, 0, '2', 10, NULL, '2018-05-07 16:32:22'),
	(343, '3_1', 4, 0, '3', 1, NULL, NULL),
	(344, '3_2', 4, 0, '3', 2, NULL, NULL),
	(345, '3_3', 4, 0, '3', 3, NULL, NULL),
	(346, '3_4', 4, 0, '3', 4, NULL, NULL),
	(347, '3_5', 4, 0, '3', 5, NULL, '2018-05-08 10:49:18'),
	(348, '3_6', 4, 0, '3', 6, NULL, '2018-05-08 02:17:04'),
	(349, '3_7', 4, 0, '3', 7, NULL, '2018-05-08 02:17:04'),
	(350, '3_8', 4, 1, '3', 8, NULL, '2018-05-10 12:07:18'),
	(351, '3_9', 4, 1, '3', 9, NULL, '2018-05-10 12:07:18'),
	(353, '4_1', 4, 0, '4', 1, NULL, NULL),
	(354, '4_2', 4, 0, '4', 2, NULL, NULL),
	(355, '4_3', 4, 0, '4', 3, NULL, NULL),
	(356, '4_4', 4, 0, '4', 4, NULL, NULL),
	(357, '4_5', 4, 0, '4', 5, NULL, NULL),
	(358, '4_6', 4, 0, '4', 6, NULL, NULL),
	(359, '4_7', 4, 0, '4', 7, NULL, '2018-05-06 05:20:23'),
	(360, '4_8', 4, 0, '4', 8, NULL, '2018-05-06 05:20:23'),
	(361, '4_9', 4, 1, '4', 9, NULL, '2018-05-10 12:09:37'),
	(363, '5_1', 4, 0, '5', 1, NULL, NULL),
	(364, '5_2', 4, 0, '5', 2, NULL, NULL),
	(365, '5_3', 4, 0, '5', 3, NULL, NULL),
	(366, '5_4', 4, 0, '5', 4, NULL, NULL),
	(367, '5_5', 4, 0, '5', 5, NULL, NULL),
	(368, '5_6', 4, 0, '5', 6, NULL, NULL),
	(369, '5_7', 4, 0, '5', 7, NULL, NULL),
	(370, '5_8', 4, 0, '5', 8, NULL, NULL),
	(371, '5_9', 4, 1, '5', 9, NULL, '2018-05-10 12:09:37'),
	(373, '6_1', 4, 0, '6', 1, NULL, NULL),
	(374, '6_2', 4, 0, '6', 2, NULL, NULL),
	(384, '6_3', 4, 0, '6', 3, NULL, NULL),
	(385, '6_4', 4, 0, '6', 4, NULL, NULL),
	(386, '6_5', 4, 0, '6', 5, NULL, NULL),
	(387, '6_6', 4, 0, '6', 6, NULL, NULL),
	(388, '6_7', 4, 0, '6', 7, NULL, NULL),
	(389, '6_8', 4, 0, '6', 8, NULL, NULL),
	(390, '6_9', 4, 0, '6', 9, NULL, '2018-05-07 16:08:49'),
	(392, '7_1', 4, 0, '7', 1, NULL, NULL),
	(393, '7_2', 4, 0, '7', 2, NULL, NULL),
	(394, '7_3', 4, 0, '7', 3, NULL, NULL),
	(395, '7_4', 4, 0, '7', 4, NULL, NULL),
	(396, '7_5', 4, 0, '7', 5, NULL, NULL),
	(397, '7_6', 4, 0, '7', 6, NULL, NULL),
	(398, '7_7', 4, 0, '7', 7, NULL, NULL),
	(399, '7_8', 4, 0, '7', 8, NULL, NULL),
	(400, '7_9', 4, 0, '7', 9, NULL, '2018-05-07 15:48:07'),
	(402, '8_1', 4, 0, '8', 1, NULL, NULL),
	(403, '8_2', 4, 0, '8', 2, NULL, NULL),
	(404, '8_3', 4, 0, '8', 3, NULL, NULL),
	(405, '8_4', 4, 0, '8', 4, NULL, NULL),
	(406, '8_5', 4, 0, '8', 5, NULL, NULL),
	(407, '8_6', 4, 0, '8', 6, NULL, NULL),
	(408, '8_7', 4, 0, '8', 7, NULL, NULL),
	(409, '8_8', 4, 0, '8', 8, NULL, NULL),
	(410, '8_9', 4, 0, '8', 9, NULL, NULL),
	(412, '9_1', 4, 0, '9', 1, NULL, NULL),
	(413, '9_2', 4, 0, '9', 2, NULL, NULL),
	(414, '9_3', 4, 0, '9', 3, NULL, NULL),
	(415, '9_4', 4, 0, '9', 4, NULL, NULL),
	(416, '9_5', 4, 0, '9', 5, NULL, NULL),
	(417, '9_6', 4, 0, '9', 6, NULL, NULL),
	(418, '9_7', 4, 0, '9', 7, NULL, NULL),
	(419, '9_8', 4, 0, '9', 8, NULL, NULL),
	(420, '9_9', 4, 0, '9', 9, NULL, NULL),
	(422, '10_1', 4, 0, '10', 1, NULL, NULL),
	(423, '10_2', 4, 0, '10', 2, NULL, NULL),
	(424, '10_3', 4, 0, '10', 3, NULL, NULL),
	(425, '10_4', 4, 0, '10', 4, NULL, NULL),
	(426, '10_5', 4, 0, '10', 5, NULL, NULL),
	(427, '10_6', 4, 0, '10', 6, NULL, NULL),
	(428, '10_7', 4, 0, '10', 7, NULL, NULL),
	(429, '10_8', 4, 0, '10', 8, NULL, NULL),
	(430, '10_9', 4, 0, '10', 9, NULL, NULL),
	(431, '10-10', 4, 0, '10', 10, NULL, NULL),
	(432, '3_10', 4, 0, '3', 10, NULL, '2018-05-05 14:50:27'),
	(433, '4_10', 4, 0, '4', 10, NULL, '2018-05-05 14:50:27'),
	(434, '5_10', 4, 0, '5', 10, NULL, '2018-05-07 15:34:00'),
	(435, '6_10', 4, 0, '6', 10, NULL, '2018-05-07 15:34:00'),
	(436, '7_10', 4, 0, '7', 10, NULL, '2018-05-07 15:48:07'),
	(437, '8_10', 4, 0, '8', 10, NULL, NULL),
	(438, '9_10', 4, 0, '9', 10, NULL, NULL),
	(439, '2_7', 4, 0, '2', 7, NULL, '2018-05-07 16:12:04');
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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

-- Dumping data for table abcphim.giao_dich: ~1 rows (approximately)
/*!40000 ALTER TABLE `giao_dich` DISABLE KEYS */;
INSERT INTO `giao_dich` (`magd`, `makehoach`, `makhachhang`, `codegiaodich`, `created_at`, `trangthai`, `updated_at`) VALUES
	(74, 2, 2, '5AF4365B5B8E4', '2018-05-10 12:08:59', 1, '2018-05-10 12:09:37');
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
  CONSTRAINT `kehoachchieu_ibfk_1` FOREIGN KEY (`maphim`) REFERENCES `phim` (`maphim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kehoachchieu_ibfk_2` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.kehoachchieu: ~2 rows (approximately)
/*!40000 ALTER TABLE `kehoachchieu` DISABLE KEYS */;
INSERT INTO `kehoachchieu` (`makehoachchieu`, `maphim`, `maphong`, `ngaychieu`, `giobatdau`, `giave`, `created_at`, `updated_at`) VALUES
	(1, 1, 4, '2018-06-04', '23:19:33', 80000, NULL, NULL),
	(2, 15, 4, '2018-06-02', '23:19:33', 90000, NULL, NULL);
/*!40000 ALTER TABLE `kehoachchieu` ENABLE KEYS */;

-- Dumping structure for table abcphim.loaiphim
CREATE TABLE IF NOT EXISTS `loaiphim` (
  `maloaiphim` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenloaiphim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`maloaiphim`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.loaiphim: ~3 rows (approximately)
/*!40000 ALTER TABLE `loaiphim` DISABLE KEYS */;
INSERT INTO `loaiphim` (`maloaiphim`, `tenloaiphim`, `created_at`, `updated_at`) VALUES
	(2, 'Hài hước', NULL, NULL),
	(3, 'Tâm lý', NULL, NULL),
	(4, 'Trinh thám', NULL, NULL);
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
  CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`marap`) REFERENCES `rap` (`marap`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.nhanvien: ~0 rows (approximately)
/*!40000 ALTER TABLE `nhanvien` DISABLE KEYS */;
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
  CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`mahangphim`) REFERENCES `hangphim` (`mahangphim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `phim_ibfk_2` FOREIGN KEY (`maloaiphim`) REFERENCES `loaiphim` (`maloaiphim`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.phim: ~5 rows (approximately)
/*!40000 ALTER TABLE `phim` DISABLE KEYS */;
INSERT INTO `phim` (`maphim`, `mahangphim`, `maloaiphim`, `tenphim`, `thoiluong`, `motaphim`, `dandienvien`, `ngaykhoichieu`, `anhphim`, `daodien`, `trailer`, `trangthai`, `created_at`, `updated_at`) VALUES
	(1, 2, 2, 'Tháng Năm Rực Rỡ ', '118 phút', '\r\n\r\nTháng Năm Rực Rỡ mang đến hai câu chuyện song song về những cô nữ sinh trẻ tuổi tràn đầy hoài bão và những người phụ nữ trưởng thành đã nếm trải qua cay ngọt cuộc đời. Phim quy tụ dàn mỹ nhân tài năng của hai thế hệ như Hồng Ánh, Thanh Hằng, Mỹ Duyên, Mỹ Uyên, Minh Tuyền… trong vai nhóm Ngựa Hoang trưởng thành và Hoàng Yến Chibi, Hoàng Oanh, Jun Vũ, Khổng Tú Quỳnh, Minh Thảo, Trịnh Thảo, Thanh Tú… trong vai nhóm Ngựa Hoang thời tuổi trẻ.\r\n\r\n', 'Jun Vũ, Khổng Tú Quỳnh, Hoàng Oanh, Hoàng Yến Chibi, Mỹ Duyên, Thanh Hằng, Hồng Ánh', '2018-04-09', 'http://www.movienewsletters.net/photos/VNM_190665R1.jpg', ' Nguyễn Quang Dũng ', 'https://www.youtube.com/watch?v=qjWoaNWZ2Xo', 1, NULL, NULL),
	(14, 2, 3, ' Những Cô Gái Và Găng Tơ ', '100 phút', '\r\n\r\nBữa tiệc độc thân của Xiwen (Trần Ý Hàm) được chính Bảo Sơn tổ chức tại một căn biệt thự xa hoa với đầy đủ các thú vui khác nhau. Trải qua cuộc vui “quên trời quên đất”, ba cô gái Xiwen, Kimmy, Jialan giật mình tỉnh dậy và thấy bị còng tay ở bờ biển, người phủ đầy cát và không mảnh vải che thân. Sau khi trốn thoát, ba cô gái tiếp tục lúng túng khi đang đầu bù, tóc rối và phải chạm mặt người đàn ông ngoại quốc, có thân hình vạm vỡ (Mike Tyson).\r\n', 'Mike Tyson, Trần Bảo Sơn', '2018-03-16', 'https://vuviphim.com/wp-content/uploads/2016/08/Girl-2-Nh%E1%BB%AFng-C%C3%B4-G%C3%A1i-V%C3%A0-Gangster-2018-poster.jpg', ' Hoàng Chân Chân ', 'https://www.youtube.com/watch?v=x2WaJBT4p-c', 1, NULL, NULL),
	(15, 2, 2, 'Tội Ác Sau Phòng Kín', '87 phút', '\r\n\r\nCô gái Cathy bị tên bắt cóc “bất đắc dĩ” Lewis tấn công ngay giữa ban ngày và mang về một căn phòng kín bí ẩn để tra khảo. Tại căn phòng kín này, những màn tra khảo - đấu trí giữa hai bên đã diễn ra. Liệu Lewis có đoạt được điều mà gã muốn? Liệu Cathy có trốn thoát ra khỏi căn phòng? Liệu đâu là sự thật ẩn giấu cuối cùng?\r\n', 'Suzi Ewing, Noel Clarke, Kelly Reilly, Luke Evans', '2018-03-16', 'https://ia.media-imdb.com/images/M/MV5BYjllM2NmN2ItZWQxMi00OWNjLWJmNmEtZGQ3MmE1ZjFlMTFjXkEyXkFqcGdeQXVyNjMwNzM5NDk@._V1_SY1000_CR0,0,663,1000_AL_.jpg', ' Suzi Ewing ', 'https://www.youtube.com/watch?v=PPIHpRUUaro', 1, NULL, NULL),
	(16, 2, 2, 'Deadpool', '180 phut', 'Deadpool xoay quanh anh chàng Wade Wilson, một người bị ung thư vô phương cứu chữa bị thí nghiệm trở thành dị nhân với khả năng phục hồi siêu tốc giống Wolverine nhưng ưu việt hơn, mặc dù để lại sẹo sau cuộc thí nghiệm khiến anh trở nên xấu xí. Mất đi vẻ ngoài, người yêu, hạnh phúc, điều đó khiến anh bằng mọi giá tìm ra kẻ đã phá hoại cuộc đời anh.', 'Ryan Reynolds, Morena Baccarin, Ed Skrein, T. J. Miller, Gina Carano, Leslie Uggams, Brianna Hildebrand', '2018-03-29', 'https://upload.wikimedia.org/wikipedia/vi/thumb/4/46/Deadpool_poster.jpg/280px-Deadpool_poster.jpg', 'Tim Miller', 'https://www.youtube.com/watch?v=gtTfd6tISfw', 2, NULL, NULL),
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
  CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`marap`) REFERENCES `rap` (`marap`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.phong: ~7 rows (approximately)
/*!40000 ALTER TABLE `phong` DISABLE KEYS */;
INSERT INTO `phong` (`maphong`, `marap`, `tenphong`, `soluongghe`, `created_at`, `updated_at`) VALUES
	(4, 2, 'Phòng 3 rạp 6', 200, NULL, NULL),
	(5, 2, 'Phòng 2 rạp 6', 200, NULL, NULL),
	(6, 2, 'Phòng 1 rạp 6', 90, NULL, NULL),
	(7, 2, 'phòng số 100', 90, NULL, NULL),
	(8, 2, 'phòng số 100', 90, NULL, NULL),
	(9, 2, 'phòng số 100', 90, NULL, NULL),
	(10, 2, 'phòng số 200', 90, NULL, NULL);
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
  CONSTRAINT `quanhuyen_ibfk_1` FOREIGN KEY (`mathanhpho`) REFERENCES `thanhpho` (`mathanhpho`) ON DELETE CASCADE ON UPDATE CASCADE
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
  CONSTRAINT `rap_ibfk_1` FOREIGN KEY (`maquanhuyen`) REFERENCES `quanhuyen` (`maquanhuyen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.rap: ~7 rows (approximately)
/*!40000 ALTER TABLE `rap` DISABLE KEYS */;
INSERT INTO `rap` (`marap`, `maquanhuyen`, `tenrap`, `diachirap`, `created_at`, `updated_at`) VALUES
	(2, 12, 'Rạp 6', 'cdsfsdfsdfdsfsd', NULL, NULL),
	(3, 2, 'Rạp 1', ' T5-Mê Linh Plaza, Tô Hiệu, Hà Đông, HN', NULL, NULL),
	(4, 3, 'Rạp 2', ' T8-Vincom, 2 Phạm Ngọc Thạch, Đống Đa, HN', NULL, NULL),
	(5, 4, 'Rạp 3', ' T6-Mipec Riverside, số 2 Long Biên 2, HN', NULL, NULL),
	(6, 6, 'Rạp 5', ' B1-Golden Palace, Mễ Trì, Nam Từ Liêm, HN', NULL, NULL),
	(7, 5, 'Rạp 4', ' B1-Golden West, 2 Lê Văn Thiêm, HN', NULL, NULL),
	(9, 12, 'Rạp 7', 'kdkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', NULL, NULL);
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
  `quyen` int(255) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table abcphim.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `diachi`, `sodienthoai`, `socmnd`, `quyen`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Hoàng Minh Trí', 'hmtmail1@gmail.com', '$2y$10$kpG.sh.8hF03Rsit/uHyQ.Y5A3EvWE/rkefFGkOvx6UW2h2VrqJPm', 'Thanh Hoa', '0969896525', NULL, 2, 'CeG773xjOuKnzlQ0xIv4OXEo6UPwURHpuK3AyV00kWuKOZT45AzR2bdpFrai', '2018-04-07 14:57:43', '2018-04-28 13:22:40'),
	(2, 'phan toai2', 'toaiphan86@gmail.com', '$2y$10$gqMifxEyFoFUNyFAnBJAcOcLrJzDyh/t3cNor30GTdk1waTmhl11a', NULL, NULL, NULL, 2, '0dfhi7zOEo2uOshJGoAHBtCfnKnBbvTZb0Ki6EQ6wQtdof8SB75LcdE2gLKk', '2018-05-01 14:25:43', '2018-05-06 06:25:57'),
	(3, 'toai', 'toaiphan862@gmail.com', '$2y$10$8K3Qmuo3x5QvZt2J1AAMlevhwJqD4LvomXGjmIWKiEN/SMX7eekvC', NULL, NULL, NULL, NULL, 'glz95ZqL7itJFtLWClYD1EbAFoWhqpuephiZgb7eWqAzHdXTe3p3RcSPhyBc', '2018-05-09 07:17:39', '2018-05-09 07:17:39'),
	(4, 'toai322', 'toaiphan1@gmail.com', '$2y$10$MvKuJN29j0KVLuuA4ZgZIuYo.TFCK3ZKSGJINasny5qDKHZQRYo6m', NULL, NULL, NULL, NULL, NULL, '2018-05-10 10:15:28', '2018-05-10 10:15:28');
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
