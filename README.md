# CL7CK

CL7CK is a small and simple time management application project

## Purpose

CL7CK was developed for study purposes in order to study CodeIgniter and Bootstrap.

## Getting Started

To run CL7CK, you need to place the CL7CK files in your projects folder on your server/local server and run the sql scripts in your mysql database management system.


### Prerequisites

* [MySQL](https://www.mysql.com/)
* [Apache](https://www.apache.org/)
* [PHP](http://php.net/)

### Installing

To configure the database, you can run the scripts below or run the [database.sql script](https://github.com/imtheu/CL7CK/blob/master/database.sql)

#### Required database: Cl7ck

```
CREATE DATABASE `Cl7ck`;
USE `Cl7ck`;
```

#### Required tables

##### Table users

```
CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(60) NOT NULL,
 `email` varchar(80) NOT NULL,
 `password` varchar(255) NOT NULL,
 `signup_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
```

##### Table goals

```
CREATE TABLE `goals` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `name` varchar(255) NOT NULL,
 `description` text NOT NULL,
 `creation_date` datetime NOT NULL,
 `deadline_date` date NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
```

##### Table tasks

```
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
```

## Built With

* [Codeigniter](https://codeigniter.com/) - The web framework used
* [Bootstrap](https://getbootstrap.com/) - CSS framework