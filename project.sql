-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema INFX2670
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema INFX2670
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `INFX2670` DEFAULT CHARACTER SET utf8 ;
USE `INFX2670` ;

-- -----------------------------------------------------
-- Table `INFX2670`.`Images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `INFX2670`.`Images` (
  `image_ID` INT NOT NULL AUTO_INCREMENT,
  `user_ID` INT NOT NULL,
  `file_path` VARCHAR(255) NOT NULL,
  `votes` INT NULL DEFAULT 0,
  PRIMARY KEY (`image_ID`),
  UNIQUE INDEX `user_ID_UNIQUE` (`user_ID` ASC),
  UNIQUE INDEX `file_path_UNIQUE` (`file_path` ASC),
  CONSTRAINT `user_ID`
    FOREIGN KEY (`user_ID`)
    REFERENCES `INFX2670`.`Users` (`user_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `INFX2670`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `INFX2670`.`Users` (
  `user_ID` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `image_directory` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`user_ID`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `image_directory_UNIQUE` (`image_directory` ASC),
  CONSTRAINT `user_ID`
    FOREIGN KEY (`user_ID`)
    REFERENCES `INFX2670`.`Images` (`user_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `INFX2670`.`Comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `INFX2670`.`Comments` (
  `comment_ID` INT NOT NULL AUTO_INCREMENT,
  `user_ID` INT NOT NULL,
  `image_ID` INT NOT NULL,
  `comment` VARCHAR(2055) NOT NULL,
  `date` DATE GENERATED ALWAYS AS (NOW()) VIRTUAL,
  PRIMARY KEY (`comment_ID`),
  UNIQUE INDEX `user_ID_UNIQUE` (`user_ID` ASC),
  UNIQUE INDEX `image_ID_UNIQUE` (`image_ID` ASC),
  CONSTRAINT `user_ID`
    FOREIGN KEY (`user_ID`)
    REFERENCES `INFX2670`.`Users` (`user_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `image_ID`
    FOREIGN KEY (`image_ID`)
    REFERENCES `INFX2670`.`Images` (`image_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `INFX2670`.`Tag`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `INFX2670`.`Tag` (
  `tag_ID` INT NOT NULL AUTO_INCREMENT,
  `tag_text` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`tag_ID`),
  UNIQUE INDEX `tag_text_UNIQUE` (`tag_text` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
