<!DOCTYPE html>
<?php
//incluyo al usuario
include_once("Usuario.php");
//incluyo al celular
include_once("Celular.php");
//incluyo helpers
include_once("helpers.php");

$habilidad1 = new Habilidad ("Trepar",3);
$habilidad2 = new Habilidad("Correr",1);
$habilidad3 = new Habilidad("Nadar",3);
$habilidad4 = new Habilidad("Saltar",5);

$celular = new Celular('Iphone', 'Razr','Tuenti',1569442545,);
$celular2 = new Celular('Blu', 'XT70','Movistar',49113639);


$user = new Usuario("pepe","pepe@gmail.com",123456, $celular,$habilidad1);
$user2 = new Usuario("popi","paleta",123456,$celular2,$habilidad2);
$user->setHabilidades($habilidad4);
$user->setHabilidades($habilidad3);

//var_dump($user->mail);
//var_dump($user->getContrasenia());

pre($user->guardar());
 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
