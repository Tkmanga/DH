<!DOCTYPE html>
<?php
include("mascota.php");
$perro = new Mascota();
$gato = new Mascota();

$perro->color="dorado";
$perro->nombre="yiyo";
$perro->especie="salchicha";
$perro->edad=24;
$gato->color="blanco";
$gato->nombre="rockyta";
$gato->especie="siames";
$gato->edad=3;
//var_dump($perro,$gato);
//echo "hola soy ". $gato->nombre. " la ". $gato->nombre." ". $gato->color."<br>";
//$gato->jugar();
$gato->describirse();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
