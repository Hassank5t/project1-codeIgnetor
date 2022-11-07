-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2022 at 06:25 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_body` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_user_id`, `project_name`, `project_body`, `date_created`) VALUES
(7, 18, 'html', 'frontend lang', '2022-11-07 07:20:10'),
(8, 18, 'css', 'for styling', '2022-11-07 07:20:17'),
(27, 18, 'javascript', 'frontend lang', '2022-11-07 07:45:28'),
(29, 18, 'laravel', 'backend lang', '2022-11-07 07:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(1) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `active`, `register_date`, `username`, `password`) VALUES
(16, 'Usama', 'Ahmad', 'teacher@schoolsystem.com', 0, '2022-10-29 05:59:28', 'uahmed', '$2y$12$unTywgGEez35TAdbVwrfEeNVN9KYx2P/XpThCnvarClQtrblG5uHW'),
(17, 'Tuheed', 'Irfan', 'student@schoolsystem.com', 0, '2022-10-29 09:33:10', 'tuheed', '$2y$12$juqWN8Jb2KmvouEc74ssx.SyAuX3VqDIeNOI7yPasRXP2VGxm7VTW'),
(18, 'Hassan', 'Khalid', 'hassankhalid2227@gmail.com', 0, '2022-10-29 10:42:34', 'Hassan', '$2y$12$bAOQ5yz7t1RFuxxMpJcaMO8inyUCn.JdMPwQLZo/uL2pMqeSfHYlO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
