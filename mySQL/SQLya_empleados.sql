/*
Una empresa almacena los datos de sus empleados en una tabla "empleados" que guarda los siguientes
 datos: nombre, documento, sexo, domicilio, sueldobasico.

1- Elimine la tabla, si existe:
 drop table if exists empleados;

2- Cree la tabla eligiendo el tipo de dato adecuado para cada campo:
 create table empleados(
  nombre varchar(20),
  documento varchar(8),
  sexo varchar(1),
  domicilio varchar(30),
  sueldobasico float
 );

3- Vea la estructura de la tabla:
 describe empleados;

4- Ingrese algunos registros:
 insert into empleados (nombre, documento, sexo, domicilio, sueldobasico)
  values ('Juan Perez','22345678','m','Sarmiento 123',300);
 insert into empleados (nombre, documento, sexo, domicilio, sueldobasico)
  values ('Ana Acosta','24345678','f','Colon 134',500);
 insert into empleados (nombre, documento, sexo, domicilio, sueldobasico)
  values ('Marcos Torres','27345678','m','Urquiza 479',800);

5- Seleccione todos los registros:
  select * from empleados;

*/

drop table if exists empleados; 

create table empleados (
	nombre varchar (20),
    documento varchar (8),
    sexo varchar (1), 
    domicilio varchar (30),
    sueldoBasico float 
);

describe empleados;

 insert into empleados (nombre, documento, sexo, domicilio, sueldobasico)
  values ('Juan Perez','22345678','m','Sarmiento 123',300);
 insert into empleados (nombre, documento, sexo, domicilio, sueldobasico)
  values ('Ana Acosta','24345678','f','Colon 134',500);
 insert into empleados (nombre, documento, sexo, domicilio, sueldobasico)
  values ('Marcos Torres','27345678','m','Urquiza 479',800);
  
  select * from empleados;
select nombre, documento from empleados; 
select nombre, documento, sueldobasico from empleados; 
