-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2017 at 02:04 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `acrooms`
--

CREATE TABLE IF NOT EXISTS `acrooms` (
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acrooms`
--

INSERT INTO `acrooms` (`roomno`, `bedno`, `status`) VALUES
(1, 1, 'Booked'),
(2, 1, 'Not Booked'),
(3, 1, 'Not Booked'),
(4, 1, 'Booked'),
(4, 2, 'Booked'),
(5, 1, 'Not Booked'),
(5, 2, 'Not Booked'),
(6, 1, 'Not Booked'),
(6, 2, 'Not Booked'),
(7, 1, 'Booked'),
(7, 2, 'Not Booked'),
(7, 3, 'Not Booked'),
(8, 1, 'Not Booked'),
(8, 2, 'Not Booked'),
(8, 3, 'Not Booked'),
(9, 1, 'Not Booked'),
(9, 2, 'Not Booked'),
(9, 3, 'Not Booked'),
(10, 1, 'Not Booked'),
(10, 2, 'Not Booked'),
(10, 3, 'Not Booked');

-- --------------------------------------------------------

--
-- Table structure for table `additionalinfo`
--

CREATE TABLE IF NOT EXISTS `additionalinfo` (
  `adhar` varchar(14) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `collegename` varchar(20) NOT NULL,
  `collegeaddr` varchar(30) NOT NULL,
  `fatherscontact` varchar(10) NOT NULL,
  `motherscontact` varchar(10) NOT NULL,
  PRIMARY KEY (`adhar`),
  UNIQUE KEY `fatherscontact` (`fatherscontact`,`motherscontact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additionalinfo`
--

INSERT INTO `additionalinfo` (`adhar`, `state`, `city`, `address`, `collegename`, `collegeaddr`, `fatherscontact`, `motherscontact`) VALUES
('7218 1282 9571', 'Maharashtra', 'AKOLA', 'SASHTRI NAGAR , LEELAI SANKUL , FLAT NO. 101 ,AKOL', 'PICT PUNE', 'KATRAJ PUNE', '9822667997', '9011303667'),
('7020 1285 2371', 'Maharashtra', 'NAGPUR', 'PATEL NGP , OPPOSITE TO POST OFFICE NAGPUR', 'PICT PUNE', 'KATRAJ PUNE', '2320128570', '3020128527'),
('1231 1231 1231', 'Maharashtra', 'ihcpo', 'nvsdOp', 'nvodpsjvp', 'ndopv', '3131231212', '2311231123'),
('4564 4564 4564', 'Maharashtra', 'nviodvp', 'hiud9y', 'biuvbi', 'hie8h98w', '6464564545', '5644564456'),
('8007 4801 6484', 'Maharashtra', 'YAVATMAL', 'RAJNEKAR YAVATMAL', 'PICT PUNE', 'KATRAJ PUNE', '1591591591', '3573573573'),
('9094 9300 8799', 'Maharashtra', 'iosdhovi', 'bioaro', 'buiarog', 'buarog8', '8794930090', '9094930089');

-- --------------------------------------------------------

--
-- Table structure for table `adminemailpass`
--

CREATE TABLE IF NOT EXISTS `adminemailpass` (
  `emailid` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminemailpass`
--

INSERT INTO `adminemailpass` (`emailid`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `backupstaff`
--

CREATE TABLE IF NOT EXISTS `backupstaff` (
  `adhar` varchar(14) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `duty` varchar(10) NOT NULL,
  `salary` int(5) NOT NULL,
  PRIMARY KEY (`adhar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backupstaff`
--

INSERT INTO `backupstaff` (`adhar`, `firstname`, `lastname`, `contactno`, `state`, `city`, `address`, `gender`, `designation`, `duty`, `salary`) VALUES
('7894 3712 2117', 'Piyush', 'Salve', '7972132324', 'Maharashtra', 'MUMBAI', 'Near City Mall,Uma colony,Flat', 'male', 'Watchman', 'night', 18000),
('8421 3456 9631', 'Prachi', 'Jha', '9113474626', 'Maharashtra', 'Nasik', 'Near Dhantoli Park,resident ro', 'female', 'Cleaner', 'day', 20000),
('1021 4641 8991', 'Raju', 'Pawar', '9423403124', 'Gujarat', 'Gandhinagar', 'Near vishal kids wear, Law com', 'male', 'Watchman', 'day', 20001);

-- --------------------------------------------------------

--
-- Table structure for table `backuptable`
--

CREATE TABLE IF NOT EXISTS `backuptable` (
  `adhar` varchar(14) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `typeofroom` varchar(15) NOT NULL,
  `subtypeofroom` varchar(10) NOT NULL,
  PRIMARY KEY (`adhar`),
  UNIQUE KEY `emailid` (`emailid`,`contactno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backuptable`
--

INSERT INTO `backuptable` (`adhar`, `firstname`, `lastname`, `emailid`, `contactno`, `typeofroom`, `subtypeofroom`) VALUES
('7798 5331 7275', 'ANIRUDDHA', 'RAJNEKAR', 'rajnekaraniruddha@gmail.com', '7798533172', 'AC ROOM', '2 SEATER'),
('7972 1615 5471', 'RAMAN', 'MISHRA', 'mishraraman@gmail.com', '7972161554', 'NON AC ROOM', '3 SEATER'),
('7218 1282 9571', 'AYESHA', 'SAOJI', 'saojiayesha@gmail.com', '7218128295', 'AC ROOM', '1 SEATER'),
('7020 1285 2371', 'SHRUTI', 'PATEL', 'patelshruti@gmail.com', '7020128523', 'NON AC ROOM', '1 SEATER');

-- --------------------------------------------------------

--
-- Table structure for table `basicformfill`
--

CREATE TABLE IF NOT EXISTS `basicformfill` (
  `enquiryid` int(10) NOT NULL,
  `adhar` varchar(14) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `typeofroom` varchar(15) NOT NULL,
  `subtypeofroom` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL,
  PRIMARY KEY (`adhar`),
  UNIQUE KEY `enquiryid` (`enquiryid`,`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basicformfill`
--

INSERT INTO `basicformfill` (`enquiryid`, `adhar`, `firstname`, `lastname`, `emailid`, `contactno`, `typeofroom`, `subtypeofroom`, `display`) VALUES
(5, '1231 1231 1231', 'AYUSH', 'MUKESH', 'hio@gmail.com', '1231231231', 'AC ROOM', '1 SEATER', 'student'),
(8, '8007 4801 6484', 'ANIRUDDHA', 'RAJNEKAR', 'rajnekaraniruddha@gmail.com', '8007480164', 'AC ROOM', '2 SEATER', 'student'),
(6, '7897 8978 9778', 'ishita', 'mehta', 'mehtaishita@gmail.com', '7897897897', 'NON AC ROOM', '2 SEATER', 'basicinfo'),
(7, '4564 4564 4564', 'ayushi', 'raut', 'rautayushi@gmail.com', '4564564564', 'AC ROOM', '2 SEATER', 'student'),
(9, '9094 9300 8799', 'ANUJ', 'PAHADE', 'pahadeanuj@gmail.com', '9094930087', 'AC ROOM', '3 SEATER', 'student'),
(10, '5645 5645 5645', 'bidhoc', 'hisacoi', 'bcibi@gmail.com', '5645645645', 'AC ROOM', '3 SEATER', 'basicinfo');

-- --------------------------------------------------------

--
-- Table structure for table `basic_enquiry`
--

CREATE TABLE IF NOT EXISTS `basic_enquiry` (
  `enquiryid` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  PRIMARY KEY (`enquiryid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_enquiry`
--


-- --------------------------------------------------------

--
-- Table structure for table `calchitratio`
--

CREATE TABLE IF NOT EXISTS `calchitratio` (
  `hr` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calchitratio`
--

INSERT INTO `calchitratio` (`hr`) VALUES
(40),
(40),
(40),
(40),
(40),
(40),
(40),
(40),
(40),
(40),
(40);

-- --------------------------------------------------------

--
-- Table structure for table `complaintbox`
--

CREATE TABLE IF NOT EXISTS `complaintbox` (
  `complaintid` int(10) NOT NULL,
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `complaint` varchar(20) NOT NULL,
  `resolvedstatus` varchar(30) NOT NULL,
  `compregestred` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`complaintid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintbox`
--

INSERT INTO `complaintbox` (`complaintid`, `roomno`, `bedno`, `complaint`, `resolvedstatus`, `compregestred`) VALUES
(1, 11, 1, 'ELECTRICAL ISSUES', 'RESOLVED', '2017-10-06 00:39:30'),
(2, 11, 1, 'CLEANING ISSUES', 'RESOLVED', '2017-10-08 09:47:47'),
(3, 1, 1, 'ELECTRICAL ISSUES', 'RESOLVED', '2017-10-06 00:36:28'),
(4, 1, 1, 'INFRASTRUCTURE ISSUE', 'RESOLVED', '2017-10-07 09:31:31'),
(5, 1, 1, 'CLEANING ISSUES', 'RESOLVED', '2017-10-09 05:47:23'),
(6, 1, 1, 'CLEANING ISSUES', 'Not Yet Resolved', '2017-10-06 19:27:21'),
(7, 1, 1, 'CLEANING ISSUES', 'Not Yet Resolved', '2017-10-06 19:28:54'),
(15, 7, 1, 'INFRASTRUCTURE ISSUE', 'RESOLVED', '2017-10-11 04:23:22'),
(10, 0, 0, 'CLEANING ISSUES', 'Not Yet Resolved', '2017-10-09 05:30:31'),
(11, 1, 1, 'CLEANING ISSUES', 'Not Yet Resolved', '2017-10-09 05:31:20'),
(12, 4, 2, 'PLUMBING ISSUES', 'RESOLVED', '2017-10-09 06:42:35'),
(13, 7, 1, 'CLEANING ISSUES', 'RESOLVED', '2017-10-09 11:59:29'),
(14, 7, 1, 'OTHER ISSUES', 'Not Yet Resolved', '2017-10-09 11:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `emailpass`
--

CREATE TABLE IF NOT EXISTS `emailpass` (
  `emailid` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailpass`
--

INSERT INTO `emailpass` (`emailid`, `password`) VALUES
('saojiayesha@gmail.com', 'ayesha'),
('patelshruti@gmail.com', 'shruti'),
('hio@gmail.com', 'hiohio'),
('rajnekaraniruddha@gmail.com', 'aniruddha'),
('pahadeanuj@gmail.com', 'anuj');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `month` varchar(15) NOT NULL,
  `wifiamt` int(11) NOT NULL,
  `laundryamt` int(11) NOT NULL,
  `messamt` int(11) NOT NULL,
  `totalamt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`roomno`, `bedno`, `month`, `wifiamt`, `laundryamt`, `messamt`, `totalamt`) VALUES
(11, 1, 'JANUARY', 100, 500, 2400, 3000),
(11, 1, 'FEBUARY', 100, 500, 2400, 3000),
(1, 1, 'JUNE', 100, 500, 2400, 3000),
(1, 1, 'SEPTEMBER', 100, 500, 1200, 1800),
(1, 1, 'MARCH', 100, 500, 3600, 4200),
(11, 1, 'MAY', 100, 500, 2400, 3000),
(1, 1, 'OCTOBER', 100, 500, 2400, 3000),
(4, 2, 'APRIL', 100, 500, 2400, 3000),
(7, 1, 'FEBUARY', 100, 500, 2400, 3000),
(4, 2, 'JULY', 100, 500, 2400, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `cleaning` int(11) NOT NULL,
  `infrastructure` int(11) NOT NULL,
  `electrical` int(11) NOT NULL,
  `plumbing` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`roomno`, `bedno`, `cleaning`, `infrastructure`, `electrical`, `plumbing`, `other`) VALUES
(11, 1, 5, 4, 4, 2, 1),
(1, 1, 2, 2, 1, 3, 4),
(4, 2, 5, 4, 4, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `formfill`
--

CREATE TABLE IF NOT EXISTS `formfill` (
  `enquiryid` int(10) NOT NULL,
  `adhar` varchar(14) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `collegename` varchar(30) NOT NULL,
  `collegeaddr` varchar(30) NOT NULL,
  `typeofroom` varchar(15) NOT NULL,
  `subtypeofroom` varchar(10) NOT NULL,
  `femail` varchar(30) DEFAULT NULL,
  `fcontact` varchar(10) NOT NULL,
  `memail` varchar(30) DEFAULT NULL,
  `mcontact` varchar(10) NOT NULL,
  `display` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`adhar`),
  UNIQUE KEY `enquiryid` (`enquiryid`,`emailid`,`contactno`,`femail`,`fcontact`,`memail`,`mcontact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formfill`
--

INSERT INTO `formfill` (`enquiryid`, `adhar`, `firstname`, `lastname`, `emailid`, `contactno`, `state`, `city`, `address`, `collegename`, `collegeaddr`, `typeofroom`, `subtypeofroom`, `femail`, `fcontact`, `memail`, `mcontact`, `display`) VALUES
(1, '7218 1282 9571', 'AYESHA', 'SAOJI', 'saojiayesha@gmail.com', '7218128295', 'Maharashtra', 'AKOLA', 'SASHTRI NAGAR , LEELAI SANKUL ', 'PICT ', 'KATRAJ PUNE', 'AC ROOMS', '1 SEATER', 'saojiamar@gamil.com', '9822667997', 'saojisunita@gamil.com', '9011303667', 'infotaken'),
(2, '9096 6473 7096', 'VAIBHAVI', 'HEDAOO', 'hedaoovaibhavi@gmail.com', '9096647370', 'Maharashtra', 'AMRAVATI', 'TEACHER COLONY VARUD AMRAVATI', 'PICT PUNE', 'KATRAJ PUNE', 'NON AC ROOMS', '3 SEATER', 'fheadaoo@gmail.com', '9970863971', 'hedaoosunita@gmail.com', '9403309444', 'infotaken'),
(3, '7798 5331 7275', 'ANIRUDDHA', 'RAJNEKAR', 'rajnekaraniruddha@gmail.com', '7798533172', 'Maharashtra', 'YAVATMAL', 'RAJNEKAR YAVATMAL', 'PICT PUNE', 'KATRAJ PUNE', 'AC ROOMS', '3 SEATER', 'frajnekar@gmail.com', '2713358977', 'mrajnekar@gmail.com', '2713358977', 'infotaken'),
(4, '8975 4644 7184', 'SHRUTI', 'PATEL', 'patelshruti@gmail.com', '8975464471', 'Maharashtra', 'NAGPUR', 'PATEL NGP , OPPOSITE TO POST O', 'PICT PUNE', 'KATRAJ PUNE', 'AC ROOMS', '1 SEATER', 'fpatel@gmail.com', '1744645798', 'mpatel@gmail.com', '1744645798', 'infotaken'),
(5, '7350 5699 7475', 'BATUL', 'MERCHANT', 'merchantbatul@gmail.com', '7350569974', 'Maharashtra', 'MUMBAI', 'MERCHANT HOUSE  GOREGAON', 'PICT PUNE', 'KATRAJ PUNE', 'AC ROOMS', '1 SEATER', 'fmerchant@gmail.com', '4350569977', 'mmerchant@gmail.com', '4799650537', 'infotaken'),
(6, '7218 1282 9578', 'dtysuk', 'vsaiu', 'vjk@gmail.com', '1231231231', 'Maharashtra', 'AKOLA', 'SASHTRI NAGAR , LEELAI SANKUL ', 'PICT PUNE', 'KATRAJ PUNE', 'AC ROOMS', '2 SEATER', 'hjsaj@gmail.com', '1234567891', 'ahsvksa@gmail.com', '4445556664', 'infotaken'),
(7, '1111 5555 6666', 'kjqhl', 'BCDQIHO', 'VYQI@gmail.com', '1237894563', 'Maharashtra', 'Pune', 'katraj', 'PICT', 'KATRAJ PUNE', 'AC ROOMS', '3 SEATER', 'xjhax@gmil.com', '3333444455', 'dvweh@gmail.com', '7778889996', 'infotaken');

-- --------------------------------------------------------

--
-- Table structure for table `morethanonedaynightout`
--

CREATE TABLE IF NOT EXISTS `morethanonedaynightout` (
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `numdays` int(11) NOT NULL,
  `from` varchar(10) NOT NULL,
  `tillwhen` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `morethanonedaynightout`
--

INSERT INTO `morethanonedaynightout` (`roomno`, `bedno`, `numdays`, `from`, `tillwhen`) VALUES
(1, 1, 20, '20-06-2010', '10-07-2010'),
(1, 1, 20, '20-06-2010', '10-07-2010'),
(1, 1, 10, '12-05-2010', '22-05-2010'),
(1, 1, 5, '05-03-2014', '11-03-2014');

-- --------------------------------------------------------

--
-- Table structure for table `nonacrooms`
--

CREATE TABLE IF NOT EXISTS `nonacrooms` (
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonacrooms`
--

INSERT INTO `nonacrooms` (`roomno`, `bedno`, `status`) VALUES
(11, 1, 'Not Booked'),
(12, 1, 'Not Booked'),
(13, 1, 'Not Booked'),
(14, 1, 'Not Booked'),
(14, 2, 'Not Booked'),
(15, 1, 'Not Booked'),
(15, 2, 'Not Booked'),
(16, 1, 'Not Booked'),
(16, 2, 'Not Booked'),
(17, 1, 'Not Booked'),
(17, 2, 'Not Booked'),
(17, 3, 'Not Booked'),
(18, 1, 'Not Booked'),
(18, 2, 'Not Booked'),
(18, 3, 'Not Booked'),
(19, 1, 'Not Booked'),
(19, 2, 'Not Booked'),
(19, 3, 'Not Booked'),
(20, 1, 'Not Booked'),
(20, 2, 'Not Booked'),
(20, 3, 'Not Booked');

-- --------------------------------------------------------

--
-- Table structure for table `notifyuser`
--

CREATE TABLE IF NOT EXISTS `notifyuser` (
  `adhar` varchar(14) NOT NULL,
  `typeofroom` varchar(15) NOT NULL,
  `subtypeofroom` varchar(10) NOT NULL,
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  PRIMARY KEY (`adhar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifyuser`
--

INSERT INTO `notifyuser` (`adhar`, `typeofroom`, `subtypeofroom`, `roomno`, `bedno`) VALUES
('1231 1231 1231', 'AC ROOM', '1 SEATER', 1, 1),
('4564 4564 4564', 'AC ROOM', '2 SEATER', 4, 1),
('8007 4801 6484', 'AC ROOM', '2 SEATER', 4, 2),
('9094 9300 8799', 'AC ROOM', '3 SEATER', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `onebyone`
--

CREATE TABLE IF NOT EXISTS `onebyone` (
  `totalnetprofit` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onebyone`
--

INSERT INTO `onebyone` (`totalnetprofit`) VALUES
(281700),
(281700),
(281700),
(281700),
(281700),
(281700),
(281700);

-- --------------------------------------------------------

--
-- Table structure for table `onedaynightout`
--

CREATE TABLE IF NOT EXISTS `onedaynightout` (
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `nightoutdate` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onedaynightout`
--

INSERT INTO `onedaynightout` (`roomno`, `bedno`, `nightoutdate`) VALUES
(1, 1, '20-08-2005'),
(1, 1, '20-08-2005'),
(1, 1, '13-04-2008'),
(1, 1, '28-09-2011'),
(1, 1, '09-05-2012');

-- --------------------------------------------------------

--
-- Table structure for table `paytable`
--

CREATE TABLE IF NOT EXISTS `paytable` (
  `typeofroom` varchar(15) NOT NULL,
  `subtypeofroom` varchar(10) NOT NULL,
  `totalpay` int(10) NOT NULL,
  `deposit` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paytable`
--

INSERT INTO `paytable` (`typeofroom`, `subtypeofroom`, `totalpay`, `deposit`) VALUES
('AC ROOM', '1 SEATER', 75000, 7500),
('AC ROOM', '2 SEATER', 70000, 7000),
('AC ROOM', '3 SEATER', 62000, 6200),
('NON AC ROOM', '1 SEATER', 65000, 6500),
('NON AC ROOM', '2 SEATER', 60000, 6000),
('NON AC ROOM', '3 SEATER', 52000, 5200);

-- --------------------------------------------------------

--
-- Table structure for table `prefbasic_enquiry`
--

CREATE TABLE IF NOT EXISTS `prefbasic_enquiry` (
  `enquiryid` int(10) NOT NULL,
  `adhar` varchar(14) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `typeofroom` varchar(20) NOT NULL,
  `subtypeofroom` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  PRIMARY KEY (`adhar`),
  UNIQUE KEY `enquiryid` (`enquiryid`,`emailid`,`contactno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prefbasic_enquiry`
--

INSERT INTO `prefbasic_enquiry` (`enquiryid`, `adhar`, `firstname`, `lastname`, `typeofroom`, `subtypeofroom`, `emailid`, `contactno`) VALUES
(2, '7798 5331 7275', 'ANIRUDDHA', 'RAJNEKAR', 'NON AC ROOMS', '2 SEATER', 'rajnekaraniruddha@gmail.com', '7798533172'),
(3, '8975 4644 7184', 'SHRUTI', 'PATEL', 'NON AC ROOMS', '3 SEATER', 'patelshruti@gmail.com', '8975464471'),
(4, '7972 1615 5471', 'RAMAN', 'MISHRA', 'NON AC ROOMS', '1 SEATER', 'mishraraman@gmail.com', '7972161554');

-- --------------------------------------------------------

--
-- Table structure for table `prefwhilealloting`
--

CREATE TABLE IF NOT EXISTS `prefwhilealloting` (
  `adhar` varchar(14) NOT NULL,
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  PRIMARY KEY (`adhar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prefwhilealloting`
--

INSERT INTO `prefwhilealloting` (`adhar`, `roomno`, `bedno`) VALUES
('9049 3000 8793', 2, 1),
('7218 1282 9571', 1, 1),
('8605 6267 4286', 4, 1),
('9930 3172 1293', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `requirementbox`
--

CREATE TABLE IF NOT EXISTS `requirementbox` (
  `roomno` int(11) NOT NULL,
  `bedno` int(11) NOT NULL,
  `requirement` varchar(200) NOT NULL,
  `fuilfillmentstatus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirementbox`
--

INSERT INTO `requirementbox` (`roomno`, `bedno`, `requirement`, `fuilfillmentstatus`) VALUES
(1, 1, 'improper cleaning facility', 'Not Yet Fulfilled');

-- --------------------------------------------------------

--
-- Table structure for table `security_stud`
--

CREATE TABLE IF NOT EXISTS `security_stud` (
  `adhar` varchar(15) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `collegename` varchar(30) NOT NULL,
  `collegeaddr` varchar(30) NOT NULL,
  `femailid` varchar(30) NOT NULL,
  `fcontactno` varchar(10) NOT NULL,
  `memailid` varchar(30) NOT NULL,
  `mcontactno` varchar(10) NOT NULL,
  PRIMARY KEY (`adhar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_stud`
--

INSERT INTO `security_stud` (`adhar`, `firstname`, `lastname`, `emailid`, `contactno`, `state`, `city`, `address`, `collegename`, `collegeaddr`, `femailid`, `fcontactno`, `memailid`, `mcontactno`) VALUES
('2582 3693 1471', 'GAUTAMI', 'SHINDE', 'shindegautami@gmail.com', '8055459000', 'Maharashtra', 'PUNE', 'KATRAJ', 'PICT PUNE', 'PUNE', 'abc@gmail.com', '9639639639', 'xyz@gmail.com', '8528528528'),
('4587 9654 0154', 'AAA', 'BBB', 'ab@gmail.com', '1591591591', 'Maharashtra', 'pune', 'pune', 'PICT', 'KATRAJ PUNE', 'abc@gmail.com', '1234567891', 'xyzpqr@gmail.com', '6456789989'),
('7994 4564 1231 ', 'ESHA', 'MEHRA', 'mehraesha@gmail.com', '7891236541', 'Maharashtra', 'nfsins;oa', 'niasjPF', 'ISDHP9Fos', 'ICUBOIs', 'abcdef@gmail.com', '1234567891', 'xyz@gmail.com', '4564567897'),
('9519 9519 9519 ', 'RUCHIKA', 'SUREKA', 'surekaruchika@gmail.com', '9519519519', 'Maharashtra', 'pune', 'pp', 'ppp', 'pppp', 'abc@gmail.com', '1234567891', 'xyz@gmail.com', '9876543212'),
('1239 6374 1212', 'ALI', 'KHAMUSHI', 'khamushiali@gmail.com', '1239637412', 'Maharashtra', 'lojp', 'JOISD', 'HSCIADH', 'JCSIOapd', 'abc@gmail.com', '1239637412', 'xyz@gmail.com', '1239637412'),
('1239 8745 6518', 'JUHI', 'CHAWALA', 'juhi@gmail.com', '1239874565', 'Maharashtra', 'ioSJsc', 'CSJOP', 'nSOPJcp', 'saKJlo', 'abc@gmail.com', '1239874565', 'abcdefgh@gmail.com', '1239874565');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `emailid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--


-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE IF NOT EXISTS `staffinfo` (
  `adhar` varchar(14) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `duty` varchar(10) NOT NULL,
  `salary` int(5) NOT NULL,
  `dtofjoin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`adhar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`adhar`, `firstname`, `lastname`, `contactno`, `state`, `city`, `address`, `gender`, `designation`, `duty`, `salary`, `dtofjoin`) VALUES
('4564 1231 7841', 'PIYUSH', 'SALVE', '4561237891', 'Maharashtra', 'MUMBAI', 'NOJPJO', 'male', 'WATCHMAN', 'night', 18000, '2017-10-09 06:14:16'),
('1471 1471 1471', 'ESHA', 'MEHRA', '1471471471', 'Maharashtra', 'NANDED', 'MEHRA NAGAR', 'male', 'Cleaner', 'day', 15000, '2017-10-09 06:08:55');
