DROP DATABASE IF EXISTS `tchate`;

CREATE DATABASE `tchate`;

use `tchate`;

CREATE TABLE `users` (id INT AUTO_INCREMENT PRIMARY KEY, login VARCHAR(512), mdp VARCHAR(512));

CREATE TABLE `comments` (id INT AUTO_INCREMENT PRIMARY KEY, comment VARCHAR(2555), date VARCHAR(255),
 user VARCHAR(255));


