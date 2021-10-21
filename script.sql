CREATE DATABASE bdempleados;
USE bdempleados;
CREATE TABLE Empleados(
    IdEmpleados INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    DNI CHAR(9) UNIQUE NOT NULL,
    Nombre VARCHAR(40) NOT NULL,
    Correo VARCHAR(70) NOT NULL,
    Tlfn int(9) NOT NULL
)