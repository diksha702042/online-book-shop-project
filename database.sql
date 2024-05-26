 Server: localhost -  Database: bookstore
-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2023 at 08:33 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct1`
--

CREATE TABLE IF NOT EXISTS `addproduct1` (
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `auther` varchar(70) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct1`
--

INSERT INTO `addproduct1` (`name`, `price`, `type`, `auther`, `image`) VALUES
('Encyclopedia of General Science for General Compet', 198, 'Science and Fiction', 'Ankita Anand', '32.jpg'),
('Relativity', 140, 'Science and Fiction', 'Albert Einstein', '31.jpg'),
('Beyond Infinity', 267, 'Science and Fiction', 'Tejas Kale', '26.jpg'),
('Kyra', 370, 'Novel', 'Carlon Gilligan', '7.jpeg'),
('Time Trap', 873, 'Science and Fiction', 'Micah caida', '23.jpg'),
('Gulamgiri', 66, 'History', 'Jyotirao Phule', '37.jpg'),
('Modern Indian History', 357, 'History', 'none', '33.jpg'),
('Ancient INDIA History', 350, 'History', 'none', '34.jpg'),
('Digital Marketing', 109, 'Educational', 'none', '39.jpg'),
('Object Oriented Software Engineering', 310, 'Educational', 'none', '40.jpg'),
('Relational Database', 191, 'Educational', 'none', '30.jpg'),
('Advance C Programming', 144, 'Educational', 'none', '29.jpg'),
('INDIAN Cooking', 88, 'Cooking', 'Sunita vaswani', '24.jpg'),
('Super Easy Receipes', 70, 'Cooking', 'slavca bodic', '5.jpeg'),
('South Indian Cooking', 79, 'Cooking', 'Srividya Gopalakrishna', '10.jpeg'),
('The Andra Cooking', 77, 'Cooking', 'Sunita rao', '9.jpeg'),
('Wings Of Fire', 218, 'Educational', 'A.P.J. Abdul Kalam', '41.jpg'),
('A Brief History of Time Stephen Hawking', 647, 'Educational', 'Stephen Hawking', '42.jpg'),
('The Constitution Of INDIA', 100, 'Educational', 'Dr.B.R. Ambedkar', '43.jpg'),
('The Constitution Of INDIA', 100, 'Educational', 'Dr.B.R. Ambedkar', '18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `uname` varchar(20) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `uname`, `email`, `feedback`) VALUES
(1, 'diksha', 'morediksh123@gmail.com', 'i liked the collection of your books. the variety which you have and the maintanence of books are al'),
(2, 'pratiksha', 'pratiksha999@gmail.com', 'your books delivary is very fast i am happy to give books of your shop.'),
(3, 'pratiksha telore', 'pratiksha999@gmail.com', 'jhvhjvjgg'),
(4, 'Diksha Sanjay More', 'morediksha560@gmail.com', 'cfchdfghfgj');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `tot` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `name`, `price`, `qty`, `uname`, `tot`, `image`) VALUES
(1, 'robyn car', 409, 1, 'diksha', 409, '6.jpeg'),
(19, 'Wings Of Fire ', 218, 1, 'diksha', 218, '41.jpg '),
(20, 'The Constitution Of INDIA ', 100, 1, 'pratiksha ', 100, '43.jpg '),
(21, 'Relativity ', 140, 1, 'yash', 140, '31.jpg '),
(22, 'Relational Database ', 191, 1, 'pratiksha telore', 191, '30.jpg '),
(23, 'INDIAN Cooking ', 88, 1, 'Diksha Sanjay More', 88, '24.jpg '),
(24, 'Modern Indian History ', 357, 1, 'diksha', 357, '33.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `mobile`, `address`, `email`, `uname`, `password`) VALUES
('Diksha Sanjay More', 2147483647, 'shrirampur', 'morediksha560@gmail.com', 'Diksha ', 432),
('yash more', 2147483647, 'shrirampur', 'yash555@gmail.com', 'yash', 345),
('Pratiksha Subhash Telore', 2147483647, 'wadala', 'telore142@gmail.com', 'pratiksha', 963),
('akshada gaikwad', 2147483647, 'wadala mhadev', 'akshada345@gmail.com', 'akshada', 342),
('akshada gaikwad', 2147483647, 'wadala mhadev', 'akshada345@gmail.com', 'akshada', 655),
('akshada gaikwad', 2147483647, 'wadala mhadev', 'akshada345@gmail.com', 'akshada', 655),
('shweta pardeshi', 2147483647, ' near by jayswal hospital shrirampur', 'shweta546@gmail.com', 'shweta', 456);

