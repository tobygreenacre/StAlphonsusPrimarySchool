-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2025 at 12:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PrimarySchool`
--

-- --------------------------------------------------------

--
-- Table structure for table `Classes`
--

CREATE TABLE `Classes` (
  `classID` int(11) NOT NULL,
  `className` varchar(20) DEFAULT NULL,
  `classCapacity` int(11) DEFAULT NULL,
  `t_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Classes`
--

INSERT INTO `Classes` (`classID`, `className`, `classCapacity`, `t_ID`) VALUES
(1, 'Year 6', 30, 1),
(2, 'Year 5', 25, 4),
(3, 'Year 4', 30, 2),
(4, 'Year 3', 30, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Parents`
--

CREATE TABLE `Parents` (
  `g_ID` int(11) NOT NULL,
  `g_Fname` varchar(20) DEFAULT NULL,
  `g_Sname` varchar(20) DEFAULT NULL,
  `g_Address` varchar(50) DEFAULT NULL,
  `g_Email` varchar(25) DEFAULT NULL,
  `g_Number` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Parents`
--

INSERT INTO `Parents` (`g_ID`, `g_Fname`, `g_Sname`, `g_Address`, `g_Email`, `g_Number`) VALUES
(1, 'John', 'Smith', '26 South Parade', 'John.smith@gmail.com', '1623852742'),
(2, 'Mark', 'Green', '2 South Avenue', 'Markgreen@icloud.com', '07743128420'),
(4, 'Micheal', 'Jones', '26 Bramhall Lane', 'MJones@yahoo.com', '07761223842'),
(5, 'Barry', 'Moore', '98 Oxford Drive', 'Barrymoore@gmail.com', '07734567845');

-- --------------------------------------------------------

--
-- Table structure for table `Parents_Pupils`
--

CREATE TABLE `Parents_Pupils` (
  `PP_ID` int(11) NOT NULL,
  `g_ID` int(11) DEFAULT NULL,
  `p_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Parents_Pupils`
--

INSERT INTO `Parents_Pupils` (`PP_ID`, `g_ID`, `p_ID`) VALUES
(2, 4, 1),
(3, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Pupils`
--

CREATE TABLE `Pupils` (
  `p_ID` int(11) NOT NULL,
  `p_Fname` varchar(20) DEFAULT NULL,
  `p_Sname` varchar(20) DEFAULT NULL,
  `p_Address` varchar(50) DEFAULT NULL,
  `p_MedicalInfo` varchar(100) DEFAULT NULL,
  `classID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pupils`
--

INSERT INTO `Pupils` (`p_ID`, `p_Fname`, `p_Sname`, `p_Address`, `p_MedicalInfo`, `classID`) VALUES
(1, 'Alex', 'Jones', '26 Bramhall Lane', 'Allergic to Nuts', 1),
(2, 'Matt', 'Clarke', '29 London Road North', 'n/a', 1),
(3, 'Thomas', 'Moore', '98 Oxford Drive', 'N/A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `t_ID` int(11) NOT NULL,
  `t_Fname` varchar(20) DEFAULT NULL,
  `t_Sname` varchar(20) DEFAULT NULL,
  `t_Address` varchar(50) DEFAULT NULL,
  `t_phoneNum` varchar(11) DEFAULT NULL,
  `t_BackgroundCheck` varchar(50) DEFAULT NULL,
  `t_Salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`t_ID`, `t_Fname`, `t_Sname`, `t_Address`, `t_phoneNum`, `t_BackgroundCheck`, `t_Salary`) VALUES
(1, 'Sarah', 'Mcdonald', '53 Adelaide Road', '1273845722', 'CLEAR', 28000),
(2, 'Ronald', 'Pennington', '89 Ladybrook Road', '07234887832', 'CLEAR', 32000),
(3, 'Mark', 'Hughes', '23 Reddish Road', '07232543978', 'CLEAR', 27000),
(4, 'Sarah', 'Mcdermott', '58 Lub Lane', '07424853542', 'CLEAR', 26000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Classes`
--
ALTER TABLE `Classes`
  ADD PRIMARY KEY (`classID`),
  ADD KEY `t_ID` (`t_ID`);

--
-- Indexes for table `Parents`
--
ALTER TABLE `Parents`
  ADD PRIMARY KEY (`g_ID`);

--
-- Indexes for table `Parents_Pupils`
--
ALTER TABLE `Parents_Pupils`
  ADD PRIMARY KEY (`PP_ID`),
  ADD KEY `g_ID` (`g_ID`),
  ADD KEY `p_ID` (`p_ID`);

--
-- Indexes for table `Pupils`
--
ALTER TABLE `Pupils`
  ADD PRIMARY KEY (`p_ID`),
  ADD KEY `classID` (`classID`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`t_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Classes`
--
ALTER TABLE `Classes`
  MODIFY `classID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Parents`
--
ALTER TABLE `Parents`
  MODIFY `g_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Parents_Pupils`
--
ALTER TABLE `Parents_Pupils`
  MODIFY `PP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Pupils`
--
ALTER TABLE `Pupils`
  MODIFY `p_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Classes`
--
ALTER TABLE `Classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`t_ID`) REFERENCES `Teachers` (`t_ID`);

--
-- Constraints for table `Parents_Pupils`
--
ALTER TABLE `Parents_Pupils`
  ADD CONSTRAINT `parents_pupils_ibfk_1` FOREIGN KEY (`g_ID`) REFERENCES `Parents` (`g_ID`),
  ADD CONSTRAINT `parents_pupils_ibfk_2` FOREIGN KEY (`p_ID`) REFERENCES `Pupils` (`p_ID`);

--
-- Constraints for table `Pupils`
--
ALTER TABLE `Pupils`
  ADD CONSTRAINT `pupils_ibfk_1` FOREIGN KEY (`classID`) REFERENCES `Classes` (`classID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
