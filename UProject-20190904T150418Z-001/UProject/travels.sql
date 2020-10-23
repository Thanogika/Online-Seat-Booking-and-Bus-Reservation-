-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 01:10 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `nic`, `phone`, `email`, `username`, `password`, `address`) VALUES
(1, 'roch', 'dani', '5667778890v', 778967543, 'dani@gmail.com', 'dani', 'dani', 'anaicoddai'),
(3, 'hjh', 'm', 'm', 555, 'hj', 'jjkkk', 'cb42e130d1471239a27fca6228094f0e', 'kk');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(50) NOT NULL,
  `from_station` varchar(50) NOT NULL,
  `to_station` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `bus_no` int(255) NOT NULL,
  `bus_type` varchar(3) NOT NULL,
  `no_of_seats` int(3) NOT NULL,
  `seat_no` int(11) NOT NULL,
  `paid_amount` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `from_station`, `to_station`, `booking_date`, `bus_no`, `bus_type`, `no_of_seats`, `seat_no`, `paid_amount`) VALUES
(3, 'jaffna', 'trinco', '2019-06-25', 0, '', 3, 34, '700');

-- --------------------------------------------------------

--
-- Table structure for table `busdetail`
--

CREATE TABLE `busdetail` (
  `bus_id` int(11) NOT NULL,
  `bus_no` int(11) NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `bus_type` varchar(3) NOT NULL,
  `from_station` varchar(20) NOT NULL,
  `destination_station` varchar(20) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `amount` int(50) NOT NULL,
  `photo` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busdetail`
--

INSERT INTO `busdetail` (`bus_id`, `bus_no`, `no_of_seats`, `bus_type`, `from_station`, `destination_station`, `start_time`, `end_time`, `amount`, `photo`) VALUES
(1, 123, 50, 'AC', 'badulla', 'jaffna', '07:00:00', '00:00:00', 500, NULL),
(2, 45, 76, 'Ac', 'Jaffna', 'Badhulla', '22:00:00', '23:00:00', 600, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `subject`, `feedback`) VALUES
(4, 'sinthuja', 'check', 'very long time \ntry hard'),
(5, 'archi', 'complain', 'Bad service\n');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `descripe` varchar(500) NOT NULL,
  `photo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `descripe`, `photo`) VALUES
(1, 'bus services', 'bus services of dilmi bus service stoped tomorrow due to some condition.', 'http://pngimg.com/uploads/bus/bus_PNG8630.png'),
(3, 'new services', 'new facilities are added to the bus.', 'http://jaisonjoy.com/image/man.png'),
(5, 'important ', 'bus services delayed for today', 'http://jaisonjoy.com/image/male.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `email`, `photo`) VALUES
(1, 'Jaison Joy', 'roch33322@mail.com', 'http://pngimg.com/uploads/bus/bus_PNG8630.png'),
(2, 'Vini', 'archi232ew@gmail.com', 'http://jaisonjoy.com/image/man.png'),
(3, 'John', 'thano34223@gmail.com', 'http://jaisonjoy.com/image/male.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(12) NOT NULL,
  `bustype` enum('Ac','Non Ac','','') NOT NULL,
  `from_station` varchar(100) NOT NULL,
  `journey_date` date NOT NULL,
  `journey_time` time NOT NULL,
  `to_station` varchar(100) NOT NULL,
  `people` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `bustype`, `from_station`, `journey_date`, `journey_time`, `to_station`, `people`, `day`, `price`, `phone`) VALUES
(7, 'Ac', 'jaffna ', '0000-00-00', '17:00:00', 'baddhula ', 6, 6, '60000', 775009764),
(8, 'Ac', 'jaffna ', '2019-06-14', '16:07:00', 'badulla', 6, 6, '60000', 777500966),
(9, 'Ac', 'Jaffna ', '2019-06-21', '16:32:00', 'Badulla', 6, 6, '60000', 774003562);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_no` int(11) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `availabilityTwo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `seat_no`, `availability`, `availabilityTwo`) VALUES
(1, 1, 0, 1),
(2, 2, 1, 0),
(3, 3, 0, 0),
(4, 4, 0, 0),
(5, 5, 1, 0),
(6, 6, 0, 0),
(7, 7, 0, 0),
(8, 8, 0, 0),
(9, 9, 0, 0),
(10, 10, 0, 0),
(11, 11, 0, 0),
(12, 12, 0, 0),
(13, 13, 1, 1),
(14, 14, 1, 1),
(15, 15, 0, 0),
(16, 16, 0, 0),
(17, 17, 0, 0),
(18, 18, 0, 0),
(19, 19, 0, 0),
(20, 20, 0, 0),
(21, 21, 0, 0),
(22, 22, 0, 0),
(23, 23, 0, 0),
(24, 24, 1, 1),
(25, 25, 1, 1),
(26, 26, 0, 0),
(27, 27, 0, 0),
(28, 28, 0, 0),
(29, 29, 0, 0),
(30, 30, 0, 0),
(31, 31, 0, 0),
(32, 32, 0, 0),
(33, 33, 0, 0),
(34, 14, 1, 1),
(35, 35, 0, 0),
(36, 36, 0, 0),
(37, 37, 0, 0),
(38, 38, 0, 0),
(39, 39, 0, 0),
(40, 40, 0, 0),
(41, 41, 0, 0),
(42, 42, 0, 0),
(43, 43, 0, 0),
(44, 44, 0, 0),
(45, 45, 0, 0),
(46, 46, 0, 0),
(47, 47, 0, 0),
(48, 48, 0, 0),
(49, 49, 0, 0),
(50, 50, 0, 0),
(51, 51, 0, 0),
(52, 52, 0, 0),
(53, 53, 0, 0),
(54, 54, 0, 0),
(55, 55, 0, 0),
(56, 56, 0, 0),
(57, 57, 0, 0),
(58, 58, 0, 0),
(59, 59, 1, 1),
(60, 60, 1, 1),
(61, 61, 1, 1),
(62, 62, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seatReserve`
--

CREATE TABLE `seatReserve` (
  `id` int(11) NOT NULL,
  `booked` varchar(500) NOT NULL,
  `bookedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatReserve`
--

INSERT INTO `seatReserve` (`id`, `booked`, `bookedDate`) VALUES
(0, '15', '2019-07-18'),
(0, '16', '2019-07-18'),
(0, '47', '2019-07-18'),
(0, '48', '2019-07-18'),
(0, '35', '2019-07-18'),
(1, '47', '2019-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `nic`, `email`, `username`, `password`) VALUES
(8, 'Archi', 'Kumaraswamy', '787878789v', 'archikumaraswamy1996@gmail.com', 'thano', 'thano'),
(6, 'Thano', 'Logan', '957673443V', 'thanogika95@gmail.com', 'sinthu', 'sinthu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `user_level` varchar(30) NOT NULL DEFAULT 'cus'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `user_email`, `user_password`, `nic`, `user_level`) VALUES
(1, 'sinthuja', 'sinthuja', 'Sinthu@gmail.com', 'sinthu', '', 'cus'),
(2, 'archi', 'archi', 'archi@gmail.com', 'archi', '', 'cus'),
(3, 'thano', 'thanno', 'thano@gmail.com', 'thano', '', 'stf'),
(4, 'rochu', 'dani', 'dani45@gmail.com', 'danii', '0853265986', 'cus'),
(6, 'test', 'test', 'test@gmail.com', '123', '', 'cus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD UNIQUE KEY `id` (`booking_id`);

--
-- Indexes for table `busdetail`
--
ALTER TABLE `busdetail`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `busdetail`
--
ALTER TABLE `busdetail`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
