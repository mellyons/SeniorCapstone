-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 12:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgadirectory`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `office_num` varchar(10) NOT NULL,
  `phone_num` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `firstname`, `lastname`, `location`, `office_num`, `phone_num`, `email`, `Department`) VALUES
(1, 'Brooke', 'Ingram', 'Macon', 'PSC 320', '478.757.6693', 'danielle.ingram@mga.edu', 'IT'),
(2, 'Tina', 'Ashford', 'Macon', 'PSC 330', '478.471.2076', 'tina.ashford@mga.edu', 'IT'),
(3, 'Shannon', 'Beasley', 'Macon', 'PSC 308', '478.757.2582', 'shannon.beasley@mga.edu', 'IT'),
(4, 'Pedro', 'Colon', 'Cochran', 'MEM 103', '478.934-3584', 'pedro.colon1@mga.edu', 'IT'),
(5, 'John', 'Girard', 'Macon', 'PSC 312', '478.471.2467', 'john.girard@mga.edu', 'IT'),
(6, 'Jonathan', 'Jenkins', 'Macon', 'PSC 322', '478.471.2028', 'jonathan.jenkins2@mga.edu', 'IT'),
(7, 'Joobum', 'Kim', 'Macon', 'PSC 332', '478-471-5741', 'joobum.kim@mga.edu', 'IT'),
(8, 'Myungjae', 'Kwak', 'Macon', 'PSC 314', '478.757.6682', 'myungjae.kwak@mga.edu', 'IT'),
(9, 'Kimbley', 'Lingelbach', 'Macon', 'PSC 328', '478.471.2077', 'kembley.lingelbach@mga.edu', 'IT'),
(10, 'Wayne', 'Lockwood', 'Macon', 'PSC 334', '478.757.2685', 'wayne.lockwood@mga.edu', 'IT'),
(12, 'Tricia', 'Purser', 'Macon', 'PSC', '478.471.2960', 'tricia.purser@mga.edu', 'IT'),
(13, 'Neil', 'Rigole', 'Macon', 'PSC 326', '478.471.5760', 'neil.rigole@mga.edu', 'IT'),
(14, 'Vicky', 'Sandoval', 'Macon', 'PSC 324', '478-477-0327', 'vicky.sandoval@mga.edu', 'IT'),
(15, 'Scott', 'Spangler', 'Macon', 'PSC 335', '478.757.2699', 'scott.spangler@mga.edu', 'IT'),
(16, 'Alan', 'Stines', 'Macon', 'PSC 310', '478.477.0831', 'alan.stines@mga.edu', 'IT'),
(17, 'Kendall', 'Thompson', 'Macon', 'PSC 302', '478.471.2747', 'kendall.thompson@mga.edu', 'IT'),
(18, 'Yingfeng', 'Wang', 'Macon', 'PSC 306', '478.471.2477', 'yingfeng.wang@mga.edu', 'IT'),
(19, 'Johnathan', 'Yerby', 'Macon', 'PSC 315', '478.471.2801', 'johnathan.yerby@mga.edu', 'IT'),
(20, 'Charla', 'Baker', 'Macon', 'MATH 111', '478-471-2890', 'charla.baker@mga.edu', 'IT'),
(21, 'Deneice', 'Bausley', 'Cochran', 'MEM 124', '478-934-3460', 'deneice.bausley@mga.edu', 'Math'),
(22, 'Valerie', 'Beaman-Hackle', 'Macon', 'MATH 218', '478-471-2818', 'valerie.beamanhackle@mga.edu', 'Math'),
(23, 'Sandra', 'Bevill', 'Macon', 'MATH 217', '478-471-5308', 'sandra.bevill@mga.edu', 'Math'),
(24, 'Gaston', 'Brouwer', 'Macon', 'MATH 216', '478-471-2817', 'gaston.brouwer@mga.edu', 'Math'),
(25, 'Don', 'Brown', 'Macon', 'MATH 214', '478-471-2816', 'don.brown@mga.edu', 'Math'),
(26, 'Rose', 'Brown', 'Macon', 'MATH', '478-471-2749', 'rose.brown@mga.edu', 'Math'),
(27, 'Louis', 'Camara', 'Cochran', 'MEM 116', '478-934-5233', 'louis.camara@mga.edu', 'Math'),
(28, 'Kang-Ping', 'Cheng', 'Macon', 'MATH 116', '478-475-8613', 'kelli.cheng@mga.edu', 'Math'),
(29, 'Cathrine', 'Davis', 'Cochran', 'MEM 120', '478-934-3521', 'cathie.davis@mga.edu', 'Math'),
(30, 'Duane', 'Day', 'Macon', 'MATH 219', '478-471-2819', 'duane.day@mga.edu', 'Math'),
(31, 'Noha', 'El-Jeaid', 'Cochran', 'MEM 117', '478-934-5232', 'noha.eljeaid@mga.edu', 'Math'),
(32, 'Joseph', 'Garrison', 'Cochran', 'MEM', '478-934-3559', 'mark.garrison@mga.edu', 'Math'),
(33, 'Holly', 'Geiger', 'Dublin', 'LIB 210', '478-274-7669', 'holly.geiger@mga.edu', 'Math'),
(34, 'Tamara', 'Gray', 'Cochran', 'MEM', '478-934-3047', 'tamara.gray@mga.edu', 'Math'),
(35, 'Meghan', 'Greathouse', 'Cochran', 'MEM 129', '478-934-3599', 'meghan.greathouse@mga.edu', 'Math'),
(36, 'Michael', 'Hammock', 'Macon', 'MATH 225', '478-471-2089', 'michael.hammock@mga.edu', 'Math'),
(37, 'Joshua', 'Harrelson', 'Macon', 'MATH 226', '478-934-3017', 'joshua.harrelson@mga.edu', 'Math'),
(38, 'Chris', 'Hill', 'Macon', 'MATH 220', '478-471-2888', 'chris.hill@mga.edu', 'Math'),
(39, 'Matthew', 'Houston', 'Cochran', 'MEM 105', '478-934-5201', 'matthew.houston@mga.edu', 'Math'),
(40, 'Xiaoyan (Shannon)', 'Hu', 'Macon', 'MATH 221', '478-471-2815', 'shannon.hu@mga.edu', 'Math'),
(41, 'Jonathan', 'Joe', 'Macon', 'MATH 113', '478-475-8618', 'jonathan.joe@mga.edu', 'Math'),
(42, 'Richard', 'Kilburn', 'Warner Robins', 'OAK 116', '478-929-6701', 'richard.kilburn@mga.edu', 'Math'),
(43, 'Viktoriya', 'Lanier', 'Cochran', 'MEM 121', '478-934-3373', 'viktoriya.lanier@mga.edu', 'Math'),
(44, 'Daniel', 'Lin', 'Cochran', 'MEM 109', '478-934-3012', 'daniel.lin@mga.edu', 'Math'),
(45, 'Thuy Vy', 'Ly', 'Cochran', 'MEM 126', '478-934-5232', 'thuyvyly@mga.edu', 'Math'),
(46, 'Barry', 'Monk', 'Macon', 'MATH 112', '478-471-2749', 'barry.monk@mga.edu', 'Math'),
(47, 'Abby', 'Noble', 'Macon', 'MATH 120', '478-475-8619', 'abby.noble@mga.edu', 'Math'),
(48, 'Matthew', 'Noble', 'Macon', 'MATH 223', '478-471-2035', 'matthew.noble@mga.edu', 'Math'),
(49, 'Shayne', 'Richardson', 'Macon', 'MATH', '478-471-2404', 'shayne.richardson@mga.edu', 'Math'),
(50, 'John', 'Trimboli', 'Macon', 'MATH', '478-471-2833', 'john.trimboli@mga.edu', 'Math'),
(51, 'Hannah', 'Upperman', 'Cochran', 'MEM 102', '478-934-3539', 'hannah.upperman@mga.edu', 'Math'),
(52, 'David', 'Vogel', 'Macon', 'MATH 124', '478-475-8621', 'david.vogel@mga.edu', 'Math'),
(53, 'Steven', 'Wallace', 'Macon', 'MATH 118', '478-475-8614', 'steven.wallace@mga.edu', 'Math'),
(54, 'Xubo', 'Wang', 'Macon', 'MATH 123', '478-475-8617', 'lily.wang@mga.edu', 'Math'),
(55, 'Mary', 'Wolfe', 'Macon', 'MATH 119', '478-471-5723', 'mary.wolfe@mga.edu', 'Math');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
