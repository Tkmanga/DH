<?php
include_once("Calculadora.php");
include_once("Suma.php");
$calculadora = new Calculadora("/",1,5);
/*echo($calculadora->makeOperacion());*/
echo($calculadora->operar());
echo("<br>");
echo($calculadora->operarEntero());
/*
$suma = new Suma();
echo($suma->operar(1,2));
*/

 ?>
