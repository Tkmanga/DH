create database ecommerce;
use ecommerce;
create table usuario (
	idUsuario int primary key auto_increment , 
    nombre varchar (50) not null,
    apellido varchar (50) not null
);

create table productos (
	idProducto int primary key auto_increment, 
    nombre varchar(50) not null,
    precio double not null,
    marca int, 
    categoria int,
    foreign key (marca) references marcas(idMarca),
    foreign key (categoria) references categorias(idCategoria)
);

create table marcas(
	idMarca int primary key auto_increment, 
    nombre varchar(50) not null
);

create table categorias(
	idCategoria int primary key auto_increment, 
    nombre varchar (50) 
);


create table compras ( 
	idCompra int primary key auto_increment, 
    idProducto int, 
    idUsuario int,
    cantidad int     
);


select * from categorias;

insert into marcas (nombre) values ("toyota");
insert into marcas (nombre) values ("peugueot");
insert into marcas (nombre) values ("chery");
insert into marcas (nombre) values ("chevrolet");
insert into marcas (nombre) values ("volvo");

insert into categorias(nombre) values ("a");
insert into categorias(nombre) values ("b");
insert into categorias(nombre) values ("c");
insert into categorias(nombre) values ("d");
insert into categorias(nombre) values ("f");

insert into productos (nombre,precio,marca,categoria) values ("auto a",10000,1,1); 
insert into productos (nombre,precio,marca,categoria) values ("auto b",9000,2,2); 
insert into productos (nombre,precio,marca,categoria) values ("auto c",8000,3,3); 
insert into productos (nombre,precio,marca,categoria) values ("auto d",7000,4,4); 
insert into productos (nombre,precio,marca,categoria) values ("auto e",6000,5,5); 

insert into usuario (nombre, apellido) values ("jose", "tacacho");
insert into usuario (nombre, apellido) values ("dario", "tacacho");
insert into usuario (nombre, apellido) values ("pepe", "tacacho");
insert into usuario (nombre, apellido) values ("pipi", "tacacho");
insert into usuario (nombre, apellido) values ("lulu", "tacacho");

insert into compras (idProducto, idUsuario, cantidad) values (1,1,1); 
insert into compras (idProducto, idUsuario, cantidad) values (2,2,2); 
insert into compras (idProducto, idUsuario, cantidad) values (3,3,1); 
insert into compras (idProducto, idUsuario, cantidad) values (4,4,2);
insert into compras (idProducto, idUsuario, cantidad) values (5,5,1); 

create table Ciudad (
	IDCiudad int primary key, 
    NombreCiudad varchar(50),
    IDprovincia int,
    foreign key (IDprovincia) references Provincia(IDProvincia)
);

create table Provincia (
	IDProvincia int primary key, 
    NombreProvincia varchar (50),
	IDPais int,
    foreign key (IDPais) references Pais(IDPais)
);

create table Pais(
	IDPais int primary key, 
    NombrePais varchar(50) 
);

insert into Pais (IDPais, NombrePais) values (54, "Argentina");
insert into Pais (IDPais, NombrePais) values (598, "Uruguay");
insert into Pais (IDPais, NombrePais) values (34, "España");
insert into Pais (IDPais, NombrePais) values (49, "Alemania");

insert into Provincia (IDProvincia, NombreProvincia, IDPais) values (1,"CABA",54);
insert into Provincia (IDProvincia, NombreProvincia, IDPais) values (5,"Santa Fe",54);
insert into Provincia (IDProvincia, NombreProvincia, IDPais) values (8,"La Pampa",54);
insert into Provincia (IDProvincia, NombreProvincia, IDPais) values (96,"Cataluña",34);
insert into Provincia (IDProvincia, NombreProvincia, IDPais) values (76,"Colonia",598);
insert into Provincia (IDProvincia, NombreProvincia, IDPais) values (77,"Montevideo",598);

insert into ciudad (IDCiudad, NombreCiudad, IDprovincia) values (1,"CABA",1);
insert into ciudad (IDCiudad, NombreCiudad, IDprovincia) values (2,"Rosario",5);
insert into ciudad (IDCiudad, NombreCiudad, IDprovincia) values (3,"Santa Rosa",8);
insert into ciudad (IDCiudad, NombreCiudad, IDprovincia) values (71,"Barcelona",96);
insert into ciudad (IDCiudad, NombreCiudad, IDprovincia) values (12,"Carmelo",75);
insert into ciudad (IDCiudad, NombreCiudad, IDprovincia) values (15,"Montevideo",77); 

alter table usuario 
add Ciudad int;

alter table usuario
add foreign key (Ciudad) references ciudad(IDCiudad); 

update usuario 
set Ciudad = 12 
where idUsuario = 1; 

update usuario 
set Ciudad = 3 
where idUsuario  between 2 and 3; 


select * from usuario;
delete from usuario where Ciudad = 3 limit 1;
delete from ciudad where IDCiudad =3; 

delete from Pais where IDPais = 49;


create table Prueba (
	idPrueba int primary key auto_increment,
    prueba text 
);

insert into Prueba (prueba) values ('asd');
insert into Prueba (prueba) values ('123');
insert into Prueba (prueba) values ('abc');

alter table Prueba 
add comentarios text;

update Prueba 
set comentarios = 'lalala'
where idPrueba != 0; 

select * from Prueba;
ALTER TABLE Prueba 
DROP COLUMN comentarios;

delete from prueba where idPrueba = 1; 

drop table Prueba;