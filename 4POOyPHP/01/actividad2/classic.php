<?php

/**
 *
 */
class Classic extends Cuenta
{

  function __construct($balance)
  {

  }
  public function debitar($valor, $origen)
  {
    $actual = parent::getBalance();
    switch ($origen) {
      case 'cajeroBanelco':
        $valor += ($valor*0.05);
        $actual -= $valor;
        break;
      case 'cajeroLink':
        $valor += ($valor*0,10);
        $actual -= $valor;
        break;
      case 'caja';
        $actual -= $valor;
        break;
      default:
        // code...
        break;
    }
    function setBalance($actual);

  }

  public function saldoEnviar($valor, $origen ){
    $saldoEnviar -= ($valor*0.05);
    function acreditar($saldoEnviar,$origen);
  }
}
 ?>
