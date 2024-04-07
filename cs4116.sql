-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 11:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs4116`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribut`
--

CREATE TABLE `attribut` (
  `numAttribut` int(11) NOT NULL,
  `nameAttribut` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banned`
--

CREATE TABLE `banned` (
  `numProfile` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `duration` time NOT NULL,
  `reason` varchar(300) NOT NULL,
  `bannedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `numChat` int(11) NOT NULL,
  `numGroup` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dislike`
--

CREATE TABLE `dislike` (
  `numAttribut` int(11) NOT NULL,
  `numProfile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intextgroup`
--

CREATE TABLE `intextgroup` (
  `numGroup` int(11) NOT NULL,
  `numProfile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isadmin`
--

CREATE TABLE `isadmin` (
  `numProfile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isfriends`
--

CREATE TABLE `isfriends` (
  `numProfile1` int(11) NOT NULL,
  `numProfile2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `numProfile` int(11) NOT NULL,
  `likesProfile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE `preference` (
  `numAttribut` int(11) NOT NULL,
  `numProfile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `numProfile` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `prefGender` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Unknown',
  `datingNum` int(11) NOT NULL,
  'created_at' DATETIME NOT NULL DEFAULT CURRENT_TIME,
   PRIMARY KEY(numProfile)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `textgroup`
--

CREATE TABLE `textgroup` (
  `numGroup` int(11) NOT NULL,
  `nameGroup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribut`
--
ALTER TABLE `attribut`
  ADD PRIMARY KEY (`numAttribut`);

--
-- Indexes for table `banned`
--
ALTER TABLE `banned`
  ADD KEY `numProfile` (`numProfile`),
  ADD KEY `bannedBy` (`bannedBy`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`numChat`),
  ADD KEY `numGroup` (`numGroup`);

--
-- Indexes for table `dislike`
--
ALTER TABLE `dislike`
  ADD KEY `numProfile` (`numProfile`),
  ADD KEY `numAttribut` (`numAttribut`);

--
-- Indexes for table `intextgroup`
--
ALTER TABLE `intextgroup`
  ADD KEY `numGroup` (`numGroup`),
  ADD KEY `numProfile` (`numProfile`);

--
-- Indexes for table `isadmin`
--
ALTER TABLE `isadmin`
  ADD KEY `isadmin_ibfk_1` (`numProfile`);

--
-- Indexes for table `isfriends`
--
ALTER TABLE `isfriends`
  ADD KEY `numProfile1` (`numProfile1`),
  ADD KEY `numProfile2` (`numProfile2`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `numProfile` (`numProfile`),
  ADD KEY `likesProfile` (`likesProfile`);

--
-- Indexes for table `preference`
--
ALTER TABLE `preference`
  ADD KEY `numProfile` (`numProfile`),
  ADD KEY `numAttribut` (`numAttribut`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`numProfile`);

--
-- Indexes for table `textgroup`
--
ALTER TABLE `textgroup`
  ADD PRIMARY KEY (`numGroup`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banned`
--
ALTER TABLE `banned`
  ADD CONSTRAINT `banned_ibfk_1` FOREIGN KEY (`numProfile`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `banned_ibfk_2` FOREIGN KEY (`bannedBy`) REFERENCES `isadmin` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`numGroup`) REFERENCES `textgroup` (`numGroup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dislike`
--
ALTER TABLE `dislike`
  ADD CONSTRAINT `dislike_ibfk_1` FOREIGN KEY (`numProfile`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dislike_ibfk_2` FOREIGN KEY (`numAttribut`) REFERENCES `attribut` (`numAttribut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `intextgroup`
--
ALTER TABLE `intextgroup`
  ADD CONSTRAINT `intextgroup_ibfk_1` FOREIGN KEY (`numGroup`) REFERENCES `textgroup` (`numGroup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `intextgroup_ibfk_2` FOREIGN KEY (`numProfile`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `isadmin`
--
ALTER TABLE `isadmin`
  ADD CONSTRAINT `isadmin_ibfk_1` FOREIGN KEY (`numProfile`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `isfriends`
--
ALTER TABLE `isfriends`
  ADD CONSTRAINT `isfriends_ibfk_1` FOREIGN KEY (`numProfile1`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `isfriends_ibfk_2` FOREIGN KEY (`numProfile2`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`numProfile`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`likesProfile`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `preference`
--
ALTER TABLE `preference`
  ADD CONSTRAINT `preference_ibfk_1` FOREIGN KEY (`numProfile`) REFERENCES `profile` (`numProfile`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preference_ibfk_2` FOREIGN KEY (`numAttribut`) REFERENCES `attribut` (`numAttribut`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
