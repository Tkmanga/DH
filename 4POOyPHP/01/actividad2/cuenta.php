<?php
/**
 *
 */
include_once("tools.php");
include_once("cliente.php");


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

    public function acreditar($valor,$origen)
    {
      $this->balance += $valor;
      $var = recorder($origen);
      $this->setUltimoMovimiento($var);
    }

    public function traerDatos()
    {
      return "hola";
    }


}


 ?>
