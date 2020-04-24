CREATE DATABASE tienda;
USE tienda;
CREATE TABLE usuario(
	id_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT);
CREATE TABLE invitado(
	id_usuario INT NOT NULL,
    FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario));
CREATE TABLE registrado(
	dni INT NOT NULL,
    nombre VARCHAR(10),
    apellido VARCHAR(15),
    direccion VARCHAR(30),
    telefono INT,
    id_usuario INT NOT NULL,
    FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario));
CREATE TABLE admin(
	id_usuario INT NOT NULL,
    username VARCHAR(10),
    contra VARCHAR(10),
    FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario));
CREATE TABLE productos(
	id_producto INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(10),
	precio INT,
	descripcion VARCHAR(30),
	imagen VARCHAR(30),
	PRIMARY KEY(id_producto));
CREATE TABLE compra(
	id_compra INT NOT NULL AUTO_INCREMENT,
    fecha DATE,
    cantidad INT,
    importe_total INT,
    id_producto INT NOT NULL,
    id_usuario INT NOT NULL,
    PRIMARY KEY(id_compra), 
    FOREIGN KEY(id_producto) REFERENCES productos(id_producto),
    FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario));