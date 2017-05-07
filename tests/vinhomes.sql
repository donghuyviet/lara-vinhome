-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 09:30 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinhomes`
--

-- --------------------------------------------------------

--
-- Table structure for table `articel`
--

CREATE TABLE `articel` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8_unicode_ci,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articel`
--

INSERT INTO `articel` (`id`, `title`, `slug`, `desc`, `images`, `description`, `remember_token`, `created_at`, `updated_at`, `status`, `cate_id`) VALUES
(27, 'Vinhomes Riverside hòa ', 'vinhomes-riverside-hoa', '<p>Vinhomes Riverside The Harmony được quy hoạch gồm 4 tiểu khu với c&aacute;c phong c&aacute;ch thiết kế ri&ecirc;ng biệt, hội tụ tinh hoa kiến tr&uacute;c thế giới. Thiết kế hợp l&yacute; về ph&acirc;n chia v&agrave; bố tr&iacute; kh&ocirc;ng gian trong ng&ocirc;i biệt thự, liền kề, tạo n&ecirc;n kh&ocirc;ng gian sống l&yacute; tưởng cho c&aacute;c qu&yacute; cư d&acirc;n. Nếu ph&acirc;n khu Nguyệt Quế nổi bật với phong c&aacute;ch thiết kế Hi Lạp, ph&acirc;n khu Phong Lan định nghĩa lại phong c&aacute;ch kiến tr&uacute;c cổ điển Ph&aacute;p, hay ph&acirc;n khu Hướng Dương h&ograve;a hợp giữa phong c&aacute;ch thiết kế &Aacute; Đ&ocirc;ng v&agrave; kiến tr&uacute;c Ph&aacute;p, th&igrave; tiểu khu Tulip sẽ l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c chủ nh&acirc;n y&ecirc;u th&iacute;ch kh&ocirc;ng gian sống l&atilde;ng mạn v&agrave; thanh b&igrave;nh.</p>\r\n', '6g1x_saleskit-2-768x543.jpg', '<p>&aacute;dfadsf</p>\r\n', NULL, '2017-04-08 06:40:43', '2017-05-06 08:29:11', '0', '21'),
(32, 'Sunderland vs Man Utd (0-2, H2): Mkhitaryan tỏa sáng', 'sunderland-vs-man-utd-0-2-h2-mkhitaryan-toa-sang', NULL, 'vIP6_15969890_574786799386767_940791767_n-768x539.jpg', '<p>Sunderland vs Man Utd (dfasdfasdf<img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/IMG_6473-1024x797.jpg" style="height:797px; width:1024px" />0-2, H2): Mkhitaryan tỏa s&aacute;ng</p>\r\n', NULL, '2017-04-09 07:12:49', '2017-05-06 06:54:56', '0', '21'),
(37, ' Nhà vườn xanh chỉ có tại tiểu khu Nguyệt Quế, Phong Lan', 'nha-vuon-xanh-chi-co-tai-tieu-khu-nguyet-que', NULL, 'yyhH_0-02-06-87063757a191b64ecc50f95737a7562618d2e791a1e6fd1c2d8c4ef9d3c1a68f_full.jpg', '<h2>Nh&agrave; vườn&nbsp;<a href="http://bietthulienkeharmony.com/">Vinhomes Riverside The Harmony</a>&nbsp;như một nốt nhạc xanh giữa rừng hoa Nguyệt Quế, Phong Lan</h2>\r\n\r\n<p>Sở hữu những vẻ đẹp độc đ&aacute;o giữa thi&ecirc;n nhi&ecirc;n xanh, tho&aacute;ng rộng l&agrave; những điều tuyệt vời m&agrave; 105 căn nh&agrave; vườn duy nhất chỉ c&oacute; tại 2 tiểu khu Nguyệt Quế v&agrave; Phong Lan của The Harmony. Mỗi căn nh&agrave; vườn giữa phố mang đến những điều mới mẻ, những n&eacute;t đẹp gần gũi m&agrave; kh&ocirc;ng đơn giản, tinh tế m&agrave; kh&ocirc;ng qu&aacute; cầu k&igrave;.&nbsp;</p>\r\n\r\n<p><img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/0-02-06-87063757a191b64ecc50f95737a7562618d2e791a1e6fd1c2d8c4ef9d3c1a68f_full.jpg" style="height:352px; width:640px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/IMG_6473-1024x797.jpg" style="height:797px; width:1024px" /></p>\r\n', NULL, '2017-05-05 22:54:05', '2017-05-05 22:55:34', '0', '21'),
(38, 'biệt thự liền kề', 'biet-thu-lien-ke', NULL, 'aow2_day-pho-dong-duong.jpg', '<p>dfasdfadf</p>\r\n', NULL, '2017-05-06 07:12:49', '2017-05-06 07:12:49', '0', '21'),
(39, 'biệt thự nhà vườn', 'biet-thu-nha-vuon', NULL, 'JvtM_day-pho-dong-duong.jpg', '<p>dfasdfadf</p>\r\n', NULL, '2017-05-06 07:13:28', '2017-05-06 07:13:28', '0', '0'),
(40, 'Khu Nguyệt Quế', 'khu-nguyet-que', '<p>Tiểu khu Nguyệt QuếVinhomes Riverside The Harmony&nbsp;l&agrave; sự hội tụ tinh hoa của thiết kế cổ điển, mang cảm hứng từ ng&ocirc;i đền Parthenon nổi tiếng, với sự c&aacute;ch t&acirc;n mang hơi hướng hiện đại. C&aacute;c ng&ocirc;i biệt thự sang trọng v&agrave; bề thế tại Vinhomes Riverside The Harmony đem tới cho c&aacute;c chủ nh&acirc;n một kh&ocirc;ng gian sống ho&agrave;n mỹ,&nbsp;</p>\r\n', 'MfH2_tu-lap-phap.jpg', '<p>Nh&agrave; vườn&nbsp;Vinhomes Riverside The Harmony&nbsp;như một nốt nhạc xanh giữa rừng hoa Nguyệt Quế, Phong Lan</p>\r\n\r\n<p><img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/0-02-06-43fbcd36c00b30cfd9dc3ec219bb34de51e3c1e8dd031a8a714e248aad20edf8_full.jpg" style="height:400px; width:640px" /></p>\r\n\r\n<p><strong>Nh&agrave; vườn Vinhomes Riverside The Harmony &ndash; ph&ugrave; hợp với văn h&oacute;a Việt</strong></p>\r\n\r\n<p>Với lối sống &ldquo;Tối lửa tắt đ&egrave;n c&oacute; nhau&rdquo;, ch&iacute;nh v&igrave; thế c&aacute;c căn nh&agrave; vườn tại Vinhomes Riverside The Harmony mang đầy đủ những nh&acirc;n tố tốt đẹp ph&ugrave; hợp với văn h&oacute;a Việt. Sinh sống tại mỗi căn nh&agrave; vườn, Q&uacute;y cư d&acirc;n vừa c&oacute; một cộng đồng văn minh, đẳng cấp&nbsp;đồng thời cũng&nbsp;c&oacute; một kh&ocirc;ng gian ri&ecirc;ng biệt cho gia đ&igrave;nh m&igrave;nh. Th&ecirc;m v&agrave;o đ&oacute;, chỉ với v&agrave;i bước ch&acirc;n, cư d&acirc;n c&oacute; thể kết nối v&agrave; tận hưởng hơn 100 tiện &iacute;ch với&nbsp;40 tiện &iacute;ch điểm nhấn như clubhouse, c&ocirc;ng vi&ecirc;n th&aacute;m hiểm, s&acirc;n tập golf, hệ thống trường li&ecirc;n cấp Vinschool, đảo đọc s&aacute;ch, vườn phong c&aacute;ch ch&acirc;u &Acirc;u, bể bơi ngo&agrave;i trời&hellip; Kh&ocirc;ng phải đi đ&acirc;u xa, Vinhomes Riverside &ndash; The Harmony ch&iacute;nh l&agrave; giải đ&aacute;p ho&agrave;n hảo cho những người t&igrave;m kiếm một nơi an cư y&ecirc;n b&igrave;nh để h&ograve;a m&igrave;nh c&ugrave;ng thi&ecirc;n nhi&ecirc;n v&agrave; thực sự tận hưởng trọn vẹn &yacute; nghĩa của cuộc sống.</p>\r\n\r\n<p><img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/0-02-06-87063757a191b64ecc50f95737a7562618d2e791a1e6fd1c2d8c4ef9d3c1a68f_full%20(1).jpg" style="height:352px; width:640px" /></p>\r\n\r\n<p>Ngo&agrave;i việc thiết kế c&aacute;c căn nh&agrave; vườn mang c&aacute;c phong c&aacute;ch kh&aacute;c nhau, h&ograve;a quyện c&ugrave;ng nền văn h&oacute;a Việt , th&igrave; c&aacute;c khu nh&agrave; vườn của Vinhomes Riverside &ndash; The Harmony mang những n&eacute;t đặc trưng của phong c&aacute;ch ch&acirc;u &Acirc;u, vừa sang trọng, cổ điển nhưng vẫn coi trọng kh&ocirc;ng gian thi&ecirc;n nhi&ecirc;n. Với diện t&iacute;ch đất từ 151,6 m2 đến 241,7 m2 mặt tiền mỗi căn từ 7 &ndash; 8 m, c&aacute;c căn nh&agrave; vườn l&agrave; &yacute; tưởng h&agrave;i h&ograve;a kh&ocirc;ng gian sống xanh với nhịp sống hiện đại của cả gia đ&igrave;nh.</p>\r\n\r\n<p><strong>Nh&agrave; vườn Vinhomes Riverside The Harmony &ndash; phong c&aacute;ch độc đ&aacute;o&nbsp;</strong></p>\r\n\r\n<p>C&aacute;c căn nh&agrave; vườn xanh&nbsp;tại 2 tiểu khu Nguyệt Quế, Phong Lan hiện hữu như một nốt nhạc xanh vừa &ecirc;m đềm, vừa cuốn h&uacute;t với đầy đủ c&aacute;c tiện &iacute;ch hiện đại v&agrave; tiện nghi.&nbsp;Với 38 căn nh&agrave; vườn tại tiểu khu Phong Lan v&agrave; 67 căn nh&agrave; vườn tại tiểu khu Nguyệt Quế mang c&aacute;c phong c&aacute;ch kiến tr&uacute;c Ph&aacute;p, Hy Lạp h&ograve;a quyện c&ugrave;ng nền văn h&oacute;a Việt mang đến sự tinh tế đến từng chi tiết.</p>\r\n', NULL, '2017-05-06 07:40:54', '2017-05-06 08:27:04', '0', '22'),
(41, 'Tiểu khu Phong Lan', 'tieu-khu-phong-lan', '<p>Tiểu khu Phong Lan Vinhomes Riverside The Harmony&nbsp;nổi bật mang phong c&aacute;ch kiến tr&uacute;c Ph&aacute;p, đất nước nổi tiếng với lối kiến tr&uacute;c tinh tế, trang nh&atilde;, sang trọng. Kiến tr&uacute;c Ph&aacute;p l&atilde;ng mạn vốn ch&uacute; t&acirc;m đến việc tạo dựng n&ecirc;n c&aacute;c c&ocirc;ng tr&igrave;nh định h&igrave;nh phong c&aacute;ch trang nh&atilde; sang trọng. C&aacute;c căn biệt thự tại tiểu khu Phong Lan, chắc chắn sẽ mang tới cho c&aacute;c qu&yacute; chủ nh&acirc;n c&oacute; gu thẩm mỹ tinh tế sự lựa chọn kh&aacute;c biệt v&agrave; xứng tầm.</p>\r\n', 'iaTh_don-lap-hy-lap.png', '<p>Tiểu khu Phong Lan Vinhomes Riverside The Harmony&nbsp;nổi bật mang phong c&aacute;ch kiến tr&uacute;c Ph&aacute;p, đất nước nổi tiếng với lối kiến tr&uacute;c tinh tế, trang nh&atilde;, sang trọng. Kiến tr&uacute;c Ph&aacute;p l&atilde;ng mạn vốn ch&uacute; t&acirc;m đến việc tạo dựng n&ecirc;n c&aacute;c c&ocirc;ng tr&igrave;nh định h&igrave;nh phong c&aacute;ch trang nh&atilde; sang trọng. C&aacute;c căn biệt thự tại tiểu khu Phong Lan, chắc chắn sẽ mang tới cho c&aacute;c qu&yacute; chủ nh&acirc;n c&oacute; gu thẩm mỹ tinh tế sự lựa chọn kh&aacute;c biệt v&agrave; xứng tầm.</p>\r\n\r\n<p><img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/PL-768x689.jpg" style="height:689px; width:768px" /></p>\r\n\r\n<p><em><strong>D&atilde;y phố phong c&aacute;ch Ph&aacute;p Vinhomes Riverside The Harmony</strong></em></p>\r\n\r\n<p><strong>TH&Ocirc;NG TIN TỔNG QUAN</strong></p>\r\n\r\n<p>Tiểu khu Phong Lan Vinhomes Riverside The Harmony l&agrave; tiểu khu gần nhất với khu d&acirc;n sinh sầm uất nằm tại cửa ng&otilde; ch&iacute;nh của dự &aacute;n, bao quanh bởi hệ thống k&ecirc;nh đ&agrave;o sinh th&aacute;i gần 1,500m.&nbsp;Tọa lạc tại ph&iacute;a T&acirc;y Nam dự &aacute;n, nơi giao th&ocirc;ng nội đ&ocirc; h&ograve;a hợp v&agrave; kết nối trực tiếp với c&aacute;c tiện &iacute;ch 5*. Tiểu khu Phong Lan được thiết kế theo kiến tr&uacute;c cổ điển nguy&ecirc;n bản nước Ph&aacute;p. Lựa chọn tiểu khu Phong Lan, cư d&acirc;n kh&ocirc;ng chỉ thỏa sức đắm m&igrave;nh trong một kh&ocirc;ng gian kiến tr&uacute;c l&atilde;ng mạn điển h&igrave;nh của Ch&acirc;u &Acirc;u m&agrave; c&ograve;n được hưởng trọn vẹn những lợi thế ưu điểm vượt trội của h&agrave;ng trăm tiện &iacute;ch mới c&ugrave;ng với Trung t&acirc;m thương mại Vincom, khu vui chơi giải tr&iacute;, trung t&acirc;m thể thao,&hellip; của khu đ&ocirc; thị sinh th&aacute;i Vinhomes Riverside.</p>\r\n\r\n<p><strong>+ Tổng số căn Tiểu khu Phong Lan:</strong>&nbsp;167 căn</p>\r\n\r\n<p><strong>+ Loại h&igrave;nh Tiểu khu Phong Lan:</strong>&nbsp;biệt thự đơn lập, song lập, nh&agrave; vườn, liền kề, nh&agrave; phố</p>\r\n\r\n<p><strong>+ Diện t&iacute;ch Tiểu khu Phong Lan:</strong></p>\r\n\r\n<p>Biệt thự đơn lập Tiểu khu Phong Lan: 300 &ndash; 500m2</p>\r\n\r\n<p>Biệt thự song lập Tiểu khu Phong Lan: 207 &ndash; 213 &ndash; 216m2</p>\r\n\r\n<p>Nh&agrave; vườn Tiểu khu Phong Lan: 150 &ndash; 160 &ndash; 180m2</p>\r\n\r\n<p>Liền kềTiểu khu Phong Lan: 90 &ndash; 96m2</p>\r\n\r\n<p>Nh&agrave; phố Tiểu khu Phong Lan:&nbsp;khoảng 200m2</p>\r\n\r\n<p><strong>MẶT BẰNG TIỂU KHU PHONG LAN</strong></p>\r\n\r\n<p><strong><img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/PL-768x689(1).jpg" style="height:689px; width:768px" /></strong></p>\r\n', NULL, '2017-05-06 08:00:55', '2017-05-06 08:27:27', '0', '22'),
(42, 'Khu Hướng Dương', 'khu-huong-duong', '<p>Tiểu khu Hướng Dương Vinhomes Riverside The Harmony được c&aacute;c kiến tr&uacute;c sư ch&uacute; trọng tạo n&ecirc;n điểm nhấn nổi bật kiến tr&uacute;c địa phương thuần chất &Aacute; Đ&ocirc;ng c&ugrave;ng tinh hoa của kiến tr&uacute;c Ph&aacute;p. Sự kết hợp đầy tinh tế của hai nền văn h&oacute;a n&agrave;y tạo n&ecirc;n cho c&aacute;c ng&ocirc;i biệt thự một n&eacute;t đặc trưng về kiến tr&uacute;c kh&ocirc;ng thể h&ograve;a lẫn.</p>\r\n', 'OpZo_lien-ke-phap.jpg', '<p style="text-align:center">Tiểu khu Hướng Dương</p>\r\n\r\n<p>Tiểu khu Hướng Dương Vinhomes Riverside The Harmony được c&aacute;c kiến tr&uacute;c sư ch&uacute; trọng tạo n&ecirc;n điểm nhấn nổi bật kiến tr&uacute;c địa phương thuần chất &Aacute; Đ&ocirc;ng c&ugrave;ng tinh hoa của kiến tr&uacute;c Ph&aacute;p. Sự kết hợp đầy tinh tế của hai nền văn h&oacute;a n&agrave;y tạo n&ecirc;n cho c&aacute;c ng&ocirc;i biệt thự một n&eacute;t đặc trưng về kiến tr&uacute;c kh&ocirc;ng thể h&ograve;a lẫn.</p>\r\n\r\n<blockquote>\r\n<p>&gt;&nbsp;<strong><a href="http://bietthulienkeharmony.com/tieu-khu-nguyet-que-phong-cach-hy-lap/">Tiểu khu Nguyệt Quế</a></strong></p>\r\n</blockquote>\r\n\r\n<p><img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/sli02.jpg" style="height:489px; width:1154px" /></p>\r\n\r\n<p><em><strong>C&aacute;c d&atilde;y biệt thự song lập nổi bật tại tiểu khu Hướng Dương Vinhomes Riverside The Harmony (phong c&aacute;ch Đ&ocirc;ng Dương)</strong></em></p>\r\n\r\n<p>Những căn biệt thự tiểu khu Hướng Dương Vinhomes Riverside The Harmony mang phong c&aacute;ch n&agrave;y lu&ocirc;n lu&ocirc;n kh&aacute;c biệt nhờ hệ m&aacute;i dốc truyền thống, thiết kế với nhiều &ocirc; cửa sổ đ&oacute;n s&aacute;ng, m&aacute;i v&ograve;m v&agrave; ban c&ocirc;ng cong nhẹ nh&agrave;ng c&ugrave;ng nền gạch nhiều hoa văn, họa tiết v&agrave; những chi tiết nội thất tỉ mỉ. Kiến tr&uacute;c Đ&ocirc;ng Dương với những đường n&eacute;t ch&acirc;u &Acirc;u sang trọng đặt trong bối cảnh kh&ocirc;ng gian sinh th&aacute;i thuần Việt l&agrave; tiền đề cho những trải nghiệm sống trọn chất thơ cho những chủ nh&acirc;n tương lai. Tiểu khu Hướng Dương Vinhomes Riverside The Harmony cũng &nbsp;l&agrave; tiểu khu duy nhất sở hữu số &iacute;t những căn Biệt thự mang ph&ograve;ng c&aacute;ch Đ&ocirc;ng Dương độc đ&aacute;o.</p>\r\n\r\n<p><strong>TH&Ocirc;NG TIN TỔNG QUAN</strong></p>\r\n\r\n<p>+<strong>&nbsp;Tổng số căn tiểu khu Hướng Dương :</strong>&nbsp;118 căn</p>\r\n\r\n<p>+&nbsp;<strong>Loại h&igrave;nh Tiểu khu Hướng Dương :</strong>&nbsp;biệt thự đơn lập, song lập, nh&agrave; phố</p>\r\n\r\n<p>+&nbsp;<strong>Thiết kếTiểu khu Hướng Dương :</strong>&nbsp;phong c&aacute;ch Đ&ocirc;ng Dương</p>\r\n\r\n<p>+&nbsp;<strong>Diện t&iacute;ch Tiểu khu Hướng Dương :</strong></p>\r\n\r\n<p>Biệt thự đơn lập: 300 &ndash; 500m2</p>\r\n\r\n<p>Biệt thự song lập: 207 &ndash; 213 &ndash; 216m2</p>\r\n\r\n<p>Nh&agrave; phố: khoảng 200m2</p>\r\n\r\n<p><strong>MẶT BẰNG TIỂU KHU HƯỚNG DƯƠNG</strong></p>\r\n\r\n<p><strong>&gt;&gt;&gt; Xem mặt bằng chi tiết tiểu khu Hướng Dương:&nbsp;<a href="http://bietthulienkeharmony.com/mat-bang-tieu-khu-huong-duong/">CLICK HERE</a></strong></p>\r\n\r\n<p><strong><img alt="" src="http://vinhomes.dev/public/uploads/images/Articels/HD.jpg" style="height:718px; width:800px" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, '2017-05-06 08:04:27', '2017-05-06 08:27:51', '0', '22'),
(43, 'Tiểu Khu TuLip', 'tieu-khu-tupip', '<p>Vinhomes Riverside The Harmony được quy hoạch gồm 4 tiểu khu với c&aacute;c phong c&aacute;ch thiết kế ri&ecirc;ng biệt, hội tụ tinh hoa kiến tr&uacute;c thế giới. Thiết kế hợp l&yacute; về ph&acirc;n chia v&agrave; bố tr&iacute; kh&ocirc;ng gian trong ng&ocirc;i biệt thự, liền kề, tạo n&ecirc;n kh&ocirc;ng gian sống l&yacute; tưởng cho c&aacute;c qu&yacute; cư d&acirc;n. Nếu ph&acirc;n khu Nguyệt Quế nổi bật với phong c&aacute;ch thiết kế Hi Lạp, ph&acirc;n khu Phong Lan định nghĩa lại phong c&aacute;ch kiến tr&uacute;c cổ điển Ph&aacute;p, hay ph&acirc;n khu Hướng Dương h&ograve;a hợp giữa phong c&aacute;ch thiết kế &Aacute; Đ&ocirc;ng v&agrave; kiến tr&uacute;c Ph&aacute;p, th&igrave; tiểu khu Tulip sẽ l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c chủ nh&acirc;n y&ecirc;u th&iacute;ch kh&ocirc;ng gian sống l&atilde;ng mạn v&agrave; thanh b&igrave;nh.</p>\r\n', 'of39_lien-ke-phap.jpg', '<h2><a href="http://bietthulienkeharmony.com/tieu-khu-tulip-phong-cach-y/">Tiểu khu Tulip</a></h2>\r\n\r\n<p>Vinhomes Riverside The Harmony được quy hoạch gồm 4 tiểu khu với c&aacute;c phong c&aacute;ch thiết kế ri&ecirc;ng biệt, hội tụ tinh hoa kiến tr&uacute;c thế giới. Thiết kế hợp l&yacute; về ph&acirc;n chia v&agrave; bố tr&iacute; kh&ocirc;ng gian trong ng&ocirc;i biệt thự, liền kề, tạo n&ecirc;n kh&ocirc;ng gian sống l&yacute; tưởng cho c&aacute;c qu&yacute; cư d&acirc;n. Nếu ph&acirc;n khu Nguyệt Quế nổi bật với phong c&aacute;ch thiết kế Hi Lạp, ph&acirc;n khu Phong Lan định nghĩa lại phong c&aacute;ch kiến tr&uacute;c cổ điển Ph&aacute;p, hay ph&acirc;n khu Hướng Dương h&ograve;a hợp giữa phong c&aacute;ch thiết kế &Aacute; Đ&ocirc;ng v&agrave; kiến tr&uacute;c Ph&aacute;p, th&igrave; tiểu khu Tulip sẽ l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c chủ nh&acirc;n y&ecirc;u th&iacute;ch kh&ocirc;ng gian sống l&atilde;ng mạn v&agrave; thanh b&igrave;nh.</p>\r\n\r\n<blockquote>\r\n<p>&gt;&gt;&nbsp;&nbsp;<a href="http://bietthulienkeharmony.com/tieu-khu-huong-duong-phong-cach-dong-duong/"><strong>Tiểu khu Hướng Dương</strong></a></p>\r\n\r\n<p>&gt;&gt;&nbsp;<a href="http://bietthulienkeharmony.com/tieu-khu-phong-lan-phong-cach-phap/"><strong>Tiểu khu Phong Lan</strong></a></p>\r\n\r\n<p>&gt;&gt;&nbsp;&nbsp;<a href="http://bietthulienkeharmony.com/tieu-khu-nguyet-que-phong-cach-hy-lap/"><strong>Tiểu khu Nguyệt Quế</strong></a></p>\r\n</blockquote>\r\n\r\n<p>Thừa hưởng tinh hoa của giai đoạn 1, c&aacute;c biệt thự mang phong c&aacute;ch Venice tại Vinhomes Riverside &ndash; The Harmony mang m&agrave;u sắc mới, với ng&ocirc;n ngữ sang trọng, tinh tế lấy cảm hứng từ những ng&ocirc;i nh&agrave; thơ mộng ven k&ecirc;nh của th&agrave;nh phố Venice nổi tiếng nước &Yacute;. C&aacute;c chi tiết như những h&agrave;ng cột đ&ocirc;i thanh mảnh, h&agrave;ng cửa sổ v&ograve;m cuốn, ban c&ocirc;ng kết hợp c&ugrave;ng lan can sắt uốn cong duy&ecirc;n d&aacute;ng l&agrave;m n&ecirc;n một t&aacute;c phẩm kiến tr&uacute;c đậm chất nghệ thuật. Chủ nh&acirc;n y&ecirc;u th&iacute;ch vẻ đẹp l&atilde;ng mạn qu&yacute; ph&aacute;i của lối thiết kế cầu kỳ sẽ kh&ocirc;ng chần chừ chọn sống tại những căn biệt thự mang phong c&aacute;ch &Yacute;.</p>\r\n\r\n<p>Sự lựa chọn đa dạng ph&ugrave; hợp với nhu cầu ri&ecirc;ng của mỗi chủ nh&acirc;n:</p>\r\n\r\n<p>&ndash; Biệt thự Đơn lập</p>\r\n\r\n<p>&ndash; Biệt thự Song lập</p>\r\n\r\n<p>&ndash; Biệt thự Tứ lập</p>\r\n\r\n<p>&ndash; Nh&agrave; liền kề</p>\r\n\r\n<p><img src="http://bietthulienkeharmony.com/wp-content/uploads/2017/02/noi-that-tulip.jpg" style="height:384px; width:691px" title="Sống sang trọng và đẳng cấp trong các ngôi biệt thự liền kề tiểu khu Tulip" /></p>\r\n\r\n<p><em><strong>Sống sang trọng v&agrave; đẳng cấp trong c&aacute;c ng&ocirc;i biệt thự liền kề tiểu khu Tulip</strong></em></p>\r\n\r\n<p>Sở hữu vị tr&iacute; đắc địa ven hồ điều h&ograve;a trung t&acirc;m rộng 12,4ha, c&aacute;c cư d&acirc;n tại tiểu khu Tulip c&oacute; được tầm nh&igrave;n tuyệt đẹp đến kh&ocirc;ng gian mặt nước trải d&agrave;i, cũng như dễ d&agrave;ng thừa hưởng c&aacute;c tiện &iacute;ch đẳng cấp tại Vinhomes Riverside The Harmony.</p>\r\n\r\n<p><img alt="" src="http://bietthulienkeharmony.com/wp-content/uploads/2017/02/Vinhome-Riverside-harmony.jpg" style="height:364px; width:648px" /></p>\r\n\r\n<p><em><strong>C&aacute;c cư d&acirc;n tiểu khu Tulip dễ d&agrave;ng được thừa hưởng c&aacute;c tiện &iacute;ch đẳng cấp ven hồ trung t&acirc;m 12,4ha</strong></em></p>\r\n\r\n<p><img alt="" src="http://bietthulienkeharmony.com/wp-content/uploads/2017/01/FULL.jpg" style="height:576px; width:642px" /></p>\r\n\r\n<p>Tiếp tục mang cảm hứng thiết kế l&atilde;ng mạn đến từ nước &Yacute; xinh đẹp, tiểu khu Tulip sẽ l&agrave; lựa chọn an cư l&yacute; tưởng với những ai m&ecirc; đắm th&agrave;nh phố Venice xinh đẹp. C&aacute;c căn biệt thự được thiết kế tinh tế, sang trọng v&agrave; h&agrave;i h&ograve;a c&ugrave;ng kh&ocirc;ng gian cảnh quan chung, đặc biệt l&agrave; hồ điều h&ograve;a rộng lớn tạo n&ecirc;n một tổng thể ho&agrave;n mỹ tạo lập cuộc sống đẳng cấp v&agrave; xứng tầm d&agrave;nh cho cộng đồng cư d&acirc;n thượng lưu.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i sẽ li&ecirc;n tục cập nhật th&ocirc;ng tin ch&iacute;nh x&aacute;c v&agrave; sớm nhất về tiểu khu Tulip đến qu&yacute; kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Mọi chi tiết xin vui l&ograve;ng li&ecirc;n hệ&nbsp;<strong>Hotline: 0967.87.6969</strong></p>\r\n\r\n<p><em><strong>C&ocirc;ng ty cổ phần thương mại v&agrave; dịch vụ bất động sản Queen Land,</strong>&nbsp;đại l&yacute;&nbsp;ph&acirc;n phối ch&iacute;nh thức dự &aacute;n Vinhomes Riverside The Harmony, c&oacute; đội ngũ nh&acirc;n vi&ecirc;n gi&agrave;u kinh nghiệm v&agrave; t&acirc;m huyết trong c&ocirc;ng việc. H&atilde;y đến với ch&uacute;ng t&ocirc;i nắm bắt cơ hội &ldquo;v&agrave;ng&rdquo; của ch&iacute;nh s&aacute;ch ưu đ&atilde;i mới để t&igrave;m được ng&ocirc;i nh&agrave; l&yacute; tưởng ph&ugrave; hợp y&ecirc;u cầu v&agrave; điều kiện t&agrave;i ch&iacute;nh ngay h&ocirc;m nay.</em></p>\r\n', NULL, '2017-05-06 08:14:49', '2017-05-06 08:28:19', '0', '22'),
(44, 'Vinhomes Riverside The Harmony', 'vinhomes-riverside-the-harmony', '<h2>Mỗi con s&ocirc;ng l&agrave; nguồn mạch của sự sống, khởi nguồn của thịnh vượng. Ngược về qu&aacute; khứ, v&ugrave;ng ven s&ocirc;ng l&agrave; nơi tạo sinh của c&aacute;c nền văn h&oacute;a lớn tr&ecirc;n thế giới: s&ocirc;ng Hằng &ndash; c&aacute;i n&ocirc;i của nền văn minh Ấn Độ, Trường Giang, Ho&agrave;ng H&agrave; &ndash; nơi khởi ph&aacute;t của những v&ugrave;ng đất tr&ugrave; ph&uacute; ven s&ocirc;ng của Trung Hoa lịch sử,&hellip; Trong cuộc sống hiện đại, những d&ograve;ng s&ocirc;ng vẫn lu&ocirc;n giữ được vai tr&ograve; của n&oacute;, kh&ocirc;ng chỉ bởi bản năng sống gần nước của con người được khắc ghi qua</h2>\r\n', 'YjkT_day-pho-dong-duong.jpg', '<h2>Vinhomes Riverside The Harmony &ndash; khởi sinh thịnh vượng c&ugrave;ng vượng kh&iacute; dồi d&agrave;o của d&ograve;ng s&ocirc;ng</h2>\r\n\r\n<p><strong>S&ocirc;ng &ndash; nguồn mạch của sự sống</strong></p>\r\n\r\n<p>Mỗi con s&ocirc;ng l&agrave; nguồn mạch của sự sống, khởi nguồn của thịnh vượng. Ngược về qu&aacute; khứ, v&ugrave;ng ven s&ocirc;ng l&agrave; nơi tạo sinh của c&aacute;c nền văn h&oacute;a lớn tr&ecirc;n thế giới: s&ocirc;ng Hằng &ndash; c&aacute;i n&ocirc;i của nền văn minh Ấn Độ, Trường Giang, Ho&agrave;ng H&agrave; &ndash; nơi khởi ph&aacute;t của những v&ugrave;ng đất tr&ugrave; ph&uacute; ven s&ocirc;ng của Trung Hoa lịch sử,&hellip; Trong cuộc sống hiện đại, những d&ograve;ng s&ocirc;ng vẫn lu&ocirc;n giữ được vai tr&ograve; của n&oacute;, kh&ocirc;ng chỉ bởi bản năng sống gần nước của con người được khắc ghi qua qu&aacute; tr&igrave;nh lịch sử, m&agrave; c&ograve;n bởi &yacute; nghĩa về cảnh quan, gi&aacute; trị về kinh tế, văn h&oacute;a m&agrave; d&ograve;ng s&ocirc;ng mang lại.</p>\r\n\r\n<p>Tr&ecirc;n thế giới, c&aacute;c th&agrave;nh phố lớn như Seoul, Thượng Hải, London, New York đang ph&aacute;t triển mạnh mẽ v&agrave; vươn m&igrave;nh ki&ecirc;u h&atilde;nh b&ecirc;n những d&ograve;ng s&ocirc;ng. L&agrave; một xu thế ph&aacute;t triển tất yếu của cuộc sống hiện đại, sự mở rộng về ph&iacute;a hai b&ecirc;n bờ s&ocirc;ng với những c&acirc;y cầu, đầu tư v&agrave; ph&aacute;t triển thịnh vượng c&ugrave;ng vượng kh&iacute; dồi d&agrave;o b&ecirc;n đ&ocirc;i bờ d&ograve;ng s&ocirc;ng trở th&agrave;nh một xu thế tất yếu.</p>\r\n\r\n<p><img alt="" src="http://bietthulienkeharmony.com/wp-content/uploads/2017/04/song-han-han-quoc3.jpg" style="height:421px; width:631px" /></p>\r\n\r\n<p><em><strong>Cầu s&ocirc;ng H&agrave;n &ndash; Kết nối đ&ocirc;i bờ thịnh vượng tại &ldquo;Con rồng ch&acirc;u &Aacute;&rdquo;</strong></em></p>\r\n\r\n<p>B&ecirc;n d&ograve;ng s&ocirc;ng Hudson, New York vươn l&ecirc;n trở th&agrave;nh th&agrave;nh phố của những t&ograve;a nh&agrave; chọc trời, nơi l&agrave;m việc, an cư của giới thượng lưu gi&agrave;u c&oacute; bậc nhất nước Mỹ. S&ocirc;ng H&agrave;n d&ograve;ng s&ocirc;ng của Seoul, nơi đất nước được mệnh danh l&agrave; con rồng ch&acirc;u &Aacute; với sự trỗi dậy mạnh mẽ về kinh tế, về văn h&oacute;a của thế kỷ mới. Những con s&ocirc;ng, đ&ocirc;i bờ s&ocirc;ng trở th&agrave;nh nơi những con người hiện đại v&agrave; th&agrave;nh đạt sống v&agrave; l&agrave;m việc, đi lại giữa đ&ocirc;i bờ, tạo dựng cuộc sống ph&aacute;t triển ng&agrave;y c&agrave;ng thịnh vượng cho th&agrave;nh phố.</p>\r\n\r\n<p><strong>Cầu &ndash; mạch nối khởi sinh thịnh vượng</strong></p>\r\n\r\n<p>S&ocirc;ng Hồng, d&ograve;ng s&ocirc;ng lịch sử của thủ đ&ocirc; đ&atilde; trải qua bao biến thi&ecirc;n của lịch sử. Đ&ocirc;i bờ s&ocirc;ng Hồng ng&agrave;y nay đang ng&agrave;y c&agrave;ng ph&aacute;t triển với sự đầu tư về cơ sở hạ tầng. Diện mạo của v&ugrave;ng ven s&ocirc;ng đang được đổi thay từng ng&agrave;y với những c&ocirc;ng tr&igrave;nh mới, trung t&acirc;m thương mại hiện đại, khu đ&ocirc; thị sinh th&aacute;i đẳng cấp,&hellip;</p>\r\n\r\n<p>Năm 1902, Ph&aacute;p dựng cầu Long Bi&ecirc;n qua s&ocirc;ng Hồng đ&atilde; khiến người d&acirc;n An Nam vốn quen với những con đ&ograve; phải ngỡ ng&agrave;ng, đ&ocirc;i bờ đ&atilde; trở n&ecirc;n gần lại, l&agrave;m thay đổi cả &yacute; niệm của con người khi đ&oacute; về sự văn minh v&agrave; hiện đại đương thời. Trải qua qu&aacute; tr&igrave;nh lịch sử, những c&acirc;y cầu vượt s&ocirc;ng Hồng lần lượt được x&acirc;y dựng, nhiều hơn v&agrave; hiện đại hơn: cầu Thăng Long, cầu Vĩnh Tuy, kết nối những khoảng kh&ocirc;ng gian ph&iacute;a hai b&ecirc;n s&ocirc;ng lở bồi. Khoảng c&aacute;ch địa l&yacute; r&uacute;t ngắn cũng đồng nghĩa thuận lợi về giao th&ocirc;ng, th&uacute;c đẩy sự ph&aacute;t triển cả về kinh tế, văn h&oacute;a giữa hai b&ecirc;n bờ s&ocirc;ng Hồng. H&agrave;ng loạt c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng kh&aacute;c như y tế, gi&aacute;o dục, trung t&acirc;m thương mại lớn được x&acirc;y dựng tại ph&iacute;a Đ&ocirc;ng s&ocirc;ng Hồng l&agrave; minh chứng mạnh mẽ cho sự đổi thay từng ng&agrave;y của d&ograve;ng s&ocirc;ng.</p>\r\n\r\n<p><img alt="" src="http://bietthulienkeharmony.com/wp-content/uploads/2017/04/cau-vinh-tuy.jpg" style="height:446px; width:603px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Hệ thống những c&acirc;y cầu kết nối đ&ocirc;i bờ s&ocirc;ng Hồng ng&agrave;y c&agrave;ng hiện đại</strong></em></p>\r\n\r\n<p>Trong quy hoạch từ năm 2030 &ndash; 2050, hệ thống 18 c&acirc;y cầu vượt s&ocirc;ng Hồng (6 c&acirc;y cầu đ&atilde; x&acirc;y dựng) sẽ tiếp tục mang tới sự khởi sắc cho d&ograve;ng s&ocirc;ng. Đ&ocirc;i bờ s&ocirc;ng Hồng đang dần thay đổi, v&agrave; quan niệm của c&aacute;c cư d&acirc;n hiện đại cũng đang dần đổi thay.</p>\r\n\r\n<p><strong>Vinhomes Riverside &ndash; g&oacute;p phần đổi thay diện mạo của d&ograve;ng s&ocirc;ng</strong></p>\r\n\r\n<p>Vinhomes Riverside &ndash; khu đ&ocirc; thị sinh th&aacute;i h&agrave;ng đầu đ&atilde; v&agrave; đang g&oacute;p phần v&agrave;o sự đổi thay từng ng&agrave;y của s&ocirc;ng Hồng. Tr&aacute;i ngược với suy nghĩ trước đ&acirc;y, b&ecirc;n kia d&ograve;ng s&ocirc;ng kh&ocirc;ng c&ograve;n l&agrave; nơi t&igrave;m về của những con người hiện đại bận rộn, đang phải h&agrave;ng ng&agrave;y chịu những &aacute;p lực từ cuộc sống x&ocirc; bồ trong những chuyến d&atilde; ngoại cuối tuần. Vinhomes Riverside được quy hoạch đ&atilde; chứng minh r&otilde; xu thế mới, đặc khu sinh th&aacute;i đẳng cấp trở th&agrave;nh nơi h&agrave;ng ng&agrave;y trở về của những con người bận rộn ấy. Họ qua cầu để l&agrave;m việc v&agrave; trở về để tận hưởng sự b&igrave;nh y&ecirc;n, thụ hưởng phong c&aacute;ch sống thượng lưu đặc quyền. Cầu Vĩnh Tuy, cầu Chương Dương mang sứ mệnh kết nối hai bờ, đưa những con người hiện đại đi về giữa đ&ocirc;i bờ, học tập v&agrave; l&agrave;m việc v&agrave; tận hưởng cuộc sống hiện đại.</p>\r\n\r\n<p><img alt="" src="http://bietthulienkeharmony.com/wp-content/uploads/2017/02/quang-truong-trung-tam-huong-ho.jpg" style="height:335px; width:609px" /></p>\r\n\r\n<p><em><strong>Vinhomes Riverside The Harmony hứa hẹn tạo n&ecirc;n diện mạo mới cho cuộc sống đẳng cấp cho cư d&acirc;n b&ecirc;n những d&ograve;ng s&ocirc;ng</strong></em></p>\r\n\r\n<p>Vinhomes Riverside được khởi c&ocirc;ng x&acirc;y dựng từ năm 2011, trải qua hơn 6 năm, Vinhomes Riverside l&agrave; minh chứng mạnh mẽ cho sự đổi thay từng ng&agrave;y của phong c&aacute;ch sống, gu hưởng thụ tầng lớp thượng lưu. Nơi an cư đẳng cấp v&agrave; thời thượng l&agrave; nơi tiện &iacute;ch đủ đầy, nơi gặp gỡ của những con người th&agrave;nh đạt c&oacute; chung sở th&iacute;ch v&agrave; đam m&ecirc;, nơi gi&aacute; trị sống chất lượng v&agrave; thực sự bền vững lu&ocirc;n được lấy l&agrave;m nền tảng.</p>\r\n\r\n<p>Ph&acirc;n khu mới The Harmony &ndash; giai đoạn 2 của Khu đ&ocirc; thị Vinhomes Riverside, khu đ&ocirc; thị sinh th&aacute;i đẳng cấp duy nhất trong l&ograve;ng H&agrave; Nội. Hội tụ tinh hoa kiến tr&uacute;c của Ph&aacute;p, &Yacute;, Hy Lạp v&agrave; Đ&ocirc;ng Dương với hồ trung t&acirc;m v&agrave; hệ thống k&ecirc;nh đ&agrave;o, The Harmony mở ra kh&ocirc;ng gian sống đẳng cấp h&agrave;ng đầu Việt Nam. Tr&ecirc;n tổng diện t&iacute;ch 97,7ha, Vinhomes Riverside &ndash; The Harmony kế thừa to&agrave;n bộ c&aacute;c gi&aacute; trị của giai đoạn 1: vị tr&iacute; kết nối thuận tiện, kh&ocirc;ng gian sinh th&aacute;i biệt lập, hệ thống tiện &iacute;ch 5 sao v&agrave; cộng đồng văn minh. Đ&acirc;y sẽ l&agrave; c&ocirc;ng tr&igrave;nh tiếp theo tạo n&ecirc;n một diện mạo mới, đẳng cấp mới cho khu vực ph&iacute;a Đ&ocirc;ng của s&ocirc;ng Hồng.</p>\r\n\r\n<p><em><strong>C&ocirc;ng ty cổ phần thương mại v&agrave; dịch vụ bất động sản Queen Land,</strong>&nbsp;đại l&yacute;&nbsp;ph&acirc;n phối ch&iacute;nh thức dự &aacute;n Vinhomes Riverside The Harmony, c&oacute; đội ngũ nh&acirc;n vi&ecirc;n gi&agrave;u kinh nghiệm v&agrave; t&acirc;m huyết trong c&ocirc;ng việc. H&atilde;y đến với ch&uacute;ng t&ocirc;i nắm bắt cơ hội &ldquo;v&agrave;ng&rdquo; của ch&iacute;nh s&aacute;ch ưu đ&atilde;i mới để t&igrave;m được ng&ocirc;i nh&agrave; l&yacute; tưởng ph&ugrave; hợp y&ecirc;u cầu v&agrave; điều kiện t&agrave;i ch&iacute;nh ngay h&ocirc;m nay.</em></p>\r\n\r\n<p><strong><em>Queen Land: &ldquo;Customer is always the Queen&rdquo; &ndash;&nbsp;Hotline: 09.67.87.69.69</em></strong></p>\r\n\r\n<p><strong><em>Địa chỉ: S&agrave;n giao dịch bất động sản Vinhomes Riverside, tầng 1 TTTM Vincom Long Bi&ecirc;n, Khu đ&ocirc; thị Vinhomes Riverside, S&agrave;i Đồng, Long Bi&ecirc;n, H&agrave; Nội</em></strong></p>\r\n\r\n<p><strong><em>Chi nh&aacute;nh văn ph&ograve;ng:&nbsp;L2 &ndash; 202A &ndash; 205 TTTM Vincom Long Bi&ecirc;n, Khu đ&ocirc; thị Vinhomes Riverside, H&agrave; Nội</em></strong></p>\r\n', NULL, '2017-05-06 08:30:51', '2017-05-06 08:30:51', '0', '21');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_cate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(20) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `position` int(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title_cate`, `slug`, `parent_id`, `status`, `position`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Vị Trí', 'vi-tri', 0, 0, 1, NULL, '2017-04-04 00:26:34', '2017-05-05 02:23:47'),
(8, 'Tiện Ích', 'tien-ich', 0, 0, 3, NULL, '2017-04-04 00:37:02', '2017-05-05 10:33:08'),
(9, 'Chính Sách', 'chinh-sach', 0, 0, 4, NULL, '2017-04-04 00:37:16', '2017-05-05 06:32:03'),
(11, 'Liên Hệ', 'lien-he', 0, 0, 7, NULL, '2017-05-05 02:39:55', '2017-05-05 02:39:55'),
(21, 'Tin Tức', 'tin-tuc', 0, 0, 5, NULL, '2017-05-06 02:17:00', '2017-05-06 02:17:00'),
(22, 'Dự Án', 'du-an', 0, 0, 8, NULL, '2017-05-06 06:47:46', '2017-05-06 06:47:46'),
(23, 'Khu Nguyệt Quế', 'khu-nguyet-que', 22, 0, 10, NULL, '2017-05-06 07:17:36', '2017-05-06 07:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ĐỒNG HUY VIỆT', 'donghuyviet@gmail.com', '0912889138', NULL, '2017-05-05 09:21:26', '2017-05-05 09:21:26'),
(7, 'vietdh', 'dongviet.bds@gmail.com', '0972147787', NULL, '2017-05-06 18:24:34', '2017-05-06 18:24:34'),
(10, 'Dao Duy Thanh', 'thienthanh@gmail.com', '0972147787', NULL, '2017-05-06 20:16:16', '2017-05-06 20:16:16'),
(11, 'huy viet', 'donghuyviet@gmail.com', '0912889138', NULL, '2017-05-06 20:18:51', '2017-05-06 20:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_13_034728_create_jobs_table', 2),
(4, '2017_02_09_055732_create_search_table', 3),
(5, '2017_02_13_102624_create_location_table', 3),
(6, '2017_02_13_102851_create_job_location_table', 3),
(7, '2014_10_12_000000_create_rooms_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `description`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(2, 'VINHOMES RIVERSIDE THE HARMONY – RIÊNG MỘT ĐẲNG CẤP SỐNG', 'vinhomes-riverside-the-ha', '<p><strong>Vinhomes Riverside The Harmony l&agrave; ph&acirc;n khu mới ph&aacute;t triển thuộc Vinhomes Riverside, kh&ocirc;ng chỉ kế thừa c&aacute;c gi&aacute; trị cốt l&otilde;i của khu đ&ocirc; thị sinh th&aacute;i duy nhất giữa l&ograve;ng H&agrave; Nội, m&agrave; c&ograve;n đa dạng phong c&aacute;ch kiến tr&uacute;c v&agrave; tiện &iacute;ch phong ph&uacute;, hướng tới đ&aacute;p ứng nhu cầu của nhiều cư d&acirc;n tương lai.</strong></p>\r\n\r\n<p>Đ&uacute;ng như &yacute; nghĩa của t&ecirc;n gọi,&nbsp;<strong>Vinhomes Riverside The Harmony</strong>&nbsp;l&agrave; nơi h&agrave;i h&ograve;a tuyệt đối giữa con người v&agrave; tự nhi&ecirc;n. Nằm trong quần thể khu đ&ocirc; thị sinh th&aacute;i ĐẲNG CẤP duy nhất trong l&ograve;ng H&agrave; Nội, Vinhomes The Harmony ph&aacute;t triển phong ph&uacute; với loại h&igrave;nh nh&agrave; ở hiện đại c&ugrave;ng kiến tr&uacute;c tinh tế bao gồm biệt thự đơn lập, song lập, tứ lập, nh&agrave; vườn, nh&agrave; liền kề v&agrave; nh&agrave; phố thương mại, mang tới cho Qu&yacute; kh&aacute;ch h&agrave;ng nhiều lựa chọn l&yacute; tưởng.</p>\r\n\r\n<p><img src="http://bietthulienkeharmony.com/wp-content/uploads/2017/01/web5-don-lap-lien-ke-tu-lap-nha-vuon.jpg" style="height:353px; width:628px" /></p>\r\n\r\n<p><em><strong>Vinhomes Riverside The Harmony &ndash; Ri&ecirc;ng một đẳng cấp sống</strong></em></p>\r\n\r\n<p><strong>VINHOMES RIVERSIDE THE HARMONY &ndash; TỔNG QUAN</strong></p>\r\n\r\n<p>&ndash;&nbsp;<strong>Vị tr&iacute; Vinhomes Riverside The Harmony:</strong>&nbsp;Khu đ&ocirc; thị sinh th&aacute;i Vinhomes Riverside, Long Bi&ecirc;n, H&agrave; Nội</p>\r\n\r\n<p>&ndash;&nbsp;<strong>Chủ đầu tư:</strong>&nbsp;C&ocirc;ng ty Cổ phần Đầu tư Ph&aacute;t triển Đ&ocirc; thị S&agrave;i Đồng (thuộc Vingroup)</p>\r\n\r\n<p>&ndash;&nbsp;<strong>Quy m&ocirc; Vinhomes Riverside The Harmony:</strong></p>\r\n\r\n<p>+ Tổng diện t&iacute;ch : 97,6ha</p>\r\n\r\n<p>+ Gồm hơn 1400 l&ocirc; biệt thự đơn lập, song lập, liền kề v&agrave;&nbsp;nh&agrave; phố</p>\r\n\r\n<p>+ Mật độ x&acirc;y dựng: 21%</p>\r\n\r\n<p>+ Diện t&iacute;ch hồ điều h&ograve;a 12,4ha</p>\r\n\r\n<p>+ Mở rộng hệ thống k&ecirc;nh đ&agrave;o đối lưu uốn lượn to&agrave;n khu đ&ocirc; thị l&ecirc;n tới 18,7km</p>\r\n\r\n<p>+ Diện t&iacute;ch c&aacute;c l&ocirc; biệt thự, liền kề : 90m&sup2; &ndash; 350m&sup2;</p>\r\n\r\n<p>&ndash; H&igrave;nh thức sở hữu: Sổ đỏ &ndash; Vĩnh viễn</p>\r\n\r\n<p>&ndash; Dự kiến ho&agrave;n th&agrave;nh&nbsp;<strong>Vinhomes Riverside The Harmony</strong>: Cuối năm 2017</p>\r\n\r\n<p><strong>VINHOMES RIVERSIDE THE HARMONY &ndash; LOẠI H&Igrave;NH PH&Aacute;T TRIỂN</strong></p>\r\n\r\n<p><strong>Vinhomes Riverside The Harmony</strong>&nbsp;với c&aacute;c loại h&igrave;nh đa dạng với c&aacute;c căn biệt thự được thiết kế sang trọng, kiến tr&uacute;c mặt ngo&agrave;i đặc trưng, c&aacute;ch chia layout hợp l&yacute;. Đặc biệt đưa th&ecirc;m sản phẩm nh&agrave; liền kề, biệt thự tứ lập, đa dạng th&ecirc;m sự lựa chọn cho c&aacute;c kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>&ndash;&nbsp;<strong>Liền kề:</strong>&nbsp;Diện t&iacute;ch đất từ 90m2 &ndash; 96m2 (một số l&ocirc; 120m2 &ndash; 140m2), diện t&iacute;ch x&acirc;y dựng 220m2</p>\r\n\r\n<p>&ndash;<strong>&nbsp;Nh&agrave; vườn:</strong>&nbsp;Diện t&iacute;ch đất từ 150m2 &ndash; 168m2 &ndash; 202m2, diện t&iacute;ch x&acirc;y dựng 380m2</p>\r\n\r\n<p>&ndash;&nbsp;<strong>Tứ lập:</strong>&nbsp;Diện t&iacute;ch đất từ 180m2, diện t&iacute;ch x&acirc;y dựng 350m2</p>\r\n\r\n<p>&ndash;&nbsp;<strong>Song lập:</strong>&nbsp;Diện t&iacute;ch đất từ 207m2 &ndash; 213m2, diện t&iacute;ch x&acirc;y dựng 400m2</p>\r\n\r\n<p>&ndash;&nbsp;<strong>Đơn lập c&oacute; s&ocirc;ng:</strong>&nbsp;Diện t&iacute;ch đất từ 300m2 &ndash; 368m2, diện t&iacute;ch x&acirc;y dựng 350m2 &ndash; 500m2</p>\r\n\r\n<p>&ndash;&nbsp;<strong>Đơn lập kh&ocirc;ng s&ocirc;ng:</strong>&nbsp;Diện t&iacute;ch đất từ 300m2 &ndash; 368m2, diện t&iacute;ch x&acirc;y dựng 350m2 &ndash; 500m2</p>\r\n\r\n<p>&ndash;<strong>&nbsp;Nh&agrave; phố:</strong>&nbsp;Diện t&iacute;ch đất từ 170m2 &ndash; 200m2, diện t&iacute;ch x&acirc;y dựng 400m2 &ndash; 440m2</p>\r\n\r\n<p><img alt="" src="http://bietthulienkeharmony.com/wp-content/uploads/2017/01/loai-hinh.jpg" style="height:320px; width:700px" /></p>\r\n\r\n<p><strong>MẶT BẰNG VINHOMES RIVERSIDE THE HARMONY</strong></p>\r\n\r\n<p><img alt="" src="http://bietthulienkeharmony.com/wp-content/uploads/2017/01/FULL.jpg" style="height:632px; width:704px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>VINHOMES RIVERSIDE THE HARMONY &ndash; VỊ TR&Iacute; CHIẾN LƯỢC</strong></p>\r\n\r\n<p><strong>Vinhomes Riverside The Harmony</strong>, nằm trong tổng thể khu đ&ocirc; thị Vinhomes Riverside, thừa hưởng vị tr&iacute; đắc địa, tọa lạc tại nơi giao thoa c&aacute;c trục đường huyết mạch kết nối thuận tiện với trung t&acirc;m thủ đ&ocirc; v&agrave; nhiều khu vực l&acirc;n cận. Đặc biệt, chỉ c&aacute;ch hồ Ho&agrave;n Kiếm chưa đầy 6,5km v&agrave; thừa hưởng hệ thống đường giao th&ocirc;ng hiện đại: quốc lộ 5, đường Ng&ocirc; Gia Tự, v&agrave;nh đai 2. Sở hữu vị tr&iacute; trung t&acirc;m nhưng Vinhomes Riverside The Harmony vẫn đủ t&aacute;ch biệt, đem tới cho cư d&acirc;n đặc quyền sống an tĩnh v&agrave; ri&ecirc;ng tư ngay giữa th&agrave;nh phố với m&ocirc;i trường sống trong l&agrave;nh bậc nhất.</p>\r\n\r\n<p><img src="http://bietthulienkeharmony.com/wp-content/uploads/2017/01/1vinhomes-riverside-giai-doan2.jpg" style="height:648px; width:628px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>4. Cộng đồng thượng lưu nh&acirc;n h&ograve;a</strong></p>\r\n\r\n<p>&ndash; Cộng đồng 3000 cư d&acirc;n đẳng cấp</p>\r\n\r\n<p>&ndash; Kết nối, gắn kết trong c&aacute;c hoạt động của Vinhomes</p>\r\n\r\n<p><strong>5. Kiến tr&uacute;c mới mẻ</strong></p>\r\n\r\n<p>&ndash; Đa dạng kiến tr&uacute;c T&acirc;n cổ điển với phong c&aacute;ch Đ&ocirc;ng Dương, Ph&aacute;p, Hy Lạp, Venice (&Yacute;)</p>\r\n\r\n<p>&ndash; Kiến tr&uacute;c từng căn biệt thự hợp l&yacute;, kiến tr&uacute;c mặt ngo&agrave;i đặc trưng, c&aacute;ch chia layout hợp l&yacute;</p>\r\n\r\n<p>&ndash; C&oacute; th&ecirc;m sản phẩm nh&agrave; liền kề, biệt thự tứ lập</p>\r\n\r\n<p>Tổng h&ograve;a của c&aacute;c tiện &iacute;ch mới c&ugrave;ng c&aacute;c tiện &iacute;ch đang hiện hữu, Vinhomes The Harmony kh&ocirc;ng chỉ ph&aacute;t triển một kh&ocirc;ng gian sống đơn thuần m&agrave; c&ograve;n hướng đến c&aacute;c gi&aacute; trị sống bền vững, nơi con gắn b&oacute; c&ugrave;ng thăng hoa cuộc sống hạnh ph&uacute;c c&ugrave;ng cộng đồng cư d&acirc;n thịnh vượng v&agrave; văn minh.</p>\r\n\r\n<p><em><strong>C&ocirc;ng ty cổ phần thương mại v&agrave; dịch vụ bất động sản Queen Land,</strong>&nbsp;đại l&yacute; ph&acirc;n phối ch&iacute;nh thức dự &aacute;n Vinhomes Riverside The Harmony, c&oacute; đội ngũ nh&acirc;n vi&ecirc;n gi&agrave;u kinh nghiệm v&agrave; t&acirc;m huyết trong c&ocirc;ng việc. H&atilde;y đến với ch&uacute;ng t&ocirc;i nắm bắt cơ hội &ldquo;v&agrave;ng&rdquo; của ch&iacute;nh s&aacute;ch ưu đ&atilde;i mới để t&igrave;m được ng&ocirc;i nh&agrave; l&yacute; tưởng ph&ugrave; hợp y&ecirc;u cầu v&agrave; điều kiện t&agrave;i ch&iacute;nh ngay h&ocirc;m nay.</em></p>\r\n\r\n<p><strong><em>Queen Land: &ldquo;Customer is always the Queen&rdquo; &ndash;&nbsp;Hotline: 09.67.87.69.69</em></strong></p>\r\n\r\n<p><strong><em>Địa chỉ: S&agrave;n giao dịch bất động sản Vinhomes Riverside, tầng 1 TTTM Vincom Long Bi&ecirc;n, Khu đ&ocirc; thị Vinhomes Riverside, S&agrave;i Đồng, Long Bi&ecirc;n, H&agrave; Nội</em></strong></p>\r\n\r\n<p><strong><em>Chi nh&aacute;nh văn ph&ograve;ng:&nbsp;L2 &ndash; 202A &ndash; 205 TTTM Vincom Long Bi&ecirc;n, Khu đ&ocirc; thị Vinhomes Riverside, H&agrave; Nội</em></strong></p>\r\n\r\n<p><strong><em>Tel: 04.7305.7666</em></strong></p>\r\n', NULL, '2017-05-04 20:20:40', '2017-05-06 20:49:48', '0');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acreage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chair` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chair_total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `print` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `projectors` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tivi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penSlideshow` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `board` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penwrite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `park` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wifi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `title`, `description`, `images`, `url`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Tiểu khu Phong Lan', 'Phong cách sang trọng', 'XiGp_image-01.jpg', 'http://vinhomes.dev/', '0', NULL, '2017-05-03 09:48:50', '2017-05-03 09:48:50'),
(12, 'Tiểu Khu Hướng Dương', 'Phong cách nhà vườn', 'PsS6_image-03.jpg', 'http://vinhomes.dev/', '0', NULL, '2017-05-03 09:49:36', '2017-05-03 09:49:36'),
(13, 'Tiểu Khu Nguyệt Quế', 'Phong cách đẳng cấp', 'AL7V_image-02.jpg', 'http://vinhomes.dev/', '0', NULL, '2017-05-03 09:50:47', '2017-05-03 09:50:47'),
(14, 'Tiểu Khu TuLip', 'Đa Phong Cách Sống', 'IXDp_day-pho-dong-duong.jpg', 'vinhomes.dev', '0', NULL, '2017-05-04 02:42:18', '2017-05-04 02:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rul` int(20) NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rul`, `tel`, `address`, `images`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'donghuyviet', 'donghuyviet@gmail.com', '$2y$10$ArEzTGmQgEDSKeybglqRhOU/3xfvclRvpkKY/YpRraozMPuIZZe22', 0, '0912889138', 'Hà Nội', '', '4d0o22H5cdaO18pklOKNKaPbjzcyv5B3i6SiL2zoCX9QyAHEnMrsl1eo2f0M', '2017-01-11 00:44:52', '2017-05-06 20:00:27'),
(2, 'vietdong', 'vietdong@gmail.com', '$2y$10$i/O7Ro9gEkTbK8dR/q5K8.cbQzyGhRkTpHa//p74VCgA.TQEXT68W', 0, '', '', '', NULL, '2017-04-07 19:03:39', '2017-04-07 19:03:39'),
(5, 'thienthanh', 'thienthanh6666@gmail.com', '$2y$10$suW.EYJDjnJq4icxLtpCuONzLD4pyMCt2Lvc4tG9zZ1ZIMfTdMGVO', 0, '', '', '9SkL_IMG_6473-1024x797.jpg', 'C0s1WBajNnrRSOT5zF2ukueLtD39jj9GUr24vBwuO9eWhosv6D1TfH0h1qe1', '2017-05-06 00:21:13', '2017-05-06 08:52:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articel`
--
ALTER TABLE `articel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articel_slug_unique` (`slug`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_email_unique` (`email`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articel`
--
ALTER TABLE `articel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
