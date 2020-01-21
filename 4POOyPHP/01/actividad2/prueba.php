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
  $cuenta2 = new Black(65, 10000,"caja");
  $cuenta3 = new Black(99, 0, "caja");


  $cuenta5 = new Classic(12, 10000, "caja");
  $cuenta6 = new Classic(45, 0, "caja");
  $cuenta7 = new Classic(54, 0, "caja");

  $cuenta8 = new Gold(97, 0, "caja");
  $cuenta9 = new Gold(89, 10000, "caja");
  $cuenta10 = new Gold(56, 0, "caja");

  $cuenta11 = new Platinum(55, 0, "caja");
  $cuenta12 = new Platinum(83, 10000, "caja");
  $cuenta13 = new Platinum(79, 0, "caja");

  //$cuenta1->saldoEnviar(1000001,"caja");
  //$cuenta1->debitar(400,'caja');
  //$cuenta1->debitar(9000,"caja");
  //pre($cuenta1);

  //$cuenta5->saldoEnviar(10000,"caja");
  //pre($cuenta5);
  //$cuenta5->debitar(5000,"cajeroBanelco");
  //pre($cuenta5);

  //$cuenta8->saldoEnviar(10000,"caja");
  //pre($cuenta8);
  //$cuenta8->saldoEnviar(25001,"caja");
  //pre($cuenta8);
  //$cuenta8->debitar(4000,"cajeroBanelco");
  //pre($cuenta8);

  $cuenta2->saldoEnviar(20000,"caja");
  pre($cuenta2->getBalance());

  //$cuenta11->debitar(2500,"caja");
  //pre($cuenta11);

  $cliente1 = new Persona("jose","tacacho",38285404,"06/05/1994","tacachojose@gmail.com","boldt1234",$cuenta1);

  $clienteClassic = new Persona("pepe","polia",897564525,"01/01/2020","pepe@polia@hotmail.com","ahr123",$cuenta5);

  $clienteGold = new Persona("pepe","asdasd",897564525,"01/01/2019","pepe@polia@hotmail.com","ahr123",$cuenta9);
  $clientePlatinium = new Persona("pepe","polia",897564525,"01/01/2018","pepe@polia@hotmail.com","ahr123",$cuenta12);
  $clienteBlack =  new Persona("pepe","asd",897564525,"02/01/2017","pepe@polia@hotmail.com","ahr123",$cuenta2);
  //pre($cliente1);

  $cliente2 = new PYME("20-12465874-8","monotributo","patagones 2972","01/01/2019","LALA LAND","asd123","lalaland@la.la",$cuenta5);
  //pre($cliente2);

  $cliente3 = new Multinacional("20-12465874-8","Multinacional","patagones 2972","01/01/2019","LALA LAND","asd123","lalaland@la.la",$cuenta5);
  //pre($cliente3);

  //pre($cliente2->cobrarServicios());

  //pre($clienteGold->cobrarServicios());
  //pre($clienteGold->getCuenta()->getBalance());

  //pre($clienteClassic->cobrarServicios());
  //pre($clienteClassic->getCuenta()->getBalance());

  //pre($clientePlatinium->cobrarServicios());
  //pre($clientePlatinium->getCuenta()->getBalance());


  //pre($clienteBlack->cobrarServicios());

  //echo($cliente2->liquidarHaberes($clientePlatinium,1000));
  echo("<br>");
  //echo($cliente2->getCuenta()->getBalance());
// ejecutamos la función pasándole la fecha que queremos
  //echo($cliente);

  echo($cuenta1->mostrar());
  echo("A<br>");
  echo($cuenta5->mostrar());
  echo("<br>");
  echo($cuenta8->mostrar());
  echo("<br>");
  echo($cuenta11->mostrar());
  echo("<br>");
  echo($clienteClassic->mostrar());
  echo("<br>");
  echo($clienteGold->mostrar());
  echo("<br>");
  echo($clientePlatinium->mostrar());
  echo("<br>");
  echo($clienteBlack->mostrar());
  echo("<br>");
  echo($cliente2->mostrar());
  echo("<br>");
  echo($cliente3->mostrar());
  echo("<br>");
   ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
    <iframe width="560" height="315" src="https://www.youtube.com/embed/3Q5IPa88woI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/kFOKNLAJLrw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Qh5Yjmaptbc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/h44Iq-BvP-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/YbLG3nJs2dw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    -->
  </body>
</html>
