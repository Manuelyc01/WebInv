# Migración de la base de datos MySQL de WordPress
#
# Generado: Wednesday 17. April 2019 23:19 UTC
# Hostname: localhost
# Base de datos: `screativa_blogho`
# URL: //maxlashes.screativa.com/blog
# Path: /home/screativa/webapps/bloghonda
# Tables: wp_commentmeta, wp_comments, wp_duplicator_packages, wp_links, wp_options, wp_postmeta, wp_posts, wp_term_relationships, wp_term_taxonomy, wp_termmeta, wp_terms, wp_usermeta, wp_users
# Table Prefix: wp_
# Post Types: revision, attachment, nav_menu_item, nectar_slider, page, post, wpcf7_contact_form
# Protocol: http
# Multisite: false
# Subsite Export: false
# --------------------------------------------------------

/*!40101 SET NAMES utf8 */;

SET sql_mode='NO_AUTO_VALUE_ON_ZERO';



#
# Eliminar cualquier tabla existente `wp_commentmeta`
#

DROP TABLE IF EXISTS `wp_commentmeta`;


#
# Estructura de la tabla de la tabla `wp_commentmeta`
#

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


#
# Contenido de la tabla `wp_commentmeta`
#

#
# Fin de los contenidos de datos de la tabla `wp_commentmeta`
# --------------------------------------------------------



#
# Eliminar cualquier tabla existente `wp_comments`
#

DROP TABLE IF EXISTS `wp_comments`;


#
# Estructura de la tabla de la tabla `wp_comments`
#

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


#
# Contenido de la tabla `wp_comments`
#
INSERT INTO `wp_comments` ( `comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(2, 220, 'Phil Martinez', 'themenectar@gmail.com', '', '127.0.0.1', '2017-09-28 22:05:16', '2017-09-28 22:05:16', 'Great post man, keep up the awesome writing!', 0, '1', '', '', 0, 0),
(3, 220, 'Phil Martinez', 'themenectar@gmail.com', '', '127.0.0.1', '2017-09-28 22:05:43', '2017-09-28 22:05:43', 'Couldn\'t agree more. I\'ve read some amazing posts before, but this one surely takes the cake!', 0, '1', '', '', 2, 0),
(4, 5936, 'keo nha cai', 'rafailkw9b@mail.ru', 'http://keo365.com/the-thao', '23.94.146.150', '2018-09-11 18:17:45', '2018-09-11 18:17:45', 'Hello there, I found your site by the use of Google whilst \r\nlooking for a similar matter, your site came up, it seems good.\r\n\r\nI\'ve bookmarked it in my google bookmarks.\r\n\r\nHello there, just turned into alert to your weblog thru \r\nGoogle, and located that it\'s truly informative. I am gonna be careful for brussels.\r\n\r\nI\'ll be grateful if you continue this in future. Lots of people will likely be benefited out \r\nof your writing. Cheers! http://keo365.com/the-thao', 0, '0', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 YaBrowser/18.1.1.839 Yowser/2.5 Safari/537.36', '', 0, 0),
(5, 5936, 'keo nha cai', 'rafailkw9b@mail.ru', 'http://keo365.com/the-thao', '23.94.146.152', '2018-09-11 18:18:00', '2018-09-11 18:18:00', 'Hello there, I found your site by the use \r\nof Google whilst looking for a similar matter, your site came \r\nup, it seems good. I\'ve bookmarked it in my google bookmarks.\r\n\r\nHello there, just turned into alert to your weblog thru Google,\r\nand located that it\'s truly informative. I am gonna be careful for brussels.\r\n\r\nI\'ll be grateful if you continue this in future.\r\nLots of people will likely be benefited out of your writing.\r\nCheers! http://keo365.com/the-thao', 0, '0', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 YaBrowser/18.1.1.839 Yowser/2.5 Safari/537.36', '', 0, 0),
(6, 5936, '188bet', 'leonaymyattd@mail.ru', 'https://42.herber.pl/188bet315548', '107.174.226.149', '2018-09-11 20:45:50', '2018-09-11 20:45:50', 'My family every time say that I am killing my time here at net, except I know I am \r\ngetting experience daily by reading such nice content. https://42.herber.pl/188bet315548', 0, '0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.99', '', 0, 0),
(7, 5936, '188bet', 'leonaymyattd@mail.ru', 'https://42.herber.pl/188bet315548', '107.172.69.29', '2018-09-11 20:46:05', '2018-09-11 20:46:05', 'My family every time say that I am killing \r\nmy time here at net, except I know I am getting experience daily by reading such nice content. https://42.herber.pl/188bet315548', 0, '0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.99', '', 0, 0),
(8, 5936, 'link 188bet', 'ilkhim3942landin@mail.ru', 'http://alifsoundsystem.net/php3/link.php?url=http://www.mbet88vn.com', '107.174.226.162', '2018-09-12 08:42:41', '2018-09-12 08:42:41', 'Hi, its fastidious paragraph concerning media print, \r\nwe all understand media is a impressive source of data. http://alifsoundsystem.net/php3/link.php?url=http://www.mbet88vn.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.2; Win64) AppleWebKit/530.63.10 (KHTML, like Gecko) Chrome/55.0.5138.0866 Safari/532.92 OPR/41.9.4315.9043', '', 0, 0),
(9, 5936, 'link 188bet', 'ilkhim3942landin@mail.ru', 'http://alifsoundsystem.net/php3/link.php?url=http://www.mbet88vn.com', '107.174.226.162', '2018-09-12 08:43:04', '2018-09-12 08:43:04', 'Hi, its fastidious paragraph concerning media print, we all understand media is a impressive source of \r\ndata. http://alifsoundsystem.net/php3/link.php?url=http://www.mbet88vn.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.2; Win64) AppleWebKit/530.63.10 (KHTML, like Gecko) Chrome/55.0.5138.0866 Safari/532.92 OPR/41.9.4315.9043', '', 0, 0),
(10, 5936, 'link 188bet', 'tibtedeevg0@mail.ru', 'http://seclub.org/main/goto/?url=http://www.mbet88vn.com', '66.34.162.25', '2018-09-19 14:48:45', '2018-09-19 14:48:45', 'continuously i used to read smaller articles or reviews which also clear their motive, and that is also happening with this article \r\nwhich I am reading at this time. http://seclub.org/main/goto/?url=http://www.mbet88vn.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36', '', 0, 0),
(11, 5936, 'keo nha cai', 'ildarag439@mail.ru', 'http://cado789.com', '23.92.122.174', '2018-09-19 23:21:51', '2018-09-19 23:21:51', 'hello there and thank you for your information – I have definitely \r\npicked up something new from right here. I did however expertise a few technical points using this web site, as I experienced to reload the web site many times previous to I \r\ncould get it to load properly. I had been wondering if \r\nyour hosting is OK? Not that I am complaining, but sluggish \r\nloading instances times will often affect your placement in google and could damage your high-quality score if advertising and marketing with Adwords.\r\nWell I\'m adding this RSS to my email and could look out for much more of your respective intriguing content.\r\nEnsure that you update this again very soon. http://cado789.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '', 0, 0),
(12, 5936, 'keo nha cai', 'ildarag439@mail.ru', 'http://cado789.com', '107.172.69.29', '2018-09-19 23:22:06', '2018-09-19 23:22:06', 'hello there and thank you for your information – I have definitely picked up something new \r\nfrom right here. I did however expertise a few technical \r\npoints using this web site, as I experienced to reload the web site many times previous to I could \r\nget it to load properly. I had been wondering if your hosting is OK?\r\n\r\nNot that I am complaining, but sluggish loading instances times will often affect your placement in google and could damage your high-quality score if advertising and marketing with Adwords.\r\nWell I\'m adding this RSS to my email and could look out for much more of your respective intriguing content.\r\nEnsure that you update this again very soon. http://cado789.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', '', 0, 0),
(13, 5936, 'l88', 'edwinajager@for.dobunny.com', 'https://918kiss.host/downloads', '186.192.0.62', '2018-09-22 13:19:19', '2018-09-22 13:19:19', 'One of the keys is to do proper market and \r\nkeyword research. But that was then.) And I absorbed $900 thirty day period.\r\nLearning how to earn money with Squidoo is fairly simple and quite painless. https://918kiss.host/downloads', 0, '0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.17 Safari/537.36', '', 0, 0),
(14, 5936, 'l88', 'edwinajager@for.dobunny.com', 'https://918kiss.host/downloads', '186.192.0.62', '2018-09-22 13:19:38', '2018-09-22 13:19:38', 'One of the keys is to do proper market and keyword research.\r\nBut that was then.) And I absorbed $900 thirty day period.\r\nLearning how to earn money with Squidoo is fairly \r\nsimple and quite painless. https://918kiss.host/downloads', 0, '0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.17 Safari/537.36', '', 0, 0),
(15, 5936, 'kèo nhà cái', 'petulahcolinc@mail.ru', 'http://cado789.com', '198.46.208.138', '2018-09-23 03:23:16', '2018-09-23 03:23:16', 'Good blog you have got here.. It\'s hard to find quality writing like yours nowadays.\r\nI honestly appreciate people like you! Take care!! http://cado789.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', 0, 0),
(16, 5936, 'kèo nhà cái', 'petulahcolinc@mail.ru', 'http://cado789.com', '198.46.208.138', '2018-09-23 03:23:38', '2018-09-23 03:23:38', 'Good blog you have got here.. It\'s hard to find \r\nquality writing like yours nowadays. I honestly appreciate people like you!\r\nTake care!! http://cado789.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', '', 0, 0),
(17, 5936, 'link 188bet', 'khidzhiranvyzx7@mail.ru', 'http://redirect.namerock.com/redirect.asp?url=http://www.mbet88vn.com', '104.223.42.24', '2018-10-12 22:59:53', '2018-10-12 22:59:53', 'Howdy! This is kind of off topic but I need some guidance from an established blog.\r\n\r\nIs it hard to set up your own blog? I\'m not very techincal but I can figure things out pretty quick.\r\n\r\nI\'m thinking about setting up my own but I\'m not \r\nsure where to begin. Do you have any tips or \r\nsuggestions?  Many thanks http://redirect.namerock.com/redirect.asp?url=http://www.mbet88vn.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '', 0, 0),
(18, 5936, 'link 188bet', 'khidzhiranvyzx7@mail.ru', 'http://redirect.namerock.com/redirect.asp?url=http://www.mbet88vn.com', '104.223.42.24', '2018-10-12 23:00:16', '2018-10-12 23:00:16', 'Howdy! This is kind of off topic but I need \r\nsome guidance from an established blog. Is it hard to set up your \r\nown blog? I\'m not very techincal but I can figure things out pretty quick.\r\n\r\nI\'m thinking about setting up my own but I\'m not sure where to begin. \r\nDo you have any tips or suggestions?  Many thanks http://redirect.namerock.com/redirect.asp?url=http://www.mbet88vn.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '', 0, 0),
(19, 5936, 'kèo nhà cái', 'faigkhulapm0@mail.ru', 'http://cado789.com', '192.3.114.145', '2018-10-12 23:24:11', '2018-10-12 23:24:11', 'Great post. I was checking constantly this blog and I\'m impressed!\r\nExtremely helpful info particularly the last part :\r\n) I care for such info a lot. I was seeking this particular info for a very long time.\r\nThank you and best of luck. http://cado789.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3416.0 Safari/537.36', '', 0, 0),
(20, 5936, 'kèo nhà cái', 'faigkhulapm0@mail.ru', 'http://cado789.com', '45.61.164.160', '2018-10-12 23:24:26', '2018-10-12 23:24:26', 'Great post. I was checking constantly this blog and I\'m impressed!\r\n\r\nExtremely helpful info particularly the last part :) I care for such info a lot.\r\nI was seeking this particular info for a very long time. Thank you and best of luck. http://cado789.com', 0, '0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3416.0 Safari/537.36', '', 0, 0),
(21, 5936, 'online poker y8', 'EdisonWoodbury13@desk.ragnortheblue.com', 'http://agpedia2.org/__media__/js/netsoltrademark.php?d=scr888.group%2Flive-casino-games%2F2485-3win8', '179.125.97.151', '2018-10-13 02:47:20', '2018-10-13 02:47:20', 'When they return towards training area have them visualize themselves performing an easy skill just like a cartwheel.\r\nJust set aside time within your day compose and start \r\nputting anything down that comes to mind. http://agpedia2.org/__media__/js/netsoltrademark.php?d=scr888.group%2Flive-casino-games%2F2485-3win8', 0, '0', 'Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0', '', 0, 0),
(22, 5936, 'online poker y8', 'EdisonWoodbury13@desk.ragnortheblue.com', 'http://agpedia2.org/__media__/js/netsoltrademark.php?d=scr888.group%2Flive-casino-games%2F2485-3win8', '179.125.97.151', '2018-10-13 02:47:42', '2018-10-13 02:47:42', 'When they return towards training area have them visualize themselves performing an easy skill just \r\nlike a cartwheel. Just set aside time within your day compose and start putting anything down that comes to \r\nmind. http://agpedia2.org/__media__/js/netsoltrademark.php?d=scr888.group%2Flive-casino-games%2F2485-3win8', 0, '0', 'Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0', '', 0, 0),
(23, 5936, 'ace333 download', 'SeleneBlankenship73@cicie.club', 'http://3win8.city/index.php/other-games/ace333', '82.204.141.94', '2019-02-12 17:22:06', '2019-02-12 17:22:06', 'In this principle, look to recognize your fears, acknowledge them subsequently move through them.\r\n\r\nA person using a low self esteem generally has a poor self image. http://3win8.city/index.php/other-games/ace333', 0, '0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:61.0) Gecko/20100101 Firefox/61.0', '', 0, 0),
(24, 5936, 'ace333 download', 'SeleneBlankenship73@cicie.club', 'http://3win8.city/index.php/other-games/ace333', '82.204.141.94', '2019-02-12 17:22:27', '2019-02-12 17:22:27', 'In this principle, look to recognize your fears, acknowledge them subsequently move through them.\r\nA person using a low self esteem generally has a poor self image. http://3win8.city/index.php/other-games/ace333', 0, '0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:61.0) Gecko/20100101 Firefox/61.0', '', 0, 0),
(25, 5936, 'can a cat live 22 years', 'Fernando-Metcalfe64@ledet38.sfxmailbox.com', 'http://www.painfulalerts.com/__media__/js/netsoltrademark.php?d=scr888.group%2Fother-games-download%2F2500-download-live22&amp;popup=1', '45.117.77.41', '2019-02-13 08:16:06', '2019-02-13 08:16:06', 'There most stylish novels that are no longer in publication. \r\nWhat will be the best option for you to take a wreck?\r\nLet\'s face it. we\'ve all read books just after which went \r\nto determine the movie versions. http://www.painfulalerts.com/__media__/js/netsoltrademark.php?d=scr888.group%2Fother-games-download%2F2500-download-live22&amp;popup=1', 0, '0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36', '', 0, 0),
(26, 5936, 'can a cat live 22 years', 'Fernando-Metcalfe64@ledet38.sfxmailbox.com', 'http://www.painfulalerts.com/__media__/js/netsoltrademark.php?d=scr888.group%2Fother-games-download%2F2500-download-live22&amp;popup=1', '45.117.77.41', '2019-02-13 08:16:45', '2019-02-13 08:16:45', 'There most stylish novels that are no longer in publication. What will be the best \r\noption for you to take a wreck? Let\'s face it. we\'ve all read books just after which went to determine the movie versions. http://www.painfulalerts.com/__media__/js/netsoltrademark.php?d=scr888.group%2Fother-games-download%2F2500-download-live22&amp;popup=1', 0, '0', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36', '', 0, 0) ;

#
# Fin de los contenidos de datos de la tabla `wp_comments`
# --------------------------------------------------------



#
# Eliminar cualquier tabla existente `wp_duplicator_packages`
#

DROP TABLE IF EXISTS `wp_duplicator_packages`;


#
# Estructura de la tabla de la tabla `wp_duplicator_packages`
#

CREATE TABLE `wp_duplicator_packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `owner` varchar(60) NOT NULL,
  `package` mediumblob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hash` (`hash`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;


#
# Contenido de la tabla `wp_duplicator_packages`
#
