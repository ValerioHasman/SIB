create database IF NOT EXISTS `sib_bd`
default character set utf8
default collate utf8_general_ci;

use `sib_bd`;

CREATE TABLE IF NOT EXISTS `Usuario` (
  `usu_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `usu_login` varchar(255) unique NOT NULL,
  `usu_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;