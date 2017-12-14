-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2017 lúc 11:28 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `TenBanner` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Staus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `TenBanner`, `Anh`, `Staus`) VALUES
(1, 'banner 1', 'banner1.jpg', 1),
(2, 'banner 2', 'banner2.jpg', 1),
(3, 'banner 3', 'banner3.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `TenDanhMuc`, `MoTa`) VALUES
(1, 'Áo', 'áo'),
(2, 'Phụ Kiện', 'gi&agrave;y thể thao'),
(3, 'Logo đội b&oacute;ng ', 'Logo đội b&oacute;ng '),
(4, 'Nội Thất &Ocirc;T&ocirc; ', 'Nội Thất &Ocirc;T&ocirc; '),
(5, 'Phụ Kiện D&acirc;n Phượt', 'Phụ Kiện D&acirc;n Phượt'),
(6, 'Móc Khóa', 'Phụ kiện '),
(7, 'Qu&agrave; Tặng Sock', 'Qu&agrave; Tặng Sock');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AnhDaiDien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TenNhanVien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(4) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id`, `TenDangNhap`, `MatKhau`, `AnhDaiDien`, `TenNhanVien`, `DienThoai`, `Email`, `NgaySinh`, `GioiTinh`, `Status`) VALUES
('0', 'd', '8fa14cdd754f91cc6554c9e71929cce7', '12.png', 'f', 's', 'ldc.longnd@gmail.com', '2017-12-08', 0, 1),
('001', 'longnd', '202cb962ac59075b964b07152d234b70', '3.jpg', 'LongDUong', '123', 'ldc.longnd@gmail.com', '2017-11-30', 0, 1),
('002', 'long', '202cb962ac59075b964b07152d234b70', '3.jpg', '123', '123', 'ldc.longnd@gmail.com', '2017-12-08', 0, 1),
('003', 'a', '202cb962ac59075b964b07152d234b70', '9.png', '123', '123', 'ldc.longnd@gmail.com', '2017-11-29', 0, 1),
('1', 'admin', '202cb962ac59075b964b07152d234b70', '', 'Long Dương', '093407274', 'ldc.longnd@gmail.com', '2017-12-21', 1, 1),
('12', 'long', '0f5264038205edfb1ac05fbb0e8c5e94', '13.png', 'long', 'long', 'ldc.longnd@gmail.com', '2017-12-08', 0, 1),
('2', 'long', '123', 'long', 'long', 'long', 'long@gmail.com', '0000-00-00', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `TenSanPham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `Gia_Giam` decimal(10,0) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietSanPham` text COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Anh3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Anh2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DanhMuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `TenSanPham`, `SoLuong`, `DonGia`, `Gia_Giam`, `MoTa`, `ChiTietSanPham`, `TrangThai`, `Anh`, `Anh3`, `Anh2`, `DanhMuc`) VALUES
(1, 'Áo 1', '11', '200000', '100000', 'Áo 1', 'Áo 1', 'còn hàng', 'product10.jpg', '', '', 'Áo'),
(2, 'áo2', '22', '20000', '17777', 'giày thể thao', 'demo áo', '1', 'Array', 'Array', 'Array', '1'),
(3, 'Áo 3', '22', '10000', '50000', 'Áo 3', 'demo áo 3', '1', '8.png', '4.jpg', '6.jpg', '1'),
(4, 'Móc Chìa Khóa La Bàn Máy Bay Xoay 360 độ MKLK OEM 01 ', '99', '65000', '40000', 'Một kết hợp mới cho nhiều mẫu mã chất lượng cũng như mô hình lạ mắt , khi kết hợp nó để tạo ra một móc chìa khóa máy bay la bàn .', 'Với mẫu mã xoay 360 độ quanh cơ , rô , chuồng , bích ,,, mô hình được kết cấu hợp kim thép , loại hợp kim chống rì và mạ lớp xi để chống tình trang trầy xướt móc khóa .\r\n\r\nMón đồ chơi độc lạ này hiện tại mới có , và cùng kích thước của móc khóa với chiều dài 5.2 cm \r\n\r\nRiêng đường kính tròn 4.8cm kích và độ dài khoảng 1cm ,, bề mặt máy bay thiết kết đúc đặt , chắc chắn cho người sử dụng ..\r\n\r\nMô hình kim khí điện là trò chơi hay món quà tặng cho bạn bè kết hợp kèm theo phụ kiện teo vào ba lô , móc chìa khóa , hay những trò chơi xoay vòng nhân gian mọi thứ.\r\n\r\nMóc Chìa Khóa La Bàn Máy Bay Xoay 360 độ MKLK OEM 01\r\nMón trò chơi lạ với món đồ thích ứng dể dàng\r\nKết hợp la bàn tạo ra món đồ tinh xao .\r\nChất liệu hoàn toàn tương thích với người dùng\r\nTrọng lượng nhẹ nhàn móc thêm phụ kiện chìa khóa.\r\nMón quà độc đáo cho những người bạn ..', '1', '3063340187_1006328672-300x300.jpg', '3584948547_2029383497-300x300.jpg', '3586174474_2029383497-300x300.jpg', '6'),
(5, 'Móc khóa QyQy Tốt Nghiệp Đại Học', '33', '153000', '78000', 'Móc khóa QyQy Tốt Nghiệp Đại Học', 'hông tin tiểu Sử QyQy\r\n\r\nEm tên : Ku QyQy\r\n\r\nNăm nay em 3 Tuổi rưởi  \r\n\r\nTốt nghiệp đại học mầm non quốc tế , với bộ dạng trẻ ních ra trường lúc lên 3 tuổi rưởi .\r\n\r\nBộ dạng trong Kute ra trường vẫn còn ngậm núm” dú” , còn bầy đặt đeo kính không tròng tỏ vẻ ta là sinh viên kiến trúc sư vậy\r\n\r\nCái mặt thấy ,Chao Ôi ! Thần Thánh quá chừng .\r\n\r\nTrên tay có bằn chứng chỉ tốt nghiệp hẳng hoi , coi như ta đã là “Tân Tân Sinh Viên “ra trường của lớp mầm non tư thục quốc tế .\r\n\r\nĐôi mắt Kute dể thương làm sao , với mái tóc theo kiểu phong cách Hàn Quốc vậy ….\r\n\r\nCòn gì bằng chứ vậy là quá đủ đối với QyQy rồi .\r\n\r\nSản phẩm có kích thước như sau : \r\n\r\nD x R x C cm\r\n\r\nChiều cao : 5.5 cm\r\n\r\nchiều rộng . 3,5 cm\r\n\r\nvới vòng móc bằng thép không rỉ , \r\n\r\nNón tốt nghiệp bằng chất liệu nhựa PVC loại mềm an toàn , có thể tháo rời lắp ráp vào nha theo sở thích của từng người\r\n\r\nVới cặp mắt kính được định hình với khuông mặt không tháo rời hoặc lắp ráp nhé \r\n\r\nCác bạn nên chú ý vào vấn đề sau :\r\n\r\nsản phẩm có có những vết bẩn , bạn có thể tẩy rữa sạch sẽ khi nó dính vào QyQy , những vết dơ không thành vấn đề gì \r\n\r\nVới mái tóc được kết cấu định hình là loại cước có sự kết dính an toàn mà khó bung ra \r\n\r\nTrên tay là tấm bằng tốt nghiệp cũng được kết cấu định hình vào nó không tháo rời được\r\n\r\ncác bạn nên chú ý để sử dụng khi mua hàng khỏi lo về sự thắc mắc của sản phẩm\r\n\r\nSản phẩm này có kèm theo nguyên bộ chuông và dây , các bạn nên đọc rõ thông tin gia cả để biết thêm cho an toàn khi mua nó ‘\r\n\r\nHoặc bạn có thể liên lạc shop qua số điện thoại / zalo / 0938315218 , mình sẽ tư vấn cho các bạn biết về sản phẩm này nhé', '1', '2ZICtH_simg_d0daf0_800x1200_max (1).jpg', '2ZICtH_simg_d0daf0_800x1200_max.jpg', '4249271936_2135521392-300x300.jpg', '6'),
(6, 'M&oacute;c Kh&oacute;a Po Po Be Captain America', '22', '153000', '105000', 'M&oacute;c Kh&oacute;a Po Po Be Captain America', 'ổng chiều d&agrave;i m&oacute;c kh&oacute;a : 17.5 cm\r\n\r\nchiều d&agrave;i d&acirc;y da PU xoắn 7.3 cm\r\n\r\nchiều ch&agrave;i PO PO 5.5 cm\r\n\r\nChiều rộng PO PO 2.5 cm\r\n\r\nđường k&iacute;nh Khi&ecirc;ng Captain America 3.5 cm\r\n\r\nChất Liệu nhựa vinyl v&agrave; PVC loại nhựa an to&agrave;n cho người sử dụng n&oacute; \r\n\r\nThế giới lo&agrave;i PO PO , với bộ m&oacute;c kh&oacute;a con heo n&agrave;y l&agrave; c&aacute;i lo&agrave;i xinh nhất v&agrave; cực k&igrave; cute ,,,\r\n\r\nSản phẩm ra mắt ch&agrave;o đ&oacute;n c&aacute;c bạn m&oacute;n qu&agrave; đầy nghệ thuận , v&agrave; l&agrave; m&oacute;n tr&ograve; chơi với những tiếng chu&ocirc;ng thanh thanh , c&ugrave;ng 1 lo&agrave;i  Heo n&aacute;i sai Sinh ..\r\n\r\nCon Pig Pig ,,,, c&oacute; k&iacute;ch thước như sau :\r\n\r\nTồng chiều d&agrave;i Co Heo : 73 mm v&agrave; Rộng 50 mm , trọng lượng 29,6g \r\n\r\nMức độ xinh xinh vừa phải để đủ treo một m&oacute;n tr&ecirc;n ba l&ocirc; , T&uacute;i , M&oacute;c treo , M&oacute;c Kh&oacute;a c&agrave;ng đẹp v&agrave; đầy lộng lẫy . Nếu l&agrave; m&oacute;n qu&agrave; tặng cho những người c&oacute; sở th&iacute;ch nu&ocirc;i heo sữa sai đẻ v&agrave; n&oacute; l&agrave; m&oacute;n qu&agrave; đầy vui vẻ ..\r\n\r\nThời trang lu&ocirc;n đi theo những phụ kiện được k&egrave;m theo , tăng th&ecirc;m phong c&aacute;ch cho người m&ecirc; con Pig Pig n&agrave;y .\r\n\r\nĐặt điểm ch&iacute;nh\r\nM&oacute;c ch&igrave;a kh&oacute;a PO PO\r\nChất liệu th&acirc;n thiện\r\nM&oacute;n qu&agrave; tặng bạn b&egrave; \r\nTrọng lượng tương đối nhẹ\r\nVới ch&ugrave;m l&ocirc;ng thỏ gi&agrave; kh&ocirc;ng bung v&agrave; lớp m&agrave;u kh&ocirc;ng phai , c&oacute; thể tẩy những vết bẩn 1 c&aacute;ch dể d&agrave;ng .\r\nNhựa Vinyl v&agrave; PVC kết hợp tạo sản phẩm nổi bật \r\nPhụ kiện th&ecirc;m cho thời trang t&uacute;i x&aacute;ch , ba l&ocirc; , hay m&oacute;c ch&igrave;a kh&oacute;a.X 1 Bộ sản phẩm PO PO gồm c&oacute; những g&igrave; ? \r\n 1 Nhận vật PO PO\r\n\r\n1 khi&ecirc;ng\r\n\r\n1 d&acirc;y', '1', 'TB2zdOjeiRnpuFjSZFCXXX2DXXa_3001053600.jpg_600x600-300x300.jpg', 'TB2zdOjeiRnpuFjSZFCXXX2DXXa_3001053600-1.jpg_600x600-1-300x300.jpg', 'TB22VOjeiRnpuFjSZFCXXX2DXXa_3001053600.jpg_600x600-300x300.jpg', '6'),
(7, 'M&oacute;c Ch&igrave;a Kh&oacute;a Shin cậu b&eacute; b&uacute;t ch&igrave; ', '66', '153000', '92000', 'M&oacute;c Ch&igrave;a Kh&oacute;a Shin cậu b&eacute; b&uacute;t ch&igrave; ', 'T&aacute;c gi&agrave; : Yoshito Usui \r\n\r\nShin-cậu b&eacute; b&uacute;t ch&igrave; (クレヨンしんちゃん Kureyon Shin-chan) (tựa đề tiếng Anh :Crayon Shin-chan) l&agrave; một bộ truyện tranh của t&aacute;c giả Usui Yoshito, bộ truyện kể về ch&uacute; nh&oacute;c Shin 5 tuổi,với những c&acirc;u chuyện phi&ecirc;u lưu c&ugrave;ng với bố mẹ, em g&aacute;i, ch&uacute; c&uacute;n BạchTuyết, bạn b&egrave; v&agrave; những nh&acirc;n vật kh&aacute;c.\r\n\r\nTồng chiều D&agrave;i của Shin b&uacute;p b&ecirc; khoảng : 2.6 cm\r\n\r\nChiều rộng 1.5 cm\r\n\r\nĐ&ocirc;i mắt &eacute;ch của shin cực kỳ qu&aacute;i dị , l&uacute;c n&agrave;o cũng kiếm chuyện để rồi đạt được mục d&iacute;ch , khi kh&ocirc;ng đạt được mục d&iacute;ch th&igrave; Sin d&ugrave;ng &aacute;nh mắt của m&igrave;nh nhắm nhầm v&agrave;o người đ&oacute; .. v&agrave; xong Shin l&agrave;m đủ mọi c&aacute;ch để c&oacute; n&oacute; cho bằng được\r\n\r\nNay phi&ecirc;n bản b&uacute;p b&ecirc; Shin thoe m&ocirc; phổng của truyện tranh Nhật Bản th&igrave; Shin hiện nay đ&atilde; trở th&agrave;nh si&ecirc;u nh&acirc;n với c&aacute;i quần xịt 2 m&agrave;u Đỏ V&agrave; V&agrave;ng ,,,\r\n\r\nBắt đầu cho cuộc si&ecirc;u quậy tung cả gia đ&igrave;nh l&ecirc;n tr&ecirc;n ,,,,,,\r\n\r\nVậy bạn h&atilde;y chứng kiến Shin cậu Bế B&uacute;p b&ecirc; n&agrave;y quậy cở n&agrave;o nh&eacute; &hellip;', 'Chọn Trạng Thái', 'MCp8PK.jpg', 'TB2zdOjeiRnpuFjSZFCXXX2DXXa_3001053600.jpg_600x600-300x300.jpg', 'yvYphD.jpg', '6'),
(8, 'Ba l&ocirc; Nữ', '99', '275000', '125000', 'Ba l&ocirc; Nữ thời trang (sọc đỏ trắng) tặng k&egrave;m m&oacute;c ch&igrave;a kh&oacute;a tr&aacute;i tim', 'Xu hướng thời trang phong c&aacute;ch đổi mới , đa dạng h&oacute;a về h&igrave;nh thức trong giới trẻ cng4 như những phong c&aacute;ch mới tăng th&ecirc;m phần phong ph&uacute; t&iacute;nh c&aacute;ch của mỗi con người .\r\n\r\n_ Sản phẩm thời trang Ba l&ocirc; nũ đươc c&aacute;ch t&acirc;n nhỏ gọn g&agrave;n hơn vừa đủ để những trang thiết bị nhỏ k&egrave;m theo của m&igrave;nh .\r\n\r\n* Thời trang l&agrave; g&igrave;  một c&aacute;ch định nghĩa rất đơn giản :\r\n\r\n_ Thời trang l&agrave; một th&oacute;i quen hoặc phong c&aacute;ch phổ biến, đặc biệt về quần &aacute;o, gi&agrave;y d&eacute;p, phụ kiện thời trang, trang điểm, cơ thể hay nội thất trong nh&agrave;. &hellip; Đ&oacute; l&agrave; những phong c&aacute;ch đang thịnh h&igrave;nh v&agrave; những s&aacute;ng tạo mới nhất của c&aacute;c nh&agrave; thiết kế trang phục\r\n\r\n_ &yacute; tr&ecirc;n cũng l&agrave; 1 phương thức của thời trang , thời trang mang theo một v&oacute;c d&aacute;ng hay thay đổi về ngoại h&igrave;nh trang phục hay những vật dũng trang sức Ba l&ocirc; , T&uacute;i x&aacute;ch hay những thứ kh&aacute;c , n&oacute; mang lại những c&aacute;i kh&aacute;c biệt về mỗi t&iacute;nh c&aacute;ch của từng người .\r\n\r\nVới Ba l&ocirc; th&igrave; sao :\r\n\r\n_ Ba l&ocirc; l&agrave; một loại t&uacute;i đựng bằng vải c&oacute; hai d&acirc;y vắt qua vai để đeo tr&ecirc;n lưng, ngo&agrave;i ra c&ograve;n c&oacute; những trường hợp ngoại lệ. Những loại ba l&ocirc; nhẹ đ&ocirc;i khi chỉ c&oacute; một d&acirc;y đeo ch&eacute;o vai\r\n\r\nVề k&iacute;ch thước ri&ecirc;ng loại ba l&ocirc; nữ thời trang n&agrave;y c&oacute; k&iacute;ch thước như sau&rdquo;\r\n\r\nD x R x C cm  = 20 x 27 x 15 với trọng lượng kh&aacute; nhẹ chỉ vỏn vẹn 0.29 kg qu&aacute; nhẹ qu&aacute; so với những ba l&ocirc; kh&aacute;c .\r\n\r\nm&agrave;u sọc đỏ tr&aacute;ng 1 phong c&aacute;ch mới ho&agrave;n to&agrave;n cho những chị em phụ nữ thời trang hiện nay &hellip;\r\n\r\nMột phong c&aacute;ch đơn giản \r\n\r\nmột phong c&aacute;ch gọn g&agrave;n v&agrave; nhẹ nh&agrave;n\r\n\r\nVới 2 m&agrave;u phối kh&aacute; đẹp \r\n\r\nTrọng lượng kh&aacute; nhẹ cho người sử dụng\r\n\r\nVới độ dầy v&agrave; đường may tốt \r\n\r\nchất liệu simeli dầy ', '1', 'bUASh7.jpg', 'bUASh7.jpg', 'i1KB0W.jpg', '2'),
(9, 'C&acirc;y Lau Kiếng', '44', '99000', '34000', 'C&acirc;y Lau K&iacute;&ecirc;ng', 'K&iacute;ch thước : D x R x C cm\r\n\r\nChiều d&agrave;i c&acirc;y l&acirc;u 30 cm\r\n\r\nChiều d&agrave;i c&acirc;y c&agrave;o 26 cm ( chất liệu nhựa ABS  )\r\n\r\nMiến nhựa tổng hợp kẹp lau 31 cm ( chất liệu nhựa cao su mềm độ b&aacute;m cao )\r\n\r\nTay cầm bằng nhựa nhẹ nh&agrave;ng , sự tiện dụng cho c&aacute;c bạn v&agrave; sự hiệu quả tốt để lựa chon một m&oacute;n dụng cụ kh&aacute; đơn giản m&agrave; n&oacute; mang lại lợi &iacute;t kh&aacute; cao cho gia đ&igrave;nh nhỏ\r\n\r\n&ndash; Đầu lau mềm, dẻo, b&aacute;m s&aacute;t v&agrave;o k&iacute;nh dễ d&agrave;ng lấy đi bụi bẩn nhưng kh&ocirc;ng l&agrave;m trầy xước mặt k&iacute;nh.\r\n\r\n&ndash; Thiết kế nhỏ gọn, nhẹ nh&agrave;ng, dễ di chuyển gi&uacute;p c&ocirc;ng việc lau ch&ugrave;i trở n&ecirc;n tiện lợi v&agrave; dễ d&agrave;ng hơn.\r\n\r\n&ndash; Chức năng: Tiện dụng khi lau k&iacute;nh tủ, k&iacute;nh cửa, k&iacute;nh &ocirc; t&ocirc;, bể c&aacute; v&agrave; nhiều loại vật dụng bằng k&iacute;nh kh&aacute;c.\r\n\r\nKhi lau k&iacute;nh kh&ocirc;ng tiếp x&uacute;c trực tiếp với nước, bảo vệ da tay.\r\n\r\nMột vật dụng kh&ocirc;ng qu&aacute; cầu kỳ\r\n\r\nVới chức năng đơn giản để c&oacute; 1 phương tiện qua hợp l&yacute;\r\n\r\nTay cầm bằng nhựa nhẹ nh&agrave;ng .\r\n\r\nĐầu lau mềm; dẻo; b&aacute;m s&aacute;t v&agrave;o k&iacute;nh dễ d&agrave;ng lấy đi bụi bẩn nhưng kh&ocirc;ng l&agrave;m trầy xước mặt k&iacute;nh.\r\n\r\nThiết kế nhỏ gọn; nhẹ nh&agrave;ng; dễ di chuyển gi&uacute;p c&ocirc;ng việc lau ch&ugrave;i trở n&ecirc;n tiện lợi v&agrave; dễ d&agrave;ng hơn.\r\n\r\nChức năng: Tiện dụng khi lau k&iacute;nh tủ; k&iacute;nh cửa; k&iacute;nh &ocirc; t&ocirc;; bể c&aacute; v&agrave; nhiều loại vật dụng bằng k&iacute;nh kh&aacute;c.\r\n\r\nKhi lau k&iacute;nh kh&ocirc;ng tiếp x&uacute;c trực tiếp với nước; bảo vệ da tay.', '1', '4389281654_1250578798-300x300.jpg', 'uwvist.jpg', '4365643254_1250578798-300x300.jpg', '2'),
(10, 'M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty ( Xanh mặt hồ )', '55', '125000', '99000', 'M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty Mẫu mới được thiết kế th&agrave;nh bộ Git nguyện bộ . Với chất liệu l&ocirc;ng giả thỏ , d&acirc;y da PU , V&agrave; nhựa PVC Những nguy&ecirc;n liệu th&acirc;n thiện chống trầy với những lớp m&agrave;u kh&ocirc;ng phai v&agrave; bộ l&ocirc;ng khong x&uacute;c ra  rất chắc chắn cho mẫu thiết kế tinh xảo n&agrave;y L&agrave; m&oacute;n qu&agrave; tặng cho ai cuồng Hello Kitty n&agrave;y , sản phẩm hiện nay c&oacute; 4 m&agrave;u si&ecirc;u đẹp v&agrave; được mong m&otilde;i của kh&aacute;ch h&agrave;ng lu&ocirc;n hỏi về n&oacute; . Kh&aacute; Hấp dẫn', 'M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty ( Xanh mặt hồ )\r\nBạn biết g&igrave; về M&egrave;o Hello Kitty ?\r\n\r\nNguồn gốc &ldquo;b&eacute; g&aacute;i&rdquo; Hello Kitty m&agrave; ch&uacute;ng ta lầm tưởng l&agrave; m&egrave;o !\r\n\r\nMột nguồn th&ocirc;ng tin mới đ&acirc;y đ&atilde; tiết lộ rằng Hello Kitty kh&ocirc;ng phải l&agrave; m&egrave;o, m&agrave; l&agrave; một b&eacute; g&aacute;i .\r\n\r\nnh&agrave; nh&acirc;n chủng học Christine R. Yano thuộc ĐH Hawaii &ndash; người nghi&ecirc;n cứu nhiều nh&acirc;n vật hoạt h&igrave;nh đ&atilde; tiết lộ với tờ Los Angeles Times rằng, Hello Kitty kh&ocirc;ng phải l&agrave; một ch&uacute; m&egrave;o, m&agrave; được lấy h&igrave;nh mẫu từ một b&eacute; g&aacute;i lớp 3 người Anh sống tại London.\r\n\r\nC&ocirc; v&ocirc; t&igrave;nh biết được th&ocirc;ng tin n&agrave;y l&agrave; do được giao nhiệm vụ sắp xếp những mẫu vật li&ecirc;n quan tới Hello Kitty tại Bảo t&agrave;ng Quốc gia người Mỹ gốc Nhật. Theo tờ Los Angeles Times: &ldquo;Hello Kitty kh&ocirc;ng phải l&agrave; một ch&uacute; m&egrave;o, đ&oacute; l&agrave; một nh&acirc;n vật hoạt h&igrave;nh, được dựa tr&ecirc;n h&igrave;nh mẫu của một b&eacute; g&aacute;i. Hello Kitty kh&ocirc;ng bao giờ được mi&ecirc;u tả l&agrave; đi bằng bốn ch&acirc;n. Nh&acirc;n vật n&agrave;y đi v&agrave; ngồi như một sinh vật hai ch&acirc;n. Thậm ch&iacute;, Hello Kitty c&ograve;n c&oacute; ch&uacute; m&egrave;o cưng t&ecirc;n l&agrave; Charmmy Kitty&rdquo;.Nhiều người hẳn sẽ tự hỏi, liệu nh&acirc;n vật đ&aacute;ng y&ecirc;u Hello Kitty kia được lấy h&igrave;nh tượng từ ch&uacute; m&egrave;o hay b&eacute; g&aacute;i, c&ugrave;ng hiểu hơn về gia đ&igrave;nh của Hello Kitty qua ch&ugrave;m ảnh dưới đ&acirc;y', '1', 'deab2fdd036744d686f94d4536db9f3a.jpg', 'dc1f175742e540c9c44ccf03ebc0c0e8.jpg', '6aa5b158d4efdfba3fa4b3d9ed173c99.jpg', '6'),
(11, 'M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty', '33', '153000', '105000', 'M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty', 'Bạn biết g&igrave; về M&egrave;o Hello Kitty ?\r\n\r\nNguồn gốc &ldquo;b&eacute; g&aacute;i&rdquo; Hello Kitty m&agrave; ch&uacute;ng ta lầm tưởng l&agrave; m&egrave;o !\r\n\r\nMột nguồn th&ocirc;ng tin mới đ&acirc;y đ&atilde; tiết lộ rằng Hello Kitty kh&ocirc;ng phải l&agrave; m&egrave;o, m&agrave; l&agrave; một b&eacute; g&aacute;i .\r\n\r\nnh&agrave; nh&acirc;n chủng học Christine R. Yano thuộc ĐH Hawaii &ndash; người nghi&ecirc;n cứu nhiều nh&acirc;n vật hoạt h&igrave;nh đ&atilde; tiết lộ với tờ Los Angeles Times rằng, Hello Kitty kh&ocirc;ng phải l&agrave; một ch&uacute; m&egrave;o, m&agrave; được lấy h&igrave;nh mẫu từ một b&eacute; g&aacute;i lớp 3 người Anh sống tại London.', '1', 'pnNKfj_simg_d0daf0_800x1200_max.jpg', '7yGhGh_simg_d0daf0_800x1200_max.jpg', 'zXYgPO_simg_d0daf0_800x1200_max.jpg', '6'),
(12, 'M&oacute;c kh&oacute;a Đ&ocirc;i t&igrave;nh nh&acirc;n', '66', '65000', '40000', 'M&oacute;c kh&oacute;a Đ&ocirc;i t&igrave;nh nh&acirc;n', 'Th&ocirc;ng tin cơ bản\r\n\r\nK&iacute;ch thước D x R X C cm \r\n\r\nChiều d&agrave;i 4 cm\r\n\r\nchiều rộng 3 cm\r\n\r\ntổng chiều d&agrave;i m&oacute;c kh&oacute;a đ&ocirc;i 5,5 cm\r\n\r\nT&ecirc;n: hợp kim \r\n\r\nKey Phụ kiện Thể loại: Keychain\r\n\r\nKiểu: Unisex\r\n\r\nNghệ thuật: Kh&aacute;c\r\n\r\nChất liệu mặt d&acirc;y: Kim loại\r\n\r\nIn LOGO: c&oacute; thể\r\n\r\nChất liệu: hợp kim kẽm\r\n\r\nNh&atilde;n hiệu: Darrow\r\n\r\nSố sản phẩm: MKN 57\r\n\r\nĐ&oacute;ng g&oacute;i: g&oacute;i c&aacute; nh&acirc;n\r\n\r\nchế biến t&ugrave;y chỉnh: C&oacute;\r\n\r\nThể loại: Keychain\r\n\r\nDịp qu&agrave; tặng: Bạn b&egrave;\r\n\r\nSự lựa chọn đ&ocirc;i m&oacute;c kh&oacute;a m&ocirc; h&igrave;nh đ&ocirc;i đ&agrave;n \r\n\r\nVới chất liệu th&ocirc;ng thường hợp kim kẽm\r\n\r\nSản phẩm tối ưu h&oacute;a chới l&oacute;p sơn tỉnh điện v&agrave; lớp b&oacute;ng chống trầy \r\n\r\nĐộ sắc n&eacute;t cao an to&agrave;n m&oacute;c th&ecirc;m c&aacute;c phụ kiện như ch&igrave;a kh&oacute;a xe m&aacute;y , treo xe oto , hay qu&agrave; tặng cho bạn b&egrave; v,v,', '1', '1961201087_2023765942-2-300x300.jpg', 'IEKkdQ.jpg', 'pUAV5p.jpg', '6'),
(13, 'M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty', '44', '145000', '145000', 'M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty Những sản phẩm li&ecirc;n quang tai đ&acirc;y n&egrave;', 'M&oacute;c Ch&igrave;a Kh&oacute;a M&egrave;o Hello Kitty \r\nMẫu mới được thiết kế th&agrave;nh bộ Git nguyện bộ .\r\nVới chất liệu l&ocirc;ng giả thỏ , d&acirc;y da PU , V&agrave; nhựa Vinyl\r\nNhững nguy&ecirc;n liệu th&acirc;n thiện chống trầy với những lớp m&agrave;u kh&ocirc;ng phai v&agrave; bộ l&ocirc;ng khong x&uacute;c ra  rất chắc chắn cho mẫu thiết kế tinh xảo n&agrave;y\r\nL&agrave; m&oacute;n qu&agrave; tặng cho ai cuồng Hello Kitty n&agrave;y , sản phẩm hiện nay c&oacute; 4 m&agrave;u si&ecirc;u đẹp v&agrave; được mong m&otilde;i của kh&aacute;ch h&agrave;ng lu&ocirc;n hỏi về n&oacute; . Kh&aacute; Hấp dẫn\r\nX 1 Bộ m&oacute;c ch&igrave;a kh&oacute;a Hello kitty \r\nsản phẩm c&oacute; g&igrave; ?\r\n1 hello kitty Hồng\r\n1 Cục b&ocirc;ng Hồng\r\n1 d&acirc;y hồng\r\n1 chu&ocirc;ng trắng hồng', '1', 'moc-chia-khoa-meo-hello-kitty-1m4G3-vCksf5_simg_d0daf0_800x1200_max.jpg', 'moc-chia-khoa-meo-hello-kitty-1m4G3-npL8MO_simg_d0daf0_800x1200_max.jpg', 'moc-chia-khoa-meo-hello-kitty-1m4G3-mSftkF_simg_d0daf0_800x1200_max.jpg', '6');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
