-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 04:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management_project`
--
CREATE DATABASE IF NOT EXISTS `hotel_management_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hotel_management_project`;

-- --------------------------------------------------------

--
-- Table structure for table `accomodation_guest_address`
--

CREATE TABLE `accomodation_guest_address` (
  `Guest_id` int(3) NOT NULL,
  `City` varchar(250) NOT NULL,
  `Nationality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation_guest_address`
--

INSERT INTO `accomodation_guest_address` (`Guest_id`, `City`, `Nationality`) VALUES
(40, 'Chittagong', 'Bangladeshi'),
(41, 'Chittagong', 'Indian'),
(42, 'Chittagong', 'Bangladeshi'),
(43, 'Nottingham', 'English'),
(44, 'Dhaka', 'Bangladeshi');

-- --------------------------------------------------------

--
-- Table structure for table `accomodation_guest_info`
--

CREATE TABLE `accomodation_guest_info` (
  `Name` varchar(225) NOT NULL,
  `Guest_id` int(3) NOT NULL,
  `Check_in_date` varchar(20) NOT NULL,
  `Check_out_date` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation_guest_info`
--

INSERT INTO `accomodation_guest_info` (`Name`, `Guest_id`, `Check_in_date`, `Check_out_date`, `Contact`) VALUES
('Chondrima Chowdhury', 40, '10/11/16', '12/11/16', '01732383873'),
('Parama Chowdhury', 41, '10/11/16', '12/11/16', '01831318918'),
('Sazidur Rahman', 42, '10/11/16', '12/11/16', '01512187812'),
('Ahijit Chowdhury', 43, '11/11/16', '12/11/16', '01721289192'),
('Tapati Chowdhury', 44, '12/11/16', '14/11/16', '01732378782');

-- --------------------------------------------------------

--
-- Table structure for table `accomodation_guest_room`
--

CREATE TABLE `accomodation_guest_room` (
  `Guest_id` int(3) NOT NULL,
  `Room_no` int(3) NOT NULL,
  `Service_facility` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation_guest_room`
--

INSERT INTO `accomodation_guest_room` (`Guest_id`, `Room_no`, `Service_facility`) VALUES
(40, 331, 'Yes'),
(41, 331, 'Yes'),
(42, 332, 'No'),
(43, 333, 'Yes'),
(44, 331, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(220) NOT NULL,
  `Pass` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Pass`) VALUES
('chondrima.chowdhury@gmail.com', 'chondrima');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Product_id` int(3) NOT NULL,
  `Type` varchar(220) NOT NULL,
  `Rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Product_id`, `Type`, `Rate`) VALUES
(1, 'Chicken Pizza', 50),
(2, 'Beef Pizza', 60),
(3, 'Mutton Pizza', 65),
(4, 'Burgar\r\n\r\n', 50),
(5, 'Faluda	', 40),
(6, 'Drinks	', 15),
(7, 'Chicken Roll	', 50),
(8, 'Rajshahi Sweet	\r\n', 40);

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `Guest_id` int(3) NOT NULL,
  `Product_id` int(3) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`Guest_id`, `Product_id`, `Quantity`, `Date`) VALUES
(40, 1, 1, '10/11/16'),
(41, 2, 2, '12/11/16'),
(40, 3, 2, '10/11/16'),
(43, 5, 1, '11/12/16'),
(44, 6, 1, '12/11/16'),
(41, 5, 2, '13/10/16'),
(40, 2, 5, '10/11/16'),
(40, 2, 4, '12/11/16'),
(43, 5, 1, '11/21/16'),
(40, 6, 1, '12/11/16'),
(40, 0, 0, '12/11/16'),
(40, 6, 1, ''),
(43, 5, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `online_booking`
--

CREATE TABLE `online_booking` (
  `Name` varchar(220) NOT NULL,
  `Room_Type` int(3) NOT NULL,
  `Num_of_Room` int(2) NOT NULL,
  `Num_of_Person` int(2) NOT NULL,
  `Num_of_Child` int(2) NOT NULL,
  `Special_Request` text NOT NULL,
  `Check_in_date` varchar(15) NOT NULL,
  `Check_out_date` varchar(15) NOT NULL,
  `Contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_booking`
--

INSERT INTO `online_booking` (`Name`, `Room_Type`, `Num_of_Room`, `Num_of_Person`, `Num_of_Child`, `Special_Request`, `Check_in_date`, `Check_out_date`, `Contact`) VALUES
('Ahijit Chowdhury', 0, 1, 1, 0, 'No', '19/11/16', '23/11/16', '01971736763'),
('Chondrima Chowdhury', 0, 1, 1, 0, 'No', '19/09/16', '21/09/16', '01713917447'),
('Parama Chowdhury', 0, 2, 5, 0, 'No', '19/09/16', '21/09/16', '01713917447'),
('Sazidur Rahman', 0, 2, 5, 0, 'No', '10/09/16', '21/09/16', '01798954533'),
('Sharad Chowdhury', 0, 1, 1, 0, 'No', '19/09/16', '22/11/16', '01823238478');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Name` varchar(220) NOT NULL,
  `Username` varchar(220) NOT NULL,
  `Password` varchar(220) NOT NULL,
  `Gender` varchar(220) NOT NULL,
  `Date` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Username`, `Password`, `Gender`, `Date`) VALUES
('Ami Biswash', 'Ami', 'ami', 'male', '10/11/16'),
('Chondrima Chowdhury', 'Chondrima', 'chondrima', 'male', '09/11/2016');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Sl_no` int(3) NOT NULL,
  `Category` varchar(220) NOT NULL,
  `Rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Sl_no`, `Category`, `Rate`) VALUES
(1, 'Valet', 1500),
(2, 'Tea and Coffee', 60),
(3, 'Internet', 250),
(4, 'Telephone', 10),
(5, 'Newspaper', 10),
(6, 'Car services', 5500),
(7, 'Laundry', 15),
(8, 'Bus services', 750),
(9, 'Parking', 40),
(10, 'Beauty Parlour', 300);

-- --------------------------------------------------------

--
-- Table structure for table `services_order`
--

CREATE TABLE `services_order` (
  `Guest_id` int(3) NOT NULL,
  `Sl_no` int(3) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_order`
--

INSERT INTO `services_order` (`Guest_id`, `Sl_no`, `Quantity`, `Date`) VALUES
(40, 5, 1, '10/11/16'),
(41, 2, 1, '12/11/16'),
(42, 5, 1, '10/11/16'),
(43, 5, 1, '11/12/16'),
(44, 7, 5, '12/11/16'),
(43, 4, 2, ''),
(43, 5, 2, '12/11/16'),
(44, 4, 2, '13/10/16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation_guest_address`
--
ALTER TABLE `accomodation_guest_address`
  ADD PRIMARY KEY (`Guest_id`);

--
-- Indexes for table `accomodation_guest_info`
--
ALTER TABLE `accomodation_guest_info`
  ADD PRIMARY KEY (`Guest_id`);

--
-- Indexes for table `accomodation_guest_room`
--
ALTER TABLE `accomodation_guest_room`
  ADD PRIMARY KEY (`Guest_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `online_booking`
--
ALTER TABLE `online_booking`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Sl_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
