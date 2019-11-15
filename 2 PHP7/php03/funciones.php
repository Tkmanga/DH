<?php
public function mayor($num1Usuario, $num2Usuario, $num3Usuario=100)
{
  if ($num1Usuario>$num2Usuario && $num1Usuario>$num3Usuario) {
    return "El mayor es el numero ".$num1Usuario;
  }elseif ($num2Usuario>$num3Usuario) {
    return "El mayor es el numero ".$num2Usuario;
  }else{
    return "El mayor es el numero ".$num3Usuario;
  }
}

public function tabla($numBase,$numLimite)
{
  $arrayNuevo = [];
  $contador = 0;
  for ($i=$numBase; $i<=count($numLimite); $i++) {
    $arrayNuevo[$contador]=$i;
    $contador++;
  }
  return $arrayNuevo;
}

public function FunctionName($value='')
{
  // code...
}
?>
