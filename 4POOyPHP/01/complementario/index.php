<!DOCTYPE html>
<?php
include_once("rectangulo.php");
include_once("circulo.php");
include_once("triangulo.php");
include_once("rectanguloConRelleno.php");

$rectangulo = new Rectangulo(200,100);
$rectanguloB = new Rectangulo(14,8);
$circulo = new Circulo(16);
$circuloB = new Circulo(16);
$trianguloEsc = new Triangulo(3,2,4);
$trianguloEscB = new Triangulo(3,2,4);
$trianguloI = new Triangulo(3,2,3);
$trianguloIB = new Triangulo(3,2,3);
$trianguloEqui = new Triangulo(5,5,5);
$trianguloEquiB = new Triangulo(5,5,5);
$recRelleno = new RectanguloConRelleno(300,200,"blue");
/*
echo $rectangulo->getPerimetro()."cm<br>";
echo $rectangulo->getArea()."cm<br>";

echo $circulo->getPerimetro()."<br>";
echo $circulo->getArea()."<br>";

echo $trianguloEsc->getPerimetro()."<br>";
echo $trianguloEsc->getArea()."<br>";

echo $trianguloI->getPerimetro()."<br>";
echo $trianguloI->getArea()."<br>";

echo $trianguloEqui->getPerimetro()."<br>";
echo $trianguloEqui->getArea()."<br>";
*/
echo $rectangulo->equals($rectanguloB)."<br>";
echo $circulo->equals($circuloB)."<br>";
echo $trianguloEsc->equals($trianguloEscB)."<br>";
echo $trianguloI->equals($trianguloIB)."<br>";
echo $trianguloEqui->equals($trianguloEquiB)."<br>";

if ($rectangulo === $rectanguloB) {
  echo "a";
}else {
  echo "b";
}
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?= $recRelleno->dibujar(); ?>
  </body>
</html>
