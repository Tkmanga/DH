/*
  Un videoclub que alquila películas en video almacena la información de sus películas en una tabla
 llamada "peliculas"; para cada película necesita los siguientes datos:
 -nombre, cadena de caracteres de 20 de longitud,
 -actor, cadena de caracteres de 20 de longitud,
 -duración, valor numérico entero.
 -cantidad de copias: valor entero.

1- Elimine la tabla, si existe:
 drop table if exists peliculas;

2- Cree la tabla eligiendo el tipo de dato adecuado para cada campo:
 create table peliculas(
  nombre varchar(20),
  actor varchar(20),
  duracion integer,
  cantidad integer
 ); 
 
3- Vea la estructura de la tabla:
 describe peliculas;

4- Ingrese los siguientes registros:
 insert into peliculas (nombre, actor, duracion, cantidad)
  values ('Mision imposible','Tom Cruise',120,3);
 insert into peliculas (nombre, actor, duracion, cantidad)
  values ('Mision imposible 2','Tom Cruise',180,2);
 insert into peliculas (nombre, actor, duracion, cantidad)
  values ('Mujer bonita','Julia R.',90,3);
 insert into peliculas (nombre, actor, duracion, cantidad)
  values ('Elsa y Fred','China Zorrilla',90,2);

5- Muestre todos los registros:
 select * from peliculas;
*/

  drop table if exists peliculas;
  create table peliculas(
	nombre varchar(20),
    actor varchar(20),
    duracion int, 
    canCopias int
  );
describe peliculas;  
    
  insert into peliculas (nombre, actor, duracion, canCopias) values
	('Mision imposible','Tom Cruise', 120,3);
insert into peliculas (nombre, actor, duracion, canCopias) values 
	('Mision imposible 2', 'Tom Cruise', 180, 2); 
insert into peliculas (nombre, actor, duracion, canCopias) values 
	('Mujer bonita', 'Julia R', 90, 3); 
insert into peliculas (nombre, actor, duracion, canCopias) values 
	('Elsa y Fred', 'China Zorilla', 90, 2); 
    
select * from peliculas;
SELECT * FROM peliculas 
	WHERE duracion <= 90; 
SELECT * FROM peliculas 
	WHERE actor <> 'Tom Cruise'; 
SELECT * FROM peliculas 
	WHERE canCopias > 2; 


/*
5- Realice un "select" mostrando solamente el título y actor de todas las películas:

 select titulo,actor from peliculas;
6- Muestre el título y duración de todas las peliculas.

7- Muestre el título y la cantidad de copias.
*/

select nombre,actor from peliculas;

select nombre, duracion from peliculas;

select nombre, canCopias from peliculas; 