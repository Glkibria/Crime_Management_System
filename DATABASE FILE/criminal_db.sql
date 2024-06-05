-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 07:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `criminal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(10) NOT NULL,
  `about_heading` text NOT NULL,
  `about_short_desc` text NOT NULL,
  `about_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_heading`, `about_short_desc`, `about_desc`) VALUES
(1, 'About Us ', '\r\n\r\n\r\n<center><b>Our project Name Crime mangement System</b><center>\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n<center>Group team Name</br>\r\n1.Golam Kibria.(2021-3-60-215) </br>\r\n2.Golam Kibria.(2021-3-60-031) </br>\r\n3.Golam Kibria.(2021-3-60-) </br>\r\n4.Golam Kibria.(2021-3-60-) </br><center>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(4, 'Golam Kibria', 'glkibria123@gmail.com', 'glkibria123', 'kibria.jpeg', '01779522200', 'Bangladesh', 'Student', ' Student');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(7, 'One Star', 'yes', '1star.png'),
(8, 'Two Star', 'yes', '2star.png'),
(9, 'Three Star', 'yes', '3star.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_email` text NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_email`, `contact_heading`, `contact_desc`) VALUES
(1, 'kibria@mail.com', 'Contact  To Us', 'If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `criminal_id` int(10) NOT NULL,
  `criminal_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `criminal_name` text NOT NULL,
  `criminal_url` text NOT NULL,
  `criminal_img1` text NOT NULL,
  `criminal_img2` text NOT NULL,
  `criminal_img3` text NOT NULL,
  `criminal_desc` text NOT NULL,
  `criminal_video` text NOT NULL,
  `criminal_keywords` text NOT NULL,
  `criminal_label` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`criminal_id`, `criminal_cat_id`, `cat_id`, `date`, `criminal_name`, `criminal_url`, `criminal_img1`, `criminal_img2`, `criminal_img3`, `criminal_desc`, `criminal_video`, `criminal_keywords`, `criminal_label`, `status`) VALUES
(5, 3, 9, '2024-05-30 08:47:13', 'kitty', 'cat1', 'IMG_20221226_234432.jpg', 'IMG_20221226_234432.jpg', 'IMG_20221226_233628.jpg', '\r\n\r\n\r\ncat\r\n', '\r\n\r\n\r\n\r\n', 'cat', 'cat', 'criminal'),
(6, 5, 9, '2024-05-30 08:47:53', 'Jack The Dog', 'Jack', 'jackfront.jpg', 'jackleft.jpg', 'jackright.jpg', '\r\n\r\n\r\n\r\n\r\n\r\nLeads all the dogs in tong behind East West to convince students to give them biscuits.\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Don of dogs', 'Dog', 'criminal'),
(7, 5, 9, '2024-05-30 08:55:38', 'John The Dog', 'John', 'johnfront.jpg', 'johnright.jpg', 'johnleft.jpg', 'John\r\n\r\n\r\n', '\r\n\r\n\r\n', 'Jack\'s brother', 'Dog', 'criminal');

-- --------------------------------------------------------

--
-- Table structure for table `criminal_categories`
--

CREATE TABLE `criminal_categories` (
  `criminal_cat_id` int(10) NOT NULL,
  `criminal_cat_title` text NOT NULL,
  `criminal_cat_top` text NOT NULL,
  `criminal_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `criminal_categories`
--

INSERT INTO `criminal_categories` (`criminal_cat_id`, `criminal_cat_title`, `criminal_cat_top`, `criminal_cat_image`) VALUES
(3, 'pro', 'yes', 'IMG_20221231_124311.jpg'),
(4, 'Thief', 'yes', 'images.png'),
(5, 'Mafia', 'yes', '360_F_490571685_RJNFjRuPkOzlBIauh49x568U0gPktxI1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_types`
--

CREATE TABLE `enquiry_types` (
  `enquiry_id` int(10) NOT NULL,
  `enquiry_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `missingperson`
--

CREATE TABLE `missingperson` (
  `Person_id` int(10) NOT NULL,
  `Person_name` text NOT NULL,
  `Person_gender` text NOT NULL,
  `Contact_Person` text NOT NULL,
  `Contact_address` text NOT NULL,
  `Person_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_image` text NOT NULL,
  `news_desc` text NOT NULL,
  `news_button` varchar(255) NOT NULL,
  `news_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_image`, `news_desc`, `news_button`, `news_url`) VALUES
(2, 'Police to play key role in building smart Bangladesh: Kamal', 'image-189723-1715958669.jpg', '\r\n\r\n\r\n\"Bangladesh is moving forward due to your (police) sincere efforts to control terrorism, militancy and crimes. Now Bangladesh has become a strong country,\" he told a function at Rajarbag police line here yesterday.', 'veiw', 'https://www.bssnews.net/news/189723');

-- --------------------------------------------------------

--
-- Table structure for table `pending_comp`
--

CREATE TABLE `pending_comp` (
  `comp_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `crime_id` text NOT NULL,
  `comp_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `police_id` int(10) NOT NULL,
  `police_name` varchar(255) NOT NULL,
  `police_station` varchar(255) NOT NULL,
  `police_email` varchar(255) NOT NULL,
  `police_pass` varchar(255) NOT NULL,
  `police_image` text NOT NULL,
  `police_contact` varchar(255) NOT NULL,
  `police_country` text NOT NULL,
  `police_job` varchar(255) NOT NULL,
  `police_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`police_id`, `police_name`, `police_station`, `police_email`, `police_pass`, `police_image`, `police_contact`, `police_country`, `police_job`, `police_about`) VALUES
(1, 'Golam Kibria', ' Badda Police Staion', 'kibria@123', '12345', 'IMG_20230723_180817.jpg', '123456', 'Bangladesh', 'officer', '       123      '),
(2, 'Meowlice', 'Badda Thana', 'Meowliceinthetown@gmail.com', '123456', 'catpolice.jpg', '01822663789', 'Bangladesh', 'OC', ' Meowlice has only mission that is to arrest all the criminals harming the meowlaw');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `station_id` int(10) NOT NULL,
  `station_title` varchar(255) NOT NULL,
  `station_image` varchar(255) NOT NULL,
  `station_desc` text NOT NULL,
  `station_button` varchar(255) NOT NULL,
  `station_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`station_id`, `station_title`, `station_image`, `station_desc`, `station_button`, `station_url`) VALUES
(3, 'Badda Thana', 'badda1.jpg.jpg', '\r\n\r\nBadda Thana, DIT Road, Merul Badda, Dhaka,1212\r\n', 'badda', 'https://badda');

-- --------------------------------------------------------

--
-- Table structure for table `safety_tips`
--

CREATE TABLE `safety_tips` (
  `safety_tips_id` int(11) NOT NULL,
  `safety_tips_title` varchar(255) NOT NULL,
  `safety_tips_image` text NOT NULL,
  `safety_tips_desc` text NOT NULL,
  `safety_tips_button` varchar(255) NOT NULL,
  `safety_tips_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `safety_tips`
--

INSERT INTO `safety_tips` (`safety_tips_id`, `safety_tips_title`, `safety_tips_image`, `safety_tips_desc`, `safety_tips_button`, `safety_tips_url`) VALUES
(2, 'Commercial Safety', 'download.png', '\r\n\r\n\r\nমার্কেট, শপিং মল, কার পার্কিং ও ব্যাংক লেনদেন বিষয়ে নিরাপত্তা:\r\n১. ঈদের পূর্বে শেষ কেনাকাটার দিনে মার্কেট/শপিং মলে কোন নগদ অর্থ রাখবেন না\r\n\r\n২. মার্কেট/শপিং মল ত্যাগের পূর্বে অবশ্যই নিশ্চিত হোন যে, আপনার প্রতিষ্ঠান যথাযথভাবে তালাবদ্ধ করা হয়েছে\r\n\r\n৩. স্বর্ণের দোকান, ব্যাংক, বীমা, অর্থলগ্নি প্রতিষ্ঠান হলে সিসিটিভি এবং এলার্ম স্কিম ব্যবহার করুন এবং নিশ্চিত হোন তা সক্রিয় রয়েছে\r\n\r\n৪. ব্যাংক থেকে টাকা উত্তোলন এবং টাকা বহনে সর্বদা সতর্ক থাকুন। বড় অংকের অর্থ বহনে প্রাইভেট কার কিংবা মাইক্রোবাস ব্যবহার করুন। প্রয়োজনে অর্থ স্থানান্তরে পুলিশের সহায়তা নিন', 'DMP', 'https://dmp.gov.bd/');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_image` text NOT NULL,
  `service_desc` text NOT NULL,
  `service_button` varchar(255) NOT NULL,
  `service_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_title`, `service_image`, `service_desc`, `service_button`, `service_url`) VALUES
(4, 'Dhaka Range', 'TJenxI0l74Xjh8M163cS.png', '\r\n\r\nDhaka Range\r\n', 'Dhaka Range', 'https://dhakarange.police.gov.bd/'),
(5, 'Chattogram Range', 'KhGHam5wOmd1frGW271O.png', 'Chattogram Range\r\n\r\n\r\n', 'Chattogram Range', 'http://www.ctgrangepolice.gov.bd/'),
(6, 'Rajshahi Range', 'hjYq59PTAWpe0okHYjUzFugdOfNcybOUNuFUZm0X.jpeg', '\r\n\r\nRajshahi Range\r\n', 'Rajshahi Range', 'https://www.digrajshahirange.gov.bd/');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_city` text NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_address` text NOT NULL,
  `user_image` text NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `user_confirm_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_country`, `user_city`, `user_contact`, `user_address`, `user_image`, `user_ip`, `user_confirm_code`) VALUES
(2, 'kibria123', 'kibria@123.com', '147', 'Bangladesh', 'bd', '123', 'bd', 'logo12.png', '::1', '85284656'),
(3, 'Golam Kibria', 'kibria4535@gmail.com', '1234', 'Bangladesh', 'Dhaka', '12345', 'Badda', 'logo.jpg', '::1', '2067932566');

-- --------------------------------------------------------

--
-- Table structure for table `user_comp`
--

CREATE TABLE `user_comp` (
  `comp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comp_date` datetime NOT NULL,
  `comp_status` varchar(50) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_comp`
--

INSERT INTO `user_comp` (`comp_id`, `user_id`, `comp_date`, `comp_status`, `complaint`) VALUES
(6, 2, '0000-00-00 00:00:00', 'Pending', 'not ok'),
(7, 3, '2024-02-23 00:00:00', 'In Progress', 'I got robbed at Rampura bridge');

-- --------------------------------------------------------

--
-- Table structure for table `user_feed`
--

CREATE TABLE `user_feed` (
  `feed_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feed_date` datetime NOT NULL,
  `feed_status` varchar(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_feed`
--

INSERT INTO `user_feed` (`feed_id`, `user_id`, `feed_date`, `feed_status`, `feedback`) VALUES
(4, 3, '2024-05-30 00:00:00', 'In Progress', 'Service need to be improved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`criminal_id`);

--
-- Indexes for table `criminal_categories`
--
ALTER TABLE `criminal_categories`
  ADD PRIMARY KEY (`criminal_cat_id`);

--
-- Indexes for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `missingperson`
--
ALTER TABLE `missingperson`
  ADD PRIMARY KEY (`Person_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `pending_comp`
--
ALTER TABLE `pending_comp`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`police_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `safety_tips`
--
ALTER TABLE `safety_tips`
  ADD PRIMARY KEY (`safety_tips_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_comp`
--
ALTER TABLE `user_comp`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `user_feed`
--
ALTER TABLE `user_feed`
  ADD PRIMARY KEY (`feed_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `criminal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `criminal_categories`
--
ALTER TABLE `criminal_categories`
  MODIFY `criminal_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `missingperson`
--
ALTER TABLE `missingperson`
  MODIFY `Person_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_comp`
--
ALTER TABLE `pending_comp`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `police_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `station_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `safety_tips`
--
ALTER TABLE `safety_tips`
  MODIFY `safety_tips_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_comp`
--
ALTER TABLE `user_comp`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_feed`
--
ALTER TABLE `user_feed`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
