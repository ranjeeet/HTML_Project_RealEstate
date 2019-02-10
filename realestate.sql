-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2015 at 06:15 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_slider`
--

CREATE TABLE IF NOT EXISTS `aboutus_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `upload_date` date NOT NULL,
  `slider` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `aboutus_slider`
--

INSERT INTO `aboutus_slider` (`id`, `name`, `upload_date`, `slider`) VALUES
(2, 'slider1', '2015-07-28', 'bg-2.jpg'),
(3, 'slider2', '2015-07-28', 'bg-4.jpg'),
(4, 'slider3', '2015-07-28', 'bg-5.jpg'),
(5, 'slider4', '2015-07-28', 'bg-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Designation` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `Designation`) VALUES
(23, '<h3>About Us</h3>\r\n\r\n<p><img alt="" src="img/AboutUs.jpg" style="height:300px; width:100%" /></p>\r\n\r\n<p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident praesentium voluptatum deleniti atque corrupti quos non provident. At vero eos et accusamus et iusto odio Nam libero tempore cum soluta nobis est Temporibus autem quibusdam et aut officiis Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE armscii8_bin NOT NULL,
  `lastname` varchar(100) COLLATE armscii8_bin NOT NULL,
  `passsword` varchar(20) COLLATE armscii8_bin NOT NULL,
  `contact` varchar(100) COLLATE armscii8_bin DEFAULT NULL,
  `email` varchar(200) COLLATE armscii8_bin NOT NULL,
  `photo` varchar(200) COLLATE armscii8_bin DEFAULT NULL,
  `Added_date` date NOT NULL,
  `Added_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin AUTO_INCREMENT=17 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `lastname`, `passsword`, `contact`, `email`, `photo`, `Added_date`, `Added_time`) VALUES
(9, 'Ganesh ', 'prajapat', 'ganesh', '8989898989', 'ganesh@gmail.com', '1295898364-smart-kid.jpg', '2015-07-15', '18:31:19'),
(13, 'sagar kumar', 'prajapat', '123', '78787878787', 'sagar@gmail.com', '2014-new-summer-fashion-children-font-b-baby-b-font-kid-designer-ray-sports-eyewear-boys-1.jpg', '2015-07-20', '11:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `enquirytype`
--

CREATE TABLE IF NOT EXISTS `enquirytype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `enquirytype`
--

INSERT INTO `enquirytype` (`id`, `Name`) VALUES
(1, 'Purchase'),
(2, 'Rent'),
(3, 'Sale');

-- --------------------------------------------------------

--
-- Table structure for table `honourable_client`
--

CREATE TABLE IF NOT EXISTS `honourable_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `honourable_client`
--

INSERT INTO `honourable_client` (`id`, `name`, `url`, `logo`) VALUES
(2, 'client1', 'http://themeforest.net/', 'clients1.png'),
(3, 'client2', 'http://audiojungle.net/', 'clients2.png'),
(4, 'client3', 'http://3docean.net/', 'clients3.png'),
(5, 'client4', 'http://graphicriver.net/', 'clients4.png'),
(6, 'client5', 'http://3docean.net/', 'clients5.png'),
(7, 'client6', 'http://codecanyon.net/', 'clients6.png'),
(8, 'client7', 'http://photodune.net/', 'clients7.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplyfor`
--

CREATE TABLE IF NOT EXISTS `jobapplyfor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `JobName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `jobapplyfor`
--

INSERT INTO `jobapplyfor` (`id`, `JobName`) VALUES
(10, 'SEO'),
(4, 'Developer'),
(5, 'Designer');

-- --------------------------------------------------------

--
-- Table structure for table `managecontact`
--

CREATE TABLE IF NOT EXISTS `managecontact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `query` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `managecontact`
--

INSERT INTO `managecontact` (`id`, `name`, `contact`, `email`, `query`) VALUES
(28, 'ganesh', 9871856, 'ganesh@gmail.com', 'xfd');

-- --------------------------------------------------------

--
-- Table structure for table `manageenquiry`
--

CREATE TABLE IF NOT EXISTS `manageenquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `EnqiuryType` varchar(100) NOT NULL,
  `Query` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `manageenquiry`
--

INSERT INTO `manageenquiry` (`id`, `Name`, `Contact`, `Email`, `EnqiuryType`, `Query`) VALUES
(2, 'ramu', 67676767, 'ramu@hotmail.com', 'Rent', 'i want a home for Rent...'),
(7, 'dfgs', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `managejoinus`
--

CREATE TABLE IF NOT EXISTS `managejoinus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Download` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `managejoinus`
--

INSERT INTO `managejoinus` (`id`, `Name`, `Contact`, `Email`, `Download`) VALUES
(3, 'dfgs', 0, 'dfdfd', '_localhost_DB_realestate_.sql');

-- --------------------------------------------------------

--
-- Table structure for table `manageproperty`
--

CREATE TABLE IF NOT EXISTS `manageproperty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PropertyType` varchar(200) NOT NULL,
  `PropertyName` varchar(100) NOT NULL,
  `Area` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `facilites` varchar(200) NOT NULL,
  `amenities` varchar(200) NOT NULL,
  `floor` varchar(10) NOT NULL,
  `nearby` varchar(200) NOT NULL,
  `featureproperty` varchar(5) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `manageproperty`
--

INSERT INTO `manageproperty` (`id`, `PropertyType`, `PropertyName`, `Area`, `Location`, `facilites`, `amenities`, `floor`, `nearby`, `featureproperty`, `Image`, `Date`) VALUES
(9, 'rent', 'Luxury', '450', '					Delhi					', 'Park,Gym', 'Sofa,Kitchen', 'Second', 'RailwayStation,Airport,Hospital', 'yes', 'Luxury-Modern-Bedroom-TophomeSystems.jpg', '2015-07-23'),
(7, 'villa', 'White Home', '220', '																														noida																														', 'Metro', 'Sofa', 'Ground Flo', 'Metro,Airport', 'yes', '1500x675_white_home.jpg', '2015-07-23'),
(8, 'regidence', 'Blu Home', '550', '																														noida																														', 'Metro', 'Sofa,Kitchen', 'First', 'Metro', 'yes', 'Blu-Homes-2015-Product-Line-1-537x357.jpg', '2015-08-01'),
(10, 'villa', 'Asiyana', '800', '					gajiyabad					', 'Metro', 'WoodWork,Kitchen', 'Third', 'Metro,Hospital', 'no', 'bg-2.jpg', '2015-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `manage_client`
--

CREATE TABLE IF NOT EXISTS `manage_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `manage_client`
--

INSERT INTO `manage_client` (`id`, `name`, `comment`, `image`) VALUES
(2, 'Rajat', '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>\r\n', '3059d7ecd61fadc49084aa0113bee3c3_102.jpg'),
(3, 'Ganesh', '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>\r\n', '20140408_095515.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manage_team`
--

CREATE TABLE IF NOT EXISTS `manage_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `manage_team`
--

INSERT INTO `manage_team` (`id`, `name`, `designation`, `image`) VALUES
(14, 'Rakesh', 'SEO', '2014_lastesr_fashion_top_brand_coat_pant.jpg'),
(13, 'Darun', 'SEO', '-font-b-silver-b-font-font-b-men-b-font-font-b-suits-b-font.jpg'),
(8, 'prem', 'Designer', 'New-Fashion-Design-and-New-Style-Coat-Pant-Men-Suit-for-Wedding-W0331-.jpg'),
(9, 'Ganesh', 'Developer', 'Hugo-Boss-Men-Wear-Exclusive-Pant-Coat-Selection-Fall-2012-13_Boss01.jpg'),
(10, 'rakes', 'Developer', 'mens-gents-wear-pant-coat-dress-design-new-fashion-outfits-by-eden-robe-3.jpg'),
(11, 'Manoj', 'Designer', 'Super-150-s-100-Wool-One-Buttons-Notch-Lapel-Grey-Latest-Design-Coat-Pant-Men-Suit-CH011-.jpg'),
(12, 'rajat', 'SEO', '2014_lastesr_fashion_top_brand_coat_pant.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ourmissionvision`
--

CREATE TABLE IF NOT EXISTS `ourmissionvision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Mission` varchar(1000) NOT NULL,
  `Vision` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ourmissionvision`
--

INSERT INTO `ourmissionvision` (`id`, `Mission`, `Vision`) VALUES
(1, '<p>Our Mission Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n', '<p>Our Vission Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>\r\n'),
(2, '<p>kjkj</p>\r\n', '<p>mnn</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ourskill`
--

CREATE TABLE IF NOT EXISTS `ourskill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `percentage` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ourskill`
--

INSERT INTO `ourskill` (`id`, `name`, `percentage`) VALUES
(7, 'SEO', 60),
(4, 'Our Designer', 80),
(6, 'Developing', 99);

-- --------------------------------------------------------

--
-- Table structure for table `propertytype`
--

CREATE TABLE IF NOT EXISTS `propertytype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `propertytype`
--

INSERT INTO `propertytype` (`id`, `Name`) VALUES
(1, 'villa'),
(2, 'regidence'),
(3, 'rent');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `para` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `heading`, `para`, `image`) VALUES
(4, 'HELLO! World', '', 'building_107.jpg'),
(7, 'Welcome!', '@ Home', 'bg-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `useregister`
--

CREATE TABLE IF NOT EXISTS `useregister` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Img` varchar(200) DEFAULT NULL,
  `ContactNo` int(20) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `useregister`
--

INSERT INTO `useregister` (`id`, `Name`, `LastName`, `Password`, `Address`, `Img`, `ContactNo`, `Email`) VALUES
(3, 'sadam', 'verma', '456', 'slkdjfksj', '2014_lastesr_fashion_top_brand_coat_pant.jpg', 7878787, 'sadam@gmail.com'),
(4, 'Abhinav', 'Kumar', '123', 'Nirman Vihar', 'integrity.jpg', 2147483647, 'abhinavkumar201@gmail.com');
