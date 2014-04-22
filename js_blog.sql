-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2014 at 01:03 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `js_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_entries`
--

CREATE TABLE IF NOT EXISTS `blog_entries` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `blog_title` varchar(70) NOT NULL,
  `blog_entry` text NOT NULL,
  `blog_date` date NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blog_entries`
--

INSERT INTO `blog_entries` (`blog_id`, `cat_id`, `blog_title`, `blog_entry`, `blog_date`) VALUES
(1, 1, 'Blog Entry 1', 'Nullam et odio lobortis velit dignissim dictum eu quis elit. Morbi eget odio vel dolor sagittis mollis. Donec rhoncus, urna non mattis lobortis, tellus orci elementum dolor, sit amet pretium felis massa quis diam. Morbi pretium velit ac eros facilisis dignissim. Morbi ut feugiat risus. Maecenas tellus eros, tincidunt aliquet vehicula eu, molestie non velit. Aliquam erat volutpat. Sed congue, velit a ultrices luctus, nunc turpis dictum sapien, dictum malesuada sem orci ac tellus. Mauris aliquam neque ut diam posuere eget posuere arcu convallis. Cras purus urna, rhoncus quis ornare sit amet, consectetur vulputate turpis. Suspendisse lobortis lorem eleifend ante accumsan vestibulum. Cras ac leo enim. Vivamus sollicitudin dapibus hendrerit. Morbi ultricies, justo at blandit commodo, elit est mattis risus, id sagittis ligula lectus tincidunt libero. Aenean scelerisque consectetur lectus, pharetra tincidunt nunc volutpat sit amet. Cras accumsan enim ac mi aliquam sit amet vulputate urna bibendum. Nam egestas egestas nisi quis condimentum. Morbi bibendum dui imperdiet arcu gravida fermentum. Vestibulum velit enim, vulputate eget tempus eu, scelerisque nec magna. Etiam tristique gravida nisl id mollis. ', '2012-07-06'),
(2, 2, 'Blog Entry 2', 'Nullam et odio lobortis velit dignissim dictum eu quis elit. Morbi eget odio vel dolor sagittis mollis. Donec rhoncus, urna non mattis lobortis, tellus orci elementum dolor, sit amet pretium felis massa quis diam. Morbi pretium velit ac eros facilisis dignissim. Morbi ut feugiat risus. Maecenas tellus eros, tincidunt aliquet vehicula eu, molestie non velit. Aliquam erat volutpat. Sed congue, velit a ultrices luctus, nunc turpis dictum sapien, dictum malesuada sem orci ac tellus. Mauris aliquam neque ut diam posuere eget posuere arcu convallis. Cras purus urna, rhoncus quis ornare sit amet, consectetur vulputate turpis. Suspendisse lobortis lorem eleifend ante accumsan vestibulum. Cras ac leo enim. Vivamus sollicitudin dapibus hendrerit. Morbi ultricies, justo at blandit commodo, elit est mattis risus, id sagittis ligula lectus tincidunt libero. Aenean scelerisque consectetur lectus, pharetra tincidunt nunc volutpat sit amet. Cras accumsan enim ac mi aliquam sit amet vulputate urna bibendum. Nam egestas egestas nisi quis condimentum. Morbi bibendum dui imperdiet arcu gravida fermentum. Vestibulum velit enim, vulputate eget tempus eu, scelerisque nec magna. Etiam tristique gravida nisl id mollis. ', '2012-07-05'),
(3, 3, 'blog entry 3', 'Nullam et odio lobortis velit dignissim dictum eu quis elit. Morbi eget odio vel dolor sagittis mollis. Donec rhoncus, urna non mattis lobortis, tellus orci elementum dolor, sit amet pretium felis massa quis diam. Morbi pretium velit ac eros facilisis dignissim. Morbi ut feugiat risus. Maecenas tellus eros, tincidunt aliquet vehicula eu, molestie non velit. Aliquam erat volutpat. Sed congue, velit a ultrices luctus, nunc turpis dictum sapien, dictum malesuada sem orci ac tellus. Mauris aliquam neque ut diam posuere eget posuere arcu convallis. Cras purus urna, rhoncus quis ornare sit amet, consectetur vulputate turpis. Suspendisse lobortis lorem eleifend ante accumsan vestibulum. Cras ac leo enim. Vivamus sollicitudin dapibus hendrerit. Morbi ultricies, justo at blandit commodo, elit est mattis risus, id sagittis ligula lectus tincidunt libero. Aenean scelerisque consectetur lectus, pharetra tincidunt nunc volutpat sit amet. Cras accumsan enim ac mi aliquam sit amet vulputate urna bibendum. Nam egestas egestas nisi quis condimentum. Morbi bibendum dui imperdiet arcu gravida fermentum. Vestibulum velit enim, vulputate eget tempus eu, scelerisque nec magna. Etiam tristique gravida nisl id mollis. ', '2012-07-04'),
(4, 2, 'blog entry 4', 'Nullam et odio lobortis velit dignissim dictum eu quis elit. Morbi eget odio vel dolor sagittis mollis. Donec rhoncus, urna non mattis lobortis, tellus orci elementum dolor, sit amet pretium felis massa quis diam. Morbi pretium velit ac eros facilisis dignissim. Morbi ut feugiat risus. Maecenas tellus eros, tincidunt aliquet vehicula eu, molestie non velit. Aliquam erat volutpat. Sed congue, velit a ultrices luctus, nunc turpis dictum sapien, dictum malesuada sem orci ac tellus. Mauris aliquam neque ut diam posuere eget posuere arcu convallis. Cras purus urna, rhoncus quis ornare sit amet, consectetur vulputate turpis. Suspendisse lobortis lorem eleifend ante accumsan vestibulum. Cras ac leo enim. Vivamus sollicitudin dapibus hendrerit. Morbi ultricies, justo at blandit commodo, elit est mattis risus, id sagittis ligula lectus tincidunt libero. Aenean scelerisque consectetur lectus, pharetra tincidunt nunc volutpat sit amet. Cras accumsan enim ac mi aliquam sit amet vulputate urna bibendum. Nam egestas egestas nisi quis condimentum. Morbi bibendum dui imperdiet arcu gravida fermentum. Vestibulum velit enim, vulputate eget tempus eu, scelerisque nec magna. Etiam tristique gravida nisl id mollis. ', '2012-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'category 1'),
(2, 'category 2'),
(3, 'category 3');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(100) NOT NULL,
  `page_content` text NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'worldskills'),
(2, 'notentered', 'jung'),
(3, 'notentered', 'jung'),
(4, 'notentered', 'jung'),
(5, 'notentered', 'jung'),
(6, 'notentered', 'jung'),
(7, 'notentered', 'jung'),
(8, 'notentered', 'jung'),
(9, 'notentered', 'jung'),
(10, 'notentered', 'jung'),
(11, 'notentered', 'jung'),
(12, 'notentered', 'jung'),
(13, 'notentered', 'jung'),
(14, 'notentered', 'jung'),
(15, 'notentered', 'jung'),
(16, 'notentered', 'jung'),
(17, 'notentered', 'jung'),
(18, 'notentered', 'jung'),
(19, 'notentered', 'jung'),
(20, 'notentered', 'jung'),
(21, 'notentered', 'jung'),
(22, 'notentered', 'jung'),
(23, 'notentered', 'jung'),
(24, 'notentered', 'jung'),
(25, 'notentered', 'jung'),
(26, 'notentered', 'jung'),
(27, 'notentered', 'jung'),
(28, 'notentered', 'jung'),
(29, 'notentered', 'jung'),
(30, 'notentered', 'jung'),
(31, 'notentered', 'jung'),
(32, 'notentered', 'jung'),
(33, 'notentered', 'jung'),
(34, 'notentered', 'jung'),
(35, 'notentered', 'jung'),
(36, 'notentered', 'jung'),
(37, 'notentered', 'jung'),
(38, 'notentered', 'jung'),
(39, 'notentered', 'jung'),
(40, 'notentered', 'jung'),
(41, 'notentered', 'jung'),
(42, 'notentered', 'jung'),
(43, 'notentered', 'jung'),
(44, 'notentered', 'jung'),
(45, 'notentered', 'jung'),
(46, 'notentered', 'jung');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
