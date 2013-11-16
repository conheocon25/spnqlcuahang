-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2013 at 03:24 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spngroup_qlcuahang_baduc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` binary(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `picture`) VALUES
(1, 'Linh Tinh', NULL),
(2, 'Mỹ Phẩm', NULL),
(3, 'KEM', NULL),
(4, 'NƯỚC GIẢI KHÁT', NULL),
(5, 'THUỐC HÚT', NULL),
(6, 'THỨC ĂN', NULL),
(7, 'KHÁC', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_collect_customer`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_collect_general`
--

INSERT INTO `tbl_collect_general` (`id`, `id_term`, `date`, `value`, `note`) VALUES
(1, 2, '2013-10-01', 11, 'a1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE IF NOT EXISTS `tbl_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `param` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`id`, `param`, `value`) VALUES
(5, 'GUEST_VISIT', '13'),
(6, 'ROW_PER_PAGE', '12'),
(7, 'THEME', 'grey'),
(8, 'EVERY_5_MINUTES', '2000');

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
  PRIMARY KEY (`id`),
  KEY `foreign_field` (`idcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_course`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `type`, `card`, `phone`, `address`, `note`, `discount`) VALUES
(1, 'Khách Hàng Vãng Lai', 0, '34524', '87875678', '', '', 0),
(2, 'Lê Hồng Đức', 2, '3', '1', '5', '4', 6),
(3, 'Nguyễn Quang A', 0, '', '', '', '', 10),
(4, 'Phan Thanh M', 0, '', '', '', '', 10),
(5, 'Phạm Minh Tuấn V', 0, '', '', 'Vĩnh Long', '', 0),
(6, 'Lê Nguyễn Đông Khoa', 1, '', '0945 030709', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_domain`
--

CREATE TABLE IF NOT EXISTS `tbl_customer_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `id_domain` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_customer` (`id_customer`),
  KEY `id_domain` (`id_domain`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_customer_domain`
--

INSERT INTO `tbl_customer_domain` (`id`, `id_customer`, `id_domain`) VALUES
(3, 2, 1),
(4, 2, 2),
(5, 3, 2),
(6, 4, 1),
(7, 6, 2),
(8, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_tracking`
--

CREATE TABLE IF NOT EXISTS `tbl_customer_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `id_domain` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `note` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_customer` (`id_customer`),
  KEY `id_domain` (`id_domain`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_customer_tracking`
--

INSERT INTO `tbl_customer_tracking` (`id`, `id_customer`, `id_domain`, `date_start`, `date_end`, `note`) VALUES
(1, 2, 1, '2013-11-01', '2013-12-31', 'Diễn giải của giao dịch mua bán Thủy Sản'),
(2, 2, 1, '2013-10-01', '2013-10-31', 'Diễn giải hợp đồng trước');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_domain`
--

CREATE TABLE IF NOT EXISTS `tbl_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_domain`
--

INSERT INTO `tbl_domain` (`id`, `name`) VALUES
(1, 'Thủy sản'),
(2, 'Thú y');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `job`, `gender`, `phone`, `address`, `salary_base`) VALUES
(1, 'Lý Văn Thạnh', 'Bán hàng', 0, '0989 111 2221', 'TP HCM', 2000000),
(2, 'Bùi Thanh Tuấn', 'Bán hàng', 0, '0996 333 444', 'Đồng Tháp', 2000000),
(3, 'Nguyễn Thanh Bảo', 'Bảo vệ', 0, '', 'Vĩnh Long', 1800000);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_guest`
--

INSERT INTO `tbl_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(2, '192.168.1.3', '1382425867', '1382429467', '192.168.1.3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_export`
--

CREATE TABLE IF NOT EXISTS `tbl_order_export` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tracking` int(11) NOT NULL,
  `date` date NOT NULL,
  `note` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tracking` (`id_tracking`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_order_export`
--

INSERT INTO `tbl_order_export` (`id`, `id_tracking`, `date`, `note`) VALUES
(13, 1, '2013-11-10', 'Chúng ta đang thử nghiệm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_export_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_order_export_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idorder` int(11) NOT NULL,
  `idresource` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_order_export_detail`
--

INSERT INTO `tbl_order_export_detail` (`id`, `idorder`, `idresource`, `count`, `price`) VALUES
(1, 1, 6, 2, 50000),
(9, 2, 6, 1, 48000),
(10, 2, 4, 1, 35000),
(11, 3, 214, 3, 30000),
(12, 3, 198, 1, 45000),
(13, 3, 210, 3, 25000),
(14, 3, 196, 1, 32000),
(15, 4, 198, 2, 45000),
(16, 4, 210, 3, 25000),
(17, 4, 204, 1, 30000),
(18, 5, 199, 2, 45000),
(19, 5, 198, 1, 45000),
(20, 5, 196, 1, 32000),
(21, 5, 200, 1, 45000),
(22, 5, 214, 5, 30000),
(23, 6, 196, 2, 32000),
(24, 6, 206, 2, 28000),
(26, 7, 276, 2, 63000),
(30, 8, 1044, 1, 7000),
(31, 9, 1, 1, 42000),
(32, 9, 2, 2, 40000),
(33, 10, 2, 1, 40000),
(34, 11, 276, 4, 63000),
(35, 11, 277, 1, 70000),
(36, 11, 278, 1, 70000),
(37, 11, 279, 1, 78000),
(38, 11, 280, 1, 63000);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_order_import`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_order_import_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_paid_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_paid_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcustomer` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_customer_paid_1` (`idcustomer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_paid_customer`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_paid_general`
--

INSERT INTO `tbl_paid_general` (`id`, `id_term`, `date`, `value`, `note`) VALUES
(1, 6, '2013-08-07', 1000000, 'Tiền điện'),
(2, 6, '2013-08-15', 200000, 'Tiền nước');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paid_pay_roll`
--

CREATE TABLE IF NOT EXISTS `tbl_paid_pay_roll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idemployee` int(11) NOT NULL,
  `date` date NOT NULL,
  `value_base` int(11) NOT NULL,
  `value_sub` int(11) NOT NULL,
  `value_pre` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_paid_pay_roll_1` (`idemployee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_paid_pay_roll`
--

INSERT INTO `tbl_paid_pay_roll` (`id`, `idemployee`, `date`, `value_base`, `value_sub`, `value_pre`, `note`) VALUES
(1, 1, '2013-04-30', 2500000, 500000, 1000000, ''),
(2, 2, '2013-05-31', 2500000, 0, 3000000, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_paid_supplier`
--

INSERT INTO `tbl_paid_supplier` (`id`, `idsupplier`, `date`, `value`, `note`) VALUES
(4, 6, '2012-09-19', 1000000, 'Thử nè được không đó !');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_r2t`
--

CREATE TABLE IF NOT EXISTS `tbl_r2t` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resource` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_resource` (`id_resource`),
  KEY `id_tag` (`id_tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_r2t`
--

INSERT INTO `tbl_r2t` (`id`, `id_resource`, `id_tag`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 10),
(5, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resource`
--

CREATE TABLE IF NOT EXISTS `tbl_resource` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_short` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price_import` int(11) NOT NULL,
  `price_export` int(11) NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `barcode` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_resource_1` (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_resource`
--

INSERT INTO `tbl_resource` (`id`, `idsupplier`, `name`, `name_short`, `unit`, `price_import`, `price_export`, `description`, `barcode`) VALUES
(1, 6, 'Sản phẩm 1', 'SP1', 'Bao 20Kg', 100000, 120000, 'Bao thức ăn 20 kg', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `name`, `phone`, `address`, `note`, `debt`) VALUES
(4, 'Nhà cung cấp D', '', '', '', 0),
(5, 'Nhà cung cấp E', '', '', 'Cung cấp thực phẩm', 0),
(6, 'Nhà cung cấp F', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_domain`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` int(11) NOT NULL,
  `id_domain` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_supplier` (`id_supplier`),
  KEY `id_domain` (`id_domain`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_supplier_domain`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE IF NOT EXISTS `tbl_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Dumping data for table `tbl_tag`
--

INSERT INTO `tbl_tag` (`id`, `name`) VALUES
(1, 'độ đạm 20%'),
(2, 'dạng viên'),
(3, 'độ đạm 10% '),
(5, 'độ đạm 15% '),
(6, 'gốc kháng sinh'),
(7, 'dạng bột'),
(8, 'mức nguy hiểm - có độc'),
(9, 'gốc dinh dưỡng'),
(10, 'dạng nước'),
(11, 'vỏ bao - bao mới'),
(12, 'độ đạm 30 %'),
(13, 'mức nguy hiểm - cực độc'),
(14, 'vỏ bao - dùng bao cũ'),
(38, 'dạng viên - 5mm'),
(39, 'mức nguy hiểm - không độc'),
(47, 'độ đạm 25%'),
(48, 'dạng viên - 3mm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag_selected`
--

CREATE TABLE IF NOT EXISTS `tbl_tag_selected` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_tag_selected`
--

INSERT INTO `tbl_tag_selected` (`id`, `idtag`) VALUES
(1, 21),
(2, 18),
(3, 43),
(4, 25),
(5, 17),
(6, 42);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term_collect`
--

CREATE TABLE IF NOT EXISTS `tbl_term_collect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_term_collect`
--

INSERT INTO `tbl_term_collect` (`id`, `name`) VALUES
(1, 'Phụ Phẩm'),
(2, 'Đặc Biệt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term_paid`
--

CREATE TABLE IF NOT EXISTS `tbl_term_paid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_term_paid`
--

INSERT INTO `tbl_term_paid` (`id`, `name`, `type`) VALUES
(1, 'Tiền Điện', 0),
(2, 'Tiền Nước', 0),
(3, 'Thuế', 0),
(4, 'Lương Nhân Viên', 0),
(5, 'Tiền Ăn Nhân Viên', 0),
(6, 'CP Khác', 0),
(7, 'Tiền Phụ Cấp Nhân viên', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking`
--

CREATE TABLE IF NOT EXISTS `tbl_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `estate_rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_tracking`
--

INSERT INTO `tbl_tracking` (`id`, `date_start`, `date_end`, `estate_rate`) VALUES
(3, '2013-09-01', '2013-09-30', 0),
(5, '2013-08-01', '2013-08-31', 0),
(6, '2013-10-01', '2013-10-31', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_tracking_store`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE IF NOT EXISTS `tbl_unit` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `name`) VALUES
(1, 'Ly'),
(2, 'Điếu'),
(3, 'Chai'),
(4, 'Lon'),
(5, 'Dĩa'),
(6, 'Thùng'),
(7, 'Két'),
(9, 'Bịch'),
(10, 'Gói'),
(11, 'Cái'),
(12, 'Cây'),
(13, 'Giờ'),
(14, 'Bao 20Kg'),
(15, 'Con'),
(16, 'Kg'),
(17, 'Hộp'),
(18, 'Bao 25Kg'),
(19, 'Lốc'),
(20, 'Tuýp'),
(21, 'Cuộn'),
(22, 'Túi'),
(23, 'Dây'),
(25, 'ABC');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `pass`, `gender`, `note`, `datecreate`, `dateupdate`, `dateactivity`, `type`, `code`) VALUES
(1, 'Bùi Thanh Tuấn', 'tuanbuithanh@gmail.com', 'admin123456', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, ''),
(2, 'Lê Nguyễn Đông Khoa', 'lekhoa.bdc@gmail.com', 'lenguyen0945030709', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, '1');

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
-- Constraints for table `tbl_customer_domain`
--
ALTER TABLE `tbl_customer_domain`
  ADD CONSTRAINT `tbl_customer_domain_ibfk_2` FOREIGN KEY (`id_domain`) REFERENCES `tbl_domain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_customer_domain_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_customer_tracking`
--
ALTER TABLE `tbl_customer_tracking`
  ADD CONSTRAINT `tbl_customer_tracking_ibfk_2` FOREIGN KEY (`id_domain`) REFERENCES `tbl_domain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_customer_tracking_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_export`
--
ALTER TABLE `tbl_order_export`
  ADD CONSTRAINT `tbl_order_export_ibfk_1` FOREIGN KEY (`id_tracking`) REFERENCES `tbl_customer_tracking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `tbl_paid_customer`
--
ALTER TABLE `tbl_paid_customer`
  ADD CONSTRAINT `tbl_customer_paid_1` FOREIGN KEY (`idcustomer`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_paid_general`
--
ALTER TABLE `tbl_paid_general`
  ADD CONSTRAINT `tbl_paid_general_1` FOREIGN KEY (`id_term`) REFERENCES `tbl_term_paid` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_paid_pay_roll`
--
ALTER TABLE `tbl_paid_pay_roll`
  ADD CONSTRAINT `tbl_paid_pay_roll_1` FOREIGN KEY (`idemployee`) REFERENCES `tbl_employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_paid_supplier`
--
ALTER TABLE `tbl_paid_supplier`
  ADD CONSTRAINT `tbl_supplier_paid_1` FOREIGN KEY (`idsupplier`) REFERENCES `tbl_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_r2t`
--
ALTER TABLE `tbl_r2t`
  ADD CONSTRAINT `tbl_r2t_ibfk_1` FOREIGN KEY (`id_resource`) REFERENCES `tbl_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_r2t_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tbl_tag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_resource`
--
ALTER TABLE `tbl_resource`
  ADD CONSTRAINT `tbl_resource_1` FOREIGN KEY (`idsupplier`) REFERENCES `tbl_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_supplier_domain`
--
ALTER TABLE `tbl_supplier_domain`
  ADD CONSTRAINT `tbl_supplier_domain_ibfk_2` FOREIGN KEY (`id_domain`) REFERENCES `tbl_domain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_supplier_domain_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `tbl_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
