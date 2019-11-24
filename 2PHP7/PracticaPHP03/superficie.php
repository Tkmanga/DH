<!DOCTYPE html>
<?php

  function triangulo(float $base,float $altura){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return $base*($altura/2);
  }
  function rectangulo(float $base,float $altura){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return $base*$altura;
  }
  function cuadrado(float $base){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    return $base*$base;

  }
  function circulo($radio)
  {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++; 
    return pi()*($radio*$radio);
  }
?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
        Generar un archivo llamado superficie.php:
        Definir una función triangulo() que retorne su superficie.
        Definir una función rectangulo() que retorne su superficie.
        Definir una función cuadrado() que retorne su superficie.
        Utilizando la función pi(), definir una función circulo() que retorne su superficie.

      -->
  </body>
</html>
