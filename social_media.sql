-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 04:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `edu` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cell`, `username`, `password`, `gender`, `age`, `edu`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(16, 'mehedi khan', 'mehedi12@gmail.com', '01710996990', 'mehedi12', '$2y$10$fJrBjBuU4BDtGoddbuOV7O4vDZyDroCg95u4ktq.OQuUusk4ZfpgG', 'male', 0, '', '1635414493_236075953_1634237160_635019815_51BKqwKidvL._AC._SR360,460.jpg', 1, 0, '2021-10-25 07:38:37', '2021-10-25 07:38:37'),
(18, 'Sharjin Shairin shetu', 'sarjin12@gmail.com', '01876535876', 'sarjin121@', '$2y$10$4jCmpIr.di/f9U5ZxvLa.eZ7McQ3iGnUOysp2pVjTXpieRi7rzmdC', 'female', 25, 'Zimbabwe National University', '1636356318_1084921157_251063492_444763513884173_4199881925127707097_n.jpg', 1, 0, '2021-10-26 07:30:19', '01-11-21 05:11:28'),
(19, 'Farhana akter', 'farhana22@gmail.com', '01876535729', 'faru22', '$2y$10$rWqTQujdsqm7C4Joeqou4Odep3y48pqAGNAUHLsxBu9URVHTndM.y', 'female', 18, 'Hsc 2nd year', '1636180620_1814723588_246180947_576978380218031_7417026175803505453_n.jpg', 1, 0, '2021-10-28 07:20:55', '01-11-21 05:11:53'),
(20, 'MD Farhan Shariar', 'farhan22@gmail.com', '01950879306', 'farhan22', '$2y$10$IqobnU8wZrhkF6D6AKTNA.uRtH/m5XwB2jhJJdzI3K4KDrFtRTwou', 'male', 0, '', '1635431356_1042564626_97ce806be381c28b2785c6793428a730.png', 1, 0, '2021-10-28 07:27:32', '2021-10-28 07:27:32'),
(21, 'The Professor', 'professor22@gmail.com', '01710998978', 'professor223', '$2y$10$HWtiVR2jA2c19jtVFOHPJO/Mt25iTN9FZi3OGwnCylfd13zHWCuvC', 'male', 36, 'PHD degree', '1635703132_1925623420_Professor_(Money_Heist).jpg', 1, 0, '2021-10-31 10:56:21', '2021-10-31 10:56:21'),
(22, 'IBrahim Robin', 'ibraim00@gmail.com', '01876535628', 'ibrahim22', '$2y$10$eHBPB0aTQmFXFvn3idGanur1Vb3MMs7ulN4FoTCbCIpS.qYHAicjS', 'male', NULL, NULL, NULL, 1, 0, '2021-11-05 06:18:42', NULL),
(23, 'Salman', 'sal@gmail.com', '01876574821', 'sal123', '$2y$10$f/ktShlkTmP7puUyPCuPGOt5r0QFyxdOfkazTyS32oILhig3F7AAe', 'male', NULL, NULL, '1636223045_1657315687_virat-kohli-batting.jpg', 1, 0, '2021-11-06 11:23:23', NULL),
(24, 'Marcus Stoins', 'mar@gmail.com', '01710998976', 'mar2345', '$2y$10$hq5kIudCtIVCc91w2M6HsuyS0tIMlzFcu30fCsYSsWbO9l7eY/ne.', 'male', NULL, NULL, '1636357694_1127960650_fc0aa6f3baa5aac614fd18ed8638e42f.jpg', 1, 0, '2021-11-06 11:30:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
