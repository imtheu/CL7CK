CREATE DATABASE `Cl7ck`;
USE `Cl7ck`;
CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(60) NOT NULL,
 `email` varchar(80) NOT NULL,
 `password` varchar(255) NOT NULL,
 `signup_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
CREATE TABLE `goals` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `name` varchar(255) NOT NULL,
 `description` text NOT NULL,
 `creation_date` datetime NOT NULL,
 `deadline_date` date NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
CREATE TABLE `tasks` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `description` varchar(255) NOT NULL,
 `status` varchar(50) NOT NULL,
 `date` date NOT NULL,
 `creation_date` date NOT NULL,
 `user_id` int(11) NOT NULL,
 `goal_id` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;