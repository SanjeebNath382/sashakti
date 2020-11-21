-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 07:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sashakti`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ansid` varchar(255) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `answeredBy` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ansid`, `qid`, `answeredBy`, `text`, `date`) VALUES
('anjali14175fb8068b0f4665fb8ce7eb05f2', 'i am feeling very anxious5fb834bd58332', 'anjali1417', 'do not worry', '2020-11-21'),
('anjali14175fb8068b0f4665fb8d7f4b6b8b', 'how to reduce stress5fb8d7e3dc8e9', 'anjali1417', 'do not take stress', '2020-11-21'),
('anjali14175fb8068b0f4665fb92990eba95', 'how to reduce stress5fb8d7e3dc8e9', 'anjali1417', 'take care of your mental health and take proper sleep, and avoid stressful situations.', '2020-11-21'),
('anjali14175fb8068b0f4665fb9600b764cd', 'why do i feel physically fatigued at times5fb95f8c24cf1', 'anjali1417', 'it may be due to lack of proper diet, take good care of yourself', '2020-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `uid` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `category`, `text`, `uid`, `date`) VALUES
('Excessive pain during menstruation5fb8d440e83d3', 'Bodyspace', 'Excessive pain during menstruation', 'anjali14175fb8068b0f466', '2020-11-21'),
('how to reduce stress5fb8d7e3dc8e9', 'Mindspace', 'how to reduce stress', 'anjali14175fb8068b0f466', '2020-11-21'),
('i am feeling very anxious5fb834bd58332', 'Mindspace', 'i am feeling very anxious', 'anjali14175fb8068b0f466', '2020-11-21'),
('i am having excessive cramps5fb834b1c57aa', 'Bodyspace', 'i am having excessive cramps', 'anjali14175fb8068b0f466', '2020-11-21'),
('I am having negative thoughts continuosly5fb8b07a4755a', 'Mindspace', 'I am having negative thoughts continuosly', 'anjali14175fb8068b0f466', '2020-11-21'),
('i cannot sleep at night very oftenly5fb954746dfbc', 'Mindspace', 'i cannot sleep at night very oftenly', 'anjali14175fb8068b0f466', '2020-11-21'),
('i cannot sleep at night5fb834a29f8bd', 'Bodyspace', 'i cannot sleep at night', 'anjali14175fb8068b0f466', '2020-11-21'),
('my mind feels very tired5fb83504a79ac', 'Mindspace', 'my mind feels very tired', 'anjali14175fb8068b0f466', '2020-11-21'),
('why do i feel physically fatigued at times5fb95f8c24cf1', 'Bodyspace', 'why do i feel physically fatigued at times', 'anjali14175fb8068b0f466', '2020-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `name`) VALUES
('anjali14175fb8068b0f466', 'anjali1417', 'ano3KBMGNXVU6', 'Anjali Patle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
