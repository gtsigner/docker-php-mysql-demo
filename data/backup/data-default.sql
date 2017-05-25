# Host: localhost  (Version: 5.5.53)
# Date: 2017-05-25 12:58:49
# Generator: MySQL-Front 5.3  (Build 4.234)



#
# Structure for table "data"
#

DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名字',
  `age` int(11) DEFAULT NULL COMMENT '年龄',
  `email` varchar(100) DEFAULT NULL COMMENT '电子邮件',
  `tel` char(11) DEFAULT NULL COMMENT '电话号码',
  `region` varchar(50) DEFAULT NULL COMMENT '地区',
  `money` varchar(50) DEFAULT NULL COMMENT '输入2',
  `num` varchar(50) DEFAULT NULL COMMENT '输入3',
  `year` varchar(50) DEFAULT NULL COMMENT '输入4',
  `note` varchar(255) DEFAULT NULL COMMENT '内容',
  `create_time` INT(10) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "data"
#

/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT INTO `data` VALUES (39,'dd',30,'wqdqw','15156','20','0~100','1~5','3','dqwd'),(40,'dasd',30,'Dqwd','213','10','101~300','5~10','3','dqwd'),(41,'dwqd',30,'Dqwd','123','20','101~300','1~5','3','dwqd');
/*!40000 ALTER TABLE `data` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL COMMENT '登录帐号',
  `password` varchar(255) DEFAULT NULL COMMENT '登录密码',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin!@3');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
