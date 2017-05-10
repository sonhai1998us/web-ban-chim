-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 07:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chim_canh`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh_dep`
--

CREATE TABLE `anh_dep` (
  `ma` int(11) NOT NULL,
  `ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` date NOT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `noi_dung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nguoi_cung_cap` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anh_dep`
--

INSERT INTO `anh_dep` (`ma`, `ten`, `hinh`, `ngay_dang`, `ma_nguoi_dung`, `noi_dung`, `nguoi_cung_cap`) VALUES
(1, 'Ảnh đẹp', 'footer-pic5.jpg', '2016-09-06', 0, '', ''),
(2, 'Ảnh đẹp 2', 'footer-pic6.jpg', '2016-09-11', 0, '', ''),
(3, 'Cảnh đẹp thiên nhiên kỳ 1', '1.jpg', '2013-03-30', 1, 'Cảnh đẹp chim cảnh rừng u minh', 'Chị: Bảo Thu Trang'),
(4, 'Cảnh đẹp thiên nhiên kỳ 2', '2.jpg', '2013-03-30', 1, 'Cảnh đẹp chim rừng U minh', 'Anh: Nguyễn Chí Thiện'),
(5, 'Cảnh đẹp thiên nhiên kỳ 3', '3.jpg', '2013-03-30', 4, 'Tặng công ty ảnh chụp đi du lịch', 'Anh: Hà Ngọc Diệp'),
(6, 'Cảnh đẹp thiên nhiên kỳ 4', '4.jpg', '2013-03-30', 9, 'Cảnh tuyệt đẹp rừng Sontinh', 'Anh: Nguyễn Văn Thảo'),
(7, 'Ảnh đẹp 3', 'footer-pic7.jpg', '2016-09-11', 0, '', ''),
(8, 'Ảnh đẹp 4', 'footer-pic8.jpg', '2016-09-11', 0, '', ''),
(9, 'Ảnh đẹp 5', 'footer-pic9.jpg', '2016-09-11', 0, '', ''),
(10, 'Ảnh đẹp 6', 'footer-pic10.jpg', '2016-09-11', 0, '', ''),
(11, 'Ảnh đẹp 7', 'footer-pic11.jpg', '2016-09-11', 0, '', ''),
(12, 'Ảnh đẹp 8', 'footer-pic12.jpg', '2016-09-11', 0, '', ''),
(13, 'Ảnh đẹp 9', 'work.jpg', '2016-09-11', 0, '', ''),
(14, 'Bộ sưu tập ảnh đẹp kỳ 1', '5.jpg', '2013-08-17', 1, 'g dfgdf gdfg', 'Trang web ichimcanh.com'),
(15, 'Ảnh đẹp 10', 'work1.jpg', '2016-09-11', 0, '', ''),
(16, 'Bộ sưu tập ảnh đẹp kỳ 2', '6.jpg', '2013-08-17', 1, 'g dfgdf gdfg', 'Trang web ichimcanh.com'),
(17, 'Ảnh đẹp 11', 'work2.jpg', '2016-09-11', 0, '', ''),
(18, 'Ảnh đẹp 12', 'work3.jpg', '2016-09-11', 0, '', ''),
(19, 'Bộ sưu tập ảnh đẹp kỳ 3', '7.jpg', '2013-08-17', 1, 'dfg dfg df', 'Trang web ichimcanh.com'),
(20, 'Ảnh đẹp 13', 'work4.jpg', '2016-09-11', 0, '', ''),
(21, 'Ảnh đẹp 14', 'work5.jpg', '2016-09-11', 0, '', ''),
(22, 'Bộ sưu tập ảnh đẹp kỳ 4', '8.jpg', '2013-08-17', 1, 'f gdf gdfg df', 'Trang web ichimcanh.com'),
(23, 'Bộ sưu tập ảnh đẹp kỳ 4', '9.jpg', '2013-08-17', 1, 'f gdf gdfg df', 'Trang web ichimcanh.com'),
(24, 'Bộ sưu tập ảnh đẹp kỳ 5', '10.jpg', '2013-08-17', 1, 'f gdf gdfg df', 'Trang web ichimcanh.com'),
(25, 'Bộ sưu tập ảnh đẹp kỳ 5', '11.jpg', '2013-08-17', 1, 'f gdf gdfg df', 'Trang web ichimcanh.com'),
(26, 'Bộ sưu tập ảnh đẹp kỳ 6', '12.jpg', '2013-08-17', 1, 'fg df gdfgd', 'Trang web ichimcanh.com'),
(27, 'Bộ sưu tập ảnh đẹp kỳ 7', 'footer-pic1.jpg', '2013-08-17', 1, 'sr re re', 'Trang web ichimcanh.com'),
(28, 'Ảnh đẹp các loài chim', 'footer-pic2.jpg', '2013-09-21', 1, 'Ảnh đẹp các loài chim', 'Mạng Internet'),
(29, 'Ảnh đẹp các loài chim 2', 'footer-pic3.jpg', '2013-09-21', 1, 'Ảnh đẹp các loài chim', 'Mạng Internet'),
(30, 'Ảnh đẹp các loài chim 3', 'footer-pic4.jpg', '2013-09-21', 1, 'Ảnh đẹp các loài chim', 'Mạng Internet'),
(31, 'Ảnh đẹp 15', 'work6.jpg', '2016-09-11', 0, '', ''),
(32, 'Ảnh đẹp 16', 'work7.jpg', '2016-09-11', 0, '', ''),
(33, 'Ảnh đẹp 17', 'work8.jpg', '2016-09-11', 0, '', ''),
(34, 'Ảnh đẹp 18', 'work9.jpg', '2016-09-11', 0, '', ''),
(35, 'Ảnh đẹp 19', 'work10.jpg', '2016-09-11', 0, '', ''),
(36, 'Ảnh đẹp 20', 'work11.jpg', '2016-09-11', 0, '', ''),
(37, 'Ảnh đẹp 21', 'work12.jpg', '2016-09-11', 0, '', ''),
(38, 'Ảnh đẹp 22', 'work13.jpg', '2016-09-11', 0, '', ''),
(39, 'Ảnh đẹp 23', 'work14.jpg', '2016-09-11', 0, '', ''),
(40, 'Ảnh đẹp 24', 'work15.jpg', '2016-09-11', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

CREATE TABLE `bai_viet` (
  `ma_bai_viet` int(11) NOT NULL,
  `ma_loai_bai_viet` int(11) DEFAULT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `tieu_de` varchar(200) CHARACTER SET utf8 NOT NULL,
  `noi_dung_tom_tat` text CHARACTER SET utf8 NOT NULL,
  `noi_dung_chi_tiet` text CHARACTER SET utf8 NOT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_nho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_gui_bai` date NOT NULL,
  `ngay_xuat_ban` date DEFAULT NULL,
  `ngay_het_han` datetime DEFAULT NULL,
  `so_lan_xem` int(11) NOT NULL,
  `xuat_ban` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bai_viet`
--

INSERT INTO `bai_viet` (`ma_bai_viet`, `ma_loai_bai_viet`, `ma_nguoi_dung`, `tieu_de`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `hinh`, `hinh_nho`, `ngay_gui_bai`, `ngay_xuat_ban`, `ngay_het_han`, `so_lan_xem`, `xuat_ban`) VALUES
(15, 195, 0, '4 tính năng "hay ho" trên iOS 10 sẽ khiến bạn rất...', 'Theo thông tin chính thức đến từ Apple thì vào ngày 13/ 9 sắp tới, phiên bản iOS 10 chính thức sẽ được tung ra trên toàn cầu.  ', 'Điều chỉnh chất lượng video khi dùng mạng Wi-Fi\n\nNếu bạn thích xem video trực tuyến qua mạng Wi-Fi trên các thiết bị iPhone, iPad hoặc iPod touch nhưng tốc độ kết nối kém hoặc Wi-Fi có băng thông thấp thì iOS 10 có thể giúp bạn, khi nó cho phép người dùng có khả năng điều chỉnh chất lượng video.\n\nĐể sử dụng tính năng này, người dùng vào Cài đặt và di chuyển xuống mục Video, sau đó chọn tùy chọn Wi-Fi và lựa chọn giữa Tốt với Tốt nhất có thể.\n\nThay đổi độ sáng đèn pin\n\nKể từ phiên bản iOS 7, người dùng iPhone và iPod có thể bật đèn flash để biến nó thành đèn pin thông qua trung tâm kiểm soát. iOS 10 còn hơn thế, các bạn còn có thể điều chỉnh độ sáng của đèn pin. Điều này vô cùng tiện lợi vì một phần nó giúp chúng ta bảo về mắt khi ánh sáng quá sáng.\n\nTính năng này chỉ có thể hữu dụng trên các thiết bị iPhone 6S trở lên, vì muốn sử dụng nó yêu cầu thiết bị phải được hỗ trợ 3D Touch.\n\nĐầu tiên, người dùng phải mở Trung tâm kiểm soát (Control Center). Sau đó nhấn giữ biểu tượng đèn pin cho tới khi xuất hiện một trình đơn. Lúc này bạn có thể điều chỉnh độ sáng của đèn pin theo 3 cấp độ: ánh sáng mạnh, trung bình hoặc thấp.\n\nChỉnh sửa, cắt xén hoặc thêm bộ lọc cho Live Photos\n\nCác thiết bị iPhone 6s trở lên được Apple khá ưu ái khi không chỉ có 3D Touch mà chức năng Live Photos cũng được đưa vào các sản phẩm này. Nếu như ở phiên bản iOS 9 người dùng có thể tạo ra được một bức ảnh dạng động khi chụp ảnh bằng camera trên iPhone, nhưng đáng buồn là bạn không thể chỉnh sửa chúng.\n\nTrong iOS 10 người dùng đã có thể chỉnh sửa ảnh Live Photos, cũng như thêm bộ lọc vào để tạo hiệu ứng ảnh đẹp hơn.\n\nKhi đang chụp một ảnh Live và xem nó, bạn hãy nhấp vào biểu tượng chỉnh sửa ở phía dưới màn hình, sau đó chọn một trong các tùy chọn chỉnh sửa, bao gồm cả điều chỉnh (ánh sáng, màu sắc…) và các bộ lọc, cắt hoặc xoay. Cuối cùng chỉ cần nhấn vào màn hình để xem những thay đổi mới có phù hợp với ý thích của bạn hay không.\n\nTìm email nhanh hơn\n\nVới những người thường xuyên phải làm việc với Email thì chức năng này vô cùng tiện lợi. Phiên bản iOS 10 cung cấp khả năng cho người dùng có thể tìm kiếm Email không chỉ ở hộp thư chính mà ở cả những mục khác như Spam hay thư đã gửi,…\n\nĐể sử dụng tính năng hữu ích này, người dùng vào giao diện chính của hộp thư, nhấp vào biểu tượng ba dòng ở phía dưới bên trái. Theo mặc định, tính năng sẽ tự động lọc các mail chưa đọc, nhưng bạn có thể gõ vào tùy chọn Filtered by để đưa ra các lựa chọn bổ sung khác.', 'ios10.jpg', 'ios10_2.jpg', '2016-09-10', NULL, NULL, 0, 0),
(16, 195, 0, 'Sau tất cả, vì sao Apple lại bỏ tai nghe 3.5 mm?', 'Trong buổi ra mắt iPhone 7, iPhone 7 Plus, đại diện của Apple từng nói rằng nhà Táo bỏ jack cắm tai nghe 3.5 mm là vì ', 'Trong buổi ra mắt iPhone 7, iPhone 7 Plus, đại diện của Apple từng nói rằng nhà Táo bỏ jack cắm tai nghe 3.5 mm là vì “lòng can đảm” nhưng lý do thực sự là gì?\n\nĐây có thể coi là quyết định gây tranh cãi nhất của Apple, thậm chí lúc mới rò rỉ thông tin này thì đã có hàng trăm người biểu tình tại trụ sở chính của Apple ở Mỹ. Hàng trăm ngàn chữ ký cũng đã được thu thập để phản đối nhưng cuối cùng Táo khuyết vẫn làm. Mới đây, các kỹ sư của gã khổng lồ này đã đưa ra những lý do rất chính đáng sau:\n\nĐầu tiên, iPhone 7 và 7 Plus đều được trang bị tính năng OIS, đặc biệt là iPhone 7 Plus còn có cả camera kép, cả 2 đều có khẩu độ lớn hơn và nó cần có nhiều không gian bên trong hơn. Để có thêm không gian cho mô đun camera, Apple phải loại bỏ hoặc di chuyển một thành phần khác trên bảng mạch xuống bên dưới.\n\nThành phần được chọn là một bảng mạch nhỏ có chức năng điều khiển màn hình hiển thị và đèn nền trên iPhone, nó thường nằm ở vị trí trên cùng của điện thoại. Nhưng đưa xuống dưới thì biết lắp vào đâu? Vâng, các kỹ sư đã quyết định loại bỏ thành phần tai nghe 3.5 mm để xem sự thay đổi sẽ thế nào.\n\nVà rồi họ nhận thấy điều này mang lại khá nhiều lợi ích, trong đó quan trọng nhất Apple có thể tăng được kích cỡ của pin trên iPhone 7, 7 Plus, giúp bộ đôi sản phẩm có thời lượng pin lâu nhất trong các phiên bản iPhone hiện nay. Trên thực tế, pin của iPhone 7 lớn hơn 14% so với iPhone 6S và pin trên iPhone 7 Plus lớn hơn 5% so với iPhone 6S Plus.\n\nMột lý do cũng hết sức hợp lý nữa đó là bỏ tai nghe 3.5 mm là loại bỏ đi một cổng dễ dàng bị thấm nước nhất nhờ vậy mà iPhone 7, 7 Plus cũng có thể chống nước tốt hơn.\n\nVà cuối cùng, với việc loại bỏ tai nghe 3.5 mm, Apple cũng đã tung ra loại tai nghe không dây AirPods và nó có giá khá cao, lên tới 159 USD. Chắc chắn nhiều người sẽ trang bị bộ tai nghe mới này cho iPhone 7, 7 Plus vậy là Apple lợi cả đôi đường nhé.', 'iphone-7-1.jpg', 'iphone-7-1_2.jpg', '2016-09-08', '2016-09-10', NULL, 1, 1),
(17, 195, 0, 'Cách đơn giản để bạn vừa sạc pin, vừa nghe nhạc trên iPhone 7', 'Trên iPhone 7, 7 Plus jack cắm tai nghe 3.5mm đã được Apple loại bỏ, chỉ còn duy nhất cổng Lightning. ', 'Trên iPhone 7, 7 Plus jack cắm tai nghe 3.5mm đã được Apple loại bỏ, chỉ còn duy nhất cổng Lightning. Tuy nhiên, người dùng vẫn có cách để vừa sạc pin, vừa nghe nhạc với 4 cách sau đây:\r\n\r\n1. Dùng Apple Lightning Dock.\r\n\r\nĐây là phụ kiện giúp bạn có thể vừa nghe nhạc, vừa sạc pin cho thiết bị. Phụ kiện này bao gồm jack 3.5mm để cắm tai nghe và cổng Lighting để sạc pin cho iPhone7 / iPhone 7 Plus. Sản phẩm này hiện đang có giá từ $39\r\n\r\n2. Dùng tai nghe Bluetooth\r\n\r\nGiải pháp tiếp theo là bạn nên mua cho mình một chiếc tai nghe có kết nối Bluetooth. Nếu bạn muốn thời thượng thì có thể mua luôn chiếc AirPod mà Apple vừa trình làng với giá $159. Rất đúng chuẩn với iPhone 7, 7 Plus\r\n\r\n3. Dùng bộ chuyển Lightning adapter\r\n\r\nGiải pháp tiếp theo là bạn nên dùng bộ chuyển thường thấy khi đi du lịch Lightning adapter. Ngoài ra bạn cũng có sở hữu cho mình một phụ kiện mà nhà sản xuất Belkin vừa mới tung ra mang tên Lightning Audio + Charge RockStar, được tích hợp cả cổng Lightning và cổng audio riêng, sạc cho iPhone mới và Apple Watch với giá $129.99\r\n\r\n4. Dùng loa ngoài của iPhone\r\n\r\nTuy Apple bỏ jack cắm tai nghe nhưng hãng đã trang bị thêm loa ngoài Stereo cho thiết bị của mình, giúp việc trải nghiệm âm thanh di động trở nên tốt hơn. Vì thế, bạn có thể dùng luôn cụm loa này để nghe nhạc khi đang sạc iPhone 7,  iPhone 7 Plus.\r\n\r\nBạn nghĩ sao về các phụ kiện trên? Hay có ý kiến như thế nào về việc Apple bỏ đi jack tai nghe 3.5mm truyền thống. Mời các bạn chia sẻ ý kiến của mình bên dưới nhé.', 'iphone72.jpg', 'iphone72_2.jpg', '2016-09-05', '2016-09-10', NULL, 1, 1),
(18, 194, 0, 'Khuyến mãi giảm giá mua ngay kẻo lỡ, chỉ có trong ngày', 'Giảm giá trên tất cả sản phầm khi mua lồng chim', 'Giảm giá trên tất cả sản phầm khi mua lồng chim.\r\n\r\nCụ thể như sau:\r\n\r\nLồng gỗ giảm: 15%\r\n\r\nLồng sắt giảm: 10%\r\n\r\nLồng nghệ thuật giảm: 20%\r\n\r\nLồng các loại giảm: 15%', 'nghe_thuat_NT02.jpg', 'nghe_thuat_NT02_2.jpg', '2016-09-06', '2016-09-10', NULL, 1, 1),
(19, 194, 0, 'Khuyến mãi hot, chỉ có trong ngày. Mua ngay mua ngay', 'Mua chim tặng lồng khi mua khách hàng mua  chim ở cửa hàng', 'Mua chim tặng lồng khi mua khách hàng mua  chim ở cửa hàng.\n\nCụ thể như sau:\n\nKhi mua chào mào khách hàng sẽ được tặng một sản phẩm lồng chim chào mào tự chọn.\n\nKhi mua chích chòe khách hàng sẽ được tặng một sản phẩm lồng chim tự chọn.\n\nKhi mua vẹt khách hàng sẽ được tặng một sản phẩm lồng chim tự chọn.\n\nKhi mua các loại chim khác khách hàng sẽ được tặng một sản phẩm lồng chim bằng mây tự chọn.', 'long_2.jpg', 'long_2_2.jpg', '2016-09-06', '2016-09-10', NULL, 1, 1),
(21, 197, 0, 'Vẻ đẹp của vườn quốc gia Phong Nha - Kẻ Bàng.', 'Phong Nha-Kẻ Bàng là nơi sinh sống của 140 loài thú thuộc 31 họ và 10 bộ, nổi bật nhất là hổ và bò tót, loài bò rừng lớn nhất thế ', 'Phong Nha-Kẻ Bàng là nơi sinh sống của 140 loài thú thuộc 31 họ và 10 bộ, nổi bật nhất là hổ và bò tót, loài bò rừng lớn nhất thế giới, 302 loài chim, trong đó có ít nhất 43 loài nằm trong Sách đỏ Việt Nam và 19 loài nằm trong Sách đỏ thế giới; 81 loài bò sát lưỡng cư (18 loài trong Sách đỏ Việt Nam và 6 loài Sách đỏ thế giới); 259 loài Bộ Cánh vẩy; 72 loài cá, trong đó có 4 loài đặc hữu Việt Nam. Năm 1996, ở đây có loài cá mới phát hiện ở Việt Nam. Linh trưởng có 10 loài linh trưởng, chiếm 50% tổng số loài thuộc bộ linh trưởng ở Việt Nam, 7 loài nằm trong Sách đỏ Việt Nam, đặc biệt là voọc Hà Tĩnh, sao la, mang (thú). Phong Nha-Kẻ Bàng được đánh giá là có hệ tự nhiên đa dạng nhất trong tất cả các vườn quốc gia và khu dự trữ sinh quyển quốc gia trên thế giới.\r\n\r\nPhong Nha-Kẻ Bàng là nơi có cộng đồng linh trưởng phong phú bậc nhất Đông Nam Á. Năm 2002, nhà khoa học Đức Thomas Zegler đã phát hiện ra một loài thằn lằn tai mới có tên là Tripidophrus Nogei tại vùng núi karst thuộc khu vực Chà Nòi. Loài thằn lằn này đã được đăng trên số báo 114 phát hành tháng 7 năm 2007 của tạp chí Revue Suise De Zoologie. Các nhà khoa học đã đặt tên loài này là Thằn lằn Phong Nha-Kẻ Bàng (danh pháp khoa học: Cyrtodactylus phongnhakebangensis). Các nhà khoa học Đức đã xây dựng một khu giới thiệu Vườn quốc gia Phong Nha-Kẻ Bàng tại Vườn thú Köln để giới thiệu sự đa dạng sinh học của vườn quốc gia này, ở đây cũng phát hiện ra loại rắn mai gầm mới. Qua một thời gian khảo sát, các nhà khoa học Đức, Nga và Việt Nam đã phát hiện thêm 10 loài mới trong vườn quốc gia này, trong đó bao gồm 5 loài rắn, 5 loài tắc kè, thằn lằn, nhiều loài trong số mới phát hiện này là động vật đặc hữu ở đây.\r\n\r\nCác nhà khoa học Việt Nam và các nhà khoa học Nga thuộc Viện Động vật hoang dã Sankt-Peterburg, các nhà khoa học Đức của Vườn thú Köln đã phát hiện thêm tại vườn quốc gia này hơn 100 loài mới trong khu hệ cá. Mười loại cá chưa từng thấy ở Việt Nam đã được phát hiện ở vườn quốc gia này.\r\n\r\nTrong 3 loài cá ở Phong Nha-Kẻ Bàng được ghi vào Sách Đỏ Việt Nam thì đã có 2 loài cá chình. Đó là cá chình hoa và cá chình mun.\r\n\r\nTổ chức Bảo tồn Động vật hoang dã Thế giới (FFI) đã tiến hành khảo sát và đã có báo cáo cho rằng Vườn Quốc gia Phong Nha-Kẻ Bàng có 4 loài được xếp vào diện nguy cấp trên phạm vi toàn cầu, đó là voọc Hà Tĩnh, voọc đen tuyền, voọc ngũ sắc và vượn đen má trắng.\r\n\r\nNgày 27 tháng 2 năm 2005, một đàn bò tót với số lượng lớn xuất hiện tại Vườn quốc gia Phong Nha-Kẻ Bàng.\r\n\r\nNăm 2010, một loài bọ cạp mới có tên khoa học là Vietbocap canhi, tên tiếng Việt là bọ cạp Cảnh đã được phát hiện tại động Tiên Sơn. Năm 2012, một loài bọ cạp mới có tên khoa học là Vietbocap thienduongensis. Tên tiếng Việt là bọ cạp Thiên Đường đã được phát hiện tại hang Thiên Đường.', 'phong_nha.jpg', 'phong_nha_2.jpg', '2016-09-06', '2016-09-10', NULL, 1, 1),
(22, 197, 0, 'Vẻ đẹp của vườn quốc gia Cát Tiên. Đến tham quan ngay', 'Nhóm thú\n\nCho đến nay, các nghiên cứu đã ghi nhận được ở Cát Tiên có 113 loài thú, thuộc 38 họ ', 'Nhóm thú\r\n\r\nCho đến nay, các nghiên cứu đã ghi nhận được ở Cát Tiên có 113 loài thú, thuộc 38 họ và 12 bộ. Trong đó có tới 43 loài thú đang bị đe doạ tuyệt chủng trong nước và trên toàn cầu với 38 loài có tên trong Sách đỏ Việt Nam (2007). Ngoài ra, còn có 18 loài và phân loài thú là đặc hữu cho tiểu vùng địa sinh học Đông Dương và đặc biệt có 3 loài và phân loài là đặc hữu cho Việt Nam là chà vá chân đen, tê giác một sừng Việt Nam và hoẵng Nam bộ. Tỷ lệ các loài đặc hữu cao đã nâng cao tầm quan trọng của VQG Cát Tiên đối với công tác bảo tồn đa dạng sinh học trong nước và trên thế giới.\r\n\r\nNhóm chim\r\n\r\nGồm 351 loài thuộc 64 họ của 18 bộ. Trong đó có 17 loài quí hiếm đã được phát hiện và có tên trong sách đỏ Việt Nam. Nếu so sánh với cấu trúc thành phần loài của khu hệ chim Việt Nam, thì có thể nói Cát Tiên là một “đất nước thu nhỏ” của các loài chim rừng Việt Nam. Khu hệ chim Việt Nam có 19 bộ thì Cát Tiên có 18 bộ (94,74% tổng số bộ chim Việt Nam), 64 họ chiếm đến 79,01% tổng số họ chim của Việt Nam (81 họ). Với 351 loài chim chiếm 42,39% tổng số loài chim của Việt Nam (828 loài). Một số loài chim quí hiếm có ở Cát Tiên như: hạc cổ trắng, công, già đẫy java, quắm cánh xanh, ngan cánh trắng, gà so cổ hung.\r\nVQG Cát Tiên nằm trong vùng chim đặc hữu (EBA) vùng đất thấp nam Việt Nam, có quần thể của 3 loài chim trong vùng chim đặc hữu là: gà so cổ hung, gà tiền mặt vàng, chích chạch má xám .\r\n\r\nNhóm bò sát và lưỡng cư\r\n\r\nCác loài bò sát có 109 loài thuộc 17 họ và phân họ, 4 bộ, trong đó có 18 loài có tên trong sách Đỏ Việt Nam như: cá sấu Xiêm,trăn gấm, trăn đen …\r\nCác loài lưỡng cư có 41 loài thuộc 6 họ, 2 bộ trong đó có 3 loài được ghi tên trong sách đỏ Việt Nam như cóc mắt chân dài , cóc rừng, chàng andecson .\r\n\r\nNhóm côn trùng\r\n\r\nHiện nay đã ghi nhận được 756 loài thuộc 68 họ, 10 bộ. Riêng các loài bướm đã xác định được 450 loài, chiếm hơn 50% tổng số loài bướm được ghi nhận ở Việt Nam. Các loài quý hiếm có 2 loài là bướm phượng (Sách Đỏ Việt Nam năm 2007) và bướm phượng cánh sau vàng, bướm phượng cánh kiếm..\r\n\r\nNhóm cá nước ngọt\r\n\r\nGồm 159 loài, thuộc 29 họ, 9 bộ. Trong đó, có 1 loài nằm trong sách đỏ Việt Nam năm 2007 và Sách Đỏ IUCN 2008.', 'Cat-Tien-National-Park.jpg', 'Cat-Tien-National-Park_2.jpg', '2016-09-06', '2016-09-10', NULL, 1, 1),
(23, 197, 0, 'Vẻ đẹp của vườn quốc gia Cúc Phương. Đến tham quan ngay', 'Trong số 659 loài động vật có xương sống, có những loài rất quý hiếm và có nguy cơ bị tuyệt trủng cao như: ', 'Trong số 659 loài động vật có xương sống, có những loài rất quý hiếm và có nguy cơ bị tuyệt trủng cao như: Vooc Mông Trắng ( Trachipythecus delacouri), Báo Gấm (Neofelis nebulosa), Sơn Dương (Carpicornis sumatraensis), cá Niếc Hang (Silurus cucphuongensis) và loài Sóc Bụng Đỏ đuôi hoe (Callosciurus erythraeus cuocphuongensis).\r\n\r\nRiêng loài Vooc Mông Trắng đã từng bị coi là tuyệt trủng cách ngày nay trên 50 năm nhưng vào đầu thập lỷ 90 lại được tái phát hiện tại Cúc Phương. Thế giới côn trùng Cúc Phương lại càng phong phú, đã biết tới 1899 loài và dạng loài thuộc 169 họ, 33 bộ. Có nhiều loài lạ như Bọ que với cơ thể và chân như những chiếc que, chúng có màu xanh lá cây hay màu nâu đất như thân hoặc cành cây, chỉ có thể nhận ra khi chúng khởi động. Về mùa hè có thể thấy nhiều đàn Bướm màu sắc sặc sỡ trên dọc đường đi hay bên các dòng suối can.\r\n\r\nVườn Quốc gia Cúc Phương nổi tiếng vì tính đa dạng các loài thực vật. Với trên 2000 loài thực vật bậc cao trong đó có những cây đại thụ như Chò xanh, Đăng, Sấu mà bạnh vè của chúng sừng sững như bức tường thành giữa rừng đại ngàn; lại có những cây chuyên sống nhờ trên cây chủ, đến khi lớn lên lại bóp chết cây chủ để vươn lên tầng cao của tán rừng.\r\n\r\nCó những dây leo thân gỗ uốn lượn như những con mãng xà chạy dài mấy trăm mét giữa các tầng rừng … tất cả tạo nên một cảnh hoang sơ đầy bí ẩn nhưng vô cùng hùng vĩ mang đặc trưng của rừng mưa nhiệt đới. Đặc biệt, các nhà khoa học đã phát hiện thêm 12 loài thực vật mới cho khoa học trong đó có một chi và loài Lan rất hiếm (Vietorchis aurea Averyanov). Loài này chỉ phân bố tại một vùng rất hẹp tại Cúc Phương.', 'cuc_phuong.jpg', 'cuc_phuong_2.jpg', '2016-09-05', '2016-09-10', NULL, 1, 1),
(24, 198, 0, 'Khu du lịch sinh thái Vườn Xoài - cực đẹp, cực rẽ', 'Bạn có thể thả mình trong yên tĩnh của rừng tre Bát Bộ hay sự mát mẻ của suối Huynh Đệ hoặc đắm mình vào làn nước của hồ bơi', 'Bạn có thể thả mình trong yên tĩnh của rừng tre Bát Bộ hay sự mát mẻ của suối Huynh Đệ hoặc đắm mình vào làn nước của hồ bơi nhân tạo rộng đến 600m2. Bạn cũng có thể trượt cỏ ở khu đồng cỏ rộng đến 2ha, chèo thuyền, cưỡi đà điểu, đi xe ngựa, bắn súng sơn… khi đến Vườn Xoài.\r\n\r\nBên cạnh cảnh sắc thiên nhiên, các món ăn ở đây cũng phong phú với đà điểu, cá sấu, heo rừng lai, rau xanh...\r\n\r\n\r\nĐịa chỉ: 114 ấp Tân Cang, xã Phước Tân, TP.Biên Hòa, Đồng Nai. ĐT: (061) 3968163/164', 'vuon_xoai.jpg', 'vuon_xoai_2.jpg', '2016-09-07', '2016-09-10', NULL, 1, 1),
(25, 198, 0, 'Khu du lịch sông nước Vĩnh Sang. Đẹp mê ly', 'Đến đây bạn có thể xả stress với các trò chơi cảm giác mạnh như: câu cá sấu, cưỡi đà điểu, bắt cá bằng tay hay xắn tay vào', 'Đến đây bạn có thể xả stress với các trò chơi cảm giác mạnh như: câu cá sấu, cưỡi đà điểu, bắt cá bằng tay hay xắn tay vào làm món cá nướng tự chế và nhâm nhi với rượu nếp cay nồng. Nghe đờn ca tài tử cũng là một thưởng thức thú vị khi đến đây.\r\n\r\nMột số các hoạt động khác mà bạn có thể trải nghiệm là tắm sông, trượt nước, đi xe đạp, tham quan làng nghề truyền thống về kẹo dừa và làm gốm.\r\n\r\nThức ăn phục vụ ở đây phong phú gồm: đà điểu nướng giấy bạc, lẩu cá sấu, ốc hấp hèm chuối xiêm, chuột đồng rô ti, ốc um lá cách, đà điểu cà ri, lẩu gà chanh quế, cá sấu xào lăn…\r\n\r\nĐịa chỉ: Cù lao An Bình, tổ 14, ấp An Thuận, xã An Bình, H.Long Hồ, tỉnh Vĩnh Long; ĐT: (070) 6283838).', 'vinh_sang.jpg', 'vinh_sang_2.jpg', '2016-09-07', '2016-09-10', NULL, 1, 1),
(26, 198, 0, 'Vẻ đẹp của khu du lịch sinh thái Mekong - Đồng Phú', 'Nằm trên cồn Đồng Phú, trên ranh giới của hai tỉnh Tiền Giang và Vĩnh Long. Khu du lịch sinh thái này kết hợp cả thăm quan nuôi cá', 'Nằm trên cồn Đồng Phú, trên ranh giới của hai tỉnh Tiền Giang và Vĩnh Long. Khu du lịch sinh thái này kết hợp cả thăm quan nuôi cá tra và cá basa.\r\n\r\nCác hoạt động tại khu du lịch là: đi canô hay môtô nước, đi phao chèo hay phao chuối, đu dây cảm giác mạnh, tắm sông và câu cá kênh hoặc chèo xuồng ra giữa kênh để câu.\r\n\r\nĐịa chỉ: Ấp Phú Thuận 1, xã Đồng Phú, H.Long Hồ, tỉnh Vĩnh Long; ĐT: 093.923.4909', 'dong_phu.jpg', 'dong_phu_2.jpg', '2016-09-05', '2016-09-10', NULL, 1, 1),
(27, 198, 0, 'Khu du lịch thác Giang Điền', 'Di chuyển: Bạn có thể đi xe máy đến đây vì thác Giang Điền chỉ cách Tp.HCM khoảng 45km. Bạn cũng có thể đi xe buýt số 12 từ', 'Di chuyển: Bạn có thể đi xe máy đến đây vì thác Giang Điền chỉ cách Tp.HCM khoảng 45km. Bạn cũng có thể đi xe buýt số 12 từ Bến Thành đế đến ngay khu du lịch. Dòng thác tự nhiên cùng cảnh quan thiên nhiên xanh mát là điểm thu hút của khu này. Đến đây bạn có thể tắm dưới thác, chèo thuyền, ngắm các loại hoa...\r\n\r\nĐịa chỉ: Số 104/4 ấp Hòa Bình, xã Giang Điền, H.Trảng Bom, tỉnh Đồng Nai. ĐT: (061) 3923930 - Fax: (061) 3923931)\r\n', 'giang_dien.jpg', 'giang_dien_2.jpg', '2016-09-06', '2016-09-10', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(566, 1381575201, '127.0.0.1', 'zvsbb8sp');

-- --------------------------------------------------------

--
-- Table structure for table `chim_canh`
--

CREATE TABLE `chim_canh` (
  `ma_chim` int(11) NOT NULL,
  `ten_chim` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nguon_goc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` double NOT NULL,
  `dien_giai` text COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_nho` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `khuyen_mai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_cap_nhat` date NOT NULL,
  `loai` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chim_canh`
--

INSERT INTO `chim_canh` (`ma_chim`, `ten_chim`, `nguon_goc`, `gia`, `dien_giai`, `dien_thoai`, `hinh`, `hinh_nho`, `khuyen_mai`, `ngay_cap_nhat`, `loai`, `trang_thai`) VALUES
(3, 'Chào mào nuôi từ nhỏ', 'Nha Trang', 750000, 'Hót hay, khỏe, ăn tốt, thả được, lông mượt', '0123695639', 'chao_mao_nha_trang_n3.jpg', 'chao_mao_nha_trang_n3_1.jpg', 'Lồng', '2013-03-07', 1, 1),
(4, 'Chào mào 2 năm tuổi', 'Hà Nội', 500000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0123695639', 'chao_mao_nha_trang_24.jpg', 'chao_mao_nha_trang_24_1.jpg', '', '2013-03-07', 1, 1),
(5, 'Chào mào điêu luyện', 'Hà Nội', 500000, 'Hót hay, khỏe, ăn tốt, thả được, lông mượt', '016369879', 'chao_mao_ha_noi_n5.jpg', 'chao_mao_ha_noi_n5_1.jpg', '', '2013-03-07', 1, 1),
(6, 'Chào mào nuôi từ nhỏ', 'Hà Nội', 750000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '016369879', 'chao_mao_ha_noi_26.jpg', 'chao_mao_ha_noi_26_1.jpg', '', '2013-03-07', 1, 1),
(7, 'Chào mào 4 năm tuổi', 'Nha Trang', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1364443787chao_mao.jpg', '1364443787chao_mao_1.jpg', '', '2013-03-29', 1, 1),
(8, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363868580chao_mao2.jpg', '1363868580chao_mao2_1.jpg', '', '2013-03-21', 1, 1),
(9, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363868678chao_mao3.jpg', '1363868678chao_mao3_1.jpg', '', '2013-03-21', 1, 1),
(11, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870563chao_mao5.jpg', '1363870563chao_mao5_1.jpg', '', '2013-03-21', 1, 1),
(12, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870570chao_mao6.jpg', '1363870570chao_mao6_1.jpg', '', '2013-03-21', 1, 1),
(13, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870757chao_mao7.jpg', '1363870757chao_mao7_1.jpg', '', '2013-03-21', 1, 1),
(14, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870913chao_mao8.jpg', '1363870913chao_mao8_1.jpg', '', '2013-03-21', 1, 1),
(15, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870921chao_mao9.jpg', '1363870921chao_mao9_1.jpg', '', '2013-03-21', 1, 1),
(16, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870924chao_mao10.jpg', '1363870924chao_mao10_1.jpg', '', '2013-03-21', 1, 1),
(17, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870927chao_mao11.jpg', '1363870927chao_mao11_1.jpg', '', '2013-03-21', 1, 1),
(18, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870930chao_mao12.jpg', '1363870930chao_mao12_1.jpg', '', '2013-03-21', 1, 1),
(19, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870935chao_mao13.jpg', '1363870935chao_mao13_1.jpg', '', '2013-03-21', 1, 1),
(20, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870938chao_mao14.jpg', '1363870938chao_mao14_1.jpg', '', '2013-03-21', 1, 1),
(21, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870941chao_mao15.jpg', '1363870941chao_mao15_1.jpg', '', '2013-03-21', 1, 1),
(22, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870944chao_mao16.jpg', '1363870944chao_mao16_1.jpg', '', '2013-03-21', 1, 1),
(23, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870947chao_mao17.jpg', '1363870947chao_mao17_1.jpg', '', '2013-03-21', 1, 1),
(24, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870950chao_mao18.jpg', '1363870950chao_mao18_1.jpg', '', '2013-03-21', 1, 1),
(25, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870953chao_mao19.jpg', '1363870953chao_mao19_1.jpg', '', '2013-03-21', 1, 1),
(26, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870956chao_mao20.jpg', '1363870956chao_mao20_1.jpg', '', '2013-03-21', 1, 1),
(27, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870959chao_mao21.jpg', '1363870959chao_mao21_1.jpg', '', '2013-03-21', 1, 1),
(28, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870962chao_mao22.jpg', '1363870962chao_mao22_1.jpg', '', '2013-03-21', 1, 1),
(29, 'Chào mào núi', 'Hà nội', 1000000, 'Chim hót rất hay, không bệnh tật, dáng đẹp, lông mượt, rất hay hót, đặc biệt ăn khỏe.', '0919256255', '1363870965chao_mao23.jpg', '1363870965chao_mao23_1.jpg', '', '2013-03-21', 1, 1),
(30, 'Chích chòe nước', 'Hà nội', 1200000, 'Đây là các loài chim sống trong rừng ở khu vực Đông Nam Á, chủ yếu gắn liền với các cánh rừng và suố', '0919256255', '1364215638chich_choe24.jpg', '1364215638chich_choe24_1.jpg', '', '2013-03-25', 2, 1),
(32, 'Chích chòe nước - lưng đen', 'Hà nội', 1200000, 'Đây là các loài chim sống trong rừng ở khu vực Đông Nam Á, chủ yếu gắn liền với các cánh rừng và suố', '0919256255', '1364215911chich_choe_nuoc_lung_den.jpg', '1364215911chich_choe_nuoc_lung_den_1.jpg', '', '2013-03-25', 2, 1),
(33, 'Chích chòe lửa', 'Hà nội', 1200000, 'Đây là các loài chim sống trong rừng ở khu vực Đông Nam Á, chủ yếu gắn liền với các cánh rừng và suố', '0919256255', '1364216357chich_choe14.jpg', '1364216357chich_choe14_1.jpg', '', '2013-03-25', 2, 1),
(34, 'Chích chòe nước', 'Hà nội', 1000000, 'Đây là các loài chim sống trong rừng ở khu vực Đông Nam Á, chủ yếu gắn liền với các cánh rừng và suố', '0919256255', '1364373648chich_choe18.jpg', '1364373648chich_choe18_1.jpg', '', '2013-03-27', 2, 1),
(36, 'Chích chòe lửa', 'Hà nội', 1200000, 'Đây là các loài chim sống trong rừng ở khu vực Đông Nam Á, chủ yếu gắn liền với các cánh rừng và suối', '0919256255', '1364374182chich_choe16.jpg', '1364374182chich_choe16_1.jpg', '', '2013-03-27', 2, 1),
(37, 'Lồng chim chào mào', 'Huế', 2000000, 'Lồng chim chào mào tre già đục nho sóc , cửa lồng kiểu huế', '0123456789', '137549741813649111561.jpg', '137549741813649111561_1.jpg', '', '2013-08-03', 6, 1),
(38, 'Lồng chim chào mào', 'Huế', 2000000, 'Lồng chim chào mào tre già đục nho sóc , cửa lồng kiểu huế', '0123456789', '137549760413649113633.jpg', '137549760413649113633_1.jpg', '', '2013-08-03', 6, 1),
(39, 'Lồng chim chào mào', 'Huế', 2000000, 'Lồng chim chào mào tre già đục nho sóc , cửa lồng kiểu huế', '1869008724', '137549763513649113906.jpg', '137549763513649113906_1.jpg', '', '2013-08-03', 6, 1),
(40, 'Lồng mi thổ đục.', 'Huế', 2000000, 'Lồng mi thổ đục.', '0123456789', '1375497885Long_mi_tho_truc.jpg', '1375497885Long_mi_tho_truc_1.jpg', '', '2013-08-03', 7, 1),
(41, ' Lồng Chim Họa Mi Tre ', 'Huế', 1600000, ' Lồng Chim Họa Mi Tre ', '1869008724', 'Long_m__tre_con_minh.jpg', 'Long_m__tre_con_minh_1.jpg', '', '2013-08-03', 6, 1),
(42, 'Cặp chim sẻ thông', 'Báo', 500000, '<p>sd ds sd ds sd&nbsp;</p>\r\n', '0123456789', '1431602566-chao-mao-dep-8.jpg', '1431602566-chao-mao-dep-8_1.jpg', '', '2015-05-14', 10, 0),
(43, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, '<p>Chim h&oacute;t rất hay, kh&ocirc;ng bệnh tật, d&aacute;ng đẹp, l&ocirc;ng mượt, rất hay h&oacute;t, đặc biệt ăn khỏe.</p>\r\n', '0919256255', '1431603358-chao-mao.jpg', '1431603358-chao-mao_1.jpg', '5%', '2013-03-21', 1, 1),
(44, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, '<p>Chim h&oacute;t rất hay, kh&ocirc;ng bệnh tật, d&aacute;ng đẹp, l&ocirc;ng mượt, rất hay h&oacute;t, đặc biệt ăn khỏe.</p>\r\n', '0919256255', '1431603518-chao-mao3.jpg', '1431603518-chao-mao3_1.jpg', '5%', '2013-03-21', 1, 1),
(45, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, '<p>Chim h&oacute;t rất hay, kh&ocirc;ng bệnh tật, d&aacute;ng đẹp, l&ocirc;ng mượt, rất hay h&oacute;t, đặc biệt ăn khỏe.</p>\r\n', '0919256255', '1431603590-chao-mao4.jpg', '1431603590-chao-mao4_1.jpg', '', '2013-03-21', 1, 1),
(46, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, '<p>Chim h&oacute;t rất hay, kh&ocirc;ng bệnh tật, d&aacute;ng đẹp, l&ocirc;ng mượt, rất hay h&oacute;t, đặc biệt ăn khỏe.</p>\r\n', '0919256255', '1431601242-chao-mao2.jpg', '1431601242-chao-mao2_1.jpg', '', '2013-03-21', 1, 1),
(47, 'Chào mào 1 năm tuổi', 'Hà nội', 1000000, '<p>Chim h&oacute;t rất hay, kh&ocirc;ng bệnh tật, d&aacute;ng đẹp, l&ocirc;ng mượt, rất hay h&oacute;t, đặc biệt ăn khỏe.</p>\r\n', '0919256255', '1431602151-chao-mao2.jpg', '1431602151-chao-mao2_1.jpg', '', '2013-03-21', 1, 1),
(48, 'Chìa vôi đầu vàng', 'Nha Trang', 1000000, 'Loài chim này dài 15,5–17 cm, với đuôi dài thường xuyên ve vẩy, màu xám hoặc màu đen ở trên, với màu trắng ở lông cánh, và sáng màu vàng chanh ở dưới và trên toàn bộ đầu trừ sau gáy có màu đen.', '0919256255', 'chia_voi_dau_vang.jpg', 'chia_voi_dau_vang_1.jpg', '', '2016-09-06', 11, 1),
(49, 'chìa vôi lưng đen', 'Nha Trang', 750000, 'Thân hình mảnh dẻ, thức ăn là các loại sâu bọ trên mặt đất.', '0919256255', 'chia_voi_lung_den.jpg', 'chia_voi_lung_den_1.jpg', '', '2016-09-06', 11, 1),
(51, 'Gõ kiến đất', 'Hà Nội', 1000000, 'Chim gõ kiến đất thường kiếm ăn ở dưới đất thay vì trên cây. Có bộ lông màu đất để hòa lẫn với môi trường xung quanh. Thức ăn chủ yếu của loài chim này mối và các loài côn trùng khác sống dưới đất.', '0163314415', 'go_kien_dat.jpg\r\n', 'go_kien_dat_1.jpg', '5%', '2016-09-06', 12, 1),
(52, 'Gõ kiến đen bụng trắng', 'Lâm Đồng', 1500000, 'Chim đực trưởng thành: Trán, đỉnh đầu và gáy đỏ tươi phần gốc các lông trắng. Nửa má dưới đỏ. Ngực dưới, bụng, sườn và nách trắng. Cằm: họng và trước cổ đen có chấm trắng. Ở phần gốc các lông cánh có vệt trắng lớn, mút lông cánh trắng. Một dải trắng ngang qua hông. Phần còn lại của bộ lông đen.\r\nChim cái: Trán và phần trước đỉnh đầu đen, không có vệt đỏ ở má.\r\nMắt trắng hay vàng nhạt. Mỏ xám chì, sống mỏ đen nhạt. Chân xám.', '0163314415', 'go_kien_den_bung_trang.jpg', 'go_kien_den_bung_trang_1.jpg', '5%', '2016-09-06', 12, 1),
(53, 'Gõ kiến lùn đầu vàng', 'Lâm đồng', 1000000, 'Gõ kiến lùn đầu vàng - Picumnus innominatus là loài chim Gõ kiến thuộc chi Picumnus, trong họ Gõ kiến Picidae, Phân bộ Pici. ', '0163314415', 'go_kien_lun_dau_vang.jpg', 'go_kien_lun_dau_vang_1.jpg', '5%', '2016-09-06', 12, 1),
(55, 'Gõ kiến nâu đỏ', 'Lâm đồng', 1000000, 'Gõ kiến nâu đỏ - Gecinulus grantia là loài chim Gõ kiến thuộc chi Blythipicus, trong họ Gõ kiến Picidae, Phân bộ Pici', '01654415516', 'go_kien_nau_do.jpg', 'go_kien_nau_do_1.jpg', '5%', '2016-09-07', 12, 1),
(56, 'Gõ kiến nhỏ sườn đỏ', 'Lâm đồng', 750000, 'Chim gõ kiến nhỏ sườn đỏ trống có một điểm màu đỏ thẫm trên gáy, trong khi chim mái và chim non không có, Chim trống trưởng thành Năm thứ hai, đỉnh đầu là màu đỏ thẫm giữa mỏ và trung tâm của vương miện.', '01645514415', 'go_kien_nho_suon_do.jpg', 'go_kien_nho_suon_do_1.jpg', '5%', '2016-09-07', 12, 1),
(57, 'Gõ kiến vàng nhỏ', 'Lâm đồng', 750000, 'Gõ kiến vàng nhỏ - Dinopium javanense là loài chim Gõ kiến thuộc chi Dinopium, trong họ Gõ kiến Picidae, Phân bộ Pici', '0919256255', 'go_kien_vang_nho.jpg', 'go_kien_vang_nho_1.jpg', '5%', '2016-09-07', 12, 1),
(58, 'Chim gõ kiến xanh hông đỏ', 'Đông Dương', 1500000, 'Chim gõ kiến xanh hông đỏ là loài chim gõ kiến phổ biến, phần trên lưng của nó là màu xanh lá cây ngoài các gáy sáng có màu vàng. Trên đầu màu đen, chim trống với vương miện màu đỏ tươi, cổ và ngực có màu vàng và bụng là màu trắng, với các chấm mịn màu xanh lá cây. Cuối thân trên lưng màu đỏ và đuôi màu đen. Mắt màu vàng với tròng màu đen. Trong khi đó chim mái đầu màu đen, không có vương miện màu đỏ, chim non là giống chim mái, nhưng mờ nhạt.', '0919256255', 'go_kien_xanh_hong_do.jpg', 'go_kien_xanh_hong_do_1.jpg', '5%', '2016-09-07', 12, 1),
(59, 'Nhạn bụng trắng', 'Lâm đồng', 750000, 'Nhạn bụng trắng hay nhạn nhà (danh pháp hai phần: Hirundo rustica) là một loài chim, là loài chim nhạn phân bố rộng rãi nhất thế giới.', '0919256255', 'nhan_bung_trang.jpg', 'nhan_bung_trang_1.jpg', '5%', '2016-09-07', 13, 1),
(60, 'Nhạn đuôi đen ', 'Lâm đồng', 750000, 'Nhạn đuôi đen là một loài chim dạng sẻ có danh pháp khoa học Hirundinidae. Chúng là những loài chim thích nghi với cuộc sống săn tìm mồi trên không.', '01654415516', 'nhan_duoi_den.jpg', 'nhan_duoi_den_1.jpg', '5%', '2016-09-07', 13, 1),
(61, 'Nhạn nâu xám', 'Hà Nội', 0, 'Nhạn nâu xám đào hang trên đê chắn sóng hoặc vách núi và giấu trứng ở sâu bên trong. ', '01654415516', 'nhan_nau_xam.jpg', 'nhan_nau_xam_1.jpg', '5%', '2016-09-07', 13, 1),
(62, 'Sơn ca Java', 'Lâm đồng', 750000, 'Sơn ca Java hay sơn ca Australasia - Mirafra javanica là một loài chim dạng sẻ thuộc chi Mirafra trong họ Alaudidae: sơn ca.', '0919256255', 'son_ca_java.jpg', 'son_ca_java_1.jpg', '5%', '2016-09-07', 14, 1),
(64, 'Sơn ca temminck', 'Lâm đồng', 750000, 'Chim sơn ca là biểu tượng cho hạnh phúc, hy vọng, may mắn, tự do, niềm vui, tuổi trẻ, tính sáng tạo và ngày mới. ', '0919256255', 'son_ca_temminck.jpg', 'son_ca_temminck_1.jpg', '5%', '2016-09-07', 14, 1),
(65, 'Vẹt xanh', 'Lâm đồng', 1500000, 'Vẹt xanh là loài vẹt khá can đảm , chúng dám hung hăng với các loài chim khác mà bất kể kích thước của đối thủ như thế nào. Đây cũng là điều nên lưu ý khi nuôi chung với các loài vẹt khác, có khả năng nói , chủ yếu là những con trống, chúng có khả năng học được khoảng 100 từ, và đồng thời cũng là loài thích hợp để dạy làm các trò đơn giản.', '01654415516', 'vet_xanh.jpg', 'vet_xanh_1.jpg', '2%', '2016-09-07', 15, 1),
(66, 'Vẹt xanh dương', 'Lâm đồng', 1000000, 'Như tên gọi của nó toàn cơ thể được bao phủ bởi một màu lông màu xanh dương, mặt và viền mắt được bao quanh bởi một lớp da vàng hẹp.', '01654415516', 'vet_xanh_duong.jpg', 'vet_xanh_duong_1.jpg', '8%', '2016-09-07', 15, 1),
(67, 'Vẹt đầu đỏ', 'Lâm đồng', 1000000, 'Đây là một trong những con vẹt kích thước lớn nhất.  Cơ thể chủ yếu là sáng màu đỏ tươi, mắt và má da trần có ít  lông bên màu đỏ, Cổ màu đỏ tươi. Giáp cổ màu đỏ vàng, mỏ dưới đen mỏ trên màu ngà cuối mỏ màu đen. Lông cánh giữa phía trên có màu vàng trộn màu xanh lá cây , lông vũ chính ngoài cùng là màu xanh, và bên trong gần đuôi lôn màu xanh, mống mắt màu vàng, chân móng vuốt đen.', '0919256255', 'vet_dau_do.jpg', 'vet_dau_do_1.jpg', '10%', '2016-09-07', 15, 1),
(68, 'Cám trứng', 'CT Vương Việt Anh', 50000, 'Đầy đủ chất dinh dưỡng cho các loại chim (chim ăn hạt, chim ăn sâu bọ, chim ăn hoa quả...)', '01654415516', 'cam_trung.jpg', 'cam_trung_1.jpg', '0', '2016-09-07', 16, 1),
(69, 'Thức ăn chim cảnh cao cấp', 'Indonesia', 150000, 'Sản phẩm bổ sung dinh dưỡng: với các thành phần thảo dược từ thiên nhiên, các vitamin và khoáng chất, bột tôm, bột cá, bột mực, đậu nành, trứng gà.... Sản phẩm giúp chim khỏe mạh, tránh các loại bệnh về tiêu hóa nhờ có thành phần men trong thức ăn. Chim sung sức và sinh trưởng nhanh.', '01654415516', 'thuc_an_chim_cao_cap_tu_indonesia.jpg', 'thuc_an_chim_cao_cap_tu_indonesia_1.jpg', '5%', '2016-09-07', 16, 1),
(71, 'Cám trứng VA', 'Việt Nam', 50000, 'Thức ăn dành cho chích chòe', '01654415516', 'cam_trung_va.jpg', 'cam_trung_va_1.jpg', '', '2016-09-07', 16, 1),
(72, 'Bột Pate đỏ', 'Việt Nam', 70000, 'Thức ăn cho Chim Yến Hót và Chim 7 màu', '0919256255', 'bot_pate_do.jpg', 'bot_pate_do_1.jpg', '', '2016-09-07', 16, 1),
(74, 'Lồng nghệ thuật NT01', '', 1500000, 'Tết đã đến gần, mọi người nô nức đi sắm đào, quất, mai tạo không khí rộn ràng đón năm mới. Những lọ hoa trang trí là vật không thể thiếu trên bàn trà hay bàn tiệc chào xuân. Bạn hãy tạo điểm nhấn thú vị cho không gian phòng khách với một “lồng hoa” xuân sắc trên bàn. Chắc chắn bạn bè ghé thăm sẽ bất ngờ về sự sáng tạo của bạn.', '1869008724', 'nghe_thuat_NT01.jpg', 'nghe_thuat_NT01_1.jpg', '', '2016-09-08', 17, 1),
(75, 'Lồng nghệ thuật NT02', '', 1500000, 'Tết đã đến gần, mọi người nô nức đi sắm đào, quất, mai tạo không khí rộn ràng đón năm mới. Những lọ hoa trang trí là vật không thể thiếu trên bàn trà hay bàn tiệc chào xuân. Bạn hãy tạo điểm nhấn thú vị cho không gian phòng khách với một “lồng hoa” xuân sắc trên bàn. Chắc chắn bạn bè ghé thăm sẽ bất ngờ về sự sáng tạo của bạn.', '1869008724', 'nghe_thuat_NT02.jpg', 'nghe_thuat_NT02_1.jpg', '', '2016-09-08', 17, 1),
(76, 'Lồng nghệ thuật NT03', '', 1700000, 'Bạn cũng có thể đặt một lồng chim trang trí trên kệ tủ thấp kèm với giá nến và một lọ hoa đào để phá tan sự đơn điệu của bức tường trống.', '01654415516', 'nghe_thuat_NT03.jpg', 'nghe_thuat_NT03_1.jpg', '', '2016-09-08', 17, 1),
(77, 'Lồng nghệ thuật NT04', '', 1650000, 'Với sự thông minh, khéo léo, chiếc lồng chim có thể biến tấu thành nhiều vật trang trí lạ mắt và hấp dẫn. Bạn đã bao giờ nhìn thấy chiếc lồng chim phát sáng chưa? Những giá nến hay chiếc đèn được chế từ lồng chim giúp không gian của bạn thêm mới mẻ và ấm áp', '1869008724', 'nghe_thuat_NT04.jpg', 'nghe_thuat_NT04_1.jpg', '', '2016-09-08', 17, 1),
(78, 'Lồng nghệ thuật NT05', '', 1450000, 'Việc trang trí bằng những “lồng hoa” ấn tượng thật dễ dàng. Chỉ cần một cành hoa có màu sắc tương phản với màu sơn của chiếc lồng chim, nhẹ nhàng đặt chúng vào bên trong lồng rồi treo lên, không gian của bạn đã có vẻ đẹp khác biệt rồi đấy.', '0919256255', 'nghe_thuat_NT05.jpg', 'nghe_thuat_NT05_1.jpg', '', '2016-09-08', 17, 1),
(79, 'Lồng nghệ thuật NT06', '', 1200000, 'Một chiếc lồng xinh xắn treo bên cửa sổ hay buông hững hờ phía trên giường ngủ cũng tạo nét duyên dáng, thơ mộng cho căn phòng của bạn.', '01654415516', 'nghe_thuat_NT06.jpg', 'nghe_thuat_NT06_1.jpg', '', '2016-09-08', 17, 1),
(80, 'Lồng nghệ thuật NT07', '', 1000000, 'Nếu bạn muốn tạo ấn tượng cho khách ngay từ không gian ngoại thất, hãy sử dụng những chiếc lồng trang trí để bức tường phía ngoài ngôi nhà trở nên sinh động và thu hút mọi ánh nhìn.', '1869008724', 'nghe_thuat_NT07.jpg', 'nghe_thuat_NT07_1.jpg', '', '2016-09-08', 17, 1),
(81, 'Lồng gỗ LG01', '', 100000, '', '0919256255', 'long_go_LG01.jpg', 'long_go_LG01_1.jpg', '', '2016-09-08', 18, 1),
(82, 'Lồng gỗ LG02', '', 75000, '', '1869008724', 'long_go_LG02.jpg', 'long_go_LG02_1.jpg', '', '2016-09-08', 18, 1),
(83, 'Lồng gỗ LG03', '', 150000, '', '01654415516', 'long_go_LG03.jpg', 'long_go_LG03_1.jpg', '', '2016-09-08', 18, 1),
(84, 'Lồng gỗ LG04', '', 50000, '', '01654415516', 'long_go_LG04.jpg', 'long_go_LG04_1.jpg', '', '2016-09-08', 18, 1),
(85, 'Lồng gỗ LG05', '', 90000, '', '0919256255', 'long_go_LG05.jpg', 'long_go_LG05_1.jpg', '', '2016-09-08', 18, 1),
(86, 'Lồng gỗ LG06', '', 100000, '', '01654415516', 'long_go_LG06.jpg', 'long_go_LG06_1.jpg', '', '2016-09-08', 18, 1),
(87, 'Lồng sắt LS01', '', 75000, '', '01654415516', 'long_sat_LS01.jpg', 'long_sat_LS01_1.jpg', '', '2016-09-08', 19, 1),
(88, 'Lồng sắt LS02', '', 75000, '', '0919256255', 'long_sat_LS02.jpg', 'long_sat_LS02_1.jpg', '', '2016-09-08', 19, 1),
(89, 'Lồng sắt LS03', '', 80000, '', '01654415516', 'long_sat_LS03.jpg', 'long_sat_LS03_1.jpg', '', '2016-09-08', 19, 1),
(90, 'Lồng sắt LS04', '', 65000, '', '1869008724', 'long_sat_LS04.jpg', 'long_sat_LS04_1.jpg', '', '2016-09-08', 19, 1),
(92, 'Lồng sắt LS06', '', 50000, '', '01654415516', 'long_sat_LS06.jpg', 'long_sat_LS06 _1.jpg', '', '2016-09-08', 19, 1),
(93, 'Chích chòe than', 'Vùng đồng bằng sông Hồng , sông Cửu Long', 1000000, 'Chim Chích Chòe Than có thân mình lớn gấp đôi chim sẻ, có con lớn đến gấp ba , chiều dài tính từ đầu đến chót đuôi khoảng 18 cm . Toàn thân phủ lông đen , trừ phần bụng , bên dưới lông đuôi, và hai sọc xuôi dài bên cánh là màu trắng . Mở và mắt của chim đen tuyền , chân đen móc.', '01654415516', 'chich_choe_4.jpg', 'chich_choe_4_1.jpg', '', '2016-09-08', 2, 1),
(94, 'Chích chỏe lửa đuôi dài', 'Lâm đồng', 1000000, 'Cũng như chim họa mi và các loại chim khác, chích chỏe lửa có tính hay bắt chước tiếng chim khác mà nó nghe được. Vì vậy tốt nhất là đem chim nhà đi nghe chim thiên hạ hót để làm giàu âm điệu cho giọng hót của chim hoặc cũng có thể cho chim nghe băng nhạc có tiếng sáo, đàn vĩ cầm, kèn đồng…. ', '1869008724', 'chich_choe_2.jpg', 'chich_choe_2_1.jpg', '', '2016-09-08', 3, 1),
(95, 'Chích chòe lửa', 'Trảng Bom', 750000, 'Chích chòe lửa là một trong số những lòai chim hót hay nhất trên thế giới. Tuy nhiên, không phải tất cả chích chòe lửa đều hót hay như vậy\r\nMột số loài có sự hạn chế về giọng hót. Một số hót một ‘tông” kéo dài liên tục cũng rất thu hút sự chú ý của mọi người. Số khác lại hót đảo giọng, nhiều tông và chúng kết lại với nhau thành chuỗi làm người nghe thật sự hài lòng. Đó là những con chim hay, chúng biết pha trộn sự đa dạng của giọng hót cùng với âm điệu và phong cách chơi.', '1869008724', 'chich_choe_1.jpg', 'chich_choe_1_1.jpg', '', '2016-09-08', 3, 1),
(96, 'Chích chòe đất', 'Lâm đồng', 500000, 'Chim cao chân, dài mình, thon nhỏ, lông mỏng và ốp, vạch trắng ở 2 cánh rõ ràng, đứng cao cầu, vươn thẳng đầu, mau mỏ (luôn kêu tạch tạch chẳng hạn), đuôi bản rộng, linh hoạt, dài, thường xuyên xòe, cụp, đập cầu... chất lông đen ánh xanh. Đầu xà, trán vuông, mép sâu, mỏ dưới mỏng, cổ thắt.', '1869008724', 'chich_choe_5.jpg', 'chich_choe_5_1.jpg', '', '2016-09-08', 2, 1),
(97, 'Chim sâu xanh', '', 250000, 'Chim sâu xanh có tên Chích bông đuôi dài dài 10cm có mặt khắp nước VN. \r\nChim trống trưởng thành có 2 cọng đuôi lau rất dài, tiếng hót như kêu '''' chóc...chóc'''', rất hung dữ đánh nhau tranh giành lãnh địa và chiếm hữu chim mái nên dễ bị dính bẫy.', '1869008724', 'chim_sau_5.jpg', 'chim_sau_5_1.jpg', '', '2016-09-08', 20, 1),
(98, 'Chim sâu vàng', '', 200000, 'Chim sâu vàng hay chim sâu bình nguyên (danh pháp hai phần: Dicaeum concolor) là một loài chim lá thuộc chi Dicaeum trong họ Chim sâu. Loài này tím kiếm thức ăn trong tán rừng và được tìm thấy phân bố trên khắp Nam và Đông Nam Á. Chúng không di cư và phạm vi phân bố rộng rãi bao gồm quần thể một số không chồng chéo và hình thái riêng biệt, một số trong đó được công nhận là loài đầy đủ. Chúng là những loài thụ phấn quan trọng và phán tán hạt của cây tầm gửi trong rừng.', '1869008724', 'chim_sau_4.jpg', 'chim_sau_4_1.jpg', '', '2016-09-08', 20, 1),
(99, 'Chim sâu lưng đỏ', '', 250000, 'Kích thước của chúng rất bé nhỏ, khoảng 8cm, chỉ lớn hơn chiếc lá một tí. Thậm chí một chú chim trống trưởng thành còn nhỏ hơn lá chùm gởi. Chúng ăn côn trùng nhỏ, một số loại hoa và rất thích ăn trái cây có vị ngọt như trứng cá, mui, chùm gởi...', '1869008724', 'chim_sau_2.jpg', 'chim_sau_2_1.jpg', '', '2016-09-08', 20, 1),
(100, 'Chim sâu đầu đỏ', '', 350000, 'Chim sâu đầu đỏ là một loài chim lá thuộc chi Dicaeum trong họ Chim sâu. Nó là loài đặc hữu của Indonesia. Môi trường sống tự nhiên của nó là rừng đất thấp ẩm cận nhiệt đới hoặc nhiệt đới rừng ngập mặn cận nhiệt đới hoặc nhiệt đới.', '1869008724', 'chim_sau_6.jpg', 'chim_sau_6_1.jpg', '', '2016-09-08', 20, 1),
(101, 'Chim sâu cổ đỏ', '', 350000, 'Chim sâu cổ đỏ là một loài chim lá thuộc chi Dicaeum trong họ Chim sâu. Nó là loài đặc hữu của Philippines. Môi trường sống tự nhiên của nó là rừng đất thấp ẩm cận nhiệt đới hoặc nhiệt đới. Nó đang bị đe dọa do mất nơi sống.', '1869008724', 'chim_sau_3.jpg', 'chim_sau_3_1.jpg', '', '2016-09-08', 20, 1),
(102, 'Vẹt xanh 2', '', 450000, 'Có màu sắc đẹp, phân biệt ngay trống mái từ non và trống mái mỗi con 1 màu đẹp 1 vẻ , đặc tính hiền lành , khả năng nói rất tốt , kỹ thuật bay tốt có thể dùng thả freeflight. ít ồn ào.', '01654415516', 'vet_2.jpg', 'vet_2_1.jpg', '', '2016-09-06', 15, 1),
(103, 'Love bird', '', 1500000, 'Love bird rất xinh xắn dễ thương , nhiều màu sắc .đặc tính thân thiện , khá trung thành với chủ. có thể dùng cho freeflight .', '1869008724', 'vet_4.jpg', 'vet_4_1.jpg', '', '2016-09-06', 15, 1),
(104, 'Vẹt Mã Lai', 'La Mã', 1500000, '<p>L&ocirc;ng mềm mượt nữ t&iacute;nh, c&oacute; khả năng h&oacute;t theo nhạc cũng như bắt trước giọng c&aacute;c lo&agrave;i chim kh&aacute;c rất tốt .T&iacute;nh th&acirc;n thiện cao, c&oacute; thể d&ugrave;ng freeflight. gi&aacute; th&agrave;nh kh&aacute; rẻ, rất dễ bắt cặp sinh sản.</p>\r\n', '1869008724', '14494758_310640045968234_118612332015198638_n.jpg', '14502857_592205877653600_3803117321891470053_n.jpg', '0', '2016-09-06', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoa_don`
--

CREATE TABLE `ct_hoa_don` (
  `so_hd` int(11) NOT NULL,
  `ma_hang` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` double NOT NULL,
  `thanh_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_hoa_don`
--

INSERT INTO `ct_hoa_don` (`so_hd`, `ma_hang`, `so_luong`, `don_gia`, `thanh_tien`) VALUES
(67, 1, 1, 500000, 500000),
(67, 2, 1, 750000, 750000),
(67, 3, 1, 750000, 750000),
(68, 17, 1, 1000000, 1000000),
(68, 29, 1, 1000000, 1000000),
(68, 18, 1, 1000000, 1000000),
(69, 4, 1, 500000, 500000),
(69, 5, 2, 500000, 1000000),
(69, 6, 1, 750000, 750000),
(70, 7, 1, 1000000, 1000000),
(70, 2, 1, 750000, 750000),
(71, 7, 1, 1000000, 1000000),
(71, 3, 1, 750000, 750000),
(72, 7, 3, 1000000, 3000000),
(72, 2, 1, 750000, 750000),
(73, 2, 1, 750000, 750000),
(73, 4, 1, 500000, 500000),
(74, 1, 1, 500000, 500000),
(74, 3, 1, 750000, 750000),
(75, 5, 6, 500000, 3000000),
(75, 39, 2, 2000000, 4000000),
(76, 5, 6, 500000, 3000000),
(76, 39, 2, 2000000, 4000000),
(77, 5, 2, 500000, 1000000),
(78, 38, 1, 2000000, 2000000),
(78, 5, 1, 500000, 500000),
(79, 39, 1, 2000000, 2000000),
(79, 9, 1, 1000000, 1000000),
(79, 94, 1, 1000000, 1000000),
(79, 74, 1, 1500000, 1500000),
(79, 49, 1, 750000, 750000),
(79, 88, 1, 75000, 75000),
(79, 71, 1, 50000, 50000),
(79, 45, 1, 1000000, 1000000),
(80, 3, 1, 750000, 750000),
(80, 95, 1, 750000, 750000),
(80, 5, 1, 500000, 500000),
(80, 4, 10, 500000, 5000000),
(81, 96, 1, 500000, 500000),
(82, 5, 1, 500000, 500000),
(83, 69, 1, 150000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `so_hd` int(11) NOT NULL,
  `ngay_hoadon` date NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `trigia_hd` double NOT NULL,
  `thanhtoan` tinyint(1) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`so_hd`, `ngay_hoadon`, `ma_kh`, `trigia_hd`, `thanhtoan`, `tinh_trang`) VALUES
(67, '2013-03-25', 75, 2000000, 0, 1),
(68, '2013-03-25', 76, 3000000, 0, 1),
(69, '2013-03-25', 77, 2250000, 0, 1),
(70, '2013-07-12', 78, 1750000, 0, 1),
(71, '2013-08-16', 79, 1750000, 0, 1),
(72, '2013-09-21', 80, 3750000, 0, 1),
(73, '2013-09-21', 81, 1250000, 0, 1),
(74, '2013-09-21', 82, 1250000, 0, 1),
(75, '2016-10-20', 83, 7000000, 0, 1),
(76, '2016-10-20', 83, 7000000, 0, 2),
(77, '2016-10-20', 83, 1000000, 0, 2),
(78, '2016-10-24', 84, 2500000, 0, 2),
(79, '2016-10-24', 85, 7375000, 0, 1),
(80, '2016-10-31', 88, 7000000, 0, 1),
(81, '2016-10-31', 89, 500000, 0, 1),
(82, '2016-10-31', 89, 500000, 0, 1),
(83, '2016-10-31', 89, 150000, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MaKH` int(11) NOT NULL,
  `Hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Diachigiaohang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`MaKH`, `Hoten`, `Diachi`, `Dienthoai`, `Diachigiaohang`, `email`, `mat_khau`) VALUES
(75, 'Trần Minh Hòa', '6 Đường 27', '0123456789', '6 Đường 27', 'nnn@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(76, 'Dương Mỹ Trà My', 'Trần Thanh Tú, Quận 2', '012345678', 'Trần Thanh Tú, Quận 2', 'tuthanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(77, 'Mai Nguyễn Thanh Trà', 'Trần Hưng Đạo, Q5', '0968459222', 'Trần Hưng Đạo, Q5', 'thanhtra@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(78, 'Trần Nguyễn Phi', '123 Lê Trọng Tấn', '123456789', '123 Lê Trọng Tấn', 'nguyenphi@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(79, 'Ngô Diệu Huyền', 'Hà Tỉnh', '0123456789', 'Hà Tình', 'huyen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(80, 'Dương Ngọc Hoàng', 'LTT', '012345678', 'LTT', 'sdfsdv@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(81, 'Dương Ngọc Hoàng', 'LTT', '012345678', 'LTT', 'duonghoang18091977@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(82, 'Dương Minh Huy', 'số 6, đường 27, P. Sơn Kỳ, Q. Tân Phú', '012345678', 'số 6, đường 27, P. Sơn Kỳ, Q. Tân Phú', 'huyminhduong2005@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(83, 'Hoàng Sơn', 'son 3214', '08113698', 'hà huy giáp q10', 'son@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(84, 'Trần Anh Vũ ', 'aasd', '515', 'asdasd', 'vu12@gmail.com', '202cb962ac59075b964b07152d234b70'),
(85, 'Nguyễn Minh Trí', '357 Lê Hồng Phong', '0908953765', '357 Lê Hồng Phong', 'mtri@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(86, 'asd', 'asd', '01868932538', 'asdasd', 'vutran129@gmail.com', '202cb962ac59075b964b07152d234b70'),
(87, '....', 'Địa chỉ', 'Điện thoại', 'Địa chỉ giao hàng', 'Email', 'dc647eb65e6711e155375218212b3964'),
(88, 'Trần Anh Vũ', '353 Hà Huy Giáp', '05265652', '357 Lê Hồng Phong', 'vutran912@gmail.com', '202cb962ac59075b964b07152d234b70'),
(89, 'Trần Anh Vũ', '353 Hà Huy Giáp', '01868932538', 'asdasd', 'ko@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `mslh` int(11) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`mslh`, `mail`) VALUES
(1, 'ko@gmail.com'),
(2, 'vutran@gmail.com'),
(3, 'aaa@gmail.com'),
(4, 'abc@gmail.com'),
(5, 'alz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `loai_bai_viet`
--

CREATE TABLE `loai_bai_viet` (
  `ma_loai_bai_viet` int(11) NOT NULL,
  `ten_loai_bai_viet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci,
  `ma_loai_cha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_bai_viet`
--

INSERT INTO `loai_bai_viet` (`ma_loai_bai_viet`, `ten_loai_bai_viet`, `mo_ta`, `ma_loai_cha`) VALUES
(194, 'Tin khuyến mãi', 'Khuyến Mãi Vui - Thông tin khuyến mãi, giảm giá toàn quốc.', 0),
(195, 'Tin công nghệ', 'Thông tin công nghệ về điện thoại di động, máy tính bảng, laptop mới nhất ...', 194),
(196, 'Sản phẩm mới', 'Cập nhật thông tin mới nhất về Sản Phẩm Mới, các bài viết hay, hình ảnh mới...', 194),
(197, 'Vườn quốc gia', 'Vườn quốc gia là một khu vực đất hay biển được bảo tồn bằng các quy định pháp luật của chính quyền sở tại. Vườn quốc gia được bảo vệ nghiêm ngặt khỏi sự khai thác, can thiệp bởi con người. Vườn quốc gia thường được thành lập ở những khu vực có địa mạo độc đáo có giá trị khoa học hoặc những khu vực có hệ sinh thái phong phú, có nhiều loài động-thực vật có nguy cơ tuyệt chủng cao cần được bảo vệ nghiêm ngặt trước sự khai thác của con người.', 0),
(198, 'Du lịch sinh thái', 'Thoát ra những áp lực của công việc, những ồn của phố phường đến với cỏ cây sông nước của các khu du lịch sinh thái bạn sẽ có được những phút giây thư giãn thật sự... ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai_chim_canh`
--

CREATE TABLE `loai_chim_canh` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai_cha` int(11) NOT NULL,
  `links` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_chim_canh`
--

INSERT INTO `loai_chim_canh` (`ma_loai`, `ten_loai`, `ma_loai_cha`, `links`) VALUES
(1, 'Chào mào', 8, 'chao-mao-1'),
(2, 'Chích chòe', 8, 'chich-choe-2'),
(3, 'Chích chòe lửa', 8, 'chich-choe-lua-3'),
(6, 'Lồng làm bằng tre', 9, 'long-lam-bang-tre-6'),
(7, 'Lồng làm bằng mây', 9, 'long-lam-bang-may-7'),
(8, 'Chim cảnh', 0, 'chim-canh'),
(9, 'Lồng chim các loại', 21, 'long-chim-cac-loai'),
(10, 'Chim sẽ', 8, 'chim-se'),
(11, 'Chìa vôi', 8, 'chia_voi_dau_vang'),
(12, 'Gõ kiến', 8, 'go-kien'),
(13, 'Nhạn', 8, 'nhan'),
(14, 'Sơn ca', 8, 'son-ca'),
(15, 'Vẹt', 8, 'vet'),
(16, 'Thức ăn', 9, 'thuc-an'),
(17, 'Lồng chim nghệ thuật', 9, 'long-chim-nghe-thuat'),
(18, 'Lồng gổ', 9, 'long-go'),
(19, 'Lồng sắt', 9, 'long-sat'),
(20, 'Chim sâu', 8, 'chim-sau');

-- --------------------------------------------------------

--
-- Table structure for table `loai_nguoi_dung`
--

CREATE TABLE `loai_nguoi_dung` (
  `ma_loai_nguoi_dung` tinyint(3) NOT NULL,
  `ten_loai_nguoi_dung` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`ma_loai_nguoi_dung`, `ten_loai_nguoi_dung`) VALUES
(1, 'Nhân viên'),
(2, 'Khách hàng - Bài viết'),
(3, 'Sản phẩm');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ma_menu` int(11) NOT NULL,
  `ten_menu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `duong_dan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_menu_cha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ma_menu`, `ten_menu`, `duong_dan`, `quyen`, `ma_menu_cha`) VALUES
(1, 'Chim cảnh', '#', '3', 0),
(2, 'Khách hàng', '#', '2', 0),
(3, 'Bài viết', '#', '1', 0),
(4, 'Nhân viên', '#', '2', 0),
(5, 'Ảnh đẹp', '#', '2', 0),
(6, 'Showroom', '#', '1', 0),
(7, 'Danh sách chim cảnh', 'admin/chim_canh/danh_sach_chim_canh', '', 1),
(8, 'Chi tiết nhóm chim', 'admin/chi_tiet_loai_chim/danh_sach_chi_tiet_loai_chim', '', 1),
(9, 'Nhóm chim', 'admin/nhom_chim/danh_sach_nhom_chim', '', 1),
(10, 'Danh sách khách hàng', 'admin/khach_hang/danh_sach_khach_hang', '', 2),
(11, 'Thêm khách hàng', 'admin/khach_hang/them_khach_hang', '', 2),
(12, 'Thêm chim cảnh', 'admin/chim_canh/them_chim_canh', '', 1),
(13, 'Hóa đơn', 'admin/khach_hang/danh_sach_hoa_don', '', 2),
(14, 'Tin tức', 'admin/bai_viet/danh_sach_tin_tuc', '', 3),
(15, 'Tuyển dụng', 'admin/bai_viet/danh_sach_tuyen_dung', '', 3),
(16, 'Danh sách nhân viên', 'admin/nhan_vien/danh_sach_nhan_vien', '', 4),
(17, 'Thêm nhân viên', 'admin/nhan_vien/them_nhan_vien', '', 4),
(18, 'Danh sách ảnh đẹp', 'admin/anh_dep/danh_sach_anh_dep', '', 5),
(19, 'Thêm ảnh đẹp', 'admin/anh_dep/them_anh_dep', '', 5),
(20, 'Danh sách Showroom', 'admin/showroom/danh_sach_showroom', '', 6),
(21, 'Thêm Showroom', 'admin/showroom/them_showroom', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content_summary` text COLLATE utf8_unicode_ci,
  `content_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `date_send` datetime DEFAULT NULL,
  `date_post` datetime DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content_summary`, `content_detail`, `date_send`, `date_post`, `views`, `images`, `author`) VALUES
(1, 'Thời trang Hàn Quốc cho mùa thu áo xanh', '<p>C&aacute;c thương hiệu Canmart, S.Ciel, Pink Banana hay LadySoo của H&agrave;n Quốc vừa ra mắt bộ sưu tập thu với nhiều phong c&aacute;ch ấn tượng. Bla bla bla ...</p>\r\n', '<p>C&aacute;c thương hiệu Canmart, S.Ciel, Pink Banana hay LadySoo của H&agrave;n Quốc vừa ra mắt bộ sưu tập thu với nhiều phong c&aacute;ch ấn tượng. Cổ điển v&agrave; đơn giản l&agrave; phong c&aacute;ch thường thấy trong c&aacute;c bộ sưu tập thời trang m&ugrave;a thu.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, n&eacute;t cuốn h&uacute;t trong c&aacute;c thiết kế thời trang thu năm nay từ 4 thương hiệu thời trang H&agrave;n Quốc kh&ocirc;ng phải ở sự ho&agrave;i cổ vốn c&oacute; với c&aacute;c gam m&agrave;u đặc trưng như v&agrave;ng, n&acirc;u, đỏ rượu vang, xanh l&aacute; &uacute;a thường thấy, m&agrave; ch&uacute; trọng ở c&aacute;c họa tiết khỏe năng động như sọc ngang, caro đen trắng hay nhấn hoa điệu đ&agrave;.</p>\r\n\r\n<p>Bộ sưu tập trang phục thu của 4 thương hiệu mới Canmart, Sciel, Pink Banana v&agrave; LadySoo đ&atilde; c&oacute; mặt tại Việt Nam, bạn c&oacute; thể tham khảo trực tiếp sản phẩm tr&ecirc;n website yes24.vn. Sản phẩm c&oacute; gi&aacute; trung b&igrave;nh từ 200.000 đồng đến 700.000 đồng.</p>', '2013-09-13 00:00:00', '2013-09-13 00:00:00', 1, '1379252479_images.jpg', 'Tống Hải Duy'),
(2, 'Công ty cổ phần thương mại dịch vụ Phúc Nguyên', '<p>Địa chỉ: 357 L&ecirc; Hồng Phong, P.2, Q.10</p>\r\n\r\n<p>ĐT: 38337980 - Fax: 38337982</p>\r\n\r\n<p>Email: alphatek@hcmuns.edu.vn</p>\r\n', '<p>Địa chỉ: 357 L&ecirc; Hồng Phong, P.2, Q.10.</p>\r\n\r\n<p>ĐT: 38337980 - Fax: 38337982.</p>\r\n\r\n<p>Email: alphatek@hcmuns.edu.vn</p>', '2013-09-16 00:00:00', '2013-09-16 00:00:00', 1, '1379314873_2.jpg', 'Duy'),
(3, 'Thời trang Việt được người tiêu dùng yêu mến', '<p><strong>Qua thăm d&ograve; th&aacute;i độ ti&ecirc;u d&ugrave;ng của một nh&oacute;m kh&aacute;ch h&agrave;ng tại Việt Nam, chỉ số niềm tin đối với c&aacute;c sản phẩm Việt ng&agrave;y c&agrave;ng được cải thiện.</strong></p>\r\n', '<p>Qua thăm d&ograve; th&aacute;i độ ti&ecirc;u d&ugrave;ng của một nh&oacute;m kh&aacute;ch h&agrave;ng tại Việt Nam, chỉ số niềm tin đối với c&aacute;c sản phẩm Việt ng&agrave;y c&agrave;ng được cải thiện.</p>\r\n\r\n<p>Trong nỗ lực lấy lại địa vị tr&ecirc;n ch&iacute;nh thị trường trong nước, c&aacute;c doanh nghiệp Việt Nam đ&atilde; kh&ocirc;ng ngừng ho&agrave;n thiện để n&acirc;ng cao chất lượng v&agrave; dịch vụ sản phẩm của m&igrave;nh. Nhắc đến, thị trường may mặc người ta thường nghĩ Việt Nam l&agrave; một quốc gia gia c&ocirc;ng lớn của rất nhiều thương hiệu nổi tiếng thế giới.</p>\r\n\r\n<p>Theo đ&oacute;, Việt Nam nhận những đơn đặt h&agrave;ng từ nhiều quốc gia kh&aacute;c, gia c&ocirc;ng, ho&agrave;n thiện sản phẩm nhưng lại đ&oacute;ng m&aacute;c thương hiệu của thế giới. Những h&agrave;ng h&oacute;a n&agrave;y, được xuất sang nước ngo&agrave;i, khi quay trở lại Việt Nam người ti&ecirc;u d&ugrave;ng phải trả một chi ph&iacute; rất đắt để được sở hữu sản phẩm đ&oacute;. Ngo&agrave;i ra, Việt Nam c&ograve;n tr&agrave;n lan những sản phẩm may mặc kh&ocirc;ng r&otilde; xuất xứ nguồn gốc, gi&aacute; cả từ mức b&igrave;nh d&acirc;n đến cao.&nbsp;</p>\r\n\r\n<p>Thị trường c&oacute; nhiều doanh nghiệp Việt đang từng bước khẳng định thương hiệu, quen thuộc với người ti&ecirc;u d&ugrave;ng như GenViet Jeans, made in Viet Nam, Việt Tiến, May Nh&agrave; B&egrave;&hellip; Hơn 90% c&aacute;c sản phẩm của GenViet Jeans được l&agrave;m từ chất liệu jeans. Ra đời năm 2010 với điểm b&aacute;n đầu ti&ecirc;n ở 29 B&agrave; Triệu, H&agrave; Nội ngay từ khi bắt đầu, GenViet Jeans đ&atilde; định hướng chiến lược ph&aacute;t triển bền vững, đ&aacute;p ứng tối đa nhu cầu v&agrave; bảo vệ quyền lợi của người ti&ecirc;u d&ugrave;ng. Từ một cửa h&agrave;ng đầu ti&ecirc;n tại B&agrave; Triệu, ng&agrave;y 13/9, GenViet Jeans khai trương điểm b&aacute;n thứ 70 tại 56B B&agrave; Triệu, H&agrave; Nội. Trong tương lai, h&atilde;ng sẽ tiếp tục mở rộng th&ecirc;m c&aacute;c cửa h&agrave;ng, khẳng định mức độ ảnh hưởng của m&igrave;nh tr&ecirc;n thị trường may mặc trong nước.</p>', '2013-09-17 00:00:00', '2013-09-17 00:00:00', 10, '1379401705_Shank.jpg', 'Duy Tống');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `tendn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_dung` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nguoi_dung`, `tendn`, `mat_khau`, `ten_nguoi_dung`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `email`, `cmnd`, `dien_thoai`, `quyen`) VALUES
(1, 'admin', 'admin', 'Duong Ngoc Hoang', '1977-09-18', 1, 'Le Trong Tan', 'hoang0877@yahoo.com', '1234567890', '0919359360', 'admin'),
(2, 'htdiem', 'diem', 'Ho Thi Diem', '1988-08-20', 0, 'Dong Nai', 'hothidiem@gmail.com', '34567890', '1234567890-', 'guest'),
(3, 'nnkhanh', 'khanh', 'Nguyen Ngoc Khanh', '1987-01-01', 1, 'Lê Trọng Tấn', 'khanh@yahoo.com', '1234567890', '23543534543', 'staff'),
(4, 'hoa', 'hoa', 'Hồ Tuyết Hoa', '1990-09-09', 0, 'Lê Trọng Tấn', 'asdasdas@gmail.com', '34567890', '1234567890-', '3'),
(10, 'NtHa', 'ha', 'Nguyễn Thị Hà', '1992-12-12', 0, 'Trần Hưng Đạo', 'ha@yahoo.com', '234567890', '4567890', '1,2,3'),
(9, 'nthong', 'hong', 'Nguyễn Thị Hồng', '1992-12-12', 0, 'Lê Văn Sĩ', 'hong@yahoo.com', '1233333333', '0', '2,3'),
(11, 'dtrinh', 'trinh', 'Dương Thị Diễm Trinh', '1991-11-10', 0, 'Lê Văn Sĩ', 'dtrinh@gmail', '34567890', '0', '2'),
(13, 'dthan', 'han', 'Dương Thùy Hân', '1991-12-21', 0, 'Lê Trọng Tân', 'han@yahoo.com', '34564356435', '0', '1,3'),
(14, 'hnha', 'ha', 'Hồ Ngọc Hà', '1992-12-12', 0, 'Lê Văn Sĩ', 'ha@yahoo.com', '345678', '456789', '2,3'),
(15, 'han', 'han', 'Dương Thùy Hân', '2009-04-30', 0, '6 Đường 27, TP, HCM', 'han03042009.yahoo', '124589', '0919359360', '1'),
(17, 'nmc', '123', 'Nguyễn minh chinh', '1996-01-01', 1, 'LTT', 'duong@gmail.com', '123456789', '123456789', '2'),
(18, 'nmc', '1f285fa4ce68efd5e697bd8301835c72', 'Nguyễn minh chinh', '1996-01-01', 1, 'LTT', 'duong@gmail.com', '123456789', '0', '2');

-- --------------------------------------------------------

--
-- Table structure for table `showroom`
--

CREATE TABLE `showroom` (
  `ma_showroom` int(11) NOT NULL,
  `tinh_thanh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ten_showroom` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_tieu_de` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `showroom`
--

INSERT INTO `showroom` (`ma_showroom`, `tinh_thanh`, `ten_showroom`, `dia_chi`, `dien_thoai`, `email`, `hinh_tieu_de`, `hinh_anh`, `trang_thai`) VALUES
(1, 'Thành Phố Hồ Chí Minh', 'SHOWROOM LÊ TRỌNG TẤN', '11 Lê Trọng Tấn, Phường Sơn Kỳ, Q.Tân Phú, TpHCM', '012345678 - 096854332', 'letrongtan@yahoo.com', 'showroom_chim_canh_1.jpg', 'showroom_chim_canh_1.jpg', 1),
(2, 'Thành Phố Hồ Chí Minh', 'SHOWROOM TÂN PHÚ', '6 Đường 27, Phường Sơn Kỳ, Q.Tân Phú, TpHCM', '548965553366 - 61545454546546', 'letrongtan@yahoo.com', 'showroom_chim_canh_2.jpg', 'showroom_chim_canh_2.jpg', 1),
(3, 'Bà Rịa - Vũng Tàu', 'IQ Luxury Interior ( IQ Desingn )', 'Nghi Tàm, Phường Yên Phụ, Q. Tây Hồ, Hà Nội', '012345678 - 096854332', 'letrongtan@yahoo.com', 'showroom_chim_canh_3.jpg', 'showroom_chim_canh_3.jpg', 1),
(4, 'Thành Phố Hồ Chí Minh', 'SHOWROOM PHÚ MỸ HƯNG', '123 Trung Lập, Củ Chi', '036489126789', 'PHM@gmail.com', 'showroom_chim_canh_4.jpg', 'showroom_chim_canh_4.jpg', 0),
(5, 'Nha Trang', 'SHOWROOM NHA TRANG', '123 Lương Định Của, phường Vĩnh Thạnh, tỉnh Khánh Hòa, Nha Trang', '02378986', 'NTKT@yahoo.com', 'showroom_chim_canh_5.jpg', 'showroom_chim_canh_5.jpg', 0),
(6, 'Đà Lạt', 'SHOWROOM ĐÀ LẠT', '15 Lê Hồng Phong, phường 4, Lâm Đồng', '04524558', 'DLQQQ@yahoo.com', 'showroom_chim_canh_6.jpg', 'showroom_chim_canh_6.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `identitycard` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mobiphone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `birthdate`, `gender`, `address`, `email`, `identitycard`, `mobiphone`, `role`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Quản trị viên', '1977-09-18', 1, 'Le Trong Tan', 'hoang0877@yahoo.com', '1234567890', '0919359360', 'admin'),
(2, 'htdiem', 'e10adc3949ba59abbe56e057f20f883e', 'Ho Thi Diem', '1988-08-20', 0, 'Dong Nai', 'hothidiem@gmail.com', '34567890', '1234567890-', 'guest'),
(3, 'nnkhanh', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Ngoc Khanh', '1987-01-01', 1, 'Lê Trọng Tấn', 'khanh@yahoo.com', '1234567890', '23543534543', 'staff'),
(4, 'hoa', 'e10adc3949ba59abbe56e057f20f883e', 'Hồ Tuyết Hoa', '1990-09-09', 0, 'Lê Trọng Tấn', 'asdasdas@gmail.com', '34567890', '1234567890-', 'guest'),
(10, 'NtHa', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Hà', '1992-12-12', 0, 'Trần Hưng Đạo', 'ha@yahoo.com', '234567890', '4567890', 'guest'),
(9, 'nthong', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Hồng', '1992-12-12', 0, 'Lê Văn Sĩ', 'hong@yahoo.com', '1233333333', '0', 'staff'),
(11, 'dtrinh', 'e10adc3949ba59abbe56e057f20f883e', 'Dương Thị Diễm Trinh', '1991-11-10', 0, 'Lê Văn Sĩ', 'dtrinh@gmail', '34567890', '0', 'staff'),
(13, 'dthan', 'e10adc3949ba59abbe56e057f20f883e', 'Dương Thùy Hân', '1991-12-21', 0, 'Lê Trọng Tân', 'han@yahoo.com', '34564356435', '0', 'staff'),
(14, 'hnha', 'e10adc3949ba59abbe56e057f20f883e', 'Hồ Ngọc Hà', '1992-12-12', 0, 'Lê Văn Sĩ', 'ha@yahoo.com', '345678', '456789', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh_dep`
--
ALTER TABLE `anh_dep`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`ma_bai_viet`),
  ADD KEY `ma_the_loai` (`ma_loai_bai_viet`),
  ADD KEY `ma_tac_gia` (`ma_nguoi_dung`),
  ADD KEY `ma_the_loai_2` (`ma_loai_bai_viet`),
  ADD KEY `ma_tac_gia_2` (`ma_nguoi_dung`),
  ADD KEY `ma_loai_bai_viet` (`ma_loai_bai_viet`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `chim_canh`
--
ALTER TABLE `chim_canh`
  ADD PRIMARY KEY (`ma_chim`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`so_hd`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`mslh`);

--
-- Indexes for table `loai_bai_viet`
--
ALTER TABLE `loai_bai_viet`
  ADD PRIMARY KEY (`ma_loai_bai_viet`);

--
-- Indexes for table `loai_chim_canh`
--
ALTER TABLE `loai_chim_canh`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  ADD PRIMARY KEY (`ma_loai_nguoi_dung`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ma_menu`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`);

--
-- Indexes for table `showroom`
--
ALTER TABLE `showroom`
  ADD PRIMARY KEY (`ma_showroom`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anh_dep`
--
ALTER TABLE `anh_dep`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `ma_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567;
--
-- AUTO_INCREMENT for table `chim_canh`
--
ALTER TABLE `chim_canh`
  MODIFY `ma_chim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `so_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `mslh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `loai_bai_viet`
--
ALTER TABLE `loai_bai_viet`
  MODIFY `ma_loai_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT for table `loai_chim_canh`
--
ALTER TABLE `loai_chim_canh`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `ma_loai_nguoi_dung` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ma_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `showroom`
--
ALTER TABLE `showroom`
  MODIFY `ma_showroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
