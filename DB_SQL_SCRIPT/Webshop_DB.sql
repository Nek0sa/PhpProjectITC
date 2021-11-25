Drop database if exists xampp;
create database xampp;
use xampp;
create table artikel (`artikelid` int,`Bezeichnung` varchar(40),`preis` decimal(19,4),`beschreibung` varchar(40));
