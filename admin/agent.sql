-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2012 at 11:08 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort1` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `sort1`, `email`, `phone`, `fax`, `address`, `status`) VALUES
(1, 1, ' info@challenge11.com', '763-350-2570', '', '%3Cp%3E%0D%0A%09Challenge+11+Program%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%0913462+Narcissus+St+NW%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%09Anodver%2C+MN%26nbsp%3B+55304%3C%2Fp%3E%0D%0A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dynamic_pages`
--

CREATE TABLE IF NOT EXISTS `tbl_dynamic_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort1` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_keywords` text NOT NULL,
  `page_metatags` text NOT NULL,
  `page_description` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_dynamic_pages`
--

INSERT INTO `tbl_dynamic_pages` (`id`, `sort1`, `page_title`, `page_name`, `page_keywords`, `page_metatags`, `page_description`, `status`) VALUES
(1, 1, 'Home', 'We can help', '', '', '%3Cp%3E%0D%0A%09The+Challenge+11+program+is+designed+to+help+eleventh+grade+students+connect+the+benefits+of+healthy+lifestyle+choices+with+their+own+goals+and+dreams.+It%26%2339%3Bs+a+%26quot%3Bnon-preachy%26quot%3B+approach+using+something+they+are+very+familiar+with%2C+the+social+network.%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3Cbr+%2F%3E%0D%0A%09%3Cbr+%2F%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3Cbr+%2F%3E%0D%0A%09%3Cbr+%2F%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque..%3C%2Fp%3E%0D%0A', 1),
(2, 2, 'About', 'About', '', '', '%3Cp%3E%0D%0A%09The+Challenge+11+program+is+a+group+of+experts+in+the+areas+of+fitness%2C+social+networking+and+business+intelligence.+We+are+interested+in+working+with+schools+who+want+to+challenge+their+eleventh+grade+students+to+make+decisions+that+will+help+them+in+their+pursuits.%3C%2Fp%3E%0D%0A', 1),
(3, 3, 'Services', 'Services', '', '', '%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%09%26nbsp%3B%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3C%2Fp%3E%0D%0A', 1),
(4, 4, 'Portfolio', 'Portfolio', '', '', '%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3C%2Fp%3E%0D%0A%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3C%2Fp%3E%0D%0A', 1),
(5, 5, 'Clients', 'Clients', '', '', '%3Cp%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3Cbr+%2F%3E%0D%0A%09%3Cbr+%2F%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3Cbr+%2F%3E%0D%0A%09%3Cbr+%2F%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3Cbr+%2F%3E%0D%0A%09%3Cbr+%2F%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3Cbr+%2F%3E%0D%0A%09%3Cbr+%2F%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3Cbr+%2F%3E%0D%0A%09%3Cbr+%2F%3E%0D%0A%09Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Nunc+vitae+purus+non+augue+scelerisque+ultricies+vitae+et+velit.+Sed+vitae+lectus+id+sem+lobortis+scelerisque.%3Cbr+%2F%3E%0D%0A%09%26nbsp%3B%3C%2Fp%3E%0D%0A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_image_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort1` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_description` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_image_slider`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort1` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_des` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `sort1`, `title`, `image`, `short_des`, `description`, `status`) VALUES
(1, 1, 'image', '1340963915slider1.png', '', '', 1),
(2, 2, 'image2', '1341386193slider.png', '', '', 1),
(3, 3, 'sdsd', '1341835758Penguins.jpg', '', '', 1),
(4, 4, 'ddfd', '1341835767Tulips.jpg', '', '', 1),
(5, 5, 'dfdfd', '1341835774Koala.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_link`
--

CREATE TABLE IF NOT EXISTS `tbl_social_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort1` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `soical_link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_social_link`
--

INSERT INTO `tbl_social_link` (`id`, `sort1`, `title`, `image`, `soical_link`, `status`) VALUES
(7, 1, 'facebook', '1340969000fb.png', 'http://www.facebook.com/', 1),
(8, 2, 'twitter', '1340969072twrtr.png', 'http://twitter.com', 1),
(9, 3, 'Linkin', '1340969084in.png', 'http://youtube.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE IF NOT EXISTS `tbl_testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort1` int(11) NOT NULL,
  `date1` int(11) NOT NULL,
  `usrname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `sort1`, `date1`, `usrname`, `company`, `website`, `description`, `status`) VALUES
(6, 2, 1317223372, 'Zain ur Rehman', 'WebSoft', '', '%3Cp%3E%0D%0A%09%26quot%3BLorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.%26quot%3B%3C%2Fp%3E%0D%0A', 1),
(5, 1, 1317283787, 'Naveed Ur rehman1', 'Aydin solutions1', 'www.yahoo.com', '%3Cp%3E%0D%0A%09%26quot%3BLorem+ipsum+dolor+sit+amet%2C+consectetur+adipiscing+elit.+Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.%26quot%3B%3C%2Fp%3E%0D%0A', 1),
(7, 3, 1317283262, 'waheed', 'aydin', 'http://www.yahoo.com', '%3Cp%3E%0D%0A%09%26quot%3BPellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.Pellentesque+quis+nulla+id+orci+malesuada+porta+posuere+quis+massa.%26quot%3B%3C%2Fp%3E%0D%0A', 1);
