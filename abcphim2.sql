-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.21-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for abcphim
DROP DATABASE IF EXISTS `abcphim`;
CREATE DATABASE IF NOT EXISTS `abcphim` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `abcphim`;

-- Dumping structure for table abcphim.ghe
DROP TABLE IF EXISTS `ghe`;
CREATE TABLE IF NOT EXISTS `ghe` (
  `maghe` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenghe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maphong` int(10) unsigned NOT NULL,
  `trangthai` int(10) unsigned NOT NULL,
  PRIMARY KEY (`maghe`),
  KEY `ghe_MaPhong` (`maphong`) USING BTREE,
  CONSTRAINT `ghe_ibfk_1` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.ghe: ~2 rows (approximately)
/*!40000 ALTER TABLE `ghe` DISABLE KEYS */;
INSERT INTO `ghe` (`maghe`, `tenghe`, `maphong`, `trangthai`) VALUES
	(1, 'A1', 1, 0),
	(2, 'A2', 1, 0);
/*!40000 ALTER TABLE `ghe` ENABLE KEYS */;

-- Dumping structure for table abcphim.giao_dich
DROP TABLE IF EXISTS `giao_dich`;
CREATE TABLE IF NOT EXISTS `giao_dich` (
  `MaGD` int(11) NOT NULL AUTO_INCREMENT,
  `MaKeHoach` int(11) NOT NULL DEFAULT '0',
  `MaKhachHang` int(11) NOT NULL DEFAULT '0',
  `MaGhe` int(11) NOT NULL DEFAULT '0',
  `ThoiGianGiaoDich` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CodeGiaoDich` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`MaGD`),
  UNIQUE KEY `CodeGiaoDich` (`CodeGiaoDich`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table abcphim.giao_dich: ~0 rows (approximately)
/*!40000 ALTER TABLE `giao_dich` DISABLE KEYS */;
/*!40000 ALTER TABLE `giao_dich` ENABLE KEYS */;

-- Dumping structure for table abcphim.hangphim
DROP TABLE IF EXISTS `hangphim`;
CREATE TABLE IF NOT EXISTS `hangphim` (
  `mahangphim` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenhangphim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mahangphim`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.hangphim: ~2 rows (approximately)
/*!40000 ALTER TABLE `hangphim` DISABLE KEYS */;
INSERT INTO `hangphim` (`mahangphim`, `tenhangphim`) VALUES
	(2, 'Việt Nam'),
	(3, 'Trung Quốc');
/*!40000 ALTER TABLE `hangphim` ENABLE KEYS */;

-- Dumping structure for table abcphim.kehoachchieu
DROP TABLE IF EXISTS `kehoachchieu`;
CREATE TABLE IF NOT EXISTS `kehoachchieu` (
  `makehoachchieu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maphim` int(10) unsigned NOT NULL,
  `maphong` int(10) unsigned NOT NULL,
  `ngaychieu` date NOT NULL,
  `giobatdau` time NOT NULL,
  `giave` int(255) unsigned NOT NULL,
  PRIMARY KEY (`makehoachchieu`),
  KEY `kehoachchieu_MaPhim` (`maphim`) USING BTREE,
  KEY `kehoachchieu_MaPhong` (`maphong`) USING BTREE,
  CONSTRAINT `kehoachchieu_ibfk_1` FOREIGN KEY (`maphim`) REFERENCES `phim` (`maphim`),
  CONSTRAINT `kehoachchieu_ibfk_2` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.kehoachchieu: ~2 rows (approximately)
/*!40000 ALTER TABLE `kehoachchieu` DISABLE KEYS */;
INSERT INTO `kehoachchieu` (`makehoachchieu`, `maphim`, `maphong`, `ngaychieu`, `giobatdau`, `giave`) VALUES
	(1, 1, 4, '2018-03-23', '12:57:00', 0),
	(2, 14, 2, '2018-03-15', '07:00:00', 0);
/*!40000 ALTER TABLE `kehoachchieu` ENABLE KEYS */;

-- Dumping structure for table abcphim.khachhang
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `makhachhang` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `socmnd` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL,
  PRIMARY KEY (`makhachhang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.khachhang: ~0 rows (approximately)
/*!40000 ALTER TABLE `khachhang` DISABLE KEYS */;
INSERT INTO `khachhang` (`makhachhang`, `hoten`, `diachi`, `sodienthoai`, `socmnd`, `email`, `matkhau`, `quyen`) VALUES
	(1, 'Phan Anh Toại', 'Hà Nội\r\n', '1642784232', '174851259', 'toaiphan86@gmail.com', '123456', 0);
/*!40000 ALTER TABLE `khachhang` ENABLE KEYS */;

-- Dumping structure for table abcphim.loaiphim
DROP TABLE IF EXISTS `loaiphim`;
CREATE TABLE IF NOT EXISTS `loaiphim` (
  `maloaiphim` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenloaiphim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maloaiphim`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.loaiphim: ~2 rows (approximately)
/*!40000 ALTER TABLE `loaiphim` DISABLE KEYS */;
INSERT INTO `loaiphim` (`maloaiphim`, `tenloaiphim`) VALUES
	(2, 'Hài hước'),
	(3, 'Tâm lý');
/*!40000 ALTER TABLE `loaiphim` ENABLE KEYS */;

-- Dumping structure for table abcphim.nhanvien
DROP TABLE IF EXISTS `nhanvien`;
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
  PRIMARY KEY (`manhanvien`),
  KEY `nhanvien_MaRap` (`marap`) USING BTREE,
  CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`marap`) REFERENCES `rap` (`marap`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.nhanvien: ~0 rows (approximately)
/*!40000 ALTER TABLE `nhanvien` DISABLE KEYS */;
INSERT INTO `nhanvien` (`manhanvien`, `marap`, `hoten`, `diachi`, `sodienthoai`, `socmnd`, `email`, `matkhau`, `quyennhanvien`) VALUES
	(1, 1, 'Phan Anh Tú', 'Thanh Xuân', '1658827223', '12312312', 'tuphan@gmail.com', '123456', 1);
/*!40000 ALTER TABLE `nhanvien` ENABLE KEYS */;

-- Dumping structure for table abcphim.phim
DROP TABLE IF EXISTS `phim`;
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
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maphim`),
  KEY `phim_MaHangphim` (`mahangphim`) USING BTREE,
  KEY `phim_MaLoaiphim` (`maloaiphim`) USING BTREE,
  CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`mahangphim`) REFERENCES `hangphim` (`mahangphim`),
  CONSTRAINT `phim_ibfk_2` FOREIGN KEY (`maloaiphim`) REFERENCES `loaiphim` (`maloaiphim`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.phim: ~3 rows (approximately)
/*!40000 ALTER TABLE `phim` DISABLE KEYS */;
INSERT INTO `phim` (`maphim`, `mahangphim`, `maloaiphim`, `tenphim`, `thoiluong`, `motaphim`, `dandienvien`, `ngaykhoichieu`, `anhphim`, `daodien`, `trailer`, `trangthai`) VALUES
	(1, 2, 2, 'Tháng Năm Rực Rỡ ', '118 phút', '\r\n\r\nTháng Năm Rực Rỡ mang đến hai câu chuyện song song về những cô nữ sinh trẻ tuổi tràn đầy hoài bão và những người phụ nữ trưởng thành đã nếm trải qua cay ngọt cuộc đời. Phim quy tụ dàn mỹ nhân tài năng của hai thế hệ như Hồng Ánh, Thanh Hằng, Mỹ Duyên, Mỹ Uyên, Minh Tuyền… trong vai nhóm Ngựa Hoang trưởng thành và Hoàng Yến Chibi, Hoàng Oanh, Jun Vũ, Khổng Tú Quỳnh, Minh Thảo, Trịnh Thảo, Thanh Tú… trong vai nhóm Ngựa Hoang thời tuổi trẻ.\r\n\r\n', 'Jun Vũ, Khổng Tú Quỳnh, Hoàng Oanh, Hoàng Yến Chibi, Mỹ Duyên, Thanh Hằng, Hồng Ánh', '2018-03-09', 'abcphim/image/thangnamrucro.jpg', ' Nguyễn Quang Dũng ', 'https://www.youtube.com/embed/Q6jw7x0cVv8?rel=0&amp;showinfo=0', 'Đang chiếu'),
	(14, 2, 3, 'Girls 2 - Những Cô Gái Và Găng Tơ ', '100 phút', '\r\n\r\nBữa tiệc độc thân của Xiwen (Trần Ý Hàm) được chính Bảo Sơn tổ chức tại một căn biệt thự xa hoa với đầy đủ các thú vui khác nhau. Trải qua cuộc vui “quên trời quên đất”, ba cô gái Xiwen, Kimmy, Jialan giật mình tỉnh dậy và thấy bị còng tay ở bờ biển, người phủ đầy cát và không mảnh vải che thân. Sau khi trốn thoát, ba cô gái tiếp tục lúng túng khi đang đầu bù, tóc rối và phải chạm mặt người đàn ông ngoại quốc, có thân hình vạm vỡ (Mike Tyson).\r\n', 'Mike Tyson, Trần Bảo Sơn', '2018-03-16', 'abcphim/image/nhungcogaigangto.jpg', ' Hoàng Chân Chân ', 'https://www.youtube.com/embed/twYVjEumImQ?rel=0&amp;showinfo=0', 'Sắp chiếu'),
	(15, 2, 2, '10x10 - Tội Ác Sau Phòng Kín', '87 phút', '\r\n\r\nCô gái Cathy bị tên bắt cóc “bất đắc dĩ” Lewis tấn công ngay giữa ban ngày và mang về một căn phòng kín bí ẩn để tra khảo. Tại căn phòng kín này, những màn tra khảo - đấu trí giữa hai bên đã diễn ra. Liệu Lewis có đoạt được điều mà gã muốn? Liệu Cathy có trốn thoát ra khỏi căn phòng? Liệu đâu là sự thật ẩn giấu cuối cùng?\r\n', 'Suzi Ewing, Noel Clarke, Kelly Reilly, Luke Evans', '2018-03-16', 'abcphim/image/toiacsauphongkin.jpg', ' Suzi Ewing ', 'https://www.youtube.com/embed/mb-vepjPrFc?rel=0&amp;showinfo=0', 'Đang chiếu');
/*!40000 ALTER TABLE `phim` ENABLE KEYS */;

-- Dumping structure for table abcphim.phong
DROP TABLE IF EXISTS `phong`;
CREATE TABLE IF NOT EXISTS `phong` (
  `maphong` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marap` int(10) unsigned NOT NULL,
  `tenphong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluongghe` int(11) NOT NULL,
  PRIMARY KEY (`maphong`),
  KEY `phong_MaRap` (`marap`) USING BTREE,
  CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`marap`) REFERENCES `rap` (`marap`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.phong: ~5 rows (approximately)
/*!40000 ALTER TABLE `phong` DISABLE KEYS */;
INSERT INTO `phong` (`maphong`, `marap`, `tenphong`, `soluongghe`) VALUES
	(1, 1, 'Phòng số 1 Lottecinema Thăng Long', 200),
	(2, 1, 'Phòng số 2 Lottecinema Thăng Long', 200),
	(3, 1, 'Phòng số 3 Lottecinema Thăng Long', 200),
	(4, 5, 'Phòng số 1 Galaxy-Mipec Long Biên', 200),
	(5, 5, 'Phòng số 2 Galaxy-Mipec Long Biên', 200);
/*!40000 ALTER TABLE `phong` ENABLE KEYS */;

-- Dumping structure for table abcphim.quanhuyen
DROP TABLE IF EXISTS `quanhuyen`;
CREATE TABLE IF NOT EXISTS `quanhuyen` (
  `maquanhuyen` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mathanhpho` int(10) unsigned NOT NULL,
  `tenquanhuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maquanhuyen`),
  KEY `quanhuyen_MaThanhpho` (`mathanhpho`) USING BTREE,
  CONSTRAINT `quanhuyen_ibfk_1` FOREIGN KEY (`mathanhpho`) REFERENCES `thanhpho` (`mathanhpho`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.quanhuyen: ~13 rows (approximately)
/*!40000 ALTER TABLE `quanhuyen` DISABLE KEYS */;
INSERT INTO `quanhuyen` (`maquanhuyen`, `mathanhpho`, `tenquanhuyen`) VALUES
	(1, 1, 'Quận Cầu Giấy'),
	(2, 1, 'Quận Hà Đông'),
	(3, 1, 'Quận Đống Đa'),
	(4, 1, 'Quận Long Biên'),
	(5, 1, 'Quận Mỹ Đình'),
	(6, 1, 'Quận Nam Từ Liêm'),
	(7, 1, 'Quận Đan Phượng'),
	(8, 1, 'Quận Hoàng Mai'),
	(9, 1, 'Quận Hai Bà Trưng'),
	(10, 2, 'quận 1'),
	(11, 2, 'quận 2'),
	(12, 3, 'quận 1 đà nẵng'),
	(13, 3, 'quận 2 đà nẵng');
/*!40000 ALTER TABLE `quanhuyen` ENABLE KEYS */;

-- Dumping structure for table abcphim.rap
DROP TABLE IF EXISTS `rap`;
CREATE TABLE IF NOT EXISTS `rap` (
  `marap` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maquanhuyen` int(10) unsigned NOT NULL,
  `tenrap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachirap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`marap`),
  KEY `rap_MaQuanhuyen` (`maquanhuyen`) USING BTREE,
  CONSTRAINT `rap_ibfk_1` FOREIGN KEY (`maquanhuyen`) REFERENCES `quanhuyen` (`maquanhuyen`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.rap: ~9 rows (approximately)
/*!40000 ALTER TABLE `rap` DISABLE KEYS */;
INSERT INTO `rap` (`marap`, `maquanhuyen`, `tenrap`, `diachirap`) VALUES
	(1, 1, 'Lotte Cinema Thăng Long', ' T3 BigC Thăng Long, 222 Trần Duy Hưng, HN'),
	(2, 1, ' Lotte Cinema Landmark', ' E6 Phạm Hùng, Cầu Giấy, HN'),
	(3, 2, ' Lotte Cinema Hà Đông', ' T5-Mê Linh Plaza, Tô Hiệu, Hà Đông, HN'),
	(4, 3, 'BHD Star Vincom Phạm Ngọc Thạch', ' T8-Vincom, 2 Phạm Ngọc Thạch, Đống Đa, HN'),
	(5, 4, ' Galaxy - Mipec Long Biên', ' T6-Mipec Riverside, số 2 Long Biên 2, HN'),
	(6, 6, ' Beta Cineplex Mỹ Đình', ' B1-Golden Palace, Mễ Trì, Nam Từ Liêm, HN'),
	(7, 5, ' Beta Cineplex Thanh Xuân', ' B1-Golden West, 2 Lê Văn Thiêm, HN'),
	(8, 7, ' Beta Cineplex Đan Phượng', ' XPHomes, Tân Tây Đô, Tân Lập, Đan Phượng, Hà Nội'),
	(9, 10, ' Beta Cineplex Đan Phượng TPHCM', ' XPHomes, Tân Tây Đô, Tân Lập, Đan Phượng, TP HCM');
/*!40000 ALTER TABLE `rap` ENABLE KEYS */;

-- Dumping structure for table abcphim.thanhpho
DROP TABLE IF EXISTS `thanhpho`;
CREATE TABLE IF NOT EXISTS `thanhpho` (
  `mathanhpho` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenthanhpho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mathanhpho`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.thanhpho: ~3 rows (approximately)
/*!40000 ALTER TABLE `thanhpho` DISABLE KEYS */;
INSERT INTO `thanhpho` (`mathanhpho`, `tenthanhpho`) VALUES
	(1, 'Hà Nội'),
	(2, 'TP Hồ Chí Minh'),
	(3, 'Đà Nẵng');
/*!40000 ALTER TABLE `thanhpho` ENABLE KEYS */;

-- Dumping structure for table abcphim.ve
DROP TABLE IF EXISTS `ve`;
CREATE TABLE IF NOT EXISTS `ve` (
  `mave` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `makhachhang` int(10) unsigned NOT NULL,
  `makehoachchieu` int(10) unsigned NOT NULL,
  `ngaymuave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mave`),
  KEY `ve_MaKhachhang` (`makhachhang`) USING BTREE,
  KEY `ve_Makehoachchieu` (`makehoachchieu`) USING BTREE,
  CONSTRAINT `ve_ibfk_1` FOREIGN KEY (`makehoachchieu`) REFERENCES `kehoachchieu` (`makehoachchieu`),
  CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table abcphim.ve: ~0 rows (approximately)
/*!40000 ALTER TABLE `ve` DISABLE KEYS */;
INSERT INTO `ve` (`mave`, `makhachhang`, `makehoachchieu`, `ngaymuave`) VALUES
	(1, 1, 1, '2018-03-19 17:00:00');
/*!40000 ALTER TABLE `ve` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
