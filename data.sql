-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 12:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `cate_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cate`, `cate_name`) VALUES
(1, 'Phòng mới'),
(2, 'Phòng sinh viên'),
(3, 'Phòng công nhân'),
(4, 'Phòng gia đình'),
(5, 'Mặt kinh doanh'),
(6, 'Căn hộ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `rate` tinyint(5) DEFAULT NULL,
  `id_pro` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `content`, `date`, `rate`, `id_pro`, `id_user`) VALUES
(13, 'Giày đẹp lắm ah :V', '2022-12-03', 5, 23, 'admin2'),
(15, 'Hello :3', '2022-12-03', 3, 7, 'admin'),
(16, ':D :)', '2022-12-04', 5, 10, 'admin'),
(17, '....', '2022-12-06', 5, 7, 'admin'),
(19, 'Nice :))', '2022-12-15', 5, 21, 'admin2'),
(20, 'hay ', '2023-10-22', 5, 28, 'damquocdan'),
(21, 'tét', '2023-10-22', 5, 21, 'damquocdan');

-- --------------------------------------------------------

--
-- Table structure for table `momo`
--

CREATE TABLE `momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `id_bill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `momo`
--

INSERT INTO `momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `id_bill`) VALUES
(10, 'MOMOBKUN20180529', 0, '2447500', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', 'SHOELIKE32597');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_bill` varchar(20) NOT NULL,
  `total_order` int(11) NOT NULL DEFAULT 0,
  `payment` tinyint(1) NOT NULL DEFAULT 1,
  `id_user` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `note` text DEFAULT NULL,
  `order_name` varchar(30) NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `order_email` varchar(50) NOT NULL,
  `order_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_bill`, `total_order`, `payment`, `id_user`, `date`, `status`, `note`, `order_name`, `order_address`, `order_email`, `order_phone`) VALUES
(206, 'SHOELIKE75000', 3195500, 1, 'admin', '15/12/2022', 1, '', 'Admin Công Lê', 'V3 Văn Phú, Hà Đông, Hà Nội', 'congltph27602@fpt.edu.vn', '0965973668'),
(207, 'SHOELIKE14858', 7757400, 3, 'admin', '15/12/2022', 0, 'Giao hàng vào thứ 2 nhé shop :v', 'Admin Công Lê', 'V3 Văn Phú, Hà Đông, Hà Nội', 'congltph27602@fpt.edu.vn', '0965973668'),
(208, 'SHOELIKE45180', 4990000, 2, 'admin2', '15/12/2022', 0, 'Giao nhanh nhé shop ...', 'Lê Công', 'Tổ 8, Khu 1A, Phường Cẩm Trung, Thành Phố Cẩm Phả, Tỉnh Quảng Ninh', 'congldqn888@gmail.com', '0965973667'),
(209, 'SHOELIKE32597', 2447500, 4, 'admin2', '15/12/2022', 0, 'Giao tận nới nhé shop :v :)))', 'Lê Công', 'V3 Victoria Văn Phú, Hà Đông, Hà Nội', 'congldqn888@gmail.com', '0965973664'),
(210, 'SHOELIKE91630', 4659000, 1, 'damquocdan', '11/10/2023', 3, '', 'Đàm Quốc Dân', 'Tiến Bào, Phù Khê, Từ Sơn, Bắc Ninh', 'damquocdan@gmail.com', '0368966992'),
(211, 'SHOELIKE88820', 4659000, 2, 'damquocdan', '11/10/2023', 3, '', 'Đàm Quốc Dân', 'Tiến Bào, Phù Khê, Từ Sơn, Bắc Ninh', 'damquocdan@gmail.com', '0368966992');

-- --------------------------------------------------------

--
-- Table structure for table `order_total`
--

CREATE TABLE `order_total` (
  `id_order_total` int(11) NOT NULL,
  `id_order` varchar(20) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_total`
--

INSERT INTO `order_total` (`id_order_total`, `id_order`, `id_pro`, `quantity`, `price`, `name`, `image`, `size`, `color`) VALUES
(429, '206', 15, 1, 1598000, 'Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2', 'product-11.webp', 37, 'CP2'),
(430, '206', 16, 1, 1597500, 'Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2', 'pro-13-01-full.webp', 39, 'CN2'),
(431, '207', 34, 1, 2479000, 'Giày Bóng Đá Unisex Nike Phantom Gt2 Academy Tf', 'pro-32-01-full.webp', 41, 'WHITE/BRIG'),
(432, '207', 22, 1, 1679400, 'Giày Thời Trang Nữ Puma City Rider', 'pro-10.webp', 38, 'VAPOROUS G'),
(433, '207', 8, 1, 3599000, 'Giày Chạy Bộ Nam Hoka Mach Supersonic', 'product-5.webp', 39, 'rycm'),
(434, '208', 4, 1, 2395000, 'Giày Thời Trang Unisex Fila Rockblunt', 'pro-4.webp', 38, '924'),
(435, '208', 19, 1, 2595000, 'Giày Thời Trang Nam New Balance CT302 Court', 'pro-3-01-full.webp', 40, 'WHITE'),
(436, '209', 27, 1, 847500, 'Giày Thể Thao Trẻ Em New Balance 327 Classics Life', 'pro-25-01-full.webp', 36, 'HH1'),
(437, '209', 23, 1, 1600000, 'Giày Thời Trang Unisex Converse Chuck 70 Heritage', 'pro-11.webp', 37, 'MINERAL CL'),
(438, '210', 7, 1, 4659000, 'Giày Chạy Bộ Nữ Nike Air Zoom Vomero 16', 'pro-7.webp', 35, 'BLACK'),
(439, '211', 7, 1, 4659000, 'Giày Chạy Bộ Nữ Nike Air Zoom Vomero 16', 'pro-7.webp', 35, 'BLACK');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pro` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) DEFAULT 0,
  `special` int(1) NOT NULL DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `gender` varchar(20) NOT NULL,
  `description` text DEFAULT NULL,
  `id_cate` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pro`, `pro_name`, `image`, `price`, `price_sale`, `special`, `views`, `gender`, `description`, `id_cate`, `id_brand`) VALUES
(1, 'Ngõ 120, Đường Kim Giang, Phường Kim Giang, Thanh Xuân, Hà Nội', 'pd1.png', 3719000, 0, 1, 74, 'Nữ', '&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.&lt;/p&gt;', 1, 7),
(2, 'Ngõ 120, Đường Kim Giang, Phường Kim Giang, Thanh Xuân, Hà Nội', 'pd2.png', 2019000, 0, 1, 49, 'Nam', '&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.&lt;/p&gt;', 1, 7),
(4, 'Ngõ 196, Đường Hồ Tùng Mậu, Phường Mai Dịch, Cầu Giấy, Hà Nội', 'pd7.png', 2395000, 0, 1, 45, 'Nam', '&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp&lt;/p&gt;', 1, 4),
(5, '37, Đường Dịch Vọng, Phường Dịch Vọng, Cầu Giấy, Hà Nội', 'pd6.png', 2395000, 0, 1, 117, 'Nam', '+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:\r\n+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.\r\n+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.\r\n+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.\r\n+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.\r\n+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.', 1, 4),
(6, 'Ngõ 144, Phố Quan Nhân, Phường Nhân Chính, Thanh Xuân, Hà Nội', 'pd8.png', 3099000, 0, 1, 64, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n Cho thu&ecirc; chung cư 7 tầng ng&otilde; 144 Quan Nh&acirc;n gi&aacute; 1,6tr - 1,8tr - 2tr/th kh&eacute;p k&iacute;n cho thu&ecirc;\r\n          &lt;/h3&gt;\r\n    \r\n    \r\n          &lt;ul&gt;\r\n            &lt;li&gt; Gi&aacute;: 1,6tr - 1,8tr - 2tr/th&aacute;ng kh&eacute;p k&iacute;n.&lt;/li&gt;\r\n            &lt;li&gt;Nh&agrave; 4 tầng x&acirc;y cho thu&ecirc; sạch sẽ, tho&aacute;ng m&aacute;t..&lt;/li&gt;\r\n            &lt;li&gt;DT: 15m&sup2; - 18m&sup2; - 20m&sup2; - 23m&sup2;.&lt;/li&gt;\r\n            &lt;li&gt; C&oacute; kệ bếp nấu, bồn rửa b&aacute;t, sạch sẽ.&lt;/li&gt;\r\n          &lt;/ul&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;- Điện 3,5 ngh&igrave;n/số. Nước 20 ngh&igrave;n/khối.&lt;/li&gt;\r\n          &lt;/ul&gt;', 1, 7),
(7, 'Ngõ 144, Phố Quan Nhân, Phường Nhân Chính, Thanh Xuân, Hà Nội', 'pd110.png', 4659000, 0, 1, 75, 'Nữ', '&lt;p&gt;- Nh&agrave; 4 tầng x&acirc;y cho thu&ecirc; sạch sẽ, tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;- Gi&aacute;: 1,6tr - 1,8tr - 2tr/th&aacute;ng kh&eacute;p k&iacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;- DT: 15m&sup2; - 18m&sup2; - 20m&sup2; - 23m&sup2;.&lt;/p&gt;\r\n\r\n&lt;p&gt;- C&oacute; kệ bếp nấu, bồn rửa b&aacute;t, sạch sẽ.&lt;/p&gt;\r\n\r\n&lt;p&gt;- Điện 3,5 ngh&igrave;n/số. Nước 20 ngh&igrave;n/khối.&lt;/p&gt;\r\n\r\n', 1, 7),
(8, 'Đường Dốc Thọ Lão, Phường Đồng Nhân, Hai Bà Trưng, Hà Nội', 'pd5.png', 3599000, 0, 0, 81, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n  Cho thu&ecirc; giường tầng homestay full đồ full tiện &iacute;ch\r\n          &lt;/h3&gt;\r\n&lt;p&gt;- To&agrave; nh&agrave; c&oacute; thang m&aacute;y.&lt;/p&gt;\r\n&lt;p&gt;- Gi&aacute; bao gồm đầy đủ c&aacute;c dịch vụ điện nước, internet, dọn dẹp.&lt;/p&gt;\r\n&lt;p&gt;- M&ocirc;i trường sống văn minh, vui vẻ.&lt;/p&gt;\r\n&lt;p&gt;- Nh&agrave; gần nhiều trường đại học, l&ecirc;n Hồ Gươm chỉ 5 ph&uacute;t.&lt;/p&gt;\r\n          ', 3, 6),
(9, 'Đường Yên Phụ, Phường Yên Phụ, Tây Hồ, Hà Nội', 'pd9.png', 1900000, 1710000, 0, 107, 'Nu', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n   Ch&iacute;nh chủ cho thu&ecirc; ph&ograve;ng trọ gần 30m2 full đồ phố Y&ecirc;n Phụ - T&acirc;y Hồ gi&aacute; 3.5tr/ph&ograve;ng\r\n          &lt;/h3&gt;\r\n    &lt;p&gt;Ch&iacute;nh chủ cho thu&ecirc; ph&ograve;ng trọ kh&eacute;p k&iacute;n tại Y&ecirc;n Phụ - T&acirc;y Hồ - H&agrave; Nội.&lt;/p&gt;\r\n&lt;p&gt;Ph&ograve;ng gần 30m&sup2; kh&eacute;p k&iacute;n đầy đủ tiện nghi điều ho&agrave;, n&oacute;ng lạnh, giường tủ quần &aacute;o, bếp nấu ăn...&lt;/p&gt;\r\n&lt;p&gt;- Nh&agrave; c&aacute;ch đường Y&ecirc;n Phụ 20m, ng&otilde; th&ocirc;ng sang phố Y&ecirc;n Hoa gi&aacute;p Hồ T&acirc;y tho&aacute;ng m&aacute;t lộng gi&oacute;.&lt;/p&gt;\r\n&lt;p&gt;- Gi&aacute; cho thu&ecirc; 3.5tr/ph&ograve;ng.&lt;/p&gt;\r\n&lt;p&gt;Thanh to&aacute;n th&aacute;ng 1.&lt;/p&gt;', 2, 3),
(10, 'Ngõ 136, Đường Hồ Tùng Mậu, Phường Mai Dịch, Cầu Giấy, Hà Nội', 'pd115.png', 1995000, 0, 0, 96, 'Nu', '&lt;p&gt;Ch&iacute;nh chủ em c&oacute; nh&agrave; cc mini mới x&acirc;y mới tinh. Diện t&iacute;ch mỗi ph&ograve;ng: 35m&sup2; tại ng&otilde; 196 Hồ T&ugrave;ng Mậu, nếu đi từ đường hồ T&ugrave;ng Mậu đi v&agrave;o th&igrave; đi v&agrave;o khu chung cư Goldmark City đi khoảng 50m l&agrave; tới.&lt;/p&gt;\r\n&lt;p&gt;Nh&agrave; mới x&acirc;y n&ecirc;n c&oacute; đầy đủ nội thất mới, điều h&ograve;a, n&oacute;ng lạnh, giường, tủ quần &aacute;o, tủ lạnh, m&aacute;y giặt, m&aacute;y sấy, shopha, b&agrave;n bếp tr&ecirc;n dưới c&oacute; h&uacute;t m&ugrave;i đầy đủ, r&egrave;m cửa, mỗi căn hộ đều c&oacute; nhiều cửa sổ, &aacute;nh s&aacute;ng.&lt;/p&gt;\r\n&lt;p&gt;Nh&agrave; gần nhiều trường đại học như ĐH Thương Mại, đại học Quốc Gia, đại học Ngoại Ngữ, đại học Ho&agrave; B&igrave;nh, ra chợ chỉ mấy bước ch&acirc;n, c&aacute;ch trường quốc tế Newton tầm 20m, từ nh&agrave; ra đường quốc lộ cũng rất gần, nh&agrave; &ocirc; t&ocirc; đỗ cửa, thang m&aacute;y tốc độ cao, hệ thống cửa c&oacute; V&acirc;n tay, camera, bảo vệ trực 24/7.&lt;/p&gt;\r\n&lt;p&gt;Gi&aacute; thu&ecirc; mỗi căn hộ chỉ từ 6tr tới 6,5 tr/th&aacute;ng.&lt;/p&gt;', 2, 4),
(11, 'Số 144 ngõ 68 Phú Diễn , Từ Liêm, Hà Nội', 'pd113.png', 2795000, 2236000, 0, 126, 'Nam', '&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.&lt;/p&gt;', 4, 8),
(12, 'Đường Dốc Thọ Lão, Phường Đồng Nhân, Hai Bà Trưng, Hà Nội', 'pd92.png', 3199000, 2559000, 0, 140, 'Nam', '&lt;h1&gt;Cho thu&ecirc; homestay giường tầng gần Hồ Gươm:&lt;/h1&gt;\r\n&lt;p&gt;- To&agrave; nh&agrave; c&oacute; thang m&aacute;y.&lt;/p&gt;\r\n&lt;p&gt;- Gi&aacute; bao gồm đầy đủ c&aacute;c dịch vụ điện nước, internet, dọn dẹp.&lt;/p&gt;\r\n&lt;p&gt;- M&ocirc;i trường sống văn minh, vui vẻ.&lt;/p&gt;\r\n&lt;p&gt;- Nh&agrave; gần nhiều trường đại học, l&ecirc;n Hồ Gươm chỉ 5 ph&uacute;t.&lt;/p&gt;', 3, 6),
(13, 'Ngõ 144, Phố Quan Nhân, Phường Nhân Chính, Thanh Xuân, Hà Nội', 'pd72.png', 2019000, 0, 0, 103, 'Nam', '&lt;p&gt;- Nh&agrave; 4 tầng x&acirc;y cho thu&ecirc; sạch sẽ, tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;- Gi&aacute;: 1,6tr - 1,8tr - 2tr/th&aacute;ng kh&eacute;p k&iacute;n.&lt;/p&gt;\r\n&lt;p&gt;- DT: 15m&sup2; - 18m&sup2; - 20m&sup2; - 23m&sup2;.&lt;/p&gt;\r\n&lt;p&gt;- C&oacute; kệ bếp nấu, bồn rửa b&aacute;t, sạch sẽ.&lt;/p&gt;\r\n&lt;p&gt;- Điện 3,5 ngh&igrave;n/số. Nước 20 ngh&igrave;n/khối.&lt;/p&gt;', 2, 7),
(14, 'Ngõ 32, Đường Đỗ Đức Dục, Phường Mễ Trì, Nam Từ Liêm, Hà Nội', 'pd114.png', 4495000, 2248000, 0, 56, 'Nam', ' &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n       Cho thu&ecirc; ph&ograve;ng mới x&acirc;y, full đồ ng&otilde; 32 Đỗ Đức Dục\r\n          &lt;/h3&gt;\r\n&lt;p&gt;Ch&iacute;nh chủ em c&oacute; ph&ograve;ng diện t&iacute;ch 35m&sup2; full đồ, nh&agrave; mới x&acirc;y, đồ mới tinh ng&otilde; 32 Đỗ Đức dục, Nam từ li&ecirc;m, đối diện kh&aacute;ch sạn Marriot, trung t&acirc;m hội nghị Quốc gia, đi ra Phạm H&ugrave;ng v&agrave; Keangnam rất gần, c&aacute;ch Trần Duy Hưng chỉ 1,5km.&lt;/p&gt;\r\n&lt;p&gt;Ph&ograve;ng gồm điều h&ograve;a, n&oacute;ng lạnh, giường v&agrave; tủ quần &aacute;o, tủ lạnh v&agrave; m&aacute;y giặt, m&aacute;y sấy, shopha, b&agrave;n l&agrave;m việc.&lt;/p&gt;\r\n&lt;p&gt;Gi&aacute; thu&ecirc; chỉ từ 5,2tr tới 5,5tr/th&aacute;ng.&lt;/p&gt;\r\n&lt;p&gt;Ngo&agrave;i ra c&oacute; th&ecirc;m căn hộ gồm 1 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch. DT: 35m&sup2; - Gi&aacute; cho thu&ecirc; 5.6tr/ th&aacute;ng.&lt;/p&gt;', 3, 8),
(15, 'Ngõ 32, Đường Đỗ Đức Dục, Phường Mễ Trì, Nam Từ Liêm, Hà Nội', 'pd81.png', 3195000, 1598000, 0, 73, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n        Cho thu&ecirc; ph&ograve;ng mới x&acirc;y, full đồ ng&otilde; 32 Đỗ Đức Dục\r\n&lt;/h3&gt;\r\n&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch &lt;/p&gt;&lt;p&gt;h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.&lt;/p&gt;', 3, 8),
(16, '30 Đức Diễn , Từ Liêm , Hà Nội', 'pd8.png', 3195000, 1597500, 0, 139, 'Nam', '&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.&lt;/p&gt;', 3, 8),
(17, 'Số 17Phố Giảng Võ, Phường Giảng Võ, Ba Đình, Hà Nội', 'pd51.png', 2500000, 1500000, 0, 73, 'Nam', '&lt;p&gt;Nội thất: Giường tủ, Tivi, b&agrave;n l&agrave;m việc, Ga Gối, chăn, Đệm, B&agrave;n Ghế, N&oacute;ng Lạnh, Tủ Lạnh, Tủ Bếp, Bếp Từ, đồ d&ugrave;ng nấu bếp, M&aacute;y Giặt chung, l&ograve; vi s&oacute;ng, kho&aacute; cửa v&acirc;n tay... Kh&aacute;ch chỉ việc x&aacute;ch vali đến ở.&lt;/p&gt;\r\n&lt;p&gt;Vị tr&iacute; trung t&acirc;m đi lại thuận tiện, an ninh tốt.&lt;/p&gt;\r\n&lt;p&gt;Dịch vụ: Điện: 4k/số.&lt;/p&gt;\r\n&lt;p&gt;Nước: 100k/ người.&lt;/p&gt;\r\n&lt;p&gt;Mạng intenet: Miễn Ph&iacute;.&lt;/p&gt;', 4, 1),
(18, 'Số 14 Phúc Diễn - Cầu Diễn - Từ Liêm - Hà Nội', 'pd35.png', 2495000, 1248000, 0, 43, 'Nam', '&lt;p&gt;Ch&iacute;nh chủ em c&oacute; nh&agrave; cc mini mới x&acirc;y mới tinh. Diện t&iacute;ch mỗi ph&ograve;ng: 35m&sup2; tại ng&otilde; 196 Hồ T&ugrave;ng Mậu, nếu đi từ đường hồ T&ugrave;ng Mậu đi v&agrave;o th&igrave; đi v&agrave;o khu chung cư Goldmark City đi khoảng 50m l&agrave; tới.&lt;/p&gt;\r\n&lt;p&gt;Nh&agrave; mới x&acirc;y n&ecirc;n c&oacute; đầy đủ nội thất mới, điều h&ograve;a, n&oacute;ng lạnh, giường, tủ quần &aacute;o, tủ lạnh, m&aacute;y giặt, m&aacute;y sấy, shopha, b&agrave;n bếp tr&ecirc;n dưới c&oacute; h&uacute;t m&ugrave;i đầy đủ, r&egrave;m cửa, mỗi căn hộ đều c&oacute; nhiều cửa sổ, &aacute;nh s&aacute;ng.&lt;/p&gt;\r\n&lt;p&gt;Nh&agrave; gần nhiều trường đại học như ĐH Thương Mại, đại học Quốc Gia, đại học Ngoại Ngữ, đại học Ho&agrave; B&igrave;nh, ra chợ chỉ mấy bước ch&acirc;n, c&aacute;ch trường quốc tế Newton tầm 20m, từ nh&agrave; ra đường quốc lộ cũng rất gần, nh&agrave; &ocirc; t&ocirc; đỗ cửa, thang m&aacute;y tốc độ cao, hệ thống cửa c&oacute; V&acirc;n tay, camera, bảo vệ trực 24/7.&lt;/p&gt;', 4, 8),
(19, 'Số 69 ngõ 68 Phú Diễn - Từ Liêm - Hà Nội', 'pd2.png', 2595000, 0, 0, 35, 'Nam', '&lt;p&gt;Ch&iacute;nh chủ em c&oacute; nh&agrave; cc mini mới x&acirc;y mới tinh. Diện t&iacute;ch mỗi ph&ograve;ng: 35m&sup2; tại ng&otilde; 196 Hồ T&ugrave;ng Mậu, nếu đi từ đường hồ T&ugrave;ng Mậu đi v&agrave;o th&igrave; đi v&agrave;o khu chung cư Goldmark City đi khoảng 50m l&agrave; tới.&lt;/p&gt;\r\n&lt;p&gt;Nh&agrave; mới x&acirc;y n&ecirc;n c&oacute; đầy đủ nội thất mới, điều h&ograve;a, n&oacute;ng lạnh, giường, tủ quần &aacute;o, tủ lạnh, m&aacute;y giặt, m&aacute;y sấy, shopha, b&agrave;n bếp tr&ecirc;n dưới c&oacute; h&uacute;t m&ugrave;i đầy đủ, r&egrave;m cửa, mỗi căn hộ đều c&oacute; nhiều cửa sổ, &aacute;nh s&aacute;ng.&lt;/p&gt;\r\n&lt;p&gt;Nh&agrave; gần nhiều trường đại học như ĐH Thương Mại, đại học Quốc Gia, đại học Ngoại Ngữ, đại học Ho&agrave; B&igrave;nh, ra chợ chỉ mấy bước ch&acirc;n, c&aacute;ch trường quốc tế Newton tầm 20m, từ nh&agrave; ra đường quốc lộ cũng rất gần, nh&agrave; &ocirc; t&ocirc; đỗ cửa, thang m&aacute;y tốc độ cao, hệ thống cửa c&oacute; V&acirc;n tay, camera, bảo vệ trực 24/7.&lt;/p&gt;', 1, 8),
(21, 'Ngách 173/24/7, Đường Hoàng Hoa Thám, Phường Ngọc Hà, Ba Đình, Hà Nội', 'pd81.png', 2800000, 0, 0, 77, 'Nữ', '&lt;p&gt;Địa chỉ: Ng&aacute;ch 173/24/7 Ho&agrave;ng Hoa Th&aacute;m, Ba Đ&igrave;nh, H&agrave; Nội -&lt;/p&gt; &lt;p&gt;Nh&agrave; mới x&acirc;y.&lt;/p&gt;\r\n&lt;p&gt;Ph&ograve;ng Studio.&lt;/p&gt;\r\n&lt;p&gt;Thang m&aacute;y.&lt;/p&gt;\r\n&lt;p&gt;Diện t&iacute;ch: 30m&sup2;.&lt;/p&gt;\r\n&lt;p&gt;Nội thất: Điều ho&agrave;, n&oacute;ng lạnh, giường tủ, m&aacute;y giặt, bếp, tủ lạnh.&lt;/p&gt;\r\n&lt;p&gt;Tiện &iacute;ch: Cổng kh&oacute;a v&acirc;n tay giờ giấc thoải m&aacute;i, c&oacute; nh&agrave; để xe, gần chợ, si&ecirc;u thị.&lt;/p&gt;\r\n&lt;p&gt;Gi&aacute; dịch vụ:&lt;/p&gt;\r\n&lt;p&gt;Điện: 3,8k/số.&lt;/p&gt;\r\n&lt;p&gt;Nước: 28k/khối.&lt;/p&gt;\r\n&lt;p&gt;Internet: 50k/người.&lt;/p&gt;\r\n&lt;p&gt;Thang m&aacute;y: 50k/người.&lt;/p&gt;\r\n&lt;p&gt;Vệ sinh: 50k/người.&lt;/p&gt;', 1, 1),
(22, 'Phố Phùng Hưng, Phường Phúc La, Hà Đông, Hà Nội', 'pd34.png', 2799000, 1679400, 0, 92, 'Nữ', '&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.&lt;/p&gt;', 2, 9),
(23, 'Số 14 Đường Yên Phụ, Phường Yên Phụ, Tây Hồ, Hà Nội', 'pd43.png', 2000000, 1600000, 0, 41, 'Unisex', '&lt;p&gt;Ch&iacute;nh chủ cho thu&ecirc; ph&ograve;ng trọ kh&eacute;p k&iacute;n tại Y&ecirc;n Phụ - T&acirc;y Hồ - H&agrave; Nội.&lt;/p&gt;\r\n&lt;p&gt;Ph&ograve;ng gần 30m&sup2; kh&eacute;p k&iacute;n đầy đủ tiện nghi điều ho&agrave;, n&oacute;ng lạnh, giường tủ quần &aacute;o, bếp nấu ăn...&lt;/p&gt;\r\n&lt;p&gt;- Nh&agrave; c&aacute;ch đường Y&ecirc;n Phụ 20m, ng&otilde; th&ocirc;ng sang phố Y&ecirc;n Hoa gi&aacute;p Hồ T&acirc;y tho&aacute;ng m&aacute;t lộng gi&oacute;.&lt;/p&gt;\r\n&lt;p&gt;- Gi&aacute; cho thu&ecirc; 3.5tr/ph&ograve;ng.&lt;/p&gt;\r\n&lt;p&gt;Thanh to&aacute;n th&aacute;ng 1.&lt;/p&gt;', 2, 3),
(26, 'Ngõ 32, Đường Đỗ Đức Dục, Phường Mễ Trì, Nam Từ Liêm, Hà Nội', 'pd36.png', 1295000, 647500, 0, 6, 'Trẻ Em', '&lt;p&gt;Ch&iacute;nh chủ em c&oacute; ph&ograve;ng diện t&iacute;ch 35m&sup2; full đồ, nh&agrave; mới x&acirc;y, đồ mới tinh ng&otilde; 32 Đỗ Đức dục, Nam từ li&ecirc;m, đối diện kh&aacute;ch sạn Marriot, trung t&acirc;m hội nghị Quốc gia, đi ra Phạm H&ugrave;ng v&agrave; Keangnam rất gần, c&aacute;ch Trần Duy Hưng chỉ 1,5km.&lt;/p&gt;\r\n&lt;p&gt;Ph&ograve;ng gồm điều h&ograve;a, n&oacute;ng lạnh, giường v&agrave; tủ quần &aacute;o, tủ lạnh v&agrave; m&aacute;y giặt, m&aacute;y sấy, shopha, b&agrave;n l&agrave;m việc.&lt;/p&gt;\r\n&lt;p&gt;Gi&aacute; thu&ecirc; chỉ từ 5,2tr tới 5,5tr/th&aacute;ng.&lt;/p&gt;\r\n&lt;p&gt;Ngo&agrave;i ra c&oacute; th&ecirc;m căn hộ gồm 1 ph&ograve;ng ngủ, 1 ph&ograve;ng kh&aacute;ch. DT: 35m&sup2; - Gi&aacute; cho thu&ecirc; 5.6tr/ th&aacute;ng.&lt;/p&gt;', 4, 8),
(27, 'Số 34 Kiều Mai - Từ Liêm - Hà Nội', 'pd4.png', 1695000, 847500, 0, 13, 'Trẻ Em', '&lt;h1&gt;Ph&ograve;ng Studio.&lt;/h1&gt;\r\n&lt;p&gt;Thang m&aacute;y.&lt;/p&gt;\r\n&lt;p&gt;Diện t&iacute;ch: 30m&sup2;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nội thất: Điều ho&agrave;, n&oacute;ng lạnh, giường tủ, m&aacute;y giặt, bếp, tủ lạnh.\r\nTiện &iacute;ch: Cổng kh&oacute;a v&acirc;n tay giờ giấc thoải m&aacute;i, c&oacute; nh&agrave; để xe, gần chợ, si&ecirc;u thị.&lt;/p&gt;\r\n\r\n&lt;p&gt;Gi&aacute; dịch vụ:&lt;/p&gt;\r\n\r\n&lt;p&gt;Điện: 3,8k/số.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nước: 28k/khối.&lt;/p&gt;\r\n\r\n&lt;p&gt;Internet: 50k/người.&lt;/p&gt;\r\n\r\n&lt;p&gt;Thang m&aacute;y: 50k/người.&lt;/p&gt;\r\n\r\n&lt;p&gt;Vệ sinh: 50k/người.&lt;/p&gt;\r\n', 4, 8),
(28, 'Ngõ 144, Phố Quan Nhân, Phường Nhân Chính, Thanh Xuân, Hà Nội', 'pd2.png', 1329000, 930300, 0, 10, 'Trẻ Em', '&lt;p&gt;- Nh&agrave; 4 tầng x&acirc;y cho thu&ecirc; sạch sẽ, tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;- Gi&aacute;: 1,6tr - 1,8tr - 2tr/th&aacute;ng kh&eacute;p k&iacute;n.&lt;/p&gt;\r\n&lt;p&gt;- DT: 15m&sup2; - 18m&sup2; - 20m&sup2; - 23m&sup2;.&lt;/p&gt;\r\n&lt;p&gt;- C&oacute; kệ bếp nấu, bồn rửa b&aacute;t, sạch sẽ.&lt;/p&gt;\r\n&lt;p&gt;- Điện 3,5 ngh&igrave;n/số. Nước 20 ngh&igrave;n/khối.&lt;/p&gt;', 4, 7),
(29, 'Ngõ 120 Ba Đình, Hà Nội', 'pd1.png', 2100000, 1260000, 0, 18, 'Trẻ Em', '&lt;h1&gt;- Th&ocirc;ng tin ph&ograve;ng:&lt;/h1&gt;\r\n\r\n&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch &lt;/p&gt;&lt;p&gt;h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.&lt;/p&gt;\r\n', 4, 1),
(30, 'Ngõ 193/32, Phố Hồng Tiến, Phường Bồ Đề, Long Biên, Hà Nội', 'pd113.png', 2695000, 1347500, 0, 8, 'Nam', '&lt;p&gt;+ Diện t&iacute;ch: 12 - 18m&sup2;/ph&ograve;ng.&lt;/p&gt;\r\n&lt;p&gt;+ Giường 1,4 x 2m.&lt;/p&gt;\r\n&lt;p&gt;+ Tủ quần &aacute;o.&lt;/p&gt;\r\n&lt;p&gt;+ B&agrave;n trang điểm.&lt;/p&gt;\r\n&lt;p&gt;+ Đệm Everon cao cấp, chăn gối đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Điều h&ograve;a 2 chiều mới tinh.&lt;/p&gt;\r\n&lt;p&gt;+ B&igrave;nh n&oacute;ng lạnh.&lt;/p&gt;\r\n&lt;p&gt;+ Trang thiết bị vệ sinh sang trọng.&lt;/p&gt;\r\n&lt;p&gt;+ Tủ lạnh 550L. (sử dụng chung).&lt;/p&gt;\r\n&lt;p&gt;+ M&aacute;y giặt chung.&lt;/p&gt;\r\n&lt;p&gt;+ Tủ bếp. (chung).&lt;/p&gt;\r\n&lt;h1&gt;- Dịch vụ đi k&egrave;m:&lt;/h1&gt;\r\n&lt;p&gt;+ R&aacute;c + internet + vệ sinh + nước: 200k.&lt;/p&gt;\r\n&lt;p&gt;+ Một ph&ograve;ng: 2 người (tối đa).&lt;/p&gt;\r\n&lt;p&gt;+ Hợp đồng tối thiếu 3 th&aacute;ng.&lt;/p&gt;\r\n&lt;p&gt;+ Đ&oacute;ng cọc: 1 th&aacute;ng.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; chỗ để xe trong nh&agrave;&lt;/p&gt;', 5, 10),
(31, 'Ngõ 193/32, Phố Hồng Tiến, Phường Bồ Đề, Long Biên, Hà Nội', 'pd110.png', 3595000, 1797500, 0, 25, 'Nam', '&lt;p&gt;- Nh&agrave; 4 tầng x&acirc;y cho thu&ecirc; sạch sẽ, tho&aacute;ng m&aacute;t.&lt;p&gt;\r\n&lt;p&gt;- Gi&aacute;: 1,6tr - 1,8tr - 2tr/th&aacute;ng kh&eacute;p k&iacute;n.&lt;p&gt;\r\n&lt;p&gt;- DT: 15m&sup2; - 18m&sup2; - 20m&sup2; - 23m&sup2;.&lt;p&gt;\r\n&lt;p&gt;- C&oacute; kệ bếp nấu, bồn rửa b&aacute;t, sạch sẽ.&lt;p&gt;\r\n&lt;p&gt;- Điện 3,5 ngh&igrave;n/số. Nước 20 ngh&igrave;n/khối.&lt;p&gt;', 5, 10),
(32, 'Ngõ 120, Đường Kim Giang, Phường Kim Giang, Thanh Xuân, Hà Nội', 'pd110.png', 3569000, 2141400, 0, 9, 'Nam', '&lt;p&gt;+ Ph&ograve;ng si&ecirc;u tiện nghi với nội thất hiện đại:&lt;/p&gt;\r\n&lt;p&gt;+ Điều ho&agrave;, n&oacute;ng lạnh, tủ quần &aacute;o, tủ lạnh, h&uacute;t m&ugrave;i, bếp từ, b&agrave;n cafe, b&agrave;n ăn.&lt;/p&gt;\r\n&lt;p&gt;+ C&oacute; g&aacute;c x&eacute;p, nghỉ ngơi ri&ecirc;ng tư.&lt;/p&gt;\r\n&lt;p&gt;+ Kh&ocirc;ng gian bếp tiện &iacute;ch c&oacute; h&uacute;t m&ugrave;i, ban c&ocirc;ng tho&aacute;ng m&aacute;t.&lt;/p&gt;\r\n&lt;p&gt;+ Thang m&aacute;y, m&aacute;y giặt sấy đầy đủ.&lt;/p&gt;\r\n&lt;p&gt;+ Hỗ trợ khi gặp vấn đề 24/24, c&oacute; bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng, bộ phận kỹ thuật chuy&ecirc;n nghiệp.&lt;/p&gt;', 5, 7),
(33, '619, Phố Vũ Tông Phan, Phường Khương Đình, Thanh Xuân, Hà Nội', 'pd10.png', 3569000, 141400, 0, 22, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nTo&agrave; CCMN 21 ph&ograve;ng full ban c&ocirc;ng c&ograve;n duy nhất 1 ph&ograve;ng.\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n        - Gần ngay c&aacute;c trường Đại Học: ĐH Thăng Long, ĐH Khoa Học Tự Nhi&ecirc;n, ĐH KTQD, ĐH Thuỷ Lợi.\r\n\r\n- Thuận tiện di chuyển: Nguyễn Xiển, XaLa, B&ugrave;i Xương Trạch, L&ecirc; Trọng Tấn, Kim Giang, Định C&ocirc;ng.\r\n\r\n- Tất cả c&aacute;c ph&ograve;ng đều c&oacute; full ban c&ocirc;ng cực tho&aacute;ng, đ&oacute;n &aacute;nh s&aacute;ng tự nhi&ecirc;n.\r\n\r\n- Kh&ocirc;ng chung chủ, giờ giấc thoải m&aacute;i.\r\n\r\n- Cổng v&acirc;n tay, thang m&aacute;y, m&aacute;y giặt, giờ giấc thoải m&aacute;i.\r\n\r\n- C&oacute; dịch vụ hotline hỗ trợ nhanh ch&oacute;ng.\r\n\r\n- Hệ thống chữa ch&aacute;y hiện đại, an ninh tuyệt đối.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Đầy đủ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n          &lt;/ul&gt;', 5, 7),
(34, 'Số nhà 22 ngõ 190, Đường Nguyễn Trãi, Phường Thượng Đình, Thanh Xuân, Hà Nội', 'pd9.png', 3479000, 0, 0, 33, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nPh&ograve;ng si&ecirc;u hot ph&ugrave; hợp sinh vi&ecirc;n vip - người đi l&agrave;m đường Nguyễn Tr&atilde;i ngay ga t&agrave;u Thượng Đ&igrave;nh\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n     Ngay ga Thượng Đ&igrave;nh - gần Royal City v&agrave; c&aacute;c trường Đại Học KHTN, XHNV, Đại Nam... Ph&ograve;ng si&ecirc;u hot ph&ugrave; hợp sinh vi&ecirc;n vip - người đi l&agrave;m số nh&agrave; 22 ng&otilde; 190 Nguyễn Tr&atilde;i.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;ĐẦY ĐỦ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;C&oacute; thang m&aacute;y, camera AI an ninh 24/24 Khu vực phơi quần &aacute;o rất rộng, tho&aacute;ng m&aacute;t, c&oacute; m&aacute;y giặt.&lt;/li&gt;\r\n             &lt;li&gt;(Gi&aacute; dịch vụ: Điện 3,5k/ số nước 32k/m3/ Internet 50k/ ph&ograve;ng).&lt;/li&gt;\r\n             &lt;liTo&agrave; nh&agrave; dịch vụ tốt - cộng đồng văn minh.&lt;/li&gt;\r\n &lt;li&gt;C&oacute; m&aacute;y giặt tr&ecirc;n tầng thượng.&lt;/li&gt;\r\n &lt;li&gt; G&aacute;c x&eacute;p rộng r&atilde;i.&lt;/li&gt;\r\n &lt;li&gt; B&agrave;n bếp + chậu rửa + tủ bếp.\r\n&lt;/li&gt;\r\n          &lt;/ul&gt;', 6, 7),
(35, 'Phố Giảng Võ, Phường Giảng Võ, Ba Đình, Hà Nội', 'pd8.png', 1500000, 0, 0, 27, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nCh&iacute;nh chủ cho thu&ecirc; căn hộ dịch vụ.\r\n          &lt;/h3&gt;\r\n        &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nTrống diện t&iacute;ch 70m&sup2;, thiết kế 2 ngủ, 1 vệ sinh gi&aacute; từ 13 triệu/th&aacute;ng..\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n    Địa chỉ: Giảng V&otilde;, nh&agrave; c&oacute; thang m&aacute;y cao cấp, mỗi tầng thiết kế 1 căn hộ diện t&iacute;ch 70m&sup2;, c&oacute; 2 ngủ, 1 vệ sinh, set up đủ đồ chỉ việc v&agrave;o ở.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;ĐẦY ĐỦ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Trống diện t&iacute;ch 60m&sup2;, thiết kế 1 ngủ, kh&eacute;p k&iacute;n c&oacute; Ban c&ocirc;ng view tho&aacute;ng.&lt;/li&gt;\r\n             &lt;li&gt;Nước: 100k/ người.&lt;/li&gt;\r\n             &lt;li&gt;Dịch vụ: Điện: 4k/số.&lt;/li&gt;\r\n             &lt;li&gt;Mạng intenet: Miễn Ph&iacute;.&lt;/li&gt;\r\n          &lt;/ul&gt;', 6, 1),
(36, ' Số 10 ngõ 162, Đường Khương Đình, Phường Hạ Đình, Thanh Xuân, Hà Nội', 'pd7.png', 4600000, 0, 0, 52, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nCh&iacute;nh chủ cho thu&ecirc; CCMN PKD tại số 10 ng&otilde; 162 đường Khương Đ&igrave;nh, Hạ Đ&igrave;nh, Thanh Xu&acirc;n, HN.\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n    Diện t&iacute;ch 70m&sup2; gồm 02 ngủ, 01 kh&aacute;ch v&agrave; 01 WC. 01 Bếp, nội thất cơ bản.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Kiểm so&aacute;t tốt hơn&lt;/h3&gt;\r\n          &lt;p&gt;\r\n   Vị tr&iacute; thuận tiện, PCCC v&agrave; an ninh đảm bảo, cammera 24/24 cửa v&acirc;n tay, thang m&aacute;y. Khu vực để xe ri&ecirc;ng biệt. View đẹp.\r\n        &lt;/p&gt;\r\n        &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;ĐẦY DỦ&lt;/h3&gt;\r\n        \r\n         \r\n          ', 6, 7),
(37, 'Đường Yên Phụ, Phường Yên Phụ, Tây Hồ, Hà Nội', 'pd6.png', 3600000, 550000, 0, 1, 'Nữ', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nCh&iacute;nh chủ cho thu&ecirc; ph&ograve;ng trọ gần 30m2 full đồ phố Y&ecirc;n Phụ - T&acirc;y Hồ gi&aacute; 3.5tr/ph&ograve;ng\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nPh&ograve;ng gần 30m&sup2; kh&eacute;p k&iacute;n đầy đủ tiện nghi điều ho&agrave;, n&oacute;ng lạnh, giường tủ quần &aacute;o, bếp nấu ăn...\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;ĐẦY ĐỦ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Nh&agrave; c&aacute;ch đường Y&ecirc;n Phụ 20m, ng&otilde; th&ocirc;ng sang phố Y&ecirc;n Hoa gi&aacute;p Hồ T&acirc;y tho&aacute;ng m&aacute;t lộng gi&oacute;.&lt;/li&gt;\r\n             &lt;li&gt;Gi&aacute; cho thu&ecirc; 3.5tr/ph&ograve;ng.&lt;/li&gt;\r\n          &lt;/ul&gt;', 2, 3),
(38, 'Số nhà 25 ngõ 116, Đường Miếu Đầm, Phường Mễ Trì, Nam Từ Liêm, Hà Nội', 'pd5.png', 3595000, 1116500, 0, 2, 'NỮ', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nCho thu&ecirc; ph&ograve;ng tuyệt đẹp, đầy đủ tiện nghi, thuận tiện giao th&ocirc;ng, ng&otilde; 116 Miếu Đầm\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nCh&iacute;nh chủ em c&oacute; ph&ograve;ng tại số nh&agrave; 25 ng&otilde; 116 Miếu Đầm, diện t&iacute;ch 35m&sup2; thiết kế theo ti&ecirc;u chuẩn kh&aacute;ch sạn, cửa gỗ lim, kh&oacute;a cửa ph&ograve;ng mở theo m&atilde; số, ph&ograve;ng c&oacute; cửa sổ, ban c&ocirc;ng c&oacute; nhiều &aacute;nh s&aacute;ng v&agrave; tho&aacute;ng.\r\nNh&agrave; đầy đủ tiện nghi điều h&ograve;a, b&igrave;nh n&oacute;ng lạnh, giường v&agrave; tủ quần &aacute;o, b&agrave;n ghế sofa, tủ lạnh, tủ bếp tr&ecirc;n dưới, bếp từ, m&aacute;y giặt v&agrave; m&aacute;y sấy, thang m&aacute;y tốc độ cao, kh&oacute;a V&acirc;n tay đi lại tự do.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;ĐẦY ĐỦ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Nh&agrave; gần chợ, gần đường lớn, chỉ mấy bước ch&acirc;n ra Phạm H&ugrave;ng, Keang Nam, gần nhiều trường mầm non, gần nhiều khi vui chơi giải tr&iacute; ăn uống..&lt;/li&gt;\r\n             &lt;li&gt;Ngo&agrave;i ra c&oacute; căn hộ 1 ngủ 1 kh&aacute;ch diện t&iacute;ch 40m&sup2;, full đồ gi&aacute; l&agrave;: 5,5tr /th&aacute;ng.&lt;/li&gt;\r\n             &lt;li&gt;Gi&aacute; thu&ecirc; chỉ từ 5,2tr tới 5,5tr/ th&aacute;ng t&ugrave;y căn&lt;/li&gt;\r\n\r\n          &lt;/ul&gt;', 2, 8),
(39, 'Phòng mới, đẹp, rẻ - full đồ ngõ 199 Hồ Tùng Mậu', 'pd4.png', 3695000, 1186500, 1, 1, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nĐặc điểm bất động sản\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nKhu vực phố Hồ T&ugrave;ng Mậu, Nguyễn Đổng Chi, P Cầu Diễn. Rất thuận lợi giao th&ocirc;ng, đường, trường, trạm, chợ d&acirc;n sinh\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;ĐẦY ĐỦ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Diện t&iacute;ch ph&ograve;ng 25 - 35m&sup2;. Full đồ. Kh&eacute;p k&iacute;n.&lt;/li&gt;\r\n             &lt;li&gt;Nh&agrave; mới, đồ mới, thang m&aacute;y xịn s&ograve;, an ninh, văn minh, c&oacute; m&aacute;y giặt, m&aacute;y sấy. &lt;/li&gt;\r\n             &lt;li&gt;Gi&aacute; dao động từ 4, x/ ph&ograve;ng&lt;/li&gt;\r\n          &lt;/ul&gt;', 2, 8),
(40, 'Căn hộ dịch vụ cao cấp, có ban công, full đồ, nhà mới xây xong tại 1081 Hồng Hà Hoàn Kiếm', 'pd3.png', 5700000, 945350, 1, 5, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nCho thu&ecirc; căn hộ dịch vụ cao cấp, c&oacute; ban c&ocirc;ng, full đồ, nh&agrave; mới x&acirc;y xong tại Sunny Apartment Hồng H&agrave; Apartment theo ng&agrave;y, th&aacute;ng:\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nVị tr&iacute; trung t&acirc;m, 10 ph&uacute;t đi bộ ra hồ Ho&agrave;n Kiếm, xung quanh t&ograve;a nh&agrave; căn g&oacute;c c&oacute; nhiều tiện &iacute;ch xung quanh.\r\n1 nh&agrave; tắm kh&eacute;p k&iacute;n.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Đầy đủ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Bếp, ph&ograve;ng ăn rộng + chăn, ga, gối, đệm. &lt;/li&gt;\r\n             &lt;li&gt;Giường, đệm, quạt th&ocirc;ng gi&oacute;.&lt;/li&gt;\r\n             &lt;li&gt;Tivi, tủ lạnh.\r\nTủ bếp, m&aacute;y h&uacute;t m&ugrave;i, bếp từ.\r\nVệ sinh kh&eacute;p k&iacute;n, c&oacute; n&oacute;ng lạnh, thiết bị cao cấp.\r\nBộ sofa. Bộ b&agrave;n ghế l&agrave;m việc, t&aacute;p đầu giường.\r\nBộ b&agrave;n ghế trang điểm..&lt;/li&gt;\r\n          &lt;/ul&gt;', 6, 2),
(41, 'Căn hộ số 21 Cầu Đất, Hoàn Kiếm, Hà Nội', 'pd2.png', 2000000, 0, 0, 4, 'Nam', 'Cho thu&ecirc; căn hộ số 21 Cầu Đất, Ho&agrave;n Kiếm, H&agrave; Nội.\r\n- Tầng 2, 3, 4: DTMB 40m&sup2;, mặt tiền 5m, ph&ograve;ng vệ sinh kh&eacute;p k&iacute;n, điện nước hộ gia đ&igrave;nh, an ninh tốt, giao th&ocirc;ng thuận tiện, đầy đủ trang thiết bị: N&oacute;ng lạnh, wifi, điều h&ograve;a, giường, tủ,...\r\n- Nh&agrave; mặt đường đi lại thuận tiện, gần chợ, c&aacute;ch hồ gươm 1 km.\r\n- Tầng 2 gi&aacute; 5 triệu/th&aacute;ng, tầng 3 gi&aacute; 4.5 triệu/th&aacute;ng, tầng 4 gi&aacute; 3,5 triệu/th&aacute;ng.', 4, 2),
(42, '68 P. Hàng Đào, Hàng Đào, Hoàn Kiếm, Hà Nội, Việt Nam', 'pd1.png', 4200000, 0, 0, 5, 'Nữ', 'Ch&iacute;nh chủ cho thu&ecirc; c&aacute;c căn hộ chung cư mini mới x&acirc;y đầy đủ tiện nghi v&agrave; full đồ tại Hồng H&agrave;, Ho&agrave;n Kiếm. To&agrave; nh&agrave; kh&ocirc;ng chung chủ, to&agrave; nh&agrave; c&oacute; camera v&agrave; đi lại tự do bằng kho&aacute; v&acirc;n tay, được thiết kế hiện đại v&agrave; trang bị đầy đủ, giường, tủ quần &aacute;o, n&oacute;ng lạnh, điều ho&agrave;, tủ lạnh, c&oacute; b&agrave;n bếp v&agrave; chậu rửa b&aacute;t, m&aacute;y giặt chung miễn ph&iacute;, ph&ograve;ng n&agrave;o cũng đầy đủ &aacute;nh s&aacute;ng v&agrave; tho&aacute;ng.\r\nDiện t&iacute;ch mỗi ph&ograve;ng 22m&sup2;.\r\nGi&aacute; thu&ecirc; từ 4,2tr tới 4,5tr/th&aacute;ng.\r\nVị tr&iacute; trung t&acirc;m bậc nhất H&agrave; Nội c&aacute;ch phố ho&agrave;n kiếm 800m, c&aacute;ch phố T&acirc;y B&ugrave;i viện chỉ 500m, gần c&aacute;c chợ lớn, trung t&acirc;m thương mại, si&ecirc;u thị, trường học, đường s&aacute; đi lại rất thuận tiện.', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id_brand` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`id_brand`, `brand_name`, `logo`) VALUES
(1, 'Ba Đình', 'badinh.png'),
(2, 'Hoàn Kiếm', 'hoankiem.png'),
(3, 'Hồ Tây', 'hotay.png'),
(4, 'Cầu GIấy', 'caugiay.png'),
(5, 'Đống Đa', 'dongda.png'),
(6, 'Hai Bà Trưng', 'haibatrung.png'),
(7, 'Thanh Xuân', 'thanhxuan.png'),
(8, 'Từ Liêm', 'tuliem.png'),
(9, 'Hà Đông', 'hadong.png'),
(10, 'Long Biên', 'longbien.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id_pro_color` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`id_pro_color`, `color`, `id_pro`) VALUES
(1, 'Phantom', 1),
(2, 'FLATPEWTER', 2),
(3, 'BURGUNDY', 3),
(4, '924', 4),
(5, '466', 5),
(6, 'GREY', 6),
(7, 'BLACK', 7),
(8, 'rycm', 8),
(9, 'BLACK/BLAC', 9),
(10, '121', 10),
(11, 'LGE', 11),
(12, 'GBMS', 12),
(13, 'BLACK/WHIT', 13),
(14, 'VH1', 14),
(15, 'CP2', 15),
(16, 'CN2', 16),
(17, 'CLOUD WHITE / COLLEGIATE NAVY / LIGHT BLUE', 17),
(18, 'EA', 18),
(19, 'BLISS ORAN', 21),
(20, 'WHITE', 19),
(21, 'VAPOROUS G', 22),
(22, 'MINERAL CL', 23),
(25, 'JM2', 26),
(26, 'HH1', 27),
(27, 'MIDNIGHT N', 28),
(28, 'WHITE', 29),
(29, 'BLACK WHITE BLACK', 30),
(30, 'HENDRIX WHITE ELECTRIC TANGERINE', 31),
(31, 'BLACK/WHITE', 32),
(32, 'LT PHOTO B', 33),
(33, 'WHITE/BRIG', 34),
(34, 'RED', 35),
(35, '39', 35),
(36, 'BLACK/IRON', 36),
(37, 'BLACK', 37),
(38, 'GH', 38),
(39, 'PN', 39),
(40, '775', 40),
(41, 'BLACK WHITE', 41),
(42, '44', 41),
(43, 'MONUMENT WILD', 42);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail_img`
--

CREATE TABLE `product_detail_img` (
  `id_pro_detail_img` int(11) NOT NULL,
  `pro_detail_image` varchar(255) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_detail_img`
--

INSERT INTO `product_detail_img` (`id_pro_detail_img`, `pro_detail_image`, `id_pro`) VALUES
(4, 'pd115.png', 1),
(6, 'pd113.png', 1),
(8, 'pd113.png', 1),
(10, 'pd115.png', 7),
(11, 'pd113.png', 7),
(12, 'pd110.png', 7),
(17, 'pd115.png', 21),
(18, 'pd114.png', 21),
(23, 'pd110.png', 19),
(29, 'pd113.png', 19),
(30, 'pd115.png', 19),
(31, 'pd110.png', 21),
(33, 'pd110.png', 21),
(34, 'pd113.png', 21),
(35, 'pd114.png', 7),
(37, 'pd113.png', 23),
(38, 'pd115.png', 23),
(39, 'pd110.png', 23),
(40, 'pd114.png', 23),
(41, 'pd113.png', 22),
(42, 'pd115.png', 22),
(43, 'pd110.png', 22),
(44, 'pd115.png', 22),
(45, 'pd113.png', 22),
(46, 'pd113.png', 19),
(47, 'pd114.png', 19),
(48, 'pd110.png', 18),
(49, 'pd114.png', 18),
(50, 'pd110.png', 18),
(51, 'pd115.png', 18),
(52, 'pd114.png', 18),
(53, 'pd113.png', 17),
(54, 'pd115.png', 17),
(55, 'pd114.png', 17),
(56, 'pd110.png', 17),
(57, 'pd114.png', 17),
(58, 'pd110.png', 16),
(59, 'pd110.png', 16),
(60, 'pd113.png', 16),
(61, 'pd114.png', 16),
(62, 'pd115.png', 16),
(63, 'pd115.png', 15),
(64, 'pd114.png', 15),
(65, 'pd113.png', 15),
(66, 'pd110.png', 15),
(67, 'pd113.png', 15),
(68, 'pd110.png', 14),
(69, 'pd114.png', 14),
(70, 'pd115.png', 14),
(71, 'pd113.png', 14),
(72, 'pd110.png', 14),
(73, 'pd114.png', 13),
(74, 'pd113.png', 13),
(75, 'pd110.png', 13),
(76, 'pd113.png', 13),
(77, 'pd115.png', 13),
(78, 'pd110.png', 12),
(79, 'pd113.png', 12),
(80, 'pd114.png', 12),
(81, 'pd115.png', 12),
(82, 'pd110.png', 12),
(83, 'pd114.png', 12),
(84, 'pd114.png', 11),
(85, 'pd113.png', 11),
(86, 'pd115.png', 11),
(87, 'pd110.png', 11),
(88, 'pd113.png', 11),
(89, 'pd114.png', 11),
(90, 'pd114.png', 10),
(91, 'pd113.png', 10),
(92, 'pd110.png', 10),
(93, 'pd115.png', 10),
(94, 'pd113.png', 10),
(95, 'pd114.png', 10),
(96, 'pd114.png', 9),
(97, 'pd110.png', 9),
(98, 'pd114.png', 9),
(99, 'pd115.png', 9),
(100, 'pd113.png', 9),
(101, 'pd113.png', 8),
(102, 'pd110.png', 8),
(103, 'pd115.png', 8),
(104, 'pd114.png', 8),
(105, 'pd110.png', 8),
(106, 'pd114.png', 8),
(107, 'pd114.png', 7),
(108, 'pd110.png', 6),
(109, 'pd114.png', 6),
(110, 'pd115.png', 6),
(111, 'pd113.png', 6),
(113, 'pd110.png', 6),
(114, 'pd114.png', 5),
(115, 'pd115.png', 5),
(116, 'pd110.png', 5),
(117, 'pd115.png', 5),
(118, 'pd110.png', 5),
(119, 'pd110.png', 4),
(120, 'pd115.png', 4),
(121, 'pd114.png', 4),
(122, 'pd113.png', 4),
(123, 'pd110.png', 4),
(124, 'pd113.png', 2),
(125, 'pd114.png', 2),
(126, 'pd115.png', 2),
(127, 'pd110.png', 2),
(128, 'pd113.png', 2),
(129, 'pd114.png', 1),
(130, 'pd113.png', 1),
(131, 'pd115.png', 26),
(132, 'pd114.png', 26),
(133, 'pd113.png', 26),
(134, 'pd110.png', 26),
(135, 'pd114.png', 26),
(136, 'pd110.png', 27),
(137, 'pd113.png', 27),
(138, 'pd114.png', 27),
(139, 'pd115.png', 27),
(140, 'pd113.png', 27),
(141, 'pd115.png', 28),
(142, 'pd114.png', 28),
(143, 'pd113.png', 28),
(144, 'pd110.png', 28),
(145, 'pd115.png', 28),
(146, 'pd113.png', 29),
(147, 'pd113.png', 29),
(148, 'pd114.png', 29),
(149, 'pd113.png', 29),
(150, 'pd110.png', 29),
(151, 'pd113.png', 30),
(152, 'pd114.png', 30),
(153, 'pd115.png', 30),
(154, 'pd110.png', 30),
(155, 'pd110.png', 30),
(156, 'pd114.png', 31),
(157, 'pd115.png', 31),
(158, 'pd113.png', 31),
(159, 'pd110.png', 31),
(160, 'pd114.png', 31),
(161, 'pd115.png', 32),
(162, 'pd114.png', 32),
(163, 'pd113.png', 32),
(164, 'pd110.png', 32),
(165, 'pd114.png', 32),
(166, 'pd110.png', 33),
(167, 'pd113.png', 33),
(168, 'pd114.png', 33),
(169, 'pd115.png', 33),
(170, 'pd113.png', 33),
(171, 'pd115.png', 34),
(172, 'pd114.png', 34),
(173, 'pd113.png', 34),
(174, 'pd110.png', 34),
(175, 'pd114.png', 34),
(176, 'pd115.png', 35),
(177, 'pd114.png', 35),
(178, 'pd113.png', 35),
(179, 'pd110.png', 35),
(180, 'pd114.png', 35),
(181, 'pd113.png', 36),
(182, 'pd115.png', 36),
(183, 'pd114.png', 36),
(184, 'pd113.png', 36),
(185, 'pd110.png', 36),
(186, 'pd114.png', 37),
(187, 'pd113.png', 37),
(188, 'pd110.png', 37),
(189, 'pd115.png', 37),
(190, 'pd113.png', 37),
(191, 'pd115.png', 38),
(192, 'pd114.png', 38),
(193, 'pd113.png', 38),
(194, 'pd114.png', 38),
(195, 'pd113.png', 38),
(196, 'pd114.png', 39),
(197, 'pd113.png', 39),
(198, 'pd115.png', 39),
(199, 'pd114.png', 39),
(200, 'pd113.png', 39),
(201, 'pd113.png', 40),
(202, 'pd114.png', 40),
(203, 'pd115.png', 40),
(204, 'pd113.png', 40),
(205, 'pd115.png', 40),
(206, 'pd115.png', 41),
(207, 'pd113.png', 41),
(208, 'pd113.png', 41),
(209, 'pd114.png', 41),
(210, 'pd113.png', 41),
(211, 'pd114.png', 41),
(212, 'pd113.png', 42),
(213, 'pd114.png', 42),
(214, 'pd115.png', 42),
(215, 'pd114.png', 42),
(216, 'pd115.png', 42),
(217, 'pd115.png', 42);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id_pro_size` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id_pro_size`, `size`, `id_pro`) VALUES
(1, '14x16', 1),
(2, '16x18', 1),
(3, '18x20', 1),
(4, '14x16', 2),
(5, '16x18', 2),
(6, '18x20', 2),
(7, '20x20', 2),
(8, '36', 3),
(9, '37', 3),
(10, '38', 3),
(11, '14x16', 4),
(12, '16x18', 4),
(13, '18x20', 4),
(14, '20x20', 4),
(15, '20x22', 4),
(16, '20x25', 4),
(17, '14x16', 5),
(18, '16x18', 5),
(19, '18x20', 5),
(20, '20x20', 5),
(21, '20x22', 5),
(22, '14x16', 6),
(23, '16x18', 6),
(24, '18x20', 6),
(25, '20x20', 6),
(26, '14x16', 7),
(27, '16x18', 7),
(28, '18x20', 7),
(29, '20x20', 7),
(30, '14x16', 11),
(32, '14x16', 8),
(33, '16x18', 8),
(34, '18x20', 8),
(35, '14x16', 9),
(36, '16x18', 9),
(37, '18x20', 9),
(38, '20x20', 9),
(39, '20x22', 9),
(40, '20x25', 9),
(41, '14x16', 10),
(42, '16x18', 10),
(43, '18x20', 10),
(44, '20x20', 10),
(45, '20x22', 10),
(46, '16x18', 11),
(47, '18x20', 11),
(48, '20x20', 11),
(49, '20x22', 11),
(50, '14x16', 12),
(51, '16x18', 12),
(52, '18x20', 12),
(53, '20x22', 12),
(55, '20x20', 13),
(56, '20x22', 13),
(57, '20x25', 13),
(58, '14x16', 13),
(59, '16x18', 13),
(60, '18x20', 13),
(63, '14x16', 14),
(64, '16x18', 14),
(65, '18x20', 14),
(66, '20x20', 14),
(67, '14x16', 15),
(68, '16x18', 15),
(69, '18x20', 15),
(70, '20x20', 15),
(71, '14x16', 16),
(72, '16x18', 16),
(73, '14x16', 17),
(74, '16x18', 17),
(75, '18x20', 17),
(76, '20x20', 17),
(77, '20x22', 17),
(78, '14x16', 18),
(79, '16x18', 18),
(80, '18x20', 18),
(81, '14x16', 21),
(82, '16x18', 21),
(83, '18x20', 21),
(84, '20x20', 21),
(85, '14x16', 19),
(86, '16x18', 19),
(88, '18x20', 19),
(89, '14x16', 22),
(90, '16x18', 22),
(92, '18x20', 22),
(94, '20x20', 22),
(95, '20x22', 22),
(96, '20x25', 22),
(97, '14x16', 23),
(98, '16x18', 23),
(99, '18x20', 23),
(100, '20x20', 23),
(101, '20x22', 23),
(102, '20x25', 23),
(103, '25x30', 23),
(104, '30x35', 23),
(106, '18x20', 26),
(107, '16x18', 26),
(108, '20x20', 26),
(109, '20x22', 26),
(110, '14x16', 26),
(111, '14x16', 27),
(112, '16x18', 27),
(113, '18x20', 27),
(114, '20x20', 27),
(115, '20x22', 27),
(116, '20x25', 27),
(117, '25x30', 27),
(118, '30x35', 27),
(121, '14x16', 28),
(122, '18x20', 28),
(123, '20x20', 28),
(124, '20x22', 28),
(125, '20x25', 28),
(126, '25x30', 28),
(127, '16x18', 28),
(128, '14x16', 29),
(129, '16x18', 29),
(130, '18x20', 29),
(131, '20x20', 29),
(132, '20x22', 29),
(133, '20x25', 29),
(134, '25x30', 29),
(135, '14x16', 30),
(136, '16x18', 30),
(137, '18x20', 30),
(138, '20x20', 30),
(139, '20x22', 30),
(140, '20x25', 30),
(141, '25x30', 30),
(142, '30x25', 30),
(144, '14x16', 31),
(145, '16x18', 31),
(146, '18x20', 31),
(147, '20x20', 31),
(148, '20x22', 31),
(149, '20x25', 31),
(150, '25x30', 31),
(151, '30x35', 31),
(155, '18x20', 32),
(156, '16x18', 32),
(157, '14x16', 32),
(158, '20x20', 32),
(159, '20x22', 32),
(160, '20x25', 32),
(161, '25x30', 32),
(162, '14x16', 33),
(163, '16x18', 33),
(164, '18x20', 33),
(165, '20x20', 33),
(166, '20x22', 33),
(167, '20x25', 33),
(169, '25x30', 33),
(170, '30x35', 33),
(171, '14x16', 34),
(172, '16x18', 34),
(173, '18x20', 34),
(174, '20x20', 34),
(175, '20x22', 34),
(176, '20x25', 34),
(177, '25x30', 34),
(178, '30x35', 34),
(180, '14x16', 35),
(181, '16x18', 35),
(182, '18x20', 35),
(183, '20x20', 35),
(184, '20x22', 35),
(185, '20x25', 35),
(186, '25x30', 35),
(187, '30x35', 35),
(190, '14x16', 36),
(191, '16x18', 36),
(192, '18x20', 36),
(193, '20x20', 36),
(194, '20x22', 36),
(195, '20x25', 36),
(196, '25x30', 36),
(197, '30x35', 36),
(198, '16x18', 37),
(199, '18x20', 37),
(200, '20x20', 37),
(201, '20x22', 37),
(202, '20x25', 37),
(203, '14x16', 37),
(204, '14x16', 38),
(205, '16x18', 38),
(206, '18x20', 38),
(207, '20x20', 38),
(208, '20x22', 38),
(209, '14x16', 39),
(210, '16x18', 39),
(211, '18x20', 39),
(212, '20x20', 39),
(213, '20x22', 39),
(214, '20x25', 39),
(215, '25x30', 39),
(216, '14x16', 40),
(217, '16x18', 40),
(218, '18x20', 40),
(219, '20x20', 40),
(220, '20x22', 40),
(221, '20x25', 40),
(222, '14x16', 41),
(223, '16x18', 41),
(224, '18x20', 41),
(225, '20x20', 41),
(226, '20x22', 41),
(227, '20x25', 41),
(228, '25x30', 41),
(229, '30x35', 41),
(230, '20x20', 42),
(231, '16x18', 42),
(232, '18x20', 42),
(233, '14x16', 42),
(234, '20x22', 42),
(235, '20x25', 42),
(236, '25x30', 42),
(237, '30x35', 42);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `image`, `name`, `phone`, `email`, `address`, `role`) VALUES
('admin', '123456', '1.jpg', 'Đàm Quốc Dân', '0368966992', 'admin@gmail.com', 'Tiến Bào, Phù Khê, Từ Sơn, Bắc Ninh', 1),
('damquocdan', '123456', NULL, 'Đàm Quốc Dân', NULL, 'damquocdan@gmail.com', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vnpay`
--

CREATE TABLE `vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(50) NOT NULL,
  `vnp_bankcode` varchar(50) NOT NULL,
  `vnp_banktranno` varchar(50) NOT NULL,
  `vnp_cardtype` varchar(50) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(50) NOT NULL,
  `vnp_transactionno` varchar(50) NOT NULL,
  `id_bill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vnpay`
--

INSERT INTO `vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_transactionno`, `id_bill`) VALUES
(143, '775740000', 'NCB', 'VNP13904671', 'ATM', 'Thanh toán đơn hàng đặt tại website', '20221215052312', '13904671', 'SHOELIKE14858');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `order_total`
--
ALTER TABLE `order_total`
  ADD PRIMARY KEY (`id_order_total`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id_pro_color`);

--
-- Indexes for table `product_detail_img`
--
ALTER TABLE `product_detail_img`
  ADD PRIMARY KEY (`id_pro_detail_img`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id_pro_size`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `momo`
--
ALTER TABLE `momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `order_total`
--
ALTER TABLE `order_total`
  MODIFY `id_order_total` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id_pro_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_detail_img`
--
ALTER TABLE `product_detail_img`
  MODIFY `id_pro_detail_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id_pro_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
