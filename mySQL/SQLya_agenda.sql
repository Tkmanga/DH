/*
Queremos almacenar los datos de nuestros amigos.
1- Elimine la tabla "agenda" si existe:
*/
drop table if exists agenda; 
/*
2- Cree una tabla llamada "agenda", debe tener los siguientes campos: 
     nombre varchar(20)
     domicilio varchar(30)
     y telefono varchar(11)
*/
use administracion;
/*3- Intente crearla nuevamente. Aparece mensaje de error.*/
create table agenda (
	nombre varchar(20), 
    domicilio varchar(20), 
    telefono varchar(20)
);
/*4- Visualice las tablas existentes (show tables).*/
select * from agenda; 
/*5- Visualice la estructura de la tabla "agenda" (describe agenda).*/
describe agenda; 
/*6- Elimine la tabla, si existe (drop table, if exists).
*/
drop table if exists agenda;
/*7- Intente eliminar la tabla sin la cláusula if exists (drop table agenda). 
   Debe aparecer un mensaje de error cuando no existe la tabla.*/
drop table agenda;

/*
5- Ingrese los siguientes registros:
insert into agenda (nombre, domicilio, telefono) values 
  ('Alberto Mores','Colon 123','4234567');
insert into agenda (nombre, domicilio, telefono) values 
  ('Juan Torres','Avellaneda 135','4458787');

6- Seleccione y mustre todos los registros de la tabla:
 select nombre, domicilio, telefono from agenda;

7- Elimine la tabla "agenda", si existe:
drop table if exists agenda;

8- Intente eliminar la tabla nuevamente, sin especificar "si existe":
drop table agenda;

*/
insert into agenda (nombre, domicilio, telefono) values 
  ('Alberto Mores','Colon 123','4234567');
insert into agenda (nombre, domicilio, telefono) values 
  ('Juan Torres','Avellaneda 135','4458787');
    insert into agenda (nombre, domicilio, telefono) values 
	('Mariana Lopez','Urquiza 333','4545454');
 insert into agenda (nombre, domicilio, telefono) values 
	('Fernando Lopez','Urquiza 333','4545454');
  
  
  drop table if exists agenda;
  drop table agenda;
  
select nombre, domicilio, telefono from agenda;
select * from agenda;
select * from agenda where nombre='Juan Torres'; 
select * from agenda where domicilio='Colon 123'; 
select * from agenda where telefono='4545454';
