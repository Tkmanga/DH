-- use administracion; 

create table usuarios(
	nombre varchar(30), 
    clave varchar(10)
); 

show tables; 

describe usuarios; 

drop table usuarios; 

drop table if exists usuarios; 

insert into usuarios(nombre,clave) values ('marioPerez','marito'); 

select nombre,clave from usuarios;

create table libros (
	titulo varchar(40), 
    autor varchar(20),
    editorial varchar(15),
    precio float,
    cantidad integer
);

insert into libros(titulo, autor, editorial, precio, cantidad) 
	values ('El aleph','Borges','Emece',45.50,100);
insert into libros(titulo, autor, editorial, precio, cantidad) 
	values ('Alicia in wonderland','Lewis carroll','Planeta',25,200); 
insert into libros(titulo, autor, editorial, precio, cantidad) 
	values ('Matematica estas ahì', 'Paenza', 'Planeta',15.8, 200);  
	
select * from libros;
select titulo from libros; 

select * from usuarios where nombre='marioPerez'; 
select * from usuarios where clave='marito'; 

insert into usuarios (nombre, clave) values ('Leonardo','payaso');
insert into usuarios (nombre, clave) values ('MarioPerez','Marito');
insert into usuarios (nombre, clave) values ('Marcelo','bocajunior');
insert into usuarios (nombre, clave) values ('Gustavo','bocajunior');

select nombre, clave from usuarios;
select nombre, clave from usuarios where nombre='Leonardo';
select nombre, clave from usuarios where clave='bocajunior';
select nombre, clave from usuarios where clave='river';


-- ////////////////////////////////////////////////////////////////////////////////////////////


-- ////////////////////////////////////////////////////////////////////////////////////////////

-- ////////////////////////////////////////////////////////////////////////////////////////////
  
-- ////////////////////////////////////////////////////////////////////////////////////////////
