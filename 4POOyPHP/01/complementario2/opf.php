<?php
include_once("Suma.php");

include_once("Resta.php");

include_once("Multiplicacion.php");

include_once("Division.php");

define("SUMA","+");
define("RESTA","-");
define("MULTIPLICACION","*");
define("DIVISION","/");

/**
 *
 */
class OperacionFactory
{
  public $obj;

  public function make($simbolo)
  {
    if ($simbolo==constant("SUMA")) {
      $obj = new Suma();
    }elseif ($simbolo==constant("RESTA")) {
      $obj = new Resta();
    }elseif ($simbolo==constant("MULTIPLICACION")) {
      $obj = new Multiplicacion();
    }elseif ($simbolo==constant("DIVISION")) {
      $obj = new Division();
    }
    return $obj;
  }

  
}

 ?>
