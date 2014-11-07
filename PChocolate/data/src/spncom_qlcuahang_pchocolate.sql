-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2014 at 11:31 PM
-- Server version: 5.5.38-35.2
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spncom_qlcuahang_pchocolate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app`
--

CREATE TABLE IF NOT EXISTS `tbl_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `banner` varchar(125) CHARACTER SET utf8 NOT NULL,
  `prefix` varchar(50) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(256) CHARACTER SET utf8 NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_activity` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` tinyint(4) NOT NULL,
  `page_view` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_app`
--

INSERT INTO `tbl_app` (`id`, `name`, `phone`, `address`, `email`, `banner`, `prefix`, `alias`, `date_created`, `date_modified`, `date_activity`, `type`, `page_view`) VALUES
(1, 'Karaoke Ba Đức', '0945 03 07 09', 'Phó Cơ Điều P3 - TPVL', '', 'data/images/banner/logo.png', 'tbl_', 'tbl_', '2012-07-01 10:00:00', '0000-00-00 00:00:00', '2012-12-27 02:28:02', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` binary(255) DEFAULT NULL,
  `enable` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `picture`, `enable`, `order`) VALUES
(11, 'Ốp Hành', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 1, 5),
(44, 'Sản phẩm theo số lượng', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collect_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_collect_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcustomer` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_customer_collect_1` (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_collect_customer`
--

INSERT INTO `tbl_collect_customer` (`id`, `idcustomer`, `date`, `value`, `note`) VALUES
(1, 24, '2014-09-17', 380000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collect_general`
--

CREATE TABLE IF NOT EXISTS `tbl_collect_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_term` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_collect_1` (`id_term`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_collect_general`
--

INSERT INTO `tbl_collect_general` (`id`, `id_term`, `date`, `value`, `note`) VALUES
(6, 3, '2013-12-04', 10000000, 'Bổ sung tiền quỹ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE IF NOT EXISTS `tbl_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `param` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`id`, `param`, `value`) VALUES
(5, 'DISCOUNT', '0'),
(6, 'ROW_PER_PAGE', '12'),
(7, 'GUEST_VISIT', '9247'),
(8, 'EVERY_5_MINUTES', '2000'),
(9, 'CATEGORY_AUTO', '11'),
(10, 'NAME', 'PHẨN CHOCOLATE'),
(11, 'ADDRESS', 'TP Hồ Chí Minh'),
(12, 'PHONE', '0919 153 189'),
(13, 'SWITCH_BOARD_CALL', '1'),
(14, 'RECEIPT_VIRTUAL_DOUBLE', '1'),
(15, 'N_MONTH_LOG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcategory` int(25) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price1` bigint(20) NOT NULL,
  `price2` bigint(20) NOT NULL,
  `price3` bigint(20) NOT NULL,
  `price4` bigint(20) NOT NULL,
  `picture` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prepare` int(11) NOT NULL,
  `is_discount` int(11) NOT NULL,
  `enable` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_field` (`idcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=888 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `idcategory`, `name`, `shortname`, `unit`, `price1`, `price2`, `price3`, `price4`, `picture`, `prepare`, `is_discount`, `enable`) VALUES
(522, 44, 'Con vật', 'Con vật', 'Con', 15000, 15000, 15000, 15000, '', 0, 1, 1),
(523, 44, 'Ông bà thọ', 'Ông bà thọ', 'Con', 50000, 50000, 50000, 50000, '', 0, 1, 1),
(837, 11, 'Sản phẩm 1', 'Sản phẩm 1', 'Kg', 170000, 170000, 170000, 170000, '', 0, 0, 1),
(868, 11, 'Merry Christmas', 'Merry Christmas', 'Kg', 180000, 180000, 180000, 180000, '', 1, 0, 0),
(869, 11, 'Chocolate thẻ trắng', 'Chocolate thẻ trắng', 'Kg', 83000, 83000, 83000, 83000, '', 1, 0, 0),
(870, 11, 'Chocolate đỏ', 'Sản phẩm 4', 'Kg', 93000, 93000, 93000, 93000, '', 1, 0, 0),
(871, 11, 'Chocolate hồng', 'Chocolate hồng', 'Kg', 93000, 93000, 93000, 93000, '', 1, 0, 0),
(872, 11, 'Chocolate tím', 'Chocolate tím', 'Kg', 93000, 93000, 93000, 93000, '', 1, 0, 0),
(873, 11, 'Chocolate xanh', 'Chocolate xanh', 'Kg', 93000, 93000, 93000, 93000, '', 1, 0, 0),
(874, 11, 'Sản phẩm 8', 'Sản phẩm 8', 'Kg', 180000, 180000, 180000, 180000, '', 1, 0, 0),
(875, 11, 'Sản phẩm 9', 'Sản phẩm 9', 'Kg', 180000, 180000, 180000, 180000, '', 1, 0, 0),
(876, 11, 'Sản phẩm 10', 'Sản phẩm 10', 'Kg', 180000, 180000, 180000, 180000, '', 1, 0, 0),
(877, 44, 'Mẫu cây thông lớn', 'Mẫu cây thông lớn', 'Cái', 1500, 1500, 1500, 1500, '', 1, 0, 0),
(878, 44, 'Ông già Noel', 'Ông già Noel', 'Cái', 1500, 1500, 1500, 1500, '', 1, 0, 0),
(879, 44, 'Cây thông nhỏ', 'Cây thông nhỏ', 'Cái', 1000, 1000, 1000, 1000, '', 1, 0, 0),
(880, 44, 'Hình Noen lớn', 'Hình Noen lớn', 'Cái', 1500, 1500, 1500, 1500, '', 1, 0, 0),
(881, 44, 'Hình Noen nhỏ', 'Hình Noen nhỏ', 'Cái', 1000, 1000, 1000, 1000, '', 1, 0, 0),
(882, 44, 'Chữ Merry Christmas', 'Chữ Merry Christmas', 'Chữ', 1000, 1000, 1000, 1000, '', 1, 0, 0),
(883, 44, 'Chữ Happy', 'Chữ Happy', 'Cái', 1000, 1000, 1000, 1000, '', 1, 0, 0),
(884, 44, 'Hình Noel loại lớn', 'Hình Noel loại lớn', 'Cái', 1500, 1500, 1500, 1500, '', 1, 0, 0),
(885, 44, 'Hình Noel loại nhỏ', 'Hình Noel loại nhỏ', 'Cái', 1000, 1000, 1000, 1000, '', 1, 0, 0),
(886, 44, 'Logo', 'Logo', 'Cái', 1000, 1000, 1000, 1000, '', 1, 0, 0),
(887, 44, 'Cái chuông', 'Cái chuông', 'Cái', 2000, 2000, 2000, 2000, '', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_log`
--

CREATE TABLE IF NOT EXISTS `tbl_course_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_table` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `count` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `card` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `type`, `card`, `phone`, `address`, `note`, `discount`) VALUES
(1, 'Tiệm bánh ABC Bakery', 0, '1', '', 'Hậu Giang', '', 0),
(24, 'Bánh kem Hương Thùy', 0, '2', '', 'Đà Lạt', '', 0),
(25, 'Tiệm bánh Hoàng Oanh', 0, '3', '', '', '', 0),
(26, 'Tiệm bánh A Bửu', 0, '4', '', '', '', 0),
(27, 'Tiệm bánh Nguyên Phúc', 0, '5', '', '', '', 0),
(28, 'Tiệm bánh Tâm Thịnh Phát', 0, '6', '', '', '', 0),
(29, 'Chị Nhung', 0, '7', '', '', '', 0),
(30, 'Tiệm bánh Đức Đô', 0, '8', '', '', '', 0),
(31, 'Tiệm bánh Duy Bảo', 0, '9', '', '', '', 0),
(32, 'Bánh kem ABC', 0, '10', '', 'Chợ Bình Chánh', '', 0),
(33, 'Tiệm bánh Nguyệt Nga', 0, '11', '', '', '', 0),
(34, 'Tiệm bánh Yến Phương', 0, '12', '', '', '', 0),
(35, 'Duy AO', 0, '13', '', '', '', 0),
(36, 'Tiệm bánh A Phát', 0, '14', '', '', '', 0),
(37, 'Kim Nguyễn', 0, '15', '', '', '', 0),
(38, 'Chị Vân', 0, '16', '', 'Buôn Ma Thuột', '', 0),
(39, 'Tiệm bánh Mai Lan', 0, '17', '', '', '', 0),
(40, 'Chị Phương', 0, '18', '', '', '', 0),
(41, 'Chị Ngọc', 0, '19', '', 'Châu Đốc', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_domain`
--

CREATE TABLE IF NOT EXISTS `tbl_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_domain`
--

INSERT INTO `tbl_domain` (`id`, `name`) VALUES
(5, 'Đà Lạt'),
(8, 'Tp. Hồ Chí Minh'),
(9, 'Cần Thơ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `salary_base` int(11) NOT NULL,
  `card` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `job`, `gender`, `phone`, `address`, `salary_base`, `card`) VALUES
(6, 'Khởi', 'NV', 0, '', 'Vĩnh Long', 2800000, ''),
(7, 'Châu Pha', 'NV', 1, '', 'Vĩnh Long', 2800000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest`
--

CREATE TABLE IF NOT EXISTS `tbl_guest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(16) CHARACTER SET latin1 NOT NULL,
  `entry_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `exit_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `agent` varchar(16) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `tbl_guest`
--

INSERT INTO `tbl_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(149, '115.78.94.118', '1383319305', '1383322905', '115.78.94.118');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notify`
--

CREATE TABLE IF NOT EXISTS `tbl_notify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `message` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_export`
--

CREATE TABLE IF NOT EXISTS `tbl_order_export` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_order_export_1` (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=377 ;

--
-- Dumping data for table `tbl_order_export`
--

INSERT INTO `tbl_order_export` (`id`, `idsupplier`, `date`, `description`) VALUES
(360, 30, '2014-09-17', ''),
(361, 30, '2014-10-10', ''),
(362, 30, '2014-09-18', ''),
(363, 30, '2014-09-20', ''),
(364, 30, '2014-09-23', ''),
(366, 30, '2014-09-25', ''),
(367, 21, '2014-09-22', ''),
(368, 21, '2014-09-27', ''),
(369, 21, '2014-10-01', ''),
(371, 21, '2014-10-05', ''),
(372, 21, '2014-10-07', ''),
(373, 15, '2014-10-12', ''),
(374, 15, '2014-10-14', ''),
(375, 15, '2014-10-16', ''),
(376, 21, '2014-10-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_export_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_order_export_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idorder` int(11) NOT NULL,
  `idresource` int(11) NOT NULL,
  `count` float NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_order_export_detail_1` (`idorder`),
  KEY `tbl_order_export_detail_2` (`idresource`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=681 ;

--
-- Dumping data for table `tbl_order_export_detail`
--

INSERT INTO `tbl_order_export_detail` (`id`, `idorder`, `idresource`, `count`, `price`) VALUES
(651, 360, 211, 3, 1000000),
(652, 360, 212, 1, 800000),
(653, 362, 211, 2, 1000000),
(654, 362, 212, 4, 800000),
(655, 363, 211, 4, 1000000),
(656, 363, 212, 6, 800000),
(657, 361, 211, 2, 1000000),
(658, 364, 212, 3, 800000),
(659, 366, 211, 4, 1000000),
(660, 366, 212, 1, 800000),
(661, 367, 105, 2, 700000),
(662, 367, 106, 4, 900000),
(663, 367, 213, 2, 1200000),
(664, 368, 105, 2, 700000),
(665, 368, 106, 2, 900000),
(666, 368, 213, 3, 1200000),
(667, 369, 105, 4, 700000),
(668, 369, 106, 2, 900000),
(669, 369, 213, 3, 1200000),
(670, 371, 105, 5, 700000),
(671, 371, 106, 4, 900000),
(672, 371, 213, 4, 1200000),
(673, 372, 105, 6, 700000),
(674, 372, 106, 4, 900000),
(675, 372, 213, 2, 1200000),
(676, 373, 124, 4, 1000000),
(677, 374, 124, 4, 1000000),
(678, 375, 124, 2, 1000000),
(679, 376, 105, 6, 700000),
(680, 376, 106, 6, 900000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_import`
--

CREATE TABLE IF NOT EXISTS `tbl_order_import` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_order_import_1` (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=365 ;

--
-- Dumping data for table `tbl_order_import`
--

INSERT INTO `tbl_order_import` (`id`, `idsupplier`, `date`, `description`) VALUES
(353, 30, '2014-09-17', ''),
(354, 21, '2014-09-17', ''),
(360, 30, '2014-09-18', ''),
(361, 30, '2014-09-19', ''),
(362, 21, '2014-09-22', ''),
(363, 15, '2014-09-25', ''),
(364, 21, '2014-09-30', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_import_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_order_import_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idorder` int(11) NOT NULL,
  `idresource` int(11) NOT NULL,
  `count` float NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_order_import_detail_1` (`idorder`),
  KEY `tbl_order_import_detail_2` (`idresource`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=663 ;

--
-- Dumping data for table `tbl_order_import_detail`
--

INSERT INTO `tbl_order_import_detail` (`id`, `idorder`, `idresource`, `count`, `price`) VALUES
(641, 353, 211, 10, 1000000),
(642, 353, 212, 3, 800000),
(643, 354, 105, 5, 700000),
(644, 354, 106, 2, 900000),
(653, 360, 211, 1, 1000000),
(654, 361, 211, 20, 1000000),
(655, 361, 212, 15, 800000),
(656, 362, 105, 12, 700000),
(657, 362, 106, 20, 900000),
(658, 362, 213, 10, 1200000),
(659, 363, 124, 10, 1000000),
(660, 364, 105, 10, 700000),
(661, 364, 106, 15, 900000),
(662, 364, 213, 15, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paid_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_paid_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_employee` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_employee` (`id_employee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `tbl_paid_employee`
--

INSERT INTO `tbl_paid_employee` (`id`, `id_employee`, `date`, `value`, `note`) VALUES
(24, 6, '2014-03-16', 100000, 'ung luong'),
(25, 6, '2014-03-29', 1000000, 'ung luong'),
(26, 7, '2014-03-22', 10000, 'rau luot'),
(27, 7, '2014-03-12', 1500000, 'ung luong'),
(48, 7, '2014-03-31', 192000, '600 tom su'),
(59, 7, '2014-04-11', 2000000, 'ung luong'),
(86, 6, '2014-05-17', 200000, 'ung luong'),
(87, 6, '2014-09-17', 200000, 'Khôi ứng lương'),
(88, 7, '2014-05-20', 1000000, 'ung luong'),
(89, 7, '2014-05-31', 426000, 'no bill');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paid_general`
--

CREATE TABLE IF NOT EXISTS `tbl_paid_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_term` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_paid_1` (`id_term`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=187 ;

--
-- Dumping data for table `tbl_paid_general`
--

INSERT INTO `tbl_paid_general` (`id`, `id_term`, `date`, `value`, `note`) VALUES
(9, 10, '2013-04-01', 157000, 'Chi tiền chợ'),
(10, 10, '2013-04-02', 146000, 'Tiền chợ'),
(11, 10, '2013-04-03', 189000, 'Tiền chợ'),
(12, 10, '2013-04-04', 184000, 'Tiền chợ'),
(20, 11, '2013-04-06', 163000, 'Chi mua đồ điện '),
(21, 11, '2013-12-04', 250000, 'Mua CB'),
(22, 11, '2013-04-07', 57000, 'Trái cây cúng+bao kiếng trái cây'),
(66, 2, '2013-04-30', 2100000, 'Tạm tính'),
(111, 3, '2013-07-31', 1500000, 'Thuế TTĐB Tháng 07'),
(112, 1, '2013-07-31', 4000000, 'Tiền điện T07'),
(113, 2, '2013-07-31', 2000000, 'Tiền nước T07'),
(155, 3, '2013-08-31', 800000, 'Thuế TTĐB T08'),
(156, 3, '2013-09-30', 850000, 'Thuế TTĐB T09'),
(158, 1, '2013-08-31', 5800000, 'Tiền điện T08'),
(159, 1, '2013-09-30', 3700000, 'Tiền điện T09'),
(160, 2, '2013-08-31', 2200000, 'Tiền nước T08'),
(161, 2, '2013-09-30', 2300000, 'Tiền nước T09'),
(163, 1, '2013-05-31', 4700000, 'Tiền điện T05'),
(164, 1, '2013-06-30', 3900000, 'Tiền điện T06'),
(165, 2, '2013-05-31', 2350000, 'Tiền nước T05'),
(166, 2, '2013-06-30', 2260000, 'Tiền nước T06'),
(167, 11, '2014-02-05', 11214000, 'tra tien bia'),
(168, 11, '2014-02-05', 890000, 'mua ly, to lon'),
(169, 11, '2014-02-05', 282000, 'chi anh Quang mua do'),
(170, 11, '2014-02-05', 1195000, 'tra tien nem, tra'),
(171, 11, '2014-02-05', 836000, 'mua ghe'),
(173, 11, '2014-02-05', 1800000, 'nuoc da'),
(174, 11, '2014-02-05', 667000, 'Trang chi mua do'),
(175, 11, '2014-02-05', 625000, 'thit bo'),
(176, 11, '2014-02-10', 2200000, 'tien rau'),
(177, 11, '2014-02-11', 979000, 'tien rau'),
(179, 11, '2014-02-12', 446000, 'thuoc, bo tat'),
(180, 11, '2014-02-12', 817000, 'tien rau'),
(181, 11, '2014-02-15', 865000, 'tien rau ngay 13/02/2014'),
(182, 11, '2014-02-17', 880000, 'ghe'),
(183, 11, '2014-03-27', 1000000, 'tien mua tom (me)'),
(184, 11, '2014-03-27', 1423000, 'tien rau'),
(185, 11, '2014-03-29', 1279000, 'tien rau'),
(186, 11, '2014-09-17', 340000, 'Tiền chợ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paid_pay_roll`
--

CREATE TABLE IF NOT EXISTS `tbl_paid_pay_roll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_employee` int(11) NOT NULL,
  `date` date NOT NULL,
  `value_base` int(11) NOT NULL,
  `value_sub` int(11) NOT NULL,
  `value_pre` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_paid_pay_roll_1` (`id_employee`),
  KEY `id_employee` (`id_employee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paid_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_paid_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_supplier_paid_1` (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_paid_supplier`
--

INSERT INTO `tbl_paid_supplier` (`id`, `idsupplier`, `date`, `value`, `note`) VALUES
(1, 30, '2014-09-17', 5000000, 'Trả đợt đầu'),
(2, 21, '2014-09-17', 3400000, 'tiền bánh đợt đầu tháng'),
(3, 30, '2014-09-19', 25000000, 'Trà tiền nhập hàng ngày 18 và 19 tháng 9'),
(4, 21, '2014-09-22', 25000000, 'Trà trước tiền hàng'),
(5, 21, '2014-09-30', 30000000, 'Trả tiền nhập ngày 30'),
(6, 15, '2014-09-25', 8000000, 'Trả trước nhập hàng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay_roll`
--

CREATE TABLE IF NOT EXISTS `tbl_pay_roll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_employee` int(11) NOT NULL,
  `id_tracking` int(11) NOT NULL,
  `absent` int(11) NOT NULL,
  `base_value` int(11) NOT NULL,
  `extra_value` int(11) NOT NULL,
  `punish_value` int(11) NOT NULL,
  `note` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_employee` (`id_employee`),
  KEY `id_tracking` (`id_tracking`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=368 ;

--
-- Dumping data for table `tbl_pay_roll`
--

INSERT INTO `tbl_pay_roll` (`id`, `id_employee`, `id_tracking`, `absent`, `base_value`, `extra_value`, `punish_value`, `note`) VALUES
(364, 6, 20, 0, 2800000, 0, 0, 'Ghi chú'),
(365, 7, 20, 0, 2800000, 0, 0, 'Ghi chú'),
(366, 6, 21, 0, 2800000, 0, 0, 'Ghi chú'),
(367, 7, 21, 0, 2800000, 0, 0, 'Ghi chú');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_r2c`
--

CREATE TABLE IF NOT EXISTS `tbl_r2c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_course` int(11) NOT NULL,
  `id_resource` int(11) NOT NULL,
  `value1` double NOT NULL,
  `value2` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_r2c_1` (`id_course`),
  KEY `tbl_r2c_2` (`id_resource`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resource`
--

CREATE TABLE IF NOT EXISTS `tbl_resource` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_resource_1` (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=214 ;

--
-- Dumping data for table `tbl_resource`
--

INSERT INTO `tbl_resource` (`id`, `idsupplier`, `name`, `unit`, `price`, `description`) VALUES
(105, 21, 'Chocolate đen', 'Thùng', 700000, 'Thùng 10 bịch, mỗi bịch 1 kg'),
(106, 21, 'Chocolate trắng', 'Thùng', 900000, 'Thùng 10 bịch, mỗi bịch 1 kg'),
(124, 15, 'Chocolate sữa', 'Thùng', 1000000, 'Thùng 10 bịch, mỗi bịch 1 kg'),
(211, 30, 'Chocolate loại 1', 'Thùng', 1000000, 'Thùng 10 bịch'),
(212, 30, 'Chocolate màu loại 2', 'Thùng', 800000, 'Thùng 10 bịch'),
(213, 21, 'Chocolate sữa cao cấp', 'Thùng', 1200000, 'Thùng 10 bịch, mỗi bịch 1 kg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE IF NOT EXISTS `tbl_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtable` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `idemployee` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `datetimeend` datetime DEFAULT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `discount_value` int(11) NOT NULL,
  `discount_percent` int(11) NOT NULL,
  `surtax` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idtable` (`idtable`),
  KEY `iduser` (`iduser`),
  KEY `tbl_session_3` (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9394 ;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`id`, `idtable`, `iduser`, `idcustomer`, `idemployee`, `datetime`, `datetimeend`, `note`, `status`, `discount_value`, `discount_percent`, `surtax`, `payment`, `value`) VALUES
(9366, 46, 4, 24, 6, '2014-09-17 00:39:05', '2014-09-17 00:39:05', '', 1, 0, 0, 0, 0, 0),
(9367, 46, 4, 1, 6, '2014-09-25 17:33:32', '2014-09-25 17:33:32', '', 2, 0, 0, 0, 0, 0),
(9368, 46, 4, 1, 6, '2014-09-17 17:34:17', '2014-09-17 17:34:17', '', 2, 0, 0, 0, 0, 0),
(9369, 70, 4, 24, 6, '2014-09-17 17:37:38', '2014-09-17 17:37:38', '', 2, 0, 0, 0, 0, 0),
(9370, 70, 4, 1, 6, '2014-10-02 13:00:05', '2014-10-02 13:00:05', '', 2, 0, 0, 0, 0, 0),
(9371, 70, 4, 1, 6, '2014-10-04 18:42:39', '2014-10-04 18:42:39', '', 1, 0, 0, 0, 0, 0),
(9372, 46, 4, 25, 6, '2014-10-08 10:44:24', '2014-10-08 10:44:24', '', 1, 0, 0, 0, 0, 0),
(9373, 46, 4, 26, 6, '2014-10-04 11:00:13', '2014-10-04 11:00:13', 'Tặng 0.5 kg Merry Christmas', 1, 0, 0, 0, 0, 0),
(9374, 70, 4, 1, 6, '2014-10-08 11:03:50', '2014-10-08 11:03:50', 'Tặng 1kg, bù 0.5 kg', 1, 0, 0, 0, 0, 0),
(9375, 70, 4, 26, 6, '2014-10-05 11:08:28', '2014-10-05 11:08:28', '', 0, 0, 0, 0, 0, 0),
(9376, 46, 4, 27, 6, '2014-10-05 11:21:43', '2014-10-05 11:21:43', '', 1, 0, 0, 0, 0, 0),
(9377, 46, 4, 28, 6, '2014-10-08 11:23:23', '2014-10-08 11:23:23', 'Tặng 0.5 kg ', 1, 0, 0, 0, 0, 0),
(9378, 46, 4, 29, 6, '2014-10-05 11:28:10', '2014-10-05 11:28:10', '', 1, 0, 0, 0, 0, 0),
(9379, 46, 4, 30, 6, '2014-10-05 11:37:33', '2014-10-05 11:37:33', 'Bù 0,5 kg', 1, 0, 0, 0, 0, 0),
(9380, 46, 4, 1, 6, '2014-10-06 11:40:04', '2014-10-06 11:40:04', '', 1, 0, 0, 0, 0, 0),
(9381, 46, 4, 31, 6, '2014-10-06 11:43:02', '2014-10-06 11:43:02', '', 1, 0, 0, 0, 0, 0),
(9382, 46, 4, 1, 6, '2014-10-06 11:49:47', '2014-10-06 11:49:47', '', 1, 0, 0, 0, 0, 0),
(9383, 46, 4, 33, 6, '2014-10-06 11:53:24', '2014-10-06 11:53:24', '', 1, 0, 0, 0, 0, 0),
(9384, 46, 4, 1, 6, '2014-10-09 12:15:10', '2014-10-09 12:15:10', '', 2, 0, 0, 0, 0, 0),
(9385, 46, 4, 34, 6, '2014-10-11 10:02:26', '2014-10-11 10:02:26', 'Tặng 0.5kg Chocolate thường, và mẫu bông cúc', 2, 0, 0, 0, 0, 0),
(9386, 46, 4, 35, 6, '2014-10-11 10:07:39', '2014-10-11 10:07:39', '', 2, 0, 0, 0, 0, 0),
(9387, 46, 4, 36, 6, '2014-10-11 10:08:14', '2014-10-11 10:08:14', 'Tặng 1kg', 2, 0, 0, 0, 0, 0),
(9388, 46, 4, 37, 6, '2014-10-11 10:12:35', '2014-10-11 10:12:35', '', 2, 0, 0, 0, 0, 0),
(9389, 46, 4, 38, 6, '2014-10-11 10:17:11', '2014-10-11 10:17:11', 'Tặng 1kg', 2, 0, 0, 0, 0, 0),
(9390, 46, 4, 39, 6, '2014-10-11 10:18:03', '2014-10-11 10:18:03', 'Tặng 0.5kh', 2, 0, 0, 0, 0, 0),
(9391, 46, 4, 40, 6, '2014-10-11 10:19:10', '2014-10-11 10:19:10', '', 2, 0, 0, 0, 0, 0),
(9392, 46, 4, 32, 6, '2014-10-11 10:20:16', '2014-10-11 10:20:16', '', 2, 0, 0, 0, 0, 0),
(9393, 46, 4, 41, 6, '2014-10-11 10:22:57', '2014-10-11 10:22:57', 'Tặng 200 chữ', 2, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_session_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsession` int(11) NOT NULL,
  `idcourse` int(11) NOT NULL,
  `count` float NOT NULL,
  `price` bigint(20) NOT NULL,
  `enable` int(11) NOT NULL,
  `idemployee` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idsession` (`idsession`),
  KEY `idcourse` (`idcourse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53402 ;

--
-- Dumping data for table `tbl_session_detail`
--

INSERT INTO `tbl_session_detail` (`id`, `idsession`, `idcourse`, `count`, `price`, `enable`, `idemployee`) VALUES
(53350, 9366, 837, 1.5, 180000, 1, 0),
(53351, 9367, 837, 2, 180000, 1, 0),
(53352, 9368, 837, 2, 180000, 1, 0),
(53353, 9369, 522, 1, 15000, 1, 0),
(53354, 9369, 523, 22, 50000, 1, 0),
(53355, 9370, 523, 1, 50000, 1, 0),
(53356, 9371, 523, 5, 50000, 1, 0),
(53357, 9371, 522, 1, 15000, 1, 0),
(53358, 9372, 837, 1, 180000, 1, 0),
(53359, 9372, 876, 1, 180000, 1, 0),
(53360, 9373, 837, 10, 180000, 0, 0),
(53361, 9371, 837, 1, 170000, 0, 0),
(53362, 9374, 837, 10, 170000, 1, 6),
(53363, 9375, 837, 24, 170000, 0, 0),
(53364, 9373, 837, 24, 170000, 1, 0),
(53365, 9373, 877, 50, 1500, 1, 0),
(53366, 9373, 878, 98, 1500, 1, 0),
(53367, 9373, 879, 108, 1000, 1, 0),
(53368, 9376, 868, 420, 180000, 1, 6),
(53369, 9377, 837, 8, 170000, 1, 6),
(53370, 9378, 837, 4, 170000, 1, 6),
(53371, 9378, 880, 28, 1500, 1, 6),
(53372, 9378, 881, 24, 1000, 1, 6),
(53373, 9379, 837, 3, 170000, 1, 0),
(53374, 9380, 837, 4.73, 170000, 1, 0),
(53375, 9381, 837, 5, 170000, 1, 0),
(53376, 9381, 880, 100, 1500, 1, 0),
(53377, 9382, 869, 20, 83000, 1, 0),
(53378, 9382, 872, 4, 93000, 1, 0),
(53379, 9382, 870, 4, 93000, 1, 0),
(53380, 9382, 871, 5, 93000, 1, 0),
(53381, 9382, 873, 2, 93000, 1, 0),
(53382, 9383, 837, 5, 170000, 1, 0),
(53383, 9383, 883, 75, 1000, 1, 0),
(53384, 9383, 882, 75, 1000, 1, 0),
(53385, 9384, 837, 10, 170000, 1, 0),
(53386, 9385, 837, 1, 170000, 1, 0),
(53387, 9386, 837, 2.5, 170000, 1, 0),
(53388, 9387, 837, 10, 170000, 1, 0),
(53389, 9387, 884, 100, 1500, 1, 0),
(53390, 9387, 885, 100, 1000, 1, 0),
(53391, 9388, 837, 5.5, 170000, 1, 0),
(53392, 9388, 884, 120, 1500, 1, 0),
(53393, 9388, 885, 120, 1000, 1, 0),
(53394, 9388, 886, 200, 1000, 1, 0),
(53395, 9389, 837, 10, 170000, 1, 0),
(53396, 9390, 837, 5, 170000, 1, 0),
(53397, 9391, 837, 3, 170000, 1, 0),
(53398, 9392, 878, 100, 2000, 1, 0),
(53399, 9392, 879, 100, 2000, 1, 0),
(53400, 9392, 887, 100, 2000, 1, 0),
(53401, 9393, 837, 8.5, 170000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store`
--

CREATE TABLE IF NOT EXISTS `tbl_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_store`
--

INSERT INTO `tbl_store` (`id`, `name`, `note`) VALUES
(1, 'Kho nhà', 'Ghi chú gì đây ?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `debt` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `name`, `phone`, `address`, `note`, `debt`) VALUES
(15, 'Granlate', '', 'tp. Hồ Chí Minh', '', 0),
(21, 'Galaphan', '0703 828 042', 'tp.Hồ Chí Minh', '', 0),
(30, 'Đức Mỹ', '', 'tp. Hồ Chí Minh', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table`
--

CREATE TABLE IF NOT EXISTS `tbl_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddomain` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iddomain` (`iddomain`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=79 ;

--
-- Dumping data for table `tbl_table`
--

INSERT INTO `tbl_table` (`id`, `iddomain`, `name`, `iduser`, `type`) VALUES
(46, 5, 'QUẦY 1', 1, '0'),
(70, 5, 'QUẦY 2', 1, '0'),
(75, 8, 'QUẦY 3', 1, '0'),
(76, 8, 'QUẦY 4', 1, '0'),
(77, 9, 'QUẦY 5', 1, '0'),
(78, 9, 'QUẦY 6', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table_log`
--

CREATE TABLE IF NOT EXISTS `tbl_table_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idtable` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `note` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29241 ;

--
-- Dumping data for table `tbl_table_log`
--

INSERT INTO `tbl_table_log` (`id`, `iduser`, `idtable`, `datetime`, `note`) VALUES
(29228, 1, 46, '2014-09-23 14:51:08', 'tính tiền 270.000'),
(29229, 1, 46, '2014-10-08 10:57:09', 'tính tiền 360.000'),
(29230, 1, 70, '2014-10-08 11:03:38', 'tính tiền 265.000'),
(29231, 1, 70, '2014-10-08 11:08:14', 'tính tiền 1.700.000'),
(29232, 1, 46, '2014-10-08 11:21:12', 'tính tiền 4.410.000'),
(29233, 1, 46, '2014-10-08 11:22:52', 'tính tiền 75.600.000'),
(29234, 1, 46, '2014-10-08 11:24:44', 'tính tiền 1.360.000'),
(29235, 1, 46, '2014-10-08 11:31:28', 'tính tiền 746.000'),
(29236, 1, 46, '2014-10-08 11:39:43', 'tính tiền 510.000'),
(29237, 1, 46, '2014-10-08 11:42:41', 'tính tiền 804.100'),
(29238, 1, 46, '2014-10-08 11:44:33', 'tính tiền 1.000.000'),
(29239, 1, 46, '2014-10-08 11:51:51', 'tính tiền 3.055.000'),
(29240, 1, 46, '2014-10-08 11:56:43', 'tính tiền 1.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term`
--

CREATE TABLE IF NOT EXISTS `tbl_term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_term`
--

INSERT INTO `tbl_term` (`id`, `name`, `type`) VALUES
(1, 'Tiền Điện', 0),
(2, 'Tiền Nước', 0),
(3, 'Thuế', 0),
(10, 'Tiền Ăn Nhân Viên', 0),
(11, 'CP Khác', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term_collect`
--

CREATE TABLE IF NOT EXISTS `tbl_term_collect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_term_collect`
--

INSERT INTO `tbl_term_collect` (`id`, `name`) VALUES
(2, 'Phụ Phẩm'),
(3, 'Đặc Biệt'),
(4, 'Ung luong NV');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking`
--

CREATE TABLE IF NOT EXISTS `tbl_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `value_paid` int(11) NOT NULL,
  `value_store` int(11) NOT NULL,
  `paid_import` int(11) NOT NULL,
  `collect_general` int(11) NOT NULL,
  `collect_customer` int(11) NOT NULL,
  `collect_selling_debt` int(11) NOT NULL,
  `collect_selling_nodebt` int(11) NOT NULL,
  `estate_rate` int(11) NOT NULL,
  `store_value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_tracking`
--

INSERT INTO `tbl_tracking` (`id`, `date_start`, `date_end`, `value_paid`, `value_store`, `paid_import`, `collect_general`, `collect_customer`, `collect_selling_debt`, `collect_selling_nodebt`, `estate_rate`, `store_value`) VALUES
(20, '2014-09-01', '2014-09-30', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, '2014-10-01', '2014-10-31', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_tracking_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tracking` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `value_session1` int(11) NOT NULL,
  `value_session2` int(11) NOT NULL,
  `value_collect` int(11) NOT NULL,
  `value_old` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `tbl_tracking_customer`
--

INSERT INTO `tbl_tracking_customer` (`id`, `id_tracking`, `id_customer`, `value_session1`, `value_session2`, `value_collect`, `value_old`) VALUES
(81, 21, 1, 5824100, 1750000, 0, 720000),
(82, 21, 24, 0, 0, 0, 735000),
(83, 21, 25, 360000, 0, 0, 0),
(84, 21, 26, 4410000, 0, 0, 0),
(85, 21, 27, 75600000, 0, 0, 0),
(86, 21, 28, 1360000, 0, 0, 0),
(87, 21, 29, 746000, 0, 0, 0),
(88, 21, 30, 510000, 0, 0, 0),
(89, 21, 31, 1000000, 0, 0, 0),
(90, 21, 32, 0, 0, 0, 0),
(91, 21, 33, 1000000, 0, 0, 0),
(92, 21, 34, 0, 0, 0, 0),
(93, 21, 35, 0, 0, 0, 0),
(94, 21, 36, 0, 0, 0, 0),
(95, 21, 37, 0, 0, 0, 0),
(96, 21, 38, 0, 0, 0, 0),
(97, 21, 39, 0, 0, 0, 0),
(98, 21, 40, 0, 0, 0, 0),
(135, 20, 1, 0, 720000, 0, 0),
(136, 20, 24, 270000, 1115000, 380000, 0),
(137, 20, 25, 0, 0, 0, 0),
(138, 20, 26, 0, 0, 0, 0),
(139, 20, 27, 0, 0, 0, 0),
(140, 20, 28, 0, 0, 0, 0),
(141, 20, 29, 0, 0, 0, 0),
(142, 20, 30, 0, 0, 0, 0),
(143, 20, 31, 0, 0, 0, 0),
(144, 20, 32, 0, 0, 0, 0),
(145, 20, 33, 0, 0, 0, 0),
(146, 20, 34, 0, 0, 0, 0),
(147, 20, 35, 0, 0, 0, 0),
(148, 20, 36, 0, 0, 0, 0),
(149, 20, 37, 0, 0, 0, 0),
(150, 20, 38, 0, 0, 0, 0),
(151, 20, 39, 0, 0, 0, 0),
(152, 20, 40, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking_daily`
--

CREATE TABLE IF NOT EXISTS `tbl_tracking_daily` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tracking` int(11) NOT NULL,
  `date` date NOT NULL,
  `selling_cash` bigint(20) NOT NULL,
  `selling_debt` bigint(20) NOT NULL,
  `import` bigint(20) NOT NULL,
  `export` bigint(20) NOT NULL,
  `store` bigint(20) NOT NULL,
  `paid` bigint(20) NOT NULL,
  `collect` bigint(20) NOT NULL,
  `time1` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=456 ;

--
-- Dumping data for table `tbl_tracking_daily`
--

INSERT INTO `tbl_tracking_daily` (`id`, `id_tracking`, `date`, `selling_cash`, `selling_debt`, `import`, `export`, `store`, `paid`, `collect`, `time1`) VALUES
(214, 13, '2014-01-01', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(215, 13, '2014-01-02', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(216, 13, '2014-01-03', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(217, 13, '2014-01-04', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(218, 13, '2014-01-05', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(219, 13, '2014-01-06', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(220, 13, '2014-01-07', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(221, 13, '2014-01-08', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(222, 13, '2014-01-09', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(223, 13, '2014-01-10', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(224, 13, '2014-01-11', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(225, 13, '2014-01-12', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(226, 13, '2014-01-13', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(227, 13, '2014-01-14', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(228, 13, '2014-01-15', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(229, 13, '2014-01-16', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(230, 13, '2014-01-17', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(231, 13, '2014-01-18', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(232, 13, '2014-01-19', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(233, 13, '2014-01-20', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(234, 13, '2014-01-21', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(235, 13, '2014-01-22', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(236, 13, '2014-01-23', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(237, 13, '2014-01-24', 15573000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(238, 13, '2014-01-25', 20520000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(239, 13, '2014-01-26', 8090000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(240, 13, '2014-01-27', 466000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(241, 13, '2014-01-28', 9049000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(242, 13, '2014-01-29', 9884000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(243, 13, '2014-01-30', 24041000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(244, 13, '2014-01-31', 25445000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(245, 14, '2014-02-01', 24466000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(246, 14, '2014-02-02', 21887000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(247, 14, '2014-02-03', 27738000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(248, 14, '2014-02-04', 28221000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(249, 14, '2014-02-05', 16120000, 0, 0, 0, 0, 17509000, 0, '0000-00-00 00:00:00'),
(250, 14, '2014-02-06', 19040000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(251, 14, '2014-02-07', 21220000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(252, 14, '2014-02-08', 10272000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(253, 14, '2014-02-09', 12166000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(254, 14, '2014-02-10', 13122000, 0, 0, 0, 0, 2200000, 0, '0000-00-00 00:00:00'),
(255, 14, '2014-02-11', 15029000, 0, 0, 0, 0, 979000, 0, '0000-00-00 00:00:00'),
(256, 14, '2014-02-12', 12664000, 0, 0, 0, 0, 1263000, 0, '0000-00-00 00:00:00'),
(257, 14, '2014-02-13', 13352000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(258, 14, '2014-02-14', 21651000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(259, 14, '2014-02-15', 11705000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(260, 14, '2014-02-16', 17517000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(261, 14, '2014-02-17', 18249000, 0, 0, 0, 0, 880000, 0, '0000-00-00 00:00:00'),
(262, 14, '2014-02-18', 14413000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(263, 14, '2014-02-19', 18753000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(264, 14, '2014-02-20', 20265000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(265, 14, '2014-02-21', 25258000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(266, 14, '2014-02-22', 12202000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(267, 14, '2014-02-23', 10978000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(268, 14, '2014-02-24', 6489000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(269, 14, '2014-02-25', 12096000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(270, 14, '2014-02-26', 12516000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(271, 14, '2014-02-27', 21032000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(272, 14, '2014-02-28', 17375000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(273, 15, '2014-03-01', 16647000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(274, 15, '2014-03-02', 10220000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(275, 15, '2014-03-03', 17268000, 0, 0, 0, 0, 0, 0, '2014-03-03 22:35:00'),
(276, 15, '2014-03-04', 19747000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(277, 15, '2014-03-05', 20393000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(278, 15, '2014-03-06', 15139000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(279, 15, '2014-03-07', 20886000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(280, 15, '2014-03-08', 31987000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(281, 15, '2014-03-09', 12206000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(282, 15, '2014-03-10', 13834000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(283, 15, '2014-03-11', 15410000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(284, 15, '2014-03-12', 21174000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(285, 15, '2014-03-13', 28067000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(286, 15, '2014-03-14', 23152000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(287, 15, '2014-03-15', 13147000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(288, 15, '2014-03-16', 16395000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(289, 15, '2014-03-17', 13249000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(290, 15, '2014-03-18', 18285000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(291, 15, '2014-03-19', 23341000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(292, 15, '2014-03-20', 17383000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(293, 15, '2014-03-21', 32557000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(294, 15, '2014-03-22', 20499000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(295, 15, '2014-03-23', 15328000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(296, 15, '2014-03-24', 15844000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(297, 15, '2014-03-25', 12078000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(298, 15, '2014-03-26', 21503000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(299, 15, '2014-03-27', 20333000, 0, 0, 0, 0, 1000000, 0, '0000-00-00 00:00:00'),
(300, 15, '2014-03-28', 27970000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(301, 15, '2014-03-29', 23748000, 0, 0, 0, 0, 1279000, 0, '0000-00-00 00:00:00'),
(302, 15, '2014-03-30', 18337000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(303, 15, '2014-03-31', 29771000, 0, 0, 0, 0, 2340000, 0, '0000-00-00 00:00:00'),
(304, 16, '2014-04-01', 19701000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(305, 16, '2014-04-02', 14983000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(306, 16, '2014-04-03', 27386000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(307, 16, '2014-04-04', 31193000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(308, 16, '2014-04-05', 21169000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(309, 16, '2014-04-06', 19748000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(310, 16, '2014-04-07', 13483000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(311, 16, '2014-04-08', 19267000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(312, 16, '2014-04-09', 22437000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(313, 16, '2014-04-10', 26906000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(314, 16, '2014-04-11', 22954000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(315, 16, '2014-04-12', 26741000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(316, 16, '2014-04-13', 17281000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(317, 16, '2014-04-14', 19459000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(318, 16, '2014-04-15', 22795000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(319, 16, '2014-04-16', 22485000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(320, 16, '2014-04-17', 20174000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(321, 16, '2014-04-18', 32442000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(322, 16, '2014-04-19', 18578000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(323, 16, '2014-04-20', 11877000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(324, 16, '2014-04-21', 13522000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(325, 16, '2014-04-22', 16224000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(326, 16, '2014-04-23', 19937000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(327, 16, '2014-04-24', 27053000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(328, 16, '2014-04-25', 38014000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(329, 16, '2014-04-26', 42696000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(330, 16, '2014-04-27', 22383000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(331, 16, '2014-04-28', 22698000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(332, 16, '2014-04-29', 32405000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(333, 16, '2014-04-30', 29859000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(334, 17, '2014-05-01', 25510000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(335, 17, '2014-05-02', 30649500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(336, 17, '2014-05-03', 27919000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(337, 17, '2014-05-04', 24500500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(338, 17, '2014-05-05', 25073000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(339, 17, '2014-05-06', 26184000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(340, 17, '2014-05-07', 24847000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(341, 17, '2014-05-08', 24216500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(342, 17, '2014-05-09', 34790500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(343, 17, '2014-05-10', 32012500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(344, 17, '2014-05-11', 22869000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(345, 17, '2014-05-12', 22010500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(346, 17, '2014-05-13', 30933500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(347, 17, '2014-05-14', 31259000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(348, 17, '2014-05-15', 27159500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(349, 17, '2014-05-16', 42039000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(350, 17, '2014-05-17', 29154500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(351, 17, '2014-05-18', 19454000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(352, 17, '2014-05-19', 25421500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(353, 17, '2014-05-20', 30006500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(354, 17, '2014-05-21', 31575500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(355, 17, '2014-05-22', 29562500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(356, 17, '2014-05-23', 40640000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(357, 17, '2014-05-24', 24731000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(358, 17, '2014-05-25', 31852000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(359, 17, '2014-05-26', 27022000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(360, 17, '2014-05-27', 28590500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(361, 17, '2014-05-28', 26633500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(362, 17, '2014-05-29', 29172500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(363, 17, '2014-05-30', 39498000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(364, 17, '2014-05-31', 29899500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(365, 18, '2014-06-01', 28365000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(366, 18, '2014-06-02', 31032000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(367, 18, '2014-06-03', 27773000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(368, 18, '2014-06-04', 32408500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(369, 18, '2014-06-05', 30419500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(370, 18, '2014-06-06', 37274000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(371, 18, '2014-06-07', 39204000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(372, 18, '2014-06-08', 22501000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(373, 18, '2014-06-09', 26383000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(374, 18, '2014-06-10', 35296000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(375, 18, '2014-06-11', 38874500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(376, 18, '2014-06-12', 32506500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(377, 18, '2014-06-13', 26868000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(378, 18, '2014-06-14', 29641000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(379, 18, '2014-06-15', 27573000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(380, 18, '2014-06-16', 15000000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(381, 18, '2014-06-17', 28738000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(382, 18, '2014-06-18', 29139000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(383, 18, '2014-06-19', 30972000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(384, 18, '2014-06-20', 36870000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(385, 18, '2014-06-21', 37940000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(386, 18, '2014-06-22', 17735000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(387, 18, '2014-06-23', 30112000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(388, 18, '2014-06-24', 23933000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(389, 18, '2014-06-25', 24273000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(390, 18, '2014-06-26', 37777000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(391, 18, '2014-06-27', 32509500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(392, 18, '2014-06-28', 44065000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(393, 18, '2014-06-29', 19620500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(394, 18, '2014-06-30', 22126000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(395, 19, '2014-07-01', 34705500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(396, 19, '2014-07-02', 34802000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(397, 19, '2014-07-03', 31867500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(398, 19, '2014-07-04', 34958000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(399, 19, '2014-07-05', 30379000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(400, 19, '2014-07-06', 25770500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(401, 19, '2014-07-07', 42249000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(402, 19, '2014-07-08', 35452000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(403, 19, '2014-07-09', 30601000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(404, 19, '2014-07-10', 31043500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(405, 19, '2014-07-11', 41120500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(406, 19, '2014-07-12', 36002500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(407, 19, '2014-07-13', 24686500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(408, 19, '2014-07-14', 28144000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(409, 19, '2014-07-15', 35511000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(410, 19, '2014-07-16', 37846000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(411, 19, '2014-07-17', 38251000, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(412, 19, '2014-07-18', 38603500, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(413, 19, '2014-07-19', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(414, 19, '2014-07-20', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(415, 19, '2014-07-21', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(416, 19, '2014-07-22', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(417, 19, '2014-07-23', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(418, 19, '2014-07-24', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(419, 19, '2014-07-25', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(420, 19, '2014-07-26', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(421, 19, '2014-07-27', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(422, 19, '2014-07-28', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(423, 19, '2014-07-29', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(424, 19, '2014-07-30', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(425, 19, '2014-07-31', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(426, 20, '2014-09-01', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(427, 20, '2014-09-02', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(428, 20, '2014-09-03', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(429, 20, '2014-09-04', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(430, 20, '2014-09-05', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(431, 20, '2014-09-06', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(432, 20, '2014-09-07', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(433, 20, '2014-09-08', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(434, 20, '2014-09-09', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(435, 20, '2014-09-10', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(436, 20, '2014-09-11', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(437, 20, '2014-09-12', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(438, 20, '2014-09-13', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(439, 20, '2014-09-14', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(440, 20, '2014-09-15', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(441, 20, '2014-09-16', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(442, 20, '2014-09-17', 270000, 1475000, 17700000, 0, 14600000, 540000, 0, '0000-00-00 00:00:00'),
(443, 20, '2014-09-18', 0, 0, 1000000, 0, 15600000, 0, 0, '0000-00-00 00:00:00'),
(444, 20, '2014-09-19', 0, 0, 0, 0, 15600000, 0, 0, '0000-00-00 00:00:00'),
(445, 20, '2014-09-20', 0, 0, 0, 0, 15600000, 0, 0, '0000-00-00 00:00:00'),
(446, 20, '2014-09-21', 0, 0, 0, 0, 15600000, 0, 0, '0000-00-00 00:00:00'),
(447, 20, '2014-09-22', 0, 0, 0, 0, 15600000, 0, 0, '0000-00-00 00:00:00'),
(448, 20, '2014-09-23', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(449, 20, '2014-09-24', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(450, 20, '2014-09-25', 0, 360000, 0, 0, 15600000, 0, 0, '0000-00-00 00:00:00'),
(451, 20, '2014-09-26', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(452, 20, '2014-09-27', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(453, 20, '2014-09-28', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(454, 20, '2014-09-29', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(455, 20, '2014-09-30', 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking_store`
--

CREATE TABLE IF NOT EXISTS `tbl_tracking_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tracking` int(11) NOT NULL,
  `id_resource` int(11) NOT NULL,
  `count_old` float NOT NULL,
  `count_import` float NOT NULL,
  `count_export` float NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=277 ;

--
-- Dumping data for table `tbl_tracking_store`
--

INSERT INTO `tbl_tracking_store` (`id`, `id_tracking`, `id_resource`, `count_old`, `count_import`, `count_export`, `price`) VALUES
(271, 20, 105, 0, 5, 0, 700000),
(272, 20, 106, 0, 2, 0, 900000),
(273, 20, 124, 0, 0, 0, 1000000),
(274, 20, 211, 0, 11, 2.3, 1000000),
(275, 20, 212, 0, 3, 1, 800000),
(276, 20, 213, 0, 0, 0, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_tracking_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tracking` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `value_import` int(11) NOT NULL,
  `value_paid` int(11) NOT NULL,
  `value_old` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `tbl_tracking_supplier`
--

INSERT INTO `tbl_tracking_supplier` (`id`, `id_tracking`, `id_supplier`, `value_import`, `value_paid`, `value_old`) VALUES
(64, 20, 30, 45400000, 30000000, 0),
(65, 20, 21, 82200000, 58400000, 0),
(66, 20, 15, 10000000, 8000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE IF NOT EXISTS `tbl_unit` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `name`) VALUES
(6, 'Thùng'),
(9, 'Bịch'),
(23, 'Kg'),
(24, 'Con'),
(32, 'Hộp'),
(33, 'Cái'),
(34, 'Chữ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datecreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateupdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dateactivity` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` tinyint(4) NOT NULL,
  `code` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `pass`, `gender`, `note`, `datecreate`, `dateupdate`, `dateactivity`, `type`, `code`) VALUES
(3, 'bán hàng', 'banhang@gmail.com', '123456', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, ''),
(4, 'quanly@gmail.com', 'quanly@gmail.com', '123456', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_collect_customer`
--
ALTER TABLE `tbl_collect_customer`
  ADD CONSTRAINT `tbl_customer_collect_1` FOREIGN KEY (`idcustomer`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_collect_general`
--
ALTER TABLE `tbl_collect_general`
  ADD CONSTRAINT `tbl_collect_general_1` FOREIGN KEY (`id_term`) REFERENCES `tbl_term_collect` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD CONSTRAINT `tbl_course_1` FOREIGN KEY (`idcategory`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_export`
--
ALTER TABLE `tbl_order_export`
  ADD CONSTRAINT `tbl_order_export_1` FOREIGN KEY (`idsupplier`) REFERENCES `tbl_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_export_detail`
--
ALTER TABLE `tbl_order_export_detail`
  ADD CONSTRAINT `tbl_order_export_detail_1` FOREIGN KEY (`idorder`) REFERENCES `tbl_order_export` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_export_detail_2` FOREIGN KEY (`idresource`) REFERENCES `tbl_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_import`
--
ALTER TABLE `tbl_order_import`
  ADD CONSTRAINT `tbl_order_import_1` FOREIGN KEY (`idsupplier`) REFERENCES `tbl_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_import_detail`
--
ALTER TABLE `tbl_order_import_detail`
  ADD CONSTRAINT `tbl_order_import_detail_1` FOREIGN KEY (`idorder`) REFERENCES `tbl_order_import` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_import_detail_2` FOREIGN KEY (`idresource`) REFERENCES `tbl_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_paid_employee`
--
ALTER TABLE `tbl_paid_employee`
  ADD CONSTRAINT `tbl_paid_employee_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `tbl_employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_paid_general`
--
ALTER TABLE `tbl_paid_general`
  ADD CONSTRAINT `tbl_paid_general_1` FOREIGN KEY (`id_term`) REFERENCES `tbl_term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_paid_pay_roll`
--
ALTER TABLE `tbl_paid_pay_roll`
  ADD CONSTRAINT `tbl_paid_pay_roll_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `tbl_employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_paid_supplier`
--
ALTER TABLE `tbl_paid_supplier`
  ADD CONSTRAINT `tbl_supplier_paid_1` FOREIGN KEY (`idsupplier`) REFERENCES `tbl_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pay_roll`
--
ALTER TABLE `tbl_pay_roll`
  ADD CONSTRAINT `tbl_pay_roll_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `tbl_employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pay_roll_ibfk_2` FOREIGN KEY (`id_tracking`) REFERENCES `tbl_tracking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_r2c`
--
ALTER TABLE `tbl_r2c`
  ADD CONSTRAINT `tbl_r2c_1` FOREIGN KEY (`id_course`) REFERENCES `tbl_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_r2c_2` FOREIGN KEY (`id_resource`) REFERENCES `tbl_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_resource`
--
ALTER TABLE `tbl_resource`
  ADD CONSTRAINT `tbl_resource_1` FOREIGN KEY (`idsupplier`) REFERENCES `tbl_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_session`
--
ALTER TABLE `tbl_session`
  ADD CONSTRAINT `tbl_session_1` FOREIGN KEY (`idtable`) REFERENCES `tbl_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_session_2` FOREIGN KEY (`iduser`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_session_3` FOREIGN KEY (`idcustomer`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_session_detail`
--
ALTER TABLE `tbl_session_detail`
  ADD CONSTRAINT `tbl_session_detail_1` FOREIGN KEY (`idsession`) REFERENCES `tbl_session` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_session_detail_2` FOREIGN KEY (`idcourse`) REFERENCES `tbl_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_table`
--
ALTER TABLE `tbl_table`
  ADD CONSTRAINT `tbl_table_1` FOREIGN KEY (`iddomain`) REFERENCES `tbl_domain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
