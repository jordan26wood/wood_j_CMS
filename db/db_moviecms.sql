-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2018 at 03:41 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moviecms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

DROP TABLE IF EXISTS `tbl_genre`;
CREATE TABLE IF NOT EXISTS `tbl_genre` (
  `genre_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(100) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'action'),
(2, 'comedy'),
(3, 'drama'),
(4, 'thriller'),
(5, 'animation'),
(6, 'family'),
(7, 'romance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(50) NOT NULL,
  `login_pass` varchar(50) NOT NULL,
  `login_name` varchar(60) NOT NULL,
  `login_ip` varchar(50) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `login_user`, `login_pass`, `login_name`, `login_ip`) VALUES
(1, 'jordan', 'summer', '', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

DROP TABLE IF EXISTS `tbl_movies`;
CREATE TABLE IF NOT EXISTS `tbl_movies` (
  `movies_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `movies_title` varchar(100) NOT NULL,
  `movies_poster` varchar(150) NOT NULL,
  `movies_desc` varchar(1000) NOT NULL,
  `movies_rating` int(20) NOT NULL,
  `movies_runtime` varchar(20) NOT NULL,
  `movies_year` varchar(20) NOT NULL,
  `movies_trailer` varchar(200) NOT NULL DEFAULT '.mp4',
  PRIMARY KEY (`movies_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_title`, `movies_poster`, `movies_desc`, `movies_rating`, `movies_runtime`, `movies_year`, `movies_trailer`) VALUES
(1, '50/50', '50_50.jpg', 'Inspired by a true story, a comedy centered on a 27-year-old guy who learns of his cancer diagnosis, and his subsequent struggle to beat the disease.', 8, '1h 40min', '2011', '50.50.mp4'),
(2, 'Arrival', 'arrival.jpg', 'A linguist is recruited by the military to communicate with alien lifeforms after twelve mysterious spacecrafts land around the world.', 8, '1h 56min', '2016', 'arrival.mp4'),
(3, 'Avatar', 'avatar.jpg', 'A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 7, '2h 10min', '2009', 'avatar.mp4'),
(4, 'Baby Driver', 'babydriver.jpg', 'After being coerced into working for a crime boss, a young getaway driver finds himself taking part in a heist doomed to fail.', 10, '1h 52min', '2017', 'baby.mp4'),
(5, 'Beauty and the Beast', 'beauty.jpg', 'An adaptation of the fairy tale about a monstrous-looking prince and a young woman who fall in love.', 7, '1h 40min', '2017', 'beast.mp4'),
(6, 'Black Panther', 'blackpanther', 'T\'Challa, the King of Wakanda, rises to the throne in the isolated, technologically advanced African nation, but his claim is challenged by a vengeful outsider who was a childhood victim of T\'Challa\'s father\'s mistake.', 9, '2h 14min', '2018', 'black.mp4'),
(7, 'Blockers', 'blockers.jpg', 'Three parents try to stop their daughters from having sex on Prom night.', 8, '1h 35min', '2018', 'block.mp4'),
(8, 'Deadpool', 'Deadpool.jpg', 'A fast-talking mercenary with a morbid sense of humor is subjected to a rogue experiment that leaves him with accelerated healing powers and a quest for revenge.', 9, '1h 48min', '2016', 'dead.mp4'),
(9, 'The Emoji Movie', 'emoji.jpg', 'Gene, a multi-expressional emoji, sets out on a journey to become a normal emoji.', 9, '1h 40min', '2017', 'emoji.mp4'),
(10, 'Fight Club', 'fightclub.jpg', 'An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soapmaker, forming an underground fight club that evolves into something much, much more.', 9, '1h 55min', '1999', 'fight.mp4'),
(11, 'Free Willy', 'freewilly.jpg', 'When a boy learns that a beloved killer whale is to be killed by the aquarium owners, the boy risks everything to free the whale.', 10, '1h 33min', '1993', 'willy.mp4'),
(12, 'Ghostbusters', 'ghostbusters.jpg', 'Following a ghost invasion of Manhattan, paranormal enthusiasts Erin Gilbert and Abby Yates, nuclear engineer Jillian Holtzmann, and subway worker Patty Tolan band together to stop the otherworldly threat.', 6, '1h 25min', '2016', 'ghost.mp4'),
(13, 'The Lego Movie', 'legomovie.jpg', 'An ordinary LEGO construction worker, thought to be the prophesied as \"special\", is recruited to join a quest to stop an evil tyrant from gluing the LEGO universe into eternal stasis.', 8, '1h 43min', '2014', 'lego.mp4'),
(14, 'Logan ', 'logan.jpg', 'In the near future, a weary Logan cares for an ailing Professor X, somewhere on the Mexican border. However, Logan\'s attempts to hide from the world, and his legacy, are upended when a young mutant arrives, pursued by dark forces.', 9, '2h 3min', '2017', 'logan.mp4'),
(15, 'Moonlight', 'moonlight.jpg', 'A chronicle of the childhood, adolescence and burgeoning adulthood of a young, African-American, gay man growing up in a rough neighborhood of Miami.', 8, '1h 51min', '2016', 'moon.mp4'),
(16, 'The Revenant', 'revenant.jpg', 'A frontiersman on a fur trading expedition in the 1820s fights for survival after being mauled by a bear and left for dead by members of his own hunting team.', 7, '2h 30min', '2015', 'rev.mp4'),
(17, 'School Of Rock ', 'schoolrock.jpg', 'After being kicked out of a rock band, Dewey Finn becomes a substitute teacher of a strict elementary private school, only to try and turn it into a rock band.', 11, '1h 48min', '2003', 'school.mp4'),
(18, 'Shrek 2', 'shrek.jpg', 'Princess Fiona\'s parents invite her and Shrek to dinner to celebrate her marriage. If only they knew the newlyweds were both ogres.', 9, '1h 33min ', '2004', 'shrek.mp4'),
(19, 'Spider-Man Homecoming', 'spider-Man.jpg', '\r\nPeter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.', 10, '1h 50min', '2017', 'spider.mp4'),
(20, 'Step Brothers ', 'stepbro.jpg', 'Two aimless middle-aged losers still living at home are forced against their will to become roommates when their parents marry.', 7, '1h 30min', '2008', 'step.mp4'),
(21, 'Thor: Ragnarok', 'thor.jpg', 'Thor is imprisoned on the planet Sakaar, and must race against time to return to Asgard and stop Ragnarök, the destruction of his world, which is at the hands of the powerful and ruthless villain Hela.', 8, '2h 10min', '2017', 'thor.mp4'),
(22, 'Captain Underpants', 'underpants.jpg', '2 overly imaginative pranksters named George and Harold hypnotize their principal into thinking he\'s a ridiculously enthusiastic, incredibly dimwitted superhero named Captain Underpants.', 6, '1h 29min', '2017', 'under.mp4'),
(23, 'St. Vincent', 'vincent.jpg', 'A young boy whose parents have just divorced finds an unlikely friend and mentor in the misanthropic, bawdy, hedonistic war veteran who lives next door.', 8, '1h 42min', '2014', 'vin.mp4'),
(24, 'Whiplash', 'whiplash.jpg', 'A promising young drummer enrolls at a cut-throat music conservatory where his dreams of greatness are mentored by an instructor who will stop at nothing to realize a student\'s potential.', 8, '1h 50min', '2014', 'whip.mp4'),
(25, 'The Wolf of Wall Street ', 'wolfwall.jpg', 'Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.', 9, '3h', '2013', 'wolf.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies_gen`
--

DROP TABLE IF EXISTS `tbl_movies_gen`;
CREATE TABLE IF NOT EXISTS `tbl_movies_gen` (
  `movies_gen_id` smallint(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movies_id` smallint(10) NOT NULL,
  `genre_id` smallint(10) NOT NULL,
  PRIMARY KEY (`movies_gen_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movies_gen`
--

INSERT INTO `tbl_movies_gen` (`movies_gen_id`, `movies_id`, `genre_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 2, 4),
(4, 2, 1),
(5, 3, 1),
(6, 3, 6),
(7, 4, 1),
(8, 4, 2),
(9, 4, 7),
(10, 5, 7),
(11, 5, 6),
(12, 6, 2),
(13, 6, 1),
(14, 6, 6),
(15, 7, 2),
(16, 8, 7),
(17, 8, 2),
(18, 8, 1),
(19, 9, 5),
(20, 9, 4),
(21, 9, 6),
(22, 10, 3),
(23, 10, 1),
(24, 11, 6),
(25, 11, 7),
(26, 12, 2),
(27, 12, 1),
(28, 12, 6),
(29, 13, 2),
(30, 13, 5),
(31, 13, 6),
(32, 14, 1),
(33, 14, 4),
(34, 15, 7),
(35, 15, 3),
(36, 16, 1),
(37, 16, 3),
(38, 17, 2),
(39, 17, 6),
(40, 18, 7),
(41, 18, 2),
(42, 18, 5),
(43, 18, 6),
(44, 19, 1),
(45, 19, 2),
(46, 19, 6),
(47, 20, 2),
(48, 21, 1),
(49, 21, 2),
(50, 21, 6),
(51, 22, 2),
(52, 22, 5),
(53, 23, 6),
(54, 23, 3),
(55, 24, 3),
(56, 25, 3),
(57, 25, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
