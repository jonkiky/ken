-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-03-20 11:03:10
-- 服务器版本： 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coupon`
--

-- --------------------------------------------------------

--
-- 表的结构 `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url_slug` varchar(255) DEFAULT NULL,
  `redirect_url` varchar(255) DEFAULT NULL,
  `is_redirect` varchar(15) DEFAULT NULL,
  `create_time` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `campaign`
--

INSERT INTO `campaign` (`id`, `name`, `url_slug`, `redirect_url`, `is_redirect`, `create_time`, `user_id`, `status`) VALUES
(15, 'name', 'url', 'redirect', NULL, NULL, 1, 'active'),
(16, 'bbbb', '321', '1', 'true', NULL, 1, 'active'),
(17, 'Ningbo VS New York', 'testcampaign123', '', '', '24-Feb-2018 04:06 PM', 1, 'deleted'),
(18, 'basc', 's', 'sfasdfasdf', '', '24-Feb-2018 04:07 PM', 1, 'deleted'),
(19, 'bbbb_duplicated_with_id_16', '32112312312', '1', 'false', NULL, 1, 'active'),
(20, 'bbbbbbbbbbb', 'TT', 'SSSSSSSSSSSs', 'true', '15-Mar-2018 03:21 AM', 1, 'active'),
(21, 'T', '', '', 'false', '16-Mar-2018 03:51 AM', 1, 'active'),
(22, 'T_duplicated_with_id_21', '', '', 'false', '16-Mar-2018 03:51 AM', 1, 'deleted');

-- --------------------------------------------------------

--
-- 表的结构 `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `offer_id` int(11) DEFAULT '-1',
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_code`, `offer_id`, `status`) VALUES
(1, 'adsfasdf', 2, 'used'),
(2, 'bbbb', 2, 'not used'),
(3, 'dfasf', -1, 'not used'),
(4, 'as', -1, 'not used'),
(5, 'fda', -1, 'not used'),
(6, 'sfd', -1, 'not used'),
(7, 'as', -1, 'not used'),
(8, 'df', -1, 'not used'),
(9, 'sad', -1, 'not used'),
(10, 'f', -1, 'not used'),
(11, 'asdf', 12, 'not used'),
(12, 'sa', 12, 'not used'),
(13, 'f', 12, 'not used'),
(14, 'as', 12, 'not used'),
(15, 'f', 12, 'not used'),
(16, 'asf', 10, 'not used'),
(17, 'asdfas', 10, 'used'),
(18, 'as', 12, 'not used'),
(19, 'df', 12, 'not used'),
(20, 'as', 12, 'not used'),
(21, 'f', 12, 'not used'),
(22, 'saf', 12, 'not used'),
(23, 'sa', 12, 'not used'),
(24, 'f', 12, 'not used'),
(25, 's', 12, 'not used'),
(26, 'as', 11, 'not used'),
(27, 'f', 11, 'not used'),
(28, 'as', 11, 'not used'),
(29, 'df', 11, 'not used'),
(30, 'as', -1, 'not used'),
(31, 'f', -1, 'not used'),
(32, 'saf', -1, 'not used'),
(33, 'as', 12, 'not used'),
(34, 'f', 12, 'not used'),
(35, 'as', 12, 'not used'),
(36, 'df', 12, 'not used'),
(37, 'as', 12, 'not used'),
(38, 'f', 12, 'not used'),
(39, 'saf', 12, 'not used'),
(40, 'sa', 12, 'not used');

-- --------------------------------------------------------

--
-- 表的结构 `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT 'active/pending/disabled',
  `market_place` varchar(255) DEFAULT NULL,
  `template_id` int(11) DEFAULT '-1',
  `is_ever_green` varchar(15) DEFAULT NULL COMMENT 'YES/NO',
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `daily_coupon_limited` int(11) DEFAULT '0',
  `sale_price` varchar(255) DEFAULT NULL,
  `normal_price` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_signup` varchar(255) DEFAULT NULL,
  `benefit1` varchar(255) DEFAULT NULL,
  `landing_analytics_code` text,
  `benefit2` varchar(255) DEFAULT NULL,
  `thank_you_analytics_code` text,
  `seller_id` varchar(255) DEFAULT NULL,
  `product_asin` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `buy_link_keywords` text,
  `url_rotation` text,
  `is_super_nova_url` varchar(255) DEFAULT NULL,
  `super_noval_url_keyword` text,
  `club_name` varchar(255) DEFAULT NULL,
  `deal_club_url` varchar(255) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT '0',
  `aweber_id` varchar(255) DEFAULT NULL,
  `search_key_words` varchar(255) DEFAULT NULL,
  `add_to_wishlist` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `lead_sentence` varchar(255) DEFAULT NULL,
  `product_description` text,
  `freq_deal_description` text,
  `freq_free_product_name` varchar(255) DEFAULT NULL,
  `freq_free_product_value` varchar(255) DEFAULT NULL,
  `freq_free_product_buy_url` varchar(255) DEFAULT NULL,
  `freq_disc_description` text,
  `freq_disc_product_name` varchar(255) DEFAULT NULL,
  `freq_disc_product_value` varchar(255) DEFAULT NULL,
  `freq_disc_product_discount` varchar(255) DEFAULT NULL,
  `freq_disc_product_buy_url` varchar(255) DEFAULT NULL,
  `is_upviral` varchar(255) DEFAULT NULL,
  `upviral_code` text,
  `user_id` int(11) DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `offer`
--

INSERT INTO `offer` (`id`, `name`, `status`, `market_place`, `template_id`, `is_ever_green`, `start_date`, `end_date`, `daily_coupon_limited`, `sale_price`, `normal_price`, `product_name`, `brand`, `email`, `is_signup`, `benefit1`, `landing_analytics_code`, `benefit2`, `thank_you_analytics_code`, `seller_id`, `product_asin`, `canonical_url`, `buy_link_keywords`, `url_rotation`, `is_super_nova_url`, `super_noval_url_keyword`, `club_name`, `deal_club_url`, `campaign_id`, `aweber_id`, `search_key_words`, `add_to_wishlist`, `product_type`, `lead_sentence`, `product_description`, `freq_deal_description`, `freq_free_product_name`, `freq_free_product_value`, `freq_free_product_buy_url`, `freq_disc_description`, `freq_disc_product_name`, `freq_disc_product_value`, `freq_disc_product_discount`, `freq_disc_product_buy_url`, `is_upviral`, `upviral_code`, `user_id`) VALUES
(1, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Offer Name', 'true', 'us', 1, 'true', '', '', 12, '123', '321', 'Product Name', 'Brand', 'Company Email Address', 'direct', 'Benefit 1', '', 'Benefit 2', '', '', '', '', '', '', '', '', '', '', 19, '', 'Search Keywords', 'true', 'Product Type', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(3, 'abcd', '', '', 1, '', '', '', -1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(4, 'aba', 'true', '', 1, 'true', '', '', -1, '9999999', '999999', '12312', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(5, 'a', '', '', 1, '', '', '', -1, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(6, '', '', '', 1, '', '', '', -1, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(7, '', '', '', 1, '', '', '', -1, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(8, '12312', '', '', 1, '', '', '', -1, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(9, 'adfa  title', 'deleted', 'uk', 2, '', '', '', 12, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(10, 'Offer Name2', 'deleted', 'us', 1, 'true', '', '', 123, '111111111', '22222222222', 'Product Name', 'Brand', 'Company Email Address', 'custom', 'Benefit 1', 'Landing Page Tracking/Analytics Code', 'Benefit 2', 'Thank You Page Tracking/Analytics Code', 'Seller ID (optional)', 'Product ASIN', 'Canonical URL (optional)', 'Keywords (optional)', 'URL Rotation (optional)', 'true', 'Seller ID is required. Keywords are optional.', 'Deal Club Name (optional)', 'Deal Club URL (optional)', 21, 'Aweber List ID', 'Search Keywords', 'true', 'Type', 'Lead Sentence', 'Product Deion', 'Deal Deion', 'Free Product Name', 'Free Product Value', 'Custom Buy URL', 'Deal Deion', 'Discounted Product Name', 'Discounted Product Value', 'Discounted Product Percentage Off', 'Custom Buy URL', 'true', 'UpViral Embed Code', 1),
(11, 'Offer Name2', 'true', '', 1, '', '2018-03-11 13:45', '2018-03-31 07:50', 0, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 21, '', '', '', '', '', 'Product Deion', '', '', '', '', '', '', '', '', '', '', '', 1),
(12, 'Offer Name3', '', '', 1, '', '', '', 0, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 21, '', '', '', '', '', '', 'Deal Deion', '', '', '', '', '', '', '', '', '', '', 1),
(13, 'Offer Name4', 'deleted', '', 1, '', '2018-02-16 15:55', '2018-03-21 10:50', 0, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 21, '', '', '', '', '', '', 'Deal Description', '', '', '', '', '', '', '', '', '', '', 1),
(14, 'Offer Name2_duplicated_with_id_10', 'deleted', 'us', 1, 'true', '', '', 123, '111111111', '22222222222', 'Product Name', 'Brand', 'Company Email Address', 'custom', 'Benefit 1', 'Landing Page Tracking/Analytics Code', 'Benefit 2', 'Thank You Page Tracking/Analytics Code', 'Seller ID (optional)', 'Product ASIN', 'Canonical URL (optional)', 'Keywords (optional)', 'URL Rotation (optional)', 'true', 'Seller ID is required. Keywords are optional.', 'Deal Club Name (optional)', 'Deal Club URL (optional)', 21, 'Aweber List ID', 'Search Keywords', 'true', 'Type', 'Lead Sentence', 'Product Deion', 'Deal Deion', 'Free Product Name', 'Free Product Value', 'Custom Buy URL', 'Deal Deion', 'Discounted Product Name', 'Discounted Product Value', 'Discounted Product Percentage Off', 'Custom Buy URL', 'true', 'UpViral Embed Code', 1),
(15, 'Offer Name2_duplicated_with_id_10', 'deleted', 'us', 1, 'true', '', '', 123, '111111111', '22222222222', 'Product Name', 'Brand', 'Company Email Address', 'custom', 'Benefit 1', 'Landing Page Tracking/Analytics Code', 'Benefit 2', 'Thank You Page Tracking/Analytics Code', 'Seller ID (optional)', 'Product ASIN', 'Canonical URL (optional)', 'Keywords (optional)', 'URL Rotation (optional)', 'true', 'Seller ID is required. Keywords are optional.', 'Deal Club Name (optional)', 'Deal Club URL (optional)', 21, 'Aweber List ID', 'Search Keywords', 'true', 'Type', 'Lead Sentence', 'Product Deion', 'Deal Deion', 'Free Product Name', 'Free Product Value', 'Custom Buy URL', 'Deal Deion', 'Discounted Product Name', 'Discounted Product Value', 'Discounted Product Percentage Off', 'Custom Buy URL', 'true', 'UpViral Embed Code', 1),
(16, 'Offer Name2_duplicated_with_id_10', 'deleted', 'us', 1, 'true', '', '', 123, '111111111', '22222222222', 'Product Name', 'Brand', 'Company Email Address', 'custom', 'Benefit 1', 'Landing Page Tracking/Analytics Code', 'Benefit 2', 'Thank You Page Tracking/Analytics Code', 'Seller ID (optional)', 'Product ASIN', 'Canonical URL (optional)', 'Keywords (optional)', 'URL Rotation (optional)', 'true', 'Seller ID is required. Keywords are optional.', 'Deal Club Name (optional)', 'Deal Club URL (optional)', 21, 'Aweber List ID', 'Search Keywords', 'true', 'Type', 'Lead Sentence', 'Product Deion', 'Deal Deion', 'Free Product Name', 'Free Product Value', 'Custom Buy URL', 'Deal Deion', 'Discounted Product Name', 'Discounted Product Value', 'Discounted Product Percentage Off', 'Custom Buy URL', 'true', 'UpViral Embed Code', 1),
(17, 'Offer Name3_duplicated_with_id_12', '', '', 1, '', '', '', 0, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 21, '', '', '', '', '', '', 'Deal Deion', '', '', '', '', '', '', '', '', '', '', 1),
(18, 'Offer Name2_duplicated_with_id_10', 'deleted', 'us', 1, 'true', '', '', 123, '111111111', '22222222222', 'Product Name', 'Brand', 'Company Email Address', 'custom', 'Benefit 1', 'Landing Page Tracking/Analytics Code', 'Benefit 2', 'Thank You Page Tracking/Analytics Code', 'Seller ID (optional)', 'Product ASIN', 'Canonical URL (optional)', 'Keywords (optional)', 'URL Rotation (optional)', 'true', 'Seller ID is required. Keywords are optional.', 'Deal Club Name (optional)', 'Deal Club URL (optional)', 21, 'Aweber List ID', 'Search Keywords', 'true', 'Type', 'Lead Sentence', 'Product Deion', 'Deal Deion', 'Free Product Name', 'Free Product Value', 'Custom Buy URL', 'Deal Deion', 'Discounted Product Name', 'Discounted Product Value', 'Discounted Product Percentage Off', 'Custom Buy URL', 'true', 'UpViral Embed Code', 1),
(19, 'Offer Name4_duplicated_with_id_13', 'deleted', '', 1, '', '2018-02-16 15:55', '2018-03-21 10:50', 0, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 21, '', '', '', '', '', '', 'Deal Description', '', '', '', '', '', '', '', '', '', '', 1),
(20, 'Offer Name2_duplicated_with_id_11', 'true', '', 1, '', '2018-03-11 13:45', '2018-03-31 07:50', 0, '9999999', '999999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 21, '', '', '', '', '', 'Product Deion', '', '', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `offer_image`
--

CREATE TABLE `offer_image` (
  `id` int(11) NOT NULL,
  `offer_id` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `offer_image`
--

INSERT INTO `offer_image` (`id`, `offer_id`, `picture`, `status`) VALUES
(1, '20', 'img/test001.jpg', 'deleted'),
(2, '20', 'img/test002.jpg', 'deleted'),
(3, '20', 'img/test003.jpg', 'deleted'),
(4, '20', '1504208850.jpg', 'active'),
(5, '11', '1504208850.jpg', 'active'),
(6, '20', '1504208850.jpg', 'active');

-- --------------------------------------------------------

--
-- 表的结构 `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `template`
--

INSERT INTO `template` (`id`, `title`) VALUES
(1, 'Flash Sale Offer'),
(2, 'Giveaway Offer'),
(3, 'Search-Find-Bu'),
(4, 'Frequently Bought Together (Free)'),
(5, 'Frequently Bought Together (Discount)'),
(6, 'Contest');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `redirect_dest_url` varchar(255) DEFAULT NULL,
  `is_ran_out` tinyint(1) DEFAULT NULL,
  `ran_out_email` varchar(255) DEFAULT NULL,
  `is_limit` tinyint(1) DEFAULT NULL,
  `limit_email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0-active,-1 disactive',
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `redirect_dest_url`, `is_ran_out`, `ran_out_email`, `is_limit`, `limit_email`, `status`, `token`) VALUES
(1, 'user', 'user', 'user', 'about:blank', 1, 'user@163.com', 0, '', 0, 'sfasdfsadf12312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_image`
--
ALTER TABLE `offer_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用表AUTO_INCREMENT `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `offer_image`
--
ALTER TABLE `offer_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
