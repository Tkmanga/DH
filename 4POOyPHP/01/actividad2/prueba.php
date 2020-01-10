<!DOCTYPE html>
<?php
  include_once("black.php");
  include_once("classic.php");
  include_once("gold.php");
  include_once("platinum.php");
  include_once("helpers.php");

//creo las cuentas
  $cuenta1 = new Black(12, 1000, "caja");
  $cuenta2 = new Black(65, 10,"caja");
  $cuenta3 = new Black(99, 0, "caja");


  $cuenta5 = new Classic(12, 0, "caja");
  $cuenta6 = new Classic(45, 0, "caja");
  $cuenta7 = new Classic(54, 0, "caja");

  $cuenta8 = new Gold(97, 0, "caja");
  $cuenta9 = new Gold(89, 0, "caja");
  $cuenta10 = new Gold(56, 0, "caja");

  $cuenta11 = new Platinum(55, 0, "caja");
  $cuenta12 = new Platinum(83, 0, "caja");
  $cuenta13 = new Platinum(79, 0, "caja");

  $cuenta1->saldoEnviar(1000001,"caja");
  //$cuenta1->debitar(400,'caja');
  $cuenta1->debitar(9000,"caja");
  pre($cuenta1);

  $cuenta5->
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
