<!DOCTYPE html>
<?php
  include_once("superficie.php");
  include_once("funciones.php");
  $funcionesEjecutadas = 0;

   function laMayorSuperficie(float $val1,float $val3,float $val2)
   {
     global $funcionesEjecutadas;
     $funcionesEjecutadas++;
     return mayor(circulo($val1),circulo($val2),circulo($val3));
   }
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
      Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.
    -->

    <!--
    Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver cuánto vale $funcionesEjecutadas en cada momento. ¿Esto está permitido? ¿Qué sucede?

    En caso de que el ejercicio anterior haya fallado, modificar la variable con la palabra reservada global para que sí funcione.
    -->
    <?= laMayorSuperficie(1,3,2) ?>
    <?= $funcionesEjecutadas?>

    <!--    Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de la cadena: "Me encanta php, a mi también me encanta php!" -->
    <?php echo strpos("I love php, I love php too!","php") ?>
  </body>
</html>
