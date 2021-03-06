-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 07:17 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iprogram_filter`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_tbl`
--

CREATE TABLE IF NOT EXISTS `book_tbl` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_title` varchar(50) NOT NULL,
  `b_price` varchar(50) NOT NULL,
  `b_author` varchar(50) NOT NULL,
  `b_year` varchar(50) NOT NULL,
  `b_country` varchar(50) NOT NULL,
  `b_total_page` varchar(50) NOT NULL,
  `b_Publish_company` varchar(50) NOT NULL,
  `b_Rating` varchar(50) NOT NULL,
  `b_dedicate` varchar(50) NOT NULL,
  `b_website` varchar(50) NOT NULL,
  `b_Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_tbl`
--

INSERT INTO `book_tbl` (`b_id`, `b_name`, `b_title`, `b_price`, `b_author`, `b_year`, `b_country`, `b_total_page`, `b_Publish_company`, `b_Rating`, `b_dedicate`, `b_website`, `b_Phone`) VALUES
(62, 'TING HILL', 'CULTURE', '556', 'SOIN GHOSH', '2013', 'India', '500', 'HELPWEBTECH', '*****', 'GHOSH INDIA', 'www.helpwebtech.com', '8527672265'),
(74, 'Windows', 'Help Tech', '958', 'User Menu', '2017', 'Japan', '500', 'HELPWEBTECH', '*****', 'GHOSH INDIA', 'www.helpwebtech.com', '8527672265'),
(75, 'dcdcdsd', 'vfsjbcjsb', 'kfvkfsdb', 'edwd', 'dcnskdnc', 'nksdncksn', '500', 'HELPWEBTECH', '*****', 'GHOSH INDIA', 'www.helpwebtech.com', '8527672265'),
(76, 'HELLO INDIA', 'FRINRE', '586', 'Amit Ghosh', '2015', 'India', '500', 'HELPWEBTECH', '*****', 'GHOSH INDIA', 'www.helpwebtech.com', '8527672265'),
(0, 'INDIA OK', 'Yahoo India', '874', 'Amit Ghosh', '2014', 'India', '500', 'HELPWEBTECH', '*****', 'GHOSH INDIA', 'www.helpwebtech.com', '8527672265'),
(0, 'x', 'x', 'x', 'x', 'x', 'x', '500', 'HELPWEBTECH', '*****', 'GHOSH INDIA', 'www.helpwebtech.com', '8527672265');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE IF NOT EXISTS `tbl_brands` (
`id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `brand`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(3, 'Puma'),
(4, 'Reebok'),
(5, 'Peter England'),
(6, 'Duke');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_colors`
--

CREATE TABLE IF NOT EXISTS `tbl_colors` (
`id` int(11) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_colors`
--

INSERT INTO `tbl_colors` (`id`, `color`) VALUES
(1, 'Red'),
(2, 'Green'),
(3, 'Blue'),
(4, 'Purple'),
(5, 'Yellow'),
(6, 'Black'),
(7, 'White'),
(8, 'Brown'),
(9, 'Grey');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productphotos`
--

CREATE TABLE IF NOT EXISTS `tbl_productphotos` (
`id` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tbl_productphotos`
--

INSERT INTO `tbl_productphotos` (`id`, `ProductID`, `photo`) VALUES
(1, 1, 'adidas-brown-1_R.jpg'),
(2, 1, 'adidas-brown-2_R.jpg'),
(3, 1, 'adidas-brown-3_R.jpg'),
(4, 2, 'adidas-red-1_R.jpg'),
(5, 2, 'adidas-red-2_R.jpg'),
(6, 2, 'adidas-red-3_R.jpg'),
(7, 2, 'adidas-red-4_R.jpg'),
(8, 2, 'adidas-red-5_R.jpg'),
(9, 2, 'adidas-red-6_R.jpg'),
(10, 2, 'adidas-red-7_R.jpg'),
(11, 3, 'duke-black-1_R.jpg'),
(12, 3, 'duke-black-2_R.jpg'),
(13, 3, 'duke-black-3_R.jpg'),
(14, 3, 'duke-black-4_R.jpg'),
(15, 4, 'duke-purple-1_R.jpeg'),
(16, 4, 'duke-purple-2_R.jpeg'),
(17, 4, 'duke-purple-3_R.jpeg'),
(18, 5, 'nike-grey-1_R.jpg'),
(19, 5, 'nike-grey-2_R.jpg'),
(20, 5, 'nike-grey-3_R.jpg'),
(21, 6, 'peterengland-blue-1_R.JPG'),
(22, 6, 'peterengland-blue-2_R.JPG'),
(23, 7, 'puma-green-1_R.jpeg'),
(24, 7, 'puma-green-2_R.jpeg'),
(25, 7, 'puma-green-3_R.jpeg'),
(26, 8, 'puma-green-4_R.jpeg'),
(27, 8, 'puma-green-5_R.jpeg'),
(28, 8, 'puma-green-6_R.jpeg'),
(29, 9, 'reebok-white-1_R.jpg'),
(30, 9, 'reebok-white-2_R.jpg'),
(31, 9, 'reebok-white-3_R.jpg'),
(32, 10, 'reebok-yellow-1_R.jpeg'),
(33, 10, 'reebok-yellow-2_R.jpeg'),
(34, 10, 'reebok-yellow-3_R.jpeg'),
(35, 11, 'adidas-black-1_R.jpg'),
(36, 11, 'adidas-black-2_R.jpg'),
(37, 11, 'adidas-black-3_R.jpg'),
(38, 12, 'adidas-blue-1_R.jpg'),
(39, 12, 'adidas-blue-2_R.jpg'),
(40, 12, 'adidas-blue-3_R.jpg'),
(41, 13, 'adidas-white-1_R.jpg'),
(42, 13, 'adidas-white-2_R.jpg'),
(43, 13, 'adidas-white-3_R.jpg'),
(44, 14, 'duke-green-1_R.jpg'),
(45, 14, 'duke-green-2_R.jpg'),
(46, 14, 'duke-green-3_R.jpg'),
(47, 15, 'duke-grey-1_R.jpg'),
(48, 15, 'duke-grey-2_R.jpg'),
(49, 15, 'duke-grey-3_R.jpg'),
(50, 16, 'nike-black-1_R.jpg'),
(51, 16, 'nike-black-2_R.jpg'),
(52, 16, 'nike-black-3_R.jpg'),
(53, 17, 'nike-blue-1_R.jpg'),
(54, 17, 'nike-blue-2_R.jpg'),
(55, 17, 'nike-blue-3_R.jpg'),
(56, 18, 'peterengland-white-1_R.jpg'),
(57, 18, 'peterengland-white-2_R.jpg'),
(58, 19, 'puma-black-1_R.jpg'),
(59, 19, 'puma-black-2_R.jpg'),
(60, 19, 'puma-black-3_R.jpg'),
(61, 20, 'puma-blue-1_R.jpg'),
(62, 20, 'puma-blue-2_R.jpg'),
(63, 20, 'puma-blue-3_R.jpg'),
(64, 21, 'puma-white-1_R.jpg'),
(65, 21, 'puma-white-2_R.jpg'),
(66, 21, 'puma-white-3_R.jpg'),
(67, 22, 'puma-yellow-1_R.jpg'),
(68, 22, 'puma-yellow-2_R.jpg'),
(69, 22, 'puma-yellow-3_R.jpg'),
(70, 23, 'reebok-blue-1_R.jpg'),
(71, 23, 'reebok-blue-2_R.jpg'),
(72, 23, 'reebok-blue-3_R.jpg'),
(73, 24, 'reebok-red-1_R.jpg'),
(74, 24, 'reebok-red-2_R.jpg'),
(75, 24, 'reebok-red-3_R.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
`ProductID` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` tinytext NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `site_Country` varchar(100) NOT NULL,
  `Site_Owner_Name` varchar(100) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Company_Address` varchar(100) NOT NULL,
  `Company_Website` varchar(100) NOT NULL,
  `Company_Phone` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`ProductID`, `Title`, `Description`, `Brand`, `Color`, `Price`, `site_Country`, `Site_Owner_Name`, `Company_Name`, `Company_Address`, `Company_Website`, `Company_Phone`) VALUES
(1, 'Adidas Brown Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '1', '8', 499, '', '', '', '', '', ''),
(2, 'Adidas Red Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '1', '1', 599, '', '', '', '', '', ''),
(3, 'Duke Black Thirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '6', '6', 299, '', '', '', '', '', ''),
(4, 'Duke Purple Thirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '6', '4', 299, '', '', '', '', '', ''),
(5, 'Nike Grey Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '2', '9', 699, '', '', '', '', '', ''),
(6, 'Peter England Blue Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '5', '3', 799, '', '', '', '', '', ''),
(7, 'Puma Green Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '3', '2', 450, '', '', '', '', '', ''),
(8, 'Puma Green Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '3', '2', 450, '', '', '', '', '', ''),
(9, 'Reebok White Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '4', '7', 475, '', '', '', '', '', ''),
(10, 'Reebok Yellow Tshirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. ', '4', '5', 425, '', '', '', '', '', ''),
(11, 'Adidas BlackTshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '1', '6', 1499, '', '', '', '', '', ''),
(12, 'Adidas BlueTshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '1', '3', 1750, '', '', '', '', '', ''),
(13, 'Adidas White Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '1', '7', 899, '', '', '', '', '', ''),
(14, 'Duke Green Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '6', '2', 499, '', '', '', '', '', ''),
(15, 'Duke Grey Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '6', '9', 299, '', '', '', '', '', ''),
(16, 'Nike Black Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '2', '6', 699, '', '', '', '', '', ''),
(17, 'Nike Blue Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '2', '3', 1250, '', '', '', '', '', ''),
(18, 'Peter England White Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '5', '7', 2250, '', '', '', '', '', ''),
(19, 'Puma Black Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '3', '6', 699, '', '', '', '', '', ''),
(20, 'Puma Blue Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '3', '3', 799, '', '', '', '', '', ''),
(21, 'Puma White Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '3', '7', 999, '', '', '', '', '', ''),
(22, 'Puma Yellow Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '3', '5', 550, '', '', '', '', '', ''),
(23, 'Reebok Blue Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '4', '3', 750, '', '', '', '', '', ''),
(24, 'Reebok Red Tshirt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,', '4', '1', 350, '', '', '', '', '', ''),
(25, 'Lesley Hunt', 'Dolores elit, magnam amet, unde ipsa, mollit non odit porro cum in ex fugiat hic.', '2', '3', 617, '', '', '', '', '', ''),
(27, 'Wing Owen', 'Lorem nostrud do nobis aspernatur dolorem quia ullam enim vitae recusandae. Illo vel et neque aliquam voluptatem.', '5', '2', 220, '', '', '', '', '', ''),
(29, 'Fulton Long G', 'Eaque nostrud voluptas velit ipsam neque hic error provident, omnis eius sapiente cupidatat laborum.', '6', '9', 198, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productsizes`
--

CREATE TABLE IF NOT EXISTS `tbl_productsizes` (
`id` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `sizeID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `tbl_productsizes`
--

INSERT INTO `tbl_productsizes` (`id`, `ProductID`, `sizeID`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 5),
(4, 2, 1),
(5, 2, 2),
(6, 2, 4),
(7, 3, 2),
(8, 3, 4),
(9, 4, 2),
(10, 4, 5),
(11, 5, 3),
(12, 5, 4),
(13, 6, 1),
(14, 6, 2),
(15, 6, 3),
(16, 6, 4),
(17, 6, 5),
(18, 7, 1),
(19, 7, 4),
(20, 7, 5),
(21, 8, 2),
(22, 8, 3),
(23, 9, 1),
(24, 9, 2),
(25, 9, 5),
(26, 10, 3),
(27, 10, 4),
(28, 10, 5),
(29, 11, 1),
(30, 11, 2),
(31, 11, 3),
(32, 11, 4),
(33, 12, 3),
(34, 12, 4),
(35, 12, 5),
(36, 13, 1),
(37, 13, 3),
(38, 13, 5),
(39, 14, 2),
(40, 14, 4),
(41, 15, 1),
(42, 15, 2),
(43, 15, 3),
(44, 15, 4),
(45, 15, 5),
(46, 16, 2),
(47, 16, 3),
(48, 16, 4),
(49, 16, 5),
(50, 17, 1),
(51, 17, 2),
(52, 17, 3),
(53, 18, 2),
(54, 18, 3),
(55, 18, 4),
(56, 18, 5),
(57, 19, 1),
(58, 19, 2),
(59, 19, 3),
(60, 19, 4),
(61, 20, 2),
(62, 20, 4),
(63, 20, 5),
(64, 21, 1),
(65, 21, 2),
(66, 21, 3),
(67, 21, 4),
(68, 21, 5),
(69, 22, 1),
(70, 22, 4),
(71, 22, 5),
(72, 23, 1),
(73, 23, 5),
(74, 24, 1),
(75, 24, 2),
(76, 24, 3),
(77, 24, 5),
(78, 25, 1),
(79, 25, 3),
(80, 25, 4),
(81, 26, 1),
(82, 26, 2),
(83, 26, 3),
(84, 26, 5),
(85, 27, 4),
(86, 28, 1),
(87, 28, 2),
(88, 28, 3),
(89, 28, 5),
(90, 29, 1),
(91, 29, 2),
(92, 29, 3),
(93, 29, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sizes`
--

CREATE TABLE IF NOT EXISTS `tbl_sizes` (
`id` int(11) NOT NULL,
  `size` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_sizes`
--

INSERT INTO `tbl_sizes` (`id`, `size`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`uid` int(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `status` enum('active','block') DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `uname`, `upass`, `city`, `status`, `deleted`) VALUES
(1, 'admin', 'admin', 'New Delhi', 'active', NULL),
(2, 'user', 'pass', 'Gurgaon', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_colors`
--
ALTER TABLE `tbl_colors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_productphotos`
--
ALTER TABLE `tbl_productphotos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
 ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `tbl_productsizes`
--
ALTER TABLE `tbl_productsizes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sizes`
--
ALTER TABLE `tbl_sizes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_colors`
--
ALTER TABLE `tbl_colors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_productphotos`
--
ALTER TABLE `tbl_productphotos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
MODIFY `ProductID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_productsizes`
--
ALTER TABLE `tbl_productsizes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tbl_sizes`
--
ALTER TABLE `tbl_sizes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
