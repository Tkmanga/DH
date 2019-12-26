drop table if exists articulos;
create table articulos (
	codigoArt int, 
    nombreArt varchar(20), 
    descripcion varchar(30), 
    precio float,
    cantidad integer 
);

describe articulos; 

 insert into articulos (codigoArt, nombreArt, descripcion, precio,cantidad)
  values (1,'impresora','Epson Stylus C45',400.80,20);
 insert into articulos (codigoArt, nombreArt, descripcion, precio,cantidad)
  values (2,'impresora','Epson Stylus C85',500,30);
 insert into articulos (codigoArt, nombreArt, descripcion, precio,cantidad)
  values (3,'monitor','Samsung 14',800,10);
 insert into articulos (codigoArt, nombreArt, descripcion, precio,cantidad)
  values (4,'teclado','ingles Biswal',100,50);
 insert into articulos (codigoArt, nombreArt, descripcion, precio,cantidad)
  values (5,'teclado','español Biswal',90,50);

select * from articulos;
select nombreArt, descripcion, precio from articulos;
SELECT * FROM articulos
	WHERE nombreArt = 'Impresora'; 
SELECT codigoArt, descripcion, precio from articulos
	WHERE nombreArt = 'teclado'; 
SELECT * FROM articulos 
	WHERE precio >= 500;
SELECT * FROM articulos 
	WHERE cantidad<30; 
SELECT nombreArt, descripcion FROM articulos 
	WHERE precio<>100; 
/*
 Un comercio que vende artículos de computación registra la información de sus 
productos en la tabla llamada "articulos".

1- Elimine la tabla si existe:

 drop table if exists articulos;

2- Cree la tabla "articulos" con los campos necesarios para almacenar los siguientes datos:
 - código del artículo: entero,
 - nombre del artículo: 20 caracteres de longitud,
 - descripción: 30 caracteres de longitud,
 - precio: float.

3- Vea la estructura de la tabla (describe).

4- Ingrese algunos registros:
 insert into articulos (codigo, nombre, descripcion, precio)
  values (1,'impresora','Epson Stylus C45',400.80);
 insert into articulos (codigo, nombre, descripcion, precio)
  values (2,'impresora','Epson Stylus C85',500);
 insert into articulos (codigo, nombre, descripcion, precio)
  values (3,'monitor','Samsung 14',800);

5- Muestre todos los campos de todos los registros.

6- Muestre sólo el nombre, descripción y precio.
*/