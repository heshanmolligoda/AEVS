-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2012 at 04:51 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates_details`
--

CREATE TABLE IF NOT EXISTS `candidates_details` (
  `candidate_no` int(11) NOT NULL AUTO_INCREMENT,
  `nic` varchar(10) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `add_L1` varchar(255) DEFAULT NULL,
  `add_L2` varchar(255) DEFAULT NULL,
  `add_L3` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `province` varchar(100) NOT NULL,
  `distric` varchar(255) DEFAULT NULL,
  `E_party` varchar(150) NOT NULL,
  PRIMARY KEY (`nic`),
  UNIQUE KEY `candidate_no` (`candidate_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `candidates_details`
--

INSERT INTO `candidates_details` (`candidate_no`, `nic`, `f_name`, `l_name`, `add_L1`, `add_L2`, `add_L3`, `age`, `email`, `province`, `distric`, `E_party`) VALUES
(6, '550012454V', 'Sunil', 'Dissanayake', '444', 'anc RD', 'ampara', 60, 'sunil@gmail.com', 'Eastern', 'Ampara', 'United National Party'),
(2, '684566855V', 'Kamal', 'Gunarane', '111', 'dsa rd', 'Kandy', 42, 'kamal@gmail.com', 'Central', 'Kandy', 'Jathika Hela Urumaya'),
(1, '705422821V', 'Nimal', 'Hettiarachchi', '54', 'Abc rd', 'Gampaha', 40, 'nimal@gmail.com', 'Western', 'Gampaha', 'Not_Ok'),
(3, '750002145V', 'Asela', 'Senarathne', '54', 'gfr rd', 'Colombo', 35, 'asela@gmail.com', 'Central', 'Kandy', 'Jathika Hela Urumaya');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_vote`
--

CREATE TABLE IF NOT EXISTS `candidate_vote` (
  `indexv` int(11) NOT NULL AUTO_INCREMENT,
  `E_party` varchar(50) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `province` varchar(100) NOT NULL,
  `distric` varchar(50) NOT NULL,
  `p_division` varchar(50) NOT NULL,
  `vote_count` int(11) NOT NULL,
  `rejectVote` int(11) NOT NULL,
  PRIMARY KEY (`indexv`,`E_party`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `candidate_vote`
--

INSERT INTO `candidate_vote` (`indexv`, `E_party`, `candidate_no`, `province`, `distric`, `p_division`, `vote_count`, `rejectVote`) VALUES
(1, 'Jathika Hela Urumaya', 3, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(2, 'Jathika Hela Urumaya', 2, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(3, 'Jathika Hela Urumaya', 3, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(4, 'Sri Lanka Muslim Congress', 18, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(5, 'Sri Lanka Muslim Congress', 19, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(6, 'Sri Lanka Muslim Congress', 20, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(7, 'United National Party', 6, 'Eastern', 'Ampara', 'Kalmunai', 1, 0),
(8, 'United National Party', 1, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(9, 'United National Party', 1, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(10, 'United National Party', 1, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(11, 'United Peoples Freedom Alliance', 4, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(12, 'United Peoples Freedom Alliance', 5, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(13, 'United Peoples Freedom Alliance', 6, 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(14, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(15, 'United National Party', 4, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(16, 'United National Party', 5, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(17, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(18, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(19, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(20, 'Jathika Hela Urumaya', 13, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(21, 'Jathika Hela Urumaya', 13, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(22, 'Jathika Hela Urumaya', 14, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(23, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(24, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(25, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(26, 'United Peoples Freedom Alliance', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(27, 'United Peoples Freedom Alliance', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(28, 'United Peoples Freedom Alliance', 4, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(29, 'United Peoples Freedom Alliance', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(30, 'United Peoples Freedom Alliance', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(31, 'United Peoples Freedom Alliance', 4, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(32, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(33, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(34, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(35, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(36, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(37, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(38, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(39, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(40, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(41, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(42, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(43, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(44, 'United National Party', 12, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(45, 'United National Party', 12, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(46, 'United National Party', 12, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(47, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(48, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(49, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(50, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(51, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(52, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(53, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(54, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(55, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(56, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(57, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(58, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(59, 'United National Party', 1, 'Central', 'Kandy', 'Colombo Central', 1, 0),
(60, 'United National Party', 1, 'Central', 'Kandy', 'Colombo Central', 1, 0),
(61, 'United National Party', 2, 'Central', 'Kandy', 'Colombo Central', 1, 0),
(62, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(63, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(64, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(65, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(66, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(67, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(68, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(69, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(70, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(71, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(72, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(73, 'United National Party', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(74, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(75, 'United National Party', 2, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(76, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(77, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(78, 'United National Party', 3, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(79, 'New Democratic Front', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0),
(80, 'New Democratic Front', 1, 'Western', 'Colombo', 'Colombo Central', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `distric`
--

CREATE TABLE IF NOT EXISTS `distric` (
  `Distric_No` int(11) NOT NULL,
  `Distric_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Distric_No`,`Distric_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distric`
--

INSERT INTO `distric` (`Distric_No`, `Distric_Name`) VALUES
(1, 'Colombo'),
(2, 'Gampaha'),
(3, 'Kaluthara'),
(4, 'Kandy'),
(5, 'Matale'),
(6, 'Nuwara-Eliya'),
(7, 'Galle'),
(8, 'Matara'),
(9, 'Hambantota'),
(10, 'Jaffna'),
(11, 'Vanni'),
(12, 'Batticaloa'),
(13, 'Digamadulla'),
(14, 'Trincomalee'),
(15, 'Kurunegala'),
(16, 'Puttalam'),
(17, 'Anuradhapura'),
(18, 'Polonnaruwa'),
(19, 'Badulla'),
(20, 'Moneragala'),
(21, 'Ratnapura'),
(22, 'Kegalle');

-- --------------------------------------------------------

--
-- Table structure for table `e_officers_details`
--

CREATE TABLE IF NOT EXISTS `e_officers_details` (
  `nic` varchar(10) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `add_L1` varchar(255) DEFAULT NULL,
  `add_L2` varchar(255) DEFAULT NULL,
  `add_L3` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `province` varchar(100) NOT NULL,
  `distric` varchar(255) DEFAULT NULL,
  `p_division` varchar(255) DEFAULT NULL,
  `p_station` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_officers_details`
--

INSERT INTO `e_officers_details` (`nic`, `f_name`, `l_name`, `add_L1`, `add_L2`, `add_L3`, `age`, `email`, `province`, `distric`, `p_division`, `p_station`, `status`) VALUES
('567567567V', 'fhgf', 'jhkhlhh', '111', 'asdasd', 'efascas', 55, 'amila@fdf.com', 'North Central', 'Anuradhapura', 'Kalawewa', 'Kalawewa', 'Not_Ok'),
('880884638V', 'sunil', 'nimesh', '33', 'q street', 'colombo', 37, 'sunil@gmail.com', 'Western', 'Colombo', 'Colombo Central', 'Kaduwela', 'Not_Ok'),
('895546222V', 'Kamal', 'Suranga', '13', 'galewela', 'matale', 39, 'kamal@gmail.com', 'Central', 'Matale', 'Galewela', 'Yatinuwara', 'Not_Ok');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `indexo` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(12) NOT NULL,
  `aCode` varchar(12) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`userName`),
  UNIQUE KEY `indexo` (`indexo`),
  UNIQUE KEY `indexo_2` (`indexo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`indexo`, `userName`, `aCode`, `ip`) VALUES
(1, '880884638V', 'Amila', '122.35.25.11');

-- --------------------------------------------------------

--
-- Table structure for table `pollin_div`
--

CREATE TABLE IF NOT EXISTS `pollin_div` (
  `Distric_No` int(11) NOT NULL,
  `Distric_Name` varchar(50) NOT NULL,
  `polling_Division` varchar(50) NOT NULL,
  PRIMARY KEY (`Distric_No`,`Distric_Name`,`polling_Division`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pollin_div`
--

INSERT INTO `pollin_div` (`Distric_No`, `Distric_Name`, `polling_Division`) VALUES
(1, 'Colombo', 'Avissawella'),
(1, 'Colombo', 'Borella'),
(1, 'Colombo', 'Colombo Central'),
(1, 'Colombo', 'Colombo East'),
(1, 'Colombo', 'Colombo North'),
(1, 'Colombo', 'Colombo West'),
(1, 'Colombo', 'Dehiwala'),
(1, 'Colombo', 'Homagama'),
(1, 'Colombo', 'Kaduwele'),
(1, 'Colombo', 'Kesbewa'),
(1, 'Colombo', 'Kolonnawa'),
(1, 'Colombo', 'Kotte'),
(1, 'Colombo', 'Maharagama'),
(1, 'Colombo', 'Moratuwa'),
(1, 'Colombo', 'Ratmalana'),
(2, 'Gampaha', 'Attanagalla'),
(2, 'Gampaha', 'Biyagama'),
(2, 'Gampaha', 'Divulapitiya'),
(2, 'Gampaha', 'Dompe'),
(2, 'Gampaha', 'Gampaha'),
(2, 'Gampaha', 'Ja-Ela'),
(2, 'Gampaha', 'Katana'),
(2, 'Gampaha', 'Kelaniya'),
(2, 'Gampaha', 'Mahara'),
(2, 'Gampaha', 'Minuwangoda'),
(2, 'Gampaha', 'Mirigama'),
(2, 'Gampaha', 'Negombo'),
(2, 'Gampaha', 'Wattala'),
(3, 'Kalutara', 'Agalawatta'),
(3, 'Kalutara', 'Bandaragama'),
(3, 'Kalutara', 'Beruwala'),
(3, 'Kalutara', 'Bulathsinhala'),
(3, 'Kalutara', 'Horana'),
(3, 'Kalutara', 'Kalutara'),
(3, 'Kalutara', 'Matugama'),
(3, 'Kalutara', 'Panadura'),
(4, 'Mahanuwara', 'Galagedara'),
(4, 'Mahanuwara', 'Gampola'),
(4, 'Mahanuwara', 'Harispattuwa'),
(4, 'Mahanuwara', 'Hewaheta'),
(4, 'Mahanuwara', 'Kundasale'),
(4, 'Mahanuwara', 'Mahanuwara'),
(4, 'Mahanuwara', 'Nawalapitiya'),
(4, 'Mahanuwara', 'Patha-Dumbara'),
(4, 'Mahanuwara', 'Senkadagala'),
(4, 'Mahanuwara', 'Teldeniya'),
(4, 'Mahanuwara', 'Udunuwara'),
(4, 'Mahanuwara', 'Yatinuwara'),
(4, 'Mahanuwara`', 'Uda-Dumbara'),
(5, 'Matale', 'Dambulla'),
(5, 'Matale', 'Laggala'),
(5, 'Matale', 'Matale'),
(5, 'Matale', 'Rattota'),
(6, 'Nuwara-Eliya', 'Hanguranketa'),
(6, 'Nuwara-Eliya', 'Kotmale'),
(6, 'Nuwara-Eliya', 'Nuwara-Eliya-Maskeliya'),
(6, 'Nuwara-Eliya', 'Walapane'),
(7, 'Galle', 'Akmeemana'),
(7, 'Galle', 'Ambalangoda'),
(7, 'Galle', 'Baddegama'),
(7, 'Galle', 'Balapitiya'),
(7, 'Galle', 'Bentara-Elpitiya'),
(7, 'Galle', 'Galle'),
(7, 'Galle', 'Habaraduwa'),
(7, 'Galle', 'Hiniduma'),
(7, 'Galle', 'Karandeniya'),
(7, 'Galle', 'Ratgama'),
(8, 'Matara', 'Akuressa'),
(8, 'Matara', 'Deniyaya'),
(8, 'Matara', 'Devinuwra'),
(8, 'Matara', 'Hakmana'),
(8, 'Matara', 'Kamburupitiya'),
(8, 'Matara', 'Matara'),
(8, 'Matara', 'Weligama'),
(9, 'Hambantota', 'Beliatta'),
(9, 'Hambantota', 'Mulkirigala'),
(9, 'Hambantota', 'Tangalle'),
(9, 'Hambantota', 'Tissamaharama'),
(10, 'Jaffna', 'Chavakachcheri'),
(10, 'Jaffna', 'Jaffna'),
(10, 'Jaffna', 'Kankesanturai'),
(10, 'Jaffna', 'Kayts'),
(10, 'Jaffna', 'Kilinochchi'),
(10, 'Jaffna', 'Kopay'),
(10, 'Jaffna', 'Manipay'),
(10, 'Jaffna', 'Nallur'),
(10, 'Jaffna', 'Point Pedro'),
(10, 'Jaffna', 'Udupiddy'),
(10, 'Jaffna', 'Vaddukkoddai'),
(11, 'Vanni', 'Mannar'),
(11, 'Vanni', 'Mullaitivu'),
(11, 'Vanni', 'Vavuniya'),
(12, 'Batticaloa', 'Batticaloa'),
(12, 'Batticaloa', 'Kalkuda'),
(12, 'Batticaloa', 'Padiruppu'),
(13, 'Digamadulla', 'Ampara'),
(13, 'Digamadulla', 'Kalmunei'),
(13, 'Digamadulla', 'Potuvil'),
(13, 'Digamadulla', 'Sammanturai'),
(14, 'Tricomalee', 'Mutur'),
(14, 'Tricomalee', 'Seruwila'),
(14, 'Tricomalee', 'Tricomalee'),
(15, 'Kurunegala', 'Bingiriya'),
(15, 'Kurunegala', 'Dambadeniya'),
(15, 'Kurunegala', 'Dodangaslanda'),
(15, 'Kurunegala', 'Galgamuwa'),
(15, 'Kurunegala', 'Hiriyala'),
(15, 'Kurunegala', 'Katugampola'),
(15, 'Kurunegala', 'Kuliyapitiya'),
(15, 'Kurunegala', 'Kurunegala'),
(15, 'Kurunegala', 'Mawathagama'),
(15, 'Kurunegala', 'Nikaweratiya'),
(15, 'Kurunegala', 'Panduwasnuwara'),
(15, 'Kurunegala', 'Polgahawela'),
(15, 'Kurunegala', 'Wariyapola'),
(15, 'Kurunegala', 'Yapahuwa'),
(16, 'Puttalam', 'Anamaduwa'),
(16, 'Puttalam', 'Chillaw'),
(16, 'Puttalam', 'Nattandiya'),
(16, 'Puttalam', 'Puttalam'),
(16, 'Puttalam', 'Wennappuwa'),
(17, 'Anuradhapura', 'Anuradhapura East'),
(17, 'Anuradhapura', 'Anuradhapura West'),
(17, 'Anuradhapura', 'Horowupotana'),
(17, 'Anuradhapura', 'Kalawewa'),
(17, 'Anuradhapura', 'Kekirawa'),
(17, 'Anuradhapura', 'Medawachchiya'),
(17, 'Anuradhapura', 'Mihintale'),
(18, 'Polonnaruwa', 'Medirigiriya'),
(18, 'Polonnaruwa', 'Minneriya'),
(18, 'Polonnaruwa', 'Polonnaruwa'),
(19, 'Badulla', 'Badulla'),
(19, 'Badulla', 'Bandarawela'),
(19, 'Badulla', 'Hali-Ela'),
(19, 'Badulla', 'Haputale'),
(19, 'Badulla', 'Mahiyangane'),
(19, 'Badulla', 'Passara'),
(19, 'Badulla', 'Uva-Paranagama'),
(19, 'Badulla', 'Welimada'),
(19, 'Badulla', 'Wiyaluwa'),
(20, 'Monaragala', 'Bibile'),
(20, 'Monaragala', 'Monaragala'),
(20, 'Monaragala', 'Wellawaya'),
(21, 'Ratnapura', 'Balangoda'),
(21, 'Ratnapura', 'Eheliyagoda'),
(21, 'Ratnapura', 'Kalawana'),
(21, 'Ratnapura', 'Kolonna'),
(21, 'Ratnapura', 'Nivitigala'),
(21, 'Ratnapura', 'Pelmadulla'),
(21, 'Ratnapura', 'Rakwana'),
(21, 'Ratnapura', 'Ratnapura'),
(22, 'Kegalle', 'Aranayake'),
(22, 'Kegalle', 'Dedigama'),
(22, 'Kegalle', 'Deraniyagala'),
(22, 'Kegalle', 'Gligamuwa'),
(22, 'Kegalle', 'Kegalle'),
(22, 'Kegalle', 'Mawanella'),
(22, 'Kegalle', 'Rambukkana'),
(22, 'Kegalle', 'Ruwanwella'),
(22, 'Kegalle', 'Yatiyantota');

-- --------------------------------------------------------

--
-- Table structure for table `p_election`
--

CREATE TABLE IF NOT EXISTS `p_election` (
  `E_party` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `distric` varchar(100) NOT NULL,
  `p_division` varchar(100) NOT NULL,
  `1998` int(11) NOT NULL,
  `2004` int(11) NOT NULL,
  `2010` int(11) NOT NULL,
  PRIMARY KEY (`E_party`,`p_division`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_election`
--

INSERT INTO `p_election` (`E_party`, `province`, `distric`, `p_division`, `1998`, `2004`, `2010`) VALUES
('Jathika Hela Urumaya', 'Western', 'Colombo', 'Kaduwela', 5641, 6574, 3215),
('Jathika Hela Urumaya', 'Central', 'Kandy', 'Yatinuwara', 3548, 2156, 5214),
('New Democratic Front', 'Central', 'Kandy', 'Yatinuwara', 15284, 16358, 12054),
('Peoples Liberation Front', 'Western', 'Colombo', 'Kaduwela', 7821, 3254, 8684),
('Peoples Liberation Front', 'Central', 'Kandy', 'Yatinuwara', 10000, 12457, 11012),
('Sri Lanka Muslim Congress', 'Western', 'Colombo', 'Kaduwela', 2354, 1254, 2100),
('Sri Lanka Muslim Congress', 'Central', 'Kandy', 'Yatinuwara', 6587, 3457, 5214),
('United National Party', 'Western', 'Colombo', 'Kaduwela', 45782, 52142, 39875),
('United National Party', 'Central', 'Kandy', 'Yatinuwara', 123545, 458756, 352142),
('United Peoples Freedom Alliance', 'Western', 'Colombo', 'Kaduwela', 45875, 42584, 39545),
('United Peoples Freedom Alliance', 'Central', 'Kandy', 'Yatinuwara', 135487, 152487, 205487);

-- --------------------------------------------------------

--
-- Table structure for table `p_pdelection`
--

CREATE TABLE IF NOT EXISTS `p_pdelection` (
  `E_party` varchar(100) NOT NULL,
  `1998` int(11) NOT NULL,
  `2004` int(11) NOT NULL,
  `2010` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_pdelection`
--

INSERT INTO `p_pdelection` (`E_party`, `1998`, `2004`, `2010`) VALUES
('United National Party', 1200785, 1532480, 1168974),
('United Peoples Freedom Alliance', 1956584, 2145875, 1824582),
('Peoples Liberation Front', 9325464, 8452011, 6542871),
('Jathika Hela Urumaya', 7554632, 5721424, 6547214),
('New Democratic Front', 15284, 16358, 12054),
('Sri Lanka Muslim Congress', 65845, 68475, 76485);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE IF NOT EXISTS `seats` (
  `province` varchar(100) NOT NULL,
  `distric` varchar(100) NOT NULL,
  `seats` int(100) NOT NULL,
  PRIMARY KEY (`province`,`distric`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`province`, `distric`, `seats`) VALUES
('Central', 'Kandy', 12),
('Central', 'Matale', 5),
('Central', 'Nuwra-Eliya', 7),
('Eastern', 'Ampara', 7),
('Eastern', 'Batticaloa', 5),
('Eastern', 'Trincomalee', 4),
('North Central', 'Anuradhapura', 9),
('North Central', 'Polonnaruwa', 5),
('North Western', 'Kurunegala', 16),
('North Western', 'Puttalam', 8),
('Nothern', 'Jaffna', 6),
('Nothern', 'Vanni', 6),
('Sabaragamuwa', 'Kegalle', 9),
('Sabaragamuwa', 'Ratnapura', 11),
('Southern', 'Galle', 10),
('Southern', 'Hambantota', 7),
('Southern', 'Matara', 8),
('Uva', 'Badulla', 9),
('Uva', 'Monaragala', 5),
('Western', 'Colombo', 19),
('Western', 'Gampaha', 18),
('Western', 'Kalutara', 10);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `indexv` int(11) NOT NULL AUTO_INCREMENT,
  `E_party` varchar(50) NOT NULL,
  `province` varchar(100) NOT NULL,
  `distric` varchar(50) NOT NULL,
  `p_division` varchar(50) NOT NULL,
  `vote_count` int(11) NOT NULL,
  `rejectVote` int(11) NOT NULL,
  PRIMARY KEY (`indexv`,`E_party`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`indexv`, `E_party`, `province`, `distric`, `p_division`, `vote_count`, `rejectVote`) VALUES
(1, 'Jathika Hela Urumaya', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(2, 'Sri Lanka Muslim Congress', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(3, 'Jathika Hela Urumaya', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(4, 'Jathika Hela Urumaya', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(5, 'Sri Lanka Muslim Congress', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(6, 'United Peoples Freedom Alliance', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(7, 'United Peoples Freedom Alliance', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(8, 'United Peoples Freedom Alliance', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(9, 'United Peoples Freedom Alliance', 'Central', 'Kandy', 'Yatinuwara', 0, 1),
(10, 'United National Party', 'Eastern', 'Ampara', 'Kalmunai', 1, 0),
(20, 'United National Party', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(31, 'rejected', 'Central', 'Kandy', 'Yatinuwara', 0, 1),
(32, 'rejected', 'Central', 'Kandy', 'Yatinuwara', 0, 1),
(33, 'rejected', 'Central', 'Kandy', 'Yatinuwara', 0, 1),
(34, 'United Peoples Freedom Alliance', 'Central', 'Kandy', 'Yatinuwara', 1, 0),
(35, 'rejected', 'Central', 'Kandy', 'Yatinuwara', 0, 1),
(36, 'rejected', 'Central', 'Kandy', 'Yatinuwara', 0, 1),
(37, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(38, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(39, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(40, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(41, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(42, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(43, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(44, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(45, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(46, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(47, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(48, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(50, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(51, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(52, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(53, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(54, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(55, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(56, 'Jathika Hela Urumaya', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(57, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(58, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(59, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(60, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(61, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(62, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(63, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(64, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(65, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(66, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(67, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(68, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(69, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(70, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(71, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(72, 'United Peoples Freedom Alliance', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(73, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(74, 'United Peoples Freedom Alliance', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(75, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(76, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(77, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(78, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(79, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(80, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(81, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(82, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(83, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(84, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(85, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(86, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(87, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(88, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(89, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(90, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(91, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(92, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(93, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(94, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(95, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(96, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(97, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(98, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(99, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(100, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(101, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(102, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(103, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(104, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(105, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(106, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(107, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(108, 'United National Party', 'Central', 'Kandy', 'Colombo Central', 1, 0),
(109, 'rejected', 'Central', 'Kandy', 'Colombo Central', 0, 1),
(110, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(111, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(112, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(113, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(114, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(115, 'Peoples Liberation Front', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(116, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(117, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(118, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(119, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(120, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(121, 'United National Party', 'Western', 'Colombo', 'Colombo Central', 1, 0),
(122, 'rejected', 'Western', 'Colombo', 'Colombo Central', 0, 1),
(123, 'New Democratic Front', 'Western', 'Colombo', 'Colombo Central', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `voters_details`
--

CREATE TABLE IF NOT EXISTS `voters_details` (
  `nic` varchar(10) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `add_L1` varchar(255) DEFAULT NULL,
  `add_L2` varchar(255) DEFAULT NULL,
  `add_L3` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `province` varchar(100) NOT NULL,
  `distric` varchar(255) DEFAULT NULL,
  `p_division` varchar(255) DEFAULT NULL,
  `p_station` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters_details`
--

INSERT INTO `voters_details` (`nic`, `f_name`, `l_name`, `add_L1`, `add_L2`, `add_L3`, `age`, `province`, `distric`, `p_division`, `p_station`, `status`) VALUES
('345345345V', 'sdfgdf', 'sdfgsdf', 'fghsdfert', 'sdhsdgh', 'sdhash', 45, 'Central', 'Kandy', 'Gampola', 'Gampola Youth Corps Training Center, Mahara', 'Not_Ok'),
('444444444V', 'dfsgdfg', 'sdfgsdf', 'sdfg', 'cvbsf', 'vbsdf', 23, 'Western', 'Colombo', 'Colombo Central', 'Kaduwela', 'voted');
