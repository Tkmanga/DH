<!DOCTYPE html>
<?php

declare(strict_types=1);


include("mascota.php");
include("persona.php");
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
//$gato->describirse();
$dario = new Persona("jose","dario");
$dario->setHobby("Netflix");
$dario->setHobby("Cine");
$dario->setMascota($perro);
$dario->getMascota()->describirse();

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
