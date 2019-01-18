-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2019 at 12:02 PM
-- Server version: 5.7.22-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `tenmien` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_customer` int(11) NOT NULL,
  `hoten` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ghichu` int(11) NOT NULL,
  `diachi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `tentour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(25) NOT NULL,
  `hanhtrinh` text COLLATE utf8_unicode_ci NOT NULL,
  `diadiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id_tour`, `tentour`, `gia`, `hanhtrinh`, `diadiem`, `image`, `date_created`, `date_updated`) VALUES
(17, 'Creative Code Inc.', 0, '', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', '', '2019-01-15 16:23:41', '2019-01-15 16:23:41'),
(27, 'Creative Code Inc.', 0, '', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', '', '2019-01-15 16:40:52', '2019-01-15 16:40:52'),
(29, 'Creative Code Inc.', 0, '', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', '', '2019-01-15 16:47:08', '2019-01-15 16:47:08'),
(30, 'Creative Code Inc.', 0, '', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', '', '2019-01-15 16:50:56', '2019-01-15 16:50:56'),
(31, 'Creative Code Inc.', 0, '', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', '', '2019-01-15 16:53:06', '2019-01-15 16:53:06'),
(33, 'Creative Code Inc.', 0, '', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', '123', '2019-01-16 04:46:09', '2019-01-16 04:46:09'),
(37, 'Creative Code Inc.', 0, '', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', 'IMG20161019181333.jpg', '2019-01-16 05:19:30', '2019-01-16 05:19:30'),
(38, 'Creative Code Inc.', 0, '', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', 'ekko.png', '2019-01-16 05:23:02', '2019-01-16 05:23:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_tour` (`id_tour`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `khachhang` (`id_customer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
