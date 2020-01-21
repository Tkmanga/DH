<?php
include_once("Suma.php");
include_once("opf.php");
/**
 *
 */
class Multiplicacion extends Suma
{

  function __construct()
  {
  }

  public function operar($val1,$val2)
  {
    $resultado=0;
    for ($i=0; $i < $val2 ; $i++) {

      $resultado = parent::operar($resultado,$val1);
    }
    return $resultado;
  }

}

 ?>
