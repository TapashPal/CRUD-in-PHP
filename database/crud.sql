SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `students` (`student_id`, `student_name`, `email_address`, `contact`, `gender`, `country`, `datetime`) VALUES
(20, 'Isabella', 'isabella@yahoo.com', '01711000005', 'Female', 'Costa Rica', '2017-08-27 20:11:50'),
(19, 'Sophia', 'sophia@gmail.com', '01711000004', 'Female', 'Belgium', '2017-08-27 20:10:55'),
(18, 'William', 'william@gmail.com', '01711000003', 'Male', 'Brazil', '2017-08-27 20:10:08'),
(16, 'Nahid', 'nahid@yahoo.com', '01711000002', 'Male', 'Bangladesh', '2017-08-27 19:57:35'),
(17, 'Arif', 'arif@gmail.com', '01711000001', 'Male', 'Bangladesh', '2017-08-27 20:04:13'),
(15, 'Md. Rubel', 'rubel@gmail.com', '01712000000', 'Male', 'Bangladesh', '2017-08-27 19:56:20'),
(21, 'Michael', 'michael@gmail.com', '01711000006', 'Male', 'Ecuador', '2017-08-27 20:13:02'),
(22, 'Suman', 'suman@gmail.com', '01711000007', 'Male', 'India', '2017-08-27 20:13:55'),
(23, 'James', 'james@gmail.com', '01711000009', 'Male', 'United Kingdom', '2017-08-27 20:16:05'),
(24, 'Asik', 'asik@gmail.com', '01712000010', 'Male', 'Bangladesh', '2017-08-27 20:19:11');

ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);


ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
