/*
Nos contactan desde DigitalFlix para realizar distintos informes enfocados en su catálogo, con el objetivo de realizar un análisis de mercado y proyectar futuras adquisiciones y despliegue en su público específico. Tomaremos como origen su propia base de datos, a la que nos dan acceso.

Deberemos enviarles el código SQL necesario para que ellos puedan realizar las consultas también en el futuro.

Como equipo tomamos la decisión de realizar las pruebas en WorkBench, para chequear contra la base de datos, si los resultados obtenidos con cada consulta son los esperados.


PRIMERA ETAPA


En este primera etapa, solicitan:


 
Mostrar los actores (actors) y las películas (movies) en las que participaron. Ordenar por nombre de actor.
Mostrar: first_name y title.
 
Mostrar las películas (movies) con sus géneros (genres) si los posee y los géneros con todas las películas que le corresponden, ambas en una sola consulta, sin ordenamiento.
Mostrar: title y name.

Mostrar también este informe utilizando un ordenamiento por título de la película (title), y por nombre del género (name).
Luego viceversa, por nombre del género (name) y por título de película (title).
 


SEGUNDA ETAPA


En este segunda etapa, solicitan:


Mostrar por cada capítulo (episodes) el número de temporada (seasons), el nombre de la serie (series), el género (genres) y la cantidad de actores (actors) que tiene.
 
Mostrar todos los géneros (genres) y el promedio de rating (rating) de sus películas (movies). Considerar solamente las películas con rating mayor a 5.
 
Mostrar todas las series (series) y la cantidad de capítulos (episodes) que se emitieron en el 2016 (usar release_date).
 
Mostrar todas las series (series) y la cantidad de capítulos (episodes) que se emitieron en el año actual (usar release_date).

*/



use movies_db;
/*Mostrar los géneros de las películas (genres), ordenados de mayor a menor por su nombre, con referencia a las películas (movies) utilizando joins.
Solicitan que el informe muestre: name y title.*/
select gen.name, mov.title 
from genres as gen
inner join movies as mov on gen.id = mov.genre_id
order by gen.name asc;

/*Mostrar las películas (movies) con sus géneros (genres) y los actores (actors) que participen en cada una de ellas utilizando joins.
Solicitan que el informe muestre: title, name, first_name y last_name.*/