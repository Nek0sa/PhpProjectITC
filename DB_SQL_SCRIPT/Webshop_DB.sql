Drop database if exists xampp;
create database xampp;
use xampp;
create table artikel (`artikelid` int,`Bezeichnung` varchar(40),`preis` decimal(19,4),`beschreibung` varchar(40));

Drop database if exists webshop;
CREATE SCHEMA `webshop` ;
USE webshop

CREATE TABLE `adresse` (
                `Adress_id` INT NOT NULL,
                `Straße` VARCHAR(460) NULL DEFAULT NULL,
                `Hausnummer` VARCHAR(8) NULL DEFAULT NULL,
                `Postleitzahl` INT(5) NULL DEFAULT NULL,
                `Ort` VARCHAR(60) NULL DEFAULT NULL,
                PRIMARY KEY (`Adress_id`));

CREATE TABLE `bankkonto` (
                `Konto_ID` INT NOT NULL,
                `IBAN` VARCHAR(22) NULL DEFAULT NULL,
                `BIC` VARCHAR(11) NULL DEFAULT NULL,
                `Bankname` VARCHAR(60) NULL DEFAULT NULL,
                PRIMARY KEY (`Konto_ID`));

CREATE TABLE `benutzer` (
            `E-Mail` VARCHAR(60) NOT NULL,
            `Verkäufer` TINYINT NULL DEFAULT NULL,
            `Vorname` VARCHAR(30) NOT NULL,
            `Name` VARCHAR(30) NOT NULL,
            `Passwort` VARCHAR(60) NOT NULL,
            `Anrede` VARCHAR(4) NOT NULL,
            `Geb-Datum` DATETIME NOT NULL,
            `Adress_ID` INT NOT NULL,
            `Konto_ID` INT NOT NULL,
            `Guthaben` DECIMAL(19,2) NULL DEFAULT NULL,
            PRIMARY KEY (`E-Mail`),
            INDEX `Adress_ID_idx` (`Adress_ID` ASC) VISIBLE,
            INDEX `Konto_ID_idx` (`Konto_ID` ASC) VISIBLE,
            CONSTRAINT `Adress_ID`
                 FOREIGN KEY (`Adress_ID`)
                    REFERENCES `adresse` (`Adress_id`)
                    ON DELETE NO ACTION
                    ON UPDATE NO ACTION,
            CONSTRAINT `Konto_ID`
                FOREIGN KEY (`Konto_ID`)
                    REFERENCES `bankkonto` (`Konto_ID`)
                    ON DELETE NO ACTION
                    ON UPDATE NO ACTION);

CREATE TABLE `artikel` (
            `Artikel_ID` INT NOT NULL,
            `Artikelname` VARCHAR(60) NOT NULL,
            `Preis` DECIMAL(19,2) NOT NULL,
            `Rabatt` DECIMAL(5,2) NULL DEFAULT NULL,
            `Bild` BLOB NULL DEFAULT NULL,
            PRIMARY KEY (`Artikel_ID`));

CREATE TABLE `lager` (
            `Artikel_ID` INT NOT NULL,
            `Anzahl` INT NULL DEFAULT NULL,
            PRIMARY KEY (`Artikel_ID`),
            CONSTRAINT `Artikel_ID`
                FOREIGN KEY (`Artikel_ID`)
                    REFERENCES `artikel` (`Artikel_ID`)
                    ON DELETE NO ACTION
                    ON UPDATE NO ACTION);

CREATE TABLE `produktbeschreibung` (
                        `Artikel_ID` INT NOT NULL,
                        `Beschreibung` TEXT NOT NULL,
                        `Bewertung` INT NULL DEFAULT NULL,
                        `Rezension` TEXT NULL DEFAULT NULL,
                        PRIMARY KEY (`Artikel_ID`),
                         CONSTRAINT `Artikel.ID`
                            FOREIGN KEY (`Artikel_ID`)
                                REFERENCES `artikel` (`Artikel_ID`)
                                ON DELETE NO ACTION
                                ON UPDATE NO ACTION);

CREATE TABLE `warenkorb` (
                `Warenkorb_ID` INT NOT NULL,
                `E-Mail` VARCHAR(60) NOT NULL,
                `Artikel_ID` INT NULL DEFAULT NULL,
                `Anzahl` INT NULL DEFAULT NULL,
                `Preis` DECIMAL(19,2) NULL DEFAULT NULL,
                `Summe` DECIMAL(19,2) NULL DEFAULT 0,
                PRIMARY KEY (`Warenkorb_ID`),
                INDEX `E-Mail_idx` (`E-Mail` ASC) VISIBLE,
                INDEX `Artikel_ID_idx` (`Artikel_ID` ASC) VISIBLE,
                CONSTRAINT `E-Mail`
                    FOREIGN KEY (`E-Mail`)
                        REFERENCES `benutzer` (`E-Mail`)
                        ON DELETE NO ACTION
                        ON UPDATE NO ACTION,
                CONSTRAINT `W_Artikel_ID`
                    FOREIGN KEY (`Artikel_ID`)
                        REFERENCES `artikel` (`Artikel_ID`)
                        ON DELETE NO ACTION
                        ON UPDATE NO ACTION);

CREATE TABLE `rechnung` (
            `Rechnungs_ID` INT NOT NULL,
            `Warenkorb_ID` INT NOT NULL,
            `Zeitpunkt` DATETIME NOT NULL,
            PRIMARY KEY (`Rechnungs_ID`),
            INDEX `Warenkorb_ID_idx` (`Warenkorb_ID` ASC) VISIBLE,
            CONSTRAINT `Warenkorb_ID`
                FOREIGN KEY (`Warenkorb_ID`)
                    REFERENCES `warenkorb` (`Warenkorb_ID`)
                    ON DELETE NO ACTION
                    ON UPDATE NO ACTION);