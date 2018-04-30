-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 04:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `idcourse` int(20) NOT NULL,
  `coursename` varchar(100) COLLATE utf8_bin NOT NULL,
  `coursedesc` varchar(2000) COLLATE utf8_bin NOT NULL,
  `courseimage` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='This is the course table';

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`idcourse`, `coursename`, `coursedesc`, `courseimage`) VALUES
(1, 'Java', 'This course begins by giving a birds-eye view of Java covering everything from origin of Java to installing Java and writing your first Java program. Even the most fundamental concepts like compilation & interpretation are explained. All other topics are covered in-depth starting from language basics, object-oriented concepts & design (including Java 8 features like default & static methods in interfaces), JVM, exceptions, IO, data structures, generics, multi-threading, databases, nested classes, enums and even functional-style programming via Java 8 constructs like lambda expressions & streams.\n\nEach lecture has been very carefully crafted. Motivation behind every concept is clearly explained with well thought out examples and nice animations. Object-oriented concepts like inheritance & polymorphism are explained through a real-world case-study, which is also implemented as part of the course project. Every concept has been well-tested through ready-to-run, downloadable demo programs, which are implemented and executed in the course. Every chapter ends with a carefully crafted quiz to test what was learnt. Many chapters also include challenging coding exercises and student solutions are also auto-evaluated via JUnit scripts, i.e., students would instantly know whether their solution is right or wrong. One of the coding exercises is on Sentiment Analysis, which is a hot area in the industry.', '../upload/courseimages/java.png'),
(2, 'PHP', 'This PHP for beginners course introduces you to PHP through carefully crafted examples and fully worked tasks. Learning by doing is what this course is all about. You will experience real world examples of PHP code use.\n\nHave you seen other courses that use complex terms or that jump steps and leave you thinking "why did that just happen"? You won''t find that with this course because every line is explained and is very easy to follow..\n\nThis course has been designed with the coding beginner in mind or those who may have picked up bad habits and wish to refresh their coding skills.\n\nOn hand to help and guide you is a renowned national award-winning teacher who has taught 1000s of students over a career of over 25 years.', '../upload/courseimages/php.png'),
(3, '.Net', 'Whatever your reason is, there is no better way to get started with enterprise level .net development than .Net for Beginners with Bruce Landry. Bruce''s patience and experience shines through as he explains every aspect of the .net environment and shows you the fundamentals of developing Windows and web-based applications.\n\nJust because this course is for beginners doesn''t mean it''s not comprehensive! This course will show you how to build a full Windows application including database back end. You''ll also tour a web-based application and learn how to integrate the many useful .net libraries.\n\nYour enterprise development career starts here! After this course, you''ll be thoroughly prepared to make your own .net applications.', '../upload/courseimages/dotnet.jpg'),
(4, 'C#', 'Does coding scare you? Think applications can only be made by geeks? Well I''m here to change that!\n\nLearn the basic concepts, tools, and functions that you will eventually use to build both desktop and mobile applications with the popular programming language, C#. \n\n-------------------------------\nThis course is for complete and utter beginners to programming and C#. If you don''t know what fancy words like ''classes'' and ''objects'' mean then this is the course for you!\n-------------------------------\n\nSome Things You Will Learn:\nVariables\nFunctions or Methods\nBasic Class Creation\nA bunch of other useful things!\n', '../upload/courseimages/csharp.png');

-- --------------------------------------------------------

--
-- Table structure for table `coursesandstudents`
--

CREATE TABLE `coursesandstudents` (
  `idInscriptions` int(30) NOT NULL,
  `courseId` int(10) NOT NULL,
  `studentId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='This table relate courses Id with student Id';

--
-- Dumping data for table `coursesandstudents`
--

INSERT INTO `coursesandstudents` (`idInscriptions`, `courseId`, `studentId`) VALUES
(72, 3, 3),
(79, 2, 2),
(80, 3, 2),
(81, 4, 2),
(82, 1, 21),
(83, 2, 21),
(84, 4, 21);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `idstudent` int(30) NOT NULL,
  `studentname` varchar(40) COLLATE utf8_bin NOT NULL,
  `studentphone` int(40) NOT NULL,
  `studentemail` varchar(40) COLLATE utf8_bin NOT NULL,
  `studentimage` varchar(400) COLLATE utf8_bin DEFAULT '..\\upload\\studentImages\\avatardefaulticon.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Student Table';

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`idstudent`, `studentname`, `studentphone`, `studentemail`, `studentimage`) VALUES
(2, 'Joseph Cohen C.', 2147483647, 'joseph@cohen.com', '../upload/studentimages/student1.jpg'),
(3, 'Peter Steen Steen', 303330303, 'peter@steen.com', '../upload/studentimages/avatardefaulticon.png'),
(12, 'Jose', 809809, 'jose@perez.com', '..\\upload\\studentImages\\student2.jpg'),
(13, 'Jacinto', 89098, 'jacinto@pepe.com', '..\\upload\\studentImages\\avatardefaulticon.png	'),
(21, 'Student DotNet', 32323233, 'dfddadsdf@gmail.com', '../upload/studentimages/student4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(5) NOT NULL,
  `Name` varchar(35) COLLATE utf8_bin NOT NULL,
  `Role` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT 'seller',
  `Phone` varchar(14) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `Password` varchar(200) COLLATE utf8_bin NOT NULL,
  `imgsrc` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '../upload/teamimages/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='This is the table for the owner, managers and sales personal';

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `Name`, `Role`, `Phone`, `email`, `Password`, `imgsrc`) VALUES
(18, 'Susan Spacie', 'admin', '052356455', 'susan@admin.com', '$2y$10$BUxgkmo5sXz5eTxpY4R4Y.HFZrDy4l/dwfjqietpD0aUI02beZXJm', '../upload/teamimages/owner.png'),
(19, 'Brenda Brewer', 'manager', '0626443388', 'b@manager.com', '$2y$10$0eLF4ZHKrXyV1BLiL.gD0eMyQk.PJWAQb6nfiTQvWdRENrWq.kPTG', '../upload/teamimages/manager.png'),
(20, 'Eva Seller', 'seller', '0344558776', 'e@seller.com', '$2y$10$MJsbKwdcySbh44Fxm0OoUOD2es3bqTyYPsuyYYNsCvIfcMGVw61NG', '../upload/teamimages/seller.png'),
(39, 'Joseph Sebastocolm', 'manager', '0266678644', 'joseph@manager.com', '$2y$10$aWIp0vsWY1iS0SogS4tTPu5Dw96Tm1U/8uYYFRa2.CFdW6LZZ7FJe', '../upload/teamimages/default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`idcourse`),
  ADD UNIQUE KEY `idcourse` (`idcourse`),
  ADD UNIQUE KEY `coursename` (`coursename`);

--
-- Indexes for table `coursesandstudents`
--
ALTER TABLE `coursesandstudents`
  ADD PRIMARY KEY (`idInscriptions`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idstudent`),
  ADD UNIQUE KEY `studentemail` (`studentemail`),
  ADD UNIQUE KEY `studentphone` (`studentphone`),
  ADD KEY `studentemail_2` (`studentemail`),
  ADD KEY `studentphone_2` (`studentphone`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Telephone Number` (`Phone`),
  ADD UNIQUE KEY `Email` (`email`),
  ADD KEY `Phone` (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `idcourse` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coursesandstudents`
--
ALTER TABLE `coursesandstudents`
  MODIFY `idInscriptions` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `idstudent` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
