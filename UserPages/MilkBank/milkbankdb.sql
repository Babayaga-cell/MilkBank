-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 09:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_ID` int(50) NOT NULL,
  `Contact_Name` varchar(50) NOT NULL,
  `Contact_Email` varchar(50) NOT NULL,
  `Contact_Subject` varchar(50) NOT NULL,
  `Contact_Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Contact_ID`, `Contact_Name`, `Contact_Email`, `Contact_Subject`, `Contact_Message`) VALUES
(1, 'Kent Aquino', 'aquinokl@students.national-u.edu.ph', '123123', '123'),
(2, 'Molly', 'mollyandrews@gmail.com', 'eojfsipef', 'asdasd'),
(3, 'Robert', 'robert09@gmail.com', 'ufhuffwafw', 'yjhwuyhe'),
(4, 'tim', 'timmy76@gmail.com', 'colostrum milk', 'I need colostrum milk for my baby. How many bottle');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Donor_ID` int(50) NOT NULL,
  `User_ID` int(50) NOT NULL,
  `Donate_Spouse` varchar(50) NOT NULL,
  `Donate_DaysGiveBirth` date NOT NULL,
  `Donate_Reason` varchar(50) NOT NULL,
  `Hospital_Choice1` varchar(50) NOT NULL,
  `Number_Bottles1` varchar(50) NOT NULL,
  `Hospital_Choice2` varchar(50) NOT NULL,
  `Number_Bottles2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Donor_ID`, `User_ID`, `Donate_Spouse`, `Donate_DaysGiveBirth`, `Donate_Reason`, `Hospital_Choice1`, `Number_Bottles1`, `Hospital_Choice2`, `Number_Bottles2`) VALUES
(1, 0, 'secret', '2020-03-12', 'I Want to help', 'PGH', '2', 'Makati Human MilkBank', '2'),
(2, 0, 'Roman Cruz', '2020-04-15', 'I want to help', 'Philippine Childrens Medical Center', '1', 'PGH', '3');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Hospital_ID` int(50) NOT NULL,
  `Location_ID` int(50) NOT NULL,
  `Hospital_Name` varchar(50) NOT NULL,
  `Hospital_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Hospital_ID`, `Location_ID`, `Hospital_Name`, `Hospital_Type`) VALUES
(1, 1, 'Philippine General Hospital', 'semi-private'),
(2, 2, 'Philippine Childrens Hospital', 'semi-private'),
(3, 3, 'Makati Human Milk Bank', 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `location_hospital`
--

CREATE TABLE `location_hospital` (
  `Location_ID` int(50) NOT NULL,
  `Location_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location_hospital`
--

INSERT INTO `location_hospital` (`Location_ID`, `Location_Name`) VALUES
(1, 'Taft Ave, Ermita, Manila, 1000 Metro Manila'),
(2, 'Quezon Avenue, corner Agham Rd, Diliman, Quezon City, 1101 Metro Manila'),
(3, '1126 Bangkal Health Center E.Rodriguez St. Barangay Bangkal, Makati, 1233 Metro Manila');

-- --------------------------------------------------------

--
-- Table structure for table `milk`
--

CREATE TABLE `milk` (
  `Milk_ID` int(50) NOT NULL,
  `Milk_Type` varchar(50) NOT NULL,
  `Milk_Status` varchar(50) NOT NULL,
  `Milk_CC` varchar(50) NOT NULL,
  `Milk_CreateMilk` date NOT NULL,
  `Milk_DonateDate` date NOT NULL,
  `Milk_Expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `Access_ID` int(50) NOT NULL,
  `Permission_Details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`Access_ID`, `Permission_Details`) VALUES
(0, 'Admin'),
(1, 'Regular_User');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `Recipient_ID` int(50) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Baby_FirstName` varchar(50) NOT NULL,
  `Baby_MiddleName` varchar(50) NOT NULL,
  `Baby_LastName` varchar(50) NOT NULL,
  `Baby_Gender` char(1) NOT NULL,
  `Baby_Age` varchar(50) NOT NULL,
  `Baby_Birthdate` date NOT NULL,
  `Baby_Weight` int(50) NOT NULL,
  `Hospital_Choice1` varchar(50) NOT NULL,
  `Number_Bottles1` varchar(50) NOT NULL,
  `Hospital_Choice2` varchar(50) NOT NULL,
  `Number_Bottles2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`Recipient_ID`, `User_ID`, `Baby_FirstName`, `Baby_MiddleName`, `Baby_LastName`, `Baby_Gender`, `Baby_Age`, `Baby_Birthdate`, `Baby_Weight`, `Hospital_Choice1`, `Number_Bottles1`, `Hospital_Choice2`, `Number_Bottles2`) VALUES
(1, 0, 'Molly', 'ann', 'Paulino', 'F', 'Years 0 Month 0 Days 13', '2020-04-16', 10, 'Philippine General Hospital', '2', 'Makati Human MilkBank', '2');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Transaction_ID` int(50) NOT NULL,
  `Hospital_ID` int(50) NOT NULL,
  `Milk_ID` int(50) NOT NULL,
  `Transaction_Type_ID` int(50) NOT NULL,
  `Transaction_Date` date NOT NULL,
  `Donor_ID` int(50) DEFAULT NULL,
  `Recipient_ID` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type`
--

CREATE TABLE `transaction_type` (
  `Transaction_Type_ID` int(50) NOT NULL,
  `Transaction_Specification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(50) NOT NULL,
  `Access_ID` int(50) NOT NULL,
  `Users_FirstName` varchar(50) NOT NULL,
  `Users_MiddleName` varchar(50) NOT NULL,
  `Users_LastName` varchar(50) NOT NULL,
  `Users_Age` varchar(50) DEFAULT NULL,
  `Users_Gender` char(1) NOT NULL,
  `Users_PhoneNumber` varchar(50) NOT NULL,
  `Users_Address` varchar(50) DEFAULT NULL,
  `Users_Birthdate` date NOT NULL,
  `Users_Email` varchar(50) NOT NULL,
  `Users_Username` varchar(50) NOT NULL,
  `Users_Password` varchar(50) NOT NULL,
  `Users_ReTypePassword` varchar(50) NOT NULL,
  `Users_Validation` varchar(11) DEFAULT NULL,
  `Users_Validation_Expiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Access_ID`, `Users_FirstName`, `Users_MiddleName`, `Users_LastName`, `Users_Age`, `Users_Gender`, `Users_PhoneNumber`, `Users_Address`, `Users_Birthdate`, `Users_Email`, `Users_Username`, `Users_Password`, `Users_ReTypePassword`, `Users_Validation`, `Users_Validation_Expiry`) VALUES
(1, 1, 'Juan', 'Tou', 'Santos', 'Years 42 Month 1 Days 8', 'm', '09272962637', 'san juan', '1978-03-04', 'lexteralmirol@gmail.com', 'juantou', '12345', '12345', NULL, NULL),
(2, 1, 'Dorothy', 'Ann', 'bohulano', 'Years 0 Month 0 Days 14', 'f', '09272962637', 'san juan', '2020-04-16', 'doty@gmail.com', 'dots', '54321', '54321', NULL, NULL),
(3, 1, 'Alex', '', 'cruz', 'Years 0 Month 0 Days 19', 'm', '09272962637', 'san juan', '2020-04-22', 'alex12@gmail.com', 'alex12', 'alexpassword', 'alexpassword', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_ID`),
  ADD KEY `Contact_ID` (`Contact_ID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Donor_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`Hospital_ID`),
  ADD KEY `Location_ID` (`Location_ID`);

--
-- Indexes for table `location_hospital`
--
ALTER TABLE `location_hospital`
  ADD PRIMARY KEY (`Location_ID`);

--
-- Indexes for table `milk`
--
ALTER TABLE `milk`
  ADD PRIMARY KEY (`Milk_ID`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`Access_ID`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`Recipient_ID`),
  ADD UNIQUE KEY `Recipient_ID` (`Recipient_ID`),
  ADD UNIQUE KEY `User_ID_2` (`User_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Transaction_ID`),
  ADD KEY `Donor_ID` (`Donor_ID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`),
  ADD KEY `Milk_ID` (`Milk_ID`),
  ADD KEY `Recipient_ID` (`Recipient_ID`),
  ADD KEY `Transaction_Type_ID` (`Transaction_Type_ID`);

--
-- Indexes for table `transaction_type`
--
ALTER TABLE `transaction_type`
  ADD PRIMARY KEY (`Transaction_Type_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_ID` (`User_ID`),
  ADD UNIQUE KEY `Users_ReTypePassword` (`Users_ReTypePassword`),
  ADD UNIQUE KEY `Users_Password` (`Users_Password`),
  ADD UNIQUE KEY `Users_Username` (`Users_Username`),
  ADD KEY `Access_ID` (`Access_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `Donor_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `Hospital_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `milk`
--
ALTER TABLE `milk`
  MODIFY `Milk_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipient`
--
ALTER TABLE `recipient`
  MODIFY `Recipient_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Transaction_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`Location_ID`) REFERENCES `location_hospital` (`Location_ID`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`Transaction_Type_ID`) REFERENCES `transaction_type` (`Transaction_Type_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Access_ID`) REFERENCES `permission` (`Access_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
