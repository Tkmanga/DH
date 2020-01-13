<?php

include_once("cuenta.php");
/**
 *
 */
class Black extends Cuenta
{

  function __construct($cbu,$balance,$ultimoMovimiento)
  {
    parent::setCBU($cbu);
    parent::setBalance($balance);
    parent::setUltimoMovimiento($ultimoMovimiento);
  }

  public function debitar($valor, $origen)
  {
    $actual = parent::getBalance();
    $actual = $actual-$valor;
    parent::setBalance($actual);

    $var = recorder($origen);
    parent::setUltimoMovimiento($var);
  }

public function saldoEnviar($valor, $origen ){
  $saldoEnviar = 0;
  if ($valor>1000000)
  {
     $saldoEnviar = $valor-($valor*0.04);
     parent::acreditar($saldoEnviar,$origen);
  }else{
      parent::acreditar($saldoEnviar,$origen);
  }

  }

}

 ?>
