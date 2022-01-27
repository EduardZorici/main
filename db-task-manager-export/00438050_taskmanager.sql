-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2022 at 08:11 PM
-- Server version: 5.7.33-36
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `00438050_taskmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lists`
--

CREATE TABLE `tbl_lists` (
  `list_id` int(10) UNSIGNED NOT NULL,
  `list_name` varchar(50) NOT NULL,
  `list_description` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lists`
--

INSERT INTO `tbl_lists` (`list_id`, `list_name`, `list_description`) VALUES
(28, 'Zoho', 'zoho crm'),
(27, 'Ungaria', 'komoder.hu\r\n'),
(26, 'Olanda', 'komoder.nl\r\n'),
(25, 'Google', 'WebmasterTools'),
(21, 'Spania', 'komoder.es'),
(20, 'Italia', 'komoder.it\r\n'),
(19, 'Bulgaria', 'komoder.bg'),
(24, 'Romania', 'komoder.ro'),
(23, 'Multiple targets', ''),
(22, 'International', 'komoder.com'),
(32, 'Franta', 'komoder.fr'),
(31, 'Austria', 'komoder.at'),
(33, 'UK', 'komoder.co.uk'),
(34, 'Google Search Console', 'Google Search Console'),
(35, 'Site-uri', 'Site-uri'),
(36, 'Manuale', 'Manuale'),
(37, 'Cataloage', 'Cataloage');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tasks`
--

CREATE TABLE `tbl_tasks` (
  `list_id` int(11) NOT NULL,
  `task_id` int(10) UNSIGNED NOT NULL,
  `task_name` varchar(300) NOT NULL,
  `task_description` text NOT NULL,
  `task_priority` varchar(50) NOT NULL,
  `task_status` varchar(50) NOT NULL,
  `task_submitDate` date NOT NULL,
  `task_deadlineDate` date NOT NULL,
  `task_assignedBy` varchar(150) NOT NULL,
  `task_assignedTo` varchar(150) NOT NULL,
  `user_id_assignedBy` int(10) NOT NULL,
  `user_id_assignedTo` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tasks`
--

INSERT INTO `tbl_tasks` (`list_id`, `task_id`, `task_name`, `task_description`, `task_priority`, `task_status`, `task_submitDate`, `task_deadlineDate`, `task_assignedBy`, `task_assignedTo`, `user_id_assignedBy`, `user_id_assignedTo`) VALUES
(21, 19, 'fisier css bf', 'De optimizat si de pus fisier css de black-friday pe site', 'Medium', 'Done', '2020-11-16', '2020-11-16', '10', '1', 0, 0),
(21, 20, 'pagina focus II', 'pagina focus II cu insert in baza de date si imagini', 'Urgent', 'Done', '2020-11-16', '2020-11-16', '10', '1', 0, 0),
(23, 21, 'verificare focus II oferta', 'adaugare focus II oferte ramase', 'Urgent', 'Done', '2020-11-16', '2020-11-16', '1', '1', 0, 0),
(21, 33, 'catalog oferte pt spania', 'catalog oferte pt spania', 'Urgent', 'Done', '2020-11-16', '2020-11-16', '10', '1', 0, 0),
(21, 23, 'Newsletter bf ES 21.11', 'Newsletter bf ES 21.11', 'Low', 'Done', '2020-11-16', '2020-11-21', '10', '1', 0, 0),
(21, 24, 'buton whatsapp', 'afisare buton whatsapp in tema de bf', 'Urgent', 'Done', '2020-11-16', '2020-11-16', '10', '1', 0, 0),
(21, 25, 'traduceri pentru newsletter', 'traduceri pentru newsletter', 'Medium', 'Done', '2020-11-16', '2020-11-21', '1', '10', 0, 0),
(20, 26, 'counter pagina black-friday', 'counter pagina black-friday', 'Urgent', 'Done', '2020-11-16', '2020-11-16', '12', '1', 0, 0),
(21, 27, 'inc/news', 'news cu bannere si include in calltoaction-product', 'Medium', 'Done', '2020-11-16', '2020-11-16', '10', '1', 0, 0),
(21, 28, 'tema black-friday css', 'tema black-friday css', 'Medium', 'Done', '2020-11-16', '2020-11-17', '10', '1', 0, 0),
(19, 29, 'tema black-friday css', 'tema black-friday css', 'Medium', 'Done', '2020-11-16', '2020-11-19', '11', '1', 0, 0),
(24, 30, 'de scos elemente de black-friday de pe site', 'de scos elemente de black-friday de pe site', 'Low', 'Done', '2020-11-16', '2020-11-16', '1', '1', 0, 0),
(21, 31, 'poza 7', 'focus2', 'Urgent', 'Done', '2020-11-16', '2020-11-16', '10', '1', 0, 0),
(21, 32, 'oferta cu focus2', 'oferta cu focus2', 'Low', 'Done', '2020-11-16', '2020-11-16', '10', '1', 0, 0),
(34, 65, 'Actualizare sitemaps', 'Sitemaps pe toate site-urile', 'Medium', 'Done', '2021-01-11', '2021-01-31', '1', '1', 0, 0),
(32, 51, 'BF newsletter', 'BF newsletter', 'Medium', 'Done', '2020-11-24', '2020-11-27', '15', '1', 0, 0),
(23, 36, '+slidere,+news,-photos', 'slidere pe site-uri + news pe home page + scos photos', 'Urgent', 'Done', '2020-11-17', '2020-11-17', '1', '1', 0, 0),
(26, 37, 'fisier css bf', 'tema bf pe NL', 'Urgent', 'Done', '2020-11-17', '2020-11-17', '13', '1', 0, 0),
(27, 38, 'blackfriday theme', 'css', 'Medium', 'Done', '2020-11-18', '2020-11-18', '14', '1', 0, 0),
(22, 39, 'blackfriday theme', 'css', 'Medium', 'Done', '2020-11-18', '2020-11-18', '13', '1', 0, 0),
(23, 40, 'actualizare js bf', 'actualizare cu data', 'Low', 'Done', '2020-11-18', '2020-11-19', '1', '1', 0, 0),
(31, 54, 'BF oferta', 'BF oferta', 'Medium', 'Done', '2020-11-24', '2020-11-27', '16', '1', 0, 0),
(26, 42, 'pagina blackfriday', 'bf2020', 'Urgent', 'Done', '2020-11-18', '2020-11-18', '13', '1', 0, 0),
(27, 43, 'conectare assets cu site', 'tema bf', 'Low', 'Done', '2020-11-18', '2020-11-18', '14', '1', 0, 0),
(21, 44, 'Timer pagina bf', 'Adaugare headings flipperAbove/Over', 'Medium', 'Done', '2020-11-21', '2020-11-26', '10', '1', 0, 0),
(28, 52, 'BF oferta', 'BF oferta', 'Medium', 'Done', '2020-11-24', '2020-11-27', '15', '1', 0, 0),
(35, 67, 'Mutare resurse in assets', 'Mutare resurse comune in assets.komoder.com', 'Medium', 'Working', '2021-03-24', '2021-04-24', '1', '1', 0, 0),
(27, 55, 'BF teaser 2', 'teaser 2', 'Medium', 'Done', '2020-11-24', '2020-11-25', '14', '1', 0, 0),
(33, 57, 'BF newsletter', 'bf newsletter', 'Urgent', 'Done', '2020-11-25', '2020-11-26', '15', '1', 0, 0),
(34, 66, 'Remediere erori', 'Remediere erori in toate site-urile', 'Medium', 'Done', '2021-01-11', '2021-01-31', '1', '1', 0, 0),
(23, 59, 'vectori', 'veectori eps png', 'Urgent', 'Done', '2020-11-25', '2020-11-25', '1', '1', 0, 0),
(27, 60, 'pagina prime', 'pagina prim', 'Urgent', 'Done', '2020-11-25', '2020-11-25', '14', '1', 0, 0),
(22, 61, 'pagina prime com', 'pagina prime com', 'Urgent', 'Done', '2020-11-25', '2020-11-26', '13', '1', 0, 0),
(33, 62, 'prime co.uk', 'prime co.uk', 'Urgent', 'Done', '2020-11-25', '2020-11-26', '15', '1', 0, 0),
(22, 63, 'BF newsletter', 'bf newsletter', 'Urgent', 'Done', '2020-11-26', '2020-11-26', '13', '1', 0, 0),
(27, 64, 'BF newsletter', 'bf newsletter', 'Urgent', 'Done', '2020-11-26', '2020-11-26', '14', '1', 0, 0),
(35, 68, 'Komoder.de', 'Terminare site komoder.de', 'Urgent', 'Done', '2021-01-11', '2021-01-15', '1', '1', 0, 0),
(23, 77, 'Books', 'Learning PHP, MySQL & JavaScript, 6th Edition Robin Nixon 2021<br>\r\nPHP, MySQL, & JavaScript All-in-One For Dummies 2018 Richard Blum<br>\r\nSamsTeachYourself PHP, MySQL & JavaScript: All in One, 6th Edition Julie Meloni 2017<br>\r\nMastering The Faster Web with PHP, MySQL, and JavaScript Andrew Caya 2018<br>\r\nBeginning PHP and MySQL: From Novice to Professional Frank Kromann 2018<br>\r\nPHP and MySQLÂŽ Web Development, Fifth Edition Luke Welling Laura Thomson 2016<br>\r\nPHP & MySQL: Novice to Ninja, 6th Edition Tom Butler Kevin Yank 2017<br>\r\nLearn PHP 8: Using MySQL, JavaScript, CSS3, and HTML5 Steve Prettyman 2020<br>\r\nEffortless E-Commerce with PHP and MySQL, Second Edition New Rider 2013<br>\r\nPHP and MySQL Recipes: A Problem-Solution Approach, Second Edition Frank Kromann 2016<br>\r\nPHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide, Fourth Edition Peachpit Press 2011 <br>\r\nPHP and MySQL Web Development: A Beginnerâs Guide Marty Matthews 2015<br>\r\nHead First PHP & MySQL Lynn Beighley Michael Morrison 2008<br>\r\nPHP and MySQL Doug Bierer Infinite Skills 2012 video<br>\r\nExpert PHP and MySQL: Application Design and Development Apress 2013<br>\r\nExpert PHP and MySQL Wrox 2010', 'Low', 'Working', '2021-04-04', '2022-12-04', '1', '1', 0, 0),
(28, 76, 'link-uri poze produse', 'assets list main', 'Urgent', 'Done', '2021-03-20', '2021-03-26', '1', '1', 0, 0),
(35, 71, 'PRIME webflow', 'De terminat site-ul pentru PRIME si de adaugat content-ul', 'Urgent', 'Working', '2021-03-24', '2021-04-24', '1', '1', 0, 0),
(35, 72, 'Komoder.bg SEO', 'Articole komoder.bg si task-uri SEO', 'Urgent', 'Done', '2021-01-11', '2021-01-15', '1', '1', 0, 0),
(35, 73, 'Task Manager', 'De imbunatatit<br>\r\n\r\n-adaugare filtru dupa coloane<br>\r\n-sortare in ordine alfabetica<br>\r\n-sortare dupa coloane<br>\r\n-duplicare task<br>\r\n-sistem login<br>\r\n-imbunatatire css/tema<br>\r\n-adaugare javascript effects<br>\r\n-adaugare enter-uri/formatare in task description<br>\r\n-adaugare checkbox-uri in task description<br>\r\n-adaugare sub-tasks', 'Medium', 'Working', '2021-01-11', '2021-06-11', '1', '1', 0, 0),
(35, 74, 'adrianagoilav.com', 'adrianagoilav.com', 'Urgent', 'Working', '2021-03-24', '2021-05-28', '15', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_department` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_department`) VALUES
(1, 'Webmaster', 'Web'),
(12, 'Daniele', 'komoder.it'),
(11, 'Silviya', 'komoder.bg'),
(10, 'Alejandro', 'komoder.es'),
(15, 'Alexandre', 'komoder.fr\r\n'),
(13, 'Hans', 'komoder.nl'),
(14, 'Elod', 'komoder.hu'),
(16, 'Stefan', 'Komoder.at');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lists`
--
ALTER TABLE `tbl_lists`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_lists`
--
ALTER TABLE `tbl_lists`
  MODIFY `list_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  MODIFY `task_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
