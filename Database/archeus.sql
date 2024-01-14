-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 03:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archeus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_pass`, `role`) VALUES
(1, 'anika', '54321', 'admin'),
(2, 'zyan', '1234', 'admin'),
(3, 'sadman', '1234', 'admin'),
(4, 'azwad', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookmark_post`
--

CREATE TABLE `bookmark_post` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `bookmarked_post_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cv_basic`
--

CREATE TABLE `cv_basic` (
  `cv_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_contact` varchar(255) NOT NULL,
  `st_city` varchar(255) DEFAULT NULL,
  `st_facebook` varchar(255) DEFAULT NULL,
  `st_linkedin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_basic`
--

INSERT INTO `cv_basic` (`cv_id`, `st_username`, `st_name`, `st_email`, `st_contact`, `st_city`, `st_facebook`, `st_linkedin`) VALUES
(1, '011182035', 'Anika Tahsin', 'atahsin182035@bscse.uiu.ac.bd', '015XXXXXXXX', 'Dhaka', 'https://www.facebook.com/anika.tahsin.94', 'http://localhost/archeus/cv.php'),
(5, '011183070', 'Fahad Al Islam', 'fislam@bscse.uiu.ac.bd', '016XXXXXXXX', 'Dhaka', 'https://www.facebook.com/amazzyan', 'https://www.facebook.com/amazzyan'),
(6, '011183013', 'Sadman Sakib', 'ssakib@bscse.uiu.ac.bd', '017xxxxxxxx', 'Dhaka', 'https://www.facebook.com/sakibur.sadman', 'https://www.facebook.com/sakibur.sadman'),
(7, '011183021', 'Azwad Zarif', 'azarif@bscse.uiu.ac.bd', '019xxxxxxxx', 'Dhaka', 'https://www.facebook.com/azwad.khan.58', 'http://localhost/archeus/cv.php'),
(8, '011182035', 'Anika Tahsin', 'atahsin182035@bscse.uiu.ac.bd', '015XXXXXXXX', 'Dhaka', 'https://www.facebook.com/anika.tahsin.94', 'http://localhost/archeus/cv.php');

-- --------------------------------------------------------

--
-- Table structure for table `cv_eca`
--

CREATE TABLE `cv_eca` (
  `eca_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `eca_name` varchar(255) DEFAULT NULL,
  `eca_desc` varchar(255) DEFAULT NULL,
  `eca_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_eca`
--

INSERT INTO `cv_eca` (`eca_id`, `st_username`, `eca_name`, `eca_desc`, `eca_link`) VALUES
(1, '011182035', 'Sketch', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.', 'https://github.com/anikatahsin3?tab=projects'),
(5, '011183070', '', '', ''),
(6, '011183013', '', '', ''),
(7, '011183021', '', '', ''),
(8, '011182035', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cv_edu`
--

CREATE TABLE `cv_edu` (
  `edu_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `edu_school` varchar(255) DEFAULT NULL,
  `edu_school_start` varchar(255) DEFAULT NULL,
  `edu_school_end` varchar(255) DEFAULT NULL,
  `edu_college` varchar(255) DEFAULT NULL,
  `edu_college_start` varchar(255) DEFAULT NULL,
  `edu_college_end` varchar(255) DEFAULT NULL,
  `edu_uni` varchar(255) DEFAULT NULL,
  `edu_uni_start` varchar(255) DEFAULT NULL,
  `edu_uni_end` varchar(255) DEFAULT NULL,
  `edu_uni_dept` varchar(255) DEFAULT NULL,
  `edu_uni_major` varchar(255) DEFAULT NULL,
  `edu_uni_cgpa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_edu`
--

INSERT INTO `cv_edu` (`edu_id`, `st_username`, `edu_school`, `edu_school_start`, `edu_school_end`, `edu_college`, `edu_college_start`, `edu_college_end`, `edu_uni`, `edu_uni_start`, `edu_uni_end`, `edu_uni_dept`, `edu_uni_major`, `edu_uni_cgpa`) VALUES
(1, '011182035', 'ISC', '2006', '2015', 'ISC', '2015', '2017', 'UIU', '2018', '2023', 'CSE', 'ML', '3.91'),
(5, '011183070', 'x', '2006', '2016', 'y', '2016', '2018', 'UIU', '2018', '2023', 'CSE', 'ML', '3.76'),
(6, '011183013', 'x', '2005', '2015', 'y', '2015', '2017', 'UIU', '2018', '2023', 'CSE', 'ML', 'x.xx'),
(7, '011183021', 'x', '2006', '2016', 'y', '2016', '2018', 'UIU', '2018', '2023', 'CSE', 'ML', 'x.xx'),
(8, '011182035', 'ISC', '2006', '2015', 'ISC', '2015', '2017', 'UIU', '2018', '2023', 'CSE', 'ML', '3.91');

-- --------------------------------------------------------

--
-- Table structure for table `cv_project`
--

CREATE TABLE `cv_project` (
  `project_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_project`
--

INSERT INTO `cv_project` (`project_id`, `st_username`, `project_name`, `project_desc`) VALUES
(1, '011182035', 'name1', '“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. '),
(2, '011183070', 'name2', 'Nunc posuere purus rhoncus pulvinar aliquam.'),
(3, '011183013', 'name3', 'Ut aliquet tristique nisl vitae volutpat. Nulla aliquet porttitor venenatis.'),
(4, '011183021', 'name4', 'Donec a dui et dui fringilla consectetur id nec massa. Aliquam erat volutpat.'),
(5, '011182035', 'name5', 'Sed ut dui ut lacus dictum fermentum vel tincidunt neque. Sed sed lacinia lectus.');

-- --------------------------------------------------------

--
-- Table structure for table `cv_publication`
--

CREATE TABLE `cv_publication` (
  `pub_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `pub_title` varchar(255) NOT NULL,
  `pub_year_published` date NOT NULL,
  `pub_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_publication`
--

INSERT INTO `cv_publication` (`pub_id`, `st_username`, `pub_title`, `pub_year_published`, `pub_link`) VALUES
(1, '011182035', '*Publication Title1*', '0000-00-00', 'https://github.com/anikatahsin3?tab=projects'),
(2, '011183070', '*Publication Title2*', '0000-00-00', ''),
(3, '011183013', '*Publication Title3*', '0000-00-00', ''),
(4, '011183021', '*Publication Title4*', '0000-00-00', ''),
(5, '011182035', '*Publication Title5*', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `cv_soft_skill`
--

CREATE TABLE `cv_soft_skill` (
  `soft_skill_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `soft_skill_name` varchar(255) NOT NULL,
  `soft_skill_verification` int(11) NOT NULL DEFAULT 0,
  `soft_skill_toggle` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_soft_skill`
--

INSERT INTO `cv_soft_skill` (`soft_skill_id`, `st_username`, `soft_skill_name`, `soft_skill_verification`, `soft_skill_toggle`) VALUES
(2, '011183013', 'laravel', 1, 1),
(6, '011182035', 'php', 1, 1),
(7, '011182035', 'laravel', 1, 1),
(8, '011183070', 'html', 1, 0),
(9, '011183070', 'css', 1, 0),
(10, '011183013', 'django', 0, 0),
(11, '011183021', 'php', 0, 0),
(12, '011182035', 'JS', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cv_tech_skill`
--

CREATE TABLE `cv_tech_skill` (
  `tech_skill_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `tech_skill_name` varchar(255) DEFAULT NULL,
  `tech_skill_desc` varchar(255) DEFAULT NULL,
  `tech_skill_related_project` varchar(255) DEFAULT NULL,
  `tech_skill_verification` int(11) NOT NULL DEFAULT 0,
  `tech_skill_toggle` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_tech_skill`
--

INSERT INTO `cv_tech_skill` (`tech_skill_id`, `st_username`, `tech_skill_name`, `tech_skill_desc`, `tech_skill_related_project`, `tech_skill_verification`, `tech_skill_toggle`) VALUES
(1, '011182035', 'C++', 'Has Experience on C++', '', 1, 1),
(5, '011183070', 'C#', 'Has Experience on C#', '', 1, 0),
(6, '011182035', 'VS Code', 'Has experience on VS Code', '', 1, 1),
(7, '011183070', 'Figma', 'Has experience on Figma', NULL, 1, 0),
(8, '011183013', 'Technical writing', '', '', 1, 0),
(9, '011183021', 'Swift', 'Has Experience on Swift', '', 1, 0),
(11, '011182035', 'C#', 'Has Experience on C# ', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drop_cv`
--

CREATE TABLE `drop_cv` (
  `id` int(11) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drop_cv`
--

INSERT INTO `drop_cv` (`id`, `post_id`, `st_username`, `st_name`) VALUES
(4, '6327f01e2370a', '011183070', 'Fahad Al Islam'),
(5, '63203729a157d', '011183070', 'Fahad Al Islam'),
(6, '6316f86897eeb', '011183070', 'Fahad Al Islam'),
(7, '6316ef9b4055f', '011183070', 'Fahad Al Islam'),
(10, '63203729a157d', '011182035', 'Anika Tahsin'),
(11, '6316f86897eeb', '011182035', 'Anika Tahsin'),
(12, '6316f0e9be51b', '011182035', 'Anika Tahsin'),
(15, '6316f0e9be51b', '011183070', 'Fahad Al Islam'),
(20, '6327f01e2370a', '011182035', 'Anika Tahsin');

-- --------------------------------------------------------

--
-- Table structure for table `post_student`
--

CREATE TABLE `post_student` (
  `stpost_id` varchar(255) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `stpost_title` varchar(255) DEFAULT NULL,
  `stpost_desc` varchar(255) DEFAULT NULL,
  `stpost_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_student`
--

INSERT INTO `post_student` (`stpost_id`, `st_username`, `st_name`, `stpost_title`, `stpost_desc`, `stpost_datetime`) VALUES
('1', '011182035', 'Anika', 'Need one member for fydp', 'All the requirements here...', '2022-09-11 00:33:21'),
('6327e2467650c', '011182035', 'Anika Tahsin', 'new post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.', '2022-09-19 09:30:14'),
('6327e2553647a', '011182035', 'Anika Tahsin', 'new post 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.', '2022-09-19 09:30:29'),
('6327e2f893104', '011183070', 'Fahad Al Islam', 'new post 3', 'Ut aliquet tristique nisl vitae volutpat. Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa. Aliquam erat volutpat. ', '2022-09-19 09:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `post_teacher`
--

CREATE TABLE `post_teacher` (
  `tpost_id` varchar(255) NOT NULL,
  `t_username` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `tpost_title` varchar(255) DEFAULT NULL,
  `tpost_desc` longtext DEFAULT NULL,
  `tpost_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_teacher`
--

INSERT INTO `post_teacher` (`tpost_id`, `t_username`, `t_name`, `tpost_title`, `tpost_desc`, `tpost_datetime`) VALUES
('1', 'AT', 'Anika Tahsin', 'Internship at BAT', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', '2022-09-05 22:00:14'),
('3', 'b', 'An', 'Job Vacancy at Grameen Phone', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupt', '2022-09-05 22:05:14'),
('4', 'X', 'Mr X', 'Fellowship at Google', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollit', '2022-09-05 22:07:14'),
('6', 'AT', 'Anika Tahsin', 'Need an Intern', '“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat. Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa. Aliquam erat volutpat. Sed ut dui ut lacus dictum fermentum vel tincidunt neque. Sed sed lacinia lectus. Duis sit amet sodales felis. Duis nunc eros, mattis at dui ac, convallis semper risus. In adipiscing ultrices tellus, in suscipit massa vehicula eu.”', '2022-09-05 22:10:44'),
('6316ef9b4055f', 'AT', 'Anika Tahsin', 'Opportunity for Higher Studies', '“What I find remarkable is that this text has been the industry\'s standard dummy text ever since some printer in the 1500s took a galley of type and scrambled it to make a type specimen book; it has survived not only four centuries of letter-by-letter resetting but even the leap into electronic typesetting, essentially unchanged except for an occasional \'ing\' or \'y\' thrown in.', '2022-09-06 01:25:35'),
('6316f02a6bdba', 'AH', 'Abir Hasan', 'Job vacancy at United', '“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat. Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa. Aliquam erat volutpat. Sed ut dui ut lacus dictum fermentum vel tincidunt neque.”', '2022-09-06 01:00:58'),
('6316f0e9be51b', 'AH', 'Abir Hasan', 'Need BackEnd Developer at Beximco', 'Rrow itself, let it be sorrow; let him love it; let him pursue it, ishing for its acquisitiendum. Because he will ab hold, uniess but through concer, and also of those who resist. Now a pure snore disturbeded sum dust. He ejjnoyes, in order that somewon, also with a severe one, unless of life. May a cusstums offficer somewon nothing of a poison-filled. Until, from a twho, twho chaffinch may also pursue it, not even a lump. But as twho, as a tank; a proverb, yeast; or else they tinscribe nor. Yet yet dewlap bed.”', '2022-09-06 01:04:09'),
('6316f86897eeb', 'AH', 'Abir Hasan', 'Need RA', 'It\'s difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples.', '2022-09-06 01:36:08'),
('63203729a157d', 'AT', 'Anika Tahsin', 'Need Intern', 'So far he hasn\'t relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.', '2022-09-13 01:54:17'),
('6327f01e2370a', 'AH', 'Abir Hasan', 'Opportunity to work at Unilever', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat. Nulla aliquet porttitor venenatis.', '2022-09-19 10:29:18'),
('632c9bab9242a', 'AH', 'Abir Hasan', 'new post', 'this is new post', '2022-09-22 11:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_pass` varchar(255) NOT NULL,
  `st_dept` varchar(255) NOT NULL,
  `st_contact` varchar(255) DEFAULT NULL,
  `st_dob` date NOT NULL,
  `st_gender` varchar(255) NOT NULL,
  `profile_picture` blob DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `st_point` int(11) DEFAULT 0,
  `st_github` varchar(255) DEFAULT NULL,
  `verification_code` text NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `st_year` varchar(255) NOT NULL DEFAULT '1st'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_username`, `st_name`, `st_email`, `st_pass`, `st_dept`, `st_contact`, `st_dob`, `st_gender`, `profile_picture`, `role`, `status`, `st_point`, `st_github`, `verification_code`, `email_verified_at`, `st_year`) VALUES
(3, '011182035', 'Anika Tahsin', 'atahsin182035@bscse.uiu.ac.bd', '1234', 'CSE', '015xxxxxxxx', '1996-10-26', 'Female', NULL, 'student', 1, 0, 'https://github.com/anikatahsin3', '154642', '2022-09-19 06:31:32', '4th'),
(4, '011183070', 'Fahad Al Islam', 'fislam183070@bscse.uiu.ac.bd', '1234', 'CSE', '016xxxxxxxx', '2022-08-22', 'Male', NULL, 'student', 1, 0, 'https://github.com/zyanislam', '154641', '2022-09-19 07:21:54', '4th'),
(19, '011183013', 'Sadman Sakib', 'ssakib@bscse.uiu.ac.bd', '1234', 'CSE', '017xxxxxxxx', '2022-08-25', 'Male', NULL, 'student', 1, 0, 'https://github.com/sakib-sadman', '154640', '2022-09-19 09:22:05', '4th'),
(24, '011182033', 'kamado tanjiro', 'tan@bscse.uiu.ac.bd', '1234', 'CSE', '018xxxxxxxx', '2022-08-30', 'Male', NULL, 'student', 0, 0, 'https://github.com/tanjiro280', '154639', '2022-09-19 09:22:11', '2nd'),
(26, '011183021', 'Azwad Zarif', 'azarif@bscse.uiu.ac.bd', '1234', 'CSE', '019xxxxxxxx', '2022-09-06', 'Male', NULL, 'student', 1, 0, 'https://github.com/Shredder280998', '154638', '2022-09-19 07:22:15', '4th'),
(28, '011182000', 'Fahim Islam', 'fahim@bseee.uiu.ac.bd', '1234', 'EEE', '017xxxxxxxx', '2022-09-06', 'male', NULL, 'student', 1, 0, 'https://github.com/a', '154637', '2022-09-19 07:22:18', '1st'),
(31, '011183040', 'Abdullah Masud', 'aa@bscse.uiu.ac.bd', '1234', 'CSE', '017xxxxxxxx', '2022-09-13', 'Male', NULL, 'student', 1, 0, 'https://github.com/masud', '154636', '2022-09-19 10:22:21', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `stlog_id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `stlog_login_date_time` datetime DEFAULT NULL,
  `stlog_logout_date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_log`
--

INSERT INTO `student_log` (`stlog_id`, `st_username`, `st_name`, `stlog_login_date_time`, `stlog_logout_date_time`) VALUES
(6, '011182033', 'kamado tanjiro', '2022-08-30 01:33:30', '2022-08-30 01:35:55'),
(7, '011182035', 'Anika Tahsin', '2022-09-22 11:33:40', '0000-00-00 00:00:00'),
(8, '011183070', 'Fahad Islam', '2022-09-22 07:34:29', '2022-09-22 08:18:45'),
(43, '011183040', 'Abdullah Masud', NULL, NULL),
(44, '011183013', 'Sadman Sakib', '2022-09-13 07:54:16', '2022-09-13 07:54:16'),
(45, '011183021', 'Azwad Zarif', '2022-09-22 05:50:48', '0000-00-00 00:00:00'),
(46, '011182000', 'Fahim Islam', '2022-09-13 07:55:45', '2022-09-13 07:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `tags_student`
--

CREATE TABLE `tags_student` (
  `id` int(11) NOT NULL,
  `post_student_id` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `tag_st_dept` varchar(255) NOT NULL,
  `tag_st_email` varchar(255) NOT NULL,
  `tag_st_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags_student`
--

INSERT INTO `tags_student` (`id`, `post_student_id`, `st_name`, `tag_name`, `tag_st_dept`, `tag_st_email`, `tag_st_contact`) VALUES
(4, '011182035', 'Anika Tahsin', 'php', 'CSE', 'atahsin182035@bscse.uiu.ac.bd', '015xxxxxxxx'),
(5, '011182035', 'Anika Tahsin', 'laravel', 'CSE', 'atahsin182035@bscse.uiu.ac.bd', '015xxxxxxxx'),
(6, '011183070', 'Fahad Al Islam', 'php', 'CSE', 'fislam@bscse.uiu.ac.bd', '016xxxxxxxx'),
(7, '011183070', 'Fahad Al Islam', 'css', 'CSE', 'fislam@bscse.uiu.ac.bd', '016xxxxxxxx'),
(9, '011183013', 'Sadman Sakib', 'laravel', 'EEE', 'x@bseee.uiu.ac.bd', '017xxxxxxxx'),
(10, '011183013', 'Sadman Sakib', 'django', 'CSE', 'ssakib@bscse.uiu.ac.bd', '017xxxxxxxx'),
(11, '011183021', 'Azwad Zarif', 'php', 'CSE', 'azarif@bscse.uiu.ac.bd', '019xxxxxxxx'),
(12, '011182033', 'kamado tanjiro', 'python', 'CSE', 'tan@bscse.uiu.ac.bd', '018xxxxxxxx'),
(13, '011182033', 'kamado tanjiro', 'laravel', 'CSE', 'tan@bscse.uiu.ac.bd', '018xxxxxxxx'),
(14, '011182000', 'Fahim Islam', 'php', 'EEE', 'a@bseee.uiu.ac.bd', '017xxxxxxxx'),
(15, '011182000', 'Fahim Islam', 'django', 'EEE', 'a@bseee.uiu.ac.bd', '017xxxxxxxx'),
(16, '011183040', 'Abdullah Masud', 'Node JS', 'CSE', 'aa@bscse.uiu.ac.bd', '017xxxxxxxx'),
(17, '011183040', 'Abdullah Masud', 'JavaScript', 'CSE', 'aa@bscse.uiu.ac.bd', '017xxxxxxxx'),
(18, '011182035', 'Anika Tahsin', 'C++', 'CSE', 'atahsin182035@bscse.uiu.ac.bd', '015xxxxxxxx'),
(19, '011182035', 'Anika Tahsin', 'C#', 'CSE', 'atahsin182035@bscse.uiu.ac.bd', '015xxxxxxxx'),
(21, '011182035', 'Anika Tahsin', 'JS', 'CSE', 'atahsin182035@bscse.uiu.ac.bd', '015xxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `tags_teacher`
--

CREATE TABLE `tags_teacher` (
  `id` int(11) NOT NULL,
  `post_teacher_id` varchar(255) NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags_teacher`
--

INSERT INTO `tags_teacher` (`id`, `post_teacher_id`, `tag_name`, `created_at`) VALUES
(1, '6316ef9b4055f', 'laravel', '2022-09-06 12:58:35'),
(3, '6316f02a6bdba', 'reactnative', '2022-09-06 01:00:58'),
(4, '6316f02a6bdba', ' jquery', '2022-09-06 01:00:58'),
(5, '6316f02a6bdba', ' express JS', '2022-09-06 01:00:58'),
(6, '6316f0e9be51b', 'php', '2022-09-06 01:04:09'),
(7, '6316f86897eeb', 'laravel', '2022-09-06 01:36:08'),
(8, '6316f86897eeb', 'php', '2022-09-06 01:36:08'),
(12, '63203729a157d', 'HTML', '2022-09-13 01:54:17'),
(13, '6327f01e2370a', 'c', '2022-09-19 10:29:18'),
(14, '6327f01e2370a', 'nodeJS', '2022-09-19 10:29:18'),
(15, '6327f01e2370a', 'excel', '2022-09-19 10:29:18'),
(25, '632c9bab9242a', 'reactJS', '2022-09-22 11:30:19'),
(26, '632c9bab9242a', 'Ajax', '2022-09-22 11:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_username` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_pass` varchar(255) NOT NULL,
  `t_dept` varchar(255) NOT NULL,
  `t_des` varchar(255) NOT NULL,
  `t_room` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `t_joined_date` datetime NOT NULL DEFAULT current_timestamp(),
  `t_contact` varchar(255) DEFAULT NULL,
  `t_gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_username`, `t_name`, `t_email`, `t_pass`, `t_dept`, `t_des`, `t_room`, `role`, `t_joined_date`, `t_contact`, `t_gender`) VALUES
(2, 'AT', 'Anika Tahsin', 'at@uiu.ac.bd', 'anika', 'CSE', 'Professor', '638/A', 'teacher', '2022-09-13 01:52:26', '015xxxxxxxx', 'female'),
(10, 'AH', 'Abir Hasan', 'abir@uiu.ac.bd', 'abir', 'CSE', 'lecturer', '636/b', 'teacher', '2022-09-13 01:52:26', '', 'Male'),
(11, 'KSM', 'Kazi Sajeed Mehrab', 'ksm@uiu.ac.bd', '1234', 'CSE', 'Lecturer', '418', 'teacher', '2022-09-13 01:52:26', NULL, 'Male'),
(12, 'SS', 'Shakkhar Shatabda', 'ss@uiu.ac.bd', '1234', 'CSE', 'Associate Professor', '428', 'teacher', '2022-09-13 01:58:19', NULL, 'Male'),
(13, 'AS', 'Adiba Shaira', 'as@uiu.ac.bd', '1234', 'CSE', 'Lecturer', '419', 'teacher', '2022-09-19 05:59:36', NULL, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_log`
--

CREATE TABLE `teacher_log` (
  `tlog_id` int(11) NOT NULL,
  `t_username` varchar(255) NOT NULL,
  `tlog_name` varchar(255) NOT NULL,
  `tlog_login_date_time` datetime DEFAULT NULL,
  `tlog_logout_date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_log`
--

INSERT INTO `teacher_log` (`tlog_id`, `t_username`, `tlog_name`, `tlog_login_date_time`, `tlog_logout_date_time`) VALUES
(3, 'AH', 'Abir Hasan', '2022-09-22 11:29:38', '0000-00-00 00:00:00'),
(4, 'KSM', 'Kazi Sajeed Mehrab', NULL, NULL),
(5, 'SS', 'Shakkhar Shatabda', NULL, NULL),
(7, 'AT', 'Anika Tahsin', '2022-09-22 05:40:57', '2022-09-22 07:28:33'),
(8, 'AS', 'Adiba Shaira', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verification_request`
--

CREATE TABLE `verification_request` (
  `id` int(11) NOT NULL,
  `st_username` varchar(255) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `t_username` varchar(255) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `trimester` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verification_request`
--

INSERT INTO `verification_request` (`id`, `st_username`, `st_name`, `t_username`, `skill_name`, `trimester`, `verified`) VALUES
(1, '011182035', 'Anika Tahsin', 'Abir Hasan', 'C  ', ' 4th', 0),
(2, '011183070', 'Fahad Al Islam', 'Anika Tahsin', 'C', ' 4th', 0),
(4, '011183021', 'Azwad Zarif', 'Anika Tahsin', 'Swift', ' 10', 0),
(7, '011182035', 'Anika Tahsin', 'Abir Hasan', 'VS Code', ' 12th', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`),
  ADD UNIQUE KEY `ad_username` (`ad_username`);

--
-- Indexes for table `bookmark_post`
--
ALTER TABLE `bookmark_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_basic`
--
ALTER TABLE `cv_basic`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `fk1` (`st_username`) USING BTREE;

--
-- Indexes for table `cv_eca`
--
ALTER TABLE `cv_eca`
  ADD PRIMARY KEY (`eca_id`),
  ADD KEY `fk3` (`st_username`);

--
-- Indexes for table `cv_edu`
--
ALTER TABLE `cv_edu`
  ADD PRIMARY KEY (`edu_id`),
  ADD KEY `fk2` (`st_username`);

--
-- Indexes for table `cv_project`
--
ALTER TABLE `cv_project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `fk6` (`st_username`);

--
-- Indexes for table `cv_publication`
--
ALTER TABLE `cv_publication`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `fk8` (`st_username`);

--
-- Indexes for table `cv_soft_skill`
--
ALTER TABLE `cv_soft_skill`
  ADD PRIMARY KEY (`soft_skill_id`),
  ADD KEY `fk7` (`st_username`);

--
-- Indexes for table `cv_tech_skill`
--
ALTER TABLE `cv_tech_skill`
  ADD PRIMARY KEY (`tech_skill_id`),
  ADD KEY `fk4` (`st_username`);

--
-- Indexes for table `drop_cv`
--
ALTER TABLE `drop_cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_student`
--
ALTER TABLE `post_student`
  ADD PRIMARY KEY (`stpost_id`),
  ADD KEY `fk9` (`st_username`);

--
-- Indexes for table `post_teacher`
--
ALTER TABLE `post_teacher`
  ADD PRIMARY KEY (`tpost_id`),
  ADD KEY `fk10` (`t_username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `st_username` (`st_username`),
  ADD UNIQUE KEY `st_email` (`st_email`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
  ADD PRIMARY KEY (`stlog_id`),
  ADD KEY `fk1` (`st_username`);

--
-- Indexes for table `tags_student`
--
ALTER TABLE `tags_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk14` (`post_student_id`);

--
-- Indexes for table `tags_teacher`
--
ALTER TABLE `tags_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk12` (`post_teacher_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_username` (`t_username`);

--
-- Indexes for table `teacher_log`
--
ALTER TABLE `teacher_log`
  ADD PRIMARY KEY (`tlog_id`),
  ADD KEY `fk5` (`t_username`);

--
-- Indexes for table `verification_request`
--
ALTER TABLE `verification_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookmark_post`
--
ALTER TABLE `bookmark_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cv_basic`
--
ALTER TABLE `cv_basic`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cv_eca`
--
ALTER TABLE `cv_eca`
  MODIFY `eca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cv_edu`
--
ALTER TABLE `cv_edu`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cv_project`
--
ALTER TABLE `cv_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv_publication`
--
ALTER TABLE `cv_publication`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv_soft_skill`
--
ALTER TABLE `cv_soft_skill`
  MODIFY `soft_skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cv_tech_skill`
--
ALTER TABLE `cv_tech_skill`
  MODIFY `tech_skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `drop_cv`
--
ALTER TABLE `drop_cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `stlog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tags_student`
--
ALTER TABLE `tags_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tags_teacher`
--
ALTER TABLE `tags_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher_log`
--
ALTER TABLE `teacher_log`
  MODIFY `tlog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `verification_request`
--
ALTER TABLE `verification_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cv_basic`
--
ALTER TABLE `cv_basic`
  ADD CONSTRAINT `ct1` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_eca`
--
ALTER TABLE `cv_eca`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_edu`
--
ALTER TABLE `cv_edu`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_project`
--
ALTER TABLE `cv_project`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_publication`
--
ALTER TABLE `cv_publication`
  ADD CONSTRAINT `fk8` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_soft_skill`
--
ALTER TABLE `cv_soft_skill`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `cv_tech_skill`
--
ALTER TABLE `cv_tech_skill`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `post_student`
--
ALTER TABLE `post_student`
  ADD CONSTRAINT `fk9` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `student_log`
--
ALTER TABLE `student_log`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`st_username`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `tags_student`
--
ALTER TABLE `tags_student`
  ADD CONSTRAINT `fk14` FOREIGN KEY (`post_student_id`) REFERENCES `student` (`st_username`);

--
-- Constraints for table `tags_teacher`
--
ALTER TABLE `tags_teacher`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`post_teacher_id`) REFERENCES `post_teacher` (`tpost_id`);

--
-- Constraints for table `teacher_log`
--
ALTER TABLE `teacher_log`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`t_username`) REFERENCES `teacher` (`t_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
