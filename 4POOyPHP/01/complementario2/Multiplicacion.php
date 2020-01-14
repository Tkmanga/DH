<?php
include_once("Suma.php");
/**
 *
 */
class Multiplicacion extends Suma
{

  function __construct($val1,$val2)
  {
    parent::setVar1($val1);
    parent::setVar2($val2);
  }

  $val1 = parent::getVar1();
  $val2 = parent::getVar2();


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
