/*
1- Elimine la tabla "libros", si existe.
2- Cree una tabla llamada "libros". 
   Debe definirse con los siguientes campos: 
   titulo varchar(20), 
   autor varchar(30),
 y editorial varchar(15)
3- Intente crearla nuevamente. Aparece mensaje de error.
4- Visualice las tablas existentes.
5- Visualice la estructura de la tabla "libros".
6- Elimine la tabla, si existe.
7- Intente eliminar la tabla.
*/
drop table if exists libros; 
create table libros(
	titulo varchar(20),
    autor varchar(30),
    editorial varchar(15),
    precio float 
);
select * from libros;
drop table if exists libros;
drop table libros;

  /*
  5- Ingrese los siguientes registros:
 'El aleph','Borges','Planeta';
 'Martin Fierro','Jose Hernandez','Emece';
 'Aprenda PHP','Mario Molina','Emece';

6- Muestre todos los registros. (select).*/

insert into libros (titulo,autor,editorial,precio) values ('El aleph','Borges','Planeta',12.50);
insert into libros (titulo,autor,editorial,precio) values ('Martin Fierro','Jose Hernandez','Emece',16.00);
insert into libros (titulo,autor,editorial,precio) values ('Aprenda PHP','Mario Molina','Emece',35.40);
insert into libros (titulo,autor,editorial,precio) values ('Cervantes','Borges','Paidos',50.90);

select * from libros; 

select * from libros
	where autor = 'Borges'; 
    
SELECT * FROM libros
	WHERE editorial = 'Emece';
    
SELECT * FROM libros
	WHERE titulo = 'Martin Fierro'; 

select titulo, autor,editorial,precio from libros;

select titulo, autor,editorial,precio from libros where autor<>'Borges';

select titulo, autor,editorial,precio from libros where precio>20;

select titulo,autor,editorial,precio from libros where precio<=30;
