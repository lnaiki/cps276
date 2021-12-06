DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `city` varchar(250) NOT NULL DEFAULT '',
  `state` varchar(250) NOT NULL DEFAULT '',
  `phone` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `birthday` varchar(250) NOT NULL DEFAULT '',
  `contact` varchar(250) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

