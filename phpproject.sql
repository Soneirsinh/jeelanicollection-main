-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_no` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `p_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_no`, `email`, `p_id`) VALUES
(12, 'hasan@demo.com', 2),
(19, 'demo@demo.com', 7),
(30, 'hasan@demo.com', 5),
(60, 'hasan@demo.com', 24),
(61, 'hasan@demo.com', 33),
(62, 'hasan@demo.com', 33),
(63, 'hasan@demo.com', 32),
(64, 'hasan@demo.com', 13),
(65, 'hasan@demo.com', 35);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `city` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `pwd`, `city`) VALUES
('demo', 'demo@demo.com', 'demo123', 'Porbandar'),
('demo', 'demo@demo12.com', 'demo123', 'pbr'),
('hasan', 'hasan@demo.com', 'hasan123', 'PBR'),
('mumtahin', 'm@demo.com', 'm123', 'pbr'),
('Soneirsinh', 'soneirsinh81205@gmail.com', '2005', 'porbandar'),
('Soneir', 'soner@gmail.com', 'abc@123', 'porbandar');

-- --------------------------------------------------------

--
-- Table structure for table `man`
--

CREATE TABLE `man` (
  `p_id` int(20) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` int(50) NOT NULL,
  `img_path` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `man`
--

INSERT INTO `man` (`p_id`, `p_name`, `p_price`, `img_path`) VALUES
(11, 't-shirt', 1000, 'images/boy1.png'),
(12, 't-shirt', 990, 'images/boy5.png'),
(13, 't-shirt', 1500, 'images/boy6.png'),
(14, 't-shirt', 500, 'images/boy9.png'),
(15, 't-shirt', 400, 'images/best_selling_3.jpg'),
(16, 'shirt', 450, 'images/boy3.png'),
(17, 'shirt', 500, 'images/boy4.png'),
(18, 'shirt', 500, 'images/boy8.png'),
(19, 'shirt', 500, 'images/boy10.png'),
(20, 'shirt', 1500, 'images/boy7.png'),
(21, 'shirt', 1500, 'images/top_rated_1.jpg'),
(22, 'jenas', 500, 'images/boy11.png'),
(23, 'jenas', 500, 'images/boy12.png'),
(24, 'hoodie', 1000, 'images/top_rated_3.jpg'),
(25, 'hoodie', 1000, 'images/on_sale_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(20) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `p_price` int(50) NOT NULL,
  `date` date NOT NULL,
  `img_path` varchar(70) NOT NULL,
  `category` varchar(20) NOT NULL,
  `descp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `date`, `img_path`, `category`, `descp`) VALUES
(1, 'top', 123, '2008-12-08', 'images/c_formal_gray_shirt.png', 'top', 'this is secs'),
(2, 'pent', 2500, '2015-10-18', 'images/c_pant_girl.png', 'genes', 'cotton blue genes '),
(3, 'shorts', 1200, '2016-10-19', 'images/c_polo-shirt.png', 'shorts', 'light pink shorts'),
(4, 'blue shorts', 1000, '2016-10-19', 'images/c_shirt-girl.png', 'shorts', 'light blue shorts'),
(5, 'hoodie shirt', 5000, '2022-12-08', 'images/c_t-shirt_men.png', 'hoodie', 'branded hoodie shirt'),
(6, 'black shirt', 1750, '2020-09-25', 'images/c_tunic-shirt_girl.png', 'shirt', 'black cotton shirt '),
(7, 'girl blue shirt', 700, '1999-01-01', 'images/c_undershirt.png', 'shirt', 'dark blue girl shirt'),
(8, 'westerm shirt', 2000, '2021-07-23', 'images/c_western-shirt.png', 'shirt', 'black western shirt');

-- --------------------------------------------------------

--
-- Table structure for table `woman`
--

CREATE TABLE `woman` (
  `p_id` int(20) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` int(50) NOT NULL,
  `img_path` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woman`
--

INSERT INTO `woman` (`p_id`, `p_name`, `p_price`, `img_path`) VALUES
(31, 'long slives t-shirt', 700, 'images/c_formal_gray_shirt.png'),
(32, 'long slives t-shirt', 650, 'images/c_western-shirt.png'),
(34, 'long slives t-shirt', 650, 'images/girls15.png'),
(35, 'crop tops', 550, 'images/girls2.png'),
(36, 'crop tops', 600, 'images/girls5.png'),
(37, 'crop tops', 700, 'images/girls6.png'),
(38, 'crop tops', 750, 'images/c_undershirt.png'),
(39, 'crop tops', 750, 'images/c_shirt-girl.png'),
(40, 'shirt', 800, 'images/c_tunic-shirt_girl.png'),
(41, 'shirt', 800, 'images/girls4.png'),
(42, 'bell bottoms', 800, 'images/girls8.png'),
(43, 'skinny jeans', 500, 'images/c_pant_girl.png'),
(44, 'low waist jeans', 550, 'images/girls13.png'),
(45, 'capri pants', 550, 'images/girls14.png'),
(46, 'jenas', 600, 'images/girls10.png'),
(47, 'jeans', 600, 'images/girls12.png'),
(48, 'jeans', 600, 'images/girls11.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `man`
--
ALTER TABLE `man`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `woman`
--
ALTER TABLE `woman`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
