-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2019 at 07:01 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu1903`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs_banner`
--

CREATE TABLE `cs_banner` (
  `ban_id` int(50) NOT NULL,
  `ban_title` varchar(150) NOT NULL,
  `ban_subtitle` text NOT NULL,
  `ban_btn` varchar(50) NOT NULL,
  `ban_url` text NOT NULL,
  `ban_photo` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_banner`
--

INSERT INTO `cs_banner` (`ban_id`, `ban_title`, `ban_subtitle`, `ban_btn`, `ban_url`, `ban_photo`, `user_id`, `created_at`) VALUES
(1, '<span>Admition Going On</span><br>Eduara University', 'Sorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua enim ad minime.', 'Admit Now', '#', 'banner_1564131639_708385842.jpg', 2, '2019-07-26 09:00:39'),
(2, '<span>Admition Going On</span><br>Eduara University', 'Sorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua enim ad minime.', 'Read More', '#', 'banner_1564131658_254541875.jpg', 2, '2019-07-26 09:00:58'),
(3, '<span>Admition Going On</span><br>Eduara University', 'Sorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua enim ad minime.', 'Register Now', '#', 'banner_1564131700_245465653.jpg', 2, '2019-07-26 09:01:40'),
(4, '<span>Admition Going On</span><br>Eduara University', 'Sorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua enim ad minime.', 'GET IT', '#', 'banner_1564131718_273265627.jpg', 2, '2019-07-26 09:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `cs_contact`
--

CREATE TABLE `cs_contact` (
  `conus_id` int(50) NOT NULL,
  `conus_name` varchar(50) NOT NULL,
  `conus_email` varchar(50) NOT NULL,
  `conus_phone` varchar(20) NOT NULL,
  `conus_sub` varchar(200) NOT NULL,
  `conus_mess` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_contact`
--

INSERT INTO `cs_contact` (`conus_id`, `conus_name`, `conus_email`, `conus_phone`, `conus_sub`, `conus_mess`) VALUES
(1, 'Rashed', 'email@email.email', '017863145', 'Hello from test', 'Some from your cache'),
(2, 'Md. Rasheduzzaman Ra', 'mrzrashed01@gmail.com', '1761265800', 'llll', 'Lorem ipsum dolor sit amet, consecte adipisicing elit sed do eiusmod tempor incididunt.');

-- --------------------------------------------------------

--
-- Table structure for table `cs_course`
--

CREATE TABLE `cs_course` (
  `course_id` int(150) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_subtitle` text NOT NULL,
  `course_category` varchar(200) NOT NULL,
  `course_link` text NOT NULL,
  `course_photo` varchar(100) NOT NULL,
  `course_thumb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_course`
--

INSERT INTO `cs_course` (`course_id`, `course_title`, `course_subtitle`, `course_category`, `course_link`, `course_photo`, `course_thumb`) VALUES
(1, 'Business Studies', 'Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.', 'CSE', '#', 'course_1564518459_108105631.jpg', 'thumb_1564518459_470325872.png'),
(2, 'Software Engineering ', 'Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.', 'SWE', '#', 'course_1564518497_193428757.jpg', 'thumb_1564518497_836176543.png'),
(3, 'Business Studies', 'Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.', 'CSE', '#', 'course_1564518533_130129677.jpg', 'thumb_1564518533_197506457.png'),
(4, 'Software Engineering ', 'Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.', 'SWE', '#', 'course_1564518557_627419303.jpg', 'thumb_1564518557_169120814.png');

-- --------------------------------------------------------

--
-- Table structure for table `cs_feature`
--

CREATE TABLE `cs_feature` (
  `feature_id` int(11) NOT NULL,
  `feature_title` varchar(50) NOT NULL,
  `feature_details` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_feature`
--

INSERT INTO `cs_feature` (`feature_id`, `feature_title`, `feature_details`, `created_at`) VALUES
(1, 'title', 'hlloon x', '2019-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `cs_footer_quick_link`
--

CREATE TABLE `cs_footer_quick_link` (
  `quick_link_id` int(11) NOT NULL,
  `quick_link_title` varchar(100) NOT NULL,
  `quick_link_url` varchar(200) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_footer_quick_link`
--

INSERT INTO `cs_footer_quick_link` (`quick_link_id`, `quick_link_title`, `quick_link_url`, `created_at`) VALUES
(1, 'About Us', '../about.php', '2019-07-31 02:47:58'),
(2, 'About Us', '../about.php', '2019-07-31 02:58:51'),
(3, 'About Us', '../about.php', '2019-07-31 02:58:55'),
(4, 'Success', '#', '2019-07-31 02:59:07'),
(5, 'Phone', '#', '2019-07-31 02:59:16'),
(6, 'Contact', '#', '2019-07-31 02:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `cs_role`
--

CREATE TABLE `cs_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_role`
--

INSERT INTO `cs_role` (`role_id`, `role_name`) VALUES
(2, 'Admin'),
(3, 'Author'),
(10, 'Editor'),
(11, 'Subscriber'),
(1, 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `cs_top_header_footer`
--

CREATE TABLE `cs_top_header_footer` (
  `id` int(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fb_url` varchar(200) NOT NULL,
  `twitter_url` varchar(200) NOT NULL,
  `dribbble_url` varchar(200) NOT NULL,
  `google_url` varchar(200) NOT NULL,
  `pinterest` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `open_day` varchar(50) NOT NULL,
  `open_time` varchar(20) NOT NULL,
  `close_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_top_header_footer`
--

INSERT INTO `cs_top_header_footer` (`id`, `phone`, `email`, `fb_url`, `twitter_url`, `dribbble_url`, `google_url`, `pinterest`, `address`, `open_day`, `open_time`, `close_time`) VALUES
(1, '01761 265800', 'rashed35-1305@diu.edu.bd', 'facebook.com', 'twitter.com', 'dribbble.com', 'google.com', 'pinterest.com', 'Level-7;T/10;Nurjahan Road; Mohammadpur;', 'Mon - Sun', '10:00', '16:00');

-- --------------------------------------------------------

--
-- Table structure for table `cs_user`
--

CREATE TABLE `cs_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_photo` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_user`
--

INSERT INTO `cs_user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`, `user_photo`, `role_id`) VALUES
(2, 'Super Admin', '017000000', 'superadmin@admin.con', 'superadmin', 'c4ca4238a0b923820dcc509a6f75849b', 'user_1563861000_752680832.jpg', 1),
(4, 'Author', '01854789654', 'author@admin.com', 'author', 'c4ca4238a0b923820dcc509a6f75849b', '', 3),
(5, 'MD. RASHEDUZZAMAN RASHED', '01761 265800', 'rashed35-1305@diu.edu.bd', 'mrzrashed', 'c4ca4238a0b923820dcc509a6f75849b', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cs_welcome`
--

CREATE TABLE `cs_welcome` (
  `welcme_id` int(50) NOT NULL,
  `welcome_title` varchar(200) NOT NULL,
  `welcome_details` text NOT NULL,
  `welcome_btn` varchar(150) NOT NULL,
  `welcome_url` varchar(200) NOT NULL,
  `welcome_photo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_welcome`
--

INSERT INTO `cs_welcome` (`welcme_id`, `welcome_title`, `welcome_details`, `welcome_btn`, `welcome_url`, `welcome_photo`, `created_at`) VALUES
(1, 'Welcome To Our Sikkha', 'Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temin cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure repreh nderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occcu idatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nHorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temin cididunt ut labore et dolore magna aliqua Ut enim ad minim veniam,quis nostrude', 'Admit Now', '#', 'welcome_1564165298_190887893.jpg', '2019-07-26 18:21:38'),
(4, 'Welcome To Our Sikkha', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Admit Now', '#', 'welcome_1564167585_622787187.jpg', '2019-07-26 18:59:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs_banner`
--
ALTER TABLE `cs_banner`
  ADD PRIMARY KEY (`ban_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cs_contact`
--
ALTER TABLE `cs_contact`
  ADD PRIMARY KEY (`conus_id`);

--
-- Indexes for table `cs_course`
--
ALTER TABLE `cs_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `cs_feature`
--
ALTER TABLE `cs_feature`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `cs_footer_quick_link`
--
ALTER TABLE `cs_footer_quick_link`
  ADD PRIMARY KEY (`quick_link_id`);

--
-- Indexes for table `cs_role`
--
ALTER TABLE `cs_role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `cs_top_header_footer`
--
ALTER TABLE `cs_top_header_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs_user`
--
ALTER TABLE `cs_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `cs_welcome`
--
ALTER TABLE `cs_welcome`
  ADD PRIMARY KEY (`welcme_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs_banner`
--
ALTER TABLE `cs_banner`
  MODIFY `ban_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cs_contact`
--
ALTER TABLE `cs_contact`
  MODIFY `conus_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cs_course`
--
ALTER TABLE `cs_course`
  MODIFY `course_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cs_feature`
--
ALTER TABLE `cs_feature`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cs_footer_quick_link`
--
ALTER TABLE `cs_footer_quick_link`
  MODIFY `quick_link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cs_role`
--
ALTER TABLE `cs_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cs_top_header_footer`
--
ALTER TABLE `cs_top_header_footer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cs_user`
--
ALTER TABLE `cs_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cs_welcome`
--
ALTER TABLE `cs_welcome`
  MODIFY `welcme_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cs_banner`
--
ALTER TABLE `cs_banner`
  ADD CONSTRAINT `cs_banner_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `cs_user` (`user_id`);

--
-- Constraints for table `cs_user`
--
ALTER TABLE `cs_user`
  ADD CONSTRAINT `cs_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `cs_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
