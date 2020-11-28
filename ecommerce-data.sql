-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 05:16 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CateID` int(11) NOT NULL,
  `CategoryName` varchar(150) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CateID`, `CategoryName`, `Description`) VALUES
(1, 'Áo khoác', 'Áo khoác da, Áo khoác dù, Áo khoác jeans, Áo khoác kaki'),
(2, 'Áo sơ mi', 'Sơ mi Hàn Quốc, Sơ mi họa tiết, Sơ mi caro, Sơ mi ngắn tay, Sơ mi denim'),
(3, 'Áo vest', ''),
(4, 'Áo thun', 'Áo thun cổ tròn, Áo thun cổ tim, Áo thun tay dài'),
(5, 'Quần short', 'Quần short jeans, Quần short thun, Quần short kaki');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `OrderID` int(11) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `ShipDate` datetime NOT NULL,
  `ShipName` varchar(150) NOT NULL,
  `ShipAddress` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(150) DEFAULT NULL,
  `CateID` int(11) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `OldPrice` double NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `CateID`, `Price`, `OldPrice`, `Quantity`, `Description`, `Picture`) VALUES
(1, 'Áo Khoác Dù Tay Phối Túi AK008 Màu Đen', 1, 283500, 315000, 500, 'Áo khoác 2 lớp cao cấp lên đồ trẻ trung trong form dáng suông rộng. Thiết kế có túi dự phòng bên trong rất tiện dụng, kết hợp với túi đắp dây kéo và băng gai có tác dụng cản gió, giữ ấm cổ cực tốt khi đi xa.\r\nChất liệu dù micro được \"săn lùng\" ráo riết nhờ tính năng chống gió, chống nước cực kì tốt. Chất vải sở hữu độ bền cao, mềm, nhẹ và ít gây tiếng động.', 'pro1.jpg,pro1-1.png,pro1-2.png,pro1-3.png'),
(2, 'Áo Khoác Dù Hai Lớp Có Nón AK007 Màu Đen', 1, 400500, 445000, 500, 'Chất vải dù thun sở hữu độ co giãn tương đối, tạo cảm giác thoải mái và vừa vặn trong thiết kế form suông (regular). Nút đóng phần túi kèm nón và đường line sau lưng tạo điểm nhấn trẻ trung, linh hoạt khi mix&match với nhiều dạng áo quần.', 'pro2.jpg,pro2-1.png,pro2-2.png,pro2-3.png'),
(3, 'Áo Khoác Dù Tay Phối Túi AK008 Màu Xám', 1, 283500, 315000, 500, 'Áo khoác 2 lớp cao cấp lên đồ trẻ trung trong form dáng suông rộng. Thiết kế có túi dự phòng bên trong rất tiện dụng, kết hợp với túi đắp dây kéo và băng gai có tác dụng cản gió, giữ ấm cổ cực tốt khi đi xa.\r\nChất liệu dù micro được \"săn lùng\" ráo riết nhờ tính năng chống gió, chống nước cực kì tốt. Chất vải sở hữu độ bền cao, mềm, nhẹ và ít gây tiếng động.', 'pro3.jpg,pro3-1.png,pro3-2.png,pro3-3.png'),
(4, 'Áo Sơ Mi Ngực Thêu M Đô In Sọc ASM022 Màu Trắng Kem', 2, 283500, 315000, 500, 'Thiết kế từ chất liệu modal có đặc tính kháng khuẩn cực kì cao, chất vải mềm mịn với độ hút ẩm tốt. Áo sơ mi trong form slimfit giúp tôn dáng thon gọn cho người mặc.', 'pro4.jpg,pro4-1.png,pro4-2.png,pro4-3.png'),
(5, 'Áo Vest Đen AV1119', 3, 607500, 675000, 500, 'Áo Vest Cao Cấp Đen AV1119 phong cách thời trang Hàn Quốc. Form áo body, cổ áo ve nhỏ, áo một nút cá tính, cổ tay áo đính nút đỏ sang trọng. Màu đen nam tính và lịch lãm. Phối viền túi áo kèm khuy cài áo bằng kim loại đẹp mắt được gắn tinh tế tạo điểm nhấn. Chất liệu vải âu cao cấp hai lớp, bền đẹp, tạo form dáng chuẩn.', 'pro5.jpg,pro5-1.png,pro5-2.png,pro5-3.png'),
(8, 'Áo Khoác Dù Túi Hộp AK009 Màu Đen', 1, 310500, 345000, 500, 'Áo khoác dù túi hộp không nón - thiết kế trẻ trung đầy năng lượng đến từ chất liệu dù micro được \"săn lùng\" ráo riết nhờ tính năng chống gió, chống nước cực kì tốt. Chất vải sở hữu độ bền cao, mềm, nhẹ và ít gây tiếng động.', 'pro6.jpg,pro6-1.jpg,pro6-2.jpg,pro6-3.jpg'),
(9, 'Áo Khoác Dù Tay Phối Túi AK008 Màu Xanh Đen', 1, 283000, 315000, 500, 'Áo khoác 2 lớp cao cấp lên đồ trẻ trung trong form dáng suông rộng. Thiết kế có túi dự phòng bên trong rất tiện dụng, kết hợp với túi đắp dây kéo và băng gai có tác dụng cản gió, giữ ấm cổ cực tốt khi đi xa.\r\nChất liệu dù micro được \"săn lùng\" ráo riết nhờ tính năng chống gió, chống nước cực kì tốt. Chất vải sở hữu độ bền cao, mềm, nhẹ và ít gây tiếng động.', 'pro7.jpg,pro7-1.jpg,pro7-2.jpg,pro7-3.jpg'),
(10, 'Áo Khoác Dù Túi Hộp AK009 Màu Xanh Đen', 1, 310500, 345000, 500, 'Áo khoác dù túi hộp không nón - thiết kế trẻ trung đầy năng lượng đến từ chất liệu dù micro được \"săn lùng\" ráo riết nhờ tính năng chống gió, chống nước cực kì tốt. Chất vải sở hữu độ bền cao, mềm, nhẹ và ít gây tiếng động.', 'pro8.jpg,pro8-1.jpg,pro8-2.jpg,pro8-3.jpg'),
(11, 'Áo Sơ Mi Caro Brushed Twill ASM026 Màu Xanh Đen', 2, 337500, 375000, 500, 'Chất liệu Brushed Twill còn được gọi là \"anh em họ\" của chất liệu Flannel bởi chúng đều có thiết kế sợi chéo bền bỉ và chắc chắn. Tuy nhiên Brushed Twill nhẹ hơn, đồng thời bề mặt vải không có lớp tuyết dày như Flannel. Họa tiết caro với tone màu lạnh thể hiện sự thanh lịch, hiện đại và phù hợp với nhiều lứa tuổi. Form suông regular vừa vặn với cơ thể, không ôm sát hay gò bó giúp bạn vận động dễ dàng và thoải mái.', 'pro9.jpg,pro9-1.jpg,pro9-2.jpg,pro9-3.jpg'),
(12, 'Áo Sơ Mi Caro Brushed Twill ASM026 Màu Xám', 2, 337500, 375000, 500, 'Chất liệu Brushed Twill còn được gọi là \"anh em họ\" của chất liệu Flannel bởi chúng đều có thiết kế sợi chéo bền bỉ và chắc chắn. Tuy nhiên Brushed Twill nhẹ hơn, đồng thời bề mặt vải không có lớp tuyết dày như Flannel. Họa tiết caro với tone màu lạnh thể hiện sự thanh lịch, hiện đại và phù hợp với nhiều lứa tuổi. Sơ mi ca-rô với thiết kế cổ áo button-down (cổ áo có khuy cài cố định) linh hoạt giữa phong thái chỉn chu hoặc phóng khoáng. Mặc chiếc áo này ở nơi làm việc hay bất cứ nơi đâu mà bạn m', 'pro10.jpg,pro10-1.jpg,pro10-2.jpg,pro10-3.jpg'),
(13, 'Áo Sơ Mi Modal Trơn ASM025 Màu Xám', 2, 283500, 315000, 500, 'Chất vải được sản xuất từ cellulose của cây sồi, sở hữu các ưu điểm vượt trội như: mềm mại, thoáng mát, thấm hút tốt đồng thời rất mịn màng đem lại cảm giác mát lạnh khi chạm vào. Điều đặc biệt từ sợi vải này là khả năng chống nhăn và chống co rút tốt, vượt trội hơn hẳn sợi bông ngay cả khi sử dụng máy giặt. Chính vì có nguồn gốc thiên nhiên, thân thiện với môi trường nên vải modal ngày càng được yêu thích hơn và  sử dụng nhiều rộng rãi.', 'pro11.jpg,pro11-1.jpg,pro11-2.jpg,pro11-3.jpg'),
(14, 'Áo Sơ Mi Modal Trơn ASM025 Màu Đỏ', 2, 283500, 315000, 500, 'Chất vải được sản xuất từ cellulose của cây sồi, sở hữu các ưu điểm vượt trội như: mềm mại, thoáng mát, thấm hút tốt đồng thời rất mịn màng đem lại cảm giác mát lạnh khi chạm vào. Điều đặc biệt từ sợi vải này là khả năng chống nhăn và chống co rút tốt, vượt trội hơn hẳn sợi bông ngay cả khi sử dụng máy giặt.\r\nVới kiểu dáng trơn cơ bản, đây chính là chiếc sơ mi \"kinh điển\" phái mạnh không thể thiếu, thích hợp mặc trong bất kể môi trường và dễ dàng kết hợp với nhiều loại trang phục.', 'pro12.jpg,pro12-1.jpg,pro12-2.jpg,pro12-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CateID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CateID` (`CateID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orderproduct` (`OrderID`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CateID`) REFERENCES `category` (`CateID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
