-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2014 at 04:03 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `courseinfo`
--

CREATE TABLE IF NOT EXISTS `courseinfo` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_no` varchar(9) DEFAULT NULL,
  `course_name` varchar(31) DEFAULT NULL,
  `instructor` varchar(20) DEFAULT NULL,
  `instructor_webmail` varchar(20) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `courseinfo`
--

INSERT INTO `courseinfo` (`course_id`, `course_no`, `course_name`, `instructor`, `instructor_webmail`) VALUES
(1, 'CS 201', 'Data Structures', 'Saswata Shannigrahi', 's.saswata'),
(2, 'CS 221', 'Digital Design', 'Santosh Biswas', 'santosh.biswas'),
(3, 'MA 201', 'Mathematics III', 'Swaroop Nandan Bora', 'swaroop'),
(4, 'HS 214', 'Cultural Studies', 'Liza Das', 'l.das'),
(5, 'HS 236', 'Introduction To Phonetics', 'Priyankoo Sarmah', 'p.sarmah'),
(6, 'HS 221', 'Language, Culture and Cognition', 'Bidisha Som', 'b.som'),
(7, 'CS 202', 'Discrete Mathematics', 'Ashish Anand', 'a.anand'),
(8, 'MA 225', 'Probability', 'K.V.Srikanth', 'srikanth');

-- --------------------------------------------------------

--
-- Table structure for table `facultyinfo`
--

CREATE TABLE IF NOT EXISTS `facultyinfo` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_no` varchar(9) DEFAULT NULL,
  `course_name` varchar(31) DEFAULT NULL,
  `instructor` varchar(20) DEFAULT NULL,
  `per_homepage` varchar(66) DEFAULT NULL,
  `username` varchar(14) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `Dept` varchar(100) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `facultyinfo`
--

INSERT INTO `facultyinfo` (`f_id`, `course_no`, `course_name`, `instructor`, `per_homepage`, `username`, `password`, `Dept`) VALUES
(1, 'CS 201', 'Data Structures', 'Saswata Shannigrahi', 'http://shilloi.iitg.ernet.in/~saswata.sh/data_structures_2012.html', 's.saswata', 'cormen', 'Computer Science and Engineering'),
(2, 'CS 221', 'Digital Design', 'Santosh Biswas', 'http://www.iitg.ernet.in/santosh_biswas/', 'santosh.biswas', 'WbVqGcZN', 'Computer Science and Engineering'),
(3, 'MA 201', 'Mathematics III', 'Swaroop Nandan Bora', 'http://www.iitg.ernet.in/swaroop/', 'swaroop', 'HFQWDFee', 'Department of Mathematics'),
(4, 'HS 214', 'Cultural Studies', 'Liza Das', 'http://www.iitg.ernet.in/scifac/liza/public_html/cv_liza.htm', 'l.das', 'NE4j4JCv', 'Department of Humanities and Social Science'),
(5, 'HS 236', 'Introduction To Phonetics', 'Priyankoo Sarmah', 'http://www.priyankoo.com/web/', 'p.sarmah', 'abcdef', 'Department of Humanities and Social Science'),
(6, 'HS 221', 'Language, Culture and Cognition', 'Bidisha Som', 'http://www.iitg.ernet.in/bidisha/', 'b.som', '7gRVPPAg', 'Department of Humanities and Social Science'),
(7, 'CS 202', 'Discrete Mathematics', 'Ashish Anand', 'http://www.iitg.ernet.in/anand.ashish/', 'a.anand', 'D5NkbHH3', 'Computer Science and Engineering'),
(8, 'MA 225', 'Probability', 'K.V.Srikanth', 'http://www.iitg.ac.in/kvsrikanth/', 'srikanth', '123456', 'Department of Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `formval`
--

CREATE TABLE IF NOT EXISTS `formval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `instructor` varchar(40) NOT NULL,
  `q1` varchar(20) NOT NULL,
  `q2` varchar(20) NOT NULL,
  `q3` varchar(20) NOT NULL,
  `q4` varchar(20) NOT NULL,
  `q5` varchar(20) NOT NULL,
  `q6` varchar(20) NOT NULL,
  `q7` varchar(20) NOT NULL,
  `q8` varchar(20) NOT NULL,
  `q9` varchar(20) NOT NULL,
  `q10` varchar(20) NOT NULL,
  `q11` varchar(20) NOT NULL,
  `q12` varchar(20) NOT NULL,
  `q13` varchar(20) NOT NULL,
  `q14` varchar(20) NOT NULL,
  `q15` varchar(1000) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'NOT DONE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `formval`
--

INSERT INTO `formval` (`id`, `Name`, `course`, `instructor`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `status`) VALUES
(1, ' SWETA AGRAWAL', '  CS-201', ' Saswata Shannigrahi', 'Agree', 'Agree', 'Disagree', ' Neutral ', 'Strongly Agree', 'Agree', 'Strongly Agree', ' Disagree', 'Disagree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Agree', '  I liked his teaching.', 'NOT DONE'),
(2, 'ABHILASHA SANCHETI', 'CS-221', 'Santosh Biswas', 'Agree', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Neutral', 'Neutral', 'Agree', 'Agree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'teacher was good. Some practice questions should be provided.', 'NOT DONE'),
(3, 'ABHILASHA SANCHETI', 'CS-201', 'Saswata Shannigrahi', 'Agree', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Neutral', 'Neutral', 'Agree', 'Agree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'teacher was good. Some practice questions should be provided.', 'NOT DONE'),
(4, 'EESHANI MONDAL', 'CS-201', 'Saswata Shannigrahi', 'Agree', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Neutral', 'Neutral', 'Agree', 'Agree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'teacher was NICE', 'NOT DONE'),
(5, 'VARUN RAJ', 'CS-201', 'Saswata Shannigrahi', 'Agree', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Neutral', 'Neutral', 'Agree', 'Agree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'teacher was very good.Some more topics should be added in the course', 'NOT DONE'),
(6, 'DESH RAJ', 'CS-201', 'Saswata Shannigrahi', 'Agree', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Neutral', 'Neutral', 'Agree', 'Agree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'Some more questions should be given to practice the course', 'NOT DONE'),
(7, 'DIVYESH SONI', 'CS-201', 'Saswata Shannigrahi', 'Agree', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Neutral', 'Neutral', 'Agree', 'Agree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'more explanation is required', 'NOT DONE'),
(8, 'GOPIDALAI DEEPAK KUMAR', 'CS-201', 'Saswata Shannigrahi', 'Agree', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Neutral', 'Neutral', 'Agree', 'Agree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'teacher was ok', 'NOT DONE'),
(9, 'JATOTH BHARATH KUMAR', 'CS-201', 'Saswata Shannigrahi', 'Neutral', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'Neutral', 'Neutral', 'Agree', 'Agree', 'it was good.', 'NOT DONE'),
(10, 'JATOTH BHARATH KUMAR', 'CS-201', 'Saswata Shannigrahi', 'Neutral', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'Neutral', 'Neutral', 'Agree', 'Agree', 'it was a nice course.', 'NOT DONE'),
(11, 'JATOTH BHARATH KUMAR', 'CS-201', 'Saswata Shannigrahi', 'Neutral', 'Neutral', 'Neutral', 'Agree', 'Neutral', 'Disagree', 'Agree', 'Agree', 'Neutral', 'Neutral', 'Neutral', 'Neutral', 'Agree', 'Agree', 'enjoyed this course', 'NOT DONE'),
(12, ' Sweta Agrawal', ' MA 225', ' K.V.Srikanth', ' Neutral', ' Neutral ', ' Neutral ', ' Neutral ', ' Agree ', ' Neutral ', ' Neutral ', ' Neutral ', ' Agree ', ' Neutral ', ' Neutral ', ' Neutral ', ' Neutral ', ' Neutral ', '  ', 'NOT DONE'),
(13, ' AISHWARYA AGARWAL', ' CS 201', ' Saswata Shannigrahi', ' Neutral', ' Neutral ', ' Neutral ', ' Neutral ', ' Neutral ', ' Agree ', ' Neutral ', ' Neutral ', ' Neutral ', ' Neutral ', ' Neutral ', ' Neutral ', ' Neutral ', ' Neutral ', ' The method of teaching was awesome!! ', 'NOT DONE'),
(14, ' ', ' ', ' ', ' ', '  ', '  ', '  ', '  ', '  ', '  ', '  ', '  ', '  ', '  ', '  ', '  ', '  ', '  ', 'NOT DONE');

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE IF NOT EXISTS `logininfo` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `login` varchar(7) DEFAULT NULL,
  `dept` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`login_id`, `username`, `password`, `login`, `dept`) VALUES
(2, 'abhishek2013', 'UGnKtvjK', 'Student', 'CSE'),
(3, 'a.aishwarya', 'NdwTQDk3', 'Student', 'CSE'),
(4, 'a.ajinkya', 'MVnKQ2GB', 'Student', 'CSE'),
(5, 't.alamanda', 'Lsy8x4r7', 'Student', 'CSE'),
(6, 'a.dash', 'AWdHnT6W', 'Student', 'CSE'),
(7, 'a.agnihotry', 'GUn8xuQp', 'Student', 'CSE'),
(8, 'a.seth', 'PPuMet4V', 'Student', 'CSE'),
(9, 'arnav', 'LTXLy3rx', 'Student', 'CSE'),
(10, 'mashish', 'zGs8vJbJ', 'Student', 'CSE'),
(11, 'kayush', 'pKHXuP8d', 'Student', 'CSE'),
(12, 'a.mananiya', 'FjVkL2sD', 'Student', 'CSE'),
(13, 'bvamshi', 'xRaWqJSZ', 'Student', 'CSE'),
(14, 'bedapudi', 'UyWNV59c', 'Student', 'CSE'),
(15, 'c.teja', 'U2DYwvxJ', 'Student', 'CSE'),
(16, 'chetluru', 'PprywprQ', 'Student', 'CSE'),
(17, 'c.babulal', 'VBHjvrdu', 'Student', 'CSE'),
(18, 'r.desh', 'K35Z5XnJ', 'Student', 'CSE'),
(19, 'd.baro', 'a6xPZ8Wb', 'Student', 'CSE'),
(20, 'divyesh', 'yuu8S78k', 'Student', 'CSE'),
(21, 'eeshani', 'pJay3cME', 'Student', 'CSE'),
(22, 'ellore', 'DauGh4LH', 'Student', 'CSE'),
(23, 'g.badsara', 'Bdb5AaAv', 'Student', 'CSE'),
(24, 'gopidalai', '3Q4TWjRK', 'Student', 'CSE'),
(25, 'jainam', '2j3U7XzS', 'Student', 'CSE'),
(26, 'jatoth', 'mkAB4Xna', 'Student', 'CSE'),
(27, 'jondhale', 'ptLDPv7w', 'Student', 'CSE'),
(28, 'k.sowmya', 'g9evxRvb', 'Student', 'CSE'),
(29, 'kalavagunta', 'ue5T39zQ', 'Student', 'CSE'),
(30, 'kamidi', '8g2MuPJf', 'Student', 'CSE'),
(31, 'kaname', 'xVQkf9xE', 'Student', 'CSE'),
(32, 'k.rathi', 'ugJzHfyZ', 'Student', 'CSE'),
(33, 'k.jayadeep', 'EnLMRPvc', 'Student', 'CSE'),
(34, 's.katta', 'fea8RLpq', 'Student', 'CSE'),
(35, 'kenil', 'u4aLqHfc', 'Student', 'CSE'),
(36, 'kodali', '4GXRczpT', 'Student', 'CSE'),
(37, 'kosaraju', '8e3twVC7', 'Student', 'CSE'),
(38, 'kothapalli', 'FUHLt8Lb', 'Student', 'CSE'),
(39, 'k.agrawal', 'sJsvdV7n', 'Student', 'CSE'),
(40, 'kumbhalwar', 'fzbsVrXz', 'Student', 'CSE'),
(41, 'j.kunal', 'tcVSTn5g', 'Student', 'CSE'),
(42, 'lakhinena', 'cT3BYGEP', 'Student', 'CSE'),
(43, 'r.maryada', '2sRTnRUA', 'Student', 'CSE'),
(44, 'mteja', 'x6gwpTzQ', 'Student', 'CSE'),
(45, 'midhul', '2R9KNB7n', 'Student', 'CSE'),
(46, 'm.chhajed', 'QX8bRhYa', 'Student', 'CSE'),
(47, 'm.tak', 'DYzQeZk3', 'Student', 'CSE'),
(48, 'rahul2013', 'uDBaQVRH', 'Student', 'CSE'),
(49, 'naman.jain', '7FM6xgE9', 'Student', 'CSE'),
(50, 'n.choudhary', '4pYe5hXb', 'Student', 'CSE'),
(51, 'k.nidamanuri', 'EUusbnHG', 'Student', 'CSE'),
(52, 'nagarwal', 'KGxZ7bTb', 'Student', 'CSE'),
(53, 'nikit.b', 'qKCMu6sw', 'Student', 'CSE'),
(54, 'p.kedia', 'fsnVjGcy', 'Student', 'CSE'),
(55, 'polamarasetty', 'uQhsWVRa', 'Student', 'CSE'),
(56, 'prarabdha', 'qYvvWq94', 'Student', 'CSE'),
(57, 'r.prateek', 'kupDSfNK', 'Student', 'CSE'),
(58, 's.pritam', 'Vc6LhPf2', 'Student', 'CSE'),
(59, 'r.gond', 'SuExWQVz', 'Student', 'CSE'),
(60, 'sumeet.ranka', '9uAYnXMY', 'Student', 'CSE'),
(61, 'ravi.gupta', 'LcFTnv3f', 'Student', 'CSE'),
(62, 'ravi2013', 'hPYAvBqh', 'Student', 'CSE'),
(63, 'rishabh.dubey', 'hMPtUTyX', 'Student', 'CSE'),
(64, 'g.rohan', 'RqS7nwMs', 'Student', 'CSE'),
(65, 'r.dhan', 'Vzx5TDex', 'Student', 'CSE'),
(66, 'saikat.biswas', '9natGFgY', 'Student', 'CSE'),
(67, 'sayantan.das', 'GKLuAbw3', 'Student', 'CSE'),
(68, 's.suman', 'wnbQbG99', 'Student', 'CSE'),
(69, 's.lakhotia', 'ufgZLRwh', 'Student', 'CSE'),
(70, 'k.siddharth', 'ctBCV6re', 'Student', 'CSE'),
(71, 'sitaram', 'FeYehTAa', 'Student', 'CSE'),
(72, 'sudhanshu2013', 'SVY9yj7M', 'Student', 'CSE'),
(73, 't.sharma', '3E8uMpZY', 'Student', 'CSE'),
(74, 'p.vandana', 'sQQUUTBY', 'Student', 'CSE'),
(75, 'r.varun', 'Y7yaZbrF', 'Student', 'CSE'),
(76, 'v.ranabhai', '86ewx3Q3', 'Student', 'CSE'),
(77, 'vivek2013', 'GdRhtHrd', 'Student', 'CSE'),
(78, 'y.mehta', 'z5zSEpKT', 'Student', 'CSE'),
(79, 'yellamelli', 'GNwMaj77', 'Student', 'CSE'),
(80, 'k.chawla', 'eqUqhttq', 'Student', 'CSE'),
(81, 's.abhilasha', 'nQbURFYK', 'Student', 'CSE'),
(82, 'k.duddu', 'DJ8n6h8d', 'Student', 'CSE'),
(83, 'v.arun', 'bhk5P6cj', 'Student', 'CSE'),
(84, 'mayank.gupta', 'Hekz2emf', 'Student', 'CSE'),
(85, 'p.shetty', '7XqP756Z', 'Student', 'CSE'),
(86, 'a.goswami', 'rHLj2PBR', 'Student', 'CSE'),
(88, 's.saswata', 'cormen', 'Faculty', ''),
(89, 'a.anand', 'D5NkbHH3', 'Faculty', ''),
(90, 'l.das', 'NE4j4JCv', 'Faculty', ''),
(91, 'b.som', '7gRVPPAg', 'Faculty', ''),
(92, 'swaroop', 'HFQWDFee', 'Faculty', ''),
(93, 'santosh.biswas', 'WbVqGcZN', 'Faculty', ''),
(94, 'r.somani', 'NHVaqFMH', 'Student', 'MNC'),
(95, 'c.snehit', '4fu3zFNM', 'Student', 'MNC'),
(96, 's.nimmagadda', 'egGMEn78', 'Student', 'MNC'),
(97, 'y.kartik', '53XVAAdp', 'Student', 'MNC'),
(98, 'c.priyanshu', 'Me5HNzLn', 'Student', 'MNC'),
(99, 's.hariyani', '43LcJa9x', 'Student', 'MNC'),
(100, 'r.patwari', 'SNU6y3mc', 'Student', 'MNC'),
(101, 'j.rachit', 'UedvEb35', 'Student', 'MNC'),
(102, 'rishi.kumar', 'QSfKMQLD', 'Student', 'MNC'),
(103, 'g.adesh', 'GLEBpXN8', 'Student', 'MNC'),
(104, 'g.umang', 'KCmGEYum', 'Student', 'MNC'),
(105, 'g.lakshay', 'X7E826zf', 'Student', 'MNC'),
(106, 'c.dilip', 'upnj9J29', 'Student', 'MNC'),
(107, 'saurabh.agrawal', '5Rmz8yeC', 'Student', 'MNC'),
(108, 'j.akshit', 'h8J5Drpz', 'Student', 'MNC'),
(109, 'k.anuraag', 'DvJteLm2', 'Student', 'MNC'),
(110, 'anshul.juneja', 'suXSg7c8', 'Student', 'MNC'),
(111, 'r.bharti', '4MH2Hmsh', 'Student', 'MNC'),
(112, 't.sircar', 'erunB8BD', 'Student', 'MNC'),
(113, 'r.thimmasani', '86fg4c3B', 'Student', 'MNC'),
(114, 'p.akepogu', 'x7x72EWf', 'Student', 'MNC'),
(115, 'p.piyush', '7hvLEspF', 'Student', 'MNC'),
(116, 'd.soni', 'uwhnhyFn', 'Student', 'MNC'),
(117, 'a.deori', '24SqgH5K', 'Student', 'MNC'),
(118, 'aditya.sharma', 'MVJBhFkh', 'Student', 'MNC'),
(119, 'gaurav.j', 'DBGrdzuS', 'Student', 'MNC'),
(120, 'm.nishant', '3DmGUZCT', 'Student', 'MNC'),
(121, 'kvishal', '4zWvfh8d', 'Student', 'MNC'),
(122, 'p.arpit', 'KEEdzCPN', 'Student', 'MNC'),
(123, 'm.harikrishnan', '9rRDYHA8', 'Student', 'MNC'),
(124, 'b.govind', 'uFQrVsRG', 'Student', 'MNC'),
(125, 'srikanth', '123456', 'Faculty', ''),
(126, 'sweta', '123456', 'Admin', NULL),
(127, 's.agrawal', 'asd', 'Student', 'MNC'),
(128, 'v.adlakha', 'eeshani', 'Student', 'MNC');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE IF NOT EXISTS `studentinfo` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `Rollno` varchar(9) DEFAULT NULL,
  `Name` varchar(31) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `hss` varchar(6) DEFAULT NULL,
  `instruct` varchar(100) DEFAULT NULL,
  `hss_name` varchar(100) DEFAULT NULL,
  `dept` varchar(4) DEFAULT NULL,
  `c_no` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`stud_id`, `Rollno`, `Name`, `username`, `password`, `hss`, `instruct`, `hss_name`, `dept`, `c_no`) VALUES
(2, '130101002', 'ABHISHEK KUMAR', 'abhishek2013', 'UGnKtvjK', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(3, '130101003', 'AISHWARYA AGARWAL', 'a.aishwarya', 'NdwTQDk3', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(4, '130101004', 'AJINKYA', 'a.ajinkya', 'MVnKQ2GB', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(5, '130101005', 'ALAMANDA NIKHIL TEJA', 't.alamanda', 'Lsy8x4r7', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(6, '130101006', 'ANEESH DASH', 'a.dash', 'AWdHnT6W', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(7, '130101007', 'ANIRUDH AGNIHOTRY', 'a.agnihotry', 'GUn8xuQp', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(8, '130101008', 'ANKUR SETH', 'a.seth', 'PPuMet4V', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(9, '130101009', 'ARNAV VOHRA', 'arnav', 'LTXLy3rx', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(10, '130101010', 'ASHISH MITTAL', 'mashish', 'zGs8vJbJ', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(11, '130101011', 'AYUSH KUMAR', 'kayush', 'pKHXuP8d', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(12, '130101012', 'AYUSH MANANIYA', 'a.mananiya', 'FjVkL2sD', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(13, '130101013', 'B HITESH VAMSHI', 'bvamshi', 'xRaWqJSZ', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(14, '130101014', 'BEDAPUDI PRANEETH', 'bedapudi', 'UyWNV59c', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(15, '130101015', 'CHERUKURI SURYA TEJA', 'c.teja', 'U2DYwvxJ', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(16, '130101016', 'CHETLURU REVANTH', 'chetluru', 'PprywprQ', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(17, '130101017', 'CHOUDHARY JITENDRA BABULAL', 'c.babulal', 'VBHjvrdu', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(18, '130101018', 'DESH RAJ', 'r.desh', 'K35Z5XnJ', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(19, '130101019', 'DIGANTA BARO', 'd.baro', 'a6xPZ8Wb', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(20, '130101020', 'DIVYESH SONI', 'divyesh', 'yuu8S78k', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(21, '130101021', 'EESHANI MONDAL', 'eeshani', 'pJay3cME', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(22, '130101022', 'ELLORE AKHIL REDDY', 'ellore', 'DauGh4LH', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(23, '130101023', 'GHANSHYAM SINGH BADSARA', 'g.badsara', 'Bdb5AaAv', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(24, '130101024', 'GOPIDALAI DEEPAK KUMAR', 'gopidalai', '3Q4TWjRK', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(25, '130101025', 'JAINAM DHANESH SHAH', 'jainam', '2j3U7XzS', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(26, '130101026', 'JATOTH BHARATH KUMAR', 'jatoth', 'mkAB4Xna', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(27, '130101027', 'JONDHALE SHRADHA SANGRAM', 'jondhale', 'ptLDPv7w', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(28, '130101028', 'K SOWMYA', 'k.sowmya', 'g9evxRvb', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(29, '130101029', 'KALAVAGUNTA ANKIT SAI', 'kalavagunta', 'ue5T39zQ', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(30, '130101031', 'KAMIDI PREETHAM', 'kamidi', '8g2MuPJf', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(31, '130101032', 'KANAME GANESH ATMARAM', 'kaname', 'xVQkf9xE', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(32, '130101033', 'KANHAIYA RATHI', 'k.rathi', 'ugJzHfyZ', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(33, '130101034', 'KARNATI JAYADEEP', 'k.jayadeep', 'EnLMRPvc', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(34, '130101035', 'KATTA VENKATA SATISH', 's.katta', 'fea8RLpq', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(35, '130101036', 'KENIL TANNA', 'kenil', 'u4aLqHfc', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(36, '130101037', 'KODALI HARI KRISHNA SAI', 'kodali', '4GXRczpT', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(37, '130101038', 'KOSARAJU DIMPLE RAJA VAMSI', 'kosaraju', '8e3twVC7', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(38, '130101039', 'KOTHAPALLI MOHAN SAI KRISHNA', 'kothapalli', 'FUHLt8Lb', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(39, '130101040', 'KSHITIZ AGRAWAL', 'k.agrawal', 'sJsvdV7n', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(40, '130101041', 'KUMBHALWAR SAMYAK JAGDISH', 'kumbhalwar', 'fzbsVrXz', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(41, '130101042', 'KUNAL JAIN', 'j.kunal', 'tcVSTn5g', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(42, '130101043', 'LAKHINENA BHAVANA', 'lakhinena', 'cT3BYGEP', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(43, '130101045', 'MARYADA DURGA VARA PRASAD REDDY', 'r.maryada', '2sRTnRUA', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(44, '130101046', 'MEKALA SAI AKHIL TEJA', 'mteja', 'x6gwpTzQ', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(45, '130101047', 'MIDHUL VARMA VUPPALAPATI', 'midhul', '2R9KNB7n', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(46, '130101048', 'MOHIT CHHAJED', 'm.chhajed', 'QX8bRhYa', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(47, '130101049', 'MRINAL TAK', 'm.tak', 'DYzQeZk3', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(48, '130101050', 'N. RAHUL', 'rahul2013', 'uDBaQVRH', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(49, '130101051', 'NAMAN JAIN', 'naman.jain', '7FM6xgE9', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(50, '130101052', 'NARENDRA CHOUDHARY', 'n.choudhary', '4pYe5hXb', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(51, '130101053', 'NIDAMANURI PAVANESWAR KUMAR', 'k.nidamanuri', 'EUusbnHG', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(52, '130101054', 'NIKHIL AGARWAL', 'nagarwal', 'KGxZ7bTb', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(53, '130101055', 'NIKIT BEGWANI', 'nikit.b', 'qKCMu6sw', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(54, '130101056', 'PIYUSH KEDIA', 'p.kedia', 'fsnVjGcy', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(55, '130101057', 'POLAMARASETTY AKHIL', 'polamarasetty', 'uQhsWVRa', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(56, '130101058', 'PRARABDHA SONI', 'prarabdha', 'qYvvWq94', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(57, '130101059', 'PRATEEK RAISINGHANI', 'r.prateek', 'kupDSfNK', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(58, '130101060', 'PRITAM SARKAR', 's.pritam', 'Vc6LhPf2', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(59, '130101061', 'RAHUL KUMAR GOND', 'r.gond', 'SuExWQVz', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(60, '130101062', 'RANKA SUMEET SATISH', 'sumeet.ranka', '9uAYnXMY', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(61, '130101063', 'RAVI GUPTA', 'ravi.gupta', 'LcFTnv3f', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(62, '130101064', 'RAVI KUMAR', 'ravi2013', 'hPYAvBqh', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(63, '130101065', 'RISHABH DUBEY', 'rishabh.dubey', 'hMPtUTyX', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(64, '130101066', 'ROHAN GUPTA', 'g.rohan', 'RqS7nwMs', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(65, '130101067', 'ROHIT DHAN', 'r.dhan', 'Vzx5TDex', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(66, '130101068', 'SAIKAT BISWAS', 'saikat.biswas', '9natGFgY', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(67, '130101069', 'SAYANTAN DAS', 'sayantan.das', 'GKLuAbw3', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(68, '130101070', 'SHASHANK SUMAN', 's.suman', 'wnbQbG99', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(69, '130101071', 'SHIVAM LAKHOTIA', 's.lakhotia', 'ufgZLRwh', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(70, '130101072', 'SIDDHARTH KUMAR', 'k.siddharth', 'ctBCV6re', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(71, '130101073', 'SITARAM MITHARWAL', 'sitaram', 'FeYehTAa', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(72, '130101074', 'SUDHANSHU', 'sudhanshu2013', 'SVY9yj7M', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(73, '130101075', 'TARUN SHARMA', 't.sharma', '3E8uMpZY', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(74, '130101076', 'VANDANA BHANU PRAKASH', 'p.vandana', 'sQQUUTBY', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(75, '130101077', 'VARUN RAJ', 'r.varun', 'Y7yaZbrF', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(76, '130101078', 'VAS ALPESHKUMAR RANABHAI', 'v.ranabhai', '86ewx3Q3', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(77, '130101079', 'VIVEK KUMAR', 'vivek2013', 'GdRhtHrd', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(78, '130101080', 'YASH MEHTA', 'y.mehta', 'z5zSEpKT', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(79, '130101081', 'YELLAMELLI PALLAVI', 'yellamelli', 'GNwMaj77', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'CSE', 'CS 201'),
(80, '130101082', 'KUSHAL CHAWLA', 'k.chawla', 'eqUqhttq', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(81, '130101083', 'ABHILASHA SANCHETI', 's.abhilasha', 'nQbURFYK', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(82, '130101084', 'DUDDU SAI MEHER KARTHIK', 'k.duddu', 'DJ8n6h8d', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(83, '130101085', 'VENKAT ARUN', 'v.arun', 'bhk5P6cj', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'CSE', 'CS 201'),
(84, '130101086', 'MAYANK GUPTA', 'mayank.gupta', 'Hekz2emf', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(85, '130101087', 'PRABODH SHETTY', 'p.shetty', '7XqP756Z', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(86, '130101088', 'AKASHDEEP  GOSWAMI', 'a.goswami', 'rHLj2PBR', 'HS 214', 'Liza Das', 'Cultural Studies', 'CSE', 'CS 201'),
(87, '130123029', 'Raghav Somani', 'r.somani', 'NHVaqFMH', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(88, '130123012', 'Snehit', 'c.snehit', '4fu3zFNM', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(89, '130123023', 'N.Sithal', 's.nimmagadda', 'egGMEn78', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(90, '130123020', 'Kartik Yadav', 'y.kartik', '53XVAAdp', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(91, '130123027', 'Priyanshu Chandra', 'c.priyanshu', 'Me5HNzLn', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(92, '130123034', 'Saumil B Hariyani', 's.hariyani', '43LcJa9x', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(93, '130123030', 'Rahul Kumar Patwari', 'r.patwari', 'SNU6y3mc', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(94, '130123028', 'RACHIT JAIN', 'j.rachit', 'UedvEb35', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(95, '130123032', 'RISHI KUMAR', 'rishi.kumar', 'QSfKMQLD', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(96, '130123002', 'Adesh Gautam', 'g.adesh', 'GLEBpXN8', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(97, '130123039', 'Umang Garg', 'g.umang', 'KCmGEYum', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(98, '130123021', 'lakshay garg', 'g.lakshay', 'X7E826zf', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(99, '130123013', 'mukul chaware', 'c.dilip', 'upnj9J29', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(100, '130123035', 'Saurabh Agrawal', 'saurabh.agrawal', '5Rmz8yeC', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(101, '130123005', 'Akshit Jain', 'j.akshit', 'h8J5Drpz', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(102, '130123007', 'Anuraag Khandagle', 'k.anuraag', 'DvJteLm2', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225'),
(103, '130123006', 'Anshul Juneja', 'anshul.juneja', 'suXSg7c8', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225'),
(104, '130123033', 'Rohit Bharti', 'r.bharti', '4MH2Hmsh', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225'),
(105, '130123038', 'Tushar Sircar', 't.sircar', 'erunB8BD', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225'),
(106, '130123037', 'THIMMASANI  DINESH REDDY', 'r.thimmasani', '86fg4c3B', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225'),
(107, '130123004', 'AKEPOGU PRINCE', 'p.akepogu', 'x7x72EWf', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(108, '130123026', 'Piyush Paritosh', 'p.piyush', '7hvLEspF', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(109, '130123014', 'DEEPANSH SONI', 'd.soni', 'uwhnhyFn', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(110, '130123001', 'Aaryan Deori', 'a.deori', '24SqgH5K', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225'),
(111, '130123003', 'aditya sharma', 'aditya.sharma', 'MVJBhFkh', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225'),
(112, '130123016', 'Gaurav Jain', 'gaurav.j', 'DBGrdzuS', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(113, '130123024', 'Nishant Mor', 'm.nishant', '3DmGUZCT', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(114, '130123043', 'Vishal Kumar', 'kvishal', '4zWvfh8d', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(115, '130123009', 'Arpit padwekar', 'p.arpit', 'KEEdzCPN', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(116, '130123018', 'Harikrishnan M', 'm.harikrishnan', '9rRDYHA8', 'HS 236', 'Priyankoo Sarmah', 'Introduction To Phonetics', 'MNC', 'MA 225'),
(117, '130123011', 'madhur bhattad', 'b.govind', 'uFQrVsRG', 'HS 214', 'Liza Das', 'Cultural Studies', 'MNC', 'MA 225'),
(121, '130101089', 'Sweta Agrawal', 's.agrawal', 'asd', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225'),
(122, '130123041', 'Vaibhav Adlakha', 'v.adlakha', 'eeshani', 'HS 221', 'Bidisha Som', 'Language, Culture and Cognition', 'MNC', 'MA 225');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
