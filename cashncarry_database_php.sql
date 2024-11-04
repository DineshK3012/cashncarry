-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 24, 2024 at 02:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashncarry`
--

-- --------------------------------------------------------

--
-- Table structure for table `cnccontact`
--

CREATE TABLE `cnccontact` (
  `s.no.` int(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cnccontact`
--

INSERT INTO `cnccontact` (`s.no.`, `name`, `email`, `message`, `date`) VALUES
(6, 'Dinesh kumar', 'www.dineshk40@gmail.com', 'Hello, this is Dinesh Kumar this side. I just want to ask how did make this website, I mean like this website looks amazing. I really loved it. Great work bro. Please, share some tips I really want to know. Thanks', '2021-10-25 17:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `cncusers`
--

CREATE TABLE `cncusers` (
  `s.no.` int(16) NOT NULL,
  `gender` char(16) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` bigint(16) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(16) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cncusers`
--

INSERT INTO `cncusers` (`s.no.`, `gender`, `email`, `phone`, `address`, `password`, `username`, `date`) VALUES
(11, 'male', 'www.dineshk40@gmail.com', 6396862410, 'Nagla Thok, paigaon road, Chhata', '$2y$10$cA7UPyQrJzkrlJCaSG4p9eDKCIGNYhU74VDcLv8SNWgPGVBmKa5HO', 'Dinesh', '2021-10-18 23:12:36'),
(12, 'male', 'pawan2k0@gmail.com', 7669807347, 'H.No. 23, Nagla thok', '$2y$10$6YcbFNopWH6hgLRS5Boa1uJ/ntS0Otv9IfbidEzZItU5vO1.XtZ0G', 'pawank20', '2021-10-19 22:31:34'),
(13, 'female', 'aarvitimkii@gmail.com', 9888786857, 'Alla Vaikunthapuram', '$2y$10$N6hvyAWo.kUXFdnZnyTBG.yQPKTJMfjPKf8NusDyeCdd94gqA.a9y', 'Aarvi Timki', '2021-11-21 18:48:23'),
(14, 'male', 'www.shivamrai@gmail.com', 8978653421, 'ghaziabad', '$2y$10$XMtz/tf8HYsBbwdCDTs57uscIuPdAohk5cM8p.Ztk4jRWejIZZAFW', 'ShivamRai', '2022-06-17 14:33:55'),
(15, 'male', 'dhakad@gmail.com', 9868577878, 'Bargain Cot, Kosi kalan', '$2y$10$EOu6JXxFDXXUfRkv0i0iUe9cdmdG3aW80VOQ5QLIxPmN16ZWUGEzG', 'dhakad', '2023-01-09 15:55:12'),
(16, 'male', 'pawan@gmail.com', 7478757868, 'Nagla Thok, paigaon road, Chhata', '$2y$10$96joauA5jlyg/7PHF1ZagOIPcjHEpgcq4.vkRCA1RVImOMEuo1XWu', 'Pawankumar', '2024-01-24 19:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sno` int(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pid` int(16) NOT NULL,
  `pqn` int(16) NOT NULL,
  `orderid` varchar(16) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sno`, `username`, `pid`, `pqn`, `orderid`, `date`) VALUES
(1, 'Dinesh', 1, 2, 'ORDS23456789', '2021-11-23 03:27:04'),
(2, 'Dinesh', 13, 3, 'ORDS23456790', '2021-11-23 04:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(16) NOT NULL,
  `pname` text NOT NULL,
  `pprice` float NOT NULL,
  `punit` varchar(16) NOT NULL,
  `pstock` int(12) NOT NULL,
  `pcategory` text NOT NULL,
  `pdesc` text NOT NULL,
  `src1` varchar(200) NOT NULL,
  `src2` varchar(200) NOT NULL,
  `src3` varchar(200) NOT NULL,
  `src4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `punit`, `pstock`, `pcategory`, `pdesc`, `src1`, `src2`, `src3`, `src4`) VALUES
(1, 'Fortune Besan', 50, '1KG', 10, 'Grocery', 'This product is from fortune which is India\'s number one brand for groceries and supplies high-quality products at low prices.', 'upload/flour.png', 'upload/fortune-other1.jpg', 'upload/fortune-other2.jpg', 'upload/fortune-other3.jpg'),
(7, 'Ashirvaad Atta', 200, '5KG', 4, 'Grocery', 'Ashirvaad atta India number 1 Chakki fresh atta at low price', 'upload/Wheat1.png', 'upload/Wheat2.png', 'upload/Wheat3.jpg', 'upload/Wheat4.jpg'),
(9, 'Fortune Rice', 500, '5KG', 6, 'Grocery', 'Fortune Rice Number 1 brand for grocery products', 'upload/Rice1.png', 'upload/Rice2.png', 'upload/Rice3.jpg', 'upload/Rice4.jpg'),
(10, 'Jasmine Hari Oil', 120, '400ml', 0, 'Personalcare', 'Jasmine Hair oil jo de aapke baalon ko anokhi majbooti.', 'upload/Oil1.png', 'upload/Oil2.png', 'upload/Oil3.jpg', 'upload/Oil4.jpg'),
(12, 'Ariel Matic Detergent', 650, '6kg', 8, 'Cleaning', 'Ariel Matic Detergent number 1 detergent with powers of 1000s of Lemons.', 'upload/Detergent1.png', 'upload/Detergent2.png', 'upload/Detergent3.jpg', 'upload/Detergent4.jpg'),
(13, 'Vim Bar', 16, '200g', 20, 'Cleaning', 'Vim bar with the power of 100 Lemons jo chale ab poore 4 Din Extra (Ek boond aur sb saaf)', 'upload/Dishsoap1.png', 'upload/Dishsoap2.png', 'upload/Dishsoap3.jpg', 'upload/Dishsoap4.png'),
(16, 'Presto Toilet Cleaner', 260, '5L', 2, 'Cleaning', 'Presto number one cleaner kills 99.9% germs in just one wash. ', 'upload/ToiletCleaner1.png', 'upload/ToiletCleaner2.png', 'upload/ToiletCleaner3.png', 'upload/ToiletCleaner4.png'),
(17, 'Lifebuoy Hand Sanitizer', 80, '500ml', 12, 'Cleaning', 'Lifebuoy hand sanitizer number one sanitizer kills 99.9% germs without water', 'upload/Sanitizer1.png', 'upload/Sanitizer2.png', 'upload/Sanitizer3.png', 'upload/Sanitizer1.png'),
(18, 'Nivea Men Acitve Clean', 100, '1kg', 3, 'Personalcare', 'Nivea Men active clean body bodywash for men number one bodywash for men', 'upload/Bodywash1.png', 'upload/Bodywash2.png', 'upload/Bodywash3.png', 'upload/Bodywash4.png'),
(19, 'Nivea Body Lotion', 150, '1Kg', 4, 'Personalcare', 'Nivea nourishing lotion body milk number one lotion for winters both for men and women', 'upload/Moisturizer1.png', 'upload/Moisturizer2.png', 'upload/Moisturizer3.png', 'upload/Moisturizer1.png');

-- --------------------------------------------------------

--
-- Table structure for table `ucart`
--

CREATE TABLE `ucart` (
  `s.no.` int(16) NOT NULL,
  `pid` int(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pqn` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ucart`
--

INSERT INTO `ucart` (`s.no.`, `pid`, `username`, `pqn`) VALUES
(46, 7, 'pawank20', 1),
(47, 10, 'pawank20', 1),
(54, 7, 'Aarvi Timki', 1),
(66, 16, 'Dinesh', 1),
(67, 19, 'Dinesh', 3),
(68, 17, 'Dinesh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cnccontact`
--
ALTER TABLE `cnccontact`
  ADD PRIMARY KEY (`s.no.`);

--
-- Indexes for table `cncusers`
--
ALTER TABLE `cncusers`
  ADD PRIMARY KEY (`s.no.`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `ucart`
--
ALTER TABLE `ucart`
  ADD PRIMARY KEY (`s.no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cnccontact`
--
ALTER TABLE `cnccontact`
  MODIFY `s.no.` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cncusers`
--
ALTER TABLE `cncusers`
  MODIFY `s.no.` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sno` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ucart`
--
ALTER TABLE `ucart`
  MODIFY `s.no.` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
