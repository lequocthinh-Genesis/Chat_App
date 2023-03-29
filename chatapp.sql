-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 01:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(39, 1373912490, 1037533592, 'Hi'),
(40, 1037533592, 1373912490, 'Hi'),
(41, 1373912490, 1037533592, 'hi'),
(42, 1373912490, 1037533592, 'Hello'),
(43, 1037533592, 1373912490, 'How are you?'),
(44, 1037533592, 1373912490, '=))'),
(45, 1373912490, 1037533592, 'Im fine'),
(46, 1037533592, 1373912490, 'Hi'),
(47, 1079867309, 1373912490, 'Hello'),
(48, 1431817877, 1373912490, '=))))'),
(49, 1373912490, 1648779735, 'Hi'),
(50, 1648779735, 1373912490, 'hello'),
(51, 1373912490, 1648779735, 'Where are you ?'),
(52, 1648779735, 1373912490, 'I\'m from Sóc Trăng City'),
(53, 1648779735, 1373912490, 'and you'),
(54, 1648779735, 1373912490, '?'),
(55, 1373912490, 1648779735, 'I come from cần Thơ City'),
(56, 1648779735, 1037533592, 'hi'),
(57, 1037533592, 1648779735, 'ttf'),
(58, 1648779735, 1037533592, 'hghjg'),
(59, 1037533592, 1648779735, 'hjghg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `password`, `img`, `status`, `email`) VALUES
(10, 1037533592, 'Admin', ' ', '468466893aed1ac9d05e85c7c12e8dc2', '1670229606author-2.jpg', 'Không hoạt động', 'admin@gmail.com'),
(12, 1373912490, 'Lê', 'Thịnh', '202cb962ac59075b964b07152d234b70', '1670226741pic-1.png', 'Đang hoạt động', 'user1@gmail.com'),
(14, 1319769446, 'Phong', 'Phạm', '202cb962ac59075b964b07152d234b70', '1670226525pic-2.png', 'Không hoạt động', 'user2@gmail.com'),
(15, 1648779735, 'Tiến', 'Nguyễn Hoàng Trọng ', '202cb962ac59075b964b07152d234b70', '1670226564pic-5.png', 'Không hoạt động', 'user3@gmail.com'),
(16, 1378688296, 'Phúc', 'Đặng Văn', '202cb962ac59075b964b07152d234b70', '1670226596pic-3.png', 'Không hoạt động', 'user4@gmail.com'),
(17, 1431817877, 'Nam', 'Nguyễn', '202cb962ac59075b964b07152d234b70', '1670226628pic-4.png', 'Không hoạt động', 'user5@gmail.com'),
(18, 1079867309, 'Sang', 'Trần Minh', '202cb962ac59075b964b07152d234b70', '1670226670author-4.jpg', 'Không hoạt động', 'user6@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
