CREATE DATABASE LOJA_VIRTUAL;
USE LOJA_VIRTUAL;

CREATE TABLE `account` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

CREATE TABLE produtos(
  `id_prod` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

CREATE TABLE adm(
  `id_adm` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
 PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;

