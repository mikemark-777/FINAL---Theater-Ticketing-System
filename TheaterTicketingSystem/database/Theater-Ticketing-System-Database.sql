/*
SQLyog v4.05
Host - 5.6.24-log : Database - theater-ticketing-system-db
*********************************************************************
Server version : 5.6.24-log
*/


create database if not exists `theater-ticketing-system-db`;

USE `theater-ticketing-system-db`;

/*Table structure for table `theater-ticketing-system-db`.`bookedtickets` */

drop table if exists `theater-ticketing-system-db`.`bookedtickets`;

CREATE TABLE `bookedtickets` (
  `reservationID` int(11) NOT NULL AUTO_INCREMENT,
  `movieTitle` varchar(45) DEFAULT NULL,
  `numberOfTicketsAdmitted` varchar(45) DEFAULT NULL,
  `mallOfPreference` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`reservationID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

/*Data for the table `theater-ticketing-system-db`.`bookedtickets` */

insert into `theater-ticketing-system-db`.`bookedtickets` values (1,'Avatar','2','Robinsons Place','2020-12-16'),(2,'InsideOut','2','Robinsons Place','2020-12-16'),(3,'Detective Pikachu','2','Robinsons Place','2020-12-05'),(4,'John Wick 3','3','SM Supermalls','2020-12-30'),(5,'John Wick 3','3','SM Supermalls','2020-12-30'),(6,'John Wick 3','3','SM Supermalls','2020-12-17'),(7,'John Wick 3','3','SM Supermalls','2020-12-17'),(8,'John Wick 3','3','SM Supermalls','2020-12-17'),(9,'John Wick 3','4','SM Supermalls','2020-12-18'),(10,'John Wick 3','3','Robinsons Place','2020-12-11'),(11,'John Wick 3','3','Robinsons Place','2020-12-11'),(12,'John Wick 3','3','Robinsons Place','2020-12-11'),(13,'John Wick 3','5','Robinsons Place','2020-12-02'),(16,'Mortal Engines','2','SM Supermalls','2020-12-23'),(17,'NeverNot LoveYou','4','Robinsons Place','2021-01-01'),(19,'Spiderman','2','Robinsons Place','2020-12-31'),(24,'Avatar','3','Robinsons Place','2020-12-17');

/*Table structure for table `theater-ticketing-system-db`.`user` */

drop table if exists `theater-ticketing-system-db`.`user`;

CREATE TABLE `user` (
  `fullName` varchar(60) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `theater-ticketing-system-db`.`user` */

insert into `theater-ticketing-system-db`.`user` values ('Rocel Batara','rocelbatara@gmail.com','12345678'),('Kyra Vergara','kyravergara@gmail.com','12345678'),('Mike Vinoya','mikevinoya@gmail.com','12345678'),('Danica Castillo','danicacastillo@gmail.com','12345678'),('KZ Ugot','kzugot@gmail.com','12345678'),('Ivee Viloria','iveeviloria@gmail.com','12345678');
