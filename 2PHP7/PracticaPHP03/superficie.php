
<?php
  function triangulo(float $base,float $altura){
    return $base*($altura/2);
  }
  function rectangulo(float $base,float $altura){
    return $base*$altura;
  }
  function cuadrado(float $base){
    return $base*$base;
  }
  function circulo($radio)
  {
    return pi()*($radio*$radio);
  }
?>
<!DOCTYPE html>
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
      <?php echo circulo(4)  ?>
  </body>
</html>
