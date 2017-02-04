-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2016 at 09:09 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officials`
--

-- --------------------------------------------------------

--
-- Table structure for table `socks_2`
--

CREATE TABLE `reps_2` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `updated` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socks_2`
--

INSERT INTO reps_2 (`id`, `name`, `title`, `phone`, `email`, `address`, `updated`) VALUES
(1, 'Lauren Poe', 'Gainesville Mayor', '3523345016', 'poelb@cityofgainesville.org', '200 East University Ave, Gainesville, FL', '02-03-2016'),
(2, 'Helen Warren', 'Commissioner At Large', '3523345016', 'warrenhk@cityofgainesville.org', '200 East University Ave, Gainesville, FL', '02-03-2016'),
(3, 'Harvey Budd', 'Commissioner At Large', '3523345016', 'uddHM@cityofgainesville.org', '200 East University Ave, Gainesville, FL', '02-03-2016'),
(4, 'Keith Perry', 'State Senator', '3522644040', 'perry.keith@flsenate.gov', '4650 NW 39th Place, Gainesville, FL', '02-03-2016'),
(5, 'Ted Yoho', 'Congressman', '3525050838', 'ted.yoho@mail.house.gov', '5000 NW 27th Court, Gainesville, FL', '02-03-2016'),
(6, 'Marco Rubio', 'Commissioner At Large', '2022243041', 'marco@marcorubio.senate.gov', '284 Russell Senate Office Building, Washington D.C.', '02-03-2016'),
(7, 'Bill Nelson', 'U.S. Senator', '2022245274', 'bill@billnelson.senate.gov', '716 Hart Senate Office Building, Washington D.C.', '02-03-2016'),
(8, 'Clovis Watson, Jr.', 'State Representative', '3522644001', 'Clovis.Watson@myfloridahouse.gov', '2815 Northwest 13th Street, Gainesville, FL', '02-03-2016'),
(9, 'Kim Barton', 'Alachua Supervisor of Elections', '3523745252', 'kbarton@alachuacounty.us', '515 N Main Street, Gainesville, FL', '02-03-2016'),
(10, 'Ken Cornell', 'Aachua County Commissioner Chair', '3522646900', 'KCornell@alachuacounty.us', '12 SE 1st Street, Gainesville, FL', '02-03-2016');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `socks_2`
--
ALTER TABLE `reps_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `socks_2`
--
ALTER TABLE `reps_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
