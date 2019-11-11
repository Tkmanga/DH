<?php
$arreglo = [
			0 => [
							"id" => 1,
							"titulo" => "Articulo id 1",
							"descripcion" => "Lorem Ipsum",
							"precio" => 300,
							"imagen" => "images/img-pdto-1.jpg",
							"enOferta" => true
			],

			1 => [
							"id" => 2,
							"titulo" => "Articulo id 2",
							"descripcion" => "Lorem Ipsum",
							"precio" => 500,
							"imagen" => "images/img-pdto-2.jpg",
							"enOferta" => false
			],

			2 => [
							"id" => 3,
							"titulo" => "Articulo 3",
							"descripcion" => "Lorem Ipsum",
							"precio" => 700,
							"imagen" => "images/img-pdto-3.jpg",
							"enOferta" => true
			],

			3 => [
							"id" => 4,
							"titulo" => "Articulo 4",
							"descripcion" => "Lorem Ipsum",
							"precio" => 200,
							"imagen" => "images/img-pdto-1.jpg",
							"enOferta" => false
			],

			4 => [
							"id" => 5,
							"titulo" => "Articulo 5",
							"descripcion" => "Lorem Ipsum",
							"precio" => 600,
							"imagen" => "images/img-pdto-2.jpg",
							"enOferta" => false
			],

			5 => [
							"id" => 6,
							"titulo" => "Articulo 6",
							"descripcion" => "Lorem Ipsum",
							"precio" => 800,
							"imagen" => "images/img-pdto-3.jpg",
							"enOferta" => true
			],

			6 => [
							"id" => 7,
							"titulo" => "Articulo 7",
							"descripcion" => "Lorem Ipsum",
							"precio" => 100,
							"imagen" => "images/img-pdto-1.jpg",
							"enOferta" => false
			],

			7 => [
							"id" => 8,
							"titulo" => "Articulo 8",
							"descripcion" => "Lorem Ipsum",
							"precio" => 400,
							"imagen" => "images/img-pdto-2.jpg",
							"enOferta" => true
			],

			8 => [
							"id" => 9,
							"titulo" => "Articulo 9",
							"descripcion" => "Lorem Ipsum",
							"precio" => 900,
							"imagen" => "images/img-pdto-3.jpg",
							"enOferta" => false
			],

			9 => [
							"id" => 10,
							"titulo" => "Articulo 10",
							"descripcion" => "Lorem Ipsum",
							"precio" => 1000,
							"imagen" => "images/img-pdto-1.jpg",
							"enOferta" => true
			]
];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
<section class="vip-products">
	<?php foreach ($arreglo as $key => $value) {?>
		<article class="product">
			<div class="photo-container">
				<?php foreach ($value as $key2 => $value2): ?>
					<?php if ($key2=="imagen"): ?>
						<img class="photo" src=<?php echo $value2 ?> alt="pdto 02">
						<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
						<a class="zoom" href="#">Ampliar foto</a>
					<?php endif;?>
				<?php endforeach; ?>
			</div>
				<?php foreach ($value as $key2 => $value2): ?>
					<?php if ($key2=="titulo"): ?>
						<h2><?php echo $value2 ?></h2>
					<?php endif;?>
					<?php if ($key2=="descripcion"): ?>
						<p><?php echo $value2 ?></p>
					<?php endif;?>
					<?php if ($key2=="enOferta" && $value2==true): ?>
						<p><strong>Articulo en oferta</strong></p>
					<?php endif;?>
				<?php endforeach; ?>
		</article>
	<?php }; ?>
</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
