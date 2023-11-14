-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 09:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cas`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `cgpa` double NOT NULL,
  `achievements` varchar(300) NOT NULL,
  `interest` varchar(300) NOT NULL,
  `current_status` varchar(100) NOT NULL,
  `helping_area` varchar(200) NOT NULL,
  `contact_info` varchar(200) NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `batch` int(11) NOT NULL,
  `show_cgpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `image`, `cgpa`, `achievements`, `interest`, `current_status`, `helping_area`, `contact_info`, `student_id`, `batch`, `show_cgpa`) VALUES
(1, 'Md. Shafiul Kamran', 'mkamran201039@bscse.uiu.ac.bd', '$2y$10$0QMwBk1kBV3MsvHbUlRsH.CVfFP05P.LuE7xt82xFocdfKoSHpfia', 'img_011201039', 3.71, 'District level winner in creative talent hunt competition, winner in UIU coder combat, 4th position among UIU teams in ACM ICPC preliminary contest.', 'Programming, cycling, Internet research, machine learning', 'Software engineer', ' I would love to help UIU students by teaching programming & helping them to make an powerful CV', 'Mobile: 01750363906,\r\nEmail: mkamran201039@bscsse.uiu.ac.bd.\r\nAddress:Manikdi bazar, ECB circle, Dhaka Cantonment', '011201039', 201, 1),
(2, 'Amina Afroz', 'aafroz201391@bscse.uiu.ac.bd', '123', 'img_011201391', 3.45, 'participated in UIU war of coders & cse project show', 'Software Quality Assurance', 'Student', '    I would like to help people by providing SQA job guideline', '    aafroz201391@bscse.uiu.ac.bd', '011201391', 201, 1),
(3, 'George Blaize', 'jpurification201244@bscse.uiu.ac.bd', '123', 'img_011201244', 3.26, 'Winner in UIU CSE Project show spring 2022', 'Singing, Playing chess', 'Student', '  I would love to help people by managing internship in MNC ', '  jpurification201244@bscse.uiu.ac.bd', '011201244', 201, 0),
(4, 'Azizul Islam NaYem ', 'anayem201262@bscse.uiu.ac.bd ', '123', 'img_011201262', 3.88, 'Grader in UIU', 'Teaching, Singing', 'Student', ' I would like to help people by providing necessary guideline who wants to go abroad for higher study', ' anayem201262@bscse.uiu.ac.bd ', '011201262', 201, 1),
(5, 'A. Wahab', 'awahab193058@bscse.uiu.ac.bd', '123', 'img_011193058', 3.97, 'Winner in CSE project show', 'Web Development', 'Student', 'I would like to help People by providing guideline to become full stack web developer', 'awahab193058@bscse.uiu.ac.bd', '011193058', 193, 0),
(6, 'S. M. Nayem', 'snayem193070@bscse.uiu.ac.bd', '123', 'img_011193070', 1.88, 'Undergraduate Teaching Assistant in UIU', 'Mobile Application Development', 'Student', 'I would like to help other by providing guideline how to become a mobile app developer', 'snayem193070@bscse.uiu.ac.bd', '011193070', 193, 0),
(8, 'testsoft', 'kamran.uiu.cse@gmail.com', '$2y$10$mvyKWkVxgUDTuinQGDJlBOM6FL5kTIZTMyP5oxH3fA6RRwQLFCOse', '', 0, '', '', '', '', 'Bogura, Bangladesh', '1000', 0, 0),
(10, 'amarfuel', 'kamran.uiu.cse@gmail.com', '$2y$10$mWo/NzovQOQo1JriiFoXHewLcSBCRGbVUYjQPmOEi3k/FoyzArBfO', '', 0, '', '', '', '', 'Rajshahi, Bangladesh', '1001', 0, 0),
(11, 'zabirsoft', 'kamran.uiu.cse@gmail.com', '$2y$10$6oyaEltfmb.LQ2XmOc7sX.6j0I3Uzh50CwiRQ3jkuykZH0klUHQRm', 'img_1002', 0, 'Zabirsoft is a tecnology company , serving since 2010. ', 'Web development, Mobile app development', 'Software Company', ' We would like to help people by offering job opportunity at our company', ' Dhaka 1201, Mirpur', '1002', 0, 0),
(13, '', 'mkamran201039@bscse.uiu.ac.bd', '$2y$10$bRiQUbbOvZ2FWD.rMXfX4OO10PC73Jr39rdyM6m/jyYsJmSW17kTG', '', 0, '', '', '', '', '', '1003', 0, 0),
(14, 'Md. Shafiul Kamran', 'mkamran201039@bscse.uiu.ac.bd', '$2y$10$5QB8ORH.848xKpFl1/xHYO4agqFnCR1Jqxt/5RjeB9pqZItjH3SqK', '', 0, '', '', '', '', '', '1004', 0, 0),
(15, '', '', '$2y$10$.BzkkOs5jiz8P68Cc3hC.ubQkv25a12YufnZzljWYv9Qd3mYsG8Hy', '', 0, '', '', '', '', '', '1005', 0, 0),
(16, 'shafiul kamran', 'kamran.uiu.cse@gmail.com', '$2y$10$qBLNSCVEVrGhfwfH8olTTOYcixGaLdYitU44H3R0B5QxMkDSkHFjq', 'img_1006', 0, '', '', '', '', '', '1006', 0, 0),
(17, 'Md. Shafiul Kamran', 'mkamran201039@bscse.uiu.ac.bd', '$2y$10$zqBLj1KvHAn7f1fXHRdxpOCLTx3znuUIdY14xGa8UaWIvW.PoeEdS', 'img_1007', 0, '', '', '', '', '', '1007', 0, 0),
(19, 'Md. Shafiul Kamran', 'mkamran201039@bscse.uiu.ac.bd', '$2y$10$X3F.Ig6TFuDxD05IpJsKYOezbbelLKf9eciPz9xnDRE6JrIujOWhy', 'https://lh3.googleusercontent.com/a/AAcHTtco2L_CPClqwXjaeFeXUSDYGpNRY--ddgKZZFZrrSZRTGs=s96-c', 0, '', '', '', '', '', '1009', 0, 0),
(20, 'Md. Shafiul Kamran', 'mkamran201039@bscse.uiu.ac.bd', '$2y$10$c4hhRjPo4BnU9TGNmYiSTOeDaisAS5LN135lDjBAG1lYPQseJlEzC', 'https://lh3.googleusercontent.com/a/AAcHTtco2L_CPClqwXjaeFeXUSDYGpNRY--ddgKZZFZrrSZRTGs=s96-c', 0, '', '', '', '', '', '1010', 0, 0),
(21, 'Md. Shafiul Kamran', 'mkamran201039@bscse.uiu.ac.bd', '$2y$10$MbuqLQSen58Tre13VUflN.E/OaJml1zZ6g2hrSGiOzd3OllYMsnL.', 'https://lh3.googleusercontent.com/a/AAcHTtco2L_CPClqwXjaeFeXUSDYGpNRY--ddgKZZFZrrSZRTGs=s96-c', 0, '', '', '', '', '', '1011', 0, 0),
(22, 'shafiul kamran', 'kamran.uiu.cse@gmail.com', '$2y$10$cIe93L.P0oC2F8PtWocgDO4t.IlP5iFp/eOz9btvlv8tASBIxT2qe', 'https://lh3.googleusercontent.com/a/AAcHTteftw5-T88MCsVlNxRg_CN_kyv0W5WquaqPFFtQa5qMoQ=s96-c', 0, 'I am first Blue coder in codeforces from DIU', 'Machine learning', 'ML engineer', ' Cpmpetitive programming, AI job guideline', ' Mirpur 1, Shah Ali thana , godarpara, mobile: 01718465982', '1012', 0, 0),
(23, 'Admin', 'careerassistent@gmail.com', '$2y$10$UooHz96TsHEpr30AMGc2lu0vDVUvsRtIJh1eHo3GQUMkCbd097NSW', 'img_admin', 0, '', '', 'admin', '', '', 'admin', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
