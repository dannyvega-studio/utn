CREATE DATABASE iti;

USE iti;

CREATE TABLE usuario (
id INT NOT NULL AUTO_INCREMENT,
nombre VARCHAR(30),
apellido VARCHAR(30),
correo VARCHAR(45),
telefono VARCHAR(10),
contraseña VARCHAR(16),
PRIMARY KEY (id),
UNIQUE (correo)
)
