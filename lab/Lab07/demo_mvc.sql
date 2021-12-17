-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 07:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_mvc`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_suabophan` (IN `oldID` INT, IN `Name` VARCHAR(255), IN `num` INT)  UPDATE departments 
SET departments.Name = Name,
departments.NumberOfStaff = num
WHERE departments.ID = oldID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_suanhanvien` (IN `new_ID` INT, IN `Name` VARCHAR(255), IN `SurName` VARCHAR(255), IN `Email` VARCHAR(255), IN `Phone` VARCHAR(255), IN `dpm_ID` INT)  UPDATE employees
SET employees.Name = Name,
employees.Surname = SurName,
employees.Email = Email,
employees.Phone = Phone,
employees.ID_Depart = dpm_ID
WHERE employees.ID = new_ID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_thembophanmoi` (IN `name` VARCHAR(255))  INSERT INTO departments(departments.Name,departments.NumberOfStaff) VALUES(name,0)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_themnhanvienmoi` (IN `Name` VARCHAR(255), IN `SurName` VARCHAR(255), IN `Email` VARCHAR(255), IN `Phone` VARCHAR(255), IN `dpm_ID` INT)  INSERT INTO employees(employees.Name,employees.Surname,employees.Email,employees.Phone,employees.ID_Depart)
VALUES(Name,SurName,Email,Phone,dpm_ID)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_xoabophan` (IN `id` INT)  DELETE FROM departments WHERE departments.ID = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_xoanhanvien` (IN `ID` INT)  DELETE FROM employees WHERE employees.ID = ID$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberOfStaff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`ID`, `Name`, `NumberOfStaff`) VALUES
(1, 'Manager', -24),
(5, 'ade', -2);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Depart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `Name`, `Surname`, `Email`, `Phone`, `ID_Depart`) VALUES
(3, 'Toàn', 'Lê Quốc ', 'toan@gmail.com', '0913124157', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Depart` (`ID_Depart`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`ID_Depart`) REFERENCES `departments` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
