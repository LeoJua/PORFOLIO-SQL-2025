/*
 Description of the database: 
 Create a database for a bussines that manage products, clients.
 Purpose: create a portfolio to share my job habilites
 You can follow me on linkedin: https://www.linkedin.com/in/juanle%C3%B3n-analista-de-datos-y-desarrollador-de-software-/
 Email: juanguillermo.ing@gmail.com   
 	
 */


-- Comand to create
create database management_sales
drop database management_sales


-- Comand to create the table
use management_sales

CREATE TABLE Productos (
ID INT PRIMARY KEY,
Nombre VARCHAR(100), 
Categoría VARCHAR(50),
Precio DECIMAL(10, 2),
Inventario INT
);

CREATE TABLE Clientes (
    ID INT PRIMARY KEY,
    Nombre VARCHAR(100),
    Email VARCHAR(100),
    Ciudad VARCHAR(50)
);

CREATE TABLE Ventas (
    ID INT PRIMARY KEY,
    Cliente_ID INT,
    Producto_ID INT,
    Cantidad INT,
    Fecha DATE,
    FOREIGN KEY (Cliente_ID) REFERENCES Clientes(ID),
    FOREIGN KEY (Producto_ID) REFERENCES Productos(ID)
);

CREATE TABLE Empleados (
    ID INT PRIMARY KEY,
    Nombre VARCHAR(100),
    Posición VARCHAR(50),
    Sueldo DECIMAL(10, 2)
);










