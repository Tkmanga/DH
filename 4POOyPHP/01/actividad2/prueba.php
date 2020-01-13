<!DOCTYPE html>
<?php
  include_once("black.php");
  include_once("classic.php");
  include_once("gold.php");
  include_once("platinum.php");
  include_once("helpers.php");
  include_once("cliente.php");
  include_once("Persona.php");
  include_once("PYME.php");
  include_once("Multinacional.php");

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
  //pre($cuenta1);

  $cuenta5->saldoEnviar(10000,"caja");
  //pre($cuenta5);
  $cuenta5->debitar(5000,"cajeroBanelco");
  //pre($cuenta5);

  $cuenta8->saldoEnviar(10000,"caja");
  //pre($cuenta8);
  $cuenta8->saldoEnviar(25001,"caja");
  //pre($cuenta8);
  $cuenta8->debitar(4000,"cajeroBanelco");
  //pre($cuenta8);

  $cuenta11->saldoEnviar(10000,"caja");
  //pre($cuenta11);
  $cuenta11->debitar(2500,"caja");
  //pre($cuenta11);

  $cliente1 = new Persona("jose","tacacho",38285404,"06/05/1994","tacachojose@gmail.com","boldt1234",$cuenta1);
  //pre($cliente1);

  $cliente2 = new PYME("20-12465874-8","monotributo","patagones 2972","01/01/2019","LALA LAND","asd123","lalaland@la.la",$cuenta5);
  //pre($cliente2);

  $cliente3 = new Multinacional("YOUL","06/05/04","youl@hotmail.com","lalala2","98-788564125-4","internacional","calle falsa 123", $cuenta8 );
  //pre($cliente3);

  pre($cliente2->cobrarServicios());


   ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
