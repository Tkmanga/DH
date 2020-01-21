<?php
include_once("Operable.php");
/**
 *
 */
class Division implements Operable
{

  function __construct()
  {

  }

  public function operar($val1,$val2)
  {
    return $val1/$val2;
  }
}

 ?>
