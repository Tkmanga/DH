<?php
/**
 *
 */
include_once("tools.php");
include_once("cliente.php");
include_once("imprimible.php");

abstract class Cuenta 
{

  protected $CBU;
  protected $balance;
  protected $ultimoMovimiento = [];

  function __construct($cbu)
  {
    $this->CBU = $cbu;
  }

    public function getCBU()
    {
        return $this->CBU;
    }


    public function setCBU($CBU)
    {
        $this->CBU = $CBU;

        return $this;
    }

    public function getBalance()
    {
        return $this->balance;
    }


    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }


    public function getUltimoMovimiento()
    {
        return $this->ultimoMovimiento;
    }


    public function setUltimoMovimiento($ultimoMovimiento)
    {
      $this->ultimoMovimiento = $ultimoMovimiento;
      return $this;
    }

    abstract public function debitar($valor,$origen);

    public function acreditar($valor,$origen=Null)
    {
      $balanceAnterior = $this->getBalance();
      $balanceNuevo = $balanceAnterior+$valor;
      $var = recorder($origen);
      $this->setUltimoMovimiento($var);
      $this->setBalance($balanceNuevo);
    }
    public function probando($origen)
    {
      $var = recorder($origen);
      return $var;
    }

    public function traerDatos()
    {
      return "hola";
    }


}


 ?>
