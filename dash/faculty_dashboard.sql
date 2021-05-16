-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 02:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `year` varchar(15) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`year`, `start_date`, `end_date`) VALUES
('2020-2021', '2020-06-01', '2021-04-25'),
('2021-2022', '2021-06-01', '2022-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `Fac_ID` varchar(10) NOT NULL,
  `Course_ID` varchar(10) NOT NULL,
  `Assignment_Name` varchar(255) NOT NULL,
  `Start_DATE` date NOT NULL,
  `End_DATE` date NOT NULL,
  `Format` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Assignment_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Fac_ID` varchar(10) NOT NULL,
  `apply_date` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `type` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Fac_ID`, `apply_date`, `start_date`, `end_date`, `reason`, `type`, `status`) VALUES
('FAC0035', '2020-09-07', '2020-09-09', '2020-09-11', 'Have to attend the marriage of my cousin.', 'Casual Leave', 'Accepted'),
('FAC0035', '2020-10-19', '2020-10-20', '2020-10-23', 'Got into a small accident and fractured my leg.So requesting a few days off for resting.', 'Sick Leave', 'Accepted'),
('FAC0035', '2021-04-05', '2021-04-07', '2021-04-25', 'I am taking two Students to present their paper in Stanford University', 'On Duty', 'Accepted'),
('FAC0035', '2021-04-05', '2021-04-04', '2021-04-07', 'I want to go for vacation', 'Paid leave', 'Rejected'),
('FAC0035', '2021-04-05', '2021-04-15', '2021-04-17', 'I am sick', 'Sick Leave', 'Rejected'),
('FAC0035', '2021-05-16', '2021-05-11', '2021-05-19', 'jlhjlh', 'Sick Leave', 'Pending'),
('FAC0035', '2021-08-22', '2020-08-25', '2020-08-29', 'I would like to use my paid leave quota to take a few weeks off.', 'Paid Leave', 'Rejected'),
('FAC0036', '2020-07-03', '2020-07-22', '2021-02-22', 'My due date is in August.', 'Maternity Leave', 'Accepted'),
('FAC0036', '2020-10-21', '2020-10-22', '2020-10-22', 'Incharge faculty for students representing in Honeywell Hackathon in the intercollege meet taking place in PSG college.', 'On Duty', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_ID` varchar(10) NOT NULL,
  `Fac_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_ID`, `Fac_ID`) VALUES
('CSE311', 'FAC0035'),
('CSE385', 'FAC0035');

-- --------------------------------------------------------

--
-- Table structure for table `cse311`
--

CREATE TABLE `cse311` (
  `Stud_ID` varchar(10) NOT NULL,
  `Assignment1` decimal(3,0) DEFAULT NULL,
  `Assignment1_file` varchar(100) DEFAULT NULL,
  `Assignment2` decimal(3,0) DEFAULT NULL,
  `Assignment2_file` varchar(100) DEFAULT NULL,
  `quiz1` decimal(3,0) DEFAULT NULL,
  `quiz2` decimal(3,0) DEFAULT NULL,
  `Assignment3` decimal(3,0) DEFAULT NULL,
  `quiz3` decimal(3,0) DEFAULT NULL,
  `p1` decimal(3,0) DEFAULT NULL,
  `p2` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse311`
--

INSERT INTO `cse311` (`Stud_ID`, `Assignment1`, `Assignment1_file`, `Assignment2`, `Assignment2_file`, `quiz1`, `quiz2`, `Assignment3`, `quiz3`, `p1`, `p2`) VALUES
('STU001', '6', '', '3', '', '4', '5', '4', '6', '24', '12'),
('STU002', '9', '', '3', '', '4', '5', '4', '4', '33', '44'),
('STU003', '8', '', '3', '', '4', '5', '5', '3', '45', '23'),
('STU004', '9', '', '9', '', '8', '7', '7', '8', '45', '46'),
('STU005', '7', '', '3', '', '4', '5', '6', '6', '34', '35'),
('STU006', '7', '', '3', '', '4', '5', '5', '7', '44', '33'),
('STU007', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU008', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU009', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU010', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU011', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU012', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU013', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU014', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU015', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU016', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU017', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU018', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU019', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU020', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU021', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU022', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU023', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU024', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU025', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU026', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU027', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU028', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU029', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU030', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU031', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU032', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU033', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU034', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU035', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU036', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU037', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU038', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU039', '5', '', '10', '', '6', '7', '8', '8', '44', '33'),
('STU040', '5', '', '10', '', '6', '7', '8', '8', '44', '33');

-- --------------------------------------------------------

--
-- Table structure for table `cse385`
--

CREATE TABLE `cse385` (
  `Stud_ID` varchar(10) NOT NULL,
  `Assignment1` decimal(2,0) DEFAULT NULL,
  `Assignment1_file` varchar(100) DEFAULT NULL,
  `Assignment2` decimal(2,0) DEFAULT NULL,
  `Assignment2_file` varchar(100) DEFAULT NULL,
  `Assignment3` decimal(2,0) DEFAULT NULL,
  `quiz1` decimal(2,0) DEFAULT NULL,
  `quiz2` decimal(2,0) DEFAULT NULL,
  `quiz3` decimal(2,0) DEFAULT NULL,
  `p1` decimal(2,0) DEFAULT NULL,
  `p2` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse385`
--

INSERT INTO `cse385` (`Stud_ID`, `Assignment1`, `Assignment1_file`, `Assignment2`, `Assignment2_file`, `Assignment3`, `quiz1`, `quiz2`, `quiz3`, `p1`, `p2`) VALUES
('STU001', '8', '', '9', '', '10', '8', '9', '8', '44', '45'),
('STU002', '8', '', '9', '', '10', '8', '9', '8', '44', '45'),
('STU003', '8', '', '9', '', '10', '8', '9', '8', '44', '45'),
('STU004', '8', '', '9', '', '10', '8', '9', '8', '44', '45'),
('STU005', '8', '', '9', '', '10', '8', '9', '8', '44', '45'),
('STU006', '8', '', '9', '', '6', '8', '9', '8', '44', '45');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Fac_ID` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email_id` varchar(35) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `image_path` varchar(1024) DEFAULT 'https://www.pinclipart.com/picdir/middle/128-1286122_business-person-icon-clipart.png',
  `wallet` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Fac_ID`, `Name`, `email_id`, `qualification`, `position`, `interest`, `address`, `dept`, `mobile`, `image_path`, `wallet`) VALUES
('FAC0035', 'Ram Kumar S', 'ramkumar@gmail.com', 'B.Tech, M.Tech ', 'Assistant Professor', 'Digital Image Processing, Web Security', '12, Dharen Apartments, Peelamedu, Coimbatore-99', 'Computer Science', '9843249546', '10.jpg', 150),
('FAC0036', 'Sujatha R', 'sujatha_r@gmail.com', 'M.Sc (Chemistry)', 'Associate Professor', 'Physical Chemistry of Polymer solutions', '86,Kammachi Amman layout, Gandhi Nagar, Madurai-23.', 'Chemistry', '9655449546', 'https://randomuser.me/api/portraits/women/72.jpg', 806),
('FAC0037', 'Supriya K', 'k_supriya88@gmail.com', 'B.E, M.E', 'Assistant Professor', 'Machine Learning, Neural Networks', '86/56, Nehru Road, RK Nagar, Palakkad-23.', 'Computer Science', '9984324946', 'https://randomuser.me/api/portraits/women/27.jpg', 1030),
('FAC0038', 'Senthil Kumar M', 'senthil_kumar_m@gmail.com', 'M.Tech, Ph.D', 'Assistant Professor ', 'Cryptography, Web Security Development', '86/56, Shrivalli Apartments RKN Nagar, Chennai-23.', 'Web Security', '9655549546', 'https://randomuser.me/api/portraits/men/24.jpg', 434),
('FAC0039', 'Kavitha R V', 'r_v_kavitha@yahoo.in', 'M.Sc, Ph.D', 'Assistant Professor', 'Video Analytics, Big Data Analytics, Intrusion Det', '86/56, Mayura Apartments VK Nagar, KannyaKumari-23.', 'Computer Science', '9655649546', 'https://randomuser.me/api/portraits/women/71.jpg', 2323),
('FAC0040', 'Magesh V', 'maghesh__vishnu@gmail.com', 'B.Tech, M.E, Ph.D', 'Research Supervisor,', 'Distributed Computing, Medical Informatics, Mentor', '86/56, Balan Road, R.K.N Nagar, Chennai-24.', 'Computer Science', '7373049546', 'https://randomuser.me/api/portraits/men/49.jpg', 4596),
('FAC0041', 'Shri Ram V', 'shri_v_ram1984@gmail.com', 'B.Tech, M.Tech', 'Assistant Professor', 'IoT, Artifical Intelligence', '45, Bangalore Road, Vagur Nagar, Mettupalayam-33.', 'Computer Science', '9145674127', 'https://randomuser.me/api/portraits/men/50.jpg', 345),
('FAC0042', 'Bharathi D', 'd_bharathi@gmail.com', 'B.Tech, M.Tech', 'Assistant Professor', 'Image Processing', '45, Bannare Road, Vagur Nagar, Hosur-33.', 'Computer Science', '8689459655', 'https://randomuser.me/api/portraits/women/75.jpg', 987),
('FAC0043', 'Raghesh K', 'krishnan_raghesh@gmail.com', 'M.Tech, Ph.D', 'Assistant Professor', 'Cementitious composites, High performance and Light Construction', '45, Shri Vatsa Villa, Thudiyalur, Coimbatore-33.', 'Civil Engineering', '8207204356', 'https://randomuser.me/api/portraits/men/11.jpg', 458),
('FAC0044', 'Archana R', 'rarchana@gmail.com', 'M.Phil, M.A', 'Associate Professor', 'English Language Teaching, Literature, Religion in Literature and Poetry', '45,Kishore Street, KK Pudur Post, Saibaba Colony, Coimbatore-22.', 'English and Humanities', '8674955355', 'https://randomuser.me/api/portraits/women/79.jpg', 789),
('HFAC001', 'Ramesh Nayar', 'rameshnair@gmail.com', 'M.Tech', 'Faculty Head', 'Software Development', '105,Shrivatsa Aparment, Trichy-88', 'Computer Science', '9876543210', 'https://randomuser.me/portraits/men/78.jpg', 2345);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `Fac_ID` varchar(10) NOT NULL,
  `Course_ID` varchar(10) NOT NULL,
  `Resource_name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `upload_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gatepass`
--

CREATE TABLE `gatepass` (
  `student_id` varchar(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `type` varchar(25) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `status` varchar(20) NOT NULL,
  `Fac_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gatepass`
--

INSERT INTO `gatepass` (`student_id`, `start_date`, `end_date`, `type`, `reason`, `status`, `Fac_ID`) VALUES
('STU1', '2021-04-30', '2021-05-02', 'Sick Leave', 'I am going to get vaccinated and hence want two days off', 'forwarded', 'FAC0035'),
('STU1', '2021-05-12', '2021-05-16', 'On Duty', 'I am going to participate in a hackathon', 'pending', 'FAC0035'),
('STU2', '2021-03-09', '2021-03-12', 'Sick Leave', 'I am ill,I want holiday', 'emergency', 'FAC0036'),
('STU2', '2021-05-09', '2021-05-12', 'On Duty', 'I am playing for the college cricket team', 'emergency', 'FAC0035');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Fac_ID` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `sq1` varchar(100) NOT NULL,
  `sq2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Fac_ID`, `mobile`, `passwd`, `sq1`, `sq2`) VALUES
('FAC0035', '9843249546', '9895176a33494081d38266439c805fdf776a27ca', 'd56a3b6f0e9a6bada2e1fafe980f311a15c9c45c', '2d4111c0ce9893045f8a6e9be90849164289414d'),
('FAC0036', '9655449546', '9418b89b779cc3152833f501669d6e6569adbbbf', 'be82e2ce81186efe9a55662a3082d23d120d5479', '07e440cb8146ea70868f9e8d023e670351bf8b42'),
('FAC0037', '9984324946', 'bd8776157fb56894e8e224c6689e40117bfdf925', '41b88a86d2489ac1ce35a6d2146656cd5de6d7b0', '66bc82d28428fdff90f09f60dc49f780f3837462'),
('FAC0038', '9655549546', '534c3319838a13471500f8e0ecd01d6f0bc3e0d3', 'a9a9043a8daf94692cb9b61a8c2d2c0a07787558', '2d4111c0ce9893045f8a6e9be90849164289414d'),
('FAC0039', '9655649546', '60001ddd01943f548362f10e653aa7201cef30a5', '1916982ee3a198d7bdecbe4de0dbca5bfc04e1b5', '642d928e3299f39bb539554a923e8ee87535c36c'),
('FAC0040', '7373049546', '175af41695671fa6ceadba3b8b0f943554ed81e1', '11afc6fe21724b1f1f181359f706dca09eb04707', '15cb13d223152f3dd8ffa2fd35ae7eb7d751e7c6'),
('FAC0041', '9145674127', 'e7e52797de10052775db7cf54498c3b004d1f0bc', '5753a498f025464d72e088a9d5d6e872592d5f91', '91f6fcb18482cc6fe303108f4283180b4fa20599'),
('FAC0042', '8689459655', '4d1942539a522bba2aca51a79a7d22193a257a77', '94f85995c7492eec546c321821aa4beca9a3e2b1', '4d014ece65b2703c9d1cdc5f8575e3d2880858f9'),
('FAC0043', '8207204356', '7ed3fd3a38e184033469c8e96ea3df9a90c55c4c', '1e15dc217e4a19d4e52a7e0f0abc2c8fa4c906c2', 'fbd194c1d67720b12210600bd7755e332c2369db'),
('FAC0044', '8674955355', '0cd38122f35e6d6f7a8a3d8fa3a7f6f3dc7fe6ce', '961c4ce5692d8f0f612b4cd6d8665865aac3ace4', '250ffaa6aeeb69138145580a66e6f20a29c39bfa'),
('HFAC001', '9876543210', '0278f05f188c137bf0566903e8838deb4d88510e', 'b315f5b3989f11e1bae7f061c4420ab23e70feb2', '07e440cb8146ea70868f9e8d023e670351bf8b42');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `Fac_ID` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `title` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`Fac_ID`, `year`, `title`) VALUES
('FAC0035', '2011', 'R. Sudhakar, S. Ram Kumar, and Muthukrishnan, S.,“A Hybrid Approach to Content Based Image Retrieval using Visual Features and Textual Queries”, International Conference on Advanced Computing (ICOAC 2011) . IEEE, Chennai, India, 2011.'),
('FAC0035', '2013', 'S Ram Kumar and Sudhakar, R., “Automatic Classification of Liver Diseases from Ultrasound Images Using GLRLM Texture Features”, Advances in Intelligent Systems and Computing, vol. 195 AISC. pp. 611-624, 2013'),
('FAC0035', '2017', 'S Ram Kumar and Radhakrishnan, S., “Hybrid approach to classification of focal and diffused liver disorders using ultrasound images with wavelets and texture features”, IET Image Processing, vol. 11, pp. 530-538, 2017.'),
('FAC0035', '2017', 'S Ram Kumar, M. M. and K. Raghesh Krishnan, “A Study of the Phases of Classification of Liver diseases from Ultrasound Images and Gray Level Difference Weights based Segmentation”, IEEE Digital Library, 2017 International Conference on Communication and Signal Processing (ICCSP). IEEE, Chennai, India, 2017.'),
('FAC0035', '2018', 'S Ram Kumar, Midhila, M., and R.Vignesh, “Tensor Flow Based Analysis and Classification of Liver Disorders from Ultrasonography Images”, Lecture Notes in Computational Vision and Biomechanics, vol. 28, pp. 734-743, 2018.'),
('FAC0036', '2006', 'Sujatha R, “Bioinformatics in drug discovery”, National seminar on “Emerging trends and developments in bioinformatics . Dr. G. R. Damodaran College of science, Coimbatore, 2006.'),
('FAC0036', '2009', 'Sujatha R, “Studies on essential oils as VCI for mild steel in marine atmosphere”, National Conference on Corrosion Assessment and its Control- (NCAC 09) . Thiyagaraja College, Madurai, 2009.'),
('FAC0036', '2010', 'Sujatha R, “Corrosion inhibition of essential oils on copper in seawater, rain water, SO2 and H2S environment”, National Conference on Recent Advances in Electroanalytical Techniques. GandhigramRural Institute- Deemed University, Gandhigram , 2010'),
('FAC0037', '2016', 'Bharathi, P. D., Midhun, M.,Supriya K,  Vijay, K., and Dr. Senthil Kumar T., “A conjectural study on machine learning algorithms”, Advances in Intelligent Systems and Computing, vol. 397, pp. 105-116, 2016'),
('FAC0037', '2017', 'Supriya K and Dr. Senthil Kumar T., “Survey on various traffic monitoring and reasoning techniques”, Advances in Intelligent Systems and Computing, vol. 573, pp. 507-516, 2017'),
('FAC0038', '2014', 'Dr. Senthil Kumar M., Vishak, J., Sanjeev, S., and Sneha, B., “Cloud Based Framework for Road Accident Analysis”, International Journal of Computer Science and Mobile Computing, vol. 3, pp. 1025 - 1032, 2014.'),
('FAC0038', '2015', 'Dr. Senthil Kumar M. and Saivenkateswaran, Sb, “Evaluation of video analytics for face detection and recognition”, International Journal of Applied Engineering Research, vol. 10, pp. 24003-24016, 2015.'),
('FAC0038', '2017', 'H. Haritha and Dr. Senthil Kumar M., “Survey on various traffic monitoring and reasoning techniques”, Advances in Intelligent Systems and Computing, vol. 573, pp. 507-516, 2017.'),
('FAC0039', '2013', 'Dr. Senthil Kumar T., .Sivanandam, N., Kavitha R V, and Anusha, B., “Logo Classification of Vehicles using SURF based on Low Detailed Feature Recognition”, International Journal of Computer Applications, vol. 3, pp. 5 - 7, 2013.'),
('FAC0039', '2013', 'Dr. Senthil Kumar T., Kavitha R V., and , “A Novel Face Recognition Algorithm using PCA”, International Journal of Computer Applications, vol. 3, pp. 8 - 12, 2013'),
('FAC0040', '2016', 'Dhanya N. M., Dr. Senthil Kumar T., Magesh V, Prasanth, S., and Shruthi, U. K., “Pedagogue: A Model for Improving Core Competency Level in Placement Interviews Through Interactive Android Application”, in Proceedings of the International Conference on Soft Computing Systems, 2016'),
('FAC0040', '2017', 'Magesh V and Radhakrishnan, S., “Hybrid approach to classification of focal and diffused liver disorders using ultrasound images with wavelets and texture features”, IET Image Processing, vol. 11, pp. 530-538, 2017.'),
('FAC0040', '2017', 'S Kumar,Magesh V and K. Raghesh Krishnan, “A Study of the Phases of Classification of Liver diseases from Ultrasound Images and Gray Level Difference Weights based Segmentation”, IEEE Digital Library, 2017 International Conference on Communication and Signal Processing (ICCSP). IEEE, Chennai, India, 2017.'),
('FAC0040', '2018', 'S Kumar, Magesh V., and R., S., “Tensor Flow Based Analysis and Classification of Liver Disorders from Ultrasonography Images”, Lecture Notes in Computational Vision and Biomechanics, vol. 28, pp. 734-743, 2018.'),
('FAC0041', '2013', 'Shri Ram V and Sudhakar, R., “Automatic Classification of Liver Diseases from Ultrasound Images Using GLRLM Texture Features”, Advances in Intelligent Systems and Computing, vol. 195 AISC. pp. 611-624, 2013'),
('FAC0041', '2017', 'Shri Ram V and Radhakrishnan, S., “Hybrid approach to classification of focal and diffused liver disorders using ultrasound images with wavelets and texture features”, IET Image Processing, vol. 11, pp. 530-538, 2017.'),
('FAC0041', '2017', 'Shri Ram V, M. M. and K. Raghesh Krishnan, “A Study of the Phases of Classification of Liver diseases from Ultrasound Images and Gray Level Difference Weights based Segmentation”, IEEE Digital Library, 2017 International Conference on Communication and Signal Processing (ICCSP). IEEE, Chennai, India, 2017.'),
('FAC0041', '2018', 'Shri Ram V, Midhila, M., and R., S., “Tensor Flow Based Analysis and Classification of Liver Disorders from Ultrasonography Images”, Lecture Notes in Computational Vision and Biomechanics, vol. 28, pp. 734-743, 2018.'),
('FAC0042', '2019', 'Bharathi D and Radhakrishnan, S., “Hybrid approach to classification of focal and diffused liver disorders using ultrasound images with wavelets and texture features”, IET Image Processing, vol. 11, pp. 530-538, 2019.'),
('FAC0042', '2019', 'Bharathi D, Manikandan S and S Ram Kumar, “Automatic Classification of Liver Diseases from Ultrasound Images Using GLRLM Texture Features”, Advances in Intelligent Systems and Computing, vol. 195 AISC. pp. 611-624, 2019'),
('FAC0043', '2014', 'M. Sarma, Somanath, A., and Dr. Ragesh K, “Processing and Interpreting Water bodies and Road Networks from Satellite Images and storing them as QR Codes”, International Journal of Scientific & Engineering Research, vol. 5, no. 5, pp. 1285 – 1291, 2014'),
('FAC0043', '2018', 'N. Manomi, Dhanya Sathyan, and Dr. Ragesh K, “Coupled effect of superplasticizer dosage and fly ash content on strength and durability of concrete”, Materials Today: Proceedings, vol. 5, pp. 24033 - 24042, 2018'),
('FAC0043', '2018', 'Sreekesh U. Menon, Dr. Anand K. B., and Dr.Raghesh K, “Performance evaluation of alkali-activated coal-ash aggregate in concrete”, Proceedings of the Institution of Civil Engineers - Waste and Resource Management, vol. 171, no. 1, pp. 4-13, 2018'),
('FAC0043', '2019', 'P. S. S, Sharma, A. K., and Dr. Ragesh K., “Comparative study on synthesis and properties of geopolymer fine aggregate from fly ashes”, Construction and Building Materials, vol. 198, pp. 359-367, 2019'),
('FAC0044', '2019', 'Archana R and Dr. K. Balakrishnan, “Jerry Pinto’s Em and the Big Hoom: Heteronormativity and the Text of Madness”, International Journal of Innovative Technology and Exploring Engineering (IJITEE) , vol. 8, no. 7c, 2019'),
('FAC0044', '2019', 'Archana R, Aiswarya P, and Dr. K. Balakrishnan, “Representation of the Transgender Dilemma in the Film Navarasa”, International Journal of Innovative Technology and Exploring Engineering (IJITEE) , vol. 8, no. 7c, 2019'),
('HFAC001', '2014', 'Ramesh Nair, Sivanandam, S. Nb, and Akhila, G. Pc, “Detection of car in video using soft computing techniques”, Communications in Computer and Information Science, vol. 270 CCIS, pp. 556-565, 2014.'),
('HFAC001', '2016', 'Ramesh Nair, Dr. Senthil Kumar T., Gautam, K. S., and Haritha, H., “Debris detection and tracking system in water bodies using motion estimation technique”, Advances in Intelligent Systems and Computing, vol. 424. Springer, pp. 275-284, 2016.');

-- --------------------------------------------------------

--
-- Table structure for table `show_submission`
--

CREATE TABLE `show_submission` (
  `Assignment_ID` int(11) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `submsn_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `st_leave_percentage`
--

CREATE TABLE `st_leave_percentage` (
  `student_id` varchar(10) NOT NULL,
  `leave_percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st_leave_percentage`
--

INSERT INTO `st_leave_percentage` (`student_id`, `leave_percentage`) VALUES
('STU1', 80),
('STU2', 10);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Fac_ID` varchar(10) NOT NULL,
  `day` varchar(15) NOT NULL,
  `p1room` varchar(20) DEFAULT NULL,
  `p1_cid` varchar(10) DEFAULT NULL,
  `p1_cname` varchar(55) DEFAULT NULL,
  `p2room` varchar(4) DEFAULT NULL,
  `p2_cid` varchar(10) DEFAULT NULL,
  `p2_cname` varchar(55) DEFAULT NULL,
  `p3room` varchar(4) DEFAULT NULL,
  `p3_cid` varchar(10) DEFAULT NULL,
  `p3_cname` varchar(55) DEFAULT NULL,
  `p4room` varchar(4) DEFAULT NULL,
  `p4_cid` varchar(10) DEFAULT NULL,
  `p4_cname` varchar(55) DEFAULT NULL,
  `p5room` varchar(4) DEFAULT NULL,
  `p5_cid` varchar(10) DEFAULT NULL,
  `p5_cname` varchar(55) DEFAULT NULL,
  `day_no` decimal(2,0) DEFAULT NULL,
  `meet_name` varchar(100) DEFAULT NULL,
  `starttime` varchar(10) DEFAULT NULL,
  `endtime` varchar(10) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `meet_link` varchar(1000) DEFAULT NULL,
  `p1_meet_link` varchar(1000) DEFAULT NULL,
  `p2_meet_link` varchar(1000) DEFAULT NULL,
  `p3_meet_link` varchar(1000) DEFAULT NULL,
  `p4_meet_link` varchar(1000) DEFAULT NULL,
  `p5_meet_link` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`Fac_ID`, `day`, `p1room`, `p1_cid`, `p1_cname`, `p2room`, `p2_cid`, `p2_cname`, `p3room`, `p3_cid`, `p3_cname`, `p4room`, `p4_cid`, `p4_cname`, `p5room`, `p5_cid`, `p5_cname`, `day_no`, `meet_name`, `starttime`, `endtime`, `reason`, `meet_link`, `p1_meet_link`, `p2_meet_link`, `p3_meet_link`, `p4_meet_link`, `p5_meet_link`) VALUES
('FAC0035', 'Friday', 'R403', '15CSE311', 'Digital Image Processing (V Sem)', '', '', '', 'R205', '15CSE385', 'Cyber Security (V Sem)', '', '', '', '', '', '', '5', '', '', '', '', 'cvxbknlbfd', NULL, NULL, NULL, NULL, NULL),
('FAC0035', 'Monday', 'R403', '15CSE311', 'Digital Image Processing (V Sem)', '', '', '', 'R205', '15CSE385', 'Cyber Security (V Sem)', '', '', '', '', '14CSE432', 'M.Tech Project Guidance', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FAC0035', 'Thursday', 'L001', '15CSE311', 'Digital Image Processing Lab (V Sem)', '', '', '', 'R205', '15CSE385', 'Cyber Security (V Sem)', '', '', '', '', '14CSE432', 'M.Tech Project Guidance', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FAC0035', 'Tuesday', '', '', '', 'R205', '15CSE385', 'Cyber Security (V Sem)', '', '', '', 'R403', '15CSE311', 'Digital Image Processing (V Sem)', '', '', '', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('FAC0035', 'Wednesday', 'R205', '15CSE385', 'Cyber Security (V Sem)', '', '', '', 'R403', '15CSE311', 'Digital Image Processing (V Sem)', 'L003', '15CSE385', 'Cyber Security Component Lab (V Sem)', '', '', '', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('HFAC001', 'Friday', '', '', '', 'R405', '15CSE339', 'Operating System (III Sem)', 'R302', '15CSE313', 'Software Engineering (VI Sem)', '', '', '', '', '', '', '5', '', '', '', '', 'cvxbknlbfd', NULL, NULL, NULL, NULL, NULL),
('HFAC001', 'Monday', 'R405', '15CSE339', 'Operating Systems (III Sem)', '', '', '', 'L001', '15CSE339', 'Operating System Lab (III Sem)', '', '', '', '', '14CSE413', 'M.Tech Project Guidance', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('HFAC001', 'Thursday', 'L001', '15CSE313', 'Software Engineering Lab (VI Sem)', '', '', '', 'R405', '15CSE339', 'Operating System (III Sem)', '', '', '', '', '14CSE413', 'M.Tech Project Guidance', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('HFAC001', 'Tuesday', '', '', '', 'R405', '15CSE339', 'Operating System (III Sem)', '', '', '', 'R302', '15CSE313', 'Software Engineering (VI Sem)', '', '', '', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('HFAC001', 'Wednesday', '', '', '', '', '', '', 'R302', '15CSE313', 'Software Engineering (VI Sem)', 'R405', '15CSE339', 'Operating Systems (II Sem)', '', '', '', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`Assignment_ID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Fac_ID`,`apply_date`,`type`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_ID`,`Fac_ID`);

--
-- Indexes for table `cse311`
--
ALTER TABLE `cse311`
  ADD PRIMARY KEY (`Stud_ID`);

--
-- Indexes for table `cse385`
--
ALTER TABLE `cse385`
  ADD PRIMARY KEY (`Stud_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Fac_ID`,`mobile`);

--
-- Indexes for table `gatepass`
--
ALTER TABLE `gatepass`
  ADD PRIMARY KEY (`student_id`,`start_date`,`end_date`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Fac_ID`,`mobile`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`Fac_ID`,`year`,`title`);

--
-- Indexes for table `st_leave_percentage`
--
ALTER TABLE `st_leave_percentage`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`Fac_ID`,`day`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `Assignment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);

--
-- Constraints for table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`Fac_ID`) REFERENCES `faculty` (`Fac_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
