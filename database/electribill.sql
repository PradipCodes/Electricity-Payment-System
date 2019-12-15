-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 04:37 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electribill`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(9) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `b_id` int(9) NOT NULL,
  `bnk_name` varchar(200) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`b_id`, `bnk_name`) VALUES
(1, 'Everest Bank'),
(2, 'Global IME Bank Ltd'),
(3, 'Himalyan Bank Ltd.'),
(4, 'Laxmi Bank'),
(5, 'Mega Bank'),
(6, 'Nabil Bank'),
(7, 'NCC Bank Ltd.'),
(8, 'Nepal Bank Ltd.'),
(9, 'Nepal SBI Bank'),
(10, 'NIC Asia Bank');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `amt_id` int(9) NOT NULL,
  `cus_id` int(200) NOT NULL,
  `billno` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `amount` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `date` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `payment` varchar(200) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`amt_id`, `cus_id`, `billno`, `amount`, `date`, `payment`) VALUES
(1, 123456789, '79312345', '10000', '07/29/2018', 'Complete'),
(123, 123456789, '525', '500', '07/29/2018', 'Complete'),
(500, 123456798, '521235', '5000', '07/22/2018', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `c_id` int(9) NOT NULL,
  `card_name` varchar(200) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`c_id`, `card_name`) VALUES
(1, 'Visa'),
(2, 'SCT'),
(3, 'MasterCard'),
(4, 'Maestro');

-- --------------------------------------------------------

--
-- Table structure for table `custumer`
--

CREATE TABLE `custumer` (
  `cus_id` int(9) NOT NULL,
  `name` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `address` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `houseno` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `phone` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `email` varchar(200) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custumer`
--

INSERT INTO `custumer` (`cus_id`, `name`, `address`, `houseno`, `phone`, `email`) VALUES
(123456789, 'Pradip Thapa', 'Namuna Basti, Kathmandu', 'A51', '9823782258', 'pradipthapa@pradipt.com.np'),
(123456798, 'Gaurav Thapa', 'Kathmandu', 'No', '9915511287', 'gaurabthapa17@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`amt_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `b_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `amt_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `c_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `cus_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456799;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
