-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 09:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(40) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Hakim Rahimi Safi', 'hakimsafi402@gmail.com', 'admin'),
(3, 'admin', 'admin@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(40) DEFAULT NULL,
  `course_desc` text DEFAULT NULL,
  `course_author` varchar(50) DEFAULT NULL,
  `course_img` text DEFAULT NULL,
  `course_duration` varchar(50) DEFAULT NULL,
  `course_price` int(11) DEFAULT NULL,
  `course_original_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(14, 'Basic JavaScript Training', 'In this course we will cover JavaScript basic knowledge this course is made for student who is know nothing about JavaScript  ', 'Bilal Khan', '../image/Courses/javascript.png', '3 Month', 800, 2000),
(15, 'Basic PHP Training', 'In this course we will implement PHP Advance if you want to join this course first you need PHP basic Skill', 'Ehdan Alam', '../image/Courses/php.png', '3 Month', 1200, 2000),
(16, 'Learn Python ', 'Python is a Powerful Programing Language Which is Used in Web Application, Gaming, Mobile Application.....\r\nWe Will Cover in this ', 'Hakim Rahimi Safi', '../image/Courses/python.png', '3 Month', 1500, 3000),
(17, 'C++ Basic Training', 'C++ is Powerful Programing Language it is Similar to \" C \" Language but it is more Powerful then \"C\" Language and it is Easy then \"C\" Language \r\nWe Will Cover in this Course C++ Basic', 'Ehdan Alam', '../image/Courses/C++.png', '3 Month', 500, 1000),
(18, 'Learn Java Programing Language', 'Java is a Powerful Programing Language Which is to build Desktop Application, Mobile Application, Server Side Application.....\r\nIn this Course we Will Cover Basic Skill of Java Programing', 'Hakim Rahimi Safi', '../image/Courses/java.png', '3 Month', 1000, 2000),
(19, 'HTML 5', 'HTML is a Markup Language and it is very Easy to Learn By HTML we can Create Web Page Easily \r\nIn this Course we will Cover HTML full Knowledge \r\nFrom Zero this course is specially made for intermediated student', 'Zahid Khan', '../image/Courses/HTML5.png', '1 Month', 500, 1000),
(20, 'Windows Server 2016', 'Students will learn how to install and configure many server role and services on server 2016. The skills that student will gain is going to prepare them for Microsoft Server 2016 exam and also help student land a good job as server administrator', 'Zabi Hashimi', '../image/Courses/WIN Server 2016.png', '3 Month', 1350, 2000),
(22, 'ASP.NET', 'ASP.NET is a Microsoft Product Which is used in Server Application \r\nASP.NET is Compatible with SQL SERVER Database and Most Programmers \r\nChose ASP.NET for SQL  ', 'Shabier Mohammadi ', '../image/Courses/ASP.net.png', '3 Month', 1200, 2000),
(23, 'CCNA', 'CCNA course, full form, Cisco Certified Network Associate is an associate-level certification of 1.5 years duration by Cisco that is designed for network engineers and IT professionals.', 'Ehdan Alam', '../image/Courses/CCNA.png', '3 Month', 2000, 3000),
(24, 'CSS', 'Free CSS Courses Cascading Style Sheets (CSS) is the styling language used for HTML documents to make web pages look attractive. Learn to work on HTML documents, and the base script for adding CSS properties', 'Nabiullah Sharefi', '../image/Courses/CSS.png', '2 Month', 1050, 2000),
(25, 'MYSQL', 'This MySQL course helps new and intermediate level database administrators and programmers understand how to set up run, and maintain MySQL. We first discuss very basics of MySQL and why the database is popular over other options. ', 'Irshad Hemat', '../image/Courses/MYSQL.png', '2 Month', 600, 1200),
(26, 'Oracle OCA', 'The OCA, or Oracle Certified SQL Associate, is an entry-level certification for Oracle SQL. It’s offered by Oracle and is targeted at those who have some knowledge of Oracle SQL, but not as advanced as some of Oracle’s other certifications.', 'Waris Stanikzai ', '../image/Courses/Oracle OCA.png', '3 Month', 2000, 3000),
(28, 'Photo Shope ', 'Photoshop Course Outline This course is designed for those students who are interested in Graphic Design or Photography. This Introductory Adobe Photoshop course familiarize students with the editing capabilities of Adobe Photoshop software.', 'Rehan', '../image/Courses/PS.png', '3 Month', 1500, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

CREATE TABLE `courseorder` (
  `co_id` int(11) NOT NULL,
  `order_id` varchar(40) DEFAULT NULL,
  `stu_email` varchar(30) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `respmsg` text DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseorder`
--

INSERT INTO `courseorder` (`co_id`, `order_id`, `stu_email`, `course_id`, `status`, `respmsg`, `amount`, `order_date`) VALUES
(61, 'ACR2578E34', 'ayar@gmail.com', 14, 'TXN-Success', 'TXN-Successful ', 800, '2022-08-10'),
(63, 'EDU2345TECH', 'ayar@gmail.com', 16, 'TXN-Success', 'TXN-Successfully ', 1500, '2022-10-15'),
(64, 'EDU2532TECH', 'ayar@gmail.com', 17, 'TXN-Success', 'TXN-Successfully', 500, '2022-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text DEFAULT NULL,
  `stu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `stu_id`) VALUES
(20, 'There are many benefits In this Website and this article discusses a list of the benefits from a learner or student’s perspective. Online learning or E-Learning is a paradigm shift from traditional classroom learning to an easier and effective technology-driven learning model', 144),
(22, 'One of the biggest benefits of eLearning is the accessibility to content at all times. As a learner, you can refer to learning material and review and reinforce learning at your own pace and time. Lectures or tutorials can be attended as needed, on-demand and with ease.', 155),
(23, 'When compared to traditional forms of learning, eLearning stands out as highly cost-effective. This is primarily because expenses incurred on travel, study material, and accommodation (when the training happens in another city/state) can be curtailed. It is extremely cost ', 146),
(24, 'Taking time off to join a new course or acquiring a new skill set is often both demanding and impractical. Online classes lend credence to the concept and make it possible to study while working. One does not need to quit one’s job to enhance one’s skill sets anymore. You can', 148),
(25, 'As opposed to a conventional classroom, the learner finds themself a lot less anxious in expressing thoughts and views as some people find speaking in public fairly daunting. Since the learning platform is virtual, learners find themselves more at ease to express themselves', 145),
(26, 'Scheduling timelines to match the convenience of group members can come in the way of effectively executing group projects and often ends up defeating the purpose of effective teamwork. Virtual communication literally stepped in as the perfect solution to this.', 153),
(27, 'A convenient pace, a comfortable space, and doing away with the commute sounds like the perfect way to learn, doesn’t it? Online learning does just that and makes learning stress-free. The need to go through all the material at once is also not necessary anymore. Most', 134),
(29, ' \r\n          Students also have the advantage of balancing other activities with their study time. This is possible primarily because of the accessibility and flexibility of online learning. This balance allows the learner to fulfill various other commitments outside of their academic pursuits.  ', 152),
(30, 'Most of us will argue that the interaction with the instructor is not there in E-Learning which is needed quite often. With discussion boards and chat rooms being available along with the study material, this lack of interaction is also taken care of. Participants can now raise questions', 135),
(31, ' \r\n            Assessments in eLearning help judge the effectiveness of the program. Learners can take the test multiple times till they feel they have acquired the knowledge that they set out to gain. There is no frustration or embarrassment for the student who is not able to understand the', 149),
(32, 'Under such circumstances, learners are provided with standalone versions of courses that they can go through offline. Generally, only the assessments are online so that the scores can be captured, and certificates of successful completion can be issued to the participants.', 147),
(33, 'Organizations/institutions are also realizing that the attention span of today’s learners is fairly limited. This has led to E-Learning companies designing short micro learning nuggets and videos that do not take much time to go through and are equally effective', 136);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` varchar(50) DEFAULT NULL,
  `lesson_desc` text DEFAULT NULL,
  `lesson_link` varchar(50) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `course_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(16, 'Introduction to JavaScript ', 'In this video we will get basic information about JavaScript', '../CourseVideos/1.mp4', 14, 'Basic JavaScript Training'),
(17, 'JavaScript Quick References', 'JavaScript Quick References for faster learning  Full stack web development Course', '../CourseVideos/2.mp4', 14, 'Basic JavaScript Training'),
(18, 'JavaScript Comments', 'JavaScript Comments And How to Link Scripts Full stack web development Course', '../CourseVideos/3.mp4', 14, 'Basic JavaScript Training'),
(19, 'JavaScript Variables And Strings', 'JavaScript Variables And Strings Full stack web development Course', '../CourseVideos/4.mp4', 14, 'Basic JavaScript Training'),
(20, 'JavaScript Numbers and Operators', 'JavaScript Numbers and Operators Full stack web development Course', '../CourseVideos/5.mp4', 14, 'Basic JavaScript Training'),
(21, 'installation of XAMPP Server', 'In this lesson we will Know how to install XAMPP Server', '../CourseVideos/12.mp4', 15, 'Basic PHP Training'),
(22, 'Basic Output and Variables', 'In this lesson you will about know Basic Output and Variables', '../CourseVideos/22.mp4', 15, 'Basic PHP Training'),
(23, 'Basic Math Functions', 'In this lesson you will know Basic Math Functions', '../CourseVideos/23.mp4', 15, 'Basic PHP Training'),
(24, 'If Else Statements', 'In this lesson you will know If Else Statements', '../CourseVideos/p4.mp4', 15, 'Basic PHP Training'),
(25, 'if-else-if-else', 'In this lesson you will know if-else-if-else', '../CourseVideos/p5.mp4', 15, 'Basic PHP Training'),
(26, 'Python Primer for Networking Engineer ', 'INE - Practical Python for Network Engineers', '../CourseVideos/INE.ts', 16, 'Learn Python '),
(27, 'Python Version', 'INE - Practical Python for Network Engineers', '../CourseVideos/INE (2).ts', 16, 'Learn Python '),
(28, 'Downloading Python ', 'INE - Practical Python for Network Engineers', '../CourseVideos/INE (3).ts', 16, 'Learn Python '),
(29, 'All Include Installation ', 'INE - Practical Python for Network Engineers', '../CourseVideos/INE (4).ts', 16, 'Learn Python '),
(30, 'Using Python', 'INE - Practical Python for Network Engineers', '../CourseVideos/INE (5).ts', 16, 'Learn Python '),
(31, 'installation of Code Block', 'In this Lesson you Will Know How to Install Code BLock', '../CourseVideos/c++1.mp4', 17, 'C++ Basic Training'),
(32, 'Writing a Simple Program ', 'Int This Lesson You Will Know How to Write a Simple C++ Program', '../CourseVideos/c++2.mp4', 17, 'C++ Basic Training'),
(33, 'Description Of Printing', 'Description Of Printing', '../CourseVideos/c++3.mp4', 17, 'C++ Basic Training'),
(34, 'Variables ', 'In This You Will Know about Variables ', '../CourseVideos/c++4.mp4', 17, 'C++ Basic Training'),
(35, 'ASP.NET', 'Introduction to ASP.NET', '../CourseVideos/ASP1.mp4', 22, 'ASP.NET'),
(36, 'CCNA Introduction ', 'Introduction to CCNA', '../CourseVideos/CCNA.mkv', 23, 'CCNA'),
(37, 'CSS Introduction', 'Introduction to CSS', '../CourseVideos/CSS1.mp4', 24, 'CSS'),
(38, 'MySQL Basic', 'Introduction to MYSQL Database', '../CourseVideos/MYSQL1.mp4', 25, 'MYSQL'),
(39, 'Oracle Certified Associated ', 'Introduction to OCA', '../CourseVideos/OCA 1.mkv', 26, 'Oracle OCA'),
(40, 'Win Server 2016', 'Basic Information about Win Server 2016', '../CourseVideos/Win Server 1.mp4', 20, 'Windows Server 2016');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(50) DEFAULT NULL,
  `stu_email` varchar(30) DEFAULT NULL,
  `stu_pass` varchar(30) DEFAULT NULL,
  `stu_occ` varchar(50) DEFAULT NULL,
  `stu_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(134, 'Ayar Safi', 'ayar@gmail.com', '123', 'Web Developer', '../image/Students/Pic (2).jpg'),
(135, 'Aryan Khan', 'aryan@gmail.com', '123', 'Database Designer', '../image/Students/Pic (5).jpg'),
(136, 'Ayesha Jan', 'ayesha@gmail.com', '123', 'Doctor', '../image/Students/Pic (12).jpg'),
(138, 'Haya Safi', 'haya@gmail.com', '123', 'Self Employee', NULL),
(139, 'Shabier Mohammadi', 'shabier@gmail.com', '123', 'Teacher', NULL),
(140, 'Nasier Khan', 'nasier@gmail.com', '123', 'Student', NULL),
(141, 'Qaseem Khan', 'qaseem@gmail.com', '123', 'Self Employee', NULL),
(142, 'Ehdan Alam', 'ehdan@gmail.com', '123', 'Networking Senior  Engineer ', NULL),
(143, 'Qayoum Mohammadi ', 'qayoum@gmail.com', '123', 'Primary Teacher', NULL),
(144, 'Sami Ayubi', 'sami@gmail.com', '123', 'Student', '../image/Students/istockphoto-1309328823-612x612.jpg'),
(145, 'Zaki Khan', 'zaki@gmail.com', '123', 'Student', '../image/Students/pexels-photo-810775.webp'),
(146, 'Mehnaz Akbari', 'mehnaz@gmail.com', '123', 'Model', '../image/Students/Pic (2).webp'),
(147, 'Sheba Nabizada', 'sheba@gmail.com', '123', 'Nurse', '../image/Students/Pic (8).jpg'),
(148, 'Sara Sahar', 'sara@gmail.com', '123', 'Unemployed', '../image/Students/Pic (3).jpg'),
(149, 'Zahed jan', 'zahed@gmail.com', '123', 'Shopkeeper', '../image/Students/Pic (4).webp'),
(150, 'Waris Khan', 'waris@gmail.com', '123', 'Teacher', NULL),
(151, 'Saleem Safi', 'saleem@gmail.com', '123', 'Unemployed', NULL),
(152, 'Saber Khan', 'saber@gmail.com', '123', 'Athlete ', '../image/Students/Pic (1).webp'),
(153, 'Zoya Khan', 'zoya@gmail.com', '123', 'IT Officer', '../image/Students/Pic (1).jpg'),
(154, 'Ahmad Khan', 'ahmad@gmail.com', '123', 'Network Admin', NULL),
(155, 'Adil Khan', 'adil@gmail.com', '123', 'Database Officer', '../image/Students/Pic (1).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courseorder`
--
ALTER TABLE `courseorder`
  ADD PRIMARY KEY (`co_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`),
  ADD UNIQUE KEY `stu_email` (`stu_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `courseorder`
--
ALTER TABLE `courseorder`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courseorder`
--
ALTER TABLE `courseorder`
  ADD CONSTRAINT `courseorder_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`);

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
