-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 11:06 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cimpressblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `postdata` text NOT NULL,
  `posttitle` varchar(150) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `postdata`, `posttitle`, `created_at`) VALUES
(1, 1, 'This is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test postThis is a test post', 'Java JVM', '2018-02-03'),
(2, 2, 'Cimpres test cimpress testCimpres test cimpress testCimpres test cimpress testCimpres test cimpress test', 'It should work', '2018-02-03'),
(3, 1, 'Players wrestling', 'WWE', '2018-02-03'),
(4, 1, 'test adsfasdf', 'test', '2018-02-03'),
(5, 1, 'This is a test funda', 'Programming fundas', '2018-02-03'),
(6, 1, 'Mercedes\r\nPorsche', 'Cars', '2018-02-03'),
(7, 1, 'This is red bottle', 'Bottles', '2018-02-03'),
(10, 1, 'This is a brand new offer', 'Todays offer', '2018-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `usertype` int(1) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `usertype`, `created_at`) VALUES
(1, 'test', 'cc03e747a6afbbcbf8be7668acfebee5', 'Test', 'Test', 1, '2018-02-03'),
(3, 'admin', '0192023a7bbd73250516f069df18b500', 'Admin', 'User', 2, '2018-02-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
