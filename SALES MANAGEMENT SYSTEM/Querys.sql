use management_sales
-- Query to know what is the product that sells more
select t1.Nombre, sum(t1.precio)
from productos as t1
inner join ventas as t2 
on t2.Producto_ID=t1.ID
group by t1.Nombre, t1.precio



-- Monthly sales 

select t1.Nombre, sum(t1.precio), t2.Fecha
from productos as t1
inner join ventas as t2 
on t2.Producto_ID=t1.ID
where t2.Fecha between  '2023-06-01' and '2023-06-30'
group by t1.Nombre, t1.precio, t2.fecha



-- Year sales  (Generate a monthly report of total sales by product)
select t1.Nombre as Nombre_Producto, sum(t1.precio * t2.cantidad) as Total_Ingresos, t2.Fecha
from productos as t1
inner join ventas as t2 
on t2.Producto_ID=t1.ID
where t2.Fecha between  '2024-01-01' and '2024-12-30'
group by t1.Nombre, t1.precio, t2.fecha, t1.categoria
order by t2.Fecha


-- Identify frequent customers or best-selling products.
SELECT 
    c.ID AS Customer_ID,
    c.Nombre AS Customer_Name,
    COUNT(v.ID) AS Total_Transactions,
    SUM(v.Cantidad) AS Total_Products_Bought,
    SUM(v.Cantidad * p.Precio) AS Total_Spent
    
FROM Ventas v
JOIN Clientes c ON v.Cliente_ID = c.ID
JOIN Productos p ON v.Producto_ID = p.ID
GROUP BY c.ID, c.Nombre
ORDER BY Total_Transactions DESC -- Or use Total_Spent DESC for most valuable customers
limit 10;


-- Identify Products with Low Sales:
use management_sales
select 
	p.Nombre,p.ID, SUM(v.cantidad)

from productos p	
join ventas v on v.Producto_ID = p.ID
group by p.Nombre, v.cantidad, p.ID
having SUM(v.cantidad) < 50
order by v.cantidad desc;

-- Top Customers by Month
select c.Nombre, v.fecha, SUM(v.cantidad)
from clientes c
join ventas v on  c.ID = v.Cliente_ID
group by c.Nombre, v.fecha,v.cantidad
order by v.fecha


-- Update
use management_sales 
select * from empleados
select * from empleados where ID = 5
select * from empleados where ID  in (9,15)

update empleados set Sueldo = 250 where ID = 5 

update empleados set Sueldo = 150 where id in (9,15)

-- SELECT TOP 
select TOP 5 * from ventas

-- CREATE VIEW
use management_sales
create view vw_Clientes
as
Select * from Clientes;

select * from vw_Clientes

create view vw_client_city
as 
select * from Clientes
where Ciudad = 'Puyuan'

select * from vw_client_city


alter view vw_client_city
as
select Nombre, Email
from Clientes

select * from vw_client_city

-- INDEX - used to increase the performance of the querys
/*clustered:
nonclustered: 
*/ 

create clustered index 


-- SCHMEA Create 
use management_sales
create schema Cobros;

-- MAX MIN
use management_sales
select id,max(Precio) as Mas_Caro from productos  
group by id,Precio


select min(Precio) as Menor_Precio from productos


-- COUNT, SUM, AVG
select count(*) as Cantidad  from empleados

select sum(sueldo) as Suma_Sueldo from empleados

select avg(sueldo)as Promedio_sueldo from empleados
where Posición = 'Human Resources Manager'


select avg(distinct Sueldo) from empleados



