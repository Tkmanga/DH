<!DOCTYPE html>
<?php
  include_once("mascota.php");
  include_once("animal.php");
  include_once("persona.php");

  $perroo = new Mascota("Rockyta","Gato");
  $dario = new Persona("jose","paleta");


  function jugarJuntos(Jugable $s1, Jugable $s2)
  {
    $s1->jugar();
    $s2->jugar();
  }
  if ($perroo instanceOf Mascota) {
    echo "Soy una mascotaaa <br>";
  }

  jugarJuntos($perroo,$dario);
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
