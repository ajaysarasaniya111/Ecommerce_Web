-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 11:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unique_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`uid`, `username`, `email`, `password`, `time`) VALUES
(1, 'vijay', 'v@gmail.com', '123456', '2022-09-11 05:58:53'),
(2, 'Admin', 'Admin@gmail.com', '123456', '2022-09-11 05:58:53'),
(3, 'user', 'user@gmail.com', '123456', '2022-09-11 05:58:53'),
(5, 'Hello-Test_test', 'hello@gmail.com', 'hello@123', '2022-09-11 05:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `email`, `address`, `detail`, `image`, `date-time`) VALUES
(8, 'Sabaliya vijay', 79846400, 'Vsabaliya@gmail.com', 'Rk University Rajkot Gujarat ', 'Admin and Developer of this Admin Dashboard and Unique Electronics Client Website', 'IMG_20220709_095320.jpg', '2022-09-12 13:11:09'),
(9, 'Ajay Sarsaniya', 1234567, 'Asarsaniya@gmail.com', 'RK University Rajkot Gujarat', 'Admin And Developer of Unique Electronics client Website', 'hello.jpg', '2022-09-12 13:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `subject`, `message`, `date-time`) VALUES
(1, 'sabaliya vijay', 'Vsabaliya@gmail.com', '7984640044', 'Thank you', 'i thank full for  your grate service ....', '2022-09-12 13:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `appartment` varchar(255) NOT NULL,
  `town_city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `country`, `fname`, `lname`, `company_name`, `street_address`, `appartment`, `town_city`, `state`, `postcode`, `email`, `phone`, `date`) VALUES
(11, 'India', 'Sabaliya vijay', 'Mr.sabaliya', 'Unique Electronics Pvt Ltd', 'Kasturbadham rajkot gujrat', 'Rk university', 'tramba', 'gujarat', '360020', 'vsabaliya122@rku.ac.in', '9904128964', '2022-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `name`, `quantity`, `price`) VALUES
(11, '   Samsung S22 ultra', 0, 109999),
(11, '   Apple Watch SE 2 44mm', 0, 32900),
(11, '   Oneplus Bullets Wireless Z2 -Black', 0, 1999);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat`, `name`, `price`, `details`, `image`, `date-time`) VALUES
(18, 'Mobile', 'Samsung S22 ultra', '109999.00', 'Galaxy S22 Ultra sets an epic standard of smartphone experience. Release Date: February 2022 Screen Size: 6.8 inches Display Resolution: 3200x1440 Storage Capacity: 128 GB, 256 GB, 512 GB, 1 TB', '001_galaxys22ultra_front_burgundy-1440x960.jpg', '2022-09-12 13:11:41'),
(19, 'Mobile\r\n', 'I phone 13 pro max', '129900.00', 'iPhone 13 Pro Max Oh. So. Even more Pro. iPhone 13 Pro Max. A total Pro. The biggest Pro camera system upgrade ever. Super Retina XDR display with ProMotion for a faster, more responsive feel. Lightning-fast A15 Bionic chip. Superfast 5G. Durable design and the best battery life ever in an iPhone.', '243509_7_aa5rfm.png', '2022-09-12 13:11:41'),
(20, 'Mobile', 'I phone 13', '73990', 'Our most advanced dual‐camera system ever. An even brighter Oled display. A lightning‐fast chip that leaves the competition behind. A huge leap in battery life. SIM-free Screen Size: 6.1 inches Release Date: September 2021 Display Resolution: 2532 x 1170 Front Camera Resolution: 12 MP', '61gnyLP+XsL._AC_SX522_.jpg', '2022-09-12 13:11:41'),
(21, 'Mobile', 'I phone 13 blue', '73990', 'Our most advanced dual‐camera system ever. An even brighter Oled display. A lightning‐fast chip that leaves the competition behind. A huge leap in battery life. SIM-free Screen Size: 6.1 inches Release Date: September 2021 Display Resolution: 2532 x 1170 Front Camera Resolution: 12 MP', 'MP000000010632172_437Wx649H_202109171907221.jpeg', '2022-09-12 13:11:41'),
(22, 'Mobile', 'Samsung S20 plus', '69000', 'This is Galaxy S20 FE. This is the phone for people who want it all. This is the phone tailor-made for fans of all kinds. This is the phone that gives you what you want, to do more of what you love. Release Date: October 2020 Screen Size: 6.5 inches Display Resolution: 2400 x 1080 Operating System: Android', 's20.jpeg', '2022-09-12 13:11:41'),
(23, 'Mobile', 'Samsung S20 FE 5G', '45000', 'This is Galaxy S20 FE. This is the phone for people who want it all. This is the phone tailor-made for fans of all kinds. This is the phone that gives you what you want, to do more of what you love. Release Date: October 2020 Screen Size: 6.5 inches Display Resolution: 2400 x 1080 Operating System: Android', '01_SamsungGalaxyS20FE5G_blue.png', '2022-09-12 13:11:41'),
(26, 'Mobile', 'Vivo X70', '50000', 'Vivo X70 Pro comes with a 6.56-inch touchscreen display with a resolution of 1080x2376 pixels and an aspect ratio of 19.8:9. Vivo X70 Pro is powe… MORE Release Date: September 2021 Screen Size: 6.6 inches Operating System: Android Battery Capacity: 4,450 mAh', 'vivo x70 po.png', '2022-09-12 13:11:41'),
(30, 'Mobile', 'vivo x70 pro plus', '69000', '12 GB RAM | 256 GB ROM · 17.22 cm (6.78 inch) WQHD Display · 50MP + 48MP + 12MP + 8MP | 32MP Front Camera · 4500 mAh Battery · Qualcomm Snapdragon 888+ 5G Processor.', 'vivo_x70_pro_plus.jpeg', '2022-09-12 13:11:41'),
(36, 'Laptop', 'Asus vivobook 14', '30000', '10th Gen Intel i3-1005G1/8GB RAM/1TB HDD/Intel UHD Graphics/Windows 11/HD), 35.56 cm (14 Inch', 'laptop1.jpg', '2022-10-02 11:16:41'),
(37, 'Laptop', 'Asus vivobook pro 15', '70000', '16GB/512GB SSD/Windows 11/Cool Silver/1.8 Kg', 'laptop2.jpg', '2022-10-02 11:21:57'),
(38, 'Accessories', 'OnePlus Bullets Wireless Black', '4000', 'The Bullets Wireless give you freedom, power and convenience. Designed for durability and comfort, you can effortlessly switch between music, calls and Google Assistant. All bases covered.', '1+.png', '2022-10-03 05:51:17'),
(39, 'Watches', 'Samsung Galaxy Watch 5 Pro', '34999', 'Forged with a premium Titanium body and a stunning Sapphire crystal - the Galaxy Watch5 Pro stuns with classic colors and premium styling for a timeless timepiece.\r\nColor: Black, Blue\r\nConnectivity: Bluetooth, LTE\r\nDepartment: Men, Unisex, Women\r\nDisplay: Digital', 'in-galaxy-watch5-pro-sm-r920nzkainu-thumb-533190295.png', '2022-10-08 11:11:09'),
(40, 'Watches', 'Apple Watch SE 2 44mm', '32900', 'Apple Watch SE gets you more features for less. Save with Apple Trade In. Buy now with fast, free delivery. ... 44mm or 40mm. 50 m water resistant footnote¹.', 'apple watch  se.png', '2022-10-08 11:12:18'),
(41, 'Accessories', 'Oneplus Bullets Wireless Z2 -Black', '1999', 'Orientation Type: In Ear\r\nConnectivity: Bluetooth, Version 5.0\r\nBattery Life: Up To 30 Hours\r\nFast Charging: Yes\r\nNoise Cancellation: Adaptive Noise Cancellation\r\nAnti Distortion Audio Technology\r\nWarranty: 12 Months Warranty', 'oneplus bullets wireless z2.jpg', '2022-10-08 11:13:29'),
(42, 'Accessories', 'Oneplus Warp Charge 65 Watt', '3599', 'Warp Charger: 65 watt Charger for OnePlus is fastest charging technology, including support for OnePlus Nord CE 2/ 10 Pro/ 9RT/ Nord 2/ 9 Pro/ 9/ 9R/ 8T/ 8T+ charging. Charging a huge battery at standard speed, can be frustrating. So OnePlus offers these proprietary fastest charging technologies called “WARP65”. Output: 10V / 6.5A Max\r\nUSB C to C Dash Charging Cable 3.3 ft: Made of premium TPE coating and 56K ohm pull up resistor contained, passed 5000+ bend lifespan durability tests, make it mu', 'Oneplus Warp Charge 65 Watt .jpg', '2022-10-08 11:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `cpassword`, `token`, `status`, `date-time`) VALUES
(102, 'ajay', 'asarasaniya375@rku.ac.in', '1', '1', 'b1786250e244cba22d8e03a759edeb', 'active', '2022-09-25 15:51:22'),
(103, 'sabaiya vijay', 'vsabaliya122@rku.ac.in', '123', '123', '522466d2a4718e6d523b1652485c9c', 'active', '2022-10-15 06:19:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminreg`
--
ALTER TABLE `adminreg`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
