<!DOCTYPE html>
<?php
  function mayor(int $num1,int $num2,int $num3=100)
  {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if ($num1>$num2 && $num1>$num3) {
      return $num1;
    }elseif ($num2>$num3 && $num2>$num1) {
      return $num2;
    }else{
      return $num3;
    }
  }

  function tabla(int $base, int $limite=100)
  {
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $arreglo=[];
    $contador=0;
      for ($i=$base; $i <= $limite ; $i++) {
        $arreglo[]=$i;
        $contador+=1;
      }
    return var_dump($arreglo);
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
    Generar un archivo llamado funciones.php:
    Definir una función mayor() que reciba 3 números y devuelva el mayor.
    Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite.
    Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100.
    Modificar tabla para que si recibe un sólo parámetro utilice el número 100.
   -->

  </body>
</html>
