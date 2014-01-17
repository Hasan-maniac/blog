-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2013 at 08:08 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_category_id` int(10) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `text`, `date`) VALUES
(1, 1, 3, 'I think at the current moment Bangladesh is passing its horrible moment. This can no longer be tolerated. Govt is reluctant at this situation. They should take necessary steps.', '28-12-2011'),
(2, 1, 7, 'I agree with u. this is a chaos going on in the whole country.  we dont think govt taking this as seriously as it should be taken', '01-01-2012'),
(3, 4, 7, 'nice post', '21-04-2013'),
(4, 5, 3, 'Thank u very much for your nice post', '5-4-2013'),
(5, 12, 7, 'delete comment', '29-12-2011'),
(8, 4, 10, 'Can you please give a guideline what is the first thing to do in order to get the visa ?', '22-04-2013');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `like_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `comment_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`like_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `post_id`, `comment_id`, `user_id`) VALUES
(1, 1, 0, 3),
(2, 2, 0, 3),
(5, 3, 0, 6),
(6, 2, 0, 6),
(7, 3, 0, 7),
(8, 4, 0, 7),
(9, 4, 0, 7),
(10, 4, 0, 7),
(11, 4, 0, 7),
(12, 4, 0, 7),
(13, 4, 0, 7),
(14, 4, 0, 7),
(15, 4, 0, 7),
(16, 4, 0, 7),
(17, 4, 0, 7),
(18, 4, 0, 7),
(19, 4, 0, 7),
(20, 4, 0, 7),
(21, 4, 0, 7),
(22, 4, 0, 7),
(23, 4, 0, 7),
(24, 4, 0, 7),
(25, 4, 0, 7),
(26, 4, 0, 7),
(27, 4, 0, 7),
(28, 4, 0, 7),
(29, 4, 0, 7),
(31, 4, 0, 7),
(32, 4, 0, 7),
(33, 2, 0, 7),
(34, 6, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `user_name` varchar(255) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `rating` tinyint(5) NOT NULL,
  `date` varchar(10) NOT NULL,
  `views` int(10) NOT NULL,
  `likes` int(10) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `title`, `text`, `rating`, `date`, `views`, `likes`) VALUES
(1, 7, 'Current situation of Bangladesh', ' Hifazat-e Islam has called for a nationwide daylong general strike for Monday protesting against alleged government obstruction to their long march.  The call came during Saturday’s rally in Dhaka’s Motijheel.  The announcement on Monday’s strike was mad', 10, '29-12-2011', 238, 1),
(4, 3, 'Higher Education in U.S.A', 'Higher education in the United States includes a variety of institutions of higher education. Strong research and funding have helped make United States colleges and universities among the world''s most prestigious, making them particularly attractive to international students, professors and researchers in the pursuit of academic excellence.[1] According to the Shanghai Jiao Tong University''s Academic Ranking of World Universities, more than 30 of the highest-ranked 45 institutions are in the United States (as measured by awards and research output).[2] Public universities, private universities, liberal arts colleges, and community colleges all have a significant role in higher education in the United States. The United States has a total of 4,495 Title IV-eligible, degree-granting institutions: 2,774 4-year institutions and 1,721 2-year institutions.[3] As of 2010, the US had 20.3 million students in higher education, roughly 5.7% of the total population.[4] About 14.6 million of these students were enrolled full-time.[5] The 2006 American Community Survey conducted by the United States Census Bureau found that 19.5 percent of the population had attended college but had no degree, 7.4 percent held an associate''s degree, 17.1 percent held a bachelor''s degree, and 9.9 percent held a graduate or professional degree. Only a small gender gap was present: 27 percent of the overall population held a bachelor''s degree or higher, with a slightly larger percentage of men (27.9 percent) than women (26.2 percent).[6] However, despite increasing economic incentives for people to obtain college degrees, the percentage of people graduating from high school and college has been declining as of 2008.[7] 70.1% of 2009 high school graduates enrolled in college. Historically, 76% of those who graduate in the lower 40% of their high school class will not obtain a college degree.[8]', 12, '', 47, 5),
(5, 6, 'How technology help us in our daily aspects', 'We cannot escape from the absolute need of technology in our daily life. We are so dependent on technology that we cannot do without them. Starting from computers to keeping fit, we require technology at every step. Technology helps us to keep in touch with people who are away from us. We use the telephones and computers to talk to them and even see them. Our daily office work is also technology based. No longer do people use the pen and paper to complete their work. We maintain our health by going to the gyms. There are machines in the gym which help us reduce our weight and keep fit. The use of technology has made our life comfortable. We cannot think of a life sans technology. We get to keep a lot of information in a small device and use it when we like. Cars have also become better with the use of technology. Thus technology is undeniably an important of our life.', 10, '28-12-2011', 127, 1),
(6, 7, 'DO GRADES OR CGPA REALLY MATTER FOR ENGINEERING STUDENTS?', 'Do grades or CGPA really matter for engineering students? How much CGPA on average is good or required for a better job in future? These are different and mostly asked questions by engineering students about grades or CGPA. It goes a common saying during the college life that those getting higher GPA’s are deemed to get the best jobs right after graduation and with Steve Job’s statement of ‘Be nice to nerds, you might end up working for one’ adds more spark to the argument.   Study, study and just study is what everyone is told of during the whole tenure of engineering degree to the students. Many universities cut off their student’s social activities, intra university groups and sports, just for the fact that they do not deviate from the path they are supposed to adopt. There remains no doubt that studies remain an integral part of a student’s curriculum, with engineering being a filed requiring high level of observance and a purview requiring students to think out of the box for solution of complex problems. Education makes a person well versed with knowledge of subject, academics, formative effect of mind and physical ability of an individual.   However, Engineering clearly needs knowledge beyond the scope of books to a great extent, which a four-sided classroom may not be able to provide. While studying this domain, one has to have a horizon of how things happen to be in real world and simulation of the effect can be observed clearly with social activities happening around them. Education undoubtedly makes a person well versed with knowledge of subject, academics, formative effect of mind and physical ability of an individual.   Do grades or CGPA really matter for engineering students? It depends on what you want to do in future after completing your engineering degree. Do you want to do a job or do you wish to continue education? It continues to be a common myth over the years that higher the GPA you get out of college, a higher salary job will be looking your way. The statement is clearly misleading and should not be made a rule of thumb under any circumstance whatsoever. A good GPA does come in as criteria for initial screening at interviews where the recruitment managers get a number of resume from where they need to choose student to avoid the entry of a slouch personnel but there a number of other factors that constitute to your selection. Even if you are not good at scoring high Grade Point Average, and consider yourself to be a practical person fully equipped with pragmatic skills and an attractive work/internship experience, you can knock down your opponent and overshadow his chance of clinching the gold. GPA does come into account with a large extent while an undergraduate student applies for high education. Due to the ample amount of applications that graduate universities receive throughout the year from around the globe, usually a GPA cut off is made and a threshold is marked as an entry criteria. Even that could be beaten with the conditions of extracurricular excellence being at the top notch level.  A large number of industries do not bother to look at a student’s GPA or even their transcripts if the candidate is able to clear their assessment skills test and screening interview. With that being said, it is prudent to note that your educational institute’s label does count into account if your GPA score is not high along with projects and coursework assignments. It must be noted down that regardless of the job market, securing a GPA and concentrating on studies should always be a top priority for every student irrespective of what field he chose to adopt.', 0, '09-03-2012', 25, 1),
(12, 10, 'Hello world !!!', 'A "Hello World" program has become the traditional first program that many people learn. In general, it is simple enough so that people who have no experience with computer programming can easily understand it, especially with the guidance of a teacher or a written guide. Using this simple program as a basis, computer science principles or elements of a specific programming language can be explained to novice programmers. Experienced programmers learning new languages can also gain a lot of information about a given language''s syntax and structure from a hello world program.\r\nIn addition, hello world can be a useful sanity test to make sure that a language''s compiler, development environment, and run-time environment are correctly installed. Configuring a complete programming toolchain from scratch to the point where even trivial programs can be compiled and run can involve substantial amounts of work. For this reason, a simple program is used first when testing a new tool chain.\r\n"Hello world" is also used by computer hackers as a proof of concept that arbitrary code can be executed through an exploit where the system designers did not intend code to be executed—for example, on Sony''s PlayStation Portable. This is the first step in using homemade content ("home brew") on such a device.', 0, '22-04-2013', 32, 0),
(11, 8, 'Pressure in Mist', 'Due to continuous hortal we have to do classes in holidays as well as in weekdays. It is very sad.its a long time students are unable to visit their home as Mist is always open.', 0, '22-04-2013', 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts-categories`
--

CREATE TABLE IF NOT EXISTS `posts-categories` (
  `post_id` int(10) NOT NULL,
  `catagory_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts-tags`
--

CREATE TABLE IF NOT EXISTS `posts-tags` (
  `post_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int(10) NOT NULL AUTO_INCREMENT,
  `tag_slug` varchar(255) NOT NULL,
  `tag_name` varchar(30) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `nick_name` varchar(15) NOT NULL,
  `gender` tinyint(1) NOT NULL COMMENT 'male:0 female:1',
  `date_of_birth` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `full_name`, `nick_name`, `gender`, `date_of_birth`, `address`, `city`, `country`, `reg_date`) VALUES
(2, 'asif_rahaman@yahoo.com', '23456', 'Asif-Ur-Rahaman', 'Asif', 0, '1992-01-07 00:0', 'Khilgaon', 'Dhaka', 'Bangladesh', '0000-00-00 00:00:00'),
(3, 'tahsin@myblog.com', '12345', 'Tahsin Sultana', 'Raisa', 1, '1991-08-01', 'Dhanmondi', 'Dhaka', 'Bangladesh', '0000-00-00 00:00:00'),
(4, 'adhorraisa@yahoo.com', '123456', 'tahsin', 'raisa', 0, '0000-00-00 00:0', 'Dhanmondi', 'Dhaka', '', '0000-00-00 00:00:00'),
(8, 'sara@yahoo.com', '12345', 'Sara Binte Zinnat', 'sara', 1, '0000-00-00 00:0', 'Mirpur', 'Dhaka', 'Bangladesh', '0000-00-00 00:00:00'),
(6, 'brinti28@yahoo.com', '11111', 'sumaia', 'brinti', 0, '0000-00-00 00:0', 'tangi', 'Dhaka', '', '0000-00-00 00:00:00'),
(7, 'admin@myblog.com', '12345', 'Abdullah Al Noman', 'Noman', 0, '0000-00-00 00:0', 'Lalbagh', 'Dhaka', 'Bangladesh', '0000-00-00 00:00:00'),
(10, 'nazmul@yahoo.com', '12345', 'Nazmul', 'Nazmul', 0, '1-1-1950', 'Mirpur', 'Dhaka', 'Bangladesh', '0000-00-00 00:00:00'),
(12, 'tabassum@yahooo.com', '12345', 'Tabassum', 'Tabassum', 1, '1-1-1950', 'Mirpur', 'Dhaka', 'Bangladesh', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
