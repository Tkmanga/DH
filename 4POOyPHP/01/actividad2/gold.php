<?php
/**
 *
 */
class Gold extends Cuenta
{

  function __construct(argument)
  {
    // code...
  }

  public function debitar($valor, $origen)
  {
    $actual = parent::getBalance();
    switch ($origen) {
      case 'cajeroBanelco':
        $actual -= $valor;
        break;
      case 'cajeroLink':
        $valor += ($valor*0.05);
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
  if (!($valor>=25000)) {
    $saldoEnviar -= ($valor*0.05);
  }
  function acreditar($saldoEnviar,$origen);
}
}
 ?>
