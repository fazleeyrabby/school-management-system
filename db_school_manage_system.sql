-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2016 at 08:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_school_manage_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE IF NOT EXISTS `latest_news` (
  `news_id` int(3) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(100) NOT NULL,
  `news_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`news_id`, `news_title`, `news_description`, `publication_status`) VALUES
(1, 'School Library  ', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span>The first headmaster of this school was Nur Mahammad.', 1),
(2, 'School Field', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam</span>', 1),
(3, 'School Common Room', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Eveniet, consequuntur eius repellendus eos aliquid molestiae ea</span>', 1),
(4, 'Class Room', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span>', 1),
(5, 'Teachers Room', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</span>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(3) NOT NULL AUTO_INCREMENT,
  `student_class` tinyint(1) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `group1` varchar(10) NOT NULL,
  `shift` varchar(5) NOT NULL,
  `roll` varchar(5) NOT NULL,
  `session` varchar(20) NOT NULL,
  `photo` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_class`, `student_name`, `group1`, `shift`, `roll`, `session`, `photo`, `publication_status`) VALUES
(2, 0, 'Saiful', ' SCIENCE', 'DAY', '001', '2012-2013', '../assets/admin_assets/student_photo/saiful.jpg', 1),
(6, 2, 'Sadia Islam', ' SCIENCE', 'DAY', '001', '2012-2013', '../assets/admin_assets/student_photo/1.jpg', 1),
(7, 2, '	Mehejabin Jerin', ' SCIENCE', 'DAY', '002', '2012-2013', '../assets/admin_assets/student_photo/2.jpg', 1),
(8, 2, 'Sumya Alam Mowmi', ' SCIENCE', 'DAY', '003', '2012-2013', '../assets/admin_assets/student_photo/18ea3157c8006de1dd7ba7ebc9e2be18.jpg', 1),
(9, 2, '	Shamima Jahan Shamme', ' SCIENCE', 'DAY', '004', '2012-2013', '../assets/admin_assets/student_photo/fb0f155e62133dc7ae94043849d99d47.jpg', 1),
(10, 1, '	NOWSIN NASIR SHEFA', ' SCIENCE', 'DAY', '1', '2012-2013', '../assets/admin_assets/student_photo/images (2).jpg', 1),
(11, 1, 'NURSAYEDA', ' SCIENCE', 'DAY', '2', '2012-2013', '../assets/admin_assets/student_photo/images.jpg', 1),
(12, 1, '	H. M. HASIB', ' SCIENCE', 'DAY', '3', '2012-2013', '../assets/admin_assets/student_photo/images (1).jpg', 1),
(13, 1, '	SUNJIDA AKTER', ' SCIENCE', 'DAY', '4', '2012-2013', '../assets/admin_assets/student_photo/indian-students.jpg', 1),
(14, 0, ' FORKAN', ' SCIENCE', 'DAY', '2', '2012-2013', '../assets/admin_assets/student_photo/stock-photo-10270754-young-cheerful-indian-school-boy-teenager-with-books.jpg', 1),
(15, 0, '	AL MOKSEDUL HASSAN', ' SCIENCE', 'DAY', '3', '2012-2013', '../assets/admin_assets/student_photo/muna1.jpg', 1),
(16, 0, 'Imam', 'HUMANITIES', 'DAY', '8', '2012-2013', '../assets/admin_assets/student_photo/Capture.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE IF NOT EXISTS `tbl_about_us` (
  `about_us_id` int(3) NOT NULL AUTO_INCREMENT,
  `about_us_description` text NOT NULL,
  `latest_news_description` text NOT NULL,
  `achievement_year` varchar(15) NOT NULL,
  `achievement_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`about_us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`about_us_id`, `about_us_description`, `latest_news_description`, `achievement_year`, `achievement_description`, `publication_status`) VALUES
(1, '<span style="color: rgb(110, 110, 110); font-family: Georgia, &quot;Giovanni Book&quot;, Arial, Helvetica, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);">Principal of Barisal Model School and College in the city on Monday cut hair of some students on charge of violating dress code. Being informed, local journalists rushed to the spot and talked with the students and their guardians,</span>', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</span>', '2011', '<span style="box-sizing: border-box; color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">Welcome to Barisal Model School and College.&nbsp;</span><span style="box-sizing: border-box; color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">&nbsp;Barisal Model School and College</span><span style="box-sizing: border-box; color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">&nbsp;is one of the best school at Dashmina upazilla under Patuakhali district. It was founded by Dr. samsuddin Ahmed on 1st January, 1970 with only 10 students. The first headmaster of this school was Nur Mahammad. In 2006was declared Non-Government school.</span>', 1),
(2, '<span style="color: rgb(110, 110, 110); font-family: Georgia, &quot;Giovanni Book&quot;, Arial, Helvetica, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);">Principal of Barisal Model School and College in the city on Monday cut hair of some students on charge of violating dress code. Being informed, local journalists rushed to the spot and talked with the students and their guardians,&nbsp;</span>', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam</span>', '2012', '<span style="color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">The Appellate Division of the Supreme Court on Thursday extended until August 18 its stay on a High Court order that granted a six-month ad-interim bail to Destiny Group managing director Rafiqul Amin and Destiny-2000 chairman Mohammad Hossain in two money-laundering cases.</span><br style="box-sizing: border-box; margin: 0px; padding: 0px; outline: none; color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">', 1),
(3, '<span style="color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">ACC deputy director Mozahar Ali Sarder filed one case with Kalabagan Police Station against 12 officials of Destiny-2000, including its chairman and managing director, under the Money Laundering Act 2012 for allegedly misappropriating over Tk 2,106 crore from the Destiny Tree Plantation Limited (DTPL).</span>', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Eveniet, consequuntur eius repellendus eos aliquid molestiae ea</span>', '2013', '<span style="color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">On July 31, 2012, the anti-graft watchdog filed the two money laundering cases against Destiny-2000 chairman M Hossain and the Destiny Groupâ€™s managing director Rafiqul Amin and 20 others on charge of misappropriating investorsâ€™ money amounting to Tk 3,285 crore.</span>', 1),
(4, '<span style="color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">A five-member bench of the Appellate Division headed by Chief Justice S K Sinha passed the order following a prayer by the Anti-Corruption Commission (ACC).</span>', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span>', '2014', '<span style="color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">The SC also asked the ACC to file leave-to-appeal petitions with the court against the HC order that granted the duo bail, said ACC lawyer M Khurshid Alam Khan.</span><span style="color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">Earlier on July 20, the HC granted the six-month ad-interim bail to the two Destiny Group and Destiny-2000 high-ups on certain conditions in the two cases filed by the Anti-Corruption Commission.</span>', 1),
(5, '<span style="color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">The launch services on the Paturia-Daulatdia and Aricha-Kazirhat routes resumed on Thursday morning after 36 hours of disruption due to inclement weather.</span>', '<span style="color: rgb(136, 136, 136); font-family: Lato, sans-serif; font-size: 11.9px; background-color: rgb(255, 255, 255);">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span>', '2015', '<div><span style="color: rgb(80, 80, 80); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);">Faridul Islam, assistant in-charge (Transport and traffic) of Bangladesh Inland Water Transport Authority (BIWTA), said the launch services had been kept suspended on the routes from 7:30pm on Tuesday due to inclement weather.</span></div>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE IF NOT EXISTS `tbl_address` (
  `address_id` int(3) NOT NULL AUTO_INCREMENT,
  `address` varchar(300) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`address_id`, `address`, `email`, `phone`, `publication_status`) VALUES
(2, 'Barisal Airport (BZL), Dhaka-Barisal Highway, Bangladesh\nBarisal Sadar Upazila,Barisal ,Barisal,Bangladesh', 'bmsc@gmail.com', '8801712862762', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(256) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email_address`, `password`) VALUES
(1, 'Fazley Rabbi', 'fazleyarabbi@yahoo.com.au', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission`
--

CREATE TABLE IF NOT EXISTS `tbl_admission` (
  `admission_id` int(3) NOT NULL AUTO_INCREMENT,
  `admission_title` varchar(256) NOT NULL,
  `admission_description` text NOT NULL,
  `publication_status` smallint(1) NOT NULL,
  PRIMARY KEY (`admission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_admission`
--

INSERT INTO `tbl_admission` (`admission_id`, `admission_title`, `admission_description`, `publication_status`) VALUES
(3, 'Academic Calendar', 'dgfsdg', 1),
(4, 'Colleges & Schools', 'ada', 1),
(5, 'Professional Programs', 'ggfd', 1),
(6, 'Emergency Information\n', 'safaggra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE IF NOT EXISTS `tbl_article` (
  `article_id` int(3) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(200) NOT NULL,
  `article_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`article_id`, `article_title`, `article_description`, `publication_status`) VALUES
(3, 'Barisal Model School and College', '<span style="color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">Welcome to Barisal Model School and College.&nbsp;</span><span style="color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">&nbsp;Barisal Model School and College</span><span style="color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">&nbsp;is one of the best school at Dashmina upazilla under Patuakhali district. It was founded by Dr. samsuddin Ahmed on 1st January, 1970 with only 10 students. The first headmaster of this school was Nur Mahammad. In 2006was declared Non-Government school.</span>', 1),
(4, 'Barisal Model School and College', '<span style="color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">Welcome to Barisal Model School and College.&nbsp;</span><span style="color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">&nbsp;Barisal Model School and College</span><span style="color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; text-align: justify; background-color: rgb(255, 255, 255);">&nbsp;is one of the best school at Dashmina upazilla under Patuakhali district. It was founded by Dr. samsuddin Ahmed on 1st January, 1970 with only 10 students. The first headmaster of this school was Nur Mahammad.&nbsp;</span>', 1),
(5, 'hii', 'buol', 1),
(6, 'zasdff', '<span style="font-family: Georgia, &quot;Giovanni Book&quot;, Arial, Helvetica, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);">Principal of Barisal Model School and College in the city on Monday cut hair of some students on charge of violating dress code. Being informed, local journalists rushed to the spot and talked with the students and their guardians, but</span><span class="ellipsis" style="padding: 0px; margin: 0px 0px 0px 5px; outline: none; list-style: none; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: Georgia, &quot;Giovanni Book&quot;, Arial, Helvetica, sans-serif; vertical-align: baseline; color: rgb(170, 170, 170); background-color: rgb(255, 255, 255);">â€¦</span>', 1),
(7, 'Welcome to Barisal Model School and College', '<span style="box-sizing: border-box; text-align: justify; color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; background-color: rgb(255, 255, 255);">Welcome to Barisal Model School and College.&nbsp;</span><span style="box-sizing: border-box; text-align: justify; color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; background-color: rgb(255, 255, 255);">&nbsp;Barisal Model School and College</span><span style="box-sizing: border-box; text-align: justify; color: rgb(116, 116, 116); font-family: Verdana, Tahoma, Geneva, sans-serif, Vrinda; font-size: 13px; background-color: rgb(255, 255, 255);">&nbsp;is one of the best school at Dashmina upazilla under Patuakhali district. It was founded by Dr. samsuddin Ahmed on 1st January, 1970 with only 10 students. The first headmaster of this school was Nur Mahammad.</span>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_box`
--

CREATE TABLE IF NOT EXISTS `tbl_box` (
  `box_id` int(3) NOT NULL AUTO_INCREMENT,
  `box_title` varchar(100) NOT NULL,
  `box_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`box_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_box`
--

INSERT INTO `tbl_box` (`box_id`, `box_title`, `box_description`, `publication_status`) VALUES
(1, 'Online Courses', 'The wild elephant that entered Bangladesh from India on June 27 is tranquilised on a cropland at village Koyra under Kamrabad union of Sarishabari in Jamalpur.', 1),
(2, 'Meet our Staff', 'Elias Ali has been picking weeds and waste for hours from his paddy field in southeastern Bangladesh, preparing it for irrigation. Every week', 1),
(3, 'Latest Post', 'Ali and fellow farmers currently pay 4,000 taka ($51) each per year to middlemen in exchange for irrigation on their one-acre plots in Feni district.', 1),
(4, 'Placements', 'The waste increases our costs,  between pump ownersas pump owners also charge us for water that''s leaked," he told the Thomson Reuters Foundation.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(11, 'Home', 'Good', 0),
(12, 'About', 'Good', 0),
(13, 'Courses', 'Good', 0),
(14, 'Student', 'Good', 0),
(15, 'Result', 'Good', 0),
(16, 'School Info', 'Good', 0),
(17, 'Gallery', 'Good', 0),
(18, 'Contact Us', 'Guud', 0),
(19, 'List of Technology', 'Good', 1),
(20, 'List of Business', 'Good', 1),
(21, 'List of Photography', 'Good', 1),
(22, 'List of Language', 'Good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_us` (
  `contact_us_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contact_us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`contact_us_id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(3, 'Fazley Rabbi', 'fazleyarabbio@yahoo.com.au', '01713869303', 'PHP', 'I love to php.'),
(4, 'FR', 'fazleyarabbi@gmail.com', '01833668746', 'Laravel', 'Laravel is my favorite framework ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hsc_result`
--

CREATE TABLE IF NOT EXISTS `tbl_hsc_result` (
  `ssc_result_id` int(3) NOT NULL AUTO_INCREMENT,
  `year` varchar(10) NOT NULL,
  `group1` varchar(10) NOT NULL,
  `total_exam` varchar(10) NOT NULL,
  `app` varchar(10) NOT NULL,
  `gpa_five` varchar(10) NOT NULL,
  `gpa_four` varchar(10) NOT NULL,
  `gpa_three_point_five` varchar(10) NOT NULL,
  `gpa_three` varchar(10) NOT NULL,
  `gpa_two` varchar(10) NOT NULL,
  `gpa_one` varchar(10) NOT NULL,
  `total_pass` varchar(10) NOT NULL,
  `percentice_of_pass` varchar(10) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`ssc_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_hsc_result`
--

INSERT INTO `tbl_hsc_result` (`ssc_result_id`, `year`, `group1`, `total_exam`, `app`, `gpa_five`, `gpa_four`, `gpa_three_point_five`, `gpa_three`, `gpa_two`, `gpa_one`, `total_pass`, `percentice_of_pass`, `publication_status`) VALUES
(1, '2011', 'SCIENCE', '28', '28', '5', '14', '3', '2', '0', '0', '24', '85.71', 1),
(2, '2011', 'HUMANITIES', '33', '33', '0', '7', '', '10', '7', '0', '29', '87.88', 1),
(3, '2011', 'BUSINESS', '57', '57', '0', '3', '16', '16', '17', '0', '52', '91.23', 1),
(4, '2012', 'SCIENCE', '34', '34', '5', '21', '4', '4', '0', '0', '34', '100.00', 1),
(5, '2012', 'HUMANITIES', '30', '30', '0', '0', '4', '11', '5', '0', '20', '66.67', 1),
(6, '2012', 'BUSINESS', '46', '46', '1', '18', '5', '7', '7', '0', '38', '82.61', 1),
(7, '2013', ' SCIENCE', '45', '45', '7', '29', '3', '1', '1', '0', '41', '91.11', 1),
(8, '2013', 'HUMANITIES', '35', '35', '0', '0', '6', '10', '15', '0', '31', '88.57', 1),
(9, '2013', 'BUSINESS', '33', '33', '0', '3', '15', '12', '2', '0', '32', '96.97', 1),
(10, '2014', 'SCIENCE', '56', '56', '10', '28', '14', '0', '1', '0', '53', '94.64', 1),
(11, '2014', 'HUMANITIES', '40', '40', '0', '5', '8', '12', '4', '0', '29', '72.50', 1),
(12, '2014', 'BUSINESS', '25', '25', '0', '13', '7', '4', '1', '0', '25', '100.00', 1),
(13, '2015', 'BUSINESS', '26', '26', '4', '29', '3', '0', '0', '0', '26', '100.00', 1),
(14, '2015', 'HUMANITIES', '50', '50', '2', '4', '13', '10', '7', '0', '36', '72.00', 1),
(15, '2015', 'BUSINESS', '27', '27', '0', '3', '11', '10', '0', '0', '24', '88.89', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jsc_result`
--

CREATE TABLE IF NOT EXISTS `tbl_jsc_result` (
  `jsc_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(10) NOT NULL,
  `total_exam` varchar(10) NOT NULL,
  `app` varchar(10) NOT NULL,
  `gpa_five` varchar(10) NOT NULL,
  `gpa_four` varchar(10) NOT NULL,
  `gpa_three_point_five` varchar(10) NOT NULL,
  `gpa_three` varchar(10) NOT NULL,
  `gpa_two` varchar(10) NOT NULL,
  `gpa_one` varchar(10) NOT NULL,
  `total_pass` varchar(10) NOT NULL,
  `percentice_of_pass` varchar(10) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`jsc_result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_jsc_result`
--

INSERT INTO `tbl_jsc_result` (`jsc_result_id`, `year`, `total_exam`, `app`, `gpa_five`, `gpa_four`, `gpa_three_point_five`, `gpa_three`, `gpa_two`, `gpa_one`, `total_pass`, `percentice_of_pass`, `publication_status`) VALUES
(1, '2010', '135', '117', '2', '24', '', '38', '31', '3', '116', '90.17', 1),
(2, '2011', '137', '137', '5', '29', '23', '26', '28', '23', '124', '90.51', 1),
(3, '2012', '122', '129', '1', '19', '13', '24', '51', '2', '110', '92.44', 1),
(4, '2014', '134', '131', '10', '59', '41', '18', '0', '0', '1285', '97.71', 1),
(5, '2013', '149', '147', '11', '69', '27', '29', '9', '0', '145', '98.64', 1),
(6, '2014', '148', '147', '7', '72', '42', '17', '4', '0', '142', '96.60', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_managing_committee`
--

CREATE TABLE IF NOT EXISTS `tbl_managing_committee` (
  `committee_id` int(3) NOT NULL AUTO_INCREMENT,
  `committee_name` varchar(100) NOT NULL,
  `committee_designation` varchar(100) NOT NULL,
  `committee_number` varchar(15) NOT NULL,
  `committee_photo` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`committee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_managing_committee`
--

INSERT INTO `tbl_managing_committee` (`committee_id`, `committee_name`, `committee_designation`, `committee_number`, `committee_photo`, `publication_status`) VALUES
(2, 'MD.SAHABUDDIN', 'PRESIDENT ', '01757818667', '../assets/admin_assets/committee_photo/ibrahim.jpg', 1),
(3, 'MD. FORKAN', 'GUARDIAN MEMBER', '01712862762', '../assets/admin_assets/committee_photo/102122017128627622711528007.jpg', 1),
(4, 'MD. NASIR UDDIN', 'GUARDIAN MEMBER', '01719222712', '../assets/admin_assets/committee_photo/102122017192227123173698088.jpg', 1),
(5, 'MD. MIRJAHAN', 'GUARDIAN MEMBER', '01713950385', '../assets/admin_assets/committee_photo/102122017139503851037292245.jpg', 1),
(6, 'MD. JAHID HOSEN', '	GUARDIAN MEMBER', '01714989160', '../assets/admin_assets/committee_photo/102122017149891601601050705.jpg', 1),
(7, '	MD. SAOKOT ALOM', '	GUARDIAN MEMBER', '01758318245', '../assets/admin_assets/committee_photo/102122017583182451724701406.jpg', 1),
(8, '	BANKIM CHANDRA DEB NATH', 'EACHER REPRESTIVE', '01727983157', '../assets/admin_assets/committee_photo/102122017279831572579131183.jpg', 1),
(9, '	ABDUL JABBAR', 'TEACHER REPRESTIVE', '01747696046', '../assets/admin_assets/committee_photo/102122017476960461804548481.jpg', 1),
(10, '01747696046', 'PERSONAL INTEREST', '01724038684', '../assets/admin_assets/committee_photo/102122017240386847134216953.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_info`
--

CREATE TABLE IF NOT EXISTS `tbl_school_info` (
  `school_info_id` int(3) NOT NULL AUTO_INCREMENT,
  `recognition` varchar(50) NOT NULL,
  `groups` varchar(20) NOT NULL,
  `land` float(10,2) NOT NULL,
  `play_ground` varchar(20) NOT NULL,
  `sanitation` varchar(20) NOT NULL,
  `laboratory` varchar(20) NOT NULL,
  `managing_committee` varchar(20) NOT NULL,
  `managing_duration` varchar(50) NOT NULL,
  `total_no_of_students` varchar(100) NOT NULL,
  `computer_lab` varchar(20) NOT NULL,
  `computer_lab_pc` varchar(20) NOT NULL,
  `number_of_employee` varchar(10) NOT NULL,
  `teacher` varchar(10) NOT NULL,
  `staff` varchar(10) NOT NULL,
  `co_curricular_activity` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`school_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_school_info`
--

INSERT INTO `tbl_school_info` (`school_info_id`, `recognition`, `groups`, `land`, `play_ground`, `sanitation`, `laboratory`, `managing_committee`, `managing_duration`, `total_no_of_students`, `computer_lab`, `computer_lab_pc`, `number_of_employee`, `teacher`, `staff`, `co_curricular_activity`, `sports`, `publication_status`) VALUES
(3, '01/01/1971 - 31/12/1972', 'Humanities', 2.62, '180x110=23100Sq.Ft.', 'YES', 'YES', 'YES', '10/01/2012 - 10/01/2014', '1500', 'YES', '50', '50', '40', '10', 'Scouting,Girls guide.', 'Cricket, Football,Swimming.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_image`
--

CREATE TABLE IF NOT EXISTS `tbl_slider_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_title` varchar(300) NOT NULL,
  `slider_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_slider_image`
--

INSERT INTO `tbl_slider_image` (`image_id`, `image_title`, `slider_image`, `publication_status`) VALUES
(2, 'Start Online Education', '../assets/admin_assets/slider_image/102122-13986.jpg', 0),
(3, 'Free Online education template for elearning and online education institute.', '../assets/admin_assets/slider_image/102166-33500.jpg', 0),
(4, 'Start Online ', '../assets/admin_assets/slider_image/102122.jpg', 0),
(5, 'Start Online ', '../assets/admin_assets/slider_image/102122-13986 (1).jpg', 0),
(6, 'Start Online Education', '../assets/admin_assets/slider_image/85543562.jpg', 1),
(7, 'Start Online ', '../assets/admin_assets/slider_image/ori_e89666feb714ab9c3946f28f00c5d8c419.jpg', 1),
(8, 'Start Online ', '../assets/admin_assets/slider_image/63052733.jpg', 1),
(9, 'Start Online ', '../assets/admin_assets/slider_image/64627486.jpg', 1),
(10, 'Start Online Education', '../assets/admin_assets/slider_image/2_EFT_demonstration_at_Barisal_Model_School_and_College.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` int(3) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(100) NOT NULL,
  `staff_designation` varchar(100) NOT NULL,
  `staff_number` varchar(15) NOT NULL,
  `staff_photo` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_name`, `staff_designation`, `staff_number`, `staff_photo`, `publication_status`) VALUES
(2, 'A. KADER', 'CLERK', '01724029937', '../assets/admin_assets/staff_photo/102122017240299372512256915.jpg', 1),
(3, '	ABUL KALAM', 'BOOK BINDER', '01754016332', '../assets/admin_assets/staff_photo/102122017540163329822527270.jpg', 1),
(4, '	SAHANUR BEGUM', '	AYAYA', '01754016332', '../assets/admin_assets/staff_photo/102122017540163322750422501.jpg', 1),
(5, 'MD. NIZAM UDDIN', 'LIBRAYAN', '01735776901', '../assets/admin_assets/staff_photo/102122017357769012263739300.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `teacher_id` int(3) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_designation` varchar(100) NOT NULL,
  `teacher_phone_number` varchar(20) NOT NULL,
  `teacher_photo` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `teacher_name`, `teacher_designation`, `teacher_phone_number`, `teacher_photo`, `publication_status`) VALUES
(2, 'MD.FORKAN', 'HEADMASTER', '8801712862762', '../assets/admin_assets/teacher_photo/for.jpg', 1),
(3, 'SARAL KUMAR DEBNATH', 'ASST. HEADMASTER	', '8801710621694', '../assets/admin_assets/teacher_photo/sarol.jpg', 1),
(4, 'MD. MAZARUL ISLAM', '	SENIOR ASSISTANT TEACHER', '8801721535993', '../assets/admin_assets/teacher_photo/102122017215359934597145820.jpg', 1),
(5, 'BANKIM CHANDRA DEB NATH', 'SENIOR ASSISTANT TEACHER', '8801727893157', '../assets/admin_assets/teacher_photo/kanai.jpg', 1),
(6, 'MD.HEMAET UDDIN', 'SENIOR ASSISTANT TEACHER', '8801727041829', '../assets/admin_assets/teacher_photo/hemaid.jpg', 1),
(7, 'MD. ABDUL JABBAR', 'SENIOR ASSISTANT TEACHER', '8801747696046', '../assets/admin_assets/teacher_photo/jabbor.jpg', 1),
(8, 'AHMED IBRAHIM', 'SENIOR ASSISTANT TEACHER', '8801735210478', '../assets/admin_assets/teacher_photo/ibrahim.jpg', 1),
(9, 'MST. SAHINA SULTANA', 'ASSISTANT TEACHER', '8801741370361', '../assets/admin_assets/teacher_photo/sahina.jpg', 1),
(10, 'TASLIMA BEGUM', 'ASSISTANT TEACHER', '8801766729375', '../assets/admin_assets/teacher_photo/taslima.jpg', 1),
(11, 'MD. MAHBUBUR RAHMAN', 'ASSISTANT TEACHER', '8801734537775', '../assets/admin_assets/teacher_photo/mahabubur.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upcomming_courses`
--

CREATE TABLE IF NOT EXISTS `tbl_upcomming_courses` (
  `upcomming_courses_id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(256) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`upcomming_courses_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_upcomming_courses`
--

INSERT INTO `tbl_upcomming_courses` (`upcomming_courses_id`, `title`, `name`, `publication_status`) VALUES
(1, 'Up Coming Courses', 'Mathematics and Computer Science', 1),
(2, 'Up Coming Courses', 'Mathematics and Philosophy', 1),
(3, 'Up Coming Courses', 'Philosophy and Modern Languages', 1),
(4, 'Up Coming Courses', 'History (Ancient and Modern)', 1),
(5, 'Up Coming Courses', 'Classical Archaeology and Ancient History', 1),
(6, 'Up Coming Courses', 'Physics and Philosophy', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
