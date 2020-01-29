use movies_db;
/*Obtener todas las películas (movies) que se realizaron luego del año 2000 (usar release_date).*/
select * from movies
where release_date >= '2000-01-01';
/*Obtener todas las películas (movies) hechas entre el año 2000 y el año 2010 (release_date).*/
select * from movies
where release_date between '2000-01-01' and '2010-01-01';
/*Obtener todos los actores (actors) que no se llamen “Mark”.*/
select * from actors
where first_name != 'Mark';
/*Obtener todos los actores (actors) que se llamen “Mark” o “Sam”.*/
select * from actors 
where first_name = 'Mark' or first_name = 'Sam';
/*Obtener todas las películas (movies) que hayan sido hechas previo al año 2000 o posterior al año 2009 y además tengan id mayor a 10 (usar release_date e id).*/
select * from movies 
where id>10 and (release_date<'2000-01-01' or release_date>'2010-01-01'); 
/*Obtener todos los actores (actors) ordenados alfabéticamente por nombre y en segundo lugar por su apellido (usar fisrt_name y last_name).*/
select * from actors 
order by first_name asc, last_name asc;
/*Obtener todas las películas (movies) ordenadas por la fecha de estreno, desde la más antigua a la más reciente. (usar release_date).*/
select * from movies 
order by release_date asc;
/*Obtener aquellas películas (movies) hechas en el siglo XXI ordenadas por título (usar release_date y title).*/
select * from movies 
where release_date > '2001-01-01' 
order by title; 
/*Obtener únicamente 3 películas (movies), a partir de la película 7 hechas en el siglo XXI (usar release_date).*/
select * from movies 
where release_date > '2001-01-01' 
order by title
limit 3 
offset 7; 
/*Obtener las películas (movies) hechas entre Octubre 1999 y Diciembre 2004, que muestre las películas más nuevas de primero (usar release_date).*/
select * from movies
where release_date between '1999-10-01' and '2004-12-01'
order by release_date desc;
/*Obtener los actores (actors) que el nombre empiece con “HE”’ hasta los que empiezan con “TO”, ordenarlo como desee (usar first_name).*/
select * from actors 
where first_name like 'HE%' or first_name like  'TO%'
order by first_name desc;
/*Obtener las películas (movies) que empiezan con la letra “T”, ordenarlo como desee (usar title).*/
select * from movies 
where title like 'T%'
order by title desc;


/*Obtener las películas (movies) hechas en el mes de Octubre o en el año 1999, ordenar que el año sea el primer ordenamiento y el título de mayor a menor (usar release_date y title).*/
select * from movies 
where release_date = month('%%%%-10-%%'); /*HAY QUE REVISAR COMO FILTRAR POR MES UNICAMENTE*/


/*Obtener los actores (actors) que contengan en el apellido ‘“DE” ó ‘ll’ y en el nombre “A”. Ordenarlo como desee (usar first_name y last_name).*/
select * from actors 
where first_name like '%A%' and last_name like '%DE%' or last_name like '%ll%'
order by first_name;
/*Obtener las películas (movies) que sean de la saga de “Toy Story” y las películas de la saga de “Harry Potter” con duración de 2 horas. Ordenarlas por nombre ascendente y luego por duración en descendente (usar title y length).*/
select * from movies 
where length = 120 and ( title like '%Toy Story%' or title like '%Harry Potter%')  
order by title asc, length desc;
/*Obtener todas las películas (movies) que tengan de rating “8.3”, “9.1” y “9.0”. Ordenarlas como desee (usar rating).*/
select * from movies 
where rating = 8.3 or 9.1 or 9.0 
order by rating desc;
/*Obtener las películas (movies) que no tengan duración de 2 y 2 horas y media. Mostrar en orden ascendente los títulos (usar length y title).*/
select * from movies 
where length!=120 and length !=180 
order by title asc;
/*Obtener los campos “id” como “id_genero”, “name” como “nombre_genero”  de la tabla generos (genres). Ordenarlo por nombre_genero de menor a mayor.*/
select id as id_genero, name as nombre_genero 
from genres 
order by nombre_genero asc;
/*Obtener las películas (movies) y sus géneros (genres), ordenado por nombre de pelicula (usar title).*/
select mov.title, gen.name 
from movies as mov, genres as gen 
where mov.genre_id = gen.id
order by mov.title;
/*Obtener las películas (movies) con sus actores (actors), ordenar por nombre de pelicula y nombre de los actores (usar title y first_name).*/
select mov.title, act.first_name, act.last_name 
from movies as mov, actors as act 
where mov.id = act.favorite_movie_id
order by mov.title asc, act.first_name asc;