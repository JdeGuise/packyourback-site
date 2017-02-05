# Dump of table blog_members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_members`;

CREATE TABLE `blog_members` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `blog_members` WRITE;
/*!40000 ALTER TABLE `blog_members` DISABLE KEYS */;

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`)
VALUES
  (1,'jdeguise','packyourbackmi_123','john.r.deguise@gmail.com');

/*!40000 ALTER TABLE `blog_members` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table blog_posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_posts`;

CREATE TABLE `blog_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`)
VALUES
  (1,'Pack Your Back at CMU','<p>Pack Your Back is a nonprofit organization that was started in a dorm room in Calkins Hall. It’s a few students at CMU who decided that they wanted to be hands on, they wanted to be proactive in helping the younger generation succeed. With that, Pack Your Back was born.</p><p>In January 2016, Galen Miller was volunteering in Flint with his fraternity. As they continued to deliver water and other supplies to the residents suffering from the water crisis, Miller noticed that as the major media outlets began to leave, so did the help.</p><p>That night after the event in Flint, Miller got together a group of friends in his dorm room, and they discussed how they could continue to give back to the community in Flint. They settled on collecting and donating school supplies, as they realized that the water crisis had a massive impact on the development of young school-aged children.</p><p>A group of CMU students and alumni started Pack Your Back in March 2016 and were officially approved as a 501(c)(3) nonprofit in May. They set to work collecting funds and school supplies to donate to the children of Flint and beyond.</p><p>The organization plans to extend to the rest of the state and even the country in the following months and years and already has an expansion plan in place.</p>','2013-05-29 00:00:00'),

/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;
