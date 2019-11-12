-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sarana_sekolah
DROP DATABASE IF EXISTS `sarana_sekolah`;
CREATE DATABASE IF NOT EXISTS `sarana_sekolah` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sarana_sekolah`;

-- Dumping structure for table sarana_sekolah.items
DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(50) DEFAULT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `create_dt` datetime DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `modify_dt` datetime DEFAULT NULL,
  `modify_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.items: ~35 rows (approximately)
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
REPLACE INTO `items` (`id`, `item_code`, `item_name`, `qty`, `create_dt`, `create_by`, `modify_dt`, `modify_by`) VALUES
	(14, 'BR03', 'Buku PBO', 3, NULL, NULL, NULL, NULL),
	(15, 'BR04', 'Buku Inggris', 3, NULL, NULL, NULL, NULL),
	(16, 'BR05', 'Buku Bahasa', 7, NULL, NULL, NULL, NULL),
	(18, 'BR06', 'Proyektor', 12, NULL, NULL, NULL, NULL),
	(36, 'BR01', 'Buku MTK', 33, NULL, NULL, NULL, NULL),
	(37, 'BR02', 'Spiker Aktif', 2, NULL, NULL, NULL, NULL),
	(38, 'BR07', 'Proyektor', 5, NULL, NULL, NULL, NULL),
	(39, 'BR08', 'Kamus Inggris', 7, NULL, NULL, NULL, NULL),
	(40, 'BR09', 'Kamus Indonesia', 9, NULL, NULL, NULL, NULL),
	(41, 'BR10', 'Kamus Sunda', 12, NULL, NULL, NULL, NULL),
	(42, 'BR11', 'Spidol', 5, NULL, NULL, NULL, NULL),
	(43, 'BR12', 'Tinta', 10, NULL, NULL, NULL, NULL),
	(44, 'BR13', 'Kertas Polio', 100, NULL, NULL, NULL, NULL),
	(48, 'BR14', 'Minyak kayu putih', 13, NULL, NULL, NULL, NULL),
	(50, 'BR15', 'Kabel VGA', 15, NULL, NULL, NULL, NULL),
	(51, 'BR16', 'Sapu', 13, NULL, NULL, NULL, NULL),
	(52, 'BR17', 'Lap PEL', 12, NULL, NULL, NULL, NULL),
	(53, 'BR18', 'Spidol', 11, NULL, NULL, NULL, NULL),
	(54, 'BR19', 'Buku PBO', 3, NULL, NULL, NULL, NULL),
	(55, 'BR20', 'Buku Inggris', 3, NULL, NULL, NULL, NULL),
	(56, 'BR21', 'Buku Bahasa', 2, NULL, NULL, NULL, NULL),
	(57, 'BR22', 'Proyektor', 11, NULL, NULL, NULL, NULL),
	(58, 'BR23', 'Buku MTK', 21, NULL, NULL, NULL, NULL),
	(59, 'BR24', 'Spiker Aktif', 4, NULL, NULL, NULL, NULL),
	(60, 'BR25', 'Proyektor', 12, NULL, NULL, NULL, NULL),
	(61, 'BR26', 'Kamus Indonesia', 14, NULL, NULL, NULL, NULL),
	(62, 'BR27', 'Kamus Sunda', 14, NULL, NULL, NULL, NULL),
	(63, 'BR28', 'Spidol', 11, NULL, NULL, NULL, NULL),
	(64, 'BR29', 'Tinta', 5, NULL, NULL, NULL, NULL),
	(65, 'BR30', 'Kertas Polio', 45, NULL, NULL, NULL, NULL),
	(66, 'BR31', 'Minyak Kayu Putih', 33, NULL, NULL, NULL, NULL),
	(67, 'BR32', 'Kabel VGA', 15, NULL, NULL, NULL, NULL),
	(68, 'BR33', 'Sapu', 15, NULL, NULL, NULL, NULL),
	(69, 'BR34', 'Lap PEL', 12, NULL, NULL, NULL, NULL),
	(70, 'BR35', 'Spidol', 10, NULL, NULL, NULL, NULL),
	(71, 'BR36', 'Buku PBO', 10, NULL, NULL, NULL, NULL),
	(72, 'BR37', 'Kamus Inggris', 10, NULL, NULL, NULL, NULL),
	(73, 'BR38', 'Buku Inggris', 19, NULL, NULL, NULL, NULL),
	(74, 'BR39', 'Proyektor', 8, NULL, NULL, NULL, NULL),
	(75, 'BR40', 'Buku MTK', 10, NULL, NULL, NULL, NULL),
	(76, 'BR41', 'Spiker Aktif', 5, NULL, NULL, NULL, NULL),
	(77, 'BR42', 'Kamus Indonesia', 9, NULL, NULL, NULL, NULL),
	(78, 'BR43', 'Kamus Sunda', 5, NULL, NULL, NULL, NULL),
	(79, 'BR44', 'Tinta', 10, NULL, NULL, NULL, NULL),
	(80, 'BR45', 'Kertas Polio', 4, NULL, NULL, NULL, NULL),
	(81, 'BR46', 'Sapu', 5, NULL, NULL, NULL, NULL),
	(82, 'BR47', 'Lap PEL', 7, NULL, NULL, NULL, NULL),
	(83, 'BR48', 'Spidol', 10, NULL, NULL, NULL, NULL),
	(84, 'BR49', 'Minyak Kayu Putih', 4, NULL, NULL, NULL, NULL),
	(85, 'BR50', 'Kabel VGA', 6, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- Dumping structure for table sarana_sekolah.item_borrowing
DROP TABLE IF EXISTS `item_borrowing`;
CREATE TABLE IF NOT EXISTS `item_borrowing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_items` int(11) NOT NULL DEFAULT 0,
  `borrower_code` varchar(50) NOT NULL DEFAULT '0',
  `borrower_date` datetime NOT NULL,
  `create_dt` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `modify_dt` datetime NOT NULL,
  `modify_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.item_borrowing: ~0 rows (approximately)
/*!40000 ALTER TABLE `item_borrowing` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_borrowing` ENABLE KEYS */;

-- Dumping structure for table sarana_sekolah.item_category
DROP TABLE IF EXISTS `item_category`;
CREATE TABLE IF NOT EXISTS `item_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_code` int(11) DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `create_dt` datetime DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `modify_dt` datetime DEFAULT NULL,
  `modify_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.item_category: ~0 rows (approximately)
/*!40000 ALTER TABLE `item_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_category` ENABLE KEYS */;

-- Dumping structure for table sarana_sekolah.item_return
DROP TABLE IF EXISTS `item_return`;
CREATE TABLE IF NOT EXISTS `item_return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_items` int(11) DEFAULT NULL,
  `return_code` varchar(50) DEFAULT NULL,
  `return_date` datetime DEFAULT NULL,
  `create_dt` datetime DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `modify_dt` datetime DEFAULT NULL,
  `modify_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.item_return: ~0 rows (approximately)
/*!40000 ALTER TABLE `item_return` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_return` ENABLE KEYS */;

-- Dumping structure for table sarana_sekolah.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `create_dt` datetime DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `modify_dt` datetime DEFAULT NULL,
  `modify_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `username`, `password`, `email`, `name`, `gender`, `role_id`, `is_active`, `create_dt`, `create_by`, `modify_dt`, `modify_by`) VALUES
	(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'pria', 1, 1, '2019-11-05 08:11:04', NULL, '2019-11-05 08:11:14', NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table sarana_sekolah.user_access_menu
DROP TABLE IF EXISTS `user_access_menu`;
CREATE TABLE IF NOT EXISTS `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.user_access_menu: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_access_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_access_menu` ENABLE KEYS */;

-- Dumping structure for table sarana_sekolah.user_menu
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE IF NOT EXISTS `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.user_menu: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;

-- Dumping structure for table sarana_sekolah.user_sub_menu
DROP TABLE IF EXISTS `user_sub_menu`;
CREATE TABLE IF NOT EXISTS `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.user_sub_menu: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_sub_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_sub_menu` ENABLE KEYS */;

-- Dumping structure for table sarana_sekolah.user_token
DROP TABLE IF EXISTS `user_token`;
CREATE TABLE IF NOT EXISTS `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sarana_sekolah.user_token: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_token` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_token` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
