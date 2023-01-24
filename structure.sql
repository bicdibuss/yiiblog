/*
MySQL Backup
Database: yii
Backup Time: 2023-01-24 15:05:20
*/

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `yii`.`coment`;
DROP TABLE IF EXISTS `yii`.`pages`;
DROP TABLE IF EXISTS `yii`.`posts`;
DROP TABLE IF EXISTS `yii`.`users`;
DROP TABLE IF EXISTS `yii`.`cat`;
CREATE TABLE `coment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `txt` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `txt` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `txt` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `cat` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `data` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(11) DEFAULT NULL,
  `pass` varchar(11) DEFAULT NULL,
  `role` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
CREATE TABLE `cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
BEGIN;
LOCK TABLES `yii`.`coment` WRITE;
DELETE FROM `yii`.`coment`;
INSERT INTO `yii`.`coment` (`id`,`post_id`,`txt`,`name`) VALUES (1, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'uzzzzzzzzzzzzzzzz'),(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'uzvir'),(3, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'uzvir'),(4, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'uzvir'),(5, 1, 'tttttttttttttttttttt', 'uzvir'),(6, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 'uzvir2'),(7, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'uzvir3'),(8, 3, 'hgfhgfhgfhgfhgf', 'uzvir'),(9, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 'uzvir'),(10, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uzvir2');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `yii`.`pages` WRITE;
DELETE FROM `yii`.`pages`;
INSERT INTO `yii`.`pages` (`id`,`link`,`description`,`txt`,`img`,`thumb`) VALUES (1, 'lnk', 'desc', 'ttttttttttttt', 'img/img.jpg', 'thumb/img.jpg'),(2, 'lnk', 'desc', 'ttttttttttttt', 'img/img.jpg', 'thumb/img.jpg'),(3, 'lnk', 'desc', 'ttttttttttttt', 'img/img.jpg', 'thumb/img.jpg'),(4, 'lnk', 'desc', 'ttttttttttttt', 'img/img.jpg', 'thumb/img.jpg');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `yii`.`posts` WRITE;
DELETE FROM `yii`.`posts`;
INSERT INTO `yii`.`posts` (`id`,`title`,`description`,`txt`,`img`,`user`,`cat`,`url`,`data`,`name`) VALUES (1, 'post1', 'post1 desc', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu   fugiat nulla pariatur.', '', 'admin', 'cat2', 'link1', '2023-01-16 15:25:37', NULL),(2, 'title2', 'post2 desc', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et\r\n                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\n                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu\r\n                    fugiat nulla pariatur.', '', '', '', '', NULL, NULL),(3, 'title3', 'post3 desc', ' <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et\r\n                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\n                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu\r\n                    fugiat nulla pariatur.</p>', '', 'admin', 'cat1', 'link2', NULL, NULL),(4, 'title4', 'post44 desc', ' <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et\r\n                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\n                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu\r\n                    fugiat nulla pariatur.</p>', '', 'admin', 'cat2', '', NULL, NULL),(5, 'test 1', 'test 1', 'test 1', 'img/1673789927.jpg', 'admin', 'cat2', 'link21111', '2023-01-16 15:25:37', NULL),(6, 'imgpost', 'post1 desc', 'шгкгшкегкгкгкгекгнк', 'img/1673795245.jpg', 'admin', 'cat2', 'link21115', '2023-01-16 15:25:37', NULL);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `yii`.`users` WRITE;
DELETE FROM `yii`.`users`;
INSERT INTO `yii`.`users` (`id`,`login`,`pass`,`role`) VALUES (1, 'Admin', 'ppp', 'admin'),(2, 'user2', 'pass', 'writer');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `yii`.`cat` WRITE;
DELETE FROM `yii`.`cat`;
INSERT INTO `yii`.`cat` (`id`,`title`,`description`,`url`) VALUES (1, 'categoryup', 'descriptionup', 'cat1'),(2, 'cat2', 'description2', 'cat2'),(3, 'cat3', 'description3', 'cat3');
UNLOCK TABLES;
COMMIT;
