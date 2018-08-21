-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2018 at 09:45 WD
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `PROPERTIES`
--

CREATE TABLE `PROPERTIES` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `location` text NOT NULL,
  `size` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'On Sale',
  `price` decimal(10,0) NOT NULL DEFAULT '100000',
  `quantity` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PROPERTIES`
--

INSERT INTO `PROPERTIES` (`id`, `name`, `description`, `location`, `size`, `status`, `price`, `quantity`, `image`, `created_date`) VALUES
(1, 'Plots at Palm Gardens - Malaa', '1/8 Acre Plots at Palm Gardens - Malaa', 'Malaa', '1/8 Acre', 'On Sale', '100000', 0, 'img/bg-img/one.jpeg', '2018-08-20 18:32:17'),
(2, 'Plots At Sunset View Gardens', '1/8 Acre Plots At Sunset View Gardens In Joska Town', 'Joska Town', '1/8 Acre', 'On Sale', '100000', 0, 'img/bg-img/two.jpeg', '2018-08-20 18:32:17'),
(3, 'Land at Koma Hill', '1 Acre Land at Koma Hill - Phase 4', 'Koma Hill, Phase 4', '1 Acre', 'On Sale', '100000', 0, 'img/bg-img/four.jpeg', '2018-08-20 18:34:13'),
(4, 'Plots at Plains View Gardens', '1/8 Acre Plots at Plains View Gardens - Malaa', 'Plains View Gardens , Malaa', '1/8 Acre', 'On Sale', '100000', 0, 'img/bg-img/four.jpeg', '2018-08-20 18:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `TESTIMONIALS`
--

CREATE TABLE `TESTIMONIALS` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'Customer',
  `message` text NOT NULL,
  `image` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TESTIMONIALS`
--

INSERT INTO `TESTIMONIALS` (`id`, `name`, `type`, `message`, `image`, `date_created`) VALUES
(1, 'Annette Kilu', 'Customer', 'Hi Fanaka! I would like to appreciate the way you serve your clients. I really enjoyed being your client because of the amazing service i received from you.', 'one.jpg', '2018-08-21 09:51:13'),
(2, 'RASHID ABDUL', 'Customer', 'I have been searching for a plot close to the tarmac where i can set up my business for long. My long search ended at Fanaka. They have variety of projects in prime areas. Thanks for making my dream come true.', 'two.jpg', '2018-08-21 09:51:13'),
(3, 'RASHID ABDUL', 'Customer', 'I have been searching for a plot close to the tarmac where i can set up my business for long. My long search ended at Fanaka. They have variety of projects in prime areas. Thanks for making my dream come true.\r\n\r\n', '', '2018-08-21 09:56:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PROPERTIES`
--
ALTER TABLE `PROPERTIES`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TESTIMONIALS`
--
ALTER TABLE `TESTIMONIALS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PROPERTIES`
--
ALTER TABLE `PROPERTIES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `TESTIMONIALS`
--
ALTER TABLE `TESTIMONIALS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
