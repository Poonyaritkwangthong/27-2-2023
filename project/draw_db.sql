-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 07:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `draw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `dpr_id` int(11) NOT NULL,
  `dpr_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dpr_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dpr_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dpr_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`dpr_id`, `dpr_name`, `dpr_type`, `dpr_image`, `dpr_detail`) VALUES
(3, 'sdsdsd', '        animesds', '  https://i.pinimg.com/736x/85/1c/61/851c61be8eb30f5528be0273dfa279e8.jpg', '        fire forcesdsd'),
(5, 'zxxz', ' xzx', 'https://i.pinimg.com/736x/45/37/7b/45377b6e5ccf5b7c895576119c2c2cd0.jpg', ' zxxz'),
(6, 'sa', ' dsdsd', 'https://i.pinimg.com/564x/07/51/e3/0751e35df3dba41f4579b877f3a0411e.jpg', ' sdsd'),
(7, 'ffff', '   fdf', 'https://i.pinimg.com/736x/46/97/18/469718510577d344e2316c38f90ce407.jpg', '   fdfdf'),
(9, 'benimaru002', '   anime', 'https://i.imgur.com/bTE90NS.jpg', '   ส๊วย');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `prg_id` int(11) NOT NULL,
  `prg_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prg_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prg_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prg_id`, `prg_file`, `prg_name`, `prg_detail`) VALUES
(0, '   https://www.google.co.th/url?sa=i&url=https%3A%2F%2Fimprovedrawing.com%2Fwhat-are-the-basics-of-sketching%2F&psig=AOvVaw2bLFbdQugLD4QITSLAtgry&ust=1674836869782000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCICKwdfT5fwCFQAAAAAdAAAAABAF', '  sketcing', '   การร่างภาพ'),
(0, ' https://www.google.co.th/url?sa=i&url=https%3A%2F%2Fwww.bbblogr.com%2Fhow-to-draw-2%2F&psig=AOvVaw3Ar1NYwCJB8NfYXfp19T5U&ust=1674837209394000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCJiApvnU5fwCFQAAAAAdAAAAABAE', 'coloring', 'การลงสี'),
(0, ' https://www.google.co.th/url?sa=i&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D15oMSRLtMsY&psig=AOvVaw0BCThvNBD6ui8cLKrY3v3f&ust=1674837431034000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCOjH-eLV5fwCFQAAAAAdAAAAABAJ', 'Image clipping', 'การตัดเส้น'),
(0, ' https://www.google.co.th/url?sa=i&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DwHfKg-tfbBU&psig=AOvVaw3kbypxV9ST2iZfIKxaoTAv&ust=1674837680680000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCJi-idrW5fwCFQAAAAAdAAAAABAE', 'Image detailing', 'การลงรายละเอียดรูปภาพ'),
(0, ' https://www.google.co.th/url?sa=i&url=https%3A%2F%2Fwww.dek-d.com%2Fboard%2Fview%2F3781808&psig=AOvVaw1b9X9FEaIXEsIigZiOw3zx&ust=1674837763537000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMDuwoHX5fwCFQAAAAAdAAAAABAE', 'car', 'วาดรถ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `pr_id` int(10) NOT NULL,
  `f_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`pr_id`, `f_name`, `l_name`, `user_name`, `password`, `phone_number`) VALUES
(1, 'poonarit', 'kg', 'nessy13', ' 0615386694', '0615386694'),
(3, 'ปฏิภาณ', 'ทริสุข', 'cloudp', ' 0640590172za', '0640590172'),
(4, 'kritsada', ' suklot', ' arm1', ' 0845297622', ' 084529762'),
(5, 'wongsathon', ' manatawee', ' mos1', ' 0989584025', ' 098958402'),
(6, 'wongsathon', ' manatawee', ' mos1', ' 0989584025', ' 098958402');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`dpr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `dpr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `pr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
