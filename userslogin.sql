-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 03:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userslogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `sectiona`
--

CREATE TABLE `sectiona` (
  `studentID` int(10) UNSIGNED NOT NULL,
  `matricnumber` varchar(50) NOT NULL,
  `nameofuni` varchar(50) NOT NULL,
  `yearofstudy` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `agegroup` varchar(50) NOT NULL,
  `ethnic` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectiona`
--

INSERT INTO `sectiona` (`studentID`, `matricnumber`, `nameofuni`, `yearofstudy`, `gender`, `agegroup`, `ethnic`, `nationality`) VALUES
(1, 'AIG170026', 'UM', 'Second', 'Female', '22 to 25 Years', 'Chinese', 'Malaysian'),
(2, 'AIG170005', 'UM', 'Second', 'Female', '18 to 21 Years', 'Malay', 'Malaysian'),
(3, 'AIG170027', 'UM', 'Second', 'Male', '18 to 21 Years', 'Malay', 'Malaysian'),
(4, 'AIG170022', 'UM', 'Second', 'Female', '22 to 25 Years', 'Malay', 'Malaysian'),
(5, 'AIG170002', 'UM', 'Second', 'Female', '18 to 21 Years', 'Malay', 'Malaysian'),
(6, 'AIG170016', 'UM', 'Second', 'Female', '18 to 21 Years', 'Malay', 'Malaysian'),
(7, 'AIG170008', 'UM', 'Second', 'Female', '18 to 21 Years', 'Malay', 'Malaysian'),
(8, 'AIG170009', 'UM', 'Second', 'Female', '22 to 25 Years', 'Chinese', 'Malaysian'),
(9, 'AIG170025', 'UM', 'Second', 'Female', '18 to 21 Years', 'Chinese', 'Malaysian'),
(10, 'AIG170021', 'UM', 'Second', 'Female', '22 to 25 Years', 'Malay', 'Malaysian'),
(11, 'AIG170003', 'UM', 'Second', 'Female', '22 to 25 Years', 'Malay', 'Malaysian'),
(12, 'AIJ170027', 'UM', 'Second', 'Female', '22 to 25 Years', 'Malay', 'Malaysian'),
(13, 'AIJ170024', 'UM', 'Second', 'Female', '18 to 21 Years', 'Malay', 'Malaysian'),
(14, 'AIJ170030', 'UM', 'Second', 'Female', '18 to 21 Years', 'Chinese', 'Malaysian'),
(15, 'AET150025', 'UM', 'Fourth', 'Male', '22 to 25 Years', 'Malay', 'Malaysian'),
(16, 'AIA180012 ', 'UM', 'First', 'Female', '18 to 21 Years', 'Malay', 'Malaysian');

-- --------------------------------------------------------

--
-- Table structure for table `sectiona2`
--

CREATE TABLE `sectiona2` (
  `studentID` int(10) UNSIGNED NOT NULL,
  `examyear1` varchar(50) NOT NULL,
  `examsem1` int(11) NOT NULL,
  `examgpa1` decimal(4,2) NOT NULL,
  `examcgpa1` decimal(4,2) NOT NULL,
  `examyear2` varchar(11) NOT NULL,
  `examsem2` int(11) NOT NULL,
  `examgpa2` decimal(4,2) NOT NULL,
  `examcgpa2` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectiona2`
--

INSERT INTO `sectiona2` (`studentID`, `examyear1`, `examsem1`, `examgpa1`, `examcgpa1`, `examyear2`, `examsem2`, `examgpa2`, `examcgpa2`) VALUES
(1, '2018', 2, '3.70', '3.50', '2019', 1, '3.60', '3.40'),
(2, '2018', 2, '3.20', '3.16', '2019', 1, '3.50', '3.45'),
(3, '2017', 2, '3.15', '3.20', '2018', 1, '3.14', '3.10'),
(4, '2017', 2, '3.52', '3.53', '2018', 1, '3.65', '3.63'),
(5, '2018', 2, '3.34', '3.53', '2019', 1, '3.68', '3.54'),
(6, '2017', 2, '3.63', '3.58', '2018', 1, '3.78', '3.73'),
(7, '2018', 1, '3.46', '3.51', '2019', 1, '3.33', '3.28'),
(8, '2018', 2, '3.52', '3.39', '2019', 1, '3.68', '3.74'),
(9, '2018', 2, '3.85', '3.53', '2019', 1, '3.75', '3.64'),
(10, '2018', 2, '3.13', '3.00', '2019', 2, '3.30', '3.25'),
(11, '2018', 2, '3.49', '3.38', '2019', 1, '3.67', '3.42'),
(12, '2018', 2, '3.53', '3.60', '2019', 1, '3.12', '3.43'),
(13, '2018', 2, '3.90', '3.70', '2019', 2, '3.80', '3.60'),
(14, '2018', 2, '3.78', '3.52', '2019', 1, '3.87', '3.78'),
(15, '2018', 2, '3.00', '3.00', '2019', 1, '3.52', '3.48'),
(16, '2018', 2, '3.40', '3.40', '2019', 1, '3.40', '3.40');

-- --------------------------------------------------------

--
-- Table structure for table `sectionb`
--

CREATE TABLE `sectionb` (
  `matricnumber` varchar(50) NOT NULL,
  `q1` int(50) NOT NULL,
  `q2` int(50) NOT NULL,
  `q3a` int(50) NOT NULL,
  `q3b` int(50) NOT NULL,
  `q4` varchar(50) NOT NULL,
  `q5` varchar(50) NOT NULL,
  `q6` varchar(50) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q8a` varchar(50) NOT NULL,
  `q8b` varchar(50) NOT NULL,
  `q8c` varchar(50) NOT NULL,
  `q8d` varchar(50) NOT NULL,
  `q8e` varchar(50) NOT NULL,
  `q9a` varchar(50) NOT NULL,
  `q9b` varchar(50) NOT NULL,
  `q10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectionb`
--

INSERT INTO `sectionb` (`matricnumber`, `q1`, `q2`, `q3a`, `q3b`, `q4`, `q5`, `q6`, `q7`, `q8a`, `q8b`, `q8c`, `q8d`, `q8e`, `q9a`, `q9b`, `q10`) VALUES
('AET150025', 0, 51, 60, 39, '-', 'C,D', 'GOLD BOX', 'im too smart to care bout this', '-', '-', '-', '-', '-', 'MORNING', 'FAT', 'There\'s lion on the exit, give a look'),
('AIA180012 ', 0, 210, 2, 68, '0', 'C,D', 'RED BOX', '1 batang kayu, patahkan kpd 1/4', '-', '-', '-', '-', '-', 'MORNING', 'FAT', '1+1=2, betul atau salah?'),
('AIG170002', 10, 0, 62, 38, '0', 'B,C', '-', '-', 'TV HOST', 'DANCER', 'FORTUNE TELLER', 'NOVELIST', 'D WILL NOT MARRY MR.P', 'AFTERNOON', 'FAT', 'can you exit using the door'),
('AIG170003', 10, 187, 62, 38, '72=49', 'B,C', 'GOLD BOX', '1/4 from a thin wooden', 'DANCER', 'TV HOST', 'FORTUNE TELLER', 'NOVELIST', 'D WILL NOT MARRY MR.P', 'MORNING', 'FAT', 'WHICH ONE IS TELL THE TRUTH?'),
('AIG170005', 10, 0, 62, 38, '-', 'B,C', 'GOLD BOX', 'Fan the stick', 'DANCER', 'TV HOST', 'FORTUNE TELLER', 'NOVELIST', 'D WILL NOT MARRY MR.P', 'AFTERNOON', 'FAT', 'CAN YOU LEAVE FIRST?'),
('AIG170008', 10, 51, 62, 38, '7 x 6 =42', 'B,C', 'GOLD BOX', 'Burn 1/4 of the stick', 'DANCER', 'TV HOST', 'FORTUNE TELLER', 'NOVELIST', 'D WILL NOT MARRY MR.P', 'MORNING', 'FAT', 'CAN YOU LEAVE FIRST?'),
('AIG170009', 10, 187, 62, 38, '7^2=49', 'C,D', 'SILVER BOX', '-', 'DANCER', 'NOVELIST', 'TV HOST', 'FORTUNE TELLER', 'D WILL MARRY MR.P', 'MORNING', 'FAT', 'Is the door safe?'),
('AIG170016', 10, 51, 62, 38, '0', 'B,C', 'GOLD BOX', 'Burn 1/4 of the stick', 'DANCER', 'TV HOST', 'FORTUNE TELLER', 'NOVELIST', 'D WILL NOT MARRY MR.P', 'MORNING', 'FAT', 'CAN YOU LEAVE FIRST?'),
('AIG170021', 10, 17, 62, 38, '43', 'A,B', 'GOLD BOX', 'Fan the stick', 'DANCER', 'TV HOST', 'FORTUNE TELLER', 'NOVELIST', 'D WILL MARRY MR.P', 'AFTERNOON', 'FAT', 'DID YOU KNOW THAT THE OTHER GUY LIE TO YOU?'),
('AIG170022', 3, 51, 50, 50, '0', 'C,D', 'RED BOX', 'Fan', 'DANCER', 'FORTUNE TELLER', 'NOVELIST', 'TV HOST', 'D WILL NOT MARRY MR.P', 'AFTERNOON', 'THIN', 'NULL'),
('AIG170025', 10, 187, 62, 38, '7^2=49', 'C,D', 'SILVER BOX', 'burn 2 at once,first wood burn on both side,the second only burn one side,after wooden stick burn till 3/4 then burn second wood stick both side', 'DANCER', 'NOVELIST', 'TV HOST', 'FORTUNE TELLER', 'D WILL MARRY MR.P', 'MORNING', 'FAT', 'Is the door through outside?'),
('AIG170026', 10, 187, 62, 38, '7^2=49', 'C,D', 'SILVER BOX', 'burn 2 at once', 'DANCER', 'FORTUNE TELLER', 'TV HOST', 'NOVELIST', 'D WILL NOT MARRY MR.P', 'MORNING', 'FAT', 'Is the door through outside'),
('AIG170027', 10, 63, 62, 38, '43', 'B,C', 'SILVER BOX', 'Fan', 'DANCER', 'TV HOST', 'FORTUNE TELLER', 'NOVELIST', 'D WILL NOT MARRY MR.P', 'MORNING', 'THIN', 'where the is the save for me?'),
('AIJ170024', 3, 8, 81, 19, '32', 'B,D', 'GOLD BOX', 'Use a timer', 'TV HOST', 'NOVELIST', 'DANCER', 'FORTUNE TELLER', 'D WILL NOT MARRY MR.P', 'MORNING', 'FAT', 'Which one is the safe exit?'),
('AIJ170027', 1, 25, 167, 38, '10', 'A,B', 'RED BOX', '16', '-', '-', '-', '-', '-', '-', '-', '-'),
('AIJ170030', 10, 227, 62, 38, '0', 'C,D', 'GOLD BOX', 'Put two sticks together and burn both end togother', 'FORTUNE TELLER', 'NOVELIST', 'DANCER', 'TV HOST', 'D WILL NOT MARRY MR.P', 'MORNING', 'FAT', 'What will another man answer if i ask him, is this');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentID` varchar(50) NOT NULL,
  `matricnumber` varchar(50) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentID`, `matricnumber`, `email`, `password`) VALUES
('15', 'AET150025', '-', '6e413ea6a2bb937b9106fa21004965da'),
('16', 'AIA180012 ', '-', 'ed6fc175fd588565fd59bee6d083052d'),
('5', 'AIG170002', '-', '0677c81924b0bbb9d4038e418a6c1385'),
('11', 'AIG170003', '-', '0888e0b6150ef6821c1ab928d67818a2'),
('2', 'AIG170005', '-', '7a7da5461ec502e9f7b833b8342b3800'),
('7', 'AIG170008', '-', 'f1c500492cf1e5de58c0a098bdd3b9ff'),
('8', 'AIG170009', '-', '29ce33438b36e9a8468ecd2b9efd73a8'),
('6', 'AIG170016', '-', 'c972ab51d2c1298a484fec88f3004e63'),
('10', 'AIG170021', '-', 'e5f3bbd187dd5797cd08ab80d609f1fc'),
('4', 'AIG170022', '-', '6d6817c2cf8d77ab2f898e65fb93daa9'),
('9', 'AIG170025', '-', '47420af64380970c00c37bfb59d156eb'),
('1', 'AIG170026', '-', '184b617429d0256e027318ee4502e6f0'),
('3', 'AIG170027', '-', '7cb12ca7c989e1f7f9e432293f44972a'),
('13', 'AIJ170024', '-', 'b232a529d22d0b15fc2eb7b04ab9cf93'),
('12', 'AIJ170027', '-', '31154d9e0a6e29815f5497da6e048a83'),
('14', 'AIJ170030', '-', '4eb4b78aabe1943b630ad56779874719');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sectiona`
--
ALTER TABLE `sectiona`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `matricnumber` (`matricnumber`);

--
-- Indexes for table `sectiona2`
--
ALTER TABLE `sectiona2`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `sectionb`
--
ALTER TABLE `sectionb`
  ADD PRIMARY KEY (`matricnumber`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`matricnumber`),
  ADD UNIQUE KEY `StudentID` (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sectiona`
--
ALTER TABLE `sectiona`
  MODIFY `studentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sectiona2`
--
ALTER TABLE `sectiona2`
  MODIFY `studentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sectiona`
--
ALTER TABLE `sectiona`
  ADD CONSTRAINT `sectiona_ibfk_1` FOREIGN KEY (`matricnumber`) REFERENCES `students` (`matricnumber`);

--
-- Constraints for table `sectiona2`
--
ALTER TABLE `sectiona2`
  ADD CONSTRAINT `sectiona2_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `sectiona` (`studentID`);

--
-- Constraints for table `sectionb`
--
ALTER TABLE `sectionb`
  ADD CONSTRAINT `sectionb_ibfk_1` FOREIGN KEY (`matricnumber`) REFERENCES `sectiona` (`matricnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
