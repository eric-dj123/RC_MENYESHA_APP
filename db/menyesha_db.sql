-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 10:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menyesha_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `anouncement_tbl`
--

CREATE TABLE `anouncement_tbl` (
  `anou_id` int(11) NOT NULL,
  `anou_title` varchar(67) NOT NULL,
  `anou_category` varchar(34) NOT NULL,
  `anou_description` varchar(3000) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `rec_id` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anouncement_tbl`
--

INSERT INTO `anouncement_tbl` (`anou_id`, `anou_title`, `anou_category`, `anou_description`, `added_on`, `status`, `rec_id`) VALUES
(3, 'Itangazo Rireba abakristu bose', 'Misa Zasabwe', 'umukristu kazi wo Mumuryangoremeza wa Nyarubande Yasabye Misa Asabira Roho Zahoze Muri Pregatori', '2022-10-30 14:59:54', 1, '1'),
(4, 'amafaranga yatuwe', 'amafaranga yatuwe muri paruwasi', 'kucyumweru cyashize hatuwe amafaranga ibimbi mirongo itanu nabitanu', '2022-10-30 15:52:27', 1, '1'),
(5, 'amatangazo ya ma sacramentu', 'Rireba aba kristu bagiye guhabwa U', 'turabamenyeshako ejo kuwa gatanu hari inama yabagiye guhabwa isakramentu ryukaristia ko hari inama izaba igamije kwita kubijyanye nuko ibizamini byagenze  kandi abatsinzwe bazongera kongera gusubiramo murakoze', '2022-10-30 18:56:23', 1, '1'),
(6, 'amatangazo ya ma sacramentu', 'Rireba aba kristu bagiye guhabwa U', 'turabamenyeshako ejo kuwa gatanu hari inama yabagiye guhabwa isakramentu ryukaristia ko hari inama izaba igamije kwita kubijyanye nuko ibizamini byagenze  kandi abatsinzwe bazongera kongera gusubiramo murakoze', '2022-10-30 18:57:36', 0, '1'),
(7, 'amatangazo ya ma sacramentu', 'Rireba aba kristu bagiye guhabwa U', 'turabamenyeshako ejo kuwa gatanu hari inama yabagiye guhabwa isakramentu ryukaristia ko hari inama izaba igamije kwita kubijyanye nuko ibizamini byagenze  kandi abatsinzwe bazongera kongera gusubiramo murakoze', '2022-10-30 18:58:09', 0, '1'),
(8, 'amatangazo ya ma sacramentu', 'Rireba aba kristu bagiye guhabwa U', 'turabamenyeshako ejo kuwa gatanu hari inama yabagiye guhabwa isakramentu ryukaristia ko hari inama izaba igamije kwita kubijyanye nuko ibizamini byagenze  kandi abatsinzwe bazongera kongera gusubiramo murakoze', '2022-10-30 18:59:13', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `certicate`
--

CREATE TABLE `certicate` (
  `cer_id` int(11) NOT NULL,
  `certificate_title` varchar(89) NOT NULL,
  `certificate_diocese` varchar(67) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certicate`
--

INSERT INTO `certicate` (`cer_id`, `certificate_title`, `certificate_diocese`, `rec_id`, `status`) VALUES
(1, 'ICYEMEZO CYUKO WAHAWE UKARISTIYA', 'CATHEDRALE DE RUHENGERI', 1, 0),
(2, 'ICYEMEZO CYUKO WAHAWE BATISIMU', 'CATHEDRALE DE RUHENGERI', 1, 0),
(3, 'ICYEMEZO CYUKO WAKOMEJWE', 'CATHEDRALE DE RUHENGERI', 1, 0),
(4, 'ICYEMEZO CYUKO WAZEZERANYE', 'CATHEDRALE DE RUHENGERI', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `father_tbl`
--

CREATE TABLE `father_tbl` (
  `fath_id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(34) NOT NULL,
  `phonenumber` varchar(67) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(67) NOT NULL,
  `ImageName` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `father_tbl`
--

INSERT INTO `father_tbl` (`fath_id`, `firstname`, `lastname`, `phonenumber`, `email`, `password`, `ImageName`, `status`) VALUES
(1, 'ndikumana', 'eric', '0782185745', 'ndikumanaeric001@gmail.com', '$2y$10$xXKTrnu6oW5G0gmd1dcZEOB6yCgVQY2E9eMMrWue/Kei/IW9hbJoC', 'images (2).jpg', 0),
(2, 'kwisanga', 'didier', '0782185746', 'dismassmessi@gmail.com', '$2y$10$pTpWUiBd51iaEtVoMYWO0ufu9mvQz6W05ujV/Zk3CDUQdvnoN9IAq', 'IMG-635e3e04724381.88869120.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `receptionist_tbl`
--

CREATE TABLE `receptionist_tbl` (
  `rec_id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(34) NOT NULL,
  `phonenumber` varchar(67) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(67) NOT NULL,
  `ImageName` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `fath_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist_tbl`
--

INSERT INTO `receptionist_tbl` (`rec_id`, `firstname`, `lastname`, `phonenumber`, `email`, `password`, `ImageName`, `status`, `fath_id`) VALUES
(1, 'ndikumana', 'eric', '0782185745', 'ndikumanaeric001@gmail.com', '$2y$10$RtTczpNsWkM7rWWBsiDHGePusxVket0iP1YaaFfMFGyNKVu/nnih2', 'IMG-635e91bc93f1e0.47789298.png', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anouncement_tbl`
--
ALTER TABLE `anouncement_tbl`
  ADD PRIMARY KEY (`anou_id`);

--
-- Indexes for table `certicate`
--
ALTER TABLE `certicate`
  ADD PRIMARY KEY (`cer_id`);

--
-- Indexes for table `father_tbl`
--
ALTER TABLE `father_tbl`
  ADD PRIMARY KEY (`fath_id`);

--
-- Indexes for table `receptionist_tbl`
--
ALTER TABLE `receptionist_tbl`
  ADD PRIMARY KEY (`rec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anouncement_tbl`
--
ALTER TABLE `anouncement_tbl`
  MODIFY `anou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `certicate`
--
ALTER TABLE `certicate`
  MODIFY `cer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `father_tbl`
--
ALTER TABLE `father_tbl`
  MODIFY `fath_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receptionist_tbl`
--
ALTER TABLE `receptionist_tbl`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
