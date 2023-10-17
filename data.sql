-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 03:32 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoelike_pro1014`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `cate_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cate`, `cate_name`) VALUES
(1, 'Sản phẩm mới'),
(2, 'Giày thời trang'),
(3, 'Giày chạy bộ'),
(4, 'Giày luyện tập'),
(5, 'Giày bóng rổ'),
(6, 'Giày bóng đá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `rate` tinyint(5) DEFAULT NULL,
  `id_pro` int(11) NOT NULL,
  `id_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `content`, `date`, `rate`, `id_pro`, `id_user`) VALUES
(13, 'Giày đẹp lắm ah :V', '2022-12-03', 5, 23, 'admin2'),
(14, 'Giày đẹp 4 sao :))', '2022-12-03', 4, 7, 'admin'),
(15, 'Hello :3', '2022-12-03', 3, 7, 'admin'),
(16, ':D :)', '2022-12-04', 5, 10, 'admin'),
(17, '....', '2022-12-06', 5, 7, 'admin'),
(19, 'Nice :))', '2022-12-15', 5, 21, 'admin2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_info` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_bill` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `momo`
--

INSERT INTO `momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `id_bill`) VALUES
(10, 'MOMOBKUN20180529', 0, '2447500', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', 'SHOELIKE32597');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_bill` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total_order` int(11) NOT NULL DEFAULT 0,
  `payment` tinyint(1) NOT NULL DEFAULT 1,
  `id_user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `order_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id_order`, `id_bill`, `total_order`, `payment`, `id_user`, `date`, `status`, `note`, `order_name`, `order_address`, `order_email`, `order_phone`) VALUES
(206, 'SHOELIKE75000', 3195500, 1, 'admin', '15/12/2022', 0, '', 'Admin Công Lê', 'V3 Văn Phú, Hà Đông, Hà Nội', 'congltph27602@fpt.edu.vn', '0965973668'),
(207, 'SHOELIKE14858', 7757400, 3, 'admin', '15/12/2022', 0, 'Giao hàng vào thứ 2 nhé shop :v', 'Admin Công Lê', 'V3 Văn Phú, Hà Đông, Hà Nội', 'congltph27602@fpt.edu.vn', '0965973668'),
(208, 'SHOELIKE45180', 4990000, 2, 'admin2', '15/12/2022', 0, 'Giao nhanh nhé shop ...', 'Lê Công', 'Tổ 8, Khu 1A, Phường Cẩm Trung, Thành Phố Cẩm Phả, Tỉnh Quảng Ninh', 'congldqn888@gmail.com', '0965973667'),
(209, 'SHOELIKE32597', 2447500, 4, 'admin2', '15/12/2022', 0, 'Giao tận nới nhé shop :v :)))', 'Lê Công', 'V3 Victoria Văn Phú, Hà Đông, Hà Nội', 'congldqn888@gmail.com', '0965973664');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_total`
--

CREATE TABLE `order_total` (
  `id_order_total` int(11) NOT NULL,
  `id_order` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_total`
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
(437, '209', 23, 1, 1600000, 'Giày Thời Trang Unisex Converse Chuck 70 Heritage', 'pro-11.webp', 37, 'MINERAL CL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_pro` int(11) NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) DEFAULT 0,
  `special` int(1) NOT NULL DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cate` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_pro`, `pro_name`, `image`, `price`, `price_sale`, `special`, `views`, `gender`, `description`, `id_cate`, `id_brand`) VALUES
(1, 'Giày Chạy Bộ Nữ Nike Air Zoom Pegasus 39', 'pro-1.webp', 3719000, 0, 1, 74, 'Nữ', 'Let the Nike Pegasus 39, a balanced and energised ride for any run, help you ascend to new heights. More lightweight up top than the Pegasus 38 and ideal to wear in any season, it has a supportive sensation to help keep your feet contained, while underfoot cushioning and double Zoom Air units (1 more than the Peg 38) give you an extra pop to your step. Your trusted workhorse with wings is back. Time to fly.', 1, 7),
(2, 'Giày Chạy Bộ Nam Nike Flex Experience Rn 11 Nn', 'pro-2.webp', 2019000, 0, 1, 49, 'Nam', 'Comfortably zen, just like every run should be. With the Nike Experience Run 11 Next Nature, we created a lightweight, clean design that feels as good as it looks. The shoes are supportive in all the right ways with movement so natural, you\'ll swear you\'ve been wearing them for years. Plus, they\'re made from at least 20% recycled content by weight, keeping us on our sustainability journey.', 1, 7),
(4, 'Giày Thời Trang Unisex Fila Rockblunt', 'pro-4.webp', 2395000, 0, 1, 45, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title&quot;&gt;\r\n            GI&Agrave;Y THỜI TRANG UNISEX FILA ROCKBLUNT\r\n          &lt;/h3&gt;\r\n          &lt;img src=&quot;././public/images/fila-desc.webp&quot; alt=&quot;&quot; /&gt;\r\n          &lt;p&gt;\r\n            Sản phẩm thuộc Bộ Sưu Tập Fila Explorer. Phần th&acirc;n gi&agrave;y được\r\n            thiết kế với chất liệu tối ưu h&oacute;a độ nhạy với đường m&ograve;n khi di\r\n            chuyển với logo EXPL, đồng thời cung cấp sự bền bỉ khi hoạt\r\n            động.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Th&ocirc;ng số&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Th&acirc;n tr&ecirc;n: 56.2% tổng hợp / 43.8% dệt may&lt;/li&gt;\r\n            &lt;li&gt;Đế gi&agrave;y: EVA / cao su&lt;/li&gt;\r\n          &lt;/ul&gt;', 1, 4),
(5, 'Giày Thời Trang Unisex Fila Webseeker', 'pro-5.webp', 2395000, 0, 1, 117, 'Unisex', 'Upper：SYN 70.81%+TEX 29.19%\r\nBottom：EVA+RB', 1, 4),
(6, 'Giày Thời Trang Nam Nike Waffle One', 'pro-6.webp', 3099000, 0, 1, 63, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n GI&Agrave;Y THỜI TRANG NAM NIKE FW WAFFLE ONE SE \r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nMang đến một diện mạo mới cho thương hiệu nhượng quyền Waffle, Nike Waffle One c&acirc;n bằng mọi thứ bạn y&ecirc;u th&iacute;ch nhất về d&ograve;ng chạy bộ mang t&iacute;nh di sản của Nike với những cải tiến mới. \r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Ưu điểm sản phẩm &lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Phần upper hỗn hợp với thiết kế lưới xuy&ecirc;n suốt, tăng th&ecirc;m k&iacute;ch thước v&agrave; kết cấu cho gi&agrave;y m&agrave; vẫn mang lại sự th&ocirc;ng tho&aacute;ng cần thiết.&lt;/li&gt;\r\n            &lt;li&gt;Đế giữa xếp chồng k&eacute;p đậm n&eacute;t cổ điển của thương hiệu nhượng quyền Waffle mang lại cho bạn một chuyến đi mềm mại, &ecirc;m &aacute;i.&lt;/li&gt;\r\n            &lt;li&gt;Đế ngo&agrave;i Waffle bằng cao su đ&atilde; được cải tiến với c&aacute;c vấu đ&uacute;c mới để tăng th&ecirc;m khả năng hỗ trợ, lực k&eacute;o v&agrave; độ bền.&lt;/li&gt;\r\n            &lt;li&gt;Cổ gi&agrave;y thấp c&oacute; c&aacute;c đường viền mềm mại để tạo kiểu d&aacute;ng đẹp v&agrave; mang lại cảm gi&aacute;c thoải m&aacute;i.&lt;/li&gt;\r\n          &lt;/ul&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Kh&ocirc;ng nhằm mục đ&iacute;ch sử dụng l&agrave;m Personal Protective Equipment (PPE)&lt;/li&gt;\r\n          &lt;/ul&gt;', 1, 7),
(7, 'Giày Chạy Bộ Nữ Nike Air Zoom Vomero 16', 'pro-7.webp', 4659000, 0, 1, 72, 'Nữ', 'PREMIUM CUSHIONING, RESPONSIVE TRAINING, BUILT FOR THE LONG RUN.\r\nA trusted favorite for your daily training runs, the Nike Air Zoom Vomero 16 provides the intuitive design and durability you expect from this iconic shoe. Midfoot containment combines with a supportive heel for a secure fit. Cushioned, yet responsive foam delivers comfort built for high mileage to help keep you pushing to break your personal goals.', 1, 7),
(8, 'Giày Chạy Bộ Nam Hoka Mach Supersonic', 'product-5.webp', 3599000, 0, 0, 81, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n  GI&Agrave;Y CHẠY BỘ NAM HOKA MACH SUPERSONIC\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nHoka Mach Supersonic l&agrave; đ&ocirc;i gi&agrave;y phong c&aacute;ch với thiết kế đơn giản, mang lại sự thoải m&aacute;i tối ưu cho người sử dụng. Th&acirc;n gi&agrave;y được l&agrave;m từ chất liệu vải đan dệt họa tiết jacquard với phối m&agrave;u bắt mắt tạo điểm nhấn cho trang phục thường ng&agrave;y. Hoka Mach Supersonic c&ograve;n chiếm ưu thế hơn so với c&aacute;c phi&ecirc;n bản tiền nhiệm với lớp đệm EVA v&agrave; cấu tr&uacute;c đế giữa PROFLY+&trade; được t&iacute;ch hợp b&ecirc;n trong tạo sự n&acirc;ng đỡ ho&agrave;n hảo, mang lại cảm gi&aacute;c &ecirc;m &aacute;i cho b&agrave;n ch&acirc;n. N&oacute;i c&aacute;ch kh&aacute;c, Hoka Mach Supersonic l&agrave; sự kết hợp ho&agrave;n hảo giữa sức mạnh v&agrave; hiệu năng, gi&uacute;p bạn dễ d&agrave;ng chinh phục mọi cự li.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Cấu tr&uacute;c đế giữa PROFLY+&trade; mang lại sự c&acirc;n bằng ho&agrave;n hảo giữa hiệu suất v&agrave; sự thoải m&aacute;i&lt;/li&gt;\r\n            &lt;li&gt;Th&acirc;n gi&agrave;y được thiết kế từ lớp lưới đặc chế tho&aacute;ng kh&iacute;, cho ph&eacute;p người chạy c&oacute; cảm gi&aacute;c &ocirc;m ch&acirc;n an to&agrave;n v&agrave; thoải m&aacute;i m&agrave; c&ograve;n gi&uacute;p ch&acirc;n lu&ocirc;n kh&ocirc; r&aacute;o.&lt;/li&gt;\r\n            &lt;li&gt;Đệm bọt nhẹ mang lại sự ổn định v&agrave; hỗ trợ c&acirc;n bằng dễ d&agrave;ng&lt;/li&gt;\r\n            &lt;li&gt;Độ ổn định: trung b&igrave;nh&lt;/li&gt;\r\n            &lt;li&gt;Đệm đ&aacute;p ứng tạo sự n&acirc;ng đỡ nhẹ nh&agrave;ng, hấp thụ va đập v&agrave; mang lại cảm gi&aacute;c thoải m&aacute;i tối đa cho từng bước ch&acirc;n&lt;/li&gt;\r\n            &lt;li&gt;Chiều cao ch&acirc;n trước: 22mm&lt;/li&gt;\r\n            &lt;li&gt;Chiều cao g&oacute;t ch&acirc;n: 27mm&lt;/li&gt;\r\n            &lt;li&gt;Heeldrop: dưới 5mm&lt;/li&gt;\r\n            &lt;li&gt;Sản phẩm cam kết kh&ocirc;ng sử dụng c&aacute;c chất liệu từ động vật.&lt;/li&gt;\r\n          &lt;/ul&gt;', 3, 6),
(9, 'Giày Thời Trang Unisex Converse Chuck 70 Canvas', 'product-6.webp', 1900000, 1710000, 0, 107, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n   GI&Agrave;Y THỜI TRANG UNISEX CONVERSE CHUCK 70 CANVAS\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nĐến năm 1970, Chuck Taylor All Star đ&atilde; ph&aacute;t triển th&agrave;nh một trong những đ&ocirc;i gi&agrave;y thể thao b&oacute;ng rổ tốt nhất từ trước đến nay. Chuck 70 t&ocirc;n vinh di sản đ&oacute; bằng c&aacute;ch kết hợp c&aacute;c chi tiết lấy cảm hứng từ kho lưu trữ với c&aacute;c cập nhật tiện nghi hiện đại. Đệm đế Ortholite v&agrave; đường kh&acirc;u lưỡi c&oacute; c&aacute;nh n&acirc;ng mức độ thoải m&aacute;i l&ecirc;n một bậc. Đế giữa bằng da trơn b&oacute;ng lo&aacute;ng v&agrave; tab sau cổ điển l&agrave;m nổi bật c&aacute;c chi tiết được chế tạo thủ c&ocirc;ng của đ&ocirc;i gi&agrave;y.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Gi&agrave;y cổ thấp với phần tr&ecirc;n bằng vải cao cấp&lt;/li&gt;\r\n            &lt;li&gt;Đường kh&acirc;u lưỡi c&oacute; c&aacute;nh gi&uacute;p kh&oacute;a n&oacute; v&agrave;o đ&uacute;ng vị tr&iacute; &lt;/li&gt;\r\n            &lt;li&gt;Đệm đế Ortholite &lt;/li&gt;\r\n          &lt;/ul&gt;', 2, 3),
(10, 'Giày Thời Trang Unisex Fila Disruptor 2', 'product-7.webp', 1995000, 0, 0, 96, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n   GI&Agrave;Y THỜI TRANG UNISEX FILA DISRUPTOR 2\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nL&agrave; đ&ocirc;i gi&agrave;y với kiểu d&aacute;ng hợp thời trang mang phong c&aacute;ch H&agrave;n Quốc. Fila Disruptor 2 được l&agrave;m bằng chất liệu cao cấp, những đường cắt sắc sảo v&agrave; đường uốn lượn, thiết kế mạnh mẽ với phần đế răng cưa đầy t&aacute;o bạo.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Chất liệu: synthetic: 100%&lt;/li&gt;\r\n            &lt;li&gt;Đế cao su răng cưa&lt;/li&gt;\r\n          &lt;/ul&gt; ', 2, 4),
(11, 'Giày Thể Thao Nam New Balance 574 Classic', 'pro-17-01-full.webp', 2795000, 2236000, 0, 125, 'Nam', ' &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n     GI&Agrave;Y THỂ THAO NAM NEW BALANCE 574 CLASSIC\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nNew Balance 574 mẫu gi&agrave;y biểu tượng lấy cảm hứng từ phong c&aacute;ch những năm 80 l&agrave;m n&ecirc;n phong c&aacute;ch old-school đầy sức h&uacute;t cho outfit của bạn. Mang đến những đường n&eacute;t gọn g&agrave;ng với sự kết hợp của những gam m&agrave;u rực rỡ v&agrave; đế ngo&agrave;i chắc chắn, c&ugrave;ng chất liệu da lộn kinh điển sẽ tạo n&ecirc;n sự nổi bật cho trang phục của bạn nhưng vẫn giữ những n&eacute;t đẹp thời mang hơi thở cổ điển của thập ni&ecirc;n 80.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Đế ngo&agrave;i được cải tiến mang lại sự bền bỉ khi di chuyển trong mọi h&agrave;nh tr&igrave;nh&lt;/li&gt;\r\n            &lt;li&gt;Kết cấu d&acirc;y buộc chắc chắn điều chỉnh linh hoạt&lt;/li&gt;\r\n            &lt;li&gt;Sử dụng chất liệu da lộn cao cấp&lt;/li&gt;\r\n            &lt;li&gt;Phần lưới tr&ecirc;n tho&aacute;ng kh&iacute; mang lại cảm gi&aacute;c &ecirc;m, nhẹ v&agrave; chắc chắn trong từng bước chạy&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 8),
(12, 'Giày Chạy Bộ Nam Hoka Clifton 8', 'product-9.webp', 3199000, 2559000, 0, 137, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n     GI&Agrave;Y CHẠY BỘ NAM HOKA CLIFTON 8 \r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n H&atilde;y sải bước nhẹ nh&agrave;ng tr&ecirc;n đường c&ugrave;ng Hoka Clifton 8. L&agrave; sản phẩm mới nhất trong bộ sưu tập Clifton từng đoạt giải thưởng, Clifton 8 tiếp tục mang đến sự kết hợp ho&agrave;n hảo giữa những đường n&eacute;t mềm mại v&agrave; m&agrave;u sắc h&agrave;i h&ograve;a. Được thiết kế với đế giữa nhẹ hơn, nhạy hơn, đ&ocirc;i gi&agrave;y c&oacute; kiểu d&aacute;ng thời trang c&ugrave;ng phần tr&ecirc;n cải tiến thiết kế dạng lưới th&ocirc;ng tho&aacute;ng, mang đến sự thoải m&aacute;i cần thiết cho bạn.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Ph&ugrave; hợp với c&aacute;c m&ocirc;n thể dục, chạy bộ, đi bộ &lt;/li&gt;\r\n            &lt;li&gt;Lưới thiết kế ph&iacute;a tr&ecirc;n&lt;/li&gt;\r\n            &lt;li&gt;Tho&aacute;ng kh&iacute;, k&eacute;o d&agrave;i g&oacute;t ch&acirc;n để dễ d&agrave;ng nhập cảnh&lt;/li&gt;\r\n            &lt;li&gt;Đế giữa CMEVA, Meta-Rocker giai đoạn đầu, H&igrave;nh học ổn định vốn c&oacute;&lt;/li&gt;\r\n            &lt;li&gt;Lưỡi lưới được thiết kế&lt;/li&gt;\r\n            &lt;li&gt;Đ&uacute;c EVA sockliner&lt;/li&gt;\r\n            &lt;li&gt;Chiều cao b&agrave;n ch&acirc;n trước 24mm&lt;/li&gt;\r\n            &lt;li&gt;Chiều cao g&oacute;t 29mm&lt;/li&gt;\r\n            &lt;li&gt;Độ giảm từ g&oacute;t ch&acirc;n đến ng&oacute;n ch&acirc;n 5mm&lt;/li&gt;\r\n            &lt;li&gt;Trọng lượng: 8,8 oz&lt;/li&gt;\r\n          &lt;/ul&gt;', 3, 6),
(13, 'Giày Thời Trang Nam Nike Court Vision Lo Nn', 'pro-8.webp', 2019000, 0, 0, 100, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n      GI&Agrave;Y THỜI TRANG NAM NIKE COURT VISION LO NN \r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n     Y&ecirc;u th&iacute;ch kiểu d&aacute;ng cổ điển của b&oacute;ng rổ thập ni&ecirc;n 80 nhưng bạn c&oacute; th&iacute;ch văn h&oacute;a nhịp độ nhanh của tr&ograve; chơi ng&agrave;y nay kh&ocirc;ng? Nike Court Vision Low. C&aacute;c lớp phủ tr&ecirc;n v&agrave; đường kh&acirc;u sắc n&eacute;t của n&oacute; giữ nguy&ecirc;n linh hồn của kiểu d&aacute;ng ban đầu. Cổ gi&agrave;y được đệm chắc chắn, với kiểu d&aacute;ng cắt thấp gi&uacute;p bạn lu&ocirc;n cảm thấy thoải m&aacute;i khi sử dụng ch&uacute;ng.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Ưu điểm sản phẩm&lt;/h3&gt;\r\n          &lt;p&gt;Được l&agrave;m bằng vật liệu t&aacute;i chế &iacute;t nhất 20% t&iacute;nh theo trọng lượng.&lt;/p&gt;\r\n          &lt;p&gt;Sử dụng chất liệu tổng hợp, thiết kế c&oacute; chất liệu giống gi&agrave;y b&oacute;ng rổ giữa những năm 1980.&lt;/p&gt;\r\n          &lt;p&gt;Cổ gi&agrave;y c&oacute; đệm, kiểu d&aacute;ng cắt thấp tr&ocirc;ng b&oacute;ng bẩy v&agrave; tạo cảm gi&aacute;c tuyệt vời trong khi c&aacute;c lỗ đục ở mũi gi&agrave;y v&agrave; hai b&ecirc;n tạo th&ecirc;m sự thoải m&aacute;i v&agrave; dễ thở.&lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Thiết kế nhiều lỗ ở phần b&agrave;n ch&acirc;n trước &lt;/li&gt;\r\n            &lt;li&gt;Đế gi&agrave;y bằng cao su&lt;/li&gt;\r\n          &lt;/ul&gt;', 2, 7),
(14, 'Giày Chạy Bộ Nam New Balance Fuelcell Racer', 'product-10.webp', 4495000, 2248000, 0, 56, 'Nam', ' &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n       GI&Agrave;Y CHẠY BỘ NAM NEW BALANCE FUELCELL RACER\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n       Được thiết kế để đ&aacute;p ứng nhu cầu tập luyện v&agrave; thi đấu của c&aacute;c vận động vi&ecirc;n ưu t&uacute;, gi&agrave;y chạy bộ New Balance FuelCell Racer được trang bị lớp đế giữa c&ocirc;ng nghệ FuelCell c&oacute; c&aacute;c lớp đệm để mang lại khả năng phục hồi cao hơn. B&ecirc;n cạnh đ&oacute;, gi&agrave;y c&ograve;n được cải tiến bởi c&aacute;c sợi carbon b&ecirc;n trong mang lại sự ổn định chắc chắn. Th&acirc;n gi&agrave;y được l&agrave;m bằng da tổng hợp / lưới tạo n&ecirc;n một thiết kế ho&agrave;n hảo v&agrave; tho&aacute;ng kh&iacute;.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Đế giữa FuelCell&lt;/li&gt;\r\n            &lt;li&gt;Chất liệu tổng hợp / lưới&lt;/li&gt;\r\n            &lt;li&gt;Cổ gi&agrave;y bằng da lộn&lt;/li&gt;\r\n            &lt;li&gt;Logo NB&lt;/li&gt;\r\n            &lt;li&gt;Thiết kế gi&agrave;y thể thao thắt d&acirc;y&lt;/li&gt;\r\n            &lt;li&gt;Thiết kế đa năng c&oacute; thể mang khi tập luyện hoặc thi đấu&lt;/li&gt;\r\n          &lt;/ul&gt;', 3, 8),
(15, 'Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2', 'product-11.webp', 3195000, 1598000, 0, 72, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n        GI&Agrave;Y CHẠY BỘ NAM NEW BALANCE FUELCELL REBEL V2\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n        FuelCell Rebel V2 ph&ugrave; hợp với c&aacute;c hoạt động thể thao cũng như c&aacute;c b&agrave;i tập luyện với cường độ cao. Đ&ocirc;i gi&agrave;y chạy bộ n&agrave;y được trang bị lớp đế giữa hiệu suất FuelCell c&oacute; khả năng ho&agrave;n trả năng lượng cao nhất hiện nay tr&ecirc;n thị trường, gi&uacute;p năng lượng b&ugrave;ng nổ trở lại trong mỗi bước chạy. Thiết kế phối lưới ở upper tăng th&ecirc;m sự thoải m&aacute;i v&agrave; tho&aacute;ng kh&iacute;, trong khi logo v&agrave; m&agrave;u sắc nổi bật l&agrave; điểm cộng cho phong c&aacute;ch thời trang của bạn.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Lớp đệm đế giữa FuelCell&lt;/li&gt;\r\n            &lt;li&gt;Thiết kế gi&agrave;y thể thao c&oacute; d&acirc;y thắt&lt;/li&gt;\r\n            &lt;li&gt;C&ocirc;ng nghệ đế ngo&agrave;i bằng cao su NDurance mang lại độ bền vượt trội ở những khu vực c&oacute; độ m&ograve;n cao gi&uacute;p mang lại hiệu quả tốt hơn cho đ&ocirc;i gi&agrave;y&lt;/li&gt;\r\n            &lt;li&gt;Chất liệu tổng hợp / lưới&lt;/li&gt;\r\n          &lt;/ul&gt;', 3, 8),
(16, 'Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2', 'pro-13-01-full.webp', 3195000, 1597500, 0, 138, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n        GI&Agrave;Y CHẠY BỘ NAM NEW BALANCE FUELCELL REBEL V2\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n        FuelCell Rebel V2 ph&ugrave; hợp với c&aacute;c hoạt động thể thao cũng như c&aacute;c b&agrave;i tập luyện với cường độ cao. Đ&ocirc;i gi&agrave;y chạy bộ n&agrave;y được trang bị lớp đế giữa hiệu suất FuelCell c&oacute; khả năng ho&agrave;n trả năng lượng cao nhất hiện nay tr&ecirc;n thị trường, gi&uacute;p năng lượng b&ugrave;ng nổ trở lại trong mỗi bước chạy. Thiết kế phối lưới ở upper tăng th&ecirc;m sự thoải m&aacute;i v&agrave; tho&aacute;ng kh&iacute;, trong khi logo v&agrave; m&agrave;u sắc nổi bật l&agrave; điểm cộng cho phong c&aacute;ch thời trang của bạn.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Lớp đệm đế giữa FuelCell&lt;/li&gt;\r\n            &lt;li&gt;Thiết kế gi&agrave;y thể thao c&oacute; d&acirc;y thắt&lt;/li&gt;\r\n            &lt;li&gt;C&ocirc;ng nghệ đế ngo&agrave;i bằng cao su NDurance mang lại độ bền vượt trội ở những khu vực c&oacute; độ m&ograve;n cao gi&uacute;p mang lại hiệu quả tốt hơn cho đ&ocirc;i gi&agrave;y&lt;/li&gt;\r\n            &lt;li&gt;Chất liệu tổng hợp / lưới&lt;/li&gt;\r\n          &lt;/ul&gt;', 3, 8),
(17, 'Giày Thể Thao Unisex Adidas Stan Smith', 'pro-12-01-full.webp', 2500000, 1500000, 0, 73, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n        GI&Agrave;Y THỂ THAO UNISEX ADIDAS STAN SMITH\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n         Đ&ocirc;i gi&agrave;y trainer Stan Smith giờ đ&acirc;y vẫn thật mới mẻ y như l&uacute;c vừa ra mắt từ hơn 50 năm trước. B&iacute; quyết l&agrave; g&igrave;? Sự đơn giản. Những đường n&eacute;t gọn g&agrave;ng, sắc sảo ph&ugrave; hợp với mọi trang phục, đơn giản m&agrave; cực cool. Phi&ecirc;n bản n&agrave;y giữ nguy&ecirc;n chất low-key nhưng th&ecirc;m v&agrave;o c&aacute;c chi tiết mới để n&acirc;ng tầm phong c&aacute;ch vốn đầy t&iacute;nh biểu tượng, như chất vải CORDURA&reg; bền chắc v&agrave; chất liệu t&aacute;i chế. L&agrave; một phần cam kết của adidas hướng tới chấm dứt r&aacute;c thải nhựa, đ&ocirc;i gi&agrave;y n&agrave;y c&oacute; thiết kế hướng tới tương lai. Sản phẩm n&agrave;y may bằng vải c&ocirc;ng nghệ Primegreen, thuộc d&ograve;ng chất liệu t&aacute;i chế hiệu năng cao. Th&acirc;n gi&agrave;y chứa 50% th&agrave;nh phần t&aacute;i chế. Kh&ocirc;ng sử dụng polyester nguy&ecirc;n sinh.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;C&oacute; d&acirc;y gi&agrave;y&lt;/li&gt;\r\n            &lt;li&gt;Th&acirc;n gi&agrave;y bằng vải nylon CORDURA&reg;&lt;/li&gt;\r\n            &lt;li&gt;&Ocirc;m ch&acirc;n&lt;/li&gt;\r\n            &lt;li&gt;Lớp l&oacute;t bằng da tổng hợp&lt;/li&gt;\r\n            &lt;li&gt;Đế ngo&agrave;i bằng cao su&lt;/li&gt;\r\n            &lt;li&gt;Primegreen&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 1),
(18, 'Giày Thể Thao Nam New Balance Xc-72 Lifestyle', 'pro-9.webp', 2495000, 1248000, 0, 43, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n        GI&Agrave;Y THỂ THAO NAM NEW BALANCE XC-72 LIFESTYLE \r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n         XC-72 mang đến nguồn cảm hứng kh&aacute;m ph&aacute; bất tận, với thiết kế bẻ cong thời gian được lấy &yacute; tưởng từ bộ sưu tập xe hơi những năm 1970. Thiết kế đế ngo&agrave;i đặc biệt hỗ trợ lực k&eacute;o tối đa v&agrave; c&aacute;c đặc điểm g&oacute;c cạnh được sử dụng tạo n&ecirc;n kiểu d&aacute;ng độc đ&aacute;o, thu h&uacute;t ngay từ &aacute;nh nh&igrave;n đầu ti&ecirc;n. XC-72 l&agrave; tương lai m&agrave; qu&aacute; khứ mơ ước v&agrave; đ&atilde; được hiện thực h&oacute;a th&agrave;nh c&ocirc;ng. \r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Đế ngo&agrave;i được chia theo chiều dọc c&oacute; hai thiết kế lực k&eacute;o tr&ecirc;n mặt đất cứng, thiết kế &lsquo;bộ kẹp&rsquo; của XC15 v&agrave; kiểu đ&iacute;nh đ&aacute; của 375&lt;/li&gt;\r\n            &lt;li&gt;Mặt tr&ecirc;n bằng da lộn c&oacute; l&ocirc;ng với chất liệu t&aacute;i chế ở logo N, phần vamp c&oacute; t&iacute;nh năng dệt bằng sợi TENCEL &trade; Lyocell c&oacute; nguồn gốc từ nguồn gỗ t&aacute;i tạo&lt;/li&gt;\r\n            &lt;li&gt;H&igrave;nh d&aacute;ng ng&oacute;n ch&acirc;n vu&ocirc;ng lấy cảm hứng từ thiết kế xe &yacute; tưởng những năm 1970&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 8),
(19, 'Giày Thời Trang Nam New Balance CT302 Court', 'pro-3-01-full.webp', 2595000, 0, 0, 35, 'Nam', 'Men&#039;s New Balance CT302 Court Sneakers', 1, 8),
(21, 'Giày Chạy Bộ Nữ Adidas Duramo 10', 'pro-4-01-full.webp', 1800000, 0, 0, 73, 'Nữ', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n            Đ&Ocirc;I GI&Agrave;Y CHẠY BỘ ĐI H&Agrave;NG NG&Agrave;Y, C&Oacute; SỬ DỤNG CHẤT LIỆU T&Aacute;I CHẾ.\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n            Khi tập yoga buổi s&aacute;ng, l&agrave;m việc vặt trong ng&agrave;y hay đi chơi tối c&ugrave;ng bạn b&egrave;, h&atilde;y giữ cho đ&ocirc;i ch&acirc;n bạn lu&ocirc;n thoải m&aacute;i v&agrave; đảm bảo phong c&aacute;ch chuẩn chỉnh với đ&ocirc;i gi&agrave;y adidas n&agrave;y. Kết hợp c&ugrave;ng chiếc quần b&oacute; ưa th&iacute;ch, bạn sẽ c&oacute; được phong c&aacute;ch thể thao m&agrave; casual. Th&acirc;n gi&agrave;y bằng vải lưới gi&uacute;p bạn lu&ocirc;n m&aacute;t mẻ, c&ugrave;ng lớp đệm si&ecirc;u nhẹ n&acirc;ng niu từng sải bước.\r\n\r\nL&agrave;m từ một nh&oacute;m chất liệu t&aacute;i chế, th&acirc;n gi&agrave;y c&oacute; chứa &iacute;t nhất 50% th&agrave;nh phần t&aacute;i chế. Sản phẩm n&agrave;y đại diện cho một trong số rất nhiều c&aacute;c giải ph&aacute;p của ch&uacute;ng t&ocirc;i hướng tới chấm dứt r&aacute;c thải nhựa.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Th&ocirc;ng số&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;D&aacute;ng regular fit&lt;/li&gt;\r\n            &lt;li&gt;C&oacute; d&acirc;y gi&agrave;y&lt;/li&gt;\r\n&lt;li&gt;Th&acirc;n gi&agrave;y bằng vải lưới ba lớp&lt;/li&gt;\r\n&lt;li&gt;C&aacute;c chi tiết phủ ngo&agrave;i kh&ocirc;ng đường may tạo độ n&acirc;ng đỡ&lt;/li&gt;\r\n&lt;li&gt;G&oacute;t gi&agrave;y mềm mại&lt;/li&gt;\r\n&lt;li&gt;Lớp đệm LIGHTMOTION&lt;/li&gt;\r\n&lt;li&gt;Đế ngo&agrave;i bằng cao su&lt;/li&gt;\r\n&lt;li&gt;Th&acirc;n gi&agrave;y c&oacute; chứa tối thiểu 50% th&agrave;nh phần t&aacute;i chế&lt;/li&gt;\r\n&lt;li&gt;M&agrave;u sản phẩm: Bliss Orange / Pulse Lilac / Almost Blue&lt;/li&gt;\r\n&lt;li&gt;M&atilde; sản phẩm: GW4117&lt;/li&gt;\r\n          &lt;/ul&gt;', 1, 1),
(22, 'Giày Thời Trang Nữ Puma City Rider', 'pro-10.webp', 2799000, 1679400, 0, 92, 'Nữ', '<h3 class=\"heading-medium product-info-title-left\">\r\n         GIÀY THỜI TRANG NỮ PUMA CITY RIDER\r\n          </h3>\r\n          <p>\r\n           Thiết kế đường phố trên dòng giày Rider đặc trưng của PUMA, phiên bản City này đã sẵn sàng cho những bước tiến hiện đại. Với lớp lưới thoáng khí phía trên kết hợp với chất liệu da lộn cổ điển và màu sắc tươi sáng bắt mắt, những đôi giày này còn được trang bị lớp đệm êm ái cho bạn tận hưởng cảm giác thoải mái suốt cả ngày dài. Thiết kế cổ điển, phù hợp với mọi giới tính, bạn đã sẵn sàng thể hiện phong cách trên mọi nẻo đường?\r\n          </p>\r\n          <h3 class=\"heading-medium product-info-title-left\">CÁC TÍNH NĂNG KHÁC</h3>\r\n          <p>\r\n          IMEVA: Một loại chất liệu của PUMA cho cảm giác nhẹ và thoải mái\r\n          </p>\r\n          <h3 class=\"heading-medium product-info-title-left\">THÔNG SỐ</h3>\r\n          <ul>\r\n            <li>Lycra, phối lưới, da lộn và lớp phủ tổng hợp</li>\r\n            <li>Đế giữa IMEVA</li>\r\n            <li>Đế giày cao su</li>\r\n            <li>Giày có dây thắt</li>\r\n            <li>PUMA Wordmark ở lưỡi gà</li>\r\n          </ul>', 2, 9),
(23, 'Giày Thời Trang Unisex Converse Chuck 70 Heritage', 'pro-11.webp', 2000000, 1600000, 0, 41, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n       GI&Agrave;Y THỜI TRANG UNISEX CONVERSE CHUCK 70 HERITAGE \r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n        Converse Chuck 70 Heritage c&oacute; họa tiết mới lạ bắt mắt, phi&ecirc;n bản cổ thấp được giới trẻ nhiệt t&igrave;nh ưu &aacute;i bởi sự hiện đại, tiện dụng. Chất vải d&agrave;y, nhẹ, bền chắc gi&uacute;p người d&ugrave;ng c&oacute; được sự thoải m&aacute;i. Đường chỉ chạy dọc th&acirc;n gi&agrave;y được chăm ch&uacute;t tỉ mỉ hơn rất nhiều.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ &lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Chất liệu: canvas&lt;/li&gt;\r\n          &lt;/ul&gt;', 2, 3),
(26, 'Giày Thể Thao Trẻ Em New Balance 373 Lifestyle', 'pro-24-01-full.webp', 1295000, 647500, 0, 6, 'Trẻ Em', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n GI&Agrave;Y THỂ THAO TRẺ EM NEW BALANCE 373 LIFESTYLE \r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nGi&agrave;y thể thao New Balance YC373, được l&agrave;m từ chất liệu da v&agrave; dệt may, l&agrave; đ&ocirc;i gi&agrave;y thể thao l&yacute; tưởng để đồng h&agrave;nh c&ugrave;ng bạn trong sinh hoạt h&agrave;ng ng&agrave;y. \r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Phần tr&ecirc;n thiết kế cổ điển với c&aacute;c lớp phủ dệt&lt;/li&gt;\r\n            &lt;li&gt;Đế giữa v&agrave; hỗ trợ g&oacute;t ch&acirc;n bằng bọt EVA mang lại sự thoải m&aacute;i tối đa&lt;/li&gt;\r\n            &lt;li&gt;Đế ngo&agrave;i bằng cao su đảm bảo độ bền cao hơn&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 8),
(27, 'Giày Thể Thao Trẻ Em New Balance 327 Classics Lifestyle', 'pro-25-01-full.webp', 1695000, 847500, 0, 13, 'Trẻ Em', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y THỂ THAO TRẺ EM NEW BALANCE 327 CLASSICS\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nNew Balance 327 l&agrave; mẫu gi&agrave;y thừa hưởng từ cảm hứng thiết kế di sản thập ni&ecirc;n 70, với phong c&aacute;ch t&aacute;o bạo ph&ugrave; hợp với mọi loại trang phục. Mặt tr&ecirc;n bằng da lộn v&agrave; lưới mang lại cảm gi&aacute;c nhẹ nh&agrave;ng, tho&aacute;ng kh&iacute;, logo &quot;N&quot; nổi bật tạo điểm nhấn đặc trưng năng động, cuốn h&uacute;t, hỗ trợ những chuyến phi&ecirc;u lưu của b&eacute;.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Kiểu d&aacute;ng hiện đại&lt;/li&gt;\r\n            &lt;li&gt;Logo thương hiệu &quot;N&quot; nổi bật&lt;/li&gt;\r\n            &lt;li&gt;Thiết kế lấy cảm hứng từ những mẫu gi&agrave;y cổ điển những năm 1970&lt;/li&gt;\r\n            &lt;li&gt;Chất liệu da lộn đặc trưng biểu tượng của h&atilde;ng lấy cảm hứng từ những d&ograve;ng gi&agrave;y biểu tượng 320,355 v&agrave; Supercomp&lt;/li&gt;\r\n            &lt;li&gt;Đế gi&agrave;y cao su lấy cảm hứng từ những d&ograve;ng gi&agrave;y biểu tượng 320,355 v&agrave; Supercomp&lt;/li&gt;\r\n            &lt;li&gt;Lưỡi nylon phong c&aacute;ch retro&lt;/li&gt;\r\n            &lt;li&gt;C&oacute; d&acirc;y buộc&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 8),
(28, 'Giày Thể Thao Trẻ Em Nike Revolution 5 (Psv)', 'pro-26-01-full.webp', 1329000, 930300, 0, 8, 'Trẻ Em', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y THỂ THAO TRẺ EM NIKE REVOLUTION 5\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nNike Revolution 5 l&agrave; sản phẩm tuyệt vời đồng h&agrave;nh c&ugrave;ng c&aacute;c bạn nhỏ tham gia hoạt động vui chơi cả ng&agrave;y d&agrave;i. Thiết kế đơn giản, tinh gọn, quai d&aacute;n tiện lợi đảm bảo an to&agrave;n, lu&ocirc;n sẵn s&agrave;ng mang đến những trải nghiệm tuyệt vời nhất ở mọi nơi.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Bề mặt lưới tho&aacute;ng kh&iacute;, gi&uacute;p đ&ocirc;i ch&acirc;n kh&ocirc; tho&aacute;ng m&aacute;t mẻ với mỗi động th&aacute;i&lt;/li&gt;\r\n            &lt;li&gt;Phần đệm xốp mềm tạo cảm gi&aacute;c dễ chịu &ecirc;m &aacute;i&lt;/li&gt;\r\n            &lt;li&gt;Đế cao su cung cấp lực k&eacute;o bền bỉ từ g&oacute;t ch&acirc;n đến ch&acirc;n&lt;/li&gt;\r\n            &lt;li&gt;D&acirc;y buộc đ&agrave;n hồi v&agrave; quai d&aacute;n gi&uacute;p trẻ nhỏ dễ d&agrave;ng đi v&agrave;o v&agrave; th&aacute;o ra&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 7),
(29, 'Giày Thể Thao Trẻ Em Adidas Forum', 'pro-27-01-full.webp', 2100000, 1260000, 0, 16, 'Trẻ Em', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y FORUM LOW\r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\nĐ&Ocirc;I GI&Agrave;Y TẬP MANG HƠI THỞ TƯƠNG LAI C&Oacute; SỬ DỤNG CHẤT LIỆU T&Aacute;I CHẾ.\r\n          &lt;/p&gt;\r\n          &lt;p&gt;\r\nL&agrave; qu&aacute;n qu&acirc;n phong c&aacute;ch b&oacute;ng rổ thập ni&ecirc;n 80 v&agrave; l&agrave; biểu tượng của phong c&aacute;ch hiện đại, adidas Forum đ&atilde; sẵn s&agrave;ng tham gia đấu trường mới - phong c&aacute;ch thường ng&agrave;y.\r\n          &lt;/p&gt;\r\n          &lt;p&gt;\r\nĐ&ocirc;i gi&agrave;y d&agrave;nh cho thiếu ni&ecirc;n n&agrave;y gi&uacute;p nhẹ nh&agrave;ng lướt qua c&ugrave;ng phong c&aacute;ch b&oacute;ng rổ cổ điển.\r\n          &lt;/p&gt;\r\n          &lt;p&gt;\r\nL&agrave;m từ một nh&oacute;m chất liệu t&aacute;i chế, th&acirc;n gi&agrave;y c&oacute; chứa &iacute;t nhất 50% th&agrave;nh phần t&aacute;i chế. Sản phẩm n&agrave;y đại diện cho một trong số rất nhiều c&aacute;c giải ph&aacute;p của ch&uacute;ng t&ocirc;i hướng tới chấm dứt r&aacute;c thải nhựa.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;C&oacute; d&acirc;y gi&agrave;y v&agrave; quai d&aacute;n&lt;/li&gt;\r\n            &lt;li&gt;Th&acirc;n gi&agrave;y bằng chất liệu tổng hợp&lt;/li&gt;\r\n            &lt;li&gt;Lớp l&oacute;t bằng vải dệt&lt;/li&gt;\r\n            &lt;li&gt;Đế cupsole bằng cao su&lt;/li&gt;\r\n            &lt;li&gt;Th&acirc;n gi&agrave;y c&oacute; chứa tối thiểu 50% th&agrave;nh phần t&aacute;i chế&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 1),
(30, 'Giày Bóng Rổ Nam Under Armour 3Z5', 'pro-28-01-full.webp', 2695000, 1347500, 0, 8, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y B&Oacute;NG RỔ NAM UNDER ARMOUR 3Z5\r\n          &lt;/h3&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Trọng lượng: 12,5 oz&lt;/li&gt;\r\n            &lt;li&gt;Loại d&acirc;y buộc: Ti&ecirc;u chuẩn&lt;/li&gt;\r\n            &lt;li&gt;Trọng lượng nhẹ&lt;/li&gt;\r\n            &lt;li&gt;Bề mặt lưới tho&aacute;ng kh&iacute; kết hợp lớp da phủ v&agrave; chi tiết kh&ocirc;ng đường may&lt;/li&gt;\r\n            &lt;li&gt;Hệ thống d&acirc;y buộc ti&ecirc;u chuẩn gi&uacute;p cố định bước ch&acirc;n khi di chuyển&lt;/li&gt;\r\n            &lt;li&gt;Bộ n&eacute;n TPE đệm dưới ch&acirc;n mang lại sự &ecirc;m &aacute;i&lt;/li&gt;\r\n            &lt;li&gt;Đế giữa sử dụng đệm bọt micro G&reg; gi&uacute;p tăng khả năng phản hồi lực cao v&agrave; tối ưu độ &ecirc;m nhẹ&lt;/li&gt;\r\n            &lt;li&gt;L&oacute;t trong sử dụng nylon bền bỉ tăng độ ổn định cho đ&ocirc;i ch&acirc;n&lt;/li&gt;\r\n            &lt;li&gt;Đế ngo&agrave;i cao su bền cung cấp lực k&eacute;o đặc biệt với khả năng chống trơn trượt&lt;/li&gt;\r\n          &lt;/ul&gt;', 5, 10),
(31, 'Giày Bóng Rổ Unisex Under Armour Flow Futr X Black History Month', 'pro-29-01-full.webp', 3595000, 1797500, 0, 25, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y B&Oacute;NG RỔ UNISEX UNDER ARMOUR FLOW FUTR X BLACK HISTORY MONTH\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n          Mọi sản phẩm trong bộ sưu tập Black History Month đều do những người đồng đội da đen l&ecirc;n &yacute; tưởng, thiết kế v&agrave; tạo ra với mục đ&iacute;ch vinh danh những người da m&agrave;u, nhằm n&acirc;ng cao tiếng n&oacute;i v&agrave; tầm nh&igrave;n của họ v&agrave; khuyến kh&iacute;ch sự t&ocirc;n trọng lẫn nhau giữa c&aacute;c quốc gia, v&ugrave;ng l&atilde;nh thổ v&agrave; d&acirc;n tộc tr&ecirc;n to&agrave;n thế giới.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Ưu điểm sản phẩm&lt;/h3&gt;\r\n           &lt;p&gt;\r\n        Phối lưới ở upper mang lại khả năng th&ocirc;ng tho&aacute;ng tốt\r\n        &lt;/p&gt;\r\n           &lt;p&gt;\r\n        Đai cố định ở b&agrave;n ch&acirc;n giữa v&agrave; d&acirc;y thắt gi&uacute;p cố định b&agrave;n ch&acirc;n trong suốt qu&aacute; tr&igrave;nh thi đấu\r\n        &lt;/p&gt;\r\n           &lt;p&gt;\r\n       Sockliner Perf X mang lại bộ n&eacute;n tốt hơn\r\n        &lt;/p&gt;\r\n           &lt;p&gt;\r\n     C&ocirc;ng nghệ đệm UA Flow mới c&oacute; trọng lượng si&ecirc;u nhẹ, nảy v&agrave; mang lại độ b&aacute;m s&agrave;n tuyệt vời\r\n        &lt;/p&gt;\r\n           &lt;p&gt;\r\n      Pebax&reg; shank t&iacute;ch hợp ở b&agrave;n ch&acirc;n giữa tạo sự ổn định\r\n        &lt;/p&gt;\r\n           &lt;p&gt;\r\n      Đế ngo&agrave;i UA Flow bền bỉ mang lại cảm gi&aacute;c tr&ecirc;n s&acirc;n tốt hơn để bạn c&oacute; thể dừng lại v&agrave; tăng tốc dễ d&agrave;ng\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Trọng lượng: 346 gam&lt;/li&gt;\r\n            &lt;li&gt;Loại d&acirc;y thắt: ti&ecirc;u chuẩn&lt;/li&gt;\r\n          &lt;/ul&gt;', 5, 10),
(32, 'Giày Thời Trang Nam Nike Jordan Air', 'pro-30-01-full.webp', 3569000, 2141400, 0, 9, 'Nam', 'Air Jordan is an American brand of basketball shoes, athletic, casual, and style clothing produced by Nike. Founded in Chicago, Air Jordan was created for Hall of Fame former basketball player Michael Jordan during his time with the Chicago Bulls.', 5, 7),
(33, 'Giày Thời Trang Nam Nike Jordan Air Nfh', 'pro-31-01-full.webp', 3569000, 2141400, 0, 22, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y THỜI TRANG NAM NIKE JORDAN AIR NFH\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n        Lấy cảm hứng từ những đ&ocirc;i gi&agrave;y b&oacute;ng rổ mang t&iacute;nh biểu tượng đ&atilde; đạt được danh tiếng của thương hiệu, Nike Jordan Air NFH mang đến sự pha trộn giữa phong c&aacute;ch hiện đại mới mẻ kết hợp những di sản l&acirc;u đời. C&aacute;c chi tiết cổ điển được thiết kế tinh kế, c&ugrave;ng bề mặt lớp phủ kh&acirc;u v&agrave; m&ocirc; h&igrave;nh lực k&eacute;o xương c&aacute; đ&atilde; trở th&agrave;nh những n&eacute;t đặc trưng của thương hiệu. Trọng lượng nhẹ, logo bắt mắt v&agrave; c&aacute;c v&ugrave;ng hiệu năng tinh chỉnh kết hợp giữa độ ổn định, thoải m&aacute;i v&agrave; hấp thụ lực tốt nhất gi&uacute;p bạn chinh phục c&aacute;c bề mặt đường phố kh&oacute; lường.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n          &lt;/ul&gt;', 5, 7),
(34, 'Giày Bóng Đá Unisex Nike Phantom Gt2 Academy Tf', 'pro-32-01-full.webp', 2479000, 0, 0, 33, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y B&Oacute;NG Đ&Aacute; UNISEX NIKE PHANTOM GT2 ACADEMY TF\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n      Nike Phantom GT2 Academy TF l&agrave; đ&ocirc;i gi&agrave;y đ&aacute; b&oacute;ng cổ thấp gi&uacute;p bạn kiểm so&aacute;t từng thời khắc trận đấu. Khung gi&agrave;y được thiết kế đặc b&ecirc;n trong gia cố cho th&acirc;n gi&agrave;y si&ecirc;u nhẹ gi&uacute;p đ&ocirc;i ch&acirc;n ổn định trong những bước chạy nước r&uacute;t b&ugrave;ng nổ v&agrave; những c&uacute; chuyển hướng đột ngột.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Kết cấu Grippy tr&ecirc;n đỉnh gi&uacute;p bạn vững v&agrave;ng trong c&aacute;c pha đổi hướng v&agrave; xoay người để lu&ocirc;n nhanh hơn một bước&lt;/li&gt;\r\n             &lt;li&gt;Viền ngo&agrave;i trung t&acirc;m tạo cảm gi&aacute;c trợ lực gi&uacute;p bạn nhẹ nh&agrave;ng tiến về ph&iacute;a trước&lt;/li&gt;\r\n             &lt;li&gt;Da tổng hợp bền bỉ, dễ lau ch&ugrave;i&lt;/li&gt;\r\n          &lt;/ul&gt;', 6, 7),
(35, 'Giày Đá Bóng Unisex Adidas X Speedflow.4 Turf', 'pro-33-01-full.webp', 1500000, 0, 0, 27, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y Đ&Aacute; BANH X SPEEDFLOW 4 TURF\r\n          &lt;/h3&gt;\r\n        &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nĐ&Ocirc;I GI&Agrave;Y TỐC ĐỘ SI&Ecirc;U NHẸ D&Agrave;NH CHO BẠN.\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n    Tr&ecirc;n s&acirc;n cỏ, tốc độ l&agrave; một yếu tố cần thiết. Trong trận đấu, đ&oacute; l&agrave; điều quan trọng nhất. Suy nghĩ nhanh. Di chuyển nhanh hơn. T&igrave;m d&ograve;ng chảy của bạn v&agrave; qu&ecirc;n đi sự nghỉ ngơi ở ph&iacute;a sau. H&atilde;y sở hữu mọi thứ trong từng bước ch&acirc;n của bạn với đ&ocirc;i gi&agrave;y b&oacute;ng đ&aacute; adidas X n&agrave;y. Lớp vải dệt mềm, phủ b&ecirc;n tr&ecirc;n mang lại cảm gi&aacute;c thoải m&aacute;i khi bạn hoạt động. Đế ngo&agrave;i bằng cao su chắc chắn gi&uacute;p bạn di chuyển tốc độ tr&ecirc;n s&acirc;n cỏ nh&acirc;n tạo.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;C&oacute; d&acirc;y thắt&lt;/li&gt;\r\n             &lt;li&gt;Dệt phủ tr&ecirc;n upper&lt;/li&gt;\r\n             &lt;li&gt;Đế ngo&agrave;i cao su cho cỏ nh&acirc;n tạo&lt;/li&gt;\r\n             &lt;li&gt;M&agrave;u: Red / Core Black / Solar Red&lt;/li&gt;\r\n          &lt;/ul&gt;', 6, 1),
(36, 'Giày Bóng Đá Unisex Nike Fw Phantom Gt2 Club Tf', 'pro-34-01-full.webp', 1609000, 0, 0, 52, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y B&Oacute;NG Đ&Aacute; UNISEX NIKE FW PHANTOM GT2 CLUB TF\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\n    Được thiết kế dựa tr&ecirc;n d&ograve;ng gi&agrave;y đ&aacute; b&oacute;ng đa năng Phantom GT, Nike Phantom GT2 TF thế hệ mới được cải tiến đ&aacute;ng kể trong thiết kế với kiểu d&aacute;ng v&agrave; chức năng, hỗ trợ cực tốt cho c&aacute;c động t&aacute;c chuyền v&agrave; s&uacute;t b&oacute;ng với độ ch&iacute;nh x&aacute;c cao.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Kiểm so&aacute;t tốt hơn&lt;/h3&gt;\r\n          &lt;p&gt;\r\n  Phần upper được l&agrave;m từ c&aacute;c hạt nổi Generative Texture phủ với mật độ d&agrave;y hơn, tăng độ b&aacute;m gi&uacute;p người mang cảm nhận được b&oacute;ng nhiều hơn v&agrave; kiểm so&aacute;t b&oacute;ng tốt hơn\r\n        &lt;/p&gt;\r\n        &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;Thiết kế bền bỉ&lt;/h3&gt;\r\n        &lt;p&gt;\r\nGi&agrave;y được l&agrave;m từ da tổng hợp bền v&agrave; dễ lau ch&ugrave;i, mang lại sự &ecirc;m &aacute;i vừa vặn cho b&agrave;n ch&acirc;n\r\n      &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Đinh gi&agrave;y được l&agrave;m từ cao su cao cấp c&oacute; thiết kế h&igrave;nh chữ nhật, được ph&acirc;n bố đều khắp mặt đế gi&uacute;p đ&ocirc;i gi&agrave;y c&oacute; thể b&aacute;m s&acirc;n tốt hơn tr&ecirc;n mặt s&acirc;n cỏ nh&acirc;n tạo.&lt;/li&gt;\r\n          &lt;/ul&gt;', 6, 7),
(37, 'Giày Thời Trang Trẻ Em Converse Chuck Taylor All Star', 'pro-35-01-full.webp', 1100000, 550000, 0, 1, 'Bé Trai', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y THỜI TRANG TRẺ EM CONVERSE CHUCK TAYLOR ALL STAR \r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nPhi&ecirc;n bản d&agrave;nh cho trẻ em của Chuck Taylor All Star l&agrave; một trong những mẫu gi&agrave;y thể thao mang t&iacute;nh biểu tượng nhất mọi thời đại, một biểu tượng của sự thoải m&aacute;i v&agrave; phong c&aacute;ch cổ điển, tinh tế. \r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Phần tr&ecirc;n bằng vải đảm bảo sự thoải m&aacute;i v&agrave; nhẹ nh&agrave;ng&lt;/li&gt;\r\n             &lt;li&gt;Đế cao su gi&uacute;p b&aacute;m đường tốt hơn&lt;/li&gt;\r\n          &lt;/ul&gt;', 2, 3),
(38, 'Giày Thể Thao Trẻ Em New Balance 574 Classic', 'pro-36-01-full.webp', 1595000, 1116500, 0, 1, 'Bé Trai', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y THỂ THAO TRẺ EM NEW BALANCE 574 CLASSIC\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nPhi&ecirc;n bản gi&agrave;y New Balance 574 d&agrave;nh cho trẻ em với kiểu d&aacute;ng dựa tr&ecirc;n mẫu gi&agrave;y nguy&ecirc;n bản nhưng được thiết kế lại để ph&ugrave; hợp với những b&agrave;n ch&acirc;n nhỏ đang ph&aacute;t triển, phối m&agrave;u bắt mắt, đ&acirc;y chắc chắn sẽ l&agrave; đ&ocirc;i gi&agrave;y y&ecirc;u th&iacute;ch d&agrave;nh cho những đứa trẻ của bạn. Lớp đệm EVA si&ecirc;u nhẹ ở đế giữa v&agrave; g&oacute;t ch&acirc;n mang lại sự &ecirc;m &aacute;i, mềm mại. Chất liệu da lộn, phối lưới c&ugrave;ng đế ngo&agrave;i bằng cao su bền bỉ gi&uacute;p hạn chế sự hao m&ograve;n theo thời gian.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Đệm EVA nhẹ ở đế giữa v&agrave; g&oacute;t ch&acirc;n gi&uacute;p tăng sự thoải m&aacute;i&lt;/li&gt;\r\n             &lt;li&gt;Chất liệu da lộn thời trang, phối lưới&lt;/li&gt;\r\n             &lt;li&gt;Đế ngo&agrave;i bằng cao su bền bỉ&lt;/li&gt;\r\n             &lt;li&gt;C&oacute; d&acirc;y thắt&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 8),
(39, 'Giày Thể Thao Trẻ Em New Balance 313 Classics Lifestyle', 'pro-37-01-full.webp', 1695000, 1186500, 0, 1, 'Bé Gái', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y THỂ THAO TRẺ EM NEW BALANCE 313 CLASSICS LIFESTYLE \r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nĐ&ocirc;i gi&agrave;y d&agrave;nh cho trẻ em với thiết kế quai tối ưu sự vừa vặn cho c&aacute;c b&agrave;n ch&acirc;n đang ph&aacute;t triển. Kiểu d&aacute;ng năng động, đẹp mắt th&iacute;ch hợp để phối c&ugrave;ng mọi outfits thường ng&agrave;y.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Đế giữa c&oacute; đệm cung cấp hỗ trợ ổn định&lt;/li&gt;\r\n             &lt;li&gt;Thiết kế quai cố định Devil&#039;s Felt vừa kh&iacute;t &lt;/li&gt;\r\n             &lt;li&gt;Chất liệu: da lộn / lưới tổng hợp&lt;/li&gt;\r\n          &lt;/ul&gt;', 4, 8),
(40, 'Giày Thời Trang Trẻ Em Fila Court Ace Tape Patch Vc Kd', 'pro-38-01-full.webp', 1295000, 945350, 0, 1, 'Bé Gái', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y THỜI TRANG TRẺ EM FILA COURT ACE TAPE PATCH VC KD \r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nĐ&ocirc;i gi&agrave;y d&agrave;nh cho trẻ em với thiết kế quai d&aacute;n dễ d&agrave;ng sử dụng, th&iacute;ch hợp phối hợp c&ugrave;ng c&aacute;c trang phục thường ng&agrave;y của trẻ th&ecirc;m năng động. \r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Phần tr&ecirc;n: 98.25% tổng hợp / 1.75% dệt may &lt;/li&gt;\r\n             &lt;li&gt;Phần đế: EVA&lt;/li&gt;\r\n          &lt;/ul&gt;', 2, 4),
(41, 'Giày Đi Bộ Đường Dài Ngoài Trời Chống Thấm Nước Nam Columbia PEAKFREAK™ II OUTDRY™', 'pro-39-01-full.webp', 3490000, 0, 0, 3, 'Nam', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y ĐI BỘ ĐƯỜNG D&Agrave;I NAM COLUMBIA PEAKFREAK&trade; II OUTDRY&trade;\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nĐ&ocirc;i gi&agrave;y đi bộ n&agrave;y c&oacute; khả năng chống thấm nước tốt, tho&aacute;ng kh&iacute; v&agrave; được chế tạo để chạy với độ b&aacute;m đường cao trong d&ugrave; l&agrave; trong điều kiện ẩm ướt hay kh&ocirc; r&aacute;o. Đế giữa c&oacute; đệm hỗ trợ bạn lu&ocirc;n cảm thấy sự thoải m&aacute;i, ổn định. Hệ thống d&acirc;y buộc ở giữa gi&uacute;p tối ưu sự vừa vặn tự nhi&ecirc;n cho đ&ocirc;i ch&acirc;n.  \r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Lưới liền mạch mang lại sự vừa vặn v&agrave; hỗ trợ đặc biệt&lt;/li&gt;\r\n             &lt;li&gt;C&ocirc;ng nghệ OutDry&trade; kh&ocirc;ng thấm nước, kết cấu tho&aacute;ng kh&iacute;&lt;/li&gt;\r\n             &lt;li&gt;Đế giữa Techlite+ &trade; bằng bọt mật độ đơn mang lại trải nghiệm đệm dưới b&agrave;n ch&acirc;n nhạy b&eacute;n đồng thời mang lại sự thoải m&aacute;i v&agrave; ổn định vượt trội tr&ecirc;n những cung đường m&ograve;n&lt;/li&gt;\r\n             &lt;li&gt;Đế ngo&agrave;i Adapt Trax &trade; cung cấp lực k&eacute;o đặc biệt trong điều kiện kh&ocirc; v&agrave; ướt&lt;/li&gt;\r\n             &lt;li&gt;NAVIC FIT SYSTEM &trade; mang đến khả năng kh&oacute;a ch&acirc;n giữa tự nhi&ecirc;n&lt;/li&gt;\r\n             &lt;li&gt;In 3D cung cấp độ ổn định nhẹ&lt;/li&gt;\r\n             &lt;li&gt;Lưu &yacute;: d&acirc;y v&agrave; kh&oacute;a k&eacute;o được kết hợp trong gi&agrave;y d&eacute;p của thương hiệu Columbia kh&ocirc;ng chống thấm nước&lt;/li&gt;\r\n             &lt;li&gt;Trọng lượng: 13,4 oz / 379g / chiếc (Cỡ 9)&lt;/li&gt;\r\n             &lt;li&gt;Phần tr&ecirc;n: lưới&lt;/li&gt;\r\n             &lt;li&gt;Đế giữa: Techlite+ &trade;&lt;/li&gt;\r\n             &lt;li&gt;Đế ngo&agrave;i: Adapt Trax &trade;&lt;/li&gt;\r\n          &lt;/ul&gt;', 3, 2);
INSERT INTO `product` (`id_pro`, `pro_name`, `image`, `price`, `price_sale`, `special`, `views`, `gender`, `description`, `id_cate`, `id_brand`) VALUES
(42, 'Giày Đi Bộ Đường Dài Ngoài Trời Chống Thấm Nước Nữ Columbia PEAKFREAK™ II OUTDRY™', 'pro-40-01-full.webp', 3490000, 0, 0, 1, 'Nữ', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\nGI&Agrave;Y ĐI BỘ ĐƯỜNG D&Agrave;I NỮ COLUMBIA PEAKFREAK&trade; II OUTDRY&trade;\r\n          &lt;/h3&gt;\r\n           &lt;p&gt;\r\nKhi trời mưa hoặc khi địa h&igrave;nh c&oacute; tuyết tan mềm, đ&ocirc;i gi&agrave;y đi bộ của phụ nữ n&agrave;y cung cấp khả năng bảo vệ chống chịu thời tiết đặc biệt v&agrave; c&oacute; kết cấu tho&aacute;ng kh&iacute;. C&ocirc;ng nghệ kh&oacute;a lưới v&agrave; hệ thống d&acirc;y giữa b&agrave;n ch&acirc;n liền mạch gi&uacute;p đ&ocirc;i gi&agrave;y n&agrave;y trở n&ecirc;n ho&agrave;n hảo cho những chuyến phi&ecirc;u lưu cả ng&agrave;y. D&ugrave; ướt hay kh&ocirc;, cỏ hay sỏi, đế ngo&agrave;i được thiết kế gi&uacute;p bạn vững v&agrave;ng tr&ecirc;n mọi địa h&igrave;nh.\r\n        &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ&lt;/h3&gt;\r\n          &lt;ul&gt;\r\n             &lt;li&gt;Phần tr&ecirc;n (upper): NAVIC FIT SYSTEM &trade; mang đến khả năng cố định ch&acirc;n giữa tự nhi&ecirc;n. C&ocirc;ng nghệ OutDry&trade; kh&ocirc;ng thấm nước, kết cấu tho&aacute;ng kh&iacute;. Lưới liền mạch mang lại sự vừa vặn v&agrave; hỗ trợ đặc biệt.&lt;/li&gt;\r\n             &lt;li&gt;Đế giữa: đế giữa bằng bọt mật độ đơn Techlite+&trade; mang lại trải nghiệm đệm dưới b&agrave;n ch&acirc;n nhạy b&eacute;n đồng thời mang lại sự thoải m&aacute;i v&agrave; ổn định vượt trội tr&ecirc;n đường m&ograve;n.&lt;/li&gt;\r\n             &lt;li&gt;Đế ngo&agrave;i: đế ngo&agrave;i Adapt Trax&trade; cung cấp lực k&eacute;o vượt trội d&ugrave; trong điều kiện kh&ocirc; hay ướt.&lt;/li&gt;\r\n             &lt;li&gt;Lưu &yacute;: d&acirc;y buộc v&agrave; kh&oacute;a k&eacute;o được t&iacute;ch hợp trong gi&agrave;y d&eacute;p của Columbia Sportswear Company kh&ocirc;ng chống thấm nước.&lt;/li&gt;\r\n          &lt;/ul&gt;', 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_brand`
--

CREATE TABLE `product_brand` (
  `id_brand` int(11) NOT NULL,
  `brand_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_brand`
--

INSERT INTO `product_brand` (`id_brand`, `brand_name`, `logo`) VALUES
(1, 'ADIDAS', 'adidas-brand.png'),
(2, 'COLUMBIA', 'columbia-brand.webp'),
(3, 'CONVERSE', 'converse-brand.avif'),
(4, 'FILA', 'file-brand.avif'),
(5, 'JORDAN', ''),
(6, 'HOKA', 'hoka-brand.png'),
(7, 'NIKE', 'nike-brand.png'),
(8, 'NEW BALANCE', 'new-balance-brand.png'),
(9, 'PUMA', 'puma-brand.avif'),
(10, 'UNDER ARMOR', 'under-armor-brand.avif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_color`
--

CREATE TABLE `product_color` (
  `id_pro_color` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_color`
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
-- Cấu trúc bảng cho bảng `product_detail_img`
--

CREATE TABLE `product_detail_img` (
  `id_pro_detail_img` int(11) NOT NULL,
  `pro_detail_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_detail_img`
--

INSERT INTO `product_detail_img` (`id_pro_detail_img`, `pro_detail_image`, `id_pro`) VALUES
(4, 'pro-1-02-full.webp', 1),
(6, 'pro-1-03-full.webp', 1),
(8, 'pro-1-04-full.webp', 1),
(10, 'pro-2-02-full.webp', 7),
(11, 'pro-2-03-full.webp', 7),
(12, 'pro-2-04-full.webp', 7),
(17, 'pro-4-03-full.webp', 21),
(18, 'pro-4-04-full.webp', 21),
(23, 'pro-5-01-full.webp', 19),
(29, 'pro-5-03-full.webp', 19),
(30, 'pro-5-04-full.webp', 19),
(31, 'pro-4-02-full.webp', 21),
(33, 'pro-4-05-full.webp', 21),
(34, 'pro-4-01-full.webp', 21),
(35, 'pro-2-01-full.webp', 7),
(37, 'pro-11-02-full.webp', 23),
(38, 'pro-11-04-full.webp', 23),
(39, 'pro-11-01-full.webp', 23),
(40, 'pro-11-03-full.webp', 23),
(41, 'pro-10-01-full.webp', 22),
(42, 'pro-10-02-full.webp', 22),
(43, 'pro-10-03-full.webp', 22),
(44, 'pro-10-04-full.webp', 22),
(45, 'pro-10-05-full.webp', 22),
(46, 'pro-5-02-full.webp', 19),
(47, 'pro-5-05-full.webp', 19),
(48, 'pro-9-01-full.webp', 18),
(49, 'pro-9-02-full.webp', 18),
(50, 'pro-9-03-full.webp', 18),
(51, 'pro-9-04-full.webp', 18),
(52, 'pro-9-05-full.webp', 18),
(53, 'pro-12-01-full.webp', 17),
(54, 'pro-12-02-full.webp', 17),
(55, 'pro-12-03-full.webp', 17),
(56, 'pro-12-04-full.webp', 17),
(57, 'pro-12-05-full.webp', 17),
(58, 'pro-13-01-full.webp', 16),
(59, 'pro-13-05-full.webp', 16),
(60, 'pro-13-04-full.webp', 16),
(61, 'pro-13-03-full.webp', 16),
(62, 'pro-13-02-full.webp', 16),
(63, 'pro-14-01-full.webp', 15),
(64, 'pro-14-02-full.webp', 15),
(65, 'pro-14-03-full.webp', 15),
(66, 'pro-14-04-full.webp', 15),
(67, 'pro-14-05-full.webp', 15),
(68, 'pro-15-01-full.webp', 14),
(69, 'pro-15-02-full.webp', 14),
(70, 'pro-15-03-full.webp', 14),
(71, 'pro-15-04-full.webp', 14),
(72, 'pro-15-05-full.webp', 14),
(73, 'pro-8-01-full.webp', 13),
(74, 'pro-8-02-full.webp', 13),
(75, 'pro-8-03-full.webp', 13),
(76, 'pro-8-04-full.webp', 13),
(77, 'pro-8-05-full.webp', 13),
(78, 'pro-16-01-full.webp', 12),
(79, 'pro-16-02-full.webp', 12),
(80, 'pro-16-03-full.webp', 12),
(81, 'pro-16-04-full.webp', 12),
(82, 'pro-16-05-full.webp', 12),
(83, 'pro-16-06-full.webp', 12),
(84, 'pro-17-01-full.webp', 11),
(85, 'pro-17-02-full.webp', 11),
(86, 'pro-17-03-full.webp', 11),
(87, 'pro-17-04-full.webp', 11),
(88, 'pro-17-05-full.webp', 11),
(89, 'pro-17-06-full.webp', 11),
(90, 'pro-18-01-full.webp', 10),
(91, 'pro-18-02-full.webp', 10),
(92, 'pro-18-03-full.webp', 10),
(93, 'pro-18-04-full.webp', 10),
(94, 'pro-18-05-full.webp', 10),
(95, 'pro-18-06-full.webp', 10),
(96, 'pro-19-01-full.webp', 9),
(97, 'pro-19-02-full.webp', 9),
(98, 'pro-19-03-full.webp', 9),
(99, 'pro-19-04-full.webp', 9),
(100, 'pro-19-05-full.webp', 9),
(101, 'pro-20-01-full.webp', 8),
(102, 'pro-20-02-full.webp', 8),
(103, 'pro-20-03-full.webp', 8),
(104, 'pro-20-04-full.webp', 8),
(105, 'pro-20-05-full.webp', 8),
(106, 'pro-20-06-full.webp', 8),
(107, 'pro-2-05-full.webp', 7),
(108, 'pro-6-01-full.webp', 6),
(109, 'pro-6-02-full.webp', 6),
(110, 'pro-6-03-full.webp', 6),
(111, 'pro-6-04-full.webp', 6),
(113, 'pro-6-05-full.webp', 6),
(114, 'pro-21-01-full.webp', 5),
(115, 'pro-21-02-full.webp', 5),
(116, 'pro-21-03-full.webp', 5),
(117, 'pro-21-04-full.webp', 5),
(118, 'pro-21-05-full.webp', 5),
(119, 'pro-22-01-full.webp', 4),
(120, 'pro-22-02-full.webp', 4),
(121, 'pro-22-03-full.webp', 4),
(122, 'pro-22-04-full.webp', 4),
(123, 'pro-22-05-full.webp', 4),
(124, 'pro-23-01-full.webp', 2),
(125, 'pro-23-02-full.webp', 2),
(126, 'pro-23-03-full.webp', 2),
(127, 'pro-23-04-full.webp', 2),
(128, 'pro-23-05-full.webp', 2),
(129, 'pro-1-01-full.webp', 1),
(130, 'pro-1-05-full.webp', 1),
(131, 'pro-24-01-full.webp', 26),
(132, 'pro-24-02-full.webp', 26),
(133, 'pro-24-03-full.webp', 26),
(134, 'pro-24-04-full.webp', 26),
(135, 'pro-24-05-full.webp', 26),
(136, 'pro-25-01-full.webp', 27),
(137, 'pro-25-02-full.webp', 27),
(138, 'pro-25-03-full.webp', 27),
(139, 'pro-25-04-full.webp', 27),
(140, 'pro-25-05-full.webp', 27),
(141, 'pro-26-01-full.webp', 28),
(142, 'pro-26-02-full.webp', 28),
(143, 'pro-26-03-full.webp', 28),
(144, 'pro-26-04-full.webp', 28),
(145, 'pro-26-05-full.webp', 28),
(146, 'pro-27-01-full.webp', 29),
(147, 'pro-27-02-full.webp', 29),
(148, 'pro-27-03-full.webp', 29),
(149, 'pro-27-04-full.webp', 29),
(150, 'pro-27-05-full.webp', 29),
(151, 'pro-28-01-full.webp', 30),
(152, 'pro-28-02-full.webp', 30),
(153, 'pro-28-03-full.webp', 30),
(154, 'pro-28-04-full.webp', 30),
(155, 'pro-28-05-full.webp', 30),
(156, 'pro-29-01-full.webp', 31),
(157, 'pro-29-02-full.webp', 31),
(158, 'pro-29-03-full.webp', 31),
(159, 'pro-29-04-full.webp', 31),
(160, 'pro-29-05-full.webp', 31),
(161, 'pro-30-01-full.webp', 32),
(162, 'pro-30-02-full.webp', 32),
(163, 'pro-30-03-full.webp', 32),
(164, 'pro-30-04-full.webp', 32),
(165, 'pro-30-05-full.webp', 32),
(166, 'pro-31-01-full.webp', 33),
(167, 'pro-31-02-full.webp', 33),
(168, 'pro-31-03-full.webp', 33),
(169, 'pro-31-04-full.webp', 33),
(170, 'pro-31-05-full.webp', 33),
(171, 'pro-32-01-full.webp', 34),
(172, 'pro-32-02-full.webp', 34),
(173, 'pro-32-03-full.webp', 34),
(174, 'pro-32-04-full.webp', 34),
(175, 'pro-32-05-full.webp', 34),
(176, 'pro-33-01-full.webp', 35),
(177, 'pro-33-02-full.webp', 35),
(178, 'pro-33-03-full.webp', 35),
(179, 'pro-33-04-full.webp', 35),
(180, 'pro-33-05-full.webp', 35),
(181, 'pro-34-01-full.webp', 36),
(182, 'pro-34-02-full.webp', 36),
(183, 'pro-34-03-full.webp', 36),
(184, 'pro-34-04-full.webp', 36),
(185, 'pro-34-05-full.webp', 36),
(186, 'pro-35-01-full.webp', 37),
(187, 'pro-35-02-full.webp', 37),
(188, 'pro-35-03-full.webp', 37),
(189, 'pro-35-04-full.webp', 37),
(190, 'pro-35-05-full.webp', 37),
(191, 'pro-36-01-full.webp', 38),
(192, 'pro-36-02-full.webp', 38),
(193, 'pro-36-03-full.webp', 38),
(194, 'pro-36-04-full.webp', 38),
(195, 'pro-36-05-full.webp', 38),
(196, 'pro-37-01-full.webp', 39),
(197, 'pro-37-02-full.webp', 39),
(198, 'pro-37-03-full.webp', 39),
(199, 'pro-37-04-full.webp', 39),
(200, 'pro-37-05-full.webp', 39),
(201, 'pro-38-01-full.webp', 40),
(202, 'pro-38-02-full.webp', 40),
(203, 'pro-38-03-full.webp', 40),
(204, 'pro-38-04-full.webp', 40),
(205, 'pro-38-05-full.webp', 40),
(206, 'pro-39-01-full.webp', 41),
(207, 'pro-39-02-full.webp', 41),
(208, 'pro-39-03-full.webp', 41),
(209, 'pro-39-04-full.webp', 41),
(210, 'pro-39-05-full.webp', 41),
(211, 'pro-39-06-full.webp', 41),
(212, 'pro-40-01-full.webp', 42),
(213, 'pro-40-02-full.webp', 42),
(214, 'pro-40-03-full.webp', 42),
(215, 'pro-40-04-full.webp', 42),
(216, 'pro-40-05-full.webp', 42),
(217, 'pro-40-06-full.webp', 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_size`
--

CREATE TABLE `product_size` (
  `id_pro_size` int(11) NOT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_size`
--

INSERT INTO `product_size` (`id_pro_size`, `size`, `id_pro`) VALUES
(1, '35', 1),
(2, '36', 1),
(3, '37', 1),
(4, '36', 2),
(5, '37', 2),
(6, '38', 2),
(7, '39', 2),
(8, '36', 3),
(9, '37', 3),
(10, '38', 3),
(11, '35', 4),
(12, '36', 4),
(13, '37', 4),
(14, '38', 4),
(15, '39', 4),
(16, '40', 4),
(17, '36', 5),
(18, '37', 5),
(19, '38', 5),
(20, '39', 5),
(21, '40', 5),
(22, '37', 6),
(23, '38', 6),
(24, '39', 6),
(25, '40', 6),
(26, '35', 7),
(27, '36', 7),
(28, '37', 7),
(29, '38', 7),
(30, '37', 11),
(32, '37', 8),
(33, '38', 8),
(34, '39', 8),
(35, '35', 9),
(36, '36', 9),
(37, '37', 9),
(38, '38', 9),
(39, '39', 9),
(40, '40', 9),
(41, '36', 10),
(42, '37', 10),
(43, '38', 10),
(44, '39', 10),
(45, '40', 10),
(46, '38', 11),
(47, '39', 11),
(48, '40', 11),
(49, '41', 11),
(50, '37', 12),
(51, '38', 12),
(52, '39', 12),
(53, '40', 12),
(55, '39', 13),
(56, '40', 13),
(57, '41', 13),
(58, '36', 13),
(59, '37', 13),
(60, '38', 13),
(63, '37', 14),
(64, '38', 14),
(65, '39', 14),
(66, '40', 14),
(67, '37', 15),
(68, '38', 15),
(69, '39', 15),
(70, '40', 15),
(71, '39', 16),
(72, '40', 16),
(73, '35', 17),
(74, '36', 17),
(75, '37', 17),
(76, '38', 17),
(77, '39', 17),
(78, '38', 18),
(79, '39', 18),
(80, '40', 18),
(81, '36', 21),
(82, '37', 21),
(83, '38', 21),
(84, '39', 21),
(85, '36', 19),
(86, '38', 19),
(88, '40', 19),
(89, '35', 22),
(90, '35.5', 22),
(92, '36.5', 22),
(94, '37', 22),
(95, '38', 22),
(96, '39', 22),
(97, '35', 23),
(98, '36', 23),
(99, '36.5', 23),
(100, '37', 23),
(101, '37.5', 23),
(102, '38', 23),
(103, '39', 23),
(104, '40', 23),
(106, '34', 26),
(107, '33', 26),
(108, '35', 26),
(109, '36', 26),
(110, '32', 26),
(111, '31', 27),
(112, '31.5', 27),
(113, '32', 27),
(114, '33', 27),
(115, '34', 27),
(116, '34.5', 27),
(117, '35', 27),
(118, '35.5', 27),
(119, '36', 27),
(120, '37', 27),
(121, '33', 28),
(122, '34.5', 28),
(123, '35', 28),
(124, '36', 28),
(125, '36.5', 28),
(126, '37', 28),
(127, '33.5', 28),
(128, '34', 29),
(129, '34.5', 29),
(130, '35', 29),
(131, '35.5', 29),
(132, '36', 29),
(133, '37', 29),
(134, '38', 29),
(135, '37', 30),
(136, '37.5', 30),
(137, '38', 30),
(138, '39', 30),
(139, '40', 30),
(140, '41', 30),
(141, '41.5', 30),
(142, '42', 30),
(143, '43', 30),
(144, '38', 31),
(145, '38.5', 31),
(146, '39', 31),
(147, '40', 31),
(148, '40.5', 31),
(149, '41', 31),
(150, '42', 31),
(151, '42.5', 31),
(152, '43', 31),
(153, '44', 31),
(154, '45', 31),
(155, '38', 32),
(156, '37.5', 32),
(157, '37', 32),
(158, '39', 32),
(159, '40', 32),
(160, '41', 32),
(161, '42', 32),
(162, '38', 33),
(163, '38.5', 33),
(164, '39', 33),
(165, '40', 33),
(166, '41', 33),
(167, '41.5', 33),
(169, '43', 33),
(170, '44', 33),
(171, '37.5', 34),
(172, '38', 34),
(173, '39', 34),
(174, '40', 34),
(175, '41', 34),
(176, '41.5', 34),
(177, '42', 34),
(178, '43', 34),
(179, '43.5', 34),
(180, '38', 35),
(181, '38.5', 35),
(182, '40', 35),
(183, '40.5', 35),
(184, '41', 35),
(185, '42', 35),
(186, '42.5', 35),
(187, '43', 35),
(188, '44', 35),
(189, '45', 35),
(190, '37.5', 36),
(191, '38', 36),
(192, '39', 36),
(193, '40', 36),
(194, '41', 36),
(195, '42', 36),
(196, '42.5', 36),
(197, '43', 36),
(198, '35', 37),
(199, '35.5', 37),
(200, '36', 37),
(201, '37', 37),
(202, '38', 37),
(203, '34', 37),
(204, '35', 38),
(205, '35.5', 38),
(206, '36', 38),
(207, '36.5', 38),
(208, '37', 38),
(209, '34.5', 39),
(210, '35', 39),
(211, '35.5', 39),
(212, '36', 39),
(213, '36.5', 39),
(214, '37', 39),
(215, '38', 39),
(216, '33', 40),
(217, '34', 40),
(218, '34.5', 40),
(219, '35', 40),
(220, '36', 40),
(221, '36.5', 40),
(222, '38', 41),
(223, '38.5', 41),
(224, '39', 41),
(225, '39.5', 41),
(226, '40', 41),
(227, '41.5', 41),
(228, '42', 41),
(229, '43', 41),
(230, '36', 42),
(231, '35', 42),
(232, '35.5', 42),
(233, '34.5', 42),
(234, '37', 42),
(235, '38', 42),
(236, '38.5', 42),
(237, '39', 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `password`, `image`, `name`, `phone`, `email`, `address`, `role`) VALUES
('admin', '123456', 'z3348074479647_20ecdbdbce649b9bad78bbab45eff34e.jpg', 'Admin Công Lê', '0965973668', 'congltph27602@fpt.edu.vn', 'V3 Văn Phú, Hà Đông, Hà Nội', 1),
('admin2', '123456', 'z3348074449352_3a574f6714a66f306b8f6ebf5f90bfc2.jpg', 'Lê Công', '', 'congldqn888@gmail.com', '', 0),
('conglt', '123456', 'yoru_smile.jpg', 'Công Lê', '0965973667', 'lethanhcong2003@gmail.com', 'Thành Phố Cẩm Phả, Tỉnh Quảng Ninh', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_bankcode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_banktranno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_cardtype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_orderinfo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_paydate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vnp_transactionno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_bill` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_transactionno`, `id_bill`) VALUES
(143, '775740000', 'NCB', 'VNP13904671', 'ATM', 'Thanh toán đơn hàng đặt tại website', '20221215052312', '13904671', 'SHOELIKE14858');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `order_total`
--
ALTER TABLE `order_total`
  ADD PRIMARY KEY (`id_order_total`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Chỉ mục cho bảng `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id_pro_color`);

--
-- Chỉ mục cho bảng `product_detail_img`
--
ALTER TABLE `product_detail_img`
  ADD PRIMARY KEY (`id_pro_detail_img`);

--
-- Chỉ mục cho bảng `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id_pro_size`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT cho bảng `order_total`
--
ALTER TABLE `order_total`
  MODIFY `id_order_total` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=438;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id_pro_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `product_detail_img`
--
ALTER TABLE `product_detail_img`
  MODIFY `id_pro_detail_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT cho bảng `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id_pro_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
