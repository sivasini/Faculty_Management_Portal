-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 09:00 PM
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
('FAC0035', '2020-09-07', '2020-09-09', '2020-09-11', 'Have to attend the marriage of my cousin.', 'Casual Leave', 'Rejected'),
('FAC0035', '2020-10-19', '2020-10-20', '2020-10-23', 'Got into a small accident and fractured my leg.So requesting a few days off for resting.', 'Sick Leave', 'Accepted'),
('FAC0035', '2021-01-22', '2020-01-25', '2020-01-29', 'I would like to use my paid leave quota to take a few weeks off.', 'Paid Leave', 'Accepted'),
('FAC0036', '2020-07-03', '2020-07-22', '2021-02-22', 'My due date is in August.', 'Maternity Leave', 'Accepted'),
('FAC0036', '2020-10-21', '2020-10-22', '2020-10-22', 'Incharge faculty for students representing in Honeywell Hackathon in the intercollege meet taking place in PSG college.', 'On Duty', 'Accepted');

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
('FAC0044', 'Archana R', 'rarchana@gmail.com', 'M.Phil, M.A', 'Associate Professor', 'English Language Teaching, Literature, Religion in Literature and Poetry', '45,Kishore Street, KK Pudur Post, Saibaba Colony, Coimbatore-22.', 'English and Humanities', '8674955355', 'https://randomuser.me/api/portraits/women/79.jpg', 789);

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
('FAC0044', '8674955355', '0cd38122f35e6d6f7a8a3d8fa3a7f6f3dc7fe6ce', '961c4ce5692d8f0f612b4cd6d8665865aac3ace4', '250ffaa6aeeb69138145580a66e6f20a29c39bfa');

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
('FAC0044', '2019', 'Archana R, Aiswarya P, and Dr. K. Balakrishnan, “Representation of the Transgender Dilemma in the Film Navarasa”, International Journal of Innovative Technology and Exploring Engineering (IJITEE) , vol. 8, no. 7c, 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`year`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Fac_ID`,`apply_date`,`type`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Fac_ID`,`mobile`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
