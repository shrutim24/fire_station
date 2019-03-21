-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 05:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `firestations`
--

CREATE TABLE `firestations` (
  `location` varchar(20) NOT NULL,
  `contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firestations`
--

INSERT INTO `firestations` (`location`, `contact`) VALUES
('Borivali', 2147483647),
('Goregaon', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `post` varchar(250) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post`, `time`) VALUES
(1, '\"Fire at Oberoi Mall\"', '2019-03-16 19:43:10'),
(2, '\"Volunteers please reach for rescue operation\"', '2019-03-16 19:43:10'),
(3, '\"20 people rescued\"', '2019-03-16 19:44:18'),
(4, '\"5 people are taken to the nearby hospital\"', '2019-03-16 19:44:18'),
(5, 'Fire at Goregaon', '2019-03-16 22:31:22'),
(6, '50 people evacuated', '2019-03-16 22:31:22'),
(7, 'Fire at Dwarkadas J. Sanghvi College', '2019-03-16 22:33:22'),
(8, 'Volunteers reach LifeCare Hospital', '03/16/2019 06:05:45 pm'),
(9, 'Fire at Andheri', '03/17/2019 03:25:22 am'),
(10, 'Fire at Bandra', '03/17/2019 03:33:41 am');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`username`, `password`, `name`, `contact`, `address`) VALUES
('trusha06', 'trusha', 'Trusha', '9930564305', 'Goregaon'),
('riddhi12', 'Riddhi12!!', 'Riddhi', '9594514450', 'Goregaon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
