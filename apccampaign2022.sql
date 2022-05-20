-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 08:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apccampaign2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `real_password` varchar(30) NOT NULL,
  `lg` varchar(30) NOT NULL,
  `ward` varchar(20) NOT NULL,
  `poll_unit` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(40) NOT NULL DEFAULT 'user',
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `username`, `phone`, `password`, `real_password`, `lg`, `ward`, `poll_unit`, `reg_date`, `role`, `slug`) VALUES
(1, '', 'omolewu', '', 'd3cdc870c3511c054e84b7099bf8a6ee', '', '', '', '', '2022-05-19 09:01:08', 'User', ''),
(2, 'Babarinde Kolade john', 'Kolybright', '08053088707', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'Ifedayo', '999', '878', '2022-05-19 09:22:56', 'User', 'Babarinde-Kolade-john-08053088707-Ifedayo'),
(3, 'Babarinde Kolade john', 'Kolybright001', '08053088707', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'Ifedayo', '999', '878', '2022-05-19 09:27:41', 'Admin', 'Babarinde-Kolade-john-08053088707-Ifedayo');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `lg` varchar(40) NOT NULL,
  `ward` varchar(40) NOT NULL,
  `poll_unit` varchar(40) NOT NULL,
  `card_no` varchar(50) NOT NULL,
  `vote` varchar(40) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `comment` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `slug` varchar(50) NOT NULL,
  `agent_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fullname`, `phone`, `lg`, `ward`, `poll_unit`, `card_no`, `vote`, `reason`, `comment`, `reg_date`, `slug`, `agent_id`) VALUES
(1, 'Omolewu Sunday Opeyemi', '+2348102519926', 'Olorunda', '12', '434', '4242424', 'Yes', 'wwww', 'nnnnnnnn', '2022-05-13 11:59:54', 'Omolewu-Sunday-Opeyemi-+2348102519926-Olorunda', 2),
(2, 'Omolewu Sunday Opeyemi', '+2348102519926', 'Olorunda', '12', '434', '4242', 'Yes', 'wwww', 'mmsms', '2022-05-13 12:43:52', 'Omolewu-Sunday-Opeyemi-+2348102519926-Olorunda', 3),
(3, 'Babarinde Kolade john', '+2347063516699', 'Ilesa West', '6', '878', 'adiurweyriweu', 'Yes', '', '', '2022-05-19 15:50:21', 'Babarinde-Kolade-john-Ilesa-West', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
