CREATE DATABASE distribuidor;

use distribuidor;
CREATE TABLE vehiculo(
    id int NOT NULL PRIMARY KEY auto_increment,
    placa varchar(10) NOT NULL,
    marca varchar(25) NOT NULL,
    modelo varchar(25) NOT NULL,
    anio INT NOT NULL,
    color varchar(25) NOT NULL
);


