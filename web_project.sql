-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 01:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `first_name`, `last_name`, `email_address`, `pass`) VALUES
(8, 'Syed Mehmood', 'Shah', 'mahmoodshah321@gmail.com', '123456'),
(9, 'Arham', 'Arshad', 'arham@gmail.com', '123456'),
(10, 'Mehmood', 'Shah', 'maddy@gmail.com', '123456'),
(13, 'Syed Mehmood', 'Shah', 'mahmoodshah@gmail.com', '123456'),
(14, 'mehmood', 'shah', 'mehmood@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(50) NOT NULL,
  `card_num` varchar(100) NOT NULL,
  `card_exp_month` int(20) NOT NULL,
  `card_exp_year` int(20) NOT NULL,
  `card_cvv` int(20) NOT NULL,
  `card_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `card_num`, `card_exp_month`, `card_exp_year`, `card_cvv`, `card_name`) VALUES
(1, '1111222233334444', 2, 2022, 111, 'Syed Mehmood Shah');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon`) VALUES
('123456'),
('mehmood');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_add`
--

CREATE TABLE `delivery_add` (
  `id` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_add`
--

INSERT INTO `delivery_add` (`id`, `address`, `city`, `province`, `phone`) VALUES
(25, 'Pershawar, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(26, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(27, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(28, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(29, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(30, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(31, '77 Union Terrace', 'LONDON', 'LONDON', '03179925836'),
(32, '77 Union Terrace', 'LONDON', 'LONDON', '03179925836'),
(33, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(34, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(35, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(36, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(37, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(38, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(39, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(40, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836'),
(41, 'Abbottabad, Pakistan', 'Abbottabad', 'KPK', '03179925836');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `p_desc` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rattings` int(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`product_id`, `product_name`, `p_desc`, `price`, `image`, `rattings`, `category`) VALUES
(1, 'Laptop Bag 1', ' laptop sleeve, also sometimes called a laptop pouch or bag, is typically a sleeve/bag/pouch manufactured from a material such as neoprene or leather', 30, 'images/laptop1.jpg', 1, 'laptops'),
(3, 'Laptop Bag 3', ' laptop sleeve, also sometimes called a laptop pouch or bag, is typically a sleeve/bag/pouch manufactured from a material such as neoprene or leather', 20, 'images/laptop3.jpg', 5, 'laptops'),
(4, 'Laptop Bag 4', ' laptop sleeve, also sometimes called a laptop pouch or bag, is typically a sleeve/bag/pouch manufactured from a material such as neoprene or leather', 30, 'images/laptop4.jpg', 3, 'laptops'),
(5, 'Laptop Bag 5', ' laptop sleeve, also sometimes called a laptop pouch or bag, is typically a sleeve/bag/pouch manufactured from a material such as neoprene or leather', 23, 'images/laptop5.jpg', 4, 'laptops'),
(6, 'Laptop Bag 6', ' laptop sleeve, also sometimes called a laptop pouch or bag, is typically a sleeve/bag/pouch manufactured from a material such as neoprene or leather', 40, 'images/laptop6.jpg', 5, 'laptops'),
(7, 'Laptop Bag 7', 'This laptop backpack is a backpack with a special compartment in which you can store your laptop. A backpack has multiple compartments for your computer accessories.', 30, 'images/laptop2.jpg', 4, 'laptops'),
(51, 'Women Purse 1', 'Ladies handbags are a style statement for women nowadays. For most of the women, the handbag is much more than a place to pack your wallet and purse.', 30, 'images/women_bag1.jpg', 5, 'purses'),
(52, 'Women Purse 2', 'Ladies handbags are a style statement for women nowadays. For most of the women, the handbag is much more than a place to pack your wallet and purse.', 15, 'images/women_bag2.jpg', 5, 'purses'),
(53, 'Women Purse 3', 'Ladies handbags are a style statement for women nowadays. For most of the women, the handbag is much more than a place to pack your wallet and purse.', 30, 'images/women_bag3.jpg', 5, 'purses'),
(54, 'Women Purse 4', 'Ladies handbags are a style statement for women nowadays. For most of the women, the handbag is much more than a place to pack your wallet and purse.', 40, 'images/women_bag4.jpg', 4, 'purses'),
(55, 'Women Purse 5', 'Ladies handbags are a style statement for women nowadays. For most of the women, the handbag is much more than a place to pack your wallet and purse.', 35, 'images/women_bag5.jpg', 4, 'purses'),
(56, 'Women Purse 6', 'Ladies handbags are a style statement for women nowadays. For most of the women, the handbag is much more than a place to pack your wallet and purse.', 40, 'images/women_bag6.jpg', 3, 'purses'),
(101, 'Hiking Backpack 1', 'Hiking trips typically require a backpack so that you can easily carry water, food, additional clothing and other necessities', 18, 'images/hiking_bag1.jpg', 4, 'hiking'),
(102, 'Hiking Backpack 2', 'Hiking trips typically require a backpack so that you can easily carry water, food, additional clothing and other necessities', 28, 'images/hiking_bag2.jpg', 5, 'hiking'),
(103, 'Hiking Backpack 3', 'Hiking trips typically require a backpack so that you can easily carry water, food, additional clothing and other necessities', 24, 'images/hiking_bag3.jpg', 4, 'hiking'),
(104, 'Hiking Backpack 4', 'Hiking trips typically require a backpack so that you can easily carry water, food, additional clothing and other necessities', 20, 'images/hiking_bag4.jpg', 5, 'hiking'),
(105, 'Hiking Backpack 5', 'Hiking trips typically require a backpack so that you can easily carry water, food, additional clothing and other necessities', 30, 'images/hiking_bag5.jpg', 4, 'hiking'),
(106, 'Hiking Backpack 6', 'Hiking trips typically require a backpack so that you can easily carry water, food, additional clothing and other necessities', 25, 'images/hiking_bag6.jpg', 4, 'hiking'),
(152, 'Travel Bag 1', 'Shop Carry on luggage Bags & Suitcases Online in Pakistan at Daraz.pk. Buy Carry on luggage Bags & Suitcases online in Karachi & all across the world', 30, 'images/travel_bag1.jpg', 5, 'travel'),
(303, 'Travel Bag 2', 'Shop Carry on luggage Bags & Suitcases Online in Pakistan at Daraz.pk. Buy Carry on luggage Bags & Suitcases online in Karachi & all across the world', 28, 'images/hiking_bag5.jpg', 5, 'travel'),
(454, 'Travel Bag 3', 'Shop Carry on luggage Bags & Suitcases Online in Pakistan at Daraz.pk. Buy Carry on luggage Bags & Suitcases online in Karachi & all across the world', 40, 'images/travel_bag3.jpg', 5, 'travel');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(12, 'masd@dfs');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `t_amount` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `bool` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `product_name`, `color`, `price`, `quantity`, `t_amount`, `image`, `user_id`, `bool`) VALUES
(18, 1, 'Laptop Bag 1', 'Red', 30, 1, 30, 'images/laptop1.jpg', 8, 1),
(19, 3, 'Laptop Bag 3', 'Red', 20, 1, 20, 'images/laptop3.jpg', 8, 1),
(20, 1, 'Laptop Bag 1', 'Black', 30, 1, 30, 'images/laptop1.jpg', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(50) NOT NULL,
  `reviewer_name` varchar(100) NOT NULL,
  `review` varchar(500) NOT NULL,
  `ratings` int(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `reviewer_name`, `review`, `ratings`, `p_id`, `user_id`) VALUES
(60, 'Syed Mehmood Shah', 'Nice  Bag', 5, 51, 8),
(61, 'mehmood shah', 'bad', 1, 1, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `delivery_add`
--
ALTER TABLE `delivery_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_add`
--
ALTER TABLE `delivery_add`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
