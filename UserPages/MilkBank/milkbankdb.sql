-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 11:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milkbankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Access_ID` int(11) NOT NULL,
  `Users_FirstName` varchar(50) NOT NULL,
  `Users_MiddleName` varchar(50) NOT NULL,
  `Users_LastName` varchar(50) NOT NULL,
  `Users_Email` varchar(50) NOT NULL,
  `Users_Username` varchar(50) NOT NULL,
  `Users_Password` varchar(50) NOT NULL,
  `Users_Age` int(11) DEFAULT NULL,
  `Users_Gender` char(1) NOT NULL,
  `Users_Validation` varchar(11) DEFAULT NULL,
  `Users_Validation_Expiry` date DEFAULT NULL,
  `Users_PhoneNumber` varchar(50) NOT NULL,
  `Users_Address` varchar(50) DEFAULT NULL,
  `Users_Birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Access_ID`, `Users_FirstName`, `Users_MiddleName`, `Users_LastName`, `Users_Email`, `Users_Username`, `Users_Password`, `Users_Age`, `Users_Gender`, `Users_Validation`, `Users_Validation_Expiry`, `Users_PhoneNumber`, `Users_Address`, `Users_Birthdate`) VALUES
(1, 1, 'asd', '', 'asd', 'asd@asdasd.com', 'mac20202', 'asdasd', 21, 'm', '', NULL, '091074', NULL, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Access_ID` (`Access_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Access_ID`) REFERENCES `permission` (`Access_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
