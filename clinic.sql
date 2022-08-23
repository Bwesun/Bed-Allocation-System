-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 10:27 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `clinic`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(2) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`id`, `username`, `password`) VALUES 
(1, 'admin', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `beds`
-- 

CREATE TABLE `beds` (
  `bed_id` int(3) NOT NULL auto_increment,
  `bed_name` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL default '0',
  PRIMARY KEY  (`bed_id`),
  UNIQUE KEY `bed_name` (`bed_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `beds`
-- 

INSERT INTO `beds` (`bed_id`, `bed_name`, `status`) VALUES 
(2, 'Bed2', '0'),
(5, 'Bed3', '1'),
(6, 'Bed A1', '0'),
(7, 'Bed A2', '0'),
(8, 'Bed E1', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `oc_record`
-- 

CREATE TABLE `oc_record` (
  `pat_id` int(3) NOT NULL auto_increment,
  `Pat_name` varchar(25) NOT NULL,
  `pat_phone` varchar(15) NOT NULL,
  `pat_email` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(500) NOT NULL,
  `symptom` varchar(500) NOT NULL,
  `bed_id` varchar(3) NOT NULL,
  `bed_name` varchar(10) NOT NULL,
  `datetime` varchar(9) NOT NULL,
  PRIMARY KEY  (`pat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- 
-- Dumping data for table `oc_record`
-- 

INSERT INTO `oc_record` (`pat_id`, `Pat_name`, `pat_phone`, `pat_email`, `gender`, `age`, `address`, `symptom`, `bed_id`, `bed_name`, `datetime`) VALUES 
(26, 'innocent matur Joshua', '09088776655', 'maturinnocent@gmail.com', 'Male', '23', 'Address of the patient', '', '2', 'Bed2', '12/11/18 '),
(28, 'Matur Innocent Joshua', '08144529253', 'mathias@gmail.com', 'Male', '56', 'Address', '', '2', 'Bed2', '08/11/18 '),
(29, 'Felixilia', '09063334420', 'joe@gmail.com', 'Female', '19', 'Hayin ojo, samaru, zaria', '', '5', 'Bed3', '14/11/18 ');
