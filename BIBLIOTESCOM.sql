-- MySQL Script generated by MySQL Workbench
-- Sat May 30 19:36:11 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema BIBLIOTESCOM
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `BIBLIOTESCOM` ;

-- -----------------------------------------------------
-- Schema BIBLIOTESCOM
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BIBLIOTESCOM` DEFAULT CHARACTER SET utf8 ;
USE `BIBLIOTESCOM` ;

-- -----------------------------------------------------
-- Table `BIBLIOTESCOM`.`Alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BIBLIOTESCOM`.`Alumno` (
  `idAlumno` INT NOT NULL AUTO_INCREMENT,
  `boleta` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `paterno` VARCHAR(45) NOT NULL,
  `materno` VARCHAR(45) NOT NULL,
  `semestre` INT NOT NULL,
  `direccion` VARCHAR(80) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `pass` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idAlumno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BIBLIOTESCOM`.`seccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BIBLIOTESCOM`.`seccion` (
  `idseccion` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idseccion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BIBLIOTESCOM`.`Libro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BIBLIOTESCOM`.`Libro` (
  `idlibro` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `autor` VARCHAR(45) NOT NULL,
  `editorial` VARCHAR(45) NOT NULL,
  `idioma` VARCHAR(45) NOT NULL,
  `año` YEAR NOT NULL,
  `edicion` INT NOT NULL,
  `seccion_idseccion` INT NOT NULL,
  `turno` BIT(1) NOT NULL,
  `disponibilidad` BIT(1) NOT NULL,
  PRIMARY KEY (`idlibro`),
  INDEX `fk_Libro_seccion1_idx` (`seccion_idseccion` ASC) VISIBLE,
  CONSTRAINT `fk_Libro_seccion1`
    FOREIGN KEY (`seccion_idseccion`)
    REFERENCES `BIBLIOTESCOM`.`seccion` (`idseccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BIBLIOTESCOM`.`Prestamo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BIBLIOTESCOM`.`Prestamo` (
  `idPrestamo` INT NOT NULL AUTO_INCREMENT,
  `Alumno_idAlumno` INT NOT NULL,
  `Libro_idlibro` INT NOT NULL,
  `fecha_prestamo` DATE NOT NULL,
  `fecha_devolucion` DATE NOT NULL,
  `devuelto` BIT(1) NOT NULL,
  PRIMARY KEY (`idPrestamo`),
  INDEX `fk_Prestamo_Alumno_idx` (`Alumno_idAlumno` ASC) VISIBLE,
  INDEX `fk_Prestamo_Libro1_idx` (`Libro_idlibro` ASC) VISIBLE,
  CONSTRAINT `fk_Prestamo_Alumno`
    FOREIGN KEY (`Alumno_idAlumno`)
    REFERENCES `BIBLIOTESCOM`.`Alumno` (`idAlumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prestamo_Libro1`
    FOREIGN KEY (`Libro_idlibro`)
    REFERENCES `BIBLIOTESCOM`.`Libro` (`idlibro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BIBLIOTESCOM`.`Bibliotecario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BIBLIOTESCOM`.`Bibliotecario` (
  `idBibliotecario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `paterno` VARCHAR(45) NOT NULL,
  `materno` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(80) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `pass` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idBibliotecario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
