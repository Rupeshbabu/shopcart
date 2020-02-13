-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 11:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) NOT NULL,
  `adr_uni_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_uni_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `adr_uni_id`, `username`, `user_uni_id`, `email`, `address`, `landmark`, `city`, `state`, `street`, `pincode`, `phone`) VALUES
(1, '33e7e0090e9d', 'Rupesh', '8ed1a7a2b5f8', 'nrupesh08@gmail.com', '20-20-121', 'Durgapuram', 'Vijayawada', 'AP', 'Bavajipet', 520011, 1234569875),
(2, '109f6d741914', 'Rupi', '8ed1a7a2b5f8', 'nrupesh08@gmail.com', 'SN Puram', 'Municipal Park', 'Vijayawada', 'AP', 'SN Puram', 520003, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_uni_id` varchar(255) NOT NULL,
  `user_uni_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cart_uni_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `parent_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `sub_category`, `parent_id`, `status`) VALUES
(1, 'Milk Products', 'no', 'parent', '1'),
(2, 'Milk', 'yes', '1', '1'),
(3, 'Curd', 'yes', '1', '1'),
(4, 'Lassi', 'yes', '1', '1'),
(5, 'Ghee', 'yes', '1', '1'),
(6, 'Flavoured Milk', 'yes', '1', '1'),
(7, 'Ice Cream', 'yes', '1', '1'),
(8, 'UHT Milk', 'yes', '1', '1'),
(9, 'Mithai', 'yes', '1', '1'),
(10, 'Khowa', 'yes', '1', '1'),
(11, 'Cream', 'yes', '1', '1'),
(12, 'Butter', 'yes', '1', '1'),
(13, 'Paneer', 'yes', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_uni_id` varchar(255) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `ordered_by_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_uni_id` varchar(255) NOT NULL,
  `user_uni_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_adr` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `ordered_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount_price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `product_uni_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `spec`, `price`, `discount_price`, `category`, `sub_category`, `images`, `status`, `product_uni_id`, `quantity`, `brand`, `added_date`) VALUES
(1, 'Toned Milk', 'Low Fat Toned Milk Good for Middle Age &amp; Elder people', 'Low Fat Toned Milk Good for Middle Age &amp; Elder people', '30', '25', 'Milk Products', 'Milk', '', '1', '670c927d5f73', '50', 'Masqati', '12-02-2020'),
(2, 'Toned Milk', 'Low Fat Toned Milk Good for Middle Age &amp; Elder people', 'Low Fat Toned Milk Good for Middle Age &amp; Elder people', '30', '25', 'Milk Products', 'Milk', '8b77fa5c5bde_0.jpg', '1', '8b77fa5c5bde', '50', 'Masqati', '12-02-2020'),
(3, 'Whole Milk', 'Pure Thick Milk rich in calcium good for growing Young Kids &amp; Teenagers.', 'Pure Thick Milk rich in calcium good for growing Young Kids &amp; Teenagers.', '35', '30', 'Milk Products', 'Milk', 'fbd10ed6eb95_0.jpg', '1', 'fbd10ed6eb95', '25', 'Masqati', '12-02-2020'),
(4, 'Thick Curd', 'Thick Curd', 'Thick Curd', '20', '15', 'Milk Products', 'Curd', '62e1f7f43f6d_0.jpg', '1', '62e1f7f43f6d', '90', 'Masqati', '12-02-2020'),
(5, 'Masqati Bulk Curd', 'Masqati Bulk Curd for Parties or Functions', 'Masqati Bulk Curd for Parties or Functions', '2000', '1500', 'Milk Products', 'Curd', '6461d6e99dbf_0.jpg,6461d6e99dbf_1.jpg', '1', '6461d6e99dbf', '20', 'Masqati', '12-02-2020'),
(6, 'Curd', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '25', '20', 'Milk Products', 'Curd', '84d71d88e1bb_0.jpg,84d71d88e1bb_1.jpg,84d71d88e1bb_2.jpg', '1', '84d71d88e1bb', '50', 'Masqati', '12-02-2020'),
(7, 'Flavoured Lassi', 'Flavoured Lassi', 'Flavoured Lassi', '25', '20', 'Milk Products', 'Lassi', 'a5aa0088b780_0.jpg', '1', 'a5aa0088b780', '60', 'Masqati', '12-02-2020'),
(8, 'Masqati Lassi', 'Masqati Lassi', 'Masqati Lassi', '20', '10', 'Milk Products', 'Lassi', '5b52b91caf53_0.jpg,5b52b91caf53_1.jpg', '1', '5b52b91caf53', '90', 'Masqati', '12-02-2020'),
(9, 'Butter Milk', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20', '12', 'Milk Products', 'Lassi', '3e2dc4c34e7d_0.png,3e2dc4c34e7d_1.jpg,3e2dc4c34e7d_2.jpg', '1', '3e2dc4c34e7d', '80', 'Masqati', '12-02-2020'),
(10, 'Buffalow Ghee', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2500', '2000', 'Milk Products', 'Ghee', 'e04ea08d0e06_0.png', '1', 'e04ea08d0e06', '10', 'Masqati', '12-02-2020'),
(11, 'Cow Ghee', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3500', '3000', 'Milk Products', 'Ghee', '7b1a872ed0d4_0.png,7b1a872ed0d4_1.png', '1', '7b1a872ed0d4', '5', 'Masqati', '12-02-2020'),
(12, 'Mango Flavoured Milk', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '25', '20', 'Milk Products', 'Flavoured Milk', '4603e6591545_0.png', '1', '4603e6591545', '50', 'masqati', '12-02-2020'),
(13, 'Straw Berry Flavoured Milk', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '25', '20', 'Milk Products', 'Flavoured Milk', '8f47ebc2e66d_0.png,8f47ebc2e66d_1.png', '1', '8f47ebc2e66d', '50', 'Masqati', '12-02-2020'),
(14, 'Badam Flavoured Milk', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '30', '25', 'Milk Products', 'Flavoured Milk', '47a81852adc5_0.png,47a81852adc5_1.png,47a81852adc5_2.png', '1', '47a81852adc5', '50', 'Masqati', '12-02-2020'),
(15, '4 litres party pack', 'party functions fullfilment', 'party functions fullfilment', '1000', '999', 'Milk Products', 'Ice Cream', '5c1741c160ae_0.jpg', '1', '5c1741c160ae', '20', 'Masqati', '12-02-2020'),
(16, '500 ml Pack', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '50', '40', 'Milk Products', 'Ice Cream', '3dc19194be03_0.jpg,3dc19194be03_1.jpg', '1', '3dc19194be03', '100', 'Masqati', '12-02-2020'),
(17, '1 ltr paper pack', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '200', '150', 'Milk Products', 'Ice Cream', '3c29e99e54fe_0.jpg,3c29e99e54fe_1.jpg,3c29e99e54fe_2.jpg', '1', '3c29e99e54fe', '50', 'Masqati', '12-02-2020'),
(18, 'UHT Toned Milk', 'IMasqati UHT poly pack Toned milk is Low Fat milk which is treated Ultra high temperature of about 130Â° Temperature to kill all the germs present in milk then suddenly cooled at 25Â° Temperature &amp; packed in skeptical 7 layer protective Poly Pack whic', 'IMasqati UHT poly pack Toned milk is Low Fat milk which is treated Ultra high temperature of about 130Â° Temperature to kill all the germs present in milk then suddenly cooled at 25Â° Temperature &amp; packed in skeptical 7 layer protective Poly Pack whic', '250', '200', 'Milk Products', 'UHT Milk', '4cd067d37373_0.png', '1', '4cd067d37373', '20', 'Masqati', '12-02-2020'),
(19, 'Doodh Peda', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '60', '50', 'Milk Products', 'Mithai', '7bea03a9e03c_0.png', '1', '7bea03a9e03c', '20', 'Masqati', '12-02-2020'),
(20, 'Mithai', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '120', '99', 'Milk Products', 'Mithai', '096272046299_0.png', '1', '096272046299', '20', 'Masqati', '12-02-2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_uni_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email_conf` varchar(25) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_uni_id`, `username`, `email`, `phone`, `gender`, `dob`, `pwd`, `status`, `email_conf`, `added_date`) VALUES
(1, '8ed1a7a2b5f8', 'nrupesh', 'nrupesh08@gmail.com', '1234567895', 'male', '18-01-2020', '827ccb0eea8a706c4c34a16891f84e7b', 'active', 'pending', '31-01-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
