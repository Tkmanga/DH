<?php
/**
 *
 */
class Black extends Cuenta
{

  function __construct(argument)
  {
    // code...
  }

  public function debitar($valor, $origen)
  {
    $actual = parent::getBalance();
    $actual -= $valor;

}

public function saldoEnviar($valor, $origen ){
  if ($valor>1000000) {
    $saldoEnviar -= ($valor*0.04);
  }
  function acreditar($saldoEnviar,$origen);
}
}

 ?>
