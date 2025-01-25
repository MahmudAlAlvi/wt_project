-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 05:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_place` varchar(255) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`, `event_time`, `event_place`, `event_type`, `amount`) VALUES
(1, 'Joy Bangla Music Fest 2024', '2024-03-26', '18:00:00', 'Army Stadium', 'Music', 500),
(2, 'Music Fest Concert 2024', '2024-03-31', '20:00:00', 'ICCB EXPO ZONE', 'Music', 0),
(3, 'Business Conference on Building Smart Bangladesh', '2024-04-10', '11:00:00', 'Bangabandhu International Conference Center', 'Business', 0),
(4, 'Textile Sourcing Meet', '2024-04-01', '12:00:00', 'International Convention City Bashundhara (ICCB)\r\n', 'Business', 0),
(5, 'Tech Expo Bangladesh 2024', '2024-05-15', '15:30:00', 'International Convention City Bashundhara (ICCB)', 'Business', 0),
(15, 'iftar', '2024-03-04', '16:00:00', 'aiub', 'closed group', 350),
(16, 'food', '2024-05-08', '15:00:00', 'mirpur', 'outdoor', 500),
(17, 'Adda', '2024-05-04', '21:00:00', 'vhanga', 'reunion', 200);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `PASSWORD`, `email`, `usertype`) VALUES
(5, 'admin', 'admin123', 'ahmedmustakim031@gmail.com', 'admin'),
(16, 'a', '1', 'ohi@gmail.com', 'admin'),
(19, 'mustakim', '1234', 'seriouscrazysam@gmail.com', 'host'),
(21, 'kazi redwan', 'Mang0BANI!', 'redwan.stu@gmail.com', 'customer'),
(22, 'akkas uddin', 'Shim@nt0!', 'akkas@gmail.com', 'host');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `amount` int(50) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `bkash_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`amount`, `event_name`, `bkash_number`) VALUES
(200, 'Joy Bangla Music Fest 2024', '01632383285'),
(350, 'Tech Expo Bangladesh 2024', '01632383281'),
(500, 'fest', '01632383284'),
(1000, 'iftar', '01632383283');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship_details`
--

CREATE TABLE `sponsorship_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `reference` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `sponsor_for` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsorship_details`
--

INSERT INTO `sponsorship_details` (`id`, `company_name`, `address`, `details`, `reference`, `contact_number`, `sponsor_for`, `email`) VALUES
(1, 'vector', '221-b baker street', '', 'Mr mangobani', '01677664780', 'Iftar party', 'somew@gmail.com'),
(7, 'ajax', 'kuratoli', 'katana company', 'sword', '01366778831', 'sword', 'sword@gmail.com'),
(46, 'asdsad', 'asd', 'asd', 'asdsda', '123123123', 'asd', 'nayemgasf@gmail.com'),
(47, 'ajax22', 'kuratoli', 'adasd', 'Mr Mango-bani', '01123012331', 'party', 'party@gmail.com'),
(48, 'Casio', '323/abc street', 'A calculator making company', 'Casio Calculator', '0555222111', 'Math Olympaid', 'Casio@gmail.com'),
(49, 'Shebly and Co', 'Kumilla', 'Accountant consultancy', 'Ami shebly Rahman', '01633224780', 'Adda', 'amisheblyrahman@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ticketsells`
--

CREATE TABLE `ticketsells` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `ticket_type` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount_coupon` varchar(255) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticketsells`
--

INSERT INTO `ticketsells` (`id`, `customer_name`, `event_name`, `ticket_type`, `quantity`, `discount_coupon`, `username`) VALUES
(1, 'H. R. Masum', 'Tech Expo Bangladesh 2024', 'General Pass', 1, '', 'hrm99'),
(2, 'Masum', 'Business Conference on Building Smart Bangladesh', 'General Pass', 1, '', 'hrm67'),
(9, 'H R M', 'Joy Bangla Music Fest 2024', 'VIP Pass', 2, '', NULL),
(10, 'Masum', 'Music Fest Concert 2024', 'General Pass', 3, 'DMRS50', NULL),
(11, 'H. R. Masum', 'Music Fest Concert 2024', 'VIP Pass', 2, '', 'hrm99'),
(14, 'Masum', 'Textile Sourcing Meet', 'General Pass', 1, '', 'hrm67'),
(15, 'H. R. Masum', 'Music Fest Concert 2024', 'General Pass', 1, '', 'hrm99'),
(16, 'H. R. Masum', 'Tech Expo Bangladesh 2024', 'VIP Pass', 1, '', 'hrm99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`bkash_number`),
  ADD KEY `amount` (`amount`,`event_name`);

--
-- Indexes for table `sponsorship_details`
--
ALTER TABLE `sponsorship_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketsells`
--
ALTER TABLE `ticketsells`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sponsorship_details`
--
ALTER TABLE `sponsorship_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ticketsells`
--
ALTER TABLE `ticketsells`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
