-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 12:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hierarchy` int(11) NOT NULL,
  `is_del` int(11) NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modify_date` datetime DEFAULT NULL,
  `modify_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hierarchy`, `is_del`, `create_date`, `create_by`, `modify_date`, `modify_by`) VALUES
(1, 'admin', 'admin', 0, 0, '2017-10-18 22:15:42', 0, NULL, NULL),
(2, 'qwe', 'qwe', 2, 0, '2017-10-18 23:35:28', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_dictionary`
--

CREATE TABLE `data_dictionary` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `th_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `job_position_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_position_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `property_th` text COLLATE utf8_unicode_ci NOT NULL,
  `property_en` text COLLATE utf8_unicode_ci NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_del` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int(11) NOT NULL,
  `thumbnail_image` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_image` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_del` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `thumbnail_image` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_image` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_del` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_img`
--

CREATE TABLE `news_img` (
  `id` int(11) NOT NULL,
  `url_image` text COLLATE utf8_unicode_ci NOT NULL,
  `description_img_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_img_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_id` int(11) NOT NULL,
  `create_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_del` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ourproject_img`
--

CREATE TABLE `ourproject_img` (
  `id` int(11) NOT NULL,
  `url_image` text COLLATE utf8_unicode_ci NOT NULL,
  `description_img_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_img_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ourproject_id` int(11) NOT NULL,
  `create_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_del` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_project`
--

CREATE TABLE `our_project` (
  `id` int(11) NOT NULL,
  `thumbnail_image` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_image` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_del` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id` int(11) NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_del` tinyint(4) NOT NULL DEFAULT '0',
  `brand_image` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail_image` text COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

CREATE TABLE `product_item` (
  `id` int(11) NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `short_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feature_en` text COLLATE utf8_unicode_ci NOT NULL,
  `feature_th` text COLLATE utf8_unicode_ci NOT NULL,
  `video_url` text COLLATE utf8_unicode_ci NOT NULL,
  `catelog_url` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_del` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `product_brand_id` int(11) NOT NULL,
  `thumbnail_image` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_image` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_item_img`
--

CREATE TABLE `product_item_img` (
  `id` int(11) NOT NULL,
  `url_image` text COLLATE utf8_unicode_ci NOT NULL,
  `description_img_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_img_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '0=thumbnail 1=product',
  `product_item_id` int(11) NOT NULL,
  `create_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_datetime` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_del` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `thumbnail_image` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_title_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_en` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_th` text COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_detail_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_image` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_del` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dictionary`
--
ALTER TABLE `data_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_img`
--
ALTER TABLE `news_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourproject_img`
--
ALTER TABLE `ourproject_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_project`
--
ALTER TABLE `our_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_item`
--
ALTER TABLE `product_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_item_img`
--
ALTER TABLE `product_item_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_dictionary`
--
ALTER TABLE `data_dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_img`
--
ALTER TABLE `news_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ourproject_img`
--
ALTER TABLE `ourproject_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `our_project`
--
ALTER TABLE `our_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_item`
--
ALTER TABLE `product_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_item_img`
--
ALTER TABLE `product_item_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
