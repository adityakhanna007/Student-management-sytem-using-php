-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 07:17 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'hack');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES
('', '', 0, ''),
('', '', 0, ''),
('ADITYA KHANNA', 'adityakhanna2009@gmail.com', 7042216969, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Teacher` varchar(100) NOT NULL,
  `Credits` bigint(12) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `Subject`, `Teacher`, `Credits`, `edit`) VALUES
(1, 'DSA', 'KAMALDEEP KAUR', 3, ''),
(2, 'ACS', 'ASHISH RAMAN', 4, ''),
(3, 'EMI', 'SOUTH MAAM', 4, ''),
(4, 'EMFT', 'TURBAN MAN', 4, ''),
(5, 'MATH(III)', 'JASPAL SINGH', 4, ''),
(6, 'AIC', 'UNKNOWN', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `down`
--

CREATE TABLE `down` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `down`
--

INSERT INTO `down` (`id`, `file`) VALUES
(1, 'doc1.pdf'),
(6, 'a report of the Web Development Training.doc');

-- --------------------------------------------------------

--
-- Table structure for table `ece_faculty`
--

CREATE TABLE `ece_faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dp` varchar(10000) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `qualification` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ece_faculty`
--

INSERT INTO `ece_faculty` (`id`, `name`, `dp`, `designation`, `department`, `qualification`, `address`, `phone`, `email`, `fax`) VALUES
(1, 'Dr R K Sarin', 'http://www.nitj.ac.in/images/faculty/18030547188.jpg', 'Professor', 'Electronics and Comm.  Engg.', 'PhD Semiconductors (Academy of Sciences of the USSR)\r\nME ECE (UOR Roorkee)\r\nBSc Engg. ECE (REC Kurukshetra)ME ECE (UOR Roorkee)\r\nBSc Engg. ECE (REC Kuruk\r\n', '  AA-3 NIT Camus\r\n', 0, 'sarinrk@nitj.ac.in', ''),
(2, 'Dr Sukwinder Singh ', 'http://www.nitj.ac.in/images/faculty/18012214350.jpg', 'Assistant Professor ', 'Electronics and Comm.  Engg.', 'Guru Amar Dass Nagar\r\nJalandhar(Punjab) - 144008\r\n\r\n', '', 0, 'sukwinders@nitj.ac.in', ''),
(3, 'Dr Neetu Sood', 'http://www.nitj.ac.in/images/faculty/18011784442.jpg', 'Assistant Professor ', 'Assistant Professor', 'PhD Electronics and Communication Engineering (Dr B R Ambedkar National Institute of Technology, Jalandhar)\r\nM.E. Electronics and Communication Engineering (Thapar Institute of Engineering and Technology, Patiala)\r\nB.E. Electronics and Communication Engineering (Sant Longowal Institute of Engineering and Technology)', 'Department of Electronics and Communication Enggineering\r\nDr B R Ambedkar National Institute of Technology, \r\nJalandhar(Punjab) - 144011', 1812690301, 'soodn@nitj.ac.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `f` varchar(255) NOT NULL,
  `t` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `viewed` int(11) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `file` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `f`, `t`, `message`, `viewed`, `subject`, `file`) VALUES
(23, 'aditya', 'skd', 'hel', 1, 'file', 'aditya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tt`
--

CREATE TABLE `tt` (
  `day` varchar(100) NOT NULL,
  `one` varchar(100) NOT NULL,
  `two` varchar(100) NOT NULL,
  `three` varchar(100) NOT NULL,
  `four` varchar(100) NOT NULL,
  `five` varchar(100) NOT NULL,
  `six` varchar(100) NOT NULL,
  `seven` varchar(100) NOT NULL,
  `eight` varchar(100) NOT NULL,
  `nine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt`
--

INSERT INTO `tt` (`day`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`) VALUES
('MON', '', '', '', '', '', 'DSA', 'EMI', 'EMFT', 'M-III'),
('TUE', 'EMFT(T)', 'M-III(T)', '', '', '', 'ACS', 'DSA', 'EMI', 'EMFT'),
('WED', 'EMI LAB', 'EMI LAB', 'ACS(T)', 'AIC(T)', '', 'AIC', 'ACS', '', 'EMI'),
('THU', 'DE LAB', 'DE LAB', 'AIC LAB', 'AIC LAB', '', 'M-III', 'AIC', 'ACS', ''),
('FRI', 'DSA LAB', 'DSA LAB', 'ACS LAB', 'ACS LAB', '', 'EMFT', 'M-III', 'AIC', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `dp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `phone`, `dp`) VALUES
(1, 'aditya', 'khanna', 'aditya', 'sasuke', 'adityakhanna2009@gmail.com', 7042216969, 'aditya.jpg'),
(2, 'surender', 'dabur', 'skd', 'hack', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `down`
--
ALTER TABLE `down`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ece_faculty`
--
ALTER TABLE `ece_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `down`
--
ALTER TABLE `down`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ece_faculty`
--
ALTER TABLE `ece_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
