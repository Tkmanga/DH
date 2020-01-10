<?php

/**
 *
 */
class Classic extends Cuenta
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
    switch ($origen) {
      case 'cajeroBanelco':
        $valor = $valor-($valor*0.05);
        $actual -= $valor;
        break;
      case 'cajeroLink':
        $valor = $valor-($valor*0.10);
        $actual -= $valor;
        break;
      case 'caja';
        $actual -= $valor;
        break;
      default:
        // code...
        break;
    }
    parent::setBalance($actual);
    $var = recorder($origen);
    parent::setUltimoMovimiento($var);
  }

  public function saldoEnviar($valor, $origen)
  {
    $saldoEnviar = 0;
    $saldoEnviar = $valor - ($valor*0.05);
    parent::acreditar($saldoEnviar,$origen);
  }
}
 ?>
