<!DOCTYPE html>
<?php
function FunctionName($value='')
{
	// code...
}
 ?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/styles.css">
		<title>Craftsy | Home</title>
	</head>
	<body>

		<!--
Tomando la maqueta de Craftsy ya armada modificar el ejercicio para que los siguientes recursos no esten duplicados sino que deben ser reutilizados:
Header
Footer
Hojas de estilos (Elementos repetidos en <head>)

Agregar además soporte en Craftsy para que los artículos provengan de un Array similar a como lo hicimos en Kitchening.

Modificar el array de artículos para que además tengan un “precio”

Generar una función descripcionLarga que dado un artículo devuelva un String que tenga la descripción del artículo y el precio.

Modificar la maqueta para que en el espacio donde se imprimen las descripciones de los artículos se imprima la descripcionLarga

Agregar un valor booleano a los “articulos” que sea “estaEnOferta”. Si el artículo está en oferta se le hace un 20% de descuento al precio original. Generar una función para calcular los precios finales y mostrarlos en la visualización del usuario.
-->
		<div class="container"> <!-- Contenedor ppal -->
			<header> <!-- Encabezadp -->
				<nav class="main-nav">
					<a href="index.html"><img class="logo" src="img/logo.png" alt="logo craftsy"></a>
					<ul class="menu">
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Tablets</a></li>
						<li><a href="#">Computadoras</a></li>
					</ul>
					<ul class="menu access">
						<li><a href="login.html">login</a></li>
						<li><a href="register.html">registro</a></li>
					</ul>
				</nav>
			</header>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
					<article class="producto"><!-- Contenedor de cada producto -->
						<img class="main-photo" src="img/img-phone-01.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-02.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-03.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-01.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-02.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
					<article class="producto">
						<img class="main-photo" src="img/img-phone-03.jpg" alt="">
						<h2 class="name">Nombre del Producto</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<a class="more" href="#">ver más</a>
					</article>
				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
