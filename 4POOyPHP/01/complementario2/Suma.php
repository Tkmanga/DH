<?php
include_once("Operable.php");
/**
 *
 */
class Suma  implements Operable
{
  function __construct($val1,$val2)
  {
    parent::setVar1($val1);
    parent::setVar2($val2);
  }

  $val1 = parent::getVar1();
  $val2 = parent::getVar2();

  public function operar ($val1, $val2)
  {
    return $val1+$val2;
  }
}
 ?>
