<?php
  function FunctionName($numero)
  {
    $multiplicar=0;
    for ($i=1; $i <= 10 ; $i++) {
      $multiplicar = $numero*$i;
      echo $multiplicar."<br>";
    }
  }
  FunctionName(2);
 ?>
