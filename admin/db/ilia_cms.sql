-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2019 at 07:20 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilia_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(64) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `summary` text CHARACTER SET utf8,
  `body` text CHARACTER SET utf8,
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `views` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(32) NOT NULL DEFAULT 'user',
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `family` varchar(64) DEFAULT NULL,
  `gender` enum('female','male') DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `mobile` varchar(64) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email`, `password`, `name`, `family`, `gender`, `image`, `mobile`, `address`, `status`, `created_at`) VALUES
(1, 'user', 'mirzaei.mahdi74@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mohammad', 'Mirzaei', 'male', NULL, '09364548583', NULL, 1, '2019-01-03 19:40:15'),
(2, 'user', 'miadfja@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Morteza', 'Hosseini', 'male', NULL, '09356987412', NULL, 1, '2019-01-03 19:40:15'),
(3, 'user', 'teimooryn93@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Najme', 'Teimoory', 'female', NULL, '09130120394', NULL, 1, '2019-01-03 19:40:15'),
(6, 'user', 'yaghoubit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Tahereh', 'Yaghoubi', 'female', NULL, '09109923984', NULL, 1, '2019-01-03 19:40:15'),
(7, 'user', 'rambodjavan@gamil.com', 'e10adc3949ba59abbe56e057f20f883e', 'Narges', 'Taheri', 'female', NULL, '09121111000', NULL, 1, '2019-01-03 19:40:15'),
(8, 'user', 'mofjdiafa@gmial.coam', 'e10adc3949ba59abbe56e057f20f883e', 'Morteza', 'Hosseini', 'male', NULL, '09124569874', NULL, 1, '2019-01-03 19:40:15'),
(9, 'user', 'mohammad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mohmmad', 'Vafaie', 'male', NULL, '09123454634', NULL, 1, '2019-01-03 19:40:15'),
(10, 'user', 'hghasemi1717@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hassan', 'Ghasemi', 'male', NULL, '09384710161', NULL, 1, '2019-01-03 19:40:15'),
(11, 'user', 'morteza7ronaldo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Morteza', 'Hosseini', 'male', NULL, '09124569874', NULL, 1, '2019-01-03 19:40:15'),
(13, 'user', 'm.akbari@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Maryam', 'Akbari', 'female', NULL, '09215639521', NULL, 1, '2019-01-03 19:40:15'),
(14, 'user', 'mortezahezareh555@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Morteza', 'Hezareh', 'male', NULL, '09381596901', NULL, 1, '2019-01-03 19:40:15'),
(15, 'user', 'alih@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ali', 'Hosseini', 'male', NULL, '09123154542', NULL, 1, '2019-01-03 19:40:15'),
(17, 'user', 'roshan@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hadi', 'Roshani', 'male', NULL, '09125465450', NULL, 1, '2019-01-03 19:40:15'),
(18, 'user', 'morezah@gamil.com', 'e10adc3949ba59abbe56e057f20f883e', 'Morteza', 'Hosseini', 'male', NULL, '09107894512', NULL, 1, '2019-01-03 19:40:15'),
(19, 'user', 'maryam.gexo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Maryam', 'Ghasemi', 'female', NULL, '09303999225', NULL, 1, '2019-01-03 19:40:15'),
(20, 'user', 'hakan_ezmin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hakan', 'Ezmiri', 'male', NULL, '09366543222', NULL, 1, '2019-01-03 19:40:15'),
(21, 'user', 'mostafa.m@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mostafa', 'Jafari', 'male', NULL, '09352456987', NULL, 1, '2019-01-03 19:40:15'),
(22, 'user', 'najibollah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Najibollah', 'Bagheri', 'male', NULL, '09365552248', NULL, 1, '2019-01-03 19:40:15'),
(23, 'user', 'morteza@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Morteza', 'Hezareh', 'male', NULL, '09129927815', NULL, 1, '2019-01-03 19:40:15'),
(24, 'user', 'alijafari@chapar.ir', 'e10adc3949ba59abbe56e057f20f883e', 'Ali', 'Jafari', 'male', NULL, '09380820959', NULL, 1, '2019-01-03 19:40:15'),
(25, 'user', 'alijafari0938@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ali', 'Jafari', 'male', NULL, '09198811746', NULL, 1, '2019-01-03 19:40:15'),
(26, 'user', 'soheilasharifi555@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Soheila', 'Hosseini', 'female', NULL, '09357911545', NULL, 1, '2019-01-03 19:40:15'),
(27, 'user', 'vahid@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vahid', 'Moradi', 'female', NULL, '09104578956', NULL, 1, '2019-01-03 19:40:15'),
(28, 'user', 'habibi.masoumeh7@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Masoumeh', 'Habibi', 'female', NULL, '09379880205', NULL, 1, '2019-01-03 19:40:15'),
(29, 'user', 'aylar_botasch@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Aylar', 'Ghasemi', 'male', NULL, '09368536689', NULL, 1, '2019-01-03 19:40:15'),
(30, 'user', 'madam@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ali', 'Madadi', 'male', NULL, '09199787125', NULL, 1, '2019-01-03 19:40:15'),
(31, 'user', 'vahidmoradi@moradi.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vahid', 'Moradi', 'male', NULL, '09391234560', NULL, 1, '2019-01-03 19:40:15'),
(32, 'user', 'babakzanjani@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mina', 'Zanjani', 'male', NULL, '09014568712', NULL, 1, '2019-01-03 19:40:15'),
(33, 'user', 'm.m2546@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Misaq', 'Momeni', 'male', NULL, '09375895454', NULL, 1, '2019-01-03 19:40:15'),
(34, 'user', 'habib@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Habib', 'Hosseini', 'female', NULL, '09214578965', NULL, 1, '2019-01-03 19:40:15'),
(35, 'user', 'ramos@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sergio', 'Ramos', 'male', NULL, '09014568712', NULL, 1, '2019-01-03 19:40:15'),
(36, 'user', 'changiz@gmila.om', 'e10adc3949ba59abbe56e057f20f883e', 'Changiz', 'Taheri', 'male', NULL, '09031245689', NULL, 1, '2019-01-03 19:40:15'),
(37, 'user', 'mina.gh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mina', 'Ghasemi', 'female', NULL, '09154578963', NULL, 1, '2019-01-03 19:40:15'),
(38, 'user', 'asdfa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sadegh', 'Jafari', 'male', NULL, '09105646513', NULL, 1, '2019-01-03 19:40:15'),
(39, 'user', 'saeedtosi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Saeed', 'Toosi', 'male', NULL, '09132456978', NULL, 1, '2019-01-03 19:40:15'),
(40, 'user', 'holaco@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Holaco', 'Khan', 'male', NULL, '09124567896', NULL, 1, '2019-01-03 19:40:15'),
(41, 'user', 'atefeh_hoseini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Atefeh', 'Hosseini', 'female', NULL, '09381234567', NULL, 1, '2019-01-03 19:40:15'),
(42, 'user', 'zahra.jafari@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Zahra', 'Jafari', 'female', NULL, '09012145698', NULL, 1, '2019-01-03 19:40:15'),
(43, 'user', 'najibollah@asd.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vahid', 'Moradi', 'male', NULL, '09125544556', NULL, 1, '2019-01-03 19:40:15'),
(44, 'user', 'asdf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hadi', 'Khavari', 'male', NULL, '09152353542', NULL, 1, '2019-01-03 19:40:15'),
(45, 'user', 'narges@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Narges', 'Taheri', 'male', NULL, '09124578965', NULL, 1, '2019-01-03 19:40:15'),
(46, 'user', 'alirezaee@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ali', 'Rezaee', 'male', NULL, '09012238775', NULL, 1, '2019-01-03 19:40:15'),
(47, 'user', 'saeed@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Saeed', 'Alizade', 'male', NULL, '09363214569', NULL, 1, '2019-01-03 19:40:15'),
(48, 'user', 'mazari@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Babe\r\n', 'Mazari', 'male', NULL, '09124578965', NULL, 1, '2019-01-03 19:40:15'),
(49, 'user', 'mostafa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mostafa', 'Mostafae', 'male', NULL, '09125465401', NULL, 1, '2019-01-03 19:40:15'),
(50, 'user', 'mostafa_faqiri@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mostafa', 'Faqiri', 'male', NULL, '09397294984', NULL, 1, '2019-01-03 19:40:15'),
(51, 'user', 'mammmad@gmial.com\r\n', 'e10adc3949ba59abbe56e057f20f883e', 'Mammmad', 'Mahmoodi', 'male', NULL, '09036547896', NULL, 1, '2019-01-03 19:40:15'),
(52, 'user', 'atefe@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Atefe', 'Mirzaei', 'female', NULL, '09034455784', NULL, 1, '2019-01-03 19:40:15'),
(53, 'user', 'jafar@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Jafar', 'Jafari', 'male', NULL, '09325154345', NULL, 1, '2019-01-03 19:40:15'),
(54, 'user', 'maryam.pashaee@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Maryam', 'Pashaee', 'male', NULL, '09277665544', NULL, 1, '2019-01-03 19:40:15'),
(55, 'user', 'ali.akbari@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ali', 'Akbari', 'male', NULL, '09423574267', NULL, 1, '2019-01-03 19:40:15'),
(56, 'user', 'anne@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Anne', 'Sherli', 'female', NULL, '09134561987', NULL, 1, '2019-01-03 19:40:15'),
(57, 'user', 'kimaighasemi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Kimia', 'Ghasemi', 'male', NULL, '09187766554', NULL, 1, '2019-01-03 19:40:15'),
(58, 'user', 'shar@yahoo.com\r\n', 'e10adc3949ba59abbe56e057f20f883e', 'Mehrshid', 'Habibi', 'female', NULL, '09164578965', NULL, 1, '2019-01-03 19:40:15'),
(59, 'user', 'mamad.ahmadi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mohammad', 'Ahmadi', 'male', NULL, '09343336463', NULL, 1, '2019-01-03 19:40:15'),
(60, 'user', 'mhadi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mahdi', 'Yasini', 'male', NULL, '09126666664', NULL, 1, '2019-01-03 19:40:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
