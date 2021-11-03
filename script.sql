CREATE DATABASE bdempleados;
USE bdempleados;
CREATE TABLE Empleados(
    IdEmpleados INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    DNI CHAR(9) UNIQUE NOT NULL,
    Nombre VARCHAR(40) NOT NULL,
    Correo VARCHAR(70) NULL,
    Tlfn char(9) NOT NULL
)