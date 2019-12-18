<!DOCTYPE html>
<?php
//incluyo al usuario
include_once("usuario.php");
//incluyo al celular
include_once("celular.php");
//incluyo helpers
include_once("helpers.php");

$celular = new Celular('Iphone', 'Razr','Tuenti',1569442545);
$celular2 = new Celular('Blu', 'XT70','Movistar',49113639);


$user = new Usuario("pepe","pepe@gmail.com",123456, $celular);
$user2 = new Usuario("popi","paleta",123456,$celular2);

//var_dump($user->mail);
//var_dump($user->getContrasenia());

pre($user->llamar($user2,100));

 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
